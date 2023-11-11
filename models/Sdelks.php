<?php
namespace app\models;
use yii\db\ActiveRecord;
class Sdelks extends ActiveRecord
{
    public $sdelks_count;
    public $doxod_agentstva;
    public $doxod_agenta;
    public $NDFL;
    public function getAgents()
    {
        return $this->hasOne(Agents::class, ['ID' => 'ID_Agenta']);
    }
    public function getPokupatels()
    {
        return $this->hasOne(Pokupatels::class, ['ID' => 'ID_Pokupatelya']);
    }
    public function getObjects()
    {
        return $this->hasOne(Objects::class, ['ID' => 'ID_Objecta']);
    }

}