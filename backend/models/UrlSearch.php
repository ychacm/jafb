<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Url;

/**
 * UrlSearch represents the model behind the search form about `common\models\Url`.
 */
class UrlSearch extends Url
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['urlID', 'typeID', 'urlsortID', 'number', 'ord', 'id', 'sar_id', 'isdis'], 'integer'],
            [['name', 'url', 'image', 'title', 'intro'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
    public function search($params)
    {
        $query = Url::find();

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
            'urlID' => $this->urlID,
            'typeID' => $this->typeID,
            'urlsortID' => $this->urlsortID,
            'number' => $this->number,
            'ord' => $this->ord,
            'id' => $this->id,
            'sar_id' => $this->sar_id,
            'isdis' => $this->isdis,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'intro', $this->intro]);

        return $dataProvider;
    }
}
