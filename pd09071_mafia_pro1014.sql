-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: duan_1
-- ------------------------------------------------------
-- Server version	8.1.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `binh_luan`
--

DROP TABLE IF EXISTS `binh_luan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `binh_luan` (
  `ma_bl` int NOT NULL AUTO_INCREMENT,
  `noi_dung` text NOT NULL,
  `ngay_bl` date NOT NULL,
  `ma_sp` int NOT NULL,
  `ma_tk` varchar(255) NOT NULL,
  PRIMARY KEY (`ma_bl`),
  KEY `fk_bl_sp` (`ma_sp`),
  KEY `fk_bl_tk` (`ma_tk`),
  CONSTRAINT `fk_bl_sp` FOREIGN KEY (`ma_sp`) REFERENCES `san_pham` (`ma_sp`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_bl_tk` FOREIGN KEY (`ma_tk`) REFERENCES `tai_khoan` (`ma_tk`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `binh_luan`
--

LOCK TABLES `binh_luan` WRITE;
/*!40000 ALTER TABLE `binh_luan` DISABLE KEYS */;
INSERT INTO `binh_luan` VALUES (2,'Tuyêt vời ','2023-11-23',3,'abc123'),(21,'great','2023-12-07',60,'admin1'),(25,'ngon','2023-12-11',60,'admin1'),(29,'hấp dẫn','2023-12-14',60,'admin1'),(30,'abc','2023-12-14',60,'admin1'),(31,'great','2023-12-14',37,'admin1'),(33,'great','2023-12-14',64,'admin1'),(34,'abc','2023-12-14',60,'loi123');
/*!40000 ALTER TABLE `binh_luan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chi_tiet_don_hang`
--

DROP TABLE IF EXISTS `chi_tiet_don_hang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chi_tiet_don_hang` (
  `ma_ctdh` int NOT NULL AUTO_INCREMENT,
  `so_luong` int NOT NULL,
  `don_gia` decimal(18,2) NOT NULL,
  `ma_sp` int NOT NULL,
  `ma_dh` int NOT NULL,
  `ten_sp` varchar(255) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  PRIMARY KEY (`ma_ctdh`),
  KEY `fk_ctdh_dh` (`ma_dh`),
  KEY `fk_ctdh_sp` (`ma_sp`),
  CONSTRAINT `fk_ctdh_dh` FOREIGN KEY (`ma_dh`) REFERENCES `don_hang` (`ma_dh`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_ctdh_sp` FOREIGN KEY (`ma_sp`) REFERENCES `san_pham` (`ma_sp`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chi_tiet_don_hang`
--

LOCK TABLES `chi_tiet_don_hang` WRITE;
/*!40000 ALTER TABLE `chi_tiet_don_hang` DISABLE KEYS */;
INSERT INTO `chi_tiet_don_hang` VALUES (24,2,40000.00,60,129,'Mì quảng','miquang.jpg'),(25,1,40000.00,60,130,'Mì quảng','../../../duan_1/admin/uploads/miquang.jpg'),(26,1,89000.00,64,130,'Cơm tấm','../../../duan_1/admin/uploads/comtam.jpg'),(27,6,15000.00,42,130,'Bánh bèo','../../../duan_1/admin/uploads/banhbeo.jpg'),(28,2,40000.00,60,131,'Mì quảng','miquang.jpg'),(29,1,40000.00,60,132,'Mì quảng','../../../duan_1/admin/uploads/miquang.jpg'),(30,1,30000.00,37,132,'Bánh cuốn','../../../duan_1/admin/uploads/banhcuon.jpg'),(31,1,40000.00,60,162,'Mì quảng','../../../duan_1/admin/uploads/miquang.jpg'),(32,5,30000.00,37,164,'Bánh cuốn','banhcuon.jpg'),(33,1,30000.00,37,165,'Bánh cuốn','banhcuon.jpg'),(34,4,40000.00,60,166,'Mì quảng','miquang.jpg'),(35,1,40000.00,60,167,'Mì quảng','../../../duan_1/admin/uploads/miquang.jpg'),(36,1,40000.00,46,167,'Bánh xèo','../../../duan_1/admin/uploads/banhxeo.jpg'),(37,5,89000.00,64,168,'Cơm tấm','comtam.jpg'),(38,1,89000.00,64,169,'Cơm tấm','../../../duan_1/admin/uploads/comtam.jpg'),(39,1,25000.00,72,169,'Bánh mì thịt','../../../duan_1/admin/uploads/banhmithit.jpg'),(40,4,40000.00,60,173,'Mì quảng','../../../duan_1/admin/uploads/miquang.jpg'),(41,1,89000.00,64,173,'Cơm tấm','../../../duan_1/admin/uploads/comtam.jpg');
/*!40000 ALTER TABLE `chi_tiet_don_hang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `don_hang`
--

DROP TABLE IF EXISTS `don_hang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `don_hang` (
  `ma_dh` int NOT NULL AUTO_INCREMENT,
  `trang_thai` bit(1) NOT NULL,
  `so_luong` int NOT NULL,
  `don_gia` decimal(18,2) NOT NULL,
  `ngay_mua` date NOT NULL,
  `ma_tk` varchar(255) NOT NULL,
  PRIMARY KEY (`ma_dh`),
  KEY `fk_dh_tk` (`ma_tk`),
  CONSTRAINT `fk_dh_tk` FOREIGN KEY (`ma_tk`) REFERENCES `tai_khoan` (`ma_tk`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=174 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `don_hang`
--

LOCK TABLES `don_hang` WRITE;
/*!40000 ALTER TABLE `don_hang` DISABLE KEYS */;
INSERT INTO `don_hang` VALUES (129,_binary '\0',2,80000.00,'2023-12-11','admin1'),(130,_binary '\0',8,219000.00,'2023-12-11','admin1'),(131,_binary '\0',2,80000.00,'2023-12-11','admin1'),(132,_binary '\0',2,70000.00,'2023-12-11','admin1'),(134,_binary '',1,40000.00,'2023-12-13','admin1'),(135,_binary '',1,40000.00,'2023-12-13','admin1'),(136,_binary '',1,40000.00,'2023-12-13','admin1'),(137,_binary '',1,40000.00,'2023-12-13','admin1'),(138,_binary '',1,40000.00,'2023-12-13','admin1'),(139,_binary '',1,40000.00,'2023-12-13','admin1'),(140,_binary '',1,40000.00,'2023-12-13','admin1'),(141,_binary '',1,40000.00,'2023-12-13','admin1'),(142,_binary '',1,40000.00,'2023-12-13','admin1'),(143,_binary '',1,40000.00,'2023-12-13','admin1'),(144,_binary '',1,40000.00,'2023-12-13','admin1'),(145,_binary '',1,40000.00,'2023-12-13','admin1'),(146,_binary '',1,40000.00,'2023-12-13','admin1'),(147,_binary '',1,40000.00,'2023-12-13','admin1'),(148,_binary '',1,40000.00,'2023-12-13','admin1'),(149,_binary '',1,40000.00,'2023-12-13','admin1'),(150,_binary '',1,40000.00,'2023-12-13','admin1'),(151,_binary '',1,40000.00,'2023-12-13','admin1'),(152,_binary '',1,40000.00,'2023-12-13','admin1'),(153,_binary '',1,40000.00,'2023-12-13','admin1'),(154,_binary '',1,40000.00,'2023-12-13','admin1'),(155,_binary '',1,40000.00,'2023-12-13','admin1'),(156,_binary '',1,40000.00,'2023-12-13','admin1'),(157,_binary '',1,40000.00,'2023-12-13','admin1'),(158,_binary '',1,40000.00,'2023-12-13','admin1'),(159,_binary '',1,40000.00,'2023-12-13','admin1'),(160,_binary '',1,40000.00,'2023-12-13','admin1'),(161,_binary '',1,40000.00,'2023-12-13','admin1'),(162,_binary '',1,40000.00,'2023-12-13','admin1'),(163,_binary '',3,267000.00,'2023-12-13','admin1'),(164,_binary '\0',5,150000.00,'2023-12-13','admin1'),(165,_binary '',1,30000.00,'2023-12-13','admin1'),(166,_binary '',4,160000.00,'2023-12-13','admin1'),(167,_binary '',2,80000.00,'2023-12-13','admin1'),(168,_binary '\0',5,445000.00,'2023-12-13','admin1'),(169,_binary '',2,114000.00,'2023-12-13','admin1'),(173,_binary '',5,249000.00,'2023-12-14','loi123');
/*!40000 ALTER TABLE `don_hang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loai_sp`
--

DROP TABLE IF EXISTS `loai_sp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `loai_sp` (
  `ma_loaisp` int NOT NULL AUTO_INCREMENT,
  `ten_loaisp` varchar(150) NOT NULL,
  PRIMARY KEY (`ma_loaisp`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loai_sp`
--

LOCK TABLES `loai_sp` WRITE;
/*!40000 ALTER TABLE `loai_sp` DISABLE KEYS */;
INSERT INTO `loai_sp` VALUES (1,'Bánh mì'),(2,'acb'),(4,'Món nước'),(5,'Món nướng'),(6,'abc'),(8,'Món chiên'),(10,'Món lq gạo'),(16,'đồ trung');
/*!40000 ALTER TABLE `loai_sp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loai_tin`
--

DROP TABLE IF EXISTS `loai_tin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `loai_tin` (
  `ma_loaitin` int NOT NULL AUTO_INCREMENT,
  `ten_loaitin` varchar(255) NOT NULL,
  PRIMARY KEY (`ma_loaitin`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loai_tin`
--

LOCK TABLES `loai_tin` WRITE;
/*!40000 ALTER TABLE `loai_tin` DISABLE KEYS */;
INSERT INTO `loai_tin` VALUES (13,'Hằng ngày'),(23,'Đặc biệt'),(38,'èdgf'),(39,'hàng mới');
/*!40000 ALTER TABLE `loai_tin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `san_pham`
--

DROP TABLE IF EXISTS `san_pham`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `san_pham` (
  `ma_sp` int NOT NULL AUTO_INCREMENT,
  `ten_sp` varchar(255) NOT NULL,
  `don_gia` decimal(18,2) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `mo_ta` text NOT NULL,
  `ngay_nhap` date NOT NULL,
  `so_luot_xem` int DEFAULT NULL,
  `ma_loaisp` int NOT NULL,
  `ma_tk` varchar(255) NOT NULL,
  PRIMARY KEY (`ma_sp`),
  KEY `fk_sp_lsp` (`ma_loaisp`),
  KEY `fk_sp_tk` (`ma_tk`),
  CONSTRAINT `fk_sp_lsp` FOREIGN KEY (`ma_loaisp`) REFERENCES `loai_sp` (`ma_loaisp`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_sp_tk` FOREIGN KEY (`ma_tk`) REFERENCES `tai_khoan` (`ma_tk`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `san_pham`
--

LOCK TABLES `san_pham` WRITE;
/*!40000 ALTER TABLE `san_pham` DISABLE KEYS */;
INSERT INTO `san_pham` VALUES (3,'Gà nướng',200000.00,'ga_nuong.jpg','Thơm, ngon','2023-11-23',50120,5,'abc123'),(35,'Nem rán',59000.00,'nemran.jpg','Nem rán hay còn được gọi là chả giò, là một trong những món ăn đặc biệt và phổ biến của ẩm thực Việt Nam. Sự độc đáo của nem rán nằm ở việc kết hợp giữa vỏ ngoài giòn và nhân thơm ngon. Nhân của nem rán thường bao gồm thịt heo xay, tôm, mộc nhĩ, và các gia vị tạo nên hương vị đa dạng và hấp dẫn. Món ăn này thường được ăn kèm với rau sống, bún và nước mắm pha chua ngọt và trở thành món ngon ngày Tết Việt Nam của mỗi gia đình.','2023-12-06',200000,8,'admin1'),(37,'Bánh cuốn',30000.00,'banhcuon.jpg','Nhắc đến món ăn đường phố Việt Nam không thể không kể đến bánh cuốn. Sự độc đáo của món này bắt nguồn từ cách làm bánh, với bột gạo được trải thành những phiến mỏng mềm mịn, tạo nên lớp vỏ bánh tinh tế. Nhân bánh thường là sự kết hợp ngon ngọt của thịt heo xay và hương vị độc đáo của nấm mèo thái nhỏ, tạo nên hương vị độc đáo và hấp dẫn. Thực khách có thể thưởng thức bánh cuốn Thanh Trì hay món ngon này tại bất kỳ tỉnh thành nào cho cả bữa sáng, bữa trưa và bữa tối.','2023-12-06',200009,2,'admin1'),(42,'Bánh bèo',15000.00,'banhbeo.jpg','Món ăn dân dã trong thế giới ẩm thực các món ăn đường phố Việt Nam là bánh bèo. Bánh bèo thường làm từ bột gạo hấp chín, được ăn kèm với những lớp nhân tươi ngon và nước chấm tinh tế. Phần nhân của bánh bèo phong phú và đa dạng, thay đổi theo từng vùng miền: có thể là đậu phộng, tôm xay nhuyễn, và nhiều loại nhân khác. Mỗi loại nhân đều mang hương vị đặc trưng riêng làm cho bánh bèo trở thành món ngon khó quên trong lòng thực khách.','2023-12-06',200009,2,'admin1'),(46,'Bánh xèo',40000.00,'banhxeo.jpg','Bánh xèo gây ấn tượng đầu tiên với thực khách ở vỏ ngoài giòn tan và vàng ươm. Nhân bánh gồm tôm tươi, thịt thơm ngon, giá đỗ được hòa quyện hài hòa với nhau. Bạn có thể cuốn bánh xèo với bánh tráng, rau sống, dưa chuột… sau đó chấm cùng nước chấm đặc trưng tất cả đều kích thích vị giác của người thưởng thức.','2023-12-06',200003,8,'admin1'),(47,'Bún chả',35000.00,'buncha.jpg','Có nguồn gốc từ Hà Nội, bún chả đã trở thành biểu tượng đặc trưng của ẩm thực Việt Nam. Thịt heo nướng thơm béo hòa quyện với bún mềm mịn và đa dạng các loại rau thơm như rau mùi đã tạo nên một hương vị độc đáo cho món ăn. Món bún chả nói chung hay bún chả Hà Nội nói riêng không chỉ là niềm tự hào của người dân địa phương mà còn là một trải nghiệm ẩm thực thú vị mà du khách quốc tế không thể bỏ lỡ khi đến Việt Nam.','2023-12-06',200000,4,'admin1'),(52,'Gỏi cuốn',65000.00,'goicuon.jpg','Gỏi cuốn là món ăn đường phố Việt Nam phổ biến sử dụng bánh tráng làm vỏ cuốn cùng với nhiều nguyên liệu đa dạng. Nhân gỏi cuốn đa dạng các nguyên liệu như thịt heo luộc, heo quay, tôm, bún, rau thơm, dưa leo… Điểm đặc biệt của gỏi cuốn chính là nước chấm riêng biệt cho từng loại cuốn, mang lại hương vị độc đáo khiến thực khách không thể chối từ.','2023-12-06',200000,2,'admin1'),(53,'Bún bò Nam Bộ',55000.00,'bunbonambo.jpg','Bún bò Nam Bộ khác với bún bò Huế nổi bật với sự tươi mát từ bún, rau cải và thịt bò cùng vị ngon của nước mắm chua ngọt tinh tế. Món ăn này tạo nên điểm đặc biệt bằng sự hài hòa giữa các thành phần, từ sợi bún dai, thịt bò thơm ngon đến nước mắm chua cay hòa quyện với gia vị hành phi và lạc rang tạo ra một bữa ăn hấp dẫn và bổ dưỡng.','2023-12-06',200001,4,'admin1'),(57,'Cao lầu',59000.00,'caolau.jpg','Đến Việt Nam bạn không thể bỏ qua cao lầu – món ăn đường phố Việt Nam đặc trưng, đặc biệt là cao lầu Hội An. Để tạo nên một phần cao lầu hoàn hảo, bạn sẽ thấy sợi bánh kết hợp hài hòa với thịt xíu thơm ngon, nước sốt đậm đà và rau sống xanh tươi mát. Món ăn này thực sự là một tác phẩm nghệ thuật đường phố, chắc chắn sẽ làm cho bạn phải si mê ngay từ lần đầu nếm thử.','2023-12-06',200000,4,'admin1'),(59,'Cà phê trứng',25000.00,'caphetrung.jpg','Không khó để bắt gặp hình ảnh cà phê trứng Hà Nội trong các quán cà phê Thủ đô. Cốc cà phê thơm phức này được tạo ra bằng sự kết hợp tài tình giữa cà phê, trứng và sữa tạo nên một món độc đáo và thơm ngon không thể cưỡng lại. Cà phê trứng là sự kết hợp tinh tế giữa vị ngọt bùi của trứng gà và sữa, làm tan đi phần đắng ngắt của cà phê và chỉ để lại hương thơm ngào ngạt và hấp dẫn.','2023-12-06',200000,6,'admin1'),(60,'Mì quảng',40000.00,'miquang.jpg','Mì Quảng là món đặc sản của Đà Nẵng và Quảng Nam gây ấn tượng với thực khách bởi hương vị đặc trưng. Mì Quảng Quảng Nam hay Đà Nẵng đều Được làm từ bột gạo xay thành sợi mì và ăn kèm với nước dùng cùng nhiều loại nguyên liệu như thịt gà, thịt lợn, và nhiều loại hải sản khác nhau. Một tô mì Quảng đầy ú ụ với màu sắc bắt mắt gồm sợi những mì vàng và trắng xen kẽ, topping đa dạng như tôm, gà, ếch, trứng, và nhiều loại rau sống. Một chút hành và lạc rang được rắc lên trên cùng để tạo thêm hương vị độc đáo.','2023-12-06',200119,4,'admin1'),(63,'Bún riêu cua',35000.00,'bunrieucua.jpg','Bún riêu cua là món ăn đặc trưng của Việt Nam nổi tiếng với hương vị chua chua thanh thanh và ngon miệng. Thành phần chính của món bún riêu cua bao gồm bún, cua, mọc, đậu, chả… cùng với các loại rau thơm như rau sống, rau răm, và giá sống. Món ăn này mang đến một trải nghiệm ẩm thực phong phú và hấp dẫn cho thực khách.','2023-12-06',200000,4,'admin1'),(64,'Cơm tấm',89000.00,'comtam.jpg','Nếu bạn có dịp du lịch miền Nam nhất định phải thưởng thức cơm tấm. Cơm trắng mềm mịn kết hợp với sườn nướng thơm ngon, bì mềm mịn, trứng hấp béo… làm nên món cơm tấm đậm đà phong vị miền Nam. Nước mắm pha chua ngọt đặc trưng kết hợp với rau sống tươi mát, dưa leo giòn và ớt tạo nên hương vị hấp dẫn hơn cho thực khách khi thưởng thức món cơm tấm.','2023-12-06',200091,10,'admin1'),(69,'Xôi ngọt',15000.00,'xoingot.jpg','\nXôi ngọt là một món ăn phổ biến trong ẩm thực Việt Nam, được làm từ gạo nếp nấu chín cùng với các nguyên liệu khác như đậu xanh, gấc, lạc, dừa,... Xôi ngọt có thể được ăn riêng hoặc ăn kèm với các món ăn khác như gà xé, thịt kho,...\nỞ Việt Nam, xôi ngọt có nhiều loại khác nhau, mỗi loại có hương vị và cách chế biến riêng. Một số loại xôi ngọt phổ biến bao gồm:\nXôi gấc: Xôi gấc là loại xôi ngọt truyền thống của Việt Nam, được làm từ gạo nếp nấu chín cùng với gấc. Gấc có tác dụng tạo màu sắc đỏ tươi và hương thơm đặc trưng cho xôi.\nXôi đậu xanh: Xôi đậu xanh là loại xôi ngọt được làm từ gạo nếp nấu chín cùng với đậu xanh. Đậu xanh có tác dụng tạo vị bùi và béo cho xôi.\nXôi vò: Xôi vò là loại xôi ngọt được làm từ gạo nếp nấu chín rồi đồ lại với nước cốt dừa và đường. Xôi vò có vị ngọt đậm đà và độ dẻo dai.\nXôi xéo: Xôi xéo là loại xôi ngọt được làm từ gạo nếp nấu chín rồi rưới lên trên một lớp nước cốt dừa và lạc rang. Xôi xéo có vị béo ngậy và thơm ngon.\nXôi ngũ sắc: Xôi ngũ sắc là loại xôi ngọt được làm từ gạo nếp nấu chín với các màu sắc khác nhau, tượng trưng cho ngũ hành. Xôi ngũ sắc có vị ngọt thanh và màu sắc bắt mắt.\nNgoài ra, còn có nhiều loại xôi ngọt khác như xôi trứng kiến, xôi mít, xôi cốm,... Mỗi loại xôi ngọt đều có hương vị và cách chế biến riêng, mang đậm nét văn hóa ẩm thực của Việt Nam.\nXôi ngọt thường được ăn vào các bữa sáng, bữa phụ hoặc các dịp lễ, tết. Xôi ngọt là một món ăn ngon, bổ dưỡng và có thể được biến tấu thành nhiều món ăn khác nhau..','2023-12-06',200008,10,'admin1'),(71,'Phở bò',50000.00,'phobo.jpg','\nPhở bò là một món ăn truyền thống của Việt Nam, được làm từ bánh phở, nước dùng và thịt bò. Đây là một trong những món ăn nổi tiếng nhất của Việt Nam và được yêu thích bởi nhiều người trên thế giới.\nBánh phở được làm từ gạo tẻ, được xay nhuyễn và tráng thành từng sợi mỏng. Nước dùng được ninh từ xương bò, thịt bò và các loại gia vị như quế, hồi, thảo quả,... Thịt bò thường được thái lát mỏng, có thể là thịt tái, thịt chín, thịt gầu,...\nPhở bò có thể được ăn kèm với các loại gia vị như chanh, ớt, tương ớt,... Phở bò có vị ngọt thanh của nước dùng, vị thơm của thịt bò và vị béo ngậy của nước cốt dừa.\nPhở bò thường được ăn vào bữa sáng, bữa trưa hoặc bữa tối. Đây là một món ăn ngon, bổ dưỡng và mang đậm nét văn hóa ẩm thực Việt Nam.','2023-12-06',200000,4,'admin1'),(72,'Bánh mì thịt',25000.00,'banhmithit.jpg','\nBánh mì thịt là một món ăn đường phố phổ biến ở Việt Nam, được làm từ bánh mì, thịt nướng, nước sốt và các loại rau củ. Đây là một trong những món ăn ngon và được yêu thích nhất của Việt Nam.Bánh mì được làm từ bột mì, được nhào nặn và nướng chín. Thịt nướng được làm từ thịt heo, được tẩm ướp gia vị và nướng chín. Nước sốt được làm từ tương ớt, đường, giấm và các loại gia vị khác. Rau củ được sử dụng trong bánh mì thịt nướng thường là dưa leo, xà lách, cà rốt,...\nBánh mì thịt nướng được ăn bằng cách kẹp thịt nướng, rau củ và nước sốt vào trong bánh mì. Món ăn này có vị thơm ngon của thịt nướng, vị đậm đà của nước sốt và vị giòn tươi của rau củ.\nBánh mì thịt nướng thường được ăn vào bữa sáng, bữa trưa hoặc bữa tối. Đây là một món ăn ngon, bổ dưỡng và có thể được tìm thấy ở khắp mọi nơi ở Việt Nam.','2023-12-06',200048,1,'admin1');
/*!40000 ALTER TABLE `san_pham` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tai_khoan`
--

DROP TABLE IF EXISTS `tai_khoan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tai_khoan` (
  `ma_tk` varchar(255) NOT NULL,
  `ho_ten` varchar(150) NOT NULL,
  `mat_khau` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `vai_tro` varchar(255) DEFAULT NULL,
  `kich_hoat` bit(1) DEFAULT NULL,
  PRIMARY KEY (`ma_tk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tai_khoan`
--

LOCK TABLES `tai_khoan` WRITE;
/*!40000 ALTER TABLE `tai_khoan` DISABLE KEYS */;
INSERT INTO `tai_khoan` VALUES ('abc123','admin','12345','abc@gmail.com','abc.jpg','1',_binary ''),('admin1','admin','4297f44b13955235245b2497399d7a93','trungglevan@gmail.com','abc.jpg','1',_binary ''),('admin123','Lê Văn Trung','9eaee6263ab7810d2b088b07395035bc','admin123@gmail.com','3-8.png','1',_binary ''),('DSGFHGN','SFAESDFD','63ee451939ed580ef3c4b6f0109d1fd0','abc@gmail.com','abc.jpg','1',_binary ''),('loi123','lợi','4297f44b13955235245b2497399d7a93','loi24122004@gmail.com','3-8.png','0',_binary '');
/*!40000 ALTER TABLE `tai_khoan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tin`
--

DROP TABLE IF EXISTS `tin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tin` (
  `ma_tin` int NOT NULL AUTO_INCREMENT,
  `ten_tin` varchar(255) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `mo_ta` text NOT NULL,
  `ngay_dang` date NOT NULL,
  `so_luot_xem` int DEFAULT NULL,
  `ma_loaitin` int NOT NULL,
  `ma_tk` varchar(255) NOT NULL,
  PRIMARY KEY (`ma_tin`),
  KEY `fk_tin_loaitin` (`ma_loaitin`),
  KEY `fk_tin_tk` (`ma_tk`),
  CONSTRAINT `fk_tin_loaitin` FOREIGN KEY (`ma_loaitin`) REFERENCES `loai_tin` (`ma_loaitin`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_tin_tk` FOREIGN KEY (`ma_tk`) REFERENCES `tai_khoan` (`ma_tk`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tin`
--

LOCK TABLES `tin` WRITE;
/*!40000 ALTER TABLE `tin` DISABLE KEYS */;
INSERT INTO `tin` VALUES (1,'Bánh mì dẫn đầu danh sách món ăn đường phố phổ biến nhất Việt Nam','tinbanhmi.jpg','Các món ăn được lựa chọn theo ý kiến độc lập của các chuyên gia, thực khách và không phân biệt vùng miền. Tiêu chí lựa chọn là các món có hương vị thơm ngon, độc đáo, bình dân, phổ biến trong làng ẩm thực Việt Nam, đạt từ 3,6/5 sao trở lên trong thang điểm đánh giá.\nĐầu tháng 8, Taste Atlas - chuyên trang chứa thông tin của gần 10.000 món ăn truyền thống, 9.000 nhà hàng cùng sự góp ý của hơn 50.000 chuyên gia ẩm thực, đã công bố những món ăn đường phố nổi tiếng, được yêu thích nhất tại Việt Nam. Danh sách được coi như một gợi ý dành cho du khách chuẩn bị có chuyến đi đến đất nước xinh đẹp này.\nBánh mì, được chấm điểm cao nhất với 4,7/5 sao. Đây là món ăn phổ biến, quen thuộc và tiện lợi của người dân Việt Nam.\nBánh mì có nhiều loại nhân khác nhau như: pate, trứng rán, giò chả, xúc xích, ruốc, xá xíu và ăn kèm rau thơm, dưa góp, tương ớt.\"Tôi được gợi ý một vài món ngon của Hà Nội và may mắn những món tôi thử qua đều có hương vị rất tuyệt vời, đặc biệt là bánh mì. Chắc chắn tôi sẽ chia sẻ món này với bạn bè vì nó là một trong những món ngon nhất tôi từng ăn\", anh Theo Underwood, du khách đến từ Anh, chia sẻ.','2023-12-06',2006,23,'admin1'),(3,'Phở Việt được ví như \"bản giao hưởng hương vị\"','tinpho.jpg','Phở chiếm được cảm tình của nhiều thực khách trên thế giới và được chuyên trang ẩm thực của Ấn Độ ví như \"bản giao hưởng hương vị\".\nTrang chuyên về ẩm thực Slurrp (Ấn Độ) giới thiệu phở không chỉ là một món ăn đơn thuần, mà còn phản ánh di sản và hương vị phong phú của ẩm thực Việt. Lịch sử của phở có thể bắt nguồn từ đầu thế kỷ 20 ở các tỉnh miền Bắc với Hà Nội được cho là nơi đầu tiên xuất hiện món ăn này.\nPhở ra đời là thành quả của sự vay mượn các kỹ thuật nấu nướng, nguyên liệu, kết hợp với văn hóa ẩm thực địa phương. Các đầu bếp Việt ở thế kỷ 20 đã biến tấu món pot-au-feu của Pháp và một món sợi nước của người Hoa thành món phở. Do đó, phở là tổng hòa của hương vị đa dạng đồng thời phản ánh hơi thở văn hóa của thời đại.Từ những ngày đầu xuất hiện, phở là món ăn đường phố phổ biến với tầng lớp lao động. Phở được bán trên những gánh hàng rong. Người bán gánh hai cái thúng, một đầu đựng nước dùng, đầu còn lại chứa bún, thịt và rau thơm. Phở dần trở nên phổ biến và xuất hiện ở nhiều nơi từ những năm 1950. Dần dần, món ăn đường phố ngày nào là niềm tự hào của ẩm thực Việt với bạn bè thế giới.\nTrang Slurrp nhận xét phở có ý nghĩa lớn trong văn hóa người Việt. Đó không chỉ là một món ăn mà còn là biểu tượng của gia đình, cộng đồng và truyền thống. Một số gia đình thường quây quần bên những bát phở nghi ngút khói trong dịp đặc biệt như Tết Nguyên đán, cưới hỏi, cúng giỗ.\nPhở cũng đóng một vai trò nhất định trong các nghi lễ tôn giáo. Tại nhiều gia đình ở Việt Nam, trong các buổi lễ cúng tổ tiên có tục dâng bát phở lên trang thờ, thể hiện lòng thành kính, tôn vinh truyền thống gia đình.','2023-12-06',2000,23,'admin1'),(5,'Cà phê','tincaphe.jpg','Nhắc đến Việt Nam thì không thể nào bỏ qua được nét văn hóa thưởng thức cà phê độc đáo của người Việt. Đối với người Việt Nam, những chiếc ghế nhựa hay quanh những bồn cây, thậm chí là mặt đường, vỉa hè từ lâu đã trở thành những nơi để có thể ngồi thoải mái uống một ly cà phê.\nVới cùng một nguyên liệu chính là cà phê nhưng lại có rất nhiều những cách thưởng thức khác nhau, mang lại nhiều hương vị và trải nghiệm khác nhau cho thực khách. Có thể uống cà phê với sữa đặc, với nước cốt dừa, với trứng hoặc chỉ đơn giản uống cà phê đen đậm với vài viên đá.','2023-12-06',2008,23,'admin1'),(11,'\"Tây\" nghĩ về phá lấu: Tưởng không ngon mà ngon không tưởng','tinphalau.jpg','Phá lấu chắc có lịch sử cả mấy trăm năm rồi, và theo thời gian, món ăn này trở nên quen thuộc với người dân ở miền Nam, ngày nay còn được xem như là một đặc sản đường phố ở TP.HCM.\r\nNgắm Sài Gòn xưa với hột vịt lộn, phá lấu dì Tư\r\nNgắm Sài Gòn xưa với hột vịt lộn, phá lấu dì Tư\r\nĐỌC NGAY\r\nNổi tiếng nhất chắc là phá lấu bò, là một món ăn gồm nội tạng bò nấu trong nước dùng có màu đỏ cam đặc trưng.\r\nHãy thử hỏi bất cứ sinh viên nào ở thành phố này đi, họ đều có thể nói cho bạn biết chỗ nào bán phá lấu ngon, chỗ nào không ngon, gần trường của mình.\r\nPhá lấu là món ăn được nhiều sinh viên ưa chuộng vì vừa ăn no và còn khá rẻ.\r\nNhưng mà với những người chưa biết, thì phá lấu chính xác là gì? Đó là món ăn gồm các bộ phận nội tạng bò được hầm trong 1 đến 2 giờ, sau đó nước dùng được cho thêm nước cốt dừa và gia vị.\r\nKhi ăn, người bán sẽ cắt nhỏ các phần nội tạng thành miếng vừa ăn cho khách.\r\nThông thường, có hai cách ăn phá lấu: ăn với mì gói hoặc bánh mì.\r\n\r\nVới mì gói, phá lấu sẽ được dùng như “topping” ăn kèm, chan nước dùng đầy tô. Nếu bạn chọn ăn với bánh mì, người bán sẽ múc phá lấu ra chén nhỏ hơn để bạn chấm bánh mì.\r\n\r\nDù là chọn cách nào, thì phá lấu luôn được phục vụ kèm nước xốt me, có thể cho thêm ớt nếu bạn thích ăn cay.','2023-12-06',2000,13,'admin1'),(13,'Đến Việt Nam nên ăn cơm','tincomtam.jpg','Ngoài phở, bánh mì, các chuyên gia du lịch của Lonely Planet còn nhắc đến việc ăn cơm khi đến Việt Nam.\r\n\r\nĐể trả lời cho câu hỏi: \"Đến Việt Nam ăn gì?\", tạp chí du lịch Lonely Planet của Asutralia cho biết ngoài phở, bánh mì, du khách hãy thử ăn cơm Việt.\r\n\r\n\"Cơm là món bạn ăn hàng ngày, với nhiều cách chế biến khác nhau. Nếu một người dân địa phương nói đi ăn cơm nhé, thì đó là lời mời dùng bữa trưa hoặc tối. Cơm được xới đầy bát, ăn cùng các món thịt, cá, rau xào\", Lonely Planet giới thiệu về món ăn chính của người dân địa phương.\r\n\r\nBáo Australia cũng nói thêm, nơi bán món ăn này được gọi là \"quán cơm bình dân\". Ngoài cơm thông thường, du khách cũng có thể thưởng thức các biến tấu khác như cơm rang, cơm tấm hay cháo.\r\nNgoài gạo tẻ dùng để nấu cơm, các chuyên gia du lịch còn nhắc đến gạo nếp dùng để nấu xôi. \"Bạn sẽ tìm thấy gạo nếp màu trắng, đỏ hoặc đen (xôi trắng, gấc hoặc đỗ đen). Sau đó, người bán sẽ thêm vào đậu, ngô, lạc hoặc vừng để làm món xôi sáng\".\r\n\r\nBên cạnh đó, du khách khi đến Việt Nam cũng được gợi ý ăn thử món bánh tráng trộn. Đây là món được giới trẻ yêu thích, được làm từ bánh tráng khô, xoài xanh bào sợi, trứng cút, tôm khô, rau thơm, lạc rang ăn cùng nước sốt.\r\n\r\nMột món ăn khác cũng được nhắc đến là nem cuốn, với các loại nhân và vỏ bánh khác nhau. \"Trong tiếng Anh, món cuốn gọi là spring rolls. Nhưng nó không liên quan gì đến mùa xuân (spring). Ở miền Bắc, đó là những chiếc nem rán giòn tan. Tại miền Nam, món cuốn mềm và nhẹ, có nhân là tôm, thịt lợn, rau sống và bún\", báo Australia viết.','2023-12-06',2000,13,'admin1'),(14,'Nem rán - tinh hoa ẩm thực Tết Việt','tinnemran.jpg','Nem rán là món ăn truyền thống trong mâm cỗ Tết, cầu kỳ về nguyên liệu và cách làm.\r\nTheo thời gian, mâm cỗ Tết hiện đại có nhiều thay đổi. Bên cạnh sự xuất hiện của nhiều của ngon vật lạ từ mọi miền Tổ quốc, những món ăn truyền thống vẫn hiện diện xuyên suốt từ thế hệ này qua thế hệ khác. Tiêu biểu là món nem rán.\r\n\r\nMón nem đa dạng nguyên liệu tươi, khô nên quá trình chuẩn bị khá tốn thời gian, cần sự tỉ mỉ và kỳ công. Chiếc nem cuộn phải đều tay để khi rán chín đều, vàng ươm, không bị vỡ. Món nem rán thường ăn kèm với dưa góp và rau sống.\r\n\r\nDưới đây, Bếp lành Nông Nghiệp Sạch gửi tới độc giả cách làm món nem rán đơn giản, chuẩn bị cho mâm cỗ Tết đủ đầy.\r\nNguyên liệu\r\n\r\n- Thịt nạc vai\r\n\r\n- Trứng gà\r\n\r\n- Miến dong, bánh đa nem\r\n\r\n- Cà rốt, đu đủ, củ đậu\r\n\r\n- Mộc nhĩ, nấm hương\r\n\r\n- Hành, tỏi khô, hành lá\r\n\r\n- Xà lách, rau thơm, ớt\r\n\r\n- Dầu ăn, đường, giấm, tiêu\r\n\r\nCách sơ chế\r\n\r\n- Thịt nạc vai băm nhỏ\r\n\r\n- Miến dong ngâm nước cho mềm cắt khúc ngắn 2 cm.\r\n\r\n- Mộc nhĩ, nấm hương ngâm nước cho nở, rửa sạch, bỏ chân, thái chỉ.\r\n\r\n- Hành lá, rau thơm rửa sạch, thái nhỏ.\r\n\r\n- Hành, tỏi, ớt rửa sạch, băm nhỏ.\r\n\r\n- Bánh đa nem đem ủ cho mềm.\r\n\r\n- Đu đủ, cà rốt thái miếng mỏng, bóp qua muối rửa sạch.\r\n\r\n- Cà rốt, củ đậu, gọt vỏ, nạo sợi.\r\nCách chế biến\r\n\r\nBước 1: Trộn các nguyên liệu thịt, trứng, cà rốt, hành lá, rau thơm, nấm hương, mộc nhĩ, cùng miến dong băm nhỏ, thêm chút tiêu (chú ý với món nem không nên tra muối vì bánh đa đã có vị mặn và khi dùng kèm thêm nước chấm).\r\n\r\nBước 2: Trải bánh đa nem ra khay cho nhân nem vào giữa cuộn tròn lại đều đẹp đường kính 3 cm dài 4 cm .\r\n\r\nBước 3: Đặt chảo dầu đun nóng thả nem vào rán nhỏ lửa để giữ độ giòn của vỏ và độ tươi của nhân. Lật nhẹ tay để vỏ cứng, chuyển màu vàng rơm, vớt ra để ráo.\r\n\r\nBước 4: Làm dưa góp.\r\n\r\nBạn có thể pha nước chấm theo công thức sau: 2 thìa nước cốt chanh, 2 thìa mắm, 4 thìa nước lọc, 2 thìa đường sao cho vị chua, cay, mặn, ngọt vừa phải. Thêm ớt, tỏi băm nhỏ, cà rốt, đu đủ vào ngâm 15 phút.\r\n\r\nLớp vỏ bánh đa giòn rụm, nhân thịt ngọt mềm hòa quyện với rau củ thanh mát chấm chua ngọt đem lại cảm giác thích thú cho người thưởng thức, ăn nhiều mà không bị ngán.','2023-12-06',2000,13,'admin1'),(15,'Bánh bèo, bánh xèo xuất hiện ở Đại hội ẩm thực đường phố thế giới','tinbanhxeo.jpg','Đại hội ẩm thực đường phố thế giới là một hoạt động được tổ chức thường niên với mục tiêu duy trì và phát triển văn hoá ẩm thực.\r\n\r\nNăm nay, thủ đô Manila của Philippines được chọn là nơi diễn ra sự kiện, thu hút sự quan tâm rất lớn từ các đầu bếp nổi tiếng thế giới, các kênh truyền hình, tạp chí ẩm thực quốc tế và người dân tham quan, thưởng thức.\r\n\r\nTham dự đại hội năm nay, 12 quốc gia và vùng lãnh thổ đã mang đến 28 món ăn đường phố đặc biệt được nhiều người biết tới như chè Tub Tim Grob, bao gồm các loại thạch trái cây, nước cốt dừa của Thái Lan, món Tacos nhân thịt heo, trái bơ cùng các loại rau và hạt của Mexico, món cơm chiên truyền thống, với thịt, tôm, nấm của nước chủ nhà Philippines... Việt Nam cũng mang đến Đại hội hai món ăn là là bánh bèo và bánh xèo truyền thống.\r\n\r\nÔng KF Seetoh, người sáng lập Đại hội ẩm thực đường phố thế giới: “Có rất nhiều di sản được truyền lại trong những công thức ẩm thực, các món ăn truyền thống. Và rất nhiều những món ăn truyền thống của các nước lại được biết tới rộng rãi dưới dạng thức những món ăn đường phố.”\r\nThực khách muốn vào tham quan đại hội này phải trả phí 70 peso/người và được ăn miễn phí các món ăn tại 28 gian hàng ở đại hội.\r\n\r\n“Đây là một trải nghiệm rất đặc biệt, nhất là với những người yêu thích nấu ăn hoặc mong muốn được thưởng thức các món ăn trên thế giới,” một thực khách cho biết.\r\n\r\nĐại hội ẩm thực đường phố thế giới là một hoạt động được tổ chức thường niên do Makansutra - một tổ chức của Singapore khởi xướng với mục tiêu duy trì và phát triển văn hóa ẩm thực.\r\n\r\nĐây là dịp để các đầu bếp trên thế giới có cơ hội học hỏi các mô hình ẩm thực đường phố rất thành công ở những nước phát triển như Singapore, Mỹ, Đức./.','2023-12-06',2000,13,'admin1'),(16,'Quán bánh cuốn cà cuống Thanh Trì gia truyền 4 thế hệ','tinbanhcuon.jpg','Mở bán từ năm 1960, gia đình bà Lan đã duy trì nghề làm bánh cuốn qua 4 thế hệ và gìn giữ hương vị nguyên bản của bánh cuốn Thanh Trì.\r\n\r\nBánh cuốn là món cổ truyền nổi tiếng của làng Thanh Trì, là \"thức quà chính tông của người Hà Nội\" được nhà văn Thạch Lam viết trong cuốn \"Hà Nội băm sáu phố phường\". Bánh cuốn có mặt ở nhiều tỉnh thành nhưng chỉ có bánh cuốn Thanh Trì là ăn cùng cà cuống. Đây là loài côn trùng sống dưới nước, thường bắt gặp ở ao, hồ, đầm, ruộng.\r\nGia đình bà Hoàng Thị Lan (68 tuổi) đã có 4 đời làm bánh cuốn kể từ năm 1960. \"Trước đây, bà và mẹ tôi bán hàng rong. Khoảng 20 năm trước, tôi vẫn thường gánh hàng lên ngõ 2 chợ Khâm Thiên bán\", bà Lan, thuộc thế hệ thứ ba nối nghiệp gia đình cho biết. Năm 2008, bà Lan mở quán tại số 30 Thanh Đàm, phường Thanh Trì, quận Hoàng Mai. Hiện bà đã truyền nghề cho anh Cường (con trai đầu), là đời thứ tư nối nghiệp làm bánh và mở thêm cửa hàng ở khu vực phố cổ Hà Nội.\r\n\r\nQuán 30 Thanh Đàm mở bán vào hai khoảng thời gian, buổi sáng từ 5h đến 12h và buổi chiều từ 16h đến 18h. Quán rộng khoảng 30 m2, có hai bàn inox, hai ghế băng dài và cả ghế nhựa, phục vụ được 20 khách cùng một thời điểm. Trong quán là bức tường cũ treo bằng khen, giải thưởng tại các hội thi làng nghề từ năm 2006 đến nay. Bà Lan cho biết gia đình đoạt giải nhờ bí quyết làm bánh truyền lại qua nhiều đời và kinh nghiệm tráng bánh từ khi bà 15 tuổi.\r\n\r\nMỗi ngày chủ quán chuẩn bị 10 kg gạo, 10 lít nước chấm, 3 kg hành khô, một kg hành lá, 5 kg nhân thịt lợn, 6 kg chả quế và chả mỡ, chưa kể các nguyên liệu khác. Hành khô thái lát mỏng, phi trên chảo dầu cho đến khi vàng ruộm. Phần nhân làm từ mộc nhĩ, nấm hương xay nhỏ xào cùng thịt lợn. Hành lá được rim với mỡ vàng óng để phết lên từng lớp bánh.\r\n\r\nBột gạo, nguyên liệu quan trọng nhất của món bánh cuốn được bà Lan chọn lọc và chuẩn bị kỹ càng. Để bánh không bị bở hay dính tay, bà Lan sử dụng gạo Khang Dân từ vụ mùa trước. \"Khang Dân là một loại gạo khô, hạt thon nhỏ, ít bị gãy, vỡ, khi nở không bị bết\", bà lý giải. Gạo được ngâm nước khoảng 3 tiếng, xay nhuyễn rồi tiếp tục để lắng trong khoảng 2 tiếng. Sau đó chắt bỏ nước cũ để loại bỏ tạp chất và pha nước mới theo công thức riêng sao cho bột có độ đặc và sánh vừa phải.\r\n\r\nBếp tráng bánh được đặt ở bên trái cửa ra vào. Khách đến quán luôn được thưởng thức đĩa bánh nóng hổi được tráng liền tay. Bà Lan thoăn thoắt đổ từng gáo bột lên lớp vải màn căng phẳng trên mặt nồi hấp rồi xoa đều đến khi bánh bắt đầu phồng lên. Bánh chín được lấy ra bằng một que tre dẹt, trải phẳng rồi thêm nhân hoặc phết mỡ hành theo yêu cầu của khách. \"Khó nhất là căn chuẩn thời gian để bánh chín đều, có độ dai và không bị nhão\", bà nói.','2023-12-06',2000,13,'admin1'),(17,'Xôi được đánh giá là \"hiện thân tinh hoa ẩm thực Việt\"','tinxoi.jpg','Tạp chí du lịch nổi tiếng của Anh đánh giá xôi là \"hiện thân tinh hoa ẩm thực Việt\", lọt danh sách 10 món nổi bật của Hà Nội dành cho người ăn chay.\r\n\r\nTạp chí du lịch Condé Nast Traveller có trụ sở ở London, Anh, nhận xét ẩm thực Hà Nội có thể thú vị với cả những người ăn chay khi mang đến hương vị đa dạng bằng cách sử dụng nhiều loại thảo mộc, rau, trái cây tươi. Dưới đây là danh sách 10 món dành cho người thích ăn chay với các tiêu chí như: dễ ăn, độ phổ biến, hương vị đa dạng và dễ thấy ở mọi hàng quán, theo gợi ý từ các chuyên gia ẩm thực và thực khách.\r\n\r\nXôi, bún chả chay, bánh xèo là những món chính dành cho thực khách thích ăn chay khi đến Hà Nội. Xôi được người dân địa phương dùng cho bữa sáng, có mặt tại mọi hàng quán vỉa hè ăn. Theo Condé Nast Traveller, xôi dù ăn dưới hình thức gọn nhẹ, bỏ vào túi mang đi hay ăn tại các nhà hàng với phong cách thịnh soạn, vẫn luôn là \"hiện thân của tinh hoa ẩm thực Việt Nam\". Có nhiều loại xôi như: xôi trắng, lạc, xéo, gấc, ngô, dừa, khúc. Ngoài ăn chay kèm vừng lạc, người Việt thường thích ăn kèm các món mặn như chả, trứng, thịt kho, ruốc, pate.','2023-12-06',2000,13,'admin1');
/*!40000 ALTER TABLE `tin` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-15 11:30:28
