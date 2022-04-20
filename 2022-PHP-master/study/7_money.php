<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/8eb4f0837a.js" crossorigin="anonymous"></script>
    <style>
        i {
            font-size: 20px;
            color: #FFD700;
        }
    </style>
</head>

<body>
    <?php

    ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h1> 돈쌓기 피라미드</h1>
        줄의 개수를 입력해주세요.(3 ~ 10)
        <input type="number" name="num" min="3" max="10" value="<?php echo $num; ?>">
        <input type="submit" value="입력">
    </form>
    <div>
        <!-- =========== 문제 부분 입니다 ======== -->
        <!-- 
            반복문을 사용하여 돈을 피라미드로 쌓아주세요
            피라미드 줄의 개수는 $num을 사용하시면 됩니다 위에 이미 변수선언 되어있어요.
	ex) 5줄
           *
	      **
	     ***
	    ****
	   *****

           *
          **
         ***
        ****
       *****
        -->
        <?php
        $num = $_POST['num']; // 입력한 수 5, 4
        // html 문법 빈공간 스페이스 한번
        $space = "&nbsp;&nbsp;"; // 빈공간 만들어주기
        $coin = "<i class=\"fa-solid fa-coins\"></i>"; // 돈
        for ($줄 = 0; $줄 < $num; $줄++) {
            for ($스 = $num; $스 > $줄; $스--) {
                // 빈공간을 만들어준다
                print "@";
            }
            for ($별 = 0; $별 <= $줄; $별++) {
                print $coin;
            }
            print "<br>";
        }
        ?>
    </div>
</body>

</html>