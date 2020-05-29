function check()
{
   if( document.myForm.u_id.value == "" )
   {
     alert( "IDを入力してください！" );
     document.myForm.u_id.focus() ;
     return false;
   }
   if( document.myForm.u_pw.value == "" )
   {
     alert( "Passwordを入力してください！" );
     document.myForm.u_pw.focus() ;
     return false;
   }
   alert( "アカウントを作成しました！" );
   alert( "ログイン画面へ戻ります！" );
   return( true );
}