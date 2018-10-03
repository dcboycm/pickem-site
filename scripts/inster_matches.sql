-- get all teams
select * from team;

-- get all games for a specific week
select * from weekly_matches WHERE week_number = 2;

-- insert a game for the week
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(21, 14, 21, 10.5, 5, 2018, '2018-10-04');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(8, 3, 3, 3, 5, 2018, '2018-10-07');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(16, 15, 16, 3, 5, 2018, '2018-10-07');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(4, 31, 31, 3, 5, 2018, '2018-10-07');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(5, 23, 5, 7, 5, 2018, '2018-10-07');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(24, 10, 24, 1, 5, 2018, '2018-10-07');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(27, 2, 27, 3, 5, 2018, '2018-10-07');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(11, 12, 12, 1.5, 5, 2018, '2018-10-07');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(7, 19, 7, 6, 5, 2018, '2018-10-07');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(17, 25, 17, 6, 5, 2018, '2018-10-07');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(28, 1, 28, 4, 5, 2018, '2018-10-07');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(26, 20, 26, 3, 5, 2018, '2018-10-07');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(29, 18, 18, 7, 5, 2018, '2018-10-07');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(13, 9, 13, 3.5, 5, 2018, '2018-10-07');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(22, 32, 22, 6.5, 5, 2018, '2018-10-08');
