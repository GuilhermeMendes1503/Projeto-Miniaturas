create database BD_Miniaturas;
use BD_Miniaturas;

CREATE TABLE miniatura (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    codigo VARCHAR(5) NOT NULL,
    destaque CHAR(1) NULL,
    nome VARCHAR(60) NOT NULL,
    ano VARCHAR(4) NOT NULL,
    id_categoria INT(11) NOT NULL,
    subcateg VARCHAR(30) NOT NULL,
    escala VARCHAR(10) NOT NULL,
    peso FLOAT(9 , 3 ) NOT NULL,
    comprimento FLOAT(9 , 1 ) NOT NULL,
    largura FLOAT(9 , 1 ) NOT NULL,
    altura FLOAT(9 , 1 ) NOT NULL,
    preco FLOAT(9 , 2 ) NOT NULL,
    desconto TINYINT(4) NOT NULL,
    desconto_boleto TINYINT(4) NOT NULL,
    max_parcelas TINYINT(4) NOT NULL,
    estoque INT(11) NOT NULL,
    min_estoque INT(11) NOT NULL,
    credito VARCHAR(200) NOT NULL,
    Cat_img VARCHAR(60) NOT NULL,
    Cat_img2 VARCHAR(60) NOT NULL,
    data_cad DATE NOT NULL
)  ENGINE=INNODB;

CREATE TABLE categorias (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    cat_nome VARCHAR(20) NOT NULL
)  ENGINE=INNODB;

CREATE TABLE cadcli (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(60) NOT NULL,
    cpf VARCHAR(11) NOT NULL,
    rg VARCHAR(14) NOT NULL,
    sexo VARCHAR(1) NOT NULL,
    email VARCHAR(60) NOT NULL,
    senha VARCHAR(10) NOT NULL,
    end_nome VARCHAR(60) NOT NULL,
    end_num VARCHAR(10) NOT NULL,
    end_comp VARCHAR(20) NOT NULL,
    cep VARCHAR(8) NOT NULL,
    bairro VARCHAR(40) NOT NULL,
    cidade VARCHAR(40) NOT NULL,
    uf VARCHAR(2) NOT NULL
)  ENGINE=INNODB;

CREATE TABLE tb_estados (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    uf VARCHAR(2) NOT NULL,
    nome VARCHAR(20) NOT NULL,
    frete FLOAT(9 , 2 ) NOT NULL,
    cepi VARCHAR(8) NOT NULL,
    cepf VARCHAR(8) NOT NULL
)  ENGINE=INNODB;

CREATE TABLE pedidos (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    Id_cliente INT(11) NOT NULL,
    num_ped VARCHAR(20) NOT NULL,
    `Status` VARCHAR(35) NOT NULL,
    `data` DATE NOT NULL,
    hora VARCHAR(8) NOT NULL,
    valor FLOAT(9 , 2 ) NOT NULL,
    vencimento DATE NOT NULL,
    frete FLOAT(9 , 2 ) NOT NULL,
    desconto FLOAT(9 , 2 ) NOT NULL,
    formpag VARCHAR(1) NOT NULL,
    peso FLOAT(9 , 3 ) NOT NULL,
    cartao VARCHAR(20) NOT NULL,
    num_cartao VARCHAR(20) NOT NULL,
    venc_cartao VARCHAR(4) NOT NULL,
    nome_cartao VARCHAR(40) NOT NULL,
    cods_cartao VARCHAR(4) NOT NULL,
    parcelas VARCHAR(4) NOT NULL,
    data_pag DATE NOT NULL
)  ENGINE=INNODB;

CREATE TABLE itens (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    num_ped VARCHAR(20) NOT NULL,
    codigo VARCHAR(5) NOT NULL,
    nome VARCHAR(60) NOT NULL,
    quant TINYINT(4) NOT NULL,
    Preco FLOAT(9 , 2 ) NOT NULL,
    desconto TINYINT(8) NOT NULL,
    desconto_boleto TINYINT(8) NOT NULL
)  ENGINE=INNODB;

INSERT INTO `tabcadastro`(`id`, `codigo`, `destaque`, `nome`, `ano`, `id_categoria`, `escala`, `peso`, `comprimento`, `largura`, `alitura`, `perco`, `desconto`, `desconto_boleto`, `max_parcelas`, `estoque`, `min_estoque`, `credito`, `Cat_img`, `Cat_img2`, `data_cad`) 
VALUES ('0001','n','Comercial azul','2019','1','Mercedes','1:10','300','24','15','22','500','5','10','5','10','4','200','2020-12-20','img/bluebus_front.jpg','img/bluebus_front.jpg')
VALUES ('0002','n','Antigo vermelho','2019','1','Volksvagen','1:10','240','24','15','26','600','3','10','5','30','4','200','2020-12-20','img/redbus_front.jpg','img/redbus_front.jpg')
VALUES ('0003','n','BMW Custom','2017','2','BMW','1:10','240','24','15','22','400','6','10','5','70','4','200','2020-12-20','img/Bmw_front.jpg','img/Bmw_front.jpg')
VALUES ('0004','n','Jeep','','2','2017','1:10','Ford','300','24','15','26','700','10','5','60','4','200','2020-12-20','img/Jeep_front.jpg','img/Jeep_front.jpg')
VALUES ('0005','n','Moto BMW','2014','3','BMW','1:10','300','27','15','22','580','2','10','5','80','4','200','2020-12-20','img/motobmw_Front.jpg','img/motobmw_Front.jpg')
VALUES ('0006','n','Moto Black','2014','3','Ducati','1:10','240','24','20','26','980','9','10','5','46','5','200','2020-12-20','img/black_front.jpg','img/black_front.jpg')
VALUES ('0007','n','Avião Comercial','2017','4','turkish','1:10','300','27','20','26','244','2','10','5','79','5','200','2020-12-20','img/airline_front.jpg','img/airline_front.jpg')
VALUES ('0008','n','Avião guerra','2017','4','Zodp','1:10','300','24','20','22','260','5','10','5','79','5','200','2020-12-20','img/airwar_front.jpg','img/airwar_front.jpg')
VALUES ('0009','n','Heli Blue','2014','5','Helicoptero','1:10','240','24','20','26','534','7','10','5','90','5','200','2020-12-20','img/blueHeli_Front.jpg','img/blueHeli_Front.jpg')
VALUES ('0010','n','Heli War','2017','5','Helicoptero','1:10','240','24','20','26','806','9','10','5','35','6','200','2020-12-20','img/heli_front.jpg','img/heli_front.jpg')
VALUES ('0011','n','Red Truck','2019','6','Scania','1:10','240','27','20','22','256','4','10','5','78','7','200','2020-12-20','img/redtruck_front.jpg','img/redtruck_front.jpg')
VALUES ('0012','n','Scania','2019','6','Scania','1:10','300','27','20','22','987','7','10','5','47','8','200','2020-12-20','img/scania_front.jpg','img/scania_front.jpg')
