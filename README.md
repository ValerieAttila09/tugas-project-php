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
│   └── articles/          # Articles module
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

## Setup Instructions

1. Import the `web_baru.sql` file into your database
2. Update the database configuration in `config/database.php`
3. Ensure the `uploads/` directory is writable
4. Start your XAMPP server and navigate to the project directory

## Modules

### Authentication
- User login and registration
- Session management

### Dashboard
- Admin panel for content management
- Article creation interface

### Articles
- Article listing and display
- Rich text content with images

## Technologies Used

- **Backend**: PHP 7.4+
- **Database**: MySQL/MariaDB
- **Frontend**: HTML5, CSS3, JavaScript
- **Styling**: Tailwind CSS
- **Rich Text Editor**: Quill.js
- **Animations**: GSAP
- **Security**: Prepared statements for database queries

## Security Features

- SQL injection prevention using prepared statements
- XSS prevention through input sanitization
- Session-based authentication
- File upload validation

## Future Improvements

- Add user roles and permissions
- Implement article categories
- Add search functionality
- Include pagination for article listings
- Add article editing and deletion features
- Implement comment system