<?php

// Userクラスの読み込み
require 'User.php';

$mainUser = new User(1111, "田中", 21, 111);
$subUser = new User(2222, "伊藤", 99, 111);

showUserStatus($mainUser);
showUserStatus($subUser);

$mainUser->setName("佐藤");
$mainUser->setAge(30);
$mainUser->getolder();
$mainUser->getolder();
$subUser->getOlder();

showUserStatus($mainUser);
showUserStatus($subUser);

function showUserStatus($user)
{
    echo "========ユーザー情報========" . "\n";
    echo "ID: " . $user->getId() . "\n";
    echo "名前: " . $user->getName() . "\n";
    echo "年齢: " . $user->getAge() . "\n";
    echo "住所: " . $user->getaddress() . "\n";
}
