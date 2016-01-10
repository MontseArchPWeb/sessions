create database GeoIP;

create table cities_locations(geoname_id int(10) PRIMARY KEY, locale_code varchar(2)
, continent_code varchar(2), continent_name varchar(20), country_iso_code varch
ar(2), country_name varchar(20), subdivision_1_iso_code varchar(3), subdivision
_1_name varchar(30), subdivision_2_iso_code varchar(3), subdivision_2_name varc
har(30), city_name varchar(30), metro_code varchar(30), time_zone varchar(30));

load data local infile '/www/project1/GeoLite2-City-Locations-es.csv' into table 
cities_locations fields terminated by ',' lines terminated by '\n' ignore 1 lines;

create table cities_blocks_ip4(network varchar(20), geoname_id int(10) references 
cities_locations(geoname_id), registered_country_geoname_id int(10), 
represented_country_geoname_id int(10), is_anonymous_proxy int(1), 
is_satellite_provider int(1), postal_code varchar(10), latitude varchar(20), 
longitude varchar(20));

load data local infile '/www/project1/GeoLite2-City-Blocks-IPv4.csv' int
o table cities_blocks_ip4 fields terminated by ',' lines terminated by '\n' ign
ore 1 lines;

create table countries_locations(geoname_id int(10), locale_code varchar(2), 
continent_code varchar(2), continent_name varchar(20), country_iso_code varchar(2), 
country_name varchar(20));

load data local infile '/www/project1/GeoLite2-Country-Locations-es.csv' into table 
countries_locations fields terminated by ',' lines terminated by '\n' ignore 1 lines;

create table countries_blocks_ip4(network varchar(20), geoname_id int(10), 
registered_country_geoname_id int(10), represented_country_geoname_id int(10), 
is_anonymous_proxy int(1), is_satellite_provider int(1));

load data local infile '/www/project1/GeoLite2-Country-Blocks-IPv4.csv' into table 
countries_blocks_ip4 fields terminated by ',' lines terminated by '\n' ignore 1 lines;

select l.city_name, b.latitude, b.longitude, b.network from cities_block
s_ip4 b INNER JOIN cities_locations l ON l.geoname_id = b.geoname_id where b.ne
twork = '83.43.204.0/24' OR b.network = '83.43.1.0/25';