-- SELECT "student_firstname", "student_lastname" FROM "students", "rosters", "classes" WHERE "classes"."class_id" = "rosters"."class_id" AND "students"."student_id" = "rosters"."student_id" AND "classes"."class_name" = 'Computer Science 30' AND "classes"."class_period" = 2

SELECT "students"."student_firstname", "students"."student_lastname", "assignments"."assignment_name", "grades"."grade_percent" FROM "grades", "assignments", "classes", "rosters", "students" WHERE "classes"."class_id" = "rosters"."class_id" AND "students"."student_id" = "rosters"."student_id" AND "assignments"."class_id" = "classes"."class_id" AND "classes"."class_name" = 'Workplace Math 10' AND "assignments"."class_id" = "rosters"."class_id" AND "assignments"."assignment_id" = "grades"."assignment_id" AND "students"."student_id" = "grades"."student_id" ORDER BY "students"."student_lastname" ASC

--what are the names of teh assignments given to class #3

SELECT "assignment_name" FROM "assignments" WHERE "class_id" = 3 ORDER BY "assignment_name" ASC

-- WHAT ARE THE NAMES OF THE ASSIGNMENTS GIVEN TO WORKPLACE MATH 10

SELECT "assignment_name" FROM "assignments", "classes" WHERE "classes"."class_id" = "assignments"."class_id" AND "classes"."class_name" = 'Workplace Math 10'

-- WHAT ARE THE NAMES OF ALL THE ASSGNMENTS THAT WERE ASSIGNED TO CARTER DONALD

SELECT "assignment_name"
FROM "assignments", "students", "rosters"
WHERE "students"."student_id" = "rosters"."student_id" AND "assignments"."class_id" = "rosters"."class_id" AND "student_firstname" = 'Carter' AND "student_lastname" = 'Donald'

-- WHATARE THE NAMES OF ALL THE ASSIGNMENTS ASSIGNED TO CARTER DONALD AND WHAT GRADES DID HE RECEIVE ON THEM IN DESCENDING ORDER OF THEIR GRADE

SELECT "assignment_name" AS "Assignment", "grade_percent" AS "Mark"
FROM "assignments", "students", "rosters", "grades"
WHERE "students"."student_id" = "rosters"."student_id" AND "assignments"."class_id" = "rosters"."class_id" AND "student_firstname" = 'Eriyeza' AND "student_lastname" = 'Buwembo' AND "students"."student_id" = "grades"."student_id" AND "assignments"."assignment_id" = "grades"."assignment_id"
ORDER BY "grade_percent" DESC

--what are the names of the students reGistered in CS 20? And which period are they in? Sort them by their period, in ascending order, and then by their last name in ascending order, followed finally by their first name, in ascending order.

SELECT "student_firstname" AS "firstname", "student_lastname" AS "lastname", "class_name" AS "class", "class_period" AS "period"
FROM

	"students"
	INNER JOIN "rosters" USING("student_id")
	INNER JOIN "classes" USING("class_id")

WHERE

	"class_name" = 'Computer Science 20'

ORDER BY "class_period", "student_lastname", "student_firstname" ASC



NEW CLAUSE:

LIMIT:


-- putting functios in our queries:

SELECT "student_firstname" || ' ' || "student_lastname" AS "fullname"FROM "students"

-- what are the full names and grades for the highest five scores on the proportions test assignment
SELECT "student_firstname" || ' ' || "student_lastname" AS "student", "grade_percent" AS "grade"

FROM

	"students"
	INNER JOIN "grades" USING("student_id")
	INNER JOIN "assignments" USING("assignment_id")

WHERE

	"assignment_name" = 'Proportions Test'

ORDER BY "grade_percent" DESC

LIMIT 5


-- "AGGREGATE FUNCTION"
SELECT "class_name" AS 'class', COUNT(*) AS 'students'

FROM

	"rosters"
	INNER JOIN "classes" USING("class_id")

GROUP BY "classes"."class_id"


-- proper order of thingies

SELECT

	"student_firstname" || ' ' || "student_lastname" AS "student", AVG("grade_percent") AS "average"

FROM

	"students"
	INNER JOIN "grades" USING("student_id")
	INNER JOIN "assignments" USING("assignment_id")
	INNER JOIN "classes" USING("class_id")

WHERE

	"class_name" = 'Workplace Math 10'

GROUP BY "students"."student_id"

ORDER BY "student_lastname" ASC

LIMIT

