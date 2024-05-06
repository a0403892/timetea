<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    //
    public function submitCartData(Request $request)
    {
        // 從請求中獲取購物車數據
        $cartData = $request->all();

        // foreach ($cartData as $i) {
        //     $tableNumber = $i['tableNumber'];
        //     $name = $i['name'];
        //     $quantity = $i['quantity'];
        //     $price = $i['price'];
        //     $mark = $i['mark'];
        //     $cartTotal = $i['cartTotal'];
        // }

        // // 將購物車數據傳遞到視圖中
        // return view('submit', ['tableNumber' => $tableNumber, 'name' => $name, 'quantity' => $quantity, 'mark' => $mark, 'price' => $price, 'cartTotal' => $cartTotal]);
        
        // 在此處理購物車數據，例如保存到資料庫中
        foreach ($cartData as $item) {
        // 創建新的資料庫記錄並保存
            $cart = new Cart();
            $cart->tableNumber = $item['tableNumber'];
            $cart->name = $item['name'];
            $cart->quantity = $item['quantity'];
            $cart->price = $item['price'];
            $cart->mark = $item['mark'];
            $cart->total = $item['cartTotal'];
            $cart->save();
        }
        // 返回成功響應
        return response()->json(['message' => '購物車數據已成功處理'], 200);
    }

    public function submit(Request $request) {
        // 從請求中獲取 cart 數據
        $cartData = $request->all();
    
        // 在這裡處理 cart 數據，如保存到資料庫中或其他操作
    
        // 將需要的數據從 cart 數據中提取出來
        $name = $request->input('name');
        $quantity = $request->input('quantity');
        $price = $request->input('price');
        $mark = $request->input('mark');
        $cartTotal = $request->input('cartTotal');
        
    
        // 將購物車數據傳遞到視圖中
        return view('submit', ['name' => $name, 'quantity' => $quantity, 'price' => $price, 'mark' => $mark, 'cartTotal' => $cartTotal]);
    }
}
