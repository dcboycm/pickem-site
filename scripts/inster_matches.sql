-- get all teams
select * from team;

-- get all games for a specific week
select * from weekly_matches WHERE week_number = 2;

-- insert a game for the week
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(28, 25, 28, 3, 9, 2018, '2018-11-1');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(20, 11, 20, 4.5, 9, 2018, '2018-11-4');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(8, 16, 16, 8.5, 9, 2018, '2018-11-4');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(3, 27, 3, 3, 9, 2018, '2018-11-4');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(5, 30, 5, 6.5, 9, 2018, '2018-11-4');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(19, 24, 19, 3, 9, 2018, '2018-11-4');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(32, 2, 32, 1.5, 9, 2018, '2018-11-4');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(4, 6, 6, 9, 9, 2018, '2018-11-4');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(10, 13, 10, 2.5, 9, 2018, '2018-11-4');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(29, 17, 29, 1.5, 9, 2018, '2018-11-4');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(22, 18, 22, 1.5, 9, 2018, '2018-11-4');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(21, 12, 21, 6, 9, 2018, '2018-11-4');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(9, 31, 9, 6.5, 9, 2018, '2018-11-5');