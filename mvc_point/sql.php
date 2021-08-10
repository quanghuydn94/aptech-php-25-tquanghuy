create table Students
(
    StudentId int PRIMARY key AUTO_INCREMENT,
    StudentName varchar(100) not null,
    Phone varchar(10),
    Address text,
    MathPoint double,
    LiteraryPoint double,
    ClassId int,
    FOREIGN KEY(ClassId) REFERENCES classes(ClassId)

)