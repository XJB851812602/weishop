<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2018-07-15 14:24:14
 * @version $Id$
 */
namespace app\api\validate;

use think\Validate;
use app\api\validate\BaseValidate;

class IDMustBePostiveInt extends BaseValidate {
	protected $rule=[
		'id' => 'require|isPostiveInteger'
	];
    
    protected function isPostiveInteger($value,$rule = '',$data = '',$field = ''){
    	if (is_numeric($value) && is_int($value+0) && ($value+0)>0) {
    		return true;
    	}
    	else{
    		return $field."必须是正整数";
    	}
    }
}