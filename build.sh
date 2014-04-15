#!/bin/bash
#
# build script for Framework application
#

# update classpaths
echo "[* Composer *] Updating classpaths"
composer dump-autoload

#run tests
# echo "[* PHPUnit *] Run testsuites"
# phpunit

echo "[* build completed! *]"