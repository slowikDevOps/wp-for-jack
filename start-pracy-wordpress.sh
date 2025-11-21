#!/bin/bash
# Skrypt instaluje WP-CLI w kontenerze WordPress

CONTAINER_NAME="wordpress"  # nazwa Twojego kontenera WordPress

echo "Sprawdzanie, czy kontener $CONTAINER_NAME działa..."
docker ps | grep -q $CONTAINER_NAME
if [ $? -ne 0 ]; then
    echo "Błąd: kontener $CONTAINER_NAME nie działa."
    exit 1
fi

echo "Pobieranie WP-CLI i instalacja w kontenerze..."
docker exec -it $CONTAINER_NAME bash -c "\
    curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
    chmod +x wp-cli.phar && \
    mv wp-cli.phar /usr/local/bin/wp && \
    wp --info --allow-root \
"

echo "WP-CLI powinien być teraz zainstalowany w kontenerze $CONTAINER_NAME."

