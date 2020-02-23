#!/usr/bin/env bash

openapi-generator generate \
    -i http://adserver.loc/site/openapi \
    -g php \
    -t ./templates \
    -o . \
    -c generator.json \
    --git-user-id "adserver-online" \
    --git-repo-id "php-sdk"

rm -r ./docs
rm -r ./test
rm -r ./.openapi-generator
rm ./.travis.yml
rm ./git_push.sh
rm ./phpunit.xml.dist
rm ./.php_cs.cache

composer update

vendor/bin/php-cs-fixer fix --allow-risky=yes
