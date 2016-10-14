<?php

namespace App\Api\V1\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use JWTAuth;
use Dingo\Api\Routing\Helpers;

use App\About;
use App\Skills;
use App\Tools;
use App\Languages;
use App\Espskills;
use App\Contact;
use App\Education;
use App\Career;
use App\Works;
use App\Projects;
use App\Awards;
use App\Achievements;
use App\Volunteer;
use App\Casestudies;


class ResumeController extends Controller
{
    use Helpers;

    public function getAbout()
    {
		$user= User::all();
		return response()->json(compact('user','role'));
    }
    public function postAbout(Request $request)
    {

    }

	public function getSkills()
    {
	
	}
    public function postSkills(Request $request)
    {

    } 

    public function getTools()
    {
	
	}
    public function postTools(Request $request)
    {

    } 

    public function getLanguages()
    {
	
	}
    public function postLanguages(Request $request)
    {

    } 

    public function getEspskills()
    {
	
	}
    public function postEspskills(Request $request)
    {

    } 

    public function getContact()
    {
	
	}
    public function postContact(Request $request)
    {

    } 

    public function getEducation()
    {
	
	}
    public function postEducation(Request $request)
    {

    } 

    public function getCareer()
    {
	
	}
    public function postCareer(Request $request)
    {

    }

    public function getWorks()
    {
	
	}
    public function postWorks(Request $request)
    {

    } 

    public function getProjects()
    {
	
	}
    public function postProjects(Request $request)
    {

    } 

    public function getAwards()
    {
	
	}
    public function postAwards(Request $request)
    {

    } 

    public function getAchievements()
    {
	
	}
    public function postAchievements(Request $request)
    {

    } 

    public function getVolunteer()
    {
	
	}
    public function postVolunteer(Request $request)
    {

    } 

    public function getCasestudies()
    {
	
	}
    public function postCasestudies(Request $request)
    {

    } 

}
