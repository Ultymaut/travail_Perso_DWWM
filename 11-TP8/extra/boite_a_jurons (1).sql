#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: users
#------------------------------------------------------------

CREATE TABLE users(
        id_user       Int  Auto_increment  NOT NULL ,
        nom           Varchar (50) NOT NULL ,
        prenom        Varchar (50) NOT NULL ,
        dateNaissance Date NOT NULL ,
        solde         Float NOT NULL
	,CONSTRAINT users_PK PRIMARY KEY (id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: profile
#------------------------------------------------------------

CREATE TABLE profile(
        id_profile Int  Auto_increment  NOT NULL ,
        login      Varchar (50) NOT NULL ,
        mdp        Varchar (50) NOT NULL ,
        privilege  Bool NOT NULL
	,CONSTRAINT profile_PK PRIMARY KEY (id_profile)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: type_Infractions
#------------------------------------------------------------

CREATE TABLE type_Infractions(
        id_Infraction Int  Auto_increment  NOT NULL ,
        libelee       Varchar (50) NOT NULL ,
        montant       Float NOT NULL
	,CONSTRAINT type_Infractions_PK PRIMARY KEY (id_Infraction)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: balance
#------------------------------------------------------------

CREATE TABLE balance(
        id_balance Int  Auto_increment  NOT NULL ,
        nom        Varchar (50) NOT NULL ,
        prenom     Varchar (50) NOT NULL
	,CONSTRAINT balance_PK PRIMARY KEY (id_balance)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: detenir
#------------------------------------------------------------

CREATE TABLE detenir(
        id_user    Int NOT NULL ,
        id_profile Int NOT NULL ,
        id_balance Int NOT NULL
	,CONSTRAINT detenir_PK PRIMARY KEY (id_user,id_profile,id_balance)

	,CONSTRAINT detenir_users_FK FOREIGN KEY (id_user) REFERENCES users(id_user)
	,CONSTRAINT detenir_profile0_FK FOREIGN KEY (id_profile) REFERENCES profile(id_profile)
	,CONSTRAINT detenir_balance1_FK FOREIGN KEY (id_balance) REFERENCES balance(id_balance)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: fait
#------------------------------------------------------------

CREATE TABLE fait(
        id_Infraction Int NOT NULL ,
        id_user       Int NOT NULL ,
        date          Datetime NOT NULL
	,CONSTRAINT fait_PK PRIMARY KEY (id_Infraction,id_user)

	,CONSTRAINT fait_type_Infractions_FK FOREIGN KEY (id_Infraction) REFERENCES type_Infractions(id_Infraction)
	,CONSTRAINT fait_users0_FK FOREIGN KEY (id_user) REFERENCES users(id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: decla
#------------------------------------------------------------

CREATE TABLE decla(
        id_decla      Int  Auto_increment  NOT NULL ,
        id_Infraction Int NOT NULL ,
        id_balance    Int NOT NULL ,
        id_user       Int NOT NULL ,
        dated         Datetime NOT NULL
	,CONSTRAINT declare_PK PRIMARY KEY (id_decla)

	,CONSTRAINT declare_type_Infractions_FK FOREIGN KEY (id_Infraction) REFERENCES type_Infractions(id_Infraction)
	,CONSTRAINT declare_balance0_FK FOREIGN KEY (id_balance) REFERENCES balance(id_balance)
	,CONSTRAINT declare_users1_FK FOREIGN KEY (id_user) REFERENCES users(id_user)
)ENGINE=InnoDB;

