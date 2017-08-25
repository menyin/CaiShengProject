<?exit?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{$array['title']}</title>
	<style>
		* { margin: 0; padding: 0;}
		body { font-size: 14px; color: #444; font-family: 微软雅黑;}
		#dialog_ts { width: 320px; position: absolute; left: 50%; top: 100px; margin-left: -150px;  z-index: 9999; }
		#dialog_ts h2 { height: 30px; background: #2980B9; font-size: 16px; color: #fff; padding: 0 10px 0 15px; line-height: 30px; font-weight: normal; border: 1px solid #2980B9; border-radius: 4px 4px 0 0; }
		#close { float: right; font-size: 18px; cursor: pointer;}
		#dialog_con { padding: 25px 15px ; border: 1px solid #ccc; border-top: none; border-radius: 0 0 4px 4px;}	
		#btns { margin-top: 20px; text-align: right;}
		#btns a{ width: 70px; height: 30px; line-height: 30px; border: 1px solid #ccc; background: #f2f2f2; color: #444; font-family: 微软雅黑; cursor: pointer; border-radius: 4px; margin-left: 10px; outline: none; display: inline-block; zoom: 1; text-align: center; text-decoration: none;}
		#btns #btn2 { background: #2980B9;  color: #fff; border:1px solid #2470A2;}
		#dialog_ts.dialog_red h2 { background:#E74C3C;  border: 1px solid #E74C3C;}
		#dialog_ts.dialog_red #btn2 { background: #E74C3C; border: 1px solid #E44432; }
		#dialog_ts.dialog_green h2 { background: #27AE60; border: 1px solid #27AE60;}
		#dialog_ts.dialog_green #btn2 { background: #27AE60; border:1px solid #219452; }
	</style>
</head>
<body>

	<div id="dialog_ts" class="dialog_{$array['type']}">
		<h2><span id="close">&times;</span>{$array['title']}</h2>
		<div id="dialog_con">
			<!-- <span id="tips">!</span> -->
			<p>{$array['message']}</p>
			<p id="autoDir"></p>
			<!--{if is_array({$array['button']})}-->
			<p id="btns">
				<!--{loop $array['button'] $button_key $button}-->
				<a href="{$button['url']}" id="btn1">{$button['title']}</a>
				<!--{/loop}-->
			</p>
			<!--{/if}-->
		</div>
	</div>
	
	<script>
		var close = document.getElementById('close');
		var dialog = document.getElementById('dialog_ts');
		close.onclick = function(){
			window.location.href = "{$array['from']}";
		};

		var num = {$sleep};
		function countDown() {
			if (num >= 0) {
				var str = '';
				str += '<br>系统将在 ' + num + ' 秒钟后自动跳转，<a href="{$array['from']}">点击直接跳转</a>';
				document.getElementById('autoDir').innerHTML = str;
				num--;
				setTimeout(countDown, 1000);
			}else {
				window.location.href = "{$array['from']}";
			}
		}
		if (num>0) window.onload = countDown;		
	</script>
</body>
</html>