<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    // 用户组
    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'groups';

    // 不可以批量赋值的字段，为空则表示都可以
    protected $guarded = [];

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $hidden = [];
    /**
     * 表明模型是否应该被打上时间戳
     *
     * @var bool
     */
    public $timestamps = true;

    public function user()
    {
        return $this->hasMany('\App\Models\User\User','gid','id');
    }
}
