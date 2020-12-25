<?php
    require_once("header.php");
    require_once("database.php");

    if(isset($_POST['submit'])){
        $name = isset($_POST["name"]) ?  $_POST["name"] : "";
        $email = isset($_POST["email"]) ?  $_POST["email"] : "";
        $subject = isset($_POST["subject"]) ?  $_POST["subject"] : "";
        $messege = isset($_POST["messege"]) ?  $_POST["messege"] : "";

        $query = "INSERT INTO alldata (name,email,subject,messege) VALUES('$name','$email','$subject','$messege')";
        $sql = mysqli_query($con, $query);

        if($sql){
            $insert = "<div class='alert alert-success'>Data Insert Successful!</div>";
        }else{
            $insert = "<div class='alert alert-warning'>Something Wrong!</div>";
        }
    }
?>

    <div class="container mt-5">
        <div class="row">
        <?php 
            if(isset($insert)){
                echo $insert;
            }
        ?>
        </div>
        <div class="row">
            <a class="btn btn-primary mb-2" href="table.php">All Data</a>
        </div>
        <div class="row">
            <form method="POST">
                <div class="mb-2">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control" id="name">
                </div>
                <div class="mb-2">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" id="email">
                </div>
                <div class="mb-2">
                    <label for="subject">Subject</label>
                    <input name="subject" type="text" class="form-control" id="subject">
                </div>
                <div class="mb-2">
                    <label for="messege">Messege</label>
                    <textarea name="messege" class="form-control" id="messege" cols="30" rows="10"></textarea>
                </div>
                <div class="mb-2 text-center">
                    <button name="submit" class="btn btn-outline-secondary">Submit</button>
                </div>
            </form>
        </div>
    </div>
<?php
    require_once("footer.php");
?>