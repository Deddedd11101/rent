<?php

/** @var yii\web\View $this */

use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\data\Pagination;


?>
<style>
    .has-error .form-control {
        border-color: red;
        box-shadow: 0 0 0 0.2rem rgba(255, 0, 0, 0.25);

    }
    .has-error .help-block {
        color: red;
    }

    .has-error .control-label {
        color: red;
    }
</style>
<div class="container-fluid">
    <style>
        .flashing-panel {
            width: 115%;
            height: 45px;
            text-align: center;
            line-height: 45px;
            color: white;
            animation: flashing 8s infinite;
        }

        @keyframes flashing {
            0% { background-color: #02124b; }
            50% { background-color: #0b4180; }
            100% { background-color: #02124b; }

        }

    </style>
    <div class="flashing-panel">
        <h2>Таблица Объекты </h2>
    </div>
    <?
   echo GridView::widget([
  "dataProvider"=> $productsDataProvider,
  'columns'=>[
    'Cena',
    'Adres',
    'Itaj',
    'S_obshaya_m2',
    'S_jilaya_m2',
    'S_kuxnya_m2',
    'Kolichestvo_komnat',
    'Kolichestvo_balkonov',
    'Kolichestvo_komnat',
    'God_postroiki',
    'Kolichestvo_komnat',
    'Material',
    'Kommentariy',
    ['class'=> 'yii\grid\ActionColumn']
  ]
  ]);