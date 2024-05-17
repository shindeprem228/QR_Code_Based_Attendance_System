<?php
    session_start();
    include 'connection/connection.php';
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

    
        <title>Add Subject</title>
    
        <style>
            td{
                padding:5px;
            }
        </style>

        <script>
             function formvalidation()
            {
                var sub_code = document.forms["addSub"]["sub_code"].value;
                if(sub_code.length != 5)
                {
                    alert("Subject Code must be of 5 Digits.");
                    return false;
                }

                var sub_name = document.forms["addSub"]["sub_name"].value;
                if(sub_name == "")
                {
                    alert("Enter Subject Description.");
                    return false;
                }

                var sub_abb = document.forms["addSub"]["sub_abb"].value;
                if(sub_abb.length != 3)
                {
                    alert("Subject Abbrevation must be of 3 Digits.");
                    return false;
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
                        <a href="teacher_viewteachers.php">
                            <i class="fa fa-chalkboard-user" style="font-size:25px;" aria-hidden="true"></i>
                            <span style="font-size:x-large;">Teachers Details</span>
                        </a>
                        
                    </li>
                    <li class="sub-menu">
                        <a  class="active" href="teacher_viewsubjects.php">
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
            <center><h3>Add New Subject</h3></center>
        </div>
        <div class="card-body">
            <center>
            <form name="addSub" action="#" method="POST" onSubmit="return formvalidation()">
                <table>
                    <tr>
                        <td><h5>Subject Code:</h5></td>
                        <td><input class="form-control" style="width:250px;" type="number" name="sub_code" placeholder="Enter 5 Digits"></td>
                    </tr>

                    <tr>
                        <td><h5>Subject Description:</h5></td>
                        <td><input class="form-control" style="width:250px;" type="text" name="sub_name"></td>
                    </tr>
                   
                    <tr>
                        <td><h5>Subject Abbrevation:</h5></td>
                        <td><input class="form-control" style="width:250px;" type="text" name="sub_abb" placeholder="Enter 3 Characters"></td>
                    </tr>

                    

                    <tr>
                        <td><h5>Select Semester:</h5></td>
                        <td>
                            <h5>
                                <select class="form-select" style="width:250px;" name="sub_sem"><option value="1">First</option>
                                        <option value="2">Second</option>
                                        <option value="3">Third</option>
                                        <option value="4">Fourth</option>
                                        <option value="5">Fifth</option>
                                        <option value="6">Sixth</option>
                                </select>
                            </h5>
                        </td>
                    </tr>

                    <tr>
                        <td><h5>Select Branch:</h5></td>
                        <td>
                            <h5>
                                <select class="form-select" style="width:250px;" name="sub_branch"><option value="Computer Engineering">Computer Engineering</option>
                                        
                                </select>
                            </h5>
                        </td>
                    </tr>

                    <tr>
                    <?php
                            $sql1 = " SELECT * FROM teachers ORDER BY teach_id ";
                            $res1 = mysqli_query($conn,$sql1) or die (mysqli_error($conn));
                            $num1 = mysqli_num_rows($res1) ; 


                    ?>  
                        <td><h5>Taught By:</h5></td>
                        <td>
                            <h5>
                                <select class="form-select" name="sub_teacher_id">
                                    <?php
                                        for($j=1 ; $j<=$num1 ; $j++)
                                        {
                                            $row1 = mysqli_fetch_array($res1);
                                    ?>
                                    <option value="<?php echo $row1['teach_id']?>"><?php echo $row1['teach_name']?></option>
                                    <?php 
                                        }
                                    ?>
                                </select>
                            </h5>
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

        if (isset($_POST['submit']))
        {
            // extract($_POST);

            $sub_code   = $_POST['sub_code'];
            $sub_name   = $_POST['sub_name'];
            $sub_abb   = $_POST['sub_abb'];
            $sub_sem   = $_POST['sub_sem'];
            $sub_branch   = $_POST['sub_branch'];
            $sub_teacher_id   = $_POST['sub_teacher_id'];

            
            

            $sql="INSERT INTO subjects(sub_code,sub_name,sub_abb,sub_sem,sub_branch,sub_teacher_id) VALUES ('$sub_code','$sub_name','$sub_abb','$sub_sem','$sub_branch','$sub_teacher_id')";

            $res= mysqli_query($conn,$sql) or die (mysqli_error($conn));

            if($res)
            {
              echo"<script>";
              echo"window.alert('Subject Added Successfully....!');";
              echo"window.location = 'teacher_viewsubjects.php';";
              echo"</script>";
            }
            else
            {
              echo"<script>";
              echo"window.alert('Subject Not Added...!');";
              echo"window.location = 'teacher_viewsubjects.php';";
              echo"</script>";
            }
        }
?>
