# Infinity Todo - Technical Assessment Project

A full-featured todo list web application built with PHP and MySQL as part of a technical assessment for Infinity. This application allows users to register, login, and manage their tasks through an organized checklist system with groups.

[Technical Assessment Test PDF](https://github.com/AbdulazizBaHaj/technical-assessment-infinity-todo/blob/main/docs/Technical%20Assessment%20Test%202.3%20-%20Abdulaziz%20Ba%20Haj.pdf)

## 📋 Project Overview

This project was developed as a response to a technical assessment that required building a web application where users can:

- Sign up and login as users
- Create and manage todo lists
- Organize tasks with due dates
- Save and retrieve list items
- Expand functionality with custom features

**Assessment Date:** May 31, 2022  
**Developer:** Abdulaziz Abdulrahman Awad Ba Haj

## ✨ Features

- **User Authentication**

  - User registration with email validation
  - Secure login system
  - Session management

- **Hierarchical Task Organization**

  - Checklist Groups: Organize multiple checklists under themed groups
  - Checklists: Create multiple checklists within each group
  - Tasks: Add detailed tasks with descriptions and due dates

- **Task Management**

  - Create, edit, and delete tasks
  - Mark tasks as complete
  - Set due dates for tasks
  - View upcoming tasks (7-day overview on dashboard)

- **User Interface**
  - Responsive Bootstrap design
  - Intuitive navigation with dropdown menus
  - Clean and organized dashboard

## 🛠️ Technology Stack

- **Backend:** PHP 7+
- **Database:** MySQL
- **Frontend:** HTML5, CSS3, Bootstrap 4
- **Server:** Apache (XAMPP recommended)

## 📁 Project Structure

```
technical-assessment-infinity-todo/
├── config/
│   └── config.php              # Database configuration
├── includes/
│   ├── server.php              # Authentication logic
│   └── errors.php              # Error handling
├── controllers/
│   ├── auth/
│   │   ├── login.php           # Login page
│   │   └── registration.php    # Registration page
│   ├── checklist/
│   │   ├── insertChecklist.php
│   │   ├── edit_Checklist.php
│   │   ├── delete_checklist.php
│   │   └── showChecklist.php   # Checklist detail view
│   ├── group/
│   │   ├── insertChecklistGroup.php
│   │   ├── edit_group.php
│   │   ├── delete_group.php
│   │   └── showGroup.php       # Group detail view
│   └── task/
│       ├── insertTask.php
│       ├── delete_task.php
│       ├── delete_task_home.php
│       ├── taskDone.php
│       └── taskDoneHome.php
├── database/
│   └── todo.sql                # Database schema
├── docs/
│   └── Technical Assessment.pdf
├── index.php                   # Dashboard/Homepage
└── README.md
```

## 🚀 Installation & Setup

### Prerequisites

- XAMPP (or any PHP development environment)
- PHP 7.0 or higher
- MySQL 5.6 or higher
- Web browser

### Step 1: Clone the Repository

```bash
git clone https://github.com/yourusername/technical-assessment-infinity-todo.git
cd technical-assessment-infinity-todo
```

### Step 2: Setup Database

1. Start Apache and MySQL from XAMPP Control Panel
2. Open phpMyAdmin: `http://localhost/phpmyadmin`
3. Create a new database named `todo`
4. Import the database schema:
   - Click on the `todo` database
   - Go to "Import" tab
   - Choose `database/todo.sql`
   - Click "Go"

### Step 3: Configure Database Connection

Edit `config/config.php` with your database credentials:

```php
<?php
$host = "localhost";
$username = "root";
$password = "";      // Default XAMPP password is empty
$database = "todo";

$link = mysqli_connect($host, $username, $password, $database);

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
```

### Step 4: Setup Virtual Host (Optional)

**For htdocs installation:**

```bash
# Move or copy project to htdocs
cp -r technical-assessment-infinity-todo C:/xampp/htdocs/

# Access at:
http://localhost/technical-assessment-infinity-todo
```

**For custom directory (Windows):**

1. Edit `C:\xampp\apache\conf\extra\httpd-vhosts.conf`:

```apache
<VirtualHost *:80>
    DocumentRoot "D:/path/to/technical-assessment-infinity-todo"
    ServerName infinity-todo.local
    <Directory "D:/path/to/technical-assessment-infinity-todo">
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```

2. Edit `C:\Windows\System32\drivers\etc\hosts`:

```
127.0.0.1 infinity-todo.local
```

3. Restart Apache and access at: `http://infinity-todo.local`

### Step 5: Run the Application

1. Ensure Apache and MySQL are running
2. Open your browser
3. Navigate to `http://localhost/technical-assessment-infinity-todo` (or your configured URL)
4. Register a new account
5. Start creating checklist groups and tasks!

## 📖 Usage Guide

### Getting Started

1. **Register:** Create a new account with username, email, and password
2. **Login:** Access your personalized dashboard
3. **Create a Checklist Group:** Organize your tasks by creating groups (e.g., "Work", "Personal", "Projects")
4. **Add Checklists:** Within each group, create specific checklists
5. **Add Tasks:** Add tasks with names, descriptions, and due dates
6. **Manage Tasks:** Mark tasks as done or delete completed tasks

### Dashboard Features

- **7-Day Task Overview:** See all tasks due within the next week
- **Navigation Menu:** Quick access to all your checklist groups and checklists
- **Quick Actions:** Create new checklist groups directly from the dashboard

## 🎯 Technical Assessment Requirements Met

✅ User registration and authentication  
✅ Todo list functionality  
✅ Save and retrieve list items  
✅ Due date/time settings for tasks  
✅ Expanded functionality (hierarchical organization with groups and checklists)  
✅ Git repository with instructions  
✅ Clean, organized code structure

## 📄 License

This project was created as part of a technical assessment. Feel free to use it for learning purposes.

## 👤 Author

**Abdulaziz Abdulrahman Awad Ba Haj**

---

_This project was developed as part of a technical assessment for Infinity (May 2022)_
