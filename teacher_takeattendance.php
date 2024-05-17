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

    
        <title>Take Attendance</title>
    
        <style>
            td{
                padding:5px;
            }
        </style>
    
      </head>
<body>
<section id="container">
    <!--header start-->
    <header class="header fixed-top clearfix">
    
    <div class="mainhead">
                <center><i><h1 class="mainhead1">SSVPS BS Deore Polytechnic, Dhule</h1></i></center>         
    </div> 
    
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar">
            <!-- sidebar menu start-->
            <div class="leftside-navigation">
                <ul class="sidebar-menu" id="nav-accordion">
                    <li class="sub-menu">
                        <a href="#">
                            <i class="fa fa-clipboard-check" style="font-size:25px;"></i>
                            <span style="font-size:x-large;">View Attendance</span>
                        </a>
                    </li>
                    
                    <li class="sub-menu">
                        <a href="teacher_viewstudents.php">
                            <i class="fa fa-user-graduate" style="font-size:25px;"></i>
                            <span style="font-size:x-large;">Students</span>
                        </a>
                    </li>
                    
                    <li class="sub-menu">
                        <a href="teacher_viewteachers.php">
                            <i class="fa fa-chalkboard-user" style="font-size:25px;" aria-hidden="true"></i>
                            <span style="font-size:x-large;">Teachers</span>
                        </a>
                        
                    </li>
                    <li class="sub-menu">
                        <a href="teacher_viewsubjects.php">
                            <i class="fa fa-book"style="font-size:25px;" aria-hidden="true"></i>
                            <span style="font-size:x-large;"> Subjects </span>
                        </a>
                        
                    </li>
                    <li class="sub-menu">
                        <a  class="active" href="#">
                            <i class="fa fa-calendar-week" style="font-size:25px;"></i>
                            <span style="font-size:x-large; font-weight:light;">Take Attendance</span>
                        </a>
                    </li>
                    
                    <li class="sub-menu">
                        <a href="#">
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
            
    <div class="card">
        <div class="card-header" style="background-color:rgb(1, 183, 255)">
            <center><h3>Take Attendance</h3></center>
        </div>
        <div class="card-body">
            <center>
            <form action="teacher_generateqr.php" method="POST">
                <table>
                    <tr>
                        <td><h5>Today's Date:</h5></td>
                        <td><input type="date" name="att_date"></td>
                    </tr>
                    <tr>
                        <td><h5>Today's Day:</h5></td>
                        <td><h5><select name="att_day"><option value="Monday">Monday</option>
                                        <option value="Tuesday">Tuesday</option>
                                        <option value="Wednesday">Wednesday</option>
                                        <option value="Thursday">Thursday</option>
                                        <option value="Friday">Friday</option>
                                        <option value="Saturday">Saturday</option>
                                </select></h5></td>
                    </tr>

                    <tr>
                    <?php
                            include 'connection/connection.php';
                            $sql = " SELECT * FROM subjects ORDER BY sub_sem ";
                            $res = mysqli_query($conn,$sql) or die (mysqli_error($conn));
                            $num = mysqli_num_rows($res) ; 


                    ?>  
                        <td><h5>Select Subject:</h5></td>
                        <td>
                        <h5><select name="att_subject">
                                    <?php
                                        for($i=1 ; $i<=$num ; $i++)
                                        {
                                            $row = mysqli_fetch_array($res);
                                    ?>
                                    <option value="<?php echo $row['sub_name']?>"><?php echo $row['sub_name']?></option>
                                    <?php 
                                        }
                                    ?>
                            </select></h5>
                        </td>
                    </tr>

                    <tr>
                    <?php
                            $sql1 = " SELECT * FROM teachers ORDER BY teach_id ";
                            $res1 = mysqli_query($conn,$sql1) or die (mysqli_error($conn));
                            $num1 = mysqli_num_rows($res1) ; 


                    ?>  
                        <td><h5>Select Teacher:</h5></td>
                        <td><h5><select name="att_teacher">
                                    <?php
                                        for($j=1 ; $j<=$num1 ; $j++)
                                        {
                                            $row1 = mysqli_fetch_array($res1);
                                    ?>
                                    <option value="<?php echo $row1['teach_name']?>"><?php echo $row1['teach_name']?></option>
                                    <?php 
                                        }
                                    ?>
                                </select></h5>
                        </td>
                    </tr>

                    <tr>
                        <td><h5>Select Time Slot:</h5></td>
                        <td><h5><select name="att_slot"><option value="slot-1">Slot-1 (7:30 AM to 9:30 AM)</option>
                                                           <option value="slot-2">Slot-2 (10:00 AM to 12:00 PM)</option>
                                                           <option value="slot-3">Slot-3 (12:10 PM to 2:10 PM)</option>

                                </select></h5></td>
                    </tr>
                    
                    
                    <tr>
                        <td><h5>Select Batch:</h5></td>
                        <td>
                        <h5><select name="att_batch"><option value="A1">A1</option>
                            <option value="A2">A2</option>
                            <option value="A3">A3</option>
                            <option value="B1">B1</option>
                            <option value="B2">B2</option>
                            <option value="B3">B3</option></select><h5>
                        </td>
                    </tr>

                    
                    
                </table>    

                
                <br>
                <input class="btn btn-lg btn-outline-primary" type="submit" value="GENERATE QR CODE" name="submit">
            </form>
            </center>
        </div>

    </div>
    </div>
</body>
</html>

<?php 
        // include 'connection/connection.php';

        if (isset($_POST['submit']))
        {
            // extract($_POST);

            $att_date   = $_POST['att_date'];
            $att_day   = $_POST['att_day'];
            $att_subject = $_POST['att_subject'];
            $att_teacher  = $_POST['att_teacher'];
            $att_slot   = $_POST['att_slot'];
            $att_batch  = $_POST['att_batch'];
    

                      
        } 
?>
