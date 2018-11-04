<?php
session_start();
unset($_SESSION['dang_nhap']);
header("Location:../../index.php");