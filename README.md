# Morning Star Printing Press Co. - Corporate Website

A professional, modern, and responsive corporate website for Morning Star Printing Press Co., built with Laravel 12, Bootstrap 5, and modern web technologies.

## 🎯 Project Overview

This is a complete Laravel 12 corporate website for Morning Star Printing Press Co., featuring:

- ✅ Responsive design (mobile-first approach)
- ✅ Professional homepage with hero section
- ✅ About Us page with company information
- ✅ Services showcase page
- ✅ Contact form with database storage
- ✅ Admin Panel with secure authentication
- ✅ Service management system
- ✅ Contact message management
- ✅ Dashboard with statistics
- ✅ Modern UI/UX with animations
- ✅ SEO-friendly structure

## 🛠️ Technology Stack

- **Backend**: Laravel 12, PHP 8.3+
- **Database**: MySQL
- **Frontend**: Blade Template Engine, Bootstrap 5
- **Authentication**: Laravel Breeze
- **Styling**: Bootstrap 5, Custom CSS
- **JavaScript**: Vanilla ES6, AOS (Animate On Scroll)
- **Charts**: Chart.js
- **Icons**: Font Awesome 6
- **Image Storage**: Laravel Storage

## 📋 Prerequisites

Before installing, ensure you have:

- PHP 8.3 or higher
- MySQL 8.0 or higher
- Composer installed
- Node.js and npm (for asset compilation)

## 🚀 Installation Guide

### 1. Clone/Download the Project

```bash
cd c:\xampp\htdocs\Website
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Environment Configuration

```bash
cp .env.example .env
```

Edit `.env` file with your database credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=morning_star_printing
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. Create Database

Create a new MySQL database:

```sql
CREATE DATABASE morning_star_printing CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

### 6. Run Migrations

```bash
php artisan migrate
```

### 7. Seed the Database (Optional)

```bash
php artisan db:seed
```

This creates:
- 13 default services
- Admin user (email: admin@morningstar.com, password: password123)

### 8. Create Storage Link

```bash
php artisan storage:link
```

This creates a symbolic link from `storage/app/public` to `public/storage`.

### 9. Install Node Dependencies (Optional)

```bash
npm install
npm run build
```

### 10. Start Development Server

```bash
php artisan serve
```

Visit: `http://localhost:8000`

## 📁 Project Structure

```
Website/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   ├── Middleware/
│   │   └── Requests/
│   ├── Models/
│   └── Providers/
├── bootstrap/
│   └── app.php
├── config/
│   ├── app.php
│   ├── database.php
│   ├── cache.php
│   ├── filesystems.php
│   ├── queue.php
│   └── session.php
├── database/
│   ├── migrations/
│   └── seeders/
├── public/
│   ├── index.php
│   └── storage/
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   ├── pages/
│   │   ├── admin/
│   │   ├── auth/
│   │   └── components/
│   ├── css/
│   └── js/
├── routes/
│   ├── web.php
│   ├── api.php
│   └── auth.php
├── storage/
│   ├── app/
│   ├── framework/
│   └── logs/
└── README.md
```

## 🎨 Features

### Public Pages

- **Home**: Hero section, featured services, statistics, call-to-action
- **About Us**: Company history, mission, vision, values
- **Services**: Complete service catalog with details
- **Contact**: Contact form, location map, business information

### Admin Panel

- **Dashboard**: Statistics and recent messages
- **Services Management**: Create, read, update, delete services
- **Contact Messages**: View and manage customer inquiries
- **User Authentication**: Secure login system

## 🔐 Admin Login

Default admin credentials:
- **Email**: admin@morningstar.com
- **Password**: password123

⚠️ **Important**: Change these credentials immediately after first login!

## 📧 Company Information

**Morning Star Printing Press Co.**
- **Address**: Bolton St., Davao City, Philippines 8000
- **Phone**: 0917 685 0444, 0933 859 8980, (082) 284 9583
- **Email**: morningstardavao98@gmail.com, morningstarpress2015@gmail.com, morningstardavao@gmail.com
- **Established**: 2015

## 🎨 Color Palette

- **Primary Blue**: #0D47FF
- **Accent Blue**: #0056D2
- **White**: #FFFFFF
- **Background**: #F8F9FA
- **Text**: #333333

## 📱 Responsive Design

The website is fully responsive and optimized for:

- Desktop (1920px and above)
- Tablet (768px - 1919px)
- Mobile (320px - 767px)

## 🔒 Security Features

- CSRF Protection on all forms
- Input validation with Form Requests
- Secure authentication with Laravel Breeze
- Password hashing
- Middleware authorization
- SQL injection prevention via Eloquent ORM

## 🚀 Performance Optimization

- Lazy loading images
- Compressed assets
- Smooth scrolling
- Animated elements with AOS
- Optimized database queries
- Pagination for list views

## 📚 Database Tables

### Users
- Stores admin user information
- Role-based access control

### Services
- All printing services
- Service details, images, descriptions

### Contact Messages
- Customer inquiries
- Read/unread status tracking

### Hero Images
- Landing page banner images

### Website Settings
- Global website configuration

## 🔧 Maintenance

### Clear Cache

```bash
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

### Database Backup

```bash
php artisan tinker
>>> DB::statement('SHOW TABLES')
```

### Check Status

```bash
php artisan down
php artisan up
```

## 📝 Development Tips

1. **Add New Service**: Go to Admin Panel > Services > Add New
2. **View Messages**: Admin Panel > Messages
3. **Update Profile**: Modify user information in database
4. **Reset Database**: `php artisan migrate:refresh --seed`

## 🐛 Troubleshooting

### Database Connection Error
- Verify MySQL is running
- Check DB_HOST, DB_PORT, DB_USERNAME, DB_PASSWORD in .env

### Storage Link Not Working
```bash
rm public/storage
php artisan storage:link
```

### Permission Error
```bash
chmod -R 755 storage bootstrap/cache
```

### 404 on Admin Pages
- Clear routes cache: `php artisan route:cache --clear`
- Check middleware in routes/web.php

## 📞 Support

For issues or questions:
- Contact: morningstardavao98@gmail.com
- Phone: 0917 685 0444

## 📄 License

MIT License - Feel free to use and modify.

---

**Created**: 2025
**Last Updated**: July 5, 2026
**Version**: 1.0.0
