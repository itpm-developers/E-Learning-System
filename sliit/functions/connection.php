<?php

function CreateConnection(){
    return mysqli_connect("localhost" , "root" , "","sliit");
}
//mysql_select_db("lms");
?>