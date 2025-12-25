<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Số chẵn số lẽ</title>
</head>

<body>
    <form method="post">
        <label>Nhập số bạn muốn kiểm tra</label>
        <input type='number' name='input' />
        <button type="submit">Kiểm tra</button>
    </form>
    <?php
    function check($input)
    {

        if ($input % 2 === 0) {
            echo "<span> $input là số chẵn </span>";
        } else {
            echo "<span>$input là số lẻ</span>";
        }
    }

    if (isset($_POST['input'])) {
        check($_POST['input']);
    } else {
        echo '<span style="color: red">Vui long nhập số bạn muốn kiểm tra</span>';
    }

    ?>

</body>

</html>