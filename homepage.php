<html>
	<head>
		<meta charset="utf-8">
		<title>Assignment 3 - Shah Khan</title>
	</head>
	
	<body>	
    <?php include 'connector.php'; ?>	
		
				
		<h1>CS3319 Assignment 3</h1>
		<h2>Anirudha Nandi</h2>
        <h2>250843475</h2>

        <h3>Question 1</h3>
        <form action = "question1_purchasedata.php" method = "post">
            <?php include 'question1.php'; ?>	
			<br />
			<input type = "submit" value= "Show Purchases!"/>
		</form>

        <h3>Question 2</h3>
        <form action = "question2_products.php" method = "post">
            <input type="radio" name="user_choice" value="Price ASC"/>XYZ<br>
            <input type="radio" name="user_choice" value="Price DSC"/><br>	
            
			<input type = "submit" value= "Show Purchases!"/>
		</form>
		
    </body>
</html>