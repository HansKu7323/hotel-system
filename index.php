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
      <img src="img/mainbg.jpg" alt="">
      <img src="img/pic00.JPG" alt="">
      <img src="img/pic01.JPG" alt="">
      <img src="img/pic02.jpeg" alt="">
      <img src="img/pic03.jpeg" alt="">
      <img src="img/pic04.jpeg" alt="">
      <img src="img/pic05.jpeg" alt="">
      <img src="img/pic06.jpeg" alt="">
      <img src="img/pic07.jpeg" alt="">
      <img src="img/pic08.jpeg" alt="">
      <img src="img/mainbg.jpg" alt="">
    </div>

  <!------------ textbox -------->
    <div class="text_box">
      <p>ようこそ、日本一！世界一！富士山に近い湖、山中湖へ</p>
      <p>山中湖畔に新しく誕生したホテル“SUN PLAZA HOTEL 富士山中湖</p>
      <p>世界各国から富士山へ集まるゲストをもてなすために作られたレイクサイドホテルです</p>
      <p>日本式の大浴場と露天風呂を備え、美味しい食事とおもてなしで旅の疲れを癒します。</p>
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