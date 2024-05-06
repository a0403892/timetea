<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food2 extends Model
{
    use HasFactory;
    // 設定為不需要時間戳記
    // 否則新增欄位的時候系統會叫你設定update_at欄位
    public $timestamps = false;
    use HasFactory;
    protected $table = 'Food2'; // 資料庫表名稱
    protected $fillable = ['id', 'itemname', 'itemprice']; // 指定的屬性
}
