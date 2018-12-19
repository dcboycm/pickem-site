-- get all teams
select * from team;

-- get all games for a specific week
select * from weekly_matches WHERE week_number = 12 order by id asc;

-- insert a game for the week
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
<<<<<<< HEAD
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
=======
VALUES(16, 17, 16, 3.5, 15, 2018, '2018-12-13');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(24, 13, 13, 6, 15, 2018, '2018-12-15');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(10, 8, 10, 3, 15, 2018, '2018-12-15');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(20, 19, 20, 7, 15, 2018, '2018-12-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(7, 25, 7, 3, 15, 2018, '2018-12-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(3, 30, 3, 8, 15, 2018, '2018-12-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(14, 9, 14, 3, 15, 2018, '2018-12-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(4, 11, 4, 2.5, 15, 2018, '2018-12-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(6, 12, 6, 5.5, 15, 2018, '2018-12-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(23, 31, 23, 2.5, 15, 2018, '2018-12-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(15, 32, 15, 7, 15, 2018, '2018-12-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(2, 1, 2, 8.5, 15, 2018, '2018-12-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(28, 29, 29, 4.5, 15, 2018, '2018-12-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(27, 21, 21, 2, 15, 2018, '2018-12-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(18, 26, 18, 11, 15, 2018, '2018-12-16');
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
VALUES(5, 22, 22, 6, 15, 2018, '2018-12-17');
>>>>>>> 567ebd2b4203c9dd7173c838ed81c5f63489bde3
