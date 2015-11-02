<?php

// connect to your server and select database

    $db = new mysqli(
        "eu-cdbr-azure-north-d.cloudapp.net",
        "bab6477022e413",
        "fc354109"
    );

    // test if connection was established, and print any errors

    if($db->connect_errno){
        die('Connectfailed['.$db->connect_error.']');
    }

    /*// create a SQL query as a string

    $sql_query = "SELECT * FROM superheros  WHERE superpower LIKE '%laser%'";

    // execute the SQL query

    $result = $db->query($sql_query);

    // iterate over $result object one $row at a time
    // use fetch_array() to return an associative array

    while($row = $result->fetch_array()){
       // print out fields from row of data
       echo "<p>" . $row['superheroName'] . "</p>";
    }

    $result->close();
       // close connection to database
       $db->close();*/
?>
