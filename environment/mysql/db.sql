create database tournament;

use tournament;

create table subscriptions
(
	id int auto_increment,
	name varchar(255) null,
	cpf varchar(255) null,
	phone varchar(255) null,
	email varchar(255) null,
	favorite_pokemon varchar(255) null,
	note varchar(255) null,
	constraint subscriptions_pk
		primary key (id)
);

create unique index subscriptions_cpf_uindex
	on subscriptions (cpf);

create unique index subscriptions_email_uindex
	on subscriptions (email);
