INSERT INTO ft_table (`login`, `group`, `creation_date`)
SELECT last_name, 'other', birthdate
FROM user_card
WHERE CHAR_LENGTH(last_name) < 9 and last_name LIKE '%a%' 
ORDER BY last_name
LIMIT 10;
