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
        <form action = "question5_newnumber.php" method = "post">
            <?php include 'question5_buttons.php'; ?>
            Enter new number: <input type="text" name="new_phone_number"><br>
			<input type = "submit" value= "Choose Customer"/>
		</form>

        <h3>Question 6</h3>
        <form action = "question6_delete.php" method = "post">
            <?php include 'question6_buttons.php'; ?>	
			<br />
			<input type = "submit" value= "Delete This User"/>
		</form>

        <h3>Question 7</h3>
        <form action = "question7_showproducts.php" method = "post">
            See users who purchased items in quantity more than: <input type="text" name="quantity_entered"><br>	
			<br />
			<input type = "submit" value= "See Purchases"/>
		</form>
		
        <h3>Question 8</h3>
        <?php include 'question8_products.php'; ?>

        <h3>Question 9</h3>
        <form action = "question9_productinfo.php" method = "post">
            <?php include 'question9_buttons.php'; ?>
			<br />
			<input type = "submit" value= "See Revenue"/>
		</form>

    </body>
</html>