-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2019 at 02:48 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db2018082`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `no_ktp` char(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`no_ktp`) VALUES
('30503761329769'),
('3549847459753147'),
('3562397398402994'),
('3576112222610710'),
('3582133711292259'),
('3584463983175090'),
('372301336349883'),
('374288979758355'),
('5602243956590829'),
('6762089970903991');

-- --------------------------------------------------------

--
-- Table structure for table `alamat`
--

CREATE TABLE `alamat` (
  `no_ktp_anggota` char(20) COLLATE utf8_bin NOT NULL,
  `nama` char(255) COLLATE utf8_bin NOT NULL,
  `jalan` char(255) COLLATE utf8_bin NOT NULL,
  `nomor` int(32) NOT NULL,
  `kota` char(255) COLLATE utf8_bin NOT NULL,
  `kodepos` char(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `alamat`
--

INSERT INTO `alamat` (`no_ktp_anggota`, `nama`, `jalan`, `nomor`, `kota`, `kodepos`) VALUES
('30174992400264', '0 Aberg Center', 'Monument', 5, 'Michigan', '48242'),
('3575019961998738', '0 Moulton Road', '263-TRIAL-Bartillon 268', 20, '92-TRIAL-Texas 185', '102-TRIAL-'),
('5020551995835422228', '0 Stoughton Terrace', '296-TRIAL-Drewry 122', 7, '217-TRIAL-District of Columbia 212', '117-TRIAL-'),
('3564305146956409', '0 Veith Park', 'Kenwood', 65372, 'California', '94142'),
('3537718505350648', '040 Straubel Lane', '192-TRIAL-Red Cloud 297', 81724, '149-TRIAL-Texas 156', '61-TRIAL-'),
('6378285343720668', '06266 Montana Parkway', 'Mallory', 9, 'New York', '10633'),
('374283526007463', '09 Roxbury Street', 'Sloan', 3, 'Michigan', '48224'),
('5002355146906560', '1 Hooker Parkway', 'North', 6097, 'New Hampshire', '03105'),
('490348652352539094', '1 Montana Drive', 'Quincy', 97, 'Texas', '76121'),
('4844430145727856', '1 Moulton Drive', 'Comanche', 98, 'Texas', '77234'),
('30573583237656', '1039 Monument Way', 'Morningstar', 8, 'Massachusetts', '02104'),
('5020519192967366', '12016 Pleasure Hill', '258-TRIAL-8th 139', 13, '203-TRIAL-California 160', '157-TRIAL-'),
('374288121576614', '12673 American Center', 'Hayes', 127, 'Florida', '33169'),
('5641827408498129', '13660 Mcbride Center', 'Anzinger', 0, 'Texas', '77060'),
('3570444669030672', '14 Walton Junction', '225-TRIAL-Banding 127', 487, '229-TRIAL-Georgia 128', '223-TRIAL-'),
('5020709070543228761', '14986 Birchwood Circle', '221-TRIAL-Florence 170', 1168, '126-TRIAL-California 134', '205-TRIAL-'),
('4936950340247883391', '154 Mccormick Center', 'Knutson', 0, 'California', '95133'),
('676789972127957623', '17036 Summerview Plaza', '230-TRIAL-Grover 226', 371, '211-TRIAL-Indiana 171', '111-TRIAL-'),
('5010129114742608', '177 Caliangt Pass', '153-TRIAL-Lillian 220', 9, '90-TRIAL-Virginia 224', '188-TRIAL-'),
('201464130240596', '1845 Coolidge Hill', '167-TRIAL-Mendota 48', 36015, '175-TRIAL-Colorado 38', '123-TRIAL-'),
('6759362965367737', '2 Hanover Center', 'Moose', 6, 'Florida', '33731'),
('3540440821693685', '2 Lukken Drive', '167-TRIAL-Glacier Hill 141', 8875, '29-TRIAL-Illinois 40', '213-TRIAL-'),
('3529198427466212', '20 Clove Place', 'Westend', 5618, 'Texas', '77260'),
('5018697162965796975', '20781 Annamark Road', '287-TRIAL-Birchwood 97', 898, '18-TRIAL-Massachusetts 77', '73-TRIAL-'),
('3574506465131957', '21 Autumn Leaf Hill', '160-TRIAL-New Castle 126', 2, '10-TRIAL-Ohio 257', '70-TRIAL-'),
('36932248218150', '22 Corben Place', '140-TRIAL-Waubesa 13', 7, '275-TRIAL-Ohio 272', '218-TRIAL-'),
('3536580041384627', '224 Steensland Park', 'Marquette', 473, 'Colorado', '80127'),
('3537718505350648', '22661 Morrow Hill', 'Nova', 193, 'Texas', '77305'),
('589314482821650077', '23210 Manley Pass', '2-TRIAL-Luster 262', 2992, '123-TRIAL-Ohio 296', '137-TRIAL-'),
('4911833093271694', '24 Cottonwood Park', '119-TRIAL-Sutherland 25', 744, '176-TRIAL-California 94', '158-TRIAL-'),
('3531505759321912', '246 Hoard Parkway', '271-TRIAL-Ilene 266', 3, '178-TRIAL-Georgia 93', '151-TRIAL-'),
('6333321016342391', '26747 Summerview Junction', '118-TRIAL-Linden 264', 519, '119-TRIAL-Florida 52', '100-TRIAL-'),
('3569531172817836', '27 Sutteridge Place', 'Moulton', 870, 'Illinois', '60681'),
('5108752485991810', '28012 Kensington Parkway', '32-TRIAL-Superior 263', 2705, '207-TRIAL-Texas 83', '11-TRIAL-'),
('30551563793039', '29 Wayridge Drive', '211-TRIAL-Kenwood 204', 94, '235-TRIAL-Washington 256', '72-TRIAL-'),
('3537682066141301', '3 Gina Way', '126-TRIAL-Weeping Birch 157', 51, '237-TRIAL-Georgia 171', '169-TRIAL-'),
('3567273887240440', '3 Rutledge Hill', 'Hudson', 55, 'Texas', '75044'),
('3566975121757234', '3041 Claremont Avenue', '259-TRIAL-Raven 232', 1, '96-TRIAL-Texas 155', '53-TRIAL-'),
('201669371684670', '31677 Bunting Court', '140-TRIAL-Clarendon 151', 28, '62-TRIAL-Colorado 29', '0-TRIAL- 1'),
('560222380425820900', '3184 7th Terrace', '223-TRIAL-Cascade 85', 65741, '156-TRIAL-Colorado 116', '126-TRIAL-'),
('3532759816062121', '3359 Tony Way', 'Canary', 317, 'Texas', '88514'),
('201697503918179', '3384 Lawn Point', '240-TRIAL-Daystar 88', 2522, '185-TRIAL-Tennessee 190', '297-TRIAL-'),
('3561396991504850', '357 Portage Road', '82-TRIAL-Bartelt 286', 3271, '165-TRIAL-Tennessee 187', '177-TRIAL-'),
('337941176080538', '37 Hoard Street', 'Corry', 49380, 'Massachusetts', '01152'),
('3575662246414953', '37 Starling Avenue', 'Miller', 18448, 'Washington', '98907'),
('201725546988956', '3778 Alpine Center', 'Coleman', 76, 'North Carolina', '28205'),
('3579130872121983', '401 Hoard Way', 'Fair Oaks', 79, 'Texas', '88584'),
('201700868521313', '453 Annamark Alley', '276-TRIAL-Lukken 227', 48418, '43-TRIAL-New Jersey 258', '264-TRIAL-'),
('5555752260577014', '453 Brentwood Way', 'Everett', 756, 'Alabama', '35225'),
('3540440821693685', '45367 Magdeline Drive', 'Anderson', 5002, 'Colorado', '80235'),
('4911883723291123944', '45457 Gina Street', '287-TRIAL-Rowland 260', 2, '213-TRIAL-North Carolina 74', '170-TRIAL-'),
('3554546533208266', '5031 Forest Dale Way', '113-TRIAL-Melody 127', 60302, '2-TRIAL-Florida 199', '227-TRIAL-'),
('3582886996379212', '51 Oneill Plaza', '284-TRIAL-Shoshone 34', 7607, '54-TRIAL-California 172', '157-TRIAL-'),
('5602242968227421397', '51732 Mifflin Point', '64-TRIAL-Anzinger 181', 3, '3-TRIAL-Utah 229', '75-TRIAL-'),
('4405481223298477', '52353 Oak Valley Trail', 'Cottonwood', 7966, 'Texas', '77050'),
('5116832994703987', '54242 Algoma Plaza', '60-TRIAL-Buhler 228', 1938, '93-TRIAL-Alabama 84', '205-TRIAL-'),
('3569188677171787', '561 Oneill Avenue', 'Cascade', 2, 'California', '92110'),
('3580398213881261', '57596 Haas Court', 'Fuller', 4, 'Kansas', '67236'),
('3580398213881261', '59 American Ash Way', '144-TRIAL-Melby 158', 7325, '35-TRIAL-California 59', '92-TRIAL-'),
('6333670539673058', '6 Mockingbird Park', '150-TRIAL-Nova 298', 9, '79-TRIAL-Kansas 201', '193-TRIAL-'),
('3577513565084836', '6 Westerfield Court', 'Lien', 34, 'Ohio', '44197'),
('337941108713552', '60 Nobel Drive', 'Graceland', 8431, 'New Jersey', '08922'),
('5602246446608267', '60945 Boyd Drive', '58-TRIAL-Buhler 178', 7617, '265-TRIAL-Florida 107', '77-TRIAL-'),
('6304706188927679', '6421 Southridge Center', 'Ludington', 8101, 'California', '91913'),
('3529050360945720', '64762 Lakewood Terrace', '55-TRIAL-Vidon 255', 132, '242-TRIAL-Idaho 62', '11-TRIAL-'),
('36932248218150', '665 Gulseth Trail', 'Victoria', 544, 'California', '90087'),
('3530745171606752', '694 Stone Corner Drive', '137-TRIAL-Basil 134', 55449, '156-TRIAL-Nevada 193', '276-TRIAL-'),
('5602253640461535', '7 Cardinal Terrace', 'Susan', 477, 'Texas', '75216'),
('5588989835902738', '7 Del Sol Court', 'Lerdahl', 291, 'Arizona', '85246'),
('676788062286776575', '70 Meadow Ridge Court', 'Mayfield', 68186, 'Maryland', '20904'),
('3585246255089902', '71 Homewood Circle', 'Independence', 19537, 'Florida', '32964'),
('3540499341444847', '72 Arrowood Place', '103-TRIAL-Claremont 132', 4, '105-TRIAL-Delaware 293', '225-TRIAL-'),
('633110982368124917', '7402 Bonner Alley', '185-TRIAL-Red Cloud 41', 68494, '123-TRIAL-Texas 129', '229-TRIAL-'),
('6331101213933329864', '748 Killdeer Point', '117-TRIAL-Darwin 232', 2, '212-TRIAL-Alabama 95', '269-TRIAL-'),
('4844166072545263', '7674 3rd Hill', '43-TRIAL-Meadow Ridge 124', 4, '223-TRIAL-New York 272', '161-TRIAL-'),
('374622749339775', '7764 Hauk Way', '177-TRIAL-Lakewood Gardens 8', 24, '113-TRIAL-Florida 187', '1-TRIAL- 5'),
('5010127104513963', '77738 Sundown Trail', 'Hooker', 692, 'Colorado', '80305'),
('5602242968227421397', '77783 David Road', 'Mitchell', 766, 'North Carolina', '28278'),
('502093976312017985', '7796 Carberry Avenue', 'Hayes', 22757, 'Colorado', '81005'),
('6763533583217694', '78 Becker Trail', 'Bartillon', 59, 'Louisiana', '70815'),
('3584362274917378', '7839 Eastlawn Road', 'Darwin', 2, 'Ohio', '44118'),
('5602221676764916', '7866 Sycamore Court', '24-TRIAL-Dixon 278', 82037, '252-TRIAL-New York 143', '96-TRIAL-'),
('4844696161075210', '8 Delladonna Hill', '235-TRIAL-Anderson 233', 14212, '211-TRIAL-Ohio 260', '296-TRIAL-'),
('5602221676764916', '8 Roxbury Parkway', 'Lillian', 9625, 'Tennessee', '37228'),
('3529050360945720', '800 Rigney Plaza', 'Warrior', 9885, 'Nevada', '89595'),
('3571009106261385', '807 Garrison Place', '62-TRIAL-Anzinger 48', 26, '281-TRIAL-District of Columbia 0', '13-TRIAL-'),
('502022140240257660', '811 Lindbergh Road', 'Bluejay', 1656, 'California', '94250'),
('5002355146906560', '82 Butterfield Point', '190-TRIAL-Pawling 145', 2, '153-TRIAL-Connecticut 114', '51-TRIAL-'),
('67712841902659791', '821 Iowa Center', '295-TRIAL-Shasta 125', 42409, '64-TRIAL-Texas 160', '202-TRIAL-'),
('6331101213933329864', '82250 Gale Plaza', 'Muir', 6454, 'Florida', '32225'),
('6385130286085318', '87 Iowa Place', 'Sunbrook', 681, 'Rhode Island', '02905'),
('3582511918708518', '897 Spohn Place', 'Veith', 33, 'Kentucky', '40524'),
('30005707166701', '9 Nova Crossing', '85-TRIAL-Kedzie 250', 7497, '140-TRIAL-Ohio 194', '295-TRIAL-'),
('676314996726471466', '90 Havey Pass', 'Debs', 98270, 'Montana', '59771'),
('372301610648992', '91 Novick Parkway', '92-TRIAL-Jenifer 142', 83029, '122-TRIAL-New Jersey 86', '164-TRIAL-'),
('5602244544212264', '9187 Cherokee Place', 'Hoepker', 91, 'Massachusetts', '01129'),
('3571009106261385', '97252 Starling Point', 'Sullivan', 9, 'Florida', '33673'),
('63045339046650815', '98034 Hoepker Hill', 'Pierstorff', 1152, 'Texas', '79405'),
('3586251071244276', '9893 Rowland Point', '54-TRIAL-Graceland 211', 8367, '241-TRIAL-Florida 75', '159-TRIAL-'),
('3561952555530911', '994 Glendale Parkway', 'Meadow Vale', 2117, 'Texas', '79415');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `no_ktp` char(20) COLLATE utf8_bin NOT NULL,
  `poin` float(24,0) NOT NULL,
  `level` char(20) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`no_ktp`, `poin`, `level`) VALUES
('201464130240596', 810, 'gold'),
('201669371684670', 458, 'silver'),
('201697503918179', 743, 'gold'),
('201700868521313', 844, 'gold'),
('201725546988956', 53, 'regular'),
('30005707166701', 997, 'gold'),
('30174992400264', 943, 'gold'),
('30551563793039', 1137, 'platinum'),
('30573583237656', 244, 'silver'),
('337941108713552', 265, 'silver'),
('337941176080538', 557, 'gold'),
('3529050360945720', 127, 'regular'),
('3529198427466212', 524, 'gold'),
('3530745171606752', 344, 'silver'),
('3531505759321912', 109, 'regular'),
('3532759816062121', 161, 'silver'),
('3536580041384627', 1072, 'platinum'),
('3537682066141301', 505, 'gold'),
('3537718505350648', 573, 'gold'),
('3540440821693685', 638, 'gold'),
('3540499341444847', 251, 'silver'),
('3554546533208266', 925, 'gold'),
('3561396991504850', 856, 'gold'),
('3561952555530911', 323, 'silver'),
('3564305146956409', 861, 'gold'),
('3566975121757234', 549, 'gold'),
('3567273887240440', 309, 'silver'),
('3569188677171787', 446, 'silver'),
('3569531172817836', 32, 'regular'),
('3570444669030672', 454, 'silver'),
('3571009106261385', 778, 'gold'),
('3574506465131957', 74, 'regular'),
('3575019961998738', 1037, 'platinum'),
('3575662246414953', 301, 'silver'),
('3577513565084836', 350, 'silver'),
('3579130872121983', 179, 'silver'),
('3580398213881261', 54, 'regular'),
('3582511918708518', 380, 'silver'),
('3582886996379212', 17, 'regular'),
('3584362274917378', 1097, 'platinum'),
('3585246255089902', 1043, 'platinum'),
('3586251071244276', 823, 'gold'),
('36932248218150', 254, 'silver'),
('372301610648992', 74, 'regular'),
('374283526007463', 974, 'gold'),
('374288121576614', 1049, 'platinum'),
('374622749339775', 1014, 'platinum'),
('4405481223298477', 1034, 'platinum'),
('4844166072545263', 1097, 'platinum'),
('4844430145727856', 49, 'regular'),
('4844696161075210', 1091, 'platinum'),
('490348652352539094', 775, 'gold'),
('4911833093271694', 137, 'regular'),
('4911883723291123944', 513, 'gold'),
('4936950340247883391', 250, 'silver'),
('5002355146906560', 407, 'silver'),
('5010127104513963', 235, 'silver'),
('5010129114742608', 317, 'silver'),
('5018697162965796975', 155, 'silver'),
('502022140240257660', 1097, 'platinum'),
('5020519192967366', 326, 'silver'),
('5020551995835422228', 567, 'gold'),
('5020709070543228761', 948, 'gold'),
('502093976312017985', 629, 'gold'),
('5108752485991810', 799, 'gold'),
('5116832994703987', 1142, 'platinum'),
('5555752260577014', 21, 'regular'),
('5588989835902738', 745, 'gold'),
('5602221676764916', 809, 'gold'),
('560222380425820900', 323, 'silver'),
('5602242968227421397', 1085, 'platinum'),
('5602244544212264', 1038, 'platinum'),
('5602246446608267', 425, 'silver'),
('5602253640461535', 165, 'silver'),
('5641827408498129', 460, 'silver'),
('589314482821650077', 1068, 'platinum'),
('63045339046650815', 237, 'silver'),
('6304706188927679', 122, 'regular'),
('6331101213933329864', 1135, 'platinum'),
('633110982368124917', 264, 'silver'),
('6333321016342391', 774, 'gold'),
('6333670539673058', 959, 'gold'),
('6378285343720668', 330, 'silver'),
('6385130286085318', 894, 'gold'),
('6759362965367737', 699, 'gold'),
('676314996726471466', 260, 'silver'),
('6763533583217694', 620, 'gold'),
('676788062286776575', 892, 'gold'),
('676789972127957623', 749, 'gold'),
('67712841902659791', 1021, 'platinum');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` char(10) COLLATE utf8_bin NOT NULL,
  `nama_item` char(255) COLLATE utf8_bin NOT NULL,
  `warna` char(50) COLLATE utf8_bin DEFAULT NULL,
  `url_foto` text COLLATE utf8_bin,
  `kondisi` text COLLATE utf8_bin NOT NULL,
  `lama_penggunaan` int(32) DEFAULT NULL,
  `no_ktp_penyewa` char(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_item`, `warna`, `url_foto`, `kondisi`, `lama_penggunaan`, `no_ktp_penyewa`) VALUES
('', 'Baju_anak', '72-TRIAL-Aquamarine 59', 'http://dummyimage.com/158x250.jpg/ff4444/ffffff', 'Sed ante.', 13, '6759362965367737'),
('1', 'Lego', 'Aquamarine', 'http://dummyimage.com/110x135.png/dddddd/000000', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 15, '5002355146906560'),
('10', 'Hot_Wheels', 'Purple', 'http://dummyimage.com/203x166.jpg/ff4444/ffffff', 'Proin leo odio, porttitor id, consequat in, consequat ut, nulla.', 33, '374283526007463'),
('100', 'Celana_anak', '133-TRIAL-Violet 170', 'http://dummyimage.com/201x206.png/cc0000/ffffff', 'Phasellus in felis.', 12, '6763533583217694'),
('11', 'Hot_Wheels', 'Mauv', 'http://dummyimage.com/168x152.bmp/ff4444/ffffff', 'Maecenas tincidunt lacus at velit.', 21, '3579130872121983'),
('12', 'Hot_Wheels', 'Puce', 'http://dummyimage.com/246x182.jpg/dddddd/000000', 'Praesent lectus.', 2, '3529198427466212'),
('13', 'Hot_Wheels', 'Purple', 'http://dummyimage.com/101x147.jpg/ff4444/ffffff', 'Praesent lectus.', 21, '5588989835902738'),
('14', 'Hot_Wheels', 'Violet', 'http://dummyimage.com/194x221.bmp/ff4444/ffffff', 'Integer tincidunt ante vel ipsum.', 12, '6378285343720668'),
('15', 'Hot_Wheels', 'Maroon', 'http://dummyimage.com/221x229.jpg/ff4444/ffffff', 'Sed ante.', 16, '676788062286776575'),
('16', 'Hot_Wheels', 'Fuscia', 'http://dummyimage.com/243x111.bmp/5fa2dd/ffffff', 'Vivamus vestibulum sagittis sapien.', 16, '3569188677171787'),
('17', 'Hot_Wheels', 'Orange', 'http://dummyimage.com/131x131.jpg/cc0000/ffffff', 'Nulla ut erat id mauris vulputate elementum.', 24, '3585246255089902'),
('18', 'Rubik', 'Crimson', 'http://dummyimage.com/212x186.png/ff4444/ffffff', 'Morbi vel lectus in quam fringilla rhoncus.', 10, '6385130286085318'),
('19', 'Rubik', 'Orange', 'http://dummyimage.com/164x218.jpg/5fa2dd/ffffff', 'Sed sagittis.', 16, '3575662246414953'),
('2', 'Lego', 'Goldenrod', 'http://dummyimage.com/210x137.jpg/ff4444/ffffff', 'Aliquam erat volutpat.', 35, '5002355146906560'),
('20', 'Rubik', 'Goldenrod', 'http://dummyimage.com/200x108.bmp/cc0000/ffffff', 'Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl.', 28, '502093976312017985'),
('21', 'Rubik', 'Aquamarine', 'http://dummyimage.com/151x155.jpg/ff4444/ffffff', 'Sed ante.', 18, '490348652352539094'),
('22', 'Rubik', 'Puce', 'http://dummyimage.com/216x145.bmp/cc0000/ffffff', 'Nulla mollis molestie lorem.', 32, '337941176080538'),
('23', 'Rubik', 'Red', 'http://dummyimage.com/203x160.png/ff4444/ffffff', 'Quisque ut erat.', 13, '3569531172817836'),
('24', 'Rubik', 'Turquoise', 'http://dummyimage.com/122x140.png/5fa2dd/ffffff', 'Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.', 13, '3567273887240440'),
('25', 'Boneka', 'Teal', 'http://dummyimage.com/153x233.png/dddddd/000000', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi.', 27, '63045339046650815'),
('26', 'Boneka', 'Blue', 'http://dummyimage.com/156x162.bmp/dddddd/000000', 'Vestibulum sed magna at nunc commodo placerat.', 32, '502022140240257660'),
('27', 'Boneka', 'Puce', 'http://dummyimage.com/110x118.bmp/cc0000/ffffff', 'In hac habitasse platea dictumst.', 25, '5602253640461535'),
('28', 'Boneka', 'Turquoise', 'http://dummyimage.com/206x115.bmp/dddddd/000000', 'Maecenas rhoncus aliquam lacus.', 3, '6304706188927679'),
('29', 'Boneka', 'Red', 'http://dummyimage.com/224x105.bmp/5fa2dd/ffffff', 'In hac habitasse platea dictumst.', 16, '3571009106261385'),
('3', 'Lego', 'Blue', 'http://dummyimage.com/210x233.png/ff4444/ffffff', 'Fusce posuere felis sed lacus.', 30, '5602242968227421397'),
('30', 'Puzzle', 'Puce', 'http://dummyimage.com/125x162.bmp/ff4444/ffffff', 'Duis consequat dui nec nisi volutpat eleifend.', 10, '3561952555530911'),
('31', 'Puzzle', 'Green', 'http://dummyimage.com/168x221.jpg/cc0000/ffffff', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam.', 21, '5602244544212264'),
('32', 'Puzzle', 'Yellow', 'http://dummyimage.com/240x178.png/dddddd/000000', 'In blandit ultrices enim.', 1, '3584362274917378'),
('33', 'Puzzle', 'Khaki', 'http://dummyimage.com/116x210.jpg/5fa2dd/ffffff', 'Maecenas tincidunt lacus at velit.', 31, '3564305146956409'),
('34', 'Puzzle', 'Teal', 'http://dummyimage.com/115x200.jpg/ff4444/ffffff', 'Quisque ut erat.', 20, '3529050360945720'),
('35', 'Puzzle', 'Teal', 'http://dummyimage.com/201x172.jpg/5fa2dd/ffffff', 'Morbi porttitor lorem id ligula.', 26, '5555752260577014'),
('36', 'Puzzle', 'Pink', 'http://dummyimage.com/202x242.jpg/5fa2dd/ffffff', 'Integer a nibh.', 17, '337941108713552'),
('37', 'Kereta_Thomas', 'Yellow', 'http://dummyimage.com/208x248.bmp/dddddd/000000', 'Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.', 31, '201725546988956'),
('38', 'Kereta_Thomas', 'Purple', 'http://dummyimage.com/233x112.bmp/5fa2dd/ffffff', 'Nulla suscipit ligula in lacus.', 29, '6763533583217694'),
('39', 'Kereta_Thomas', 'Purple', 'http://dummyimage.com/199x107.bmp/dddddd/000000', 'Duis consequat dui nec nisi volutpat eleifend.', 4, '3536580041384627'),
('4', 'Lego', 'Puce', 'http://dummyimage.com/246x152.png/ff4444/ffffff', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 20, '3580398213881261'),
('40', 'Kereta_Thomas', 'Mauv', 'http://dummyimage.com/177x164.bmp/dddddd/000000', 'Etiam faucibus cursus urna.', 4, '5602221676764916'),
('41', 'Kereta_Thomas', 'Yellow', 'http://dummyimage.com/236x132.jpg/5fa2dd/ffffff', 'Maecenas ut massa quis augue luctus tincidunt.', 16, '30174992400264'),
('42', 'Kereta_Thomas', 'Indigo', 'http://dummyimage.com/170x127.jpg/ff4444/ffffff', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi.', 9, '374288121576614'),
('43', 'Kereta_Thomas', 'Red', 'http://dummyimage.com/227x242.jpg/ff4444/ffffff', 'Suspendisse ornare consequat lectus.', 14, '6759362965367737'),
('44', 'Kereta_Thomas', 'Fuscia', 'http://dummyimage.com/167x220.png/cc0000/ffffff', 'Suspendisse potenti.', 1, '30573583237656'),
('45', 'Kereta_Thomas', 'Mauv', 'http://dummyimage.com/128x227.png/5fa2dd/ffffff', 'Suspendisse potenti.', 22, '36932248218150'),
('46', 'Bebek_bebekan', 'Puce', 'http://dummyimage.com/154x206.bmp/5fa2dd/ffffff', 'Praesent lectus.', 22, '5641827408498129'),
('47', 'Bebek_bebekan', 'Turquoise', 'http://dummyimage.com/105x126.png/5fa2dd/ffffff', 'Integer a nibh.', 4, '4844430145727856'),
('48', 'Bebek_bebekan', 'Green', 'http://dummyimage.com/236x155.jpg/dddddd/000000', 'Proin risus.', 18, '4405481223298477'),
('49', 'Bebek_bebekan', 'Indigo', 'http://dummyimage.com/245x204.bmp/dddddd/000000', 'Morbi vel lectus in quam fringilla rhoncus.', 21, '5010127104513963'),
('5', 'Lego', 'Purple', 'http://dummyimage.com/140x128.bmp/5fa2dd/ffffff', 'Integer non velit.', 27, '3537718505350648'),
('50', 'Bebek_bebekan', 'Violet', 'http://dummyimage.com/245x234.bmp/ff4444/ffffff', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est.', 7, '6331101213933329864'),
('51', 'Bebek_bebekan', 'Crimson', 'http://dummyimage.com/231x172.bmp/5fa2dd/ffffff', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 29, '3582511918708518'),
('52', 'Bebek_bebekan', '232-TRIAL-Purple 32', '269-TRIAL-http://dummyimage.com/135x212.bmp/dddddd/000000 54', '221-TRIAL-Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. 89', 18, '676314996726471466'),
('53', 'Kacamata_Renang', '176-TRIAL-Aquamarine 129', 'http://dummyimage.com/189x179.bmp/cc0000/ffffff', 'Sed sagittis.', 23, '5018697162965796975'),
('54', 'Kacamata_Renang', '268-TRIAL-Khaki 192', 'http://dummyimage.com/101x178.bmp/ff4444/ffffff', 'Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.', 12, '3575019961998738'),
('55', 'Online_Games', '125-TRIAL-Turquoise 55', 'http://dummyimage.com/159x131.png/dddddd/000000', 'Suspendisse accumsan tortor quis turpis.', 28, '3540499341444847'),
('56', 'Kacamata_Renang', '134-TRIAL-Aquamarine 49', 'http://dummyimage.com/219x150.bmp/ff4444/ffffff', 'Vestibulum quam sapien, varius ut, blandit non, interdum in, ante.', 3, '3554546533208266'),
('57', 'Kacamata_Renang', '241-TRIAL-Purple 212', 'http://dummyimage.com/171x136.jpg/cc0000/ffffff', 'Nulla facilisi.', 35, '4844166072545263'),
('58', 'Kacamata_Renang', '145-TRIAL-Indigo 60', 'http://dummyimage.com/223x235.png/cc0000/ffffff', 'Nam tristique tortor eu pede.', 31, '372301610648992'),
('59', 'Kacamata_Renang', '118-TRIAL-Crimson 153', 'http://dummyimage.com/115x207.bmp/cc0000/ffffff', 'Maecenas rhoncus aliquam lacus.', 5, '4911883723291123944'),
('6', 'Lego', 'Violet', 'http://dummyimage.com/147x140.jpg/ff4444/ffffff', 'Duis mattis egestas metus.', 15, '3532759816062121'),
('60', 'Kacamata_Renang', '239-TRIAL-Red 123', 'http://dummyimage.com/111x243.bmp/ff4444/ffffff', 'Donec posuere metus vitae ipsum.', 5, '4844696161075210'),
('61', 'Bola', '79-TRIAL-Aquamarine 196', 'http://dummyimage.com/214x125.bmp/5fa2dd/ffffff', 'Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.', 7, '30005707166701'),
('62', 'Bola', '187-TRIAL-Goldenrod 229', 'http://dummyimage.com/172x183.png/5fa2dd/ffffff', 'Nulla tempus.', 28, '4911833093271694'),
('63', 'Bola', '49-TRIAL-Aquamarine 37', 'http://dummyimage.com/216x100.bmp/cc0000/ffffff', 'Pellentesque ultrices mattis odio.', 10, '3531505759321912'),
('64', 'Bola', '66-TRIAL-Blue 49', 'http://dummyimage.com/144x232.png/dddddd/000000', 'Quisque arcu libero, rutrum ac, lobortis vel, dapibus at, diam.', 12, '3531505759321912'),
('65', 'Alat_Musik', '193-TRIAL-Mauv 95', 'http://dummyimage.com/246x127.jpg/dddddd/000000', 'In sagittis dui vel nisl.', 26, '3574506465131957'),
('66', 'Alat_Musik', '297-TRIAL-Purple 16', 'http://dummyimage.com/215x187.jpg/ff4444/ffffff', 'Integer tincidunt ante vel ipsum.', 15, '201700868521313'),
('67', 'Alat_Musik', '86-TRIAL-Crimson 205', 'http://dummyimage.com/180x193.bmp/dddddd/000000', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio.', 7, '3561396991504850'),
('68', 'Alat_Musik', '188-TRIAL-Red 82', 'http://dummyimage.com/198x157.png/dddddd/000000', 'Donec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue.', 17, '3570444669030672'),
('69', 'Alat_Musik', '155-TRIAL-Violet 234', 'http://dummyimage.com/196x219.bmp/cc0000/ffffff', 'Nulla tempus.', 2, '589314482821650077'),
('7', 'Hot_Wheels', 'Purple', 'http://dummyimage.com/141x163.bmp/dddddd/000000', 'Vestibulum ac est lacinia nisi venenatis tristique.', 10, '3577513565084836'),
('70', 'Alat_Musik', '114-TRIAL-Fuscia 1', 'http://dummyimage.com/209x185.bmp/dddddd/000000', 'Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.', 16, '67712841902659791'),
('71', 'Mainan_Kayu', '116-TRIAL-Crimson 271', 'http://dummyimage.com/202x199.png/5fa2dd/ffffff', 'Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.', 28, '676789972127957623'),
('72', 'Mainan_Kayu', '86-TRIAL-Crimson 263', 'http://dummyimage.com/210x150.jpg/dddddd/000000', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 10, '5010129114742608'),
('73', 'Mainan_Kayu', '113-TRIAL-Violet 55', 'http://dummyimage.com/226x112.bmp/cc0000/ffffff', 'Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl.', 5, '201669371684670'),
('74', 'Mainan_Edukasi', '285-TRIAL-Indigo 253', 'http://dummyimage.com/240x124.jpg/dddddd/000000', 'Curabitur at ipsum ac tellus semper interdum.', 21, '5602246446608267'),
('75', 'Mainan_Edukasi', '12-TRIAL-Khaki 8', 'http://dummyimage.com/179x202.jpg/dddddd/000000', 'Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue.', 11, '5020519192967366'),
('76', 'Mainan_Edukasi', '32-TRIAL-Turquoise 245', 'http://dummyimage.com/107x195.bmp/ff4444/ffffff', 'Aliquam quis turpis eget elit sodales scelerisque.', 15, '374622749339775'),
('77', 'Mainan_Edukasi', '113-TRIAL-Crimson 156', 'http://dummyimage.com/202x136.png/dddddd/000000', 'In sagittis dui vel nisl.', 12, '5116832994703987'),
('78', 'Mainan_Edukasi', '121-TRIAL-Goldenrod 58', 'http://dummyimage.com/163x106.jpg/ff4444/ffffff', 'Quisque arcu libero, rutrum ac, lobortis vel, dapibus at, diam.', 27, '201697503918179'),
('79', 'Mainan_Pretend', '246-TRIAL-Maroon 82', 'http://dummyimage.com/159x241.bmp/ff4444/ffffff', 'Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci.', 13, '30551563793039'),
('8', 'Hot_Wheels', 'Green', 'http://dummyimage.com/240x212.jpg/cc0000/ffffff', 'Sed accumsan felis.', 5, '4936950340247883391'),
('80', 'Mainan_Pretend', '181-TRIAL-Purple 244', 'http://dummyimage.com/160x244.png/dddddd/000000', 'Nam tristique tortor eu pede.', 1, '560222380425820900'),
('81', 'Mainan_Pretend', '96-TRIAL-Green 122', 'http://dummyimage.com/157x242.bmp/ff4444/ffffff', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi.', 12, '3537682066141301'),
('82', 'Mainan_Religious', '229-TRIAL-Orange 61', 'http://dummyimage.com/205x170.jpg/dddddd/000000', 'Nam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla.', 9, '5020551995835422228'),
('83', 'Mainan_Religious', '135-TRIAL-Aquamarine 50', 'http://dummyimage.com/108x209.bmp/ff4444/ffffff', 'Nulla ut erat id mauris vulputate elementum.', 4, '633110982368124917'),
('84', 'Mainan_Religious', '73-TRIAL-Teal 266', 'http://dummyimage.com/166x221.png/ff4444/ffffff', 'Mauris ullamcorper purus sit amet nulla.', 1, '3566975121757234'),
('85', 'Stationary', '44-TRIAL-Pink 59', 'http://dummyimage.com/155x216.jpg/5fa2dd/ffffff', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi.', 30, '5020551995835422228'),
('86', 'Stationary', '192-TRIAL-Khaki 39', 'http://dummyimage.com/191x115.jpg/dddddd/000000', 'In eleifend quam a odio.', 4, '3582886996379212'),
('87', 'Peralatan_Mandi', '153-TRIAL-Teal 224', 'http://dummyimage.com/244x231.png/dddddd/000000', 'Donec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue.', 23, '5108752485991810'),
('88', 'Peralatan_Mandi', '54-TRIAL-Teal 110', 'http://dummyimage.com/118x226.png/ff4444/ffffff', 'Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.', 30, '3582886996379212'),
('89', 'Mobil_mobilan', '245-TRIAL-Blue 249', 'http://dummyimage.com/190x186.bmp/cc0000/ffffff', 'Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue.', 15, '201464130240596'),
('9', 'Hot_Wheels', 'Orange', 'http://dummyimage.com/174x137.jpg/dddddd/000000', 'Etiam pretium iaculis justo.', 13, '3540440821693685'),
('90', 'Mobil_mobilan', '286-TRIAL-Mauv 213', 'http://dummyimage.com/185x147.png/5fa2dd/ffffff', 'Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue.', 26, '3586251071244276'),
('91', 'Mobil_mobilan', '274-TRIAL-Puce 122', 'http://dummyimage.com/229x116.png/cc0000/ffffff', 'Suspendisse ornare consequat lectus.', 5, '5020709070543228761'),
('92', 'Mainan_prank', '68-TRIAL-Khaki 218', 'http://dummyimage.com/239x141.png/dddddd/000000', 'Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla.', 7, '6333670539673058'),
('93', 'Mainan_prank', '187-TRIAL-Khaki 5', 'http://dummyimage.com/182x152.jpg/cc0000/ffffff', 'In hac habitasse platea dictumst.', 18, '3530745171606752'),
('94', 'Mainan_prank', '258-TRIAL-Fuscia 191', 'http://dummyimage.com/151x206.bmp/ff4444/ffffff', 'Fusce posuere felis sed lacus.', 9, '589314482821650077'),
('95', 'Alas_Kaki', '2-TRIAL-Purple 25', 'http://dummyimage.com/240x106.png/ff4444/ffffff', 'Aenean lectus.', 2, '4911833093271694'),
('96', 'Topeng', '77-TRIAL-Goldenrod 214', 'http://dummyimage.com/144x122.bmp/ff4444/ffffff', 'Quisque arcu libero, rutrum ac, lobortis vel, dapibus at, diam.', 18, '201700868521313'),
('97', 'Remote_Control', '14-TRIAL-Orange 24', 'http://dummyimage.com/126x239.png/cc0000/ffffff', 'Morbi a ipsum.', 12, '4911833093271694'),
('98', 'Kendaraan_jadijadian', '234-TRIAL-Maroon 74', 'http://dummyimage.com/138x148.bmp/cc0000/ffffff', 'Pellentesque at nulla.', 13, '4844166072545263'),
('99', 'Baju_anak', '72-TRIAL-Aquamarine 59', 'http://dummyimage.com/158x250.jpg/ff4444/ffffff', 'Sed ante.', 13, '6759362965367737');

-- --------------------------------------------------------

--
-- Table structure for table `barang_dikembalikan`
--

CREATE TABLE `barang_dikembalikan` (
  `no_resi` char(10) COLLATE utf8_bin NOT NULL,
  `id_barang` char(10) COLLATE utf8_bin NOT NULL,
  `no_urut` char(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `barang_dikembalikan`
--

INSERT INTO `barang_dikembalikan` (`no_resi`, `id_barang`, `no_urut`) VALUES
('6871639268', '1', '1'),
('6225662480', '10', '10'),
('5578148441', '11', '11'),
('2511822768', '12', '12'),
('2254897659', '13', '13'),
('4713030554', '14', '14'),
('7350391617', '15', '15'),
('4297706512', '16', '16'),
('0265897912', '17', '17'),
('4976420094', '18', '18'),
('5356090234', '19', '19'),
('7190205195', '2', '2'),
('5165810038', '20', '20'),
('6871639268', '21', '21'),
('7190205195', '22', '22'),
('4234963704', '23', '23'),
('6111472410', '24', '24'),
('8597518693', '25', '25'),
('5482618153', '26', '26'),
('6311537249', '27', '27'),
('3000251847', '28', '28'),
('0055545327', '29', '29'),
('4234963704', '3', '3'),
('6225662480', '30', '30'),
('5578148441', '31', '31'),
('2511822768', '32', '32'),
('2254897659', '33', '33'),
('4713030554', '34', '34'),
('7350391617', '35', '35'),
('4297706512', '36', '36'),
('0265897912', '37', '37'),
('4976420094', '38', '38'),
('5356090234', '39', '39'),
('6111472410', '4', '4'),
('5165810038', '40', '40'),
('8597518693', '5', '5'),
('5482618153', '6', '6'),
('6311537249', '7', '7'),
('3000251847', '8', '8'),
('0055545327', '9', '9');

-- --------------------------------------------------------

--
-- Table structure for table `barang_dikirim`
--

CREATE TABLE `barang_dikirim` (
  `no_resi` char(10) COLLATE utf8_bin NOT NULL,
  `id_barang` char(10) COLLATE utf8_bin NOT NULL,
  `tanggal_review` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `review` text COLLATE utf8_bin NOT NULL,
  `no_urut` char(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `barang_dikirim`
--

INSERT INTO `barang_dikirim` (`no_resi`, `id_barang`, `tanggal_review`, `review`, `no_urut`) VALUES
('6871639268', '1', '2019-01-01 17:00:00', 'Sed accumsan felis.', '1'),
('6225662480', '10', '2018-10-02 17:00:00', 'Duis aliquam convallis nunc.', '10'),
('5578148441', '11', '2018-07-15 17:00:00', 'Mauris ullamcorper purus sit amet nulla.', '11'),
('2511822768', '12', '2019-04-02 17:00:00', 'Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.', '12'),
('2254897659', '13', '2019-01-04 17:00:00', 'Nam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla.', '13'),
('4713030554', '14', '2018-04-29 17:00:00', 'Nulla ac enim.', '14'),
('7350391617', '15', '2018-07-04 17:00:00', 'Fusce consequat.', '15'),
('4297706512', '16', '2018-10-17 17:00:00', 'In est risus, auctor sed, tristique in, tempus sit amet, sem.', '16'),
('0265897912', '17', '2018-04-12 17:00:00', 'Nulla nisl.', '17'),
('4976420094', '18', '2018-10-16 17:00:00', 'Pellentesque at nulla.', '18'),
('5356090234', '19', '2018-08-12 17:00:00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', '19'),
('7190205195', '2', '2018-05-19 17:00:00', 'Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl.', '2'),
('5165810038', '20', '2018-06-09 17:00:00', 'Nam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla.', '20'),
('6871639268', '21', '2019-01-27 17:00:00', 'Sed accumsan felis.', '21'),
('7190205195', '22', '2018-09-03 17:00:00', 'Proin interdum mauris non ligula pellentesque ultrices.', '22'),
('4234963704', '23', '2019-02-28 17:00:00', 'Aenean fermentum.', '23'),
('6111472410', '24', '2019-03-30 17:00:00', 'Aenean lectus.', '24'),
('8597518693', '25', '2018-06-06 17:00:00', 'Nunc purus.', '25'),
('5482618153', '26', '2018-08-27 17:00:00', 'Vestibulum sed magna at nunc commodo placerat.', '26'),
('6311537249', '27', '2018-10-09 17:00:00', 'Proin at turpis a pede posuere nonummy.', '27'),
('3000251847', '28', '2019-03-02 17:00:00', 'Integer ac neque.', '28'),
('0055545327', '29', '2018-05-20 17:00:00', 'Integer a nibh.', '29'),
('4234963704', '3', '2019-03-04 17:00:00', 'Mauris ullamcorper purus sit amet nulla.', '3'),
('6225662480', '30', '2018-12-29 17:00:00', 'Aenean sit amet justo.', '30'),
('5578148441', '31', '2018-08-17 17:00:00', 'Curabitur in libero ut massa volutpat convallis.', '31'),
('2511822768', '32', '2018-08-24 17:00:00', 'Nulla nisl.', '32'),
('2254897659', '33', '2018-09-09 17:00:00', 'Duis mattis egestas metus.', '33'),
('4713030554', '34', '2018-04-21 17:00:00', 'Duis ac nibh.', '34'),
('7350391617', '35', '2018-05-24 17:00:00', 'Aenean sit amet justo.', '35'),
('4297706512', '36', '2019-01-21 17:00:00', 'Aliquam erat volutpat.', '36'),
('0265897912', '37', '2018-09-18 17:00:00', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam.', '37'),
('4976420094', '38', '2018-07-02 17:00:00', 'Praesent blandit.', '38'),
('5356090234', '39', '2018-07-16 17:00:00', 'Nulla facilisi.', '39'),
('6111472410', '4', '2018-05-09 17:00:00', 'Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc.', '4'),
('5165810038', '40', '2019-03-19 17:00:00', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', '40'),
('8597518693', '5', '2018-11-18 17:00:00', 'Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.', '5'),
('5482618153', '6', '2018-08-02 17:00:00', 'Aliquam non mauris.', '6'),
('6311537249', '7', '2018-05-20 17:00:00', 'Integer ac leo.', '7'),
('3000251847', '8', '2018-08-25 17:00:00', 'Integer tincidunt ante vel ipsum.', '8'),
('0055545327', '9', '2018-04-14 17:00:00', 'Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo.', '9');

-- --------------------------------------------------------

--
-- Table structure for table `barang_pesanan`
--

CREATE TABLE `barang_pesanan` (
  `id_pemesanan` char(10) COLLATE utf8_bin NOT NULL,
  `no_urut` char(10) COLLATE utf8_bin NOT NULL,
  `tanggal_sewa` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lama_sewa` int(32) NOT NULL,
  `tanggal_kembali` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nama_status` char(50) COLLATE utf8_bin NOT NULL,
  `id_barang` char(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `barang_pesanan`
--

INSERT INTO `barang_pesanan` (`id_pemesanan`, `no_urut`, `tanggal_sewa`, `lama_sewa`, `tanggal_kembali`, `nama_status`, `id_barang`) VALUES
('6259901984', '1', '2018-12-22 17:00:00', 13, '2018-10-14 17:00:00', 'sedang dikonfirmasi', '1'),
('2890780074', '10', '2018-03-11 17:00:00', 1, '2019-10-31 17:00:00', 'sedang disiapkan', '10'),
('4763729381', '100', '2019-01-03 17:00:00', 3, '2019-03-16 17:00:00', 'sudah dikembalikan', '100'),
('2730743308', '11', '2019-11-08 17:00:00', 6, '2019-10-19 17:00:00', 'sedang dikirim', '11'),
('4176898259', '12', '2019-03-10 17:00:00', 8, '2019-03-29 17:00:00', 'dalam masa sewa', '12'),
('6520356077', '13', '2018-04-12 17:00:00', 7, '2018-07-17 17:00:00', 'sudah dikembalikan', '13'),
('5954414491', '14', '2018-02-23 17:00:00', 18, '2019-07-06 17:00:00', 'sedang dikonfirmasi', '14'),
('4857037246', '15', '2018-02-28 17:00:00', 5, '2019-02-03 17:00:00', 'menunggu pembayaran', '15'),
('9764493645', '16', '2019-03-01 17:00:00', 3, '2018-05-01 17:00:00', 'menunggu pembayaran', '16'),
('2154401473', '17', '2018-06-26 17:00:00', 20, '2018-11-26 17:00:00', 'sedang dikirim', '17'),
('9994681648', '18', '2018-08-22 17:00:00', 14, '2019-02-25 17:00:00', 'sedang dikirim', '18'),
('8543447461', '19', '2018-01-03 17:00:00', 19, '2019-11-19 17:00:00', 'sedang dikirim', '19'),
('1129390225', '2', '2019-02-04 17:00:00', 4, '2018-06-01 17:00:00', 'menunggu pembayaran', '2'),
('5848184275', '20', '2019-10-27 17:00:00', 8, '2018-03-24 17:00:00', 'sedang dikirim', '20'),
('4181406881', '21', '2019-04-13 17:00:00', 9, '2019-03-02 17:00:00', 'dalam masa sewa', '21'),
('4618692197', '22', '2018-07-17 17:00:00', 5, '2019-07-23 17:00:00', 'dalam masa sewa', '22'),
('3510058364', '23', '2018-07-30 17:00:00', 11, '2018-08-17 17:00:00', 'dalam masa sewa', '23'),
('8672563484', '24', '2018-10-05 17:00:00', 14, '2018-03-11 17:00:00', 'sedang disiapkan', '24'),
('8437777518', '25', '2019-12-28 17:00:00', 5, '2019-05-10 17:00:00', 'sedang disiapkan', '25'),
('3558086732', '26', '2019-04-19 17:00:00', 5, '2019-04-05 17:00:00', 'sedang disiapkan', '26'),
('2397771969', '27', '2018-11-06 17:00:00', 4, '2018-09-22 17:00:00', 'sedang disiapkan', '27'),
('4250799263', '28', '2019-04-22 17:00:00', 11, '2018-07-28 17:00:00', 'dalam masa sewa', '28'),
('0385833954', '29', '2019-07-12 17:00:00', 4, '2019-12-01 17:00:00', 'dalam masa sewa', '29'),
('7810762737', '3', '2019-10-11 17:00:00', 4, '2019-07-14 17:00:00', 'sedang disiapkan', '3'),
('4429079951', '30', '2018-02-01 17:00:00', 13, '2018-05-26 17:00:00', 'dalam masa sewa', '30'),
('1815970383', '31', '2019-02-25 17:00:00', 13, '2019-03-06 17:00:00', 'dalam masa sewa', '31'),
('4992845541', '32', '2018-12-03 17:00:00', 3, '2018-01-07 17:00:00', 'dalam masa sewa', '32'),
('7635912992', '33', '2019-08-29 17:00:00', 2, '2018-04-23 17:00:00', 'batal', '33'),
('5951405076', '34', '2019-06-27 17:00:00', 13, '2019-10-13 17:00:00', 'batal', '34'),
('7880000038', '35', '2018-08-22 17:00:00', 20, '2018-12-12 17:00:00', 'sedang dikonfirmasi', '35'),
('9931347953', '36', '2019-07-11 17:00:00', 7, '2018-11-03 17:00:00', 'sedang dikonfirmasi', '36'),
('3490844815', '37', '2019-01-29 17:00:00', 13, '2019-12-20 17:00:00', 'menunggu pembayaran', '37'),
('6867969224', '38', '2019-04-21 17:00:00', 6, '2019-02-25 17:00:00', 'menunggu pembayaran', '38'),
('0125439032', '39', '2018-01-30 17:00:00', 16, '2018-06-17 17:00:00', 'sedang disiapkan', '39'),
('9452950668', '4', '2018-07-09 17:00:00', 2, '2018-11-13 17:00:00', 'sedang dikirim', '4'),
('1570267529', '40', '2019-08-08 17:00:00', 3, '2018-12-17 17:00:00', 'sedang disiapkan', '40'),
('4360375379', '41', '2019-06-27 17:00:00', 12, '2018-03-07 17:00:00', 'sedang disiapkan', '41'),
('2211958559', '42', '2019-12-14 17:00:00', 5, '2019-02-04 17:00:00', 'sedang dikirim', '42'),
('9579844879', '43', '2019-06-11 17:00:00', 11, '2018-09-25 17:00:00', 'sedang dikirim', '43'),
('9661443394', '44', '2018-07-22 17:00:00', 14, '2019-07-07 17:00:00', 'dalam masa sewa', '44'),
('1837897751', '45', '2019-11-13 17:00:00', 1, '2019-05-14 17:00:00', 'dalam masa sewa', '45'),
('3458561501', '46', '2018-07-13 17:00:00', 5, '2018-05-15 17:00:00', 'dalam masa sewa', '46'),
('2317445695', '47', '2019-07-18 17:00:00', 13, '2018-07-29 17:00:00', 'sedang dikirim', '47'),
('6101575578', '48', '2018-04-27 17:00:00', 16, '2019-09-05 17:00:00', 'sedang dikirim', '48'),
('2608615864', '49', '2018-05-14 17:00:00', 20, '2018-07-25 17:00:00', 'menunggu pembayaran', '49'),
('0055281176', '5', '2018-01-17 17:00:00', 4, '2019-12-17 17:00:00', 'dalam masa sewa', '5'),
('4763729381', '50', '2019-06-07 17:00:00', 20, '2019-01-31 17:00:00', 'menunggu pembayaran', '50'),
('6259901984', '51', '2018-01-14 17:00:00', 9, '2019-01-17 17:00:00', 'menunggu pembayaran', '51'),
('1129390225', '52', '2018-06-26 17:00:00', 20, '2019-01-18 17:00:00', 'sedang disiapkan', '52'),
('7810762737', '53', '2019-01-03 17:00:00', 16, '2019-09-19 17:00:00', 'sedang disiapkan', '53'),
('9452950668', '54', '2018-12-14 17:00:00', 12, '2019-10-15 17:00:00', 'sedang disiapkan', '54'),
('0055281176', '55', '2018-11-29 17:00:00', 9, '2018-02-11 17:00:00', 'sedang dikirim', '55'),
('5587899829', '56', '2019-11-21 17:00:00', 20, '2019-03-18 17:00:00', 'sedang dikirim', '56'),
('2731722746', '57', '2018-04-14 17:00:00', 20, '2018-01-19 17:00:00', 'sedang dikirim', '57'),
('5870512824', '58', '2018-11-19 17:00:00', 16, '2019-11-10 17:00:00', 'sedang dikonfirmasi', '58'),
('0557224284', '59', '2019-10-05 17:00:00', 10, '2019-10-12 17:00:00', 'sedang dikonfirmasi', '59'),
('5587899829', '6', '2019-05-13 17:00:00', 10, '2019-04-25 17:00:00', 'batal', '6'),
('2890780074', '60', '2018-06-21 17:00:00', 12, '2018-07-21 17:00:00', 'sudah dikembalikan', '60'),
('2730743308', '61', '2019-11-14 17:00:00', 17, '2018-11-08 17:00:00', 'sudah dikembalikan', '61'),
('4176898259', '62', '2019-10-27 17:00:00', 18, '2018-08-21 17:00:00', 'batal', '62'),
('6520356077', '63', '2019-08-21 17:00:00', 20, '2018-02-16 17:00:00', 'batal', '63'),
('5954414491', '64', '2018-03-12 17:00:00', 20, '2019-08-05 17:00:00', 'batal', '64'),
('4857037246', '65', '2019-05-01 17:00:00', 16, '2019-03-27 17:00:00', 'batal', '65'),
('9764493645', '66', '2019-09-04 17:00:00', 13, '2018-09-08 17:00:00', 'dalam masa sewa', '66'),
('2154401473', '67', '2018-10-06 17:00:00', 13, '2018-05-17 17:00:00', 'dalam masa sewa', '67'),
('9994681648', '68', '2018-06-21 17:00:00', 13, '2018-09-30 17:00:00', 'dalam masa sewa', '68'),
('8543447461', '69', '2018-05-17 17:00:00', 7, '2019-01-10 17:00:00', 'dalam masa sewa', '69'),
('2731722746', '7', '2018-02-09 17:00:00', 20, '2018-02-17 17:00:00', 'sudah dikembalikan', '7'),
('5848184275', '70', '2019-07-19 17:00:00', 1, '2018-08-16 17:00:00', 'dalam masa sewa', '70'),
('4181406881', '71', '2019-11-08 17:00:00', 15, '2019-07-21 17:00:00', 'dalam masa sewa', '71'),
('4618692197', '72', '2019-06-27 17:00:00', 9, '2018-06-12 17:00:00', 'sedang disiapkan', '72'),
('3510058364', '73', '2019-02-12 17:00:00', 5, '2019-01-07 17:00:00', 'sedang disiapkan', '73'),
('8672563484', '74', '2019-01-28 17:00:00', 15, '2018-10-19 17:00:00', 'sedang disiapkan', '74'),
('8437777518', '75', '2019-06-08 17:00:00', 15, '2019-01-16 17:00:00', 'menunggu pembayaran', '75'),
('3558086732', '76', '2019-02-10 17:00:00', 3, '2018-09-09 17:00:00', 'menunggu pembayaran', '76'),
('2397771969', '77', '2019-03-10 17:00:00', 4, '2019-07-01 17:00:00', 'menunggu pembayaran', '77'),
('4250799263', '78', '2019-12-09 17:00:00', 20, '2019-04-20 17:00:00', 'menunggu pembayaran', '78'),
('0385833954', '79', '2018-04-16 17:00:00', 13, '2018-11-30 17:00:00', 'sedang dikonfirmasi', '79'),
('5870512824', '8', '2018-09-06 17:00:00', 11, '2018-08-25 17:00:00', 'sedang dikonfirmasi', '8'),
('4429079951', '80', '2018-03-31 17:00:00', 1, '2018-10-29 17:00:00', 'sedang dikonfirmasi', '80'),
('1815970383', '81', '2018-10-25 17:00:00', 12, '2019-12-03 17:00:00', 'sedang dikonfirmasi', '81'),
('4992845541', '82', '2018-09-12 17:00:00', 19, '2018-04-23 17:00:00', 'sedang dikonfirmasi', '82'),
('7635912992', '83', '2018-01-18 17:00:00', 10, '2019-11-20 17:00:00', 'sedang dikirim', '83'),
('5951405076', '84', '2018-06-30 17:00:00', 12, '2018-09-13 17:00:00', 'sedang dikirim', '84'),
('7880000038', '85', '2018-04-10 17:00:00', 18, '2019-12-26 17:00:00', 'sedang dikirim', '85'),
('9931347953', '86', '2019-12-03 17:00:00', 9, '2019-12-05 17:00:00', 'sedang dikirim', '86'),
('3490844815', '87', '2019-08-01 17:00:00', 10, '2019-08-11 17:00:00', 'sedang dikirim', '87'),
('6867969224', '88', '2019-05-24 17:00:00', 1, '2019-01-18 17:00:00', 'sedang disiapkan', '88'),
('0125439032', '89', '2018-04-22 17:00:00', 16, '2018-04-22 17:00:00', 'sedang disiapkan', '89'),
('0557224284', '9', '2018-07-08 17:00:00', 11, '2018-04-01 17:00:00', 'menunggu pembayaran', '9'),
('1570267529', '90', '2018-08-30 17:00:00', 13, '2018-10-14 17:00:00', 'sedang disiapkan', '90'),
('4360375379', '91', '2018-12-19 17:00:00', 3, '2019-10-04 17:00:00', 'dalam masa sewa', '91'),
('2211958559', '92', '2019-11-30 17:00:00', 15, '2019-11-17 17:00:00', 'dalam masa sewa', '92'),
('9579844879', '93', '2018-10-07 17:00:00', 18, '2018-03-21 17:00:00', 'dalam masa sewa', '93'),
('9661443394', '94', '2018-08-01 17:00:00', 14, '2019-10-29 17:00:00', 'sedang dikirim', '94'),
('1837897751', '95', '2018-07-16 17:00:00', 5, '2018-10-31 17:00:00', 'sedang dikirim', '95'),
('3458561501', '96', '2019-05-03 17:00:00', 1, '2018-06-24 17:00:00', 'sedang disiapkan', '96'),
('2317445695', '97', '2019-04-30 17:00:00', 12, '2019-05-15 17:00:00', 'sedang disiapkan', '97'),
('6101575578', '98', '2018-04-13 17:00:00', 3, '2019-03-12 17:00:00', 'sudah dikembalikan', '98'),
('2608615864', '99', '2018-02-26 17:00:00', 10, '2018-09-17 17:00:00', 'sudah dikembalikan', '99');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` char(15) COLLATE utf8_bin NOT NULL,
  `pesan` text COLLATE utf8_bin NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `no_ktp_anggota` char(20) COLLATE utf8_bin NOT NULL,
  `no_ktp_admin` char(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `pesan`, `date_time`, `no_ktp_anggota`, `no_ktp_admin`) VALUES
('1', 'in faucibus orci luctus et ultrices posuere cubilia curae nulla dapibus dolor vel', '2018-04-05 15:59:15', '5002355146906560', '3584463983175090'),
('10', 'vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae donec pharetra magna vestibulum aliquet', '2018-01-09 04:56:47', '3579130872121983', '3549847459753147'),
('11', 'vel sem sed sagittis nam congue risus semper porta volutpat quam pede lobortis ligula', '2018-08-10 00:18:22', '3529198427466212', '3549847459753147'),
('12', 'primis in faucibus orci luctus et ultrices posuere cubilia curae mauris viverra', '2018-06-14 07:02:55', '5588989835902738', '3549847459753147'),
('13', 'ut erat id mauris vulputate elementum nullam varius nulla facilisi cras non velit nec nisi', '2019-01-29 07:25:14', '6378285343720668', '3549847459753147'),
('14', 'vivamus vel nulla eget eros elementum pellentesque quisque porta volutpat erat quisque', '2018-07-01 23:30:03', '676788062286776575', '3549847459753147'),
('15', 'dignissim vestibulum vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae nulla dapibus dolor vel est', '2019-12-20 01:53:28', '3569188677171787', '3582133711292259'),
('16', 'suspendisse potenti in eleifend quam a odio in hac habitasse platea dictumst maecenas ut massa quis', '2018-05-27 12:45:55', '3585246255089902', '3582133711292259'),
('17', 'faucibus accumsan odio curabitur convallis duis consequat dui nec nisi volutpat eleifend donec ut dolor morbi', '2019-05-07 19:44:26', '6385130286085318', '3582133711292259'),
('18', 'tristique est et tempus semper est quam pharetra magna ac consequat metus sapien', '2018-08-21 02:14:42', '3575662246414953', '3582133711292259'),
('19', 'nibh in quis justo maecenas rhoncus aliquam lacus morbi quis tortor id nulla ultrices aliquet maecenas', '2019-01-23 05:54:08', '502093976312017985', '3582133711292259'),
('2', 'cubilia curae nulla dapibus dolor vel est donec odio justo sollicitudin ut suscipit a feugiat et eros vestibulum ac est', '2019-01-16 02:54:57', '3580398213881261', '3584463983175090'),
('20', 'hac habitasse platea dictumst maecenas ut massa quis augue luctus tincidunt nulla mollis molestie lorem quisque ut erat', '2019-03-25 09:09:54', '490348652352539094', '3582133711292259'),
('21', 'rhoncus mauris enim leo rhoncus sed vestibulum sit amet cursus id turpis integer aliquet', '2019-02-17 21:36:05', '337941176080538', '374288979758355'),
('22', 'parturient montes nascetur ridiculus mus vivamus vestibulum sagittis sapien cum sociis natoque penatibus et magnis dis parturient montes nascetur', '2019-06-05 11:33:48', '3569531172817836', '374288979758355'),
('23', 'lacus morbi quis tortor id nulla ultrices aliquet maecenas leo odio condimentum id luctus nec molestie', '2019-11-12 09:55:55', '3567273887240440', '374288979758355'),
('24', 'enim in tempor turpis nec euismod scelerisque quam turpis adipiscing', '2019-04-20 17:24:11', '63045339046650815', '374288979758355'),
('25', 'sapien in sapien iaculis congue vivamus metus arcu adipiscing molestie', '2019-03-07 17:20:26', '502022140240257660', '374288979758355'),
('26', 'aliquam quis turpis eget elit sodales scelerisque mauris sit amet eros suspendisse accumsan tortor quis turpis sed ante vivamus', '2019-04-23 04:06:52', '5602253640461535', '374288979758355'),
('27', 'sed vel enim sit amet nunc viverra dapibus nulla suscipit ligula in lacus curabitur at', '2019-03-04 09:11:19', '6304706188927679', '374288979758355'),
('28', 'eu nibh quisque id justo sit amet sapien dignissim vestibulum vestibulum ante ipsum primis in faucibus orci luctus et ultrices', '2019-03-19 11:18:00', '3571009106261385', '374288979758355'),
('29', 'nulla tellus in sagittis dui vel nisl duis ac nibh fusce lacus purus', '2018-11-18 22:25:08', '3561952555530911', '374288979758355'),
('3', 'lacus morbi quis tortor id nulla ultrices aliquet maecenas leo odio condimentum id luctus nec molestie sed justo', '2019-08-07 13:11:08', '5602242968227421397', '3549847459753147'),
('30', 'nisi at nibh in hac habitasse platea dictumst aliquam augue quam sollicitudin vitae consectetuer eget rutrum at lorem', '2018-08-27 00:18:38', '5602244544212264', '374288979758355'),
('31', 'justo pellentesque viverra pede ac diam cras pellentesque volutpat dui maecenas tristique est et tempus semper est quam', '2019-04-30 14:48:29', '3584362274917378', '374288979758355'),
('32', 'quam fringilla rhoncus mauris enim leo rhoncus sed vestibulum sit amet cursus id turpis integer', '2018-03-22 13:21:12', '3564305146956409', '374288979758355'),
('33', 'vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae', '2019-11-27 20:32:51', '3529050360945720', '6762089970903991'),
('34', 'ut ultrices vel augue vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae donec pharetra magna', '2019-12-20 19:18:37', '5555752260577014', '6762089970903991'),
('35', 'morbi sem mauris laoreet ut rhoncus aliquet pulvinar sed nisl nunc rhoncus dui', '2018-11-10 06:08:18', '337941108713552', '6762089970903991'),
('36', 'nisi vulputate nonummy maecenas tincidunt lacus at velit vivamus vel', '2018-04-19 03:34:29', '201725546988956', '6762089970903991'),
('37', 'laoreet ut rhoncus aliquet pulvinar sed nisl nunc rhoncus dui vel sem sed sagittis nam congue risus', '2018-03-06 11:05:48', '6763533583217694', '30503761329769'),
('38', 'ac consequat metus sapien ut nunc vestibulum ante ipsum primis in faucibus', '2019-11-13 17:05:37', '3536580041384627', '30503761329769'),
('39', 'dui vel nisl duis ac nibh fusce lacus purus aliquet at feugiat non pretium quis lectus suspendisse', '2019-01-17 06:37:06', '5602221676764916', '30503761329769'),
('4', 'et ultrices posuere cubilia curae donec pharetra magna vestibulum aliquet', '2018-03-17 04:22:53', '3537718505350648', '5602243956590829'),
('40', 'risus auctor sed tristique in tempus sit amet sem fusce consequat nulla nisl nunc nisl duis bibendum felis', '2019-10-02 22:01:29', '30174992400264', '30503761329769'),
('41', 'quam a odio in hac habitasse platea dictumst maecenas ut massa', '2019-01-02 03:47:32', '374288121576614', '30503761329769'),
('42', 'aenean fermentum donec ut mauris eget massa tempor convallis nulla neque libero convallis eget eleifend luctus ultricies', '2018-01-08 23:10:56', '6759362965367737', '30503761329769'),
('43', 'duis aliquam convallis nunc proin at turpis a pede posuere nonummy', '2019-05-04 07:57:11', '30573583237656', '3576112222610710'),
('44', 'sollicitudin mi sit amet lobortis sapien sapien non mi integer ac neque duis bibendum morbi non quam nec dui', '2018-05-16 20:48:14', '36932248218150', '3576112222610710'),
('45', 'faucibus orci luctus et ultrices posuere cubilia curae duis faucibus accumsan odio curabitur convallis duis consequat dui nec', '2018-02-07 02:16:03', '5641827408498129', '3576112222610710'),
('46', 'viverra eget congue eget semper rutrum nulla nunc purus phasellus in felis donec semper sapien', '2018-02-27 00:38:39', '4844430145727856', '3576112222610710'),
('47', 'quam pharetra magna ac consequat metus sapien ut nunc vestibulum ante ipsum', '2018-01-19 04:06:25', '4405481223298477', '3562397398402994'),
('48', 'neque aenean auctor gravida sem praesent id massa id nisl venenatis lacinia', '2018-07-15 21:40:26', '5010127104513963', '3562397398402994'),
('49', 'convallis nunc proin at turpis a pede posuere nonummy integer non velit donec diam neque', '2018-05-08 11:38:38', '6331101213933329864', '3562397398402994'),
('5', 'venenatis lacinia aenean sit amet justo morbi ut odio cras', '2019-03-25 00:04:45', '3532759816062121', '5602243956590829'),
('50', 'justo etiam pretium iaculis justo in hac habitasse platea dictumst etiam faucibus cursus urna ut tellus', '2019-09-29 19:22:44', '3582511918708518', '3562397398402994'),
('51', 'augue luctus tincidunt nulla mollis molestie lorem quisque ut erat curabitur gravida nisi at nibh in hac habitasse platea dictumst', '2018-03-22 08:45:10', '676314996726471466', '3562397398402994'),
('52', '201-TRIAL-amet sapien dignissim vestibulum vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae nulla 77', '2018-01-22 13:08:04', '5018697162965796975', '3562397398402994'),
('53', 'a suscipit nulla elit ac nulla sed vel enim sit amet nunc viverra dapibus nulla suscipit ligula in lacus', '2018-11-30 12:08:41', '3575019961998738', '372301336349883'),
('54', 'ut volutpat sapien arcu sed augue aliquam erat volutpat in congue etiam justo', '2019-01-27 13:29:38', '3554546533208266', '372301336349883'),
('55', 'nunc viverra dapibus nulla suscipit ligula in lacus curabitur at ipsum', '2018-02-15 13:46:46', '4844166072545263', '372301336349883'),
('56', 'id ornare imperdiet sapien urna pretium nisl ut volutpat sapien arcu sed augue aliquam erat volutpat in congue etiam justo', '2018-06-06 15:10:29', '3540499341444847', '372301336349883'),
('57', 'nam nulla integer pede justo lacinia eget tincidunt eget tempus vel pede morbi porttitor lorem id ligula suspendisse', '2019-02-26 13:18:04', '372301610648992', '372301336349883'),
('58', 'tortor id nulla ultrices aliquet maecenas leo odio condimentum id luctus nec molestie sed justo pellentesque', '2019-07-22 16:18:57', '4911883723291123944', '372301336349883'),
('59', 'libero nam dui proin leo odio porttitor id consequat in consequat ut nulla sed accumsan felis', '2019-05-18 17:04:28', '4844696161075210', '3584463983175090'),
('6', 'consequat in consequat ut nulla sed accumsan felis ut at dolor quis', '2019-02-14 16:57:27', '3577513565084836', '5602243956590829'),
('60', 'cursus vestibulum proin eu mi nulla ac enim in tempor turpis nec euismod scelerisque quam turpis adipiscing', '2019-08-06 21:23:10', '30005707166701', '3584463983175090'),
('61', 'consectetuer adipiscing elit proin risus praesent lectus vestibulum quam sapien varius', '2019-03-05 09:55:44', '4911833093271694', '3584463983175090'),
('62', 'vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia', '2019-09-20 15:25:06', '3531505759321912', '3584463983175090'),
('63', 'sagittis nam congue risus semper porta volutpat quam pede lobortis ligula sit', '2019-09-03 12:02:24', '6333321016342391', '3584463983175090'),
('64', 'orci luctus et ultrices posuere cubilia curae donec pharetra magna vestibulum', '2019-11-19 03:24:43', '3574506465131957', '5602243956590829'),
('65', 'eu magna vulputate luctus cum sociis natoque penatibus et magnis dis parturient montes', '2018-07-16 19:54:35', '201700868521313', '5602243956590829'),
('66', 'eu tincidunt in leo maecenas pulvinar lobortis est phasellus sit amet erat nulla tempus vivamus in felis eu', '2019-10-05 02:00:04', '3561396991504850', '5602243956590829'),
('67', 'proin risus praesent lectus vestibulum quam sapien varius ut blandit non interdum in ante vestibulum ante ipsum primis', '2019-09-30 05:07:11', '3570444669030672', '5602243956590829'),
('68', 'in tempor turpis nec euismod scelerisque quam turpis adipiscing lorem vitae mattis', '2018-03-04 16:59:08', '589314482821650077', '5602243956590829'),
('69', 'pede ullamcorper augue a suscipit nulla elit ac nulla sed vel enim sit amet nunc', '2019-12-17 07:01:46', '67712841902659791', '3549847459753147'),
('7', 'fermentum donec ut mauris eget massa tempor convallis nulla neque libero convallis eget eleifend luctus ultricies eu nibh', '2019-03-14 12:40:13', '4936950340247883391', '5602243956590829'),
('70', 'augue vel accumsan tellus nisi eu orci mauris lacinia sapien quis libero nullam', '2019-11-01 00:40:30', '676789972127957623', '3549847459753147'),
('71', 'nibh ligula nec sem duis aliquam convallis nunc proin at turpis a pede', '2018-05-13 08:53:27', '5010129114742608', '3549847459753147'),
('72', 'aliquam quis turpis eget elit sodales scelerisque mauris sit amet eros suspendisse accumsan tortor quis turpis sed ante', '2019-12-16 07:47:18', '201669371684670', '3549847459753147'),
('73', 'amet erat nulla tempus vivamus in felis eu sapien cursus vestibulum proin', '2018-01-28 00:37:24', '5602246446608267', '3582133711292259'),
('74', 'vivamus metus arcu adipiscing molestie hendrerit at vulputate vitae nisl aenean lectus pellentesque eget nunc donec quis', '2018-02-02 13:28:23', '5020519192967366', '3582133711292259'),
('75', 'sit amet eleifend pede libero quis orci nullam molestie nibh in', '2019-04-10 18:22:54', '374622749339775', '374288979758355'),
('76', 'et ultrices posuere cubilia curae donec pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin mi sit amet lobortis sapien', '2019-09-29 06:21:10', '5116832994703987', '374288979758355'),
('77', 'hendrerit at vulputate vitae nisl aenean lectus pellentesque eget nunc donec quis orci eget orci vehicula', '2018-06-19 17:17:45', '201697503918179', '6762089970903991'),
('78', 'pellentesque volutpat dui maecenas tristique est et tempus semper est quam pharetra magna ac', '2018-03-10 20:07:50', '30551563793039', '6762089970903991'),
('79', 'elit proin interdum mauris non ligula pellentesque ultrices phasellus id sapien in sapien iaculis', '2018-09-15 13:00:48', '560222380425820900', '6762089970903991'),
('8', 'eget eros elementum pellentesque quisque porta volutpat erat quisque erat eros viverra eget', '2019-03-08 20:35:30', '3540440821693685', '3549847459753147'),
('80', 'vivamus vestibulum sagittis sapien cum sociis natoque penatibus et magnis dis', '2018-01-09 08:42:14', '3537682066141301', '3576112222610710'),
('81', 'lacinia erat vestibulum sed magna at nunc commodo placerat praesent blandit nam nulla integer pede justo lacinia eget tincidunt', '2019-11-08 12:53:15', '5020551995835422228', '3576112222610710'),
('82', 'tristique fusce congue diam id ornare imperdiet sapien urna pretium nisl ut volutpat sapien arcu sed augue aliquam', '2019-06-18 10:03:25', '633110982368124917', '3576112222610710'),
('83', 'faucibus orci luctus et ultrices posuere cubilia curae nulla dapibus dolor vel est donec odio justo', '2018-05-11 23:43:15', '3566975121757234', '3576112222610710'),
('84', 'pede posuere nonummy integer non velit donec diam neque vestibulum eget vulputate ut ultrices vel', '2019-09-12 20:14:33', '3582886996379212', '3582133711292259'),
('85', 'ipsum praesent blandit lacinia erat vestibulum sed magna at nunc commodo placerat praesent', '2019-10-21 12:53:12', '5108752485991810', '3582133711292259'),
('86', 'tincidunt lacus at velit vivamus vel nulla eget eros elementum pellentesque quisque porta volutpat erat quisque erat', '2018-02-17 01:02:18', '201464130240596', '3582133711292259'),
('87', 'non mi integer ac neque duis bibendum morbi non quam nec dui luctus', '2018-05-18 01:45:46', '3586251071244276', '5602243956590829'),
('88', 'mauris laoreet ut rhoncus aliquet pulvinar sed nisl nunc rhoncus dui vel sem sed sagittis nam congue', '2018-06-10 08:52:41', '5020709070543228761', '5602243956590829'),
('89', 'vitae consectetuer eget rutrum at lorem integer tincidunt ante vel ipsum praesent blandit', '2018-02-11 18:26:43', '6333670539673058', '3582133711292259'),
('9', 'molestie nibh in lectus pellentesque at nulla suspendisse potenti cras', '2018-09-28 11:26:27', '374283526007463', '3549847459753147'),
('90', 'consequat in consequat ut nulla sed accumsan felis ut at dolor quis odio consequat varius integer ac leo', '2018-03-06 07:07:56', '3530745171606752', '3582133711292259');

-- --------------------------------------------------------

--
-- Table structure for table `info_barang_level`
--

CREATE TABLE `info_barang_level` (
  `id_barang` char(10) COLLATE utf8_bin NOT NULL,
  `nama_level` char(20) COLLATE utf8_bin NOT NULL,
  `harga_sewa` float(24,0) DEFAULT NULL,
  `porsi_royalti` float(24,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `info_barang_level`
--

INSERT INTO `info_barang_level` (`id_barang`, `nama_level`, `harga_sewa`, `porsi_royalti`) VALUES
('1', 'gold', 307032, 9844),
('10', 'gold', 326217, 5427),
('100', 'gold', 120111, 9221),
('11', 'gold', 380359, 6311),
('12', 'gold', 96773, 8060),
('13', 'gold', 308291, 8244),
('14', 'gold', 146420, 3425),
('17', 'gold', 152882, 4441),
('18', 'gold', 266700, 3313),
('19', 'gold', 11375, 1361),
('2', 'gold', 161857, 9046),
('20', 'gold', 59865, 3034),
('21', 'gold', 141666, 8405),
('22', 'gold', 142543, 6862),
('23', 'gold', 385320, 2065),
('24', 'gold', 391727, 3425),
('25', 'gold', 178955, 2645),
('26', 'gold', 441620, 4990),
('27', 'gold', 33975, 1859),
('28', 'gold', 217989, 9302),
('29', 'gold', 47781, 3189),
('3', 'gold', 317937, 2490),
('30', 'gold', 317263, 3639),
('31', 'gold', 371476, 9460),
('32', 'gold', 276160, 1407),
('33', 'gold', 328613, 8317),
('34', 'gold', 60557, 5753),
('35', 'gold', 62672, 4983),
('36', 'gold', 110646, 4335),
('37', 'gold', 120111, 9221),
('38', 'gold', 469620, 1133),
('39', 'gold', 189299, 4725),
('4', 'gold', 474838, 9003),
('40', 'gold', 212267, 9713),
('41', 'gold', 213697, 1261),
('42', 'gold', 431771, 3278),
('43', 'gold', 350873, 3753),
('44', 'gold', 333994, 1956),
('45', 'gold', 205031, 3792),
('46', 'gold', 477704, 1950),
('47', 'gold', 299400, 9945),
('48', 'gold', 155821, 3956),
('5', 'gold', 71436, 5262),
('51', 'gold', 400723, 7325),
('52', 'gold', 220896, 3164),
('53', 'gold', 38753, 1698),
('54', 'gold', 44959, 8511),
('55', 'gold', 42766, 6595),
('56', 'gold', 398084, 9266),
('57', 'gold', 138314, 8395),
('58', 'gold', 105423, 4665),
('59', 'gold', 490762, 8515),
('6', 'gold', 441432, 4072),
('60', 'gold', 61038, 8822),
('61', 'gold', 124369, 3618),
('62', 'gold', 138558, 2352),
('63', 'gold', 62633, 7616),
('64', 'gold', 65014, 8442),
('65', 'gold', 313867, 6756),
('66', 'gold', 374949, 4683),
('67', 'gold', 332088, 3775),
('68', 'gold', 363637, 3473),
('69', 'gold', 323763, 5851),
('7', 'gold', 255600, 3358),
('70', 'gold', 42404, 2560),
('71', 'gold', 22567, 5793),
('72', 'gold', 35342, 4773),
('73', 'gold', 410827, 7410),
('74', 'gold', 79432, 5905),
('75', 'gold', 349949, 9163),
('76', 'gold', 456465, 1067),
('77', 'gold', 308291, 8244),
('78', 'gold', 146420, 3425),
('79', 'gold', 141672, 4346),
('8', 'gold', 124193, 6126),
('80', 'gold', 152882, 4441),
('81', 'gold', 266700, 3313),
('82', 'gold', 11375, 1361),
('83', 'gold', 59865, 3034),
('84', 'gold', 141666, 8405),
('85', 'gold', 142543, 6862),
('86', 'gold', 385320, 2065),
('87', 'gold', 391727, 3425),
('88', 'gold', 178955, 2645),
('89', 'gold', 441620, 4990),
('9', 'gold', 426768, 9998),
('90', 'gold', 33975, 1859),
('91', 'gold', 217989, 9302),
('92', 'gold', 47781, 3189),
('93', 'gold', 317263, 3639),
('94', 'gold', 371476, 9460),
('95', 'gold', 276160, 1407),
('96', 'gold', 328613, 8317),
('97', 'gold', 60557, 5753),
('98', 'gold', 62672, 4983),
('99', 'gold', 110646, 4335),
('1', 'platinum', 495813, 3425),
('10', 'platinum', 175496, 1841),
('100', 'platinum', 258722, 7962),
('11', 'platinum', 52020, 2247),
('12', 'platinum', 221536, 2199),
('13', 'platinum', 222776, 2769),
('14', 'platinum', 87029, 1662),
('16', 'platinum', 428418, 5864),
('17', 'platinum', 206289, 1733),
('18', 'platinum', 393702, 3308),
('19', 'platinum', 343472, 2963),
('2', 'platinum', 163695, 9549),
('20', 'platinum', 484276, 9561),
('21', 'platinum', 382068, 5338),
('22', 'platinum', 191427, 4285),
('23', 'platinum', 73960, 7135),
('24', 'platinum', 477850, 2279),
('25', 'platinum', 224176, 2386),
('26', 'platinum', 377052, 9158),
('27', 'platinum', 411954, 2676),
('28', 'platinum', 462280, 8367),
('29', 'platinum', 480840, 6551),
('3', 'platinum', 436179, 5604),
('30', 'platinum', 155310, 5455),
('31', 'platinum', 290745, 2845),
('32', 'platinum', 311397, 1324),
('33', 'platinum', 58626, 9705),
('34', 'platinum', 184094, 7446),
('35', 'platinum', 180321, 5762),
('36', 'platinum', 128208, 5922),
('37', 'platinum', 258722, 7962),
('38', 'platinum', 175181, 1623),
('39', 'platinum', 422905, 9728),
('4', 'platinum', 476345, 9613),
('40', 'platinum', 9664, 3192),
('41', 'platinum', 53463, 2933),
('42', 'platinum', 307831, 1441),
('43', 'platinum', 221288, 5869),
('44', 'platinum', 429586, 3219),
('45', 'platinum', 396703, 3216),
('46', 'platinum', 285639, 3761),
('47', 'platinum', 25751, 1432),
('48', 'platinum', 281622, 4966),
('49', 'platinum', 159903, 4089),
('5', 'platinum', 94544, 9834),
('50', 'platinum', 445078, 4064),
('51', 'platinum', 457015, 6697),
('52', 'platinum', 284449, 2364),
('53', 'platinum', 315489, 2709),
('54', 'platinum', 479388, 5169),
('55', 'platinum', 233340, 8198),
('56', 'platinum', 260595, 4066),
('57', 'platinum', 144283, 8551),
('58', 'platinum', 319323, 4660),
('59', 'platinum', 207478, 8838),
('6', 'platinum', 339725, 8887),
('60', 'platinum', 464677, 2036),
('61', 'platinum', 233855, 1521),
('62', 'platinum', 264905, 9718),
('63', 'platinum', 485192, 5225),
('64', 'platinum', 173335, 1356),
('65', 'platinum', 233075, 6843),
('66', 'platinum', 405161, 3389),
('67', 'platinum', 279622, 6621),
('69', 'platinum', 268185, 7008),
('7', 'platinum', 442804, 1402),
('70', 'platinum', 158699, 3604),
('71', 'platinum', 32658, 8050),
('72', 'platinum', 375526, 5816),
('73', 'platinum', 97458, 8585),
('74', 'platinum', 277053, 5182),
('75', 'platinum', 199867, 2322),
('76', 'platinum', 30375, 3249),
('77', 'platinum', 222776, 2769),
('78', 'platinum', 87029, 1662),
('79', 'platinum', 428418, 5864),
('8', 'platinum', 39321, 6230),
('80', 'platinum', 206289, 1733),
('81', 'platinum', 393702, 3308),
('82', 'platinum', 343472, 2963),
('83', 'platinum', 484276, 9561),
('84', 'platinum', 382068, 5338),
('85', 'platinum', 191427, 4285),
('86', 'platinum', 73960, 7135),
('87', 'platinum', 477850, 2279),
('88', 'platinum', 224176, 2386),
('89', 'platinum', 377052, 9158),
('9', 'platinum', 337998, 7310),
('90', 'platinum', 411954, 2676),
('91', 'platinum', 462280, 8367),
('92', 'platinum', 480840, 6551),
('93', 'platinum', 155310, 5455),
('94', 'platinum', 290745, 2845),
('95', 'platinum', 311397, 1324),
('96', 'platinum', 58626, 9705),
('97', 'platinum', 184094, 7446),
('98', 'platinum', 180321, 5762),
('99', 'platinum', 128208, 5922),
('1', 'regular', 101767, 4722),
('10', 'regular', 258633, 3771),
('11', 'regular', 399105, 9166),
('12', 'regular', 163533, 1359),
('13', 'regular', 70384, 6550),
('14', 'regular', 101783, 1300),
('17', 'regular', 391703, 8502),
('18', 'regular', 384259, 3795),
('19', 'regular', 144308, 2193),
('2', 'regular', 462654, 5738),
('20', 'regular', 241506, 2699),
('21', 'regular', 222454, 3086),
('22', 'regular', 25159, 3474),
('23', 'regular', 301968, 9021),
('24', 'regular', 50156, 4789),
('25', 'regular', 166683, 5447),
('26', 'regular', 197956, 2278),
('27', 'regular', 149559, 6758),
('28', 'regular', 131368, 6715),
('29', 'regular', 100563, 1605),
('3', 'regular', 487352, 8104),
('30', 'regular', 287409, 8052),
('31', 'regular', 461032, 4777),
('32', 'regular', 419756, 5620),
('33', 'regular', 406106, 5469),
('34', 'regular', 76087, 7456),
('35', 'regular', 201600, 9219),
('36', 'regular', 211629, 6871),
('37', 'regular', 491605, 6413),
('38', 'regular', 71477, 9937),
('39', 'regular', 174286, 3066),
('4', 'regular', 32993, 7356),
('40', 'regular', 492778, 8714),
('41', 'regular', 259338, 7276),
('42', 'regular', 128145, 4280),
('43', 'regular', 483428, 6756),
('44', 'regular', 85135, 7431),
('45', 'regular', 476341, 5985),
('46', 'regular', 18864, 4874),
('47', 'regular', 493017, 6564),
('48', 'regular', 375752, 6971),
('49', 'regular', 9319, 7552),
('5', 'regular', 479083, 9748),
('51', 'regular', 362568, 6964),
('52', 'regular', 120155, 1724),
('53', 'regular', 341073, 4601),
('54', 'regular', 210713, 5366),
('55', 'regular', 269198, 7898),
('56', 'regular', 141185, 2305),
('57', 'regular', 269452, 3320),
('58', 'regular', 354497, 1437),
('59', 'regular', 480058, 4462),
('6', 'regular', 299326, 2701),
('60', 'regular', 170302, 9273),
('61', 'regular', 240355, 4053),
('62', 'regular', 143447, 3712),
('63', 'regular', 398442, 8615),
('64', 'regular', 204726, 8154),
('65', 'regular', 251579, 4215),
('66', 'regular', 439514, 6356),
('67', 'regular', 333441, 6262),
('68', 'regular', 418634, 2064),
('69', 'regular', 65972, 6749),
('7', 'regular', 84554, 1918),
('70', 'regular', 484123, 2496),
('71', 'regular', 202997, 6634),
('72', 'regular', 89199, 3002),
('73', 'regular', 283696, 3555),
('74', 'regular', 208668, 1202),
('75', 'regular', 403206, 2187),
('76', 'regular', 231049, 6117),
('77', 'regular', 70384, 6550),
('78', 'regular', 101783, 1300),
('8', 'regular', 67656, 2621),
('80', 'regular', 391703, 8502),
('81', 'regular', 384259, 3795),
('82', 'regular', 144308, 2193),
('83', 'regular', 241506, 2699),
('84', 'regular', 222454, 3086),
('85', 'regular', 25159, 3474),
('86', 'regular', 301968, 9021),
('87', 'regular', 50156, 4789),
('88', 'regular', 166683, 5447),
('89', 'regular', 197956, 2278),
('9', 'regular', 70410, 2588),
('90', 'regular', 149559, 6758),
('91', 'regular', 131368, 6715),
('92', 'regular', 100563, 1605),
('93', 'regular', 287409, 8052),
('94', 'regular', 461032, 4777),
('95', 'regular', 419756, 5620),
('96', 'regular', 406106, 5469),
('97', 'regular', 76087, 7456),
('1', 'silver', 281069, 2490),
('10', 'silver', 19900, 7051),
('100', 'silver', 346349, 9092),
('11', 'silver', 101462, 5117),
('12', 'silver', 52539, 7870),
('13', 'silver', 216668, 1126),
('14', 'silver', 321228, 1724),
('15', 'silver', 478423, 4777),
('16', 'silver', 141672, 4346),
('17', 'silver', 82748, 7976),
('18', 'silver', 21250, 4380),
('19', 'silver', 411363, 7563),
('2', 'silver', 479628, 1535),
('20', 'silver', 436177, 7382),
('21', 'silver', 248840, 4078),
('22', 'silver', 316742, 7132),
('23', 'silver', 258262, 8508),
('24', 'silver', 207453, 2308),
('25', 'silver', 194329, 2999),
('26', 'silver', 11027, 6148),
('27', 'silver', 4205, 2493),
('28', 'silver', 148631, 9631),
('29', 'silver', 331638, 5492),
('3', 'silver', 312123, 9653),
('30', 'silver', 492966, 5365),
('31', 'silver', 349749, 3000),
('32', 'silver', 231311, 5894),
('33', 'silver', 213015, 3916),
('34', 'silver', 227388, 4103),
('35', 'silver', 445066, 5336),
('36', 'silver', 154508, 6611),
('37', 'silver', 346349, 9092),
('38', 'silver', 272144, 5675),
('39', 'silver', 270158, 5213),
('4', 'silver', 382039, 8215),
('40', 'silver', 230234, 9909),
('41', 'silver', 103474, 7682),
('42', 'silver', 225964, 1297),
('43', 'silver', 234463, 7477),
('44', 'silver', 369993, 1585),
('45', 'silver', 165109, 4014),
('46', 'silver', 345869, 7850),
('47', 'silver', 491753, 3718),
('48', 'silver', 19998, 6463),
('5', 'silver', 448084, 7183),
('51', 'silver', 101652, 8363),
('52', 'silver', 429935, 6623),
('53', 'silver', 386731, 6419),
('54', 'silver', 51280, 5660),
('55', 'silver', 105236, 4878),
('56', 'silver', 288120, 8853),
('57', 'silver', 80797, 9503),
('58', 'silver', 158049, 8064),
('59', 'silver', 90338, 8569),
('6', 'silver', 304384, 6317),
('60', 'silver', 402156, 8801),
('61', 'silver', 173547, 4918),
('62', 'silver', 213783, 3406),
('63', 'silver', 177670, 7688),
('64', 'silver', 359480, 6156),
('65', 'silver', 111940, 4634),
('66', 'silver', 121420, 5261),
('67', 'silver', 146887, 4215),
('68', 'silver', 372977, 7356),
('69', 'silver', 378277, 1891),
('7', 'silver', 313691, 3070),
('70', 'silver', 31962, 3976),
('71', 'silver', 6249, 1958),
('72', 'silver', 221244, 4365),
('73', 'silver', 480801, 2100),
('74', 'silver', 449157, 6443),
('75', 'silver', 227659, 5260),
('76', 'silver', 474688, 7659),
('77', 'silver', 216668, 1126),
('78', 'silver', 321228, 1724),
('79', 'silver', 478423, 4777),
('8', 'silver', 201665, 7532),
('80', 'silver', 82748, 7976),
('81', 'silver', 21250, 4380),
('82', 'silver', 411363, 7563),
('83', 'silver', 436177, 7382),
('84', 'silver', 248840, 4078),
('85', 'silver', 316742, 7132),
('86', 'silver', 258262, 8508),
('87', 'silver', 207453, 2308),
('88', 'silver', 194329, 2999),
('89', 'silver', 11027, 6148),
('9', 'silver', 143062, 3719),
('90', 'silver', 4205, 2493),
('91', 'silver', 148631, 9631),
('92', 'silver', 331638, 5492),
('93', 'silver', 492966, 5365),
('94', 'silver', 349749, 3000),
('95', 'silver', 231311, 5894),
('96', 'silver', 213015, 3916),
('97', 'silver', 227388, 4103),
('98', 'silver', 445066, 5336),
('99', 'silver', 154508, 6611);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `nama` char(255) COLLATE utf8_bin NOT NULL,
  `deskripsi` text COLLATE utf8_bin,
  `usia_dari` int(32) NOT NULL,
  `usia_sampai` int(32) NOT NULL,
  `bahan` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`nama`, `deskripsi`, `usia_dari`, `usia_sampai`, `bahan`) VALUES
('Alas_Kaki', 'Quisque ut erat.', 10, 10, 'Propranolol Hydrochloride'),
('Alat_Musik', 'Ut tellus.', 2, 12, 'Triple Antibiotic'),
('Baju_anak', 'Pellentesque ultrices mattis odio.', 7, 15, 'Roxicet'),
('Bebek_bebekan', 'Mauris lacinia sapien quis libero.', 9, 13, 'Triamcinolone Acetonide'),
('Bola', 'Cras non velit nec nisi vulputate nonummy.', 9, 13, 'glipizide'),
('Boneka', 'Nunc purus.', 1, 15, 'Zoledronic acid'),
('Celana_anak', 'In hac habitasse platea dictumst.', 3, 14, 'Folic Acid'),
('Hot_Wheels', 'Aenean lectus.', 2, 11, 'Hydrocodone Bitartate and Acetaminophen'),
('Kacamata_Renang', 'Vestibulum rutrum rutrum neque.', 2, 12, 'Rhizopus oryzae'),
('Kendaraan_jadijadian', 'Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo.', 5, 15, 'Cefuroxime Axetil'),
('Kereta_Thomas', 'Aenean sit amet justo.', 3, 13, 'Food - Plant Source, Carrot Daucus carota'),
('Lego', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 2, 14, 'Super Aqua Eye'),
('Mainan_Edukasi', 'Suspendisse potenti.', 7, 11, 'Bacitracin Zinc'),
('Mainan_Kayu', 'Vivamus in felis eu sapien cursus vestibulum.', 7, 12, 'ESIKA HD COLOR HIGH DEFINITION COLOR SPF 20'),
('Mainan_Pretend', 'In sagittis dui vel nisl.', 3, 15, 'Amlodipine Besylate'),
('Mainan_Religious', 'Nam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla.', 4, 15, 'Hydralazine Hydrochloride'),
('Mainan_prank', 'Duis at velit eu est congue elementum.', 8, 10, 'Colgate'),
('Mobil_mobilan', 'Donec posuere metus vitae ipsum.', 1, 12, 'Hydrochlorothiazide'),
('Online_Games', 'Aenean sit amet justo.', 5, 14, 'Montelukast Sodium'),
('Peralatan_Mandi', 'Sed accumsan felis.', 10, 13, 'Mucinex'),
('Puzzle', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 7, 10, 'Yat Tip Xiao'),
('Remote_Control', 'Aliquam quis turpis eget elit sodales scelerisque.', 5, 14, 'Clobetasol Propionate'),
('Rubik', 'Phasellus sit amet erat.', 10, 10, 'Hello'),
('Stationary', 'Maecenas ut massa quis augue luctus tincidunt.', 9, 11, 'Cetirizine Hydrochloride'),
('Topeng', 'Sed sagittis.', 4, 12, 'Softlips Sugar and Spice');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `nama` char(255) COLLATE utf8_bin NOT NULL,
  `level` int(32) NOT NULL,
  `sub_dari` char(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`nama`, `level`, `sub_dari`) VALUES
('A', 1, NULL),
('B', 2, 'A'),
('C', 3, 'A'),
('D', 3, 'B'),
('E', 3, 'F'),
('F', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_item`
--

CREATE TABLE `kategori_item` (
  `nama_item` char(255) COLLATE utf8_bin NOT NULL,
  `nama_kategori` char(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `kategori_item`
--

INSERT INTO `kategori_item` (`nama_item`, `nama_kategori`) VALUES
('Bebek_bebekan', 'A'),
('Bola', 'A'),
('Boneka', 'A'),
('Hot_Wheels', 'A'),
('Kacamata_Renang', 'A'),
('Kereta_Thomas', 'A'),
('Lego', 'A'),
('Mainan_Edukasi', 'A'),
('Mainan_Kayu', 'A'),
('Mainan_prank', 'A'),
('Online_Games', 'A'),
('Puzzle', 'A'),
('Rubik', 'A'),
('Bebek_bebekan', 'B'),
('Bola', 'B'),
('Boneka', 'B'),
('Hot_Wheels', 'B'),
('Kacamata_Renang', 'B'),
('Kereta_Thomas', 'B'),
('Lego', 'B'),
('Mainan_Edukasi', 'B'),
('Mainan_Kayu', 'B'),
('Mainan_prank', 'B'),
('Online_Games', 'B'),
('Puzzle', 'B'),
('Rubik', 'B'),
('Bebek_bebekan', 'C'),
('Bola', 'C'),
('Boneka', 'C'),
('Hot_Wheels', 'C'),
('Kacamata_Renang', 'C'),
('Kereta_Thomas', 'C'),
('Lego', 'C'),
('Mainan_Edukasi', 'C'),
('Mainan_Kayu', 'C'),
('Mainan_prank', 'C'),
('Online_Games', 'C'),
('Puzzle', 'C'),
('Rubik', 'C'),
('Bebek_bebekan', 'D'),
('Bola', 'D'),
('Boneka', 'D'),
('Hot_Wheels', 'D'),
('Kacamata_Renang', 'D'),
('Kereta_Thomas', 'D'),
('Lego', 'D'),
('Mainan_Edukasi', 'D'),
('Mainan_Kayu', 'D'),
('Mainan_prank', 'D'),
('Puzzle', 'D'),
('Rubik', 'D'),
('Bebek_bebekan', 'E'),
('Bola', 'E'),
('Boneka', 'E'),
('Hot_Wheels', 'E'),
('Kacamata_Renang', 'E'),
('Kereta_Thomas', 'E'),
('Lego', 'E'),
('Mainan_Edukasi', 'E'),
('Mainan_Kayu', 'E'),
('Mainan_prank', 'E'),
('Puzzle', 'E'),
('Rubik', 'E'),
('Bebek_bebekan', 'F'),
('Bola', 'F'),
('Boneka', 'F'),
('Hot_Wheels', 'F'),
('Kacamata_Renang', 'F'),
('Kereta_Thomas', 'F'),
('Lego', 'F'),
('Mainan_Edukasi', 'F'),
('Mainan_Kayu', 'F'),
('Mainan_prank', 'F'),
('Puzzle', 'F'),
('Rubik', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `level_keanggotaan`
--

CREATE TABLE `level_keanggotaan` (
  `nama_level` char(20) COLLATE utf8_bin NOT NULL,
  `minimum_poin` float(24,0) NOT NULL,
  `deskripsi` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `level_keanggotaan`
--

INSERT INTO `level_keanggotaan` (`nama_level`, `minimum_poin`, `deskripsi`) VALUES
('gold', 500, 'Gold Class member'),
('platinum', 1000, 'Platinum Class member'),
('regular', 0, 'Newbies'),
('silver', 150, 'Silver Class member');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` char(10) COLLATE utf8_bin NOT NULL,
  `datetime_pemesanan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `kuantitas_barang` int(32) NOT NULL,
  `harga_sewa` float(24,0) DEFAULT NULL,
  `ongkos` float(24,0) DEFAULT NULL,
  `no_ktp_pemesan` char(20) COLLATE utf8_bin NOT NULL,
  `status` char(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `datetime_pemesanan`, `kuantitas_barang`, `harga_sewa`, `ongkos`, `no_ktp_pemesan`, `status`) VALUES
('0055281176', '2019-04-23 09:57:33', 27, 213099, 6478, '3532759816062121', 'batal'),
('0125439032', '2018-08-13 13:34:22', 46, 329617, 16120, '5602221676764916', 'batal'),
('0385833954', '2019-10-21 04:06:42', 1, 107272, 30117, '3561952555530911', 'menunggu pembayaran'),
('0557224284', '2019-03-17 15:58:51', 3, 367883, 4870, '374283526007463', 'sedang dikonfirmasi'),
('1129390225', '2018-01-06 19:49:25', 30, 99092, 46565, '3580398213881261', 'menunggu pembayaran'),
('1570267529', '2019-11-05 00:54:26', 12, 290867, 44449, '30174992400264', 'menunggu pembayaran'),
('1815970383', '2019-04-16 04:50:58', 37, 304427, 48404, '3584362274917378', 'sedang dikonfirmasi'),
('1837897751', '2019-11-22 14:45:00', 5, 311262, 40651, '5641827408498129', 'sedang dikirim'),
('2154401473', '2018-05-26 19:09:21', 4, 345933, 15545, '6385130286085318', 'sedang disiapkan'),
('2211958559', '2019-11-26 03:09:46', 40, 387780, 40159, '6759362965367737', 'sedang dikirim'),
('2317445695', '2018-11-26 21:31:37', 35, 181846, 12720, '5018697162965796975', 'sedang dikirim'),
('2397771969', '2019-10-16 06:20:35', 15, 336247, 25163, '6304706188927679', 'dalam masa sewa'),
('2608615864', '2018-07-09 07:50:42', 10, 247631, 39860, '374622749339775', 'sedang disiapkan'),
('2730743308', '2018-11-12 15:02:31', 30, 390673, 38208, '3529198427466212', 'sedang dikonfirmasi'),
('2731722746', '2019-05-08 20:55:38', 30, 204016, 8225, '4936950340247883391', 'sedang disiapkan'),
('2890780074', '2018-09-29 01:36:26', 11, 13968, 25961, '3579130872121983', 'sedang disiapkan'),
('3458561501', '2019-02-03 08:41:07', 17, 68914, 7633, '5010127104513963', 'sedang dikirim'),
('3490844815', '2019-11-26 05:36:13', 6, 494791, 33704, '6763533583217694', 'dalam masa sewa'),
('3510058364', '2018-05-14 06:39:46', 31, 309073, 15338, '3567273887240440', 'sedang disiapkan'),
('3558086732', '2019-09-14 12:28:28', 48, 464405, 37233, '5602253640461535', 'sedang dikirim'),
('4176898259', '2019-03-30 12:12:21', 27, 218778, 2876, '5588989835902738', 'dalam masa sewa'),
('4181406881', '2019-06-17 02:36:09', 2, 125560, 43618, '337941176080538', 'batal'),
('4250799263', '2018-05-15 09:46:51', 48, 94595, 4822, '3571009106261385', 'sudah dikembalikan'),
('4360375379', '2019-07-07 00:37:24', 6, 89844, 3958, '374288121576614', 'sedang dikonfirmasi'),
('4429079951', '2019-03-02 20:10:23', 25, 135249, 3619, '5602244544212264', 'sedang disiapkan'),
('4618692197', '2019-07-29 20:46:25', 27, 169890, 49366, '3569531172817836', 'menunggu pembayaran'),
('4763729381', '2018-06-08 04:56:23', 40, 47014, 40303, '3582886996379212', 'sedang dikonfirmasi'),
('4857037246', '2018-04-09 13:00:34', 22, 23085, 40310, '3569188677171787', 'menunggu pembayaran'),
('4992845541', '2018-06-14 22:42:06', 9, 333815, 7803, '3564305146956409', 'sedang disiapkan'),
('5587899829', '2018-02-10 13:41:19', 16, 425174, 48793, '3577513565084836', 'sudah dikembalikan'),
('5848184275', '2019-06-20 19:44:42', 5, 229295, 32980, '490348652352539094', 'sudah dikembalikan'),
('5870512824', '2019-01-26 11:48:45', 16, 266924, 28195, '3540440821693685', 'sedang dikirim'),
('5951405076', '2018-07-16 03:14:53', 14, 157295, 23663, '5555752260577014', 'sudah dikembalikan'),
('5954414491', '2019-06-19 06:46:59', 50, 325082, 8091, '676788062286776575', 'sedang disiapkan'),
('6101575578', '2019-08-27 08:12:53', 50, 271054, 22435, '30005707166701', 'sedang disiapkan'),
('6259901984', '2019-07-06 06:56:12', 28, 412655, 35483, '5002355146906560', 'menunggu pembayaran'),
('6520356077', '2019-07-29 02:03:53', 35, 16361, 36852, '6378285343720668', 'sudah dikembalikan'),
('6867969224', '2018-09-11 14:19:03', 8, 373503, 8216, '3536580041384627', 'sudah dikembalikan'),
('7635912992', '2019-10-02 21:19:19', 31, 269700, 32614, '3529050360945720', 'dalam masa sewa'),
('7810762737', '2018-10-04 00:58:36', 3, 433518, 21460, '5602242968227421397', 'sedang disiapkan'),
('7880000038', '2019-08-09 13:00:43', 34, 30431, 35930, '337941108713552', 'sedang disiapkan'),
('8437777518', '2018-12-18 08:07:13', 19, 360706, 22163, '502022140240257660', 'menunggu pembayaran'),
('8543447461', '2018-01-13 14:32:15', 41, 430829, 43000, '502093976312017985', 'sedang disiapkan'),
('8672563484', '2018-12-28 10:09:01', 24, 29804, 15267, '63045339046650815', 'sedang dikonfirmasi'),
('9452950668', '2019-05-25 16:30:03', 21, 387533, 5332, '3537718505350648', 'dalam masa sewa'),
('9579844879', '2018-08-19 21:11:01', 16, 209990, 34990, '30573583237656', 'dalam masa sewa'),
('9661443394', '2018-10-08 11:03:49', 2, 96576, 30046, '36932248218150', 'menunggu pembayaran'),
('9764493645', '2018-12-02 06:51:53', 7, 276891, 22455, '3585246255089902', 'sedang dikonfirmasi'),
('9931347953', '2019-11-17 11:05:47', 48, 313003, 44262, '201725546988956', 'menunggu pembayaran'),
('9994681648', '2018-05-22 19:20:52', 25, 342396, 1726, '3575662246414953', 'dalam masa sewa');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `no_resi` char(10) COLLATE utf8_bin NOT NULL,
  `id_pemesanan` char(10) COLLATE utf8_bin NOT NULL,
  `metode` text COLLATE utf8_bin NOT NULL,
  `ongkos` double(20,4) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `no_ktp_anggota` char(20) COLLATE utf8_bin NOT NULL,
  `nama_alamat_anggota` char(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`no_resi`, `id_pemesanan`, `metode`, `ongkos`, `tanggal`, `no_ktp_anggota`, `nama_alamat_anggota`) VALUES
('0055545327', '0557224284', 'Job', 36194.0000, '2018-01-29 17:00:00', '374283526007463', '09 Roxbury Street'),
('0265897912', '2154401473', 'Zontrax', 24281.0000, '2018-03-26 17:00:00', '6385130286085318', '87 Iowa Place'),
('2254897659', '6520356077', 'Lotstring', 15892.0000, '2019-01-09 17:00:00', '6378285343720668', '06266 Montana Parkway'),
('2511822768', '4176898259', 'Andalax', 34862.0000, '2018-01-20 17:00:00', '5588989835902738', '7 Del Sol Court'),
('3000251847', '5870512824', 'Lotlux', 25744.0000, '2019-07-21 17:00:00', '3540440821693685', '45367 Magdeline Drive'),
('4234963704', '7810762737', 'Prodder', 17251.0000, '2018-10-23 17:00:00', '5602242968227421397', '77783 David Road'),
('4297706512', '9764493645', 'Treeflex', 5962.0000, '2019-02-16 17:00:00', '3585246255089902', '71 Homewood Circle'),
('4713030554', '5954414491', 'Flowdesk', 21159.0000, '2018-09-24 17:00:00', '676788062286776575', '70 Meadow Ridge Court'),
('4976420094', '9994681648', 'Home Ing', 43082.0000, '2018-07-19 17:00:00', '3575662246414953', '37 Starling Avenue'),
('5165810038', '5848184275', 'Zaam-Dox', 30703.0000, '2018-09-17 17:00:00', '490348652352539094', '1 Montana Drive'),
('5356090234', '8543447461', 'Kanlam', 32147.0000, '2019-10-26 17:00:00', '502093976312017985', '7796 Carberry Avenue'),
('5482618153', '5587899829', 'Transcof', 24705.0000, '2019-12-08 17:00:00', '3577513565084836', '6 Westerfield Court'),
('5578148441', '2730743308', 'Konklux', 33008.0000, '2019-04-08 17:00:00', '3529198427466212', '20 Clove Place'),
('6111472410', '9452950668', 'Zoolab', 6711.0000, '2019-08-04 17:00:00', '3537718505350648', '22661 Morrow Hill'),
('6225662480', '2890780074', 'Domainer', 23166.0000, '2018-03-06 17:00:00', '3579130872121983', '401 Hoard Way'),
('6311537249', '2731722746', 'Wrapsafe', 14952.0000, '2019-11-22 17:00:00', '4936950340247883391', '154 Mccormick Center'),
('6871639268', '6259901984', 'Keylex', 42243.0000, '2019-09-03 17:00:00', '5002355146906560', '1 Hooker Parkway'),
('7190205195', '1129390225', 'Asoka', 19754.0000, '2019-07-04 17:00:00', '3580398213881261', '57596 Haas Court'),
('7350391617', '4857037246', 'Job', 36076.0000, '2018-01-24 17:00:00', '3569188677171787', '561 Oneill Avenue'),
('8597518693', '0055281176', 'Lotstring', 22419.0000, '2018-11-05 17:00:00', '3532759816062121', '3359 Tony Way');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `no_ktp` char(20) COLLATE utf8_bin NOT NULL,
  `nama_lengkap` char(255) COLLATE utf8_bin NOT NULL,
  `email` char(255) COLLATE utf8_bin NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `no_telp` char(20) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`no_ktp`, `nama_lengkap`, `email`, `tanggal_lahir`, `no_telp`) VALUES
('201464130240596', '281-TRIAL-Rebe Mayer 198', '122-TRIAL-rmayer2n@usgs.gov 51', '2000-12-08', '121-TRIAL- 299'),
('201669371684670', '181-TRIAL-Arlina Oliva 234', '53-TRIAL-aoliva29@jigsy.com 199', '2000-06-26', '18-TRIAL- 38'),
('201697503918179', '224-TRIAL-Dorothy Adamthwaite 208', '144-TRIAL-dadamthwaite2e@wsj.com 209', '1999-01-07', '289-TRIAL- 2'),
('201700868521313', '7-TRIAL-Rorie Haville 237', '157-TRIAL-rhaville22@barnesanoble.com 287', '1998-11-16', '153-TRIAL- 183'),
('201725546988956', 'Robyn Grayshan', 'rgrayshan19@dion.ne.jp', '2000-09-11', '3243204941'),
('30005707166701', '173-TRIAL-Giralda Hanmer 186', '221-TRIAL-ghanmer1x@storify.com 245', '1999-02-14', '224-TRIAL- 172'),
('30174992400264', 'Nathalie Matas', 'nmatas1d@1688.com', '2000-06-20', '2791290687'),
('30503761329769', 'Eolanda Mallison', 'emallison6@cocolog-nifty.com', '1999-02-02', '5272923619'),
('30551563793039', '195-TRIAL-Ephraim Summerly 85', '93-TRIAL-esummerly2f@skyrock.com 243', '1998-01-08', '223-TRIAL- 87'),
('30573583237656', '78-TRIAL-Alis Jaram 258', '262-TRIAL-ajaram1g@behance.net 164', '2000-01-19', '5-TRIAL- 245'),
('337941108713552', 'Alonso Philippeaux', 'aphilippeaux18@homestead.com', '2000-01-05', '5821269185'),
('337941176080538', 'Estele Placido', 'eplacidou@ed.gov', '1999-06-23', '1853655937'),
('3529050360945720', 'Jeremiah Louys', 'jlouys16@kickstarter.com', '2000-05-22', '4084183890'),
('3529198427466212', 'Irene Waddy', 'iwaddyk@guardian.co.uk', '1998-11-26', '9022449118'),
('3530745171606752', '182-TRIAL-Sascha Boissier 85', '88-TRIAL-sboissier2r@dropbox.com 226', '1998-01-31', '117-TRIAL- 57'),
('3531505759321912', '286-TRIAL-Annora Burditt 90', '161-TRIAL-aburditt1z@com.com 36', '1999-09-04', '155-TRIAL- 167'),
('3532759816062121', 'Dena Petchell', 'dpetchelle@google.ca', '1999-08-21', '4191183064'),
('3536580041384627', 'Serena Drew-Clifton', 'sdrewclifton1b@msn.com', '1998-06-15', '5028271203'),
('3537682066141301', '180-TRIAL-Beret Harfoot 296', '98-TRIAL-bharfoot2h@privacy.gov.au 281', '1999-01-23', '89-TRIAL- 98'),
('3537718505350648', 'Franciskus Jacobsson', 'fjacobssond@stanford.edu', '1999-07-13', '2417571921'),
('3540440821693685', 'June Inkpin', 'jinkpinh@mayoclinic.com', '2000-01-04', '9823108968'),
('3540499341444847', '156-TRIAL-Quincy Spall 140', '166-TRIAL-qspall1t@yolasite.com 176', '1998-06-22', '131-TRIAL- 208'),
('3549847459753147', 'Ryley Gudger', 'rgudger2@nytimes.com', '1998-06-13', '2342071580'),
('3554546533208266', '290-TRIAL-Orrin Thews 129', '70-TRIAL-othews1r@geocities.com 50', '1999-01-22', '6-TRIAL- 201'),
('3561396991504850', '245-TRIAL-Allyson Hindmoor 209', '109-TRIAL-ahindmoor23@cbc.ca 158', '2000-11-03', '221-TRIAL- 288'),
('3561952555530911', 'Marchelle Pitkin', 'mpitkin12@alibaba.com', '1999-06-26', '5665821071'),
('3562397398402994', 'Vasilis Kinahan', 'vkinahan8@mac.com', '1998-05-24', '2163657308'),
('3564305146956409', 'Pennie Beahan', 'pbeahan15@1und1.de', '1998-08-12', '7872700758'),
('3566975121757234', '15-TRIAL-Dom Mole 88', '256-TRIAL-dmole2k@hubpages.com 111', '1999-11-05', '2-TRIAL- 234'),
('3567273887240440', 'Mattias Culbard', 'mculbardw@yahoo.com', '2000-02-18', '5673992486'),
('3569188677171787', 'Yankee Stopps', 'ystoppso@forbes.com', '2000-06-24', '5883205878'),
('3569531172817836', 'Gabriele Figg', 'gfiggv@printfriendly.com', '1998-02-25', '1509243635'),
('3570444669030672', '122-TRIAL-Olivie Baldwin 46', '206-TRIAL-obaldwin24@wisc.edu 130', '1998-08-21', '213-TRIAL- 68'),
('3571009106261385', 'Ruttger Goodenough', 'rgoodenough11@ocn.ne.jp', '2000-12-15', '7495068252'),
('3574506465131957', '141-TRIAL-Lilly Stoad 124', '166-TRIAL-lstoad21@gravatar.com 130', '1998-09-29', '207-TRIAL- 191'),
('3575019961998738', '40-TRIAL-Randy Neil 242', '64-TRIAL-rneil1q@amazon.co.uk 148', '1998-01-31', '146-TRIAL- 105'),
('3575662246414953', 'Aylmer Robson', 'arobsonr@omniture.com', '1998-10-17', '7732305128'),
('3576112222610710', 'Lidia Haugeh', 'lhaugeh7@paginegialle.it', '1999-11-05', '1748392521'),
('3577513565084836', 'Nancie Tate', 'ntatef@pen.io', '1998-12-08', '9037192132'),
('3579130872121983', 'Clementia Blant', 'cblantj@nymag.com', '1999-12-09', '4638440826'),
('3580398213881261', 'Thia Fatkin', 'tfatkinb@friendfeed.com', '2000-04-16', '7776639879'),
('3582133711292259', 'Wandie Martinson', 'wmartinson3@narod.ru', '1999-01-16', '3605348716'),
('3582511918708518', '53-TRIAL-Jaymee Upjohn 268', '47-TRIAL-jupjohn1n@adobe.com 44', '1999-12-04', '262-TRIAL- 57'),
('3582886996379212', '272-TRIAL-Norman Lansbury 255', '228-TRIAL-nlansbury2l@dion.ne.jp 146', '1998-12-18', '262-TRIAL- 86'),
('3584362274917378', 'Eal Alforde', 'ealforde14@theatlantic.com', '1998-06-25', '2758977533'),
('3584463983175090', 'Jeniffer Udey', 'judey0@sina.com.cn', '2000-07-11', '2643051275'),
('3585246255089902', 'Eirena Balling', 'eballingp@youtu.be', '1998-10-08', '9341616317'),
('3586251071244276', '257-TRIAL-Pierre O\'Scannill 276', '292-TRIAL-poscannill2o@weibo.com 89', '1999-01-19', '275-TRIAL- 212'),
('36932248218150', '181-TRIAL-Waverley Danilovich 27', '61-TRIAL-wdanilovich1h@odnoklassniki.ru 191', '2000-12-02', '295-TRIAL- 242'),
('372301336349883', 'Amil Candish', 'acandish9@pinterest.com', '1999-05-07', '7032582015'),
('372301610648992', '144-TRIAL-Kathi Hambly 39', '26-TRIAL-khambly1u@narod.ru 223', '2000-09-04', '137-TRIAL- 238'),
('374283526007463', 'Fraser Booy', 'fbooyi@dedecms.com', '1999-04-16', '1339255471'),
('374288121576614', 'Marietta Soden', 'msoden1e@huffingtonpost.com', '1998-02-01', '5863049873'),
('374288979758355', 'Valdemar Manville', 'vmanville4@feedburner.com', '1998-07-13', '9709354025'),
('374622749339775', '13-TRIAL-Hymie Barcroft 214', '209-TRIAL-hbarcroft2c@netvibes.com 116', '1999-02-28', '35-TRIAL- 51'),
('4405481223298477', '47-TRIAL-Jorge Prime 126', '71-TRIAL-jprime1k@bluehost.com 138', '2000-01-14', '69-TRIAL- 112'),
('4844166072545263', '93-TRIAL-Robb Breadmore 248', '129-TRIAL-rbreadmore1s@nationalgeographic.com 23', '1999-08-16', '84-TRIAL- 154'),
('4844430145727856', '292-TRIAL-Patric Cominello 82', '21-TRIAL-pcominello1j@plala.or.jp 116', '2000-11-08', '218-TRIAL- 95'),
('4844696161075210', '139-TRIAL-Webster Gerish 258', '204-TRIAL-wgerish1w@feedburner.com 30', '2000-12-17', '177-TRIAL- 206'),
('490348652352539094', 'Janeczka Eccleshall', 'jeccleshallt@netlog.com', '1998-04-14', '1097732979'),
('4911833093271694', '270-TRIAL-Alysia Haysey 129', '77-TRIAL-ahaysey1y@parallels.com 273', '1998-11-03', '297-TRIAL- 12'),
('4911883723291123944', '218-TRIAL-Bernhard Edon 282', '129-TRIAL-bedon1v@intel.com 41', '1999-02-23', '33-TRIAL- 215'),
('4936950340247883391', 'Birdie Pullinger', 'bpullingerg@unesco.org', '1999-09-20', '8033632752'),
('5002355146906560', 'Kaycee Aves', 'kavesa@paginegialle.it', '2000-01-11', '7726863003'),
('5010127104513963', '167-TRIAL-Iain Broadfield 199', '235-TRIAL-ibroadfield1l@1688.com 294', '1999-02-03', '203-TRIAL- 111'),
('5010129114742608', '96-TRIAL-Bette-ann McQuillin 21', '48-TRIAL-bmcquillin28@cdc.gov 99', '2000-11-02', '168-TRIAL- 184'),
('5018697162965796975', '16-TRIAL-Maryanna Burbank 35', '290-TRIAL-mburbank1p@house.gov 42', '1999-12-12', '288-TRIAL- 106'),
('502022140240257660', 'Farlee Trendle', 'ftrendley@tinypic.com', '1998-10-14', '5731549707'),
('5020519192967366', '48-TRIAL-Jacenta Davitashvili 283', '107-TRIAL-jdavitashvili2b@themeforest.net 21', '1998-11-08', '210-TRIAL- 17'),
('5020551995835422228', '109-TRIAL-Dulcine Hoodlass 157', '72-TRIAL-dhoodlass2i@photobucket.com 222', '1998-06-07', '238-TRIAL- 292'),
('5020709070543228761', '200-TRIAL-Heindrick Hempshall 110', '3-TRIAL-hhempshall2p@sourceforge.net 169', '1999-08-28', '161-TRIAL- 288'),
('502093976312017985', 'Sterne Trusler', 'struslers@nature.com', '2000-10-26', '3305943072'),
('5108752485991810', '275-TRIAL-Gunner Kretchmer 233', '169-TRIAL-gkretchmer2m@nymag.com 42', '2000-08-07', '144-TRIAL- 216'),
('5116832994703987', '200-TRIAL-Bonnee Ossipenko 149', '19-TRIAL-bossipenko2d@columbia.edu 56', '1998-04-05', '298-TRIAL- 3'),
('5555752260577014', 'Stanley Linnit', 'slinnit17@cnbc.com', '1998-08-13', '3486852888'),
('5588989835902738', 'Randolf Kier', 'rkierl@berkeley.edu', '2000-01-05', '1985984433'),
('5602221676764916', 'Dorise Divine', 'ddivine1c@time.com', '1999-11-15', '2567740768'),
('560222380425820900', '214-TRIAL-Rodger Marie 203', '248-TRIAL-rmarie2g@printfriendly.com 0', '1998-08-18', '258-TRIAL- 18'),
('5602242968227421397', 'Aloise Perford', 'aperfordc@sciencedaily.com', '1998-05-24', '1642366853'),
('5602243956590829', 'Lefty Caldecot', 'lcaldecot1@typepad.com', '1999-12-08', '4659481540'),
('5602244544212264', 'Carlin Nealand', 'cnealand13@smh.com.au', '2000-01-06', '3933420965'),
('5602246446608267', '0-TRIAL-Ward Dimeloe 188', '127-TRIAL-wdimeloe2a@so-net.ne.jp 167', '1998-08-28', '128-TRIAL- 193'),
('5602253640461535', 'Daria Cuxon', 'dcuxonz@spiegel.de', '1998-12-27', '7826495850'),
('5641827408498129', '27-TRIAL-Meriel MacDonough 36', '291-TRIAL-mmacdonough1i@psu.edu 204', '1998-02-02', '2-TRIAL- 153'),
('589314482821650077', '0-TRIAL-Vanya MacShirrie 191', '162-TRIAL-vmacshirrie25@weebly.com 155', '2000-12-29', '10-TRIAL- 59'),
('63045339046650815', 'Padriac Radbone', 'pradbonex@wikia.com', '1998-01-17', '8514376730'),
('6304706188927679', 'Shawnee Kellock', 'skellock10@dedecms.com', '2000-09-05', '9943804686'),
('6331101213933329864', '122-TRIAL-Odessa Winchcum 33', '273-TRIAL-owinchcum1m@i2i.jp 164', '1999-08-17', '141-TRIAL- 211'),
('633110982368124917', '38-TRIAL-Rudolph Conachie 179', '190-TRIAL-rconachie2j@uiuc.edu 257', '2000-12-29', '158-TRIAL- 191'),
('6333321016342391', '255-TRIAL-Chandal Duffit 274', '131-TRIAL-cduffit20@senate.gov 52', '1998-08-14', '50-TRIAL- 250'),
('6333670539673058', '201-TRIAL-Koral Petkov 189', '255-TRIAL-kpetkov2q@yandex.ru 223', '1998-11-17', '202-TRIAL- 85'),
('6378285343720668', 'Tresa Vowdon', 'tvowdonm@disqus.com', '1999-04-07', '2081302236'),
('6385130286085318', 'Dominique Pavelin', 'dpavelinq@vistaprint.com', '1999-04-26', '4123391687'),
('6759362965367737', '41-TRIAL-Nissie Rappa 167', '34-TRIAL-nrappa1f@nih.gov 100', '2000-09-24', '269-TRIAL- 124'),
('6762089970903991', 'Jaquith Water', 'jwater5@mtv.com', '1999-10-05', '3847331905'),
('676314996726471466', '237-TRIAL-Pamela Feldklein 259', '23-TRIAL-pfeldklein1o@unicef.org 141', '1999-10-26', '229-TRIAL- 178'),
('6763533583217694', 'Tanner Titlow', 'ttitlow1a@wired.com', '2000-02-05', '8036292787'),
('676788062286776575', 'Donni McLinden', 'dmclindenn@ted.com', '1999-05-30', '4972387800'),
('676789972127957623', '2-TRIAL-Josiah Rasmus 50', '91-TRIAL-jrasmus27@youtube.com 236', '1999-10-20', '74-TRIAL- 220'),
('67712841902659791', '24-TRIAL-Grady Auston 137', '248-TRIAL-gauston26@mail.ru 183', '1999-06-28', '295-TRIAL- 141');

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `no_resi` char(10) COLLATE utf8_bin NOT NULL,
  `id_pemesanan` char(10) COLLATE utf8_bin NOT NULL,
  `metode` text COLLATE utf8_bin NOT NULL,
  `ongkos` double(20,4) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `no_ktp_anggota` char(20) COLLATE utf8_bin NOT NULL,
  `nama_alamat_anggota` char(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`no_resi`, `id_pemesanan`, `metode`, `ongkos`, `tanggal`, `no_ktp_anggota`, `nama_alamat_anggota`) VALUES
('0055545327', '0557224284', 'Job', 36194.0000, '2018-01-19 17:00:00', '374283526007463', '09 Roxbury Street'),
('0265897912', '2154401473', 'Zontrax', 24281.0000, '2018-03-16 17:00:00', '6385130286085318', '87 Iowa Place'),
('2254897659', '6520356077', 'Lotstring', 15892.0000, '2018-12-29 17:00:00', '6378285343720668', '06266 Montana Parkway'),
('2511822768', '4176898259', 'Andalax', 34862.0000, '2018-01-10 17:00:00', '5588989835902738', '7 Del Sol Court'),
('3000251847', '5870512824', 'Lotlux', 25744.0000, '2019-07-11 17:00:00', '3540440821693685', '45367 Magdeline Drive'),
('4234963704', '7810762737', 'Prodder', 17251.0000, '2018-10-13 17:00:00', '5602242968227421397', '77783 David Road'),
('4297706512', '9764493645', 'Treeflex', 5962.0000, '2019-02-06 17:00:00', '3585246255089902', '71 Homewood Circle'),
('4713030554', '5954414491', 'Flowdesk', 21159.0000, '2018-09-14 17:00:00', '676788062286776575', '70 Meadow Ridge Court'),
('4976420094', '9994681648', 'Home Ing', 43082.0000, '2018-07-09 17:00:00', '3575662246414953', '37 Starling Avenue'),
('5165810038', '5848184275', 'Zaam-Dox', 30703.0000, '2018-09-07 17:00:00', '490348652352539094', '1 Montana Drive'),
('5356090234', '8543447461', 'Kanlam', 32147.0000, '2019-10-16 17:00:00', '502093976312017985', '7796 Carberry Avenue'),
('5482618153', '5587899829', 'Transcof', 24705.0000, '2019-11-25 17:00:00', '3577513565084836', '6 Westerfield Court'),
('5578148441', '2730743308', 'Konklux', 33008.0000, '2019-03-30 17:00:00', '3529198427466212', '20 Clove Place'),
('6111472410', '9452950668', 'Zoolab', 6711.0000, '2019-07-18 17:00:00', '3537718505350648', '22661 Morrow Hill'),
('6225662480', '2890780074', 'Domainer', 23166.0000, '2018-02-26 17:00:00', '3579130872121983', '401 Hoard Way'),
('6311537249', '2731722746', 'Wrapsafe', 14952.0000, '2019-11-12 17:00:00', '4936950340247883391', '154 Mccormick Center'),
('6871639268', '6259901984', 'Keylex', 42243.0000, '2019-08-23 17:00:00', '5002355146906560', '1 Hooker Parkway'),
('7190205195', '1129390225', 'Asoka', 19754.0000, '2019-06-28 17:00:00', '3580398213881261', '57596 Haas Court'),
('7350391617', '4857037246', 'Job', 36076.0000, '2018-01-14 17:00:00', '3569188677171787', '561 Oneill Avenue'),
('8597518693', '0055281176', 'Lotstring', 22419.0000, '2018-10-26 17:00:00', '3532759816062121', '3359 Tony Way');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `nama` char(50) COLLATE utf8_bin NOT NULL,
  `deskripsi` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`nama`, `deskripsi`) VALUES
('batal', 'pemesanan atau barang pesanan batal'),
('dalam masa sewa', 'pemesanan atau barang pesanan  dalam masa sewa'),
('menunggu pembayaran', 'pemesanan menunggu pembayaran'),
('sedang dikirim', 'pemesanan atau barang pesanan  sedang dikirim'),
('sedang dikonfirmasi', 'pemesanan atau barang pesanan sedang dikonfirmasi'),
('sedang disiapkan', 'pemesanan atau barang pesanan  sedang disiapkan'),
('sudah dikembalikan', 'pemesanan atau barang pesanan  sudah dikembalikan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`no_ktp`),
  ADD KEY `admin_no_ktp_fkey` (`no_ktp`);

--
-- Indexes for table `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`nama`,`no_ktp_anggota`),
  ADD KEY `alamat_no_ktp_anggota_fkey` (`no_ktp_anggota`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`no_ktp`),
  ADD KEY `anggota_level_fkey` (`level`),
  ADD KEY `anggota_no_ktp_fkey` (`no_ktp`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `barang_nama_item_fkey` (`nama_item`),
  ADD KEY `barang_no_ktp_penyewa_fkey` (`no_ktp_penyewa`);

--
-- Indexes for table `barang_dikembalikan`
--
ALTER TABLE `barang_dikembalikan`
  ADD PRIMARY KEY (`no_urut`,`no_resi`),
  ADD KEY `id_barang_dikembalikan_fkey` (`id_barang`),
  ADD KEY `id_no_resi_fkey` (`no_resi`);

--
-- Indexes for table `barang_dikirim`
--
ALTER TABLE `barang_dikirim`
  ADD PRIMARY KEY (`no_urut`,`no_resi`),
  ADD KEY `barang_dikirim_no_resi_fkey` (`no_resi`),
  ADD KEY `id_barang_dikirim_fkey` (`id_barang`);

--
-- Indexes for table `barang_pesanan`
--
ALTER TABLE `barang_pesanan`
  ADD PRIMARY KEY (`no_urut`,`id_pemesanan`),
  ADD KEY `barang_pesanan_id_pemesanan_fkey` (`id_pemesanan`),
  ADD KEY `barang_pesanan_nama_status_fkey` (`nama_status`),
  ADD KEY `id_barang_fkey` (`id_barang`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chat_no_ktp_admin_fkey` (`no_ktp_admin`),
  ADD KEY `chat_no_ktp_anggota_fkey` (`no_ktp_anggota`);

--
-- Indexes for table `info_barang_level`
--
ALTER TABLE `info_barang_level`
  ADD PRIMARY KEY (`nama_level`,`id_barang`),
  ADD KEY `info_barang_level_id_barang_fkey` (`id_barang`),
  ADD KEY `info_barang_level_nama_level_fkey` (`nama_level`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`nama`),
  ADD KEY `sub_dari` (`sub_dari`);

--
-- Indexes for table `kategori_item`
--
ALTER TABLE `kategori_item`
  ADD PRIMARY KEY (`nama_kategori`,`nama_item`),
  ADD KEY `kategori_item_nama_item_fkey` (`nama_item`),
  ADD KEY `kategori_item_nama_kategori_fkey` (`nama_kategori`);

--
-- Indexes for table `level_keanggotaan`
--
ALTER TABLE `level_keanggotaan`
  ADD PRIMARY KEY (`nama_level`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `pemesanan_no_ktp_pemesan_fkey` (`no_ktp_pemesan`),
  ADD KEY `pemesanan_status_fkey` (`status`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`no_resi`),
  ADD KEY `id_pemesanan_pengembalian_fkey` (`id_pemesanan`),
  ADD KEY `ktp_anggota_pengembalian_fkey` (`no_ktp_anggota`),
  ADD KEY `pengembalian_no_resi_fkey` (`no_resi`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`no_ktp`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`no_resi`),
  ADD KEY `id_pemesanan_fkey` (`id_pemesanan`),
  ADD KEY `ktp_anggota_fkey` (`no_ktp_anggota`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`nama`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_no_ktp_fkey` FOREIGN KEY (`no_ktp`) REFERENCES `pengguna` (`no_ktp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `alamat`
--
ALTER TABLE `alamat`
  ADD CONSTRAINT `alamat_no_ktp_anggota_fkey` FOREIGN KEY (`no_ktp_anggota`) REFERENCES `anggota` (`no_ktp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `anggota_level_fkey` FOREIGN KEY (`level`) REFERENCES `level_keanggotaan` (`nama_level`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `anggota_no_ktp_fkey` FOREIGN KEY (`no_ktp`) REFERENCES `pengguna` (`no_ktp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_nama_item_fkey` FOREIGN KEY (`nama_item`) REFERENCES `item` (`nama`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `barang_no_ktp_penyewa_fkey` FOREIGN KEY (`no_ktp_penyewa`) REFERENCES `anggota` (`no_ktp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `barang_dikembalikan`
--
ALTER TABLE `barang_dikembalikan`
  ADD CONSTRAINT `id_barang_dikembalikan_fkey` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_no_resi_fkey` FOREIGN KEY (`no_resi`) REFERENCES `pengembalian` (`no_resi`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `barang_dikirim`
--
ALTER TABLE `barang_dikirim`
  ADD CONSTRAINT `barang_dikirim_no_resi_fkey` FOREIGN KEY (`no_resi`) REFERENCES `pengiriman` (`no_resi`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_barang_dikirim_fkey` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `barang_pesanan`
--
ALTER TABLE `barang_pesanan`
  ADD CONSTRAINT `barang_pesanan_id_pemesanan_fkey` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `barang_pesanan_nama_status_fkey` FOREIGN KEY (`nama_status`) REFERENCES `status` (`nama`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_barang_fkey` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_no_ktp_admin_fkey` FOREIGN KEY (`no_ktp_admin`) REFERENCES `admin` (`no_ktp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chat_no_ktp_anggota_fkey` FOREIGN KEY (`no_ktp_anggota`) REFERENCES `anggota` (`no_ktp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `info_barang_level`
--
ALTER TABLE `info_barang_level`
  ADD CONSTRAINT `info_barang_level_id_barang_fkey` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `info_barang_level_nama_level_fkey` FOREIGN KEY (`nama_level`) REFERENCES `level_keanggotaan` (`nama_level`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `kategori`
--
ALTER TABLE `kategori`
  ADD CONSTRAINT `kategori_ibfk_1` FOREIGN KEY (`sub_dari`) REFERENCES `kategori` (`nama`);

--
-- Constraints for table `kategori_item`
--
ALTER TABLE `kategori_item`
  ADD CONSTRAINT `kategori_item_nama_item_fkey` FOREIGN KEY (`nama_item`) REFERENCES `item` (`nama`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kategori_item_nama_kategori_fkey` FOREIGN KEY (`nama_kategori`) REFERENCES `kategori` (`nama`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_no_ktp_pemesan_fkey` FOREIGN KEY (`no_ktp_pemesan`) REFERENCES `anggota` (`no_ktp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanan_status_fkey` FOREIGN KEY (`status`) REFERENCES `status` (`nama`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD CONSTRAINT `id_pemesanan_pengembalian_fkey` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ktp_anggota_pengembalian_fkey` FOREIGN KEY (`no_ktp_anggota`) REFERENCES `alamat` (`no_ktp_anggota`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pengembalian_no_resi_fkey` FOREIGN KEY (`no_resi`) REFERENCES `pengiriman` (`no_resi`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD CONSTRAINT `id_pemesanan_fkey` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ktp_anggota_fkey` FOREIGN KEY (`no_ktp_anggota`) REFERENCES `alamat` (`no_ktp_anggota`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
