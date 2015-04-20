CREATE database EMSPSS;

use EMSPSS;

create table login(
username varchar(100) NOT NULL,
firstname varchar(40),
lastname varchar(40),
`password` varchar(200) NOT NULL,
`type` varchar(5) NOT NULL,
primary key(username)
);

INSERT INTO login(username, `password`, `type`) VALUES ('general', '123', 'G');
INSERT INTO login(username, `password`, `type`) VALUES ('admin', '123', 'A');

Create table FullTimeEmp(
FirstName varchar(40),
LastName  varchar(40),
Company		varchar(40),
SIN			varchar(40),
DateOfBirth varchar(40),
DataOfHire varchar(40),
DateOfTermination varchar(40),
Salary varchar(40),
primary Key(SIN)

);

Create table IF NOT EXISTS PERSON(
ID integer NOT null auto_increment,
FIRSTNAME VARCHAR(40),
LASTNAME VARCHAR(40),
SIN		VARCHAR(10),
DATEOFBIRTH VARCHAR(40),
PRIMARY KEY(ID)
);


Create table if not exists company(
ID integer not null auto_increment,
CORPORATIONNAME VARCHAR(40),
PRIMARY KEY(ID)
);

Create table if not exists  employee(
ID integer not null auto_increment,
company_id integer not null,
person_id  integer not null,
Employeestatus varchar(40) default 'Inactive',
EmployType     varchar(10), 
Foreign key fk_companyid(company_id) references company(ID),
Foreign key fk_personid(person_id) references person(ID),
primary key(ID)
);

Create table if not exists FulltimeEmployee(
ID integer not null auto_increment,
employee_id integer not null,
dateofhire	varchar(40),
dateoftermination varchar(40),
salary varchar(40),
Foreign key fk_employeeid(employee_id) references employee(id),
primary key(ID)
);

Create table if not exists TimeCard(
ID integer not null auto_increment,
employee_id  integer not null,
flag			varchar(40),
mondayHours	  decimal(3,1),
tuesdayHours	 decimal(3,1),
wednesdayHours   decimal(3,1),
thursdayHours	 decimal(3,1),
fridayHours		 decimal(3,1),
saturdayHours	 decimal(3,1),
sundayHours 	decimal(3,1),
FOREIGN KEY fk_employeeid(employee_id) references employee(id),
primary key(ID)
);

Create table if not exists SeasonEmpWeekPiece(
ID integer not null auto_increment,
timecard_id integer not null,
pieceamount integer,
FOREIGN KEY fk_timecardid(timecard_id) references TimeCard(id),
primary key(ID)
);

Create table if not exists ParttimeEmployee(

	ID integer not null auto_increment,
	employee_id  integer not null,
	dateofhire	varchar(40),
	dateoftermination varchar(40),
	hourlyrate varchar(40),
	Foreign key fk_employeeid(employee_id) references employee(id),
	primary key(ID)

);

Create table if not exists SeasonalEmployee(
	ID integer not null auto_increment,
	employee_id  integer not null,
	season varchar(40),
	piecePay varchar(40),
	seasonYear varchar(40),
	Employeestatus varchar(40) default 'Inactive',

	Foreign key fk_employeeid(employee_id) references employee(id),
	primary key(ID)

);


Create table if not exists Contractor(
	ID integer not null auto_increment,
	company_id  integer not null,
	contractStartDate varchar(40),
	contractStopDate varchar(40),
	fixedContractAmount varchar(40),
	Foreign key fk_companyid(company_id) references company(id),
	primary key(ID)

);

Create table if not exists Audit(
	ID integer not null auto_increment,
	user_id integer not null,
	changetime varchar(40),
	SIN        varchar(40),
	TableName	varchar(40),
	field 	   varchar(40),
	oldValue	varchar(200),
	newvalue 	varchar(200),
	primary key(ID)
);

