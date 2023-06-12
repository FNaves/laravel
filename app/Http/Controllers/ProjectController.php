<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;


class ProjectController extends Controller
{
    public function index()
    {
       // $project=Project::paginate();
       // return view('projects.index',compact('projects'));

       return view("index");
        
    }
   public function create()
   {
       // $project=Project::paginate();
       // return view('projects.index',compact('projects'));

      return view("create");
        
    }
    //public function store(Request $request)
    //{
       // $project=Project::paginate();
       // return view('projects.index',compact('projects'));

      // return view("create");
      
        
   // }
    public function update()
    {
       // $project=Project::paginate();
       // return view('projects.index',compact('projects'));
      return view("update");
       

       //return view('update',compact('id'));
    }
    public function destroy()
    {
       // $project=Project::paginate();
       // return view('projects.index',compact('projects'));

       return view("delete");
        
    }
    public function indexT()
    {
       // $project=Project::paginate();
       // return view('projects.index',compact('projects'));

       return view("indexT");
        
    }

    public function updateT()
    {
       // $project=Project::paginate();
       // return view('projects.index',compact('projects'));

       return view("updateAction");
       }
        
       public function getPDF()
       {
         $name="juan";
         $pdf= PDF::loadview('PDF_generate',compact('name'));
         return $pdf->stream('PDF_generate.pdf');
       }
}
