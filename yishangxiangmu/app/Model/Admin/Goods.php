<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    
    protected $table = 'es_products';

    //主键
    protected $primaryKey = 'prod_id';

    /**
     * 该模型是否被自动维护时间戳
     *
     * @var bool
     */
    public $timestamps = false;

    /**
	 * 不可被批量赋值的属性。
	 *
	 * @var array
	 */
	protected $guarded = [];

	 /**
     * 获得商品图片
     */
    public function pics()
    {
        return $this->hasMany('App\Model\Admin\GoodsImg','cid','prod_id');
    }


    public function goodstocate()
    {
        //关联为一个商品只能对应属于一种类别，用到hasOne，外表  , 主表
        return $this->hasOne('App\Model\Admin\cate','cid','cate_cid');
    }
    

}
