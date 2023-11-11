<?php

namespace app\controllers;



use yii\data\ActiveDataProvider;
use yii\web\Controller;
use app\models\Prodavts;
use app\models\Sdelks;
use app\models\Pokupatels;
use app\models\Objects;
use app\models\Agents;



class LabsController extends Controller
{
    /**
     * {@inheritdoc}
     */


        public function actionTables()
        {
            return $this->render('tables');
        }
    public function actionLab4()
    {
        return $this->render('lab4');
    }
    public function actionAgents()
    {
        $productsDataProvider = new ActiveDataProvider([
            'query' => Agents::find(),
            'pagination'=> [
              'pageSize' => 20,
            ]
            ]);
        
              return $this->render('agents/agents', [
                'productsDataProvider'=>$productsDataProvider,
              ],
            );
    }
    public function actionProdavts()
    {
        $productsDataProvider = new ActiveDataProvider([
            'query' => Prodavts::find(),
            'pagination'=> [
              'pageSize' => 20,
            ]
            ]);
        
              return $this->render('prodavts/prodavts', [
                'productsDataProvider'=>$productsDataProvider,
              ],
            );
    }

    public function actionPokupatels()
    {
        $productsDataProvider = new ActiveDataProvider([
            'query' => Pokupatels::find(),
            'pagination'=> [
              'pageSize' => 20,
            ]
            ]);
        
              return $this->render('pokupatels/pokupatels', [
                'productsDataProvider'=>$productsDataProvider,
              ],
            );
    }

    public function actionObjects()
    {
        $productsDataProvider = new ActiveDataProvider([
            'query' => Objects::find(),
            'pagination'=> [
              'pageSize' => 20,
            ]
            ]);
        
              return $this->render('objects/objects', [
                'productsDataProvider'=>$productsDataProvider,
              ],
            );
    }
    public function actionSdelks()
    {
        
        $productsDataProvider = new ActiveDataProvider([
            'query' => Sdelks::find()->with('agents')->with('objects')->with('pokupatels'),
            'pagination'=> [
              'pageSize' => 20,
            ]
            ]);
        
              return $this->render('sdelks/sdelks', [
                'productsDataProvider'=>$productsDataProvider,
              ],
            );

    }

}
