<?php
class Gun
{

    // ↓フィールド============================
    // 銃の名前
    private $name;
    // 最大装弾数
    private $maxMagazine;
    // 残弾
    private $currentMagazine;
    // ↑フィールド============================

    // コンストラクタ
    function __construct($name, $maxMagazine, $currentMagazine)
    {
        // 問題1
        $this->name = $name;
        $this->maxMagazine = $maxMagazine;
        $this->currentMagazine = $currentMagazine;
    }

    // 現在の状態を表示
    function echoStatus()
    {
        echo "======現在の状態======" . "\n";
        echo "武器名: " . $this->name . "\n";
        echo "最大装弾数: " . $this->maxMagazine . "\n";
        echo "残弾数: " . $this->currentMagazine . "\n";
        echo "======================" . "\n";
    }

    // リロード
    function reload()
    {
        // 問題2
        if ($this->currentMagazine == $this->maxMagazine) {
            echo "リロードの必要はありません";
            return;
        }
        $this->currentMagazine = $this->maxMagazine;
    }

    // 発砲
    function fire()
    {
        // 問題3

    }

    // 拡張マガジンを装着
    function setExtendedMagazine()
    {
        // 問題4
    }

    // 拡張マガジンを取外し
    function unsetExtendedMagazine()
    {
        // 問題4
    }
}
