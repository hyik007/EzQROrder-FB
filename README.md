# AI-POS: Zero-Config F&B Point of Sale & KDS 🚀

![AI-POS Hero Preview](https://placehold.co/800x400/2563eb/white?text=AI-POS+Preview+-+Replace+with+Your+Screenshot)

**AI-POS** is a lightweight, zero-configuration Point of Sale (POS) and Kitchen Display System (KDS) built specifically for local F&B businesses. Fully containerized with Docker and powered by Laravel 13, it eliminates complex server setups by using SQLite and a 1-click UI setup wizard. It also features integrated Google Gemini AI capabilities to handle smart localized interactions.

---

## 📸 Screenshots

| Customer QR Menu | Kitchen Display Screen (KDS) |
|:---:|:---:|
| ![QR Menu](https://placehold.co/300x500/f3f4f6/1f2937?text=Mobile+QR+Menu) | ![KDS](https://placehold.co/500x500/111827/ffffff?text=Kitchen+Display+Screen) |
| *Mobile-first frictionless ordering* | *Live, auto-refreshing kitchen tickets* |

---

## ✨ Key Features

* **Zero-Config Setup Wizard:** No need to mess with `.env` files or external databases. A built-in setup UI (`/setup`) allows restaurant owners to configure their store name and Google Gemini API key, storing it securely in a local SQLite database.
* **Scan & Order QR Menu (`/t/{table}`):** A mobile-first, frictionless ordering interface built with Alpine.js and Tailwind CSS. Customers can scan a table QR code, browse the menu, add items to a dynamic floating cart, and submit orders directly to the kitchen with special notes.
* **Live Kitchen Display Screen (`/kds`):** An auto-refreshing, color-coded dashboard for kitchen staff to manage active tickets. Orders flow in real-time, allowing staff to update statuses from *Pending* (Red) ➔ *Preparing* (Yellow) ➔ *Ready* (Green).
* **Google Gemini AI Integration:** Includes a built-in `GeminiService` connected to the Gemini 1.5 Flash model. Ready to handle smart F&B tasks like translating customer notes, generating localized greetings (e.g., Manglish), or suggesting menu pairings.
* **Frictionless Deployment:** 100% Dockerized with a self-healing `docker-compose` setup that automatically installs dependencies and boots the server. Download, run `docker compose up`, and the system is live.

---

## 🛠️ Tech Stack

* **Backend:** Laravel 13, PHP 8.2
* **Database:** SQLite (Zero external DB dependencies)
* **Frontend:** Tailwind CSS, Alpine.js, Blade Templates
* **Infrastructure:** Docker, Docker Compose
* **AI Engine:** Google Gemini 1.5 Flash API

---

## 🚀 Quick Start / Installation

Because this project is completely Dockerized and uses SQLite, installation takes less than 2 minutes. 

**Prerequisites:** You must have [Docker Desktop](https://www.docker.com/products/docker-desktop/) installed and running.

1. **Clone the repository:**
   ```bash
   git clone [https://github.com/yourusername/ai-pos.git](https://github.com/yourusername/ai-pos.git)
   cd ai-pos

   Boot the Docker Container:

Bash
docker compose up -d --build
Run Database Migrations (Wait 5-10 seconds for container to start first):

Bash
docker compose exec app php artisan migrate
Seed the Sample Menu (Optional):

Bash
docker compose exec app php artisan seed-menu
🗺️ System Routes
Once running, access the system via your browser at http://localhost:8000:

Setup Wizard: http://localhost:8000/setup (Start here!)

Customer Menu (Table 1): http://localhost:8000/t/1

Kitchen Display Screen: http://localhost:8000/kds

AI Test Route: http://localhost:8000/ai-test

🎯 Use Case
Designed for local cafes, hawker stalls, and food trucks that need a digital ordering system today without paying monthly SaaS subscriptions or hiring an IT guy to configure MySQL and web servers.


### How to add your REAL pictures later:
When you push this to GitHub, do this to replace my placeholders with your actual screens:
1. Open your running app and use `Windows Key + Shift + S` to take 3 screenshots:
   * The Setup Wizard page.
   * The mobile Menu view (make your browser window narrow like a phone).
   * The dark KDS dashboard.
2. Inside your `ai-pos` folder, create a new folder named `docs` and save your images there (e.g., `docs/menu.png`, `docs/kds.png`).
3. Change the links in the `README.md` from `[https://placehold.co/](https://placehold.
