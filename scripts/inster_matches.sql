-- get all teams
select * from team;

-- get all games for a specific week
select * from weekly_matches WHERE week_number = 17;

-- insert a game for the week
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(11, 12, 11, 7, 17, 2017, '2017-12-31');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(14, 13, 14, 4, 17, 2017, '2017-12-31');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(20, 6, 20, 12, 17, 2017, '2017-12-31');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(21, 24, 21, 15.5, 17, 2017, '2017-12-31');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(23, 32, 32, 3, 17, 2017, '2017-12-31');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(26, 9, 9, 2.5, 17, 2017, '2017-12-31');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(27, 8, 27, 13.5, 17, 2017, '2017-12-31');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(2, 5, 2, 4, 17, 2017, '2017-12-31');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(10, 16, 10, 3.5, 17, 2017, '2017-12-31');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(31, 15, 31, 6, 17, 2017, '2017-12-31');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(18, 28, 18, 4, 17, 2017, '2017-12-31');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(19, 4, 4, 3, 17, 2017, '2017-12-31');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(17, 25, 17, 7.5, 17, 2017, '2017-12-31');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(29, 1, 29, 8, 17, 2017, '2017-12-31');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(30, 22, 22, 7.5, 17, 2017, '2017-12-31');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(3, 7, 3, 9.5, 17, 2017, '2017-12-31');
