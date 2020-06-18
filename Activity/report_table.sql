CREATE TABLE `report_table` (
  `reportno` int(254) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `ID` varchar(9) NOT NULL,
  `Title` varchar(20) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Description` text NOT NULL,
  `status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `report_table` (`reportno`, `Name`, `ID`,`Location`, `Title`, `Type`, `Description`, `status`) VALUES
(1, 'Jinghong','WIF180078', 'Block B Wing A', 'Dirty toilet', 'Toilet Issue', 'Unflushable and caused disgusting smell', 'Completed'),
(2, 'Jinghong', 'WIF180078','Parking Slot in front of kk', 'Stranger appears', 'Safety issue', 'Dark shadow appears outside the parking area during midnight', 'In Progress'),
(3, 'Jinghong', 'WIF180078','B332', 'Fan malfunction', 'Appliances issue', 'Fan is not working', 'Pending');


--Indexes of table
ALTER TABLE `report_table`
  ADD PRIMARY KEY (`reportno`);



--auto Increment
  ALTER TABLE `report_table`
  MODIFY `reportno` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;