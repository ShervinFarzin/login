<!DOCTYPE html>
<html>
    <head>
        <title>HOME PAGE</title>
    </head>
    <body>
		<form action="#" method="POST">
			<input type="text" value="" name="pass" placeholder="Password..."/>
			<input type="submit" value="Login"><br/><br/>
		</form>
    </body>
	<?php
		if ($_SERVER["REQUEST_METHOD"]=="POST"){
			if (isset($_POST["pass"])){
				$tmp1=$_POST["pass"];
				if ($tmp1=='shervin'){
					echo "Login Successful";					
				}else{
					echo "Login Failed";					
				}
			}
		}
	?>
</html>
