<?php include  $_SERVER['DOCUMENT_ROOT']."/keepen_service/db/db.php"; 
  $electricity = $_POST['electricity']; 
  $gas = $_POST['gas']; 
  echo "<script>
    alert('테스트. $electricity + $gas');
    </script>";
?>
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
    <body class="body" style="overflow: auto;">
        <header class="header">
            <span>
                <img class="logo" src="../assets/logo.png" alt="logo">
                <div class="material-icons">menu</div> 
            </span>
        </header>
        <main>
            <section>
                <p class="p">탄소배출량</p>
                <p class="p1">이번달은 <span class="carbon_data">5.0kgCO2e</span>의 탄소를 배출하였습니다</p>
                <p class="p2">이는 소나무 <span class="tree_data">1.8그루</span>에 해당하는 수치입니다.</p>
                <img class="tree" src="../assets/tree.png" alt="tree">
                <div class="jb"></div>
                <p class="p3">탄소배출 저감을 위해 탄소포인트제에 먼저 참여하세요!</p>
                <button  onclick="location.href= 'https://cpoint.or.kr/user/regist/firstStep.do?type=01'" class="button">탄소포인트제 참여하기</button>
            </section>
        </main>
    </body>
</html>