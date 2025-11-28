# 📚 WWB - Web Novel Reader

WWB is a web-based novel reading platform built using **Laravel**, **PHP**, and developed locally with **XAMPP**.  
The goal of the project is to provide a clean, fast, and expandable reading experience for users and developers.

---

## 🚀 Technologies Used

| Technology | Purpose |
|-----------|---------|
| **PHP 8.x** | Backend language |
| **Laravel 10+** | Main framework |
| **MySQL** | Database |
| **XAMPP** | Local development environment |
| **Blade Template Engine** | UI rendering |
| **CSS / TailwindCSS / Bootstrap** | Frontend styling |

---

## 📂 Project Structure

WWB/
│── app/
│── bootstrap/
│── config/
│── database/
│── public/
│ └── index.php
│── resources/
│ ├── views/
│ └── css/
│── routes/
│ └── web.php
│── .env
│── composer.json
└── README.md

yaml
Copy code

---

## 🔧 Installation & Setup

### 1️⃣ Clone the Repository

```bash
git clone https://github.com/TuanKhangCyber/WWB.git
cd WWB
2️⃣ Install Dependencies
bash
Copy code
composer install
3️⃣ Create Environment Configuration
bash
Copy code
cp .env.example .env
4️⃣ Generate Application Key
bash
Copy code
php artisan key:generate
5️⃣ Configure Database in XAMPP
Open phpMyAdmin

Create a new database named: wwb_db

Update .env:

makefile
Copy code
DB_DATABASE=wwb_db
DB_USERNAME=root
DB_PASSWORD=
6️⃣ Run Migrations
bash
Copy code
php artisan migrate
▶️ Running the Application
Using Laravel development server:

bash
Copy code
php artisan serve
Or place the project into:

makefile
Copy code
C:\xampp\htdocs\
Then access it via browser:

bash
Copy code
http://localhost/WWB/public
✨ Planned Features
 Novel list and categorization

 Search system

 Chapter browsing and chapter reader

 User authentication (Login/Register)

 Admin panel for managing novels, chapters, and images

 Dark Mode / Light Mode

 JSON API for future mobile app

📌 Development Roadmap
Phase	Objective	Status
Phase 1	UI base + database setup	✔ Completed
Phase 2	CRUD content management	⏳ In progress
Phase 3	Authentication system	⏳ Pending

🤝 Contributions
Pull requests are welcome.
For major changes, please open an issue first to discuss what you would like to modify.

📬 Contact
vbnet
Copy code
Developer: Nguyễn Tuấn Khang
Email: (to be added)
