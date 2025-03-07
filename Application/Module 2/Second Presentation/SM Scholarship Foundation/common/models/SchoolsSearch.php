<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Schools;

/**
 * SchoolsSearch represents the model behind the search form about `common\models\Schools`.
 */
class SchoolsSearch extends Schools
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['School_id', 'school_contactNumber'], 'integer'],
            [['school_name', 'school_area', 'school_address', 'school_contactEmail'], 'safe'],
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
        $query = Schools::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'School_id' => $this->School_id,
            'school_contactNumber' => $this->school_contactNumber,
        ]);

        $query->andFilterWhere(['like', 'school_name', $this->school_name])
            ->andFilterWhere(['like', 'school_area', $this->school_area])
            ->andFilterWhere(['like', 'school_address', $this->school_address])
            ->andFilterWhere(['like', 'school_contactEmail', $this->school_contactEmail]);

        return $dataProvider;
    }
}
