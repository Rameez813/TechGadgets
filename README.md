# 🛠️ TechGadgets Backend (PHP + MySQL)

Handles order submissions from the frontend.

## Endpoints

- `submit_order.php`: Receives POST data and saves orders into the MySQL database.

## Setup

1. Update `db.php` with your DB credentials.
2. Import the provided SQL file into your database.
3. Deploy on a PHP-supported server (e.g., InfinityFree, 000WebHost, cPanel).

✅ Make sure your frontend form submits data to `submit_order.php` using POST.

## SQL Table

```sql
CREATE DATABASE IF NOT EXISTS techgadgets;

USE techgadgets;

CREATE TABLE IF NOT EXISTS orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    phone VARCHAR(20),
    address TEXT,
    email VARCHAR(100),
    product VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```
