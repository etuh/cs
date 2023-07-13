# ConnectLocal

## What is ConnectLocal?

ConnectLocal is a web application built on CodeIgniter that facilitates an easy, fast and flexible way of connecting users to local repair services .



## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.


This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised as issues in the main repository.


## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)
- composer

# Installation
## Steps
1. Clone the repository

```sh
$ git clone https://github.com/etuh/cs.git
```
2. Navigate to the project directory
```sh
$ cs cs
```
3. Install the project dependencies using Composer
```sh
$ composer install
```
4. Copy the 'env' file to '.env'
```sh
$ cp .env.example .env
```
5. Generate application encryption key
```sh
$ php spark key:generate
```
6. Edit the .env file and configure the database settings according to your environment
```sh
# Database
database.default.hostname = your_database_hostname
database.default.database = your_database_name
database.default.username = your_database_username
database.default.password = your_database_password
database.default.DBDriver = MySQLi
```
7. Start the development server
```sh 
$ php spark serve
```
8. Open your web browser and visit http://localhost:8080 to access Connectlocal.

For production environments...

```sh
npm install --production
NODE_ENV=production node app
```
# Contributing

If you would like to contribute to Connectlocal, please follow the steps below:

1. Fork the repository on 
2. Create a new branch for your feature/fix:
```sh
$ git checkout -b my-feature
```
3. Make your modifications and commit your changes.
4. Push your branch to your forked repository.
5. Open a pull request on the main Connectlocal repository.

# License

Connectlocal is released under the [MIT License](https://github.com/etuh/cs/blob/main/LICENSE). Feel free to use, modify, and distribute this project according to the terms of the license.
# Contact

If you have any questions or feedback regarding Connectlocal, please feel free to contact the project maintainer:

GitHub: [etuh](https://github.com/etuh)