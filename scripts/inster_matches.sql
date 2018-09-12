-- get all teams
select * from team;

-- get all games for a specific week
select count(*) from weekly_matches WHERE week_number = 2;

-- insert a game for the week
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(7, 3, , , 2, 2018, '2018-09-13');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(2, 5, , , 2, 2018, '2018-09-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(4, 17, , , 2, 2018, '2018-09-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(12, 20, , , 2, 2018, '2018-09-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(31, 13, , , 2, 2018, '2018-09-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(22, 8, , , 2, 2018, '2018-09-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(24, 19, , , 2, 2018, '2018-09-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(27, 16, , , 2, 2018, '2018-09-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(30, 26, , , 2, 2018, '2018-09-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(32, 14, , , 2, 2018, '2018-09-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(18, 1, , , 2, 2018, '2018-09-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(28, 11, , , 2, 2018, '2018-09-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(10, 25, , , 2, 2018, '2018-09-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(15, 21, , , 2, 2018, '2018-09-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(9, 23, , , 2, 2018, '2018-09-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(6, 29, , , 2, 2018, '2018-09-17');