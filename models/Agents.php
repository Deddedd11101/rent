<?php
namespace app\models;
use yii\db\ActiveRecord;
class Agents extends ActiveRecord
{
    public function getSdelks()
    {
        return $this->hasMany(Sdelks::class, ['ID' => 'ID_Agenta']);
    }
    // переделать many
}
