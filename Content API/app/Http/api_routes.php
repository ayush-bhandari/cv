<?php
	
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

$api->group(['middleware' => ['cors']], function ($api) {
	
	$api->post('auth/login', 'App\Api\V1\Controllers\AuthController@login');
	$api->post('auth/recovery', 'App\Api\V1\Controllers\AuthController@recovery');

	$api->get('resume/abouts', 'App\Api\V1\Controllers\ResumeController@getAbouts');
	$api->get('resume/skills', 'App\Api\V1\Controllers\ResumeController@getSkills');
	$api->get('resume/tools', 'App\Api\V1\Controllers\ResumeController@getTools');
	$api->get('resume/languages', 'App\Api\V1\Controllers\ResumeController@getLanguages');
	$api->get('resume/espskills', 'App\Api\V1\Controllers\ResumeController@getEspskills');
	$api->get('resume/contacts', 'App\Api\V1\Controllers\ResumeController@getContacts');
	$api->get('resume/education', 'App\Api\V1\Controllers\ResumeController@getEducation');
	$api->get('resume/careers', 'App\Api\V1\Controllers\ResumeController@getCareers');
	$api->get('resume/works', 'App\Api\V1\Controllers\ResumeController@getWorks');
	$api->get('resume/projects', 'App\Api\V1\Controllers\ResumeController@getProjects');
	$api->get('resume/awards', 'App\Api\V1\Controllers\ResumeController@getAwards');
	$api->get('resume/achievements', 'App\Api\V1\Controllers\ResumeController@getAchievements');
	$api->get('resume/volunteers', 'App\Api\V1\Controllers\ResumeController@getVolunteers');
	$api->get('resume/casestudies', 'App\Api\V1\Controllers\ResumeController@getCasestudies');
	
	
	$api->group(['middleware' => ['api.auth']], function ($api) {
		$api->post('auth/signup', 'App\Api\V1\Controllers\AuthController@signup');
		$api->post('auth/reset', 'App\Api\V1\Controllers\AuthController@reset');

		$api->post('resume/abouts', 'App\Api\V1\Controllers\ResumeController@postAbouts');
		$api->post('resume/skills', 'App\Api\V1\Controllers\ResumeController@postSkills');
		$api->post('resume/tools', 'App\Api\V1\Controllers\ResumeController@postTools');
		$api->post('resume/languages', 'App\Api\V1\Controllers\ResumeController@postLanguages');
		$api->post('resume/espskills', 'App\Api\V1\Controllers\ResumeController@postEspskills');
		$api->post('resume/contacts', 'App\Api\V1\Controllers\ResumeController@postContacts');
		$api->post('resume/education', 'App\Api\V1\Controllers\ResumeController@postEducation');
		$api->post('resume/careers', 'App\Api\V1\Controllers\ResumeController@postCareers');
		$api->post('resume/works', 'App\Api\V1\Controllers\ResumeController@postWorks');
		$api->post('resume/projects', 'App\Api\V1\Controllers\ResumeController@postProjects');
		$api->post('resume/awards', 'App\Api\V1\Controllers\ResumeController@postAwards');
		$api->post('resume/achievements', 'App\Api\V1\Controllers\ResumeController@postAchievements');
		$api->post('resume/volunteers', 'App\Api\V1\Controllers\ResumeController@postVolunteers');
		$api->post('resume/casestudies', 'App\Api\V1\Controllers\ResumeController@postCasestudies');

	});

	// // example of protected route
	// $api->get('protected', ['middleware' => ['api.auth'], function () {		
	// 	return \App\User::all();
	 //    }]);

	// // example of free route
	// $api->get('free', function() {
	// 	return \App\User::all();
	// });

});

});
