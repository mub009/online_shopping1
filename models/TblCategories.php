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
    public function rules()
    {
        return [
            [['Vchr_main_Categorie'], 'string', 'max' => 20],
        ];
    }


     /**
     * addcategory its function and insert data into tables
     * @parm $category
     * @return its true or false value
     */

    public function addcategory($category)
    {
        

        $this->Vchr_main_Categorie=$category;
        return $this->save();
    }

    /**
     * views its function and views a values from database
     * @parm $category
     * @return save values

     */
 

    public function views()
    {


  return $data=yii::$app->db->createCommand("SELECT * 
FROM  `tbl_categories`")->queryall();


    
    }




}
