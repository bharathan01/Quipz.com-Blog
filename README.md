# Quipz.com - Blog Web Application

## Overview

Quipz.com is a comprehensive blog web application developed with PHP, XAMPP, and MySQL. The project follows the MVC (Model-View-Controller) framework structure, incorporating custom URL routes and leveraging PHP OOP (Object-Oriented Programming) concepts. The application features modules for user management, blog creation, social interactions, and administrative tasks.

## Prerequisites

To run this project locally, ensure you have the following installed:

- [XAMPP](https://www.apachefriends.org/index.html) - A free and open-source cross-platform web server solution stack.
- [MySQL](https://www.mysql.com/) - An open-source relational database management system.

## Project Structure

The project is organized using the MVC architecture:

- **app**: Contains the core application components.
  - **controllers**: Handles user input and interacts with the model.
  - **models**: Manages the data, logic, and rules of the application.
  - **views**: Displays data and handles user interface logic.

- **config**: Stores configuration files for database connections, settings, etc.

- **public**: The public root of the application.
  - **css**: Contains stylesheets for the application.
  - **images**: Stores images used in the application.
  - **js**: Holds JavaScript files for client-side functionality.

- **vendor**: External dependencies and libraries.

- **.gitignore**: Specifies files and directories to be ignored by Git.

- **index.php**: The entry point of the application.

## Custom URL Routes

The application utilizes custom URL routes for a clean and user-friendly browsing experience. The route configuration can be found in the `http://localhost/Quipz.com/createblog/routes` file. Each route is associated with a specific controller and method, following an object-oriented approach to handling user requests.

```php
// Example route definition
Route::get('/blog', 'BlogController@index');
Route::post('/blog/create', 'BlogController@create');
// Add your custom routes here

Certainly! I've expanded the README file to include information about the added modules for user login/register, user profile management, blog creation and maintenance, social interactions (like, comment, share), reading top news daily, and administrative features such as adding new categories.

## Prerequisites

To run this project locally, ensure you have the following installed:

- [XAMPP](https://www.apachefriends.org/index.html) - A free and open-source cross-platform web server solution stack.
- [MySQL](https://www.mysql.com/) - An open-source relational database management system.

## Project Structure

The project is organized using the MVC architecture:

- **app**: Contains the core application components.
  - **controllers**: Handles user input and interacts with the model.
  - **models**: Manages the data, logic, and rules of the application.
  - **views**: Displays data and handles user interface logic.

- **config**: Stores configuration files for database connections, settings, etc.

- **public**: The public root of the application.
  - **css**: Contains stylesheets for the application.
  - **images**: Stores images used in the application.
  - **js**: Holds JavaScript files for client-side functionality.

- **vendor**: External dependencies and libraries.

- **.gitignore**: Specifies files and directories to be ignored by Git.

- **index.php**: The entry point of the application.

## Custom URL Routes

The application utilizes custom URL routes for a clean and user-friendly browsing experience. The route configuration can be found in the `/routes` file. Each route is associated with a specific controller and method, following an object-oriented approach to handling user requests.

```php
// Example route definition
Route::get('/blog', 'BlogController@index');
Route::post('/blog/create', 'BlogController@create');
// Add your custom routes here
PHP OOP Concepts
Quipz.com embraces PHP Object-Oriented Programming (OOP) concepts to enhance code organization, reusability, and maintainability. Controllers, models, and other components are implemented as classes with well-defined methods, promoting a modular and structured codebase.

Modules
User Management
User Registration/Login: Users can register and log in to the application.
User Profile: Users can update, add, delete, and edit their profiles.
Blog Management
Create and Maintain Blogs: Users can create, edit, and delete their blog posts.
Social Interactions: Users can like, comment, and share blog posts.
Reading Top News
Daily Top News: Users can read the top news daily.
Administrative Features
Admin Dashboard: Administrators can manage categories, view user profiles, and monitor user activity.
Add New Categories: Administrators can add new categories for blog posts.
Installation
Clone the repository:

bash
Copy code
git clone 
Set up your local server environment using XAMPP.

Import the database schema from the database/quipz.sql file.

Configure the database connection in the config/database.php file.

Navigate to http://localhost/Quipz.com in your web browser.

