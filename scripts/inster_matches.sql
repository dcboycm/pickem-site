-- get all teams
select * from team;

-- get all games for a specific week
select * from weekly_matches WHERE week_number = 2;

-- insert a game for the week
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(23, 26, 26, 3, 6, 2018, '2018-10-11');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(20, 1, 20, 10.5, 6, 2018, '2018-10-14');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(8, 17, 17, 1, 6, 2018, '2018-10-14');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(19, 6, 6, 3, 6, 2018, '2018-10-14');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(32, 5, 32, 1, 6, 2018, '2018-10-14');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(24, 14, 24, 2.5, 6, 2018, '2018-10-14');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(7, 27, 7, 2.5, 6, 2018, '2018-10-14');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(2, 30, 2, 3.5, 6, 2018, '2018-10-14');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(25, 29, 29, 3, 6, 2018, '2018-10-14');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(13, 4, 13, 8, 6, 2018, '2018-10-14');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(10, 18, 10, 7, 6, 2018, '2018-10-14');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(9, 15, 15, 3, 6, 2018, '2018-10-14');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(31, 3, 3, 3, 6, 2018, '2018-10-14');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(21, 16, 21, 3.5, 6, 2018, '2018-10-14');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(12, 28, 12, 9.5, 6, 2018, '2018-10-15');