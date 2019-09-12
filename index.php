<?php
session_start();
if(isset($_SESSION['email'])){
    include_once "./PostLogin/index.php";
} else {
    include_once "./PreLogin/index.php";
}