<?php

/** @var yii\web\View $this */

use yii\helpers\Html;


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
            0% { background-color: #0c810c; }
            50% { background-color: #0e540e; }
            100% { background-color: #0c810c; }
        }
    </style>
    <div class="flashing-panel">
        <h2>Лабораторная работа №4</h2>
    </div>
