[![Build Status](https://travis-ci.org/freshp/mutant-testing-example.svg?branch=master)](https://travis-ci.org/freshp/mutant-testing-example)

freshp/mutant-testing-example
================

This is just an example of infection integration. Try to play around with this nifty package and change source directories in `infection.json` for example.

## readlist:
* [github](https://github.com/infection/infection)
* [github.io doku](https://infection.github.io/)
* [blog alejandrocelaya](https://blog.alejandrocelaya.com/2018/02/17/mutation-testing-with-infection-in-big-php-projects/)
* [medium.com](https://medium.com/@maks_rafalko/infection-mutation-testing-framework-c9ccf02eefd1)
* [in2it](https://www.in2it.be/2018/05/mutation-testing-with-infection/)
* [eleven labs](https://blog.eleven-labs.com/en/mutation-testing-check-quality-unit-tests/)
* [Stephan Hochdörfer talk](https://www.youtube.com/watch?v=BNS2AP1PhsU)

## scores
* msi => percentage of mutants covered & killed by tests
* mcc => percentage of mutatnts covered by tests
* cc msi => percentage of killed mutants that were covered by tests

## run checks
Run each command in the project root directory.

### execute PHPUnit tests
```
XDEBUG_MODE=coverage ./vendor/bin/phpunit -c ./phpunit.xml  --coverage-xml=./build/coverage/coverage-xml --log-junit=./build/coverage/phpunit.junit.xml
```

### execute mutation tests
```
./vendor/bin/infection --coverage=./build/coverage --threads=4 --min-msi=70 --log-verbosity=all
```
