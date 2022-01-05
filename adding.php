<?php
			$booksJson = file_get_contents('books.json');
			$book_array = json_decode($booksJson, true);

            $book_array[] = array(
                'title' => $_POST['title'],
                'author' => $_POST['author'],
                'isbn' => $_POST['isbn'],
                'pages' => $_POST['pages'],
                'available' => true
            );
            $jsonData = json_encode($book_array);
            file_put_contents('books.json', $jsonData);
            header("Location: http://localhost/index.php");
             exit();
?>