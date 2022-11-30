<?php
include("students.php");
echo '<link rel="stylesheet" href="table.css">';
$monthsArr = ["Января", "Февраля", "Марта", "Апреля", "Мая", "Июня", "Июля", "Августа", "Сентября", "Октября", "Ноября", "Декабря"];
echo "<table><tr><th>Имя и фамилия</th><th>Дата рождения</th></tr>";
function cmp_age($a, $b){
    return $a['birthday'] <=> $b['birthday'];
}
usort($students, 'cmp_age');
for ($i = 0; $i < count($students); $i++) {
    $month = strftime("%m", $students[$i]['birthday']);
    $day = strftime("%d", $students[$i]['birthday']);
    $year = strftime("%Y", $students[$i]['birthday']);
    echo "<tr>";
    echo "<td>";
    echo $students[$i]['name'];
    echo "</td>";
    echo "<td>";
    echo $day . ' ' . $monthsArr[$month - 1] . ' ' . $year . " года";
    echo "</td>";
    echo "</tr>";
}
echo "</table>";
