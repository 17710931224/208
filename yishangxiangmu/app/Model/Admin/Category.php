<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    //
    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'es_categroies';

    //主键
    protected $primaryKey = 'cid';
                                                                                                                                                                                                                                                                                                            
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
