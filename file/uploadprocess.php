<?php


	//1.接收提交文件的用户
	$username=$_POST['username'];
	$fileintro=$_POST['fileintro'];

//	echo $username.$fileintro;

	//我们这里需要使用到 $_FILES（超全局数组）
//	echo "<pre>";
//	print_r($_FILES);
//	echo "</pre>";
	
	//获取文件的大小
	$file_size=$_FILES['myfile']['size'];

	if($file_size>2*1024*1024){
		echo "文件过大,不能上传大于2m文件";
		exit();
	}

	//获取文件的类型
//	$file_type=$_FILES['myfile']['type'];
//	if($file_type!='image/jpg' && $file_type !='image/jpeg' && $file_type !='image/png'){
//		echo "文件类型只能是 jpg的";
//		exit();
//	}

	//判断是否上传ok
	if(is_uploaded_file($_FILES['myfile']['tmp_name'])){
		//把文件转存到你指定的目录
		$uploaded_file=$_FILES['myfile']['tmp_name'];

		//我们给每个用户动态的创建一个文件夹
		$user_path=$_SERVER['DOCUMENT_ROOT']."/file/up/".$username;

		//判断该用户是否已经有文件夹
		if(!file_exists($user_path)){
			mkdir($user_path);
		}

		$file_true_name=$_FILES['myfile']['name'];
		$move_to_file=$user_path."/".time().rand(1,1000).substr($file_true_name,strrpos($file_true_name,"."));

		if(move_uploaded_file($uploaded_file,iconv("utf-8","gb2312",$move_to_file))){
			echo $_FILES['myfile']['name']."上传ok";
		}else{
			echo "上传失败";
		}
	}else{
		echo "上传失败";
	}


?>