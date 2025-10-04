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
