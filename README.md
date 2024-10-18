# findmeCTF
This repository explores file upload vulnerabilities, which occur when applications fail to properly validate uploads. It includes demos of common attacks, mitigation strategies, and best practices for securing file uploads.


## Files Included

### 1. `index.html`
- **Description**: This file contains the HTML form that allows users to upload files. It provides an interface for uploading a malicious file to the server.
  
### 2. `file_upload.php`
- **Description**: This script processes the file upload. It saves the uploaded file to the `uploads` directory without proper validation, making it vulnerable to exploitation.

### 3. `secret.php`
- **Description**: This is a hidden endpoint that contains a secret code. It can only be accessed through the maliciously uploaded file.
