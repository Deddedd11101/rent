<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = 'Лабораторная 1';
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
        <h2>Лабораторная работа №1</h2>
    </div>
    <div class="mt-4">
        <div class="row justify-content-center" >
            <div class="d-flex align-items-center"  >
                <h5 class="col-md-8 justify-content-center ">Выберите форму:</h5>
                <div class="dropdown" >
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #1d4645;" >
                        Выбрать
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="<?=Url::to(['lab1/agents'])?>">Форма Агенты</a>
                        <a class="dropdown-item" href="<?=Url::to(['lab1/clients'])?>">Форма Покупатели</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>