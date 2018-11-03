<?php
	require_once "utils/Template.class.php";
	$template = __DIR__ . "/templates/%s.template.html";
	Template::register("navbar", sprintf($template, "navbar"));
?>
<!doctype html>
<html lang="ja">
	<head>
		<meta charset="utf-8" />
		<!--
		 ###################################################################################
		   『歌って踊れる声優アイドル目指して、ナナはウサミン星からやってきたんですよぉっ。キャハッ☆』
		 ###################################################################################
		-->
		<title>ウサミン星</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="application-name" content="ウサミン星" />
		<meta name="keywords" content="ウサミン,安部菜々" />
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
		<meta name="author" content="Abe Nana" />
		<meta name="theme-color" content="#f08080" />
		<meta property="og:url" content="https://www.usamin.site" />
		<meta property="og:image" content="https://www.usamin.site/assets/images/ogp.jpg" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="ウサミン星" />
		<meta property="og:site_name" content="www.usamin.site" />
		<meta property="og:description" content="「ナナ、電波がビビッと来ました！」" />
		<meta property="og:locale" content="ja_JP" />
		<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:title" content="ウサミン星" />
		<meta name="twitter:description" content="「ナナ、電波がビビッと来ました！」" />
		<meta name="twitter:image" content="https://www.usamin.site/assets/images/ogp.jpg" />
		<link rel="shortcut icon" type="image/png" href="/apple-touch-icon.png" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
		<link rel="mask-icon" href="/mask-icon.svg" color="#c30234" />
		<link rel="manifest" href="/assets/manifest.json" />
		<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="//use.fontawesome.com/releases/v5.4.2/css/all.css" rel="stylesheet">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="/assets/js/bootstrap.min.js"></script>
		<style>
			.mt-50 {
				margin-top: 50px;
			}

			.mt-100 {
				margin-top: 100px;
			}

			.navbar-toggler .navbar-toggler-icon {
				background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgb(255,255,255)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
			}

			.bg-navbar {
				background-color: rgba(0, 154, 255, 0.9);
			}

			.border-navbar {
				border-color: rgba(100, 150, 255, 0.9) !important;
			}

			.navbar-toggler{
				background-color: rgba(0, 187, 255, 0.9);
			}
		</style>
	</head>

	<body class="bg-light">
		<?php Template::show("navbar", 2); ?>

		<div class="container mt-100">
			<div class="col-sm-8">
				<div class="alert alert-warning" role="alert">
					<h4 class="alert-heading">注意</h4>
					<hr>
					<p class="mb-0">このページは現在作成中です。
					一部のコンテンツしか閲覧ができない可能性がございます。</p>
				</div>
			</div>
		<div>

<?php for($i=0;$i<10;$i++){ ?>
		<div class="container mt-4">
			<div class="row">
				<div class="col-sm">
					<div class="card shadow-sm border-0">
						<div class="card-body">
							<h4 class="card-title">Card title</h4>
							<hr>
							<p class="card-text">Sample!</p>
						</div>
					</div>
				</div>
				<div class="col-sm">
					<div class="card shadow-sm border-0">
						<div class="card-body">
							<h4 class="card-title">Card title</h4>
							<hr>
							<p class="card-text">Sample!</p>
						</div>
					</div>
				</div>
			</div>			
		</div>
<?php } ?>

		<footer class="footer mt-5 mb-3">
			<div class="container">
				<small>Copyright (C) 2018 <a href="https://github.com/346Cafe">346Cafe</a> All Rights Reserved.</small>
			</div>		
		</footer>
	</body>
</html>