<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class GoodsImg extends Model
{
    //
    
    protected $table = 'prod_pic';

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
}
