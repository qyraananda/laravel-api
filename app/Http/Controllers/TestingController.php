<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testing;
use Illuminate\Support\Facades\Validator;

class TestingController extends Controller
{
    public function index()
    {
    	return Testing::all();
    }

    public function create(Request $request) {
    	$testing = new Testing();
    	$testing->status = $request->status;
    	$testing->position = $request->position;
    	$testing->save();

    	return "Save data";
    }

    public function update(Request $request,$id){
    	$status = $request->status;
    	$position = $request->position;

    	$testing = Testing::find($id);
    	$testing->status = $status;
    	$testing->position =$position;
    	$testing->save();

    	return "Update data";
    } 

    public function delete($id){
    	$testing = Testing::find($id);
    	$testing->delete();

    	return "Delete Data";
    }
}
