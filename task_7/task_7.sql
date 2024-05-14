SELECT *
FROM Users
WHERE SURNAME LIKE 'А%'  -- Фамилия начинается с буквы "А"
  AND SALARY >= 100000;  -- Зарплата больше или равна 100000
