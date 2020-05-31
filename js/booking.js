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
  
  
