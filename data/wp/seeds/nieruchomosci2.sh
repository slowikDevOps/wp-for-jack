!/bin/bash
echo "Dodawanie brakujących ogłoszeń..."

# Ogłoszenie 4
wp post update 182 --post_title="Studio 32 m² | Centrum, Kraków" --post_status=publish --allow-root
wp post meta update 182 cena 589 --allow-root
wp post meta update 182 powierzchnia 32 --allow-root
wp post meta update 182 lokalizacja "Kraków, Stare Miasto" --allow-root
wp post meta update 182 pokoje 1 --allow-root
wp media import /var/www/html/wp-content/uploads/zdjecie4.jpeg --post_id=182 --title="zdjecie4" --featured_image --allow-root

# Ogłoszenie 5
wp post update 181 --post_title="Nowoczesny dom 145 m² z ogrodem | Gdańsk" --post_status=publish --allow-root
wp post meta update 181 cena 1 --allow-root
wp post meta update 181 powierzchnia 145 --allow-root
wp post meta update 181 lokalizacja "Gdańsk, Łostowice" --allow-root
wp post meta update 181 pokoje 5 --allow-root
wp media import /var/www/html/wp-content/uploads/zdjecie5.jpeg --post_id=181 --title="zdjecie5" --featured_image --allow-root

# Ogłoszenie 6
wp post update 180 --post_title="Luksusowy apartament 78 m² | Powiśle, Warszawa" --post_status=publish --allow-root
wp post meta update 180 cena 1 --allow-root
wp post meta update 180 powierzchnia 78 --allow-root
wp post meta update 180 lokalizacja "Warszawa, Powiśle" --allow-root
wp post meta update 180 pokoje 3 --allow-root
wp media import /var/www/html/wp-content/uploads/zdjecie6.jpeg --post_id=180 --title="zdjecie6" --featured_image --allow-root

echo "Dodano brakujące ogłoszenia."
