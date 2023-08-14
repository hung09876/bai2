<?php
namespace frontend\controllers;

use Yii;
use yii\web\UploadedFile;
use yii\web\Controller;
use frontend\models\Sinhvien;

class SinhvienController extends Controller{
        
        public function action(){
            return[
                'error'=>[
                    'class' => 'yii\web\ErrorAction',
                ],
                ];
        }
        //
        public function actionIndex(){
            //$model = new Sinhvien();
            $model = Sinhvien::find()->all();
            return $this->render('index',['model'=>$model]);
        }
        //
        public function actionCreate(){
            $model = new Sinhvien();
            if($model->load(Yii::$app->request->post())){
                if(Yii::$app->request->isPost){
                    $model->image = UploadedFile::getInstance($model,'image');
                    $model->image->saveAs('../upload/'.$model->image->basename.'.'.$model->image->extension,false);
                    $model->save();
                    return $this->redirect(['view','idsinhvien'=>$model->idsinhvien]);
                }else{
                    $model->loadDefaultValues();  
                }
            }
            return $this->render('form',['model'=>$model]);
        }
        //
        public function actionView($idsinhvien){
            $model = Sinhvien::findOne($idsinhvien);
            //var_dump($model);
            return $this->render('view',['model'=>$model]);
        }
        //
        public function actionUpdate($idsinhvien){
            $model = Sinhvien::findOne($idsinhvien);
            $oldimage = $model->image;
            if($model->load(Yii::$app->request->post())){
                if(Yii::$app->request->isPost){
                    $img = UploadedFile::getInstance($model,'image');
                    if(isset($img)){
                        $model->image= $img->basename.'.'.$img->extension;
                    }else{
                        $model->image=$oldimage;
                    }
                }
                if($model->save()){
                    if(isset($img)){
                        $img->saveAs('../upload/'.$model->image->basename.'.'.$model->image->extension,false);
                    }
                    return $this->redirect(['view','idsinhvien'=>$model->idsinhvien]);
                }
            }
            return $this->render('form',['model'=>$model]);
        }
        //
        public function actionDelete($idsinhvien){
            $model = Sinhivien::findOne($idsinhvien)->delete();
            return $this->redirect(['index']);
        }
}
?>