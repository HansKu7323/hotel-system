<?php
//XSS対応関数
function h($val){
  return htmlspecialchars($val,ENT_QUOTES);
}

// //LOGIN認証チェック関数
// function loginCheck(){
//   if( !isset($_SESSION["chk_ssid"]) || $_SESSION["chk_ssid"] != session_id()){
//     echo "LOGIN ERROR";
//     exit();
//   }else{
//     session_regenerate_id(true);
//     $_SESSION["chk_ssid"] = session_id();
//   }
// }

//2.DB接続関数
function db_connect(){
  try {
    $pdo = new PDO('mysql:dbname=hotel_booking_db;charset=utf8;host=localhost','root','');
  } catch (PDOException $e) {
    exit('データベースに接続できませんでした。'.$e->getMessage());
  }
  return $pdo;
}

?>
