<h1 align="center"> Subscription API </h1>

## ✏️ About

REST API for pokemon tournament persistence.

Made with Symfony 5, Doctrine, Docker, NGINX, MySQL, DDD, SOLID and Hexagonal Architecture.

## ⚙️ Running locally

Install dependencies

```bash
composer install
```

Create database using the local mysql container

```sql
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

```

Start server

```bash
docker-compose up
```

## 📁 Structure

```
├── src
    ├── Tournament
    │   ├── Application
    │   │   ├── Command
    │   │   └── Service
    │   │
    │   ├── Domain
    │   │   ├── Entity
    │   │   ├── Repository
    │   │   └── Exception
    │   │
    │   ├── Infrastructure
    │   │   └── Persistence
    │   │       └── Doctrine
    │   │           ├── ORM
    │   │           └── Repository
    │   │
    │   └── Presentation
    │       └── Http
    │           └── Action
    │
    └── Core
        └── Presentation
            └── Http
                └── Action

```

## 👤 Author

- **Leonardo Rocha**
  - Github: [@Lerooks](https://github.com/Lerooks)
