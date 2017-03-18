<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TblSubcategory;

/**
 * CategorySearch represents the model behind the search form about `app\models\TblSubcategory`.
 */
class CategorySearch extends TblSubcategory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pk_int_id', 'Fk_int_categories_id'], 'integer'],
            [['vch_subcategory'], 'safe'],
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
        $query = TblSubcategory::find();

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
            'pk_int_id' => $this->pk_int_id,
            'Fk_int_categories_id' => $this->Fk_int_categories_id,
        ]);

        $query->andFilterWhere(['like', 'vch_subcategory', $this->vch_subcategory]);

        return $dataProvider;
    }
}
