--What classes is Eriyeza Buwembo registered in?

SELECT "courses"."course_name" FROM "courses", "roster", "students" WHERE "students"."student_id" = "roster"."student_id" AND "courses"."course_id" = "roster"."course_id" AND "students"."student_firstname" = 'Eriyeza' AND "students"."student_lastname" = 'Buwembo'

--Whomst is in Computer Science 30

SELECT "students"."student_firstname", "students"."student_lastname" FROM "courses", "roster", "students" WHERE "students"."student_id" = "roster"."student_id" AND "courses"."course_id" = "roster"."course_id" AND "courses"."course_name" = 'Computer Science 30'