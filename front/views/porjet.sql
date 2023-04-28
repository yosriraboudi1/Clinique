CREATE TABLE DEALS (
INTITULE VARCHAR(50) CONSTRAINT PK_DEALS PRIMARY KEY,
DESCRIPTION_D VARCHAR(50) CONSTRAINT NOTNULL_DESCRIPTION
NOT NULL,
PRIX_I NUMBER,
PRIX_D NUMBER,
REDUCTION NUMBER CONSTRAINT NOTNULL_REDUCTION NOT NULL,  
DATE_D DATE ,
PERIOD_V NUMBER CONSTRAINT NOTNULL_PERIOD NOT NULL,
NOTED NUMBER CONSTRAINT CHEK_NOTED CHECK (NOTED<=5 AND
NOTED>=0),
EXPIRE VARCHAR(3)DEFAULT 'NON' CONSTRAINT CHEK_EXPRIRE
CHECK (EXPIRE IN ('OUI','NON')),
NOM_CATG VARCHAR(20),
NOM_PRESTATAIRE VARCHAR(50));
ALTER TABLE DEALS ADD CONSTRAINT FK_NOMCAT FOREIGN KEY (NOM_CATG)
REFERENCES CATEGORIES (NOM_CATG);
ALTER TABLE DEALS ADD CONSTRAINT FK_NOMPREST FOREIGN KEY (NOM_PRESTATAIRE)
REFERENCES PRESTATAIRES_SERVICES (NOM_PREST);
CREATE TABLE CATEGORIES (NOM_CATG VARCHAR(20) CONSTRAINT PK_CATEGORIES
PRIMARY KEY, NOM_PRESTATAIRE VARCHAR(80));
CREATE TABLE MEMBRES (LOGIN VARCHAR(15) CONSTRAINT PK_MEMBRES PRIMARY KEY,
MDP VARCHAR(50), NOM VARCHAR(50) CONSTRAINT NOTNULL_NOM NOT NULL, PRENOM
VARCHAR(50) CONSTRAINT NOTNULL_PRENOM NOT NULL);
Alter table MEMBRES ADD constraint Diffck CHECK (LOGIN!=NOM AND LOGIN!=PRENOM);
Alter table MEMBRES ADD constraint MDPck CHECK (regexp_like(MDP,'%[[:upper:]]%''%[[:lower:]]%''%
[[:digit:]]%'));
CREATE TABLE PRESTATAIRES_SERVICES (NOM_PREST VARCHAR(50) CONSTRAINT
PK_PRESTATAIRES PRIMARY KEY, NUM_ADRESSE NUMBER, RUE_ADRESSE VARCHAR(20),
VILLE VARCHAR(20), CP NUMBER, TEL NUMBER CONSTRAINT NOTNULL_TEL NOT NULL , EMAIL
VARCHAR(30) CONSTRAINT CHECK_MAIL CHECK (EMAIL='%@%.%') , PAGE_FB VARCHAR(50)
DEFAULT 'http://%' CONSTRAINT UNIQUE_PAGE UNIQUE); */
CREATE TABLE ACHATS (INTITULE VARCHAR(50), LOGIN VARCHAR(15), NBCOUPON NUMBER
CONSTRAINT NOTNULL_NB NOT NULL, CONSTRAINT PK_ACHAT PRIMARY KEY
(INTITULE,LOGIN));
ALTER TABLE ACHATS ADD CONSTRAINT FK_INT FOREIGN KEY (INTITULE) REFERENCES
DEALS (INTITULE);
ALTER TABLE ACHATS ADD CONSTRAINT FK_LOG FOREIGN KEY (LOGIN) REFERENCES
MEMBRES (LOGIN);
2)
A. ALTER TABLE DEALS MODIFY PRIX_I CONSTRAINT NOT_PRIX NOT NULL;
B. ALTER TABLE MEMBRES ADD CONSTRAINT MDPNP CHECK(MDP!=NOM AND MDP!=PRENOM
);
C.ALTER TABLE DEALS DROP (PRIX_D);
D. ALTER TABLE ACHATS ADD (DATE_ACHATS DATE);
E. ALTER TABLE ACHATS DROP CONSTRAINT PK_ACHAT;

ALTER TABLE ACHATS ADD CONSTRAINT PK_ACHATSS PRIMARY KEY (INTITULE, LOGIN,
DATE_ACHATS);
F. ALTER TABLE ACHATS ADD CONSTRAINT CHECK_COUPON CHECK (NBCOUPON<=5 AND
NBCOUPON>=1);
1)
A
Insert into MEMBRES VALUES('Hello2017','H17test','gharbi','salma'),
Insert into MEMBRES VALUES ('Ahmed1617','A132bc','ben chaabene ','ali');
Insert into MEMBRES VALUES
('Daddou123','B098tt','Ben mahmoud','taoufik');
B Insert into PRESTATAIRES_SERVICES VALUES(Square Opticalb L''Aouina',2,'Résidence Mesk
Jinen Ain

zaghouan','Ariana',2036,71100001,'Square.optical@hotmail.tn',https://www.facebook.com/Square-
optical396558407144821/?fref=ts');

Insert into PRESTATAIRES_SERVICES VALUES('Le Parador la
Goulette',9,'Immeuble Labrise Tour','Tunis',2060,71893425,
'Parador.Goulette@gmail.com','https://www.facebook.com/pages/
Parador-La-GouletteRestaurant/725375497514325?fref=ts');
Insert into PRESTATAIRES_SERVICES VALUES('Forever
Beauty',2,'rue Taher elMemmi 1erétage','Tunis',2091,71234098,
'Forever.beauty@Hotmail.com','https://www.facebook.com/
foreverbeautycenter/?fref=ts');
C Insert into CATEGORIES VALUES('Restaurant et café','Deals relatifs aux restaurants et cafés etsalons
de thé');
Insert into CATEGORIES VALUES('Beauté','Deals relatifs aux salons de coiffure et SPA');
Insert into CATEGORIES VALUES('Hôtel','Deals relatifs aux hôtels');
Insert into CATEGORIES VALUES('Life style et accessoires',
'Deals relatifs aux accessoires bijoux lunettes montres');
D Insert into DEALS VALUES('Square Optical L''Aouina : Un bon d''achat de valeur de 250 DT', 'L''offre
comprend: - Un bon d''achat de valeur de 250 DT - 30% de réduction sur tout achat des lentilles de
couleur', 250,60, to_date('12/10/2016 9','dd/mm/yyyy hh'), 5, 2,'NON',null, 'Square Optical L''Aouina');
Insert into DEALS VALUES ('Le Parador la Goulette : un menu de déjeuner ou de dîner à partir de 49 DT
Seulement', 'L''offre vous propose des mets qui vont vous ouvrir l''appétit et donner à vos papilles de
grandes envies! Choisissez l''offre qui vous convient...',131,63,to_date('10/10/2016 9','dd/mm/yyyy
hh'),3,5,'NON',null, 'Le Parador la Goulette');
E Insert into ACHAT VALUES ('Square Optical L''Aouina : Un bon d''achat de valeur de 250
DT','Hello2017', 2, to_date('13/10/2016 15/10','dd/mm/yyyy hh24/mi'));
Insert into ACHAT VALUES ('Square Optical L''Aouina : Un bon d''achat de valeur de 250
DT','Ahmed1617', 4, to_date('14/10/2016 10/03','dd/mm/yyyy hh24/mi'));
Insert into ACHAT VALUES ('Square Optical L''Aouina : Un bon d''achat de valeur de 250
DT','Daddou123', 3, to_date('12/10/2016 11/00','dd/mm/yyyy hh24/mi'));
Insert into ACHAT VALUES ('Le Parador la Goulette : un menu de déjeuner ou de dîner à partir de 49
DT Seulement','Hello2017', 5, to_date('12/10/2016 14/05','dd/mm/yyyy hh24/mi'));