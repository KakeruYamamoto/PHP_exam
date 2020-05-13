<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>

    <body>
        <center>

            <h1>High & Lowゲーム</h1>
            <hr>
            <?php
//            カード配列
            $cards = array("jk.png", "01.png", "02.png", "03.png", "04.png", "05.png", "06.png", "07.png", "08.png", "09.png", "10.png", "11.png", "12.png", "13.png");

//            右側カードのランダムな数値を定義
            $rightCard = mt_rand(0,13);

            
            echo "<br>";
//            左側カードの表示
            echo "<img src='../cards/{$cards[$_POST['leftCard']]}'>&emsp;&emsp;";
            
//            右側カードの表示
            echo "<img src='../cards/{$cards[$rightCard]}'>";
//            HighかLowの表示
            echo "<p>「{$_POST['select']}」を選択しました。</p>";
            
//            変数resultの定義（左右のランダム数値の判定）
            if ($_POST['leftCard'] < $rightCard) {
                $result = "High";
            }
            elseif($_POST['leftCard'] > $rightCard){
                $result = "Low";
            }else{
                $result = $_POST['select'];   
            }
            
//            勝敗の判定
            if ($_POST['select'] == $result) {
                echo "You Win!";
            }else{
                echo "You Lose...";
            }

            ?>
        </center>
    </body>

</html>
