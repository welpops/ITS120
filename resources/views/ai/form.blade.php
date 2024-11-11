
   

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('College Student Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                 <style>

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            
            overflow-y: auto;
           
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-container label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }
        .form-container input,
        .form-container select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
        }
        .form-container button:hover {
            background-color: #45a049;
        }
    </style>


<div class="form-container">
    <form action="process" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <!-- Name Field -->
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>

        <!-- Age Field -->
        <label for="age">Age</label>
        <input type="text" id="age" name="age" required>

        <!-- Interests (Multi-select) -->
        <label for="interests">Interests (Hold CTRL for multiple selections)</label>
        <select id="interests" name="interests[]" multiple required>
            <option value="sports">Sports</option>
            <option value="music">Music</option>
            <option value="gaming">Gaming</option>
            <option value="travel">Travel</option>
            <option value="photography">Photography</option>
            <option value="reading">Reading</option>
            <option value="writing">Writing</option>
            <option value="volunteering">Volunteering</option>
            <option value="cooking">Cooking</option>
            <option value="hiking">Hiking</option>
            <option value="dancing">Dancing</option>
            <option value="painting">Painting</option>
            <option value="yoga">Yoga</option>
            <option value="fitness">Fitness</option>
            <option value="blogging">Blogging</option>
            <option value="coding">Coding</option>
            <option value="public speaking">Public Speaking</option>
            <option value="debating">Debating</option>
            <option value="mentoring">Mentoring</option>
            <option value="environmental activism">Environmental Activism</option>
            <option value="meditation">Meditation</option>
            <option value="graphic design">Graphic Design</option>
            <option value="animation">Animation</option>
            <option value="podcasting">Podcasting</option>
            <option value="journalism">Journalism</option>
            <option value="film making">Film Making</option>
            <option value="entrepreneurship">Entrepreneurship</option>
            <option value="community service">Community Service</option>
            <option value="robotics">Robotics</option>
            <option value="astronomy">Astronomy</option>
        </select>

        <!-- Skills (Multi-select) -->
        <label for="skills">Skills (Hold CTRL for multiple selections)</label>
        <select id="skills" name="skills[]" multiple required>
            <option value="programming">Programming</option>
            <option value="web development">Web Development</option>
            <option value="database management">Database Management</option>
            <option value="data analysis">Data Analysis</option>
            <option value="networking">Networking</option>
            <option value="cybersecurity">Cybersecurity</option>
            <option value="cloud computing">Cloud Computing</option>
            <option value="software testing">Software Testing</option>
            <option value="technical writing">Technical Writing</option>
            <option value="project management">Project Management</option>
            <option value="UX/UI design">UX/UI Design</option>
            <option value="mobile app development">Mobile App Development</option>
            <option value="machine learning">Machine Learning</option>
            <option value="artificial intelligence">Artificial Intelligence</option>
            <option value="network security">Network Security</option>
            <option value="ethical hacking">Ethical Hacking</option>
            <option value="IT support">IT Support</option>
            <option value="SEO">SEO</option>
            <option value="digital marketing">Digital Marketing</option>
            <option value="cloud architecture">Cloud Architecture</option>
            <option value="blockchain">Blockchain</option>
            <option value="virtual reality">Virtual Reality</option>
            <option value="augmented reality">Augmented Reality</option>
            <option value="e-commerce">E-Commerce</option>
            <option value="data visualization">Data Visualization</option>
            <option value="web security">Web Security</option>
            <option value="version control (Git)">Version Control (Git)</option>
            <option value="business analysis">Business Analysis</option>
            <option value="customer support">Customer Support</option>
            <option value="cloud security">Cloud Security</option>
        </select>

        <!-- Internship Experience -->
        <label>Internship Experience</label>

        <!-- Role -->
        <label for="role">Role</label>
        <input type="text" id="role" name="internship_role" required>

        <!-- Duration -->
        <label for="duration">Duration</label>
        <input type="text" id="duration" name="internship_duration" placeholder="e.g., 3 months" required>

        <!-- Company -->
        <label for="company">Company</label>
        <input type="text" id="company" name="internship_company" required>

        <!-- Industry -->
        <label for="industry">Industry</label>
        <input type="text" id="industry" name="internship_industry" required>

        <!-- Career Goals -->
        <label for="career_goals">Career Goals</label>
        <input type="text" id="career_goals" name="career_goals" required>

        <!-- Submit Button -->
        <button type="submit">Submit</button>
    </form>
</div>
            </div>
        </div>
    </div>
</x-app-layout>