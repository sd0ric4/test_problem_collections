<?php
// 模拟一个CMS网站
// ...

// 检查用户是否已登录
if (!isset($_COOKIE['logged_in']) || $_COOKIE['logged_in'] !== 'true') {
    // 用户未登录，跳转到登录页面
    header('Location: /');
    exit;
}

// 读取flag
$flag = file_get_contents('/var/www/html/flag.txt');

// 显示flag
echo $flag;
?>