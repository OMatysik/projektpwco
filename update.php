<?php 

include 'db.php';

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $sql = "UPDATE items SET name='$name', description='$description' WHERE id=$id";

    if(mysqli_query($conn, $sql)){
        header("Location: index.php");

    }
    else{
        echo "Error updating record: ". $sql . "<br>" . mysqli_error($conn);

    }
}  

    else{
        header("Location: index.php");
          
    
}

?>