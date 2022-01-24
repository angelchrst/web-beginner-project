<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/design.css">
    <title>REGISTER</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Sacramento&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
        body {
            background-color: #043927;
            font-family: 'Josefin Sans', sans-serif;
            color: #043927;
        }
        #content {
            width: 1100px;
            margin: 15px auto;
            height: auto;
            padding: 20px;
            background-color: #FFF;
            box-shadow: 0 4px 8px 0;
            border-radius: 17px;
        }

        .field {
            width: 420px;
            height: 30px;
            border: 2px solid #CCE2CB;
            border-radius: 5px;
        }

        .button {
            border: 1px solid #B6CFB6;
            border-radius: 3px;
            color: #043927;
            background-color: #B6CFB6;
            font-weight: bold;
            font-size: 12pt;
            width: 550px;
            height: 40px;
        }
        
        .button:hover {
            border: 1px solid #043927;
            border-radius: 3px;
            color: #FFF;
            background-color: #043927;
            font-weight: bold;
            font-size: 12pt;
            width: 550px;
            height: 40px;
        }
        .footer_text {
            font-family: 'Sacramento', cursive;
            color: #688F4E;
        }
    </style>
</head>
<body>
    <div id="content">
    <h1 style="text-align: center;">REGISTER</h1>
    <form action="action_register.php" method="post">
    <table align="center" width="550" cellpadding="5">
    	<tr>
    		<td><label for="name">Name</label></td>
    		<td><input class="field" type="text" id="name" name="name" placeholder="Your name" required></td>
    	</tr>
    	<tr>
    		<td><label for="uname">Username</label></td>
    		<td><input class="field" type="text" id="uname" name="uname" placeholder="Max 10 characters" required></td>
    	</tr>
    	<tr>
    		<td><label for="pass">Password</label></td>
    		<td><input class="field" type="password" id="pass" name="pass" placeholder="Your password" required></td>
    	</tr>
    	<tr>
			<td align="center" colspan="2">
				<input class="button" type="submit" value="REGISTER" name="register">
			</td>
		</tr>
    </table> 
    <p style="text-align: center;">Already have an account?  <a href="login.php" style="text-decoration: none;">Login</a></p> 
    </form>
    <hr>
    <h1 class="footer_text">Chrysunthemoon</h1>
    </div>
</body>
</html>