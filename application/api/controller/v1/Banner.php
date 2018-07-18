<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2018-07-14 22:27:07
 * @version $Id$
 */
namespace app\api\controller\v1;

use think\Validate;
use app\api\validate\IDMustBePostiveInt;
use app\api\model\Banner as BannerModel;
use think\Request;
use think\Controller;

class Banner extends Controller{
	// 获取指定id的banner信息
    
    public function getBanner($id)
    {
		(new IDMustBePostiveInt())->check();
		$banner = BannerModel::getBannerByID($id);
		
    }
}