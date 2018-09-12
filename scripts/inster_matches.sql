-- get all teams
select * from team;

-- get all games for a specific week
select * from weekly_matches WHERE week_number = 2;

-- insert a game for the week
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(7, 3, 3, 1, 2, 2018, '2018-09-13');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(2, 5, 2, 6, 2, 2018, '2018-09-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(4, 17, 17, 7.5, 2, 2018, '2018-09-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(12, 20, 20, 0, 2, 2018, '2018-09-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(31, 13, 13, 2, 2, 2018, '2018-09-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(22, 8, 22, 9, 2, 2018, '2018-09-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(24, 19, 24, 3, 2, 2018, '2018-09-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(27, 16, 27, 4.5, 2, 2018, '2018-09-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(30, 26, 26, 3, 2, 2018, '2018-09-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(32, 14, 32, 6, 2, 2018, '2018-09-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(18, 1, 18, 13, 2, 2018, '2018-09-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(28, 11, 28, 6, 2, 2018, '2018-09-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(10, 25, 10, 5.5, 2, 2018, '2018-09-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(15, 21, 21, 2, 2, 2018, '2018-09-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(9, 23, 9, 3, 2, 2018, '2018-09-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(6, 29, 6, 3, 2, 2018, '2018-09-17');