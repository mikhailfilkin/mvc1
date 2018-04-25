<?php

class View {

    // формирование вида (виды отображающие контент страниц, общий для всех страниц шаблон, массив, 
    // содержащий элементы контента страницы (заполняется в модели) )
    function generate($content_view, $template_view, $data = null) {
        // подключается общий шаблон (вид), внутри которого будет встраиваться 
        // вид для отображения контента конкретной страницы
        include 'app/views/' . $template_view;
    }

}