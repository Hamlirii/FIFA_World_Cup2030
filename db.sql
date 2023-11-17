
CREATE TABLE Groupes (
    idGroupe INT PRIMARY KEY,
    nom VARCHAR(50),
    stade VARCHAR(100)
);


CREATE TABLE Equipes (
    idEquipe INT PRIMARY ,
    nom VARCHAR(100),
    drapeau VARCHAR(50),
    continent VARCHAR(50),
    capitale VARCHAR(50),
    population INT,
    joueursCles VARCHAR(255),
    nombreDeMatch INT,
    victoire INT,
    idGroupe INT,
    FOREIGN KEY (idGroupe) REFERENCES Groupes(idGroupe),
    CONSTRAINT CHK_Groupe_Equipes CHECK (idGroupe BETWEEN 1 AND 8),
    CONSTRAINT CHK_Equipes_Per_Groupe CHECK (
        idGroupe IN (SELECT idGroupe FROM Groupes GROUP BY idGroupe HAVING COUNT(*) = 4)
    )
);





INSERT INTO groupes(nom,stade) VALUES
("A","Stade Mohammed V"),
("B","Stade Ibn Batouta" ),
("C","Stade Adrar "),
("D","Stade de Marrakech"),
("E","Stade Municipal "),
("G","Stade de Fès"),
("H","Stade El Harti");



INSERT INTO Equipes (nom, drapeau, continent, capitale, joueursCles, nombreDeMatch, victoire)
VALUES
("maroc", "./flagss/icons8-maroc.png", "Afrique", "Rabat", "Hakim Ziyech", 50, 30),
("Canada", "./flagss/icons8-canada.png", "Amérique du Nord", "Ottawa", "Alphonso Davies", 40, 25),
("Mexique", "./flagss/icons8-mexico.png", "Amérique du Nord", "Mexico", "Javier Hernandez", 48, 32),
("Brésil", "./flagss/icons8-brazil.png", "Amérique du Sud", "Brasilia", "Neymar", 60, 40),
("Royaume-Uni", "./flagss/icons8-états-unis.png", "Europe", "Londres", "Harry Kane", 55, 35),
("France", "./flagss/icons8-france.png", "Europe", "Paris", "Kylian Mbappé", 55, 35),
("Allemagne", "./flagss/icons8-germany.png", "Europe", "Berlin", "Toni Kroos", 50, 33),
("Italie", "./flagss/icons8-italy.png", "Europe", "Rome", "Ciro Immobile", 48, 31),
("Espagne", "./flagss/icons8-spain.png", "Europe", "Madrid", "Sergio Ramos", 52, 34),
("Russie", "./flagss/icons8-russia.png", "Europe/Asie", "Moscou", "Artem Dzyuba", 46, 28),
("Chine", "./flagss/icons8-china.png", "Asie", "Pékin", "Wu Lei", 42, 25),
("Inde", "./flagss/icons8-india.png", "Asie", "New Delhi", "Sunil Chhetri", 44, 30),
("Japon", "./flagss/icons8-japan.png", "Asie", "Tokyo", "Keisuke Honda", 48, 28),
("Australie", "./flagss/icons8-australia.png", "Océanie", "Canberra", "Aaron Mooy", 45, 30),
("Afrique du Sud", "./flagss/icons8-south-africa.png", "Afrique", "Pretoria", "Percy Tau", 38, 22),
("Nigeria", "./flagss/icons8-nigeria.png", "Afrique", "Abuja", "Alex Iwobi", 52, 32),
("Égypte", "./flagss/icons8-egypt.png", "Afrique", "Le Caire", "Mohamed Salah", 50, 31),
("Kenya", "./flagss/icons8-kenya.png", "Afrique", "Nairobi", "Victor Wanyama", 40, 26),
("Ghana", "./flagss/icons8-ghana.png", "Afrique", "Accra", "Andre Ayew", 42, 28),
("Argentine", "./flagss/icons8-argentina.png", "Amérique du Sud", "Buenos Aires", "Lionel Messi", 58, 38),
("Colombie", "./flagss/icons8-colombia.png", "Amérique du Sud", "Bogota", "James Rodriguez", 50, 32),
("Pérou", "./flagss/icons8-peru.png", "Amérique du Sud", "Lima", "Paolo Guerrero", 48, 30),
("Chili", "./flagss/icons8-chile.png", "Amérique du Sud", "Santiago", "Arturo Vidal", 46, 29),
("Arabie saoudite", "./flagss/icons8-saudi-arabia.png", "Asie", "Riyad", "Mohammed Al-Sahlawi", 38, 20),
("Turquie", "./flagss/icons8-.png", "Europe/Asie", "Ankara", "Hakan Calhanoglu", 42, 27),
("Iran", "./flagss/icons8-iran.png", "Asie", "Téhéran", "Sardar Azmoun", 44, 29),
("Pakistan", "./flagss/icons8-pakistan.png", "Asie", "Islamabad", "Hassan Ali", 36, 18),
("Indonésie", "./flagss/icons8-indonesia.png", "Asie", "Jakarta", "Stefano Lilipaly", 40, 24),
("Corée du Sud", "./flagss/icons8-south-korea.png", "Asie", "Séoul", "Son Heung-min", 50, 33),
("Vietnam", "./flagss/icons8-vietnam.png", "Asie", "Hanoï", "Nguyen Cong Phuong", 38, 22),
("Thaïlande", "./flagss/icons8-thailand.png", "Asie", "Bangkok", "Chanathip Songkrasin", 36, 20),
("Thaïlande", "./flagss/icons8-thailand.png", "Asie", "Bangkok", "Chanathip Songkrasin", 36, 20);

