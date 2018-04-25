<?php

// Маршрутизация
// сlass Route -> запускает методы контроллеров -> генерация вида страниц

class Route {

    static function start() {
        // кортроллер и действие по умолчанию
        $controller_name = 'Home';
        $action_name = 'index';

        // разделение адреса на составляющие (имя controller, имя action)
        $routes = explode('/', $_SERVER['REQUEST_URI']);

        // получаем имя контроллера
        if (!empty($routes[1])) {
            $controller_name = $routes[1];
        }

        // получаем имя action
        if (!empty($routes[2])) {
            $action_name = $routes[2];
        }

        // добавление префиксов
        $model_name = 'Model_' . $controller_name;
        $controller_name = 'Controller_' . $controller_name;
        $action_name = 'action_' . $action_name;

        // файл с классом модели 
        $model_file = strtolower($model_name) . '.php';
        $model_path = "app/models/" . $model_file;

        if (file_exists($model_path)) {
            include "app/models/" . $model_file;
        }

        // файл с классом контроллера
        $controller_file = strtolower($controller_name) . '.php';
        $controller_path = "app/controllers/" . $controller_file;

        if (file_exists($controller_path)) {
            include "app/controllers/" . $controller_file;
        } else {
            // редирект на страницу 404			
            Route::ErrorPage404();
        }

        // создаем контроллер
        $controller = new $controller_name;
        $action = $action_name;

        if (method_exists($controller, $action)) {
            // вызываем действие контроллера
            $controller->$action();
        } else {
            Route::ErrorPage404();
        }
    }

    static function ErrorPage404() {
        $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:' . $host . '404');
    }

}
