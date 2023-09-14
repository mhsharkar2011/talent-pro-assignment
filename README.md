# Talent Pro - ToDo Assignment

## Getting started
- cd existing_repo
- git remote add origin https://gitlab.com/assignment2023/talent-pro-todo.git
- git branch -M main
- git push -uf origin main

- composer install
- php artisan migrate --seed
- we can use postman to test the payload


## API End Points

### Shops APIs

- Shop - LIST   >> http://host_name/api/shops
- Shop - SHOW   >> http://host_name/api/shops/{id}
- Shop - CREATE >> http://host_name/api/shops
- Shop - UPDATE >> http://host_name/api/shops/{id}
- Shop - DELETE >> http://host_name/api/shops{id}

### Seller APIs

- seller - LIST   >> http://host_name/api/sellers
- seller - SHOW   >> http://host_name/api/sellers/{id}
- seller - CREATE >> http://host_name/api/sellers
- seller - UPDATE >> http://host_name/api/sellers/{id}
- seller - DELETE >> http://host_name/api/sellers{id}

