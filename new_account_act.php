
<?php
include("func.php");
if(!isset($_POST["u_id"])|| $_POST["u_id"]==""){
  exit("IDを入力して下さい");
}

if(!isset($_POST["u_pw"])|| $_POST["u_pw"]==""){
  exit("Passwordを入力して下さい!");
}
//1. POSTデータ取得
$u_id = $_POST["u_id"];
$u_pw = $_POST["u_pw"];

//2. DB接続します
$pdo = db_connect();

//３．データ登録SQL作成
$sql = "SELECT * FROM hotel_staff_table where u_id='$u_id'";
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();
$row =  $stmt->fetch($stmt);;
if($row[1] == $u_id)
{
  echo '帳號重複，請洽管理員';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=new_account.php>';
}

else if($u_id != null && $u_pw != null)
{
  $stmt = $pdo->prepare("INSERT INTO hotel_staff_table(id, u_id, u_pw, indate )VALUES(NULL, :u_id, :u_pw, sysdate())");
  $stmt->bindValue(':u_id', $u_id, PDO::PARAM_STR);
  $stmt->bindValue(':u_pw', $u_pw, PDO::PARAM_STR);
  $status = $stmt->execute();
}

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  //５．index.phpへリダイレクト 書くときにLocation: in この:　のあとは半角スペースがいるので注意！！
  header("Location: staff_login.php");
  exit;
}
?>
