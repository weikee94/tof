<?php include "templates/document-header.php"; ?>
	<div class="container">
		<div class="row">
			<div class="login col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div class="text-center">UNIss</div>
					</div>
					
					<div class="panel-body">
						<form name="form" id="form" class="form-horizontal">
							
							<div class="input-group">
								
							<span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i>
							</span>
								<input id="user" type="text" class="form-control" name="username" placeholder="Username">
							</div>
							
							
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i>
								</span>
								<input id="password" type="password" class="form-control" name="password" placeholder="Password">
							</div>
							
							<div class="checkbox">
								<label>
									<input type="checkbox">Remember me
								</label>
							</div>
							
							<div class="loginButton">
							<button type="submit" class="btn btn-primary">Login</button>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myRegister">Register</button>
								
				<div class="modal fade bs-exmaple-modal-md" id="myRegister" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">      
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Registration</h4>
            </div>
            <div class="modal-body">
                <form id="frmRegister">
				        <div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>	
							<input type="text" id="name" name="name" placeholder="Name" class="form-control" required>
						</div>
							<br>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input type="email" id="email" name="email" placeholder="Email" class="form-control" required>
                            </div>
                            <span id="emailError"></span>
                            <br>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>	
							<input type="text" id="username" name="username" placeholder="Username" class="form-control" required>
						</div>
							
							<br>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span>
							<input type="password" placeholder="Password" class="form-control" name="password" required>
						</div>
                            <span id="password"></span>
						<br>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span>
							<input type="password"  placeholder="Confirm Password" name="passwordRepeat" class="form-control" required>
						</div>
                            <span id="passwordRepeat"></span>
						<br>
					
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span>
							<div class="dropdown">
								<button class="btn btn-default dropdown-toggle dropdownDesign" type="button" data-toggle="dropdown">Gender<span class="caret"></span></button>
								<ul class="dropdown-menu">
									<li><a href="#">Boy</a></li>
									<li><a href="#">Girl</a></li>
								</ul>
								
							</div>
						</div>
						
							<div class="input-group loginButton">
                            <button type="submit" class="btn btn-default" id="btnRegister">Register</button>
							</div>
						<br>
                        </form>
					</div>
					
                </div>
			</div>
		</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include "templates/document-footer.php";?>