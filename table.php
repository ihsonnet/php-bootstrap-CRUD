<?php
    require_once("header.php");
    require_once("database.php");
?>
<div class="container mt-5">
    <div class="row">
            <a class="btn btn-primary mb-2" href="index.php">Add Data</a>
        </div>
    <div class="row">
        <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Messege</th>
            <th>Action</th>
        </tr>
        <?php
            $query = "SELECT * FROM alldata";
            $sql = mysqli_query($con, $query);
            // var_dump($sql);
            while($row = mysqli_fetch_assoc($sql)) :
        ?>
        <tr>
            <td><?php echo $row['id'] ; ?></td>
            <td><?php echo $row['name'] ; ?></td>
            <td><?php echo $row['email'] ; ?></td>
            <td><?php echo $row['subject'] ; ?></td>
            <td><?php echo $row['messege'] ; ?></td>
            <td><a class="btn btn-warning mr-2" href="#">Edit</a><a class="btn btn-danger" href="#">Delete</a></td>
        </tr>
        <?php endwhile; ?>
        </table>    
    </div>

</div>
    
<?php
    require_once("footer.php");
?>