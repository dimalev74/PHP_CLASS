<?php


# Подключаем файлы
include_once 'geometry/GeometryFigure.php';
include_once 'geometry/Restangle.php';
include_once 'geometry/Sphere.php';

# Считываем необходимые нам значения GET
$params = [
    'figure' => $_GET['figure']
    // 'action' => $_GET['action']
];

# Создаем Класс переданный из figure
//** @var GeometryFigure $figure */
$figure = new $params['figure']();

echo $figure;

