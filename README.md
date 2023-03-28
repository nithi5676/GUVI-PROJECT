# GUVI-PROJECT
This is a Login form and a Sign up form with Welcome page using with monogodb and redis to store in localstorage
# GUVI-PROJECT

This is a Login form and a Sign up form with Welcome page 
using with monogodb and redis to store in localstorage

# In this project, technologies that are used as follows

1.	HTML, CSS
2.	jQuery
3.	AJAX
4.	Redis
5.	PHP
6.	MySQL – Prepared Statement for achieving good speed.

# Tasks

1. Html, CSS, JavaScript, PHP should be in separate files.
2. CSS should be written using sass/scss. The project should contain both scss file and compiled css file.
3. The form submission should be handled using ajax, do not use HTML form action.
4. Use bootstrap to make page responsive.
5. Don't use more than two fonts and any icons or images should be in SVG format.
6. Use jQuery to simplify dom manipulations.
7. User data should be stored in MySql DB and also in the JSON file.
8. Use prepared statements while performing MySql queries.
9. Host it on Heroku or AWS.
10. Upload your files to github and mail the Github link and Hosted Link to dev@guvi.in

# Software Requirement
1.	XAMPP Server (Apache, PHP, MySQL)
2.	MongoDB community edition and PHP_MONGODB.DLL 
3.	Composer for installing extension module such as mongo and predis

# Folder Structure
<img width="571" alt="Screenshot 2022-11-13 at 10 43 14 AM" src="https://user-images.githubusercontent.com/87518099/201506951-eafd9d32-9343-4574-9749-4299d23dab78.png">

# vendor folder
contains software installed through composer (for connecting PHP with mongodb and redis backend)

# AK folder contains the following webpages

- Login.html
- Profile.html
- Register.html

# Flow of working
1.	Register.html
2.	Login.html
3.	Profile.html

# XAMPP Server

In Mysql, create a database “guvi” and table “userprofile” with the following schema
(username, email, passw, age, dob, contact)
# Register.html
Collect the user details using jQuery (All Forms are validated) and AJAX (Refer to usercheck.php) (Used to check whether already someone taken the username or not)
On submitting Form, it calls “register.php”
# Register.php
Used the MySql Preparedstatement for inserting row of user detail
On clicking login.html, redirect the user to login page
# Login.html
After entering login details (Form validation done using jQuery), click submit, it takes you to login.php
# Login.php
1.	localStorage object is used to store username and password
2.	On successful login, user is allowed update profile by adding age, dob and contact.
On clicking update, you’re redirected to update.php 

# Update.php
1.	Greet the user by retrieving details from localStorage
2.	Execute Update query on mysql table using Prepared statement
3.	Adding session data to localStorage, which will be used in the subsequent pages
4.	Inserting the document into mongodb

# Working with Mongodb
1.	Install mongodb community edition from the website
2.	Download PHP_MONGODB driver (DLL) file from the website
3.	Download composer for downloading other dependency file related to redis and MONGODB

<img width="1136" alt="Screenshot 2022-11-13 at 10 51 58 AM" src="https://user-images.githubusercontent.com/87518099/201507150-67047aff-1f72-4942-aff0-d555b256ab06.png">

Click the link to view the session data stored in localStorage. It takes you to “readstorage.php”

# Readstorage.php
1.	Show all the localStorage session variable marks in table format
2.	Option is given to delete all session data from localStorage
3.	Click the submit button to send session data to the backend redis On clicking submit button, it takes you to “redisstore.php”

Redisstore.php
1.	Display the session data in a Form
2.	On submitting, it is redirected to same page and further stores the data as name value pair in redis.

# In this project, technologies that are used as follows

1.	HTML, CSS
2.	jQuery
3.	AJAX
4.	Redis
5.	PHP
6.	MySQL – Prepared Statement for achieving good speed.
