# Lamesa Inasal Unified System

Welcome to the **Lamesa Inasal Unified System**!  
This is my personal project, created to provide a unified system for managing restaurant operations. The project is free to use, modify, and distribute.

---

## 🧾 Overview

The Lamesa Inasal Unified System is designed to streamline and integrate multiple functions within a restaurant setting, including:

- Point of Sale (POS) system
- Inventory management
- Order processing
- Admin, SuperAdmin, Owner
- Employee Profile

By consolidating these operations into a single platform, the system aims to improve efficiency, reduce errors, and simplify business management.

---

## ⚙️ Features

- **POS System**: Handles sales transactions, generates receipts, and tracks sales data.
- **Inventory Management**: Monitors stock levels, manages suppliers, and sends reorder alerts.
- **Order Processing**: Manages customer orders from receipt to fulfillment.
- **Customer Management**: Stores customer information, preferences, and order history.

---

## 🛠️ Technologies Used

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **API**: Google Map, Graph JS

---

## 📥 Installation

To set up the Lamesa Inasal Unified System locally, follow these steps:

### 1. Clone the repository

```bash
git clone https://github.com/SimplyMon/Lamesa-inasal-Unified-System.git
```

### 2. Set up the MySQL database

1. Open phpMyAdmin or your preferred MySQL client.
2. Create a new database, named lamesa

### 3. Import the provided SQL file into the database

1. Locate the file: DATABASE/lamesa.sql
2. In phpMyAdmin: select your database → click Import → choose lamesa.sql → click Go
3. Or via MySQL command line: mysql -u your_username -p lamesa_inasal < DATABASE/lamesa.sql

### 4. Configure database connection

1. Open the PHP configuration file config/dbconnect.php
2. Update the database connection details:

   - **POS System**: $host = "localhost"; // your database host
   - **POS System**: $username = "root"; // your MySQL username
   - **POS System**: $password = ""; // your MySQL password
   - **POS System**: $dbname = "lamesa"; // the database you just created

### 5. Start your local server

1. If using XAMPP, WAMP, or MAMP, make sure Apache and MySQL are running.
2. Place the project folder in your web server directory (e.g., htdocs for XAMPP).
3. Open your browser and go to

### POS System

Browse at: [http://localhost/lamesa-pos-system-main](http://localhost/lamesa-pos-system-main)

### Website

Browse at: [http://localhost/lamesa-website-main](http://localhost/lamesa-website-main)

## 🛠️ License

- **This project is free to use, modify, and distribute.**

### This version now includes

- Full SQL import instructions
- Database connection setup
- Instructions to run locally

### 📢 Acknowledgments

This project was developed as a personal initiative to enhance my full-stack development skills and create a practical solution for Lamesa Inasal restaurant management. I hope it can be a helpful resource for others.
