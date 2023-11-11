<?php
namespace app\models;
use yii\db\ActiveRecord;
class Pokupatels extends ActiveRecord
{
    public function getSdelks()
    {
        return $this->hasOne(Sdelks::class, ['ID' => 'ID_Pokupatelya']);
    }
}