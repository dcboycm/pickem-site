-- get all teams
select * from team;

-- get all games for a specific week
select * from weekly_matches WHERE week_number = 2;

-- insert a game for the week
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(13, 19, 13, 7.5, 8, 2018, '2018-10-25');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(15, 26, 26, 3, 8, 2018, '2018-10-28');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(27, 8, 27, 7.5, 8, 2018, '2018-10-28');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(16, 10, 16, 10, 8, 2018, '2018-10-28');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(6, 24, 6, 7, 8, 2018, '2018-10-28');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(23, 32, 23, 0, 8, 2018, '2018-10-28');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(11, 29, 11, 3, 8, 2018, '2018-10-28');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(7, 30, 7, 4.5, 8, 2018, '2018-10-28');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(5, 3, 3, 2, 8, 2018, '2018-10-28');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(25, 14, 14, 3, 8, 2018, '2018-10-28');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(1, 28, 1, 0, 8, 2018, '2018-10-28');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(18, 12, 18, 9.5, 8, 2018, '2018-10-28');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(20, 22, 20, 0, 8, 2018, '2018-10-28');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(4, 21, 21, 14, 8, 2018, '2018-10-29');