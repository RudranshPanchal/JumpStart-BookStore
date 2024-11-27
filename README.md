<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# **📚 JumpStart-BookStore**  

## **🎯 Objective**   
JumpStart-BookStore aims to provide an **easy and accessible platform** for users to browse and purchase books online, making it convenient to access books from anywhere, anytime. This project is designed to automate the process of an offline bookstore, offering a **digital solution** to overcome challenges presented by the Covid-19 crisis.

## **💡 Key Objectives**   
- **Login/Logout**: Users can securely sign in and sign out of their accounts. 🔐  
- **Search Facility**: Books can be searched based on various factors like **genre**, **author**, **title**, etc. 🔍  
- **Manage User Orders and Data**: Users can manage their orders and personal data within the platform. 📦  
- **Manage Books Information**: Admins can manage the inventory of books, including adding, editing, or deleting books. 📚  
- **Track Book Records**: Admins can edit, add, and update book records, providing accurate results for users. 🔄  
- **Order and Payment Tracking**: The system tracks orders and payments to ensure **seamless transactions**. 💳

## **👨‍💻 Problem Being Solved** 
The main goal of this project is to **digitize** the process for JumpStart BookStore, addressing the challenges posed by Covid-19 and enabling customers to shop **online**. By implementing this online store, the project automates and simplifies **inventory and order management**, saving time and resources for both users and admins.

## **🛠️ Technologies Used**   
### **Front-End:**  
- **HTML**  
- **CSS**  
- **PHP**  
- **JavaScript**  
- **Bootstrap** (for responsive design)

### **Back-End:**  
- **PHP Laravel** (framework for managing back-end operations)

### **Payment Integration:**
- **Razorpay**

### **Database:**  
- **PhpMyAdmin** / **MySQL** / **MongoDB**

## **🌟 Features** 

### **User Features:**  
- **Sign up and login** for a personalized experience 👤  
- Browse and search for books by different criteria (e.g., genre, author, title) 🔍  
- **Order books** and track order status 📦

### **Admin Features:**  
- **Manage books** in the store (add, edit, delete) 📚  
- **Manage orders and payments** 💳  
- View user information and order history 📝

## **⚙️ Installation Instructions**

1. **Clone the repository**:  
   ```bash
   git clone https://github.com/yourusername/JumpStart-BookStore.git

2. Install Composer dependencies:
   ```bash
   cd JumpStart-BookStore  
    composer install
   
3. Set up environment variables:

   Copy .env.example to .env:
   ```bash
   cp .env.example .env

4. Generate application key:
   ```bash
   php artisan key:generate

5. Set up your database:

   Configure your database settings in the .env file (DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD).

6. Run the migrations to set up the database tables:
   ```bash
   php artisan migrate

7. Serve the application:
   ```bash
   php artisan serve
   
8. Visit the application at http://localhost:8000.

---

## 📸 Screenshots 

![image](https://github.com/user-attachments/assets/36014ee1-45a0-423a-bc5d-a0fee77e8971)

![image](https://github.com/user-attachments/assets/ef14c63f-9f60-41ac-ab46-bae7e13f7d1e)

![image](https://github.com/user-attachments/assets/3ec9f2d8-260c-4cc7-a9ec-41a86932e3d2)

![image](https://github.com/user-attachments/assets/0d2a5f6d-be77-4652-9a8e-701a8c383756)

![image](https://github.com/user-attachments/assets/c652d0c4-d034-409a-864a-d63c2d652715)

![image](https://github.com/user-attachments/assets/71021d99-91bf-4c3b-aa97-148029e52ea6)

![image](https://github.com/user-attachments/assets/218564a4-b638-423a-998d-0751fc16a8da)

![image](https://github.com/user-attachments/assets/3f16bd32-50a4-49d0-9712-55193bbf0c55)

![image](https://github.com/user-attachments/assets/08f35b39-59e8-409b-96d5-d5183797f9d9)

![image](https://github.com/user-attachments/assets/10dc726a-d698-4ab0-bdac-4163780aab54)



---

## 🚀 Future Enhancements##
Integration of more payment gateways (e.g., Stripe, Paypal) 💳
Mobile application support for on-the-go browsing and shopping 📱
Advanced filtering and recommendation system based on user preferences 🔮

## *Made with ❤️ by Rudransh Panchal* ##



## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
