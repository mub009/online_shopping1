<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_subcategory".
 *
 * @property integer $pk_int_id
 * @property string $vch_subcategory
 * @property integer $Fk_int_categories_id
 *
 * @property TblCategories $fkIntCategories
 */
class TblSubcategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_subcategory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vch_subcategory', 'Fk_int_categories_id'], 'required'],
            [['Fk_int_categories_id'], 'integer'],
            [['vch_subcategory'], 'string', 'max' => 20],
            [['Fk_int_categories_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblCategories::className(), 'targetAttribute' => ['Fk_int_categories_id' => 'Pk_int_categories_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pk_int_id' => 'ID',
            'vch_subcategory' => 'Subcategory',
            'Fk_int_categories_id' => 'Categories ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkIntCategories()
    {
        return $this->hasOne(TblCategories::className(), ['Pk_int_categories_id' => 'Fk_int_categories_id']);
    }
}
