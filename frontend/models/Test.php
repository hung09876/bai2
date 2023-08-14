<?php
namespace frontend\models;

use yii\db\ActiveRecord;
use yii\base\Model;
use frontend\models\Hoc2;

class Test extends ActiveRecord{
    public static function tableName(){
        return"test";
    }
    //
    public function rules(){
        return[
            [['name','email'],'required'],
            ['email','email'],
            [['email','name'],'string','max'=> 45],
            ['image','file','skipOnEmpty'=> true, 'extensions'=>'jpg,png'],
        ];
    }
    //
    public function attributeLabels(){
        return[
            'name'=>'tên',
            'email'=>'email',
            'image'=>'hình ảnh',
        ];
    }
    public function getHoc2(){
        return $this->hasMany(Hoc2::class,['idtest'=>'idtest']);
    }
}
?>