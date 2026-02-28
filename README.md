# Laravel Travel Agency – Tour & Package Booking System

✈️ **Modern Travel Agency Web Application** built with **Laravel** — helping users discover destinations, explore tour packages, book trips, and manage bookings seamlessly. Admins handle packages, destinations, inquiries, and more.

Powered by **Laravel** (with Eloquent ORM), **MySQL** database (full schema in `travelagency.sql`), **Tailwind CSS** + **Vite** for responsive frontend, and Blade templating.

Ideal for learning Laravel in real-world travel projects, portfolio showcase, or starting your own agency site.

![Banner](https://placehold.co/1200x400/0ea5e9/ffffff/png?text=Laravel+Travel+Agency+Booking&font=roboto)  
<!-- Reliable placeholder (sky blue travel theme) – replace with real screenshot: upload to repo (e.g. /public/assets/banner.png) and update to ![Banner](/assets/banner.png) -->

## ✨ Key Features (Typical & Planned)
Based on standard Laravel travel booking systems:

- **Frontend / User Side**:
  - Homepage with featured tours, popular destinations, sliders & search bar
  - Browse tour packages by category (adventure, family, luxury, international/domestic)
  - Package details: itinerary, inclusions, pricing, images, availability
  - Search & filter tours (destination, dates, price range, duration)
  - Book package: select dates, travelers, submit inquiry/booking
  - User registration/login, profile, booking history

- **Admin / Backend Side**:
  - Dashboard: overview of bookings, inquiries, revenue stats
  - CRUD for Tour Packages, Destinations, Categories
  - Manage bookings: view, approve/reject, update status (pending → confirmed → completed)
  - Handle user inquiries/contact forms
  - Upload images for packages/destinations

- **System-Wide**:
  - Secure authentication & role-based access (user/admin)
  - Responsive design with Tailwind CSS
  - Form validation, error handling, success messages
  - MySQL database with migrations or direct SQL import (`travelagency.sql`)

## 🛠️ Tech Stack
| Technology              | Purpose                              | Official Link |
|-------------------------|--------------------------------------|---------------|
| Laravel                 | Backend framework & routing          | [laravel.com/docs](https://laravel.com/docs/11.x) |
| PHP                     | Server-side logic                    | 8.1+          |
| MySQL                   | Database (schema in travelagency.sql)| [mysql.com](https://www.mysql.com) |
| Eloquent ORM            | Models & database queries            | [laravel.com/docs/eloquent](https://laravel.com/docs/11.x/eloquent) |
| Blade + Tailwind CSS    | Views & modern styling               | [tailwindcss.com/docs](https://tailwindcss.com/docs) |
| Vite                    | Asset bundling & hot reload          | [laravel.com/docs/vite](https://laravel.com/docs/11.x/vite) |
| Composer                | PHP dependencies                     | [getcomposer.org](https://getcomposer.org) |

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

## 🚀 Quick Start – Run Locally

### Prerequisites
- PHP 8.1+  
- Composer  
- Node.js + npm (for Vite/Tailwind)  
- MySQL server  

### Steps
1. Clone the repository
   ```bash
   git clone https://github.com/hanzla8/TravelAgency.git
cd TravelAgency

composer install
npm install

npm run dev    # Watch mode during development
# OR npm run build for production

cp .env.example .env
php artisan key:generate


### Quick Next Steps After Committing
- Add repo **description**: "Laravel Travel Agency Booking System – Tour packages, destinations, bookings with MySQL"
- Add topics: `laravel`, `php`, `travel-agency`, `tour-booking`, `booking-system`, `tailwindcss`, `mysql`, `web-app`
- Upload screenshots (homepage, package view, booking form, admin) → edit paths
- Banner: Sky blue placeholder works; customize with travel-themed image later

Direct copy-paste ready — detailed, link-rich where useful, and professional. If you share more specifics (e.g., exact models like Tour/Package/Booking, or added features), I can refine it! 🚀
