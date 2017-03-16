<?php
/**
* @author fayiza 
* @version 1.0
* @created date 14/03/17
* @modified date 15/03/17
*/
namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_order".
 *
 * @property integer $pk_int_order_id
 * @property integer $fk_int_product_id
 * @property integer $fk_int_user_id
 *
 * @property TblRegistration $fkIntUser
 * @property TblProduct $fkIntProduct
 */
class TblOrder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fk_int_product_id', 'fk_int_user_id'], 'integer'],
            [['fk_int_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblRegistration::className(), 'targetAttribute' => ['fk_int_user_id' => 'Pk_int_registration_id']],
            [['fk_int_product_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblProduct::className(), 'targetAttribute' => ['fk_int_product_id' => 'Pk_int_product_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pk_int_order_id' => 'Pk Int Order ID',
            'fk_int_product_id' => 'Fk Int Product ID',
            'fk_int_user_id' => 'Fk Int User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkIntUser()
    {
        return $this->hasOne(TblRegistration::className(), ['Pk_int_registration_id' => 'fk_int_user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkIntProduct()
    {
        return $this->hasOne(TblProduct::className(), ['Pk_int_product_id' => 'fk_int_product_id']);
    }
    /**
* function getuser() for retriving datas from database
* @param no param
* @return no return value
*/
    public function getuser()
    {
        return $data=Yii::$app->db->createCommand(" SELECT vchr_first_name,vchr_last_name,int_mobile_number,vchr_gender,vchr_age,text_address,order_status FROM tbl_registration JOIN tbl_order ON tbl_registration.pk_int_registration_id=tbl_order.fk_int_user_id")->queryAll();
    }
}
