<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Thongke;
use frontend\models\Monhoc;
use frontend\models\Sinhvien;
use yii\db\Query;
use yii\db\Command;

class ThongkeController extends Controller{
    public function action(){
        return[
            'error'=>[
                'class'=>'yii\web\ErrorAction'
            ] 
            ];
    }
    //
    public function actionIndex(){
        $qr = new Query();
        $qr ->select('*')
        ->from('thongke')
        ->innerJoin('monhoc','monhoc.idmonhoc = thongke.idmonhoc')
        ->innerJoin('sinhvien','sinhvien.idsinhvien = thongke.idsinhvien');
        $model  = $qr->all();
        //echo'<pre>';
        // foreach($model as $row)
        // var_dump($row);
        // die();
        return $this->render('index',['model' => $model]);
    }
    public function actionCreate(){
        $model = new Thongke();
            if($model->load(Yii::$app->request->post()) && $model->save()){
                if(Yii::$app->request->isPost){
                    return $this->redirect(['index']);
                }else{
                    $model->loadDefaultValues();  
                }
            }
            return $this->render('form',['model'=>$model]);
    }
    //
    public function actionSinhvien(){
        $idsinhvien = $_GET['id'];
        //var_dump($idsinhvien);
        $qr = new Query();
        $qr->select('*')
        ->from('thongke')
        ->innerJoin('sinhvien','sinhvien.idsinhvien= thongke.idsinhvien')
        ->innerJoin('monhoc','monhoc.idmonhoc= thongke.idmonhoc')
        ->where("sinhvien.idsinhvien= {$idsinhvien}");
        $model = $qr->all();
    //  echo   $qr->createCommand()->getRawSql();
    //     var_dump($model);
        return $this->render('thongtin',['model'=>$model]);
    }
    //
    public function actionMonhoc(){
        $idmonhoc = $_GET['id'];
        //var_dump($idsinhvien);
        $qr = new Query();
        $qr->select('*')
        ->from('thongke')
        ->innerJoin('sinhvien','sinhvien.idsinhvien= thongke.idsinhvien')
        ->innerJoin('monhoc','monhoc.idmonhoc= thongke.idmonhoc')
        ->where("monhoc.idmonhoc= {$idmonhoc}");
        $model = $qr->all();
        return $this->render('thongtin',['model'=>$model]);
    }
}
?>