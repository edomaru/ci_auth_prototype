<?php require_once 'header.php'; ?>

  	<div class="container">
  		<div class="row login-wrapper">
  			<div class="col-md-4 col-md-offset-4">
  				<div class="panel panel-default">
  					<div class="panel-heading">
  						<strong>Login Form</strong>
  					</div>
  					<div class="panel-body">
  						<div class="alert alert-info alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  Enter your username and password
						</div>

  						<form action="#">
  							<div class="form-group">
  								<label for="username">Username</label>
  								<div class="input-group">
  									<span class="input-group-addon">
  										<i class="glyphicon glyphicon-user"></i>
  									</span>
  									<input type="text" name="username" id="username" class="form-control">
  								</div>
  							</div>
  							<div class="form-group">
  								<label for="password">Password</label>
  								<div class="input-group">
  									<span class="input-group-addon">
  										<i class="glyphicon glyphicon-lock"></i>
  									</span>
  									<input type="password" name="password" id="password" class="form-control">
  								</div>
  							</div>
  							<input type="submit" value="Login" class="btn btn-primary">
  						</form>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>

<?php require_once 'footer.php'; ?>