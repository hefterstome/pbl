<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/login_style.css">

	</head>
	<body>
	<section class="ftco-section">
		
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
						@include('message.alert')
		      	<div class="icon d-flex align-items-center justify-content-center" style="background-color: #37517e;">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">LOGIN ADMIN</h3>
						<form action="{{ route('login.admin') }}" method="post" class="login-form">
						@csrf
						<div class="form-group">
							<input type="email" class="form-control rounded-left" placeholder="Email" name="email" id="email" required>
						</div>
						<div class="form-group d-flex">
							<input type="password" class="form-control rounded-left" name="password" id="password" placeholder="Password" required>
						</div>
						<div class="form-group text-center"> 
							<button type="submit" class="form-control btn rounded submit px-4" style="background-color: #37517e;">
								<p style="color: #FFFFFF; margin: 0; font-size: 24px;">Login</p>
							</button>
						</div>			
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

