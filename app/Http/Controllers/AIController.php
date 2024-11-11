<?php
//Framework used: Laravel v11.22.0 (PHP v8.2.13)
//Laravel Controller for Proof of Concept usage of OpenAI API
//Prototype
//API credentials in .env file
//Shows form input and calls OpenAI API to simulate chatting with ChatGPT
//Dumps ChatGPTs response on screen
//Todo - User interface

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

use OpenAI\Laravel\Facades\OpenAI;
//Uses https://github.com/openai-php/laravel as an API client for OpenAI API

class AIController extends Controller
{
    //Shows form
	public function form(request $request): View
    {
		return view('ai.form');
    }
	
	//Accepts POST data from form
	public function process(request $request)
	{
		
		$input = $request->all();
		unset($input['_token']);
		
		$chat_input = 'Act as an API for Career Recommendations and Guidance for College Students. You accept and respond in JSON.
					 Your output should have the following:
					 - For each recommendation, you should give title,job_description, why_it_fits,path_forward,skill_match_percent,skills_matched,skills_missing
					 - skill_match_percent should be a percentage of the skills in the input that match the recommendation
					 - skills_matched should show skills from input that input that match the recommendation
					 - skills_missing should show additional skills that are missing from the input
					 - After your recommendations, you should give a section called next_steps and each step should have focus and next_step_recommendations
					 - Under each next_step_recommendations, the recommendations should be an array
 
		Input is '.json_encode($input);
 
		//Show ChatGPT user input onscreen
		//echo 'INPUT:';
		//dump($chat_input);
		\Debugbar::info($chat_input);

		//Get result from OpenAI API
		$result = OpenAI::chat()->create([
			'model' => 'gpt-4o-mini',
			'messages' => [
				['role' => 'user', 'content' => $chat_input],
			],
		]);
		
		//Process and show ChatGPT response onscreen
		//echo '<br>OUTPUT<br>';
		
		//Remove unnecessary characters from ChatGPT response
		$clean = str_replace("```json", "", $result->choices[0]->message->content);
		$clean = str_replace("```", "", $clean);
		$chat_output = $clean;
		
		//Show output onscreen (JSON)
		//dump (json_decode($chat_output));
		\Debugbar::info(json_decode($chat_output));
		
		return view('ai.result',json_decode($chat_output,true));
	}
}
