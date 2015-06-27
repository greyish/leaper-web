<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $meta_desc;?>">
    <meta name="author" content="">
    <title><?php echo $title;?></title>
	<link href="<?php echo $this->config->item('css_url'); ?>bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo $this->config->item('css_url'); ?>login.css" rel="stylesheet">
	<script src="<?php echo $this->config->item('js_url'); ?>jquery.min.js"></script>
	<script src="<?php echo $this->config->item('js_url'); ?>bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row"><div class="col-xs-12"><a href="#" class="active">Login</a></div></div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<div style="display:<?php echo $alert_shown;?>" class="alert alert-danger">
									<button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
									<?php echo validation_errors();echo (isset($error))?$error:"";?>
								</div>
								<form id="login-form" action="" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="email" name="txt_email" id="txt_email" tabindex="1" class="form-control" required valid_email placeholder="Email Address" value="">
									</div>
									<div class="form-group">
										<input type="password" name="txt_pass" id="txt_pass" tabindex="2" class="form-control" required placeholder="Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="btn_submit" id="btn_submit" tabindex="4" class="form-control btn-success btn-login" value="Log In">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
