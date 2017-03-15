<?php


/**
* @author Mubashir <pro.mubashir@outlook.com>
* created date : 15/03/2017
*/


namespace app\models;

use Yii;
use yii\base\Model;


class category extends Model
{
    public $category;
    public $category_box;
    public $rememberMe = true;

    private $_user = false;


    /**
     * @return array the validation rules.
     */

     public static function tableName()
    {
        return 'tbl_categories';
    }
 /**
     * rules its function and validate datas
     * @parm no param
     * @return no param
     */

    public function rules()
    {
        return [
            // username and password are both required
            [['category'], 'required'],
        ];
    }
    
    
}
