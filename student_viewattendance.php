<?php session_start();
    error_reporting(0);
    include 'connection/connection.php';
                          
?> 



<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <link rel="stylesheet" href="css/style.css">
    
        <!-- Bootstrap CSS -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    
         <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh5U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        
        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
        <title>Attendance</title>

        <style>
            td{
                padding:5px;
            }

            td,th
            {
                text-align:center;
                /* border:1px solid black; */
                padding:10px;
            }
            .t
            {
                border:0px solid black;
            }
        </style>
    
      </head>
<body>
<section id="container">
    <!--header start-->
    <header class="header fixed-top clearfix">
    
    <div class="mainhead">
                <center><h1 class="mainhead1">SSVPS BS Deore Polytechnic, Dhule</h1></center>         
    </div> 
    
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar">
            <!-- sidebar menu start-->
            <div style="margin-top:-60px;" class="leftside-navigation">
                <ul class="sidebar-menu" id="nav-accordion">
                <?php 
                    $en = $_SESSION['enrollment'];
                    $sql2 = "SELECT stud_name FROM students WHERE stud_enroll = $en";
                    $res2 = mysqli_query($conn,$sql2);
                    $row2 = mysqli_fetch_array($res2);
                ?>
                <center><h2 class="welcome">Welcome </h2> 
                    <h1 class="disp-name"><?php echo$row2['stud_name'];?></h1>
                    <h1 style="font-size:80px;"><i class="fa-solid fa-user-graduate"></i></h1>
                <h3>   <?php echo $_SESSION['enrollment']?> </h3> </center>
                    
                    <li class="sub-menu">
                        <a href="mkat.php">
                            <i class="fa-solid fa-clipboard-check" style="font-size:25px;"></i>
                            <span style="font-size:x-large; font-weight:light;">Mark Attendance</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a class="active" href="#">
                            <i class="fa fa-book"style="font-size:25px;" aria-hidden="true"></i>
                            <span style="font-size:x-large;"> View Attendance </span>
                        </a>
                        
                    </li>
                    
                    <li class="sub-menu">
                        <a href="student_logout.php">
                            <i class="fa fa-sign-out" style="font-size:25px;"></i>
                            <span style="font-size:x-large;">Log Out</span>
                        </a>
                        
                    </li>
                    
                    
                </ul>            
            </div>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <div id="add-main"> 
        <center>
        <div class="container" style="margin-top:120px;" > 
  
            <form action="#" method="POST">
                    <table>

                   


                    <?php
                            $sql = "SELECT * FROM subjects";
                            $res = mysqli_query($conn,$sql) or die (mysqli_error($conn));
                            $num = mysqli_num_rows($res) ;
                        ?>
                    <th>
                                <select class="form-select" name="subject">
                                    <option value="0"> Select Subject </option>
                                    <?php
                                                for($k=1 ; $k<=$num ; $k++)
                                                {
                                                    $row = mysqli_fetch_array($res);
                                    ?>
                                            <option value="<?php echo $row['sub_abb']?>"><?php echo $row['sub_abb']?></option>
                                    <?php 
                                                }
                                    ?>
                                </th>

                    
                    <th><button style="font-size:15px; margin-left:20px; text-transform:uppercase;" class="btn-lg btn-info" type="submit" name="submit">search</button></th>
                    </table>
            </form>

                <table class="t table table-primary table-striped table-hover tab table-bordered" style="margin-top:30px;">
                <thead>
                    <th>Sr no.</th>
                    <!-- <th>Enrollment no.</th> -->
                    <th>Date</th>
                    <th>Day</th>
                    <th>Subject</th>
                    <th>Slot</th>
                    <th>Batch</th>
                </thead>
                <tbody>
                <?php
                    if(isset($_POST['submit']))
                    {
                        $subject = $_POST['subject'];
                        $enr = $_SESSION['enrollment'];

                        $sql1 = "SELECT * FROM attendance WHERE att_enroll = '$enr' AND att_subject = '$subject'";
                        $res = mysqli_query($conn,$sql1) or die (mysqli_error($conn));
                        $num = mysqli_num_rows($res);

                        $counter = 0;
                    while ($row = mysqli_fetch_array($res)) 
                    {
                        // extract($row);
                ?>
                    <tr>
                        <td><?php echo ++$counter; ?></td>
                        <!-- <td><?php echo $row['att_enroll']; ?></td> -->
                        <td><?php echo $row['att_date']; ?></td>
                        <td><?php echo $row['att_day']; ?></td>
                        <td><?php echo $row['att_subject']; ?></td>
                        <td><?php echo $row['att_slot']; ?></td>
                        <td><?php echo $row['att_batch']; ?></td>
                    </tr>
                
                    <?php } } ?>
        </div>
        </center>
    </div>
</body>

            
               

</html>

