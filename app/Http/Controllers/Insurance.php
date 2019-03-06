<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use Session;
use App\MdlInsurance;

class Insurance extends Controller
{
    public function listing(Request $request) {
        $output = [];
        $records = MdlInsurance::all();
            
        //echo"<pre>";print_r($records);echo"</pre>";
        return view('template.insurance_list')->with(['records'=>$records]); //response()->json( $all );
    }

    public function add(Request $request) {

        if($request->isMethod('post')) {
            
            Validator::make($request->all(), [
                'name' => 'required|unique:tbl_insurance',
                'email' =>  'required|unique:tbl_insurance',
                'net_rate' => 'required',
                'bipd' => 'required',
                'tax' => 'required',
                'other' => 'required'
            ], $this->messages() )->validate();
            
            /*
            if($validator->fails()) {
                return redirect('/insurance/add')
                    ->withErrors($validator)
                    ->withInput();
            }
            */           

            // Create Insurance
            MdlInsurance::create([
                'name' => $request->input('name'),
                'email' =>  $request->input('email'),
                'image_url' => '',
                'net_rate' => $request->input('net_rate'),
                'bipd' => $request->input('bipd'),
                'tax' => $request->input('tax'),
                'other' => $request->input('other')
            ]);
            
            $name = $request->input('name');
            $msg = $name . " Insurance has been created!";
            Session::flash('success', $msg);
            return redirect('insurance');
        } else {
            return view('template.insurance_add');
        }                
    }

    protected function messages() {
        return [       
            'net_rate.required' => 'The net rate field is required.'
        ];
    }

}