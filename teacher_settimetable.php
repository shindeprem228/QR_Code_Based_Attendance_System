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
                        <a class="active" href="#">
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
 
    
    <a href="teacher_deletetimetable.php" class="new_btn">- Delete Time Table </a> <br><br><br>


    <div class="card">
        <div class="card-header" style="background-color:rgb(1, 183, 255)">
            <center><h3>Set Time Table</h3></center>
        </div>
        <div class="card-body">
            <center>
            <form action="#" method="POST">
                <table>
                    <tr colspan="3">
                    <td>
                        <h5>
                            Select Academic Year:
                    </td>

                    <td>
                        <select class="form-select" name="tt_year">
                            <option value="2021-22">2021-22</option>
                            <option value="2022-23">2022-23</option>
                            <option value="2023-24">2023-24</option>
                        </select>
                     </h5>
                    </td>
                    </tr>
                    <br>
                    <th>
                        <td>
                            <h5>
                                Select Semester :
                            </h5>
                        </td>
                        <td>
                            <h5>
                                <select class="form-select" name="tt_sem"><option value="1">First</option>
                                        <option value="2">Second</option>
                                        <option value="3">Third</option>
                                        <option value="4">Fourth</option>
                                        <option value="5">Fifth</option>
                                        <option value="6">Sixth</option>
                                </select>
                            </h5>
                        </td>

                        <td>
                            <h5>
                                Select Batch :
                        </td>
                        <td>
                                <select class="form-select" name="tt_batch"><option value="A1">A1</option>
                                        <option value="A2">A2</option>
                                        <option value="A3">A3</option>
                                        <option value="B1">B1</option>
                                        <option value="B2">B2</option>
                                        <option value="B3">B3</option>
                                </select>
                            </h5>
                        </td>
                        
                    </th>
                    <tr>
                    <td><h5></h5></td>
                        <td><h5><input class="form-control" readonly="true" type="text" name="tt_slot1" value="slot-1"></h5></td>
                        <td><h5><input class="form-control" readonly="true" type="text" name="tt_slot2" value="slot-2"></h5></td>
                        <td><h5><input class="form-control" readonly="true" type="text" name="tt_slot3" value="slot-3"></h5></td>  
                    </tr>
                    <tr>
                        <td><h5>
                                <input class="form-control" style="width:60px;" readonly="true" name="tt_mon" value="mon">
                            </h5>
                        </td> 

                        

                                              
                        <td><h5>
                        <?php
                        include 'connection/connection.php';
                            $sql = "SELECT * FROM subjects";
                            $res = mysqli_query($conn,$sql) or die (mysqli_error($conn));
                            $num = mysqli_num_rows($res) ;
                        ?>
                                <select class="form-select" name="tt_mon_s1">
                                    <option value="0"> Select Subject </option>
                                    <?php
                                                for($k=1 ; $k<=$num ; $k++)
                                                {
                                                    $row = mysqli_fetch_array($res);
                                    ?>
                                            <option value="<?php echo $row['sub_abb']?>"><?php echo $row['sub_abb']?></option>
                                    <?php 
                                                }
                                    ?>    
                                </select>
                            </h5>
                        </td> 
                        
                        <td><h5>
                        <?php
                            $sql = "SELECT * FROM subjects";
                            $res = mysqli_query($conn,$sql) or die (mysqli_error($conn));
                            $num = mysqli_num_rows($res) ;
                        ?>
                                <select class="form-select" name="tt_mon_s2">
                                <option value="0"> Select Subject </option>
                                    <?php
                                                for($k=1 ; $k<=$num ; $k++)
                                                {
                                                    $row = mysqli_fetch_array($res);
                                    ?>
                                            <option value="<?php echo $row['sub_abb']?>"><?php echo $row['sub_abb']?></option>
                                    <?php 
                                                }
                                    ?>                               
                                </select>
                            </h5>
                        </td> 
                       
                        <td><h5>
                        <?php
                            $sql = "SELECT * FROM subjects";
                            $res = mysqli_query($conn,$sql) or die (mysqli_error($conn));
                            $num = mysqli_num_rows($res) ;
                        ?>
                                <select class="form-select" name="tt_mon_s3">
                                <option value="0"> Select Subject </option>

                                <?php
                                                for($k=1 ; $k<=$num ; $k++)
                                                {
                                                    $row = mysqli_fetch_array($res);
                                ?>
                                            <option value="<?php echo $row['sub_abb']?>"><?php echo $row['sub_abb']?></option>
                                <?php 
                                                }
                                ?>                               
                                </select>
                            </h5>
                        </td> 
                    </tr>

                    <tr>
                        
                        <td><h5>
                                <input class="form-control" style="width:60px;" readonly="true" name="tt_tue" value="tue">
                            </h5>
                        </td> 
                                              
                        <td><h5>
                        <?php
                            $sql = "SELECT * FROM subjects";
                            $res = mysqli_query($conn,$sql) or die (mysqli_error($conn));
                            $num = mysqli_num_rows($res) ;
                        ?>
                                <select class="form-select" name="tt_tue_s1">
                                <option value="0"> Select Subject </option>

                                <?php
                                                for($k=1 ; $k<=$num ; $k++)
                                                {
                                                    $row = mysqli_fetch_array($res);
                                ?>
                                            <option value="<?php echo $row['sub_abb']?>"><?php echo $row['sub_abb']?></option>
                                <?php 
                                                }
                                ?>                                   
                                </select>
                            </h5>
                        </td> 

                        <td><h5>
                        <?php
                            $sql = "SELECT * FROM subjects";
                            $res = mysqli_query($conn,$sql) or die (mysqli_error($conn));
                            $num = mysqli_num_rows($res) ;
                        ?>
                                <select class="form-select" name="tt_tue_s2">
                                <option value="0"> Select Subject </option>

                                    <?php
                                                for($k=1 ; $k<=$num ; $k++)
                                                {
                                                    $row = mysqli_fetch_array($res);
                                    ?>
                                            <option value="<?php echo $row['sub_abb']?>"><?php echo $row['sub_abb']?></option>
                                    <?php 
                                                }
                                    ?>                                   
                                </select>
                            </h5>
                        </td> 

                        <td><h5>
                        <?php
                            $sql = "SELECT * FROM subjects";
                            $res = mysqli_query($conn,$sql) or die (mysqli_error($conn));
                            $num = mysqli_num_rows($res) ;
                        ?>
                                <select class="form-select" name="tt_tue_s3">
                                <option value="0"> Select Subject </option>

                                    <?php
                                                for($k=1 ; $k<=$num ; $k++)
                                                {
                                                    $row = mysqli_fetch_array($res);
                                    ?>
                                            <option value="<?php echo $row['sub_abb']?>"><?php echo $row['sub_abb']?></option>
                                    <?php 
                                                }
                                    ?>                                   </select>
                            </h5>
                        </td> 
                    </tr>

                    <tr>
                        
                        <td><h5>
                                <input class="form-control" style="width:60px;" readonly="true" name="tt_wed" value="wed">
                            </h5>
                        </td> 
                                              
                        <td><h5>
                        <?php
                            $sql = "SELECT * FROM subjects";
                            $res = mysqli_query($conn,$sql) or die (mysqli_error($conn));
                            $num = mysqli_num_rows($res) ;
                        ?>
                                <select class="form-select" name="tt_wed_s1">
                                <option value="0"> Select Subject </option>

                                    <?php
                                                for($k=1 ; $k<=$num ; $k++)
                                                {
                                                    $row = mysqli_fetch_array($res);
                                    ?>
                                            <option value="<?php echo $row['sub_abb']?>"><?php echo $row['sub_abb']?></option>
                                    <?php 
                                                }
                                    ?>                                   </select>
                            </h5>
                        </td> 

                        <td><h5>
                        <?php
                            $sql = "SELECT * FROM subjects";
                            $res = mysqli_query($conn,$sql) or die (mysqli_error($conn));
                            $num = mysqli_num_rows($res) ;
                        ?>
                                <select class="form-select" name="tt_wed_s2">
                                <option value="0"> Select Subject </option>

                                    <?php
                                                for($k=1 ; $k<=$num ; $k++)
                                                {
                                                    $row = mysqli_fetch_array($res);
                                    ?>
                                            <option value="<?php echo $row['sub_abb']?>"><?php echo $row['sub_abb']?></option>
                                    <?php 
                                                }
                                    ?>                                   </select>
                            </h5>
                        </td> 

                        <td><h5>
                        <?php
                            $sql = "SELECT * FROM subjects";
                            $res = mysqli_query($conn,$sql) or die (mysqli_error($conn));
                            $num = mysqli_num_rows($res) ;
                        ?>
                                <select class="form-select" name="tt_wed_s3">
                                <option value="0"> Select Subject </option>

                                    <?php
                                                for($k=1 ; $k<=$num ; $k++)
                                                {
                                                    $row = mysqli_fetch_array($res);
                                    ?>
                                            <option value="<?php echo $row['sub_abb']?>"><?php echo $row['sub_abb']?></option>
                                    <?php 
                                                }
                                    ?>                                   </select>
                            </h5>
                        </td> 
                    </tr>

                    <tr>
                        
                        <td><h5>
                                <input class="form-control" style="width:60px;" readonly="true" name="tt_thu" value="thu">
                            </h5>
                        </td> 
                                              
                        <td><h5>
                        <?php
                            $sql = "SELECT * FROM subjects";
                            $res = mysqli_query($conn,$sql) or die (mysqli_error($conn));
                            $num = mysqli_num_rows($res) ;
                        ?>
                                <select class="form-select" name="tt_thu_s1">
                                <option value="0"> Select Subject </option>

                                    <?php
                                                for($k=1 ; $k<=$num ; $k++)
                                                {
                                                    $row = mysqli_fetch_array($res);
                                    ?>
                                            <option value="<?php echo $row['sub_abb']?>"><?php echo $row['sub_abb']?></option>
                                    <?php 
                                                }
                                    ?>                                   </select>
                            </h5>
                        </td> 

                        <td><h5>
                        <?php
                            $sql = "SELECT * FROM subjects";
                            $res = mysqli_query($conn,$sql) or die (mysqli_error($conn));
                            $num = mysqli_num_rows($res) ;
                        ?>
                                <select class="form-select" name="tt_thu_s2">
                                <option value="0"> Select Subject </option>

                                    <?php
                                                for($k=1 ; $k<=$num ; $k++)
                                                {
                                                    $row = mysqli_fetch_array($res);
                                    ?>
                                            <option value="<?php echo $row['sub_abb']?>"><?php echo $row['sub_abb']?></option>
                                    <?php 
                                                }
                                    ?>                                   </select>
                            </h5>
                        </td> 

                        <td><h5>
                        <?php
                            $sql = "SELECT * FROM subjects";
                            $res = mysqli_query($conn,$sql) or die (mysqli_error($conn));
                            $num = mysqli_num_rows($res) ;
                        ?>
                                <select class="form-select" name="tt_thu_s3">
                                <option value="0"> Select Subject </option>

                                    <?php
                                                for($k=1 ; $k<=$num ; $k++)
                                                {
                                                    $row = mysqli_fetch_array($res);
                                    ?>
                                            <option value="<?php echo $row['sub_abb']?>"><?php echo $row['sub_abb']?></option>
                                    <?php 
                                                }
                                    ?>                                   </select>
                            </h5>
                        </td> 
                    </tr>

                    <tr>
                        <?php
                            $sql = "SELECT * FROM subjects";
                            $res = mysqli_query($conn,$sql) or die (mysqli_error($conn));
                            $num = mysqli_num_rows($res) ;
                        ?>
                        <td><h5>
                                <input class="form-control" style="width:60px;" readonly="true" name="tt_fri" value="fri">
                            </h5>
                        </td> 
                                              
                        <td><h5>
                                <select class="form-select" name="tt_fri_s1">
                                <option value="0"> Select Subject </option>

                                    <?php
                                                for($k=1 ; $k<=$num ; $k++)
                                                {
                                                    $row = mysqli_fetch_array($res);
                                    ?>
                                            <option value="<?php echo $row['sub_abb']?>"><?php echo $row['sub_abb']?></option>
                                    <?php 
                                                }
                                    ?>                                   </select>
                            </h5>
                        </td> 

                        <td><h5>
                        <?php
                            $sql = "SELECT * FROM subjects";
                            $res = mysqli_query($conn,$sql) or die (mysqli_error($conn));
                            $num = mysqli_num_rows($res) ;
                        ?>
                                <select class="form-select" name="tt_fri_s2">
                                <option value="0"> Select Subject </option>

                                    <?php
                                                for($k=1 ; $k<=$num ; $k++)
                                                {
                                                    $row = mysqli_fetch_array($res);
                                    ?>
                                            <option value="<?php echo $row['sub_abb']?>"><?php echo $row['sub_abb']?></option>
                                    <?php 
                                                }
                                    ?>                                   </select>
                            </h5>
                        </td> 

                        <td><h5>
                        <?php
                            $sql = "SELECT * FROM subjects";
                            $res = mysqli_query($conn,$sql) or die (mysqli_error($conn));
                            $num = mysqli_num_rows($res) ;
                        ?>
                                <select class="form-select" name="tt_fri_s3">
                                <option value="0"> Select Subject </option>

                                    <?php
                                                for($k=1 ; $k<=$num ; $k++)
                                                {
                                                    $row = mysqli_fetch_array($res);
                                    ?>
                                            <option value="<?php echo $row['sub_abb']?>"><?php echo $row['sub_abb']?></option>
                                    <?php 
                                                }
                                    ?>                                   </select>
                            </h5>
                        </td> 
                    </tr>

                    <tr>
                        
                        <td><h5>
                                <input class="form-control" style="width:60px;" readonly="true" name="tt_sat" value="sat">
                            </h5>
                        </td> 
                                              
                        <td><h5>
                        <?php
                            $sql = "SELECT * FROM subjects";
                            $res = mysqli_query($conn,$sql) or die (mysqli_error($conn));
                            $num = mysqli_num_rows($res) ;
                        ?>
                                <select class="form-select" name="tt_sat_s1">
                                <option value="0"> Select Subject </option>

                                    <?php
                                                for($k=1 ; $k<=$num ; $k++)
                                                {
                                                    $row = mysqli_fetch_array($res);
                                    ?>
                                            <option value="<?php echo $row['sub_abb']?>"><?php echo $row['sub_abb']?></option>
                                    <?php 
                                                }
                                    ?>                                   </select>
                            </h5>
                        </td> 

                        <td><h5>
                        <?php
                            $sql = "SELECT * FROM subjects";
                            $res = mysqli_query($conn,$sql) or die (mysqli_error($conn));
                            $num = mysqli_num_rows($res) ;
                        ?>
                                <select class="form-select" name="tt_sat_s2">
                                <option value="0"> Select Subject </option>

                                    <?php
                                                for($k=1 ; $k<=$num ; $k++)
                                                {
                                                    $row = mysqli_fetch_array($res);
                                    ?>
                                            <option value="<?php echo $row['sub_abb']?>"><?php echo $row['sub_abb']?></option>
                                    <?php 
                                                }
                                    ?>                                   </select>
                            </h5>
                        </td> 

                        <td><h5>
                        <?php
                            $sql = "SELECT * FROM subjects";
                            $res = mysqli_query($conn,$sql) or die (mysqli_error($conn));
                            $num = mysqli_num_rows($res) ;
                        ?>
                                <select class="form-select" name="tt_sat_s3">
                                <option value="0"> Select Subject </option>

                                    <?php
                                                for($k=1 ; $k<=$num ; $k++)
                                                {
                                                    $row = mysqli_fetch_array($res);
                                    ?>
                                            <option value="<?php echo $row['sub_abb']?>"><?php echo $row['sub_abb']?></option>
                                    <?php 
                                                }
                                    ?>                                   </select>
                            </h5>
                        </td> 
                    </tr>

                    
                    
                </table>    

                
                <input onClick="return confirm('Are you sure want to add this Time Table ?');" class="btn btn-outline-success" type="submit" value="SUBMIT" name="submit">
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
        $sem = $_POST['tt_sem'];
        $batch = $_POST['tt_batch'];
        $year = $_POST['tt_year'];

        $slot1 = $_POST['tt_slot1'];
        $slot2 = $_POST['tt_slot2'];
        $slot3 = $_POST['tt_slot3'];

        $mon = $_POST['tt_mon'];
        $tue = $_POST['tt_tue'];
        $wed = $_POST['tt_wed'];
        $thu = $_POST['tt_thu'];
        $fri = $_POST['tt_fri'];
        $sat = $_POST['tt_sat'];

        $mon_s1 = $_POST['tt_mon_s1'];
        $mon_s2 = $_POST['tt_mon_s2'];
        $mon_s3 = $_POST['tt_mon_s3'];
        $tue_s1 = $_POST['tt_tue_s1'];
        $tue_s2 = $_POST['tt_tue_s2'];
        $tue_s3 = $_POST['tt_tue_s3'];
        $wed_s1 = $_POST['tt_wed_s1'];
        $wed_s2 = $_POST['tt_wed_s2'];
        $wed_s3 = $_POST['tt_wed_s3'];
        $thu_s1 = $_POST['tt_thu_s1'];
        $thu_s2 = $_POST['tt_thu_s2'];
        $thu_s3 = $_POST['tt_thu_s3'];
        $fri_s1 = $_POST['tt_fri_s1'];
        $fri_s2 = $_POST['tt_fri_s2'];
        $fri_s3 = $_POST['tt_fri_s3'];
        $sat_s1 = $_POST['tt_sat_s1'];
        $sat_s2 = $_POST['tt_sat_s2'];
        $sat_s3 = $_POST['tt_sat_s3'];



        $dup = "SELECT * FROM timetable WHERE tt_sem = '$sem' AND tt_batch = '$batch' AND tt_year ='$year' ";
        $dup1 = mysqli_query($conn,$dup) or die (mysqli_error($conn));
        if(mysqli_num_rows($dup1) < 1)
        {
          



        $sql1 = "INSERT INTO timetable(tt_sem,tt_batch,tt_day,tt_slot,tt_sub,tt_year) VALUES('$sem','$batch','$mon','$slot1','$mon_s1','$year')" ;
        $res1 = mysqli_query($conn,$sql1);

        $sql2 = "INSERT INTO timetable(tt_sem,tt_batch,tt_day,tt_slot,tt_sub,tt_year) VALUES('$sem','$batch','$mon','$slot2','$mon_s2','$year')" ;
        $res12 = mysqli_query($conn,$sql2);

        $sql3 = "INSERT INTO timetable(tt_sem,tt_batch,tt_day,tt_slot,tt_sub,tt_year) VALUES('$sem','$batch','$mon','$slot3','$mon_s3','$year')" ;
        $res3 = mysqli_query($conn,$sql3);

        $sql4 = "INSERT INTO timetable(tt_sem,tt_batch,tt_day,tt_slot,tt_sub,tt_year) VALUES('$sem','$batch','$tue','$slot1','$tue_s1','$year')" ;
        $res4 = mysqli_query($conn,$sql4);
        
        $sql5 = "INSERT INTO timetable(tt_sem,tt_batch,tt_day,tt_slot,tt_sub,tt_year) VALUES('$sem','$batch','$tue','$slot2','$tue_s2','$year')" ;
        $res5 = mysqli_query($conn,$sql5);

        $sql6 = "INSERT INTO timetable(tt_sem,tt_batch,tt_day,tt_slot,tt_sub,tt_year) VALUES('$sem','$batch','$tue','$slot3','$tue_s3','$year')" ;
        $res6 = mysqli_query($conn,$sql6);

        $sql7 = "INSERT INTO timetable(tt_sem,tt_batch,tt_day,tt_slot,tt_sub,tt_year) VALUES('$sem','$batch','$wed','$slot1','$wed_s1','$year')" ;
        $res7 = mysqli_query($conn,$sql7);

        $sql8 = "INSERT INTO timetable(tt_sem,tt_batch,tt_day,tt_slot,tt_sub,tt_year) VALUES('$sem','$batch','$wed','$slot2','$wed_s2','$year')" ;
        $res8 = mysqli_query($conn,$sql8);

        $sql9 = "INSERT INTO timetable(tt_sem,tt_batch,tt_day,tt_slot,tt_sub,tt_year) VALUES('$sem','$batch','$wed','$slot3','$wed_s3','$year')" ;
        $res9 = mysqli_query($conn,$sql9);

        $sql10 = "INSERT INTO timetable(tt_sem,tt_batch,tt_day,tt_slot,tt_sub,tt_year) VALUES('$sem','$batch','$thu','$slot1','$thu_s1','$year')" ;
        $res10 = mysqli_query($conn,$sql10);

        $sql11 = "INSERT INTO timetable(tt_sem,tt_batch,tt_day,tt_slot,tt_sub,tt_year) VALUES('$sem','$batch','$thu','$slot2','$thu_s2','$year')" ;
        $res11 = mysqli_query($conn,$sql11);

        $sql12 = "INSERT INTO timetable(tt_sem,tt_batch,tt_day,tt_slot,tt_sub,tt_year) VALUES('$sem','$batch','$thu','$slot3','$thu_s3','$year')" ;
        $res12 = mysqli_query($conn,$sql12);

        $sql13 = "INSERT INTO timetable(tt_sem,tt_batch,tt_day,tt_slot,tt_sub,tt_year) VALUES('$sem','$batch','$fri','$slot1','$fri_s1','$year')" ;
        $res13 = mysqli_query($conn,$sql13);

        $sql14 = "INSERT INTO timetable(tt_sem,tt_batch,tt_day,tt_slot,tt_sub,tt_year) VALUES('$sem','$batch','$fri','$slot2','$fri_s2','$year')" ;
        $res14 = mysqli_query($conn,$sql14);

        $sql15 = "INSERT INTO timetable(tt_sem,tt_batch,tt_day,tt_slot,tt_sub,tt_year) VALUES('$sem','$batch','$fri','$slot3','$fri_s3','$year')" ;
        $res15 = mysqli_query($conn,$sql15);

        $sql16 = "INSERT INTO timetable(tt_sem,tt_batch,tt_day,tt_slot,tt_sub,tt_year) VALUES('$sem','$batch','$sat','$slot1','$sat_s1','$year')" ;
        $res16 = mysqli_query($conn,$sql16);

        $sql17 = "INSERT INTO timetable(tt_sem,tt_batch,tt_day,tt_slot,tt_sub,tt_year) VALUES('$sem','$batch','$sat','$slot2','$sat_s2','$year')" ;
        $res17 = mysqli_query($conn,$sql17);

        $sql18 = "INSERT INTO timetable(tt_sem,tt_batch,tt_day,tt_slot,tt_sub,tt_year) VALUES('$sem','$batch','$sat','$slot3','$sat_s3','$year')" ;
        $res18 = mysqli_query($conn,$sql18);

        if($res1 and $res2 and $res3 and $res4 and $res5 and $res6 and $res7 and $res8 and $res9 and $res10 and $res11 and $res12 and $res13 and $res14 and $res15 and $res16 and $res17 and $res18)
        {
            echo"<script>";
            echo"window.alert('Timetable Added Successfully....!');";
            echo"window.location = 'teacher_settimetable.php';";
            echo"</script>";
        }

    }

    else
    {
        echo"<script>";
        echo"window.alert('Timetable Already Exist for Same Semester And Batch Delete the Previous Timetable to Add New One ..!');";
        echo"window.location = 'teacher_settimetable.php';";
        echo"</script>";
    }

    }
?>


            
