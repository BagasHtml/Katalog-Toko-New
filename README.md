```markdown
<div align="center">

# 🛒 Katalog Toko — PHP Store Catalog System

[![PHP Version](https://img.shields.io/badge/PHP-7.4%2B-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-5.7%2B-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![License](https://img.shields.io/badge/License-MIT-green.svg?style=for-the-badge)](LICENSE)
[![GitHub Stars](https://img.shields.io/github/stars/BagasHtml/Katalog-Toko-New?style=for-the-badge&color=yellow)](https://github.com/BagasHtml/Katalog-Toko-New/stargazers)

**A modern, lightweight e-commerce catalog system built with native PHP**

[🚀 Demo](#-demo) • [✨ Features](#-features) • [📦 Installation](#-installation) • [📖 Documentation](#-documentation) • [🤝 Contributing](#-contributing)

<img src="https://raw.githubusercontent.com/andreasbm/readme/master/assets/lines/rainbow.png" width="100%">

</div>

## 📖 About The Project

**Katalog Toko** is a comprehensive e-commerce catalog system designed for small to medium businesses. Built entirely with native PHP, this system provides an intuitive interface for both customers and administrators to manage products, orders, and user activities.

### 🎯 Why This Project?

- ✅ **No Framework Dependencies** - Pure PHP for maximum compatibility
- ✅ **Easy to Deploy** - Works on any standard LAMP/WAMP stack
- ✅ **Lightweight** - Fast loading times and minimal resource usage
- ✅ **Beginner Friendly** - Clean code structure for learning purposes
- ✅ **Customizable** - Easy to modify and extend

---

## ✨ Features

<table>
<tr>
<td width="50%">

### 🔐 Authentication System
- ✅ Secure user login & registration
- ✅ Session management
- ✅ Password encryption
- ✅ Auto logout functionality
- ✅ Error handling & validation

### 🛍️ Product Management
- ✅ Multiple product categories
  - 📱 Electronics
  - 🍔 Food & Beverages
  - 👕 Fashion & Apparel
- ✅ Product listing with details
- ✅ Shopping cart system
- ✅ Price calculation
- ✅ Payment methods page

</td>
<td width="50%">

### 👨‍💼 Admin Panel
- ✅ Secure admin authentication
- ✅ Dashboard with statistics
- ✅ User activity monitoring
- ✅ Product management (CRUD)
- ✅ Order management
- ✅ Admin-only access control

### 🎨 User Interface
- ✅ Responsive design
- ✅ Dynamic navigation bar
- ✅ Footer with info
- ✅ Clean and modern layout
- ✅ Custom CSS styling
- ✅ Mobile-friendly interface

</td>
</tr>
</table>

---

## 📂 Project Structure

```
Katalog-Toko-New/
│
├── 📁 Database/                    # Database scripts
│   ├── admin.php                   # Admin authentication
│   ├── login.php                   # User login handler
│   └── register.php                # User registration handler
│
├── 📁 Koneksi/                     # Database connections
│   ├── admin_logout.php            # Admin logout
│   ├── connect.php                 # Database connection
│   ├── gagal admin.php             # Admin error handler
│   ├── gagal.php                   # User error handler
│   └── logout.php                  # User logout
│
├── 📁 View/                        # View templates
│   └── 📁 Admin/                   # Admin panel
│       ├── admin.php               # Admin login page
│       ├── aktivitas_user.php      # User activity logs
│       └── dashboard_admin.php     # Admin dashboard
│
├── 📁 Design/                      # Stylesheets
│   └── 📁 Assets/
│       └── halaman.css             # Main stylesheet
│
├── 📁 Produk/                      # Product pages
│   ├── barang elektronik.php       # Electronics catalog
│   ├── makanan.php                 # Food catalog
│   ├── metode pembayaran.php       # Payment methods
│   └── pakaian.php                 # Fashion catalog
│
├── 📄 Navbar.php                   # Navigation bar
├── 📄 footer.php                   # Footer component
├── 📄 form register.php            # Registration form
├── 📄 halaman_utama.php            # Main homepage
├── 📄 index.php                    # Entry point
└── 📄 README.md                    # You are here!
```

---

## 🛠️ Tech Stack

<div align="center">

| Technology | Purpose | Version |
|------------|---------|---------|
| ![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white) | Backend Logic | 7.4+ |
| ![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white) | Database | 5.7+ |
| ![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white) | Structure | 5 |
| ![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white) | Styling | 3 |
| ![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black) | Interactivity | ES6 |

</div>

---

## 📋 Requirements

Before you begin, ensure you have the following installed:

- ✅ **PHP** >= 7.4
- ✅ **MySQL** >= 5.7 or **MariaDB** >= 10.3
- ✅ **Apache Server** (XAMPP, WAMP, or LAMP)
- ✅ **Web Browser** (Chrome, Firefox, Edge)
- ✅ **Git** (optional, for version control)
- ✅ **VS Code** or any code editor

---

## 📦 Installation

### 🚀 Quick Start

```bash
# 1. Clone the repository
git clone https://github.com/BagasHtml/Katalog-Toko-New.git

