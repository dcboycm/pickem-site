SELECT * FROM test_matches WHERE week = 12 ORDER BY user_id ASC;

SELECT test_matches.id, nickname, pick_1, pick_2, pick_3, pick_4, pick_5, tiebreaker, paid, week, created_on_date
	FROM test_matches
	INNER JOIN users ON (test_matches.user_id = users.email)
	WHERE week = 12 ORDER BY id ASC;

select user_id, pick_1, pick_2, pick_3, pick_4, pick_5, tiebreaker, paid from test_matches where week = 2 and paid = true;
SELECT nickname FROM users WHERE email = 'curtischristophermiller@gmail.com';
select * from test_matches where user_id = 'curtischristophermiller@gmail.com' and week = 2;

UPDATE test_matches SET pick_5 = 1 WHERE id = 316;

INSERT into test_matches (id, user_id, pick_1, pick_2, pick_3, pick_4, pick_5, tiebreaker, paid, week, created_on_date)
	VALUES (221, 'curtischristophermiller@gmail.com', 27, 18, 26, 22, 21, 45, true, 11, '2017-11-15 02:53:51.869147+00');

DELETE FROM test_matches WHERE id = 221;

INSERT INTO test_matches (user_id, pick_1, pick_2, pick_3, pick_4, pick_5, tiebreaker, paid, week) VALUES ('michael.austin@ableengineering.com', 8, 24, 2, 22, 16, 44, True, 6);
INSERT INTO test_matches (user_id, pick_1, pick_2, pick_3, pick_4, pick_5, tiebreaker, paid, week) VALUES ('williams.markie@gmail.com', 2, 23, 14, 11, 16, 45, True, 4);
