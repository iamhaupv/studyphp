<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải phương trình bậc 2</title>
</head>
<body>
    <!-- giải phương trình bậc 2 -->
     <form method="post">
        <div>
            <label>Nhập a</label>
            <input type="number" name="a"/>
        </div>
        <div>
            <label>Nhập b</label>
            <input type="number" name="b"/>
        </div>
        <div>
            <label>Nhập c</label>
            <input type="number" name="c"/>
        </div>
        <div>
            <label>Kết quả</label>
            <button type="submit" name="result">Kết quả</button>
        </div>
     </form>
     <?php
        function ptb2($a, $b, $c){
            if($a ===0){
                return "Phương trình vô số nghiệm";
            }else{
                if($b == 0){
                    return "Phương trình có 1 nghiệm kép" . (float) -$c/$a;
                }else{
                    $delta = $b*$b - (4*$a*$c);
                    if($delta > 0){
                        return "Phương trình có 2 nghiệm phân biệt x1 = " . (float) (-$b + sqrt($delta)) / (2*$a) . " x2 = " . (float) (-$b - sqrt($delta)) / (2 * $a);
                    }else if($delta == 0){
                        return "Phương trình có 1 nghiệm kép x1 = x2 = " . -$b / (2*$a);
                    }else {
                        return "Phương trình có vô nghiệm";
                    }
                }
            }
        }

        if(isset($_POST['a'], $_POST['b'], $_POST['c'])){
            $ptb2 = ptb2($_POST['a'], $_POST['b'], $_POST['c']);
            echo "<span>Kết quả sau khi giải phương trình ". $_POST['a'] . "x2 +" . $_POST['b'] . "x + " . $_POST['c'] . " = 0 là $ptb2</span>";
        }
     ?>
     <style>
        * body{
            box-sizing: border-box;
        }
        form div {
            display: flex;
        }
        div label{
            display: block;
            width: 80px;
            height: 20px;
            font-size: 16px;
        }
     </style>
</body>
</html>