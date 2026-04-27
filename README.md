# 🏡 Real Estate Management System (REMS)

<p align="center">
  <b>A Smart Web Platform for Buying, Selling & Renting Properties</b><br>
  Built to modernize real estate operations with speed, efficiency, and user convenience.
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Backend-PHP-blue?style=for-the-badge">
  <img src="https://img.shields.io/badge/Database-MySQL-orange?style=for-the-badge">
  <img src="https://img.shields.io/badge/Frontend-HTML%20%7C%20CSS%20%7C%20JS-green?style=for-the-badge">
  <img src="https://img.shields.io/badge/Server-XAMPP-red?style=for-the-badge">
</p>

---

## 🚀 Overview

The **Real Estate Management System (REMS)** is a full-stack web application that digitizes property transactions and management.

### ❌ Traditional Challenges
- Manual paperwork  
- Time-consuming property visits  
- Limited property visibility  
- In-person client-agent interaction  

### ✅ Solution (REMS)
- Centralized property listings  
- Advanced search & filtering  
- Online booking system  
- Role-based access system  

---

## ✨ Key Features

- 🔍 Advanced Property Search with filters  
- 🏘️ Dynamic Property Listings with images  
- 📍 Shortest Path Algorithm for nearest properties  
- 👤 Multi-user roles (Admin, Agent, Customer)  
- 📅 Online booking & scheduling  
- 🔐 Secure login & authentication  
- ⚙️ Admin dashboard for full system control  

---

## 🧠 System Architecture
       ┌─────────────────────┐
       │     Admin Panel     │
       └─────────┬───────────┘
                 │
 ┌───────────────┼───────────────┐
 ▼               ▼               ▼

 
---

## 🛠️ Tech Stack

| Layer      | Technology |
|-----------|-----------|
| Frontend  | HTML, CSS, JavaScript |
| Backend   | PHP |
| Database  | MySQL |
| Server    | XAMPP |
| Tools     | VS Code, phpMyAdmin |

---

---

## ⚙️ Installation & Setup

### 1️⃣ Clone Repository
```bash
git clone https://github.com/Ashwini-Nandagavi /REMS.git

🔐 User Roles

👤 Customer
Search properties
Book properties
Manage bookings

🧑‍💼 Agent
Add/edit/delete properties
Upload property details

🛠️ Admin
Manage users
Approve/reject listings
Monitor platform

🔄 Workflow
graph TD
A[Agent Adds Property] --> B[Stored in Database]
B --> C[User Searches Property]
C --> D[Filtered Results Displayed]
D --> E[User Books Property]
E --> F[Admin Verification]

📂 Project Structure
/REMS
│── /admin
│── /agent
│── /customer
│── /assets
│── /uploads
│── config.php
│── index.php
│── database.sql
│── README.md

📈 Future Enhancements
💳 Payment Gateway Integration
📱 Mobile App (Flutter)
🤖 AI-based recommendations
🗺️ Google Maps integration
💬 Chat system
📚 References
PHP & MySQL — Jon Duckett
JavaScript — David Flanagan
