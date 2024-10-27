<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


<h1>Requirements</h1>
<ul>
    <li>Stable version of <a href="https://docs.docker.com/engine/install/">Docker</a></li>
    <li>Compatible version of <a href="https://docs.docker.com/compose/install/#install-compose">Docker Compose</a></li>
</ul>

<h1>Cara - Cara</h1>

<h3>Cara Menjalankan Aplikasi</h3>
<ul>
    <li>Buka terminal dan Docker Desktop di komputer</li>
    <li>Buka directory di mana file project akan diinstall menggunakan perintah <code>cd</code> diikuti path</li>
    <li>Clone project menggunakan perintah <code>git clone https://github.com/vchandra22/laravel-fullstack-starter.git</code></li>
    <li>Salin file <code>env.example</code> ke dalam file <code>.env</code></li>
    <li>Jalankan perintah <code>docker-compose build --no-cache</code></li>
    <li>Tunggu sampai proses build selesai, kemudian jalankan <code>docker-compose up -d</code></li>
    <li>Buka web browser dan akses URL <a href="http://localhost:80/">http://localhost:80/</a></li>
</ul>

<h3>Artisan Commands atau Manage Package</h3>
<ul>
    <li>Aplikasi berjalan menggunakan Docker container</li>
    <li>Untuk menjalankan artisan commands atau mengelola package, lakukan di dalam container</li>
    <li>Gunakan perintah <code>docker compose exec php bash</code></li>
    <li>Jalankan perintah <code>bun run dev</code> di dalam container jika tampilan tidak sesuai</li>
</ul>

<h3>Cara Mengakses phpMyAdmin/DB</h3>
<ul>
    <li>URL: <a href="http://localhost:8088">http://localhost:8088</a></li>
    <li>Server: <code>db</code></li>
    <li>Username: <code>user</code></li>
    <li>Password: <code>password</code></li>
    <li>Database: <code>laravel_db</code></li>
</ul>

<h1>Catatan</h1>

<h3>Basic Docker Compose Commands</h3>
<ul>
    <li>Build atau rebuild services: <code>docker compose build</code></li>
    <li>Create dan start containers: <code>docker compose up -d</code></li>
    <li>Stop dan remove containers, networks: <code>docker compose down</code></li>
    <li>Stop semua services: <code>docker compose stop</code></li>
    <li>Restart service containers: <code>docker compose restart</code></li>
    <li>Menjalankan command di dalam container: <code>docker compose exec [container] [command]</code></li>
</ul>

<h3>Useful Laravel Commands</h3>
<ul>
    <li>Tampilkan informasi dasar tentang aplikasi: <code>php artisan about</code></li>
    <li>Hapus file cache konfigurasi: <code>php artisan config:clear</code></li>
    <li>Flush aplikasi cache: <code>php artisan cache:clear</code></li>
    <li>Clear semua events dan listeners yang di-cache: <code>php artisan event:clear</code></li>
    <li>Hapus semua jobs dari queue yang ditentukan: <code>php artisan queue:clear</code></li>
    <li>Hapus file route cache: <code>php artisan route:clear</code></li>
    <li>Clear semua compiled view files: <code>php artisan view:clear</code></li>
    <li>Hapus file compiled class: <code>php artisan clear-compiled</code></li>
    <li>Hapus cached bootstrap files: <code>php artisan optimize:clear</code></li>
    <li>Hapus cached mutex files yang dibuat oleh scheduler: <code>php artisan schedule:clear-cache</code></li>
    <li>Hapus expired password reset tokens: <code>php artisan auth:clear-resets</code></li>
</ul>

<h3>Vite Commands dengan Bun</h3>
<ul>
    <li>Start Development Server: <code>bun run dev</code></li>
    <li>Build atau compile semua kelas Tailwind: <code>bun run build</code></li>
</ul>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and
creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in
many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache)
  storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all
modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a
modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video
tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging
into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in
becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in
the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by
the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell
via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
