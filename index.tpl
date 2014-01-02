<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title></title>
	<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<p class="blue">click to toggle!</p>

	<script type="text/javascript">
	$(function(){

	        $("#acMenu dt").on("click", function() {
	            $(this).next().slideToggle();
	        });

	});
	</script>

	<dl id="acMenu">
    <dt>アコーディオンメニュー1</dt>
    <dd>アコーディオンメニューが開く。</dd>
    <dt>アコーディオンメニュー2</dt>
    <dd>アコーディオンメニューが開く。</dd>
    <dt>アコーディオンメニュー3</dt>
    <dd>アコーディオンメニューが開く。</dd>
	</dl>
</body>
</html>	
