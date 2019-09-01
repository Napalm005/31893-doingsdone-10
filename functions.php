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
