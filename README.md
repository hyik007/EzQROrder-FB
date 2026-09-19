AI-POS: Zero-Config F&B Point of Sale & KDS 🚀
AI-POS is a lightweight, zero-configuration Point of Sale (POS) and Kitchen Display System (KDS) built specifically for local F&B businesses. Fully containerized with Docker and powered by Laravel 13, it eliminates complex server setups by using SQLite and a 1-click UI setup wizard. It also features integrated Google Gemini AI capabilities to handle smart localized interactions.

✨ Key Features
Zero-Config Setup Wizard: No need to mess with .env files or external databases. A built-in setup UI (/setup) allows restaurant owners to configure their store name and Google Gemini API key, storing it securely in a local SQLite database.

Scan & Order QR Menu (/t/{table}): A mobile-first, frictionless ordering interface built with Alpine.js and Tailwind CSS. Customers can scan a table QR code, browse the menu, add items to a dynamic floating cart, and submit orders directly to the kitchen with special notes.

Live Kitchen Display Screen (/kds): An auto-refreshing, color-coded dashboard for kitchen staff to manage active tickets. Orders flow in real-time, allowing staff to update statuses from Pending (Red) ➔ Preparing (Yellow) ➔ Ready (Green).

Google Gemini AI Integration: Includes a built-in GeminiService connected to the Gemini 1.5 Flash model. Ready to handle smart F&B tasks like translating customer notes, generating localized greetings (e.g., Manglish), or suggesting menu pairings.

Frictionless Deployment: 100% Dockerized with a self-healing docker-compose setup that automatically installs dependencies and boots the server. Download, run docker compose up, and the system is live.

🛠️ Tech Stack
Backend: Laravel 13, PHP 8.2

Database: SQLite (Zero external DB dependencies)

Frontend: Tailwind CSS, Alpine.js, Blade Templates

Infrastructure: Docker, Docker Compose

AI Engine: Google Gemini 1.5 Flash API
