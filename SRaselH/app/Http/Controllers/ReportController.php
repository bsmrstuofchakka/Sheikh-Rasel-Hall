<?php

namespace App\Http\Controllers;

use App\ReportModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addReport(){

        if(empty(Auth::user()->id)) {
            return redirect('/');
        }

        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();


        //dd($data);

        return view('report.reportAddEdit',$data1);
    }

    public function listReport(){

        if(empty(Auth::user()->id)) {
            return redirect('/');
        }

        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();
        $data['rts']= DB::table('report_models')
            ->leftjoin('users','users.student_id','report_models.rstudent_id')
            //->join('answer_models','answer_models.qid','question_models.id')
            //->where('answer_models.qid','question_models.id','=')
            ->select('report_models.id as id','users.id as uid','users.student_id','users.username','users.photo','report_models.updated_at','report_models.rtitle','report_models.rcontent','report_models.rfile')

            // ->where('profile_models.userId','question_models.quserId','=')
            ->orderBy('report_models.id','DESC')
            ->paginate(4);



        //dd($data);

        return view('report.reportList',$data1,$data);
    }




    public function saveReport(Request $request){
        $data = new ReportModel();
//dd($request->all());

        if(isset($request->id) &&!empty($request->id))
            $data = ReportModel::find($request->id);

//dd($data->rstudent_id);
        if(empty($data->rstudent_id))
        $data->rstudent_id=Auth::user()->student_id;

        //dd($data->rstudent_id);
        $data->rtitle=$request->rtitle;
        $data->rcontent=$request->rcontent;


        if(!empty($request->file('rfile')))
            $data->rfile= Storage::disk('public')->put('Report/', $request->file('rfile'));

//dd($data);
        if ($data->save()==true)
            return redirect('reports/add')->with('success_message','Sucessfully Reported');
        else
            return redirect('reports/add')->with('error_message','Unsuccessful,please try again');



    }

    public function deleteReport(Request $request){
        ReportModel::find($request->id)->delete();
        return redirect()->back();
    }

    public function editReport(Request $request){

        if(empty(Auth::user()->id)) {
            return redirect('/');
        }


        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();



        $data['rts'] = ReportModel::find($request->id);

//dd($data);
        return view('report.reportAddEdit',$data,$data1);
    }



    public function listReportSearch(Request $request){

        if(empty(Auth::user()->id)) {
            return redirect('/');
        }

        $userId=Auth::user()->id;
        $data1['userTable']= DB::table('users')
            ->where('users.id','=',$userId)
            ->first();

        $search = $request->search;
        if($search==null)
            $data['rts'] =null;

        if (isset($search) && !empty($search)) {
            $data['rts'] = DB::table('report_models')
                ->leftjoin('users','users.student_id','report_models.rstudent_id')
                ->select('*','report_models.id as id','users.id as uid','users.student_id','users.username','users.photo','report_models.updated_at','report_models.rtitle','report_models.rcontent','report_models.rfile')
                ->orderBy('report_models.id','DESC')
                ->where('report_models.id', 'like binary', '%' . $search . '%')
                ->orwhere('users.username', 'like binary', '%' . $search . '%')
                ->orWhere('users.student_id', 'like binary', '%' . $search . '%')
                ->orWhere('report_models.updated_at', 'like binary', '%' . $search . '%')
                ->orWhere('rtitle', 'like binary', '%' . $search . '%')
                ->orWhere('rcontent', 'like binary', '%' . $search . '%')
                ->get();
        }





        //dd($data);

        return view('report.reportListSearch',$data1,$data);
    }

    public function downloadFile($id){


        $file= storage_path()."/app/public/". decrypt($id);

//        return Response::make(file_get_contents($file), 200, [
//            'Content-Type' => 'application/pdf',
//            'Content-Disposition' => 'inline; filename="'.'dd'.'"'
//        ]);

        return Response::download($file);
    }





    //    public function downloadFile($id){
//
//        $file= storage_path()."/app/public/". decrypt($id);
//
//
//
//        return Response::download($file);
//    }
}
