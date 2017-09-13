_Домашние задания по курсу «Современные PHP-фреймворки»_
============================

Структура директорий
-------------------

      laravel5/           проект на Laravel 5
      symfony3/           проект на Symfony 3
      yii2/               проект на Yii 2

Стартовые страницы
-----------------

      Laravel 5           laravel5/recources/views/index.blade.php
      Symfony 3           symfony3/app/Recources/views/default/index.html.twig
      Yii 2               yii2/views/site/index.php

Middleware
-----------------

      Laravel 5
      В Laravel существует Middleware, который выступает посредником, неким фильтром
      перед контроллером. Для проверки авторизации создаем middleware командой 
      php artisan make:middleware Authentificate. Создается в директории 
      app/Http/Middleware класс Authentificate. Его необходимо зарегистрировать в
      файле app/Http/Kernel.php, чтобы все запросы проходили через него. Для успешного
      прохождения запроса далее необходимо вернуть $next($request)
      
      Yii 2
      В классе SiteController в директории controllers необходимо переопределить 
      метод beforeAction() базового контроллера, чтобы создать некое подобие 
      middleware в Laravel. Данный метод вызывается перед всеми остальными методами
      контроллера. Для успешного прохождения запроса далее необходимо вернуть true
      
      Symfony 3
      К сожалению, в Симфони не нашел механизмов, подобных Middleware и сделал фильтрацию
      заголовков в DefaultController в директории src/AppBundle/Controller.

Представление. Шаблонизаторы
-----------------

      Laravel 5
      laravel5/database/news.php - база данных новостей
      Шаблон распложен в laravel5/resources/views
      - main - основной шаблон
      - news, article - шаблон новостей и отдельной новости
      - _common - вынесены возможные общие шаблоны для других страниц сайта
      
      Symfony 3
      symfony3/src/news.php - база данных новостей
      Шаблон распложен в symfony3/app/Resources/views
      - base - основной шаблон
      - news, article - шаблон новостей и отдельной новости
      
      Yii 2
      yii2/models/news.php - база данных новостей
      Шаблон распложен в yii2/views
      - layouts/main - основной шаблон
      - site/news, site/article - представление новостей и отдельной новости
      Класс app\controllers\Date - виджет даты