<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminModel;
use Auth;
use DB;
use Redirect;
use DateTime;
use Carbon\Carbon;
use Response;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function adminDashboard(){
        $data = AdminModel::select('*')->get();
    	return view('admin/dashboard')->with(['data' => $data]);
    }
    public function addQuestion(Request $request){
      
        $data = AdminModel::create(['question' => $request->input('question'),'option_1' => $request->input('option_1'),'option_2' => $request->input('option_2'), 'option_3' => $request->input('option_3'), 'option_4' => $request->input('option_4'), 'answer' => $request->input('answer')]);
        return response()->json($data);
    	//return redirect::back()->with('custom_success', 'Successfully Submitted');
    }
    public function editQuestion(Request $request){

        $updateRecord = AdminModel::find($request->id);
        $updateRecord->question = $request->edit_question;
        $updateRecord->option_1 = $request->edit_option_1;
        $updateRecord->option_2 = $request->edit_option_2;
        $updateRecord->option_3 = $request->edit_option_3;
        $updateRecord->option_4 = $request->edit_option_4;
        $updateRecord->answer = $request->edit_answer;
        $updateRecord->save();
        
        return response()->json($updateRecord);
    }
    public function deleteQuestoin(Request $request){
        $data = $request->id;
        AdminModel::find($request->id)->delete();
        return response()->json($data);
    }
    
}

