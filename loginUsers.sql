CREATE database users;

use users;

create table login(
username varchar(100) NOT NULL,
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
Employeestatus varchar(40),
ReasonForLeave varchar(40),
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