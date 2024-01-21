<?php
/**
 * team:你说的队，NKU
 * Coding by zhanglinhao 2113976,20240119
 * model
 */
namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Contect;

/**
 * ContectSearch 表示 `app\models\Contect` 搜索表单的模型。
 */
class ContectSearch extends Contect
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'], // id字段为整数类型
            [['name', 'mail', 'content'], 'safe'], // name、mail和content字段为安全输入类型
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
        $query = Contect::find();

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
            'mail' => $this->mail,
            'content' => $this->content,
        ]);

        $query->andFilterWhere(['like', 'content', $this->content]);

        return $dataProvider;
    }
}

