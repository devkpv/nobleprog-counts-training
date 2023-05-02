# nobleprog-counts-training
## Run command
URL - A valid URL
NEEDLE - The substring to search for
CASE_SENSITIVE - Make a string lowercase or not
```
docker container run --rm \
    -e URL='http://www.nobleprog.co.uk/' \
    -e NEEDLE='training' \
    -e CASE_SENSITIVE="0" \
    -v $(pwd):/app/ php:7.4-cli php /app/parser.php
```