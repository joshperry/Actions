<?php
class Action extends AppModel {
    var $name = 'Action';
	public $belongsTo = array(
        'Project' => array(
            'className'    => 'Project',
            'dependent'    => true
        )
    );
    var $hasAndBelongsToMany = array(        
        'Tag' => array(                
            'className'              => 'Tag',                
            'joinTable'              => 'actions_tags',                
            'foreignKey'             => 'action_id',                
            'associationForeignKey'  => 'tag_id',            
            'unique'                 => true,       
            'conditions'             => '',
            'fields'                 => '',
            'order'                  => '',
            'limit'                  => '',
            'offset'                 => '',
            'finderQuery'            => '',
            'deleteQuery'            => '',
            'insertQuery'            => ''
            )    
    );


	public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'status' => array(
            'rule' => array('boolean'),
        )
    );
}