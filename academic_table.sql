CREATE TABLE `academicTable` (
    `ID` varchar(9) NOT NULL,
    `Faculty` varchar(254) NULL,
    `Course` varbinary(254) NULL,
    `EntryYear` int(4) NULL,
    `Duration` varchar(9) NULL,
    `Mode` varchar(13) NULL,
    PRIMARY KEY (ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `academictable`
  ADD UNIQUE KEY `UA_ID` (`ID`);