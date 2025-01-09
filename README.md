# Memorization Center Project

This project is created by me for a memorization center, using PHP, Tailwind CSS, and HTML. It is a full-stack project designed to manage and distribute students to classes. The system allows an administrator to manage students, teachers, and classes efficiently.

## Features

### User Abilities:
- **Home**: View the homepage.
- **About**: View information about the center.
- **Classes**: 
  - Search for your name and find your assigned classes.
  - Register and log in to the system.

### Admin Abilities:
- Everything that a user can do, plus:
  - View and edit the information of all users.
  - Change user roles (e.g., make a user an admin).
  - Add or edit classes.
  - Access the hidden **Dashboard** page, where you can:
    - Distribute students to classes.

### Distribution:
- There is a **Distribute** button on both the Dashboard and Classes pages. Admins can click this to automatically distribute students to their respective classes.

---

## Prerequisites

Before running the project, ensure you have the following setup:

1. **Database Configuration**:

   - Create a database named `bnka` running on port `3306` of your local host.
   - Change these settings as needed in the `configuration.php` file for (name, host, port).
   - Modify the `Database.php` file to configure the database connection (user, password).

2. **Create the necessary tables**:

- **Users Table**:
  - `id`: primary key, auto-increment, INT(255).
  - `classes_id`: INT(255), nullable, default is null, foreign key for users table.
  - `name`: VARCHAR(255), default is 'NON'.
  - `email`: VARCHAR(255), unique.
  - `password`: VARCHAR(255).
  - `is_admin`: TINYINT(1), default is 0.
  - `DOB`: DATE, nullable, default is null.

- **Classes Table**:
  - `id`: INT(255), auto-increment, primary key.
  - `class_name`: VARCHAR(255), nullable, default is 'NEW ROOM'.
  - `teacher_name`: VARCHAR(255), nullable, default is 'Dr. Someone'.

### Relations:
- The `users` table has a relation with the `classes` table.
- The foreign key `classes_id` on the `users` table references the `id` of the `classes` table.
- Both tables have cascading deletes and updates.

---

## Running the Project

1. Clone the repository to your local machine.

2. Navigate to the project directory and run the PHP server:
   ```bash
   php -S localhost:3000 -t public
