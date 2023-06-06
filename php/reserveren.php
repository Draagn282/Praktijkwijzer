<?php
 include ('../includes/connect.php');

      if(isset($_POST['Verzenden'])) {
        $email = $_POST["email"];
        $guests = $_POST["guest"];
        $accomodation = $_POST["accomodation"];
        $arrivalDate = $_POST["arrivalDate"];
        $departureDate = $_POST["departureDate"];
        $id = 1;
        $sql = "INSERT INTO reservering (id, userId, veldId, BezetVan, BezetTot, Accommodatie, Gasten) VALUES(:id, :userId, :veldId, :BezetVan, :BezetTot, :Accommodatie, :Gasten)";
        $stmt = $connect->prepare($sql);
        $stmt->bindparam(':id', $id);
        $stmt->bindparam(':userId', $id);
        $stmt->bindparam(':veldId', $id);
        $stmt->bindparam(':BezetVan', $arrivalDate);
        $stmt->bindparam(':BezetTot', $departureDate);
        $stmt->bindparam(':Accommodatie', $accomodation);
        $stmt->bindparam(':Gasten', $guests);
        $stmt->execute();

        header('location: ../vallidationPage.php');
        exit();
      }
      
?>