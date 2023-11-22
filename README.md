# Getway

Ghana Passport Office Registration Form
Overview

This PHP script implements a registration form for the Ghana Passport Office. Users can input their personal information, including name, last name, national ID number, nationality, date of birth, gender, mobile number, and email address. Upon submission, the data is stored in a MySQL database using the connect.php file.

The script also includes a navigation bar with a link to an admin panel and a search bar (currently non-functional) for future enhancements. Bootstrap is used for styling the form and creating a responsive layout.
Features

    User-friendly registration form.
    Storage of user data in a MySQL database.
    Navigation bar with a link to the admin panel.
    Bootstrap styling for a modern and responsive design.

Technologies Used

    PHP: Backend scripting language for server-side processing.
    MySQL: Database for storing user registration data.
    Bootstrap 5: Frontend framework for styling and layout.
    HTML: Markup language for structuring the content of the registration form.
    CSS: Styling to enhance the visual presentation.

Project Structure

    connect.php: PHP script to establish a connection to the MySQL database.
    index.php: Main HTML file containing the registration form and interface.
    css/style.css: CSS file for custom styling.
    script/script.js: JavaScript file (currently unused) for potential future enhancements.
    images/: Directory for storing images (not included in the provided script).

Usage

    Set up a MySQL database and update the connection details in the connect.php file.
    Place all files in a web server directory.
    Access the registration form by navigating to the web server URL.
    Fill out the registration form and submit the data.
    View the registration data in the MySQL database.

Additional Notes

    The search functionality in the navigation bar is currently non-functional and can be implemented in the future.
    Ensure that the MySQL server is running and configured correctly for database interactions.

Ghana Passport Admin Login
Overview

This PHP script implements a simple admin login page for the Ghana Passport system. The admin credentials are hardcoded for demonstration purposes, and access is granted upon successful authentication. Bootstrap is used for styling the form and creating a responsive layout.
Features

    Admin login form with username and password fields.
    Hardcoded admin credentials for authentication.
    Bootstrap styling for a modern and responsive design.

Technologies Used

    PHP: Backend scripting language for server-side processing.
    Bootstrap 5: Frontend framework for styling and layout.
    HTML: Markup language for structuring the content of the login form.
    CSS: Styling to enhance the visual presentation.

Project Structure

    login.php: Main HTML file containing the admin login form and interface.
    css/style.css: CSS file for custom styling (not currently used).
    images/: Directory for storing images (not included in the provided script).

Usage

    Place all files in a web server directory.
    Access the admin login page by navigating to the web server URL.
    Enter the hardcoded admin credentials (username: "Admin", password: "0000").
    Click the "LOGIN" button to authenticate.
    Upon successful authentication, access is granted, and the user is redirected to the "operation.php" page.
    If authentication fails, an alert is displayed, and the user remains on the login page.

Additional Notes

    This script uses hardcoded admin credentials for simplicity. In a real-world scenario, credentials would be stored securely and retrieved from a database.
    The CSS file (style.css) is included in the project structure but is currently not utilized. It can be used for additional styling in the future.
Credits

This registration form script was created by Hollali Kelvin.

License

This project is licensed under the MIT License.

Feel free to contribute or report issues!
