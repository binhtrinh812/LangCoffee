-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 03, 2024 lúc 05:15 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `langcoffee`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `admin_sdt` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `email`, `admin_sdt`, `created_at`, `updated_at`) VALUES
(1, 'admin', '123456789', 'admin@example.com', '0123456789', '2024-07-02 02:48:08', '2024-07-02 02:48:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `booking_name` varchar(255) NOT NULL,
  `booking_thongtin` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `booking`
--

INSERT INTO `booking` (`booking_id`, `booking_name`, `booking_thongtin`) VALUES
(1, 'Book buổi tâm sự ', 'Đặt lịch buổi tâm sự '),
(2, 'phòng trừ', 'phòng trừ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc_sanpham`
--

CREATE TABLE `danhmuc_sanpham` (
  `danhmuc_id` int(11) NOT NULL,
  `danhmuc_name` varchar(255) NOT NULL,
  `danhmuc_thongtin` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc_sanpham`
--

INSERT INTO `danhmuc_sanpham` (`danhmuc_id`, `danhmuc_name`, `danhmuc_thongtin`) VALUES
(1, 'Combo nổi bật', 'Combo nổi bật'),
(2, 'bánh', 'Các loại bánh ngọt và bánh mặn'),
(3, 'cà phê', 'Các loại cà phê'),
(4, 'trà', 'Các loại trà'),
(5, 'Đồ uống khác', 'Những thức uống khác');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoitamsu`
--

CREATE TABLE `nguoitamsu` (
  `nguoitamsu_id` int(11) NOT NULL,
  `nguoitamsu_name` varchar(255) NOT NULL,
  `nguoitamsu_sdt` varchar(11) NOT NULL,
  `nguoitamsu_email` varchar(100) NOT NULL,
  `nguoitamsu_thongtin` text NOT NULL,
  `nguoitamsu_anh` varchar(255) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoitamsu`
--

INSERT INTO `nguoitamsu` (`nguoitamsu_id`, `nguoitamsu_name`, `nguoitamsu_sdt`, `nguoitamsu_email`, `nguoitamsu_thongtin`, `nguoitamsu_anh`, `booking_id`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Văn A', '0365729460', 'nguyenvana@example.com', 'Người tâm sự chuyên nghiệp, có kinh nghiệm lâu năm', 'ảnh nam.png\r\n', 1, '2024-07-02 02:47:29', '2024-07-02 16:44:42'),
(3, 'Lê Đình C', '0384256982', 'ledinhc@example.com', 'Người tâm sự tận tâm, chu đáo', 'ảnh nam2.png', 1, '2024-07-02 02:47:29', '2024-07-03 00:44:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `sp_id` int(11) NOT NULL,
  `sp_name` varchar(255) NOT NULL,
  `sp_gia` varchar(11) NOT NULL,
  `sp_thongtin` text NOT NULL,
  `sp_anh` varchar(255) NOT NULL,
  `danhmuc_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`sp_id`, `sp_name`, `sp_gia`, `sp_thongtin`, `sp_anh`, `danhmuc_id`, `created_at`, `updated_at`) VALUES
(1, 'bạc xỉu', '40000', 'Bạc xỉu đá', 'bạc xỉu 250x260.png', 3, '2024-07-02 16:35:46', '2024-07-02 16:39:58'),
(2, 'bánh chuối', '30000', 'Bánh chuối ngon', 'bánh chuối 250x260.png', 2, '2024-07-02 16:35:46', '2024-07-02 16:40:04'),
(3, 'bánh táo', '35000', 'Bánh táo thơm ngon', 'bánh táo 250x260.png', 2, '2024-07-02 16:35:46', '2024-07-02 16:40:11'),
(4, 'trà đào cam sả', '45000', 'Trà đào cam sả mát lạnh', 'trà đào cam sả 250x260.png', 4, '2024-07-02 16:35:46', '2024-07-02 16:40:18'),
(5, 'trà gừng long nhãn', '50000', 'Trà gừng long nhãn ấm áp', 'trà gừng long nhãn 250x260.png', 4, '2024-07-02 16:35:46', '2024-07-02 16:40:29'),
(6, 'espresso', '60000', 'Espresso đậm đặc', 'espresso 250x260.png', 3, '2024-07-02 16:35:46', '2024-07-02 16:41:02'),
(7, 'Combo', '80000', 'Combo bánh và trà', 'combo.png', 5, '2024-07-02 16:43:13', '2024-07-02 16:43:13'),
(11, 'sản phẩm 11', '40000', 'Bạc xỉu đá', '1.png', 1, '2024-07-02 02:54:07', '2024-07-02 16:34:00'),
(12, 'Sản phẩm 12', '100000', 'Combo ngon', '2.png', 1, '2024-07-02 02:54:07', '2024-07-02 16:31:13'),
(13, 'Sản phẩm 13', '100000', 'Combo ngon', '3.png', 1, '2024-07-02 02:54:07', '2024-07-02 16:31:13'),
(14, 'Sản phẩm 14', '100000', 'Combo ngon', '4.png', 1, '2024-07-02 02:54:07', '2024-07-02 16:31:13'),
(15, 'Sản phẩm 15', '100000', 'Combo ngon', '5.png', 1, '2024-07-02 02:54:07', '2024-07-02 16:31:13'),
(16, 'Sản phẩm 16', '100000', 'Combo ngon', '6.png', 1, '2024-07-02 02:54:07', '2024-07-02 16:31:13'),
(17, 'Sản phẩm 17', '100000', 'Combo ngon', '7.png', 1, '2024-07-02 02:54:07', '2024-07-02 16:31:13'),
(18, 'Sản phẩm 18', '100000', 'Combo ngon', '8.png', 1, '2024-07-02 02:54:07', '2024-07-02 16:31:13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin_tuc`
--

CREATE TABLE `tin_tuc` (
  `id` int(11) NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `noidung` text NOT NULL,
  `content` text NOT NULL,
  `tacgia_ten` varchar(255) NOT NULL,
  `thoi_gian` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tin_tuc`
--

INSERT INTO `tin_tuc` (`id`, `tieude`, `avatar`, `noidung`, `content`, `tacgia_ten`, `thoi_gian`) VALUES
(1, 'Dịch vụ người lắng nghe', '13.png', 'Giới thiệu về dịch vụ người lắng nghe chuyên nghiệp', '<p>Bạn đang tìm kiếm địa chỉ thuê giày nam uy tín tại Hà Nội? Cộng Studio tự hào là điểm đến hàng đầu dành cho quý ông với đa dạng mẫu mã, kiểu dáng và chất liệu giày nam cao cấp từ các thương hiệu nổi tiếng trong và ngoài nước.</p>\r\n\r\n<p>Cộng Studio cho thuê giày tây</p>\r\n\r\n<p>Cộng Studio sở hữu bộ sưu tập giày nam đồ sộ với hàng trăm mẫu mã, kiểu dáng khác nhau, phù hợp với mọi phong cách và nhu cầu của quý ông. Từ những đôi giày tây lịch lãm, sang trọng cho đến những đôi giày thể thao năng động, cá tính.</p>\r\n\r\n<p>Những đôi giày nam được làm từ chất liệu cao cấp, bền bỉ và mang lại cảm giác thoải mái tối đa cho người sử dụng. Mỗi đôi giày đều được kiểm tra kỹ lưỡng trước khi đến tay khách hàng để đảm bảo chất lượng tốt nhất.</p>\r\n\r\n<p>Chỉ với 150.000 đồng bạn có thuê ngay một đôi giày tây tại Cộng Studio trong vòng 3 ngày và cung cấp dịch vụ giao hàng tận nơi miễn phí trong nội thành Hà Nội. Với những ưu điểm vượt trội, Cộng Studio tự tin là địa chỉ cho thuê giày nam uy tín và chất lượng hàng đầu tại Hà Nội.</p>\r\n\r\n<p>Thông tin liên hệ:</p>\r\n\r\n<p>Địa chỉ: Số nhà 23, Ngõ 98, Thái Hà, Đống Đa, Hà Nội</p>\r\n<p>Hotline: 0968 475 789</p>\r\n<p>Website: <a href=\"https://congstudio.vn/\">https://congstudio.vn/</a></p>\r\n\r\n<p>CleverGent là địa chỉ uy tín tại Hà Nội chuyên cung cấp dịch vụ cho thuê giày tây cao cấp dành cho nam giới. Điểm nổi bật của CleverGent nằm ở bộ sưu tập giày tây đồ sộ, được cập nhật thường xuyên theo xu hướng thời trang mới nhất.</p>\r\n<img src=\"https://laforce.vn/wp-content/uploads/2024/07/cho-thue-giay-tay.jpg\" alt=\"Giày tây tại CleverGent\">\r\n\r\n<p>Hơn thế nữa, CleverGent còn ghi điểm với chất lượng sản phẩm cao cấp. Tất cả giày tây tại đây đều được làm từ chất liệu da thật, bền bỉ và mang lại cảm giác thoải mái tối đa cho người sử dụng.</p>\r\n\r\n<p>Bên cạnh đó, CleverGent còn cung cấp dịch vụ cho thuê giày tây online với quy trình 4 bước vô cùng đơn giản và tiện lợi. Với những đơn hàng trên 500.000 đồng, bạn sẽ được miễn phí chuyển đồ 1 chiều.</p>\r\n<img src=\"https://laforce.vn/wp-content/uploads/2024/07/cho-thue-giay-tay.jpg\" alt=\"Giày tây tại CleverGent\">\r\n\r\n<p>Thông tin liên hệ:</p>\r\n\r\n<p>Địa chỉ: Số 79H1 Lý Nam Đế, Hoàn Kiếm, Hà Nội.</p>\r\n<p>Hotline: 097 6644 001</p>\r\n<p>Website: <a href=\"https://www.clevergent.vn/\">https://www.clevergent.vn/</a></p>\r\n\r\n<p>Vest Hà Nội là thương hiệu uy tín chuyên cung cấp dịch vụ cho thuê vest nam, trong đó có giày tây. Với đội ngũ nhân viên tư vấn nhiệt tình và chuyên nghiệp, Vest Hà Nội luôn sẵn sàng hỗ trợ khách hàng lựa chọn những đôi giày tây phù hợp nhất với phong cách và nhu cầu của bạn.</p>\r\n<img src=\"https://laforce.vn/wp-content/uploads/2024/07/cho-thue-giay-tay.jpg\" alt=\"Giày tây tại VestHanoi\">\r\n\r\n<p>Vest Hà Nội còn có dịch vụ cho thuê giày tây online. Bạn có thể tham khảo các mẫu giày tây trên website của Vest Hà Nội và đặt thuê online.</p>\r\n<img src=\"https://laforce.vn/wp-content/uploads/2024/07/cho-thue-giay-tay.jpg\" alt=\"Giày tây tại VestHanoi\">', 'Lê Văn F', '2024-07-02 10:20:53'),
(2, 'Nghệ thuật lắng nghe', '12.png', 'Cách lắng nghe hiệu quả trong cuộc sống hàng ngày', 'Lắng nghe là một kỹ năng quan trọng trong giao tiếp hàng ngày, giúp chúng ta hiểu rõ hơn về đối phương và xây dựng mối quan hệ tốt đẹp hơn. \r\nĐể lắng nghe hiệu quả, chúng ta cần tập trung toàn bộ sự chú ý vào người nói, tránh những suy nghĩ phân tán và thể hiện sự quan tâm thông qua ánh mắt, cử chỉ và lời nói. \r\nKhi lắng nghe, hãy đặt mình vào vị trí của người nói để hiểu rõ cảm xúc và quan điểm của họ. \r\nHơn nữa, đừng ngắt lời hay phán xét mà hãy lắng nghe một cách chân thành và tôn trọng. \r\nBằng cách lắng nghe tốt, chúng ta không chỉ giúp người nói cảm thấy được tôn trọng mà còn cải thiện khả năng giao tiếp và hiểu biết của chính mình.', 'Trần Thị j', '2024-07-02 10:20:50'),
(3, 'Dịch vụ người lắng nghe', '13.png', 'Giới thiệu về dịch vụ người lắng nghe chuyên nghiệp', 'Trong cuộc sống hiện đại, nhiều người cảm thấy cô đơn và cần có người lắng nghe để chia sẻ những tâm tư, tình cảm. \nDịch vụ người lắng nghe chuyên nghiệp ra đời để đáp ứng nhu cầu này, mang đến cho khách hàng một người bạn đồng hành, sẵn sàng lắng nghe và thấu hiểu. \nNgười lắng nghe chuyên nghiệp không chỉ giỏi lắng nghe mà còn được đào tạo về tâm lý học, giúp họ đưa ra những lời khuyên hữu ích và giúp khách hàng cảm thấy an tâm, thoải mái hơn. \nDịch vụ này không chỉ dành cho những người gặp vấn đề tâm lý mà còn phù hợp với bất kỳ ai cần một người bạn để trò chuyện, chia sẻ. \nHãy thử trải nghiệm dịch vụ người lắng nghe chuyên nghiệp để thấy cuộc sống trở nên dễ chịu và ý nghĩa hơn.\n', 'Lê Văn F', '2024-07-02 10:20:55'),
(4, 'Quán cà phê Lặng', '11.png', 'Không gian yên tĩnh để thư giãn', 'Nằm ngay trung tâm thành phố, quán cà phê Lặng là một điểm đến lý tưởng cho những ai muốn tìm kiếm một không gian yên tĩnh để thư giãn và làm việc. \nQuán được thiết kế với phong cách tối giản, sử dụng các vật liệu tự nhiên như gỗ và đá, tạo nên một không gian ấm cúng và gần gũi. \nKhách hàng đến đây không chỉ để thưởng thức những ly cà phê thơm ngon mà còn để tận hưởng không gian tĩnh lặng, tránh xa sự ồn ào của cuộc sống thường ngày. \nQuán cà phê Lặng cũng có khu vực ngoài trời với những chiếc ghế bành êm ái, lý tưởng cho những buổi trò chuyện cùng bạn bè hay những khoảnh khắc đọc sách một mình. \nHãy đến và trải nghiệm cảm giác bình yên tại quán cà phê Lặng.', 'Nguyễn Văn G', '2024-07-02 10:20:55'),
(5, 'Nghệ thuật lắng nghe', '12.png', 'Cách lắng nghe hiệu quả trong cuộc sống hàng ngày', 'Lắng nghe là một kỹ năng quan trọng trong giao tiếp hàng ngày, giúp chúng ta hiểu rõ hơn về đối phương và xây dựng mối quan hệ tốt đẹp hơn. \nĐể lắng nghe hiệu quả, chúng ta cần tập trung toàn bộ sự chú ý vào người nói, tránh những suy nghĩ phân tán và thể hiện sự quan tâm thông qua ánh mắt, cử chỉ và lời nói. \nKhi lắng nghe, hãy đặt mình vào vị trí của người nói để hiểu rõ cảm xúc và quan điểm của họ. \nHơn nữa, đừng ngắt lời hay phán xét mà hãy lắng nghe một cách chân thành và tôn trọng. \nBằng cách lắng nghe tốt, chúng ta không chỉ giúp người nói cảm thấy được tôn trọng mà còn cải thiện khả năng giao tiếp và hiểu biết của chính mình.', 'Trần Thị j', '2024-07-02 10:20:52');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Chỉ mục cho bảng `danhmuc_sanpham`
--
ALTER TABLE `danhmuc_sanpham`
  ADD PRIMARY KEY (`danhmuc_id`);

--
-- Chỉ mục cho bảng `nguoitamsu`
--
ALTER TABLE `nguoitamsu`
  ADD PRIMARY KEY (`nguoitamsu_id`),
  ADD KEY `booking_id` (`booking_id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`sp_id`),
  ADD KEY `fk_danhmuc_sanpham` (`danhmuc_id`);

--
-- Chỉ mục cho bảng `tin_tuc`
--
ALTER TABLE `tin_tuc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `danhmuc_sanpham`
--
ALTER TABLE `danhmuc_sanpham`
  MODIFY `danhmuc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `nguoitamsu`
--
ALTER TABLE `nguoitamsu`
  MODIFY `nguoitamsu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `tin_tuc`
--
ALTER TABLE `tin_tuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `nguoitamsu`
--
ALTER TABLE `nguoitamsu`
  ADD CONSTRAINT `nguoitamsu_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`booking_id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_danhmuc_sanpham` FOREIGN KEY (`danhmuc_id`) REFERENCES `danhmuc_sanpham` (`danhmuc_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
