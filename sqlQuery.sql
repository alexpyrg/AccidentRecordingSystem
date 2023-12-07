CREATE TABLE abs (
yesnounknownna_id INTEGER PRIMARY KEY,
description	VARCHAR(50)
);
INSERT INTO abs1(yesnounknownna_id,description)
VALUES(0,'Επιλέξτε...');
INSERT INTO abs1(yesnounknownna_id,description)
VALUES(1,'Ναι');
INSERT INTO abs1(yesnounknownna_id,description)
VALUES(2,'Όχι');
INSERT INTO abs1(yesnounknownna_id,description)
VALUES(777,'Δεν εφαρμόζεται');
INSERT INTO abs1(yesnounknownna_id,description)
VALUES(999,'Άγνωστο');

CREATE TABLE acs (
yesnounknownna_id INTEGER PRIMARY KEY,
description VARCHAR(50)
);

INSERT INTO acs(yesnounknownna_id,description)
VALUES(0,'Επιλέξτε...');
INSERT INTO acs(yesnounknownna_id,description)
VALUES(1,'Ναι');
INSERT INTO acs(yesnounknownna_id,description)
VALUES(2,'Όχι');
INSERT INTO acs(yesnounknownna_id,description)
VALUES(777,'Δεν εφαρμόζεται');
INSERT INTO acs(yesnounknownna_id,description)
VALUES(999,'Άγνωστο');

CREATE TABLE cdc3 (
vehiclecdc3_id INTEGER PRIMARY KEY,
code VARCHAR(5),
description	VARCHAR(50)
);

INSERT INTO cdc3(vehiclecdc3_id,code,description)
VALUES(0,'S','Επιλέξτε...');
INSERT INTO cdc3(vehiclecdc3_id,code,description)
VALUES(1,'F','Επιλέξτε...');
INSERT INTO cdc3(vehiclecdc3_id,code,description)
VALUES(2,'B','Επιλέξτε...');
INSERT INTO cdc3(vehiclecdc3_id,code,description)
VALUES(3,'L','Επιλέξτε...');
INSERT INTO cdc3(vehiclecdc3_id,code,description)
VALUES(4,'R','Επιλέξτε...');
INSERT INTO cdc3(vehiclecdc3_id,code,description)
VALUES(5,'T','Επιλέξτε...');
INSERT INTO cdc3(vehiclecdc3_id,code,description)
VALUES(6,'U','Επιλέξτε...');
INSERT INTO cdc3(vehiclecdc3_id,code,description)
VALUES(7,'888','Επιλέξτε...');
INSERT INTO cdc3(vehiclecdc3_id,code,description)
VALUES(8,'999','Επιλέξτε...');
INSERT INTO cdc3(vehiclecdc3_id,code,description)
VALUES(9,'777','Επιλέξτε...');


CREATE TABLE cdc4 (
vehiclecdc45_id INTEGER PRIMARY KEY,
code VARCHAR(5),
description	VARCHAR(100),
impact VARCHAR(10)
);

INSERT INTO cdc4(vehiclecdc45_id,code,description,impact)
VALUES(0,'NULL','Επιλέξτε...','NULL');
INSERT INTO cdc4(vehiclecdc45_id,code,description,impact)
VALUES(1,'R0','¼ από τη δεξιά πλευρά (εκτός των παραμορφώσεων που εκτείνονται μέχρι το φάρδος του τροχού)','Front/Rear');
INSERT INTO cdc4(vehiclecdc45_id,code,description,impact)
VALUES(2,'L0','¼ από τη αριστερή πλευρά (εκτός των παραμορφώσεων που εκτείνονται μέχρι το φάρδος του τροχού)','Front/Rear');
INSERT INTO cdc4(vehiclecdc45_id,code,description,impact)
VALUES(3,'R1','⅓ από τη δεξιά πλευρά','Front/Rear');
INSERT INTO cdc4(vehiclecdc45_id,code,description,impact)
VALUES(4,'L1','⅓ από την αριστερή πλευρά','Front/Rear');
INSERT INTO cdc4(vehiclecdc45_id,code,description,impact)
VALUES(5,'C0','Κέντρο (πλάτος κινητήρα)','Front/Rear');
INSERT INTO cdc4(vehiclecdc45_id,code,description,impact)
VALUES(6,'Z1','½ από τη δεξιά πλευρά','Front/Rear');
INSERT INTO cdc4(vehiclecdc45_id,code,description,impact)
VALUES(7,'Y1','½ από την αριστερή πλευρά','Front/Rear');
INSERT INTO cdc4(vehiclecdc45_id,code,description,impact)
VALUES(8,'Z0','⅔ από τη δεξιά πλευρά','Front/Rear');
INSERT INTO cdc4(vehiclecdc45_id,code,description,impact)
VALUES(9,'Y0','⅔ από την αριστερή πλευρά','Front/Rear');
INSERT INTO cdc4(vehiclecdc45_id,code,description,impact)
VALUES(10,'D0','Κατανομή σε ολόκληρο το πλάτος','Front/Rear');
INSERT INTO cdc4(vehiclecdc45_id,code,description,impact)
VALUES(11,'F0','Μπροστινό παρμπρίζ','Side');
INSERT INTO cdc4(vehiclecdc45_id,code,description,impact)
VALUES(12,'P0','Όλος ο χώρος επιβατών','Side');
INSERT INTO cdc4(vehiclecdc45_id,code,description,impact)
VALUES(13,'P1','Χώρος επιβατών - Μπροστινό κάθισμα','Side');
INSERT INTO cdc4(vehiclecdc45_id,code,description,impact)
VALUES(14,'P2','Χώρος επιβατών - Πίσω καθίσμα','Side');
INSERT INTO cdc4(vehiclecdc45_id,code,description,impact)
VALUES(15,'B0','Πίσω χώρος επιβατών','Side');
INSERT INTO cdc4(vehiclecdc45_id,code,description,impact)
VALUES(16,'Y0','Μπροστινός χώρος επιβατών','Side');
INSERT INTO cdc4(vehiclecdc45_id,code,description,impact)
VALUES(17,'Y1','Μπροστινός χώρος επιβατών και μπροστινό κάθισμα','Side');
INSERT INTO cdc4(vehiclecdc45_id,code,description,impact)
VALUES(18,'Z0','Πίσω χώρος επιβατών και πίσω καθίσματα','Side');
INSERT INTO cdc4(vehiclecdc45_id,code,description,impact)
VALUES(19,'Z1','Το πίσω μέρος και το πίσω κάθισμα','Side');
INSERT INTO cdc4(vehiclecdc45_id,code,description,impact)
VALUES(20,'D0','Κατανομή σε ολόκληρη την πλευρά','Side');

