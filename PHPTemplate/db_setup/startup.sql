USE umfrage;

Create TABLE umfrage1(

    ID int auto_increment primary key,
    Frage varchar(500),
    Option1 varchar(500),
    Option2 varchar(500),
    Option3 varchar(500),
    Antwort1 int,
    Antwort2 int,
    Antwort3 int

);