-- What are the first and last names of the poeple whose favourite colour is red?

SELECT "people"."person_firstname", "people"."person_lastname"
FROM
"people"
INNER JOIN "favourites" USING("person_id")
INNER JOIN "colours" USING("colour_id")
WHERE "colour_name" = 'red'

--how many people chose blue as their favourite colour?
SELECT COUNT(*) AS "people"
FROM
"colours"
INNER JOIN "favourites" USING("colour_id")
WHERE "colour_name" = 'blue'

-- how many people had feelings on november 21, 2017
SELECT COUNT(*) AS "people"
FROM
"feelz"
WHERE "feelz_date" = '2017-11-21'

-- How many people had feelings on any given day?
SELECT "feelz_date" AS "day", COUNT(*) AS "people"
FROM
"feelz"
GROUP BY "day"


-- What are the top three most popular colours, and how many people favourited them?
SELECT "colour_name" AS "colour", COUNT(*) AS "people"
FROM
"colours"
INNER JOIN "favourites" USING("colour_id")
GROUP BY "colour_id"
ORDER BY "people" DESC
LIMIT 3

-- What are the full names of all the people who did not select a favourite colour?
SELECT *--"people"."person_firstname" || ' ' || "people"."person_lastname" AS "person"
FROM
"people"
LEFT JOIN "favourites" USING("person_id")
WHERE "colour_id" IS NULL
