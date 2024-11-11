<div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
    <x-application-logo class="block h-12 w-auto" />

    <h1 class="mt-8 text-2xl font-medium text-gray-900 dark:text-white">
        Welcome to your Opportune!
    </h1>

    <p class="mt-6 text-gray-500 dark:text-gray-400 leading-relaxed">
        Opportune is an AI-powered career guidance and recommendation app designed to help users find their ideal career paths. By analyzing individual skills, interests, and goals, Opportune offers tailored job recommendations, actionable career advice, and resources for skill development. Perfect for students, job seekers, and professionals looking to pivot, Opportune provides insights to navigate career growth and make informed decisions for a fulfilling career journey.
    </p>
</div>

<div class="bg-gray-200 dark:bg-gray-800 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
    	<style>
		button {
			color: #ffffff;
			background-color: #2d63c8;
			font-size: 19px;
			border: 1px solid #2d63c8;
			border-radius: 11px;
			padding: 15px 50px;
			cursor: pointer
		}
		button:hover {
			color: #2d63c8;
			background-color: #ffffff;
		}
	</style>
	<a href="{{ url('AI/form') }}"><button type="button" name="myButton" autofocus>Get Recommendations</button></a>
</div>
