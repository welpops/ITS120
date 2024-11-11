Opportune Application Setup Guide

A. Prerequisites
1. Install XAMPP
Ensure you have XAMPP installed. XAMPP provides the Apache and MySQL services necessary to run the application locally.
2. Download all the files.
3. Extract the zip file and put it in 1 folder.

B. Setting Up the Application
Step 1: Start XAMPP Services
a. Open XAMPP.
b. Start both the Apache and MySQL services to enable local server functionality and database access.

Step 2: Set Up the Database
a. Open your web browser and go to [phpMyAdmin](http://localhost/phpmyadmin/).
b. In phpMyAdmin:
- Create a new database for the application by selecting New from the sidebar.
- Name the database as desired and click Create.
c. With the database selected, go to the Import tab.
d. Upload the SQL source file for the application:
- Click Choose File, locate your SQL file, and upload it.
- Click Go to import the file and set up the required tables and data for the application.

Step 3: Run the Application
a. To access the application, open a web browser.
b. Navigate to: http://localhost/opportune/public/

This will allow you to view and interact with the application locally.
