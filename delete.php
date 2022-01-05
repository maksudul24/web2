<?php
    
    if (isset($_POST["custId"])){
        $key = $_POST["custId"];
    }
    $bJ = file_get_contents('books.json');
    $b_array = json_decode($bJ, true);
    
    unset($b_array[$key]);

    $jsonData = json_encode($b_array);
    file_put_contents('books.json', $jsonData);
    header("Location: http://localhost/index.php");
    exit();

?>