<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\widgets\LinkPager;


?>
<div class="container-fluid">
    <style>
        .flashing-panel {
            width: 100%;
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
        <h2>Агентство недвижимости</h2>
    </div>
    <br></br>
    <div class="dropdown text-center">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Выберите необходимый запрос
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="request_1">Сделки проведённые агентом</a>
            <a class="dropdown-item" href="request_2">Просмотр объектов по необходимой общей площади</a>
            <a class="dropdown-item" href="request_3">Распределение дохода от сделок </a>
            <a class="dropdown-item" href="request_4">Уплата НДФЛ от дохода агентства со сделок</a>
            <a class="dropdown-item" href="request_5">Просмотр объектов по необходимой цене</a>
        </div>
    </div>


