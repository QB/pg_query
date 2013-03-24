<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8" />
	<style>
		#button {
			border: 1px solid #ccc;
			padding: 5px 15px;
			border-radius: 10px;
			cursor: pointer;
			background: #eee;
		}
		p{line-height: 1.8em;}
	</style>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
	<script>
	$(function(){
		$('#button').click(function(){
			var query = $("#area").val();
			$("#kakunin").text(query);
			$.ajax({
				type: 'post',
				url: 'post.php',
				data: { 'pd': query },
				success: function(data){ $("#return").text(data); } //post.php に出力された内容
			});
		});
	});
	</script>

	<p>下に実行したいPostgreSQLのコマンドを入力して、実行ボタンを押してください。</p>
	<textarea id="area" rows="6" cols="70"></textarea>
	<a id="button">実行</a><br />
	<p>入力内容：<span id="kakunin"></span></p>
	<p>結果：<span id="return"></span></p>
</body>
</html>
