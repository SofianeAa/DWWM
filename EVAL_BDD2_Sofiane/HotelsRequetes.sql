1- SELECT `nomHotel`,`villeHotel` FROM `hotels`
2- SELECT `nomClient`,`prenomClient`,`adresseClient`,`villeClient` FROM `clients` WHERE `nomClient`="white"
3- SELECT `nomStation`, `altitudeStation` FROM `stations` WHERE `altitudeStation` <1000
4- SELECT `numChambre`,`capaciteChambre` FROM `chambres` WHERE `capaciteChambre` > 1
5- SELECT `nomClient`,`villeClient` FROM `clients` WHERE `villeClient` != "Londres"
6- SELECT stations.nomStation, hotels.nomHotel, hotels.categorieHotel, hotels.villeHotel FROM `hotels` INNER JOIN stations ON hotels.idStation = stations.idStation
7- SELECT chambres.numChambre, hotels.nomHotel, hotels.categorieHotel, hotels.villeHotel FROM `chambres` INNER JOIN hotels ON chambres.idHotel = hotels.idHotel
8- SELECT clients.nomClient, reservations.dateReservationSejour, reservations.dateDebutSejour, reservations.dateFinSejour FROM `reservations` INNER JOIN clients ON reservations.idClient = clients.idClient
9- SELECT chambres.numChambre, hotels.nomHotel, stations.nomStation FROM `chambres` INNER JOIN hotels ON chambres.IdChambre = hotels.idHotel INNER JOIN stations ON hotels.idStation = stations.idStation
10-SELECT `nomHotel`, `categorieHotel`, `villeHotel`, chambres.numChambre, chambres.capaciteChambre FROM `hotels` INNER JOIN chambres ON hotels.idHotel = chambres.idHotel WHERE `villeHotel`="Bretou" AND `capaciteChambre` > 1
11-SELECT COUNT(hotels.nomHotel), `nomStation` FROM `stations` INNER JOIN hotels ON stations.idStation = hotels.idStation GROUP BY `nomStation`
12-SELECT COUNT(chambres.numChambre), `nomStation` FROM `stations` INNER JOIN hotels ON stations.idStation = hotels.idStation INNER JOIN chambres ON hotels.idHotel = chambres.idHotel GROUP BY `nomStation`
13-SELECT COUNT(chambres.numChambre), `nomStation` FROM `stations` INNER JOIN hotels ON stations.idStation = hotels.idStation INNER JOIN chambres ON hotels.idHotel = chambres.idHotel WHERE chambres.capaciteChambre > 1 GROUP BY `nomStation`
14-SELECT `nomHotel` FROM `hotels` INNER JOIN chambres ON hotels.idHotel = chambres.idHotel INNER JOIN reservations ON chambres.IdChambre = reservations.IdChambre INNER JOIN clients ON reservations.idClient = clients.idClient WHERE clients.nomClient="squire" AND reservations.dateReservationSejour IS NOT NULL
15-SELECT FLOOR(AVG(DATEDIFF(reservations.dateFinSejour, reservations.dateDebutSejour))) AS "Durée moyenne des réservations(en jour)", stations.nomStation FROM `stations` INNER JOIN hotels ON stations.idStation = hotels.idStation INNER JOIN chambres ON hotels.idHotel = chambres.idHotel INNER JOIN reservations ON chambres.IdChambre = reservations.IdChambre GROUP BY stations.nomStation
16-CREATE VIEW stationchambre AS SELECT
    stations.nomStation,
    stations.altitudeStation,
    hotels.*,
    chambres.IdChambre,
    chambres.numChambre,
    chambres.typeChambre,
    chambres.capaciteChambre
FROM
    stations
INNER JOIN hotels ON stations.idStation = hotels.idStation
INNER JOIN chambres ON hotels.idHotel = chambres.idHotelz

17-

18-ALTER TABLE reservations ADD archivé VARCHAR (50)
19-DELIMITER
    $$
CREATE PROCEDURE archivage()
BEGIN
        IF reservations.dateFinSejour < NOW() THEN
    UPDATE
        reservations
    SET
        `archivé` = "Oui" ;
        END $$
    DELIMITER
        ;