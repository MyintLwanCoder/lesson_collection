<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS</title>
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/4.1.1/jquery.min.js"></script>
      <style type="text/css">
          #side_bar{
              background-color: whitesmoke;
              padding: 50px;
              width: 2300px;
              height: 430px;
          }
      </style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Library Management System(LMS)</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Admin Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php">User Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="signup.php">Register</a>
				</li>
			</ul>
		</div>
	</nav><br>
    <span><marquee>This is Libary Management System. Libray Opens at 8:00Am and close at 8:00 PM</marquee></span><br>
     <div class="row">
         <div class="col-md-4" id="side_bar">
              <h5>Libray Timing</h5>
              <ul>
                  <li>Opening Timing 8:00 PM</li>
                  <li>Closing Timing 8:00 PM</li>
                  <li>(Sunday off)</li>
              </ul>
              <h5>What we provide?</h5>
              <ul>
                 <li>Full Furniture</li>
                 <li>Free Wi-fi</li>
                 <li>News Papers</li>
                 <li>Discussion Room</li>
                 <li>RO Water</li>
                 <li>Peacefull Environment</li>
              </ul>
         </div>
         <div class="col-md-8" id="main_content">
          <center><h3>User Login Form</h3></center>
        <form action="register.php" method="POST">
            <div class="form-group">
                 <div class="form-group">
                   <label for="name">Name:</label><br>
                   <input type="text" name="name" class="form control" required>
            </div>
                   <label for="name">Email ID:</label><br>
                   <input type="Email" name="email" class="form control" required>
            </div>
            <div class="form-group">
                   <label for="name">Pasword:</label><br>
                   <input type="password" name="password" class="form control" required>
            </div>
           
            <div class="form-group">
                   <label for="name">Mobile:</label><br>
                   <input type="text" name="mobile" class="form control" required>
            </div>
            <div class="form-group">
                   <label for="name">Adress:</label><br>
                   <input type="text" name="adress" class="form control" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
     </div>
     </div>
</body>
</html>