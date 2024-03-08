INSERT INTO Account Values
(1,'Alloire','Alloire','Thomas','Alloire.Thomas@Bison.Howard.Edu','12345');
INSERT INTO Account Values
(2,'Donovan','Donovan','Speight','Donovan.Speight@Bison.Howard.Edu','12345');
INSERT INTO Account Values
(3,'Fatima','Fatima','Mendy','Fatima.Mendy@Bison.Howard.Edu','12345');
INSERT INTO Account Values
(4,'Tonya','Tonya','Gill','Tonya.Gill@Bison.Howard.Edu','12345');


INSERT INTO Questions Values
(1, 'What is a touchdown?');
INSERT INTO Questions Values
(2, 'What is an interception?');
INSERT INTO Questions Values
(3, 'What is a sack?');
INSERT INTO Questions Values
(4, 'What is a kickoff?');
INSERT INTO Questions Values
(5, 'What is a down?');


INSERT INTO Answers Values
(1, 1, 'A touchdown is a way of scoring points in Football! Once a player carries the ball into the end zone they recieve 6 points!');
INSERT INTO Answers Values
(2, 2, 'When a player catches a pass from the other team');
INSERT INTO Answers Values
(3, 3, 'When the quarterback gets tackled behind the line of scrimmage');
INSERT INTO Answers Values
(4, 4, 'The game starts off with one team kicking the ball to the other.');
INSERT INTO Answers Values
(5, 5, 'The offensive team has 4 chances (downs) to move the ball 10 yards');

--Queries
--1. SELECT Q.QuestionText, A.AnswerText FROM Questions Q, Answers A Where Q.QuestionText = 'What is a touchdown?' AND A.QuestionID = Q.QuestionID;
--2. SELECT Q.QuestionText, A.AnswerText FROM Questions Q, Answers A Where Q.QuestionText = 'What is an interception?' AND A.QuestionID = Q.QuestionID;
--3. SELECT Q.QuestionText, A.AnswerText FROM Questions Q, Answers A Where Q.QuestionText = 'What is a down?' AND A.QuestionID = Q.QuestionID;
