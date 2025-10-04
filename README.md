##

1. untuk berinteraksi dengan terminal gunakan -> php artisan tinker
2. untuk membuat migration db dan juga model gunakan -> php artisan make:model NamaModel -m
3. untuk membuat seeder gunakan -> php artisan make:seeder namaClassSeeder
4. untuk menjalankan seeder -> php artisan db:seed --class=ClassSeeder

# 🧩 Perbedaan Accessor dan Mutator di Laravel Eloquent

Laravel menyediakan **Accessor** dan **Mutator** untuk memodifikasi data model
saat data **dibaca dari database** atau **disimpan ke database**.

| Jenis        | Arah Kerja                               | Kapan Dipanggil                                               | Fungsinya                                       |
| ------------ | ---------------------------------------- | ------------------------------------------------------------- | ----------------------------------------------- |
| **Accessor** | **Dari database → ke kode (baca data)**  | Saat kamu _mengambil_ nilai dari model (`$user->name`)        | Untuk **memodifikasi data sebelum ditampilkan** |
| **Mutator**  | **Dari kode → ke database (tulis data)** | Saat kamu _menyimpan_ nilai ke model (`$user->name = 'andi'`) | Untuk **memodifikasi data sebelum disimpan**    |

---

## 📘 Contoh Accessor

Accessor digunakan untuk memformat data saat dibaca dari database.

```php
public function getNameAttribute($value)
{
    return ucwords($value);
}
```

## Contoh Mutator

Mutator ini digunakan untuk membuat format nama

```php
// laravel akan otomatis mencari method dengan pola set{NamaKolom}Attribute
public function setNameAttribute($value)
{
    $this->attributes['name'] = strtoupper($value);
}

```

# 🔭 Scope di Laravel Eloquent

Laravel menyediakan fitur **Scope** untuk memudahkan kita memfilter query secara konsisten dan rapi.  
Ada dua jenis scope yang umum digunakan:

-   **Local Scope** → digunakan secara _manual_ di query tertentu
-   **Global Scope** → diterapkan secara _otomatis_ pada semua query model

---

## 🧩 1️⃣ Local Scope

Local scope digunakan untuk **mendefinisikan filter yang bisa digunakan kembali** saat melakukan query.  
Nama method-nya **harus diawali dengan kata `scope`**.

### 📘 Contoh

```php
// app/Models/User.php

public function scopeActive($query)
{
    return $query->where('is_active', true);
}
```
