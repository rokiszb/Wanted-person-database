 # Wanted person database system. 
 
 Third-party users allowed to access this system only via an API request through endpoint "http://127.0.0.1/api/wanted-persons" (if hosted locally) with request params {'fullName': 'My any query'} via JSON body. 
 This API endpoint is not accessible publicly. Without a valid token, the system will return an error message with code 403. 
 Users should pass the valid token via the X-API-KEY header and if a token is valid system returns a list of users with existing records matched by full name in JSON format.

API endpoint is only accessible via the HTTP POST method

Symfony framework

## Instalation

Use command line to run required commands. First of all, run composer. Create database, run migrations and fixtures to seed database with some test data.
```sh
$ composer install 
$ php bin/console doctrine:database:create 
$ php bin/console doctrine:schema:create
$ php bin/console doctrine:fixtures:load
```

Test api token: "hashedTokenPlaceholder".
