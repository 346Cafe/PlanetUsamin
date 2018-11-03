<?php
	require_once "utils/Template.class.php";
	$template = __DIR__ . "/templates/%s.template.html";
	$css = __DIR__ . "/assets/css/%s.css";
	Template::register("navbar", sprintf($template, "navbar"));
	Template::register("comment", sprintf($template, "comment"));
	Template::register("header", sprintf($template, "header"));
	Template::register("developing", sprintf($template, "developing"));
	Template::register("copyright", sprintf($template, "copyright"));
	Template::register("bootstrap", sprintf($css, "bootstrap.min"));
	Template::register("maincss", sprintf($css, "main"));
?>
<!doctype html>
<html lang="ja">
	<head>
		<?php Template::show("comment", 2); ?>
		<title>ウサミン星</title>
		<?php Template::show("header", 2); ?>
		<style>
			<?php
				Template::show("bootstrap", 3);
				Template::show("maincss", 3, true);
			?>
		</style>
	</head>

	<body class="bg-light">
		<?php Template::show("navbar", 2); ?>

		<?php Template::show("developing", 2); ?>

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

		<?php Template::show("copyright", 2); ?>
	</body>
</html>