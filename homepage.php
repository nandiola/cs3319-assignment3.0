<html>
	<head>
		<meta charset="utf-8">
		<title>Assignment 3 Homepage</title>
	</head>
	
	<body>	
    <?php include 'connector.php'; ?>	
		
				
		<h1>CS3319 Assignment 3</h1>
		<h2>Anirudha Nandi</h2>
        <h2>250843475</h2>

        <h3>Question 1</h3>
        <form action = "question1_purchasedata.php" method = "post">
            <?php include 'question1buttons.php'; ?>	
			<br />
			<input type = "submit" value= "Show Purchase Data"/>
		</form>

        <h3>Question 2</h3>
        <form action = "question2_products.php" method = "post">
            <input type="radio" name="user_choice" value="Price ASC"/>Price: Ascending<br>
            <input type="radio" name="user_choice" value="Price DSC"/>Price: Descending<br>	
            <input type="radio" name="user_choice" value="Description ASC"/>Description: Ascending<br>	
            <input type="radio" name="user_choice" value="Description DSC"/>Description: Descending<br>	
            
			<input type = "submit" value= "See Products"/>
		</form>

        <h3>Question 3</h3>
        <form action = "question3_enterpurchase.php" method = "post">
            <?php include 'question3buttons.php'; ?>	
			<br />
			<input type = "submit" value= "Enter Purchase"/>
		</form>

        <h3>Question 4</h3>
        <form action = "question4_entercustomer.php" method = "post">
            <?php include 'question4buttons.php'; ?>	
			<br />
			<input type = "submit" value= "Enter Customer"/>
		</form>

        <h3>Question 5</h3>
        <form action = "question5_changephonenumber.php" method = "post">
            change phone number. Enter Customer ID to begin: <input type="text" name="customer_id"><br>	
			<br />
			<input type = "submit" value= "Enter Customer"/>
		</form>

        <h3>Question 6</h3>
        <form action = "question6_delete.php" method = "post">
            <?php include 'question6_buttons.php'; ?>	
			<br />
			<input type = "submit" value= "Delete This User"/>
		</form>
		
    </body>
</html>