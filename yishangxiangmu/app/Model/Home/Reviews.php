<?php

namespace App\Model\Home;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    //
    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'es_reviews';

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

	/**
     * 获得此博客文章的评论。
     */
    public function goodspic()
    {
        return $this->hasMany('App\Model\Home\Reviews_pic','reviews_id','id');
    }

    public function reply()
    {
        return $this->hasMany('App\Model\Home\Reviews_reply','rid','id');
    }
}
