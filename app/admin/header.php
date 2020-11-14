 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Admin Panel</title>

 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
 	<link rel="stylesheet" href="css/styles.css">
 	<link rel="stylesheet" href="css/style.css">
 	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> -->
 	<style type="text/css">
 		table, th, td {
			border:1px solid black;
			}

		table{
			width: 70%;
			border-collapse: collapse;
			border:1px solid black;
			}
		th{
			height: 50px;
			text-align: left;
		}
		td{
			text-align: center;
			height: 50px;
			vertical-align: bottom;
		}

		th, td{
			padding: 15px;
			text-align: left;
			border: 1px solid #ddd;
		}


 	</style>
 </head>
 <body>
	<input type="checkbox" id="check">

 	<header>
 		<label for="check">
 			<i class="fas fa-bars" id="sidebar_btn"></i>
 		</label>
 		<div class="left_area">
 			<h3>Admin <span>Sapa</span></h3>
 		</div>
 		<div class="right_area">
 			<a href="#" class="logout_btn">Log out</a>
 		</div>
 		
 	</header>