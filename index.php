<?php

include 'db.php';

// Add
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $description = $_POST['description'];

    $sql = "INSERT INTO items (name, description) VALUES ('$name', '$description')";

    if(mysqli_query($conn, $sql)){
        header("Location: index.php");

    }
    else{
        echo "Error: ". $sql . "<br>" . mysqli_error($conn);

    }
}

//Fetch All Items

$sql = "SELECT id, name, description FROM items";
$result = mysqli_query($conn, $sql);
$items = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

