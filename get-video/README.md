# Information API

This project is a PHP application that uses the built-in PHP server for handling HTTP requests. It routes requests using a custom router.

## Technologies Used

- **PHP**: Server-side scripting language for web development.
- **Custom Router**: Handles routing of HTTP requests within the application.
- **Docker**: Used for containerizing the application for easy deployment.

## Installation

1. Clone this repository to your local machine:
    ```bash
    git clone <repository URL>
    ```

2. No additional dependencies are required. Ensure that you have PHP installed on your machine.

## Usage

1. Start the server by running the following command:
    ```bash
    php index.php
    ```

2. The server will be available at `http://localhost:3004`.

## Project Structure

- `index.php`: Main file where the PHP server is configured and started.
- `src/Router/Router.php`: Defines the routes and logic for handling incoming requests.
- `src/Controllers/VideoController.php`: Handles the logic for serving video files.
- `public/videos`: Directory where video files are stored.

## Docker

To run this project in a Docker container:

1. Build the Docker image:
    ```bash
    docker build -t get-video .
    ```

2. Run the Docker container:
    ```bash
    docker run -p 3004:3004 get-video
    ```

3. The server will be available at `http://localhost:3004` inside the Docker container.

## Documentation

Currently, this project does not include Swagger or other API documentation tools. The routing logic and request handling are implemented in `src/Router/Router.php`.
