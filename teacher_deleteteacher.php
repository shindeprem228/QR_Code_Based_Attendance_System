<?php
    include 'connection/connection.php';
    if(isset($_GET['te_id']))
    {
        $sql = "DELETE FROM teachers WHERE teach_id = '".$_GET['te_id']."' ";
        $res = mysqli_query($conn,$sql) or die (mysqli_error($conn));

        

        if($res)
        {
            echo "<script>";
            echo "alert('Teacher Deleted Successfully !!!');";
            echo 'window.location.href="teacher_viewteachers.php";';
            echo "</script>";
        }

        else
        {
            echo "<script>";
            echo "alert('Teacher Not Deleted !!!');";
            echo 'window.location.href="teacher_viewteachers.php";';
            echo "</script>";
        }
    }


?>