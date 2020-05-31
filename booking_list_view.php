<?php
include("func.php");
//1.  DB接続します
$pdo = db_connect();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM hotel_booking_table");
$status = $stmt->execute();


//３．データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  //Selectデータの数だけ自動でループしてくれる $resultの中に「カラム名」が入ってくるのでそれを表示させる例
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= '<tr>'.
    '<td>'.$result["id"].'</td>'.
    '<td>'.$result["name"].'</td>'.
    '<td>'.$result["email"].'</td>'.
    '<td>'.$result["telephone"].'</td>'.
    // '<td>'.$result["country"].'</td>'.
    '<td>'.$result["people"].'</td>'.
    '<td>'.$result["arrive"].'</td>'.
    '<td>'.$result["depart"].'</td>'.
    '<td>'.$result["room_type"].'</td>'.
    '<td>'.$result["others"].'</td>'.
    '<td>'.$result["indate"].'</td>'.
    '<td>'.'<a href = "booking_delete.php?id='.$result["id"].'">削除</a>'.'</td>'.

    '</tr>';
  }
}
?>

<?php 
  $title = '予約リストー';
  include("head.php");
?>
  <link rel="stylesheet" href="css/reset.css">
  <link href="css/booking_list_view.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

</head>
<body>
    <!--------------------- header ---------------------------->
    <div class="container">
      <header>
        <h1>Hans Hotel Japan</h1>
        <p>〒401-0501　山梨県 南都留郡 山中湖村 山中 1445-1</p>
        <p>Tel 0555-62-3901　　Fax 0555-62-3902</p>
      </header>

      <div class="div_btn">
        <a class="navbar-brand" href="staff_logout.php">LOGOUT</a>
      </div>

      <div class="subtitle">
        <h2>booking list</h2>
      </div>

      <table class="table">
        <thead>
          <tr>
            <th class="th1">No</th>
            <th class="th2">名前</th>
            <th class="th3">Email</th>
            <th class="th4">電話</th>
            <!-- <th class="th5">country</th> -->
            <th class="th6">人数</th>
            <th class="th7">チェックイン</th>
            <th class="th8">チェックアウト</th>
            <th class="th9">Room</th>
            <th class="th10">others</th>
            <th class="th11">予約日</th>
            <th class="th12"></th>
          </tr>
        </thead>
        <tbody>
          <?=$view?>
        </tbody>
      </table>
    </div>

</body>
</html>
