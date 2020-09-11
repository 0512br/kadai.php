<?php

//1
$name = "Asaka";
if ($name == "Asaka") {
    echo "私は $name です" ."\n";
}else {
    echo "私は $name ではありません" ."\n";
}

//2
$total = 0;
for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total ."\n";

//3
$fruits = ["Apple", "Banana", "Watermelon", "Orange", "Grape"];
foreach($fruits as $fruit){
    echo $fruit ."\n";
}

//4
$start = 1;
$end = 100;

for ($i = $start; $i <= $end; $i++){
    if ($i % 5 == 0){
        echo $i ."\n";
    }
}