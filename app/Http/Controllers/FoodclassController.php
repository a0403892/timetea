<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foodclass;
// use App\Models\Food;
use App\Models\Food1;
use App\Models\Food2;
use App\Models\Food3;
use App\Models\Food4;
use App\Models\Food5;
use App\Models\Food6;
use App\Models\Food7;
use App\Models\Food8;
use App\Models\Food9;
use App\Models\Food10;
use App\Models\Optionclass;

class FoodclassController extends Controller
{
    public function timetea2($tableNumber = null) {
        $foodClassData = FoodClass::all();
        $optionData = Optionclass::all();
        // 如果未指定 table 參數，預設值為 1
        $tableNumber = $tableNumber ?? 1;

        return view('timetea2', ['foodClassData' => $foodClassData, 'tableNumber' => $tableNumber, 'optionData' => $optionData]);
    }

    public function foodclassadd() {
        $foodClassData = FoodClass::all();
        return view('foodclassadd', ['foodClassData' => $foodClassData]);
    }

    // 試了這個function還是失敗，不試了，一個一個打好了
    // public function main($id) {
    //     $className = 'Food' . $id;
    //     $itemData = $className::all();
    //     return view('main' . $id, ['Food' . $id => $itemData]);
    // }

    public function main1() {
        $itemData = Food1::all();
        $optionData = Optionclass::all();
        // $optionLabel = '溫度：'; // 自定義的 Option 標籤名
        return view('main1', ['Food1' => $itemData, 'optionData' => $optionData]);
    }
    public function main2() {
        $itemData = Food2::all();
        return view('main2', ['Food2' => $itemData]);
    }
    public function main3() {
        $itemData = Food3::all();
        return view('main3', ['Food3' => $itemData]);
    }
    public function main4() {
        $itemData = Food4::all();
        return view('main4', ['Food4' => $itemData]);
    }
    public function main5() {
        $itemData = Food5::all();
        return view('main5', ['Food5' => $itemData]);
    }
    public function main6() {
        $itemData = Food6::all();
        return view('main6', ['Food6' => $itemData]);
    }

    public function main7() {
        $itemData = Food7::all();
        return view('main7', ['Food7' => $itemData]);
    }

    public function main8() {
        $itemData = Food8::all();
        return view('main8', ['Food8' => $itemData]);
    }

    public function main9() {
        $itemData = Food9::all();
        return view('main9', ['Food9' => $itemData]);
    }

    public function main10() {
        $itemData = Food10::all();
        return view('main10', ['Food10' => $itemData]);
    }


    public function foodclassupdate($id) {
        // 依照路由的傳來的id，在資料表中找到相對應的資料
        // 資料內容存進變數foodClass中
        $foodClass = FoodClass::find($id);
        return view('foodclassupdate', ['foodClass' => $foodClass]);
    }

    public function foodclassupdatesuccess($id, Request $request) {
        $foodClass = FoodClass::find($id);
        $foodClass->classname = $request->input('newname');
        $foodClass->save();

        // with方法用於將數據傳遞到下一個請求中
        // 並且可以通過 session() 函數在視圖中訪問
        return redirect()->back()->with('success', '商品名稱已成功更新');
    }

    public function addsuccess(Request $request) {
        $foodClassData = new FoodClass();
        $foodClassData->classname = $request->input('classname');
        $foodClassData->save();
        return redirect()->back()->with('success', '商品種類已成功新增');
    }
    
    public function foodclassedit($id) {
        $foodClass = FoodClass::find($id);
        // 假設進入$id為1時，要讀取Food1資料表
        // 使用'Food'.$id的語法無法正確讀取到資料表
        // 因此必須使用絕對類別名稱
        $className = 'App\Models\Food' . $id;
        $itemData = $className::all();
        return view('foodclassedit', ['foodClass' => $foodClass, 'itemData' => $itemData]);
    }

    public function foodaddsuccess($id, Request $request) {
        $className = 'App\Models\Food' . $id;
        // 使用動態類名稱實例化模型
        $food = new $className;
        // 獲取請求中的 itemname 值並賦值給Model
        $food->itemname = $request->input('itemname');
        $food->save();

        return redirect()->back()->with('success', '項目名稱已新增');
    }

    public function foodedit($cid, $fid) {
        $foodClass = FoodClass::find($cid);
        // 種類id為1時，就會讀取Food1資料表，依此類推
        $className = 'App\Models\Food' . $cid;
        $food = $className::find($fid);
        return view('foodedit', ['foodClass' => $foodClass, 'food' => $food]);
    }

    public function foodeditsuccess($cid, $fid, Request $request) {
        // 種類id為1時，就會讀取Food1資料表，依此類推
        $className = 'App\Models\Food' . $cid;
        $food = $className::find($fid);
        $food->itemname = $request->input('newitemname');
        $food->itemprice = $request->input('newitemprice');
        $food->save();

        // with方法用於將數據傳遞到下一個請求中
        // 並且可以通過 session() 函數在視圖中訪問
        return redirect()->back()->with('success', '商品已成功更新');
    }

    public function foodpicedit($cid, $fid) {
        $foodClass = FoodClass::find($cid);
        // 種類id為1時，就會讀取Food1資料表，依此類推
        $className = 'App\Models\Food' . $cid;
        $food = $className::find($fid);
        return view('foodpicedit', ['foodClass' => $foodClass, 'food' => $food]);
    }

    public function uploadimage($cid, $fid, Request $request)
    {
        // 檢查請求中是否包含文件
        if ($request->hasFile('image')) {
            // 獲取上傳的文件
            $image = $request->file('image');
            // 生成新的文件名
            $fileName = 'food' . $cid . '/' . $fid . '.' . $image->getClientOriginalExtension();
            // 將文件移動到指定目錄
            $image->move(public_path("pic/food{$cid}"), $fileName);
            // 返回成功的session
            return redirect()->back()->with('success', '圖片修改/上傳成功！');
        } else {
            // 返回錯誤的session
            return redirect()->back()->with('error', '請選擇要上傳的圖片');
        }
    }
}
