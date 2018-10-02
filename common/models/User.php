<?php
namespace common\models;

use dektrium\user\models\User as BaseUser;
use Yii;

/**
 * @property array $types
 * @property string $typeText
 *
 */

class User extends BaseUser
{
    const PROFILE_TYPE_CLIENT = 0;
    const PROFILE_TYPE_SPECIALIST = 1;

    public function scenarios()
    {
        $scenarios = parent::scenarios();
        // add field to scenarios
        $scenarios['create'][]   = 'type_profile';
        $scenarios['update'][]   = 'type_profile';
        $scenarios['register'][] = 'type_profile';
        return $scenarios;
    }

    public function rules()
    {
        $rules = parent::rules();
        // add some rules
        $rules['type_profileRequired'] = ['type_profile', 'required'];
        $rules['type_profileLength']   = [['type_profile'], 'in', 'range' => array_keys($this->types)];

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