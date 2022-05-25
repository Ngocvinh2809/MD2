<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo '<pre>';
    print_r($_REQUEST);
    echo '</pre>';
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    // echo "xin chào".$username. '<br>'.",mật khẩu của bạn là".$password;
    if ($username== "admin" && $password== "123456"){
        echo "đăng nhập thành công";
    }else{
        echo "đăng nhập thất bại";
    }
}
?>
<form action="" method="post" >
<h1>Login</h1>
username : <br />
<input type="text" name="username">
<br />
Password : <br/>
<input type="password" name="password">
<br />
<input type="submit" name="login" value="Login">
</form>