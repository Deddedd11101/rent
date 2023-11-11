<?php

namespace app\controllers;
use app\models\Objects;
use app\models\Sdelks;
use Yii;
use yii\base\Controller;

class RequestsController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionRequest_1()
    {
        $fioAgents = Yii::$app->request->get('fioAgents');


        $query_1 = Sdelks::find()
            ->select(['Agents.FIO', 'Sdelks.Data', 'Sdelks.Summa', 'Sdelks.Komissiya'])
            ->from('Sdelks')
            ->leftJoin('Agents', 'Agents.ID = Sdelks.ID_Agenta')
            ->leftJoin('Objects', 'Objects.ID = Sdelks.ID_Objecta')
            ->leftJoin('Pokupatels', 'Pokupatels.ID = Sdelks.ID_Pokupatelya')
            ->where(['Agents.FIO' => $fioAgents]);
        if (Yii::$app->request->isGet && Yii::$app->request->get('request') == 1) {
            Yii::$app->session->set('selectedAgent', Yii::$app->request->get('fioAgents'));
            // Обработка запроса 1
        }


        $request_1 = $query_1->all();


        return $this->render('requests/request_1', [
            'request_1' => $request_1,

        ]);
    }
    public function actionRequest_2()
    {

        $SO_1 = Yii::$app->request->get('SO_1', 0);
        $SO_2 = Yii::$app->request->get('SO_2', 300);

        $query_2 = Objects::find()
            ->select(['*'])
            ->from('Objects')
            ->leftJoin('Prodavts', 'Prodavts.ID = Objects.ID_Prodavtsa')
            ->having(['between', 'S_obshaya_m2', $SO_1, $SO_2]);

        $request_2 = $query_2->all();


        return $this->render('requests/request_2', [

            'request_2' => $request_2,

        ]);
    }
    public function actionRequest_3()
    {

        $fioAgents_3 = Yii::$app->request->get('fioAgents_3');


        $query_3 = Sdelks::find()
            ->select([
                'sdelks_count'=>'COUNT(Sdelks.Summa)',
                'doxod_agentstva'=>'0.6 * SUM(Sdelks.Komissiya)',
                'doxod_agenta'=>'0.4 * SUM(Sdelks.Komissiya)'
            ])
            ->from('Sdelks')
            ->leftJoin('Agents', 'Agents.ID = Sdelks.ID_Agenta')
            ->leftJoin('Objects', 'Objects.ID = Sdelks.ID_Objecta')
            ->leftJoin('Pokupatels', 'Pokupatels.ID = Sdelks.ID_Pokupatelya')
            ->where(['Agents.FIO' => $fioAgents_3]);
        if (Yii::$app->request->isGet && Yii::$app->request->get('request') == 3) {
            Yii::$app->session->set('selectedAgent', Yii::$app->request->get('fioAgents_3'));
            // Обработка запроса 3
        }


        $request_3 = $query_3->all();


        return $this->render('requests/request_3', [

            'request_3' => $request_3,

        ]);
    }
    public function actionRequest_4()
    {

        $Month = Yii::$app->request->get('Month');
        $Year = Yii::$app->request->get('Year');


        $query_4 = Sdelks::find()
            ->select(['NDFL'=>'0.13 * 0.6 * SUM(Komissiya)',
                'doxod_agentstva'=>'0.6 * SUM(Sdelks.Komissiya)'])
            ->from('Sdelks')
            ->where(['EXTRACT(MONTH FROM Data)' => $Month])
            ->andWhere(['EXTRACT(YEAR FROM Data)' => $Year]);

        $request_4 = $query_4->all();



        return $this->render('requests/request_4', [

            'request_4' => $request_4,

        ]);
    }
    public function actionRequest_5()
    {

        $Cena_1 = Yii::$app->request->get('Cena_1', 0);
        $Cena_2 = Yii::$app->request->get('Cena_2', 50000000);


        $query_5 = Objects::find()
            ->select(['*'])
            ->from('Objects')
            ->leftJoin('Prodavts', 'Prodavts.ID = Objects.ID_Prodavtsa')
            ->having(['between', 'Cena', $Cena_1, $Cena_2]);


        $request_5 = $query_5->all();


        return $this->render('requests/request_5', [

            'request_5' => $request_5,
        ]);
    }
}
