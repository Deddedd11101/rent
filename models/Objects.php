<?php
namespace app\models;
use yii\db\ActiveRecord;
class Objects extends ActiveRecord
{
    public function getProdavts()
    {
        return $this->hasOne(Prodavts::class, ['ID' => 'ID_Prodavtsa']);
    }
}
