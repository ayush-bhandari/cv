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
    	return $this->response->created('created', 201);
    }

	public function getSkills()
    {
		$skills= Skills::all();
		return response()->json(compact('skills'));
	}
    public function postSkills(Request $request)
    {
    	return $this->response->created('created', 201);
    } 

    public function getTools()
    {
		$tools= Tools::all();
		return response()->json(compact('tools'));
	}
    public function postTools(Request $request)
    {
    	return $this->response->created('created', 201);
    } 

    public function getLanguages()
    {
		$languages= Languages::all();
		return response()->json(compact('languages'));
	}
    public function postLanguages(Request $request)
    {
    	return $this->response->created('created', 201);
    } 

    public function getEspskills()
    {
		$espskills= Espskills::all();
		return response()->json(compact('espskills'));
	}
    public function postEspskills(Request $request)
    {
    	return $this->response->created('created', 201);
    } 

    public function getContacts()
    {
		$contacts= Contacts::all();
		return response()->json(compact('contacts'));
	}
    public function postContacts(Request $request)
    {
		return $this->response->created('created', 201);
    } 

    public function getEducation()
    {
		$education= Education::all();
		return response()->json(compact('education'));
	}
    public function postEducation(Request $request)
    {
    	return $this->response->created('created', 201);
    } 

    public function getCareers()
    {
		$careers= Careers::all();
		return response()->json(compact('careers'));
	}
    public function postCareers(Request $request)
    {
    	return $this->response->created('created', 201);
    }

    public function getWorks()
    {
		$works= Works::all();
		return response()->json(compact('works'));
	}
    public function postWorks(Request $request)
    {
    	return $this->response->created('created', 201);
    } 

    public function getProjects()
    {
		$projects= Projects::all();
		return response()->json(compact('projects'));
	}
    public function postProjects(Request $request)
    {
    	return $this->response->created('created', 201);
    } 

    public function getAwards()
    {
		$awards= Awards::all();
		return response()->json(compact('awards'));
	}
    public function postAwards(Request $request)
    {
    	return $this->response->created('created', 201);
    } 

    public function getAchievements()
    {
		$achievements= Achievements::all();
		return response()->json(compact('achievements'));
	}
    public function postAchievements(Request $request)
    {
    	return $this->response->created('created', 201);
    } 

    public function getVolunteers()
    {
		$volunteers= Volunteers::all();
		return response()->json(compact('volunteers'));
	}
    public function postVolunteers(Request $request)
    {
    	return $this->response->created('created', 201);
    } 

    public function getCasestudies()
    {
		$casestudies= Casestudies::all();
		return response()->json(compact('casestudies'));
	}
    public function postCasestudies(Request $request)
    {
    	return $this->response->created('created', 201);
    } 

}
