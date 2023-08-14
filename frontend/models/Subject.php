<?php
namespace frontend\models;

use yii\db\ActiveRecord;
use frontend\models\test;

class Subject extends ActiveRecord{
    public static function tableName(){
        return "subject";
    }
    //
    public function rules(){
        return[
            [['idtest','ten_mon'],'required'],
        ];
    }
    //
    public function getTest(){
        return $this->hasOne(Test::class,['idtest'=>'idtest']);
    }
}
?>