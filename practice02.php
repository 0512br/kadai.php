<?php
// 1
$a = 3;
$b = 7;
echo $a + $b ."\n";
// 2
$array_month = ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];
echo $array_month[7] ."\n"; 
// 3
$hello = 'Hello, ';
$name = 'Asaka';
$would = "'s World!";
echo $hello . $name . $would ."\n";
// 4
$tech_boost = "tech";
$tech_boost .= " boost";
echo $tech_boost ."\n";
// 5
$calendar_2018 = [ //変数の１文字目に数字は使えない、カッコの種類が違う
    "January" => "1月",
    "February" => "2月", //点が全角
    "March" => "3月",
    "April" => "4月",
    "May" => "5月",
    "June" => "6月",
    "July" => "7月",
    "August" => "8月",
    "September" => "9月",
    "October" => "10月", //ダブルクオート
    "November" => "11月",
    "December" => "12月"
];
echo $calendar_2018["December"] ."\n";