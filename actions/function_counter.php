<?php

include_once ('../php/connect.php');  

function countMessages() {
    global $conn;

    // Query to count the number of messages in the table
    $sql = "SELECT COUNT(*) AS total_messages FROM klacht";

    // Execute the query
    $result = $conn->query($sql);
    
    if ($result) {
        $row = $result->fetch(PDO::FETCH_ASSOC);
        // Fetch the result as an associative array
        
        // Return the total number of messages
        return $row;
    } else {
        return 0; // Return 0 if there's an error
    }
}

?>