
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- attendee
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `attendee`;

CREATE TABLE `attendee`
(
	`event_id` int(10) unsigned NOT NULL,
	PRIMARY KEY (`event_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- post
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `post`;

CREATE TABLE `post`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(255) NOT NULL,
	`content` TEXT,
	`slug` VARCHAR(255),
	PRIMARY KEY (`id`),
	UNIQUE INDEX `post_slug` (`slug`(255))
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- patent
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `patent`;

CREATE TABLE `patent`
(
	`patent_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
	`manufacturer` VARCHAR(255) NOT NULL,
	`brand` VARCHAR(255) NOT NULL,
	`title` VARCHAR(255) NOT NULL,
	`patent_number` VARCHAR(32) NOT NULL,
	`application_number` VARCHAR(255) NOT NULL,
	`inventor` VARCHAR(255) NOT NULL,
	`patent_office_url` TEXT NOT NULL,
	`assignee` VARCHAR(255) NOT NULL,
	`google_url` VARCHAR(255) NOT NULL,
	`patent_date` DATE NOT NULL,
	`date_filed` DATE NOT NULL,
	`terms` VARCHAR(255) NOT NULL,
	`european_url` VARCHAR(255) NOT NULL,
	`date_updated` DATE NOT NULL,
	`tags` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`patent_id`),
	INDEX `patent_date` (`patent_date`),
	INDEX `date_filed` (`date_filed`),
	INDEX `patent_number` (`patent_number`),
	INDEX `manufacturer` (`manufacturer`)
) ENGINE=MyISAM;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