# 2. Navigate to project directory
cd Katalog-Toko-New

# 3. Move to XAMPP htdocs (Windows)
move Katalog-Toko-New C:\xampp\htdocs\

# Or for Linux/Mac
sudo mv Katalog-Toko-New /opt/lampp/htdocs/
```

### 🗄️ Database Setup

1. **Start XAMPP Services**
   ```
   - Open XAMPP Control Panel
   - Start Apache
   - Start MySQL
   ```

2. **Create Database**
   ```sql
   -- Open phpMyAdmin (http://localhost/phpmyadmin)
   -- Create new database
   CREATE DATABASE katalog_toko;
   ```

3. **Import Database** (if `.sql` file provided)
   ```
   - Select 'katalog_toko' database
   - Click 'Import' tab
   - Choose .sql file
   - Click 'Go'
   ```

4. **Configure Connection**
   
   Edit `Koneksi/connect.php`:
   ```php
   <?php
   $host = "localhost";
   $user = "root";
   $pass = "";
   $db   = "katalog_toko";
   
   $conn = mysqli_connect($host, $user, $pass, $db);
   ?>
   ```

### ▶️ Run The Project

1. Open your browser
2. Navigate to: `http://localhost/Katalog-Toko-New/`
3. 🎉 **Done!** Start exploring

---

## 👤 Default Credentials

### 🔑 Admin Access
```
Username: admin
Password: admin123
URL: http://localhost/Katalog-Toko-New/View/Admin/admin.php
```

### 👥 User Access
```
Register new account or use:
Email: user@example.com
Password: user123
```

> ⚠️ **Important:** Change default passwords in production!

---

## 📸 Screenshots

<div align="center">

### 🏠 Homepage
![Homepage](https://via.placeholder.com/800x400/667eea/ffffff?text=Homepage+Preview)

### 🛍️ Product Catalog
![Products](https://via.placeholder.com/800x400/764ba2/ffffff?text=Product+Catalog)

### 👨‍💼 Admin Dashboard
![Admin](https://via.placeholder.com/800x400/f093fb/ffffff?text=Admin+Dashboard)

</div>

---

## 📖 Documentation

### 🔐 User Functions

**Registration**
```php
// Navigate to: form register.php
// Fill in: Name, Email, Password
// Submit and auto-login
```

**Login**
```php
// Navigate to: index.php
// Enter credentials
// Redirects to: halaman_utama.php
```

**Browse Products**
```php
// Categories available:
// - Electronics: Produk/barang elektronik.php
// - Food: Produk/makanan.php
// - Fashion: Produk/pakaian.php
```

### 👨‍💼 Admin Functions

**Access Dashboard**
```php
// URL: View/Admin/admin.php
// Login with admin credentials
// Access: dashboard_admin.php
```

**Monitor Users**
```php
// URL: View/Admin/aktivitas_user.php
// View user activity logs
// Track login history
```

---

## 🚀 Deployment

### 📤 Deploy to Production

1. **Upload Files**
   ```bash
   # Upload via FTP/SFTP to your web server
   /public_html/katalog-toko/
   ```

2. **Update Database Config**
   ```php
   // Koneksi/connect.php
   $host = "your-server-host";
   $user = "your-db-user";
   $pass = "your-db-pass";
   $db   = "your-db-name";
   ```

3. **Set Permissions**
   ```bash
   chmod 755 -R /public_html/katalog-toko/
   chmod 644 Koneksi/connect.php
   ```

4. **Enable HTTPS**
   - Install SSL certificate
   - Update base URL in config

---

## 🐛 Troubleshooting

<details>
<summary><b>❌ Database Connection Error</b></summary>

**Problem:** `mysqli_connect(): Connection refused`

**Solution:**
```php
// Check MySQL is running
// Verify credentials in connect.php
// Check port (default: 3306)
```
</details>

<details>
<summary><b>❌ Session Error</b></summary>

**Problem:** `session_start(): Failed to read session data`

**Solution:**
```php
// Check session.save_path in php.ini
// Verify folder permissions
// Clear browser cookies
```
</details>

<details>
<summary><b>❌ 404 Not Found</b></summary>

**Problem:** Pages not loading

**Solution:**
```bash
# Check Apache is running
# Verify htdocs path
# Check file permissions
```
</details>

---

## 🗺️ Roadmap

- [ ] Add shopping cart functionality
- [ ] Implement payment gateway integration
- [ ] Add product search feature
- [ ] Create order management system
- [ ] Add email notifications
- [ ] Implement product reviews
- [ ] Add multi-language support
- [ ] Create mobile app version

---

## 🤝 Contributing

Contributions are what make the open-source community amazing! Any contributions you make are **greatly appreciated**.

### How to Contribute

1. **Fork** the Project
2. Create your Feature Branch
   ```bash
   git checkout -b feature/AmazingFeature
   ```
3. Commit your Changes
   ```bash
   git commit -m 'Add some AmazingFeature'
   ```
4. Push to the Branch
   ```bash
   git push origin feature/AmazingFeature
   ```
5. Open a **Pull Request**

### 📝 Contribution Guidelines

- Follow PSR coding standards
- Write clean, documented code
- Test your changes thoroughly
- Update documentation if needed

---

## 📄 License

Distributed under the MIT License. See `LICENSE` for more information.

```
MIT License

Copyright (c) 2024 Bagas Tresna Nanda MS

Permission is hereby granted, free of charge, to any person obtaining a copy...
```

---

## 👨‍💻 Author

<div align="center">

### **Bagas Tresna Nanda MS**

[![GitHub](https://img.shields.io/badge/GitHub-BagasHtml-181717?style=for-the-badge&logo=github)](https://github.com/BagasHtml)
[![Instagram](https://img.shields.io/badge/Instagram-bagas__tresnaa__-E4405F?style=for-the-badge&logo=instagram&logoColor=white)](https://instagram.com/bagas_tresnaa_)
[![Portfolio](https://img.shields.io/badge/Portfolio-Visit-000000?style=for-the-badge&logo=vercel&logoColor=white)](https://blog-bagas2.vercel.app)

**🎓 Student at SMK Taruna Bangsa, Bekasi**  
**📍 North Bekasi, West Java — Indonesia**

</div>

---

## 💖 Support

<div align="center">

If this project helped you, please consider:

⭐ **Star** this repository  
🍴 **Fork** for your own use  
📢 **Share** with others  
☕ **Buy me a coffee** (optional)

[![GitHub Stars](https://img.shields.io/github/stars/BagasHtml/Katalog-Toko-New?style=social)](https://github.com/BagasHtml/Katalog-Toko-New/stargazers)
[![GitHub Forks](https://img.shields.io/github/forks/BagasHtml/Katalog-Toko-New?style=social)](https://github.com/BagasHtml/Katalog-Toko-New/network/members)

</div>

---

## 📞 Contact & Support

<div align="center">

**Need help or have questions?**

📧 Email: your.email@example.com  
💬 Issues: [GitHub Issues](https://github.com/BagasHtml/Katalog-Toko-New/issues)  
📱 Instagram: [@bagas_tresnaa_](https://instagram.com/bagas_tresnaa_)

</div>

---

<div align="center">

### 🙏 Thank You for Visiting!

**Made with ❤️ by Bagas Tresna Nanda MS**

<img src="https://raw.githubusercontent.com/andreasbm/readme/master/assets/lines/rainbow.png" width="100%">

![Visitor Count](https://komarev.com/ghpvc/?username=BagasHtml&repo=Katalog-Toko-New&color=blueviolet&style=for-the-badge)

</div>
