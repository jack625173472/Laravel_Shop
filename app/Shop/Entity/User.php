<?php
namespace App\Shop\Entity;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class User extends Model {
    //取消自動編號
    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->{$model->getKeyName()} = Uuid::uuid4()->toString();
        });
    }

    //資料表名稱
    protected $table = 'users';

    //主鍵名稱
    protected $primaryKey = 'id';

    //可以大量指定異動的欄位 (Mass Assignment)
    protected $fillable = [
        "email",
        "password",
        "type",
        "nickname",
    ];
}