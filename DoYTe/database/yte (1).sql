-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2018 at 05:16 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yte`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `pk_category_product_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`pk_category_product_id`, `c_name`) VALUES
(6, 'Thực phẩm dinh dưỡng'),
(7, 'Đồ dùng mẹ và bé'),
(9, 'Thiết bị gia đình'),
(10, 'Chắm sóc sức khỏe'),
(11, 'Y tế chuyên dụng'),
(12, 'Y tế gia đình'),
(13, 'Quà tặng cuộc sống'),
(14, 'Sản phẩm nổi bật');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(11) NOT NULL,
  `hovaten` varchar(500) NOT NULL,
  `diachi` varchar(2000) NOT NULL,
  `dienthoai` varchar(200) NOT NULL,
  `ghichu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `pk_news_id` int(11) NOT NULL,
  `c_name` varchar(500) DEFAULT NULL,
  `c_description` varchar(20000) DEFAULT NULL,
  `c_content` text,
  `c_img` varchar(500) DEFAULT NULL,
  `c_hotnews` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`pk_news_id`, `c_name`, `c_description`, `c_content`, `c_img`, `c_hotnews`) VALUES
(2, 'Máy tập liên hoàn Matrix A50 XR', 'Máy tập liên hoàn Matrix A50 XR với công nghệ Suspension Elliptical chống ồn hiệu quả, đem đến bước tập êm ái, mượt mà\r\nMáy tập liên hoàn Matrix A50 XR mang đến những chuyển động chân hoàn hảo và tư thế tập chuẩn giúp đạt được kết quả tốt hơn. Với thiết kế độc đáo với công nghệ độc quyền Suspension Elliptical™ Technology và PerfectStride® Motion, máy tập Matrix sẽ đem đến những trải nghiệm luyện tập cự kỳ mượt mà và thoải mái, giúp các cơ trở nên săn chắc, quyến rũ hơn.', '<p>Theo c&aacute;c Cty sữa cho biết, gi&aacute; nguy&ecirc;n liệu sữa nhập khẩu trong th&aacute;ng 11 tiếp tục tăng th&ecirc;m 200USD/tấn. Với mức gi&aacute; hiện nay, gi&aacute; sữa b&eacute;o c&oacute; nguồn gốc New Zealand nhập về VN hiện l&agrave; 5.700USD/tấn, tăng gấp 2 lần so với thời điểm n&agrave;y năm ngo&aacute;i.&nbsp;Theo c&aacute;c Cty sữa cho biết, gi&aacute; nguy&ecirc;n liệu sữa nhập khẩu trong th&aacute;ng 11 tiếp tục tăng th&ecirc;m 200USD/tấn. Với mức gi&aacute; hiện nay, gi&aacute; sữa b&eacute;o c&oacute; nguồn gốc New Zealand nhập về VN hiện l&agrave; 5.700USD/tấn, tăng gấp 2 lần so với thời điểm n&agrave;y năm ngo&aacute;i.&nbsp;Theo c&aacute;c Cty sữa cho biết, gi&aacute; nguy&ecirc;n liệu sữa nhập khẩu trong th&aacute;ng 11 tiếp tục tăng th&ecirc;m 200USD/tấn. Với mức gi&aacute; hiện nay, gi&aacute; sữa b&eacute;o c&oacute; nguồn gốc New Zealand nhập về VN hiện l&agrave; 5.700USD/tấn, tăng gấp 2 lần so với thời điểm n&agrave;y năm ngo&aacute;i.</p>', '15208401301494416499tainghe.jpg', 1),
(3, 'Combo Máy đo đường huyết Sapphire Plus - Máy đo huyết áp Medistar+', '<p>Theo c&aacute;c Cty sữa cho biết, gi&aacute; nguy&ecirc;n liệu sữa nhập khẩu trong th&aacute;ng 11 tiếp tục tăng th&ecirc;m 200USD/tấn. Với mức gi&aacute; hiện nay, gi&aacute; sữa b&eacute;o c&oacute; nguồn gốc New Zealand nhập về VN hiện l&agrave; 5.700USD/tấn, tăng gấp 2 lần so với thời điểm n&agrave;y năm ngo&aacute;i.</p>', '<p>Theo c&aacute;c Cty sữa cho biết, gi&aacute; nguy&ecirc;n liệu sữa nhập khẩu trong th&aacute;ng 11 tiếp tục tăng th&ecirc;m 200USD/tấn. Với mức gi&aacute; hiện nay, gi&aacute; sữa b&eacute;o c&oacute; nguồn gốc New Zealand nhập về VN hiện l&agrave; 5.700USD/tấn, tăng gấp 2 lần so với thời điểm n&agrave;y năm ngo&aacute;i.&nbsp;Theo c&aacute;c Cty sữa cho biết, gi&aacute; nguy&ecirc;n liệu sữa nhập khẩu trong th&aacute;ng 11 tiếp tục tăng th&ecirc;m 200USD/tấn. Với mức gi&aacute; hiện nay, gi&aacute; sữa b&eacute;o c&oacute; nguồn gốc New Zealand nhập về VN hiện l&agrave; 5.700USD/tấn, tăng gấp 2 lần so với thời điểm n&agrave;y năm ngo&aacute;i.&nbsp;Theo c&aacute;c Cty sữa cho biết, gi&aacute; nguy&ecirc;n liệu sữa nhập khẩu trong th&aacute;ng 11 tiếp tục tăng th&ecirc;m 200USD/tấn. Với mức gi&aacute; hiện nay, gi&aacute; sữa b&eacute;o c&oacute; nguồn gốc New Zealand nhập về VN hiện l&agrave; 5.700USD/tấn, tăng gấp 2 lần so với thời điểm n&agrave;y năm ngo&aacute;i.</p>', '15208401221494416460tvlg.jpg', 1),
(4, 'Đai đỡ bụng cho bà bầu Art 5400', '<p>Theo c&aacute;c Cty sữa cho biết, gi&aacute; nguy&ecirc;n liệu sữa nhập khẩu trong th&aacute;ng 11 tiếp tục tăng th&ecirc;m 200USD/tấn. Với mức gi&aacute; hiện nay, gi&aacute; sữa b&eacute;o c&oacute; nguồn gốc New Zealand nhập về VN hiện l&agrave; 5.700USD/tấn, tăng gấp 2 lần so với thời điểm n&agrave;y năm ngo&aacute;i.</p>', '<p>Theo c&aacute;c Cty sữa cho biết, gi&aacute; nguy&ecirc;n liệu sữa nhập khẩu trong th&aacute;ng 11 tiếp tục tăng th&ecirc;m 200USD/tấn. Với mức gi&aacute; hiện nay, gi&aacute; sữa b&eacute;o c&oacute; nguồn gốc New Zealand nhập về VN hiện l&agrave; 5.700USD/tấn, tăng gấp 2 lần so với thời điểm n&agrave;y năm ngo&aacute;i.&nbsp;Theo c&aacute;c Cty sữa cho biết, gi&aacute; nguy&ecirc;n liệu sữa nhập khẩu trong th&aacute;ng 11 tiếp tục tăng th&ecirc;m 200USD/tấn. Với mức gi&aacute; hiện nay, gi&aacute; sữa b&eacute;o c&oacute; nguồn gốc New Zealand nhập về VN hiện l&agrave; 5.700USD/tấn, tăng gấp 2 lần so với thời điểm n&agrave;y năm ngo&aacute;i.&nbsp;Theo c&aacute;c Cty sữa cho biết, gi&aacute; nguy&ecirc;n liệu sữa nhập khẩu trong th&aacute;ng 11 tiếp tục tăng th&ecirc;m 200USD/tấn. Với mức gi&aacute; hiện nay, gi&aacute; sữa b&eacute;o c&oacute; nguồn gốc New Zealand nhập về VN hiện l&agrave; 5.700USD/tấn, tăng gấp 2 lần so với thời điểm n&agrave;y năm ngo&aacute;i.</p>', '15208401131494416450ny.jpg', 1),
(9, 'Nước uống chống lão hoá Kinohimitsu J’pan StemCell 50ml x 16', '<p>(D&acirc;n tr&iacute;) - Nh&agrave; s&aacute;ng lập Tesla v&agrave; SpaceX khẳng định đang l&agrave;m việc để đưa nh&acirc;n loại định cư tr&ecirc;n sao Hỏa trong bối cảnh căng thẳng về hạt nh&acirc;n gia tăng c&ugrave;ng nguy cơ xảy ra chiến tranh thế giới thứ 3.</p>', '<p>&quot;Con người phải đặt ưu ti&ecirc;n cho việc định cư tr&ecirc;n sao Hỏa để c&oacute; thể bảo tồn giống n&ograve;i trong trường hợp xảy ra Thế chiến thứ 3&quot;. Đ&acirc;y l&agrave; nội dung được Elon Musk, tỷ ph&uacute; người Mỹ, nh&agrave; s&aacute;ng lập SpaceX v&agrave; Chủ tịch Tesla, tuy&ecirc;n bố tại sự kiện SXSW 2018 tổ chức ở Mỹ.</p>\r\n\r\n<p>&quot;Điều quan trọng l&agrave; phải x&acirc;y dựng được một cơ sở tự duy tr&igrave; tr&ecirc;n sao Hỏa bởi n&oacute; c&aacute;ch đủ xa Tr&aacute;i Đất, v&agrave; c&oacute; khả năng tồn tại cao hơn tr&ecirc;n mặt trăng&quot;, Elon Musk n&oacute;i, trong bối c&aacute;ch c&aacute;ch đ&acirc;y &iacute;t ng&agrave;y, Tổng thống Mỹ Donald Trump tuy&ecirc;n bố gặp để đối thoại trực tiếp c&ugrave;ng Nh&agrave; l&atilde;nh đạo Triều Ti&ecirc;n Kim Jong-un về vấn đề căng thẳng hạt nh&acirc;n gia tăng.</p>\r\n\r\n<p>&quot;Trong trường hợp xảy ra chiến tranh thế giới thứ 3, ch&uacute;ng ta cần chắc chắn rằng c&oacute; đủ nh&acirc;n tố để x&acirc;y dựng một nền văn minh của con người ở đ&acirc;u đ&oacute; trong vũ trụ để r&uacute;t ngắn v&agrave; đưa ch&uacute;ng ta vượt qua thời kỳ đen tối&quot;, Elon Musk cho biết.</p>\r\n\r\n<p>Từ hơn một năm trở lại đ&acirc;y, c&ocirc;ng ty th&aacute;m hiểm vũ trụ SpaceX của Elon Musk đ&atilde; triển khai dự &aacute;n cung cấp phương tiện đưa con người l&ecirc;n sao Hỏa, đ&oacute; l&agrave; một t&agrave;u kh&ocirc;ng gian k&iacute;ch thước lớn, d&agrave;i hơn 100 m&eacute;t c&oacute; t&ecirc;n m&atilde; danh BFR. Tuy nhi&ecirc;n, việc x&acirc;y dựng một căn cứ tr&ecirc;n sao Hỏa sẽ đ&ograve;i hỏi những &quot;nguồn lực kinh tế khổng lồ&quot; theo Elon Musk.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Tuy vậy, Elon Musk thừa nhận khả năng thành công của dự án BFR thực hiện vào năm 2019 chỉ đạt khoảng 10%.\" id=\"img_259611\" src=\"https://dantricdn.com/thumb_w/640/2018/3/12/space-15208227447561093312804.jpg\" /></p>\r\n\r\n<p>Tuy vậy, Elon Musk thừa nhận khả năng th&agrave;nh c&ocirc;ng của dự &aacute;n BFR thực hiện v&agrave;o năm 2019 chỉ đạt khoảng 10%.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tỷ ph&uacute; người Mỹ cũng gợi &yacute; rằng sao Hỏa c&oacute; thể l&agrave; &quot;một dạng lối tho&aacute;t d&agrave;nh cho người gi&agrave;u&quot;, khi tr&iacute;ch dẫn lời của Shackleton trước chuyến th&aacute;m hiểm Nam Cực: &quot;N&oacute; l&agrave; kh&oacute; khăn, nguy hiểm, v&agrave; c&oacute; thể sẽ thiệt mạng. Nhưng lại cực kỳ tuyệt vời cho những ai c&oacute; thể sống s&oacute;t.&quot;</p>\r\n\r\n<p>Mặc d&ugrave; vậy, Elon Musk cũng thừa nhận rằng kh&ocirc;ng c&oacute; nhiều người muốn l&agrave; &quot;người ti&ecirc;n phong&quot;. &quot;Ai cũng muốn được ch&agrave;o đ&oacute;n khi l&ecirc;n tới sao Hỏa, được v&agrave;o những qu&aacute;n bar rộng lớn&quot;, Musk n&oacute;i. &quot;Đ&oacute; l&agrave; những qu&aacute;n bar Sao Hỏa đấy!&quot;</p>\r\n\r\n<p>T&ecirc;n lửa BFR của SpaceX sẽ thực hiện chuyến bay lịch sử của nh&acirc;n loại tới sao Hỏa v&agrave;o năm 2019, v&agrave; Musk thừa nhận mốc thời gian n&agrave;y l&agrave; kh&ocirc;ng cố định. &Ocirc;ng lấy th&iacute; dụ về quy tr&igrave;nh sản xuất &ocirc; t&ocirc; điện Tesla Model 3 đ&atilde; bị cản trở bởi nhiều l&yacute; do chậm trễ. Elon Musk cũng cho biết khả năng th&agrave;nh c&ocirc;ng của dự &aacute;n chỉ đạt khoảng 10%.</p>\r\n\r\n<p>&quot;T&ocirc;i sẽ kh&ocirc;ng nhận đầu tư từ bạn b&egrave; v&igrave; t&ocirc;i kh&ocirc;ng muốn họ mất tiền oan&quot;, &ocirc;ng n&oacute;i về SpaceX. Thay v&agrave;o đ&oacute;, &ocirc;ng đ&atilde; tự m&igrave;nh kiếm tiền để ph&aacute;t triển dự &aacute;n c&oacute; thể trở th&agrave;nh bước ngoặt của nh&acirc;n loại.</p>\r\n\r\n<p>B&ecirc;n cạnh hiểm họa hạt nh&acirc;n, Elon Musk chia sẻ về một mối lo ngại kh&aacute;c m&agrave; theo &ocirc;ng l&agrave; thậm ch&iacute; c&ograve;n nguy hiểm hơn, đ&oacute; l&agrave; tr&iacute; tuệ nh&acirc;n tạo (AI). &quot;Theo t&ocirc;i, AI c&ograve;n nguy hiểm hơn nhiều so với t&ecirc;n lửa hạt nh&acirc;n. V&agrave; ch&uacute;ng ta thậm ch&iacute; c&ograve;n chưa c&oacute; c&aacute;c quy định gi&aacute;m s&aacute;t chặt chẽ&quot;, Elon Musk n&oacute;i.</p>', '1522111251d2.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `ngaymua` date NOT NULL,
  `gia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `ngaymua`, `gia`) VALUES
