<?php
    include 'connection/connection.php';
    if(isset($_GET['su_code']))
    {
        $sql = "DELETE FROM subjects WHERE sub_code = '".$_GET['su_code']."' ";
        $res = mysqli_query($conn,$sql) or die (mysqli_error($conn));

        

        if($res)
        {
            echo "<script>";
            echo "alert('Subject Deleted Successfully !!!');";
            echo 'window.location.href="teacher_viewsubjects.php";';
            echo "</script>";
        }

        else
        {
            echo "<script>";
            echo "alert('Subject Not Deleted !!!');";
            echo 'window.location.href="teacher_viewsubjects.php";';
            echo "</script>";
        }
    }


?>