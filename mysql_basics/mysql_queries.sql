Place your queries below

-- Feature Set 1

SELECT * FROM `students` WHERE `name`= 'Brian'
UPDATE `students` SET `email`='pugs4life@gmail.com' WHERE `name`='Brian'
INSERT INTO `students` SET `name`='Bill', `password`='things', `age`='30', `email`='bill@gmail.com'
DELETE FROM `students` WHERE `name`= 'Bill'


-- Feature Set 2

INSERT INTO `cohort9_testdb`.`todo_items` (`ID`, `title`, `details`, `timestamp`, `user_id`) VALUES (NULL, 'Buy milk', 'the good one', CURRENT_TIMESTAMP, '3'), (NULL, 'Buy cookies', 'the good ones', CURRENT_TIMESTAMP, '1'), (NULL, 'Buy meat', 'the good one', CURRENT_TIMESTAMP, '2'), (NULL, 'Buy sauce', 'the red one', CURRENT_TIMESTAMP, '9'), (NULL, 'Light a fire', 'use a match', CURRENT_TIMESTAMP, '9'), (NULL, 'Cook the meat', 'on the fire', CURRENT_TIMESTAMP, '7'), (NULL, 'Eat the meat', 'use your hands', CURRENT_TIMESTAMP, '6'), (NULL, 'Eat the cookies', 'nom nom nom', CURRENT_TIMESTAMP, '4'), (NULL, 'Drink the milk', 'it does a body good', CURRENT_TIMESTAMP, '10'), (NULL, 'Sleep', 'zzzz..', CURRENT_TIMESTAMP, '11');

-- select all todos made by a user
SELECT * FROM `todo_items` WHERE `user_id`='4'
-- insert a new todo item made by user
INSERT INTO `todo_items` SET `title`='buy beer', `details`='brown kind', `user_id`='4'
-- delete a todo item by that user
DELETE FROM `todo_items` WHERE `title`='Eat the cookies'
-- update a todo item
UPDATE `todo_items` SET `details`='the tan one' WHERE `user_id`= '4'
-- select all in for from user by its id
SELECT * FROM `todo_items` JOIN `students` ON todo_items.user_id=students.ID WHERE `user_id`='9'
