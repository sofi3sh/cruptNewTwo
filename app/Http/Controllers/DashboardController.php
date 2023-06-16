<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parameter;
use App\Models\Exchange;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
//
    }


    public function show($id)
    {
//
    }

    public function edit($id)
    {
//
    }

    public function update(Request $request, $id)
    {
//
    }

    public function destroy($id)
    {
//
    }
}
