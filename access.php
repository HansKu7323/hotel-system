<?php 
  $title = 'アクセスー';
  include("head.php");
?>
  <link rel="stylesheet" href="css/reset.css">
  <link href="css/access.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>

<body>
  <!-------- header ---------->
  <div class="container">
    <?php 
      include("header.php");
    ?>
  
      <!------------- nav ------------->
    <nav>
      <ul class="nav_list">
        <li class="nav_item"><a href="index.php">Hans Hotel</a></li>
        <li class="nav_item"><a href="guestroom.php">客室情報</a></li>
        <li class="nav_item"><a href="equipment.php">施設.サービス</a></li>
        <li class="nav_item"><a href="restaurant.php">レストラン</a></li>
         <li class="nav_item"><a href="booking.php">Booking</a></li>
      </ul>
     </nav>

    <div class="titletext">
      <h2>アクセス</h2>
      <hr>
    </div>

    <div class="addresstext">
      <p>〒401-0501　山梨県 南都留郡 山中湖村 山中 1445-1</p>
    </div>

    <!-- <div class="mapbox">
      <div id="target"></div>
      <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key=AIzaSyBEkcgYzwKRr5Abxkx821yZw1WApR3dCUU&callback=initMap" async defer></script>
    </div> -->
   
      <div class="iframe">
        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBEkcgYzwKRr5Abxkx821yZw1WApR3dCUU&q=山梨県 南都留郡 山中湖村 山中 1445-1" ></iframe>
      </div>


      <div class="access-box">
        <h3>東京方面からのアクセス</h3>
        <div>■お車でのアクセス</div>
        <img src="img/access1.png" alt="車で東京方面からのアクセスの画像">
        <div>■バスでのアクセス</div>
        <img src="img/access2.png" alt="バスで東京方面からのアクセスの画像">
        <div>■電車からのアクセス</div>
        <img src="img/access3.png" alt="電車で東京方面からのアクセスの画像">
      </div>

      <div class="access-box">
        <h3>関西方面からのアクセス</h3>
        <div>■お車でのアクセス</div>
        <img src="img/access4.png" alt="車で関西方面からのアクセスの画像">
        <div>■電車からのアクセス</div>
        <img src="img/access5.png" alt="電車で関西方面からのアクセスの画像">
      </div>
  

      <!-----------foot_nav ------------>
    <nav>
      <ul class="foot_nav_list">
        <li class="nav_item"><a href="index.php">Hans Hotel</a></li>
        <li class="nav_item"><a href="guestroom.php">客室情報</a></li>
        <li class="nav_item"><a href="equipment.php">施設.サービス</a></li>
        <li class="nav_item"><a href="restaurant.php">レストラン</a></li>
        <li class="nav_item"><a href="booking.php">Booking</a></li>
      </ul>
    </nav>

    <!--------- footer ---------->
    <?php 
      include("footer.php");
    ?>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="js/main.js"></script>
    <!-- <script src="js/access.js"></script> -->
  </div>
</body>
</html>