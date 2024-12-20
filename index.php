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

<!DOCTYPE html> 
<html lang="en">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    </head>

    <style>
      :root {
    --green: #38ccae;
    --dark: #1b1b1b;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
        body{
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: var(--green);
            background: linear-gradient(to right top, var(--dark), var(--green));
            color: #fff;
            overflow: hidden;

        }

        .modal-title {
            color: #000;

        }
    </style>

    <body>

        <div class="container mt-5">
            <h2>Siema</h2>
            <!-- From to Add Data -->
            <form action="index.php" method="post">
               <div class="form-group mb-2">
                   <label for="name">Name:</label>
                   <input type="text" class="form-control" id="name" name="name" />
                   </div>
                   <div class="form-group mb-3">
                    <label for="description">Description:</label>
                    <textarea name="description" id="description" class="form-control">
                    </textarea>
                    </div>
                    <button type="submit" class="btn btn-success" name="submit">Submit</button>

               </form>


               <!-- Items List -->
        <h2 class="mt-5">Test112233</h2>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($items as $item): ?>
                <tr>
                    <td><?php echo htmlspecialchars($item['name']);?></td>
                    <td><?php echo htmlspecialchars($item['description']);?></td>
                <td>
                        <!-- Edit Button -->
                       <button type="button" class="btn btn-warning edit-btn" 
                        data-bs-toggle="modal" data-bs-target="#editModal" data-id="<?php
                        echo $item['id'];?>"  data-name="<?php echo $item['name'];?>"
                        data-id="<php echo $item['description'];?>" >  



Edit  
                    
                    </button>
                    <a href="delete.php?id=<?php echo $item['id'];?>"  class="btn btn-danger">Delete</a> 
                   
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        </div>

        <!-- Edit Modal -->
    
        <div class="modal fade" id="editModal" tabindex="-1"  role="dialog" aria-labelledby="editModalLable" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLable">Edit Item </h5>
                    </div>

                    <form action="update.php" method="post">
                        <div class="modal-body">
                        <input type="hidden" id="edit-id" name="id">
                        <div class="form-group mb-2">
                            <label for="edit-name">Name:</label>
                            <input type="text" class="form-control" id="edit-name" name="name" />
                            </div>

                            <div class="form-group mb-3">
                                <label for="edit-description">Description:</label>
                                <textarea name="description" id="edit-description" class="form-control">
                                </textarea>
                                </div>
                       
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger"
                             data-bs-dismiss="modal">close</button>


                            <button type="submit" class="btn btn-success" 
                            name="update">Save Changes</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>






        <div class="modal fade" id="editModal" tabindex="-1" role="dialog"></div>

        <!-- scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.slim.min.js" integrity="sha512-sNylduh9fqpYUK5OYXWcBleGzbZInWj8yCJAU57r1dpSK9tP2ghf/SRYCMj+KsslFkCOt3TvJrX2AV/Gc3wOqA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


<script>
$('.edit-btn').click(function(){
    var id = $(this).data('id');
    var name = $(this).data('name');
    var description = $(this).data('description');
    $('#edit-id').val(id);
    $('#edit-name').val(name);
    $('#edit-description').val(description);
});
</script>

    </body>
</html>
