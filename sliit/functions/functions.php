<?php
require_once("connection.php");

function user_exist($email) //Sign Up Connection
{
    $conn = CreateConnection();
    $query=mysqli_query($conn, "SELECT id FROM student_signup WHERE email = '$email'");
    $count=mysqli_num_rows($query);

    if($count == 1)
    {
       return true;
    }
    else
    {
        return false;
    }
}

function admin_exist($email)
{
    $conn = CreateConnection();
    $query = "SELECT id FROM users WHERE email = '$email'";
    $query=mysqli_query($conn, $query);
    $count=mysqli_num_rows($query);

    if($count == 1)
    {
        return true;
    }
    else
    {
        return false;
    }

}

function get_user_role($email){ //To Select User Role
    $user_role = -1;
    $conn = CreateConnection();
    $query=mysqli_query($conn, "SELECT user_group FROM users WHERE email = '$email'");
    while($row = mysqli_fetch_array($query)){
        $user_role = $row["user_group"];
    }

    return $user_role;
}

function delete_user($id){ //For Delete
    $conn = CreateConnection();
    $query=mysqli_query($conn, "DELETE FROM users WHERE id = ". $id);


    if($query)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function user_details($email){
    $conn = CreateConnection();
    $query=mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");

    if($query)
    {
        return $query;
    }

}
?>