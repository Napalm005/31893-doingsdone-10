<?php
require_once('data.php');
require_once('helpers.php');
require_once('functions.php');

// показывать или нет выполненные задачи
$show_complete_tasks = rand(0, 1);

$page_content = include_template('main.php', [
    'projects' => $projects,
    'tasks' => $tasks
]);
$layout_content = include_template('layout.php', [
	'content' => $page_content,
	'title' => 'Дела в порядке'
]);

print($layout_content);
?>

