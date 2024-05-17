<?php
    session_start();
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

        <title> Subjects </title>
    
        <style>
            table
            {
                border:1px solid black;
            }

            td,th
            {
                text-align:center;
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
            <div style="margin-top:-65px;" class="leftside-navigation">
                <ul class="sidebar-menu" id="nav-accordion">
                <center><h2 class="welcome">Welcome Admin</h2> 
                    <h1 style="font-size:80px;"><i class="fa-solid fa-user-gear"></i></h1>
                <h3>   <?php echo $_SESSION['admin']?> </h3> </center>

                    <li class="sub-menu">
                        <a href="teacher_viewattendance.php">
                            <i class="fa fa-clipboard-check" style="font-size:25px;"></i>
                            <span style="font-size:x-large;">View Attendance</span>
                        </a>
                    </li>
                    
                    <li class="sub-menu">
                        <a href="teacher_viewstudents.php">
                            <i class="fa fa-user-graduate" style="font-size:25px;"></i>
                            <span style="font-size:x-large;">Students Details</span>
                        </a>
                    </li>
                    
                    <li class="sub-menu">
                        <a href="teacher_viewteachers.php">
                            <i class="fa fa-chalkboard-user" style="font-size:25px;" aria-hidden="true"></i>
                            <span style="font-size:x-large;">Teachers Details</span>
                        </a>
                        
                    </li>
                    <li class="sub-menu">
                        <a class="active" href="#">
                            <i class="fa fa-book"style="font-size:25px;" aria-hidden="true"></i>
                            <span style="font-size:x-large;"> Subjects Details</span>
                        </a>
                        
                    </li>

                    <li class="sub-menu">
                        <a href="teacher_settimetable.php">
                            <i class="fa-solid fa-table-list" style="font-size:25px;" aria-hidden="true"></i>
                            <span style="font-size:x-large;"> Set Time Table </span>
                        </a>
                    </li>
                    
                    
                    <li class="sub-menu">
                        <a href="teacher_logout.php">
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
        <?php
            include 'connection/connection.php';
            $sql = " SELECT * FROM subjects ORDER BY sub_sem";
            $res = mysqli_query($conn,$sql) or die (mysqli_error($conn));
            $num = mysqli_num_rows($res);

        ?>  
        <center>
            <div class="container" style="margin-top:120px;" > 
                <a href="teacher_addsubjects.php" class="new_btn">+ Add New Subject</a> <br><br> <br>

                <table class=" table table-primary table-striped table-hover tab table-bordered " style="border:1px solid black;">
                    <thead>
                        <th>Subject Code</th>
                        <th>Subject Description</th>
                        <th>Subject Abbrevation</th>
                        <th>Semester</th>
                        <th>Branch</th>
                        <th>Teacher ID</th>
                        
                        
                        <th colspan="2" style="text-align: center;">Action</th>
                    </thead>
                    <tbody>
                        <?php

                        if($num > 0)
                        {
                            while ($row = mysqli_fetch_array($res)) 
                            {
                                // extract($row);
                    ?>
                        <tr>
                        <td><?php echo $row['sub_code']; ?></td>
                        <td><?php echo $row['sub_name']; ?></td>
                        <td><?php echo $row['sub_abb']; ?></td>
                        <td><?php echo $row['sub_sem']; ?></td>
                        <td><?php echo $row['sub_branch']; ?></td>
                        <td><?php echo $row['sub_teacher_id']; ?></td>


                        
                        
                        <!-- <td><a href="admin_update_flight.php?flt_id=<?php echo $flight_id;?>"><i class="fa fa-pencil-square-o" style="color:green;" aria-hidden="true" onClick="return confirm('Are you sure want to update this Flight details ?');" title="Update Flight Details" ></i></a></td>
                        <td><a href="admin_delete_flight.php?flt_id=<?php echo $flight_id;?>"><i class="fa fa-trash-o"         style="color:red;"   aria-hidden="true" onClick="return confirm('Are you sure want to delete this Flight details ?');" title="Delete Flight Details"></i></a></td>-->

                        <!-- <td><a href="#">Update</a></td> -->
                        <td><a onClick="return confirm('Are you sure want to update this subjects details ?');" href="teacher_updatesubject.php?su_code=<?php echo $row['sub_code'];?>"  title="Update Subject Details"><i style="color:green;" class="fa-solid fa-edit"></i></a></td>
                        <td><a onClick="return confirm('Are you sure want to delete this subjects details ?');" href="teacher_deletesubject.php?su_code=<?php echo $row['sub_code'];?>"  title="Delete Subject Details"><i style="color:red;" class="fa-solid fa-trash-can"></i></a></td>
                        <?php } 
                        
                        }
                        
                        else
                        {
                            echo "<tr><td style='text-align:center; color:red;' colspan='8'><h1> No Subjects Added Yet </h1></td></tr>" ;
                        }
                        
                        ?>

                        

                   
                    </tbody>


                </table>
            </div>
        </center>    
   
    </div>
</body>
</html>

