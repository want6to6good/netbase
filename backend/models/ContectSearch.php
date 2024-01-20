<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Contect;

/**
 * ContectSearch represents the model behind the search form of `backend\models\Contect`.
 */
class ContectSearch extends Contect
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'mail', 'content'], 'safe'],
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
     * 首先，创建一个基于 Contect 模型的查询 (Contect::find())。
     * 接着，创建一个 ActiveDataProvider 实例，它将用于管理数据的获取、排序和分页。
     * load($params) 用于加载搜索表单提交的数据。
     * validate() 确保提供的数据符合 rules 方法定义的规则。
     * 如果验证失败，默认行为是返回所有数据。可以取消注释 $query->where('0=1'); 来在验证失败时返回空数据集。
     * andFilterWhere 方法用于添加条件到查询中。根据 id、name、mail 和 content 字段的值添加筛选条件。
     */
    public function search($params)
    {
        $query = Contect::find();

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
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'mail', $this->mail])
            ->andFilterWhere(['like', 'content', $this->content]);

        return $dataProvider;
    }
}
