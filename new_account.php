<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <title>Hans Hotel東京</title> -->
  <title>Hans Hotel Japan</title>
  <link rel="stylesheet" href="css/reset.css">
  <link href="css/booking.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>

<body>
  <!--------- header ---------->
  <div class="container">
    <header>
      <h1>Hans Hotel Japan</h1>
      <p>〒401-0501　山梨県 南都留郡 山中湖村 山中 1445-1</p>
      <p>Tel 0555-62-3901　　Fax 0555-62-3902</p>
    </header>

     <!---------- nav -------->
     <nav>
        <ul class="nav_list">
        <li class="nav_item"><a href="index.php">Hans Hotel</a></li>
          <li class="nav_item"><a href="guestroom.php">客室情報</a></li>
          <li class="nav_item"><a href="equipment.php">施設.サービス</a></li>
          <li class="nav_item"><a href="restaurant">レストラン</a></li>
          <li class="nav_item"><a href="access.php">アクセス</a></li>
          
        </ul>
      </nav>


            <!--------- アカウントを作成 ------------>
      <section class="form">
        <form  name="myForm" method="post" action="new_account_act.php" onsubmit="return(check());">
          <section class="guest data"> 
            <h2>アカウントを作成</h2>
            <hr>
            <ul>
              <li>
                <label for="u_id">Id</label>
                <input type="text" name="u_id" id="u_id">
              </li>
              <li>
                <label for="u_pw">Password</label>
                <input type="text" name="u_pw" id="u_pw">
              </li>
              <button type="submit" class="btn" id="btn">アカウントを作成</button>
            </ul>
            <div class="div_btn">
              <a href="staff_login.php">ログインへ戻る</a>
            </div>
          </section>
        </form>
      </section>

    <footer>
      <p>(c) Hans Hotel.com</p>
    </footer>
  </div>


  <script
  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
  crossorigin="anonymous"></script>
  <script src="js/new_account.js"></script>
</body>
</html>