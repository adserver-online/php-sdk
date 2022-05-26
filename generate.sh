#!/usr/bin/env bash

# brew install openapi-generator

openapi-generator generate \
    -i http://adserver.online/site/openapi \
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
rm ./.php-cs-fixer.cache

composer update

vendor/bin/php-cs-fixer fix --allow-risky=yes
