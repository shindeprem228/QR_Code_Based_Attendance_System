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



        <?php

            session_start();

            include 'connection/connection.php';

            // extract($_POST);


            if(isset($_POST['submit']))
            {


                $id=$_POST['login_id'];
                $pass=$_POST['login_pass'];
                


                $sql = "SELECT * FROM teachers WHERE teach_id='$id' AND teach_pass='$pass' ";
                $result = mysqli_query($conn,$sql) or die (mysqli_error($conn));
                $num = mysqli_num_rows($result);
                if($num == 1)
                {
                    $_SESSION['id']=$id;

                    echo"<script>";

                    echo"window.alert('Login Successful....!');";
                    echo"window.location = 't_viewattendance.php';";

                    echo"</script>";

                }
                else
                {
                    echo"<script>";

                    echo"window.alert('Oops Wrong Username or Password....!');";
                    echo"window.location = 't_login.php';";

                    echo"</script>";


                    // echo"<script>alert('Ooops Username Or Password Wrong !!!')</script>";
                    // header("Location: teacher_login.php");

                }


            }

        ?>

    
        <title>Teacher Login</title>
    
        <style>
            td
            {
                padding:4px;
            }
            .fa
            {
                /* margin-left:-7em; */
                display:inline;
                padding-right:1em;
                color:black;
            }
            a
            {
                text-decoration:none;
            }
            .fa:hover
            {
                color:white;
                transition:0.3s ease;
            }
        </style>

        <script>
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
                <center><h1 class="mainhead1"><a href="index.html"><i class="fa fa-circle-arrow-left"></i></a>SSVPS BS Deore Polytechnic, Dhule</h1></center>         
    </div> 
    
    </header>
    <!--header end-->
    <!--sidebar start-->

    <div class="row">
        <div class="col-md-6" style="margin-top:150px;">
            <img style="width:100%; height:430px; padding:20px;" src="images/ssvps2.jpg" alt="SSVPS COLLEGE">
        </div>
        <div class="col-md-6" style="margin-top:170px;">
                <div class="card login-card">
                <div class="card-header" style="background-color:rgb(1, 183, 255)">
                    <center><h3>Teacher Login</h3></center>
                </div>
                <div class="card-body">
                    <center>
                    <form action="#" method="POST">
                        <table>
                            <tr>
                                <td><h5>ID:</h5></td>
                                <td><input class="form-control" type="text" name="login_id" autocomplete="off"></td>
                            </tr>

                            <tr>
                                <td><h5>Password:</h5></td>
                                <td><input class="form-control" type="password" name="login_pass" id="show">
                                <input style="display:inline-block" type="checkbox" onClick="myFun()">
                                <label>Show Password</label>
                            </td>
                                
                            </tr>
                        
                            
                        </table>    

                        
                        <br>
                        <input class="btn btn-outline-primary" type="submit" value="SUBMIT" name="submit">
                    </form>
                    </center>
                </div>

        </div>

    </div>

</section>
</body>
</html>