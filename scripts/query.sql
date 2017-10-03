SELECT * FROM test_matches WHERE week = 5 ORDER BY id ASC;

SELECT test_matches.id, nickname, pick_1, pick_2, pick_3, pick_4, pick_5, tiebreaker, paid, week, created_on_date
	FROM test_matches 
	INNER JOIN users ON (test_matches.user_id = users.email)
	WHERE week = 5 ORDER BY id ASC;
	
select user_id, pick_1, pick_2, pick_3, pick_4, pick_5, tiebreaker, paid from test_matches where week = 2 and paid = true;
SELECT nickname FROM users WHERE email = 'curtischristophermiller@gmail.com';
select * from test_matches where user_id = 'curtischristophermiller@gmail.com' and week = 2;
	
UPDATE test_matches SET pick_1 = 13 WHERE id = 69;
	
DELETE FROM test_matches WHERE id = 129;

INSERT INTO test_matches (user_id, pick_1, pick_2, pick_3, pick_4, pick_5, tiebreaker, paid, week) VALUES ('williams.markie@gmail.com', 21, 9, 15, 13, 16, 50, True, 4);
INSERT INTO test_matches (user_id, pick_1, pick_2, pick_3, pick_4, pick_5, tiebreaker, paid, week) VALUES ('williams.markie@gmail.com', 2, 23, 14, 11, 16, 45, True, 4);