<?php
/**
 * team:你说的队，NKU
 * Coding by zhujingbo 2111451,20240119
 * 控制器
 */
namespace frontend\controllers;

use frontend\models\Userdata;
use frontend\models\UserdataSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UserdataController 用户数据控制器，实现对 Userdata 模型的 CRUD 操作。
 */
class UserdataController extends Controller
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
     * 显示所有 Userdata 模型。
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new UserdataSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * 显示单个 Userdata 模型。
     * @param int $id
     * @return string
     * @throws NotFoundHttpException 如果找不到模型则抛出异常
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * 创建新的 Userdata 模型。
     * 如果创建成功，浏览器将被重定向到 'view' 页面。
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Userdata();

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
     * 更新现有的 Userdata 模型。
     * 如果更新成功，浏览器将被重定向到 'view' 页面。
     * @param int $id
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException 如果找不到模型则抛出异常
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
     * 删除现有的 Userdata 模型。
     * 如果删除成功，浏览器将被重定向到 'index' 页面。
     * @param int $id
     * @return \yii\web\Response
     * @throws NotFoundHttpException 如果找不到模型则抛出异常
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * 根据主键值查找 Userdata 模型。
     * 如果未找到模型，将抛出 404 HTTP 异常。
     * @param int $id
     * @return Userdata 加载的模型
     * @throws NotFoundHttpException 如果找不到模型则抛出异常
     */
    protected function findModel($id)
    {
        if (($model = Userdata::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('请求的页面不存在。');
    }
}
