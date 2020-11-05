SELECT UCASE(user_card.last_name) AS 'NAME', user_card.first_name, subscription.price
FROM member
INNER JOIN user_card ON member.id_user_card = user_card.id_user
INNER JOIN subscription ON member.id_sub =  subscription.id_sub
WHERE subscription.price > 42
ORDER BY user_card.last_name, user_card.first_name;