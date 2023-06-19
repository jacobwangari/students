CREATE schema studentsdb;

CREATE TABLE StudentGrades (
  id INT PRIMARY KEY AUTO_INCREMENT,
  Reg_No INT,
  Name VARCHAR(50),
  Subject VARCHAR(50),
  Marks INT,
  Grade VARCHAR(2)
);


SELECT * FROM StudentGrades;
