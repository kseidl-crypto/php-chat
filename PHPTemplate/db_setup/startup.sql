USE umfrage;

Create TABLE umfrage1(

    ID INT auto_increment primary key,
    Frage VARCHAR (500),
    Option1 VARCHAR (500),
    Option2 VARCHAR (500),
    Option3 VARCHAR (500),
    Antwort1 INT,
    Antwort2 INT,
    Antwort3 INT

);