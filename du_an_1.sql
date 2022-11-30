-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 26, 2022 lúc 11:34 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `du_an_1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `blogId` int(11) NOT NULL,
  `blogDate` datetime NOT NULL,
  `blogCateId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `blogContent` varchar(1000) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `imageBlog` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`blogId`, `blogDate`, `blogCateId`, `userId`, `blogContent`, `content`, `imageBlog`) VALUES
(1, '2022-11-11 10:04:26', 1, 2, 'Các bước cần thiết để bảo trì một chiếc xe đạp MTB', 'Bước 1: Tháo bỏ các phụ kiện trên tay lái \r\nTháo bỏ các phụ kiện ở trên cùng của phần tay lái bao gồm đèn , chuông… Nếu như xe đạp của bạn sử dụng phanh V hãy giải phóng cáp phanh bắt đầu với phanh phía trước . Đẩy hai bộ kẹp phanh vào rìa bánh để có thể ', 'baotri.webp'),
(2, '2022-11-11 10:06:00', 1, 2, 'Hiểu về hệ thống truyền động , cách sử dụng bánh răng cơ bản', 'Có năm phần chính của xe đạp tiêu chuẩn cho phép bạn thay đổi bánh răng và thay đổi cách dễ dàng để đạp xe đạp của bạn. Chúng bao gồm những thành phần sau:\r\n\r\n-Đĩa trước\r\n\r\n-Líp\r\n\r\n-Xích\r\n\r\n-Derailleur\r\n\r\n-Tay đề\r\n\r\nTrong đó riêng phần đĩa trước , líp, xí', 'cau_tao.webp'),
(3, '2022-11-11 10:06:00', 1, 2, ' Địa điểm đẹp để phượt bằng xe đạp quanh Hà Nội', '1: Ba Vì\r\n\r\nĐi đến Ba Vì có lẽ là hành trình đơn giản nhất trong danh sách, với khoảng cách chỉ 50 km, chuyến đi này hoàn toàn mang tính chất thư giãn. Không khí mát mẻ của Ba Vì sẽ đem lại cho bạn cảm giác thư thái nhất. Tại đây khách du lịch thường đến ', 'bavi.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogcate`
--

CREATE TABLE `blogcate` (
  `blogCateId` int(11) NOT NULL,
  `blogCateName` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `blogcate`
--

INSERT INTO `blogcate` (`blogCateId`, `blogCateName`) VALUES
(1, 'danh mục 1'),
(2, 'danh mục 2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `brandId` int(11) NOT NULL,
  `brandName` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`brandId`, `brandName`) VALUES
(0, 'khong xac dinh'),
(1, 'Xe đạp địa hình'),
(2, 'Xe đạp thời trang'),
(3, 'Xe đạp thông dụng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `commentId` int(11) NOT NULL,
  `commentContent` varchar(1000) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `userId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `commentDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment_blog`
--

CREATE TABLE `comment_blog` (
  `comment_blogId` int(11) NOT NULL,
  `comment_contenblog` varchar(255) NOT NULL,
  `userId` int(11) NOT NULL,
  `blogId` int(11) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comment_blog`
--

INSERT INTO `comment_blog` (`comment_blogId`, `comment_contenblog`, `userId`, `blogId`, `comment_date`) VALUES
(3, 'bai viet rat bo ich\r\n', 2, 3, '2022-11-17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetail`
--

CREATE TABLE `orderdetail` (
  `orderDetailId` int(11) NOT NULL,
  `orderId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `totalMoney` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `orderdetail`
--

INSERT INTO `orderdetail` (`orderDetailId`, `orderId`, `productId`, `quantity`, `totalMoney`) VALUES
(18, 36, 7, 1, 1000000),
(19, 37, 7, 1, 1000000),
(20, 37, 12, 3, 13800000),
(23, 39, 1, 1, 1000000),
(24, 39, 7, 2, 2000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `orderId` int(11) NOT NULL,
  `tenKh` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `orderDate` datetime NOT NULL,
  `totalMoney` double NOT NULL,
  `orderNote` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `statusId` int(11) NOT NULL,
  `profit` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`orderId`, `tenKh`, `orderDate`, `totalMoney`, `orderNote`, `location`, `sdt`, `statusId`, `profit`) VALUES
(36, 'hà viet hiệp', '2022-11-19 00:00:00', 1000000, 'giao ngay', 'hà nội', 111, 1, 0),
(37, 'admin', '2022-11-19 00:00:00', 14800000, 'abc', 'hà nội', 112, 4, 0),
(39, 'nguyen van a', '2022-11-22 00:00:00', 3000000, 'giao ngay', 'hà nội', 978289819, 3, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `productId` int(11) NOT NULL,
  `productName` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `productPrice` double NOT NULL,
  `productColor` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `productSize` int(11) NOT NULL,
  `brandId` int(11) NOT NULL,
  `productImage` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `productDesc` varchar(1000) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `productDiscount` int(11) DEFAULT 0,
  `productStatus` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=available',
  `importPrice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`productId`, `productName`, `productPrice`, `productColor`, `productSize`, `brandId`, `productImage`, `productDesc`, `productDiscount`, `productStatus`, `importPrice`) VALUES
(1, 'XE ĐẠP SPORTSLINK FIXED GEAR SINGLE AVENTON', 1000000, 'Xanh, Đỏ', 50, 1, 'dia_hinh1.webp,dia_hinh2.webp,dia_hinh3.webp,dia_hinh4.webp', '                                                                                Xe đạp được thiết kế theo hướng giản lược tối đa các chi tiết, bánh sau hoàn toàn quay theo sự điều khiển của người đạp cùng với đó là bộ khung nhẹ, vành bánh rộng, không chắn bùn, không đèn.\r\nFixed Gear là chiếc xe hấp dẫn bởi nó luôn khiến người ta phải khám phá, phải tìm tòi ngay từ khi mới làm quen với chiếc xe.\r\nBàn đạp xe cũng được chăm chút với thiết kế truyền thống dễ sử dụng độ bền cao.                                                                        ', 0, 1, 10000),
(2, 'Xe Đạp Fixed Gear Single', 1890000, 'xanh,đỏ,trắng', 50, 1, 'diahinh5.webp,diahinh6.webp,diahinh7.webp,diahinh8.webp', 'Đường nét trên xe được thiết kế sắc sảo, cấu trúc khung sườn với bảng to táo bạo, lạ mắt  khung xe được làm từ hợp kim nhôm siêu nhẹ, phủ sơn hấp cao cấp, bền màu, với sự kết hợp màu sắc tinh tế, trẻ trung phù hợp với sở thích của các bạn trẻ.\r\n\r\n<h3>Bộ biến tốc Shimano Tourney</h3></br>\r\nSản phẩm được tích hợp bộ biến tốc: Shimano Tourney 21 tốc độ với 3 đĩa trước và 7 líp sau kết hợp với tay đề Shimano chính hãng giúp di chuyển nhanh hơn những chiếc xe đạp bình thường, cho phép bạn băng qua mọi địa hình một cách dễ dàng nhất, đem lại cho bạn sự cân bằng, thoải mái và dễ chịu khi lái xe.\r\n\r\n<h3>Bánh xe 26 inches an toàn</h3></br>\r\nXe đạp đi kèm theo là bánh xe 26 inches với thiết kế các đường rãnh sâu, bề mặt nhiều gai, tăng khả năng bám đường và hệ thống thắng dĩa giữ bạn an toàn trong mọi điều kiện thời tiết.\r\n\r\n<h3>Giò dĩa cao cấp</h3></br>\r\nGiò dĩa của xe được làm  bằng chất liệu hợp kim nhôm cao cấp, chống gỉ, an toàn và giúp chiếc xe thêm nhẹ. Ngoài ra, để hỗ trợ các bạn lưu thô', 0, 1, 1800000),
(7, '\r\nXe Đạp Fixed Gear Single Sportslink', 1000000, 'Vàng,Đen,Trắng,Xanh', 50, 1, 'diahinh9.webp,diahinh10.webp,diahinh11.webp,diahinh12.webp', 'Dòng xe đường phố biểu diễn\r\n\r\nKết cấu khung chắc chắn\r\n\r\nMàu sắc trẻ trung, cá tính\r\n\r\nSản phẩm chưa được lắp hoàn chỉnh (Khách hàng cần lắp bánh trước, ghi đông, bàn đạp và giỏ xe)\r\n\r\nĐược làm từ chất liệu khung sườn bằng sắt, vành bằng nhôm không gỉ, sẽ giúp tăng thêm phần chắc chắn khi biểu diễn.\r\nSản phẩm có thiết kế đơn giản, gọn nhẹ với màu sắc nổi bật và cá tính, là dòng xe đạp thể thao không phanh đang được ưa chuộng bởi giới trẻ.\r\nSử dụng phụ tùng cao cấp, săm lốp 700 x 23, nhiều mẫu mã, luôn có phụ tùng thay thế và bền bỉ theo thời gian.\r\nThể thao rất tốt cho cơ thể bạn, trong đó đạp xe đạp là cách tốt nhất để tăng cường sức khỏe, giúp bạn dẻo dai, minh mẫn trong công việc', 50, 1, 900000),
(8, 'Xe đạp thể thao GIANT ATX 610', 3450000, 'Xanh,Đỏ,Xám', 50, 1, 'diahinh13.webp,diahinh14.webp,diahinh15.webp,diahinh16.webp', 'Thiết kế mạnh mẽ, cá tính\r\nXe Đạp Địa Hình Fornix BFM26-NEO được thiết kế với những đường nét mạnh mẽ – cá tính, tạo nên kiểu dáng độc đáo của mẫu FM-NEO đem đến phong cách riêng biệt cho chủ sở hữu.\r\n\r\nĐường nét trên xe được thiết kế sắc sảo, cấu trúc khung sườn với bảng to táo bạo, lạ mắt  khung xe được làm từ hợp kim nhôm siêu nhẹ, phủ sơn hấp cao cấp, bền màu, với sự kết hợp màu sắc tinh tế, trẻ trung phù hợp với sở thích của các bạn trẻ.\r\n\r\nBộ biến tốc Shimano Tourney\r\nSản phẩm được tích hợp bộ biến tốc: Shimano Tourney 21 tốc độ với 3 đĩa trước và 7 líp sau kết hợp với tay đề Shimano chính hãng giúp di chuyển nhanh hơn những chiếc xe đạp bình thường, cho phép bạn băng qua mọi địa hình một cách dễ dàng nhất, đem lại cho bạn sự cân bằng, thoải mái và dễ chịu khi lái xe.\r\n\r\nBánh xe 26 inches an toàn\r\nXe đạp đi kèm theo là bánh xe 26 inches với thiết kế các đường rãnh sâu, bề mặt nhiều gai, tăng khả năng bám đường và hệ thống thắng dĩa giữ bạn an toàn trong mọi điều kiện thời tiết.\r\n', 0, 1, 3400000),
(9, 'Xe Đạp Dunlop Nữ', 1950000, 'Vàng,Xanh', 50, 3, 'thongdung1.webp,thongdung2.webp,thongdung3.webp,thongdung4.webp', 'Màu xanh dương nhã nhặn\r\nXuất xứ từ Nhật Bản\r\nDòng xe đạp mini cao cấp\r\nChất liệu cao cấp, bền đẹp\r\nPhù hợp để đi học, đi làm\r\nKhung xe bằng hợp kim đồng bền bỉ\r\nSản phẩm chưa được lắp hoàn chỉnh (Khách hàng cần lắp bánh trước, ghi đông, bàn đạp và giỏ xe', 0, 1, 1900000),
(10, 'Xe Đạp Thời Trang Dunlop Nữ', 2000000, 'Đỏ,Đen', 50, 3, 'thongdung5.jpg,thongdung6.jpg,thongdung7.jpg,thongdung8.jpg', 'Màu xanh dương nhã nhặn\r\nXuất xứ từ Nhật Bản\r\nDòng xe đạp mini cao cấp\r\nChất liệu cao cấp, bền đẹp\r\nPhù hợp để đi học, đi làm\r\nKhung xe bằng hợp kim đồng bền bỉ\r\nSản phẩm chưa được lắp hoàn chỉnh (Khách hàng cần lắp bánh trước, ghi đông, bàn đạp và giỏ xe)', 0, 1, 1900000),
(11, 'Xe đạp mini Nhật CAT2633', 1000000, 'Đỏ,Cam,Xanh', 50, 3, 'thongdung9.webp,thongdung10.webp,thongdung11.webp,thongdung12.webp', 'Màu xanh dương nhã nhặn\r\nXuất xứ từ Nhật Bản\r\nDòng xe đạp mini cao cấp\r\nChất liệu cao cấp, bền đẹp\r\nPhù hợp để đi học, đi làm\r\nKhung xe bằng hợp kim đồng bền bỉ\r\nSản phẩm chưa được lắp hoàn chỉnh (Khách hàng cần lắp bánh trước, ghi đông, bàn đạp và giỏ xe)', 0, 1, 900000),
(12, 'Xe Đạp Mini Nhật Bản Maruishi', 4600000, 'Hồng,Xanh,Đỏ', 50, 3, 'thongdung13.webp,thongdung14.webp,thongdung15.webp,thongdung16.webp', 'Màu xanh dương nhã nhặn\r\nXuất xứ từ Nhật Bản\r\nDòng xe đạp mini cao cấp\r\nChất liệu cao cấp, bền đẹp\r\nPhù hợp để đi học, đi làm\r\nKhung xe bằng hợp kim đồng bền bỉ\r\nSản phẩm chưa được lắp hoàn chỉnh (Khách hàng cần lắp bánh trước, ghi đông, bàn đạp và giỏ xe)', 0, 1, 4000000),
(13, 'Xe Đạp Thời Trang Fornix BFM26-NEO', 3180000, 'Xanh,Đỏ,Vàng', 50, 2, 'thoitrang1.webp,thoitrang2.webp,thoitrang3.webp,thoitrang4.webp', 'Xe Đạp Thời trang Fornix BFM26-NEO được thiết kế với những đường nét mạnh mẽ – cá tính, tạo nên kiểu dáng độc đáo của mẫu FM-NEO đem đến phong cách riêng biệt cho chủ sở hữu.\r\n\r\nĐường nét trên xe được thiết kế sắc sảo, cấu trúc khung sườn với bảng to táo bạo, lạ mắt  khung xe được làm từ hợp kim nhôm siêu nhẹ, phủ sơn hấp cao cấp, bền màu, với sự kết hợp màu sắc tinh tế, trẻ trung phù hợp với sở thích của các bạn trẻ.\r\n\r\nBộ biến tốc Shimano Tourney\r\nSản phẩm được tích hợp bộ biến tốc: Shimano Tourney 21 tốc độ với 3 đĩa trước và 7 líp sau kết hợp với tay đề Shimano chính hãng giúp di chuyển nhanh hơn những chiếc xe đạp bình thường, cho phép bạn băng qua mọi địa hình một cách dễ dàng nhất, đem lại cho bạn sự cân bằng, thoải mái và dễ chịu khi lái xe.\r\n\r\nBánh xe 26 inches an toàn\r\nXe đạp đi kèm theo là bánh xe 26 inches với thiết kế các đường rãnh sâu, bề mặt nhiều gai, tăng khả năng bám đường và hệ thống thắng dĩa giữ bạn an toàn trong mọi điều kiện thời tiết.\r\n\r\nGiò dĩa cao cấp\r\nGiò dĩ', 0, 1, 3100000),
(14, 'Xe Đạp Thời Trang MTB GIANT RINCON DISC', 5000000, 'Xám,Hồng,Xanh', 50, 2, 'thoitrang5.webp,thoitrang6.webp,thoitrang7.webp,thoitrang8.webp', 'Xe Đạp Thời Trang Fornix BFM26-NEO được thiết kế với những đường nét mạnh mẽ – cá tính, tạo nên kiểu dáng độc đáo của mẫu FM-NEO đem đến phong cách riêng biệt cho chủ sở hữu.\r\n\r\nĐường nét trên xe được thiết kế sắc sảo, cấu trúc khung sườn với bảng to táo bạo, lạ mắt  khung xe được làm từ hợp kim nhôm siêu nhẹ, phủ sơn hấp cao cấp, bền màu, với sự kết hợp màu sắc tinh tế, trẻ trung phù hợp với sở thích của các bạn trẻ.\r\n\r\nBộ biến tốc Shimano Tourney\r\nSản phẩm được tích hợp bộ biến tốc: Shimano Tourney 21 tốc độ với 3 đĩa trước và 7 líp sau kết hợp với tay đề Shimano chính hãng giúp di chuyển nhanh hơn những chiếc xe đạp bình thường, cho phép bạn băng qua mọi địa hình một cách dễ dàng nhất, đem lại cho bạn sự cân bằng, thoải mái và dễ chịu khi lái xe.\r\n\r\nBánh xe 26 inches an toàn\r\nXe đạp đi kèm theo là bánh xe 26 inches với thiết kế các đường rãnh sâu, bề mặt nhiều gai, tăng khả năng bám đường và hệ thống thắng dĩa giữ bạn an toàn trong mọi điều kiện thời tiết.\r\n\r\nGiò dĩa cao cấp\r\nGiò dĩ', 0, 1, 4500000),
(15, 'Xe đạp thời trang XV30', 10000000, 'Đen,Trắng,Xanh', 50, 2, 'thoitrang9.webp,thoitrang10.webp,thoitrang11.webp,thoitrang12.webp', 'Xe Đạp Thời Trang Fornix BFM26-NEO được thiết kế với những đường nét mạnh mẽ – cá tính, tạo nên kiểu dáng độc đáo của mẫu FM-NEO đem đến phong cách riêng biệt cho chủ sở hữu.\r\n\r\nĐường nét trên xe được thiết kế sắc sảo, cấu trúc khung sườn với bảng to táo bạo, lạ mắt  khung xe được làm từ hợp kim nhôm siêu nhẹ, phủ sơn hấp cao cấp, bền màu, với sự kết hợp màu sắc tinh tế, trẻ trung phù hợp với sở thích của các bạn trẻ.\r\n\r\nBộ biến tốc Shimano Tourney\r\nSản phẩm được tích hợp bộ biến tốc: Shimano Tourney 21 tốc độ với 3 đĩa trước và 7 líp sau kết hợp với tay đề Shimano chính hãng giúp di chuyển nhanh hơn những chiếc xe đạp bình thường, cho phép bạn băng qua mọi địa hình một cách dễ dàng nhất, đem lại cho bạn sự cân bằng, thoải mái và dễ chịu khi lái xe.\r\n\r\nBánh xe 26 inches an toàn\r\nXe đạp đi kèm theo là bánh xe 26 inches với thiết kế các đường rãnh sâu, bề mặt nhiều gai, tăng khả năng bám đường và hệ thống thắng dĩa giữ bạn an toàn trong mọi điều kiện thời tiết.\r\n\r\nGiò dĩa cao cấp\r\nGiò dĩ', 0, 1, 9000000),
(16, 'Xe đạp thời trang NN', 500000, 'Xám,Đen', 50, 2, 'thoitrang13.webp,thoitrang14.webp,thoitrang15.webp,thoitrang16.webp', 'Với thiết kế thể thao, nhỏ gọn và khả năng vận hành mạnh mẽ, nhiều công nghệ hiện đại tiên tiến được tích hợp trên xe, Giant Escape 2 City Disc chắc chắn sẽ tiếp tục chiếm được tình cảm của nhiều người tiêu dùng tại Việt Nam, đặc biệt là nhóm khách hàng công sở, người trung nên và những người đam mê phượt ngao du khám phá.\r\n\r\nVới khung xe Giant Escape 2 City Disc được làm từ nhôm Aluxx, cân bằng tốt giữa trọng lượng  nhẹ và sự thoải mái.\r\n\r\nBộ truyền động chính của xe là Shimano FD-TY710/Altus RD-M310 tốc độ vận hành mạnh mẽ cho phép người đạp tăng tốc, dễ dàng chuyển đĩa –líp phù hợp với từng cung đường khác nhau. Cái hay ở Giant Escape 2 City Disc chính là tay đề rất nhạy, khi chuyển sang tốc nhanh người đạp không có hiện tượng giật ngược ra phía sau.\r\n\r\nXe sử dụng phanh đĩa thuỷ lực Tektro, kết hợp đường kính dĩa xe rộng 160mm hoạt động chính xác và hiệu quả, phanh rất nhạy xe sẽ dừng lại ngay lập tức khi người đạp thực hiện thao tác bóp phanh.', 0, 1, 400000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `roleId` int(11) NOT NULL,
  `roleName` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`roleId`, `roleName`) VALUES
(1, 'khách hàng vãng lai'),
(2, 'khách hàng'),
(3, 'nhân viên'),
(4, 'quản trị viên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `statusorder`
--

CREATE TABLE `statusorder` (
  `id` int(11) NOT NULL,
  `statusName` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `statusorder`
--

INSERT INTO `statusorder` (`id`, `statusName`) VALUES
(1, 'Chưa Xác Nhận'),
(2, 'Đã Xác Nhận'),
(3, 'Đang Giao Hàng'),
(4, 'Đã Giao Hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `userName` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `userEmail` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `userPassword` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `userGender` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=male 1=female',
  `roleId` int(11) NOT NULL,
  `userBirthday` date NOT NULL,
  `userImage` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`userId`, `userName`, `userEmail`, `userPassword`, `userGender`, `roleId`, `userBirthday`, `userImage`, `sdt`, `location`) VALUES
(1, 'khách hàng 1', 'kh1@gmail.com', '123456', 1, 2, '2022-11-09', 'kh1.jpg', 0, ''),
(2, 'admin', 'ad1@gmail.com', '123456', 0, 4, '0000-00-00', 'ad1.jpg', 0, ''),
(4, 'hiep', 'chuongduong0123@gmail.com', '456', 1, 1, '2022-11-14', '114237.jpg', 111, 'hà nội');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blogId`),
  ADD KEY `lk_blog_blogCate` (`blogCateId`),
  ADD KEY `lk_blog_user` (`userId`);

--
-- Chỉ mục cho bảng `blogcate`
--
ALTER TABLE `blogcate`
  ADD PRIMARY KEY (`blogCateId`);

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brandId`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentId`),
  ADD KEY `lk_comment_user` (`userId`);

--
-- Chỉ mục cho bảng `comment_blog`
--
ALTER TABLE `comment_blog`
  ADD PRIMARY KEY (`comment_blogId`),
  ADD KEY `userId` (`userId`),
  ADD KEY `blogId` (`blogId`);

--
-- Chỉ mục cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`orderDetailId`),
  ADD KEY `lk_order_orderDetail` (`orderId`),
  ADD KEY `lk_order_product` (`productId`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderId`),
  ADD KEY `orders_pk` (`statusId`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productId`),
  ADD KEY `lk_product_brand` (`brandId`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`roleId`);

--
-- Chỉ mục cho bảng `statusorder`
--
ALTER TABLE `statusorder`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`),
  ADD KEY `lk_user_role` (`roleId`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `blogId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `blogcate`
--
ALTER TABLE `blogcate`
  MODIFY `blogCateId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `brandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `commentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `comment_blog`
--
ALTER TABLE `comment_blog`
  MODIFY `comment_blogId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `orderDetailId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `roleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `statusorder`
--
ALTER TABLE `statusorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `lk_blog_blogCate` FOREIGN KEY (`blogCateId`) REFERENCES `blogcate` (`blogCateId`),
  ADD CONSTRAINT `lk_blog_user` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `lk_comment_user` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);

--
-- Các ràng buộc cho bảng `comment_blog`
--
ALTER TABLE `comment_blog`
  ADD CONSTRAINT `comment_blog_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`),
  ADD CONSTRAINT `comment_blog_ibfk_2` FOREIGN KEY (`blogId`) REFERENCES `blog` (`blogId`);

--
-- Các ràng buộc cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `lk_order_orderDetail` FOREIGN KEY (`orderId`) REFERENCES `orders` (`orderId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lk_order_product` FOREIGN KEY (`productId`) REFERENCES `product` (`productId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_pk` FOREIGN KEY (`statusId`) REFERENCES `statusorder` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `lk_product_brand` FOREIGN KEY (`brandId`) REFERENCES `brand` (`brandId`);

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `lk_user_role` FOREIGN KEY (`roleId`) REFERENCES `role` (`roleId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
