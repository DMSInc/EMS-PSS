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