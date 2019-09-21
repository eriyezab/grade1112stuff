-- Add "Norman Bates" to the "people" table with the next available ID.
INSERT INTO "people" VALUES (20, 'Norman', 'Bates')

-- Add a row to the "favourites" table indicating that Norman's favourite colour is grey.
INSERT INTO "favourites" VALUES (20, 3)

-- Change (update) Norman's first and last name to be "Oscar" and "the Grouch".
UPDATE "people" SET "person_firstname" = 'Oscar', "person_lastname" = 'the Grouch' WHERE "person_id" = '20'

-- Update his favourite colour to be red.
UPDATE "favourites" SET "colour_id" = '4' WHERE "person_id" = '20'

-- Delete him from the "people" table.
DELETE FROM "people" WHERE "person_firstname" = 'Oscar' AND "person_lastname" = 'the Grouch' AND "person_id" = '20'

-- Delete his favourite colour from the "favourites" table.
DELETE FROM "favourites" WHERE "person_id" = '20'