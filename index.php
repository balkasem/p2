<!doctype html>
<html>
<head>
	<link href='../css/main.css' rel='stylesheet' > 
	<title>Bill Splitter</title>
	<meta charset='utf-8'>
	
</head>
		<body>
			<div class="tainer" >
				<h1> Bill Splitter </h1>
				    Slit how many ways?
				    <input type='text' name='WaysNumber'>
				    <br/>
				    How much was the tab?
				    <input type='text' name='TabValue'>
				    <br/>
				    How was the service?
				    <select>
                        <option>
                            Fine
                        </option>
                        <option>
                            Good
                        </option>
                        <option>
                            Amazing
                        </option>
				    </select>
				    <br/>
				    Round Up ? <input type='checkbox' name='RoundUp'>
				<br/>
				    <input type='button' value='Calculate' > 
				<br/>
					<h2> Random Quotes </h2>
					<?php
						$quotes = [
							0 => '“Be yourself; everyone else is already taken.” ― Oscar Wilde',
							1 => '“Be the change that you wish to see in the world.” ― Mahatma Gandhi',
							2 => '“In three words I can sum up everything Ive learned about life: it goes on.” ― Robert Frost'
						];
						echo "<p>" . $quotes[rand(0, 2)] . "</p>"  . "<br/>" ;
					?>
			</div>	
		</body>
</html>
