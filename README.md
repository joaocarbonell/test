# JET TESTING 0.1

#### SET UP THE PROJECT
To run the docker and build the containers. The option `--build` is to force build, and `-d` is
to detach and not block the terminal.
```
docker-compose up --build -d
```
#### Dependencies
Need to run on the root of project
```
npm install
```
Access the PHP container and run the `composer install`
```
docker exec -ti php7.4_fpm_jet_project bash
composer install
```
or use this short version
```
docker exec -ti php7.4_fpm_jet_project composer install
```


#### Hosts
Add the follow domains att the hosts files
```
127.0.0.1       jet.test
```



#### Links

Design Patterns - https://refactoring.guru/design-patterns

PRs - https://www.php-fig.org/psr/

Git - https://git-scm.com/book/en/v2
