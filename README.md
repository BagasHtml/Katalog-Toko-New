```markdown
# Katalog Toko — PHP Store Catalog System

A simple store catalog system built using native PHP.  
This project provides product listings, user authentication, admin dashboard, and basic store navigation.

```
## 🚀 Features

### 🔐 Authentication
- User login
- User registration
- Logout system
- Error handling for invalid credentials

### 🛒 Product Catalog
- Electronic products
- Food products
- Fashion products
- Payment method page

### 🧭 Navigation & UI
- Dynamic navbar
- Footer
- Homepage layout
- Basic CSS styling inside `Design/Assets/halaman.css`

### 🛠 Admin Panel
- Admin login & logout
- User activity monitoring
- Admin dashboard interface

---

## 📂 Project Structure

```

Projek/
│── Database/<br>
│   ├── admin.php<br>
│   ├── login.php<br>
│   ├── register.php<br>
│<br>
│── Koneksi/<br>
│   ├── admin_logout.php<br>
│   ├── connect.php<br>
│   ├── gagal admin.php<br>
│   ├── gagal.php<br>
│   ├── logout.php<br>
│<br>
│── View/<br>
│   ├── Admin/<br>
│   │   ├── admin.php<br>
│   │   ├── aktivitas_user.php<br>
│   │   ├── dashboard_admin.php<br>
│   │<br>
│   ├── Design/<br>
│       ├── Assets/<br>
│       │   └── halaman.css<br>
│<br>
│── Produk/<br>
│   ├── barang elektronik.php<br>
│   ├── makanan.php<br>
│   ├── metode pembayaran.php<br>
│   ├── pakaian.php<br>
│<br>
│── Navbar.php<br>
│── footer.php<br>
│── form register.php<br>
│── halaman_utama.php<br>
│── index.php<br>
│── README.md<br>

```
## 🛠️ Tech Stack
- PHP Native
- MySQL / MariaDB
- HTML & CSS
- XAMPP (Local Development)
- VS Code

---

## 📌 Requirements
- PHP 7.4 or above
- MySQL database
- XAMPP or equivalent local server
- Web browser
- Git (optional)

---

## ⚙️ Installation Guide
### 1. Clone the repository

```bash
git clone https://github.com/BagasHtml/Katalog-Toko-New.git

````
### 2. Move the folder into XAMPP's htdocs

```
xampp/htdocs/
```

### 3. Import database (if included)

Use phpMyAdmin → import `.sql` file.

### 4. Start Apache & MySQL

From XAMPP Control Panel.

### 5. Run the project

Open in browser:

```
http://localhost/Katalog-Toko-New/
```

---

## 📬 Contributing

Contributions, issues, and feature requests are welcome.
Feel free to create a pull request.

---

## ⭐ Support

If this project helps you, please give it a ⭐ on GitHub!
