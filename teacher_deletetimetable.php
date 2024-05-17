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

    
        <title>Set Time Table</title>
    
        <style>
            td{
                padding:3px;
            }
            input
            {
                width:150px;
                text-align:center;
            }
            /* .card-header
            {
                color: rgb(0, 0, 0);
            } */

            .card
            {
                width: 60em;
                margin-left: 0em;
                margin-top: 0em;
                /* border: 2px solid black; */
            }

            td
            {
                /* border:2px solid black; */
                text-align:center;
                padding:5px;
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
                        <a href="teacher_viewsubjects.php">
                            <i class="fa fa-book"style="font-size:25px;" aria-hidden="true"></i>
                            <span style="font-size:x-large;"> Subjects Details</span>
                        </a>
                        
                    </li>
                    
                    <li class="sub-menu">
                        <a class="active" href="teacher_settimetable.php">
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
    <center> 
    <div class="container" style="margin-top:120px;" > 
 
    


    <div class="card">
        <div class="card-header" style="background-color:rgb(1, 183, 255)">
            <center><h3>Delete Time Table</h3></center>
        </div>
        <div class="card-body">
            <center>
            <form action="#" method="POST">
                <table>
                <tr>
                        
                        <td>
                            <h5>
                                Select Semester :
                        </td>
                        <td>

                                <select class="form-select" name="semester"><option value="1">First</option>
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
                        
                        <td>
                            <h5>
                                Select Batch :
                        </td>
                        <td>
                                <select class="form-select" name="batch"><option value="A1">A1</option>
                                        <option value="A2">A2</option>
                                        <option value="A3">A3</option>
                                        <option value="B1">B1</option>
                                        <option value="B2">B2</option>
                                        <option value="B3">B3</option>
                                </select>
                            </h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>
                                Select Academic Year :
                        </td>
                        <td>
                                <select class="form-select" name="year">
                                        <option value="2021-22">2021-22</option>
                                        <option value="2022-23">2022-23</option>
                                        <option value="2023-24">2023-24</option>
                                        
                                </select>
                            </h5>
                        </td>
                    </tr>
                </table>    

                <br><br>

                
                <input onClick="return confirm('Are you sure want to delete this Time Table ?');" class="btn btn-outline-success" type="submit" value="DELETE" name="submit">
                <input class="btn btn-outline-danger" type="reset" value="RESET" name="reset" style="margin-left:30px">

            </form>
            </center>
            </div>
        </div>

    </div>
    </center>
    </div>
</body>
</html>

<?php
    if(isset($_POST['submit']))
    {   
        $semester = $_POST['semester'];
        $batch = $_POST['batch'];
        $year = $_POST['year'];

        $sql = "DELETE FROM timetable WHERE tt_sem = '$semester' AND tt_batch = '$batch' AND tt_year = '$year' ";
        $res = mysqli_query($conn,$sql) or die (mysqli_error($conn));;

        if($res)
        {
            echo "<script>";
            echo "alert('Timetable Deleted Successfully !!!');";
            echo 'window.location.href="teacher_settimetable.php";';
            echo "</script>";
        }

        else
        {
            echo "<script>";
            echo "alert('No Such Timetable Available !!!');";
            echo 'window.location.href="teacher_settimetable.php";';
            echo "</script>";
        }
    }
?>


            
