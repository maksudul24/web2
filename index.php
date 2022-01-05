
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
	<title>Bookstore</title>
	</head>
	<body>
		<?php
			$booksJson = file_get_contents('books.json');
			$book_array = json_decode($booksJson, true);
		?>
		<table border="3" style = "border:1px solid black;margin-left:auto;margin-right:auto;">
			<tr>
				<th>Index</th>
				<th> ISBN </th>
				<th> Title </th>
				<th> Author </th>
				<th> Pages </th>
				<th> Availability </th>
			</tr>
			<?php $ind = 0; ?>
			<?php foreach ($book_array as $book){ ?>
				<tr>
					<td>
						<?php echo $ind+1;?>
					</td>	
					<td>
						<?php echo $book['isbn']; ?>
					</td>
					<td>
						<?php echo $book['title']; ?>
					</td>
					<td>
						<?php echo $book['author']; ?>
					</td>
					<td>
						<?php echo $book['pages']; ?>
					</td>
					<td>
						<?php
							if($book['available']){
								echo 'Available'; 
							}
							else{
								echo 'Not Available';
							}
							
						?>
					</td>
					<td>
						<form action = "/delete.php" method = "post">
							<input type="hidden" id="custId" name="custId" value=<?php echo $ind?>>
							<input type="submit" name="Delete"
									value="Delete"/> 
						</form> 
					</td> 
					<?php $ind++; ?>
				</tr>
			<?php } ?>
		</table>
		<table style = "border:1px solid black;margin-left:auto;margin-right:auto;">
	      	<tr>
				<td> <form action = "/add.php">
								<input type="submit" name="Add" value="Add a Book"/> 
					</form> 
				</td>
				<td>
					<form method = "post">
								<label for="fname">(Search by Title/ISBN/Author)</label>
								<input type="text" id="fname" name="fname" >
								<input type="submit" name="search" value="Search"/> 
					</form> 
				</td>
			</tr>	
		</table>
		<br>
		<div style="text-align:center">
			<p style="padding: 10px; border: 2px solid red">Search Result</p></div>
			<br>
			<table border = "2" style = "border:1px solid black;margin-left:auto;margin-right:auto;">
				<tr>
					<td>
						<?php
										$key = "";	
										if (isset($_POST["fname"])){
											$key = $_POST["fname"];
										}
										$ind = 0; 
										$sw = 1;
										foreach($book_array as $bk){ 
											$ind += 1; 
											$sw = 2;
											if($bk['isbn'] == $key){
													$sw = 1;
													echo '"'; 
													echo $bk['title'];
													echo '"'; 
													echo " is at $ind no index";
													break; 								
											}
												elseif ($bk['title'] == $key) {
													$sw = 1;
													echo '"'; 
													echo $bk['title'];
													echo '"'; 
													echo " is at $ind no index";
													break; 	
												}
												elseif($bk['author'] == $key){
													$sw = 1;
													echo '"'; 
													echo $bk['title'];
													echo '"'; 
													echo " is at $ind no index";
													break;	
												}
											
											}
											if($sw == 2){
												echo '"'; 
												echo $key;
												echo '"'; 
												echo ' is not found at the Book Store';
												$sw = 1;
											}
										?>
									</td>
									
				</tr>
			</table>
			<a href = "https://github.com/maksudul24/web2">Github</a>
	</body>
</html>