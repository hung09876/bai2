<?php
namespace frontend\models;

use yii\db\ActiveRecord;

class Monhoc extends ActiveRecord{

    //
    public static function tableName(){
        return "monhoc";
    }
    public function rules(){
        return [
            [['code','ten','tin_chi'], 'required'],
            [['code','ten'],'string','max'=> 45],
        ];
    }
    //
    public function attributeLabels(){
        return[
            'ten' => 'Nhập tên môn học',
            'code' => 'Nhập mã môn học',
            'tin_chi' => 'Nhập số tín chỉ',
        ];
    }
    //
    // public function getIdmonhoc(){
    //    $a= $this->find('idmonhoc')->all;
    //    return $a;
    // }
    public function getSinhvien(){
        
    }
}
?>