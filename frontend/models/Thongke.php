<?php
namespace frontend\models;

use yii\db\ActiveRecord;
use Yii;

class Thongke extends ActiveRecord{
    public static function tableName(){
        return "thongke";
    }
    //
    public function rules(){
        return[
            [['idsinhvien','idmonhoc'],'required']
        ];
    }
    //
    public function attributeLabels(){
        return[
            'idsinhvien'=>'idsinhvien',
            'idmonhoc'=>'idmonhoc'
        ];
    }
    //
    // public static function thong(){
    //     $qr = Yii::$app->find()
    //     ->select(['sinhvien.name','monhoc.name','monhoc.tinchi'])
    //     ->innerJoinWith(['sinhvien','monhoc',true])
    //     ->where(['monhoc.idmonhoc= thongke.idmonhoc','sinhvine.idsinhvien = thongke.idsinhvien'])
    //     ->all();
    //     return $qr;
    // }
}
?>