<?php

namespace App\Http\Controllers;
use App\Models\Workshop;
use App\Models\Classes;
use Illuminate\Http\Request;

class WorkshopController extends Controller
{
    public function index(){
        $workshops = Workshop::with('classes')->get();

        if(isset($workshops) && count($workshops) >= 0){
            if($workshops->first()){
                $first_class = $workshops->first()->classes->first();
                return view('class',compact('workshops','first_class'));
            }

            return view('class',compact('workshops'));
        }


    }

    public function classVideo($id){
        $class = Classes::find($id);
        $workshops = Workshop::with('classes')->get();

        return view('dashboard', compact('class','workshops'));
    }


    public function insert(Request $request)
    {
        $data = $request->all();
        Workshop::create($data);

        return redirect()->route('index');

    }

    public function edit($id){
        $workshop = Workshop::findOrFail($id);

        return view('edit_workshop',compact('workshop'));
    }

    public function update(Request $request){
        Workshop::findOfFail($request->id)->update($request->all());

        return redirect()->route('index');
    }

    public function delete($id)
    {
        $product = Workshop::find($id);
        $product->delete();

        return redirect()->route('dashboard');
    }
}
