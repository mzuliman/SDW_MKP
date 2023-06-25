<!DOCTYPE html>
<html lang="en">
<head>
    <style>
       body{

        background-color: lightblue;

       }
        
        
        .container {
            display: flex;
            height: 100vh;
            width: 100%;
            
        }
        
        .left-column {
            flex: 1;
            padding: 150px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position:relative; right :200px;
            position:relative; bottom :1px;
        }
        
        .left-column img {
            display: block;
            width: 600px;
            height: 720px;
          
            position:relative; right :80px;
            position:relative; bottom :150px;
        }
    
        .right-column {
            flex: 1;
            padding: 20px;
           
            
        }
        .form{

            position:relative; right :190px;
            position:relative; top :100px;
           width: 120%;
        }

       
        
    </style>
</head>
<body>
<div class="container">
    <div class="left-column">

    <img src="<?= BASEURL ?>/img/BG-JAIP3.png" alt="login">


   
</div>

    <div class="right-column">
    <h1 style="position:relative; right:120px;  position:relative; top :80px;
        "> Reset Password </h1>
    <div class="form">
    <form action="">      
    <input type="password" class="form-control" id="floatingPassword" placeholder="Enter New Password">
<label for="floatingPassword"></label>


<input type="password" class="form-control" id="floatingPassword" placeholder="Confirm Password">
<label for="floatingPassword"></label>
<br>


  
</form>             
                 
</div>

<input class="btn btn-primary" type="submit" value="Reset" style=" position:relative; right :190px;
            position:relative; top :100px; width: 120%">
                 
    </div>
</div>
</body>
</html>