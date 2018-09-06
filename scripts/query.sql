SELECT * FROM test_matches WHERE week = 1 ORDER BY user_id ASC;

SELECT test_matches.id, nickname, pick_1, pick_2, pick_3, pick_4, pick_5, tiebreaker, paid, week, created_on_date
	FROM test_matches
	INNER JOIN users ON (test_matches.user_id = users.email)
	WHERE week = 1 ORDER BY id ASC;
	
select user_id, pick_1, pick_2, pick_3, pick_4, pick_5, tiebreaker, paid from test_matches where week = 2 and paid = true;
SELECT nickname FROM users WHERE email = 'curtischristophermiller@gmail.com';
select * from test_matches where user_id = 'curtischristophermiller@gmail.com' and week = 2;

UPDATE test_matches SET pick_5 = 1 WHERE id = 316;

INSERT into test_matches (id, user_id, pick_1, pick_2, pick_3, pick_4, pick_5, tiebreaker, paid, week, created_on_date)
	VALUES (221, 'curtischristophermiller@gmail.com', 20, 16, 15, 18, 26, 45, true, 13, '2017-12-02 02:53:51.869147+00');
	
DELETE FROM test_matches WHERE id = 440;

select * from team;
select * from users;

INSERT INTO test_matches (user_id, pick_1, pick_2, pick_3, pick_4, pick_5, tiebreaker, paid, week) VALUES ('williams.markie@gmail.com', 32, 5, 4, 9, 11, 41, True, 17);
INSERT INTO test_matches (user_id, pick_1, pick_2, pick_3, pick_4, pick_5, tiebreaker, paid, week) VALUES ('gaguirre1979@gmail.com', 18, 21, 31, 25, 2, 40, True, 15);
