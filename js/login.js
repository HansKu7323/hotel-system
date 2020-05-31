function login_check()
{
  if( document.loginForm.u_id.value == "" )
  {
    alert( "IDを入力してください！" );
    document.loginForm.u_id.focus() ;
    return false;
  }
  if( document.loginForm.u_pw.value == "" )
  {
    alert( "Passwordを入力してください！" );
    document.loginForm.u_pw.focus() ;
    return false;
  }
  return( true );
} 