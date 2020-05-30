<?php 
  $title = ' ';
  include("head.php");
?>
  <link rel="stylesheet" href="css/reset.css">
  <link href="css/main.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
  <link href="css/bootstrap.min.css" rel="stylesheet">
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
    <div id="slider">
        <ul class="slides">
          <li class="slide"><img src="img/mainbg.jpg" alt=""></li>
          <li class="slide"><img src="img/pic00.JPG" alt=""></li>
          <li class="slide"><img src="img/pic01.JPG" alt=""></li>
          <li class="slide"><img src="img/pic02.jpeg" alt=""></li>
          <li class="slide"><img src="img/pic03.jpeg" alt=""></li>
          <li class="slide"><img src="img/pic04.jpeg" alt=""></li>
          <li class="slide"><img src="img/pic05.jpeg" alt=""></li>
          <li class="slide"><img src="img/pic06.jpeg" alt=""></li>
          <li class="slide"><img src="img/pic07.jpeg" alt=""></li>
          <li class="slide"><img src="img/pic08.jpeg" alt=""></li>
          <li class="slide"><img src="img/mainbg.jpg" alt=""></li>
        </ul>
      </div>

  <!------------ textbox -------->
    <div class="text_box">
      <p>ようこそ、日本一！世界一！富士山に近い湖、山中湖へ</p>
      <p>山中湖畔に新しく誕生したホテル“SUN PLAZA HOTEL 富士山中湖</p>
      <p>世界各国から富士山へ集まるゲストをもてなすために作られたレイクサイドホテルです</p>
      <p>日本式の大浴場と露天風呂を備え、美味しい食事とおもてなしで旅の疲れを癒します。</p>
    </div>

  <!----------- nav ------------>
      <nav>
          <ul class="foot_nav_list">
            <li class="nav_item"><a href="guestroom.php">客室情報</a></li>
            <li class="nav_item"><a href="equipment.php">施設.サービス</a></li>
            <li class="nav_item"><a href="restaurant.php">レストラン</a></li>
            <li class="nav_item"><a href="access.php">アクセス</a></li>
            <li class="nav_item"><a href="booking.php">Booking</a></li>
          </ul>
      </nav>
  
  <!--------- footer ---------->
    <footer>
      <p>(c) Hans Hotel.com</p>
    </footer>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/main.js"></script>
</div>
</body>
</html>