-- get all teams
select * from team;

-- get all games for a specific week
select * from weekly_matches WHERE week_number = 11 order by id asc;

-- insert a game for the week
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(29, 12, 29, 2.5, 11, 2018, '2018-11-15');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(11, 5, 5, 3.5, 11, 2018, '2018-11-18');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(2, 9, 2, 3, 11, 2018, '2018-11-18');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(3, 7, 3, 3.5, 11, 2018, '2018-11-18');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(6, 20, 6, 3, 11, 2018, '2018-11-18');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(22, 26, 22, 8, 11, 2018, '2018-11-18');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(14, 31, 13, 2, 11, 2018, '2018-11-18');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(32, 13, 13, 3, 11, 2018, '2018-11-18');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(23, 30, 23, 1, 11, 2018, '2018-11-18');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(17, 10, 17, 7, 11, 2018, '2018-11-18');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(1, 25, 1, 4, 11, 2018, '2018-11-18');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(15, 27, 27, 5.5, 11, 2018, '2018-11-18');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(18, 16, 18, 2.5, 11, 2018, '2018-11-19');