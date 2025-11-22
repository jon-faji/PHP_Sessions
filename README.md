# PHP Sessions Demo 

## Overview
This project contains three small PHP applications that demonstrate how PHP sessions work in practical, real-world scenarios.  

Each example is simple, self-contained, and highlights core session behavior.

### This project includes:

1. **Flash Message System**  
2. **Login Simulation**  
3. **Shopping Cart Counter**

These examples show how PHP stores temporary, user-specific data on the server and keeps it available across multiple page requests.

---

##  Folder Structure

php_sessions_demo/
│
├── flash_message/
│   ├── flash.html
│   ├── flash_message.php
│   └── show_message.php
│
├── login_simulation/
│   ├── login.html
│   ├── login.php
│   ├── dashboard.php
│   └── logout.php
│
└── shopping_cart/
    ├── cart.html
    ├── cart_process.php
    └── cart.php

---

##  Requirements

- PHP 7 or higher  
- Any modern web browser  
- No database required  
- Sessions stored server-side (default PHP behavior)  

---

##  How to Run the Project

1. Install PHP if it is not already installed.  
2. Place the entire project folder anywhere on your computer.  
3. Open a terminal inside the **php_sessions** folder.  
4. Start the PHP built-in server:

   ```bash
   php -S localhost:8000
Open a browser and navigate to the following URLs:

Flash Message Example:
http://localhost:8000/flash_message/flash.html

Login Simulation:
http://localhost:8000/login_simulation/login.html

Shopping Cart Example:
http://localhost:8000/shopping_cart/cart.html

##  Key Concepts: PHP Sessions

All examples make use of:

- session_start() – Initializes or resumes a session

- $_SESSION – Stores user-specific session data

- Redirects – Navigate between pages while maintaining session state

- Temporary user-specific state – Data persists across multiple pages

## Notes

This project demonstrates session usage in practical scenarios without a database.
You can easily expand or modify these examples for learning or small projects.
