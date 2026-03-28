# Backend Skill Test 2026

Project Laravel untuk Backend Skill Test dengan 3 soal:

1. String Compression
2. Sorting Manual (Bubble Sort)
3. Kalkulasi Diskon

---

## Prasyarat

Pastikan sudah terinstall:

- **PHP** >= 8.1
- **Composer** (https://getcomposer.org)

Cek instalasi:

```bash
php -v
composer --version
```

---

## Cara Menjalankan Project

### 1. Masuk ke folder project

```bash
cd backend-test
```

### 2. Install dependencies

```bash
composer install
```

### 3. Copy file environment

```bash
cp .env.example .env
```

### 4. Generate application key

```bash
php artisan key:generate
```

### 5. Jalankan server

```bash
php artisan serve
```

### 6. Buka browser

```
http://127.0.0.1:8000
```

---

## Struktur Project

```
backend-test/
├── app/
│   └── Http/Controllers/
│       └── SkillTestController.php    # Logic semua soal
├── resources/views/
│   ├── dashboard.blade.php            # Halaman utama
│   ├── string-compression.blade.php   # Soal 1
│   ├── sorting-manual.blade.php       # Soal 2
│   └── discount-calculator.blade.php  # Soal 3
├── routes/
│   └── web.php                        # Routing
└── README.md
```

Buka `http://127.0.0.1:8000` untuk melihat dashboard dengan 3 menu:

1. String Compression
2. Sorting Manual
3. Kalkulasi Diskon
