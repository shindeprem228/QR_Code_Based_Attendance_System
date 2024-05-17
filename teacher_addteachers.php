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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
        <title>Add Teacher</title>
    
        <style>
            td{
                padding:5px;
            }
        </style>

        <script>
            function formvalidation()
            {
                var teach_id = document.forms["addTeach"]["teach_id"].value;
                if(teach_id.length != 2)
                {
                    alert("Teacher id must be compulsary of 2 Digits.");
                    return false;
                }

                var teach_name = document.forms["addTeach"]["teach_name"].value;
                if(teach_name == "")
                {
                    alert("Enter Teacher Name.");
                    return false;
                }

                var show = document.forms["addTeach"]["show"].value;
                if(show.length < 8)
                {
                    alert("Password must be greater than 8 characters");
                    return false;
                }

            }
            function myFun()
            {
                var show = document.getElementById('show');
                if(show.type=='password')
                {
                    show.type='text';
                }
                else
                {
                    show.type='password';
                }
            }
        </script>
    
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
                        <a  class="active" href="teacher_viewteachers.php">
                            <i class="fa fa-chalkboard-user" style="font-size:25px;" aria-hidden="true"></i>
                            <span style="font-size:x-large;">Teachers Details</span>
                        </a>
                        
                    </li>
                    <li class="sub-menu">
                        <a href="teacher_viewsubjects.php">
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
            
    <div class="card">
        <div class="card-header" style="background-color:rgb(1, 183, 255)">
            <center><h3>Add New Teacher</h3></center>
        </div>
        <div class="card-body">
            <center>
            <form name="addTeach" action="#" method="POST" onSubmit="return formvalidation()">
                <table>
                    <tr>
                        <td><h5>Teacher ID:</h5></td>
                        <td><input class="form-control" style="width:250px;" type="number" name="teach_id" placeholder="Enter 2 Digits"></td>
                    </tr>

                    <tr>
                        <td><h5>Teacher Name:</h5></td>
                        <td><input class="form-control" style="width:250px;" type="text" name="teach_name" placeholder="First        Middle         Last "></td>
                    </tr>

                    <tr>
                        <td><h5>Education:</h5></td>
                        <!-- <td><input style="width:250px;" type="text" name="teach_edu"></td> -->
                        <td>
                            <select class="form-select" name="teach_edu">
                                <option value="B.E / B.Tech">B.E / B.Tech</option>
                                <option value="M.E / M.Tech">M.E / M.Tech</option>
                                <option value="Ph.D">Ph.D</option>

                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td><h5>Designation:</h5></td>
                        <!-- <td><input style="width:250px;" type="text" name="teach_des"></td> -->
                        <td>
                            <select class="form-select" name="teach_des">
                                <option value="Lecturer">Lecturer</option>
                                <option value="Senior Lecturer">Senior Lecturer</option>
                                <option value="Selection Grade Lecturer">Selection Grade Lecturer</option>
                                <option value="Head Of Department">Head Of Department</option>

                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td><h5>Branch</h5></td>
                        <td><h5><select class="form-select" name="teach_branch"><option value="Computer Engineering">Computer Engineering</option>
                                </select>
                            </h5>
                        </td>
                    </tr>
                   
                   

                    <tr>
                        <td><h5>Password:</h5></td>
                        <td>
                        <h5><input class="form-control" type="password" name="teach_pass" id="show"></h5>
                            <input style="display:inline-block" type="checkbox" onClick="myFun()">
                            <label>Show Password</label>

                        </td>
                    </tr>
                    
                </table>    

                
                <br>
                <input class="btn btn-outline-success" type="submit" value="SUBMIT" name="submit">
                <input class="btn btn-outline-danger" type="reset" value="RESET" name="reset" style="margin-left:30px">

            </form>
            </center>
        </div>

    </div>
    </div>
</body>
</html>

<?php 
        include 'connection/connection.php';

        if (isset($_POST['submit']))
        {
            // extract($_POST);

            $teach_id   = $_POST['teach_id'];
            $teach_name   = $_POST['teach_name'];
            $teach_edu   = $_POST['teach_edu'];
            $teach_des   = $_POST['teach_des'];
            $teach_branch   = $_POST['teach_branch'];
            $teach_pass = $_POST['teach_pass'];
            
            

            $sql="INSERT INTO teachers(teach_id,teach_name,teach_edu,teach_des,teach_branch,teach_pass) VALUES ('$teach_id','$teach_name','$teach_edu','$teach_des','$teach_branch','$teach_pass')";

            $res= mysqli_query($conn,$sql) or die (mysqli_error($conn));    

            if($res)
            {
              echo"<script>";
              echo"window.alert('Teacher Added Successfully....!');";
              echo"window.location = 'teacher_viewteachers.php';";
              echo"</script>";
            }
            else
            {
              echo"<script>";
              echo"window.alert('Teacher Not Added...!');";
              echo"window.location = 'teacher_viewteachers.php';";
              echo"</script>";
            }
        }
?>
