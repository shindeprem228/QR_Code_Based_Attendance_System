<?php

    session_start();
    // error_reporting(0);
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

    $currtime = date("H:i:s");
    // $currtime = "12:10:00" ;
    // $day = 'thu';


    if($currtime >= "07:30:00" and $currtime < "09:30:00")
    {
        $slot = "slot-1";
    }
    elseif($currtime >= "10:00:00" and $currtime < "12:00:00")
    {
        $slot = "slot-2";
    }
    elseif($currtime >= "12:10:00" and $currtime < "14:10:00")
    {
        $slot = "slot-3";
    }

    $currentYear = date('Y');
$nextYear = $currentYear +1 ;
$lastTwoDigits = substr($nextYear, -2);
$tt_year = $currentYear.'-'.$lastTwoDigits;
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

    
        <title>QR Code</title>
    
        <style>
            .card
            {
                margin-top:6em;
            }
            td{
                padding:5px;
            }
            .fa
            {
                /* margin-left:-7em; */
                display:inline;
                padding-right:1em;
                color:black;
            }
            a
            {
                text-decoration:none;
            }
            .fa:hover
            {
                color:white;
                transition:0.3s ease;
            }
            /* .mainhead1
            {
                margin-left:100px;
            } */
        </style>
    
      </head>
<body>
<section id="container">
    <!--header start-->
    <header class="header fixed-top clearfix">
    
    <div class="mainhead">
                <center><h1 class="mainhead1"><a href="mkat.php"><i class="fa fa-circle-arrow-left"></i></a>SSVPS BS Deore Polytechnic, Dhule</h1></center>         
    </div> 
    
    </header>
    <!--header end-->
    <div id="add-main">   
    <div class="card qrcard">
        
        <div class="card-header" style="background-color:rgb(1, 183, 255)">
            <center><h3>Generated QR Code</h3></center>
        </div>
        <div class="card-body">
            <center>
                <br>
                <div id="qrcode"></div>
                <br>
                <form action="#" method="POST">
                    <input class="btn btn-lg btn-outline-primary" type="submit" name="check" value="CHECK">
                </form>
                <br>

                <?php
                    if(isset($_POST['check']))
                    {
                        $enr1 = $_SESSION['enrollment'];      
                        $dt = date("Y-m-d");

                        $sql3 = "SELECT stud_sem , stud_batch , stud_name FROM students WHERE stud_enroll = '$enr1' ";
                        $res3 = mysqli_query($conn,$sql3) or die (mysqli_error($conn));
                        $num3 = mysqli_num_rows($res3) ;                                

                            for($i=1 ; $i<=$num3 ; $i++)
                            {
                                $row3 = mysqli_fetch_array($res3);
                                $stu_sem = $row3['stud_sem'] ;
                                $stu_batch = $row3['stud_batch'] ;
                                $stu_name = $row3['stud_name'] ;


                                // $day1 = echo "<script> document.getElementById('att_day').value </script>";
                                // echo $day1 ;
                                $sql4 = "SELECT tt_sub FROM timetable WHERE tt_sem = '$stu_sem' AND tt_batch = '$stu_batch' AND tt_slot = '$slot' AND tt_day = '$day'  AND tt_year = '$tt_year' ";
                                $res4 = mysqli_query($conn,$sql4) or die (mysqli_error($conn));
                                $num4 = mysqli_num_rows($res4) ;
                                $row4 = mysqli_fetch_array($res4);
                                $sub = $row4['tt_sub'];
                            }

                        $dup = "SELECT * FROM attendance WHERE att_enroll = '$enr1' AND att_date = '$dt' AND att_subject = '$sub' AND att_slot = '$slot' AND att_batch = '$stu_batch' ";
                        $dup1 = mysqli_query($conn,$dup) or die (mysqli_error($conn));

                        // $enr1
                        

                        
                        if(mysqli_num_rows($dup1) > 0)
                        {
                ?>
                            <h4 class="text-warning">  <?php echo $stu_name?> </h4>
                            <h3 class="text-success">Your Attendance Is Successfully Marked ! </h3>
                <?php   }

                        else
                        {
                ?>
                            <h4 class="text-warning">  <?php echo $stu_name?> </h4>
                            <h3 class="text-danger">Your Attendance Is Not Marked Yet !! </h3>
                <?php   }
                    }
                ?>
                <!-- <h4 class="text-warning">  <?php echo $sub?> </h4> -->

            </center>
        </div>

    </div>
    </div>
</body>
</html>

<script src="js/qrcode.min.js"></script>
<script>
   var enrollment = localStorage.getItem("aenrollment");
   var date = localStorage.getItem("adate");
   var day = localStorage.getItem("aday");
//    var teacher = localStorage.getItem("ateacher");
   var slot = localStorage.getItem("aslot");
   var subject = localStorage.getItem("asubject");
   var batch = localStorage.getItem("abatch");




   var comb = enrollment+" "+date+" "+day+" "+slot+" "+subject+" "+batch;

   localStorage.setItem("combqr",comb);
 
   // alert(comb);

   var qrcode = new QRCode(document.getElementById("qrcode"));
   qrcode.makeCode(comb);

</script>

<!-- <?php
    if(isset($_POST['check']))
    {
        $enr1 = $_SESSION['enrollment'];      
        $dt = date("Y-m-d");

        $sql3 = "SELECT stud_sem , stud_batch FROM students WHERE stud_enroll = '$enr1' ";
        $res3 = mysqli_query($conn,$sql3) or die (mysqli_error($conn));
        $num3 = mysqli_num_rows($res3) ;
        
        

             for($i=1 ; $i<=$num3 ; $i++)
             {
                 $row3 = mysqli_fetch_array($res3);
                 $stu_sem = $row3['stud_sem'] ;
                 $stu_batch = $row3['stud_batch'] ;

                 // $day1 = echo "<script> document.getElementById('att_day').value </script>";
                 // echo $day1 ;
                 $sql4 = "SELECT tt_sub FROM timetable WHERE tt_sem = '$stu_sem' AND tt_batch = '$stu_batch' AND tt_slot = '$slot' AND tt_day = '$day' ";
                 $res4 = mysqli_query($conn,$sql4) or die (mysqli_error($conn));
                 $num4 = mysqli_num_rows($res4) ;
                 $row4 = mysqli_fetch_array($res4);
                 $sub = $row4['tt_sub'];
             }

        $dup = "SELECT * FROM attendance WHERE att_enroll = '$enr1' AND att_date = '$dt' AND att_subject = '$sub' AND att_slot = '$slot' AND att_batch = '$stu_batch' ";
        $dup1 = mysqli_query($conn,$dup) or die (mysqli_error($conn));
        if(mysqli_num_rows($dup1) > 0)
        {
            echo "<script>alert('Attendance Marked !');</script>";
        }

        else
        {
            echo "<script>alert('Attendance Not Marked !');</script>";
        }
    }
?>
 -->
