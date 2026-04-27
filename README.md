
# 🏡 Real Estate Management System (REMS)

<p align="center">
  <b>A Full-Stack Web Application for Buying, Selling & Renting Properties</b><br>
  Simplifying real estate operations with a modern digital platform.
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Backend-PHP-blue?style=for-the-badge">
  <img src="https://img.shields.io/badge/Database-MySQL-orange?style=for-the-badge">
  <img src="https://img.shields.io/badge/Frontend-HTML%20%7C%20CSS%20%7C%20JS-green?style=for-the-badge">
  <img src="https://img.shields.io/badge/Server-XAMPP-red?style=for-the-badge">
</p>

---

## 🚀 Overview

The **Real Estate Management System (REMS)** is a web-based application designed to streamline property transactions by allowing users to search, view, and book properties online.

It eliminates traditional inefficiencies such as manual paperwork, physical visits, and limited property visibility.

---

## ✨ Features

* 🏘️ Property Listings (Add, View, Manage)
* 🔍 Advanced Search & Filtering
* 📅 Online Property Booking
* 👤 User Authentication (Login/Register)
* 🧑‍💼 Agent Property Management
* 🛠️ Admin Control Panel
* 📍 Location-Based Search (Extendable with Maps)

---

## 🧠 System Architecture

```
           ┌─────────────────────┐
           │     Admin Panel     │
           └─────────┬───────────┘
                     │
     ┌───────────────┼───────────────┐
     ▼               ▼               ▼
Customer Module   Agent Module   Property Database
(Search/Book)     (Add/Manage)       (MySQL)
```

---

## 🛠️ Tech Stack

| Layer    | Technology            |
| -------- | --------------------- |
| Frontend | HTML, CSS, JavaScript |
| Backend  | PHP                   |
| Database | MySQL                 |
| Server   | XAMPP                 |

---

## ⚙️ Installation & Setup

### 1. Clone Repository

```bash
git clone https://github.com/your-username/REMS.git
```

### 2. Move Project to XAMPP

```
C:/xampp/htdocs/REMS
```

### 3. Start Server

* Apache
* MySQL

### 4. Setup Database

* Open phpMyAdmin
* Create database: `rems_db`
* Import `database.sql`

### 5. Run Project

```
http://localhost/REMS
```

---

## 🔐 User Roles

### 👤 Customer

* Search properties
* Book properties
* Manage bookings

### 🧑‍💼 Agent

* Add/Edit/Delete properties
* Manage listings

### 🛠️ Admin

* Manage users
* Approve listings
* Monitor system

---

## 🔄 Workflow

1. Agent adds property
2. Data stored in database
3. User searches property
4. Results displayed
5. User books property
6. Admin verifies data

---

## 📂 Project Structure

```
/REMS
│── config.php
│── index.php
│── login.php
│── register.php
│── dashboard.php
│── add_property.php
│── search.php
│── book.php
│── logout.php
│── /uploads
│── /assets
│── database.sql
```

---

## 📈 Future Enhancements

* 💳 Payment Gateway Integration
* 📱 Mobile App (Flutter)
* 🗺️ Google Maps Integration
* 🤖 AI-Based Property Recommendations
* 💬 Chat System

---

## 📚 References

* PHP & MySQL — Jon Duckett
* JavaScript — David Flanagan

---

## 🤝 Contributing

Contributions are welcome!

```
git checkout -b feature-name
git commit -m "Add feature"
git push origin feature-name
```

---

## 👩‍💻 Author

**Ashwini Nandagavi**
Aspiring Data Science & AI Engineer

---

## ⭐ Support

If you found this project helpful:

* ⭐ Star the repository
* 🔁 Share it

---

<p align="center">
  <b>✨ Transforming Real Estate with Technology ✨</b>
</p>
