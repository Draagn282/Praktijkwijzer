<?php

include_once ('../php/connect.php');   

if (isset($_POST['delete_id'])) {
    $deleteId = $_POST['delete_id'];

    // Perform the deletion query
    $sql = "DELETE FROM klacht WHERE id = :deleteId";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':deleteId', $deleteId);
    $stmt->execute();
}

$sql = "SELECT * FROM klacht";
$stmt = $conn->prepare($sql); $stmt->execute(); $result = $stmt->fetchall();
foreach ($result as $klacht) { 

   echo  '<div class="cleanerCom">';
    echo '<div class="cleanerCom_data">';
       echo '<div class="cleanerCom_info">';
            echo '<p>' . $klacht['id'] . '</p>';
        echo '</div>';    
        echo '<div class="cleanerCom_info">';
            echo '<p>...Date...</p>';
        echo '</div>';
        echo '<div class="cleanerCom_info">';
            echo '<p>...Complete...</p>';
        echo '</div>';
        echo '<div class="cleanerCom_info">';
            echo '<p>...Weight...</p>';
        echo '</div>';
    echo '</div>';
    echo '<div class="cleanerCom_text">';
        echo '<p>' . $klacht['klacht'] . '</p>';
    echo '</div>';
    echo '<div class="cleanerCom_buttons">';
        echo '<button style="background-color: Green;">...complete...</button>';
        echo '<button style="background-color: cyan;">...edit...</button>';
        echo '<form method="POST">';
        echo '<input type="hidden" name="delete_id" value="' . $klacht['id'] . '">';
        echo '<button style="background-color: red;" type="submit">...delete...</button>';
        echo '</form>';
    echo '</div>';
echo '</div>';
}

?>