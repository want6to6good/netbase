<?php
/**
 * team:你说的队，NKU
 * Coding by zhujingbo 2111451,20240119
 * 控制器
 */
namespace frontend\controllers;

use frontend\models\Videos;
use frontend\models\VideosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * VideosController 视频控制器，实现对 Videos 模型的 CRUD 操作。
 */
class VideosController extends Controller
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
     * 显示所有 Videos 模型。
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new VideosSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * 显示单个 Videos 模型。
     * @param int $id ID
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
     * 创建新的 Videos 模型。
     * 如果创建成功，浏览器将被重定向到 'view' 页面。
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Videos();

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
     * 更新现有的 Videos 模型。
     * 如果更新成功，浏览器将被重定向到 'view' 页面。
     * @param int $id ID
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
     * 删除现有的 Videos 模型。
     * 如果删除成功，浏览器将被重定向到 'index' 页面。
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException 如果找不到模型则抛出异常
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * 根据主键值查找 Videos 模型。
     * 如果未找到模型，将抛出 404 HTTP 异常。
     * @param int $id ID
     * @return Videos 加载的模型
     * @throws NotFoundHttpException 如果找不到模型则抛出异常
     */
    protected function findModel($id)
    {
        if (($model = Videos::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('请求的页面不存在。');
    }
}
