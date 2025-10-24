# Verdicto

**Verdicto** is a Laravel Blade-based web application that connects users with professional lawyers. It supports user registration with roles (*client* or *lawyer*), chatbot, profile editing, article listings, lawyer search functionality, and informational pages like testimonials, About Us, and FAQ.

---

## 🚀 Features
- 🔐 **Role-Based Authentication**
  - Users can register as either a **client** or **lawyer**.
  - Lawyers get access to a **dedicated dashboard/page** (under `/lawyeraccess`) restricted to their role.
  - Middleware ensures only authorized users can access lawyer-only features.

- 👨‍⚖️ **Lawyer Finder**
  - Search and browse lawyers via `lawyer/` pages.
  - Profiles are searchable by name and other criteria.

- 📚 **Articles**
  - Informative legal articles presented via `article/` views.
  - Articles are searchable by title and other criteria.

- 📝 **Testimonials**
  - Clients can submit and view testimonials.
  - Displayed on a dedicated `testimonials/` page.

- 🤖 **AI Chatbot (Gemini + Livewire)**
  - Users can interact with an AI chatbot powered by Gemini AI API.
  - Accessible via a floating bubble that links to `/chatbot`.
  - Built using Laravel Livewire for dynamic, real-time interaction.

- 👤 **Profile Management**
  - Users can edit their profile in `profile/`.
  - Profile photo upload available (not during registration).

- 📄 **Informational Pages**
  - `aboutus/` and `faq/` pages explain the platform and answer common questions.

- 🎨 **Built with Tailwind CSS + Blade**
  - Clean, responsive UI using Laravel's Blade components and Tailwind CSS.

---

## 🔐 Access Control

Role-based middleware ensures that:
- **Clients** cannot access lawyer-only pages
- **Lawyers** have access to `/lawyeraccess` section for managing their profile and cases

---

## 📦 Branch Information

- **Active branch**: `dev`
- All development and feature updates are pushed to the `dev` branch.
- Before starting work, always pull the latest from `dev`:
  
```bash
git checkout dev
git pull origin dev
```

---

## 🛠️ Installation Guide

1. **Clone the project**

```bash
git clone https://github.com/ceciliasx/verdicto.git
cd verdicto
git checkout dev
```

2. **Install dependencies**
```bash
composer install
npm install && npm run dev
```

3. **Environment setup**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Configure .env file**
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=verdictodb
DB_USERNAME=root
DB_PASSWORD=

GEMINI_API_KEY=your_google_api_key_here
```
🚨 The GEMINI_API_KEY is required for the chatbot to function. Get it from Google AI Studio: https://aistudio.google.com/app/apikey

5. **Run database migrations**
```bash
php artisan migrate
```

6. **Link storage for profile photos**
```bash
php artisan storage:link
```

7. **Serve the application**
```bash
php artisan serve
```
Open in browser: http://localhost:8000

---

## 📂 Project Structure (Views)
```plaintext
resources/views/
├── aboutus/               # About Us page
├── article/               # Article listing and reading
├── auth/                  # Login, register
├── components/            # Reusable Blade components
├── lawyer/                # Lawyer listing and detail views
├── lawyeraccess/          # Views only accessible by users with 'lawyer' role
├── layouts/               # App layout structure
├── livewire/              # Livewire components including chatbot
├── profile/               # Profile editing (incl. photo)
├── testimonials/          # Testimonial submission and display
├── dashboard.blade.php    # Authenticated user dashboard
└── welcome.blade.php      # Public landing page
```

---

## 📸 Profile Picture Handling
- Editable only through the edit profile page.
- Stored in storage/app/public/profile_photos/.
- Accessed via public/storage/profile_photos/ (after php artisan storage:link).
- Replaces the previous image when uploading a new one.

---

## 🧠 Tech Stack
- **Backend**: Laravel 12
- **Frontend**: Blade, Tailwind CSS, Alpine.js
- **Realtime UI**: Laravel Livewire
- **AI Integration**: Gemini API
- **Database**: MySQL
- **Assets**: Vite
