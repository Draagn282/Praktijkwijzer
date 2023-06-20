<?php

include_once ('../php/connect.php');   



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
        echo '<button style="background-color: red;">...delete...</button>';
    echo '</div>';
echo '</div>';
}

?>