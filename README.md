![image](https://github.com/kevsterde/larapen/assets/96121161/79db6c16-0e07-4c1a-ae39-626c28e7ad03)

Larapen is a CodePen clone built using the Laravel framework. It allows users to create, edit, and share HTML, CSS, and JavaScript code snippets in a web-based editor, similar to CodePen.

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Configuration](#configuration)
- [Contributing](#contributing)
- [License](#license)
- [Sample](#sample)

## Introduction

Larapen is designed to provide a seamless experience for developers to experiment with web technologies and share their creations. Leveraging Laravel's powerful backend capabilities, Larapen ensures a smooth and efficient workflow for managing and displaying code snippets.

## Features

- User authentication and profile management
- Create, edit, and delete code snippets (HTML, CSS, JavaScript)
- Live preview of code snippets
- Responsive design for both desktop and mobile devices
- Syntax highlighting and code formatting with Ace Editor
- Shareable links for code snippets

## Installation

Follow these steps to set up Larapen on your local machine:

1. **Clone the repository:**

   ```bash
   git clone https://github.com/yourusername/larapen.git
   cd larapen

2. **Install dependencies:**
      ```bash
    composer install
              
4. Copy the .env file and generate the application key:
    ```bash
    cp .env.example .env
    php artisan key:generate

6. Configure your database in the .env file:
   ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_database_password

8. Run migrations and seed the database:
   ```bash
   php artisan migrate --seed

10. Serve the application:
    ```bash
    php artisan serve

Visit http://127.0.0.1:8000 in your browser to see the application.


## Usage

- Register or log in to your account.
- Create a new code snippet by navigating to the editor.
- Write your HTML, CSS, and JavaScript code in the respective fields.
- Preview your code in real-time.
- Save your snippet and share the link with others.

## Configuration

To customize Larapen, you can modify the following configuration files:

.env: Environment-specific settings, such as database credentials and application keys.
config/app.php: General application configuration.
config/auth.php: Authentication settings.

## Contributing

We welcome contributions from the community! To contribute to Larapen, follow these steps:

- Fork the repository and clone it to your local machine.
- Create a new branch for your feature or bug fix.
- Make your changes and commit them with descriptive messages.
- Push your changes to your forked repository.
- Submit a pull request to the main repository.

Please ensure your code follows our code style guidelines and includes appropriate tests.

## License

Larapen is open-source software licensed under the MIT license.

## Sample

![image](https://github.com/kevsterde/larapen/assets/96121161/adf14799-562c-4492-b24d-beae868022c1)
![image](https://github.com/kevsterde/larapen/assets/96121161/482e93f9-eb93-4dc6-89dd-22b040e2c32e)








