# 🛠️ اتصال به پایگاه داده با PDO – نمونه کامل CRUD با PHP

[![Build Status](https://img.shields.io/badge/build-passing-brightgreen)](https://github.com/MansourLiaghat/pdo)  
[![License](https://img.shields.io/badge/license-MIT-blue)](LICENSE)  
[![Version](https://img.shields.io/badge/version-1.0.0-blue)](https://github.com/MansourLiaghat/pdo/releases)

پروژه‌ی **Connect To DataBase with PDO** یک نمونه آموزشی کامل از عملیات CRUD (ایجاد، خواندن، بروزرسانی، حذف) با استفاده از PHP و پایگاه‌داده MySQL است که از PDO برای اتصال امن و انعطاف‌پذیر به دیتابیس بهره می‌برد.

## 📚 فهرست مطالب

- [ویژگی‌ها](#-ویژگیها)
- [پیش‌نیازها](#-پیشنیازها)
- [نصب و راه‌اندازی](#-نصب-و-راهاندازی)
- [نحوه استفاده](#-نحوه-استفاده)
- [ساختار پروژه](#-ساختار-پروژه)
- [مجوز](#-مجوز)
- [اطلاعات تماس](#-اطلاعات-تماس)

## ✨ ویژگی‌ها

- اتصال ایمن به دیتابیس با PDO  
- عملیات کامل CRUD روی جدول کاربران  
- ساختار ساده، تمیز و قابل درک  
- مناسب برای شروع یادگیری کار با پایگاه داده در PHP  

## ⚙️ پیش‌نیازها

- PHP نسخه 7.4 یا بالاتر  
- MySQL  
- محیط اجرا مانند XAMPP، Laragon یا MAMP

## 🚀 نصب و راه‌اندازی

1. کلون کردن پروژه:

   ```bash
   git clone https://github.com/MansourLiaghat/pdo.git
   cd pdo
   ```

2. ساخت دیتابیس `user_db` و اجرای کوئری ایجاد جدول `user`:

   ```sql
   CREATE TABLE user (
     id INT AUTO_INCREMENT PRIMARY KEY,
     name VARCHAR(100),
     email VARCHAR(100),
     phone VARCHAR(20)
   );
   ```

3. تنظیم اطلاعات اتصال در فایل `connect.php`

4. اجرای فایل‌ها از طریق مرورگر برای تست عملکرد

## 🧪 نحوه استفاده

- `insert.php` برای افزودن کاربر  
- `select.php` برای نمایش لیست کاربران  
- `update.php` برای ویرایش اطلاعات  
- `delete.php` برای حذف کاربر  

## 📁 ساختار پروژه

```
pdo/
├── connect.php      # اتصال به دیتابیس با PDO
├── insert.php       # افزودن اطلاعات
├── select.php       # نمایش اطلاعات
├── update.php       # بروزرسانی اطلاعات
├── delete.php       # حذف اطلاعات
└── README.md        # فایل مستندات
```

## 📄 مجوز

این پروژه تحت مجوز MIT منتشر شده است. برای اطلاعات بیشتر، فایل [LICENSE](LICENSE) را مشاهده کنید.

## 📬 اطلاعات تماس

- GitHub: [MansourLiaghat](https://github.com/MansourLiaghat)
