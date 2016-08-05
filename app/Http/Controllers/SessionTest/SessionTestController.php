<?php

namespace App\Http\Controllers\SessionTest;

use App\Http\Controllers\Controller;

use App\Http\Requests\SessionTest\SessionTestRequest;

class SessionTestController extends Controller
{
    public function index(SessionTestRequest $request)
    {
        // $request->session()->flash('temp_session', 'Data stored in the session using this method will only be available during the subsequent HTTP request, and then will be deleted');

        // session()->put('session_test', 'session_test_redis');

        // session()->forget('session_test');

        $data = $request->session()->all();
        dump($data);

        return view('session_test.index');
    }
}
