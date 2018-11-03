<?php
	require_once "utils/Template.class.php";
	$template = __DIR__ . "/templates/%s.template.html";
	Template::register("navbar", sprintf($template, "navbar"));
	Template::register("header", sprintf($template, "header"));
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
		<?php Template::show("header", 2); ?>
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