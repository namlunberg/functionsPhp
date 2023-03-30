<?php
header("Content-Type: text/plain");
// date_default_timezone_set('UTC');
echo 'Timestamp: time и mktime', "\n";
echo time(), "\n";
echo mktime(0, 0, 0, 3, 1, 2025), "\n";
echo mktime(0, 0, 0, 12, 31), "\n";
$past = mktime(13, 12, 59, 3, 15, 2000);
$result = time() - $past;
echo $result, "\n";
$past = mktime(7, 23, 48);
$result = time() - $past;
$result /= 3600;
$result = (int) $result;
echo 'Прошло ' . $result . ' целых часов!';
echo "\n";
echo "\n";
//Функция date:
echo 'Функция date', "\n";
echo date('Y | m | d | H | i | s'), "\n";
echo date('Y-m-d d.m.Y d.m.y H:i:s'), "\n";
echo date('d.m.Y', mktime(0, 0, 0, 2, 12, 2025)), "\n";
$day = date('w');
$week = ['Понедельник', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота',];
echo $week[$day], "\n";
$day = date('w', mktime(0, 0, 0, 6, 6, 2006));
echo $week[$day], "\n";
$day = date('w', mktime(0, 0, 0, 3, 10));
echo $week[$day], "\n";
$month = [1=>'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь',];
$number = date('n');
echo $month[$number], "\n";
echo date('t'), "\n";
$date = date('L', mktime(0, 0, 0, 1, 1, 2016));
if ($date == 1) {
    echo 'високосный';
} else {
    echo 'не';
}
echo "\n";
$date = date('d.m.Y', mktime(0, 0, 0, 12, 31, 2025));
$array = explode('.', $date);
$date = date('w', mktime(0, 0, 0, $array[1], $array[0], $array[2]));
echo $week[$date], "\n";
$date = date('Y-m-d', mktime(0, 0, 0, 12, 31, 2025));
$array = explode('-', $date);
$date = date('n', mktime(0, 0, 0, $array[1], $array[2], $array[0]));
echo $month[$date];
echo "\n";
echo "\n";
//Сравнение дат:
echo 'Сравнение дат', "\n";
//??
$date1 = mktime(0, 0, 0, 12, 31, 2025);
$date2 = mktime(0, 0, 0, 12, 31, 2024);
if ( $date1 > $date2 ) {
    echo 'первая дата больше второй';
} else {
    echo 'вторая дата больше первой';
}
//??
echo "\n";
echo "\n";
//На strtotime:
echo 'На strtotime', "\n";
echo date('d-m-Y', strtotime('2025-12-31'));
echo "\n";
echo "\n";
//Прибавление и отнимание дат (date_create, date_modify, date_format):
echo 'Прибавление и отнимание дат (date_create, date_modify, date_format)', "\n";
$date = date_create('2025-12-31');
date_modify($date, '2 days 1 month');
echo date_format($date, 'd-m-Y'), "\n";
$date = date_create('2025-12-31');
date_modify($date, '3 days 1 year');
echo date_format($date, 'd-m-Y'), "\n";
$date = date_create('2025-12-31');
date_modify($date, '-3 days');
echo date_format($date, 'd-m-Y'), "\n";
echo "\n";
echo "\n";
//Доп задачи:
echo 'Доп задачи', "\n";
$today = date('z');
$new = date('z', mktime(0, 0, 0, 12, 31));
$toNewYear = ($new - $today) + 1;
echo "До нового года осталось $toNewYear дней!", "\n";
// if ($leap == 1) {
//     $summ = 366 - $today;
//     echo "До нового года осталось $summ дней!", "\n";
// } else {
//     $summ = 365 - $today;
//     echo "До нового года осталось $summ дней!", "\n";
// }

$date = date_create('today');
date_modify($date, '-100 day');
$number = date_format($date, 'w');
echo "100 дней назад был " . $week[$number] . "!", "\n";

$year = 2009;
$array = [];
for ($month = 1; $month <= 12; $month++) {
    $daysInMonth = date('t', mktime(0, 0, 0, $month));
    for ($date = 1; $date <= $daysInMonth; $date++){
        $day = date('w', mktime(0, 0, 0, $month, $date, $year));
        if (($day == 5) and ($date == 13)){
            $result = date('d-m-Y', mktime(0, 0, 0, $month, $date, $year));
            $array[] = $result;
        }
    } 
}
var_dump($array);