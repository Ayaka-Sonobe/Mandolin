<?php

namespace App\Http\Controllers;

use App\Concert;
use Illuminate\Http\Request;

class ConcertController extends Controller
{
    public function index(Concert $concert)
    {
        //dd($concert->get());
        return view('index')->with(['concerts' => $concert->get()]);
        // return $concert->get();
    }
    
    public function show(Concert $concert)
    {
        return view('show')->with(['concert' => $concert]);
    }

    public function create()
    {
        return view('create');
    }
    
    // 引数をRequest->ConcertRequestにする
    public function store(Concert $concert, Request $request)
    {
        $input = $request['concert'];
        $concert->fill($input)->save();
        return redirect('/');
    }
    
    public function edit(Concert $concert)
    {
        // blade側で開演日時の初期値を表示するため
        // $concert->start_timeの文字列内のスペースをTに置き換える
        $concert->start_time = str_replace(" ", "T", $concert->start_time);
        return view('edit')->with(['concert' => $concert]);
    }
    
    public function update(ConcertRequest $request, Concert $concert)
    {
        $input_concert = $request['concert'];
        $concert->fill($input_concert)->save();
        return redirect('/concert/' . $concert->id);
    }
    
    public function delete(Concert $concert)
    {
        $concert->delete();
        return redirect('/');
    }
}


