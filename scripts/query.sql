SELECT * FROM test_matches WHERE week = 17 ORDER BY user_id ASC;

select * from users;

DELETE FROM test_matches WHERE id = 678;

UPDATE test_matches SET paid = true WHERE id = 550;

SELECT test_matches.id, nickname, pick_1, pick_2, pick_3, pick_4, pick_5, tiebreaker, paid, week, created_on_date
	FROM test_matches
	INNER JOIN users ON (test_matches.user_id = users.email)
	WHERE week = 17 ORDER BY id ASC;
    
SELECT test_matches.id, nickname, pick_1, pick_2, pick_3, pick_4, pick_5, tiebreaker, paid, week, created_on_date
	FROM test_matches
	INNER JOIN users ON (test_matches.user_id = users.email)
	WHERE week = 17 AND paid = false ORDER BY id ASC;
	
select user_id, pick_1, pick_2, pick_3, pick_4, pick_5, tiebreaker, paid from test_matches where week = 2 and paid = true;
SELECT nickname FROM users WHERE email = 'curtischristophermiller@gmail.com';
select * from test_matches where user_id = 'curtischristophermiller@gmail.com' and week = 2;

UPDATE test_matches SET pick_5 = 1 WHERE id = 316;

INSERT into test_matches (id, user_id, pick_1, pick_2, pick_3, pick_4, pick_5, tiebreaker, paid, week, created_on_date)
	VALUES (678, 'curtischristophermiller@gmail.com', 24, 19, 12, 29, 22, 45, true, 15, '2018-12-15 04:30:55.86527+00');
	
DELETE FROM test_matches WHERE id = 440;

select * from team;
select * from users order by id asc;
select * from users where email = 'jermaine.johnson@me.com';

INSERT INTO test_matches (user_id, pick_1, pick_2, pick_3, pick_4, pick_5, tiebreaker, paid, week) VALUES ('williams.markie@gmail.com', 32, 5, 4, 9, 11, 41, True, 17);
INSERT INTO test_matches (user_id, pick_1, pick_2, pick_3, pick_4, pick_5, tiebreaker, paid, week) VALUES ('david.galvan12@gmail.com', 14, 26, 8, 27, 16, 54, true, 4);
