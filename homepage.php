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
        <form action = "question1.php" method = "post">
			Select from any of these customers to see which products they purchased <br />
			<input type="radio" name="customerid" value="31">Sideshow Bob, Springfield, 647-3849, AgentID: 66<br><input type="radio" name="customerid" value="12">Monty Burns, Springfield, 789-0001, AgentID: 99<br><input type="radio" name="customerid" value="15">Fred Flintstone, Boston, 647-3849, AgentID: 11<br><input type="radio" name="customerid" value="14">Peter Griffens, Providence, 987-4567, AgentID: 99<br><input type="radio" name="customerid" value="32">Shah Khann, Oakville, 647-3849, AgentID: 12<br><input type="radio" name="customerid" value="10">Barney Rubble, Boston, 777-1234, AgentID: 11<br><input type="radio" name="customerid" value="21">Homer Simpson, Springfield, 686-8956, AgentID: 99<br><input type="radio" name="customerid" value="13">Wonder Woman, Kypto, 888-1234, AgentID: 33<br>	
			<br />
			<input type = "submit" value= "Show Purchases!"/>
		</form>
		
    </body>
</html>