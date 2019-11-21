<?
require("conf.php");

$mysqli = new mysqli('localhost', $username, $password, $dbname) or die ("Ошибка подключения к базе данных");
$mysqli->set_charset("utf8");
if ($mysqli->connect_errno) {

    echo "Ошибка: Не удалась создать соединение с базой MySQL и вот почему: \n";
    echo "Номер ошибки: " . $mysqli->connect_errno . "\n";
    echo "Ошибка: " . $mysqli->connect_error . "\n";
    
    exit;
}
?>