-- get all teams
select * from team;

-- get all games for a specific week
select * from weekly_matches WHERE week_number = 12 order by id asc;

-- insert a game for the week
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(31, 32, 31, 10, 16, 2018, '2018-12-22');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(17, 3, 17, 4.5, 16, 2018, '2018-12-22');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(9, 30, 9, 7, 16, 2018, '2018-12-23');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(21, 4, 21, 12.5, 16, 2018, '2018-12-23');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(5, 2, 5, 2.5, 16, 2018, '2018-12-23');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(19, 15, 19, 4.5, 16, 2018, '2018-12-23');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(14, 23, 14, 9.5, 16, 2018, '2018-12-23');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(26, 13, 26, 1.5, 16, 2018, '2018-12-23');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(11, 20, 20, 5.5, 16, 2018, '2018-12-23');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(24, 12, 12, 3, 16, 2018, '2018-12-23');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(8, 7, 8, 7.5, 16, 2018, '2018-12-23');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(1, 18, 18, 14, 16, 2018, '2018-12-23');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(28, 6, 6, 4, 16, 2018, '2018-12-23');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(22, 27, 22, 5.5, 16, 2018, '2018-12-23');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(29, 16, 16, 2.5, 16, 2018, '2018-12-23');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(25, 10, 10, 2.5, 16, 2018, '2018-12-24');
