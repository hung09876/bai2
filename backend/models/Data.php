<?php
namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class Data extends Model{
    public $name;
    public $email;
    public $imageFile;
    public function rules(){
        return[
            [['name', 'email'], 'required'],
            ['email','email'],
            ['imageFile','file','skipOnEmpty'=>false,'extensions'=>'jpg, png'],
        ];
    }
    
}
?>
