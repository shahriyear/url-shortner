<?php

namespace App\Http\Controllers;

use App\CreateUrl;
use Illuminate\Http\Request;

class CreateUrlController extends Controller
{
    public function index()
    {
        $data['urls'] = CreateUrl::all();

        return view('welcome', $data);
    }

    public function store(Request $request)
    {
        $code = str_random(10);
       CreateUrl::create([
           'url' => $request->url,
           'code'=> $code
       ]);
        return redirect()->back();
    }

    public function testRedirect($code)
    {
        $fetchData = CreateUrl::where('code','=',$code)->first();
        $original_url = $fetchData->url;
        return redirect($original_url);

    }


}
