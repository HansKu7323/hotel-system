<?php 
  $title = '予約フォームー';
  include("head.php");
?>
  <link rel="stylesheet" href="css/reset.css">
  <link href="css/booking.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

</head>

<body>
  <!--------- header ---------->
  <div class="container">
    <?php 
      include("header.php");
    ?>

     <!---------- nav -------->
     <nav>
        <ul class="nav_list">
        <li class="nav_item"><a href="index.php">Hans Hotel</a></li>
          <li class="nav_item"><a href="guestroom.php">客室情報</a></li>
          <li class="nav_item"><a href="equipment.php">施設.サービス</a></li>
          <li class="nav_item"><a href="restaurant.php">レストラン</a></li>
          <li class="nav_item"><a href="access.php">アクセス</a></li>
          
        </ul>
      </nav>
 
    
    <!--------- form part -------->
    <section class="form">
      <form name="booking"  method="post" action="booking_insert.php" onsubmit="return(booking_check());">
        <section class="guest data"> 
          <h2>BOOKING & CONTACT</h2>
          <hr>
          <ul>
            <li>
              <label for="name">Name（必須）</label>
              <input type="text" name="name" id="name">
            </li>
            <li>
              <label for="email">Email（必須）</label>
              <input type="email" name="email" id="email">
            </li>
            <li>
              <label for="telephone">Telephone（必須）</label>
              <input type="text" name="telephone" id="telephone">
            </li>
            <li>
              <label for="address">Address</label>
              <input type="text" name="address" id="address">
            </li>
            <li>
              <label for="country">Country</label>
              <input type="text" name="country" id="country">
            </li>
          </ul>
        </section>

        <!------ hotel need data ------->
        <section class="details">
              <h2>DETAILS</h2>
              <hr>
              <ul>
                <li>
                  <label for="people">人数</label>
                  <input type="number" name="people" id="people">
                </li>
                <li>
                  <label for="arrive">チェックイン</label>
                  <input type="date" name="arrive" id="arrive">
                </li>
                <li>
                  <label for="depart">チェックアウト</label>
                  <input type="date" name="depart" id="depart">
                </li>

                <!------- radio parts ------->
                <li class="roomtitle">Room type</li>
                <li class="room_type">
                  <div class="room">

                    <input type="radio" name="room_type" value="single" id="single">
                    <label for="single">SNG</label>

                    <input type="radio" name="room_type" value="twin" id="twin" checked="checked">
                    <label for="twin" >TWN</label>

                    <input type="radio" name="room_type" value="dbl" id="dbl">
                    <label for="dbl">DBL</label>

                    <input type="radio" name="room_type" value="quad" id="quad">
                    <label for="quad">QUAD</label>
                    
                  </div>
                </li>

                <li>
                  <label for="others">Others</label>
                  <textarea name="others" id="others" cols="30" rows="10"></textarea>
                </li>

                <button type="submit" class="btn">Submit</button>
              </ul>
        </section>
      </form>
    </section>

    <!------- footer nav ------->
    <nav>
      <ul class="nav_list">
        <li class="nav_item">
          <a href="index.php">Hans Hotel</a>
        </li>
        <li class="nav_item">
          <a href="guestroom.php">客室情報</a>
        </li>
        <li class="nav_item">
          <a href="equipment.php">施設.サービス</a>
        </li>
        <li class="nav_item">
          <a href="restaurant">レストラン</a>
        </li>
        <li class="nav_item">
          <a href="access.php">アクセス</a>
        </li>
      </ul>
    </nav>

    <footer>
      <p>(c) Hans Hotel.com</p>
    </footer>
  </div>

  <script
  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
  crossorigin="anonymous"></script>
  <script src="js/booking.js"></script>
 
</body>
</html>