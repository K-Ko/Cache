#!/bin/bash
### --------------------------------------------------------------------------
### Run phpunit tests
###
### @author   Knut Kohl <pv@knutkohl.de>
### @license  MIT License (MIT) http://opensource.org/licenses/MIT
### @version  PVLog JSON 1.1
### --------------------------------------------------------------------------

pwd=$(dirname $(readlink -f $0))

echo
$pwd/vendor/bin/phpunit -c $pwd/tests/phpunit.xml
