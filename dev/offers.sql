use offers;

drop table if exists offer;

create table offer (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, company varchar(200), 
    country varchar(20), state varchar(50), city varchar(100), position varchar(100), added timestamp(6), link varchar(300));

insert into offer (company,country,state,city,position, link) 
    values( "Google","United States","CA","Mountain View","JavaScript Developer", "http://google.com");
insert into offer (company,country,state,city,position, link) 
    values( "Facebook","United States","CA","Menlo Park","PHP Developer", "http://facebook.com");