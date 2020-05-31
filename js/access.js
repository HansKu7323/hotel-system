// const $win = $(window);
// const back = $('#back-to-top');

// $(function () {
//       const $win = $(window);
//       const $backToTop = $('#back');  
//       $win.scroll(function () {
//       if ($win.scrollTop() > 50) {
//       $backToTop.show();
//       } else {
//       $backToTop.hide();
//       }
//     })
//   });
  
$('#back').on('click',function(){
  alert('hello')
  // $('html, body').animate({scrollTop: 0}, 200);
});


// function initMap() {
//   'use strict';

//   var target = document.getElementById('target');
//   // var target = $('#target');
//   var map;
//   var tokyo = {lat: 35.4279068, lng: 138.8505008};
//   var marker;
//   var infoWindow;

//   map = new google.maps.Map(target, {
//     center: tokyo,
//     zoom: 15
//   });

//   marker = new google.maps.Marker({
//     position: tokyo,
//     map: map,
//     // title: 'Hans Hotel!',
//     // label:'Hans Hotel',
//     animation:google.maps.Animation.DROP
//   });

//   infoWindow =new google.maps.InfoWindow({
//     position: tokyo,
//     content: 'Hans Hotel'
//   });

//   infoWindow.open(map, marker);
  
// }