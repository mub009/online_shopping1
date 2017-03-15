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
class subcategory extends \yii\db\ActiveRecord
{
   
    public $category_name;
    public $subcategory_name;
    public $subcategory_rename;
        public $category_box;
    public $rememberMe = true;
    //public $Category_Name;

    private $_user = false;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['subcategory_name'], 'required'],
            [['category_name'], 'required']
           
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function addUserDetails($category_name,$subcategory_name)
    {
        $this->Vchr_main_Categorie=$category_name;
        $this->Vchr_sub_Categorie=$subcategory_name;
        $this->save();
    }
    public function deleteUserDetails($category_name,$subcategory_name)
    {
        $this->Vchr_main_Categorie=$category_name;
        $this->Vchr_sub_Categorie=$subcategory_name;
    }
    public function editUserDetails($category_name,$subcategory_name)
    {
        $this->Vchr_main_Categorie=$category_name;
        $this->Vchr_sub_Categorie=$subcategory_name;
    }

}
