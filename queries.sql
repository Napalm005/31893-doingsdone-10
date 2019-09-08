-- Заполняем таблицу юзеров
INSERT INTO users (email, name, password, dt_add)
VALUES ('john.smith@gmail.com', 'John', 'Qwert12345', NOW()), ('vasia@gmail.com', 'Vasia', '12345Qwert', NOW());

-- Заполняем таблицу с проектами
INSERT INTO project (name, user_id)
VALUES ('Входящие', 1), ('Учеба', 2), ('Работа', 1), ('Домашние дела', 2), ('Авто', 1);

-- Заполняем таблицу с задачами
INSERT INTO tasks (created_at, executed, title, file_path, date_completed, project_id)
VALUES (NOW(), 0, 'Собеседование в IT компании', '', '01.12.2019', 3),
			 (NOW(), 0, 'Выполнить тестовое задание', '', '25.12.2019', 3),
			 (NOW(), 1, 'Сделать задание первого раздела', '', '21.12.2019', 2),
			 (NOW(), 0, 'Встреча с другом', '', '22.12.2019', 1),
			 (NOW(), 0, 'Купить корм для кота', '', NULL, 4),
			 (NOW(), 0, 'Заказать пиццу', '', NULL, 4);

-- Получить список из всех проектов для одного пользователя
SELECT * FROM users WHERE email LIKE 'john.smith@gmail.com';

-- Получить список из всех задач для одного проекта
SELECT * FROM tasks WHERE project_id LIKE 1;

-- Пометить задачу как выполненную
UPDATE tasks SET executed = 1 WHERE id = 6;

-- Обновить название задачи по её идентификатору
UPDATE tasks SET title = 'Собеседование в IT компании Яндекс' WHERE id = 1;
