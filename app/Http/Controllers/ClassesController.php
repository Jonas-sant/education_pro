<?php

namespace App\Http\Controllers;
use App\Models\Workshop;
use App\Models\Classes;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function insert(Request $request)
    {
        $data = $request->all();
        Classes::create($data);

        return redirect()->route('index');

    }

    public function edit($id){
        $class = Classes::findOrFail($id);

        return view('edit_class',compact('class'));
    }

    public function update(Request $request){
        Classes::find($request->id)->update($request->all());

        return redirect()->route('index');
    }

    public function delete($id)
    {
        $product = Classes::find($id);
        $product->delete();

        return redirect()->route('index');
    }

}
