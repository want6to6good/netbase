<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Userdata;

/**
 * UserdataSearch 表示 `frontend\models\Userdata` 搜索表单的模型。
 */
class UserdataSearch extends Userdata
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'], // id字段为整数类型
            [['name', 'selfsign'], 'safe'], // name和selfsign字段为安全输入类型
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // 绕过父类中 scenarios() 的实现
        return Model::scenarios();
    }

    /**
     * 创建一个带有应用搜索查询的数据提供程序实例
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Userdata::find();

        // 在这里添加应始终应用的条件

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // 如果验证失败，取消注释以下行，如果不希望在验证失败时返回任何记录
            // $query->where('0=1');
            return $dataProvider;
        }

        // 网格过滤条件
        $query->andFilterWhere([
            'id' => $this->id,
            'name' => $this->name,
            'selfsign' => $this->selfsign,
        ]);

        return $dataProvider;
    }
}

