-- get all teams
select * from team;

-- get all games for a specific week
select * from weekly_matches WHERE week_number = 12 order by id asc;

-- insert a game for the week
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(31, 15, 31, 4, 14, 2018, '2018-12-06');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(16, 3, 16, 6.5, 14, 2018, '2018-12-09');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(13, 14, 13, 4.5, 14, 2018, '2018-12-09');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(8, 5, 5, 1.5, 14, 2018, '2018-12-09');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(12, 2, 12, 5.5, 14, 2018, '2018-12-09');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(30, 22, 22, 8, 14, 2018, '2018-12-09');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(4, 24, 4, 3.5, 14, 2018, '2018-12-09');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(19, 21, 21, 7.5, 14, 2018, '2018-12-09');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(6, 18, 18, 3, 14, 2018, '2018-12-09');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(32, 23, 23, 3.5, 14, 2018, '2018-12-09');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(28, 10, 10, 5.5, 14, 2018, '2018-12-09');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(17, 7, 17, 14, 14, 2018, '2018-12-09');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(1, 11, 11, 2.5, 14, 2018, '2018-12-09');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(9, 26, 9, 3.5, 14, 2018, '2018-12-09');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(25, 27, 27, 11, 14, 2018, '2018-12-09');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(29, 20, 29, 3.5, 14, 2018, '2018-12-10');