<!--Add word in Database-->
<?php 
    include('../db.php');

        $corpusword = $_GET['corpusWord'];
        $corpusweight = $_GET['corpusWeight'];
     
        $sql = "INSERT INTO wordlist (ID, text, weight) 
        VALUES ('', '$corpusword', '$corpusweight')";
        $result = mysqli_query($conn,$sql); 
    
        if($result){
            header('Location: ../index.php');
        }
        else{
            die("Connection failed: " . $conn->connect_error);
        }
?> 
