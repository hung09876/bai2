<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;
use app\models\Data;

class DataController extends Controller{
    public function actionIndex(){
        $model = new Data();
        if($model -> load(Yii::$app->request->post()) && $model->validate()){
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            $model ->imageFile->saveAs('../upload/'.$model->imagaFile->baseName .'.'. $model->imageFile->extension);
            return $this->render('show',['model'=>$model]);
        }
        return $this->render('index',['model'=>$model]);
    }
}
?>