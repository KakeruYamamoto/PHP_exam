<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    <center>
       
    <h1>High & Lowゲーム</h1>
    <hr>
        <form action="highAndLowS04.php" method="post">
            <?php
        //        カード配列
                $cards = array("jk.png", "01.png", "02.png", "03.png", "04.png", "05.png", "06.png", "07.png", "08.png", "09.png", "10.png", "11.png", "12.png", "13.png");

        //        左側カードのランダムな数値を定義
                $leftCard = mt_rand(0,13);

        //        カードの表示
                echo "<br>";
                echo "<img src='../cards/{$cards[$leftCard]}'>&emsp;&emsp;";
                echo '<img src="../cards/bg.png">';
            ?>
            <br>
            <p style="display:inline;">High</p>
            <input type="radio" name="select" value="High">
            <p style="display:inline;">&emsp;&emsp;Low</p>
            <input type="radio" name="select" value="Low">
            <br>
            <?php echo "<input type='hidden' name='leftCard' value='{$leftCard}'>"; ?>
            <input type="submit" value="決定">
        </form>
    </center>
</body>

</html>
