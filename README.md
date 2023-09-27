<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Laravel 10.x with Livewire

### Giriş
+ Bu proje, Laravel'in hazırlamış olduğu bootcamp eğitimindeki örnek proje üzerinden geliştirilmiştir.

## Kurulum

### 1. Projeyi klonlayın
```bash
git clone https://github.com/erhanurgun/LARA12-chirper-bootcamp-with-livewire.git
```

### 2. .env dosyasını oluşturun
```bash
cp .env.example .env
```

### 3. .env dosyasını düzenleyin
```bash
# Genel Ayarlar
APP_NAME=
APP_URL=

# Veritabanı Ayarları
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

# Mail Ayarları
MAIL_HOST=
MAIL_PORT=
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=
MAIL_FROM_ADDRESS=
```

### 4. Composer paketlerini yükleyin ve dump-autoload yapın
```bash
composer install
composer dump-autoload
```
+ Eğer bu komut ile ilgili herhangi bir hata oluşursa `composer update` komutunu çalıştırın

### 5. NPM veya PNPM ile paketleri yükleyin
```bash
npm install
# ya da
pnpm install
```

### 6. Key oluşturun
```bash
php artisan key:generate
```
+ .env dosyasında ki `APP_KEY=` içerisine oluşan keyi yapıştırın!

### 7. Veritabanı eklemelerini yapın
```bash
php artisan migrate
```

## Kullanım

### Local Ortamda Çalıştırmadan Önce:

#### 1. Projeyi çalıştırmak için aşağıdaki komutları çalıştırınız
```bash
php artisan serve
```
```bash
php artisan serve --host=laravel.test --port=80
```
+ Bu komutun çalışması için Windows kullanıyorsanız `hosts` dosyasına, macOS kullanıyorsanız [Herd](https://herd.laravel.com/) `laravel.test` adresini eklemeniz gerekmektedir!

#### 2. Tarayıcıdan aşağıdaki adrese gidiniz
```bash
# Website için
http://localhost:8000
# ya da
http://laravel.test
```

### Hosting Ortamda Çalıştırmadan Önce:
+ Bu kısımdan önce local ortam için gerekli olan bütün komutları çalıştırmış olmanız gerekmektedir!

#### 1. Projeyi build etmek için aşağıdaki komutu çalıştırınız
```bash
npm run build
```

#### 2. .htaccess dosyasını oluşturun
```bash
cp .htaccess.example .htaccess
```
- Bu ekleme işlemini eğer herhangi bir hata alırsanız yapınız, aksi takdirde yapmanıza gerek yoktur!

#### 3. Tarayıcıdan aşağıdaki adrese gidiniz
```bash
https://domain-adi.uzantisi
```

##### Panel Kullanımı
+ Bu bilgilerle ilgili panele giriş yapıp kullanabilirsiniz
```bash
# Giriş Yap
E-Posta: me@erho.dev
Şifre..: E4i@wbSve7k$#Nk1Vc

# Kayıt Ol
# ...
```

#### 4. N + 1 problemini tespit etmek için:

- [Debugbar](https://github.com/barryvdh/laravel-debugbar) ve [Query Detector](https://github.com/beyondcode/laravel-query-detector) paketlerini ilgili bağlantılara tıklayıp README.md dosyaları yardımıyla kurun.
```bash
composer require --dev beyondcode/laravel-query-detector
```
```bash
composer require --dev barryvdh/laravel-debugbar
```
- Path: `config/app.php` dosyasında `providers` kısmına aşağıdaki satırı ekleyin
```php
Barryvdh\Debugbar\ServiceProvider::class,
```
- Path: `config/app.php` dosyasında `aliases` kısmına aşağıdaki satırı ekleyin
```php
'Debugbar' => Barryvdh\Debugbar\Facades\Debugbar::class,
```

## Destek için
+ Bu [link](https://erho.dev/contact)'e tıklayarak benimle iletişime geçebilirsiniz.

Daha fazlası için [erho.dev](https://erho.dev) veya [erhanurgun.com.tr](https://erhanurgun.com.tr) websitemi ziyaret edebilirsiniz...
