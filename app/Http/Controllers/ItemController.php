<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        return Item::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'itemid' => 'required',
            'itemname' => 'required',
            'remain' => 'required'
        ]);

        $data_item = array(
            'itemid' => $request->input('itemid'),
            'itemname' => $request->input('itemname'),
            'remain' => $request->input('remain')
        );

        return Item::create($data_item);
    }

    public function show($id)
    {
        return Item::find($id);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'itemid' => 'required',
            'itemname' => 'required',
            'remain' => 'required'
        ]);

        $data_item = array(
            'itemid' => $request->input('itemid'),
            'itemname' => $request->input('itemname'),
            'remain' => $request->input('remain')
        );

        $item = Item::find($id);
            $item->update($data_item);
            return $item;
    }

    public function destroy($id)
    {
        return Item::destroy($id);
    }
}

