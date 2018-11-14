<?php
	require_once "utils/Template.class.php";
	$template = __DIR__ . "/templates/%s.template.html";
	$css = __DIR__ . "/assets/css/%s.css";
	Template::register("navbar", sprintf($template, "navbar"));
	Template::register("comment", sprintf($template, "comment"));
	Template::register("header", sprintf($template, "header"));
	Template::register("copyright", sprintf($template, "copyright"));
	Template::register("bootstrap", sprintf($css, "bootstrap.min"));
	Template::register("maincss", sprintf($css, "main"));
?>
<!doctype html>
<html lang="ja">
	<head>
		<?php Template::show("comment", 2); ?>
		<title>ウサミン星 | プライバシーポリシー</title>
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

		<div class="container mt-100">
			<div class="card shadow border-0">
				<div class="card-body">
					<h4 class="card-title">プライバシーポリシー</h4>
					<hr>
					<h5 class="card-text">適用範囲</h5>
					<p class="card-text">本プライバシーポリシーはウサミン星（以下「当サイト」といいます）が提供する全てのサービス（以下「本サービス」といいます）に適用されます。</p>
					<p class="card-text"> サービス別のプライバシーポリシーまたは利用規約等（以下「個別規約」といいます）において個別に本サービスをご利用になる方（以下「利用者」といいます）の情報の取り扱いを規定する場合は、個別規約も適用されます。本プライバシーポリシーと個別規約において矛盾が発生する場合は個別規約が優先されます。</p>
	
					<h5 class="card-text">個人情報の利用目的</h5>
					<p class="card-text">当サイトでは、お問い合わせフォームや本サービスの利用などの際に、利用者のお名前、メールアドレス等の個人情報をご入力いただく場合がございます。</p>
					<p class="card-text">これらの個人情報は、電子メールなどでご連絡させていただく場合のみに利用させていただくものであり、個人情報をご提供いただく際の目的以外では一切、利用いたしません。</p>

					<h5 class="card-text">個人情報の第三者への開示</h5>
					<p class="card-text">当サイトでは、個人情報は適切に管理し、以下に該当する場合を除いて第三者に開示することはありません。</p>
					<p class="card-text">・ご本人のご了解がある場合</p>
					<p class="card-text">・法令等への協力のため、開示が必要となる場合</p>
					<p class="card-text">ご本人からの個人データの開示、訂正、追加、削除、利用停止のご希望の場合には、ご本人であることを確認させていただいた上、速やかに対応させていただきます。</p>

					<h5 class="card-text">免責事項</h5>
					<p class="card-text">当サイトからリンクやバナーなどによって他のサイトに移動された場合、移動先のサイトで提供される情報、サービス等について一切の責任を負いません。</p>
					<p class="card-text">当サイトに掲載された内容や本サービスにより生じた損害等の一切の責任を負いかねますのでご了承ください。</p>

					<h5 class="card-text">プライバシーポリシーの改定について</h5>
					<p class="card-text">本プライバシーポリシーは、適宜行われる見直しにより改定される場合がございます。</p>
					<p class="card-text">尚、改定後の最新のプライバシーポリシーは本ページにて公開されます。</p>

					<div class="mt-5">
						<small>制定 : 2018年11月4日</small><br>
						<small>改定 : 2018年11月6日</small>
					</div>
				</div>
			</div>
		</div>

		<?php Template::show("copyright", 2); ?>
	</body>
</html>