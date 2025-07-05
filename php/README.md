# Hudson Contact Form

## Overview
This project implements a simple contact form that allows users to submit their information and messages. The form is designed to collect the user's name, email, phone number, and a description of their inquiry. Upon submission, the data is processed by a PHP script that sends an email to the specified address.

## Files
- **contacto.html**: Contains the HTML structure for the contact form.
- **send_contact.php**: Processes the form submission and sends an email with the user's input.
- **README.md**: Documentation for the project.

## Setup Instructions
1. **Clone the Repository**: Download or clone the project files to your local server or web hosting environment.

2. **Configure PHP**: Ensure that your server has PHP installed and configured to send emails. You may need to set up a mail server or use a service like SMTP for email delivery.

3. **Edit the PHP Script**: Open `send_contact.php` and verify that the email address (`leonar15lesval@gmail.com`) is correct. You can change it to another address if needed.

4. **Access the Contact Form**: Open `contacto.html` in your web browser. Fill out the form with your details and submit it.

5. **Check Email**: After submitting the form, check the specified email address for the message.

## Usage
- Users can fill out the contact form with their name, email, phone number, and a description of their inquiry.
- Upon clicking the "Enviar" button, the form data is sent to the `send_contact.php` script, which processes the submission and sends an email.

## Notes
- Ensure that your server's email settings are correctly configured to avoid issues with email delivery.
- You may want to implement additional validation and security measures (e.g., CAPTCHA) to prevent spam submissions.