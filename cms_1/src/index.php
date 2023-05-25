<?php
// 模拟一个CMS网站
// ...
// 处理用户提交的登录请求
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // 检查用户名和密码是否正确
    if ($username === 'admin' && $password === 'password') {
        // 登录成功，跳转到管理页面
        setcookie('logged_in', 'true', time() + 3600, '/');
        header('Location: /flag.php');
        exit;
    } else {
        // 登录失败，显示错误消息
        echo '用户名或密码错误';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>登录</title>
</head>
<body>
    <h1>登录</h1>
    <form method="post">
        <label>用户名：</label>
        <input type="text" name="username"><br>
        <label>密码：</label>
        <input type="password" name="password"><br>
        <input type="submit" value="登录">
    </form>
</body>
<!-- hint:超级弱密码 -->
</html>