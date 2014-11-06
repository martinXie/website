<?php
$servername = "localhost";
$username = "root";
$password = "111111";
$dbname = "patient_info"
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检测连接
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

//读取数据
$sql_cmd = "SELECT ID, Name FROM Basic_Information";
$sql_result = $conn->query($sql);

if($sql_result->num_rows > 0)
{
	while($row = $sql_result->fetch_assoc())
	{
		echo "<br> ID: ". $row["ID"]." - Name: ". $row["Name"]. "";
	}
}
else
{
	echo "0 record";
}
// 关闭链接
$conn->close();
?> 
