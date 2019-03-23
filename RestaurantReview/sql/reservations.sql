USE `restaurantreview`;
rename table reservation to reservations;

alter table reservations
add column Reservation_date timestamp NOT NULL,
add column Reservation_status varchar(10) NOT NULL;
