<!doctype html>
<html lang="en">

<head>
	<title>Dashboard | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?= base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url()?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url()?>assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="<?= base_url()?>assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?= base_url()?>assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?= base_url()?>assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="<?= base_url()?>https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url()?>assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?= base_url()?>assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand" style="padding:12px 0 10px 10px;">
				<a href="<?= base_url()?>index.html"><img src="<?= base_url()?>assets/img/logo-dark.png" alt="NBA Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn navbar-btn-right">
					<a class="btn btn-success update-pro" href="<?= base_url()?>https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li>
                            <h4 class="update-pro" style="padding: 20px 7px 0 0;">Welcome</h4>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="<?= base_url()?>index.php/home" class=<?=$aktif[0]?>><i><img src="<?=base_url()?>assets/img/dribble.png"></i>Home</a></li>
						<li><a href="<?= base_url()?>index.php/teams" class="<?=$aktif[1]?>"><i><img src="<?=base_url()?>assets/img/badge.png"></i>Teams</a></li>
						<li><a href="<?= base_url()?>index.php/Player" class="<?=$aktif[2]?>"><i><img src="<?=base_url()?>assets/img/player.png"></i>Players</a></li>
						<li><a href="<?= base_url()?>index.php/national" class="<?=$aktif[3]?>"><i><img src="<?=base_url()?>assets/img/nat.png"></i>Nationality</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
                    <?php $this->load->view($konten);
                    ?>
                </div>
            </div>
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2019 <a href="https://www.nba.com" target="_blank">NBA</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="<?= base_url()?>assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url()?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= base_url()?>assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?= base_url()?>assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="<?= base_url()?>assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="<?= base_url()?>assets/scripts/klorofil-common.js"></script>
</body>

</html>
