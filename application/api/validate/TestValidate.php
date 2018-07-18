<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2018-07-14 23:44:58
 * @version $Id$
 */
namespace app\api\validate;

use think\Validate;

class TestValidate extends Validate {
    	protected $rule=[
    		'id' => '',
    		'name' => 'require|max:10',
    		'name' => 'require|alphaNum',
    		'email' => 'email'
    	];

}