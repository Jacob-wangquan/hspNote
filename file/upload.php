<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<link rel="stylesheet" href="../css/my.css" type="text/css" />
	</head>
	<div class="register">
	<!-- 文件上传要注意:①enctype  ②method post-->

		<form enctype="multipart/form-data" method="post"  action="uploadprocess.php" name="myform">
		<table>
		<tr><td align="center"  colspan="2"><font style="font-size: 40px;font-family: 华文彩云;">文件上传</font></td></tr>
		<tr><td>请填写用户名:</td><td><input type="text" name="username" /></td></tr>
		<tr><td>请简单介绍该文件</td><td><textarea name="fileintro" rows="10" cols="80"></textarea></td></tr>
		<tr><td>请选择你要上传文件:</td><td><input type="file" name="myfile" /></td></tr>
		<tr><td><input type="submit" value="上传文件" /></td><td></td></tr>		
		</table>
		</form>
	</div>
</html>
