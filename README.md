# Talent Pro - ToDo

## Getting started
cd existing_repo
git remote add origin https://gitlab.com/assignment2023/talent-pro-todo.git
git branch -M main
git push -uf origin main
```
## To test the project 
- composer install
- php artisan migrate --seed
- we can use postman to test the payload


## API end points

``` SHOPS end point
- Shop - LIST   >> http://host_name/api/shops
- Shop - SHOW   >> http://host_name/api/shops/{id}
- Shop - CREATE >> http://host_name/api/shops
- Shop - UPDATE >> http://host_name/api/shops/{id}
- Shop - DELETE >> http://host_name/api/shops{id}

    SELLER end point
- seller - LIST   >> http://host_name/api/sellers
- seller - SHOW   >> http://host_name/api/sellers/{id}
- seller - CREATE >> http://host_name/api/sellers
- seller - UPDATE >> http://host_name/api/sellers/{id}
- seller - DELETE >> http://host_name/api/sellers{id}

