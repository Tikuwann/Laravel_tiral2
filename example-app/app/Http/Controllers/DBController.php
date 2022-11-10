<?php

namespace App\Http\Controllers;

use App\Models\DBModel;
use Illuminate\Http\Request;
// use App\Http\Controllers\DBController;


class DBController extends Controller
{
    // public function index() {
    //     $items = Item::all();
    //     return view('item.index', compact('items'));
    // }
    // public function detail($id) {
    //     $item = Item::find($id);
    //     return view('item.detail', compact('item'));
    // }
    // public function edit(Request $request) {
    //     $name = $request->input('name');
    //     $content = $request->input('content');
    //     $price = $request->input('price');
    //     $quantity = $request->input('quantity');
    //     return view('item.edit', compact('name', 'content', 'price', 'quantity'));
    // }
    //ItemRequestは下記のformRequestでバリデーションを参照。

    public function store(DBController $taskdata, Request $request){
        $taskdata -> create($request->save());


        return to_route('index');

    }




    public function create(Request $request) {
        DBController::create([
        //     'name' => $request-> name ,
        //     'task' => $request-> task ,
        //     'place' => $request-> place ,
        //     'start_date' => $request-> start_date ,
        //     'end_date' =>  $request-> end_date ,
        // ]);

        $name = $request->input('name'),
        $task = $request->input('task'),
        $place = $request->input('place'),
        $start_date = $request->input('start_date'),
        $end_date = $request->input('end_date'),
        ]);

        // DBController::create(compact('name', 'task', 'place', 'start_date', 'end_date'));
        return view('todoapp.create');
    }


    public function add(Request $request) {
        $post = new DBModel;
        $post -> name = $request-> name ;
        $post -> task = $request-> task ;
        $post -> place = $request-> place ;
        $post -> start_date = $request-> start_date ;
        $post -> end_date = $request-> end_date ;
        $post -> save();
        return redirect(route('welcome'));
    }



    // public function update(Request $request) {
    //     $item = Item::findOrFail($id);
    //     $item->fill(['name' => $request->input('name')]);
    //     $item->fill(['content' => $request->input('content')]);
    //     $item->fill(['quantity' => $request->input('quantity')]);
    //     $item->save();
    //     set_message('内容を修正しました。');
    //     return redirect(route('item.detail', ['id' => $id]));
    // }

}
