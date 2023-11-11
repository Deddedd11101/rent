<?php


use yii\grid\GridView;


?>
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
<h2>Таблица Агенты </h2>
</div>
    <?
   echo GridView::widget([
  "dataProvider"=> $productsDataProvider,
  'columns'=>[
    'FIO',
    'Email',
    'Telephone',
    ['class'=> 'yii\grid\ActionColumn']
  ]
  ]);
?>
