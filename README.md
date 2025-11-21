Jacuś,

backup jest na REPO więc możesz działać. Kredki via priv.
Pamiętaj, że działasz na linuxie :) 

Jedyne czego możesz dotykać to rzeczy z katalogu:
`/wp/data/wp/wp-content/themes/agencja-nieruchomosci` 



1. Przeanalizuj sobie trukturę, co gdzie jest.
2. Sprawdź pliki z lokalizacji: 

`/wp/data/wp/wp-content/themes/agencja-nieruchomosci`

Poczytaj sobie i przeanalizuj co robią poniższe komendy:
```
wp rewrite flush --allow-root
wp post list --post_type=nieruchomosci --allow-root
wp theme activate agencja-nieruchomosci --allow-root
wp rewrite flush --allow-root
wp media import /var/www/html/wp-content/uploads/zdjecie1.jpeg --post_id=185 --title='zdjecie1' --featured_image --allow-root
wp media import /var/www/html/wp-content/uploads/zdjecie2.jpeg --post_id=184 --title='zdjecie2' --featured_image --allow-root
wp media import /var/www/html/wp-content/uploads/zdjecie3.jpeg --post_id=183 --title='zdjecie3' --featured_image --allow-root
wp post list --post_type=nieruchomosci --allow-root
wp theme activate agencja-nieruchomosci --allow-root
wp post list --post_type=page --allow-root
wp post delete 178,176,155 --force --allow-root
wp post create --post_type=page --post_title='Strona Główna' --post_status=publish --allow-root
wp option update page_on_front 197 --allow-root
wp theme activate agencja-nieruchomosci --allow-root
wp post create --post_type=page --post_title='Strona Główna' --post_status=publish --allow-root
wp option get show_on_front --allow-root
wp option get page_on_front --allow-root
wp post list --post_type=page --allow-root
wp post delete 155 --force --allow-root
wp option update show_on_front 'page' --allow-root
wp option update page_on_front 200 --allow-root
wp option get show_on_front --allow-root
wp option get page_on_front --allow-root
wp cache flush --allow-root
wp post list --post_type=page --allow-root --field=ID
wp post delete 200 --force --allow-root
wp post create --post_type=page --post_title='Strona Główna' --post_status=publish --allow-root
wp option update show_on_front 'page' --allow-root
wp option update page_on_front 214 --allow-root
wp theme activate agencja-nieruchomosci --allow-root
wp cache flush --allow-root
```

3. Skrypty ładujące dnowe oferty: `/wp/data/wp/seeds` - sprawdź ich zawartość. 
4. Tutaj są zdjęcia ofert. `/wp/data/wp/wp-content/uploads`

Jak to opanujesz, odezwij się po więcej :) 

GL & HF! 