CREATE TABLE css (
yesnounknownna_id INTEGER PRIMARY KEY,
description VARCHAR(50)
);

INSERT INTO css(yesnounknownna_id,description)
VALUES(0,'Επιλέξτε...');
INSERT INTO css(yesnounknownna_id,description)
VALUES(1,'Ναι');
INSERT INTO css(yesnounknownna_id,description)
VALUES(2,'Όχι');
INSERT INTO css(yesnounknownna_id,description)
VALUES(777,'Δεν εφαρμόζεται');
INSERT INTO css(yesnounknownna_id,description)
VALUES(999,'Άγνωστο');


CREATE TABLE esp (
yesnounknownna_id INTEGER PRIMARY KEY,
description VARCHAR(50)
);

INSERT INTO esp(yesnounknownna_id,description)
VALUES(0,'Επιλέξτε...');
INSERT INTO esp(yesnounknownna_id,description)
VALUES(1,'Ναι');
INSERT INTO esp(yesnounknownna_id,description)
VALUES(2,'Όχι');
INSERT INTO esp(yesnounknownna_id,description)
VALUES(777,'Δεν εφαρμόζεται');
INSERT INTO esp(yesnounknownna_id,description)
VALUES(999,'Άγνωστο');

CREATE TABLE ldw (
yesnounknownna_id INTEGER PRIMARY KEY,
description VARCHAR(50)
);

INSERT INTO ldw(yesnounknownna_id,description)
VALUES(0,'Επιλέξτε...');
INSERT INTO ldw(yesnounknownna_id,description)
VALUES(1,'Ναι');
INSERT INTO ldw(yesnounknownna_id,description)
VALUES(2,'Όχι');
INSERT INTO ldw(yesnounknownna_id,description)
VALUES(777,'Δεν εφαρμόζεται');
INSERT INTO ldw(yesnounknownna_id,description)
VALUES(999,'Άγνωστο');

CREATE TABLE tcs (
yesnounknownna_id INTEGER PRIMARY KEY,
description VARCHAR(50)
);

INSERT INTO tcs(yesnounknownna_id,description)
VALUES(0,'Επιλέξτε...');
INSERT INTO tcs(yesnounknownna_id,description)
VALUES(1,'Ναι');
INSERT INTO tcs(yesnounknownna_id,description)
VALUES(2,'Όχι');
INSERT INTO tcs(yesnounknownna_id,description)
VALUES(777,'Δεν εφαρμόζεται');
INSERT INTO tcs(yesnounknownna_id,description)
VALUES(999,'Άγνωστο');

CREATE TABLE alcohol (
yesnounknownna_id INTEGER PRIMARY KEY,
description VARCHAR(50)
);

INSERT INTO alcohol(yesnounknownna_id,description)
VALUES(0,'Επιλέξτε...');
INSERT INTO alcohol(yesnounknownna_id,description)
VALUES(1,'Ναι');
INSERT INTO alcohol(yesnounknownna_id,description)
VALUES(2,'Όχι');
INSERT INTO alcohol(yesnounknownna_id,description)
VALUES(777,'Δεν εφαρμόζεται');
INSERT INTO alcohol(yesnounknownna_id,description)
VALUES(999,'Άγνωστο');

CREATE TABLE accident_collision_event(
accidentcollisionevent_id INTEGER PRIMARY KEY,
descriptionorder INTEGER,
collisiontype VARCHAR(50),
description VARCHAR(100)
);

INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (0,1,'Select...','Επιλεξτε...');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (1,1,'Non-collision','Ανατροπή αυτοκινήτου');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (2,1,'Non-collision','Φωτιά/Έκρηξη');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (3,1,'Non-collision','Βύθιση');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (4,1,'Non-collision','Διαρροή αερίου');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (5,1,'Non-collision','Έφυγε/πήδηξε από το όχημα ');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (6,1,'Non-collision','Τραυματισμός στο όχημα ');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (7,1,'Non-collision','Ιπτάμενο αντικείμενο');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (8,1,'Non-collision','Κακοτεχνίες στην κατασκευή των πεζοδρομίων (λακκούβες ή αυλακώσεις ή σχάρες)');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (10,1,'Non-collision','Δίπλωμα επικαθήμενου - συρόμενου');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (11,1,'Non-collision','Απώλεια ή μετατόπιση φορτίου/εξοπλισμού');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (12,1,'Non-collision','Βλάβη του οχήματος (σκάσιμο ελαστικών ή δεν λειτουργούν τα φρένα)');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (13,1,'Non-collision','Διαχωρισμός φορτίων/ρυμουλκούμενου');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (14,1,'Non-collision','Εκτός δρόμου - αριστερά');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (15,1,'Non-collision','Εκτός δρόμου - δεξιά');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (16,1,'Non-collision','Διαχωριστική λωρίδα κυκλοφορίας');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (17,1,'Non-collision','Κατωφέρεια');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (18,1,'Non-collision','Εκτόξευση αυτοκινήτου στον αέρα');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (19,1,'Non-collision','Άλλη μη σύγκρουση');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (20,2,'Collision with Motor vehicle','Σύγκρουση με άλλο όχημα στον ίδιο δρόμο κυκλοφορίας');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (21,2,'Collision with Motor vehicle','Σύγκρουση με άλλο όχημα σε διαφορετικό δρόμο κυκλοφορίας');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (22,2,'Collision with Motor vehicle','Σταματημένο όχημα');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (23,2,'Collision with Motor vehicle','Κατασκευαστικές εργασίες');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (24,2,'Collision with Motor vehicle','Οχήματα συντήρησης ή οχήματα του δήμου');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (25,2,'Collision with Motor vehicle','Σύγκρουση οχήματος από πτώση/μετακίνηση φορτίου κατά την μεταφορά από άλλο όχημα');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (26,3,'Collision with object not fixed','Πεζό');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (28,3,'Collision with object not fixed','Ποδήλατο');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (29,3,'Collision with object not fixed','Τρένο');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (30,3,'Collision with object not fixed','Ζώο');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (31,3,'Collision with object not fixed','Σύγκρουση με οχήμα που μεταφέρεται από ζώο ή από ζώο οδηγό');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (32,3,'Collision with object not fixed','Άλλο αντικείμενο (όχι σταθερό)');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (33,4,'Collision with fixed objects','Ογκόλιθο');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (34,4,'Collision with fixed objects','Σύγκρουση με κτίριο');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (36,4,'Collision with fixed objects','Γέφυρα λιμανιού/Γέφυρα από σιδηροκατασκευή');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (37,4,'Collision with fixed objects','Τελειώμα/άκρη κιγκλιδώματος γέφυρας');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (38,4,'Collision with fixed objects','Κιγκλίδωμα γέφυρας');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (39,4,'Collision with fixed objects','Σώμα γέφυρας');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (40,4,'Collision with fixed objects','Προστατευτικό στηθαίο πρόσοψη');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (41,4,'Collision with fixed objects','Προστατευτικό στηθαίο άκρη');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (42,4,'Collision with fixed objects','Προστατευτικό στηθαίο από τσιμέντο');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (43,4,'Collision with fixed objects','Άλλο προστατευτικό στηθαίο');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (44,4,'Collision with fixed objects','Σηματοδότες κυκλοφορίας αυτοκινητόδρομου/Πινακίδες Σήμανσης ΚΟΚ');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (45,4,'Collision with fixed objects','Πλευρική Φωτεινή Σηματοδότηση');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (46,4,'Collision with fixed objects','Οριζόντια  Φωτεινή Σηματοδότηση');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (47,4,'Collision with fixed objects','Φωτινοί σηματοδότες');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (48,4,'Collision with fixed objects','Στύλοι ηλεκτροδότησης');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (49,4,'Collision with fixed objects','Άλλοι στύλοι ή άλλοι στύλοι σταθεροποίησης στον δρόμο');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (50,4,'Collision with fixed objects','Αποχέτευση υπόγειων χώρων');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (51,4,'Collision with fixed objects','Ρείθρο ');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (52,4,'Collision with fixed objects','Χαντάκι');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (53,4,'Collision with fixed objects','Πρανές έδαφος');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (54,4,'Collision with fixed objects','Πρανές πέτρες/Βράχοι/Τσιμέντο');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (55,4,'Collision with fixed objects','Πρανές άγνωστο ύλικο');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (56,4,'Collision with fixed objects','Φράχτης');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (57,4,'Collision with fixed objects','Τοίχος');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (58,4,'Collision with fixed objects','Δέντρο');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (59,4,'Collision with fixed objects','Όγκο χιονιού');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (60,4,'Collision with fixed objects','Άλλα σταθερά αντικείμενα');
INSERT INTO accident_collision_event(accidentcollisionevent_id,descriptionorder,collisiontype,description)
VALUES (999,5,'Unknown','Άγνωστο');


CREATE TABLE scattered_hazard_cargo (
yesnounknownna_id INTEGER PRIMARY KEY,
description VARCHAR(50)
);

INSERT INTO scattered_hazard_cargo(yesnounknownna_id,description)
VALUES(0,'Επιλέξτε...');
INSERT INTO scattered_hazard_cargo(yesnounknownna_id,description)
VALUES(1,'Ναι');
INSERT INTO scattered_hazard_cargo(yesnounknownna_id,description)
VALUES(2,'Όχι');
INSERT INTO scattered_hazard_cargo(yesnounknownna_id,description)
VALUES(777,'Δεν εφαρμόζεται');
INSERT INTO scattered_hazard_cargo(yesnounknownna_id,description)
VALUES(999,'Άγνωστο');

