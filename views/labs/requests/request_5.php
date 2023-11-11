<?php

/** @var yii\web\View $this */

use app\models\Sdelks;
use app\models\Agents;
use app\models\Objects;
use app\models\Pokupatels;
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;

?>
<div class="container-fluid">
    <style>
        .flashing-panel {
            width: 101%;
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
        form {
            display: block;
            flex-direction: column;
            align-items: center;
        }

        input {
            margin-bottom: 10px;
            margin-left: 5px;
        }
        label
        {
            margin-left: 40px;
        }

        button {
            margin-left: 40px;
            margin-top: 5px;
            margin-bottom: 5px;
             40px;
        }


    </style>

    <div class="flashing-panel">
        <h2>Просмотр объектов по необходимой цене</h2>
    </div>
    <div class="form-container">

<form method="get">
    <label for="Cena_2">Введите минимальную цену</label>
    <input type="number" name="Cena_1" min="0" max="100000000" step="50000">
    <row> ₽ </row>
    <label for="Cena_2">Введите максимальную цену</label>
    <input type="number" name="Cena_2" min="0" max="100000000" step="50000">
    <row> ₽ </row>
    <?= Html::submitButton('Отправить', ['class' => 'glow-on-hover']) ?>
</form>

<table class="table">
    <thead>
    <tr>
        <th scope="col" colspan="2">Адрес</th>
        <th scope="col" >Этаж</th>
        <th scope="col">Цена</th>
        <th scope="col">S общая м²</th>
        <th scope="col">S жилая м²</th>
        <th scope="col">S кухни м²</th>
        <th scope="col">Количество комнат</th>
        <th scope="col">Количество балконов</th>
        <th scope="col">Год постройки</th>
        <th scope="col">Материал</th>
        <th scope="col" colspan="2">Комментарий</th>
    </tr>
    </thead>
    <?php
    foreach ($request_5 as $request): ?>
        <tbody></tbody>
        <tr>
            <td colspan="2"><?= $request->Adres ?></td>
            <td><?= $request->Itaj ?></td>
            <td><?= $request->Cena ?></td>
            <td><?= $request->S_obshaya_m2 ?></td>
            <td><?= $request->S_jilaya_m2 ?></td>
            <td><?= $request->S_kuxnya_m2 ?></td>
            <td><?= $request->Kolichestvo_komnat ?></td>
            <td><?= $request->Kolichestvo_balkonov ?></td>
            <td><?= $request->God_postroiki ?></td>
            <td><?= $request->Material ?></td>
            <td colspan="2"><?= $request->Kommentariy ?></td>
        </tr>
        </tbody>
    <?php endforeach; ?>
</table>
