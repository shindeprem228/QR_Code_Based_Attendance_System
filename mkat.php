<?php session_start();
    error_reporting(0);
                            include 'connection/connection.php';
                            $dayOfWeek = date("l");

                            if($dayOfWeek == "Monday")
                            {
                                $day = 'mon';
                            }
                            elseif($dayOfWeek == "Tuesday")
                            {
                                $day = 'tue';
                            }
                            elseif($dayOfWeek == "Wednesday")
                            {
                                $day = 'wed';
                            }
                            elseif($dayOfWeek == "Thursday")
                            {
                                $day = 'thu';
                            }
                            elseif($dayOfWeek == "Friday")
                            {
                                $day = 'fri';
                            }
                            elseif($dayOfWeek == "Saturday")
                            {
                                $day = 'sat';
                            }
                            else
                            {
                                $day = 'sun';
                            }
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

    
        <title>Mark Attendance</title>

        <script>
            function passvalues()
            {
                var enrollment =  <?php echo $_SESSION['enrollment']?> ;
                localStorage.setItem("aenrollment",enrollment);

                var date = document.getElementById("att_date").value;
                localStorage.setItem("adate",date);

                var day = document.getElementById("att_day").value;
                // var day = "mon";
                localStorage.setItem("aday",day);

                var subject = document.getElementById("att_subject").value;
                localStorage.setItem("asubject",subject);

                // var teacher = document.getElementById("att_teacher").value;
                // localStorage.setItem("ateacher",teacher);

                var slot = document.getElementById("att_slot").value;
                // var slot1 = <?php echo '$slot' ?>;
                // var slot = "slot-3";
                localStorage.setItem("aslot",slot);

                var batch = document.getElementById("att_batch").value;
                localStorage.setItem("abatch",batch);




                

                return true;
            }


        </script>
    
        <style>
            td{
                padding:5px;
            }
            .card
            {
                margin-top:7em;
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
                        <a  class="active" href="#">
                            <i class="fa-solid fa-clipboard-check" style="font-size:25px;"></i>
                            <span style="font-size:x-large; font-weight:light;">Mark Attendance</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="student_viewattendance.php">
                            <i class="fa fa-book" style="font-size:25px;" aria-hidden="true"></i>
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
            
    <div class="card">
        <div class="card-header" style="background-color:rgb(1, 183, 255)">
            <center><h3>Mark Attendance </h3></center>
        </div>
        <div class="card-body">
            <center>
            <form action="makeqr.php">
                <table>
                    <tr>
                        <td><h5>Enrollment No.:</h5></td>
                        <td><input class="form-control" disabled type="text" value="<?php echo $_SESSION['enrollment']?>" ></td>
                    </tr>
                    <tr>
                        <td><h5>Today's Date:</h5></td>
                        <?php $dt = date("Y-m-d");?>
                        <td><input class="form-control" disabled type="date" id="att_date" name="att_date" value="<?php echo $dt?>" ></td>
                    </tr>
                    <tr>
                        <td><h5>Today's Day:</h5></td>
                        <!-- <td><h5><select id="att_day" name="att_day"><option value="Mon">Monday</option>
                                        <option value="Tue">Tuesday</option>
                                        <option value="Wed">Wednesday</option>
                                        <option value="Thu">Thursday</option>
                                        <option value="Fri">Friday</option>
                                        <option value="Sat">Saturday</option>
                                </select></h5></td> -->
                        <td> <input class="form-control" disabled type="text" name="att_day" id="att_day" value="<?php echo $day ?>"> </td>
                        <!-- <td> <input class="form-control" disabled type="text" name="att_day" id="att_day" value="thu"> </td> -->

                    </tr>

    

                

                    <tr>
                    <?php
                            $sql1 = " SELECT * FROM teachers ORDER BY teach_id ";
                            $res1 = mysqli_query($conn,$sql1) or die (mysqli_error($conn));
                            $num1 = mysqli_num_rows($res1) ; 


                    ?>  
                        <!-- <td><h5>Select Teacher:</h5></td>
                        <td><h5><select id="att_teacher" name="att_teacher">
                                    <?php
                                        for($j=1 ; $j<=$num1 ; $j++)
                                        {
                                            $row1 = mysqli_fetch_array($res1);
                                    ?>
                                    <option value="<?php echo $row1['teach_id']?>"><?php echo $row1['teach_name']?></option>
                                    <?php 
                                        }
                                    ?>
                                </select></h5>
                        </td>
                    </tr>

                    <tr> -->
                        <?php
                            $currtime = date("H:i:s");
                            // $currtime = "12:10:00" ;
                            // $tm = "08:22:59" ;
                            // $day = 'thu';
                        ?>
                        <td><h5>Time Slot:</h5></td>
                        <!-- <h4><?php echo $currtime;?></h4> -->
                        <!-- <h4><?php echo date_default_timezone_get();?></h4> -->

                        <td><h5><select class="form-control" disabled id="att_slot" name="att_slot">
                            <?php 
                                if($currtime >= "07:30:00" and $currtime < "09:30:00")
                                {
                                    $slot = "slot-1";
                            ?>
                            <option id="att_slot1" value="slot-1">Slot-1 (7:30 AM to 9:30 AM)</option>
                            <?php 
                                }
                                elseif($currtime >= "10:00:00" and $currtime < "12:00:00")
                                {
                                    $slot = "slot-2";

                            ?>

                            <option id="att_slot1" value="slot-2">Slot-2 (10:00 AM to 12:00 PM)</option>
                            <?php 
                                }
                            
                                elseif($currtime >= "12:10:00" and $currtime < "14:10:00")
                                {
                                    $slot = "slot-3";

                            ?>
                            <option id="att_slot1" value="slot-3">Slot-3 (12:10 PM to 2:10 PM)</option>
                            <?php 
                                }
                            
                                else
                                {
                            ?>
                            <option value="0">OUT OF WORKING HOURS !!!</option>
                            <?php 
                                }
                            ?>    

                                </select></h5></td>
                    </tr>
                    
                    <!-- <h5><?php echo $slot;?></h5> -->

                    <tr>
                    <?php
                            
                        ?>
                    <?php
                            $sql = " SELECT * FROM subjects ORDER BY sub_sem ";
                            $res = mysqli_query($conn,$sql) or die (mysqli_error($conn));
                            $num = mysqli_num_rows($res) ; 

                            $enrol = $_SESSION['enrollment'];
                            $sql3 = "SELECT stud_sem , stud_batch FROM students WHERE stud_enroll = '$enrol' ";
                            $res3 = mysqli_query($conn,$sql3) or die (mysqli_error($conn));
                            $num3 = mysqli_num_rows($res3) ; 

                    ?>  
                        <td><h5>Subject:</h5></td>
                        <td>
                        <h5><select class="form-control" disabled id="att_subject" name="att_subject">
                                    <?php
                                        
                                        $currentYear = date('Y');
                                        $nextYear = $currentYear +1 ;
                                        $lastTwoDigits = substr($nextYear, -2);
                                        $tt_year = $currentYear.'-'.$lastTwoDigits;

                                       
                                        // echo "<script> alert('$formatted') </script>";
                                        // $formattedYearRange = $currentYear . '-' . str_pad($nextYearLastTwoDigits, 2, '0', STR_PAD_LEFT);
                                        for($i=1 ; $i<=$num3 ; $i++)
                                        {
                                            $row3 = mysqli_fetch_array($res3);
                                            $stu_sem = $row3['stud_sem'] ;
                                            $stu_batch = $row3['stud_batch'] ;
                                            
                                            // $day1 = echo "<script> document.getElementById('att_day').value </script>";
                                            // echo $day1 ;
                                            
                                            // $sql4 = "SELECT tt_sub FROM timetable WHERE tt_sem = '$stu_sem' AND tt_batch = '$stu_batch' AND tt_slot = '$slot' AND tt_day = '$day' ";  
                                            $sql4 = "SELECT tt_sub FROM timetable WHERE tt_sem = '$stu_sem' AND tt_batch = '$stu_batch' AND tt_slot = '$slot' AND tt_day = '$day' AND tt_year = '$tt_year' ";  

                                            $res4 = mysqli_query($conn,$sql4) or die (mysqli_error($conn));
                                            $num4 = mysqli_num_rows($res4) ;
                                            
                                            $row4 = mysqli_fetch_array($res4);
                                            $sub = $row4['tt_sub'] ;

                                    ?>
                                    
                                    <option value="<?php echo $sub?>"><?php echo $sub?></option>
                                    <?php 
                                        }
                                    ?>
                            </select></h5>
                        </td>
                    </tr>
                    
                    <tr>
                        <?php
                            $enrol = $_SESSION['enrollment'];
                            $sql2 = "SELECT stud_batch FROM students WHERE stud_enroll = '$enrol' ";
                            $res2 = mysqli_query($conn,$sql2) or die (mysqli_error($conn));
                            $num2 = mysqli_num_rows($res2) ; 
                        ?>
                        <td><h5>Batch:</h5></td>
                        <td>
                            <h5><select class="form-control" disabled id="att_batch" name="att_batch">
                                    <?php
                                            for($k=1 ; $k<=$num2 ; $k++)
                                            {
                                                $row2 = mysqli_fetch_array($res2);
                                    ?>
                                        <option value="<?php echo $row2['stud_batch']?>"><?php echo $row2['stud_batch']?></option>
                                        <?php 
                                            }
                                    ?> 
                                    
                                    

                                    <!-- <option value="A2">A2</option>
                                    <option value="A3">A3</option>
                                    <option value="B1">B1</option>
                                    <option value="B2">B2</option>
                                    <option value="B3">B3</option> -->
                                </select>
                            
                        </td>
                    </tr>

                    
                    
                </table>    

                
                <br>
                <?php 
                   if($currtime >= "07:30:00" and $currtime < "07:35:00" or $currtime >= "10:00:00" and $currtime < "10:05:00" or $currtime >= "12:10:00" and $currtime < "12:15:00" and $day!='sun')
                   {
                ?>
                    <input class="btn btn-lg btn-outline-primary" type="submit" value="SUBMIT" name="submit" onclick="passvalues()">
                
                <?php
                   }
                
                   elseif($sub==0)
                   {
                ?>
                    <h3 class="text-danger" style="margin-bottom:20px;"> No Practical assigned to this slot </h3>
                    <input disabled class="btn btn-lg btn-outline-primary" type="submit" value="SUBMIT" name="submit" onclick="passvalues()">
                <?php
                   }
                else
                   {
                ?>
                    <h3 class="text-danger" style="margin-bottom:20px;"> Time Out !</h3>
                    <input disabled class="btn btn-lg btn-outline-primary" type="submit" value="SUBMIT" name="submit" onclick="passvalues()">
                <?php
                   }
                ?>
            </form>

            <h1 id="demo"></h1>

            </center>
        </div>

    </div>
    </div>
</body>

            
               

</html>

