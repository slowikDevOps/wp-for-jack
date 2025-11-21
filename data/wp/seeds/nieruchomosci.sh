#!/bin/bash

echo "Dodawanie przykładowych ogłoszeń..."

### 1. Luksusowy Apartament w Warszawie
ID1=$(wp post create --post_type=nieruchomosci \
  --post_title="Luksusowy apartament 78 m² | Powiśle, Warszawa" \
  --post_content="Nowoczesny apartament wykończony pod klucz, położony w samym sercu Powiśla. Wysokie sufity, duże przeszklenia, balkon z widokiem na bulwary wiślane." \
  --post_status=publish \
  --porcelain --allow-root)

wp post meta update $ID1 cena "1 890 000" --allow-root
wp post meta update $ID1 powierzchnia "78" --allow-root
wp post meta update $ID1 lokalizacja "Warszawa, Powiśle" --allow-root
wp post meta update $ID1 pokoje "3" --allow-root

### 2. Dom z ogrodem na obrzeżach Gdańska
ID2=$(wp post create --post_type=nieruchomosci \
  --post_title="Nowoczesny dom 145 m² z ogrodem | Gdańsk" \
  --post_content="Przestronny dom w zabudowie bliźniaczej, ogród 400 m², garaż na dwa auta, pompa ciepła, ogrzewanie podłogowe. Idealny dla rodziny." \
  --post_status=publish \
  --porcelain --allow-root)

wp post meta update $ID2 cena "1 290 000" --allow-root
wp post meta update $ID2 powierzchnia "145" --allow-root
wp post meta update $ID2 lokalizacja "Gdańsk, Łostowice" --allow-root
wp post meta update $ID2 pokoje "5" --allow-root

### 3. Minimalistyczne studio w centrum Krakowa
ID3=$(wp post create --post_type=nieruchomosci \
  --post_title="Studio 32 m² | Centrum, Kraków" \
  --post_content="Świeżo wyremontowane studio z wysokimi oknami, idealne pod wynajem krótkoterminowy. Wykończenie w stylu japandi." \
  --post_status=publish \
  --porcelain --allow-root)

wp post meta update $ID3 cena "589 000" --allow-root
wp post meta update $ID3 powierzchnia "32" --allow-root
wp post meta update $ID3 lokalizacja "Kraków, Stare Miasto" --allow-root
wp post meta update $ID3 pokoje "1" --allow-root

echo "Zakończono dodawanie ogłoszeń."
