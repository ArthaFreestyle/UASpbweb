# Marketplace Project

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About

This project is a marketplace application built with Laravel for managing products, users, and orders. It includes features for browsing products, managing user accounts, and processing transactions.

## Prerequisites

Before getting started, ensure that you have the following tools installed:

- PHP >= 8.1
- Composer
- Node.js and npm
- Laravel Framework

## Installation

Follow these steps to set up the project locally:

1. **Create a Database:**
   - Create a database for the project in your preferred database system.

2. **Install Composer:**
   - Download and install Composer from [getcomposer.org](https://getcomposer.org/download/).

3. **Clone the Project:**
   - Clone the repository to your local machine using the following command:
     ```bash
     git clone <repository-url>
     ```

4. **Set Up Environment Configuration:**
   - Rename the `.env.example` file to `.env` in your project root directory.
   - Open the `.env` file and fill in the database information:
     ```bash
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=your_database_name
     DB_USERNAME=your_database_username
     DB_PASSWORD=your_database_password
     ```

5. **Install Dependencies:**
   - Open the console and navigate to your project root directory:
     ```bash
     cd <project-root>
     ```
   - Run the following command to install PHP dependencies:
     ```bash
     composer install
     ```

6. **Generate Application Key:**
   - Generate the application key by running:
     ```bash
     php artisan key:generate
     ```

7. **Migrate the Database:**
   - Run database migrations to set up the schema:
     ```bash
     php artisan migrate
     ```

8. **Seed the Database (Optional):**
   - If you have seeders, run the following to populate the database with sample data:
     ```bash
     php artisan db:seed
     ```

9. **Run the Development Server:**
   - Start the Laravel development server:
     ```bash
     php artisan serve
     ```
   - The application will be accessible at `http://localhost:8000`.

10. **Compile Assets (Tailwind CSS):**
    - Compile the front-end assets with:
      ```bash
      npm run dev
      ```

## Usage

Once the application is running, you can:

- Browse products
- Add items to the cart
- Register and log in as a user
- Manage user profiles and order history

## Contributing

If you'd like to contribute to this project, please fork the repository, create a branch for your feature, and submit a pull request.

## License

This project is licensed under the [MIT License](LICENSE).
