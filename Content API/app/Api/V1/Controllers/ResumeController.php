<?php

namespace App\Api\V1\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use JWTAuth;
use Dingo\Api\Routing\Helpers;

use Validator;
use Config;
use App\User;
use Illuminate\Mail\Message;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Password;
use Tymon\JWTAuth\Exceptions\JWTException;
use Dingo\Api\Exception\ValidationHttpException;

use App\Abouts;
use App\Skills;
use App\Tools;
use App\Languages;
use App\Espskills;
use App\Contacts;
use App\Education;
use App\Careers;
use App\Works;
use App\Projects;
use App\Awards;
use App\Achievements;
use App\Volunteers;
use App\Casestudies;


class ResumeController extends Controller
{
    use Helpers;

    public function getAbouts()
    {
		$abouts= Abouts::all();
		return response()->json(compact('abouts'));
    }
    public function postAbouts(Request $request)
    {
    	$data= (array)$request->json()->all();
        
            $abouts = new Abouts;      
            $abouts->portfolio = json_encode($data['portfolio']);
            
            $abouts->descone = $data['descone'];
            $abouts->desctwo = $data['desctwo'];
            $abouts->descthree =$data['descthree'];
       
        if($abouts->save())
            return $this->response->created('created', 201);
        else
            return $this->response->error('could_not_be_created', 500);
    }

	public function getSkills()
    {
		$skills= Skills::all();
		return response()->json(compact('skills'));
	}
    public function postSkills(Request $request)
    {
    	$data= (array)$request->json()->all();
        
            $skills = new Skills;      
            
            $skills->title = $data['title'];
            $skills->capacity = $data['capacity'];
       
        if($skills->save())
            return $this->response->created('created', 201);
        else
            return $this->response->error('could_not_be_created', 500);
    } 

    public function getTools()
    {
		$tools= Tools::all();
		return response()->json(compact('tools'));
	}
    public function postTools(Request $request)
    {
    	$data= (array)$request->json()->all();
        
            $tools = new Tools;      
            
            $tools->title = $data['title'];
            $tools->capacity = $data['capacity'];
       
        if($tools->save())
            return $this->response->created('created', 201);
        else
            return $this->response->error('could_not_be_created', 500);
    } 

    public function getLanguages()
    {
		$languages= Languages::all();
		return response()->json(compact('languages'));
	}
    public function postLanguages(Request $request)
    {
    	$data= (array)$request->json()->all();
        
            $languages = new Languages;      
            
            $languages->title = $data['title'];
            $languages->capacity = $data['capacity'];
       
        if($languages->save())
            return $this->response->created('created', 201);
        else
            return $this->response->error('could_not_be_created', 500);
    } 

    public function getEspskills()
    {
		$espskills= Espskills::all();
		return response()->json(compact('espskills'));
	}
    public function postEspskills(Request $request)
    {
    	$data= (array)$request->json()->all();
        
            $espskills = new Espskills;      
            
            $espskills->desc = $data['desc'];
       
        if($espskills->save())
            return $this->response->created('created', 201);
        else
            return $this->response->error('could_not_be_created', 500);
    } 

    public function getContacts()
    {
		$contacts= Contacts::all();
		return response()->json(compact('contacts'));
	}
    public function postContacts(Request $request)
    {
		$data= (array)$request->json()->all();
        
            $contacts = new Contacts;      
            
            $contacts->title = $data['title'];
            $contacts->detail = $data['detail'];
       
        if($contacts->save())
            return $this->response->created('created', 201);
        else
            return $this->response->error('could_not_be_created', 500);
    } 

    public function getEducation()
    {
		$education= Education::all();
		return response()->json(compact('education'));
	}
    public function postEducation(Request $request)
    {
    	$data= (array)$request->json()->all();
        
            $education = new Education;      
            
            $education->start_date = $data['start_date'];
            $education->end_date = $data['end_date'];
            $education->name = $data['name'];
            $education->address = $data['address'];
            $education->title = $data['title'];
            $education->link = $data['link'];
       
        if($education->save())
            return $this->response->created('created', 201);
        else
            return $this->response->error('could_not_be_created', 500);
    } 

    public function getCareers()
    {
		$careers= Careers::all();
		return response()->json(compact('careers'));
	}
    public function postCareers(Request $request)
    {
    	$data= (array)$request->json()->all();
        
            $careers = new Careers;      
            
            $careers->start_date = $data['start_date'];
            $careers->end_date = $data['end_date'];
            $careers->position = $data['position'];
            $careers->name = $data['name'];
            $careers->address = $data['address'];
            $careers->link = $data['link'];
       
        if($careers->save())
            return $this->response->created('created', 201);
        else
            return $this->response->error('could_not_be_created', 500);
    }

    public function getWorks()
    {
		$works= Works::all();
		return response()->json(compact('works'));
	}
    public function postWorks(Request $request)
    {
    	$data= (array)$request->json()->all();
        
            $works = new Works;      
            
            $works->title = $data['title'];
            $works->desc = $data['desc'];
       
        if($works->save())
            return $this->response->created('created', 201);
        else
            return $this->response->error('could_not_be_created', 500);
    } 

    public function getProjects()
    {
		$projects= Projects::all();
		return response()->json(compact('projects'));
	}
    public function postProjects(Request $request)
    {
    	$data= (array)$request->json()->all();
        
            $projects = new Projects;      
            
            $projects->title = $data['title'];
            $projects->desc = $data['desc'];
       
        if($projects->save())
            return $this->response->created('created', 201);
        else
            return $this->response->error('could_not_be_created', 500);
    } 

    public function getAwards()
    {
		$awards= Awards::all();
		return response()->json(compact('awards'));
	}
    public function postAwards(Request $request)
    {
    	$data= (array)$request->json()->all();
        
            $awards = new Awards;      
            
            $awards->date = $data['date'];
            $awards->position = $data['position'];
            $awards->name = $data['name'];
       
        if($awards->save())
            return $this->response->created('created', 201);
        else
            return $this->response->error('could_not_be_created', 500);
    } 

    public function getAchievements()
    {
		$achievements= Achievements::all();
		return response()->json(compact('achievements'));
	}
    public function postAchievements(Request $request)
    {
    	$data= (array)$request->json()->all();
        
            $achievements = new Achievements;      
         
            $achievements->date = $data['date'];
            $achievements->position = $data['position'];
            $achievements->name = $data['name'];
       
        if($achievements->save())
            return $this->response->created('created', 201);
        else
            return $this->response->error('could_not_be_created', 500);
    } 

    public function getVolunteers()
    {
		$volunteers= Volunteers::all();
		return response()->json(compact('volunteers'));
	}
    public function postVolunteers(Request $request)
    {
    	$data= (array)$request->json()->all();
        
            $volunteers = new Volunteers;      
            
            $volunteers->date = $data['date'];
            $volunteers->title = $data['title'];
            $volunteers->name = $data['name'];
            $volunteers->address = $data['address'];
       
        if($volunteers->save())
            return $this->response->created('created', 201);
        else
            return $this->response->error('could_not_be_created', 500);
    } 

    public function getCasestudies()
    {
		$casestudies= Casestudies::all();
		return response()->json(compact('casestudies'));
	}
    public function postCasestudies(Request $request)
    {
    	$data= (array)$request->json()->all();
        
            $casestudies = new Casestudies;      
            
            $casestudies->date = $data['date'];
            $casestudies->title = $data['title'];
            $casestudies->name = $data['name'];
            
       
        if($casestudies->save())
            return $this->response->created('created', 201);
        else
            return $this->response->error('could_not_be_created', 500);
    } 

}
