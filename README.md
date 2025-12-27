# Laravel Livewire Notes Application

Modern ve responsive bir not yönetim uygulaması. Laravel 12, Livewire 4 ve Flux UI ile geliştirilmiştir.

## 🚀 Özellikler

- ✅ CRUD işlemleri (Oluştur, Oku, Güncelle, Sil)
- 🔄 Real-time güncellemeler (Livewire ile)
- 📱 Responsive tasarım (Flux UI)
- ✨ Modal ile düzenleme ve silme
- 📄 Sayfalama (Pagination)
- ✅ Form validasyonu
- 🎯 Flash mesajları ile kullanıcı bildirimleri
- 🔒 Benzersiz başlık kontrolü

## 🛠️ Teknolojiler

- **Backend:** Laravel 12
- **Frontend:** Livewire 4, Flux UI
- **Database:** MySQL
- **PHP:** 8.2+

## 📦 Kurulum
```bash
# Repository'yi klonlayın
git clone https://github.com/kullaniciadi/laravel-livewire-notes.git

# Proje dizinine gidin
cd laravel-livewire-notes

# Bağımlılıkları yükleyin
composer install
npm install

# .env dosyasını oluşturun
cp .env.example .env

# Uygulama anahtarı oluşturun
php artisan key:generate

# Veritabanını oluşturun ve migrate edin
php artisan migrate

# Uygulamayı başlatın
php artisan serve
npm run dev
```

## 💾 Veritabanı Yapısı

**notes** tablosu:
- `id` - Primary Key
- `title` - Benzersiz başlık (max: 255)
- `content` - Not içeriği (text)
- `created_at` - Oluşturulma tarihi
- `updated_at` - Güncellenme tarihi

## 🎯 Kullanım

1. Ana sayfadan yeni not oluşturabilirsiniz
2. Mevcut notları görüntüleyebilir, düzenleyebilir veya silebilirsiniz
3. Notlar en yeni tarihten başlayarak sıralanır
4. Her sayfada 5 not gösterilir

## 📸 Ekran Görüntüleri

<table>
  <tr>
    <td><img width="900" alt="Not Oluştur" src="https://github.com/user-attachments/assets/d156ed03-7b71-4cce-a3e3-1badace0e839" /></td>
    <td><img width="900" alt="Not Güncelle" src="https://github.com/user-attachments/assets/4d1e8c72-4069-453e-8747-fe8ff8d5e1c4" /></td>
  </tr>
  <tr>
    <td align="center"><b>Yeni Not Oluştur</b></td>
    <td align="center"><b>Not Güncelleme Ekranı</b></td>
  </tr>
  <tr>
    <td colspan="2"><img width="1800" alt="Not Listesi" src="https://github.com/user-attachments/assets/d4dc4f57-f541-43a8-a73d-d16cc76d63d0" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><b>Not Listesi</b></td>
  </tr>
</table>

