<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        return Stock::all();
    }

    public function borrow(Request $request)
    {
        $request->validate([
            'stockid' => 'required',
            'borrow' => 'required',
        ]);

        $data_borrow = array(
            'stockid' => $request->input('stockid'),
            'borrow' => $request->input('borrow'),
            'student_id' => '1',
            'item_id' => '1'
        );

        return Stock::create($data_borrow);
    }

    public function search($id)
    {
        return Stock::where('stockid', 'LIKE', '%'.$id.'%')
        ->where('student_id', 'LIKE', '%'.$id.'%')
        ->where('item_id', 'LIKE', '%'.$id.'%')
        ->get();
    }
}

