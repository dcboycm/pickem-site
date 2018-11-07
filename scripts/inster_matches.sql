-- get all teams
select * from team;

-- get all games for a specific week
select * from weekly_matches WHERE week_number = 10 order by id asc;

-- insert a game for the week
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(27, 5, 27, 4, 10, 2018, '2018-11-08');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(24, 4, 24, 7.5, 10, 2018, '2018-11-11');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(8, 2, 2, 4, 10, 2018, '2018-11-11');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(7, 22, 22, 4.5, 10, 2018, '2018-11-11');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(30, 32, 30, 3, 10, 2018, '2018-11-11');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(31, 21, 21, 6.5, 10, 2018, '2018-11-11');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(12, 19, 12, 9.5, 10, 2018, '2018-11-11');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(14, 15, 14, 3, 10, 2018, '2018-11-11');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(6, 11, 6, 6.5, 10, 2018, '2018-11-11');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(16, 1, 16, 16.5, 10, 2018, '2018-11-11');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(25, 17, 17, 10, 10, 2018, '2018-11-11');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(18, 29, 18, 10, 10, 2018, '2018-11-11');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(26, 9, 26, 6.5, 10, 2018, '2018-11-11');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(28, 23, 28, 3, 10, 2018, '2018-11-12');