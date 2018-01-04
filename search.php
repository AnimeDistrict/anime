<?php
    $key=$_GET['key'];
    $array = array();
    $con=mysql_connect("localhost","root","");
    $db=mysql_select_db("anime_db",$con);
    $query=mysql_query("select * from anime_list where Anime_Name LIKE '%{$key}%'");
    while($row=mysql_fetch_assoc($query))
    {
    $array[] = $row['Anime_Name'];
    }
    echo json_encode($array);
?>