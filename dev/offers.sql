use offers;

drop table if exists offer;

create table offer (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    company varchar(200), 
    country varchar(20), 
    state varchar(50), 
    city varchar(100), 
    position varchar(100),
    salary int(10),
    added timestamp, 
    link varchar(300),
    description text,
    status varchar(30)
    );

insert into offer (company,country,state,city,position, salary, link, description, status) 
    values( "Google","United States","CA","Mountain View","JavaScript Developer", "100000", 
        "http://google.com","Google.com is looking for JavaScript developer", "not_responded");
insert into offer (company,country,state,city,position,salary, link, description, status) 
    values( "Facebook","United States","CA","Menlo Park","PHP Developer", "85000", "http://facebook.com",
        "We are looking for PHP developer", "rejected");