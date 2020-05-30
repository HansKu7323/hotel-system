<?php
// //1.GETでidを取得
$id = $_GET["id"];
// session_start();
include("func.php");

//1.  DB接続します
$pdo = db_connect();


//3.UPDATE gs_an_table SET ....; で更新(bindValue)
$sql = 'DELETE FROM hotel_booking_table WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);    //更新したいidを渡す
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);

}else{
  //select.phpへリダイレクト
  header("Location: booking_list_view.php");
  exit;

}


?>
