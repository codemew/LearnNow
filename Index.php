<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LearNOW:Welcome to Online Student Community</title>
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    
    <body class="body" >
        
<script>

window.onclick = function(event) {
    if (event.target == document.getElementById('id01')) {
        document.getElementById('id01').style.display = 'none';
    }
}
</script>
        
    <?php $name=$email=$password= $sex=""; ?>
        
    <h1 class="headlearn"  >LearNOW</h1>
    <div class="transbox">
    
    <h1 align="center" class="h12">Welcome To LearNOW.Com </h2>
    </div>
    
    <a onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><button class="button button1" title="Already a User" >Log In</button></a>
	<a href="register.php"><button class="button button2" title="Register For New">Sign Up</button></a>
        
        
    <div id="id01" class="modal">
        
        <form method="POST" class="modal-content animate" action="Logged In as a Member.php"> 
            
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span>
             
        <div class="container">
            <label for="email"  style="color:white;"><b> Email:</b></label>
        <input type="email" name="email" autocomplete="off" id="email" placeholder="Enter a Valid Email ID*" value="<?php echo $email ?>" required autofocus>
        
        <label for="password" style="color:white;" > <b>Password:</b></label>
        <input type="password" name="password" id="password" placeholder="Enter Password*" value="<?php echo $password ?>" required>
        
        
        <button class="buttonh" Name="submit" title="Log In" style="vertical-align: middle" type="submit"><span>Log In</span></button>
        <button onclick="document.getElementById('id01').style.display='none'" class="buttonc"><span>Cancel</span></button>
        </div>
    </form>
    </div>
   
        
        
        
            
</body>
</html>
