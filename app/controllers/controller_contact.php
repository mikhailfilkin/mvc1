<?php

// extends Controller -> core -> controller.php -> class Controller
class Controller_Contact extends Controller {

    // переопределяю метод от Сontroller
    // передаются имена файлов вида c контентом страницы и общего шаблона
    function action_index() {
        $this->view->generate('contact_view.php', 'template_view.php');
    }

}
