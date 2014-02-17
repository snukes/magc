<?php
class User extends AppModel {
    public $validate = array(
        'username' => array(
            'rule' => 'notEmpty',
            'required' => 'create'
        ),
        'email' => array(
            'rule' => 'notEmpty',
            'email' => 'email'
        ),
        'password' => array(
            'rule' => 'notEmpty'
        ),
        'password_confirmation' => array(
            'rule' => array('equalToField', 'password'),
            'message' => 'Passwords do not match')
        )
    );

    function equalToField($array, $field) {
        return strcmp($this->data[$this->alias][key($array)], $this->data[$this->alias][$field]) == 0;
    }
}
?>
