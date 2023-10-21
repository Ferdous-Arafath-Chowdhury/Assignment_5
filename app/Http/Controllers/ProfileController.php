<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class ProfileController extends Controller
{
    //

    public function experience()


    {
    $ex_data = json_decode(file_get_contents(storage_path('data/experiences.json'), true));
    
        return view('work_ex' , ['data' => $ex_data]);
    } 


    public function projects()
    { 

        // $data = File::json(storage_path(path:'data/projects.json'));
        $pr_data = json_decode(file_get_contents(storage_path('data/projects.json'), true));

        // dd($data);
        return view('projects' , ['data' => $pr_data]);
    } 




    public function project_details($id)
         
    {
   
        $pr_data = json_decode(file_get_contents(storage_path('data/projects.json'), true));

        $selectedProject = null;
        foreach ($pr_data as $project) {
            if ($project->id == $id) {
                $selectedProject = $project;
                break;
            }
        }
    

        return view('pro_details', ['data' => $selectedProject]);

         
        

       
    }
}
