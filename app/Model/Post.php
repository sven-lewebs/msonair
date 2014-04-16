<?php
/**
 * Created by PhpStorm.
 * User: MaD
 * Date: 20.03.14
 * Time: 17:12
 */

class Post extends AppModel{

    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        ),
    );

} 