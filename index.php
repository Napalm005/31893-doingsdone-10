<?php
// показывать или нет выполненные задачи
$show_complete_tasks = rand(0, 1);
$projects = ["Входящие", "Учеба", "Работа", "Домашние дела", "Авто"];
$tasks = [
	[
		'title' => 'Собеседование в IT компании',
		'date_completed' => '01.12.2019',
		'category' => 'Работа',
		'executed' => false
	],
	[
		'title' => 'Выполнить тестовое задание',
		'date_completed' => '25.12.2019',
		'category' => 'Работа',
		'executed' => false
    ],
    [
		'title' => 'Сделать задание первого раздела',
		'date_completed' => '21.12.2019',
		'category' => 'Учеба',
		'executed' => true
    ],
    [
		'title' => 'Встреча с другом',
		'date_completed' => '22.12.2019',
		'category' => 'Входящие',
		'executed' => false
    ],
    [
		'title' => 'Купить корм для кота',
		'date_completed' => null,
		'category' => 'Домашние дела',
		'executed' => false
    ],
    [
		'title' => 'Заказать пиццу',
		'date_completed' => null,
		'category' => 'Домашние дела',
		'executed' => false
    ]
];

/**
 * @param string $name
 * @param array $data
 * @return string $result
 */
function include_template(string $name, array $data): string {
    $name = 'templates/' . $name;
    $result = '';

    if (!file_exists($name)) {
        return $result;
    }

    ob_start();
    extract($data);
    require $name;

    $result = ob_get_clean();

    return $result;
}

/**
 * @param array $tasks
 * @param string $progectTitle
 * @return number $tasks_count
 */
function countTasks(array $tasks, string $progectTitle): int {
    $tasks_count = 0;

    foreach ($tasks as $key => $task) {
        if ($task['category'] !== $progectTitle) {
            continue;
        };
        $tasks_count++;
    };

    return $tasks_count;
}

/**
 * @param string $str
 * @return string $text
 */
function esc(string $str): string {
	$text = htmlspecialchars($str);
	return $text;
}

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

