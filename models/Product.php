<?php
/**
* @author anas
* created date : 8/03/2017
*/

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class product extends Model
{
    public $category;
    public $category_box;
    public $rememberMe = true;
    public $subcategory;
    public $item_name;
    public $subcategory_name;
    public $subcategory_rename;
    public $category_name;
    public $image;
    public $price;
    public $product_details;

    private $_user = false;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['category', 'subcategory','item_name','image','price','product_details'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
        ];
    }
    
    /**
     * @function addUserDetails used for add data to database
     * @param $category_name is main category name
     * @param $subcategory_name is sub category name
     * @return have no return value
     */

   public function addUserDetails($item_name,$image,$price,$product_details)
    {

        //echo "$item_name"."$image"."$price"."$product_details";
        //$this->Pk_int_product_id="";
        $this->vchr_product_name=$item_name;
        $this->vchr_img_path=$image;
        $this->Int_price=$price;
        $this->text_details=$product_details;
        //$this->Fk_int_product_date_id="";
        //$this->Fk_int_product_stock="";
        //$this->Fk_int_categories_id="";
        $this->save();
        
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();

            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Incorrect username or password.');
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     * @return bool whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*30 : 0);
        }
        return false;
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }
 /**
     * @function deleteUserDetails used for delete data from database
     * @param $category_name is main category name
     * @param $subcategory_name is sub category name
     * @return have no return value
     */
    public function deleteUserDetails($category_name,$subcategory_name)
    {
        $this->Vchr_main_Categorie=$category_name;
        $this->Vchr_sub_Categorie=$subcategory_name;
    }
    /**
     * @function editUserDetails used for rename data from database
     * @param $category_name is main category name
     * @param $subcategory_name is sub category name
     * @return have no return value
     */
    public function editUserDetails($category_name,$subcategory_name)
    {
        $this->Vchr_main_Categorie=$category_name;
        $this->Vchr_sub_Categorie=$subcategory_name;
    }

}