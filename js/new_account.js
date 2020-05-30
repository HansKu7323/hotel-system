let u_id = document.myForm.u_id.value;
let u_pw = document.myForm.u_pw.value;
function check()
{
   if( u_id == "" )
   {
     alert( "IDを入力してください！" );
     document.myForm.u_id.focus() ;
     return false;
   }
   if( u_pw  == "" )
   {
     alert( "Passwordを入力してください！" );
     document.myForm.u_pw.focus() ;
     return false;
   }
   alert( "アカウントを作成しました！" );
   alert( "ログイン画面へ戻ります！" );
   return( true );
};


