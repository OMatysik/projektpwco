<?php 

include 'db.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM items WHERE id=$id";

    if(mysqli_query($conn, $sql)){
        header("Location: index.php");

    }
    else{
        echo "Error deleting record: ". $sql . "<br>" . mysqli_error($conn);

    }
}  

    else{
        header("Location: index.php");
          
    
}

?>