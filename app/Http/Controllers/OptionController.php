<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Optionclass;
use App\Models\Foodclass;

class OptionController extends Controller
{
    // 載入optionclass的資料並回傳至視圖
    public function setoption() {
        $optionData = Optionclass::all();
        return view('setoption', ['optionData' => $optionData]);
    }

    public function addoptionsuccess(Request $request) {
        $optionData = new Optionclass();
        $optionData->optionname = $request->input('optionname');
        $optionData->save();
        return redirect()->back()->with('success', '附加屬性已成功新增');
    }

    public function setoptionsuccess($id, Request $request) {
        // 依照路由傳進來的id值讀取對應資料項目
        $OptionItem = Optionclass::find($id);
        $OptionItem->value1 = $request->input('value1');
        $OptionItem->value2 = $request->input('value2');
        $OptionItem->value3 = $request->input('value3');
        $OptionItem->value4 = $request->input('value4');
        $OptionItem->value5 = $request->input('value5');
        $OptionItem->value6 = $request->input('value6');
        $OptionItem->save();
        
        return redirect()->back()->with('success', '屬性修改成功');
    }

    public function selectoptionedit($cid, $fid) {
        // 在這個視圖內需要用的資料有：optionclass所有資料、foodclass的特定id、特定id對應到的food資料表
        $optionData = Optionclass::all();
        $foodClass = FoodClass::find($cid);
        // 假設進入$id為1時，要讀取Food1資料表
        // 使用'Food'.$id的語法無法正確讀取到資料表
        // 因此必須使用絕對類別名稱
        $className = 'App\Models\Food' . $cid;
        //$itemData = $className::all();
        $food = $className::find($fid);

        return view('selectoptionedit', ['optionData' => $optionData, 'foodClass' => $foodClass, 'food' => $food]);
    }

    public function selectoptioneditsuccess($cid, $fid, Request $request) {
        $className = 'App\Models\Food' . $cid;
        $food = $className::find($fid);
        // 從請求中獲取選取的附加屬性值
        $selectedOptions = $request->input('selectedOptions');
        // 將附加屬性值組合成字串，以空格分隔
        // 當 $selectedOptions 是空陣列時，$selectedOptionsStr 就會被設置為空字串
        $selectedOptionsStr = '';
        if (!empty($selectedOptions)) {
            $selectedOptionsStr = implode(' ', $selectedOptions);
        }
        // 將組合後的字串設置到食品項目的 selectedoption 屬性中
        $food->selectedoption = $selectedOptionsStr;
        $food->save();

        return redirect()->back()->with('success', '附加屬性已選擇');
    }
 }