CREATE TABLE roadjunction(
    roadjunction_id INTEGER PRIMARY KEY,
    description VARCHAR(50)
);

INSERT INTO roadjunction(roadjunction_id,description)
VALUES(0,'Επιλέξτε...');
INSERT INTO roadjunction(roadjunction_id,description)
VALUES(1,'Δεν υπάρχει διασταύρωση');
INSERT INTO roadjunction(roadjunction_id,description)
VALUES(2,'T ή Y');
INSERT INTO roadjunction(roadjunction_id,description)
VALUES(3,'Διασταύρωση');
INSERT INTO roadjunction(roadjunction_id,description)
VALUES(4,'Κυκλικός κόμβος');
INSERT INTO roadjunction(roadjunction_id,description)
VALUES(777,'Δεν εφαρμόζεται');
INSERT INTO roadjunction(roadjunction_id,description)
VALUES(888,'Άλλο');
INSERT INTO roadjunction(roadjunction_id,description)
VALUES(999,'Άγνωστο');

CREATE TABLE adandoned_victim(
yesnounknown_id INTEGER PRIMARY KEY,
description VARCHAR(50)
);

INSERT INTO adandoned_victim(yesnounknown_id,description)
VALUES(0,'Επιλέξτε...');
INSERT INTO adandoned_victim(yesnounknown_id,description)
VALUES(1,'Ναι');
INSERT INTO adandoned_victim(yesnounknown_id,description)
VALUES(2,'Όχι');
INSERT INTO adandoned_victim(yesnounknown_id,description)
VALUES(999,'Άγνωστο');

CREATE TABLE vehicle_damage_possible_cause_accident(
    yesnounknown_id INTEGER PRIMARY KEY,
    description VARCHAR(20)
);
INSERT INTO vehicle_damage_possible_cause_accident(yesnounknown_id,description)
VALUES(0,'Επιλέξτε...');
INSERT INTO vehicle_damage_possible_cause_accident(yesnounknown_id,description)
VALUES(1,'Ναι');
INSERT INTO vehicle_damage_possible_cause_accident(yesnounknown_id,description)
VALUES(2,'Όχι');
INSERT INTO vehicle_damage_possible_cause_accident(yesnounknown_id,description)
VALUES(999,'Άγνωστο');

CREATE TABLE vehicle_manoeuvre_prior_accident(
vehiclemanoeuvreprioraccident_id INTEGER PRIMARY KEY,
description VARCHAR(50)
);

INSERT INTO vehicle_manoeuvre_prior_accident(vehiclemanoeuvreprioraccident_id,description)
VALUES(0,'Επιλέξτε...');
INSERT INTO vehicle_manoeuvre_prior_accident(vehiclemanoeuvreprioraccident_id,description)
VALUES(1,'Γενική οδήγηση');
INSERT INTO vehicle_manoeuvre_prior_accident(vehiclemanoeuvreprioraccident_id,description)
VALUES(2,'Προσπέραση');
INSERT INTO vehicle_manoeuvre_prior_accident(vehiclemanoeuvreprioraccident_id,description)
VALUES(3,'Διασταύρωση');
INSERT INTO vehicle_manoeuvre_prior_accident(vehiclemanoeuvreprioraccident_id,description)
VALUES(4,'Σταμάτημα/Φερνάρισμα');
INSERT INTO vehicle_manoeuvre_prior_accident(vehiclemanoeuvreprioraccident_id,description)
VALUES(5,'Ξεκίνημα');
INSERT INTO vehicle_manoeuvre_prior_accident(vehiclemanoeuvreprioraccident_id,description)
VALUES(6,'Αλλαγή λωρίδας');
INSERT INTO vehicle_manoeuvre_prior_accident(vehiclemanoeuvreprioraccident_id,description)
VALUES(7,'Οδήγηση πάνω στη λωρίδα');
INSERT INTO vehicle_manoeuvre_prior_accident(vehiclemanoeuvreprioraccident_id,description)
VALUES(777,'Δεν εφαρμόζεται');
INSERT INTO vehicle_manoeuvre_prior_accident(vehiclemanoeuvreprioraccident_id,description)
VALUES(888,'Άλλο');
INSERT INTO vehicle_manoeuvre_prior_accident(vehiclemanoeuvreprioraccident_id,description)
VALUES(999,'Άγνωστο');

CREATE TABLE hazard_cargo(
    vehiclehazardcargo_id INTEGER PRIMARY KEY,
    description VARCHAR(50)
);

INSERT INTO hazard_cargo(vehiclehazardcargo_id,description)
VALUES(0,'Επιλέξτε...');
INSERT INTO hazard_cargo(vehiclehazardcargo_id,description)
VALUES(1,'Όχι');
INSERT INTO hazard_cargo(vehiclehazardcargo_id,description)
VALUES(2,'Ναι, μεταφορά επικίνδυνων υλικών');
INSERT INTO hazard_cargo(vehiclehazardcargo_id,description)
VALUES(3,'Ναι, δεν ήταν μεταφορά επικίνδυνων υλικών');
INSERT INTO hazard_cargo(vehiclehazardcargo_id,description)
VALUES(4,'Ναι, άγνωστο αν ήταν μεταφορά επικίνδυνων υλικών');
INSERT INTO hazard_cargo(vehiclehazardcargo_id,description)
VALUES(777,'Δεν εφαρμόζεται');
INSERT INTO hazard_cargo(vehiclehazardcargo_id,description)
VALUES(999,'Άγνωστο');

