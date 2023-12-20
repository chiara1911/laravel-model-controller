<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Esercizio di oggi

Oggi facciamo la nostra prima vera interazione con il database utilizzando l’ORM di Laravel.
- Create un nuovo progetto Laravel 9 (dal template)
- se  lo avete già va benissimo il nostro shop_db se no tramite phpMyAdmin create un nuovo database laravel_model_controller
- solo se non avete già il db  Importate nel vostro database la tabella movies in allegato
 - inserite le vostre credenziali per il database nel file .env
- Create un model Movie
es. php artisan make:model Movie
- Create la rotta e un controller che gestirà la rotta / (home) e uno per i libri
es. php artisan make:controller  PageController
- All’interno della funzione index() del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.
8. Stilare il layout nei dettagli con Sass
BONUS:
Creare rotta, link, aggiungere metodo show al controller, e pagina di dettaglio del movie

## Installazione Laravel

``` bash

cd cartella esercizi

composer create-project --prefer-dist laravel/laravel:^9.2 your_project_name_here

cd your_project_name_here

code . -r

php artisan serve

ctrl + c

```

## Configurazione Laravel

```bash

composer require pacificdev/laravel_9_preset

php artisan preset:ui bootstrap

npm install

npm install --save @fortawesome/fontawesome-free

#in vite.config.js aggiungo agli alias
'~@fortawesome': path.resolve(__dirname, 'node_modules/@fortawesome'),

#copio la cartella dei webfont e se voglio la rinomino


#comandi git

git init
git add .
git commit -m "first commit"
npm
git remote add origin your_git_url
git push -u origin main


#creo nuova repo su github da template
#importo da vscode la repo
#installo composer

composer install


#clono il file env.example e lo rinomino in .env

#lancio il comando:

php artisan key:generate


#e si crea la key del progetto

#infine

npm install


#lancio entrambi i server ( su due powershell diversi)

npm run dev
php artisan serve
```



