<?php
namespace frontend\controllers;

use frontend\models\test;
use frontend\models\Hoc2;
use yii\web\Controller;
use yii\web\UploadedFile;
use yii\db\Query;
use yii\db\Command;
use Yii;

class TestController extends Controller{

    public function action(){
        return[
            'error'=>[
                'class' => 'yii\web\ErrorAction',
            ],
            ];
    }
    //
    public function actionIndex(){
        //$model = new Test();

        //$model = Test::find();
       
    echo'<pre>';
    try {
        $query = new Query;
        $query->select('*')
        ->from('test')
        ->innerJoin('subject', 'subject.idtest = test.idtest');
       
        //var_dump($query);
        $model = $query1->all();
        //echo $query->createCommand()->getRawSql();

    } catch (Exception $e) {
        echo $e->getMessage('loi');
    }
        //var_dump($results);
        // foreach($results as $row){
        //    var_dump($row);
        // }
        // die();
        return $this->render('index',['model'=>$model]);
    }
    //
    public function actionCreate(){
        $model = new Test();
        if($model->load(Yii::$app->request->post())){
            if(Yii::$app->request->isPost){
                $model->image= UploadedFile::getInstance($model,'image');
                $model->image->saveAs('../upload/'.$model->image->basename.'.'.$model->image->extension,false);
                $model->save();
            //    if(!$a){
            //     var_dump($model->getErrors());
            //     var_dump($a);
            //    die();
            //    }
                    return $this->redirect(['view','idtest'=>$model->idtest]);
            }else{
                $model->loadDefaultValues();  
            }
        }
        return $this->render('form',['model'=>$model]);
    }
    //
    public function actionView($idtest){
        $model = Test::findOne($idtest);
        return $this->render('view',['model'=>$model]);
    }
    //
    public function actionDelete($idtest){
        $model = Test::findOne($idtest)->delete();
        return $this->redirect(['index']);
    }
    //
    public function actionUpdate($idtest){
        $model = Test::findOne($idtest);
        $oldImage = $model->image;
        if($model->load(Yii::$app->request->post())){
            if(Yii::$app->request->isPost){
                $img= UploadedFile::getInstance($model,'image');
                if(isset($img)){
                    $model->image = $img->basename.'.'. $img->extension;
                }else{
                    $model->image = $oldImage;
                }
                if($model->save()){
                    if(isset($img)){
                        $img->saveAs('../upload/'.$img->basename.'.'.$img->extension);
                    }
                }
                return $this->redirect(['view','idtest'=>$model->idtest]);
            }
        }
        return $this->render('form',['model'=>$model]);
    }
}

?>
