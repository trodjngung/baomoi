<?php

App::uses('AppModel', 'Model');

class Category extends AppModel {
    var $name = 'Category';
    public $actsAs = array('Tree');
}
