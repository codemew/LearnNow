<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

        
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php  
        $serverName = ".\SQLEXPRESS";  

        /* Get UID and PWD from application-specific files.  */  
        $uid = "sa";  
        $pwd = "ideapad320";  
        $connectionInfo = array( "UID"=>$uid,  
                                 "PWD"=>$pwd,  
                                 "Database"=>"test");  

        /* Connect using SQL Server Authentication. */  
        $conn = sqlsrv_connect( $serverName, $connectionInfo);  
        if( $conn === false )  
        {  
             echo "Unable to connect.</br>";  
             die( print_r( sqlsrv_errors(), true));  
        }  
        else
        {
            echo "Connection Established";
        }

        sqlsrv_close( $conn);  
        ?> 
    </body>
</html>