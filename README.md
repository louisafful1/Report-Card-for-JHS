# Report Card for JHS
Welcome to the Report card for! This project aims to enhance student result management, user authentication, and the submission of student marks for various subjects. The system consists of several PHP files and a MySQL database.

## Features
1. User Authentication: The system supports user registration and login. User passwords are not hashed but stored in the database.

2. Student Information Management: Students' first names and surnames can be added and stored in the students table of the database.

3. Subject Management: The system allows administrators to add subject names, and this data is stored in the subjects table.

Student Marks Submission: Users can submit student marks for specific subjects, and this information is stored in the report table.

## Requirements
1. PHP 5.6 or higher (Tested on PHP 8.0.19)
2. MySQL database server (e.g., MariaDB 10.4.24 or higher)
   
## Installation
1. Clone or download this repository to your local machine.
2. Create a MySQL database (CREATE DATABASE terminal_report;)
3. Import the provided SQL dump file (terminal_report.sql) into the terminal_report database. This will create the necessary tables and insert sample data.

## Usage
1. Access the project directory from your web server.
2. Register a new user or use the existing credentials (thefullness:wordpass) to log in.
3. Once logged in, you will be redirected to the dashboard (home.php), where you can access different functionalities:
- Add Student: Add new students to the database with their first name and surname.
- Add Marks: Submit marks for students and associate them with specific subjects.
- View Result: View submitted marks for students and subjects.  
4. To manage the subjects displayed in the "Add Marks" section, administrators can add subject names through the subjects table.


## Contributing
Contributions to improve the Student Management System or add new features are welcome! Feel free to open an issue or create a pull request with your proposed changes.

License
This project is licensed under the MIT License.


