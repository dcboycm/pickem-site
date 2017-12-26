-- get all teams
select * from team;

-- get all games for a specific week
select * from weekly_matches WHERE week_number = 17;

-- insert a game for the week
INSERT INTO weekly_matches (team_home, team_away, team_fav, spread, week_number, week_year, match_date)
	VALUES(, , , , , 17, 2017, '2017-12-31');