<?php
//1
function double($a){
    $result = 2*$a;
    return $result;
}
echo double(2) ."\n";

//2
function sum($a, $b){
    $result = $a + $b;
    return $result;
}
echo sum(1, 2) ."\n";

//3
$arr = [1, 3, 5, 7, 9];
echo array_product($arr) ."\n";

//4
$arr = array(3, 4, 1, 8, 2);
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if ($max_number <= $a){
            $max_number = $a;
        }
    }
    return $max_number;
}
echo max_array($arr) ."\n";

//5
//文字列からHTMLおよびPHPタグを取り除く
$text = '<img src="image/staff_01.jpeg"><p class="staff-name">Cookie</p>';
echo strip_tags($text) ."\n";

//要素を配列の最後に追加する
$fruits = array("Apple", "Banana");
array_push($fruits, "Orange");
print_r($fruits) ."\n";

//配列と配列をマージ（結合）する
$animal = ["cat", "dog", "bird"];
$color = ["red", "black", "white"];
$result = array_merge($animal, $color);
print_r($result) ."\n";

//現在のUNIXタイムスタンプを返す
echo "現在のタイムスタンプ: ".time() ."\n";
$Today = time();
$nextWeek = time() + (7 * 24 * 60 * 60);
$nextYear = time() + (365 * 24 * 60 * 60);
echo 'Today: ' .$Today ."\n";
echo 'Next Week: ' .$nextWeek."\n";
echo 'Next Year: ' .$nextYear ."\n";

//指定した日時のタイムスタンプを取得, (hour, ,minute, secound, month, day, year, isDST)
date_default_timezone_set("UTC");
$Today = mktime(0, 0, 0, 9, 13, 2020);
echo "Sep 13, 2020 is on a " .date("l", mktime(0, 0, 0, 9, 13, 2020)) ."\n";
echo '今日のタイムスタンプ: ' .$Today ."\n";

// ローカルの日にち、時刻を書式化する
date_default_timezone_set("UTC"); //デフォルトの設定
echo 'Today: ' .date('Y/m/d', $Today) ."\n";
echo 'Next Week: ' .date('Y/m/d', $nextWeek) ."\n";
echo 'Next Year: ' .date('Y/m/d', $nextYear) ."\n";
?>