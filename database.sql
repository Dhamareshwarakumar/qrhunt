CREATE DATABASE
    IF NOT EXISTS `acmgmrit`
CREATE TABLE
    `details` (
        `ID` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `team_name` text DEFAULT NULL,
        `team_no` text DEFAULT NULL,
        `name` text DEFAULT NULL,
        `jntu` text DEFAULT NULL,
        `section` text DEFAULT NULL
    )