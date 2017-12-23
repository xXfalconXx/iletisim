<?php

namespace kouosl\iletisim\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\iletisim\models\Iletisims;

/**
 * IletisimsSearch represents the model behind the search form of `kouosl\iletisim\models\Iletisims`.
 */
class IletisimsSearch extends Iletisims
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mail', 'konu', 'mesaj', 'tarih', 'isim_soyisim'], 'safe'],
            [['id'], 'integer'],
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
        $query = Iletisims::find();

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
            'tarih' => $this->tarih,
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'mail', $this->mail])
            ->andFilterWhere(['like', 'konu', $this->konu])
            ->andFilterWhere(['like', 'mesaj', $this->mesaj])
            ->andFilterWhere(['like', 'isim_soyisim', $this->isim_soyisim]);

        return $dataProvider;
    }
}
