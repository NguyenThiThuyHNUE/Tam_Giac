<?php
$money = $_POST["money"];
var_dump($money);
function check($money){
    if($money>=0 && $money<=100){
        return $money+$money*0.03;
    }elseif ($money>100 && $money<1000){
        return $money+$money*0.05;
    }elseif ($money>=1000){
        return $money+$money*0.07;
    }else{
        echo 'Nhap lai gia tri';
    }
};

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

<form method="post">
    <table>
        <tr>
            <td> Nhap so tien:</td>
            <td><input type="text" name="money" value="<?php echo $money ?>"></td>
        </tr>
        <tr>
            <td>
                <button type="submit"> Submit</button>
            </td>
            <td><input value="<?php check($money) ?>"></td>
        </tr>

    </table>
</form>

</body>
</html>

<!---->
<!--testcase: -->
<!--- Nhỏ hơn 100$;-->
<!--- kí tự-->
<!--- bằng 0,100,1000. -->

