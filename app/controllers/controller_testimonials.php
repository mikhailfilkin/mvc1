<?php

// extends Controller -> core -> controller.php -> class Controller
class Controller_Testimonials extends Controller {

    // переопределяю метод от Сontroller
    // передаются имена файлов вида c контентом страницы и общего шаблона
    function action_index() {
        $this->view->generate('testimonials_view.php', 'template_view.php');
    }

}
