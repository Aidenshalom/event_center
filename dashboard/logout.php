<?php

    include("connect.php");

    unset($_SESSION['ID']);
    header ("location:login.php");
    die();
?>