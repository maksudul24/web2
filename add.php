<html>
	<head>
		<meta charset="UTF-8">
		<title>Add Data</title>
	</head>
	<body>
		<?php $ind = "start" ?>
		<table  style = "margin-left:auto;margin-right:auto;">
			<form action ="/adding.php" method = "post">
				<tr>
					<th>
						<label for="title">Title of the book: </label>
					</th>
					<td> 
						<input type="text" id="title" name="title" required><br>
					</td>
				</tr>
				<tr>
					<th>
						<label for="author">Author:</label>
					</th>
					<td> 
						<input type="text" id="author" name="author" required>
					</td>
				</tr>
				<tr>
					<th>
						<label for="pages">Pages:</label>
					</th>
					<td> 
						<input type="text" id="pages" name="pages" required>
					</td>
				</tr>
				<tr>
					<th>
						<label for="isbn">ISBN:</label>
					</th>
					<td> 
						<input type="text" id="isbn" name="isbn" required>
					</td>
				</tr>
				<tr>
					<td> 
						<input type="hidden" id="adding" name="adding" value=<?php echo $ind?>>
						<input type="submit" id="submit" name="Submit" required>
					</td>
				</tr>

			</form>
		</table>
		<?php exit(); ?>
	</body>
</html>
