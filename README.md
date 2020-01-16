# Laravel Vue Non SPA: Dynamic project template for Laravel partial rendering and vue JS Non SPA

##Requirments
* Composer
* NodeJS
* PHP >= v7.2
* MySQL >= v7

##Instalasi
* Clone repository ini
* Run command `composer install`
* Run command `npm install`
* Copy file `.env.example` dan hasil copy tersebut rename menjadi `.env`
* Sesuai nama database, username, password dan app_url
* Buat branch dengan nama masing-masing
* Bekerja pada branch masing-masing sehingga tidak mengganggu branch master
* Run command `php artisan migrate`
* Run command `php artisan db:seed`

## Aturan penulisan
1. Nama controller di menggunakan CamelCase dan inherit terhadap class `Controller`. Contoh: IndexController, KaryawanController
2. Nama action pada controller menggunakan camelCase. Contoh: index, save, update. Jika lebih dari satu kata: indexKaryawan, updateMahasiswa
3. Struktur file view mengikuti nama controller dan action. Contoh: TestController@index. Maka filenya berada pada `view/test/index.blade.php`
4. Jika Nama controller atau action terdiri dari lebih satu kata, gunakan pemisah `-`. Contoh: IndexMahasiswa@actionMahasiswa, maka file view `view/index-mahasiswa/action-mahasiswa`

## PJAX dan VueJS
1. Aplikasi ini menggunakan PJAX untuk rendering page secara partial yang dikonfigurasi pada file `view/layouts/*.blade.php`.
2. Jika request secara AJAX, maka server tidak merender kontent dan layout tetapi hanya merender kontent utama halaman dengan layout `view/layouts/ajax.blade.php`
3. VueJS dirender disetiap halaman aplikasi. Aplikasi perlu membuat instance Vue di setiap halaman dan perlu melakukan refresh PJAX element pada method mount

``
if(typeof pjax !== 'undefined'){
    pjax.refresh();
}
``

## Pjax + Vue + Laravel
Untuk dapat menggunakan ketiga fungsi tersebut secara maksimal, dapt menggunakan salah satu opsi berikut:
1. Menggunakan html biasa.
    Seluruh TAG HTML harus dimasukkan ke dalam x-template, agar seluruh tag HTML dianggap sebagai komponen Vue. Setiap halaman aplikasi harus berada dalam komponen Vue yang unik. ID komponen utama sebuah template mengikuti nama controller+action. Misal: `<script type="text/x-template" id="vc-home-index"></script>`. Jika sebuah komponen dapat digunakan oleh file lain, komponen disimpan secara terpisah pada file `view/vue-templates/` yang dapat di-include pada setiap halaman aplikasi. Ingat, SETIAP KOMPONEN HARUS DIREGISTRASI di Vue
2. Menggunakan componen Vue dari library (misal Bootstrap Vue, dll).
Komponen tampilan dapat dilihat di masing-masing library. Silakan menggunakan komponen yang tersedia, sehingga fungsi Pjax dapat berjalan maksimal
   
