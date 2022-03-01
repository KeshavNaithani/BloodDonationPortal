<?php
include 'config.php';
if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
     include 'user/index.php';
} else {
    include 'index.php';
}


 ?>
