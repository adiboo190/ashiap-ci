<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />

	<title><?php echo $this->lang->line( 'loginTitle' ); ?></title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/siakad.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/toastr/toastr.min.css" />
</head>
<body>

	<div class="container">
		<div class="row justify-content-center align-items-center main-row">
			<div class="col-md-5">
				<div class="mb-3 text-center">
					<i class="fas fa-user fa-5x"></i>
				</div>
				<div class="card bg-danger shadow mb-3 collapse" id="alert-result">
					<div class="card-header bg-white">
						<h6 class="m-0" id="resultTitle"><?php echo $this->lang->line( 'alertResultTitle' ); ?></h6>
					</div>
					<div class="card-body text-white">
						<span id="span-alertResult1" class="d-none"><?php echo $this->lang->line( 'alertResultText1' ); ?></span>
						<span id="span-alertResult2" class="d-none"><?php echo $this->lang->line( 'alertResultText2' ); ?></span>
						<span id="span-alertResult3" class="d-none"><?php echo $this->lang->line( 'alertResultText3' ); ?></span>
						<span id="span-alertResult4" class="d-none"><?php echo $this->lang->line( 'alertResultText4' ); ?></span>
						<span id="span-alertResult5" class="d-none"><?php echo $this->lang->line( 'alertResultText5' ); ?></span>
						<span id="span-alertResult6" class="d-none"><?php echo $this->lang->line( 'alertResultText6' ); ?></span>
						<span id="span-alertResult7" class="d-none"><?php echo $this->lang->line( 'alertResultText7' ); ?></span>
					</div>
				</div>
				<div class="card shadow">
					<form class="card-body needs-validation" data-redirect="<?php echo base_url('dashboard'); ?>" id="login" action="<?php echo base_url(); ?>" method="post">

						<div class="row align-items-center">
							<label for="inputEmail" class="col-sm-5 mb-3 col-form-label">
								<span><?php echo $this->lang->line( 'usernameLabel' ); ?></span>
								<span data-toggle="popover" title="<?php echo $this->lang->line( 'hintTitle' ); ?>" data-content="<?php echo $this->lang->line( 'usernameLabelHint' ); ?>">
									<i class="fas fa-info-circle ml-2 text-info"></i>
								</span>
							</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" name="username" id="inputEmail" placeholder="<?php echo $this->lang->line( 'usernameFieldText' ); ?>" />
							</div>
							<label for="inputPassword" class="col-sm-5 mb-3 col-form-label">
								<span><?php echo $this->lang->line( 'passwordLabel' ); ?></span>
								<span data-toggle="popover" title="<?php echo $this->lang->line( 'hintTitle' ); ?>" data-content="<?php echo $this->lang->line( 'passwordLabelHint' ); ?>">
									<i class="fas fa-info-circle ml-2 text-info"></i>
								</span>
							</label>
							<div class="col-sm-7">
								<input type="password" name="password" class="form-control" id="inputPassword" placeholder="<?php echo $this->lang->line( 'passwordFieldText' ); ?>" />
							</div>
							<div class="col-7">
								<div class="custom-control custom-checkbox my-1 mr-sm-2">
									<input type="checkbox" class="custom-control-input" name="remember" id="rememberCheckbox" />
									<label class="custom-control-label" for="rememberCheckbox">
										<span><?php echo $this->lang->line( 'rememberLabel' ); ?></span>
										<span data-toggle="popover" title="<?php echo $this->lang->line( 'hintTitle' ); ?>" data-content="<?php echo $this->lang->line( 'rememberLabelHint' ); ?>">
											<i class="fas fa-info-circle ml-2 text-info"></i>
										</span>
									</label>
								</div>
								<p class="m-0"><a href=""><?php echo $this->lang->line( 'forgotText' ); ?></a></p>
							</div>
							<div class="col-5">
								<button type="submit" class="btn btn-block"><i class="fas fa-sign-in-alt mr-2"></i><?php echo $this->lang->line( 'loginBtn' ); ?></button>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/fontawesome-free/js/all.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/toastr/toastr.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/siakad.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/ajax.js"></script>
</body>
</html>