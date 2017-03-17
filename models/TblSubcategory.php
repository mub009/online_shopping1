<?php
/**
* @author husnath <husnathpalakkal773@gmail.com>
* created date : 15/03/2017
**/

namespace app\models;
use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
*/
class TblSubcategory extends \yii\db\ActiveRecord
{
    public $category_name;
    public $subcategory_name;
    public $subcategory_rename;
    //public $Category_Name;
    /**
     * @function rules used for form data validation
     * @param no param
     * @return have no return value
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
     * @function addUserDetails used for add data to database
     * @param $category_name is main category name
     * @param $subcategory_name is sub category name
     * @return true or false
    */

    public function addUserDetails($subcategory_name)
    {
        $this->vchr_subcategory=$subcategory_name;
        $this->save();
    }

    /**
     * @function deleteUserDetails used for delete data from database
     * @param $category_name is main category name
     * @param $subcategory_name is sub category name
     * @return have no return value
     **/
    public function deleteUserDetails($subcategory_name)
    {
        $this->vchr_subcategory=$subcategory_name;
        $del=Yii::$app->db->createCommand("delete from tbl_subcategory where vchr_subcategory='$subcategory_name'");
    }
    /**
     * @function editUserDetails used for rename data from database
     * @param $category_name is main category name
     * @param $subcategory_name is sub category name
     * @return have no return value
    */
    public function editUserDetails($subcategory_name,$subcategory_rename)
    {
        $this->vchr_subcategory=$subcategory_name;
    }

    /**
     * @function viewUserDetails used for rename data from database
     * @param no param
     * @return list all subcategories
    */
    public function viewUserDetails()
    {
        return $data=yii::$app->db->createCommand("select vchr_subcategory from tbl_subcategory")->queryall();
    }
}
