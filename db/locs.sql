drop procedure if exists locs;

delimiter #

create procedure locs()
begin

declare v_counter int unsigned default 0;

create temporary table tmp engine=memory select * from location ORDER BY name ASC;

-- do stuff with tmp...

select count(*) into v_counter from tmp;

-- output and cleanup

select * from tmp;

drop temporary table if exists tmp;

end#

delimiter ;
