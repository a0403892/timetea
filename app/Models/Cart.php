<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
        // 設定為不需要時間戳記
    // 否則新增欄位的時候系統會叫你設定update_at欄位
    public $timestamps = false;
    use HasFactory;
    protected $table = 'cart'; // 資料庫表名稱
    protected $fillable = ['id', 'tableNumber', 'name', 'quantity', 'price']; // 指定的屬性
}
