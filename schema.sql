create table travels (
       id integer primary key auto_increment,
       name varchar(100) not null,
       stars integer not null
) engine=innodb;

create table locations (
       id integer primary key auto_increment,
       name varchar(100) not null
) engine=innodb;

create table travel_locations (
       id integer primary key auto_increment,
       travel integer not null,
       location integer not null,
       constraint unique_travel_location unique (travel, location)
) engine=innodb;
