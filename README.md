# 🖥️ PC Builder E-Commerce Platform 🎮🛒

## 🚀 Overview

The **PC Builder E-Commerce Platform** is a powerful web application that allows users to build, validate, and purchase custom PCs effortlessly. Designed for gamers, PC enthusiasts, and small businesses, this platform ensures component compatibility, cost transparency, and a seamless checkout experience. 🎯💡✔️

## 🏗️ Tech Stack

- **Frontend:** Angular
- **Backend:** Laravel
- **Database:** MySQL

## 🌟 Features

### 🏆 User-Facing Features

- **User Authentication:** Register and log in using email and password.
- **Component Browsing:** Search and filter PC components by category, price, brand, and compatibility.
- **PC Builder Tool:** Create custom builds, check compatibility in real-time, and receive suggested alternatives.
- **Shopping Cart & Checkout:** Save multiple builds, proceed with guest checkout, and pay via Stripe or PayPal.
- **Order Tracking:** View order status and track shipments.

### 🔧 Admin-Facing Features

- **Component Management:** Add, edit, and manage inventory levels.
- **Order Management:** Update order statuses and track shipments.

## 🛠️ Installation & Setup

### 📌 Prerequisites

- PHP 8+ and Composer
- Node.js and NPM
- MySQL Database

### 🖥️ Backend (Laravel) Setup

1. Clone the repository:
   ```bash
   git clone <repository_url>
   cd backend
   ```
2. Install dependencies:
   ```bash
   composer install
   ```
3. Configure environment variables:
   ```bash
   cp .env.example .env
   ```
   - Update `.env` with database credentials.
4. Generate the application key:
   ```bash
   php artisan key:generate
   ```
5. Run migrations and seed the database:
   ```bash
   php artisan migrate --seed
   ```
6. Start the server:
   ```bash
   php artisan serve
   ```

### 🎨 Frontend (Angular) Setup

1. Navigate to the frontend folder:
   ```bash
   cd frontend
   ```
2. Install dependencies:
   ```bash
   npm install
   ```
3. Start the development server:
   ```bash
   ng serve
   ```

## 🌐 API Endpoints (Basic Examples)

- `POST /api/register` - Register a new user.
- `POST /api/login` - Authenticate a user.
- `GET /api/components` - Retrieve a list of available components.
- `POST /api/build` - Validate and create a PC build.
- `POST /api/checkout` - Process payments and confirm an order.

## 🤝 Contributing

1. Fork the repository.
2. Create a new branch:
   ```bash
   git checkout -b feature-branch
   ```
3. Commit and push changes:
   ```bash
   git commit -m "Your message"
   git push origin feature-branch
   ```
4. Create a pull request.

## 📜 License

This project is licensed under the MIT License.

---

✨ Feel free to customize and improve this README to fit your project's needs! 🚀📝💻
