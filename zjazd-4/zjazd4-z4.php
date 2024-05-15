<?php
$ip = $_SERVER['REMOTE_ADDR'];
if ($ip == "127.0.0.1") {
    include "in.php";
} else {
    include "noAccess.php";
}