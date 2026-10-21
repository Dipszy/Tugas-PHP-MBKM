# Tugas Praktikum PHP: Struktur Kendali dan Form Processing

Repositori ini berisi tugas praktikum pemrograman web PHP mengenai implementasi **Form Processing** dengan metode HTTP `POST` serta penerapan logika percabangan **Struktur Kendali (`if - else`)** untuk evaluasi nilai ujian mahasiswa.

## Fitur Aplikasi
- **Input Form:**
  - Nama Lengkap (`nama`)
  - Alamat Email (`email`)
  - Nilai Ujian (`nilai`, rentang 0 - 100)
- **Struktur Kendali Logika:**
  - Jika `nilai >= 70` $\rightarrow$ Status **Lulus** (Badge hijau).
  - Jika `nilai < 70` $\rightarrow$ Status **Remedial** (Badge merah).
- **Sanitasi Data:** Menggunakan `htmlspecialchars()` dan `floatval()` untuk mencegah celah keamanan XSS.

## Struktur Berkas
- `index.php` : Skrip utama berisi antarmuka form HTML5, styling CSS, dan pemrosesan logika PHP.
- `diatas 70.png` : Tangkapan layar hasil pengujian nilai di atas 70 (Lulus).
- `dibawah 70.png` : Tangkapan layar hasil pengujian nilai di bawah 70 (Remedial).

## Cara Menjalankan
1. Pastikan server Apache di **XAMPP Control Panel** dalam keadaan aktif (*running*).
2. Letakkan repositori ini di dalam direktori `C:/xampp/htdocs/tugas_php/`.
3. Buka peramban (browser) dan akses URL:
   ```text
   http://localhost/tugas_php/index.php
   ```

---
**Identitas:**
- **Nama:** Muhamad Iqbal
- **Perguruan Tinggi:** STT Terpadu Nurul Fikri
