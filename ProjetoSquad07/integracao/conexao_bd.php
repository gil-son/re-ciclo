<?php

   
    $conn = mysqli_connect("localhost", "root", "", "squad7");
 
    if (!$conn)
    {
        die ("Falha na conexão com o BD " .mysqli_connect_errno());
        exit();
    }


