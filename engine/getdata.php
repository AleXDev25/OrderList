<?php
require("connect.php");

$sql = "SELECT * FROM `orders`";
$result = $mysqli->query($sql);

// if ($result->num_rows > 0) {
//     while($row = $result->fetch_assoc()) {
//         $w1=$row["w1"];
//         $w2=$row["w2"];
//         $T1=$row["t1"];
//         $T2=$row["t2"];
//         $T3=$row["t3"];
//         $T4=$row["t4"];
//         $H2=$row["hum"];
//         $TIME=$row["time"];
//     }
// } else {
//     echo "No data";
// }

$result->free();
$mysqli->close();
?>