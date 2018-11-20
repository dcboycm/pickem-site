-- get all teams
select * from team;

-- get all games for a specific week
select * from weekly_matches WHERE week_number = 12 order by id asc;

-- insert a game for the week
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(11, 6, 6, 4, 12, 2018, '2018-11-22');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(9, 32, 9, 7.5, 12, 2018, '2018-11-22');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(22, 2, 22, 13, 12, 2018, '2018-11-22');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(4, 15, 15, 3, 12, 2018, '2018-11-25');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(3, 25, 3, 11, 12, 2018, '2018-11-25');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(30, 28, 30, 3.5, 12, 2018, '2018-11-25');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(26, 23, 26, 6, 12, 2018, '2018-11-25');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(7, 8, 7, 3, 12, 2018, '2018-11-25');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(24, 21, 21, 9.5, 12, 2018, '2018-11-25');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(5, 29, 5, 3.5, 12, 2018, '2018-11-25');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(14, 19, 14, 9.5, 12, 2018, '2018-11-25');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(17, 1, 17, 12, 12, 2018, '2018-11-25');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(10, 27, 27, 3, 12, 2018, '2018-11-25');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(20, 12, 20, 3.5, 12, 2018, '2018-11-25');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(13, 31, 13, 6, 12, 2018, '2018-11-26');
