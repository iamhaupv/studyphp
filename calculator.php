<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="a" />
        <input type="text" name="b" />
        <button name="action" value="sum" >+</button>
        <button name = "action" value="sub">-</button>
        <button name = "action" value = "mul">x</button>
        <button name = "action" value="div">/</button>
    </form>
    <?php 
    function sum ($a, $b){
        return $a + $b;
    }
    function sub($a, $b){
        return $a - $b;
    }
    function mul($a, $b){
        return $a * $b;
    }
    function div($a, $b){
        return (float) $a / $b;
    }
    if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['action'])){
        $a = $_POST['a'];
        $b = $_POST['b'];
        if($_POST['action'] === 'sum'){
            echo $a . "+" . $b . '=' . sum($a, $b);
        }
        if($_POST['action'] === "sub"){
            echo $a . '-' . $b . '=' . sub($a, $b);
        }
        if($_POST['action'] === "mul"){
            echo $a . 'x' . $b . "=" . mul($a, $b);
        }else{
            echo $a . '/' . $b . '=' . div($a, $b);
        }
    }
    
    ?> 
</body>
</html>