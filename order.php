<html>

<body>

<?php 

     $na = $_POST['na'];

$addr = $_POST['addr'];

$sex = $_POST['sex'];

$ea = $_POST['ea'];
	$tb = $_POST['tb'];
		$pe = $_POST['pe'];
			$meal = $_POST['meal'];
 

echo $na . " 您好 "; 

echo "您的地址 ". $addr; 

echo "您的email". $ea;

echo "您的桌號". $tb;

echo "您的人數". $pe;

echo "您的套餐".$meal;


echo "性別 : " ; 

     switch ($sex)

{

case 0: 

echo "女";  

echo "<img src = 'img/girl.jpg'>"; 

break; 

case 1:

echo "男";  

echo "<img src = 'img/boy.jpg'>"; 

break; 

case 2:

echo "不告訴你";   

echo "<img src = 'img/3.png'>"; 

break; 

}

     

?>

</body>

</html>