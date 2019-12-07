SELECT `title`, `summary` FROM film
WHERE LCASE(`summary`) LIKE '%vincent%'
ORDER BY `id_film`;