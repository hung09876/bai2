<?php
namespace frontend\controllers;

use Yii;
use frontend\models\Subject;
use yii\web\Controller;
use yii\db\Query;

class SubjectController extends Controller{
    public function action(){
        return[
            'error'=>[
                'class'=>'yii\web\ErrorAction'
            ] 
            ];
    }
    //
    public function actionIndex(){
        //$model  = Subject::find()->all();
        $query = new Query();
        
        $query->select('*')
        ->from('subject')
        ->innerJoin('test','test.idtest= subject.idtest');
        $model= $query->all();
        //echo'<pre>';
        return $this->render('index',['model' => $model]);
    }
    public function actionCreate(){
        $model = new Subject();
            if($model->load(Yii::$app->request->post()) && $model->save()){
                if(Yii::$app->request->isPost){
                    return $this->redirect(['index']);
                }else{
                    $model->loadDefaultValues();  
                }
            }
            return $this->render('form',['model'=>$model]);
    }
}
?>