<?php
    error_reporting(0);
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

    
        <title>Add Student</title>
    
        <style>
            td{
                padding:3.5px;
            }

            .card
            {
                margin-top:5em;
            }
            /* input,select
            {
                width:250px;
            } */
        </style>
    
      </head>
<body>

<script>
    function formvalidation()
    {
        var enr = document.forms["addStu"]["stud_enroll"].value;
        if(enr.length != 10)
        {
            alert("Enrollment Number must be compulsary 10 Digits.");
            return false;
        }

        var nm = document.forms["addStu"]["stud_name"].value;
        if(nm == "")
        {
            alert("Enter Name.");
            return false;
        }

        var roll = document.forms["addStu"]["stud_roll"].value;
        if(roll == "")
        {
            alert("Enter Valid Roll no.");
            return false;
        }

        if(roll < 1 || roll > 120)
        {
            alert("Enter Valid Roll no.");
            return false;
        } 
        
        var show = document.forms["addStu"]["show"].value;
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
                        <a class="active" href="teacher_viewstudents.php">
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
            <center><h3>Add New Student</h3></center>
        </div>
        <div class="card-body">
            <center>
            <form name="addStu" action="#" method="POST" onSubmit="return formvalidation()">
                <table>
                    <tr>
                        <td><h5>Enrollment No:</h5></td>
                        <td>
                        <h5><input class="form-control" type="number" name="stud_enroll" id="stud_enroll"></h5>
                        </td>
                    </tr>
                    <tr>
                        <td><h5>Student Name:</h5></td>
                        <td><input class="form-control" type="text" name="stud_name"></td>
                    </tr>
                    <tr>
                        <td><h5>Select Semester:</h5></td>
                        <td><h5><select class="form-select" name="stud_sem"><option value="1">First</option>
                                        <option value="2">Second</option>
                                        <option value="3">Third</option>
                                        <option value="4">Fourth</option>
                                        <option value="5">Fifth</option>
                                        <option value="6">Sixth</option>
                                </select></h5></td>
                    </tr>
                    <tr>
                        <td><h5>Branch</h5></td>
                        <td><h5><select class="form-select" name="stud_branch"><option value="Computer Engineering">Computer Engineering</option>
                                </select></h5></td>
                    </tr>
                    <tr>
                        <td><h5>Enter Shift:</h5></td>
                        <td>
                        <h5><select class="form-select" name="stud_shift"><option value="1">First</option>
                                    <option value="2">Second</option></select></h5>
                        </td>
                    </tr>
                    <tr>
                        <td><h5>Assign Roll No:</h5></td>
                        <td>
                        <h5><input class="form-control" type="number" name="stud_roll"></h5>
                        </td>
                    </tr>
                    <tr>
                        <td><h5>Enter Batch:</h5></td>
                        <td>
                        <h5><select class="form-select" class="form-select" name="stud_batch"><option value="A1">A1</option>
                            <option value="A2">A2</option>
                            <option value="A3">A3</option>
                            <option value="B1">B1</option>
                            <option value="B2">B2</option>
                            <option value="B3">B3</option></select><h5>
                        </td>
                    </tr>

                    

                    <tr>
                        <td><h5>Password:</h5></td>
                        <td>
                        <h5><input class="form-control" type="password" name="stud_pass" id="show"></h5>
                            <!-- <i style="float:left;" class="fa-solid fa-eye"></i> -->

                            <input style="display:inline-block" type="checkbox" onClick="myFun()">
                            <label>Show Password</label>
                        </td>
                    </tr>
                    
                </table>    

                
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

                            $stud_name   = $_POST['stud_name'];
                            $stud_sem   = $_POST['stud_sem'];
                            $stud_branch = $_POST['stud_branch'];
                            $stud_shift  = $_POST['stud_shift'];
                            $stud_roll   = $_POST['stud_roll'];
                            $stud_batch  = $_POST['stud_batch'];
                            $stud_enroll = $_POST['stud_enroll'];
                            $stud_pass  = $_POST['stud_pass'];
                            

                            $sql="INSERT INTO students(stud_name,stud_sem,stud_branch,stud_shift,stud_roll,stud_batch,stud_enroll,stud_pass) VALUES ('$stud_name','$stud_sem','$stud_branch','$stud_shift','$stud_roll','$stud_batch','$stud_enroll','$stud_pass')";
                            // $sql1="INSERT INTO students_mob(stud_enroll,stud_pass) VALUES ('$stud_enroll','$stud_pass')";


                            $res= mysqli_query($conn,$sql) or die (mysqli_error($conn));
                            // $res1= mysqli_query($conn,$sql1) or die (mysqli_error($conn));


                            if($res)
                            {
                            echo"<script>";
                            echo"window.alert('Student Added Successfully....!');";
                            echo"window.location = 'teacher_viewstudents.php';";
                            echo"</script>";
                            }
                            else
                            {
                            echo"<script>";
                            echo"window.alert('Student Not Added...!');";
                            echo"window.location = 'teacher_viewstudents.php';";
                            echo"</script>";
                            }
                        }
            ?>