<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Board;

/**
 * BoardSearch 表示 `app\models\Board` 搜索表单的模型。
 */
class BoardSearch extends Board
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'], // id字段为整数类型
            [['content', 'date'], 'safe'], // content和date字段为安全的（可以包含任何数据类型）
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // 绕过父类中的 scenarios() 实现
        return Model::scenarios();
    }

    /**
     * 使用应用查询的条件创建数据提供程序实例
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Board::find();

        // 在这里添加始终应用的条件

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // 如果验证失败，取消注释以下行，如果不想在验证失败时返回任何记录
            // $query->where('0=1');
            return $dataProvider;
        }

        // 在表格中添加过滤条件
        $query->andFilterWhere([
            'id' => $this->id,
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'content', $this->content]);

        return $dataProvider;
    }
}

