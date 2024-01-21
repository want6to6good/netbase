<?php
/**
 * team:你说的队，NKU
 * Coding by miyilin 2111566,20240119
 * model
 */
namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Loginlog;
/**
 * LoginlogSearch represents the model behind the search form of `backend\models\Loginlog`.
 */
class LoginlogSearch extends Loginlog
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'date'], 'safe'],
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
     * 首先，创建一个基于 Loginlog 模型的查询 (Loginlog::find())。
     * ActiveDataProvider 用于提供查询结果的数据，支持分页和排序。
     * load($params) 加载搜索表单提交的数据。
     * 如果数据验证 (validate()) 失败，则默认返回所有数据（可以通过取消注释 $query->where('0=1'); 来改变这一行为）。
     * andFilterWhere 方法添加条件到查询中。这里根据 id、name 和 date 字段的值进行筛选，使用了 like 条件以支持模糊匹配。
     */
    public function search($params)
    {
        $query = Loginlog::find();

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
        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'date', $this->date]);

        return $dataProvider;
    }
}
