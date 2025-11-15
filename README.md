# Web Portfolio Project

## Project Structure

```
.
├── app/                    # Application core files
│   ├── Controllers/        # Business logic controllers
│   ├── Models/             # Database models
│   ├── Views/              # Template files
│   └── Helpers/            # Utility functions
├── assets/                 # Static assets
│   ├── css/                # Stylesheets
│   ├── js/                 # JavaScript files
│   └── images/             # Image assets
├── config/                 # Configuration files
├── includes/               # Shared components (header, footer, etc.)
├── modules/                # Application modules
│   ├── auth/               # Authentication system
│   ├── dashboard/          # Admin dashboard
│   ├── articles/           # Articles module
│   ├── login/              # Login module
│   └── register/           # Registration module
├── uploads/                # Uploaded files
└── index.php              # Main entry point
```

## Key Features

1. **MVC Architecture**: Organized code following Model-View-Controller pattern
2. **Modular Structure**: Separate modules for different functionalities
3. **Security**: Prepared statements to prevent SQL injection
4. **Responsive Design**: Mobile-friendly interface using Tailwind CSS
5. **Rich Text Editing**: Quill.js integration for article creation
6. **User Authentication**: Secure login/logout system
7. **Article Management**: Create, read, and display articles with images
8. **Dashboard Interface**: Admin panel for content management

## Setup Instructions

1. Import the `web_baru.sql` file into your database
2. Update the database configuration in `config/database.php`
3. Ensure the `uploads/` directory is writable
4. Start your XAMPP server and navigate to the project directory

## Modules

### Authentication
- User login and registration with password security
- Session management for user authentication
- Protected admin areas

### Dashboard
- Admin panel for content management
- Article creation interface with rich text editor
- Sidebar navigation and user profile management

### Articles
- Article listing and display
- Rich text content with image support
- Individual article pages with author and date information

### Login/Register
- Dedicated login and registration pages
- Form validation and user creation
- Password handling and session initialization

## Technologies Used

- **Backend**: PHP 7.4+
- **Database**: MySQL/MariaDB
- **Frontend**: HTML5, CSS3, JavaScript
- **Styling**: Tailwind CSS
- **Rich Text Editor**: Quill.js
- **Animations**: GSAP (GreenSock Animation Platform)
- **UI Components**: Flowbite
- **Security**: Prepared statements for database queries

## Database Structure

### tb_user
- `id_user` (INT, PRIMARY KEY, AUTO_INCREMENT)
- `nama` (VARCHAR(100))
- `username` (VARCHAR(100))
- `pass` (VARCHAR(40)) - MD5 hashed passwords
- `level` (VARCHAR(40))

### tb_artikel
- `id` (INT, PRIMARY KEY, AUTO_INCREMENT)
- `judul` (VARCHAR(255))
- `isi` (TEXT)
- `publisher` (VARCHAR(100))
- `gambar` (VARCHAR(255))
- `tanggal` (DATETIME, DEFAULT CURRENT_TIMESTAMP)

## Security Features

- SQL injection prevention using prepared statements
- XSS prevention through input sanitization
- Session-based authentication
- File upload validation
- Password hashing (MD5 - for demonstration purposes)

## File Uploads

- Images are stored in the `uploads/` directory
- File names are timestamped to prevent conflicts
- Supported formats: PNG, JPG, GIF
- Default image handling for articles without images

## Future Improvements

- Implement stronger password hashing (bcrypt)
- Add user roles and permissions
- Implement article categories and tagging
- Add search functionality
- Include pagination for article listings
- Add article editing and deletion features
- Implement comment system
- Add article preview functionality
- Improve error handling and user feedback
- Add form validation with JavaScript