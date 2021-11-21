<?php include  $_SERVER['DOCUMENT_ROOT']."/keepen_service/db/db.php"; 
//에러출력 
error_reporting( E_ALL );
ini_set( "display_errors", 1 );
//각 변수에 index.php에서 input name값들을 저장한다
$electricity = $_POST['electricity'];
$gas = $_POST['gas'];
if($electricity && $gas){
    $sql = query("insert into table(electricity,gas) values('".$electricity."','".$gas."')");
    echo "<script>
    alert('작성 확인. $electricity + $gas');
    location.href='/keepen_service/pages/output.php';</script>";
}else{
    echo "<script>
    alert('작성 실패.');
    history.back();</script>";
}
?>