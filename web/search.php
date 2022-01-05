
    <!-- <?php

        if (isset($_POST["fname"])){
                $key = $_POST["fname"];
        }
        $bksJson = file_get_contents('books.json');
        $bk_array = json_decode($bksJson, true);
    ?>
    <?php      $ind = 0; 
            foreach($bk_array as $bk){ 
              $ind += 1; 
               if($bk['isbn'] == $key){ 
                    echo $bk['isbn'];
                    echo $ind; 
                    
             }
                elseif ($bk['title'] == $key) {
                    echo $bk['title'];
                    echo $ind;
                }
                elseif($bk['author'] == $key){
                    echo $bk['author'];
                    echo $ind;
                }
             
            } 


    ?> -->
