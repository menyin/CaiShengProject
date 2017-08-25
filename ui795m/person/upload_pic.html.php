<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>文件上传</title>
<!--262144-->
<style>
<!--
.tx { width: 150 ;height: 20px; font-size: 9pt;  border-color: black black #ccc; color: #666;margin-top: 3px;}
.tx1 { width: 50 ;height: 20px; font-size: 9pt; border: 1px solid; border-color: black black #000000; color: #ff0000}
-->
</style>
</head>
<body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0">
<form action="upload.php?act=photo" method="post" enctype="multipart/form-data" name="pic">
<input name="max_file_size" type="hidden" value="2097152">
<input name="pic" type="file" size="25" class="tx">
<input name="submit" type="submit" value="上传" class="btn3">
</form>
</body>
</html>