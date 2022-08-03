<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register Yourself!</title>
        <link rel="stylesheet" type="text/css" href="Register.css"> 
        
        <script type="text/javascript">
            function Redirect() {
               window.location="http://localhost/LearnNow.v2/register.php";
            }
        </script>
        
    </head>
    <body>        
        
                 <?php
function alertonly($msg) {
                       echo "<script type='text/javascript'>alert('$msg');</script>";
                       
                   }
                   function alert($msg) {
                       echo "<script type='text/javascript'>alert('$msg');window.location = 'http://localhost/LearnNow.v2/Index.php';</script>";
                       
                   }
                 $name=$email=$password=$sex=$usrtel=$dob="";
                 ?>
        
        
        <div class="flex-container">
            <header>
                    <h1>LearNOW.com</h1>
            </header>

                <nav class="nav">
                <ol>
                    <li><a href="Index.php">Home</a></li><br><br>
                    <li><a href="Index.php">Log IN</a></li><br><br>
                    
                </ol>
                </nav>

                <article class="article">

                    <form method="Post" id="reg" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
                        <label for="name">Name:</label>
                        <input type="name" name="name" id="name" required="" autofocus placeholder="Enter Your Name" value="<?php echo $name;?>"><br>
                        <br>
                        <label for="password" >Password:</label>
                        <input type="password" name="password" id="password" required="" placeholder="Enter Password" value="<?php echo $password;?>">
                        <br><br>
                        <label for="email" > Email:</label>
                        <input type="email" name="email" id="email" required="" placeholder="Enter a Valid Email ID" autocomplete="off" value="<?php echo $email;?>">
                        <br><br>
                        <label for="usrtel" > Phone Number:</label>
                        <input id="usrtel" placeholder="Enter a Phone Number" required type="usertel" name="usrtel" value="<?php echo $usrtel;?>">
                        <br><br>
                        <label for="dob">Date of Birth:</label>
                        <input type="date" id="dob" name="dob" required max="<?php echo date("d-m-Y");?>">
                        <br><br>
                        <label for="course">Choose a Course:</label>
                        <select name="course" id="course" form="reg">
                                <option value="Java - Object Oriented Programming">Java - Object Oriented Programming</option>
                                <option value="Data Structre with Python">Data Structre with Python</option>
                                <option value="Database Management Systems">Database Management Systems</option>
                                <option value="Operating System">Operating System</option>
                                <option value="C Programming">C Programming</option>
                                <option value="HTML - Web Designing">HTML - Web Designing</option>
                                <option value="SQL DATABASE">SQL DATABASE</option>
                                <option value="PouchDB DATABASE">PouchDB DATABASE</option>
                                <option value="Shell Scripting">Shell Scripting</option>
                                <option value="BIGDATA Hadoop">BIGDATA Hadoop</option>
                                <option value="ASP.NET">ASP.NET</option>
                                <option value="PHP">PHP</option>
                                <option value="JavaScript">JavaScript</option>
                        </select>
                        <br><br>
                         <p>
                             <input type="radio" value="Male" autofocus <?php if (isset($sex) && $sex == "Male") echo "checked"; ?> name="sex" id="r1">
                            <label for="r1"><span></span>Male</label>
                            <p>
                        <input type="radio" value="Female" <?php if (isset($sex) && $sex == "Female") echo "checked"; ?> name="sex" id="r2">
                           <label for="r2"><span></span>Female</label>
                           <p>
                        <input type="radio" value="Others" <?php if (isset($sex) && $sex == "Others") echo "checked"; ?> name="sex" id="r3">
                           <label for="r3"><span></span>Others</label>
                           <input type="hidden" name="time" value="<?php echo $time; ?>" />
                           
                        <br><br>
                        <input type="submit" name="submit" value="Register" id="submit">
                        <input type="reset" name="reset" value="reset" id="reset">
                    </form>

                </article>

                <footer>Copyright &copy; LeanNOW.com...<br/>  [Developed By Somnath Dutta Banik And Srija Sarkar]</footer>
            </div>
        <?php 
        if(isset($_POST['submit']))
        {
      if($_POST==TRUE){
        /* Specify the server and connection string attributes. */  
        $serverName = ".\SQLEXPRESS";  
        $connectionInfo = array( "Database"=>"test");  

        /* Connect using Windows Authentication. */  
        $conn = sqlsrv_connect( $serverName, $connectionInfo);  
        if( $conn === false )  
        {  
             die( print("Unable to connect.</br>"));  
        }  
        $email=$_POST["email"];
        $eml=$email;
        $tsql = "SELECT * from learnow where email='".$_POST["email"]."'";  

            /* Execute the query. */  
            $stmt = sqlsrv_query( $conn, $tsql);
            
            $flag=false;
            $row = sqlsrv_fetch_array( $stmt , SQLSRV_FETCH_NUMERIC);
            if (  $row[2]==$_POST["email"])  
            {  
                $flag=false;
                alertonly ('This Email-ID Already exists.. Please Enter a New Email-ID!!'); 
                 echo '<script type="text/javascript">',
                    'Redirect();',
                    '</script>'
                 ;
                die( );  
            }   
            else   
            {  
                $flag=true;
            } 
            
            if(flag==true)
            {
        /* Query SQL Server for the Registration of the user accessing the  
        database. */  
        $name=$_POST["name"];
        $password=$_POST["password"];
        
        $dob=$_POST["dob"];
        $course=$_POST["course"];
        $sex=$_POST["sex"];
        $phno=$_POST["usrtel"];
        $tsql = "INSERT INTO learnow(name,password, email, phno,dob,course,sex) VALUES ('$name','$password','$email','$phno','$dob','$course','$sex' )";  
        $stmt = sqlsrv_query( $conn, $tsql);  
        if( $stmt === false )  
        {  
             echo "Error in executing query.</br>";  
             die( print_r( sqlsrv_errors(), true));  
        }  
        else
        {
            alert("Registration Successful");
            
        }

        
        /* Free statement and connection resources. */  
        sqlsrv_free_stmt( $stmt);  
  
        sqlsrv_close( $conn);
        $_POST['submit']="";
        unset($_POST["submit"]);
        unset($_POST);
        $name=$email=$password=$sex=$usrtel=$dob="";
        }
        }
        }
        ?>
  
      
    </body>
    
</html>

