# Mail Pdf Tester

![Email Icon](https://img.icons8.com/ios-filled/100/000000/email.png)

## Overview
**Mail Pdf Tester** is a Laravel-based application designed to facilitate sending emails with or without PDF attachments and generating PDFs on demand. This project simplifies the process of managing email communications and document generation.

## Features

### 1. Send Mail with or without PDF 📧📄
- **Email Sending**: Easily send emails directly from the application.
- **PDF Attachment**: Option to attach PDFs to the emails or send plain text emails.

### 2. Generate PDF Only 📄✨
- **PDF Creation**: Generate PDF documents based on user inputs or predefined templates.
- **Downloadable PDF**: Users can download the generated PDFs directly from the application.

### User Interface (GUI)

#### Dashboard Overview 🖥️
The main dashboard provides a simple and clean interface for navigating the application’s features:
- **Send Mail**: Quick access to send emails with or without attachments.
- **Generate PDF**: Easy access to generate PDFs based on provided data.

![Dashboard Screenshot](https://via.placeholder.com/600x300.png?text=Dashboard+Screenshot)

#### Send Mail Form ✉️
The form for sending emails allows users to input:
- **Recipient Email Address** 📧
- **Subject** 📝
- **Message Body** 💬
- **PDF Attachment Option**: Toggle to include a PDF.

![Send Mail Form Screenshot](https://via.placeholder.com/600x300.png?text=Send+Mail+Form+Screenshot)

#### PDF Generation Form 📄
The PDF generation form includes:
- **Input Fields** for necessary data that will be included in the PDF.
- **Preview Option**: View the PDF before generating.
- **Download Link**: Easily download the generated PDF.

![PDF Generation Form Screenshot](https://via.placeholder.com/600x300.png?text=PDF+Generation+Form+Screenshot)

## Getting Started

### Installation

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/Ahsanjuly29/MailPdfTesterLive.git
   ```

2. **Navigate to the Project Directory**:
   ```bash
   cd MailPdfTesterLive
   ```

3. **Set Up the Environment** ⚙️🔧  
   - Ensure you have **Composer** and **Laravel** installed.
   - Configure your `.env` file for email settings (SMTP) and any other environment variables.
   - Run migrations if necessary:
     ```bash
     php artisan migrate
     ```

4. **Open the Application** 🌐  
   - Start the Laravel server:
     ```bash
     php artisan serve
     ```
   - Navigate to `http://localhost:8000` in your web browser.

## Usage

- **Sending Emails** ✉️  
  Fill in the recipient details, message, and choose to attach a PDF if needed.

- **Generating PDFs** 📄  
  Input the necessary data in the PDF generation form to create and download your PDF.

## Demo
To view a live demo of the application, visit: [Live Demo](https://your-live-demo-link.com) 🌟 (replace with an actual link if applicable).

## Technologies Used
- **Laravel**: PHP framework for backend functionality. 🖥️
- **HTML/CSS**: For structuring and styling the web application. 🎨
- **jQuery**: For dynamic interactions and form handling. ⚡

## Contributing
Contributions are welcome! If you would like to improve the application or add new features, please fork the repository, make your changes, and submit a pull request. 🤝

## License
This project is licensed under the MIT License. 📝🔒
