# 🗳️ Online Voting System

This is a web-based **Online Voting System** developed using PHP, HTML, CSS, and MySQL. It allows secure and efficient electronic voting for institutions such as schools or universities.

## 🔧 Features

- Voter and admin login systems
- Candidate and position management by admin
- Voters can securely log in and cast their votes
- Real-time vote counting and result display
- Basic security and form validation
- Clean and user-friendly interface

## 🖥️ Technologies Used

- **Frontend:** HTML5, CSS3
- **Backend:** PHP (Core PHP)
- **Database:** MySQL
- **Version Control:** Git & GitHub

## 📁 Folder Structure

/voting-system
│
├── admin/ # Admin dashboard files
├── voter/ # Voter interface
├── includes/ # DB connection and reusable code
├── css/ # Stylesheets
├── js/ # JavaScript files (if any)
├── index.php # Homepage/login
├── register.php # Voter registration (optional)
├── results.php # Voting results page
├── config.php # DB configuration
└── README.md # Project documentation

bash
Copy
Edit

## 🚀 How to Run Locally

1. **Clone the repository:**
   ```bash
   git clone https://github.com/joskar162/voting-system.git
   cd voting-system
Set up your local server:

Install XAMPP or WAMP.

Move the project folder into htdocs (for XAMPP) or www (for WAMP).

Create the database:

Open phpMyAdmin.

Create a new database (e.g., voting_db).

Import the .sql file provided in the project folder.

Configure the DB connection:

Open config.php or includes/db.php and set your database name, username, and password.

Run the project:

Go to your browser and open:

perl
Copy
Edit
http://localhost/voting-system/

🙋‍♂️ Author
Joshua Karani

Student, Tharaka University

Skills: PHP, HTML, CSS, MySQL, Graphic Design, Video Editing