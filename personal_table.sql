CREATE TABLE `personalTable` (
  `ID` varchar(9) NOT NULL,
  `ProfilePicture` varbinary(2147483648) NULL,
  `Name` varchar(254) NULL,
  `IC` varchar(20) NULL,
  `Nationality` varchar(13) NULL,
  `Gender` varchar(6) NULL,
  `Birthday` varchar(254) NULL,
  `Race` varchar(10) NULL,
  `Religion` varchar(12) NULL,
  `Marital` varchar(10) NULL,
  PRIMARY KEY (ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `personaltable`
  ADD UNIQUE KEY `UP_ID` (`ID`);