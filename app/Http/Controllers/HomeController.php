<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parameter;
use App\Models\Exchange;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $exchanges = Exchange::find(1)->first();
        $parameters = Parameter::where('exchange_id',$exchanges->id)->first();

        $allExchanges = Exchange::all();

        return view('pages.home.index', [
            'params'=>$exchanges,
            'exchanges' => $allExchanges,
            'parameters' => $parameters
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
//        $exchange_id = $request->input('exchange_id');
//
//        // Шукаємо параметр за exchange_id
//        $parameter = Parameter::where('exchange_id', $exchange_id)->first();
//
//        if ($parameter) {
//            // Якщо параметр знайдено, оновлюємо значення
//            $parameter->update($request->all());
//        } else {
            // Якщо параметр не знайдено, створюємо новий запис
            $parameter = new Parameter;
            $parameter->is_active = $request->input('is_active');
            $parameter->exchange_id = $request->input('exchange_id');
            $parameter->api_key = $request->input('api_key');
            $parameter->secret_key = $request->input('secret_key');
            $parameter->secret_pass = $request->input('secret_pass');
            $parameter->max_trade = $request->input('max_trade');
            $parameter->position_amount = $request->input('position_amount');
            $parameter->stop_loss = $request->input('stop_loss');
            $parameter->take_profit = $request->input('take_profit');
            $parameter->finish_time = $request->input('finish_time');
            $parameter->slip = $request->input('slip');
            $parameter->after_finish_time = $request->input('after_finish_time');
            $parameter->save();
//        }

        return redirect()->route('page.home.index');
    }


    public function show($id)
    {
        $parameter = Parameter::findOrFail($id);
        return view('main.show', compact('parameter'));
    }

    public function edit($id)
    {
        $parameter = Parameter::findOrFail($id);
        return view('main.edit', compact('parameter'));
    }

    public function update(Request $request, $id)
    {
//        $parameter = Parameter::findOrFail($id);
//        $parameter->is_active = $request->input('is_active');
//        $parameter->exchange_id = $request->input('exchange_id');
//        $parameter->api_key = $request->input('api_key');
//        $parameter->secret_key = $request->input('secret_key');
//        $parameter->secret_pass = $request->input('secret_pass');
//        $parameter->max_trade = $request->input('max_trade');
//        $parameter->position_amount = $request->input('position_amount');
//        $parameter->stop_loss = $request->input('stop_loss');
//        $parameter->take_profit = $request->input('take_profit');
//        $parameter->finish_time = $request->input('finish_time');
//        $parameter->slip = $request->input('slip');
//        $parameter->after_finish_time = $request->input('after_finish_time');
//
//        $parameter->save();
//
//        return redirect()->route('main');
    }

    public function destroy($id)
    {
        $parameter = Parameter::findOrFail($id);
        $parameter->delete();

        return redirect()->route('main');
    }
}
