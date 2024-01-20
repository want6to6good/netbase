<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Contect;


/**
 * ContectSearch represents the model behind the search form of `app\models\Contect`.
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
            [['name','mail','content'], 'safe'],
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
     * 它创建一个基于 Contect 模型的查询。
     * ActiveDataProvider 用于提供查询结果的数据，支持分页和排序。
     * load($params) 加载搜索表单提交的数据。
     * 如果数据验证 (validate()) 失败，则默认返回所有数据（可以通过取消注释 $query->where('0=1'); 来改变这一行为）。
     * andFilterWhere 方法添加条件到查询中。这里根据 id、name、mail、和 content 字段的值进行筛选。特别地，content 字段使用了 like 条件，用于模糊匹配。
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
            'name' => $this->name,
            'mail' => $this->mail,
            'content' => $this->content,
        ]);

        $query->andFilterWhere(['like', 'content', $this->content]);

        return $dataProvider;
    }
}
