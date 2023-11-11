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


        select{
            position: relative;
            display: inline-table;
            background-color: #edeef6;
            color: #151b36;
            font-weight: bold;
            border: 1px solid #ccc;
            padding: 8px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 135px;
            text-align: center;
            margin-top: 6px;
            margin-right: 6px;
            margin-bottom: 6px;

        }
        button {
            margin-left: 135px;
            margin-top: 5px;
            margin-bottom: 5px;
    </style>

    <div class="flashing-panel">
        <h2>Уплата НДФЛ от дохода агентства со сделок</h2>
    </div>
    <div class="form-container">
<form method="get">
    <select name="Month">
        <option value="" selected hidden>Выберите месяц</option>
        <?php
        for ($month = 1; $month <= 12; $month++) {
            $monthName = date("F", mktime(0, 0, 0, $month, 1));
            $monthNameRussian = [
                'January' => 'Январь',
                'February' => 'Февраль',
                'March' => 'Март',
                'April' => 'Апрель',
                'May' => 'Май',
                'June' => 'Июнь',
                'July' => 'Июль',
                'August' => 'Август',
                'September' => 'Сентябрь',
                'October' => 'Октябрь',
                'November' => 'Ноябрь',
                'December' => 'Декабрь'
            ];
            $selected = ($month == $_GET['Month']) ? 'selected' : '';
            echo "<option value='$month' $selected>$monthNameRussian[$monthName]</option>";
        }
        ?>
    </select>
    <select id="year" name="Year">
        <option value="" selected hidden>Выберите год</option>
        <?php
        $current_year = date("Y");
        for ($year = 2010; $year <= $current_year; $year++) {
            $selected = ($year == $_GET['Year']) ? 'selected' : '';
            echo "<option value=\"$year\" $selected>$year</option>";
        }
        ?>
    </select>
    <?= Html::submitButton('Отправить', ['class' => 'glow-on-hover']) ?>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">НДФЛ</th>
                <th scope="col">Доход агентства</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $hasData = false;
            foreach ($request_4 as $request) {
                if ($request->NDFL) {
                    $hasData = true;
                    echo "<tr><td>{$request->NDFL} ₽</td><td>{$request->doxod_agentstva} ₽</td></tr>";
                }
            }

            if (!$hasData) {
                echo "<tr><td>Сделки на данный промежуток времени отсутствуют</td><td>0₽</td></tr>";
            }
            ?>
            </tbody>
        </table>

