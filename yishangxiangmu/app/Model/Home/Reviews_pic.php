<?php

namespace App\Model\Home;

use Illuminate\Database\Eloquent\Model;

class Reviews_pic extends Model
{
    //
    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'es_reviews_pic';

    //关联主键
    protected $primaryKey = 'id';

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