CREATE TABLE confidence(
confidence_id INTEGER PRIMARY KEY,
description VARCHAR(30)
);
INSERT INTO confidence(confidence_id,description)
VALUES(0,'Επιλέξτε...');
INSERT INTO confidence(confidence_id,description)
VALUES(1,'Υψηλή αξιοπιστία');
INSERT INTO confidence(confidence_id,description)
VALUES(2,'Αποδεκτή αξιοπιστία');
INSERT INTO confidence(confidence_id,description)
VALUES(3,'Χαμηλή αξιοπιστία');

CREATE TABLE road_surface_type(
    roadsurfacetype_id INTEGER PRIMARY KEY,
    description VARCHAR(30)
);

INSERT INTO road_surface_type(roadsurfacetype_id,description)
VALUES(0,'Επιλέξτε...');
INSERT INTO road_surface_type(roadsurfacetype_id,description)
VALUES(1,'Τσιμέντο');
INSERT INTO road_surface_type(roadsurfacetype_id,description)
VALUES(2,'Μαύρη άσφαλτος');
INSERT INTO road_surface_type(roadsurfacetype_id,description)
VALUES(3,'Άσφαλτος');
INSERT INTO road_surface_type(roadsurfacetype_id,description)
VALUES(4,'Τούβλο');
INSERT INTO road_surface_type(roadsurfacetype_id,description)
VALUES(5,'Θρυμματισμένες πλάκες');
INSERT INTO road_surface_type(roadsurfacetype_id,description)
VALUES(6,'Χαλίκι ή πέτρα');
INSERT INTO road_surface_type(roadsurfacetype_id,description)
VALUES(7,'Χώμα');
INSERT INTO road_surface_type(roadsurfacetype_id,description)
VALUES(888,'Άλλο');
INSERT INTO road_surface_type(roadsurfacetype_id,description)
VALUES(999,'Άγνωστο');

CREATE TABLE roadway_alignment(
    roadwayalignment_id INTEGER PRIMARY KEY,
    description VARCHAR(40)
);
INSERT INTO roadway_alignment(roadwayalignment_id,description)
VALUES(0,'Επιλέξτε...');
INSERT INTO roadway_alignment(roadwayalignment_id,description)
VALUES(1,'Ευθεία οδός');
INSERT INTO roadway_alignment(roadwayalignment_id,description)
VALUES(2,'Στροφή προς τα αριστερά');
INSERT INTO roadway_alignment(roadwayalignment_id,description)
VALUES(3,'Στροφή προς τα δεξιά');
INSERT INTO roadway_alignment(roadwayalignment_id,description)
VALUES(777,'Δεν εφαρμόζεται');
INSERT INTO roadway_alignment(roadwayalignment_id,description)
VALUES(888,'Άλλο');
INSERT INTO roadway_alignment(roadwayalignment_id,description)
VALUES(999,'Άγνωστο');

CREATE TABLE vehicle_vertical_alignment(
    vehicleverticalalignment_id INTEGER PRIMARY KEY,
    description VARCHAR(30)
);

INSERT INTO vehicle_vertical_alignment(vehicleverticalalignment_id,description)
VALUES(0,'Επιλέξτε...');
INSERT INTO vehicle_vertical_alignment(vehicleverticalalignment_id,description)
VALUES(1,'Ανωφέρεια');
INSERT INTO vehicle_vertical_alignment(vehicleverticalalignment_id,description)
VALUES(2,'Κατωφέρεια');
INSERT INTO vehicle_vertical_alignment(vehicleverticalalignment_id,description)
VALUES(3,'Επίπεδο');
INSERT INTO vehicle_vertical_alignment(vehicleverticalalignment_id,description)
VALUES(777,'Δεν Εφαρμόζεται');
INSERT INTO vehicle_vertical_alignment(vehicleverticalalignment_id,description)
VALUES(888,'Άλλο');
INSERT INTO vehicle_vertical_alignment(vehicleverticalalignment_id,description)
VALUES(999,'Άγνωστο');

CREATE TABLE passed_inspection(
    yesnounknownna_id INTEGER PRIMARY KEY,
    description VARCHAR(20)
);

INSERT INTO passed_inspection(yesnounknownna_id,description)
VALUES(0,'Επιλέξτε...');
INSERT INTO passed_inspection(yesnounknownna_id,description)
VALUES(1,'Ναι');
INSERT INTO passed_inspection(yesnounknownna_id,description)
VALUES(2,'Όχι');
INSERT INTO passed_inspection(yesnounknownna_id,description)
VALUES(777,'Δεν εφαρμόζεται');
INSERT INTO passed_inspection(yesnounknownna_id,description)
VALUES(999,'Άγνωστο');

CREATE TABLE road_construction_zone(
    roadconstructionzone_id INTEGER PRIMARY KEY,
    description VARCHAR(50)
    );

INSERT INTO road_construction_zone(roadconstructionzone_id,description)
VALUES(0,'Επιλέξτε...');
INSERT INTO road_construction_zone(roadconstructionzone_id,description)
VALUES(1,'Καμία');
INSERT INTO road_construction_zone(roadconstructionzone_id,description)
VALUES(2,'Ζώνη κατασκευών');
INSERT INTO road_construction_zone(roadconstructionzone_id,description)
VALUES(3,'Ζώνη συντήρησης της οδού');
INSERT INTO road_construction_zone(roadconstructionzone_id,description)
VALUES(4,'Ζώνη μη προγραμματισμένων εργασιών');
INSERT INTO road_construction_zone(roadconstructionzone_id,description)
VALUES(5,'Ζώνη εργασιών επί της οδού');
INSERT INTO road_construction_zone(roadconstructionzone_id,description)
VALUES(777,'Δεν εφαρμόζεται');
INSERT INTO road_construction_zone(roadconstructionzone_id,description)
VALUES(888,'Άλλο');
INSERT INTO road_construction_zone(roadconstructionzone_id,description)
VALUES(999,'Άγνωστο');

