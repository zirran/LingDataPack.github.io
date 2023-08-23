<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set up your email details
    $to = "16774996@qq.com";
    $subject = "New Message from Contact Form";
    $body = "名称: $name\n\n邮箱地址: $email\n\n信息内容: $message";

    // Send the email
    if (mail($to, $subject, $body)) {
        echo "信息发送成功！感谢对我们的支持，等待我们的回复吧";
    } else {
        echo "对不起，信息发送失败了@~@";
    }
}
?>
