/*
SQLyog Ultimate v12.5.1 (32 bit)
MySQL - 10.4.19-MariaDB : Database - bidang2
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bidang2` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `bidang2`;

/*Table structure for table `pie` */

DROP TABLE IF EXISTS `pie`;

CREATE TABLE `pie` (
  `id_bencana` varchar(128) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nama_bencana` varchar(256) NOT NULL,
  `warna` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `pie` */

insert  into `pie`(`id_bencana`,`jumlah`,`nama_bencana`,`warna`) values 
('1',3,'Banjir','#4583ff'),
('2',6,'Longsor','#ff0202'),
('3',0,'Gempa bumi','#02ff1a'),
('4',1,'Cuaca Ekstrim\r\n','#00c0ef\r\n'),
('5',0,'Kekeringan\r\n','#3c8dbc\r\n'),
('6',1,'Kebakaran Hutan Lahan\r\n','#d2d6de\r\n'),
('7',0,'Kegagalan Teknologi\r\n','#6734eb\r\n'),
('8',1,'Epidemi Wabah Penyakit\r\n','#eb34bd\r\n'),
('9',1,'Konflik Sosial\r\n','#7FFFD4\r\n'),
('10',1,'Tsunami\r\n','#7FFF00\r\n'),
('11',1,'Gelombang Ekstrim dan Abrasi\r\n','#BDB76B\r\n');

/*Table structure for table `tb_akses` */

DROP TABLE IF EXISTS `tb_akses`;

CREATE TABLE `tb_akses` (
  `id_akses` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  PRIMARY KEY (`id_akses`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_akses` */

insert  into `tb_akses`(`id_akses`,`menu_id`,`level_id`) values 
(1,1,1),
(2,2,2);

/*Table structure for table `tb_bencana` */

DROP TABLE IF EXISTS `tb_bencana`;

CREATE TABLE `tb_bencana` (
  `id_bencana` int(15) NOT NULL AUTO_INCREMENT,
  `nama_bencana` varchar(150) NOT NULL,
  `warna` varchar(150) NOT NULL,
  PRIMARY KEY (`id_bencana`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_bencana` */

insert  into `tb_bencana`(`id_bencana`,`nama_bencana`,`warna`) values 
(1,'Banjir','#4583ff\r\n	'),
(2,'Longsor','#ff0202'),
(3,'Gempa bumi','#02ff1a'),
(4,'Cuaca Ekstrim\r\n','#00c0ef\r\n'),
(5,'Kekeringan\r\n','#3c8dbc\r\n'),
(6,'Kebakaran Hutan Lahan\r\n','#d2d6de\r\n'),
(7,'Kegagalan Teknologi\r\n','#6734eb\r\n'),
(8,'Epidemi Wabah Penyakit\r\n','#eb34bd\r\n'),
(9,'Konflik Sosial\r\n','#7FFFD4\r\n'),
(10,'Tsunami\r\n','#7FFF00\r\n'),
(11,'Gelombang Ekstrim dan Abrasi\r\n','#BDB76B\r\n');

/*Table structure for table `tb_desa` */

DROP TABLE IF EXISTS `tb_desa`;

CREATE TABLE `tb_desa` (
  `id_desa` varchar(20) DEFAULT NULL,
  `id_kecamatan` int(20) DEFAULT NULL,
  `nama` varchar(155) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_desa` */

insert  into `tb_desa`(`id_desa`,`id_kecamatan`,`nama`) values 
('3301010001',3301010,'Panulisan Barat'),
('3301010002',3301010,'Panulisan'),
('3301010003',3301010,'Panulisan Timur'),
('3301010004',3301010,'Matenggeng'),
('3301010005',3301010,'Ciwalen'),
('3301010006',3301010,'Dayeuhluhur'),
('3301010007',3301010,'Hanum'),
('3301010008',3301010,'Datar'),
('3301010009',3301010,'Bingkeng'),
('3301010010',3301010,'Bolang'),
('3301010011',3301010,'Kutaagung'),
('3301010012',3301010,'Cijeruk'),
('3301010013',3301010,'Cilumping'),
('3301010014',3301010,'Sumpinghayu'),
('3301020001',3301020,'Purwasari'),
('3301020002',3301020,'Cilongkrang'),
('3301020003',3301020,'Tarisi'),
('3301020004',3301020,'Bantar'),
('3301020005',3301020,'Sidamulya'),
('3301020006',3301020,'Adimulya'),
('3301020007',3301020,'Wanareja'),
('3301020008',3301020,'Madura'),
('3301020009',3301020,'Madusari'),
('3301020010',3301020,'Tambaksari'),
('3301020011',3301020,'Majingklak'),
('3301020012',3301020,'Malabar'),
('3301020013',3301020,'Limbangan'),
('3301020014',3301020,'Cigintung'),
('3301020015',3301020,'Palugon'),
('3301020016',3301020,'Jambu'),
('3301030001',3301030,'Pahonjean'),
('3301030002',3301030,'Mulyadadi'),
('3301030003',3301030,'Mulyasari'),
('3301030004',3301030,'Padangsari'),
('3301030005',3301030,'Cilopadang'),
('3301030006',3301030,'Padangjaya'),
('3301030007',3301030,'Sindangsari'),
('3301030008',3301030,'Jenang'),
('3301030009',3301030,'Salebu'),
('3301030010',3301030,'Cibeunying'),
('3301030011',3301030,'Sepatnunggal'),
('3301030012',3301030,'Bener'),
('3301030013',3301030,'Boja'),
('3301030014',3301030,'Ujungbarang'),
('3301030015',3301030,'Pengadegan'),
('3301030016',3301030,'Sadabumi'),
('3301030017',3301030,'Sadahayu'),
('3301040001',3301040,'Karangreja'),
('3301040002',3301040,'Cimanggu'),
('3301040003',3301040,'Bantarpanjang'),
('3301040004',3301040,'Panimbang'),
('3301040005',3301040,'Mandala'),
('3301040006',3301040,'Bantarmangu'),
('3301040007',3301040,'Cilempuyang'),
('3301040008',3301040,'Rejodadi'),
('3301040009',3301040,'Negarajati'),
('3301040010',3301040,'Cisalak'),
('3301040011',3301040,'Cibalung'),
('3301040012',3301040,'Karangsari'),
('3301040013',3301040,'Kutabima'),
('3301040014',3301040,'Pesahangan'),
('3301040015',3301040,'Cijati'),
('3301050001',3301050,'Cidadap'),
('3301050002',3301050,'Pengawaren'),
('3301050003',3301050,'Gunungtelu'),
('3301050004',3301050,'Sindangbarang'),
('3301050005',3301050,'Karangpucung'),
('3301050006',3301050,'Tayemtimur'),
('3301050007',3301050,'Tayem'),
('3301050008',3301050,'Ciporos'),
('3301050009',3301050,'Surusunda'),
('3301050010',3301050,'Bengbulang'),
('3301050011',3301050,'Sidamulya'),
('3301050012',3301050,'Ciruyung'),
('3301050013',3301050,'Pamulihan'),
('3301050014',3301050,'Babakan'),
('3301060001',3301060,'Serang'),
('3301060002',3301060,'Mulyadadi'),
('3301060003',3301060,'Cipari'),
('3301060004',3301060,'Segaralangu'),
('3301060005',3301060,'Karangreja'),
('3301060006',3301060,'Kutasari'),
('3301060007',3301060,'Pegadingan'),
('3301060008',3301060,'Cisuru'),
('3301060009',3301060,'Mekarsari'),
('3301060010',3301060,'Sidasari'),
('3301060011',3301060,'Caruy'),
('3301070001',3301070,'Tegalsari'),
('3301070002',3301070,'Margasari'),
('3301070003',3301070,'Tinggarjaya'),
('3301070004',3301070,'Gunungreja'),
('3301070005',3301070,'Sidareja'),
('3301070006',3301070,'Sidamulya'),
('3301070007',3301070,'Sudagaran'),
('3301070008',3301070,'Kunci'),
('3301070009',3301070,'Karanggedang'),
('3301070010',3301070,'Penyarang'),
('3301080001',3301080,'Sidanegara'),
('3301080002',3301080,'Tambakreja'),
('3301080003',3301080,'Kaliwungu'),
('3301080004',3301080,'Bumireja'),
('3301080005',3301080,'Jatisari'),
('3301080006',3301080,'Ciklapa'),
('3301080007',3301080,'Bangunreja'),
('3301080008',3301080,'Kedungreja'),
('3301080009',3301080,'Tambaksari'),
('3301080010',3301080,'Rejamulya'),
('3301080011',3301080,'Bojongsari'),
('3301090001',3301090,'Rawaapu'),
('3301090002',3301090,'Sidamukti'),
('3301090003',3301090,'Purwodadi'),
('3301090004',3301090,'Cimrutu'),
('3301090005',3301090,'Patimuan'),
('3301090006',3301090,'Cinyawang'),
('3301090007',3301090,'Bulupayung'),
('3301100001',3301100,'Cisumur'),
('3301100002',3301100,'Sidaurip'),
('3301100003',3301100,'Gintungreja'),
('3301100004',3301100,'Layansari'),
('3301100005',3301100,'Gandrungmanis'),
('3301100006',3301100,'Bulusari'),
('3301100007',3301100,'Gandrungmangu'),
('3301100008',3301100,'Wringinharjo'),
('3301100009',3301100,'Karanganyar'),
('3301100010',3301100,'Muktisari'),
('3301100011',3301100,'Kertajaya'),
('3301100012',3301100,'Cinangsi'),
('3301100013',3301100,'Karanggintung'),
('3301100014',3301100,'Rungkang'),
('3301110001',3301110,'Bantarsari'),
('3301110002',3301110,'Rawajaya'),
('3301110003',3301110,'Binangun'),
('3301110004',3301110,'Bulaksari'),
('3301110005',3301110,'Kamulyan'),
('3301110006',3301110,'Cikedondong'),
('3301110007',3301110,'Kedungwadas'),
('3301110008',3301110,'Citembong'),
('3301120004',3301120,'Grugu'),
('3301120005',3301120,'Bringkeng'),
('3301120006',3301120,'Ujungmanik'),
('3301120007',3301120,'Kubangkangkung'),
('3301120008',3301120,'Bojong'),
('3301120009',3301120,'Kawunganten'),
('3301120010',3301120,'Kawunganten Lor'),
('3301120011',3301120,'Sarwadadi'),
('3301120012',3301120,'Kalijeruk'),
('3301120013',3301120,'Mentasan'),
('3301120015',3301120,'Sidaurip'),
('3301120016',3301120,'Babakan'),
('3301121001',3301121,'Ujunggagak'),
('3301121002',3301121,'Klaces'),
('3301121003',3301121,'Ujungalang'),
('3301121004',3301121,'Panikel'),
('3301130001',3301130,'Brebeg'),
('3301130002',3301130,'Tritih Wetan'),
('3301130003',3301130,'Tritih Lor'),
('3301130004',3301130,'Sumingkir'),
('3301130005',3301130,'Jeruklegi Wetan'),
('3301130006',3301130,'Jeruklegi Kulon'),
('3301130007',3301130,'Sawangan'),
('3301130008',3301130,'Cilibang'),
('3301130009',3301130,'Mendala'),
('3301130010',3301130,'Karangkemiri'),
('3301130011',3301130,'Jambusari'),
('3301130012',3301130,'Prapagan'),
('3301130013',3301130,'Citepus'),
('3301140001',3301140,'Menganti'),
('3301140002',3301140,'Karangkandri'),
('3301140003',3301140,'Slarang'),
('3301140004',3301140,'Kesugihan Kidul'),
('3301140005',3301140,'Kesugihan'),
('3301140006',3301140,'Kalisabuk'),
('3301140007',3301140,'Kuripan Kidul'),
('3301140008',3301140,'Kuripan'),
('3301140009',3301140,'Jangrana'),
('3301140010',3301140,'Planjan'),
('3301140011',3301140,'Dondong'),
('3301140012',3301140,'Ciwuni'),
('3301140013',3301140,'Karangjengkol'),
('3301140014',3301140,'Keleng'),
('3301140015',3301140,'Pesanggrahan'),
('3301140016',3301140,'Bulupayung'),
('3301150001',3301150,'Gombolharjo'),
('3301150002',3301150,'Wlahar'),
('3301150003',3301150,'Bunton'),
('3301150004',3301150,'Karanganyar'),
('3301150005',3301150,'Karangbenda'),
('3301150006',3301150,'Pedasong'),
('3301150007',3301150,'Glempangpasir'),
('3301150008',3301150,'Welahan Wetan'),
('3301150009',3301150,'Adiraja'),
('3301150010',3301150,'Adireja Wetan'),
('3301150011',3301150,'Adireja Kulon'),
('3301150012',3301150,'Adipala'),
('3301150013',3301150,'Penggalang'),
('3301150014',3301150,'Karangsari'),
('3301150015',3301150,'Kalikudi'),
('3301150016',3301150,'Doplang'),
('3301160001',3301160,'Karangkemiri'),
('3301160002',3301160,'Karangreja'),
('3301160003',3301160,'Klapagada'),
('3301160004',3301160,'Karangrena'),
('3301160005',3301160,'Maos Kidul'),
('3301160006',3301160,'Maos Lor'),
('3301160007',3301160,'Kalijaran'),
('3301160008',3301160,'Mernek'),
('3301160009',3301160,'Penisihan'),
('3301160010',3301160,'Glempang'),
('3301170001',3301170,'Paketingan'),
('3301170002',3301170,'Ketanggung'),
('3301170003',3301170,'Nusajati'),
('3301170004',3301170,'Paberasan'),
('3301170005',3301170,'Karangjati'),
('3301170006',3301170,'Sidasari'),
('3301170007',3301170,'Karangasem'),
('3301170008',3301170,'Sampang'),
('3301170009',3301170,'Karangtengah'),
('3301170010',3301170,'B R A N I'),
('3301180001',3301180,'Sikampuh'),
('3301180002',3301180,'Karangturi'),
('3301180003',3301180,'Ayamalas'),
('3301180004',3301180,'Karangmangu'),
('3301180005',3301180,'Pucung Kidul'),
('3301180006',3301180,'Mergawati'),
('3301180007',3301180,'Pucung Lor'),
('3301180008',3301180,'Bajing'),
('3301180009',3301180,'Kroya'),
('3301180010',3301180,'Pesanggrahan'),
('3301180011',3301180,'Pekuncen'),
('3301180012',3301180,'Bajing Kulon'),
('3301180013',3301180,'Kedawung'),
('3301180014',3301180,'Mujur'),
('3301180015',3301180,'Gentasari'),
('3301180016',3301180,'Mujur Lor'),
('3301180017',3301180,'Buntu'),
('3301190001',3301190,'Widarapayung Kulon'),
('3301190002',3301190,'Sidayu'),
('3301190003',3301190,'Widarapayung Wetan'),
('3301190004',3301190,'Sidaurip'),
('3301190005',3301190,'Pagubugan Kulon'),
('3301190006',3301190,'Pagubugan'),
('3301190007',3301190,'Karangnangka'),
('3301190008',3301190,'Kemojing'),
('3301190009',3301190,'Pesawahan'),
('3301190010',3301190,'Pasuruhan'),
('3301190011',3301190,'Alangamba'),
('3301190012',3301190,'Binangun'),
('3301190013',3301190,'Bangkal'),
('3301190014',3301190,'Jepara Wetan'),
('3301190015',3301190,'Jepara Kulon'),
('3301190016',3301190,'Kepudang'),
('3301190017',3301190,'Jati'),
('3301200001',3301200,'Karangtawang'),
('3301200002',3301200,'Karangpakis'),
('3301200003',3301200,'Banjarsari'),
('3301200004',3301200,'Jetis'),
('3301200005',3301200,'Banjareja'),
('3301200006',3301200,'Kedungbenda'),
('3301200007',3301200,'Klumprit'),
('3301200008',3301200,'Karangsembung'),
('3301200009',3301200,'Purwadadi'),
('3301200010',3301200,'Nusawangkal'),
('3301200011',3301200,'Karangputat'),
('3301200012',3301200,'Banjarwaru'),
('3301200013',3301200,'Danasri'),
('3301200014',3301200,'Danasri Kidul'),
('3301200015',3301200,'Nusawungu'),
('3301200016',3301200,'Danasri Lor'),
('3301200017',3301200,'Sikanco'),
('3301710001',3301710,'Tambakreja'),
('3301710002',3301710,'Tegalrejo'),
('3301710003',3301710,'Sidakaya'),
('3301710004',3301710,'Cilacap'),
('3301710005',3301710,'Tegalkamulyan'),
('3301720001',3301720,'Kutawaru'),
('3301720002',3301720,'Lomanis'),
('3301720003',3301720,'Donan'),
('3301720004',3301720,'Sidanegara'),
('3301720005',3301720,'Gunungsimping'),
('3301730001',3301730,'Kebonmanis'),
('3301730002',3301730,'Gumilir'),
('3301730003',3301730,'Mertasinga'),
('3301730004',3301730,'Tritih Kulon'),
('3301730005',3301730,'Karangtalun');

/*Table structure for table `tb_fasilitasu` */

DROP TABLE IF EXISTS `tb_fasilitasu`;

CREATE TABLE `tb_fasilitasu` (
  `id_lapfa` int(15) NOT NULL AUTO_INCREMENT,
  `id_laporan` varchar(50) DEFAULT NULL,
  `gedung` int(15) DEFAULT 0,
  `sekolah` int(15) DEFAULT 0,
  `rumah_makan` int(15) DEFAULT 0,
  `masjid` int(15) DEFAULT 0,
  `tanggul_sungai` int(15) DEFAULT 0,
  `puskesmas` int(15) DEFAULT 0,
  `jembatan` int(15) DEFAULT 0,
  `jalan_nas` int(15) DEFAULT 0,
  `jalan_kab` int(15) DEFAULT 0,
  `turab_jalan` int(15) DEFAULT 0,
  `bendungan` int(15) DEFAULT 0,
  `jalan_des` int(15) DEFAULT 0,
  PRIMARY KEY (`id_lapfa`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `tb_fasilitasu` */

insert  into `tb_fasilitasu`(`id_lapfa`,`id_laporan`,`gedung`,`sekolah`,`rumah_makan`,`masjid`,`tanggul_sungai`,`puskesmas`,`jembatan`,`jalan_nas`,`jalan_kab`,`turab_jalan`,`bendungan`,`jalan_des`) values 
(3,'MJG-001',0,4,0,0,0,0,0,0,0,0,0,0),
(6,'MJG-002',2,6,0,0,0,3,0,0,0,0,0,0),
(7,'MJG-003',1,0,0,0,0,0,0,0,0,0,0,0),
(8,'MJG-004',0,2,0,0,0,0,5,0,0,0,0,0),
(9,'MJG-005',1,0,0,0,0,0,0,0,0,0,0,0),
(10,'KRY-001',3,0,0,0,0,0,0,0,0,0,0,0),
(11,'KRY-002',1,0,0,0,0,0,0,0,0,0,0,0),
(12,'KRY-003',2,0,0,0,0,0,0,0,0,0,0,0),
(13,'KRY-004',0,0,0,0,0,0,0,0,0,0,0,8),
(14,'MJG-006',0,0,0,0,0,0,0,0,0,0,0,0),
(15,'MJG-007',0,0,0,0,0,0,0,0,0,0,0,0),
(16,'MJG-008',0,0,0,0,0,0,0,0,0,0,0,0),
(17,'MJG-009',0,0,0,0,0,0,0,0,0,0,0,0);

/*Table structure for table `tb_kecamatan` */

DROP TABLE IF EXISTS `tb_kecamatan`;

CREATE TABLE `tb_kecamatan` (
  `id_kecamatan` int(20) NOT NULL,
  `nama_kecamatan` varchar(155) DEFAULT NULL,
  PRIMARY KEY (`id_kecamatan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_kecamatan` */

insert  into `tb_kecamatan`(`id_kecamatan`,`nama_kecamatan`) values 
(3301010,' Dayeuhluhur'),
(3301020,' Wanareja'),
(3301030,' Majenang'),
(3301040,' Cimanggu'),
(3301050,' Karangpucung'),
(3301060,' Cipari'),
(3301070,' Sidareja'),
(3301080,' Kedungreja'),
(3301090,' Patimuan'),
(3301100,' Gandrungmangu'),
(3301110,' Bantarsari'),
(3301120,' Kawunganten'),
(3301121,' Kampung Laut'),
(3301130,' Jeruklegi'),
(3301140,' Kesugihan'),
(3301150,' Adipala'),
(3301160,' Maos'),
(3301170,' Sampang'),
(3301180,' Kroya'),
(3301190,' Binangun'),
(3301200,' Nusawungu'),
(3301710,' Cilacap Selatan'),
(3301720,' Cilacap Tengah'),
(3301730,' Cilacap Utara');

/*Table structure for table `tb_korban` */

DROP TABLE IF EXISTS `tb_korban`;

CREATE TABLE `tb_korban` (
  `id_lapkob` int(15) NOT NULL AUTO_INCREMENT,
  `id_laporan` varchar(50) DEFAULT NULL,
  `mnggl_dunia` int(50) DEFAULT 0,
  `luka_ring` int(50) DEFAULT 0,
  `luka_ber` int(50) DEFAULT 0,
  PRIMARY KEY (`id_lapkob`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `tb_korban` */

insert  into `tb_korban`(`id_lapkob`,`id_laporan`,`mnggl_dunia`,`luka_ring`,`luka_ber`) values 
(2,'KRY-001',0,0,4),
(3,'MJG-001',0,5,0),
(4,'KRY-002',0,0,6),
(5,'KRY-003',7,0,8),
(6,'MJG-002',0,10,2),
(7,'MJG-003',0,7,0),
(8,'MJG-004',0,0,4),
(9,'MJG-005',0,0,6),
(10,'KRY-001',0,6,0),
(11,'KRY-002',0,0,0),
(12,'KRY-003',0,0,0),
(13,'KRY-004',0,0,0),
(14,'MJG-006',0,0,0),
(15,'MJG-007',0,0,0),
(16,'MJG-008',0,0,0),
(17,'MJG-009',0,0,0);

/*Table structure for table `tb_lainya` */

DROP TABLE IF EXISTS `tb_lainya`;

CREATE TABLE `tb_lainya` (
  `id_lapla` int(15) NOT NULL AUTO_INCREMENT,
  `id_laporan` varchar(50) DEFAULT NULL,
  `saluran_irigasi` int(15) DEFAULT 0,
  `tebing` int(15) DEFAULT 0,
  `sawah` int(15) DEFAULT 0,
  `perkebunan` int(15) DEFAULT 0,
  `tambak` int(15) DEFAULT 0,
  `talud` int(15) DEFAULT 0,
  `pasar` int(15) DEFAULT 0,
  `pergerakan_tnh` int(15) DEFAULT 0,
  `pengungsi_jiwa` int(15) DEFAULT 0,
  `pengungsi_kk` int(15) DEFAULT 0,
  PRIMARY KEY (`id_lapla`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `tb_lainya` */

insert  into `tb_lainya`(`id_lapla`,`id_laporan`,`saluran_irigasi`,`tebing`,`sawah`,`perkebunan`,`tambak`,`talud`,`pasar`,`pergerakan_tnh`,`pengungsi_jiwa`,`pengungsi_kk`) values 
(3,'MJG-001',0,4,0,0,0,0,0,0,0,0),
(6,'MJG-002',6,0,1,2,0,0,0,0,0,0),
(7,'MJG-003',0,1,0,0,0,0,0,0,0,0),
(8,'MJG-004',0,0,2,0,0,0,0,3,0,0),
(9,'MJG-005',0,2,0,0,0,0,0,0,0,0),
(10,'KRY-001',0,2,0,0,0,0,0,0,0,0),
(11,'KRY-002',0,2,0,0,0,0,0,0,0,0),
(12,'KRY-003',0,0,0,0,0,0,0,0,0,0),
(13,'KRY-004',0,0,0,0,0,0,0,0,0,9),
(14,'MJG-006',0,0,0,0,0,0,0,0,0,0),
(15,'MJG-007',0,0,0,0,0,0,0,0,0,0),
(16,'MJG-008',0,0,0,0,0,0,0,0,0,0),
(17,'MJG-009',0,0,0,0,0,0,0,0,0,0);

/*Table structure for table `tb_laporan` */

DROP TABLE IF EXISTS `tb_laporan`;

CREATE TABLE `tb_laporan` (
  `id_laporan` varchar(50) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_kecamatan` int(20) DEFAULT NULL,
  `id_desa` varchar(20) DEFAULT NULL,
  `id_bencana` int(15) DEFAULT NULL,
  `tanggal_kejadian` date DEFAULT NULL,
  `jumlah_kerugian` varchar(150) DEFAULT NULL,
  `waktu_kejadian` time DEFAULT NULL,
  `kordinat` varchar(150) DEFAULT NULL,
  `foto_kejadian` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_laporan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_laporan` */

insert  into `tb_laporan`(`id_laporan`,`id_user`,`id_kecamatan`,`id_desa`,`id_bencana`,`tanggal_kejadian`,`jumlah_kerugian`,`waktu_kejadian`,`kordinat`,`foto_kejadian`) values 
('KRY-001',7,3301180,'3301180002',1,'2021-03-30','800000000',NULL,'4444777',''),
('KRY-002',7,3301170,'3301170003',2,'2021-04-14','2147483647',NULL,'2416-63737','WhatsApp_Image_2021-03-16_at_2_58_33_PM1.jpeg'),
('KRY-003',7,3301040,'3301040005',2,'2021-05-24','0',NULL,'576575656','pexels-ákos-szabó-440731.jpg'),
('KRY-004',7,3301050,'3301050004',10,'2021-05-24','0',NULL,'6657768678686','Level.png'),
('MJG-001',5,3301030,'3301030005',2,'2021-02-11','25622562','07:00:00','44466mo',NULL),
('MJG-002',5,3301040,'3301040004',2,'2021-02-23','70000000','00:15:00','4452-112442','Trees-22.jpg'),
('MJG-003',5,3301030,'3301030005',2,'2021-03-23','19000000',NULL,'4452-112442','WhatsApp_Image_2021-03-16_at_2_58_33_PM.jpeg'),
('MJG-004',5,3301040,'3301040005',2,'2021-03-24','78000000',NULL,'4452-112',''),
('MJG-005',5,3301030,'3301030003',4,'2021-03-25','678000000',NULL,'445242','WhatsApp_Image_2021-02-26_at_2_15_15_PM.jpeg'),
('MJG-006',5,3301040,'3301040013',11,'2021-05-25',NULL,NULL,'5456646','when_klik_marker.png'),
('MJG-007',5,3301030,'3301030004',9,'2021-05-18','0',NULL,'8979','barwang.jpg'),
('MJG-008',5,3301010,'3301010003',8,'2021-05-25','0',NULL,'4656464646','detail_tmp_evakuasi_copy.png'),
('MJG-009',5,3301050,'3301050005',6,'2021-05-25','Rp. 9.000',NULL,'9877969','home.png');

/*Table structure for table `tb_level` */

DROP TABLE IF EXISTS `tb_level`;

CREATE TABLE `tb_level` (
  `id_level` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(24) NOT NULL,
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tb_level` */

insert  into `tb_level`(`id_level`,`level`) values 
(1,'Super Admin'),
(2,'Admin'),
(3,'Petugas Piket');

/*Table structure for table `tb_logbook` */

DROP TABLE IF EXISTS `tb_logbook`;

CREATE TABLE `tb_logbook` (
  `id_logbook` int(11) NOT NULL AUTO_INCREMENT,
  `koor_piket` varchar(256) DEFAULT NULL,
  `petugas_piket` varchar(256) DEFAULT NULL,
  `tgl_piket` date DEFAULT NULL,
  `jenis_bnc` varchar(256) DEFAULT NULL,
  `tgl_kejadian` date DEFAULT NULL,
  `waktu` time DEFAULT NULL,
  `lokasi` text DEFAULT NULL,
  `dampak` text DEFAULT NULL,
  `sumber_inf` text DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  PRIMARY KEY (`id_logbook`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_logbook` */

insert  into `tb_logbook`(`id_logbook`,`koor_piket`,`petugas_piket`,`tgl_piket`,`jenis_bnc`,`tgl_kejadian`,`waktu`,`lokasi`,`dampak`,`sumber_inf`,`keterangan`) values 
(1,'GGg','gdg','2021-04-14','Banjir','2021-04-14','01:00:00','agiaudgiabaibaidvbiu','aifbaifjbifnbif',NULL,'adgbhyjyjunku'),
(2,'Cahyo','Budiarto','2021-04-21','Kekeringan\r\n','2021-04-21','14:00:00','Adipala','Kekurangan air bersih','UPT Kroya','Upt kroya memberikan bantuan air bersih');

/*Table structure for table `tb_menu` */

DROP TABLE IF EXISTS `tb_menu`;

CREATE TABLE `tb_menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(32) NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_menu` */

insert  into `tb_menu`(`id_menu`,`menu`) values 
(1,'supadmin'),
(2,'admin');

/*Table structure for table `tb_rumah` */

DROP TABLE IF EXISTS `tb_rumah`;

CREATE TABLE `tb_rumah` (
  `id_lapru` int(15) NOT NULL AUTO_INCREMENT,
  `id_laporan` varchar(50) DEFAULT NULL,
  `roboh` int(15) DEFAULT 0,
  `rusak_ber` int(15) DEFAULT 0,
  `rusak_sed` int(15) DEFAULT 0,
  `rusak_ring` int(15) DEFAULT 0,
  `terendam` int(15) DEFAULT 0,
  `terancam` int(15) DEFAULT 0,
  PRIMARY KEY (`id_lapru`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `tb_rumah` */

insert  into `tb_rumah`(`id_lapru`,`id_laporan`,`roboh`,`rusak_ber`,`rusak_sed`,`rusak_ring`,`terendam`,`terancam`) values 
(3,'MJG-001',9,2,4,5,8,6),
(8,'MJG-004',0,0,0,1,0,0),
(9,'MJG-005',0,0,3,0,0,0),
(10,'KRY-001',0,0,4,0,0,0),
(11,'KRY-002',0,0,1,0,0,0),
(12,'KRY-003',0,0,0,0,0,0),
(13,'KRY-004',0,0,0,0,0,0),
(14,'MJG-006',0,0,0,0,0,0),
(15,'MJG-007',0,0,0,0,0,0),
(16,'MJG-008',0,0,0,0,0,0),
(17,'MJG-009',0,0,0,0,0,0);

/*Table structure for table `tb_upt` */

DROP TABLE IF EXISTS `tb_upt`;

CREATE TABLE `tb_upt` (
  `id_upt` int(11) NOT NULL AUTO_INCREMENT,
  `nama_upt` varchar(64) NOT NULL,
  PRIMARY KEY (`id_upt`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tb_upt` */

insert  into `tb_upt`(`id_upt`,`nama_upt`) values 
(1,'Cilacap'),
(2,'Majenang'),
(3,'Kroya');

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `level_id` int(11) NOT NULL,
  `upt` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `kode` varchar(15) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `tb_user` */

insert  into `tb_user`(`id_user`,`nama_user`,`email`,`foto`,`password`,`level_id`,`upt`,`active`,`kode`) values 
(1,'Super Admin','supadmin@gmail.com','default-profile-picture1.jpg','$2y$10$r1Vsd.NKVH8.cchjnJgGBuM5Dbw2IQAPgjfC0pfkJeBFHeATHmJhi',1,1,1,'CLP'),
(5,'Upt Majenang','mjg@gmail.com','default-profile-picture1.jpg','$2y$10$r1Vsd.NKVH8.cchjnJgGBuM5Dbw2IQAPgjfC0pfkJeBFHeATHmJhi',2,2,1,'MJG'),
(7,'Upt Kroya','kroya@gmail.com','WhatsApp_Image_2021-02-26_at_2_15_15_PM.jpeg','$2y$10$LT2gV.aNjsyNri8lm3gS4eGhlu8fyofBSJCtdz0x1/unQLUOcWw6G',2,3,1,'KRY'),
(8,'Petugas Piket UPT Kroya','kroyapiket@gmail.com','WhatsApp_Image_2021-04-04_at_9_00_35_PM1.jpeg','$2y$10$BV/OtkwKchaefXsm6G.jEuhKE0RUebx0zXLxEuJR3fLziY9vnVuha',3,3,1,'KRY'),
(9,'Pusdalops','pusdalops@gmail.com','default-profile-picture1.jpg','$2y$10$T1Cg8Be22/upcaUQzG8uh.w0THuFWgRVqxLOXBt9vQf3qM2Zfdgk.',1,1,1,'CLP');

/* Trigger structure for table `tb_bencana` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `tambahbencana` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `tambahbencana` AFTER INSERT ON `tb_bencana` FOR EACH ROW BEGIN
INSERT into pie SET
id_bencana = new.id_bencana,
jumlah = 0,
nama_bencana = new.nama_bencana,
warna = new.warna;
END */$$


DELIMITER ;

/* Trigger structure for table `tb_laporan` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `jumlahbencana` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `jumlahbencana` AFTER INSERT ON `tb_laporan` FOR EACH ROW BEGIN
UPDATE pie SET
jumlah = jumlah + 1 WHERE new.id_bencana = id_bencana;
END */$$


DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
