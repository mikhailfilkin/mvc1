<?php

// инициирует загрузку приложения (подключение необходимых модулей )

require 'core/model.php';
require 'core/view.php';
require 'core/controller.php';
require 'core/route.php'; // файл с классом маршрутизатора
Route::start(); // запуск маршрутизатора

