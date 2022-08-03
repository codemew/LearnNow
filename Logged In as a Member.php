<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Logged In As a Member!</title>
        <link rel="stylesheet" type="text/css" href="Logged.css"> 
        
        <script type="text/javascript">
            function Redirect() {
               window.location="http://localhost/LearnNow.v2/Index.php";
            }
        </script>
        
    </head>
    <body>
          
    
        <?php  
        function alert($msg) {
                       echo "<script type='text/javascript'>alert('$msg');</script>";
                       
                   }
           
            $serverName = ".\SQLEXPRESS";  
            $connectionInfo = array( "Database"=>"test");  
            $conn = sqlsrv_connect( $serverName, $connectionInfo);  
            if( $conn === false )  
            {  
                 echo "Could not connect.\n";  
                 die( print_r( sqlsrv_errors(), true));  
            }  

            /* Define the query. */  
            $eml=$_POST['email'];
            $tsql = "SELECT * from learnow where email='".$eml."'";  

            /* Execute the query. */  
            $stmt = sqlsrv_query( $conn, $tsql);  
            
            $flag=false;
            if ( $stmt )  
            {  
                $flag=true;
                
            }   
            else   
            {  
                $flag=false;
                
                 alert ('Invalid Email/Password'); 
                 echo '<script type="text/javascript">',
                    'Redirect();',
                    '</script>'
                 ;
                die( );  
            } 
            
            $row = sqlsrv_fetch_array( $stmt , SQLSRV_FETCH_NUMERIC);
            
            if($row[1]==$_POST['password'])
            {
                alert ('Log in Successfull!');
                $flag=true;
            }
            else
            {
                $flag=false;
                alert ('Invalid Email/Password');
                $row[0]=$row[1]=$row[2]=$row[3]=$row[4]=$row[5]=$row[6]="";
                
                echo '<script type="text/javascript">',
                    'Redirect();',
                    '</script>'
                 ;
            }
            if($flag== false)
            {
                $row[0]=$row[1]=$row[2]=$row[3]=$row[4]=$row[5]=$row[6]="";
            }
           
           
            

            /* Free statement and connection resources. */  
            sqlsrv_free_stmt( $stmt);  
            sqlsrv_close( $conn);  
            ?>
                <div class="flex-container">
            <header>
                    <h1>LearNOW.com</h1>
            </header>

                <nav class="nav">
                <ol>
                    <li><a href="Index.php">Home</a></li><br><br>
                    <li><a href="Index.php">Log Out</a></li><br><br>
                </ol>
                </nav>

                <article class="article">
                        <table border="1">
                        <tr>
                          <th>Field</th>
                          <th>Details</th>
                        </tr>
                        <tr>
                          <td>Name: </td>
                          <td> <?php echo $row[0];?></td>
                        </tr>
                        <tr>
                          <td>Email:</td>
                          <td><?php echo $row[2];?></td>
                        </tr>
                        <tr>
                          <td>Phone Number:</td>
                          <td><?php echo $row[3];?></td>
                        </tr>
                        <tr>
                          <td>Date Of Birth:</td>
                          <td><?php echo $row[4];?></td>
                        </tr>
                        <tr>
                          <td>Course:</td>
                          <td><?php echo $row[5];?></td>
                        </tr>
                        <tr>
                          <td>Sex:</td>
                          <td><?php echo $row[6];?></td>
                        </tr>
                      </table>
                </article>>

                <footer>Copyright &copy; LeanNOW.com...<br/>  [Developed By Somnath Dutta Banik And Srija Sarkar]</footer>
            </div>
        
    </body>
</html>
