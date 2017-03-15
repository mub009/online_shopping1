<?php


/**
* @author Mubashir <pro.mubashir@outlook.com>
* created date : 15/03/2017
*/


namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_categories".
 *
 * @property integer $Pk_int_categories_id
 * @property string $Vchr_main_Categorie
 *
 * @property TblProduct[] $tblProducts
 */
class TblCategories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Vchr_main_Categorie'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Pk_int_categories_id' => 'Pk Int Categories ID',
            'Vchr_main_Categorie' => 'Vchr Main  Categorie',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblProducts()
    {
        return $this->hasMany(TblProduct::className(), ['Fk_int_categories_id' => 'Pk_int_categories_id']);
    }


     /**
     * addcategory its function and insert data into tables
     * @parm $category
     * @return save values
     */

    public function addcategory($category)
    {
        

        $this->Vchr_main_Categorie=$category;
        return $this->save();
    }




}
