-- get all teams
select * from team;

-- get all games for a specific week
select * from weekly_matches WHERE week_number = 12 order by id asc;

-- insert a game for the week
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(23, 9, 23, 6, 17, 2018, '2018-12-30');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(16, 25, 16, 13.5, 17, 2018, '2018-12-30');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(22, 5, 22, 9, 17, 2018, '2018-12-30');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(21, 24, 21, 13.5, 17, 2018, '2018-12-30');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(32, 26, 26, 7, 17, 2018, '2018-12-30');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(12, 11, 12, 8, 17, 2018, '2018-12-30');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(13, 15, 13, 7, 17, 2018, '2018-12-30');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(3, 8, 3, 6, 17, 2018, '2018-12-30');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(30, 2, 30, 1, 17, 2018, '2018-12-30');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(4, 19, 4, 3.5, 17, 2018, '2018-12-30');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(31, 14, 14, 3, 17, 2018, '2018-12-30');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(27, 7, 27, 14, 17, 2018, '2018-12-30');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(20, 6, 20, 4.5, 17, 2018, '2018-12-30');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(10, 17, 17, 6.5, 17, 2018, '2018-12-30');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(29, 1, 29, 13.5, 17, 2018, '2018-12-30');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(18, 28, 18, 10, 17, 2018, '2018-12-30');
