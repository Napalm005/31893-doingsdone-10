<?php
/**
 * Считает и возвращает количестко задач в категории
 *
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
 * Проверяет, осталось ли до задачи менее 24 часов
 *
* @param string $taskDate
* @return bool
*/
function isHotTask($taskDate) {
	date_default_timezone_set("Europe/Moscow");

	// Если дата окончания не указана, возвращаем ложь 
	if (is_null($taskDate)) {
		return false;
	};

	// Получить текущий timestamp
	$ts = time();
	
	// Узнаем когда протухнет таска
	$end_ts = strtotime($taskDate);
	
	// В одном дне 86400 секунд
	$secs_in_day = 86400;

	// Разница между временем текущим и временем завершения таски
	$ts_diff = $end_ts - $ts;

	return $ts_diff <= $secs_in_day;
}
