
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="format-detection" content="telephone=no" />
    <link rel = "Shortcut Icon" href="http://zixie.sinaapp.com/resource/images/zixie_32.ico" />

    <meta name="author" CONTENT="子勰(bihe0832), code@bihe0832.com" />
    <meta name="keywords" content="PHP 文件上传" />
    <meta name="description" content="基于PHP的一个简单文件上传demo" />
    <title>基于PHP的一个简单文件上传demo</title>

    <link rel="stylesheet" type="text/css" href="./main.css" />
</head>
<body>
  <body>
  <div id="page">
    <h1 class="clear">基于PHP的一个简单文件上传demo</h1>
    <div id="content">
      <div id="dropZone" style="line-height: 100px">
      	<form action="" enctype="multipart/form-data" method="post" name="uploadfile">
      	上传文件：<input class="btn btn-default btn-lg" type="file" name="upfile" /><input class="btn btn-default btn-lg" type="submit"value="上传" />
      	</form>
      </div>
      <?php
      if (is_uploaded_file ( $_FILES ['upfile'] ['tmp_name'] )) {
      	$upfile = $_FILES ["upfile"];
      	// 获取数组里面的值
      	$name = $upfile ["name"]; // 上传文件的文件名
      	$type = $upfile ["type"]; // 上传文件的类型
      	$size = $upfile ["size"]; // 上传文件的大小
      	$tmp_name = $upfile ["tmp_name"]; // 上传文件的临时存放路径
      	                              // 判断是否为图片
      	switch ($type) {
      		case 'image/pjpeg' :
      			$okType = 1;
      			break;
      		case 'image/jpeg' :
      			$okType = 1;
      			break;
      		case 'image/gif' :
      			$okType = 1;
      			break;
      		case 'image/png' :
      			$okType = 1;
      			break;
      		case 'application/php' :
      			$okType = 2;
      			break;
      		case 'application/octet-stream' :
      			$okType = 2;
      			break;
      		case 'text/html' :
      			$okType = 3;
      			break;
      	}

      	echo "<div id=\"dropZone\">";
      	if ($okType) {

      		$error = $upfile ["error"]; // 上传后系统返回的值
          /**
      		 * 0:文件上传成功<br/>
      		 * 1：超过了文件大小，在php.ini文件中设置<br/>
      		 * 2：超过了文件的大小MAX_FILE_SIZE选项指定的值<br/>
      		 * 3：文件只有部分被上传<br/>
      		 * 4：没有文件被上传<br/>
      		 * 5：上传文件大小为0
      		 */
      		echo "<p style=\"text-align:left;text-indent:2em\">上传文件名称：" . $name . "</p>";
      		echo "<p style=\"text-align:left;text-indent:2em\">上传文件大小：" . $size . "</p>";
      		// 把上传的临时文件移动到up目录下面
      		move_uploaded_file ( $tmp_name, dirname(__FILE__).'/'.$name );
      		$destination = $name;
      		if ($error == 0) {
      			if(1 == $okType){
      				echo "<p style=\"text-align:left;text-indent:2em\">上传图片预览：</p><img src=./" . $destination . ">";
      			}else{
      				echo "<p style=\"text-align:left;text-indent:2em\">上传文件结果：文件上传成功";
      			}
      		} else if ($error == 1) {
      			echo "<p style=\"text-align:left;text-indent:2em\">文件过大，请联系管理员</p>";
      		} else if ($error == 2) {
      			echo "<p style=\"text-align:left;text-indent:2em\">文件过大，请联系管理员</p>";
      		} else if ($error == 3) {
      			echo "<p style=\"text-align:left;text-indent:2em\">文件只有部分被上传，请重试</p>";
      		} else if ($error == 4) {
      			echo "<p style=\"text-align:left;text-indent:2em\">没有文件被上传，请重试</p>";
      		} else {
      			echo "<p style=\"text-align:left;text-indent:2em\">上传文件大小为0，请重试!（".$error."）</p>";
      		}

      	} else {
      		echo "<p style=\"text-align:left;text-indent:2em\">请上传jpg，gif，png，MD等格式文件！ ".$type."</p>";
      	}
      	echo "</div>";
      }
      ?>

      <div id="dropZone" style="text-align:left;text-indent:1em">
      	<p >注意事项：</p>
      	<ul style="text-indent:3em">
      		<li>上传后的文件将于当前文件存在于同一目录下。</li>
          <li>使用过程中如有任何疑问请直接联系管理员</li>
      	</ul>
      </div>
    </div>
  </div>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=37805902" charset="UTF-8"></script>
</body>
</html>
