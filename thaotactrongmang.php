<?php
    $arr = [1, 2, 3, 4, 5, 6, 7,8, 9, 10];
    // in ra toàn bộ mảng
    echo "<span>in ra toàn bộ mảng</span> <br/>";
    foreach($arr as $i){
        echo $i;
    }
    // in ra nhữn số lẻ
    echo "<br/> <span>in ra toàn bộ những số lẻ trong mảng</span> <br/>";
    foreach($arr as $i){
        if($i %2 ===1){
            echo $i;
        }
    }
    // in ra những số chẵn 
    echo "<br/><span>in ra toàn bộ những số chẵn trong mảng</span> <br/>";
    foreach($arr as $i){
        if($i %2 ===0){
            echo $i;
        }
    }
    // in ra số nhỏ hơn 5
    echo "<br/><span>in ra những số nhỏ hơn 5</span> <br/>";
    foreach($arr as $i){
        if($i < 5){
            echo $i;
        }
    }
    // tìm số lớn nhất trong mảng
    $arr1 = [3, 1, 5, 6, 2, 8];
    $max = $arr1[0];
    for($i = 0; $i < count($arr1); $i++){
        if($arr1[$i] > $max){
            $max = $arr1[$i];
        }
    }
    echo "số lớn nhát trong mảng là $max";
    // tìm số nhỏ nhất trong mảng
    $min = $arr1[0];
    foreach($arr1 as $i){
        if($i < $min){
            $min = $i;
        }
    }
    echo "<br/> số nhỏ nhất trong mảng là $min <br/>";
?>