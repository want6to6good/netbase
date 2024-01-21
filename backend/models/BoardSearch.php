<?php
/**
 * team:你说的队，NKU
 * Coding by zhanglinhao 2113976,20240119
 * model
 */
namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Board;

/**
 * BoardSearch represents the model behind the search form of `app\models\Board`.
 */
class BoardSearch extends Board
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['content', 'date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    /**
     * 这是类的核心功能，用于构建基于用户输入的搜索查询。
     * 首先，创建一个基于 Board 模型的查询 (Board::find())。
     * 接着，创建一个 ActiveDataProvider 实例，它将用于管理数据的获取、排序和分页。
     * load($params) 用于加载搜索表单提交的数据。
     * validate() 确保提供的数据符合 rules 方法定义的规则。
     * 如果验证失败，默认行为是返回所有数据。可以取消注释 $query->where('0=1'); 来在验证失败时返回空数据集。
     * andFilterWhere 方法用于添加条件到查询中。这里根据 id、date 和 content 字段的值添加筛选条件。
     */
    public function search($params)
    {
        $query = Board::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'content', $this->content]);

        return $dataProvider;
    }
}
