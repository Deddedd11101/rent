<?php
namespace app\models;
use yii\db\ActiveRecord;
class Prodavts extends ActiveRecord
{
    public function getObjects()
{
    return $this->hasOne(Objects::class, ['ID' => 'ID_Prodavtsa']);
}
}