create table products (
  id int not null auto_increment primary key,
  collection varchar(255),
  name varchar(255),
  belt varchar(20),
  color varchar(20),
  price int not null,
  url varchar(255),
  created datetime,
  modified datetime
);

desc products;

insert into products (collection, name, belt, color, price, url, created, modified) values
('AMERICAN CLASSIC', 'ARDMORE', 'metal', 'white', 68040, 'AMERICAN_ARDMORE_WHITE_68040.jpg', now(), now()),
('AMERICAN CLASSIC', 'INTRAMATIC', 'leather', 'white', 280800, 'AMERICAN_INTRAMATIC_WHITE_LEATHER_280800.jpg', now(), now()),
('AMERICAN CLASSIC', 'RAILROAD', 'metal', 'white', 84240, 'AMERICAN_RAILROAD_WHITE_84240.jpg', now(), now()),
('AMERICAN CLASSIC', 'BOULTON', 'leather', 'white', 69120, 'AMERICAN_BOULTON_WHITE_LEATHER_69120.jpg', now(), now()),
('JAZZ MASTER', 'CHRONO QUARTZ', 'metal', 'black', 98280, 'JAZZ_CHRONOQUARTZ_BLACK_98280.jpg', now(), now()),
('JAZZ MASTER', 'CHRONO QUARTZ', 'leather', 'white', 90720, 'JAZZ_CHRONOQUARTZ_WHITE_LEATHER_90720.jpg', now(), now()),
('JAZZ MASTER', 'AUTO CHRONO', 'metal', 'black', 199800, 'JAZZ_AUTOCHRONO_BLACK_199800.jpg', now(), now()),
('JAZZ MASTER', 'VIEWMATIC SKELETON GENT', 'metal', 'gray', 77760, 'JAZZ_GENT_GRAY_77760.jpg', now(), now()),
('JAZZ MASTER', 'VIEWMATIC SKELETON GENT', 'leather', 'silver', 71280, 'JAZZ_GENT_SILVER_LEATHER_71280.jpg', now(), now()),
('JAZZ MASTER', 'MAESTRO AUTO CHRONO', 'metal', 'blue', 199800, 'JAZZ_MAESTRO_BLUE_199800.jpg', now(), now()),
('AMERICAN CLASSIC', 'SPIRIT OF LIBERTY AUTO', 'metal', 'blue', 129600, 'AMERICAN_SPIRIT_BLUE_129600.jpg', now(), now()),
('AMERICAN CLASSIC', 'SPIRIT OF LIBERTY AUTO', 'leather', 'blue', 124200, 'AMERICAN_SPIRIT_BLUE_LEATHER_124200.jpg', now(), now()),
('JAZZ MASTER', 'THINLINE QUARTZ', 'metal', 'black', 58320, 'JAZZ_THINLINE_BLACK_58320.jpg', now(), now()),
('JAZZ MASTER', 'THINLINE QUARTZ', 'leather', 'silver', 58320, 'JAZZ_THINLINE_SILVER_LEATHER_58320.jpg', now(), now()),
('JAZZ MASTER', 'THINLINE SMALL SECOND QUARTZ', 'metal', 'gray', 59400, 'JAZZ_THINLINESECOND_GRAY_59400.jpg', now(), now()),
('JAZZ MASTER', 'THINLINE SMALL SECOND QUARTZ', 'leather', 'silver', 60480, 'JAZZ_THINLINESECOND_SILVER_LEATHER_60480.jpg', now(), now()),
('JAZZ MASTER', 'SEAVIEW CHRONO QUARTZ', 'metal', 'black', 113400, 'JAZZ_SEAVIEW_BLACK_113400.jpg', now(), now()),
('VENTURA', 'S QUARTZ', 'leather', 'white', 109080, 'VENTURA_S_WHITE_LEATHER_109080.jpg', now(), now());

select * from products;


botu
('AMERICAN CLASSIC', 'ARDMORE', 'leather', 'silver', 64800, 'AMERICAN_ARDMORE_SILVER_LEATHER_64800.jpg', now(), now()),
('JAZZ MASTER', 'AUTO CHRONO', 'metal', 'blue', 199800, 'JAZZ_AUTOCHRONO_BLUE_199800.jpg', now(), now()),
('AMERICAN CLASSIC', 'SPIRIT OF LIBERTY AUTO', 'leather', 'black', 124200, 'AMERICAN_SPIRIT_BLACK_LEATHER_124200.jpg', now(), now()),
('AMERICAN CLASSIC', 'SPIRIT OF LIBERTY AUTO', 'leather', 'gray', 124200, 'AMERICAN_SPIRIT_GRAY_LEATHER_124200.jpg', now(), now()),
('AMERICAN CLASSIC', 'SPIRIT OF LIBERTY AUTO CHRONO', 'leather', 'silver', 205200, 'AMERICAN_SPIRITCHRONO_SILVER_LEATHER_205200.jpg', now(), now()),
