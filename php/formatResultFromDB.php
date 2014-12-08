<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Bootstrap 实例 -数据格式化输出表格</title>
	<link href="../css/bootstrap.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "111111";
$dbname = "myDB";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) 
{
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);
//单引号将所有内容当字符输出
echo '
<table class="table table-striped">
   <caption>数据库查询结果</caption>
   <thead>
      <tr>
         <th>ID</th>
         <th>FIRSTNAME</th>
         <th>LASTNAME</th>
      </tr>
   </thead>
   <tbody>
'; 

if ($result->num_rows > 0) 
{
// 输出每行数据
	while($row = $result->fetch_assoc()) 
	{
//		echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"];
		
		//双引号会解析内部的变量
		echo"
		<tr>
			<td>$row[id]</td>									//索引可以不用加双引号，也可以加，见上一行代码
			<td>$row[firstname]</td>
			<td>$row[lastname]</td>
		</tr>
		";
	}
} 
else 
{
	echo "0 results";
}
echo'
   </tbody>
</table>
';
$conn->close();
?>
</body>
</html>
