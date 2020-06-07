CREATE TABLE `contactTable` (
    `ID` varchar(9) NOT NULL,
    `Address` varchar(254) NULL,
    `Postcode` int(5) NULL,
    `City` varchar(20) NULL,
    `State` varchar(30) NULL,
    `Phone` int(11) NULL,
    `Email` varchar(9) NULL,
    PRIMARY KEY (ID),
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `contacttable`
  ADD UNIQUE KEY `UCON_ID` (`ID`);