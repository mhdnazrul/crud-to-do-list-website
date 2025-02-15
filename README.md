# CRUD TO-DO-LIST Website with User Authentication

---

## **Table of Contents**
1. [Introduction](#introduction)
2. [Features](#features)
3. [Technologies Used](#technologies-used)
4. [Project Lifecycle](#project-lifecycle)
   - [Planning & Requirements](#planning--requirements)
   - [Setup & Configuration](#setup--configuration)
   - [Development](#development)
   - [Testing](#testing)
   - [Deployment](#deployment)
5. [Challenges & Solutions](#challenges--solutions)
6. [How to Run the Project](#how-to-run-the-project)
7. [Hosting on GitHub](#hosting-on-github)
8. [Hosting on Vercel](#hosting-on-vercel)
9. [Future Improvements](#future-improvements)
10. [Conclusion](#conclusion)

---

## **Introduction**
This project is a **CRUD (Create, Read, Update, Delete)** application integrated with **user authentication**. It allows users to register, log in, and manage their tasks securely. The application uses **PHP** for server-side logic, **MySQL** for data storage, and **HTML/CSS/JavaScript** for the frontend. This README provides a detailed overview of the project, including development steps, challenges, and deployment instructions.

---

## **Features**
1. **User Authentication**:
   - Registration with email, name, and password.
   - Login with email and password.
   - Session management for authenticated users.
2. **Task Management**:
   - Add, edit, delete, and mark tasks as completed.
   - Filter tasks by status (All, Pending, Completed).
3. **Responsive Design**:
   - Smooth transitions and animations.
   - Mobile-friendly layout.

---

## **Technologies Used**
- **Frontend**: HTML5, CSS3, JavaScript.
- **Backend**: PHP, MySQL.
- **Deployment**: GitHub, Vercel.

---

## **Project Lifecycle**

### **Planning & Requirements**
- **Objective**: Merge a login/registration system with a todo list into a single application.
- **Key Features**:
  - User registration and login with MySQL.
  - Session management for authenticated users.
  - CRUD operations for tasks (stored in browser localStorage).
  - Responsive design with smooth UI transitions.

### **Setup & Configuration**
1. **Database Setup**:
   - Created a MySQL database named `todo_app`.
   - Created a `users` table to store user data:
     ```sql
     CREATE TABLE users (
         id INT PRIMARY KEY AUTO_INCREMENT,
         name VARCHAR(50) NOT NULL,
         email VARCHAR(100) UNIQUE NOT NULL,
         password VARCHAR(255) NOT NULL,
         created_at DATETIME DEFAULT CURRENT_TIMESTAMP
     );
     ```

2. **PHP Configuration**:
   - Created `config.php` to manage MySQL connections:
     ```php
     <?php
     $host = "localhost";
     $user = "root";
     $password = "your_password";
     $dbname = "todo_app";
     $conn = new mysqli($host, $user, $password, $dbname);
     ?>
     ```

3. **Directory Structure**:
   ```
   crud-app/
   ├─ assets/
   │  ├─ css/
   │  │  ├─ login.css
   │  │  └─ todo.css
   │  └─ js/
   │     └─ login.js
   ├─ config.php
   ├─ login.php
   ├─ register.php
   ├─ home.php
   ```

### **Development**
1. **User Authentication**:
   - Registration (`register.php`): Validates and hashes passwords using `password_hash()`.
   - Login (`login.php`): Verifies credentials using `password_verify()`.
2. **Todo List Functionality** (`home.php`):
   - Dynamic task rendering using JavaScript.
   - LocalStorage for temporary task storage.
3. **UI/UX Design**:
   - Smooth transitions between login/registration forms.
   - Clean design with filters (All, Pending, Completed).

### **Testing**
- **User Authentication**: Tested registration with duplicate emails and invalid passwords.
- **Todo List**: Tested CRUD operations and localStorage synchronization.
- **Cross-Browser Testing**: Ensured compatibility with Chrome, Firefox, and Safari.

### **Deployment**
- Hosted the frontend on **GitHub** and **Vercel**.
- Deployed the PHP backend on **Heroku** (as Vercel does not support PHP).

---

## **Challenges & Solutions**

### **Challenge 1: MySQL Connection Errors**
- **Issue**: `Access denied for user 'root'@'localhost'`.
- **Solution**:
  - Verified credentials in `config.php`.
  - Granted privileges to the `root` user:
    ```sql
    GRANT ALL PRIVILEGES ON todo_app.* TO 'root'@'localhost';
    FLUSH PRIVILEGES;
    ```

### **Challenge 2: PHP Syntax Errors**
- **Issue**: `Parse error: unexpected token ";"`.
- **Solution**:
  - Enabled error reporting in PHP:
    ```php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    ```
  - Fixed missing parentheses and mismatched quotes.

### **Challenge 3: Session Management**
- **Issue**: Sessions not persisting after login.
- **Solution**:
  - Added `session_start()` at the top of all PHP files.
  - Stored user IDs in `$_SESSION['user_id']`.

---

## **How to Run the Project**
1. **Clone the Repository**:
   ```bash
   git clone https://github.com/username/crud-app.git
   cd crud-app
   ```

2. **Set Up MySQL**:
   - Create a database named `todo_app`.
   - Create the `users` table (see [Setup & Configuration](#setup--configuration)).

3. **Configure `config.php`**:
   - Update the MySQL credentials in `config.php`.

4. **Run the Application**:
   - Use XAMPP or any PHP server to host the project locally.
   - Open `http://localhost/crud-app/login.php` in your browser.

---

## **Hosting on GitHub**
1. Create a repository on GitHub.
2. Push your code:
   ```bash
   git init
   git add .
   git commit -m "Initial commit"
   git remote add origin https://github.com/username/crud-app.git
   git push -u origin main
   ```

---

## **Hosting on Vercel**
1. **Frontend**:
   - Import your GitHub repository into Vercel.
   - Select "Static Site" as the framework.
   - Deploy.

2. **Backend** (Alternative for PHP):
   - Use **Heroku**:
     ```bash
     heroku create
     git push heroku main
     ```
   - Configure environment variables in Heroku for MySQL.

---

## **Future Improvements**
1. **Password Reset Functionality**.
2. **Task Categories and Due Dates**.
3. **Email Verification During Registration**.

---

## **Conclusion**
This CRUD application demonstrates end-to-end development of a secure, user-friendly task management system. By integrating PHP, MySQL, and modern frontend practices, the project highlights robust authentication, clean UI design, and scalable architecture. Future work includes expanding features and optimizing deployment pipelines.
