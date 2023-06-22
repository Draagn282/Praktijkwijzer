<?php

include_once ('../php/connect.php');  


    $sql = "SELECT * FROM veld";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();

    foreach ($result as $veld) {
        echo '<div class="field">';
        echo '<div class="field_data">';
        echo '<p>Field ID: ' . $veld['id'] . '</p>';
        echo '<p>Field: ' . $veld['VeldCode'] . '</p>';
        echo '<p>Current Status: ' . $veld['Bezet'] . '</p>';
        echo '<p>Date Taken: ' . $veld['BezetVan'] . '</p>';
        echo '<p>Date Free: ' . $veld['BezetTot'] . '</p>';
        echo '<p>Customer ID: ' . $veld['IdBezetter'] . '</p>';
        echo '</div>';
        echo '<div class="cleanerCom_buttons">';
        echo '<button>...edit...</button>';
        echo '</div>';
        echo '</div>';
    }


?>