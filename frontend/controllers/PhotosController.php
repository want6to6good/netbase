<?php
/**
 * team:你说的队，NKU
 * Coding by miyilin 2111566,20240119
 * 控制器
 */
namespace frontend\controllers;

use frontend\models\Photos;
use frontend\models\PhotosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PhotosController 实现了对 Photos 模型的 CRUD 操作。
 */
class PhotosController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * 显示所有 Photos 模型。
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PhotosSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * 显示单个 Photos 模型。
     *
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException 如果找不到模型
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * 创建新的 Photos 模型。
     * 如果创建成功，浏览器将被重定向到 'view' 页面。
     *
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Photos();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * 更新现有的 Photos 模型。
     * 如果更新成功，浏览器将被重定向到 'view' 页面。
     *
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException 如果找不到模型
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * 删除现有的 Photos 模型。
     * 如果删除成功，浏览器将被重定向到 'index' 页面。
     *
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException 如果找不到模型
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * 根据主键值查找 Photos 模型。
     * 如果找不到模型，将抛出 404 HTTP 异常。
     *
     * @param int $id ID
     * @return Photos 加载的模型
     * @throws NotFoundHttpException 如果找不到模型
     */
    protected function findModel($id)
    {
        if (($model = Photos::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
