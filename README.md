<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

---

# 🚀 Como rodar o projeto (Windows)

Este projeto usa **Laravel (PHP)** no backend e **Vite (npm)** no frontend. O banco padrão é **SQLite** para facilitar os testes.

## ✅ Pré-requisitos
- Git  
- PHP ≥ 8.1 (com `pdo_sqlite`, `mbstring`, `openssl`, `curl`, `ctype`, `json`, `xml`)  
- Composer ≥ 2.x  
- Node.js (LTS) + npm  
- (Opcional) Laragon ou XAMPP para facilitar o ambiente PHP  

## 📥 Passo a passo

### 1) Clonar o repositório
SSH (recomendado):  
git clone https://github.com/Lukioni/crudlaravel.git
cd Sua_Pasta  

### Observação
Vá no arquivo do windows c:/php/php.ini
e retire o comentario das seguintes linhas:
extension=fileinfo
extension=pdo_sqlite
extension=sqlite3

### 2) Instalar dependências
composer install (ou composer install -o --noscripts -vvv --profile pra instalação mais rapida) 
npm install  

### 3) Configurar o .env
copy .env.example .env  
php artisan key:generate  

No `.env`, garanta que estas linhas estejam assim (remova # se tiver):  
DB_CONNECTION=sqlite  
DB_DATABASE=database/database.sqlite  

### 4) Migrations (se necessário)
php artisan migrate --seed  

### 5) Subir o backend (Laravel)
php artisan serve  
Acesse: http://127.0.0.1:8000  

### 6) Subir o frontend (Vite)
npm run dev  

---

---

