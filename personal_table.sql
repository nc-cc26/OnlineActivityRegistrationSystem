CREATE TABLE `personalTable` (
  `ID` varchar(9) NOT NULL,
  `NewMatrics` varchar(10) NOT NULL DEFAULT 'Null',
  `ProfilePicture` longblob NULL,
  `Name` varchar(254) NOT NULL DEFAULT 'Null',
  `IC` varchar(20) NOT NULL DEFAULT 'Null',
  `Nationality` varchar(13) NOT NULL DEFAULT 'Null',
  `Gender` varchar(6) NOT NULL DEFAULT 'Null',
  `Birthday` varchar(254) NOT NULL DEFAULT 'Null',
  `Race` varchar(10) NOT NULL DEFAULT 'Null',
  `Religion` varchar(12) NOT NULL DEFAULT 'Null',
  `Marital` varchar(10) NOT NULL DEFAULT 'Null',
  PRIMARY KEY (ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `personaltable`
  ADD UNIQUE KEY `UP_ID` (`ID`);