<?php

namespace App\Http\Controllers;

use App\Models\Mycolor as Mycolor;
use App\Http\Resources\Mycolor as MycolorResource;
use Illuminate\Http\Request;

class MycolorController extends Controller
{
    public function index(){
        $mycolor = Mycolor::paginate(15);
        return MycolorResource::collection($mycolor);
    }

    public function show($id){
        $mycolor = Mycolor::findOrFail( $id );
        return new MycolorResource( $mycolor );
    }

    public function store(Request $request){
        $mycolor = new Mycolor;
        $mycolor->hex = $request->input('hex');
        $mycolor->name = $request->input('name');
        if( $mycolor->save() ){
          return new MycolorResource( $mycolor );
        }
    }

    public function update(Request $request){
        $mycolor = Mycolor::findOrFail( $request->id );
        $mycolor->hex = $request->input('hex');
        $mycolor->name = $request->input('name');
        if( $mycolor->save() ){
          return new MycolorResource( $mycolor );
        }
    }

    public function destroy($id){
        $mycolor = Mycolor::findOrFail( $id );
        if( $mycolor->delete() ){
          return new MycolorResource( $mycolor );
        }
    }
}
