CREATE TABLE passenger(
  passenger_id INT(5) NOT NULL,
  name VARCHAR(30) NOT NULL,
  gender CHAR NOT NULL,
  address VARCHAR(60) NOT NULL,
  age INT(3) NOT NULL,
  contact_no BIGINT(15) NOT NULL,
  PRIMARY KEY(passenger_id)
);

CREATE TABLE train(
  train_id int NOT NULL,
  origin VARCHAR(30) NOT NULL,
  destination VARCHAR(30) NOT NULL,
  PRIMARY KEY(train_id)
);

CREATE TABLE trip(
  trip_id INT(5) NOT NULL,
  train_id INT(5) NOT NULL,
  passenger_id INT(5) NOT NULL,
  date VARCHAR(30) NOT NULL,
  PRIMARY KEY(trip_id)
);

INSERT INTO train values(1,"Silom","Sala Daeng");
INSERT INTO passenger values(1,"Anwesh Devkota",'M',"Rama 3 Living Nara",20,9921243294);
INSERT INTO trip values(1,1,1,"28-03-2020");
