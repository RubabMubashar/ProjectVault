
# 🚀 ProjectVault

**ProjectVault** is a modern admin dashboard built with **HTML, CSS, JavaScript, PHP, and MySQL** to manage projects and categories in one place.  
It is designed with a clean UI, dark/light mode support, and full CRUD functionality — **without a login system** (by design).

---

## ✨ Features

- 📊 **Dashboard Overview**
  - Total Projects count
  - Total Categories count

- 📁 **Categories Management**
  - Create categories
  - View all categories
  - Delete categories
  - ⚠️ Cascade delete warning (projects linked to a category are deleted automatically)

- 📦 **Projects Management**
  - Create projects
  - Assign projects to categories
  - Edit projects
  - Delete projects
  - Copy project links to clipboard

- ⚙️ **Settings Page**
  - Update profile name, email, profession
  - Upload profile avatar
  - Data stored in database

- 🌙 **Dark / Light Mode**
  - Persistent theme using `localStorage`

- 📱 **Responsive Design**
  - Sidebar collapses on mobile
  - Mobile menu support

---

## 🧱 Tech Stack

- **Frontend**
  - HTML5
  - CSS3 (Custom styling, gradients)
  - Vanilla JavaScript

- **Backend**
  - PHP (Procedural)
  - MySQL

- **Server**
  - XAMPP (Apache + MySQL)

---

## 📂 Project Structure
![App Screenshot](https://github.com/RubabMubashar/ProjectVault/blob/main/code.png)

---

## 🛠️ Installation (XAMPP)

Follow these steps carefully 👇

### 1️⃣ Clone or Download the Project

```bash
git clone https://github.com/your-username/ProjectVault.git

OR download ZIP and extract.
```

### 2️⃣ Move Project to htdocs

```bash
C:/xampp/htdocs/
```

### 3️⃣ Start XAMPP

Open XAMPP Control Panel

Start:

✅ Apache

✅ MySQL

### 4️⃣ Create Database

``` bash
Open phpMyAdmin

http://localhost/phpmyadmin
```

Create a database:
``` bash
projectvault
```

### 5️⃣ Import Database

- Select projectvault database
- Click Import
- Choose file: 
```bash
projectvault.sql
```
- Click Go

✅ Tables + dummy data will be created automatically.

### 6️⃣ Configure Database Connection

Open:
```
config/db.php
```

Make sure credentials match your setup:
```
<?php
$conn = new mysqli("localhost", "root", "", "projectvault");

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
```
### 7️⃣ Run the Project

Open in browser:
```
http://localhost/ProjectVault/
``` 
📌 Notes
- ❌ No authentication / login system (intentionally excluded)
- 🗑️ Deleting a category will also delete its projects (MySQL ON DELETE CASCADE)
- 🌓 Dark mode state is preserved across pages
- 🧩 All modals are reusable (Dashboard & Pages)
### 🧪 Dummy Data

The repository includes:
- projectvault.sql

- Pre-filled categories

- Pre-filled projects

- Default profile data

You can reset anytime by re-importing the SQL file.

### 🚧 Future Improvements (Optional)

- User authentication

- Pagination & search

- Role-based access

- REST API

- Export projects (CSV / PDF)

### 📜 License

This project is open-source and free to use for learning, personal projects, or extensions.

### 💙 Credits

Designed & Developed by <a href="https://rubabmubasharportfolio.site/">Rubab Mubashar</a>

⭐ If you like this project, give it a star!



