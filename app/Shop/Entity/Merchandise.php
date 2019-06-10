<?php
namespace App\Shop\Entity;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Merchandise extends Model {
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
    protected $table = 'merchandise';

    //主鍵名稱
    protected $primaryKey = 'id';

    //可以大量指定異動的欄位 (Mass Assignment)
    protected $fillable = [
        "id",
        "status",
        "name",
        "introduction",
        "photo",
        "price",
        "remain_count",
    ];
}