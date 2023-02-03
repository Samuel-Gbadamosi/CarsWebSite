<?php 

//connection to database in mysql
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Trustdb";


//create database connection and fucntions

function createConnection(){

    global $servername,$username,$password,$dbname;
    $conn = new mysqli($servername,$username,$password,$dbname);
    //check connection
    if($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;

}

function getProducts(){

    $conn = createConnection();

    $sql = "SELECT * FROM products";
    $result = $conn->query($sql2);

    closeConnection($conn);

    return $result;
}




function closeConnection($conn){
    $conn->close();
}




?>