CREATE TABLE `academicTable` (
    `ID` varchar(9) NOT NULL,
    `Faculty` varchar(254) NOT NULL DEFAULT 'Null',
    `Course` varchar(254) NOT NULL DEFAULT 'Null',
    `EntryYear` int(4) NOT NULL DEFAULT 'Null',
    `Duration` varchar(9) NOT NULL DEFAULT 'Null',
    `Mode` varchar(13) NOT NULL DEFAULT 'Null',
    PRIMARY KEY (ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `academictable`
  ADD UNIQUE KEY `UA_ID` (`ID`);