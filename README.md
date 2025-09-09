Objective
The goal of this assignment is to have you:

Become proficient with the fundamentals of the PHP languages (data types, conditional statements, and loops).
Learn how to store and retrieve data using multidimensional arrays.
Understand how to implement the index->detail pattern
To this end, you will extend the work completed for Assignment 1. After teaming up with other students, you and your team will create a team website that consists of two PHP pages. One page (index) will display a list of the team members, whereas the other (detail) will display the resume of one member. So, regardless of how many members are in your team, you will only need 2 PHP pages (index.php and detail.php).

Instructions
Recruit members (other students in this class) and form a team of up to 3-4 people
Create a multidimensional PHP array containing all the information from each team member. Use indexed/associative arrays as needed.
Download this file (02.zip Download 02.zip), which contains the index page (new page) and the detail page (the old resume page with just one new line of code - a button to go back to the index page).
Modify the files as follows:
index.php
Create an array containing information from you and the other colleagues (or dummy data if you want to work individually), and put it on the top of the page.
Modify the file so that PHP generates the HTML code necessary for displaying each of the members using one the pre-existing "member cards" as a template and a for loop that fills the template with data from the array.
Link the index page to the detail page using a different GET value for each person (as in the example provided here 02.zip Download 02.zip - see index-detail)
detail.php
Insert the array containing information from you and the other colleagues - the same one you've created for the index page
Modify the file so that  based on the value received via GET, you can select one person from the array and display their data (e.g., $team[$_GET]['name']) instead of the hard-coded information.
Submission guidelines
Submit a zip archive named FIRSTNAME_LASTNAME.zip containing all the necessary files.

Rubric
There are 10 points available for this assignment.

code is indented properly: +1 point
there are no HTML or PHP errors: +1 point
the data array (with the students' information) is a multidimensional array that makes use of indexed/associative arrays: +1 point
some components of the the data array (e.g., work experiences) have different dimensions of the arrays (e.g., people having different numbers of work experiences)
the page implements loops correctly: +1 point
all the information in index.php is displayed using PHP echo/shorthand (no plain HTML): +2 points
all the information in detail.php is displayed using PHP echo/shorthand (no plain HTML): +1 point
images are included so that they display properly: +1 point