CREATE TABLE speed_bump_caused_accident(
    yesnounknownna_id INTEGER PRIMARY KEY,
    description VARCHAR(20)
);

INSERT INTO speed_bump_caused_accident(yesnounknownna_id,description)
VALUES(0,'Επιλέξτε...');
INSERT INTO speed_bump_caused_accident(yesnounknownna_id,description)
VALUES(1,'Ναι');
INSERT INTO speed_bump_caused_accident(yesnounknownna_id,description)
VALUES(2,'Όχι');
INSERT INTO speed_bump_caused_accident(yesnounknownna_id,description)
VALUES(777,'Δεν εφαρμόζεται');
INSERT INTO speed_bump_caused_accident(yesnounknownna_id,description)
VALUES(999,'Άγνωστο');

CREATE TABLE vehicle_steering_side(
vehiclesteeringside_id INTEGER PRIMARY KEY,
description VARCHAR(30)
);

INSERT INTO vehicle_steering_side(vehiclesteeringside_id,description)
VALUES(0,'Επιλέξτε...');
INSERT INTO vehicle_steering_side(vehiclesteeringside_id,description)
VALUES(1,'Αριστεροτίμονο');
INSERT INTO vehicle_steering_side(vehiclesteeringside_id,description)
VALUES(2,'Δεξιοτίμονο');
INSERT INTO vehicle_steering_side(vehiclesteeringside_id,description)
VALUES(777,'Δεν εφαρμόζεται');
INSERT INTO vehicle_steering_side(vehiclesteeringside_id,description)
VALUES(888,'Άλλο');
INSERT INTO vehicle_steering_side(vehiclesteeringside_id,description)
VALUES(999,'Άγνωστο');

CREATE TABLE strong_winds(
yesnounknown_id INTEGER PRIMARY KEY,
description VARCHAR(20)
);

INSERT INTO strong_winds(yesnounknown_id,description)
VALUES(0,'Επιλέξτε...');
INSERT INTO strong_winds(yesnounknown_id,description)
VALUES(1,'Ναι');
INSERT INTO strong_winds(yesnounknown_id,description)
VALUES(2,'Όχι');
INSERT INTO strong_winds(yesnounknown_id,description)
VALUES(999,'Άγνωστο');

CREATE TABLE env_weather_condition(
envweathercondition_id INTEGER PRIMARY KEY,
description VARCHAR(20)
);

INSERT INTO env_weather_condition(envweathercondition_id,description)
VALUES(0,'Επιλέξτε...');
INSERT INTO env_weather_condition(envweathercondition_id,description)
VALUES(1,'Στεγνός');
INSERT INTO env_weather_condition(envweathercondition_id,description)
VALUES(2,'Βρεγμένος');
INSERT INTO env_weather_condition(envweathercondition_id,description)
VALUES(3,'Παγωμένος');
INSERT INTO env_weather_condition(envweathercondition_id,description)
VALUES(888,'Άλλο');
INSERT INTO env_weather_condition(envweathercondition_id,description)
VALUES(999,'Δεν εφαρμόζεται');

CREATE TABLE vehicle_driven_wheels(
    vehicledrivenwheels_id INTEGER PRIMARY KEY,
    description VARCHAR(30)
    );

INSERT INTO vehicle_driven_wheels(vehicledrivenwheels_id,description)
VALUES(0,'Επιλέξτε...');
INSERT INTO vehicle_driven_wheels(vehicledrivenwheels_id,description)
VALUES(1,'Προσθιοκίνητο');
INSERT INTO vehicle_driven_wheels(vehicledrivenwheels_id,description)
VALUES(2,'Πισωκίνητο');
INSERT INTO vehicle_driven_wheels(vehicledrivenwheels_id,description)
VALUES(3,'4x4');
INSERT INTO vehicle_driven_wheels(vehicledrivenwheels_id,description)
VALUES(4,'6x6');
INSERT INTO vehicle_driven_wheels(vehicledrivenwheels_id,description)
VALUES(888,'Αλλο');
INSERT INTO vehicle_driven_wheels(vehicledrivenwheels_id,description)
VALUES(999,'Άγνωστο');


CREATE TABLE road_traffic_way_flow(
    roadtrafficwayflow_id INTEGER PRIMARY KEY ,
    description VARCHAR(60)
);

