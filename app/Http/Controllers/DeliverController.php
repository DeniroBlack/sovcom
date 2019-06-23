<?php

namespace App\Http\Controllers;

use App\Models\Deliver;
use Illuminate\Http\Request;

class DeliverController extends Controller
{
    /**
     * Список записей.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('deliver.index', ['items' => Deliver::orderByDesc('id')->paginate(5)]);
    }

    /**
     * Отображение формы добавления записи.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('deliver.create');
    }

    /**
     * Сохранение записи после добавления.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $deliver = new Deliver();
        $deliver->name = $request->name;
        $deliver->point_start = $request->point_start;
        $deliver->point_end = $request->point_end;
        $deliver->type = intval($request->type);
        $deliver->distance = intval($request->distance);
        $deliver->price =
            $deliver->distance *
            ($deliver->type == Deliver::OUTSIDE_TYPE ? Deliver::OUTSIDE_PRICE : Deliver::INNER_PRICE);
        $deliver->save();
        $request->session()->flash('status', 'Запись добавлена!');
        return redirect()->action('DeliverController@index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('deliver.create', [
            'item' => Deliver::findOrFail($id),
            'isEdit' => true
        ]);
    }

    /**
     * Сохранение записи после изменения
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $deliver = Deliver::findOrFail($id);
        $deliver->name = $request->name;
        $deliver->point_start = $request->point_start;
        $deliver->point_end = $request->point_end;
        $deliver->type = intval($request->type);
        $deliver->distance = intval($request->distance);
        $deliver->price =
            $deliver->distance *
            ($deliver->type == Deliver::OUTSIDE_TYPE ? Deliver::OUTSIDE_PRICE : Deliver::INNER_PRICE);
        $deliver->save();
        $request->session()->flash('status', 'Запись изменена!');
        return redirect()->action('DeliverController@index');
    }

    /**
     * Удаление записи
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Request $request)
    {
        $deliver = Deliver::findOrFail($request->id);
        $deliver->delete();
        $request->session()->flash('status', 'Запись удалена!');
        return redirect()->action('DeliverController@index');
    }
}
