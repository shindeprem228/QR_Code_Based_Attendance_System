<?php
    session_start();
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

        <!-- Font Awesome -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    
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

        <title> Attendance</title>
    
        <style>
            table
            {
                /* border:1px solid black; */
            }
            td,th
            {
                text-align:center;
                /* border:1px solid black; */
                padding:10px;
            }
            .t
            {
                border:1px solid black;
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
                    $id1 = $_SESSION['id'];
                    $sql2 = "SELECT teach_name FROM teachers WHERE teach_id = $id1";
                    $res2 = mysqli_query($conn,$sql2);
                    $row2 = mysqli_fetch_array($res2);
                ?>
                <center><h2 class="welcome">Welcome </h2> 
                    <h1 class="disp-name"><?php echo$row2['teach_name'];?> </h1>
                    <h1 style="font-size:80px;"><i class="fa-solid fa-chalkboard-user"></i></h1>
                <h3>  Teacher ID: <?php echo $_SESSION['id']?> </h3> </center>
                    <li class="sub-menu">
                        <a class="active" href="#">
                            <i class="fa fa-clipboard-check" style="font-size:25px;"></i>
                            <span style="font-size:x-large;">View Attendance</span>
                        </a>
                    </li>
                    
                    <!-- <li class="sub-menu">
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
                            <span style="font-size:x-large;"> Subjects</span>
                        </a>
                        
                    </li>

                    <li class="sub-menu">
                        <a href="teacher_settimetable.php">
                            <i class="fa-solid fa-table-list" style="font-size:25px;" aria-hidden="true"></i>
                            <span style="font-size:x-large;"> Set Time Table </span>
                        </a>
                    </li> -->
                    
                    <li class="sub-menu">
                        <a href="t_logout.php">
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
                    <th><span>Select Start Date:</span><input class="form-control" type="date" name="start_date"></th>
                    <th><span>Select End Date:</span><input class="form-control" type="date" name="end_date"></th>

                    <?php
                            $id = $_SESSION['id']; 
                            $sql1 = "SELECT * FROM subjects WHERE sub_teacher_id = '$id' ";
                            $res1 = mysqli_query($conn,$sql1) or die (mysqli_error($conn));
                            $num1 = mysqli_num_rows($res1) ;
                    ?>
                    <th><br>
                                <select class="form-select" name="subject">
                                    <option value="0"> Select Subject </option>
                                    <?php
                                                for($k=1 ; $k<=$num1 ; $k++)
                                                {
                                                    $row1 = mysqli_fetch_array($res1);
                                    ?>
                                            <option value="<?php echo $row1['sub_abb']?>"><?php echo $row1['sub_abb']?></option>
                                    <?php 
                                                }
                                    ?>
                                </th>

                    <th><br><select class="form-select" name="batch">
                                <option value="0"> Select Batch </option>
                                <option value="A1">A1</option>
                                <option value="A2">A2</option>
                                <option value="A3">A3</option>
                                <option value="A_Div">A Division</option>
                                <option value="B1">B1</option>
                                <option value="B2">B2</option>
                                <option value="B3">B3</option>
                                <option value="B_Div">B Division</option>

                    </select></th>

                    <!-- <th>
                                <select class="form-select" name="sem"><option value="1">First</option>
                                        <option value="2">Second</option>
                                        <option value="3">Third</option>
                                        <option value="4">Fourth</option>
                                        <option value="5">Fifth</option>
                                        <option value="6">Sixth</option>
                                </select>
                    </th> -->

                    <th><br><button style="font-size:15px; margin-left:20px; text-transform:uppercase;" class="btn-lg btn-info" type="submit" name="submit">search</button></th>
                    </table>
                </form>
                <br><br>

               
                <?php
                    if (isset($_POST['submit']))
                    {
                        $start_date = $_POST['start_date'];
                        $end_date = $_POST['end_date'];
                        // $slot = $_POST['slot'];
                        $batch = $_POST['batch'];
                        $subject = $_POST['subject'];
                ?>

                <table class="table table-bordered">
                    <tr>
                        <td colspan="4">
                            <b> Attendance </b>
                        </td>
                    <tr>

                    <tr>
                        <td>
                            <b>Subject</b>
                        </td>
                        <td>
                            <?php echo $subject; ?>
                        </td>
                        <td>
                            <b>Period</b>
                        </td>
                        <td>
                            <b>From</b>
                            <?php echo $start_date; ?>
                            <b>To</b>
                            <?php echo $end_date; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <b>Faculty</b>
                        </td>
                        <td>
                            <?php echo $row2['teach_name']; ?>
                        </td>
                        <td>
                            <b>Batch</b>
                        </td>
                        <td>
                            <?php echo $batch; ?>
                        </td>
                    </tr>
                    </table>

                    <table class="t table table-primary table-striped table-hover tab table-bordered" style="margin-top:30px;">
                <thead>
                <th>Sr No.</th>

                <th>Enrollment no.</th>
                <th>Name</th>
                <th>Date</th>
                <th>Slot</th>
                <th>Batch</th>
                <th>QR Code Scanned @</th>
                <!-- <th>Status</th> -->

                </thead>
                <tbody>
                    <?php
                    if($batch == 'A1' or $batch == 'A2' or $batch == 'A3' or $batch == 'B1' or $batch == 'B2' or $batch == 'B3')
                    {

                        $sql = "SELECT * FROM attendance WHERE att_date BETWEEN '$start_date' AND '$end_date' AND att_subject = '$subject' AND att_batch = '$batch' ORDER BY att_date ";
                        $res = mysqli_query($conn,$sql) or die (mysqli_error($conn));
                        $num = mysqli_num_rows($res);

                        $counter = 0;
                        while ($row = mysqli_fetch_array($res)) 
                        {
                                $enrl = $row['att_enroll'];
                                $sql5 = "SELECT stud_name FROM students WHERE stud_enroll = '$enrl' ";
                                $res5 = mysqli_query($conn,$sql5);
                        ?>
                            <tr>
                                <td><?php echo ++$counter; ?></td>
                                <td><?php echo $row['att_enroll']; ?></td>
                                <?php
                                    while ($row5 = mysqli_fetch_array($res5)) 
                                    {
                                ?>
                                    <td><?php echo $row5['stud_name']; ?></td>
                                
                                <?php 
                                }?>
                                <td><?php echo $row['att_date']; ?></td>
                                <td><?php echo $row['att_slot']; ?></td>
                                <td><?php echo $row['att_batch']; ?></td>
                                <td><?php echo $row['att_time']; ?></td>
                                <!-- <td class="text-success"><?php echo $row['att_status']; ?></td> -->
                            </tr>
                
                <?php } } 

                    if($batch == 'A_Div')
                    {
                                $sql3 = "SELECT * FROM attendance WHERE att_date BETWEEN '$start_date' AND '$end_date' AND att_subject='$subject' AND att_batch IN (select att_batch from attendance where att_batch = 'A1' OR att_batch = 'A2' OR att_batch = 'A3') ";
                                // $sql3 = "SELECT * FROM attendance WHERE att_date BETWEEN '$start_date' AND '$end_date' AND att_subject = '$subject' AND att_batch = 'A1' OR att_batch = 'A2' OR att_batch = 'A3' ORDER BY att_date ";
                                // $sql3 = "SELECT * FROM attendance WHERE att_date BETWEEN '$start_date' AND '$end_date' AND att_subject = '$subject' AND att_batch IN('A1','A2','A3') AND  ORDER BY att_date ";
                                $res3 = mysqli_query($conn,$sql3) or die (mysqli_error($conn));
                                $num3 = mysqli_num_rows($res3);

                                // echo $num3;

                                $counter = 0;
                            while ($row3 = mysqli_fetch_array($res3)) 
                            {
                                $enrl = $row3['att_enroll'];
                                $sql6 = "SELECT stud_name FROM students WHERE stud_enroll = '$enrl' ";
                                $res6 = mysqli_query($conn,$sql6);                        ?>
                            <tr>
                                <td><?php echo ++$counter; ?></td>
                                <td><?php echo $row3['att_enroll']; ?></td>
                                <?php
                                    while ($row6 = mysqli_fetch_array($res6)) 
                                    {
                                ?>
                                    <td><?php echo $row6['stud_name']; ?></td>
                                
                                <?php 
                                }?>
                                <td><?php echo $row3['att_date']; ?></td>
                                <td><?php echo $row3['att_slot']; ?></td>
                                <td><?php echo $row3['att_batch']; ?></td>
                                <td><?php echo $row3['att_time']; ?></td>
                                <!-- <td><?php echo $row3['att_status']; ?></td> -->

                            </tr>

              <?php } } 
                        // echo "$start_date";
                        // echo "I m here";
                         
                        elseif($batch == 'B_Div')
                        //elseif ($batch == 'B1' or $batch == 'B2' or $batch == 'B3')
                        {


                            $sql4 = "SELECT * FROM attendance WHERE att_date BETWEEN '$start_date' AND '$end_date' AND att_subject='$subject' AND att_batch IN (select att_batch from attendance where att_batch = 'B1' OR att_batch = 'B2' OR att_batch = 'B3') ";
                                // $sql4 = " SELECT * FROM attendance WHERE att_date BETWEEN '$start_date' AND '$end_date' AND att_subject='$subject' AND att_batch IN ('B1','B2','B3') AND  ORDER BY att_date";
                                // $sql4 = "SELECT * FROM attendance WHERE att_date BETWEEN '$start_date' AND '$end_date' AND att_subject = '$subject' AND att_batch = 'B1' OR att_batch = 'B2' OR att_batch = 'B3' ORDER BY att_date ";

                            
                              
                                $res4 = mysqli_query($conn,$sql4) or die (mysqli_error($conn));
                                $num4 = mysqli_num_rows($res4);



                                $counter = 0;

                            while ($row4 = mysqli_fetch_array($res4)) 
                            {
                                $enrl = $row4['att_enroll'];
                                $sql7 = "SELECT stud_name FROM students WHERE stud_enroll = '$enrl' ";
                                $res7 = mysqli_query($conn,$sql7);                        ?>
                            <tr>
                                <td><?php echo ++$counter; ?></td>
                                <td><?php echo $row4['att_enroll']; ?></td>
                                <?php
                                    while ($row7 = mysqli_fetch_array($res7)) 
                                    {
                                ?>
                                    <td><?php echo $row7['stud_name']; ?></td>
                                
                                <?php 
                                }?>
                                <td><?php echo $row4['att_date']; ?></td>
                                <td><?php echo $row4['att_slot']; ?></td>
                                <td><?php echo $row4['att_batch']; ?></td>
                                <td><?php echo $row4['att_time']; ?></td>
                                <!-- <td class="text-success"><?php echo $row4['att_status']; ?></td> -->

                            </tr>
            <?php }  }

                        
                        }
                    
                 ?>
                </tbody>
                </table>

            </div>
        </center>    
   
    </div>
</body>
</html>

