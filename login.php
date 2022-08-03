<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Log IN</title>
        <link rel="stylesheet" type="text/css" href="/login.css">
        <style>
            
            .button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            }

            .button:hover {
            opacity: 0.8;
            }
            input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 2px solid #ccc;
            box-sizing: border-box;
            }
                .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                padding-top: 60px;
            }
            .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
              }
              .container {
               padding: 16px;
                }
                .animate {
                -webkit-animation: animatezoom 0.6s;
                animation: animatezoom 0.6s;
                }

                @-webkit-keyframes animatezoom {
                    from {-webkit-transform: scale(0)} 
                    to {-webkit-transform: scale(1)}
                }

                @keyframes animatezoom {
                    from {transform: scale(0)} 
                    to {transform: scale(1)}
                }
                input[type=text], input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
                }
        </style>
    </head>
    <body>
       
    </body>
    <?php
    $name=$email=$password= $sex="";
    ?>
    
    <div class="modal container">
        
    <form method="Post" action="/page.php"> 
         
        <label for="email" > Email:</label>
        <input type="email"  name="email" id="email" placeholder="Enter a Valid Email ID" value="<?php echo $email ?>" required><br/><br/>
        
        <label for="password" > password:</label>
        <input type="password"  name="password" id="password" placeholder="Enter Password" value="<?php echo $password ?>" required><br/><br/>
 
        <input type="submit" class="button" name="submit" value="Log In" id="submit"><br/><br/>
    </form>
    </div>
    
</html>

