<?php
$host = "db";
$user = "root";
$pass = "notSecureChangeMe";

$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error)
{
    die("Connection faile: " . $conn->connect_error);
}

echo "Connected successfully";

$sql = "show databases;";

$result = $conn->query($sql);
echo "<pre>";
print_r($result);
echo "</pre>";

if ($result->num_rows > 0)
{
    echo "<pre>";
    # while ($row = $result->fetch_assoc())
    # {
    #     print_r($row);
    # }
    
    print_r($result->fetch_all(MYSQLI_BOTH));
    echo "</pre>";
}
else
{
    echo "0 results";
}

$conn->close();

