<?php
namespace frontend\models;

use common\models\User;
use dektrium\user\models\RegistrationForm;
use Yii;

/**
 * Signup form
 */
class SignupForm extends RegistrationForm
{
    const PROFILE_TYPE_CLIENT = 0;
    const PROFILE_TYPE_SPECIALIST = 1;

    public $repeat_password;
    public $type_profile;

    public function rules()
    {
        $user = new User();

        $rules = parent::rules();
        $rules[] = ['repeat_password', 'required'];
        $rules[] = ['repeat_password', 'compare', 'compareAttribute' => 'password', 'message' => Yii::t('app', 'Passwords don\'t match') ];

        $rules[] = ['type_profile', 'required'];
        $rules[]   = [['type_profile'], 'in', 'range' => array_keys($user->types)];

        return $rules;
    }

    /**
     * @return array
     */
    public function getTypes()
    {
        return [
            self::PROFILE_TYPE_CLIENT => Yii::t('app', 'Client'),
            self::PROFILE_TYPE_SPECIALIST => Yii::t('app', 'Specialist')
        ];
    }

    /**
     * @return string status text label
     */
    public function getTypeText()
    {
        return $this->types[$this->type_profile];
    }
}
