<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller ;
use frontend\models\Monhoc;

class MonhocController extends Controller{
        public function action(){
            return[
                'error'=>[
                    'class' => 'yii\web\ErrorAction',
                ],
                ];
        }
        //
        public function actionIndex(){
            $model = new Monhoc();
            $model = Monhoc::find()->all();
            return $this->render('index',['model'=> $model]);
        }
        //
        public function actionCreate(){
            $model = new Monhoc();
            if($model->load(Yii::$app->request->post()) && $model->save()){
                if(Yii::$app->request->isPost){
                    return $this->redirect(['view','idmonhoc'=> $model->idmonhoc]);
                }else{
                    $model->loadDefaultValues();  
                }
            }
            return $this->render('create',['model'=>$model]);
        }
        //
        public function actionView($idmonhoc){
            $model= Monhoc::findOne($idmonhoc);
            return $this->render('view',['model'=>$model]);
        }
        //
        public function actionUpdate($idmonhoc){
            $model = Monhoc::findOne($idmonhoc);
            if($model->load(Yii::$app->request->post()) && $model->save()){
                if(Yii::$app->request->isPost){
                    return $this->redirect(['view','idmonhoc'=> $model->idmonhoc]);
                }
            }
            return $this->render('form',['model'=>$model]);
        }
}
?>