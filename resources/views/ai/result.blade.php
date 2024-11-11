
   

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Career Gudiance & Recommendations') }}
        </h2>
    </x-slot>
	
	<!--Result here-->
    <style>
        .container {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            color: #333;
        }
        .recommendation-card {
            background-color: #e9f6ff;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 8px;
            border: 1px solid #d1eaff;
        }
        .recommendation-card h3 {
            margin-top: 0;
        }
        .recommendation-card p {
            margin: 5px 0;
        }
        .next-steps {
            background-color: #fff3e0;
            padding: 15px;
            margin-top: 20px;
            border-radius: 8px;
            border: 1px solid #ffe0b2;
        }
        .step {
            margin-bottom: 10px;
        }
        ul {
            padding-left: 20px;
            margin-top: 5px;
        }
    </style>
	
	<div class="container">

		<!-- Recommendations Section -->
		<div>
			<!-- Loop through each job recommendation -->
			@foreach ($recommendations as $recommendation)
			<div class="recommendation-card">
				<h3>{{ $recommendation['title'] }}</h3>
				<p><strong>Job Description:</strong> {{ $recommendation['job_description'] }}</p>
				<p><strong>Why It Fits:</strong> {{ $recommendation['why_it_fits'] }}</p>
				<p><strong>Path Forward:</strong> {{ $recommendation['path_forward'] }}</p>
				<p><strong>Skill Match Percentage:</strong> {{ $recommendation['skill_match_percent'] }}%</p>
				<p><strong>Skills Matched:</strong> {{ implode(',',$recommendation['skills_matched']) }}</p>
				<p><strong>Desired Additional Skills:</strong> {{ implode(',',$recommendation['skills_missing']) }}</p>
			</div>
			@endforeach

		</div>

		<!-- Next Steps Section -->
		<div class="next-steps">
			<h2>Next Steps</h2>
			@foreach ($next_steps as $next_step)
			<div class="step">
				<h3>{{ $next_step['focus'] }}</h3>
				<ul>
					@foreach ($next_step['next_step_recommendations'] as $next_step_recommendation)
					<li>{{ $next_step_recommendation }}
					@endforeach
				</ul>
			</div>
		   @endforeach
		</div>
	</div>
	
            </div>
        </div>
    </div>
</x-app-layout>