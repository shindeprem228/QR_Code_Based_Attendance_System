<?php
session_start();
include 'connection/connection.php';

$en = $_SESSION['enrollment_mob'];
$sql = "SELECT stud_name FROM students WHERE stud_enroll = $en";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.11/dist/vue.min.js"></script>
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

    <title>Scan QR Code</title>
    <style>
        #preview{
                width:50%;
                height:10%;
                border:1px solid gray;
                
                /* border:2px solid black; */
                margin-top:3rem;
                padding:0px;
            }

        body
        {
            background-color:lightgray;
            height:100vh;
        }

        @media screen and (max-width: 600px) {
                
            .header
            {
                width: 40%;
            }
            
            .mainhead1{
                /* font-size:vw; */
                
                height:10rem;
                font-size:3rem;
                margin-top:0px; 
                color:white; 
                /* font-family: cursive; */
                overflow:hidden;
            }
                
            #preview{
            width:50%;
            height:10%;
            border:4px solid white;
            
            /* border:2px solid black; */
            margin-top:3rem;
            padding:0px;
            }

            #time-out{
                width:50%;
                height:10%;
                font-size:50px; 
                /* color:red; */
                margin-top:5rem;
                padding:0px;
            }

            form
            {
                width:100%;
            }

            
            
            
        }
    </style>
    <?php
    if (!isset($_SESSION['enrollment_mob'])) {
        header('location:student_login_mob.php');
    }
    ?>
</head>
<body>
    <header class="header fixed-top clearfix">
        <div class="mainhead">
            <center><h1 class="mainhead1" style="margin-top:0px;">SSVPS BS Deore Polytechnic, Dhule</h1></center>
        </div>
        <a class="btn btn-outline-dark" style="font-size:15px; margin-right:2em; margin-top:-2em; margin-bottom:0.5em; ; float:right" href="student_logout_mob.php"> LOG OUT </a>
    </header>

    <center><h1 style="margin-top:120px; font-size:50px; color:#e5e5e5; text-shadow:2px 2px 1px black;    font-family: sans-serif; line-height:60px; color: white;">Welcome <br> <?php echo$row['stud_name'];?></h1></center>

    <?php
    $currtime = date("H:i:s");

    if (($currtime >= "07:30:00" && $currtime < "07:35:00") || ($currtime >= "10:00:00" && $currtime < "10:05:00") || ($currtime >= "12:10:00" && $currtime < "12:15:00")) {
    ?>
        <center><video id="preview"></video></center>
        <form action="insert.php" method="POST">
            <input class="form-control" style="width:1000px; margin-top:150px" type="text" name="text" id="text">
        </form>

        <script>
        let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });

        Instascan.Camera.getCameras()
            .then(function (cameras) {
                if (cameras.length > 0) {
                    scanner.start(cameras[0]);
                } else {
                    console.error('No cameras found.');
                }
            })
            .catch(function (error) {
                console.error(error);
            });

        scanner.addListener('scan', function (content) {
            document.getElementById('text').value = content;
            document.forms[0].submit();
        });
        </script>

    <?php
    } else {
    ?>

        <center>
            <h1 class="text-danger" id="time-out">Time Out !!</h1>
            <form>
                <input class="form-control" style="width:1000px; margin-top:350px" type="text" name="t">
            </form>
        </center>

    <?php
    }
    ?>

</body>
</html>
