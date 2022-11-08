<?php
    session_start();
    unset($_SESSION['user']);
    unset($_SESSION['gio_hang']);
    header('Location:http://localhost/WEB17301/Du_an_1/views/index.php?act=trangchu');
    
