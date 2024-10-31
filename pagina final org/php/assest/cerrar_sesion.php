<?php
    session_start();
    session_destroy();
    header("location:http://127.0.0.1:5501/html/index.html");
?>