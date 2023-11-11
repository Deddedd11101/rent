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
<?php

$agents = Agents::find()->select(['FIO'])->indexBy('FIO')->column();

if(isset($request_3)): ?>

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
        <h2>Распределение дохода от сделок</h2>
    </div>
    <div class="form-container">
    <?= Html::beginForm(['labs/request_3'], 'get') ?>

    <?= Html::dropDownList('fioAgents_3', Yii::$app->session->get('selectedAgent'), $agents) ?>

    <?= Html::hiddenInput('request', 3) ?>

    <?= Html::submitButton('Отправить', ['class' => 'glow-on-hover']) ?>

    <?= Html::endForm() ?>

    <table>
        <thead>
        <tr>
            <th>Количество сделок</th>
            <th>Доход агентства</th>
            <th>Доход агента</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($request_3 as $request): ?>
            <tr>
                <td><?= $request['sdelks_count'] ?></td>
                <td><?= $request['doxod_agentstva'] ?>0 ₽</td>
                <td><?= $request['doxod_agenta'] ?>0 ₽</td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>

<?php endif; ?>