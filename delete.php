<?php

        if(isset($_GET['file'])){

            unlink($_GET['file']);
            array_map('unlink', glob("*.txt"));
    
            
            
            $host  = $_SERVER['HTTP_HOST'];
            $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
            $extra = 'index.php';
            header("Location: ./$extra");
            exit;
    
            }

 
?>