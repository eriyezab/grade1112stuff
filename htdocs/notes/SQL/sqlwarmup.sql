-- What are the first and last names of all the students in the database? (Your answer should contain 85 rows and 2 columns called "student_firstname" and "student_lastname".)
SELECT "student_firstname", "student_lastname"
FROM "students"


-- What is the name of the class that Liam Widdup is registered in? (Your answer should contain 1 row and 1 column called "class_name".)
SELECT "class_name"
FROM

	"classes"
	INNER JOIN "rosters" USING("class_id")
	INNER JOIN "students" USING("student_id")

WHERE "student_firstname" = 'Liam' AND "student_lastname" = 'Widdup'


-- How many students are registered in Computer Science 20? (Your answer should contain 1 row and 1 column called "students".)
SELECT COUNT(*) AS "students"
FROM

	"classes"
	INNER JOIN "rosters" USING("class_id")
	INNER JOIN "students" USING("student_id")

WHERE "classes"."class_name" = 'Computer Science 20'


-- How many students are registered in Computer Science 20, broken down by period? (Your answer should contain 2 rows and 2 columns called "period" and "students".) Display the results in descending order of the number of students.
SELECT "classes"."class_period", COUNT(*) AS "students"
FROM

	"classes"
	INNER JOIN "rosters" USING("class_id")

WHERE "classes"."class_name" = 'Computer Science 20'
GROUP BY "classes"."class_id"
ORDER BY "students" DESC

-- How many students are registered in the largest class I teach? (Your answer should contain 1 row and 1 column called "students".) (Hint: Consider building on your answer to Question 4.)
SELECT COUNT(*) AS "students"
FROM

	"rosters"
	INNER JOIN "students" USING("student_id")

GROUP BY "rosters"."class_id"
ORDER BY "students" DESC
LIMIT 1

-- What is the full name of the student with the lowest average, and what is their average? (Your answer should contain 1 row and 2 columns called "student" and "average".)
SELECT "student_firstname" || ' ' || "student_lastname" AS "student", AVG("grade_percent") AS "average"
FROM

	"students"
	INNER JOIN "grades" USING("student_id")

WHERE 1
GROUP BY "students"."student_id"
ORDER BY "average" ASC
LIMIT 1