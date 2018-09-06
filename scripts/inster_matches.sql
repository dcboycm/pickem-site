-- get all teams
select * from team;

-- get all games for a specific week
select count(*) from weekly_matches WHERE week_number = 1;

-- insert a game for the week
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(26, 2, 26, 3.5, 1, 2018, '2018-09-06');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(8, 27, 27, 6.0, 1, 2018, '2018-09-09');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(20, 28, 20, 5.5, 1, 2018, '2018-09-09');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(14, 7, 14, 3.0, 1, 2018, '2018-09-09');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(3, 4, 3, 6.0, 1, 2018, '2018-09-09');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(23, 15, 15, 3.0, 1, 2018, '2018-09-09');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(22, 30, 22, 9.5, 1, 2018, '2018-09-09');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(21, 13, 21, 6.5, 1, 2018, '2018-09-09');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(19, 31, 31, 1.5, 1, 2018, '2018-09-09');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(17, 16, 17, 3.5, 1, 2018, '2018-09-09');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(10, 29, 10, 2.5, 1, 2018, '2018-09-09');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(5, 9, 5, 3.0, 1, 2018, '2018-09-09');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(1, 32, 1, 1.0, 1, 2018, '2018-09-09');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(12, 6, 12, 8.0, 1, 2018, '2018-09-09');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(11, 24, 11, 7.0, 1, 2018, '2018-09-10');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(25, 18, 18, 3.0, 1, 2018, '2018-09-10');