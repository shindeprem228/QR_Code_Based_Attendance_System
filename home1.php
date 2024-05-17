<?php
    session_start();
    include 'connection/connection.php';

    // $gc = $_SESSION['gc'];
    // echo $gc ;

    $en = $_SESSION['enrollment_mob'];
    $sql = "SELECT stud_name FROM students WHERE stud_enroll = $en";
    $res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">


    <script type="text/javascript" src="js/adapter.min.js"></script>
    <script type="text/javascript" src="js/vue.min.js"></script>
    <script type="text/javascript" src="js/instascan.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Scan QR Code</title>
    <style>
        #preview{
                width:50%;
                height:10%;
                border:1px solid gray;
                
                /* border:2px solid black; */
                margin-top:3rem;
                padding:0px;
            }

        body
        {
            background-color:lightgray;
            height:100vh;
        }

        @media screen and (max-width: 600px) {
                
            .header
            {
                width: 40%;
            }
            
            .mainhead1{
                /* font-size:vw; */
                
                height:10rem;
                font-size:3rem;
                margin-top:0px; 
                color:white; 
                /* font-family: cursive; */
                overflow:hidden;
            }
                
            #preview{
            width:50%;
            height:10%;
            border:4px solid white;
            
            /* border:2px solid black; */
            margin-top:3rem;
            padding:0px;
            }

            #time-out{
                width:50%;
                height:10%;
                font-size:50px; 
                /* color:red; */
                margin-top:5rem;
                padding:0px;
            }

            form
            {
                width:100%;
            }

            
            
            
        }
    </style>
    <?php
        // session_start();
        if(!isset($_SESSION['enrollment_mob']))
        {
            header('location:student_login_mob.php');
        }
    ?>
</head>
<body>
    <header class="header fixed-top clearfix">
    
        <div class="mainhead">
            <center><h1 class="mainhead1" style="margin-top:0px;">SSVPS BS Deore Polytechnic, Dhule</h1></center>         
        </div> 
        <a class=" btn btn-outline-dark" style="font-size:15px; margin-right:2em; margin-top:-2em; margin-bottom:0.5em; ; float:right" href="student_logout_mob.php"> LOG OUT </a>

    </header>

    <center><h1 style="margin-top:120px; font-size:50px; color:#e5e5e5; text-shadow:2px 2px 1px black;    font-family: sans-serif; line-height:60px; color: white;">Welcome <br> <?php echo$row['stud_name'];?></h1></center>

    <!-- <center><h1 style="margin-top:120px; font-size:50px;">Welcome <?php echo $_SESSION['enrollment_mob']; ?></h1></center> -->


    <?php                       
        $currtime = date("H:i:s");
        // $currtime = "10:10:00" ;

        if(($currtime >= "07:30:00" and $currtime < "07:35:00") or ($currtime >= "10:00:00" and $currtime < "10:05:00") or ($currtime >= "12:10:00" and $currtime < "12:15:00") )
        {
    ?>
            <center><video id="preview"></video></center>

            <form action="insert.php" method="POST">
            <input class="form-control" style="width:1000px; margin-top:150px" type="text" name="text" id="text" >
            </form>

            <script>
            let scanner = new Instascan.Scanner({video:document.getElementById('preview'),mirror:false});
            Instascan.Camera.getCameras().then(function(cameras){
                if(cameras.length>0){
                    scanner.start(cameras[1]);
                }
                else{
                    alert('No Cameras Found')
                }
            }).catch(function(e){
                console.error(e);
            });

            scanner.addListener('scan',function(c){
                document.getElementById('text').value=c;

               var gc = localStorage.getItem("combqr");
               var txt = document.getElementById('text').value;
               var sess_enr = <?php echo $_SESSION['enrollment_mob']; ?>
            
               document.forms[0].submit();
                
            });

            

 

            
        </script>

    <?php
        }
        else
        {
    ?>

          <center>
              
                    <h1 class="text-danger" id="time-out">  
                        Time Out !! 
                    </h1>
                    <form>
                        <input class="form-control" style="width:1000px; margin-top:350px" type="text" name="t" >

                    </form>
                    <!-- <form action="insert.php" method="POST">
            <input class="form-control" style="width:1000px; margin-top:100px" type="text" name="text" id="text" >
            </form> -->
            </center>
    <?php
        }
    ?>
    

        
            

        
       

      
</body>
</html>


















        
    