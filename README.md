# PDM Lumen API
Author : M. Ridwan Zalbina
Date of conduct : 24-25 June 2024


### Notes :
There will be 2 tables to create books and authors, everythings need to implemented.

### Running the app api

## Copy .env-examples to .env

```
php -S localhost:8000 -t public
```

### Generate key
```
php artisan key:generate
```

### Migrate
```
php artisan migrate
```

### Run Seed
```
php artisan migrate:refresh
php artisan db:seed
```

### Check log 
Check on 
```
e.g:
storage/logs/lumen-2024-06-25.log
```