INSERT INTO road_traffic_way_flow(roadtrafficwayflow_id,description)
VALUES(0,'Επιλέξτε...');
INSERT INTO road_traffic_way_flow(roadtrafficwayflow_id,description)
VALUES(1,'Χωρίς φυσικό διαχωρισμό');
INSERT INTO road_traffic_way_flow(roadtrafficwayflow_id,description)
VALUES(2,'Χωρίς φυσικό διαχωρισμό');
INSERT INTO road_traffic_way_flow(roadtrafficwayflow_id,description)
VALUES(3,'Αυτοκινητόδρομος με διαχωριστική νησίδα');
INSERT INTO road_traffic_way_flow(roadtrafficwayflow_id,description)
VALUES(4,'Διαχωριστηκή λωρίδα (χωρίς προστατευτικό κιγκλίδωμα)');
INSERT INTO road_traffic_way_flow(roadtrafficwayflow_id,description)
VALUES(5,'Μονόδρομος');
INSERT INTO road_traffic_way_flow(roadtrafficwayflow_id,description)
VALUES(6,'Ράμπα εισόδου / εξόδου');
INSERT INTO road_traffic_way_flow(roadtrafficwayflow_id,description)
VALUES(888,'Άλλο');
INSERT INTO road_traffic_way_flow(roadtrafficwayflow_id,description)
VALUES(999,'Άγνωστο');

CREATE TABLE road_traffic_signal_device_functioning(
    roadtrafficsignaldevicefunctioning_id INTEGER PRIMARY KEY,
    description VARCHAR(40)
);

INSERT INTO road_traffic_signal_device_functioning(roadtrafficsignaldevicefunctioning_id,description)
VALUES(0,'Επιλέξτε...');
INSERT INTO road_traffic_signal_device_functioning(roadtrafficsignaldevicefunctioning_id,description)
VALUES(1,'Δεν υπάρχει σηματοδότηση ΚΟΚ');
INSERT INTO road_traffic_signal_device_functioning(roadtrafficsignaldevicefunctioning_id,description)
VALUES(2,'Η συσκευή λειτουργεί σωστά');
INSERT INTO road_traffic_signal_device_functioning(roadtrafficsignaldevicefunctioning_id,description)
VALUES(3,'Η συσκευή δεν λειτουργεί');
INSERT INTO road_traffic_signal_device_functioning(roadtrafficsignaldevicefunctioning_id,description)
VALUES(4,'Η συσκευή δεν λειτουργεί σωστά');
INSERT INTO road_traffic_signal_device_functioning(roadtrafficsignaldevicefunctioning_id,description)
VALUES(888,'Άλλο');
INSERT INTO road_traffic_signal_device_functioning(roadtrafficsignaldevicefunctioning_id,description)
VALUES(999,'Άγνωστο');

CREATE TABLE method_of_investigation(
    methodofinvestigation_id INTEGER PRIMARY KEY,
    description VARCHAR(20)
);

INSERT INTO method_of_investigation(methodofinvestigation_id,description)
VALUES(0,'Επιλέξτε...');
INSERT INTO method_of_investigation(methodofinvestigation_id,description)
VALUES(1,'Επι τόπου');
INSERT INTO method_of_investigation(methodofinvestigation_id,description)
VALUES(2,'Μεταγενέστερα');

CREATE TABLE road_transient_factors(
    roadtransientfactors_id INTEGER PRIMARY KEY,
    description VARCHAR(40)
);

INSERT INTO road_transient_factors(roadtransientfactors_id,description)
VALUES(0,'Επιλέξτε...');
INSERT INTO road_transient_factors(roadtransientfactors_id,description)
VALUES(1,'Μέσα στο όχημα');
INSERT INTO road_transient_factors(roadtransientfactors_id,description)
VALUES(2,'Έξω από το όχημα');
INSERT INTO road_transient_factors(roadtransientfactors_id,description)
VALUES(777,'Δεν εφαρμόζετα');
INSERT INTO road_transient_factors(roadtransientfactors_id,description)
VALUES(999,'Άγνωστο');

CREATE TABLE fog(
yesnounknown_id INTEGER PRIMARY KEY,
description VARCHAR(20)
);

INSERT INTO fog(yesnounknown_id,description)
VALUES(0,'Επιλέξτε...');
INSERT INTO fog(yesnounknown_id,description)
VALUES(1,'Ναι');
INSERT INTO fog(yesnounknown_id,description)
VALUES(2,'Όχι');
INSERT INTO fog(yesnounknown_id,description)
VALUES(999,'Άγνωστο');

CREATE TABLE information_source(
    informationsource_id INTEGER PRIMARY KEY,
    description VARCHAR(50)
);

INSERT INTO information_source(informationsource_id,description)
VALUES(0,'Επιλέξτε...');
INSERT INTO information_source(informationsource_id,description)
VALUES(1,'Συνέντευξη στον τόπο του ατυχήματος');
INSERT INTO information_source(informationsource_id,description)
VALUES(2,'Συνέντευξη στο νοσοκομείο');
INSERT INTO information_source(informationsource_id,description)
VALUES(3,'Συνέντευξη στο σπίτι');
INSERT INTO information_source(informationsource_id,description)
VALUES(4,'Συνέντευξη στο νοσοκομείο');
INSERT INTO information_source(informationsource_id,description)
VALUES(5,'Συνέντευξη μέσω τηλεφώνου');
INSERT INTO information_source(informationsource_id,description)
VALUES(6,'Δικογραφία-Αρχεία της αστυνομίας');
INSERT INTO information_source(informationsource_id,description)
VALUES(7,'Συνέντευξη αυτόπτη μάρτυρα');
INSERT INTO information_source(informationsource_id,description)
VALUES(8,'Ομάδα μελέτης ατυχήματος');
INSERT INTO information_source(informationsource_id,description)
VALUES(777,'Δεν εφαρμόζεται');
INSERT INTO information_source(informationsource_id,description)
VALUES(888,'Άλλο');
INSERT INTO information_source(informationsource_id,description)
VALUES(999,'Άγνωστο');

