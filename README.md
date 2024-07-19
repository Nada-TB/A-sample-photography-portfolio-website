# Sample Photography Portfolio: A Fictional Photographer

Developed a responsive and interactive portfolio website for a fictional photographer. The website includes a contact form that stores messages in a database. The project involved seamless integration of front-end and back-end technologies, ensuring data validation, security, and efficient data handling. The design is based on a template from the W3C library.

## Table of Contents

- [Introduction](#introduction)
- [Demo](#demo)
- [Installation](#installation)
- [requirements](#requirements)
- [Usage](#usage)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Project Structure](#project-structure)
- [Challenges and Learnings](#challenges-and-learnings)
- [Future Improvements](#future-improvements)
- [Contact](#contact)

## Introduction

Developed a single-page photographer portfolio website using HTML, CSS, and JavaScript. The portfolio includes:

* About Section: Features information about the photographer, including skills and pricing.
* Photos Section: Showcases examples of the photographer's work.
* Contact Form: Managed using PHP and MySQL to store messages in a database.
  
The design utilizes a responsive grid layout to ensure compatibility across various devices. The project combines front-end and back-end technologies to provide a seamless user experience and efficient data handling.

## Demo


### Live Demo
https://user-images.githubusercontent.com/50797024/174039131-0b66e875-a0a8-4a54-b520-f04697d682c9.mp4


## Installation

Follow these steps to set up and run the project locally:

Clone the Repository:

```bash
Copier le code
# Clone the repository
git clone https://github.com/Nada-TB/A-sample-photography-portfolio-website.git

# Navigate to the project directory
cd your-repo-name
```
### Set Up a Local PHP Server:

- For Windows (WAMP):

Download and install WAMP from WampServer's website.
Place the project files into the www directory of the WAMP installation.
Start WAMP and navigate to localhost in your web browser.

- For macOS (MAMP):

Download and install MAMP from MAMP's website.
Place the project files into the htdocs directory of the MAMP installation.
Start MAMP and navigate to localhost in your web browser.

- For Linux (Using PHP Built-in Server):

Ensure PHP is installed. You can install it via your package manager (e.g., sudo apt-get install php).

Navigate to the project directory.

Start the PHP server with:

```bash
Copier le code
php -S localhost:8000
Open http://localhost:8000 in your web browser.
```

### Set Up the MySQL Database:

Open phpMyAdmin via your web browser (e.g., http://localhost/phpmyadmin).
Create a new database for the project.
Import the database schema  (folder sql) or manually set up the required tables.

### Configure Database Connection:

Navigate to the PHP folder in your project directory.

Open class_contact_send_message.php in the folder php

Locate the __construct method where the new database instance is initialized.

Update the constructor parameters with your MySQL database details, such as host, username, password, and database name. 
for Example 
```bash

class contact{
     
        function __construct(){
            $this->connection=new dataBase('localhost','portfolio_3wc', 'root', "");
        }
        ....
}
```
### Access the Project:

Open your web browser and navigate to localhost (or the specific port if you're using a custom port).

## Requirements

To run this project, ensure you have the following installed:

- WAMP or MAMP (depending on your operating system) for running a PHP server and managing MySQL.
- PHP: Required for server-side scripting.
- MySQL: Required for database management.
- Web Browser: Any modern browser to view the portfolio.

## Usage
Navigate to http://localhost/project-directory-name (replace project-directory-name with the actual name of your project directory).

Navigate the Portfolio:

Explore the About section to learn more about the fictional photographer.
View the Photos section to see examples of the photographer's work.
Check out the Contact section to send a message.

Sending a Message:

Fill in your name, email, and message in the contact form.
Click the "Send Message" button to submit the form.

The message will be stored in the MySQL database, and a confirmation message will be displayed.

## Features

- Contact Form:
Integrated a contact form managed by PHP and MySQL for user interaction.
Responsive Layout:
Used CSS Grid for modern and flexible designs.
- Frontend Form Handling:
Implemented frontend validation for ensuring data integrity before submission.
- AJAX for Data Transmission:
Utilized AJAX technology for asynchronous data exchange between frontend and backend.
- Server-Side Validation and Data Storage:
Implemented server-side validation using PHP.
Stored data in JSON format and managed it in a MySQL database.
- Security Measures:
Applied multiple layers of data validation to enhance security.
Managed secure data handling and processing.

## Technologies Used

* HTML: For structuring the web pages.
* CSS: For styling and layout of the web pages.
* JavaScript: For interactive elements and frontend validation.
* PHP: For server-side processing and managing form submissions.
* MySQL: For storing contact form messages.
* CSS Grid: For responsive and flexible design layouts.
* JSON: For data formatting and transmission.
* AJAX: For asynchronous data exchange between frontend and backend.
* Security Handling: For implementing data validation and secure data processing.
* Responsive Design: For ensuring the website works well on different devices.

## Project Structure

Outline the structure of your project directory, explaining the purpose of key files and folders.

```plaintext
photographer-portfolio/
├── css/                         # CSS files for styling
│   ├── normalize.css            # CSS reset for cross-browser consistency
│   └── style.css                # Main stylesheet for the project
├── images/                      # Image files
│   ├── image1.jpg               # Example image
│   ├── image2.jpg               # Example image
│   ├── ...                      # Additional images
│   └── image11.jpg              # Example image
├── js/                          # JavaScript files
│   ├── contact.js               # Handles contact form interactions and validations
│   ├── utilities.js             # Utility functions used across the project
│   └── main.js                  # Main JavaScript file for overall site functionality
├── PHP/                         # PHP files for server-side processing
│   ├── class_contact_send_message.php  # PHP class for handling contact form submissions
│   ├── class_dataBase.php       # PHP class for database interactions
│   └── send_message.php         # PHP script for processing and storing messages
├── SQL/                         # SQL file for database setup
│   └── database.sql             # SQL script to set up the MySQL database
├── index.html                   # Main HTML file and entry point of the website
├── composer.json                # Composer configuration file for PHP dependencies
├── README.md                    # Project documentation

```

## Challenges and Learnings
**Creating a visually stunning and user-friendly photographer portfolio website**
  
Action: Utilized modern web technologies including CSS Grid, JavaScript, PHP, and MySQL to develop a responsive single-page template with a contact form managed by PHP and MySQL.

Result: Successfully developed a dynamic portfolio website demonstrating expertise in CSS Grid layout, frontend form handling and validation, AJAX technology, server-side validation, and efficient data management.

**Server-Side Validation and Data Storage:**
- Implemented server-side validation using PHP to ensure data integrity and security. Valid data was structured in JSON format before transmission and stored in a MySQL database.
- Developed PHP classes to handle form data, manage database interactions, and ensure secure data processing.
    
**Security Measures:**
 - Applied multiple layers of data validation (frontend and backend) to prevent invalid data submission and enhance security.
 - Ensured secure data handling practices to protect user information.


## Future Improvements

- Admin Panel: Develop a secure admin page for viewing and managing messages received from the contact form.
- Gallery Section: Enhance the photo section with a filterable and searchable gallery to showcase different categories of photos.
- Performance Optimization: Optimize the website for faster load times and better performance, especially for image-heavy pages.
- SEO Enhancements: Improve search engine optimization to increase visibility and traffic.
- Additional Features: Implement additional features such as testimonials, a blog section, or a client booking system.

## Contact

- GitHub: [Nada-TB](https://github.com/Nada-TB)
