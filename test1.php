<?php
interface 啟動
{
    public function 啟動();
}

interface 加油
{
    public function 加油();
}

interface 煞車
{
    public function 煞車();
}

class 交通工具 implements 啟動, 加油, 煞車
{

    function 啟動()
    {
    }

    function 加油()
    {
    }

    function 煞車()
    {
    }
}

class 汽車 extends 交通工具
{

    function 啟動雨刷()
    {
        echo '啟動雨刷';
    }

    function 踩油門()
    {
        echo '啟動雨刷';
    }
}

class 機車 extends 交通工具
{
}

$汽車 = new 汽車;
$汽車->啟動雨刷();
