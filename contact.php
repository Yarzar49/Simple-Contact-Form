<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Contact Us</h1>
	<p>Please fill in the form below to contact us:</p>
	<form action="process.php" method="post">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>

		<label for="message">Message:</label>
		<textarea id="message" name="message" required></textarea>

		<input type="submit" value="Submit">
	</form>
    
</body>
</html>