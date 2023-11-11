<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

$this->title = 'Клиенты';
$this->params['breadcrumbs'][] = ['label' => 'Лабораторная 1', 'url' => ['lab1']];
$this->params['breadcrumbs'][] = $this->title;
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
<div class="col-md-12 text-center mt-3 mb-3">
    <h4>Форма Покупатели</h4>
</div>
<div class="row">
    <div class="col-md-6"> <!-- Левая колонка -->
        <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'f')->label('Введите ФИО')->textInput() ?>
        <?= $form->field($model, 'email')->label('Введите электронный адрес')->textInput() ?>
        <?= $form->field($model, 'phone')->label('Введите номер телефона')->textInput(['value' => '+7 (XXX) XXX-XX-XX']) ?>
        <?= $form->field($model, 'passport')->label('Введите паспортные данные')->textInput(['value' => 'Серия: XXXX Номер: XXXXXX']) ?>
        <div class="form-group">
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
    <?php
    $customMessage = Yii::$app->session->getFlash('custom');
    if (isset($customMessage)){
        echo $customMessage;
    }
    else{ ?>
        <div class="col-md-6"> <!-- Правая колонка -->
            <p>Вывод информации:</p>
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th scope="row"><label>ФИО</label></th>
                    <td><?= Html::encode($model->f) ?></td>
                </tr>
                <tr>
                    <th scope="row"><label>Электронный адрес</label></th>
                    <td><?= Html::encode($model->email) ?></td>
                </tr>
                <tr>
                    <th scope="row"><label>Номер телефона</label></th>
                    <td><?= Html::encode($model->phone) ?></td>
                </tr>
                <tr>
                    <th scope="row"><label>Паспортные данные</label></th>
                    <td><?= Html::encode($model->passport) ?></td>
                </tr>
                </tbody>
            </table>
        </div>
        <?php
    }
    ?>
</div>
