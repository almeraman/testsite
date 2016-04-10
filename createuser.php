<?php include 'header.php'?>

 <?php
     
     if(isset($_POST['name'])){
        $name = $_POST['name'];
        $mail = $_POST['email'];
        $add = $_POST['address'];
        $ph = $_POST['phone'];
        $sql = "INSERT INTO users (name, email, address, phone) VALUES ('$name', '$mail', '$add', '$ph')";
        if ($conn->query($sql) === TRUE) {
			?><p class="makered">New record created</p><?php
         } else {
            echo "Error:".$sql."<br>".$conn->error;
         }

         $conn->close();
     }
    ?>
    <br><br>
    <p><a href="index.php">return to home page</a></p>
	
<?php include 'footer.php'?>