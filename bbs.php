<?php

//この部分を外部ファイルに
$dsn = 'mysql:host=localhost;dbname=test;unix_socket=/tmp/mysql.sock';
$username = 'ebara';
$password = 'Ebara1965';

//PDOでデータベースに接続（親クラスに）
	try {
	    $pdo = new PDO($dsn, $username, $password);
	    print('接続成功');
    }catch(PDOException $e){
	    print('接続失敗'.$e->getMessage());
    	die();
    }
    
//（これを子クラスに）
class DBConsole {
	function DBSelect () {
		$stmt = $pdo->query("SELECT * FROM sample");
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    		echo $row;
//insert
//update
//delete
        }
	}
}

//insertのときに使う
$ids = array(4,5,6);
$bodys = array("hoge4", "hoge5", "hoge6");

//呼び出し
$dbconsole = new DBConsole();
$dbconsole->DBSelect();

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
</body>
</html>
