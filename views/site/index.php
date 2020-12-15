<?php

/* @var $this yii\web\View */

$this->title = 'MediaLine test';
?>
<div class="site-index">

    <div class="body-content">
        Рубрики: [{Рубрика}, [массив объектов новостей, к которые относятся к рубрике]]<br />
        <a href="/categories">JSON Все рубрики с новостями</a><br />
        <a href="/categories/1">JSON Рубрика 1</a><br />
        <a href="/categories/2">JSON Рубрика 2</a><br />
        <a href="/categories/3">JSON Рубрика 3</a><br />
        ...<br />
        <a href="/categories/14">JSON Рубрика 14</a><br />
        <a href="/categories/15">JSON Рубрика 15</a><br />
        <a href="/categories/16">JSON Рубрика 16</a><br />
        <a href="/categories/17">JSON Рубрика 17</a><br />
        <a href="/categories/18">JSON Рубрика 18</a><br /><br />
        Все рубрики:
        <a href="/categories/all">JSON Все рубрики</a><br /><br />
        Отдельно по новостям: [{Новость}, [массив объектов рубрик, к которым новость относится]]:<br /><br />
        <a href="/news/1">JSON Новости 1</a><br />
        <a href="/news/2">JSON Новости 2</a><br />
        <a href="/news/3">JSON Новости 3</a><br />
        ...<br />
        <a href="/news/16">JSON Новости 16</a><br />
        <a href="/news">Not found</a><br /><br />
    </div>
</div>
