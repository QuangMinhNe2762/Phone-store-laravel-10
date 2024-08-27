<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Website for phone store
**Use of technologies**
**+ Back-end**: Framework(Laravel, Livewire)
**+ Front-end**: HTML5, CSS5, Bootstrap 5, Ajax
**+ Database**: MYSQL XAMPP
# Tutorial run project from github step by step
- run composer install
- copy content file .env.example to .env **if no file .env -> create it**
- create database
- php artisan migrate
- generate key in file .env: php artisan key:generate
- php artisan serve
## My functions:
### 1. Admin panel:
- **Users**: CRUD, Paginate Search, filter
- **Categories**: CRUD, Paginate upload image, Search, filter
- **Brands**: CRUD, Paginate upload image, Search, filter
- **Products**: CRUD, Paginate upload image, Search, filter
- **Sliders**: CRUD, Paginate upload image, Search, filter
### 2. User page:
- **Profile page**: Edit profile, check invoices

- **Wish list page**: Products will be added here, can add to cart page
\\<img src="/review_images/wishlist.png" width="1000px">\
- **Home page**: Popular products
\\<img src="/review_images/index.png" width="1000px">\\
- **All product page**: Show all product
\\<img src="/review_images/all_product.png" width="1000px">\\
- **Product detail page**: Show detail product
\\<img src="/review_images/product_detail.png" width="1000px">\\
- **Cart page**: Order products and send email to your email
\\<img src="/review_images/cart.png" width="1000px">\\
<img src="/review_images/send_email.png" width="1000px">
