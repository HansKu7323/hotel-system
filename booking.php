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
              <input type="text" name="name" id="name" placeholder="山田太郎">
            </li>
            <li>
              <label for="email">Email（必須）</label>
              <input type="email" name="email" id="email" placeholder="test01@gmail.com">
            </li>
            <li>
              <label for="telephone">Telephone（必須）</label>
              <input type="text" name="telephone" id="telephone" placeholder="080-1111-1111">
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
                  <label for="people">人数（必須）</label>
                  <input type="number" name="people" id="people" min="1" max="10" placeholder="選択して下さい">
                </li>
                <li>
                  <label for="arrive">チェックイン（必須）</label>
                  <input type="date" name="arrive" id="arrive">
                </li>
                <li>
                  <label for="depart">チェックアウト（必須）</label>
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
          <a href="restaurant.php">レストラン</a>
        </li>
        <li class="nav_item">
          <a href="access.php">アクセス</a>
        </li>
      </ul>
    </nav>


    <!------- footer ------->
    <?php 
      include("footer.php");
    ?>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- <script
  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
  crossorigin="anonymous"></script> -->

<script>
function booking_check()
{
let name = document.booking.name.value;
let email = document.booking.email.value;
let telephone = document.booking.telephone.value;
let people = document.booking.people.value;
let arrive = document.booking.arrive.value;
let depart = document.booking.depart.value;

   if( name == "" )
   {
     alert( "名前を入力してください！" );
     document.booking.name.focus() ;
     return false;
   }
   if( email == "" )
   {
     alert( "Emailを入力してください！" );
     document.booking.email.focus() ;
     return false;
   }
   if( telephone == "" )
   {
     alert( "携帯電話を入力してください！" );
     document.booking.telephone.focus() ;
     return false;
   }
   if( people == "" )
   {
     alert( "人数を入力してください！" );
     document.booking.people.focus() ;
     return false;
   }
   if( arrive == "" )
   {
     alert( "チェックインを入力してください！" );
     document.booking.arrive.focus() ;
     return false;
   }
   if( depart == "" )
   {
     alert( "チェックアウトを入力してください！" );
     document.booking.depart.focus() ;
     return false;
   }
   return( true );
};

    // back to top
const $win = $(window);
const back = $('#back');

$(function () {
      const $win = $(window);
      const $backToTop = $('#back');  
      $win.scroll(function () {
      if ($win.scrollTop() > 50) {
      $backToTop.show();
      } else {
      $backToTop.hide();
      }
    })
  });
    $('#back').on('click',function(){
    // alert('hello')
    $('html, body').animate({scrollTop: 0}, 200);
  });
  </script>
  <!-- <script src="js/booking.js"></script> -->
 
</body>
</html>