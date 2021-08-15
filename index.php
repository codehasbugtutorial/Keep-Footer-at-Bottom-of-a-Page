<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<title>Keep Footer at Bottom of a Page When Scrolling Demo - CodeHasBug</title>
		<meta name="description" content="This is a demo of Keep Footer at Bottom of a Page When Scrolling" />
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<style>
			body {
				padding: 0;
				margin: 0;
				color: #5f5f5f;
			}
			.wrapper {
				display: flex;
				flex-direction: column;
				min-height: 100vh;
			}

			.header {
				border-bottom: 1px solid #dad8d8;
				background-color: #fff;
				padding: 0 20px;
				padding-top: 1em;
				padding-bottom: 1em;
				font-size: 30px;
			}

			.content {
				background-color: #f7f7f7;
				flex-grow: 1;
				padding: 20px;
				font-size: 24px;
				line-height: 34px;
			}

			.footer {
				border-top: 1px solid #dad8d8;
				background-color: #fff;
				padding: 0 20px;
				padding-top: 1em;
				padding-bottom: 1em;
				font-size: 20px;
				text-align: center;
			}
			
			
		</style>
		
	</head>
	<body>
		<div class="wrapper">
			<div class="header">Site Logo</div>
			<div class="content"> 
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
			</div>
			<div class="footer">All Right Reserved</div>
		</div>
	</body>
</html>