<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_product".
 *
 * @property integer $Pk_int_product_id
 * @property string $Vchr_product_name
 * @property string $Vchr_img_path
 * @property double $Int_Price
 * @property string $text_details
 * @property integer $Fk_int_product_date_id
 * @property integer $Fk_int_product_stock
 * @property integer $Fk_int_categories_id
 *
 * @property TblOrder[] $tblOrders
 * @property TblProductDate $fkIntProductDate
 * @property TblProductStock $fkIntProductStock
 * @property TblCategories $fkIntCategories
 */
class TblProduct extends \yii\db\ActiveRecord
{
   
    /**
     * @return array the validation rules.
     */
 
    public function rules()
    {
        return [
            [['Int_Price'], 'number'],
            [['text_details'], 'required'],
            [['text_details'], 'string'],
            [['Fk_int_product_date_id', 'Fk_int_product_stock', 'Fk_int_categories_id'], 'integer'],
            [['Vchr_product_name', 'Vchr_img_path'], 'string', 'max' => 20],
            [['Fk_int_product_date_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblProductDate::className(), 'targetAttribute' => ['Fk_int_product_date_id' => 'Pk_int_product_id']],
            [['Fk_int_product_stock'], 'exist', 'skipOnError' => true, 'targetClass' => TblProductStock::className(), 'targetAttribute' => ['Fk_int_product_stock' => 'Pk_int_product_stock']],
            [['Fk_int_categories_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblCategories::className(), 'targetAttribute' => ['Fk_int_categories_id' => 'Pk_int_categories_id']],
        ];
    }

   
   


    /**
<<<<<<< HEAD
=======
     * @function addUserDetails used for add data to database
     * @param $category_name is main category name
     * @param $subcategory_name is sub category name
     * @return have no return value
     */

   public function addUserDetails($item_name,$image,$price,$product_details)
    {

        echo "$item_name"."$image"."$price"."$product_details";
        $this->Pk_int_product_id="";
        $this->vchr_product_name=$item_name;
        $this->vchr_img_path=$image;
        $this->Int_price=$price;
        $this->text_details=$product_details;
        $this->Fk_int_product_date_id=2;
        $this->Fk_int_product_stock=1;
        $this->Fk_int_categories_id=2;
        $this->save();
        
    }

 /**
>>>>>>> ed3ed7e467eca57d8fdf8b83eea13349b70590a3
     * readmobiledata its function and reading data from database
     * @param no param
     * @return its reading data only for mobile data from db_online_shopping in database
     */


     public function readmobiledata()
    {

        return $data=yii::$app->db->createCommand("SELECT  `Vchr_product_name` ,Vchr_main_Categorie,  `Vchr_img_path` ,  `Int_Price` ,  `Fk_int_categories_id` 
FROM  `tbl_product` 
JOIN tbl_categories ON Fk_int_categories_id = pk_int_categories_id where Vchr_main_Categorie='mobile'")->queryall();
    }


    /**
     * readlaptopdata its function and reading data from database
     * @param no param
     * @return its reading data only for laptop data from db_online_shopping in database
     */

    public function readlaptopdata()
    {
     return $data=yii::$app->db->createCommand("SELECT  `Vchr_product_name` ,Vchr_main_Categorie,  `Vchr_img_path` ,  `Int_Price` ,  `Fk_int_categories_id` 
FROM  `tbl_product` 
JOIN tbl_categories ON Fk_int_categories_id = pk_int_categories_id where Vchr_main_Categorie='laptop'")->queryall();   
    }


    /**
     * readmobilemoto its function and reading data from database
     * @param no param
     * @return its reading data only for moto mobiles data from db_online_shopping in database
     */

    public function readmobilemoto()
    {
     return $data=yii::$app->db->createCommand("SELECT  `Vchr_product_name` ,Vchr_main_Categorie,  `Vchr_img_path` ,  `Int_Price` ,  `Fk_int_categories_id` 
FROM  `tbl_product` 
JOIN tbl_categories ON Fk_int_categories_id = pk_int_categories_id where Vchr_sub_Categorie='moto' and Vchr_main_Categorie='mobile'")->queryall();   
    }

    /**
     * readmobilelenovo its function and reading data from database
     * @param no param
     * @return its reading data only for lenovo mobiles data from db_online_shopping in database
     */

  public function readmobilelenovo()
    {
     return $data=yii::$app->db->createCommand("SELECT  `Vchr_product_name` ,Vchr_main_Categorie,  `Vchr_img_path` ,  `Int_Price` ,  `Fk_int_categories_id` 
FROM  `tbl_product` 
JOIN tbl_categories ON Fk_int_categories_id = pk_int_categories_id where Vchr_main_Categorie='mobile' and Vchr_sub_Categorie='lenovo'")->queryall();   
    }



}
