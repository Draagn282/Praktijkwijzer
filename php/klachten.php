<?php
 include ('../includes/connect.php');

      if(isset($_POST['Verzenden'])) {
        $complaint = $_POST["complaint"];
        $id = 1;
        $sql = "INSERT INTO klacht (id, userId, klacht) VALUES(:id, :userId, :klacht)";
        $stmt = $connect->prepare($sql);
        $stmt->bindparam(':id', $id);
        $stmt->bindparam(':userId', $id);
        $stmt->bindparam(':klacht', $complaint);
        $stmt->execute();

        header('location: ../vallidationComplaintPage.php');
        exit();
      }
      
?>