CREATE TABLE vehicle_object_struck_offroad(
vehicleobjectstruckoffroad_id INTEGER PRIMARY KEY,
descriptionorder INTEGER,
objectstruckoffroadtype VARCHAR(40),
objectstruckoffroaddetail VARCHAR(120),
description VARCHAR(100)
);

INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(0,0,',',',','Επιλέξτε...');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(20,0,'Collision with Motor vehicle','Motor vehicle in transport on same roadway','Όχημα που κινείται στον ίδιο δρόμο');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(21,2,'Collision with Motor vehicle','Motor vehicle in transport on other roadway','Όχημα που κινείται σε διαφορετικό δρόμο');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(22,2,'Collision with Motor vehicle','Parked motor vehicle (not in transport)','Σταθμευμένο όχημα');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(23,2,'Collision with Motor vehicle','Working construction','Κατασκευαστικές εργασίες');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(24,2,'Collision with Motor vehicle','Maintenance or utility vehicles','Οχήματα συντήρησης');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(25,2,'Collision with Motor vehicle','Motor vehicle struck by falling/shifting cargo or anything set in motion by another motor vehicle in transport','Χτύπημα οχήματος από πτώση/μετατόπιση φορτίου κατά την μεταφορά από άλλο όχημα');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(26,3,'Collision with object not fixed','Pedestrian','Πεζός');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(27,3,'Collision with object not fixed','Non-motorist on personal conveyance','Ανάπηρος, βρέφος, κτλ');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(28,3,'Collision with object not fixed','Pedal cycle','Ποδήλατο');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(29,3,'Collision with object not fixed','Railway train','Τρένο');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(30,3,'Collision with object not fixed','Animal','Ζώο');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(31,3,'Collision with object not fixed','Ridden animal or animal-drawn conveyance','Σύγκρουση με οχήμα που μεταφέρεται από ζώο ή με ζώο που έχει αναβάτη');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(32,3,'Collision with object not fixed','Other object (not fixed)','Άλλο αντικείμενο (όχι σταθερό)');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(33,4,'Collision with fixed objects','Boulder','Ογκόλιθο');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(34,4,'Collision with fixed objects','Building','Κτίριο');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(36,4,'Collision with fixed objects','Bridge Pier or Abutment','Γέφυρα λιμανιού , γέφυρα από σιδηροκατασκευή');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(37,4,'Collision with fixed objects','Bridge Parapet End','Τελειώμα/άκρη κιγκλιδώματος γέφυρας');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(38,4,'Collision with fixed objects','Bridge Parapet','Κιγκλίδωμα γέφυρας');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(39,4,'Collision with fixed objects','Bridge Overhead Structure','Σώμα γέφυρας');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(40,4,'Collision with fixed objects','Guardrail Face','Προστατευτικό στηθαίο πρόσοψη');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(41,4,'Collision with fixed objects','Guardrail End','Προστατευτικό στηθαίο άκρη');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(42,4,'Collision with fixed objects','Concrete Traffic Barrier','Προστατευτικό στηθαίο από τσιμέντο');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(43,4,'Collision with fixed objects','Other Traffic Barrier','Άλλο προστατευτικό στηθαίο');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(44,4,'Collision with fixed objects','Highway/Traffic Sign Post/Sign','Σηματοδότες κυκλοφορίας αυτοκινητόδρομου/Πινακίδες Σήμανσης ΚΟΚ');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(45,4,'Collision with fixed objects','Traffic Signal Support/Signal','Πλευρική Φωτεινή Σηματοδότηση');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(46,4,'Collision with fixed objects','Overhead Sign Support/Sign','Οριζόντια  Φωτεινή Σηματοδότηση');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(47,4,'Collision with fixed objects','Luminary/Light Support','Φωτινοί σηματοδότες');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(48,4,'Collision with fixed objects','Utility Pole','Στύλοι ηλεκτροδότησης');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(49,4,'Collision with fixed objects','Other Post, Other Pole, or Other Supports','Άλλοι στύλοι ή άλλοι στύλοι σταθεροποίησης στον δρόμο');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(50,4,'Collision with fixed objects','Culvert','Αποχέτευση υπόγειων χώρων');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(51,4,'Collision with fixed objects','Kerb','Ρείθρο');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(52,4,'Collision with fixed objects','Ditch','Χαντάκι');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(53,4,'Collision with fixed objects','Embankment - Earth','Πρανές έδαφος');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(54,4,'Collision with fixed objects','Embankment - Rock','Πρανές πέτρες, βράχοι, τσιμέντο');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(55,4,'Collision with fixed objects','Embankment - Material Type Unknown','Πρανές άγνωστο ύλικο');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(56,4,'Collision with fixed objects','Fence','Φράχτης');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(57,4,'Collision with fixed objects','Wall','Τοίχος');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(58,4,'Collision with fixed objects','Tree (Standing Tree Only)','Δέντρο');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(59,4,'Collision with fixed objects','Snow Bank','Όγκο χιονιού');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(60,4,'Collision with fixed objects','Other Fixed Object','Άλλα σταθερά αντικείμενα');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(777,5,'Not applicable','Not applicable','Δεν εφαρμόζεται');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(888,5,'Other','Other','Άλλο');
INSERT INTO vehicle_object_struck_offroad(vehicleobjectstruckoffroad_id,descriptionorder,objectstruckoffroadtype,objectstruckoffroaddetail,description)
VALUES(999,5,'Unknown','Unknown','Άγνωστο');



