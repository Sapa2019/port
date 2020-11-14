 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Admin Panel</title>

 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
 	<link rel="stylesheet" href="css/styles.css">
 	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> -->
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

 	<div class="sidebar">
 		<center>
 			<img class="profile_image" src="img/sapa.jpg">
 			<h4>Sapa</h4>
 		</center>

 		<a href="#"><i class="fas fa-desktop"></i><span>Desktop</span></a>
 		<a href="#"><i class="fas fa-cogs"></i><span>Menu</span></a>
 		<a href="#"><i class="fas fa-table"></i><span>Tables</span></a>
 		<a href="#"><i class="fas fa-th"></i><span>Forms</span></a>
 		<a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
 		<a href="#"><i class="fas fa-slider-h"></i><span>Settings</span></a>
 	</div>

 	<div class="content">
 		<div id="content_table" style="padding-top: 100px;padding-left: 200px;">
 			<table class="">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
 		</div>
 	</div>
 
 </body>
 </html>