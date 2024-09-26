
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Admin Login Form </title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Fitness Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->

	<!-- css files -->
	<link rel="stylesheet" href="login/css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="login/css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Sigmar+One&amp;subset=latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<!-- title -->
	<h1>Admin Login Form </h1>
	<!-- //title -->

	<!-- content -->
	<div class="sub-main-w3">
		<form action="../log_action.php" method="post">
			<div class="form-style-agile">
				<label>
					Select An Available Option
					
				</label>
				
        <select name="type" style="width: 100%;
    color: #000;
    outline: none;
    font-size: 14px;
    letter-spacing: 1px;
    padding: 15px 15px;
    box-sizing: border-box;
    border: none;
    background: #fff;
    box-shadow: -15px 15px 1px -10px rgb(60, 231, 160);"> 
    	<option>--------Select User----------</option>
          <option value="Admin">Adminportal 2</option>
        </select>
			</div>
			<div class="form-style-agile">
				<label>
					Username
					<i class="fas fa-user"></i>
				</label>
				<input placeholder="Username" name="user" type="text" required="">
			</div>
			<div class="form-style-agile">
				<label>
					Password
					<i class="fas fa-unlock-alt"></i>
				</label>
				<input placeholder="Password" name="pass" type="password" required="">
			</div>
			<!-- checkbox -->
			<div class="wthree-text">
				<ul>
					<li>
						<!-- switch -->
						<div class="checkout-w3l">
							<div class="demo5">
							</div>
						
						</div>
						<!-- //checkout -->
					</li>
					<li>
				
					</li>
				</ul>
			</div>
			<!-- //switch -->
			<input type="submit" value="Log In" name="login">
		</form>
	</div>
	<div class="clear"></div>
	<!-- //content -->

	<!-- copyright -->
	<div class="footer">
		<h2>&copy; 2021 Fitness Login Form. All rights reserved | Design by
			<a href="http://scopos.in">Scopos Technologies PVT LTD Kollam</a>
		</h2>
	</div>
	<!-- //copyright -->

</body>

</html>