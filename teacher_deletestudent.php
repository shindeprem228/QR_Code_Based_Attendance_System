<?php
    include 'connection/connection.php';
    if(isset($_GET['stu_en']))
    {
        $sql = "DELETE FROM students WHERE stud_enroll = '".$_GET['stu_en']."' ";
        $res = mysqli_query($conn,$sql) or die (mysqli_error($conn));

        // $sql1 = "DELETE FROM students_mob WHERE stud_enroll = '".$_GET['stu_en']."' ";
        // $res1 = mysqli_query($conn,$sql1) or die (mysqli_error($conn));

        // if($res and $res1)
        if($res)
        {
            echo "<script>";
            echo "alert('Student Deleted Successfully !!!');";
            echo 'window.location.href="teacher_viewstudents.php";';
            echo "</script>";
        }

        else
        {
            echo "<script>";
            echo "alert('Student Not Deleted !!!');";
            echo 'window.location.href="teacher_viewstudents.php";';
            echo "</script>";
        }
    }


?>