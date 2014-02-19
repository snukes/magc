<?php
class User extends AppModel {
    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            )
        ),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin','artist','viewer')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false 
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            )    
        ),
        'email' => 'email',
    );

    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $ph = new SimplePasswordHasher();
            $this->data[$this->alias]['password'] = $ph->hash($this->data[$this->alias][password]);
        } 
        return true;
    }

}
?>
