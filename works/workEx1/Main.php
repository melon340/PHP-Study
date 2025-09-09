<?php

// Userクラスの読み込み
require 'Gun.php';

$mainWeapon = new Gun("AK47", 1, 0);
$subWeapon = new Gun("Mosin-Nagant", 5, 0);

// 現在の状態を表示
$mainWeapon->echoStatus();
$subWeapon->echoStatus();
$mainWeapon->reload();
$subWeapon->reload();
$mainWeapon->echoStatus();
$subWeapon->echoStatus();
$mainWeapon->fire();
$subWeapon->fire();
