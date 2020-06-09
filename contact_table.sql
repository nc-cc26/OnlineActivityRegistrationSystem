CREATE TABLE `contactTable` (
    `ID` varchar(9) NOT NULL,
    `Address1` varchar(254) NOT NULL DEFAULT 'Null',
    `Address2` varchar(254) NULL,
    `Address3` varchar(254) NULL,
    `Postcode` int(5) NOT NULL DEFAULT 00000,
    `City` varchar(20) NOT NULL DEFAULT 'Null',
    `State` varchar(30) NOT NULL DEFAULT 'Null',
    `Phone` int(11) NOT NULL DEFAULT 0,
    `Email` varchar(9) NOT NULL DEFAULT 'Null', 
    PRIMARY KEY (ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `contacttable`
  ADD UNIQUE KEY `UCON_ID` (`ID`);