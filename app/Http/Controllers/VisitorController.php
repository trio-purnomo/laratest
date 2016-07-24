<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use App\Http\Requests\VisitorRequest;
use App\Models\Visitor;
use Event;
use App\Events\VisitorHasRegister;

class VisitorController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Visitor $visitor)
    {
    	$this->visitor = $visitor;
    }

     /**
     * Show the form for register visitor.
     *
     * @return Response
     */
    public function getRegister()
    {
        return view('visitor.register');
    }
    /**
     * Handle visitor registration request
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postRegister(VisitorRequest $request)
    {
        $visitor = new $this->visitor;

        $visitor->name = $request['name'];
        $visitor->email = $request['email'];
        $visitor->phone = $request['phone'];
        $visitor->ocupation = $request['ocupation'];
        
        if($visitor->save()) {
        	Event::fire(new VisitorHasRegister($visitor));
            return redirect('register')->with('ok', 'Registrasi Berhasil');
        }

        return redirect('register')->with('fail', 'Registrasi Gagal');
        
    }
}
