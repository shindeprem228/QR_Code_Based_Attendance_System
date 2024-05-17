<?php session_start();?>
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

    </head>
    <body>
        <?php
            include 'connection/connection.php';

            if(isset($_POST['text']))
            {    
                $enr = $_SESSION['enrollment_mob'];      
                $text = $_POST['text'];
                $enroll = substr($text,0,10);
                $date = substr($text,11,10);
                $day = substr($text,22,3);
                $slot = substr($text,26,6);
                $subject = substr($text,33,3);
                // $teacher = substr($text,30,10);
                $batch = substr($text,37,2);

                $time = date("h:i:s:a");

                $dup = "SELECT * FROM attendance WHERE att_enroll = '$enr' AND att_date = '$date' AND att_subject = '$subject' AND att_slot = '$slot' AND att_batch = '$batch' ";
                $dup1 = mysqli_query($conn,$dup) or die (mysqli_error($conn));

                if(mysqli_num_rows($dup1) > 0)
                {
                    echo "<script>alert('Attendance Already Marked !');</script>";
                    // echo "
                    // <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                    // <div class='modal-dialog'>
                    //     <div class='modal-content'>
                    //     <div class='modal-header'>
                    //         <h5 class='modal-title' id='exampleModalLabel'>Modal title</h5>
                    //         <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    //     </div>
                    //     <div class='modal-body'>
                    //     <p> HELLO WORLD </p>
                    //     </div>
                    //     <div class='modal-footer'>
                    //         <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                    //         <button type='button' class='btn btn-primary'>Save changes</button>
                    //     </div>
                    //     </div>
                    // </div>
                    // </div>";
                    echo "<script>window.location='home1.php';</script>";
                }

                else
                {

                    if(substr($text,0,10) == $_SESSION['enrollment_mob'] and $date == date("Y-m-d"))
                    {
                        

                        $sql = "INSERT INTO attendance (att_enroll,att_date,att_day,att_subject,att_slot,att_batch,att_time,att_status) VALUES ('$enroll','$date','$day','$subject','$slot','$batch','$time','Present') ";
                        $res = mysqli_query($conn,$sql) or die (mysqli_error($conn));
                        echo "<script> alert('Attendance Successful !!!');</script>";
                        echo "<script>window.location='home1.php';</script>";
                    }

                    else
                    {
                        echo "<script> alert('Wrong QR Code !!!');</script>";
                        echo "<script>window.location='home1.php';</script>";
                    }
                }
            }
                    
        ?>
    </body>
</html>