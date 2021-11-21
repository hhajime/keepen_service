<?php
    session_start();
    header('Content-Type: text/html; charset=utf-8');
    $db = new mysqli("127.0.0.1","root","Kwn040800!","bbs");
    $db->set_charset("utf8");
    function query($query)
    {
        global $db;
        return $db->query($query);
    }
    if($db->connect_errno){
        echo "MySQL 접속 실패";
    }else{
        echo "MySQL 접속 성공";
    }
    ?>