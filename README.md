<h1 align="center"> Subscription API </h1>

## ✏️ About

REST API made with PHP 7.2.5, Symfony 5, Doctrine, NGINX, MYSQL, DDD, SOLID and Hexagonal Architecture.

## ⚙️ Running locally

Install dependencies

```bash
composer install
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
    │   │   ├── Query
    │   │   └── Service
    │   │
    │   ├── Domain
    │   │   ├── Entity
    │   │   └── Repository
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
    │               └── ALiveAction.php
    │
    └── Core
        └── Presentation
            └── Http
                └── Action

```

## 👤 Author

- **Leonardo Rocha**
  - Github: [@Lerooks](https://github.com/Lerooks)