(2, 20, '2018-02-05', 16000000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_detail`
--

CREATE TABLE `tbl_order_detail` (
  `order_detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `fk_product_id` int(11) NOT NULL,
  `c_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order_detail`
--

INSERT INTO `tbl_order_detail` (`order_detail_id`, `order_id`, `fk_product_id`, `c_number`) VALUES
(3, 2, 11, 2),
(4, 2, 9, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `pk_product_id` int(11) NOT NULL,
  `fk_category_product_id` int(11) NOT NULL,
  `c_name` varchar(500) NOT NULL,
  `c_description` varchar(2000) NOT NULL,
  `c_content` text NOT NULL,
  `c_img` varchar(500) NOT NULL,
  `c_price` float NOT NULL DEFAULT '0',
  `c_hot` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`pk_product_id`, `fk_category_product_id`, `c_name`, `c_description`, `c_content`, `c_img`, `c_price`, `c_hot`) VALUES
(20, 14, 'Máy đo huyết áp điện tử bắp tay MediKare-DK79+', '<p><strong>Cao huyết &aacute;p l&agrave; bệnh thường gặp trong cộng đồng v&agrave; gia tăng theo độ tuổi. Bệnh n&agrave;y thường g&acirc;y ra c&aacute;c biến chứng nguy hiểm ảnh hưởng đến cuộc sống v&agrave; gia tăng khả năng tử vong. Do đ&oacute; ph&ograve;ng ngừa v&agrave; điều trị bệnh huyết &aacute;p l&agrave; vấn đề cần lưu &yacute; trong cộng đồng v&igrave; những hậu quả của n&oacute;.</strong></p>', '<h1><strong>Th&ocirc;ng tin về sản phẩm&nbsp;<a href=\"http://sieuthiyte.com.vn/bai-viet/tu-van-san-pham/nhung-loai-may-do-huyet-ap-co-tay-tot-nhat-hien-nay-98.html\" target=\"_blank\" title=\"may do huyet ap dien tu bap tay\">M&aacute;y đo huyết &aacute;p điện tử bắp tay</a>&nbsp;Boso Medicus Control</strong></h1>\r\n\r\n<p><strong>Cao huyết &aacute;p l&agrave; bệnh thường gặp trong cộng đồng v&agrave; gia tăng theo độ tuổi. Bệnh n&agrave;y thường g&acirc;y ra c&aacute;c biến chứng nguy hiểm ảnh hưởng đến cuộc sống v&agrave; gia tăng khả năng tử vong. Do đ&oacute; ph&ograve;ng ngừa v&agrave; điều trị bệnh huyết &aacute;p l&agrave; vấn đề cần lưu &yacute; trong cộng đồng v&igrave; những hậu quả của n&oacute;.</strong></p>\r\n\r\n<p><img alt=\"\" src=\"http://sieuthiyte.com.vn/data/images/San-Pham/Boso-Medicus-Control-noidung6.png\" style=\"height:400px; width:600px\" />&nbsp;</p>\r\n\r\n<p><strong><a href=\"http://sieuthiyte.com.vn/may-do-huyet-ap-dien-tu/\" title=\"máy đo huyết áp\">M&aacute;y đo huyết &aacute;p</a>&nbsp;bắp tay tự động Boso Medicus Control</strong>&nbsp;l&agrave; m&aacute;y đo huyết &aacute;p điện tử d&ugrave;ng để đo huyết &aacute;p phục vụ việc theo d&otilde;i huyết &aacute;p tại nh&agrave;. M&aacute;y cho kết quả ch&iacute;nh x&aacute;c, nhanh ch&oacute;ng, v&agrave; tiện lợi. Sử dụng m&aacute;y đo huyết &aacute;p Boso Medicus Control để kiểm tra huyết &aacute;p mỗi ng&agrave;y sẽ gi&uacute;p bạn sớm ph&aacute;t hiện cao huyết &aacute;p v&agrave; tr&aacute;nh được c&aacute;c biến chứng nguy hiểm.</p>\r\n\r\n<h2><strong>Những ưu điểm của m&aacute;y đo huyết &aacute;p Boso Medicus Control</strong></h2>\r\n\r\n<p><strong>M&aacute;y đo huyết &aacute;p Boso Medicus Control</strong>&nbsp;l&agrave; loại m&aacute;y đo huyết &aacute;p tự động với kiểu d&aacute;ng đẹp, hiện đại, vận h&agrave;nh theo nguy&ecirc;n tắc dao động kế. Sự dao động được thiết lập bởi nhịp tim, truyền t&iacute;n hiệu theo v&ograve;ng b&iacute;t v&agrave; đ&aacute;nh gi&aacute; bằng bộ vi xử l&yacute;. V&igrave; vậy kh&ocirc;ng cần thiết bị nghe để x&aacute;c định khi thiết bị đang đo huyết &aacute;p.</p>', 'upload/product/1522075300a1.jpg', 1740000, 1),
(21, 14, 'Combo Máy đo đường huyết Sapphire Plus - Máy đo huyết áp Medistar+', '<p>Bệnh đ&aacute;i th&aacute;o đường v&agrave; bệnh huyết &aacute;p l&agrave; hai căn bệnh phổ biến của cuộc sống hiện đại. Theo c&aacute;c b&aacute;c sĩ chuy&ecirc;n m&ocirc;n khuyến c&aacute;o, c&aacute;ch tốt nhất để kiểm so&aacute;t căn bệnh n&agrave;y ch&igrave;nh l&agrave; thường xuy&ecirc;n kiểm tra huyết &aacute;p v&agrave; đo nồng độ đường huyết trong m&aacute;u. &nbsp;</p>', '<h1><strong>Combo mua m&aacute;y đo đường huyết Sapphire tặng m&aacute;y đo huyết &aacute;p Medistar+</strong></h1>\r\n\r\n<p>Bệnh đ&aacute;i th&aacute;o đường v&agrave; bệnh huyết &aacute;p l&agrave; hai căn bệnh phổ biến của cuộc sống hiện đại. Theo c&aacute;c b&aacute;c sĩ chuy&ecirc;n m&ocirc;n khuyến c&aacute;o, c&aacute;ch tốt nhất để kiểm so&aacute;t căn bệnh n&agrave;y ch&igrave;nh l&agrave; thường xuy&ecirc;n kiểm tra huyết &aacute;p v&agrave; đo nồng độ đường huyết trong m&aacute;u. &nbsp;</p>\r\n\r\n<p>&nbsp;<img alt=\"\" src=\"http://sieuthiyte.com.vn/data/images/10-12-combo-sapphire-medistar%2B.jpg\" style=\"height:400px; width:600px\" /></p>\r\n\r\n<h2><strong>Th&ocirc;ng tin về bộ combo sản phẩm</strong></h2>\r\n\r\n<h3><strong>1. M&aacute;y đo đường huyết Sapphire</strong></h3>\r\n\r\n<p><strong>M&aacute;y đo đường huyết Saphire Plus</strong>&nbsp;l&agrave; m&aacute;y đo đường huyết tại nh&agrave;, top những&nbsp;<a href=\"http://sieuthiyte.com.vn/bai-viet/tu-van-san-pham/mua-may-do-duong-huyet-loai-nao-tot-nhat-102.html\" target=\"_blank\" title=\"may do duong huyet tot nhat\">m&aacute;y đo đường huyết tốt nhất</a>&nbsp;hiện nay. Đ&acirc;y l&agrave; d&ograve;ng sản phẩm cao cấp của thương hiệu Medismart( Lobeck Medica- Switzerland) nổi tiếng h&agrave;ng đầu tại Thụy Sĩ.&nbsp;<strong>M&aacute;y đo đường huyết Sapphire Plus</strong>&nbsp;được nghi&ecirc;n cứu, ứng dụng sản xuất theo c&ocirc;ng nghệ điện h&oacute;a ti&ecirc;n tiến dẫn đầu thế giới. Được cải tiến mới kh&ocirc;ng sử dụng m&atilde; code que thử v&igrave; thế v&ocirc; c&ugrave;ng tiện lợi cho người sử dụng khi kiểm tra lượng đường huyết ngay tại nh&agrave;.</p>', 'upload/product/1522075377a2.png', 1230000, 1),
(23, 10, 'Máy trợ thở RESmart GII AUTO CPAP', '<p>RESmart GII AUTO CPAP sử dụng c&ocirc;ng nghệ cảm biến ti&ecirc;n tiến, tự động theo d&otilde;i h&ocirc; hấp của bệnh nh&acirc;n. C&aacute;c hệ thống điều khiển th&ocirc;ng minh, l&agrave; biện ph&aacute;p đ&aacute;ng tin cậy cho bệnh nh&acirc;n bị tắc nghẽn ngưng thở khi ngủ (OSA).</p>', '<h1><strong>Th&ocirc;ng tin về sản phẩm&nbsp;<a href=\"http://sieuthiyte.com.vn/may-tro-tho/\" target=\"_blank\">m&aacute;y trợ thở</a>&nbsp;RESMART GII AUTO CPAP</strong></h1>\r\n\r\n<p>RESmart GII AUTO CPAP sử dụng c&ocirc;ng nghệ cảm biến ti&ecirc;n tiến, tự động theo d&otilde;i h&ocirc; hấp của bệnh nh&acirc;n. C&aacute;c hệ thống điều khiển th&ocirc;ng minh, l&agrave; biện ph&aacute;p đ&aacute;ng tin cậy cho bệnh nh&acirc;n bị tắc nghẽn ngưng thở khi ngủ (OSA).</p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://sieuthiyte.com.vn/data/images/10-11-web-cpap.jpg\" style=\"height:400px; width:600px\" /></strong></p>\r\n\r\n<p><strong>M&agrave;n h&igrave;nh m&agrave;u 3.5 inch</strong><br />\r\n- Với 1 n&uacute;m điều khiển tinh tế, BMC RESmart Generation GII mang đến cho bạn 1 trải nghiệm hoạt động vượt trội.<br />\r\n- Cột hiển thị d&ograve;ng kh&iacute; theo thời gian thực gi&uacute;p theo d&otilde;i v&agrave; chăm s&oacute;c bệnh nh&acirc;n tốt hơn.</p>\r\n\r\n<p><img alt=\"\" src=\"http://sieuthiyte.com.vn/data/images/crap-2_1.jpg\" style=\"height:273px; width:400px\" /></p>', 'upload/product/1522075716a3.jpg', 18600000, 0),
(24, 7, 'Đai đỡ bụng cho bà bầu Art 5400', '<p>Đai đỡ bụng cho b&agrave; bầu Art 5400 l&agrave; sản phẩm hữu &iacute;ch cho chị em phụ nữ trong thời kỳ mang thai. Sản phẩm l&agrave; sự lựa chọn l&yacute; tưởng gi&uacute;p n&acirc;ng đỡ cơ bụng hiệu quả, ngăn ngừa t&igrave;nh trạng rạn da nhờ v&agrave;o c&aacute;c dải băng đ&agrave;n hồi. Lớp tăng cường hỗ trợ bụng dưới, hai b&ecirc;n h&ocirc;ng, xương sống l&agrave;m giảm cảm gi&aacute;c nặng nề, đau lưng. Sản phẩm hỗ trợ m&agrave; kh&ocirc;ng tạo &aacute;p lực l&ecirc;n phần m&ocirc;ng, mở rộng dần theo sự ph&aacute;t triển của thai nhi.</p>', '<h1><strong>Đai đỡ bụng cho b&agrave; bầu Art 5400</strong></h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Đai đỡ bụng cho b&agrave; bầu Art 5400 l&agrave; sản phẩm hữu &iacute;ch cho chị em phụ nữ trong thời kỳ mang thai. Sản phẩm l&agrave; sự lựa chọn l&yacute; tưởng gi&uacute;p n&acirc;ng đỡ cơ bụng hiệu quả, ngăn ngừa t&igrave;nh trạng rạn da nhờ v&agrave;o c&aacute;c dải băng đ&agrave;n hồi. Lớp tăng cường hỗ trợ bụng dưới, hai b&ecirc;n h&ocirc;ng, xương sống l&agrave;m giảm cảm gi&aacute;c nặng nề, đau lưng. Sản phẩm hỗ trợ m&agrave; kh&ocirc;ng tạo &aacute;p lực l&ecirc;n phần m&ocirc;ng, mở rộng dần theo sự ph&aacute;t triển của thai nhi.</p>\r\n\r\n<p>Được thiết kế liền mảnh, độ đ&agrave;n hồi tốt kh&ocirc;ng g&acirc;y k&iacute;ch ứng cho da, kh&ocirc;ng tạo cảm gi&aacute;c g&ograve; b&oacute; kh&oacute; chịu cho b&agrave; bầu</p>\r\n\r\n<p><img alt=\"\" src=\"http://sieuthiyte.com.vn/data/images/dai-do-bung-cho-ba-bau-art-5400-2.png\" style=\"height:500px; width:500px\" /></p>\r\n\r\n<p>Đai đỡ bụng cho b&agrave; bầu Art 5400 được l&agrave;m từ chất liệu vải sợi sinh học c&oacute; độ thấm h&uacute;t tốt, tho&aacute;ng m&aacute;t, kh&aacute;ng khuẩn, loại bỏ m&ugrave;i mồ h&ocirc;i.</p>\r\n\r\n<p>Đặc biệt, c&aacute;c nghi&ecirc;n cứu khoa học gần đ&acirc;y đ&atilde; chứng minh rằng, loại sợi sinh học l&agrave;m đai đỡ bụng cho b&agrave; bầu Art 5400 c&oacute; t&aacute;c dụng bảo vệ thai nhi khỏi s&oacute;ng điện từ điện thoại, từ đ&agrave;i ph&aacute;t thanh, truyền h&igrave;nh....</p>\r\n\r\n<p>D&ograve;ng sản phẩm ho&agrave;n to&agrave;n ph&ugrave; hợp với cơ thể, thuận lợi cho hoạt động v&agrave; di chuyển. Dễ giặt, tho&aacute;ng m&aacute;t, thấm h&uacute;t mồ h&ocirc;i.</p>', 'upload/product/1522075785a4.jpg', 599000, 0),
(25, 14, 'Nước uống chống lão hoá Kinohimitsu J’pan StemCell 50ml x 16', '<p><strong>Kinohimitsu J&rsquo;pan StemCell</strong>&nbsp;l&agrave;&nbsp;<strong>nước uống chống l&atilde;o h&oacute;a</strong>&nbsp;da ti&ecirc;n tiến được nhập khẩu từ Nhật Bản, gi&uacute;p cơ thể khỏe mạnh v&agrave; trẻ trung hơn</p>', '<h1><strong>Nước uống chống l&atilde;o ho&aacute; Kinohimitsu J&rsquo;pan StemCell 50ml x 16</strong></h1>\r\n\r\n<p><strong>Kinohimitsu J&rsquo;pan StemCell</strong>&nbsp;l&agrave;&nbsp;<strong>nước uống chống l&atilde;o h&oacute;a</strong>&nbsp;da ti&ecirc;n tiến được nhập khẩu từ Nhật Bản, gi&uacute;p cơ thể khỏe mạnh v&agrave; trẻ trung hơn.</p>\r\n\r\n<p><img alt=\"\" src=\"http://sieuthiyte.com.vn/data/images/8-8-snow-lotus-STEMCELL-3.jpg\" style=\"height:400px; width:602px\" /></p>\r\n\r\n<h2><strong>C&ocirc;ng dụng v&agrave; ưu điểm của sản phẩm</strong></h2>\r\n\r\n<ul>\r\n	<li>Sản phẩm được sản xuất bằng c&ocirc;ng nghệ sinh học hiện đại đảm bảo được chất lượng v&agrave; sự tinh khiết</li>\r\n	<li>Gi&uacute;p bảo vệ c&aacute;c tế bảo khỏi c&aacute;c gốc tự do</li>\r\n	<li>Nước uống thơm ngon, dễ uống</li>\r\n	<li>Kh&ocirc;ng chứa c&aacute;c chất phụ gia, 100% từ tự nhi&ecirc;n, kh&ocirc;ng đường, kh&ocirc;ng c&oacute; chất bảo quản, kh&ocirc;ng c&oacute; m&agrave;u nh&acirc;n tạo hoặc hương liệu... Đặc biệt kh&ocirc;ng sử dụng c&aacute;c hormone, steroid v&agrave; h&oacute;a chất, đ&atilde; được kiểm tra kỹ lưỡng bởi SGS</li>\r\n	<li>Dạng lỏng cho ph&eacute;p cơ thể hấp thụ nhanh ch&oacute;ng.</li>\r\n	<li>Chai nhỏ tiện lợi c&oacute; thể uống mọi l&uacute;c mọi nơi</li>\r\n</ul>\r\n\r\n<h2><strong>Th&ocirc;ng tin về&nbsp;<a href=\"http://sieuthiyte.com.vn/nuoc-uong-chong-lao-hoa-kinohimitsu-j-pan-stemcell-50ml-x-16-888.html\" target=\"_blank\">nước uống chống l&atilde;o ho&aacute;</a></strong></h2>\r\n\r\n<ul>\r\n	<li>Đ&oacute;ng g&oacute;i: 1 hộp&nbsp;<strong>16 chai 50ml</strong></li>\r\n	<li>Hướng dẫn sử dụng:&nbsp;<strong>1 chai mỗi ng&agrave;y</strong>, uống trước bữa ăn s&aacute;ng hoặc đi ngủ. Lắc đều trước khi uống. Giữ ướp lạnh cho hương vị ngon.&nbsp;<strong>Người d&ugrave;ng lần đầu:</strong>&nbsp;1 chai mỗi ng&agrave;y trong 6 ng&agrave;y li&ecirc;n tục.</li>\r\n</ul>', 'upload/product/1522075837a5.jpg', 2990000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_support_online`
--

CREATE TABLE `tbl_support_online` (
  `pk_id` int(11) NOT NULL,
  `c_name` varchar(500) NOT NULL,
  `c_contact` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_support_online`
--

INSERT INTO `tbl_support_online` (`pk_id`, `c_name`, `c_contact`) VALUES
(1, 'Email liên hệ', 'support@mail.com'),
(2, 'Tư vấn bán hàng 2', 'Mr. Tuấn: (04) 3786 8904'),
(3, 'Tư vấn bán hàng 1', 'Mrs. Dung: (04) 3786 8904');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Văn A@', 'admin@mail.com', '$2y$10$5b9iVB3dQCxx.P5yvV90SeF8j6EZSAcLZA.PYPT4VtBwy8fTmsN8a', 'C0Ix15VD43V22QPA5ZlOxai0eG15gBjyMnwcKU4sqh03fmkSGdkbt9jsPQ9t', NULL, NULL),
(2, 'Nguyễn Văn B', 'admin1@mail.com', '$2y$10$5b9iVB3dQCxx.P5yvV90SeF8j6EZSAcLZA.PYPT4VtBwy8fTmsN8a', NULL, NULL, NULL),
(3, 'Nguyễn Văn C', 'admin2@mail.com', '$2y$10$5b9iVB3dQCxx.P5yvV90SeF8j6EZSAcLZA.PYPT4VtBwy8fTmsN8a', NULL, NULL, NULL),
(4, 'Nguyễn Văn D', 'admin3@mail.com', '$2y$10$5b9iVB3dQCxx.P5yvV90SeF8j6EZSAcLZA.PYPT4VtBwy8fTmsN8a', NULL, NULL, NULL),
(5, 'Nguyễn Văn E', 'admin4@mail.com', '$2y$10$5b9iVB3dQCxx.P5yvV90SeF8j6EZSAcLZA.PYPT4VtBwy8fTmsN8a', NULL, NULL, NULL),
(6, 'Nguyễn Văn F', 'admin5@mail.com', '$2y$10$9tmBXJe8eNuy1lq/T43cUufps9ISE/efUAqUxTgrQgo2tBwcZZp7G', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`pk_category_product_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`pk_news_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD PRIMARY KEY (`order_detail_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`pk_product_id`);

--
-- Indexes for table `tbl_support_online`
--
ALTER TABLE `tbl_support_online`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `pk_category_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `pk_news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `pk_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_support_online`
--
ALTER TABLE `tbl_support_online`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
