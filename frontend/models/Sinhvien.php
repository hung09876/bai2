<?php
namespace frontend\models;

use yii\db\ActiveRecord;
use yii\web\UploadedFile;

class Sinhvien extends ActiveRecord{
    public static function tableName(){
        return "sinhvien";
    }
    //
    public function rules(){
        return[
            [['name','masv'], 'required'],
            ['name','string','max'=>45],
            ['masv','integer'],
            ['image','file', 'skipOnEmpty'=>true, 'extensions'=> 'jpg, png'],
        ];
    }
    //
    public function attributeLabels(){
        return[
            'name'=>'nhập tên sinh viên',
            'masv' => 'nhập mã sinh viên',
            'image'=> 'nhập hình ảnh',
        ];
    }
    //
    public function getMonhoc(){
        
    }
}
?>