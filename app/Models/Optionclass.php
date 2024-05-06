<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Optionclass extends Model
{
    use HasFactory;
    // 設定為不需要時間戳記
    // 否則新增欄位的時候系統會叫你設定update_at欄位
    public $timestamps = false;
    use HasFactory;
    protected $table = 'optionclass'; // 資料庫表名稱
    protected $fillable = ['id', 'optionname', 'value1', 'value2', 'value3', 'value4', 'value5', 'value6']; // 指定的屬性
}
