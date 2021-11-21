<!DOCTYPE html>
<html lang = "en">
    <link rel="stylesheet" href="style.css">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=chrome">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <title>keepen</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        </style>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>
    <!--js로 값전달-->
    <script language = "javascript">
        electricity = input1.value;
        gas = input2.value;
        location.href="/pages/output.php?" + electricity + "/" + gas;
    </script>
    <body class="body" style="overflow: auto;">
        <header class="header">
            <span>
                <img class="logo" src="assets/logo.png" alt="logo">
                <div class="material-icons">menu</div> 
            </span>
        </header>
        <main>
            <section>
                <section class="left">
                    <p class="p">2021년 11월</p>
                    <p1 class="p1">우리집 탄소배출량 알아보기</p1>
                    <form action="index_ok.php" method="post">
                    <form action="pages/output.php" method="post">
                    <p class="p2">한달 전기 사용량</p>
                    <input type="text" name="electricity" placeholder="입력하기" size="10" class="input1" required> <p3 class="p3">kwh</p3>
                    <p class="p4">한달 도시가스 사용량</p>
                    <input type="text" name="gas" placeholder="입력하기" size="10" class="input2" required> <p3 class="p3">m3</p>
                    </form>
                    </form>
                    <button class="button">저장하기</button>
                    </section>
                <section class="right">
                    <hr align="left" style="border: solid 2px #003002; width: 90%;">
                    <p class="p5">주택용전력 기준(아파트포함)</p>
                    <img class="image1" src="assets/electricity.png" alt="electricity">
                    <p class="p6">도시가스 산정 기준(아파트포함)</p>
                    <img class="image2" src="assets/gas.png" alt="gas">
                    <hr align="left" style="border: solid 2px #003002; width: 90%;">
                </section>
            </section>
        </main>
    </body>
</html>