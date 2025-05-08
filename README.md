
# 🌌 Planetary Database Management System

A web-based application developed using **PHP**, **HTML/CSS**, and **JavaScript**, with **Oracle 10g** as the backend database. This system allows users to perform CRUD operations (Create, Read, Update, Delete) on planetary records through a user-friendly interface.

---

## 🚀 Features

- 🌍 Add, view, update, and delete planetary records.
- 🧭 Displays detailed information such as:
  - Planet Name
  - Mass
  - Radius
  - Orbital Period
  - Distance from the Sun
- 🔎 Search functionality by planet name or criteria.
- 🧮 Oracle PL/SQL integration for backend data operations.

---

## 🛠️ Technologies Used

- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP
- **Database:** Oracle 10g (PL/SQL)
- **Tools:** SQL*Plus, Oracle Apex (optional), XAMPP/WAMP for server simulation

---

## 📂 Project Structure

```
Planetary-Database-Management-System/
├── asset/                 # Contains CSS and image assets
│   ├── css/               # Stylesheets
│   └── images/            # Image files
├── controller/            # PHP scripts handling user input and interactions
├── js/                    # JavaScript files for client-side functionality
├── media/                 # Media files used in the application
├── model/                 # PHP scripts for database interactions
├── view/                  # HTML/PHP files for the user interface
├── index.php              # Main entry point of the application
└── README.md              # Project documentation
```

---

## ⚙️ How to Run Locally

1. **Set Up Oracle 10g:**
   - Ensure Oracle 10g is installed and running.
   - Create the required tables and schema manually or via a provided SQL script.

2. **Set Up Server (e.g., XAMPP):**
   - Clone this repository into the `htdocs` directory (for XAMPP) or `www` directory (for WAMP):

     ```bash
     git clone https://github.com/FardinUbaid/Planetary-Database-Management-System.git
     ```

   - Start the Apache service.

3. **Configure Database Connection:**
   - Update the database connection settings in the appropriate configuration file (e.g., `model/db.php`) with your Oracle 10g credentials and SID.

4. **Access the Application:**
   - Open your browser and navigate to:
     ```
     http://localhost/Planetary-Database-Management-System/
     ```

---

## 📌 Notes

- Ensure the Oracle client drivers are available for PHP (OCI8 extension enabled).
- For local testing, make sure database credentials and host settings match your environment.
- All CRUD operations are performed using secure SQL queries and validated forms.

---

## 📜 License

This project is open-source and available under the [MIT License](LICENSE).

---

## 🙋 Author

**Fardin Ubaid**  
🔗 [GitHub Profile](https://github.com/FardinUbaid)
