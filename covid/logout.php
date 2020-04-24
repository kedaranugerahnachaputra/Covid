<?php
    session_start();

    if(session_destroy()){
        header("location: ../covid/awal.php");
    }
?> 