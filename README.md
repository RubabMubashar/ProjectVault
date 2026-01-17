<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ProjectVault – Documentation</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    body {
      font-family: Inter, system-ui, -apple-system, BlinkMacSystemFont, sans-serif;
      line-height: 1.7;
      margin: 0;
      background: #f8fafc;
      color: #0f172a;
    }

    .container {
      max-width: 900px;
      margin: 40px auto;
      padding: 40px;
      background: #ffffff;
      border-radius: 14px;
      box-shadow: 0 10px 30px rgba(0,0,0,.08);
    }

    h1, h2, h3 {
      margin-top: 32px;
      color: #020617;
    }

    h1 {
      font-size: 36px;
      margin-bottom: 10px;
    }

    h2 {
      font-size: 26px;
      border-bottom: 2px solid #e5e7eb;
      padding-bottom: 6px;
    }

    h3 {
      font-size: 20px;
    }

    p {
      margin: 14px 0;
    }

    ul {
      padding-left: 20px;
    }

    li {
      margin: 8px 0;
    }

    code, pre {
      background: #0f172a;
      color: #e5e7eb;
      padding: 14px;
      border-radius: 10px;
      display: block;
      overflow-x: auto;
      margin: 14px 0;
      font-size: 14px;
    }

    .tag {
      display: inline-block;
      background: #eef2ff;
      color: #3730a3;
      padding: 4px 10px;
      border-radius: 999px;
      font-size: 13px;
      margin-right: 6px;
      margin-top: 6px;
    }

    .note {
      background: #fef3c7;
      border-left: 4px solid #f59e0b;
      padding: 12px 16px;
      border-radius: 8px;
      margin: 16px 0;
    }

    footer {
      margin-top: 50px;
      text-align: center;
      font-size: 14px;
      color: #64748b;
    }
  </style>
</head>
<body>

  <div class="container">

    <h1>🚀 ProjectVault</h1>
    <p>
      <strong>ProjectVault</strong> is a modern admin dashboard built using
      <span class="tag">HTML</span>
      <span class="tag">CSS</span>
      <span class="tag">JavaScript</span>
      <span class="tag">PHP</span>
      <span class="tag">MySQL</span>
      for managing projects and categories in one place.
    </p>

    <p>
      This project does <strong>not include a login system</strong> by design and is ideal
      for learning full-stack CRUD concepts with clean UI.
    </p>

    <h2>✨ Features</h2>
    <ul>
      <li>Dashboard with total projects & categories</li>
      <li>Category management (Create, View, Delete)</li>
      <li>Project management (Create, Edit, Delete)</li>
      <li>Assign projects to categories</li>
      <li>Copy project links to clipboard</li>
      <li>Profile settings with avatar upload</li>
      <li>Dark / Light mode (persistent)</li>
      <li>Responsive layout (mobile friendly)</li>
    </ul>

    <h2>🧱 Tech Stack</h2>
    <ul>
      <li><strong>Frontend:</strong> HTML5, CSS3, Vanilla JavaScript</li>
      <li><strong>Backend:</strong> PHP (procedural)</li>
      <li><strong>Database:</strong> MySQL</li>
      <li><strong>Server:</strong> XAMPP (Apache + MySQL)</li>
    </ul>

    <h2>📂 Project Structure</h2>
    <pre>
ProjectVault/
├── assets/
│   ├── backend/
│   │   ├── categories/
│   │   ├── projects/
│   │   └── profile.php
│   ├── css/
│   ├── js/
│   └── img/
├── config/db.php
├── includes/
│   ├── sidebar.php
│   └── navbar.php
├── dashboard.php
├── categories.php
├── projects.php
├── settings.php
├── projectvault.sql
└── README.html
    </pre>

    <h2>🛠️ Installation (XAMPP)</h2>

    <h3>1️⃣ Move Project to htdocs</h3>
    <pre>C:/xampp/htdocs/ProjectVault</pre>

    <h3>2️⃣ Start XAMPP</h3>
    <ul>
      <li>Start Apache</li>
      <li>Start MySQL</li>
    </ul>

    <h3>3️⃣ Create Database</h3>
    <pre>
Database name: projectvault
    </pre>

    <h3>4️⃣ Import SQL File</h3>
    <p>Open phpMyAdmin and import:</p>
    <pre>projectvault.sql</pre>

    <h3>5️⃣ Configure Database Connection</h3>
    <pre>
$conn = new mysqli("localhost", "root", "", "projectvault");
    </pre>

    <h3>6️⃣ Run the Project</h3>
    <pre>http://localhost/ProjectVault/dashboard.php</pre>

    <h2>📌 Important Notes</h2>
    <ul>
      <li>No login system included</li>
      <li>Deleting a category deletes related projects (CASCADE)</li>
      <li>Theme mode is saved using localStorage</li>
      <li>Modals are reusable across pages</li>
    </ul>

    <div class="note">
      <strong>Tip:</strong> You can reset everything anytime by re-importing
      <code>projectvault.sql</code>.
    </div>

    <h2>🚧 Possible Improvements</h2>
    <ul>
      <li>User authentication</li>
      <li>Search & pagination</li>
      <li>Export projects (CSV / PDF)</li>
      <li>REST API</li>
    </ul>

    <h2>📜 License</h2>
    <p>
      This project is open-source and free to use for learning and personal projects.
    </p>

    <footer>
      Designed & Developed with ❤️ — <strong>ProjectVault</strong>
    </footer>

  </div>

</body>
</html>
