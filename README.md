# University Community Portal

Welcome to the University Community Portal! This platform serves as a dynamic space for members of our esteemed university community to engage in meaningful discussions, share valuable information, and foster connections.

## Admin Panel Highlights

- ✅ Responsive Sidebar
- ✅ Intuitive Dashboard
- ✅ Seamless Add Post Functionality
- ✅ Comprehensive View Posts Page
- ✅ Streamlined Edit Post Page
- ✅ Reader-Friendly Post Display
- ✅ Admins Accounts Management
- ✅ Users Accounts Oversight
- ✅ Efficient Users Comments Moderation
- ✅ Secure Admin Registration
- ✅ Access-Controlled Admin Login
- ✅ User-Focused Account Updates

## Main Website Features

- ✅ Smart Header with Integrated Search Bar (Vanilla JavaScript)
- ✅ Engaging Home Page Experience
- ✅ Thoughtful Post Organization
- ✅ In-Depth Post Viewing Capability
- ✅ Interactive Comments Section
- ✅ User Engagement Tracking (Likes)
- ✅ Author Information Showcase
- ✅ Categorized Content Exploration
- ✅ Robust Search Functionality
- ✅ User-Centric Authentication (Login/Register)
- ✅ User Profile Management

## Technologies Utilized

- PHP (PDO with prepared statements)
- MySQL / MariaDB
- JavaScript (Vanilla)
- HTML
- CSS
- Font Awesome (icons, via CDN)

## Getting Started

1. Clone the repository into your local server's web root (e.g. `C:\xampp\htdocs\Senior_Project_LIU_Community`).
2. Start Apache and MySQL (e.g. from the XAMPP control panel).
3. Create a database named `liu_community_db`. A SQL dump is not included in this repository, so the tables have to be created manually. The code uses these tables and columns:

   | Table      | Columns |
   |------------|---------|
   | `admin`    | `id`, `name`, `password` |
   | `users`    | `id`, `name`, `email`, `password` |
   | `posts`    | `id`, `admin_id`, `name`, `title`, `content`, `category`, `image`, `date`, `status` (`active` / `deactive`) |
   | `comments` | `id`, `post_id`, `admin_id`, `user_id`, `user_name`, `comment`, `date` |
   | `likes`    | `id`, `user_id`, `admin_id`, `post_id` |

   `id` columns should be `AUTO_INCREMENT` and the `date` columns should default to the current timestamp. Passwords are stored as SHA-1 hashes.
4. The database connection is configured in `components/connections.php`. It reads `DB_HOST`, `DB_NAME`, `DB_USER` and `DB_PASSWORD` from the environment and falls back to the XAMPP defaults (`localhost`, `liu_community_db`, `root`, empty password).
5. New admins can only be registered by a logged-in admin, so insert the first admin row directly into the `admin` table (with `SHA1('your_password')` as the password).
6. Open `http://localhost/Senior_Project_LIU_Community/home.php` for the main site and `http://localhost/Senior_Project_LIU_Community/admin/admin_login.php` for the admin panel. User registration only accepts `@students.liu.edu.lb` email addresses.

## Contribution Guidelines

If you're interested in contributing to the enhancement of this project, kindly adhere to the following steps:

1. Fork the repository.
2. Create a dedicated branch for your modifications.
3. Implement your enhancements or bug fixes.
4. Commit and push your changes.
5. Submit a pull request.

We welcome contributions to fortify and expand the platform's capabilities.

Thank you for your collaboration! 🚀
