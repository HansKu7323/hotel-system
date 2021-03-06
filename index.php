<?php 
  $title = ' ';
  include("head.php");
?>
  <link rel="stylesheet" href="css/reset.css">
  <link href="css/main.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
  <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
</head>

<body>
  <div class="container">
    <!-------- header ---------->
    <?php 
      include("header.php");
    ?>
  
    <!------------- nav ------------->
    <nav>
      <ul class="nav_list">
        <li class="nav_item"><a href="guestroom.php">客室情報</a></li>
        <li class="nav_item"><a href="equipment.php">施設.サービス</a></li>
        <li class="nav_item"><a href="restaurant.php">レストラン</a></li>
        <li class="nav_item"><a href="access.php">アクセス</a></li>
        <li class="nav_item"><a href="booking.php">Booking</a></li>
      </ul>
    </nav>

    <!---------- slider --------->
    <div class="slider">
      <img src="img/mainbg.jpg" alt="ホテルの画像">
      <img src="img/pic00.JPG" alt="周辺風景の画像">
      <img src="img/pic01.JPG" alt="周辺風景の画像">
      <img src="img/pic02.jpeg" alt="周辺風景の画像">
      <img src="img/pic03.jpeg" alt="周辺風景の画像">
      <img src="img/pic04.jpeg" alt="周辺風景の画像">
      <!-- <img src="img/pic05.jpeg" alt="周辺風景の画像"> -->
      <img src="img/pic06.jpeg" alt="周辺風景の画像">
      <img src="img/pic07.jpeg" alt="周辺風景の画像">
      <img src="img/pic08.jpeg" alt="周辺風景の画像">
      <!-- <img src="img/mainbg.jpg" alt="周辺風景の画像"> -->
    </div>

  <!------------ textbox -------->
    <div class="text_box">
      <p>ようこそ、日本一！世界一！富士山に近い湖、山中湖へ</p>
      <p>山中湖畔に新しく誕生したホテル Hans HOTEL </p>
      <p>世界各国から富士山へ集まるゲストをもてなすために作られたレイクサイドホテルです</p>
      <p>日本式の大浴場と露天風呂を備え、美味しい食事とおもてなしで旅の疲れを癒します。</p>
    </div>

    <div class="title_box">
      <h2>Information</h2>
      <p class="new">NEW</p>
      <h6>ホテル休館のお知らせ</h6>
      <p>いつもHans Hotelをご利用いただき、誠にありがとうございます。新型コロナウイルスの影響による、昨今の情勢を鑑み、隣接する店舗においては、営業を集約させていただく事といたしました。これに伴い、一部のホテルが休館となります。お客様にはご迷惑をお掛けしますが、何卒ご理解・ご協力賜りますようお願い申し上げます。</p>
    </div>

    <!-------- map -------->
    <h2><a href="access.php">アクセス</a></h2>
    <a href=""></a>
    <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBEkcgYzwKRr5Abxkx821yZw1WApR3dCUU&q=山梨県 南都留郡 山中湖村 山中 1445-1" ></iframe>

  <!----------- nav ------------>
      <nav>
          <ul class="nav_list">
            <li class="nav_item"><a href="guestroom.php">客室情報</a></li>
            <li class="nav_item"><a href="equipment.php">施設.サービス</a></li>
            <li class="nav_item"><a href="restaurant.php">レストラン</a></li>
            <li class="nav_item"><a href="access.php">アクセス</a></li>
            <li class="nav_item"><a href="booking.php">Booking</a></li>
          </ul>
      </nav>
  
  <!--------- footer ---------->
  <?php 
    include("footer.php");
  ?>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/main.js"></script>
</div>
</body>
</html>