<?php
/**
 * team:你说的队，NKU
 * Coding by zhanglinhao 2113976,20240119
 * 控制器
 */
namespace frontend\controllers;

use frontend\models\Board;
use frontend\models\BoardSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BoardController 实现了对 Board 模型的 CRUD 操作。
 */
class BoardController extends Controller
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
     * 显示所有 Board 模型。
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BoardSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * 显示单个 Board 模型。
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
     * 创建新的 Board 模型。
     * 如果创建成功，浏览器将被重定向到 'view' 页面。
     *
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Board();

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
     * 更新现有的 Board 模型。
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
     * 删除现有的 Board 模型。
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
     * 根据主键值查找 Board 模型。
     * 如果找不到模型，将抛出 404 HTTP 异常。
     *
     * @param int $id ID
     * @return Board 加载的模型
     * @throws NotFoundHttpException 如果找不到模型
     */
    protected function findModel($id)
    {
        if (($model = Board::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

