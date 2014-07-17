<?php

//そのうちこの部分を外部ファイルに
$dsn = 'mysql:host=localhost;dbname=test;unix_socket=/tmp/mysql.sock';
$username = 'ebara';

$password = 'Ebara1965';

//PDOでデータベースに接続（そのうち親クラスにする）
try {
	$pdo = new PDO($dsn, $username, $password);
    print('接続成功');
}catch(PDOException $e){
    print('接続失敗'.$e->getMessage());
   	die();
}
    
//（ここからしたを子クラスに）
//selectして表示
$stmt = $pdo->query("SELECT * FROM sample");
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
	echo $row['id'];
	echo $row['body'];
}
//insert
//値を入れてる


$id = 4;
$body = hoge4;
//insert
$stmt1 = $pdo->query("INSERT test(id,body) VALUES(:id, :body)");
$stmt1 = bindValue(':id', PDO::PARAM_INT);
$stmt1 = bindValue(':body', PDO::PARAM_STR);
$stmt1->excute();

echo $row['id'];
echo $row['body'];




//insert
//update
//delete

//	}
//}


//呼び出し
//$dbconsole = new DBConsole();
//$dbconsole->DBSelect();


?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
</body>
</html>
