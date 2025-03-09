# 🚀 DomDev Shortlink  

DomDev Shortlink is a **simple and efficient URL shortener** built with PHP and MySQL. It allows users to create short, shareable links with custom codes and track usage statistics.  

## 🌟 Features  

✔️ **Custom Short Links** – Generate personalized short URLs.  
✔️ **Click Tracking** – Monitor how many times a link is accessed.  
✔️ **Admin Panel** – Manage, view, and delete short links.  
✔️ **Responsive Design** – Works smoothly on all devices.  
✔️ **Green-Themed UI** – A clean and modern look with green buttons.  

---

## 📌 Installation Guide  

### 1️⃣ Clone the Repository  
```bash
git clone https://github.com/domdevofficial/DomDev-Shortlink.git
cd DomDev-Shortlink
```  

### 2️⃣ Set Up the Database  
- Import `database.sql` into your MySQL database.  
- Configure the database credentials inside `config.php`.  

### 3️⃣ Run DomDev Shortlink  
- Start a local server (XAMPP, LAMP, etc.).  
- Open `index.php` in your browser.  

---

## 🗂️ Project Structure  

```
/DomDev-Shortlink
│── admin.php          # Admin panel for managing links
│── config.php         # Database configuration
│── delete.php         # Delete short links
│── index.php          # URL shortener interface
│── redirect.php       # Redirect users to original URL
│── database.sql       # Database setup file
│── README.md          # Documentation
```

---

## 🎯 How to Use  

1️⃣ Open `index.php` in a browser.  
2️⃣ Enter a long URL and generate a short link.  
3️⃣ Use the short link to redirect to the original URL.  
4️⃣ Access `admin.php` to manage existing links.  

---

## ⚠️ Security Notes  

🔒 Keep `config.php` secure and **never expose database credentials.**  
🛑 Unauthorized redistribution or modification is **strictly prohibited.**  

---

## 🏆 Credits  
Developed with 💙 by **DomDev**  

📌 *DomDev Shortlink is continuously improving—your feedback helps!*  
