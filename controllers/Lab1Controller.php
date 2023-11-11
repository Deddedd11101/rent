<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\ClientsForm;
use app\models\AgentsForm;
use yii\data\Pagination;


class Lab1Controller extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actionLab1()
    {
        return $this->render('lab1');
    }
    public function actionAgents()
    {

        $model = new AgentsForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            return $this->render('agents', ['model' => $model]);
        }
        else {
            Yii::$app->session->setFlash('custom', '');
            return $this->render('agents', ['model' => $model]);
        }
    }
    public function actionClients()
    {
        $model = new ClientsForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            return $this->render('clients', ['model' => $model]);
        }
        else {
            Yii::$app->session->setFlash('custom', '');
            return $this->render('clients', ['model' => $model]);
        }
    }
    public function actionInfo()
    {
        return $this->render('info');
    }

}