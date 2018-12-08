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
	Template::register("maincss", sprintf($css, "main.min"));
?>
<!doctype html>
<html lang="ja">
	<head>
		<?php Template::show("comment", 2); ?>
		<title>ウサミン星 | お問い合わせ</title>
		<?php Template::show("header", 2); ?>
		<style>
			<?php
				Template::show("bootstrap", 3);
				Template::show("maincss", 3);
			?>
		</style>
		<script src="/assets/js/contact.min.js" defer></script>
	</head>

	<body class="bg-light">
		<?php Template::show("navbar", 2); ?>

		<?php Template::show("developing", 2); ?>

		<div class="container mt-4">
			<div class="card shadow border-0">
				<div class="card-body">
					<h4 class="card-title">お問い合わせ</h4>
					<hr>
					<div class="form-group">
						<label for="mail" class="col-12 col-form-label">メールアドレス</label>
						<div class="col-10 col-sm-8 col-md-6 col-lg-4">
							<input class="form-control" type="text" placeholder="hello@example.com" id="mail">
						</div>
					</div>
					<div class="form-group">
						<label for="content" class="col-12 col-form-label">内容</label>
						<div class="col-10">
							<textarea class="form-control" id="content" rows="5"></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-8">
							<button class="col-6 col-sm-4 btn btn-secondary" disabled="disabled" type="submit" id="submit">送信</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php Template::show("copyright", 2); ?>
	</body>
</html>