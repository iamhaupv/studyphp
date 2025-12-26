<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm max và min trong 3 số nhập từ form</title>
</head>

<body>
    <!-- nhập vào 3 số tự nhiên bất kì và nhấn submit thì số lớn nhất và nhỏ nhất hiện ra -->
    <form method="post">
        <div>
            <label>Nhập số thứ nhất</label>
            <input type="number" name="a" />
        </div>
        <div>
            <label>Nhập số thứ hai</label>
            <input type="number" name="b" />
        </div>
        <div>
            <label>Nhập số thứ ba</label>
            <input type="number" name="c" />
        </div>
        <div>
            <label>Tìm số lớn nhất</label>
            <button type="submit" name="action" value="max">Max</button>
        </div>
        <div>
            <label>Tìm số nhỏ nhất</label>
            <button type="submit" name="action" value="min">Min</button>
        </div>
    </form>
    <?php
    function check_Max($a, $b, $c)
    {
        if ($a > $b && $a > $c) {
            return $a;
        } else if ($b > $a && $b > $c) {
            return $b;
        } else {
            return $c;
        }
    }
    function check_Min($a, $b, $c){
        if($a < $b && $a < $c){
            return $a;
        }else if($b < $a && $b < $c){
            return $b;
        }else{
            return $c;
        }
    }
    // xử lý 
    if (isset($_POST['a'], $_POST['b'], $_POST['c'], $_POST['action'])) {
        if ($_POST['action'] === "max") {
            $max = check_Max($_POST['a'], $_POST['b'], $_POST['c']);
            echo "<span style='color: green'>Số lớn nhất trong 3 số là $max</span>";
        }else{
            $min = check_Min($_POST['a'], $_POST['b'], $_POST['c']);
            echo "<span style='color: green'>Số nhỏ nhất trong 3 số là $min</span>";
        }
    }
    ?>
    <style>
        *, body{
            box-sizing: border-box;

        }
        form div{
            display: flex;
        }
        form label{
            font-size: 18px;
            display: block;
            width: 150px;
            
        }
        form input, button{
            height: 30px;
            width: 240px;
            margin: 0px 0px 15px 20px;
        }
    </style>
</body>

</html>