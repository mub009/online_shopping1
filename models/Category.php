<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
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

    public function rules()
    {
        return [
            // username and password are both required
            [['category'], 'required'],
        ];
    }
    
    
}
