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
      <h2>アクセス・Access</h2>
      <hr>
    </div>

    <div class="addresstext">
      <p>〒401-0501　山梨県 南都留郡 山中湖村 山中 1445-1</p>
    </div>

    <div class="mapbox">
      <div id="target"></div>
      <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key=AIzaSyBEkcgYzwKRr5Abxkx821yZw1WApR3dCUU&callback=initMap" async defer></script>
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
    <footer>
       <p>(c) Hans Hotel.com</p>
    </footer>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="js/access.js"></script>
  </div>
</body>
</html>