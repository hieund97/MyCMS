/*
 Navicat Premium Data Transfer

 Source Server         : MyConnection
 Source Server Type    : MySQL
 Source Server Version : 100136
 Source Host           : localhost:3306
 Source Schema         : cms-1

 Target Server Type    : MySQL
 Target Server Version : 100136
 File Encoding         : 65001

 Date: 06/08/2020 23:09:08
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for attr_order
-- ----------------------------
DROP TABLE IF EXISTS `attr_order`;
CREATE TABLE `attr_order`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `color` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `price` decimal(15, 2) UNSIGNED NOT NULL DEFAULT 0.00,
  `quantity` int(11) NULL DEFAULT NULL,
  `order_id` bigint(20) UNSIGNED NULL DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `attr_order_order_id_foreign`(`order_id`) USING BTREE,
  INDEX `attr_order_product_id_foreign`(`product_id`) USING BTREE,
  CONSTRAINT `attr_order_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `attr_order_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 55 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of attr_order
-- ----------------------------
INSERT INTO `attr_order` VALUES (21, 'Vàng', 'L', 0, 150000.00, 1, 19, 46, '2020-08-03 23:42:52', '2020-08-03 23:42:52');
INSERT INTO `attr_order` VALUES (22, 'Trắng', 'L', 0, 550000.00, 1, 20, 38, '2020-08-03 23:45:10', '2020-08-03 23:45:10');
INSERT INTO `attr_order` VALUES (23, 'Trắng', 'L', 0, 220000.00, 1, 20, 31, '2020-08-03 23:45:10', '2020-08-03 23:45:10');
INSERT INTO `attr_order` VALUES (24, 'Đen', 'L', 0, 600000.00, 1, 20, 47, '2020-08-03 23:45:10', '2020-08-03 23:45:10');
INSERT INTO `attr_order` VALUES (25, 'Trắng', 'L', 0, 150000.00, 1, 21, 28, '2020-08-03 23:46:24', '2020-08-03 23:46:24');
INSERT INTO `attr_order` VALUES (26, 'Đen', 'L', 0, 460000.00, 1, 21, 35, '2020-08-03 23:46:24', '2020-08-03 23:46:24');
INSERT INTO `attr_order` VALUES (27, 'Trắng', 'M', 4, 160000.00, 1, 22, 50, '2020-08-03 23:49:15', '2020-08-04 00:01:07');
INSERT INTO `attr_order` VALUES (28, 'Trắng', 'L', 0, 220000.00, 1, 23, 45, '2020-08-04 00:24:01', '2020-08-04 00:24:01');
INSERT INTO `attr_order` VALUES (29, 'Vàng', 'L', 0, 200000.00, 1, 23, 49, '2020-08-04 00:24:01', '2020-08-04 00:24:01');
INSERT INTO `attr_order` VALUES (30, 'Vàng', 'L', 0, 150000.00, 1, 27, 46, '2020-08-04 00:26:04', '2020-08-04 00:26:04');
INSERT INTO `attr_order` VALUES (31, 'Trắng', 'L', 0, 220000.00, 1, 27, 45, '2020-08-04 00:26:04', '2020-08-04 00:26:04');
INSERT INTO `attr_order` VALUES (32, 'Vàng', 'L', 0, 150000.00, 1, 28, 46, '2020-08-04 00:26:46', '2020-08-04 00:26:46');
INSERT INTO `attr_order` VALUES (33, 'Trắng', 'L', 0, 220000.00, 1, 28, 45, '2020-08-04 00:26:46', '2020-08-04 00:26:46');
INSERT INTO `attr_order` VALUES (34, 'Vàng', 'L', 0, 150000.00, 1, 29, 46, '2020-08-04 00:30:59', '2020-08-04 00:30:59');
INSERT INTO `attr_order` VALUES (35, 'Trắng', 'L', 0, 220000.00, 1, 29, 45, '2020-08-04 00:30:59', '2020-08-04 00:30:59');
INSERT INTO `attr_order` VALUES (36, 'Trắng', 'L', 0, 200000.00, 1, 33, 44, '2020-08-04 00:33:11', '2020-08-04 00:33:11');
INSERT INTO `attr_order` VALUES (37, 'Đen', 'L', 0, 460000.00, 1, 33, 35, '2020-08-04 00:33:11', '2020-08-04 00:33:11');
INSERT INTO `attr_order` VALUES (38, 'Trắng', 'L', 0, 200000.00, 1, 34, 44, '2020-08-04 00:34:04', '2020-08-04 00:34:04');
INSERT INTO `attr_order` VALUES (39, 'Đen', 'L', 0, 460000.00, 1, 34, 35, '2020-08-04 00:34:04', '2020-08-04 00:34:04');
INSERT INTO `attr_order` VALUES (40, 'Trắng', 'L', 0, 200000.00, 1, 35, 44, '2020-08-04 00:36:07', '2020-08-04 00:36:07');
INSERT INTO `attr_order` VALUES (41, 'Đen', 'L', 0, 460000.00, 1, 35, 35, '2020-08-04 00:36:07', '2020-08-04 00:36:07');
INSERT INTO `attr_order` VALUES (42, 'Trắng', 'L', 0, 130000.00, 1, 37, 29, '2020-08-04 00:38:30', '2020-08-04 00:38:30');
INSERT INTO `attr_order` VALUES (43, 'Trắng', 'L', 0, 150000.00, 1, 37, 28, '2020-08-04 00:38:30', '2020-08-04 00:38:30');
INSERT INTO `attr_order` VALUES (44, 'Trắng', 'L', 0, 130000.00, 1, 39, 29, '2020-08-04 00:59:35', '2020-08-04 00:59:35');
INSERT INTO `attr_order` VALUES (45, 'Vàng', 'L', 2, 200000.00, 1, 40, 49, '2020-08-04 01:00:55', '2020-08-04 01:09:37');
INSERT INTO `attr_order` VALUES (46, 'Đen', 'M', 4, 200000.00, 1, 40, 51, '2020-08-04 01:00:55', '2020-08-04 01:09:52');
INSERT INTO `attr_order` VALUES (47, 'Trắng', 'L', 4, 200000.00, 1, 41, 44, '2020-08-04 01:02:29', '2020-08-04 01:08:25');
INSERT INTO `attr_order` VALUES (48, 'Đen', 'L', 0, 280000.00, 1, 41, 32, '2020-08-04 01:02:29', '2020-08-04 01:02:29');
INSERT INTO `attr_order` VALUES (49, 'Đen', '31', 5, 250000.00, 1, 42, 41, '2020-08-04 01:04:01', '2020-08-04 01:08:08');
INSERT INTO `attr_order` VALUES (50, 'Trắng', '30', 5, 300000.00, 1, 42, 39, '2020-08-04 01:04:01', '2020-08-04 01:08:18');
INSERT INTO `attr_order` VALUES (51, 'Trắng', 'L', 1, 150000.00, 1, 43, 28, '2020-08-04 01:54:03', '2020-08-04 02:55:36');
INSERT INTO `attr_order` VALUES (52, 'Trắng', 'L', 0, 550000.00, 1, 44, 38, '2020-08-04 10:15:59', '2020-08-04 10:15:59');
INSERT INTO `attr_order` VALUES (53, 'Trắng', 'L', 0, 220000.00, 1, 45, 31, '2020-08-04 14:27:15', '2020-08-04 14:27:15');
INSERT INTO `attr_order` VALUES (54, 'Vàng', 'L', 4, 200000.00, 1, 46, 49, '2020-08-04 15:43:14', '2020-08-04 15:45:24');

-- ----------------------------
-- Table structure for attribute
-- ----------------------------
DROP TABLE IF EXISTS `attribute`;
CREATE TABLE `attribute`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of attribute
-- ----------------------------
INSERT INTO `attribute` VALUES (2, 'Size', '2019-10-31 22:48:15', '2019-10-31 22:48:15');
INSERT INTO `attribute` VALUES (3, 'Color', '2019-10-31 22:48:19', '2019-10-31 22:48:19');

-- ----------------------------
-- Table structure for blog
-- ----------------------------
DROP TABLE IF EXISTS `blog`;
CREATE TABLE `blog`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `short_decription` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `blog_category_id_foreign`(`category_id`) USING BTREE,
  INDEX `blog_user_id_foreign`(`user_id`) USING BTREE,
  CONSTRAINT `blog_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `blog_category` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `blog_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of blog
-- ----------------------------
INSERT INTO `blog` VALUES (2, 'Google Pixel nhận bản update Feature Drop, chỉnh được chế độ chân dung cho cả ảnh cũ', '<p><a href=\"https://tinhte.vn/tags/google/\">Google</a>&nbsp;th&ocirc;ng b&aacute;o rằng từ giờ trở đi họ sẽ ph&aacute;t h&agrave;nh c&aacute;c bản update t&iacute;nh năng lớn d&agrave;nh cho người d&ugrave;ng&nbsp;<a href=\"https://tinhte.vn/pixel/\">Pixel</a>, gọi l&agrave;&nbsp;<a href=\"https://tinhte.vn/tags/feature-drop/\">Feature Drop</a>. Bản update đầu ti&ecirc;n bổ sung chức năng chỉnh ảnh ch&acirc;n dung sau khi chụp xong, ngay cả khi bạn qu&ecirc;n bật chế độ portrait th&igrave; n&oacute; vẫn chạy được lu&ocirc;n, ngạc nhi&ecirc;n chưa. Kể cả những tấm ảnh cũ nhiều năm trước cũng c&oacute; thể &aacute;p dụng chế độ x&oacute;a ph&ocirc;ng cho nổi bật chủ thể, tất cả đều nhờ v&agrave;o thuật to&aacute;n AI của Google.<br />\r\n&nbsp;</p>\r\n\r\n<p><img alt=\"Đang tải background_blur.gif…\" src=\"https://photo2.tinhte.vn/data/attachment-files/2019/12/4849229_background_blur.gif\" />​</p>\r\n\r\n<p><br />\r\nGoogle Assistant tr&ecirc;n Pixel cũng sẽ tự động nhận biết c&aacute;c cuộc gọi spam v&agrave; ngắt ch&uacute;ng trước khi chu&ocirc;ng kịp ri&ecirc;ng, vậy th&igrave; bạn sẽ đỡ phiền hơn. Khi cuộc gọi đến l&agrave; của người kh&aacute;c, n&oacute; sẽ hiển thị th&ocirc;ng tin t&oacute;m tắt về người đang gọi cho bạn.<br />\r\n<br />\r\nCũng nhờ v&agrave;o AI v&agrave; ống k&iacute;nh g&oacute;c rộng của&nbsp;<a href=\"https://tinhte.vn/tags/pixel-4/\">Pixel 4</a>&nbsp;m&agrave; khi gọi video th&igrave; n&oacute; sẽ tự động zoom ra v&agrave;o hoặc crop lại khung ảnh cho vừa với cảnh của bạn, bạn kh&ocirc;ng cần chỉnh thủ c&ocirc;ng như từ xưa đến nay. Chức năng n&agrave;y chạy được với cuộc gọi video của Google Duo. Ngay cả khi c&oacute; người kh&aacute;c bước v&agrave;o khung h&igrave;nh, Pixel 4 vẫn nhận biết được v&agrave; zoom ra xa ch&uacute;t. Khi gọi Duo tr&ecirc;n Pixel 2, 3, 4, bạn cũng c&oacute; thể &aacute;p dụng c&aacute;c filter ch&acirc;n dung nữa.<br />\r\n<br />\r\nNhững cải tiến kh&aacute;c:</p>\r\n\r\n<ul>\r\n	<li>Định vị Google sẽ nhanh hơn v&igrave; việc t&iacute;nh to&aacute;n vị tr&iacute; được l&agrave;m ngay tr&ecirc;n Pixel 4</li>\r\n	<li>Bổ sung app thu &acirc;m Recorder cho c&aacute;c m&aacute;y Pixel đời cũ</li>\r\n	<li>Pixel 3 v&agrave; 3a c&oacute; chức năng Live Caption khi chạu video tr&ecirc;n m&agrave;n h&igrave;nh</li>\r\n	<li>Digital Wellbeing cũng được cập nhật để cho ph&eacute;p bạn ngừng chế độ Focus sớm hơn so với lịch đ&atilde; c&agrave;i đặt</li>\r\n</ul>\r\n\r\n<p>Ngo&agrave;i ra tất cả điện thoại Pixel cũng được update về c&aacute;ch quản l&yacute; RAM. Việc chạy đa nhiệm sẽ tốt hơn nhờ m&aacute;y li&ecirc;n tục n&eacute;n c&aacute;c ứng dụng đang được cache.<br />\r\n<br />\r\nHiện tại bản update Feature Drop đang bắt đầu ph&aacute;t h&agrave;nh dần dần cho người d&ugrave;ng Pixel ở c&aacute;c nước rồi đấy anh em.</p>', 'http://cms.local/media/thumb/89f64077-d26d-4fde-ad70-94f22b50efa5.png', 'google-pixel-nhan-ban-update-feature-drop-chinh-duoc-che-do-chan-dung-cho-ca-anh-cu', 4, 1, 'Google Pixel nhận bản update Feature Drop', '2019-12-11 01:07:32', '2019-12-11 01:07:32');
INSERT INTO `blog` VALUES (3, 'Google Maps cho iOS đã có chế độ Incognito (ẩn danh), update nào anh em', '<p>Google h&ocirc;m nay bắt đầu cập nhật&nbsp;<a href=\"https://tinhte.vn/tags/che-do-an-danh/\">chế độ ẩn danh</a>&nbsp;(<a href=\"https://tinhte.vn/tags/incognito/\">Incognito</a>) cho&nbsp;<a href=\"https://tinhte.vn/tags/google-maps/\">Google Maps</a>&nbsp;tr&ecirc;n&nbsp;<a href=\"https://tinhte.vn/ios/\">iOS</a>. Khi chế độ n&agrave;y được bật l&ecirc;n th&igrave; Google Maps sẽ kh&ocirc;ng c&ograve;n lưu trữ c&aacute;c lịch sử t&igrave;m kiếm v&agrave; di chuyển v&agrave;o t&agrave;i khoản Google của bạn. C&aacute;c chức năng gợi &yacute; nh&agrave; h&agrave;ng v&agrave; địa điểm cũng sẽ kh&ocirc;ng hoạt động. Nếu bạn c&oacute; d&ugrave;ng chức năng Location History để biết từng ng&agrave;y, từng giờ m&igrave;nh đi đ&acirc;u th&igrave; chế độ Incognito cũng sẽ kh&ocirc;ng ghi nhận dữ liệu n&agrave;y v&agrave;o d&ograve;ng thời gian của bạn trong Google Maps. Anh em iOS h&atilde;y download bằng link b&ecirc;n dưới nh&eacute;, Việt Nam cho tải rồi đấy.<br />\r\n<br />\r\nC&aacute;ch d&ugrave;ng chế độ&nbsp;<a href=\"https://tinhte.vn/tags/an-danh/\">ẩn danh</a>&nbsp;của Google Maps:</p>\r\n\r\n<ol>\r\n	<li>Mở app Google Map (nhớ cập nhật bản mới nhất nh&eacute;)</li>\r\n	<li>Bấm v&agrave;o biểu tượng h&igrave;nh avatar của bạn</li>\r\n	<li>Chọn Bật chế độ ẩn danh</li>\r\n</ol>\r\n\r\n<p><br />\r\nGoogle Maps cho Android cũng được bổ sung chức năng x&oacute;a c&ugrave;ng l&uacute;c nhiều địa điểm m&agrave; bạn từng lưu v&agrave; t&igrave;m kiếm, xem ảnh dưới l&agrave; anh em hiểu ngay. Bản update n&agrave;y cho Android th&aacute;ng sau mới bắt đầu được ph&aacute;t h&agrave;nh.<br />\r\n&nbsp;</p>\r\n\r\n<p><strong><a href=\"https://apps.apple.com/vn/app/google-maps/id585027354?l=vi\" target=\"_blank\">Tải về ứng dụng Google Maps cho iOS</a><br />\r\n<br />\r\n<a href=\"https://play.google.com/store/apps/details?id=com.google.android.apps.maps&amp;hl=en\" target=\"_blank\">Tải về ứng dụng Google Maps cho Android</a><br />\r\n<br />\r\n<img alt=\"Đang tải Bulk_Delete.max-1000x1000.jpg…\" src=\"https://photo2.tinhte.vn/data/attachment-files/2019/12/4849225_Bulk_Delete.max-1000x1000.jpg\" /></strong><br />\r\n​</p>\r\n\r\n<p><strong><em>Nguồn:&nbsp;<a href=\"https://www.wired.com/story/google-maps-incognito-mode/\" target=\"_blank\">Wired</a></em></strong>​</p>', 'http://cms.local/media/thumb/aa05aa32-2361-4174-b559-c09a1974e40d.jpg', 'google-maps-cho-ios-da-co-che-do-incognito-an-danh-update-nao-anh-em', 4, 1, 'Google Maps cho iOS đã có chế độ Incognito (ẩn danh)', '2019-12-11 01:09:11', '2019-12-11 01:09:11');
INSERT INTO `blog` VALUES (4, 'TUYỂN DỤNG NHÂN VIÊN THIẾT KẾ THỜI TRANG NAM', '<h1>TUYỂN DỤNG NH&Acirc;N VI&Ecirc;N THIẾT KẾ THỜI TRANG NAM</h1>\r\n\r\n<p>MỨC LƯƠNG: 10 &ndash; 15 triệu</p>\r\n\r\n<p>M&Ocirc; TẢ C&Ocirc;NG VIỆC</p>\r\n\r\n<p>&ndash; Thiết kế mẫu thời trang nam, kids.<br />\r\n&ndash; Nắm bắt c&aacute;c yếu tố thị trường, kh&aacute;ch h&agrave;ng, c&aacute;c xu hướng thời trang để định h&igrave;nh cho những thiết kế của m&igrave;nh.<br />\r\n&ndash; Nghi&ecirc;n cứu m&agrave;u v&agrave; loại vải của c&aacute;c nh&agrave; cung cấp, lựa chọn chất liệu cho c&aacute;c sản phẩm.<br />\r\n&ndash; T&igrave;m kiếm nguy&ecirc;n phụ liệu th&iacute;ch hợp, đ&aacute;p ứng được y&ecirc;u cầu mẫu thiết kế<br />\r\n&ndash; L&ecirc;n kế hoạch sản xuất c&aacute;c mẫu thiết kế đ&oacute; theo từng th&aacute;ng, từng qu&yacute;, năm&hellip;<br />\r\n&ndash; Tạo style cho c&aacute;c bộ h&igrave;nh cần chụp.<br />\r\n&ndash; Kết hợp với bộ phận marketing để t&igrave;m v&agrave; chọn lọc c&aacute;c h&igrave;nh ảnh đẹp, bắt mắt kh&aacute;ch h&agrave;ng.</p>\r\n\r\n<p>&ndash;&nbsp; C&aacute;c c&ocirc;ng việc kh&aacute;c khi được ph&acirc;n c&ocirc;ng.</p>\r\n\r\n<p>Y&Ecirc;U CẦU:</p>\r\n\r\n<p>&ndash; Tr&igrave;nh độ cao đẳng trở l&ecirc;n</p>\r\n\r\n<p>&ndash; C&oacute; kinh nghiệm &iacute;t nhất 1 năm thiết kế đồ thời trang nam</p>\r\n\r\n<p>&ndash; C&oacute; tư duy thiết kế, ra mẫu<br />\r\n&ndash; Sử dụng th&agrave;nh thạo c&aacute;c phần mềm thiết kế.<br />\r\n&ndash; T&aacute;c phong nhanh nhẹn, trung thực, cẩn thận, tinh thần ham học hỏi, nhanh ch&oacute;ng th&iacute;ch nghi với sự thay đổi.<br />\r\n&ndash; Chịu được &aacute;p lực v&agrave; tr&aacute;ch nhiệm với c&ocirc;ng việc<br />\r\n&ndash; Nhiệt t&igrave;nh, chăm chỉ, c&oacute; tr&aacute;ch nhiệm trong c&ocirc;ng việc.</p>\r\n\r\n<p>QUYỀN LỢI ĐƯỢC HƯỞNG</p>\r\n\r\n<p>&ndash; Lương theo thỏa thuận, Trợ cấp ăn ca, Thưởng hiệu quả c&ocirc;ng việc, Thưởng th&aacute;ng 13, v&agrave; c&aacute;c chế độ kh&aacute;c theo quy định của C&ocirc;ng ty.<br />\r\n&ndash; Đầy đủ quyền lợi theo Luật định.</p>\r\n\r\n<p>ĐỊA CHỈ L&Agrave;M VIỆC: P805, Tầng 8, T&ograve;a nh&agrave; Euro Window, 57 L&aacute;ng Hạ, H&agrave; Nội</p>\r\n\r\n<p>THỜI GIAN L&Agrave;M VIỆC: &nbsp;Thứ 2 &ndash; Thứ 7 h&agrave;ng tuần (8h30-12h v&agrave; 13h30-17h30)</p>\r\n\r\n<p>ĐỊA CHỈ LI&Ecirc;N HỆ: P805, Tầng 8, T&ograve;a nh&agrave; Euro Window, 57 L&aacute;ng Hạ, H&agrave; Nội</p>\r\n\r\n<p>EMAIL LI&Ecirc;N HỆ</p>\r\n\r\n<p>360tuyendung@gmail.com</p>\r\n\r\n<p>Hotline: 0971287688</p>', 'http://cms.local/media/thumb/e938e6f0-4a7d-4e6c-9d3e-3b5de992401c.jpg', 'tuyen-dung-nhan-vien-thiet-ke-thoi-trang-nam', 3, 1, 'TUYỂN DỤNG NHÂN VIÊN THIẾT KẾ THỜI TRANG NAM', '2019-12-11 01:14:39', '2019-12-11 01:14:39');

-- ----------------------------
-- Table structure for blog_category
-- ----------------------------
DROP TABLE IF EXISTS `blog_category`;
CREATE TABLE `blog_category`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_cate_slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `short_decription` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `blog_category_name_unique`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of blog_category
-- ----------------------------
INSERT INTO `blog_category` VALUES (1, 'Thời Trang', 'thoi-trang', NULL, '2019-12-11 00:56:11', '2019-12-11 00:56:11');
INSERT INTO `blog_category` VALUES (2, 'Tuần lễ thời trang', 'tuan-le-thoi-trang', NULL, '2019-12-11 00:56:19', '2019-12-11 00:56:19');
INSERT INTO `blog_category` VALUES (3, 'Tuyển Dụng', 'tuyen-dung', NULL, '2019-12-11 00:56:28', '2019-12-11 00:56:28');
INSERT INTO `blog_category` VALUES (4, 'Cuộc sống', 'cuoc-song', NULL, '2019-12-11 00:56:47', '2019-12-11 00:56:47');
INSERT INTO `blog_category` VALUES (5, 'HOT', 'hot', NULL, '2019-12-11 00:56:55', '2019-12-11 00:56:55');

-- ----------------------------
-- Table structure for brand
-- ----------------------------
DROP TABLE IF EXISTS `brand`;
CREATE TABLE `brand`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `brand_name_unique`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of brand
-- ----------------------------
INSERT INTO `brand` VALUES (1, 'Gucci', 'gucci', '2019-10-31 22:43:58', '2019-10-31 22:43:58');
INSERT INTO `brand` VALUES (2, 'H&M', 'hm', '2019-10-31 22:44:00', '2019-10-31 22:44:00');
INSERT INTO `brand` VALUES (3, 'MrSpicy', 'mrspicy', '2019-10-31 22:44:09', '2019-10-31 22:44:09');
INSERT INTO `brand` VALUES (4, 'Dior', 'dior', '2019-10-31 22:44:12', '2019-10-31 22:44:12');

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `parent_id` bigint(20) NULL DEFAULT NULL,
  `p_cate_slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `avatar` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `active` tinyint(1) NULL DEFAULT NULL,
  `navactive` tinyint(1) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `categories_name_unique`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (1, 'Áo', 0, 'ao', 'http://cms.local/media/avatar/57a2f7a9-721e-4aed-aaeb-10736a3565cd.jpg', 1, 1, '2019-10-31 22:58:55', '2020-08-01 00:00:55');
INSERT INTO `categories` VALUES (2, 'Áo sơ mi', 1, 'ao-so-mi', 'http://cms.local/media/avatar/f794cf12-a329-43ee-8c3e-cdbd7e41fd12.jpg', 1, 0, '2019-10-31 22:59:07', '2020-08-01 00:02:04');
INSERT INTO `categories` VALUES (3, 'Áo len, nỉ', 1, 'ao-len-ni', 'http://cms.local/media/avatar/af8de161-3f6f-4609-b47d-e2dd8d68d2ef.jpg', 0, 0, '2019-10-31 23:00:45', '2020-07-20 00:17:51');
INSERT INTO `categories` VALUES (4, 'Áo phông', 1, 'ao-phong', 'http://cms.local/media/avatar/noimage.png', 0, 0, '2019-10-31 23:01:01', '2019-10-31 23:01:01');
INSERT INTO `categories` VALUES (5, 'Áo Hoodie', 1, 'ao-hoodie', 'http://cms.local/media/avatar/noimage.png', 0, 0, '2019-10-31 23:01:11', '2019-10-31 23:01:11');
INSERT INTO `categories` VALUES (6, 'Áo khoác', 1, 'ao-khoac', 'http://cms.local/media/avatar/noimage.png', 0, 0, '2019-10-31 23:01:25', '2019-10-31 23:01:25');
INSERT INTO `categories` VALUES (7, 'Áo khoác Bomber', 6, 'ao-khoac-bomber', 'http://cms.local/media/avatar/noimage.png', 0, 0, '2019-10-31 23:01:37', '2019-10-31 23:01:37');
INSERT INTO `categories` VALUES (8, 'Áo khoác gió, phao, da', 6, 'ao-khoac-gio-phao-da', 'http://cms.local/media/avatar/noimage.png', 0, 0, '2019-10-31 23:01:48', '2019-10-31 23:01:48');
INSERT INTO `categories` VALUES (9, 'Quần', 0, 'quan', 'http://cms.local/media/avatar/noimage.png', 0, 1, '2019-10-31 23:01:58', '2020-08-01 00:01:03');
INSERT INTO `categories` VALUES (10, 'Quần Jean', 9, 'quan-jean', 'http://cms.local/media/avatar/noimage.png', 0, 0, '2019-10-31 23:02:14', '2019-10-31 23:02:14');
INSERT INTO `categories` VALUES (11, 'Quần âu', 9, 'quan-au', 'http://cms.local/media/avatar/noimage.png', 0, 0, '2019-10-31 23:02:48', '2019-10-31 23:02:48');
INSERT INTO `categories` VALUES (12, 'Quần Jogger', 9, 'quan-jogger', 'http://cms.local/media/avatar/noimage.png', 0, 0, '2019-10-31 23:03:00', '2019-10-31 23:03:00');
INSERT INTO `categories` VALUES (13, 'Quần nỉ', 9, 'quan-ni', 'http://cms.local/media/avatar/noimage.png', 0, 0, '2019-10-31 23:03:15', '2019-10-31 23:03:15');
INSERT INTO `categories` VALUES (14, 'Giày dép', 0, 'giay-dep', 'http://cms.local/media/avatar/noimage.png', 0, 1, '2019-10-31 23:03:31', '2020-08-01 00:01:14');
INSERT INTO `categories` VALUES (15, 'Giày sneaker', 14, 'giay-sneaker', 'http://cms.local/media/avatar/noimage.png', 0, 0, '2019-10-31 23:03:51', '2019-10-31 23:03:51');
INSERT INTO `categories` VALUES (16, 'Giày thể thao', 14, 'giay-the-thao', 'http://cms.local/media/avatar/noimage.png', 0, 0, '2019-10-31 23:04:06', '2019-10-31 23:04:06');
INSERT INTO `categories` VALUES (17, 'Dép xăn-đan', 14, 'dep-xan-dan', 'http://cms.local/media/avatar/noimage.png', 0, 0, '2019-10-31 23:04:18', '2019-10-31 23:04:18');
INSERT INTO `categories` VALUES (18, 'Phụ kiện thời trang', 0, 'phu-kien-thoi-trang', 'http://cms.local/media/avatar/noimage.png', 0, 1, '2019-10-31 23:04:32', '2020-08-01 00:01:27');
INSERT INTO `categories` VALUES (19, 'Balo - Túi', 18, 'balo-tui', 'http://cms.local/media/avatar/noimage.png', 0, 0, '2019-10-31 23:05:02', '2019-10-31 23:05:02');
INSERT INTO `categories` VALUES (20, 'Kính Mắt', 18, 'kinh-mat', 'http://cms.local/media/avatar/noimage.png', 0, 0, '2019-10-31 23:05:16', '2019-10-31 23:05:16');
INSERT INTO `categories` VALUES (21, 'Khăn', 18, 'khan', 'http://cms.local/media/avatar/noimage.png', 0, 0, '2019-10-31 23:05:27', '2019-10-31 23:05:27');
INSERT INTO `categories` VALUES (22, 'Sale', 0, 'sale', 'http://cms.local/media/avatar/noimage.png', 0, 1, '2019-11-01 23:43:28', '2020-08-01 00:01:35');
INSERT INTO `categories` VALUES (23, 'Áo sơ mi dài tay', 2, 'ao-so-mi-dai-tay', 'http://cms.local/media/avatar/noimage.png', 0, 0, '2019-12-03 00:17:12', '2019-12-03 00:17:12');
INSERT INTO `categories` VALUES (24, 'Áo polo', 1, 'ao-polo', 'http://cms.local/media/avatar/noimage.png', 0, 0, '2019-12-10 23:31:05', '2019-12-10 23:31:05');
INSERT INTO `categories` VALUES (25, 'Thời Trang Nam', 0, 'thoi-trang-nam', 'http://cms.local/media/avatar/noimage.png', 0, 0, '2020-07-09 11:24:55', '2020-07-09 11:24:55');

-- ----------------------------
-- Table structure for category_product_pivot
-- ----------------------------
DROP TABLE IF EXISTS `category_product_pivot`;
CREATE TABLE `category_product_pivot`  (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `category_product_pivot_product_id_foreign`(`product_id`) USING BTREE,
  INDEX `category_product_pivot_category_id_foreign`(`category_id`) USING BTREE,
  CONSTRAINT `category_product_pivot_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `category_product_pivot_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of category_product_pivot
-- ----------------------------
INSERT INTO `category_product_pivot` VALUES (25, 2, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (26, 2, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (27, 2, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (28, 4, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (29, 4, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (28, 1, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (29, 1, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (27, 1, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (25, 1, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (26, 1, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (30, 1, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (30, 5, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (31, 1, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (31, 23, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (32, 1, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (32, 3, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (33, 1, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (33, 2, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (34, 1, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (34, 2, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (35, 1, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (35, 6, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (36, 1, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (36, 24, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (37, 1, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (37, 24, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (38, 1, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (38, 6, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (38, 8, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (39, 9, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (39, 10, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (40, 10, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (41, 9, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (41, 11, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (42, 14, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (42, 16, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (43, 18, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (44, 1, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (44, 4, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (45, 1, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (45, 4, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (45, 22, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (46, 18, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (46, 22, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (47, 1, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (47, 6, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (47, 8, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (47, 22, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (48, 1, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (48, 2, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (48, 22, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (49, 1, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (49, 2, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (49, 22, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (50, 1, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (50, 2, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (50, 22, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (51, 1, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (51, 4, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (51, 22, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (52, 1, NULL, NULL);
INSERT INTO `category_product_pivot` VALUES (52, 2, NULL, NULL);

-- ----------------------------
-- Table structure for contact
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of contact
-- ----------------------------
INSERT INTO `contact` VALUES (1, 'Nguyễn Đức Hiếu', 'duchieu97.hn@gmail.com', '0359717468', 'Chất lượng sản phẩm tuyệt vời', '2019-12-11 00:55:19', '2019-12-11 00:55:19');
INSERT INTO `contact` VALUES (2, 'Nguyễn Đức Hiếu', 'duchieu97.hn@gmail.com', '0359717468', 'Sẽ còn ủng hộ', '2019-12-11 23:31:12', '2019-12-11 23:31:12');
INSERT INTO `contact` VALUES (3, 'Nguyễn Đức Hiếu', 'duchieu97.hn@gmail.com', '0359717468', 'Ứng tuyển vị trí bán hàng', '2019-12-11 23:36:08', '2019-12-11 23:36:08');
INSERT INTO `contact` VALUES (4, 'Nguyễn Đức Hiếu', 'boychel1997@gmail.com', '0359717468', 'Chất lượng phục vụ tuyệt vời', '2019-12-12 14:04:16', '2019-12-12 14:04:16');

-- ----------------------------
-- Table structure for guest
-- ----------------------------
DROP TABLE IF EXISTS `guest`;
CREATE TABLE `guest`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `client_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of guest
-- ----------------------------
INSERT INTO `guest` VALUES (1, 'Tony Falcon', NULL, 'Falcon@gmail.com', NULL, '2019-11-06 15:57:40', '2019-11-06 15:57:40');
INSERT INTO `guest` VALUES (2, 'Tony Falcon', NULL, 'Falcon@gmail.com', NULL, '2019-11-06 15:59:57', '2019-11-06 15:59:57');
INSERT INTO `guest` VALUES (3, 'Parker Petet', NULL, 'spiderman@gmail.com', NULL, '2019-12-04 23:17:23', '2019-12-04 23:17:23');
INSERT INTO `guest` VALUES (4, 'Parker Petet', NULL, 'spiderman@gmail.com', NULL, '2019-12-08 21:04:41', '2019-12-08 21:04:41');
INSERT INTO `guest` VALUES (5, 'Parker Petet', NULL, 'spiderman@gmail.com', NULL, '2019-12-08 21:21:55', '2019-12-08 21:21:55');
INSERT INTO `guest` VALUES (6, 'Tony Falcon', NULL, 'Falcon@gmail.com', NULL, '2019-12-08 21:23:46', '2019-12-08 21:23:46');
INSERT INTO `guest` VALUES (7, 'Phil Coulson', NULL, 'philcoulson@gmail.com', NULL, '2019-12-08 21:24:40', '2019-12-08 21:24:40');
INSERT INTO `guest` VALUES (8, 'Tony Falcon', NULL, 'Falcon@gmail.com', NULL, '2019-12-08 21:25:42', '2019-12-08 21:25:42');
INSERT INTO `guest` VALUES (9, 'Hiếu Nguyễn Đức', '0359717468', 'duchieu97.hn@gmail.com', 'Số 11 Ngách 15, Ngõ Tô Tiền, Phường Trung Phụng, Quận Đống Đa, Hà Nội', '2020-07-19 22:33:48', '2020-07-19 22:33:48');
INSERT INTO `guest` VALUES (10, 'Hiếu Nguyễn Đức', '+84359717468', 'hieubentau1911@gmail.com', 'Số 11 Ngách 15, Ngõ Tô Tiền, Phường Trung Phụng, Quận Đống Đa, Hà Nội', '2020-08-03 03:40:22', '2020-08-03 03:40:22');
INSERT INTO `guest` VALUES (11, 'Hiếu Nguyễn Đức', '+84359717468', 'hieubentau1911@gmail.com', 'Số 11 Ngách 15, Ngõ Tô Tiền, Phường Trung Phụng, Quận Đống Đa, Hà Nội', '2020-08-03 03:42:52', '2020-08-03 03:42:52');
INSERT INTO `guest` VALUES (12, 'Hiếu Nguyễn Đức', '+84359717468', 'hieubentau1911@gmail.com', 'Số 11 Ngách 15, Ngõ Tô Tiền, Phường Trung Phụng, Quận Đống Đa, Hà Nội', '2020-08-03 03:45:33', '2020-08-03 03:45:33');
INSERT INTO `guest` VALUES (13, 'Hiếu Nguyễn Đức', '+84359717468', 'hieubentau1911@gmail.com', 'Số 11 Ngách 15, Ngõ Tô Tiền, Phường Trung Phụng, Quận Đống Đa, Hà Nội', '2020-08-03 03:47:49', '2020-08-03 03:47:49');
INSERT INTO `guest` VALUES (14, 'Hiếu Nguyễn Đức', '+84359717468', 'hieubentau1911@gmail.com', 'Số 11 Ngách 15, Ngõ Tô Tiền, Phường Trung Phụng, Quận Đống Đa, Hà Nội', '2020-08-03 03:52:19', '2020-08-03 03:52:19');
INSERT INTO `guest` VALUES (15, 'Hiếu Nguyễn Đức', '+84359717468', 'hieubentau1911@gmail.com', 'Số 11 Ngách 15, Ngõ Tô Tiền, Phường Trung Phụng, Quận Đống Đa, Hà Nội', '2020-08-03 03:54:05', '2020-08-03 03:54:05');
INSERT INTO `guest` VALUES (16, 'Nguyễn Việt An', '0359717468', '1521050307@student.humg.edu.vn', '15 Nguyễn Du', '2020-08-04 10:15:59', '2020-08-04 10:15:59');
INSERT INTO `guest` VALUES (17, 'Nguyễn Văn Nam', '0359717468', '1521050307@student.humg.edu.vn', '15 Nguyễn Du', '2020-08-04 14:27:15', '2020-08-04 14:27:15');

-- ----------------------------
-- Table structure for image_product
-- ----------------------------
DROP TABLE IF EXISTS `image_product`;
CREATE TABLE `image_product`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `image_product_product_id_foreign`(`product_id`) USING BTREE,
  CONSTRAINT `image_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 201 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of image_product
-- ----------------------------
INSERT INTO `image_product` VALUES (89, 'http://cms.local/media/avatar/b9ba7985-297b-4df9-8c7e-97a5a24a23da.jpg', 25, '2020-08-03 22:12:06', '2020-08-03 22:12:06');
INSERT INTO `image_product` VALUES (90, 'http://cms.local/media/avatar/ca45954c-6f4a-4dc9-922e-2b3587ac74c2.jpg', 25, '2020-08-03 22:12:06', '2020-08-03 22:12:06');
INSERT INTO `image_product` VALUES (91, 'http://cms.local/media/avatar/72d9c6e8-c1d9-47ba-94d6-f42bd175d73b.jpg', 25, '2020-08-03 22:12:06', '2020-08-03 22:12:06');
INSERT INTO `image_product` VALUES (92, 'http://cms.local/media/avatar/efbe97ff-0058-4b82-8d7d-3f189c701f9e.jpg', 25, '2020-08-03 22:12:06', '2020-08-03 22:12:06');
INSERT INTO `image_product` VALUES (93, 'http://cms.local/media/avatar/44c5971c-85b3-4f6b-aef1-42e36d9281a4.jpg', 26, '2020-08-03 22:14:47', '2020-08-03 22:14:47');
INSERT INTO `image_product` VALUES (94, 'http://cms.local/media/avatar/3bed13bd-8c17-4311-bdc6-2b367b2a852d.jpg', 26, '2020-08-03 22:14:47', '2020-08-03 22:14:47');
INSERT INTO `image_product` VALUES (95, 'http://cms.local/media/avatar/d30006ab-5d0d-4a76-8a22-fe6e290e319d.jpg', 26, '2020-08-03 22:14:47', '2020-08-03 22:14:47');
INSERT INTO `image_product` VALUES (96, 'http://cms.local/media/avatar/8036cffc-e463-4f87-ae53-87b8a24c31cc.jpg', 26, '2020-08-03 22:14:47', '2020-08-03 22:14:47');
INSERT INTO `image_product` VALUES (97, 'http://cms.local/media/avatar/7bc546e9-2fa0-4a42-a7ab-26a5d2791a49.jpg', 27, '2020-08-03 22:18:03', '2020-08-03 22:18:03');
INSERT INTO `image_product` VALUES (98, 'http://cms.local/media/avatar/128a5638-52a7-4265-903b-8e64974437ff.jpg', 27, '2020-08-03 22:18:03', '2020-08-03 22:18:03');
INSERT INTO `image_product` VALUES (99, 'http://cms.local/media/avatar/1efaf0b4-9a5a-4c19-b13a-12546f0b61f3.jpg', 27, '2020-08-03 22:18:03', '2020-08-03 22:18:03');
INSERT INTO `image_product` VALUES (100, 'http://cms.local/media/avatar/d3e36db0-c3ef-4f27-ac97-501c45e28c83.jpg', 27, '2020-08-03 22:18:03', '2020-08-03 22:18:03');
INSERT INTO `image_product` VALUES (101, 'http://cms.local/media/avatar/b6353eab-269f-4ff6-ab7b-df1d9a44fffa.jpg', 28, '2020-08-03 22:21:58', '2020-08-03 22:21:58');
INSERT INTO `image_product` VALUES (102, 'http://cms.local/media/avatar/4e141a78-a03d-4c5d-afe5-e19b9ebe9ee8.jpg', 28, '2020-08-03 22:21:58', '2020-08-03 22:21:58');
INSERT INTO `image_product` VALUES (103, 'http://cms.local/media/avatar/9d628143-608b-4908-be58-803456cf4a2a.jpg', 28, '2020-08-03 22:21:58', '2020-08-03 22:21:58');
INSERT INTO `image_product` VALUES (104, 'http://cms.local/media/avatar/06eeb689-56f3-4060-8b7f-1a6ac2b6ba92.jpg', 28, '2020-08-03 22:21:58', '2020-08-03 22:21:58');
INSERT INTO `image_product` VALUES (105, 'http://cms.local/media/avatar/0e7845b9-5c74-4cf6-90d8-84f159a9d2fb.jpg', 29, '2020-08-03 22:24:54', '2020-08-03 22:24:54');
INSERT INTO `image_product` VALUES (106, 'http://cms.local/media/avatar/34e9fd82-017a-47e5-911e-a3ba4026e141.jpg', 29, '2020-08-03 22:24:54', '2020-08-03 22:24:54');
INSERT INTO `image_product` VALUES (107, 'http://cms.local/media/avatar/466ed40c-d67e-4604-a02c-6f049e217ab5.jpg', 29, '2020-08-03 22:24:54', '2020-08-03 22:24:54');
INSERT INTO `image_product` VALUES (108, 'http://cms.local/media/avatar/701e1fd1-a8a4-4620-b014-85cc1ecc6cc8.jpg', 29, '2020-08-03 22:24:54', '2020-08-03 22:24:54');
INSERT INTO `image_product` VALUES (109, 'http://cms.local/media/avatar/49b7cbd8-52df-4955-a87e-344c81c65938.jpg', 30, '2020-08-03 22:33:43', '2020-08-03 22:33:43');
INSERT INTO `image_product` VALUES (110, 'http://cms.local/media/avatar/2f7ddda1-ec26-4501-943b-999ed1b377d8.jpg', 30, '2020-08-03 22:33:43', '2020-08-03 22:33:43');
INSERT INTO `image_product` VALUES (111, 'http://cms.local/media/avatar/e30520c7-865d-4170-9d45-62330c67c1c6.jpg', 30, '2020-08-03 22:33:43', '2020-08-03 22:33:43');
INSERT INTO `image_product` VALUES (112, 'http://cms.local/media/avatar/0b5f05a6-f9eb-44bf-b9f5-fa070cad4c5a.jpg', 30, '2020-08-03 22:33:43', '2020-08-03 22:33:43');
INSERT INTO `image_product` VALUES (113, 'http://cms.local/media/avatar/5e59f2de-c6d3-4940-af4a-0e79a430cf3e.jpg', 31, '2020-08-03 22:36:59', '2020-08-03 22:36:59');
INSERT INTO `image_product` VALUES (114, 'http://cms.local/media/avatar/59e8801d-d5cd-4b9a-88b4-17362c64e7f8.jpg', 31, '2020-08-03 22:36:59', '2020-08-03 22:36:59');
INSERT INTO `image_product` VALUES (115, 'http://cms.local/media/avatar/0c3fe55f-8317-4e88-a6f6-63b791d8bfc7.jpg', 31, '2020-08-03 22:36:59', '2020-08-03 22:36:59');
INSERT INTO `image_product` VALUES (116, 'http://cms.local/media/avatar/a7f8ced8-2c4b-4f65-a050-6fa98ae8da03.jpg', 31, '2020-08-03 22:36:59', '2020-08-03 22:36:59');
INSERT INTO `image_product` VALUES (117, 'http://cms.local/media/avatar/9560869a-c4aa-4927-a01b-2d247502c4fe.jpg', 32, '2020-08-03 22:39:16', '2020-08-03 22:39:16');
INSERT INTO `image_product` VALUES (118, 'http://cms.local/media/avatar/54fb576d-5e87-441b-91a8-262c030d4b59.jpg', 32, '2020-08-03 22:39:16', '2020-08-03 22:39:16');
INSERT INTO `image_product` VALUES (119, 'http://cms.local/media/avatar/818d5ce3-a257-4d21-8f74-870828db1d69.jpg', 32, '2020-08-03 22:39:16', '2020-08-03 22:39:16');
INSERT INTO `image_product` VALUES (120, 'http://cms.local/media/avatar/b8212138-4740-4d1c-b37b-337c8c921217.jpg', 32, '2020-08-03 22:39:16', '2020-08-03 22:39:16');
INSERT INTO `image_product` VALUES (121, 'http://cms.local/media/avatar/c5aee25c-63eb-4520-9959-b3daecfc1917.jpg', 33, '2020-08-03 22:42:58', '2020-08-03 22:42:58');
INSERT INTO `image_product` VALUES (122, 'http://cms.local/media/avatar/b383a165-a5a7-42bf-aae4-1efb404a32a5.jpg', 33, '2020-08-03 22:42:58', '2020-08-03 22:42:58');
INSERT INTO `image_product` VALUES (123, 'http://cms.local/media/avatar/7e6ca2bf-3bde-4f59-a159-1805a952bfbc.jpg', 33, '2020-08-03 22:42:58', '2020-08-03 22:42:58');
INSERT INTO `image_product` VALUES (124, 'http://cms.local/media/avatar/0ed52f20-0471-4a74-a183-4e87c29c304f.jpg', 33, '2020-08-03 22:42:58', '2020-08-03 22:42:58');
INSERT INTO `image_product` VALUES (125, 'http://cms.local/media/avatar/7c92a0de-6918-482c-98dc-6b836d731f49.jpg', 34, '2020-08-03 22:46:56', '2020-08-03 22:46:56');
INSERT INTO `image_product` VALUES (126, 'http://cms.local/media/avatar/8e8f0024-a1c9-4425-bb2d-8442dc229985.jpg', 34, '2020-08-03 22:46:56', '2020-08-03 22:46:56');
INSERT INTO `image_product` VALUES (127, 'http://cms.local/media/avatar/6103854c-e1b7-4744-b45f-06c02795560a.jpg', 34, '2020-08-03 22:46:56', '2020-08-03 22:46:56');
INSERT INTO `image_product` VALUES (128, 'http://cms.local/media/avatar/bb0be94d-c6ba-4c21-a928-b23f35d4bb58.jpg', 34, '2020-08-03 22:46:56', '2020-08-03 22:46:56');
INSERT INTO `image_product` VALUES (129, 'http://cms.local/media/avatar/d62b21a0-3eb2-4878-8bd0-fb2f0b865e64.jpg', 35, '2020-08-03 22:49:55', '2020-08-03 22:49:55');
INSERT INTO `image_product` VALUES (130, 'http://cms.local/media/avatar/3e9f5766-812b-45f4-9587-45755696345d.jpg', 35, '2020-08-03 22:49:55', '2020-08-03 22:49:55');
INSERT INTO `image_product` VALUES (131, 'http://cms.local/media/avatar/a99d066e-1edc-4367-90b7-e082413f5e8c.jpg', 35, '2020-08-03 22:49:55', '2020-08-03 22:49:55');
INSERT INTO `image_product` VALUES (132, 'http://cms.local/media/avatar/d3a275c2-b29c-4c0d-878b-559545235bdc.jpg', 35, '2020-08-03 22:49:55', '2020-08-03 22:49:55');
INSERT INTO `image_product` VALUES (133, 'http://cms.local/media/avatar/b4393ef4-96a7-47ba-8160-6f074d4ce8d1.jpg', 36, '2020-08-03 22:52:30', '2020-08-03 22:52:30');
INSERT INTO `image_product` VALUES (134, 'http://cms.local/media/avatar/630940bf-8df2-4216-9a4b-d1dee4d07ce3.jpg', 36, '2020-08-03 22:52:30', '2020-08-03 22:52:30');
INSERT INTO `image_product` VALUES (135, 'http://cms.local/media/avatar/27560603-0d10-4fe5-a650-7dcea4f9951b.jpg', 36, '2020-08-03 22:52:30', '2020-08-03 22:52:30');
INSERT INTO `image_product` VALUES (136, 'http://cms.local/media/avatar/56f8d5df-4d44-4b0a-98fb-9fb54b3d6e5d.jpg', 36, '2020-08-03 22:52:30', '2020-08-03 22:52:30');
INSERT INTO `image_product` VALUES (137, 'http://cms.local/media/avatar/554e56a7-b3b4-44a0-88e3-51b6071435fc.jpg', 37, '2020-08-03 22:55:13', '2020-08-03 22:55:13');
INSERT INTO `image_product` VALUES (138, 'http://cms.local/media/avatar/33507845-06c7-4fc3-b38e-a907ca336674.jpg', 37, '2020-08-03 22:55:13', '2020-08-03 22:55:13');
INSERT INTO `image_product` VALUES (139, 'http://cms.local/media/avatar/1b46f424-b0e9-4a83-83c2-2894bd11e485.jpg', 37, '2020-08-03 22:55:13', '2020-08-03 22:55:13');
INSERT INTO `image_product` VALUES (140, 'http://cms.local/media/avatar/a39d3cc6-42f2-4d68-81a2-ae768b54ae6a.jpg', 37, '2020-08-03 22:55:13', '2020-08-03 22:55:13');
INSERT INTO `image_product` VALUES (141, 'http://cms.local/media/avatar/e7b8fe2a-e3c9-49b6-a35a-9375adae32f8.jpg', 38, '2020-08-03 22:57:57', '2020-08-03 22:57:57');
INSERT INTO `image_product` VALUES (142, 'http://cms.local/media/avatar/39dc4f84-a5e7-46e8-a029-d00e136422ae.jpg', 38, '2020-08-03 22:57:57', '2020-08-03 22:57:57');
INSERT INTO `image_product` VALUES (143, 'http://cms.local/media/avatar/c49d174b-054e-416e-845a-62358cdeb2cc.jpg', 38, '2020-08-03 22:57:57', '2020-08-03 22:57:57');
INSERT INTO `image_product` VALUES (144, 'http://cms.local/media/avatar/da0ca0b6-e314-4be2-a299-039b320d7cde.jpg', 38, '2020-08-03 22:57:57', '2020-08-03 22:57:57');
INSERT INTO `image_product` VALUES (145, 'http://cms.local/media/avatar/f3622143-9aa2-4f4d-8225-0b5602816ce2.jpg', 39, '2020-08-03 23:03:55', '2020-08-03 23:03:55');
INSERT INTO `image_product` VALUES (146, 'http://cms.local/media/avatar/6b80f867-9644-47a4-90e0-c61738667c09.jpg', 39, '2020-08-03 23:03:55', '2020-08-03 23:03:55');
INSERT INTO `image_product` VALUES (147, 'http://cms.local/media/avatar/ba34c60c-0fe8-459a-839b-28d40ca72510.jpg', 39, '2020-08-03 23:03:55', '2020-08-03 23:03:55');
INSERT INTO `image_product` VALUES (148, 'http://cms.local/media/avatar/0c330e28-f9a5-4f79-93d5-ee96b4db2931.jpg', 39, '2020-08-03 23:03:55', '2020-08-03 23:03:55');
INSERT INTO `image_product` VALUES (149, 'http://cms.local/media/avatar/b601c006-f541-417f-bb31-8666370406b8.jpg', 40, '2020-08-03 23:06:27', '2020-08-03 23:06:27');
INSERT INTO `image_product` VALUES (150, 'http://cms.local/media/avatar/04e49919-b849-4a28-adf1-e7506f880b1b.jpg', 40, '2020-08-03 23:06:27', '2020-08-03 23:06:27');
INSERT INTO `image_product` VALUES (151, 'http://cms.local/media/avatar/b63efd59-0897-4d76-8ab1-333e1890093a.jpg', 40, '2020-08-03 23:06:27', '2020-08-03 23:06:27');
INSERT INTO `image_product` VALUES (152, 'http://cms.local/media/avatar/2789fc8a-fc7d-432c-b2a2-7531d4399f7e.jpg', 40, '2020-08-03 23:06:27', '2020-08-03 23:06:27');
INSERT INTO `image_product` VALUES (153, 'http://cms.local/media/avatar/c30b32e4-a0c4-40d8-b898-089b51314f79.jpg', 41, '2020-08-03 23:11:17', '2020-08-03 23:11:17');
INSERT INTO `image_product` VALUES (154, 'http://cms.local/media/avatar/643e1f4e-44ee-43b6-8388-fc008fe24f49.jpg', 41, '2020-08-03 23:11:17', '2020-08-03 23:11:17');
INSERT INTO `image_product` VALUES (155, 'http://cms.local/media/avatar/c4725dbc-f425-4d70-b556-e79fa72d7b50.jpg', 41, '2020-08-03 23:11:17', '2020-08-03 23:11:17');
INSERT INTO `image_product` VALUES (156, 'http://cms.local/media/avatar/0cb6c96a-6df4-4857-9b56-d906bb883679.jpg', 41, '2020-08-03 23:11:17', '2020-08-03 23:11:17');
INSERT INTO `image_product` VALUES (157, 'http://cms.local/media/avatar/660ed46a-9b52-4b0e-a556-b2d6b18b27ec.jpg', 42, '2020-08-03 23:13:16', '2020-08-03 23:13:16');
INSERT INTO `image_product` VALUES (158, 'http://cms.local/media/avatar/169d8f5f-8b58-4502-9268-9f38497ecd51.jpg', 42, '2020-08-03 23:13:16', '2020-08-03 23:13:16');
INSERT INTO `image_product` VALUES (159, 'http://cms.local/media/avatar/9caefaf3-9d0b-4608-8a13-d187c12651a5.jpg', 42, '2020-08-03 23:13:16', '2020-08-03 23:13:16');
INSERT INTO `image_product` VALUES (160, 'http://cms.local/media/avatar/2698dc76-7c0b-42b3-a272-651f75019715.jpg', 42, '2020-08-03 23:13:16', '2020-08-03 23:13:16');
INSERT INTO `image_product` VALUES (161, 'http://cms.local/media/avatar/ed4230c3-48d9-4332-82f1-7aadac76d718.jpg', 43, '2020-08-03 23:15:46', '2020-08-03 23:15:46');
INSERT INTO `image_product` VALUES (162, 'http://cms.local/media/avatar/ebeeaf31-1a83-4981-8cc6-819e74558418.jpg', 43, '2020-08-03 23:15:46', '2020-08-03 23:15:46');
INSERT INTO `image_product` VALUES (163, 'http://cms.local/media/avatar/ff7258a1-23d7-429b-b644-0423bab0d003.jpg', 43, '2020-08-03 23:15:46', '2020-08-03 23:15:46');
INSERT INTO `image_product` VALUES (164, 'http://cms.local/media/avatar/530ab499-c199-4368-962b-5676b55b6c19.jpg', 43, '2020-08-03 23:15:46', '2020-08-03 23:15:46');
INSERT INTO `image_product` VALUES (165, 'http://cms.local/media/avatar/c2d1d6ea-2b46-4e47-b864-fda60747ee30.jpg', 44, '2020-08-03 23:19:02', '2020-08-03 23:19:02');
INSERT INTO `image_product` VALUES (166, 'http://cms.local/media/avatar/c95b4122-8a6b-4ccb-a493-7e465e55f5d9.jpg', 44, '2020-08-03 23:19:03', '2020-08-03 23:19:03');
INSERT INTO `image_product` VALUES (167, 'http://cms.local/media/avatar/4d606acb-b4f4-42e3-abdc-c1c7f9bd6127.jpg', 44, '2020-08-03 23:19:03', '2020-08-03 23:19:03');
INSERT INTO `image_product` VALUES (168, 'http://cms.local/media/avatar/988d748a-9452-47d3-896c-7bb93be30025.jpg', 44, '2020-08-03 23:19:03', '2020-08-03 23:19:03');
INSERT INTO `image_product` VALUES (169, 'http://cms.local/media/avatar/48e2ae1f-eb0e-4c6d-93f3-d3ca952b4a69.jpg', 45, '2020-08-03 23:22:12', '2020-08-03 23:22:12');
INSERT INTO `image_product` VALUES (170, 'http://cms.local/media/avatar/09d2c262-0704-4ef5-a649-0a3c7d05b30a.jpg', 45, '2020-08-03 23:22:12', '2020-08-03 23:22:12');
INSERT INTO `image_product` VALUES (171, 'http://cms.local/media/avatar/d5543a16-e163-4f89-a75c-16bf17975475.jpg', 45, '2020-08-03 23:22:12', '2020-08-03 23:22:12');
INSERT INTO `image_product` VALUES (172, 'http://cms.local/media/avatar/be8d5782-4d0d-470c-84ac-64d8f35758c9.jpg', 45, '2020-08-03 23:22:12', '2020-08-03 23:22:12');
INSERT INTO `image_product` VALUES (173, 'http://cms.local/media/avatar/24c2cd49-4e09-4cf9-9953-05e29a25911d.jpg', 46, '2020-08-03 23:24:28', '2020-08-03 23:24:28');
INSERT INTO `image_product` VALUES (174, 'http://cms.local/media/avatar/a43a11fe-fce3-43e3-b352-fed83e8c17ef.jpg', 46, '2020-08-03 23:24:28', '2020-08-03 23:24:28');
INSERT INTO `image_product` VALUES (175, 'http://cms.local/media/avatar/cdc0f7ab-3383-4771-81f8-589a7e5ec97c.jpg', 46, '2020-08-03 23:24:28', '2020-08-03 23:24:28');
INSERT INTO `image_product` VALUES (176, 'http://cms.local/media/avatar/dc7327e1-ad7a-4b30-a826-8e0be2528504.jpg', 46, '2020-08-03 23:24:28', '2020-08-03 23:24:28');
INSERT INTO `image_product` VALUES (177, 'http://cms.local/media/avatar/bd4d1b01-cc80-4166-b14c-d378d3185023.jpg', 47, '2020-08-03 23:27:17', '2020-08-03 23:27:17');
INSERT INTO `image_product` VALUES (178, 'http://cms.local/media/avatar/4710fdd9-da41-46ea-b39e-7d1eb813d4c1.jpg', 47, '2020-08-03 23:27:17', '2020-08-03 23:27:17');
INSERT INTO `image_product` VALUES (179, 'http://cms.local/media/avatar/9959dbe8-cb22-495b-b2bb-d257fbbb315e.jpg', 47, '2020-08-03 23:27:17', '2020-08-03 23:27:17');
INSERT INTO `image_product` VALUES (180, 'http://cms.local/media/avatar/b79ae4a7-8542-4d16-a000-d75067e0ecf5.jpg', 47, '2020-08-03 23:27:17', '2020-08-03 23:27:17');
INSERT INTO `image_product` VALUES (181, 'http://cms.local/media/avatar/acd60c9f-5d67-445c-8c32-ff06c457f0c7.jpg', 48, '2020-08-03 23:30:01', '2020-08-03 23:30:01');
INSERT INTO `image_product` VALUES (182, 'http://cms.local/media/avatar/5eea05cb-d70c-4b07-9680-1de4633dabab.jpg', 48, '2020-08-03 23:30:01', '2020-08-03 23:30:01');
INSERT INTO `image_product` VALUES (183, 'http://cms.local/media/avatar/12856905-1ca6-4725-a2c5-232199ab7490.jpg', 48, '2020-08-03 23:30:01', '2020-08-03 23:30:01');
INSERT INTO `image_product` VALUES (184, 'http://cms.local/media/avatar/87f10f33-5d8b-40d0-ac60-9871fa8e9210.jpg', 48, '2020-08-03 23:30:01', '2020-08-03 23:30:01');
INSERT INTO `image_product` VALUES (185, 'http://cms.local/media/avatar/6d5350cb-be68-48c6-9ae3-e2a236a294b2.jpg', 49, '2020-08-03 23:31:39', '2020-08-03 23:31:39');
INSERT INTO `image_product` VALUES (186, 'http://cms.local/media/avatar/dc67ee3e-0d49-4c51-a7e2-442b3570875d.jpg', 49, '2020-08-03 23:31:39', '2020-08-03 23:31:39');
INSERT INTO `image_product` VALUES (187, 'http://cms.local/media/avatar/987d8c63-4384-4092-b0b5-aeeef24a3873.jpg', 49, '2020-08-03 23:31:39', '2020-08-03 23:31:39');
INSERT INTO `image_product` VALUES (188, 'http://cms.local/media/avatar/91df5cca-7857-4007-8c14-90a2a723aed9.jpg', 49, '2020-08-03 23:31:39', '2020-08-03 23:31:39');
INSERT INTO `image_product` VALUES (189, 'http://cms.local/media/avatar/ea25449d-f69c-410b-94ee-08f9e117cb3a.jpg', 50, '2020-08-03 23:35:11', '2020-08-03 23:35:11');
INSERT INTO `image_product` VALUES (190, 'http://cms.local/media/avatar/060863b5-40fe-4e81-94e2-0640e5d96fad.jpg', 50, '2020-08-03 23:35:11', '2020-08-03 23:35:11');
INSERT INTO `image_product` VALUES (191, 'http://cms.local/media/avatar/eed9c8ef-1562-4509-8b14-686ccb9957bf.jpg', 50, '2020-08-03 23:35:11', '2020-08-03 23:35:11');
INSERT INTO `image_product` VALUES (192, 'http://cms.local/media/avatar/15dd0b9f-602b-4efd-979b-4486a96fd57e.jpg', 50, '2020-08-03 23:35:11', '2020-08-03 23:35:11');
INSERT INTO `image_product` VALUES (193, 'http://cms.local/media/avatar/ee02bf17-a7f3-4414-acb6-ed7faec830bc.jpg', 51, '2020-08-03 23:37:08', '2020-08-03 23:37:08');
INSERT INTO `image_product` VALUES (194, 'http://cms.local/media/avatar/5ba11a2a-8606-4fd0-ac13-55edb2d6bc6d.jpg', 51, '2020-08-03 23:37:08', '2020-08-03 23:37:08');
INSERT INTO `image_product` VALUES (195, 'http://cms.local/media/avatar/bf74319c-f790-43a4-be4a-2b189878be89.jpg', 51, '2020-08-03 23:37:08', '2020-08-03 23:37:08');
INSERT INTO `image_product` VALUES (196, 'http://cms.local/media/avatar/bcb45f8d-0593-4127-8bb8-6c7276d675b6.jpg', 51, '2020-08-03 23:37:08', '2020-08-03 23:37:08');
INSERT INTO `image_product` VALUES (197, 'http://cms.local/media/avatar/9d848b15-3502-4a1f-b817-921a0e969018.jpg', 52, '2020-08-04 15:47:32', '2020-08-04 15:47:32');
INSERT INTO `image_product` VALUES (198, 'http://cms.local/media/avatar/04337274-1f8f-45b3-9ab1-d7f0f0b67e64.jpg', 52, '2020-08-04 15:47:32', '2020-08-04 15:47:32');
INSERT INTO `image_product` VALUES (199, 'http://cms.local/media/avatar/02bcafea-b099-4c89-8c76-82f143d8e2f8.jpg', 52, '2020-08-04 15:47:32', '2020-08-04 15:47:32');
INSERT INTO `image_product` VALUES (200, 'http://cms.local/media/avatar/b4d7bb69-0114-4019-80c2-49191d482963.jpg', 52, '2020-08-04 15:47:32', '2020-08-04 15:47:32');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 58 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2019_09_19_002743_create_blog_category_table', 1);
INSERT INTO `migrations` VALUES (2, '2019_09_19_002916_create_users_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_09_19_003101_create_blog_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_09_19_003200_create_slider_table', 1);
INSERT INTO `migrations` VALUES (5, '2019_09_19_003428_create_ship_method_table', 1);
INSERT INTO `migrations` VALUES (6, '2019_09_19_003636_create_pay_method_table', 1);
INSERT INTO `migrations` VALUES (7, '2019_09_19_003817_create_guest_table', 1);
INSERT INTO `migrations` VALUES (8, '2019_09_19_003931_create_order_table', 1);
INSERT INTO `migrations` VALUES (9, '2019_09_19_004613_create_brand_table', 1);
INSERT INTO `migrations` VALUES (10, '2019_09_19_004657_create_product_table', 1);
INSERT INTO `migrations` VALUES (11, '2019_09_19_004816_create_image_product_table', 1);
INSERT INTO `migrations` VALUES (12, '2019_09_19_004918_create_attr_order_table', 1);
INSERT INTO `migrations` VALUES (13, '2019_09_19_005335_create_categories_table', 1);
INSERT INTO `migrations` VALUES (14, '2019_09_19_005542_create_category_product_pivot_table', 1);
INSERT INTO `migrations` VALUES (15, '2019_09_19_005712_create_attribute_table', 1);
INSERT INTO `migrations` VALUES (16, '2019_09_19_005820_create_values_table', 1);
INSERT INTO `migrations` VALUES (17, '2019_09_19_005859_create_values_product_table', 1);
INSERT INTO `migrations` VALUES (18, '2019_09_19_005950_create_variant_table', 1);
INSERT INTO `migrations` VALUES (19, '2019_09_19_010058_create_variant_value_table', 1);
INSERT INTO `migrations` VALUES (20, '2019_09_19_010201_create_subcribe_table', 1);
INSERT INTO `migrations` VALUES (21, '2019_09_19_010221_create_contact_table', 1);
INSERT INTO `migrations` VALUES (22, '2019_09_19_010643_create_password_reset_table', 1);
INSERT INTO `migrations` VALUES (23, '2019_09_19_011810_edit_review_column_table', 1);
INSERT INTO `migrations` VALUES (24, '2019_09_19_014845_add_name_column_slider_table', 1);
INSERT INTO `migrations` VALUES (25, '2019_09_19_020237_create_review_table', 1);
INSERT INTO `migrations` VALUES (26, '2019_09_19_020553_add_guest_id_review_table', 1);
INSERT INTO `migrations` VALUES (27, '2019_09_27_181321_add_purchase_column', 1);
INSERT INTO `migrations` VALUES (28, '2019_10_30_145502_create_table_trending', 1);
INSERT INTO `migrations` VALUES (29, '2019_10_30_151152_add_trending_id_product', 2);
INSERT INTO `migrations` VALUES (30, '2019_10_31_224048_edit_trending_id', 3);
INSERT INTO `migrations` VALUES (31, '2019_11_06_144154_add_parent_comment_column', 4);
INSERT INTO `migrations` VALUES (32, '2019_11_06_155823_edit_review_table', 5);
INSERT INTO `migrations` VALUES (33, '2019_11_06_160053_edit_review_table', 6);
INSERT INTO `migrations` VALUES (34, '2019_12_04_125901_add_block_comment_column', 7);
INSERT INTO `migrations` VALUES (35, '2019_12_08_183836_reply_comment_table', 8);
INSERT INTO `migrations` VALUES (36, '2019_12_08_184036_drop_parent_comment_column', 8);
INSERT INTO `migrations` VALUES (37, '2019_12_08_184259_add_block_reply_column', 9);
INSERT INTO `migrations` VALUES (38, '2019_12_08_203437_add_foreingkey_reply_table', 10);
INSERT INTO `migrations` VALUES (39, '2020_05_05_213325_create_sale_table', 11);
INSERT INTO `migrations` VALUES (40, '2020_05_05_214207_create_product_back_table', 12);
INSERT INTO `migrations` VALUES (41, '2020_07_25_111243_alter_table_product', 13);
INSERT INTO `migrations` VALUES (42, '2020_07_25_111604_alter_table_variant', 13);
INSERT INTO `migrations` VALUES (43, '2020_07_25_170211_alter_table_variant', 14);
INSERT INTO `migrations` VALUES (44, '2020_07_25_182736_alter_table_product', 15);
INSERT INTO `migrations` VALUES (45, '2020_07_26_215231_alter_table_variant', 16);
INSERT INTO `migrations` VALUES (46, '2020_07_28_000557_alter_table_product', 17);
INSERT INTO `migrations` VALUES (47, '2020_07_28_225929_alter_table_sale', 18);
INSERT INTO `migrations` VALUES (48, '2020_07_29_235906_alter_table_sale', 19);
INSERT INTO `migrations` VALUES (49, '2020_07_30_005633_alter_table_product_back', 20);
INSERT INTO `migrations` VALUES (50, '2020_07_31_014036_alter_table_product_back', 21);
INSERT INTO `migrations` VALUES (51, '2020_07_31_225844_add_column_product_id_product_back_table', 22);
INSERT INTO `migrations` VALUES (52, '2020_07_31_231407_add_quantity_product_back', 23);
INSERT INTO `migrations` VALUES (53, '2020_07_31_233538_drop_foreign_product_back_table', 24);
INSERT INTO `migrations` VALUES (54, '2020_08_01_215438_add_status_sale', 25);
INSERT INTO `migrations` VALUES (55, '2020_08_02_100644_add_day_created_order_table', 26);
INSERT INTO `migrations` VALUES (56, '2020_08_03_021000_create_table_email_template', 27);
INSERT INTO `migrations` VALUES (57, '2020_08_03_235147_add_surrogate_name_order_table', 28);

-- ----------------------------
-- Table structure for order
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` decimal(15, 2) UNSIGNED NOT NULL DEFAULT 0.00,
  `surrogate_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay_id` bigint(20) UNSIGNED NULL DEFAULT NULL,
  `ship_id` bigint(20) UNSIGNED NULL DEFAULT NULL,
  `guest_id` bigint(20) UNSIGNED NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NULL DEFAULT NULL,
  `day_created` date NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `order_order_code_unique`(`order_code`) USING BTREE,
  INDEX `order_pay_id_foreign`(`pay_id`) USING BTREE,
  INDEX `order_ship_id_foreign`(`ship_id`) USING BTREE,
  INDEX `order_guest_id_foreign`(`guest_id`) USING BTREE,
  INDEX `order_user_id_foreign`(`user_id`) USING BTREE,
  CONSTRAINT `order_guest_id_foreign` FOREIGN KEY (`guest_id`) REFERENCES `guest` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `order_pay_id_foreign` FOREIGN KEY (`pay_id`) REFERENCES `payment_method` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `order_ship_id_foreign` FOREIGN KEY (`ship_id`) REFERENCES `ship_method` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `order_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 47 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of order
-- ----------------------------
INSERT INTO `order` VALUES (1, '1383554394', 'Cẩn thận hàng dễ vỡ', 1, 270000.00, 'Nguyễn Đức Hiếu', 'Số 11 Ngách 15, Ngõ Tô Tiền, Phường Trung Phụng, Quận Đống Đa, Hà Nội', 4, 1, NULL, 1, '2020-08-02', '2019-11-18 16:25:03', '2019-11-18 16:25:03');
INSERT INTO `order` VALUES (2, '114137304', NULL, 1, 220000.00, 'Nguyễn Đức Hiếu', 'Số 11 Ngách 15, Ngõ Tô Tiền, Phường Trung Phụng, Quận Đống Đa, Hà Nội', 3, 1, NULL, 1, '2020-08-02', '2019-12-05 00:38:52', '2019-12-05 00:38:52');
INSERT INTO `order` VALUES (3, '1042841092', 'Cẩn thận hàng dễ vỡ', 2, 850000.00, 'Nguyễn Đức Hiếu', 'Số 11 Ngách 15, Ngõ Tô Tiền, Phường Trung Phụng, Quận Đống Đa, Hà Nội', 3, 1, NULL, 1, '2020-08-01', '2019-12-11 00:42:11', '2019-12-11 00:42:11');
INSERT INTO `order` VALUES (4, '1292406833', NULL, 1, 230000.00, 'Nguyễn Đức Hiếu', 'Số 11 Ngách 15, Ngõ Tô Tiền, Phường Trung Phụng, Quận Đống Đa, Hà Nội', 3, 1, NULL, 4, '2020-08-02', '2020-02-23 20:56:27', '2020-02-23 20:56:27');
INSERT INTO `order` VALUES (5, '770359698', NULL, 1, 255000.00, 'Nguyễn Đức Hiếu', 'Số 11 Ngách 15, Ngõ Tô Tiền, Phường Trung Phụng, Quận Đống Đa, Hà Nội', 4, 1, NULL, 1, '2020-07-30', '2020-02-23 20:57:18', '2020-02-23 20:57:18');
INSERT INTO `order` VALUES (6, '914780175', 'Cẩn thận hàng dễ vỡ', 2, 830000.00, 'Nguyễn Đức Hiếu', 'Số 11 Ngách 15, Ngõ Tô Tiền, Phường Trung Phụng, Quận Đống Đa, Hà Nội', 4, 1, NULL, 1, '2020-07-30', '2020-07-09 11:18:57', '2020-07-09 11:18:57');
INSERT INTO `order` VALUES (7, '93832355', NULL, 1, 230000.00, 'Nguyễn Đức Hiếu', 'Số 11 Ngách 15, Ngõ Tô Tiền, Phường Trung Phụng, Quận Đống Đa, Hà Nội', 4, 1, 9, NULL, '2020-07-30', '2020-07-19 22:33:49', '2020-07-19 22:33:49');
INSERT INTO `order` VALUES (8, '558238262', 'Cẩn thận hàng dễ vỡ', 1, 135000.00, 'Nguyễn Đức Hiếu', 'Số 11 Ngách 15, Ngõ Tô Tiền, Phường Trung Phụng, Quận Đống Đa, Hà Nội', 4, 1, NULL, 1, '2020-08-02', '2020-07-29 00:02:02', '2020-07-29 00:02:02');
INSERT INTO `order` VALUES (9, '1774958927', 'Cẩn thận hàng dễ vỡ', 1, 135000.00, 'Nguyễn Đức Hiếu', 'Số 11 Ngách 15, Ngõ Tô Tiền, Phường Trung Phụng, Quận Đống Đa, Hà Nội', 4, 1, NULL, 1, '2020-07-30', '2020-07-31 23:31:10', '2020-07-31 23:31:10');
INSERT INTO `order` VALUES (10, '1060440818', 'Cẩn thận hàng dễ vỡ', 1, 81000.00, 'Nguyễn Đức Hiếu', 'Số 11 Ngách 15, Ngõ Tô Tiền, Phường Trung Phụng, Quận Đống Đa, Hà Nội', 4, 1, NULL, 1, '2020-08-03', '2020-08-03 01:57:16', '2020-08-03 01:57:16');
INSERT INTO `order` VALUES (11, '46505923', 'Cẩn thận hàng dễ vỡ', 1, 360000.00, 'Nguyễn Đức Hiếu', 'Hà NỘi', 3, 1, NULL, 4, '2020-08-03', '2020-08-03 03:24:54', '2020-08-03 03:24:54');
INSERT INTO `order` VALUES (12, '1069008450', NULL, 1, 230000.00, 'Nguyễn Đức Hiếu', 'Số 11 Ngách 15, Ngõ Tô Tiền, Phường Trung Phụng, Quận Đống Đa, Hà Nội', 4, 1, 10, NULL, '2020-08-03', '2020-08-03 03:40:22', '2020-08-03 03:40:22');
INSERT INTO `order` VALUES (13, '2127684827', NULL, 1, 270000.00, 'Nguyễn Đức Hiếu', 'Số 11 Ngách 15, Ngõ Tô Tiền, Phường Trung Phụng, Quận Đống Đa, Hà Nội', 4, 1, 11, NULL, '2020-08-03', '2020-08-03 03:42:52', '2020-08-03 03:42:52');
INSERT INTO `order` VALUES (14, '1469055586', NULL, 1, 270000.00, 'Nguyễn Đức Hiếu', 'Số 11 Ngách 15, Ngõ Tô Tiền, Phường Trung Phụng, Quận Đống Đa, Hà Nội', 1, 1, 12, NULL, '2020-08-03', '2020-08-03 03:45:33', '2020-08-03 03:45:33');
INSERT INTO `order` VALUES (15, '1732564881', NULL, 1, 270000.00, 'Nguyễn Đức Hiếu', 'Số 11 Ngách 15, Ngõ Tô Tiền, Phường Trung Phụng, Quận Đống Đa, Hà Nội', 2, 1, 13, NULL, '2020-08-03', '2020-08-03 03:47:49', '2020-08-03 03:47:49');
INSERT INTO `order` VALUES (17, '269911270', NULL, 1, 320000.00, 'Nguyễn Đức Hiếu', 'Số 11 Ngách 15, Ngõ Tô Tiền, Phường Trung Phụng, Quận Đống Đa, Hà Nội', 4, 1, 15, NULL, '2020-08-03', '2020-08-03 03:54:05', '2020-08-03 03:54:05');
INSERT INTO `order` VALUES (18, '1787882452', NULL, 1, 320000.00, 'Nguyễn Đức Hiếu', 'HN', 2, 1, NULL, 4, '2020-08-03', '2020-08-03 04:15:35', '2020-08-03 04:15:35');
INSERT INTO `order` VALUES (19, '1342391300', 'Cẩn thận hàng dễ vỡ', 1, 180000.00, 'Dương Hồng Thuận', 'Số 11 Ngách 15, Ngõ Tô Tiền, Phường Trung Phụng, Quận Đống Đa, Hà Nội', 4, 1, NULL, 1, '2020-08-03', '2020-08-03 23:42:52', '2020-08-03 23:42:52');
INSERT INTO `order` VALUES (20, '2074209795', 'Ship giờ hành chính', 3, 1385000.00, 'Hoàng Thu Thủy', 'Số 2, Đội Cấn, Ba Đình, Hà Nội', 1, 1, NULL, 1, '2020-08-03', '2020-08-03 23:45:10', '2020-08-03 23:45:10');
INSERT INTO `order` VALUES (21, '1127121918', 'Ship giờ hành chính', 2, 640000.00, 'Vũ Phạm Đình Thái', 'Số 15, Ngách 26 Quận 1, TPHCM', 3, 1, NULL, 1, '2020-08-03', '2020-08-03 23:46:24', '2020-08-03 23:46:24');
INSERT INTO `order` VALUES (22, '1055751246', 'Ship lúc 2 giờ chiều', 1, 190000.00, 'Phạm Đình Thái Ngân', 'Số 17, Trúc Bạch, Hà Nội', 3, 1, NULL, 1, '2020-08-03', '2020-08-03 23:49:15', '2020-08-03 23:49:15');
INSERT INTO `order` VALUES (23, '1220513332', 'Cẩn thận hàng dễ vỡ', 2, 450000.00, 'Nguyễn Đức Hiếu', 'Số 15 Lê Duẩn Hà Nội', 3, 1, NULL, 1, '2020-08-04', '2020-08-04 00:24:01', '2020-08-04 00:24:01');
INSERT INTO `order` VALUES (24, '851112403', 'Cẩn thận hàng dễ vỡ', 2, 450000.00, 'Nguyễn Đức Hiếu', 'Số 15 Lê Duẩn Hà Nội', 3, 1, NULL, 1, '2020-08-04', '2020-08-04 00:24:12', '2020-08-04 00:24:12');
INSERT INTO `order` VALUES (25, '374887744', 'Cẩn thận hàng dễ vỡ', 2, 450000.00, 'Nguyễn Đức Hiếu', 'Số 15 Lê Duẩn Hà Nội', 3, 1, NULL, 1, '2020-08-04', '2020-08-04 00:24:49', '2020-08-04 00:24:49');
INSERT INTO `order` VALUES (26, '411895420', 'Cẩn thận hàng dễ vỡ', 2, 450000.00, 'Nguyễn Đức Hiếu', 'Số 15 Lê Duẩn Hà Nội', 3, 1, NULL, 1, '2020-08-04', '2020-08-04 00:25:17', '2020-08-04 00:25:17');
INSERT INTO `order` VALUES (27, '304616110', 'Cẩn thận hàng dễ vỡ', 2, 400000.00, 'Vũ Phạm Đình Thái', 'Số 26 Lê Thanh Nghị', 4, 1, NULL, 1, '2020-08-04', '2020-08-04 00:26:04', '2020-08-04 00:26:04');
INSERT INTO `order` VALUES (28, '1478564227', 'Cẩn thận hàng dễ vỡ', 2, 400000.00, 'Ribi Sachi', 'Số 26 Lê Thanh Nghị', 4, 1, NULL, 1, '2020-08-04', '2020-08-04 00:26:46', '2020-08-04 00:26:46');
INSERT INTO `order` VALUES (29, '63901411', 'Cẩn thận hàng dễ vỡ', 2, 400000.00, 'Ribi Sachi', 'Số 26 Lê Thanh Nghị', 4, 1, NULL, 1, '2020-08-04', '2020-08-04 00:30:59', '2020-08-04 00:30:59');
INSERT INTO `order` VALUES (30, '723341572', 'Cẩn thận hàng dễ vỡ', 2, 400000.00, 'Nguyễn Đức Hiếu', 'Số 26 Lê Thanh Nghị', 4, 1, NULL, 1, '2020-08-04', '2020-08-04 00:31:44', '2020-08-04 00:31:44');
INSERT INTO `order` VALUES (31, '530243867', 'Cẩn thận hàng dễ vỡ', 2, 400000.00, 'Ribi Sachi', 'Số 26 Lê Thanh Nghị', 4, 1, NULL, 1, '2020-08-04', '2020-08-04 00:31:56', '2020-08-04 00:31:56');
INSERT INTO `order` VALUES (32, '1664297913', 'Cẩn thận hàng dễ vỡ', 2, 400000.00, 'Nguyễn Đức Hiếu', 'Số 26 Lê Thanh Nghị', 4, 1, NULL, 1, '2020-08-04', '2020-08-04 00:32:17', '2020-08-04 00:32:17');
INSERT INTO `order` VALUES (33, '1836456759', 'Cẩn thận hàng dễ vỡ', 2, 690000.00, 'Nguyễn Đức Hiếu', 'số 167 Trần Đại Nghĩa', 4, 1, NULL, 1, '2020-08-04', '2020-08-04 00:33:11', '2020-08-04 00:33:11');
INSERT INTO `order` VALUES (34, '663685589', 'Cẩn thận hàng dễ vỡ', 2, 690000.00, 'Hoàng Thu Thủy', 'số 167 Trần Đại Nghĩa', 4, 1, NULL, 1, '2020-08-04', '2020-08-04 00:34:04', '2020-08-04 00:34:04');
INSERT INTO `order` VALUES (35, '1045155892', 'Cẩn thận hàng dễ vỡ', 2, 690000.00, 'Hoàng Thu Thủy', 'số 167 Trần Đại Nghĩa', 4, 1, NULL, 1, '2020-08-04', '2020-08-04 00:36:07', '2020-08-04 00:36:07');
INSERT INTO `order` VALUES (36, '702223245', 'Cẩn thận hàng dễ vỡ', 2, 690000.00, 'Hoàng Thu Thủy', 'số 167 Trần Đại Nghĩa', 4, 1, NULL, 1, '2020-08-04', '2020-08-04 00:36:15', '2020-08-04 00:36:15');
INSERT INTO `order` VALUES (37, '239484845', 'Ship giờ hành chính', 2, 300000.00, 'Nguyễn Vũ Thu Thảo', 'Số 15 Giang Văn Minh', 4, 1, NULL, 1, '2020-08-04', '2020-08-04 00:38:30', '2020-08-04 00:38:30');
INSERT INTO `order` VALUES (38, '1575819685', 'Ship giờ hành chính', 2, 300000.00, 'Nguyễn Vũ Thu Thảo', 'Số 15 Giang Văn Minh', 4, 1, NULL, 1, '2020-08-04', '2020-08-04 00:38:48', '2020-08-04 00:38:48');
INSERT INTO `order` VALUES (39, '1402746897', NULL, 1, 145000.00, 'Nguyễn Văn Tuấn', 'Số 15 NGách 26 Khâm Thiên', 4, 1, NULL, 1, '2020-08-04', '2020-08-04 00:59:35', '2020-08-04 00:59:35');
INSERT INTO `order` VALUES (40, '214793366', NULL, 2, 430000.00, 'Nguyễn Hoàng Long', '18 Nguyễn Thị Định', 2, 1, NULL, 1, '2020-08-04', '2020-08-04 01:00:55', '2020-08-04 01:00:55');
INSERT INTO `order` VALUES (41, '17318237', 'Ship giờ hành chính', 2, 510000.00, 'Nguyễn Văn Quyết', '167 Lê Văn Lương', 3, 1, NULL, 1, '2020-08-04', '2020-08-04 01:02:29', '2020-08-04 01:02:29');
INSERT INTO `order` VALUES (42, '1867651599', NULL, 2, 580000.00, 'Trịnh Văn Lương', 'Số 16 Hoàng Ngân', 4, 1, NULL, 1, '2020-08-04', '2020-08-04 01:04:01', '2020-08-04 01:04:01');
INSERT INTO `order` VALUES (43, '751351065', 'Ship giờ hành chính', 1, 180000.00, 'Nguyễn Đức Hiếu', '15 Nguyễn Du', 2, 1, NULL, 1, '2020-08-04', '2020-08-04 01:54:03', '2020-08-04 01:54:03');
INSERT INTO `order` VALUES (44, '2048415302', 'Ship giờ hành chính', 1, 580000.00, 'Nguyễn Việt An', '15 Nguyễn Du', 4, 1, 16, NULL, '2020-08-04', '2020-08-04 10:15:59', '2020-08-04 10:15:59');
INSERT INTO `order` VALUES (45, '1319025038', 'Ship giờ hành chính', 1, 75000.00, 'Nguyễn Văn Nam', '15 Nguyễn Du', 4, 1, 17, NULL, '2020-08-04', '2020-08-04 14:27:15', '2020-08-04 14:27:15');
INSERT INTO `order` VALUES (46, '1555467813', NULL, 1, 69000.00, 'Nguyễn Đức Hiếu', 'Đại học mỏ địa chất', 4, 1, NULL, 1, '2020-08-04', '2020-08-04 15:43:14', '2020-08-04 15:43:14');

-- ----------------------------
-- Table structure for password_reset
-- ----------------------------
DROP TABLE IF EXISTS `password_reset`;
CREATE TABLE `password_reset`  (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_reset_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for payment_method
-- ----------------------------
DROP TABLE IF EXISTS `payment_method`;
CREATE TABLE `payment_method`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `payment_method_name_unique`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of payment_method
-- ----------------------------
INSERT INTO `payment_method` VALUES (1, 'Thanh toán online qua ví MoMo', 'http://cms.local/media/avatar/8fd94163-b087-42df-9ee7-4b0af28ac206.png', '2019-10-31 22:34:19', '2019-10-31 22:34:50');
INSERT INTO `payment_method` VALUES (2, 'Thanh toán online qua ứng dụng ZaloPay', 'http://cms.local/media/avatar/a9d78af2-227f-4fdf-94bf-56ed722f555c.png', '2019-10-31 22:34:41', '2019-10-31 22:34:41');
INSERT INTO `payment_method` VALUES (3, 'Thanh toán khi nhận hàng (COD)', 'http://cms.local/media/avatar/noimage.png', '2019-10-31 22:34:56', '2019-10-31 22:34:56');
INSERT INTO `payment_method` VALUES (4, 'Thanh toán online qua cổng Napas bằng thẻ ATM nội địa', 'http://cms.local/media/avatar/59600c7f-eaa6-4444-aef2-da97587e5f8c.png', '2019-10-31 22:35:12', '2019-10-31 22:35:12');

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `p_slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `product_code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `price` decimal(15, 2) UNSIGNED NOT NULL DEFAULT 0.00,
  `description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `detail` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0: Đang chờ, 1: Đã duyệt, 2: Hàng hỏng hóc, 3: Hàng trả về, hàng khách hàng không nhận',
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `trending_id` bigint(20) UNSIGNED NULL DEFAULT NULL,
  `quantity` int(11) NULL DEFAULT 10,
  `purchase` int(11) NOT NULL DEFAULT 0,
  `avatar` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `highlight` tinyint(1) NULL DEFAULT NULL,
  `day_created` date NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `product_product_code_unique`(`product_code`) USING BTREE,
  INDEX `product_brand_id_foreign`(`brand_id`) USING BTREE,
  INDEX `product_trending_id_foreign`(`trending_id`) USING BTREE,
  CONSTRAINT `product_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `product_trending_id_foreign` FOREIGN KEY (`trending_id`) REFERENCES `trending` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 53 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES (25, 'ÁO SƠ MI NAM SMNTK013', 'ao-so-mi-nam-smntk013', 'SMNTK013', 200000.00, 'ÁO SƠ MI NAM HỌA TIẾT', '– Chất liệu: Vải cao cấp\r\n                                                    – Màu: Trắng, hông, xanh da trời\r\n                                                    – Size: M – L – XL – XXL\r\n                                                    – Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống và Shopee.', 1, 3, 3, 10, 0, 'http://cms.local/media/avatar/d0aee789-f2a7-4670-a75e-a732829fb2b4.jpg', 1, '2020-07-28', '2020-08-03 22:11:55', '2020-08-03 22:30:46');
INSERT INTO `product` VALUES (26, 'ÁO SƠ MI NAM SMD3333', 'ao-so-mi-nam-smd3333', 'SMD3333', 240000.00, 'ÁO SƠ MI NAM THIẾT KẾ 2020', '– Chất liệu: Vải cao cấp\r\n                                                    – Màu: Trắng, hông, xanh da trời\r\n                                                    – Size: M – L – XL – XXL\r\n                                                    – Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống và Shopee.', 1, 1, 1, 10, 0, 'http://cms.local/media/avatar/6ad5e455-ebfb-420e-8dc6-fd89047fe04d.jpg', 1, '2020-07-28', '2020-08-03 22:14:26', '2020-08-03 22:31:12');
INSERT INTO `product` VALUES (27, 'ÁO SƠ MI NAM SMDTK127', 'ao-so-mi-nam-smdtk127', 'SMDTK127', 280000.00, 'ÁO SƠ MI NAM THIẾT KẾ 2020', '– Chất liệu: Vải cao cấp\r\n                                                    – Màu: Trắng, hông, xanh da trời\r\n                                                    – Size: M – L – XL – XXL\r\n                                                    – Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống và Shopee.', 1, 1, 6, 10, 0, 'http://cms.local/media/avatar/e1224d83-0988-451b-a2db-00d4e0e3f3cb.jpg', 1, '2020-07-28', '2020-08-03 22:17:49', '2020-08-03 22:30:33');
INSERT INTO `product` VALUES (28, 'ÁO PHÔNG NAM APHTK642', 'ao-phong-nam-aphtk642', 'APHTK642', 150000.00, 'ÁO PHÔNG NAM THIẾT KẾ TRẺ TRUNG', '– Chất liệu: Vải cao cấp\r\n                                                    – Màu: Trắng, hông, xanh da trời\r\n                                                    – Size: M – L – XL – XXL\r\n                                                    – Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống và Shopee.', 1, 4, 4, 10, 0, 'http://cms.local/media/avatar/f7d481c9-e2e0-42d2-b5a3-7a4eb2159aef.jpg', 1, '2020-07-29', '2020-08-03 22:21:35', '2020-08-03 22:30:05');
INSERT INTO `product` VALUES (29, 'ÁO PHÔNG NAM APHTK641', 'ao-phong-nam-aphtk641', 'APHTK641', 130000.00, 'ÁO PHÔNG NAM THIẾT KẾ 2020', '– Chất liệu: Vải cao cấp\r\n                                                    – Màu: Trắng, hông, xanh da trời\r\n                                                    – Size: M – L – XL – XXL\r\n                                                    – Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống và Shopee.', 1, 1, 1, 10, 0, 'http://cms.local/media/avatar/b1f99766-87df-477b-a508-e9e0c6ff76d6.jpg', 1, '2020-07-29', '2020-08-03 22:24:37', '2020-08-03 22:30:25');
INSERT INTO `product` VALUES (30, 'ÁO HOODIE ĐÔI HDSX01-3', 'ao-hoodie-doi-hdsx01-3', 'HDSX01-3', 200000.00, 'ÁO HOODIE ĐÔI CÁ TÍNH', '– Chất liệu: Vải cao cấp\r\n                                                    – Màu: Trắng, hông, xanh da trời\r\n                                                    – Size: M – L – XL – XXL\r\n                                                    – Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống và Shopee.', 1, 3, 3, 10, 0, 'http://cms.local/media/avatar/a3cd6b6e-152e-4a4b-984a-0a009cb9c5d8.jpg', NULL, '2020-07-29', '2020-08-03 22:33:32', '2020-08-03 22:33:32');
INSERT INTO `product` VALUES (31, 'ÁO SƠ MI NAM SMD9966', 'ao-so-mi-nam-smd9966', 'SMD9966', 220000.00, 'ÁO SƠ MI NAM', '– Chất liệu: Vải cao cấp\r\n                                                    – Màu: Trắng, hông, xanh da trời\r\n                                                    – Size: M – L – XL – XXL\r\n                                                    – Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống và Shopee.', 1, 2, 1, 10, 0, 'http://cms.local/media/avatar/51fade5f-ac48-455b-9281-6e4a78e21f58.jpg', 1, '2020-07-30', '2020-08-03 22:36:47', '2020-08-03 22:36:47');
INSERT INTO `product` VALUES (32, 'ÁO LEN AL8133', 'ao-len-al8133', 'AL8133', 280000.00, 'ÁO LEN THỜI TRANG 2020', '– Chất liệu: Vải cao cấp\r\n                                                    – Màu: Trắng, hông, xanh da trời\r\n                                                    – Size: M – L – XL – XXL\r\n                                                    – Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống và Shopee.', 1, 4, 7, 10, 0, 'http://cms.local/media/avatar/b47f2a47-f0d5-498e-8758-4be9a875ab7a.jpg', 1, '2020-07-30', '2020-08-03 22:39:05', '2020-08-03 22:39:05');
INSERT INTO `product` VALUES (33, 'ÁO SƠ MI SMNTK114', 'ao-so-mi-smntk114', 'SMNTK114', 250000.00, 'ÁO SƠ MI THIẾT KẾ TRẺ TRUNG', '– Chất liệu: Vải cao cấp\r\n                                                    – Màu: Trắng, hông, xanh da trời\r\n                                                    – Size: M – L – XL – XXL\r\n                                                    – Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống và Shopee.', 1, 1, 2, 10, 0, 'http://cms.local/media/avatar/be503201-4939-4eba-9664-0efb17b54059.jpg', 1, '2020-07-30', '2020-08-03 22:42:48', '2020-08-03 22:42:48');
INSERT INTO `product` VALUES (34, 'ÁO SƠ MI SMDTK110', 'ao-so-mi-smdtk110', 'SMDTK110', 200000.00, 'ÁO SƠ MI HỌA TIẾT', '– Chất liệu: Vải cao cấp\r\n                                                    – Màu: Trắng, hông, xanh da trời\r\n                                                    – Size: M – L – XL – XXL\r\n                                                    – Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống và Shopee.', 1, 1, 4, 10, 0, 'http://cms.local/media/avatar/28df1e15-5d74-458c-bdd3-09a6aae403cb.jpg', NULL, '2020-07-31', '2020-08-03 22:46:46', '2020-08-03 22:46:46');
INSERT INTO `product` VALUES (35, 'ÁO KHOÁC NAM AKGQC210', 'ao-khoac-nam-akgqc210', 'AKGQC210', 460000.00, 'ÁO KHOÁC NAM 2020', '– Chất liệu: Vải cao cấp\r\n                                                    – Màu: Trắng, hông, xanh da trời\r\n                                                    – Size: M – L – XL – XXL\r\n                                                    – Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống và Shopee.', 1, 1, 3, 10, 0, 'http://cms.local/media/avatar/ef79f20b-b7e9-42a1-a819-f485d7f25723.jpg', 1, '2020-07-31', '2020-08-03 22:49:45', '2020-08-03 22:49:45');
INSERT INTO `product` VALUES (36, 'ÁO PHÔNG POLO NAM APLCN004', 'ao-phong-polo-nam-aplcn004', 'APLCN004', 200000.00, 'ÁO PHÔNG POLO NAM 2020', '– Chất liệu: Vải cao cấp\r\n                                                    – Màu: Trắng, hông, xanh da trời\r\n                                                    – Size: M – L – XL – XXL\r\n                                                    – Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống và Shopee.', 1, 1, 5, 10, 0, 'http://cms.local/media/avatar/4a6f0153-b52e-45d8-854f-5eeb69c7c622.jpg', 1, '2020-07-31', '2020-08-03 22:52:19', '2020-08-03 22:52:19');
INSERT INTO `product` VALUES (37, 'ÁO PHÔNG POLO NAM APLCN001', 'ao-phong-polo-nam-aplcn001', 'APLCN001', 150000.00, 'ÁO PHÔNG POLO NAM 2020', '– Chất liệu: Vải cao cấp\r\n                                                    – Màu: Trắng, hông, xanh da trời\r\n                                                    – Size: M – L – XL – XXL\r\n                                                    – Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống và Shopee.', 1, 2, 2, 10, 0, 'http://cms.local/media/avatar/23c6f046-67f5-4dad-80ff-381662eed704.jpg', NULL, '2020-07-31', '2020-08-03 22:55:02', '2020-08-03 22:55:02');
INSERT INTO `product` VALUES (38, 'ÁO KHOÁC NAM AKGQC209', 'ao-khoac-nam-akgqc209', 'AKGQC209', 550000.00, 'ÁO KHOÁC NAM  2020', '– Chất liệu: Vải cao cấp\r\n                                                    – Màu: Trắng, hông, xanh da trời\r\n                                                    – Size: M – L – XL – XXL\r\n                                                    – Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống và Shopee.', 1, 1, 4, 10, 0, 'http://cms.local/media/avatar/ca9725e2-84c8-4349-95d1-2699dfda90ba.jpg', 1, '2020-08-01', '2020-08-03 22:57:46', '2020-08-03 22:57:46');
INSERT INTO `product` VALUES (39, 'QUẦN JEANS NAM QJDCN007', 'quan-jeans-nam-qjdcn007', 'QJDCN007', 300000.00, 'QUẦN JEANS NAM 2020', '– Chất liệu: Vải cao cấp\r\n                                                    – Màu: Trắng, hông, xanh da trời\r\n                                                    – Size: M – L – XL – XXL\r\n                                                    – Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống và Shopee.', 1, 1, 5, 10, 0, 'http://cms.local/media/avatar/7af4d20a-1c83-4f3b-809e-59be2c3d43bd.jpg', 1, '2020-08-01', '2020-08-03 23:03:42', '2020-08-03 23:03:42');
INSERT INTO `product` VALUES (40, 'QUẦN JEANS NAM QJDCN006', 'quan-jeans-nam-qjdcn006', 'QJDCN006', 240000.00, 'QUẦN JEANS NAM 2020', '– Chất liệu: Vải cao cấp\r\n                                                    – Màu: Trắng, hông, xanh da trời\r\n                                                    – Size: M – L – XL – XXL\r\n                                                    – Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống và Shopee.', 1, 1, 3, 10, 0, 'http://cms.local/media/avatar/50413a1c-2913-4fed-a8e4-bce79a7d70f2.jpg', 1, '2020-08-01', '2020-08-03 23:06:05', '2020-08-03 23:06:05');
INSERT INTO `product` VALUES (41, 'QUẦN ÂU NAM QAUTK011', 'quan-au-nam-qautk011', 'QAUTK011', 250000.00, 'QUẦN ÂU NAM', '– Chất liệu: Vải cao cấp\r\n                                                    – Màu: Trắng, hông, xanh da trời\r\n                                                    – Size: M – L – XL – XXL\r\n                                                    – Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống và Shopee.', 1, 2, 1, 10, 0, 'http://cms.local/media/avatar/1811376c-42bd-439d-bb9f-2d1e80d67add.jpg', 1, '2020-08-01', '2020-08-03 23:11:07', '2020-08-03 23:11:07');
INSERT INTO `product` VALUES (42, 'GIÀY NAM GIA905', 'giay-nam-gia905', 'GIA905', 280000.00, 'GIÀY NAM TRẮNG 2020', '– Chất liệu: Vải cao cấp\r\n                                                    – Màu: Trắng, hông, xanh da trời\r\n                                                    – Size: M – L – XL – XXL\r\n                                                    – Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống và Shopee.', 1, 1, 4, 10, 0, 'http://cms.local/media/avatar/17286fdd-e03e-4e4a-b377-84cfd6d18e12.jpg', NULL, '2020-08-02', '2020-08-03 23:13:07', '2020-08-03 23:13:07');
INSERT INTO `product` VALUES (43, 'KÍNH MẮT THỜI TRANG KIN0065-1', 'kinh-mat-thoi-trang-kin0065-1', 'KIN0065-1', 160000.00, 'KÍNH MẮT THỜI TRANG 2020', '– Chất liệu: Vải cao cấp\r\n                                                    – Màu: Trắng, hông, xanh da trời\r\n                                                    – Size: M – L – XL – XXL\r\n                                                    – Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống và Shopee.', 1, 1, 6, 10, 0, 'http://cms.local/media/avatar/5a1ba033-f892-4e71-abc9-21df1a7311f3.jpg', NULL, '2020-08-02', '2020-08-03 23:15:37', '2020-08-03 23:15:37');
INSERT INTO `product` VALUES (44, 'ÁO PHÔNG NAM APH340', 'ao-phong-nam-aph340', 'APH340', 200000.00, 'ÁO PHÔNG NAM 2020', '– Chất liệu: Vải cao cấp\r\n                                                    – Màu: Trắng, hông, xanh da trời\r\n                                                    – Size: M – L – XL – XXL\r\n                                                    – Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống và Shopee.', 1, 2, 5, 10, 0, 'http://cms.local/media/avatar/cb8ca254-3ebe-4a86-b115-7690c01b7266.jpg', 1, '2020-08-02', '2020-08-03 23:18:52', '2020-08-03 23:18:52');
INSERT INTO `product` VALUES (45, 'ÁO PHÔNG NAM APH20108#', 'ao-phong-nam-aph20108', 'APH20108#', 220000.00, 'ÁO PHÔNG NAM 2020', '– Chất liệu: Vải cao cấp\r\n                                                    – Màu: Trắng, hông, xanh da trời\r\n                                                    – Size: M – L – XL – XXL\r\n                                                    – Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống và Shopee.', 1, 1, 1, 10, 0, 'http://cms.local/media/avatar/e26d6573-3c3f-44c1-a77a-0e6baf03d2c4.jpg', NULL, '2020-08-02', '2020-08-03 23:22:02', '2020-08-03 23:22:02');
INSERT INTO `product` VALUES (46, 'KIN0060-1', 'kin0060-1', 'KIN0060-1', 150000.00, 'KÍNH MẮT THỜI TRANG 2020', '– Chất liệu: Vải cao cấp\r\n                                                    – Màu: Trắng, hông, xanh da trời\r\n                                                    – Size: M – L – XL – XXL\r\n                                                    – Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống và Shopee.', 1, 1, 1, 10, 0, 'http://cms.local/media/avatar/96535953-e0d7-42fc-b71b-a47b1bd726b1.jpg', NULL, '2020-08-02', '2020-08-03 23:24:20', '2020-08-03 23:24:20');
INSERT INTO `product` VALUES (47, 'ÁO KHOÁC AKY108', 'ao-khoac-aky108', 'AKY108', 600000.00, 'ÁO KHOÁC 2020 SALE', '– Chất liệu: Vải cao cấp\r\n                                                    – Màu: Trắng, hông, xanh da trời\r\n                                                    – Size: M – L – XL – XXL\r\n                                                    – Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống và Shopee.', 1, 1, 5, 10, 0, 'http://cms.local/media/avatar/e4f3ff33-bf25-443b-afb1-30fecc1edf6a.jpg', NULL, '2020-08-03', '2020-08-03 23:27:08', '2020-08-03 23:27:08');
INSERT INTO `product` VALUES (48, 'ÁO SƠ MI NAM SMNTK016', 'ao-so-mi-nam-smntk016', 'SMNTK016', 150000.00, 'ÁO SƠ MI NAM HỌA TIẾT', '– Chất liệu: Vải cao cấp\r\n                                                    – Màu: Trắng, hông, xanh da trời\r\n                                                    – Size: M – L – XL – XXL\r\n                                                    – Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống và Shopee.', 1, 1, 2, 10, 0, 'http://cms.local/media/avatar/2df7d3ee-3929-4904-9678-44bf52e0c12a.jpg', NULL, '2020-08-03', '2020-08-03 23:29:48', '2020-08-03 23:29:48');
INSERT INTO `product` VALUES (49, 'ÁO SƠ MI NAM SMDCN001', 'ao-so-mi-nam-smdcn001', 'SMDCN001', 200000.00, 'ÁO SƠ MI NAM SALE 2020', '– Chất liệu: Vải cao cấp\r\n                                                    – Màu: Trắng, hông, xanh da trời\r\n                                                    – Size: M – L – XL – XXL\r\n                                                    – Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống và Shopee.', 1, 1, 6, 10, 0, 'http://cms.local/media/avatar/a7ea2545-d0a2-4acb-ba04-9be1bce0bb7a.jpg', NULL, '2020-08-03', '2020-08-03 23:31:28', '2020-08-03 23:31:28');
INSERT INTO `product` VALUES (50, 'ÁO SƠ MI NAM SMNTK012', 'ao-so-mi-nam-smntk012', 'SMNTK012', 160000.00, 'ÁO SƠ MI NAM HỌA TIẾT SALE', '– Chất liệu: Vải cao cấp\r\n                                                    – Màu: Trắng, hông, xanh da trời\r\n                                                    – Size: M – L – XL – XXL\r\n                                                    – Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống và Shopee.', 1, 1, 1, 10, 0, 'http://cms.local/media/avatar/775b083e-3525-4667-98f6-21accc845626.jpg', NULL, '2020-08-04', '2020-08-03 23:34:58', '2020-08-03 23:34:58');
INSERT INTO `product` VALUES (51, 'ÁO PHÔNG NAM APHTK022', 'ao-phong-nam-aphtk022', 'APHTK022', 200000.00, 'ÁO PHÔNG NAM 2020', '– Chất liệu: Vải cao cấp\r\n                                                    – Màu: Trắng, hông, xanh da trời\r\n                                                    – Size: M – L – XL – XXL\r\n                                                    – Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống và Shopee.', 1, 1, 2, 10, 0, 'http://cms.local/media/avatar/992465e4-36e8-45b3-91b6-33e64f54648c.jpg', NULL, '2020-08-04', '2020-08-03 23:36:58', '2020-08-03 23:36:58');
INSERT INTO `product` VALUES (52, 'ÁO PHÔNG NAM 2020', 'ao-phong-nam-2020', 'AP1813aca', 240000.00, 'ÁO PHÔNG NAM 2020', '– Chất liệu: Vải cao cấp\r\n                                                    – Màu: Trắng, hông, xanh da trời\r\n                                                    – Size: M – L – XL – XXL\r\n                                                    – Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống và Shopee.', 1, 1, 2, 10, 0, 'http://cms.local/media/avatar/133a095f-0e31-4afd-a85e-1162e5301fec.jpg', NULL, '2020-08-04', '2020-08-04 15:47:15', '2020-08-04 15:48:32');

-- ----------------------------
-- Table structure for product_back
-- ----------------------------
DROP TABLE IF EXISTS `product_back`;
CREATE TABLE `product_back`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `variant_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` tinyint(4) NOT NULL,
  `status` bigint(20) UNSIGNED NOT NULL,
  `quantity` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `product_back_product_id_foreign`(`variant_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of product_back
-- ----------------------------
INSERT INTO `product_back` VALUES (5, 16, 2, 4, 2, 1, '2020-07-31 23:17:08', '2020-07-31 23:24:56');
INSERT INTO `product_back` VALUES (6, 16, 7, 4, 2, 1, '2020-07-31 23:27:17', '2020-08-02 12:13:21');
INSERT INTO `product_back` VALUES (16, 21, 6, 4, 1, 1, '2020-07-31 23:37:10', '2020-08-02 12:13:38');
INSERT INTO `product_back` VALUES (17, 239, 42, 41, 0, 1, '2020-08-04 01:08:08', '2020-08-04 01:08:08');
INSERT INTO `product_back` VALUES (18, 234, 42, 39, 2, 1, '2020-08-04 01:08:18', '2020-08-04 15:50:01');

-- ----------------------------
-- Table structure for reply
-- ----------------------------
DROP TABLE IF EXISTS `reply`;
CREATE TABLE `reply`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `block` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `guest_id` bigint(20) UNSIGNED NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NULL DEFAULT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `reply_comment_id_foreign`(`comment_id`) USING BTREE,
  INDEX `reply_user_id_foreign`(`user_id`) USING BTREE,
  INDEX `reply_guest_id_foreign`(`guest_id`) USING BTREE,
  CONSTRAINT `reply_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `review` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `reply_guest_id_foreign` FOREIGN KEY (`guest_id`) REFERENCES `guest` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `reply_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for review
-- ----------------------------
DROP TABLE IF EXISTS `review`;
CREATE TABLE `review`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NULL DEFAULT NULL,
  `guest_id` bigint(20) UNSIGNED NULL DEFAULT NULL,
  `block` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `review_product_id_foreign`(`product_id`) USING BTREE,
  INDEX `review_user_id_foreign`(`user_id`) USING BTREE,
  INDEX `review_guest_id_foreign`(`guest_id`) USING BTREE,
  CONSTRAINT `review_guest_id_foreign` FOREIGN KEY (`guest_id`) REFERENCES `guest` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `review_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `review_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of review
-- ----------------------------
INSERT INTO `review` VALUES (11, 45, 1, NULL, 0, 'Sản phẩm tuyệt vời', '2020-08-04 00:58:23', '2020-08-04 00:58:23');
INSERT INTO `review` VALUES (12, 49, 1, NULL, 0, 'Sản phẩm rất tốt', '2020-08-04 15:41:54', '2020-08-04 15:41:54');

-- ----------------------------
-- Table structure for sale
-- ----------------------------
DROP TABLE IF EXISTS `sale`;
CREATE TABLE `sale`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `percent_sale` bigint(20) NOT NULL,
  `code_sale` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0: Chưa duyệt, 1: Đã duyệt',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `sale_code_sale_unique`(`code_sale`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of sale
-- ----------------------------
INSERT INTO `sale` VALUES (2, 'Giảm giá dịp khai trương', 30, '221asdzxfqs', '2020-07-30 00:15:57', '2020-08-01 22:06:42', 1);
INSERT INTO `sale` VALUES (4, 'Giảm giá sinh nhật', 50, 'ah3s46', '2020-07-30 00:33:15', '2020-08-04 02:21:55', 1);
INSERT INTO `sale` VALUES (5, 'Khuyến mại giảm giá 60%', 60, 'avvq3', '2020-08-02 12:19:27', '2020-08-02 12:19:27', 0);

-- ----------------------------
-- Table structure for ship_method
-- ----------------------------
DROP TABLE IF EXISTS `ship_method`;
CREATE TABLE `ship_method`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(15, 2) UNSIGNED NOT NULL DEFAULT 0.00,
  `logo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `ship_method_name_unique`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ship_method
-- ----------------------------
INSERT INTO `ship_method` VALUES (1, 'Giao hàng tiết kiệm', 15000.00, 'http://cms.local/media/avatar/9cdb45fd-656d-4f55-9e33-86ebfd869b8f.png', '2019-10-31 22:35:28', '2019-10-31 22:35:28');
INSERT INTO `ship_method` VALUES (2, 'Giao hàng nhanh', 20000.00, 'http://cms.local/media/avatar/f5bd9b3a-1931-4762-87e5-2769a85a97fe.png', '2019-10-31 22:35:41', '2019-10-31 22:35:41');
INSERT INTO `ship_method` VALUES (3, 'J&T Express', 30000.00, 'http://cms.local/media/avatar/7ff79565-f9d1-438c-a82b-fa64a60e6987.png', '2019-10-31 22:35:55', '2019-10-31 22:35:55');

-- ----------------------------
-- Table structure for slider
-- ----------------------------
DROP TABLE IF EXISTS `slider`;
CREATE TABLE `slider`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of slider
-- ----------------------------
INSERT INTO `slider` VALUES (1, 'Sale sập sàn 99k', 'http://cms.local/media/slider/942364de-42bc-4d7d-aae7-aac53ee67fb5.jpg', 0, '2019-10-31 22:30:03', '2020-07-31 23:49:53');
INSERT INTO `slider` VALUES (2, 'Sunny Beach', 'http://cms.local/media/slider/cbb68ae4-c9b5-4319-a68b-443d032e0d37.jpg', 0, '2019-10-31 22:30:29', '2020-07-31 23:50:54');
INSERT INTO `slider` VALUES (3, 'Những Năm tháng ấy', 'http://cms.local/media/slider/1df00795-a6a1-41b9-94c7-1f05a215cce0.jpg', 1, '2019-10-31 22:30:48', '2019-10-31 22:30:48');
INSERT INTO `slider` VALUES (4, 'Sweet Date', 'http://cms.local/media/slider/b92a1a8c-dd3a-4032-bccc-57a56f30fe19.jpg', 1, '2019-10-31 22:31:09', '2019-10-31 22:31:09');
INSERT INTO `slider` VALUES (5, 'dailiy Dating', 'http://cms.local/media/slider/5bd34b3a-68dc-49ca-aab0-608a692e2f09.jpg', 1, '2019-10-31 22:31:25', '2019-10-31 22:31:25');
INSERT INTO `slider` VALUES (6, 'Time to have fun', 'http://cms.local/media/slider/252a111b-ef09-432d-b07b-a0a12f5f041c.jpg', 1, '2019-10-31 22:31:40', '2019-10-31 22:31:40');
INSERT INTO `slider` VALUES (7, 'Merry Christmas White', 'http://cms.local/media/slider/4a710246-8414-4ae9-9e35-ecd3002d51ac.jpg', 1, '2019-10-31 22:32:05', '2019-10-31 22:32:05');
INSERT INTO `slider` VALUES (8, 'dating on weekend', 'http://cms.local/media/slider/580913ee-0934-4f42-8053-92eaf4d9ed55.jpg', 1, '2019-10-31 22:32:25', '2019-10-31 22:32:25');
INSERT INTO `slider` VALUES (9, 'dailiy Dating', 'http://cms.local/media/slider/2e6df952-4aba-4aad-a131-3baedeb314d5.jpg', 1, '2019-10-31 22:32:44', '2019-10-31 22:32:44');
INSERT INTO `slider` VALUES (10, 'Western Look', 'http://cms.local/media/slider/8a72726e-621a-4a3c-8a8f-c9908c5805de.jpg', 1, '2019-10-31 22:33:40', '2020-07-31 23:51:00');
INSERT INTO `slider` VALUES (11, 'Outfit of today', 'http://cms.local/media/slider/02c55fc8-cdec-4af0-948d-d0efd37656fc.jpg', 0, '2019-10-31 22:34:01', '2019-10-31 22:34:01');

-- ----------------------------
-- Table structure for subcribe
-- ----------------------------
DROP TABLE IF EXISTS `subcribe`;
CREATE TABLE `subcribe`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `subcribe_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of subcribe
-- ----------------------------
INSERT INTO `subcribe` VALUES (1, 'duchieu97.hn@gmail.com', '2019-12-10 23:49:49', '2019-12-10 23:49:49');
INSERT INTO `subcribe` VALUES (2, 'boychel1997@gmail.com', '2019-12-10 23:49:55', '2019-12-10 23:49:55');
INSERT INTO `subcribe` VALUES (3, 'vietpro.edu.vn@gmail.com', '2019-12-10 23:50:01', '2019-12-10 23:50:01');
INSERT INTO `subcribe` VALUES (4, 'spiderman@gmail.com', '2020-08-03 23:01:36', '2020-08-03 23:01:36');

-- ----------------------------
-- Table structure for table_email_template
-- ----------------------------
DROP TABLE IF EXISTS `table_email_template`;
CREATE TABLE `table_email_template`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `template` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of table_email_template
-- ----------------------------
INSERT INTO `table_email_template` VALUES (2, 'Giao hàng thành công', 'order_success', 'ĐÃ GIAO THÀNH CÔNG', '<p>XIN CH&Agrave;O [NAME]</p>\r\n\r\n<p>Đơn h&agrave;ng [ORDER_CODE] đ&atilde; được giao th&agrave;nh c&ocirc;ng v&agrave;o ng&agrave;y [DATE] - thời gian: [TIME]</p>\r\n\r\n<p>Th&ocirc;ng tin đơn h&agrave;ng:</p>\r\n\r\n<p>T&ecirc;n sản phẩm: [PRODUCT_NAME]</p>\r\n\r\n<p>M&agrave;u sắc: [COLOR]</p>\r\n\r\n<p>K&iacute;ch cỡ: [SIZE]</p>\r\n\r\n<p>Tổng tiền: [TOTAL_MONEY]</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ch&uacute;c bạn lu&ocirc;n c&oacute; những trải nghiệm tuyệt vời khi mua sắm tại 360.</p>\r\n\r\n<p>Tr&acirc;n trọng,<br />\r\nĐội ngũ 360</p>\r\n\r\n<p>Bạn c&oacute; thắc mắc? Vui l&ograve;ng li&ecirc;n hệ ch&uacute;ng t&ocirc;i <a href=\"http://cms.local/lien-he\">tại đ&acirc;y.</a></p>', '2020-08-03 03:36:27', '2020-08-03 03:42:27');
INSERT INTO `table_email_template` VALUES (3, 'Hủy đơn hàng', 'order_fail', 'ĐÃ HỦY THÀNH CÔNG', '<p>XIN CH&Agrave;O [NAME]</p>\r\n\r\n<p>Đơn h&agrave;ng [ORDER_CODE] đ&atilde; được hủy&nbsp;v&agrave;o ng&agrave;y [DATE] - thời gian: [TIME]</p>\r\n\r\n<p>Th&ocirc;ng tin đơn h&agrave;ng:</p>\r\n\r\n<p>T&ecirc;n sản phẩm: [PRODUCT_NAME]</p>\r\n\r\n<p>M&agrave;u sắc: [COLOR]</p>\r\n\r\n<p>K&iacute;ch cỡ: [SIZE]</p>\r\n\r\n<p>Tổng tiền: [TOTAL_MONEY]</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tr&acirc;n trọng,<br />\r\nĐội ngũ 360</p>\r\n\r\n<p>Bạn c&oacute; thắc mắc? Vui l&ograve;ng li&ecirc;n hệ ch&uacute;ng t&ocirc;i <a href=\"http://cms.local/lien-he\">tại đ&acirc;y.</a></p>', '2020-08-03 04:08:19', '2020-08-03 04:11:31');
INSERT INTO `table_email_template` VALUES (4, 'Đặt hàng thành công', 'store_order', '360 BOUTIQUE - ĐẶT HÀNG THÀNH CÔNG', '<p>XIN CH&Agrave;O [NAME]</p>\r\n\r\n<p>Bạn đ&atilde; đặt h&agrave;ng th&agrave;nh c&ocirc;ng website của cửa h&agrave;ng 360 v&agrave;o l&uacute;c&nbsp;ng&agrave;y [DATE] - thời gian: [TIME]</p>\r\n\r\n<p>Th&ocirc;ng tin đơn h&agrave;ng:</p>\r\n\r\n<p>[PRODUCT]</p>\r\n\r\n<p>Tổng tiền: [TOTAL_MONEY]</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ch&uacute;c bạn lu&ocirc;n c&oacute; những trải nghiệm tuyệt vời khi mua sắm tại 360.</p>\r\n\r\n<p>Tr&acirc;n trọng,<br />\r\nĐội ngũ 360</p>\r\n\r\n<p>Bạn c&oacute; thắc mắc? Vui l&ograve;ng li&ecirc;n hệ ch&uacute;ng t&ocirc;i <a href=\"http://cms.local/lien-he\">tại đ&acirc;y.</a></p>', '2020-08-04 00:08:33', '2020-08-04 00:08:33');

-- ----------------------------
-- Table structure for trending
-- ----------------------------
DROP TABLE IF EXISTS `trending`;
CREATE TABLE `trending`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NULL DEFAULT 0,
  `navactive` tinyint(1) NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of trending
-- ----------------------------
INSERT INTO `trending` VALUES (1, 'Dating Autumn', 'dating-autumn', 'http://cms.local/media/avatar/noimage.png', 0, 0, '2019-10-30 16:03:54', '2020-08-01 00:30:07');
INSERT INTO `trending` VALUES (2, 'Sale sập sàn 99k', 'sale-sap-san-99k', 'http://cms.local/media/avatar/0868d10a-91ac-4110-ad44-4ab522dfa04f.jpg', 0, 0, '2019-10-31 22:46:15', '2020-08-01 00:21:58');
INSERT INTO `trending` VALUES (3, 'Granding Opening Sale 50%', 'granding-opening-sale-50', 'http://cms.local/media/avatar/56d15fc0-c7a3-45d3-a8ac-1df345086546.jpg', 1, 0, '2019-11-02 00:02:33', '2019-11-02 00:02:33');
INSERT INTO `trending` VALUES (4, 'Simple Trendy', 'simple-trendy', 'http://cms.local/media/avatar/9d3c9857-2246-478b-986e-bb58096cf4da.jpg', 1, 0, '2019-11-02 00:36:52', '2019-11-02 00:36:52');
INSERT INTO `trending` VALUES (5, 'WindBreaker', 'windbreaker', 'http://cms.local/media/avatar/32dd9f39-9da9-451b-94f5-d73ebcbee6bb.jpg', 1, 0, '2019-11-02 00:37:26', '2019-11-02 00:37:26');
INSERT INTO `trending` VALUES (6, 'Chill With Me', 'chill-with-me', 'http://cms.local/media/avatar/1df3af10-75ba-42b9-ae75-b9ac895e8400.jpg', 1, 0, '2019-11-02 00:40:28', '2019-12-10 23:43:12');
INSERT INTO `trending` VALUES (7, 'Merry Christmas White', 'merry-christmas-white', 'http://cms.local/media/avatar/d1a36dc8-f3fb-4998-b41d-ee6b2332b13e.jpg', 1, 0, '2019-12-10 23:42:41', '2019-12-10 23:42:41');
INSERT INTO `trending` VALUES (8, 'Happy New Year', 'happy-new-year', 'http://cms.local/media/avatar/5118726a-7418-45bf-9ce3-b24f6e5a674b.jpg', 1, 0, '2019-12-10 23:44:50', '2019-12-10 23:44:50');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `last_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `user_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `company` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `city` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `country` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `about_me` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `avatar` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `review` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `level` tinyint(1) NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_user_name_unique`(`user_name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Hiếu', 'Nguyễn Đức', 'hieund97', 'hieund97', 'ILOVEU3000', '1521050307@student.humg.edu.vn', 'Ha Noi', NULL, NULL, 'Bạn không thể kết nối các điểm trong đời bạn khi nhìn về phía trước; bạn chỉ có thể kết nối chúng khi nhìn lại phía sau. Vì vậy, bạn phải tin tưởng rằng các điểm đó rồi sẽ kết nối trong tương lai. Bạn phải tin vào cái gì đó – lòng can đảm, vận mệnh, cuộc đời, nghiệp chướng, bất cứ điều gì. Cách tiếp cận này chưa bao giờ khiến tôi thất vọng, nó đã tạo nên tất cả sự khác biệt trong cuộc đời tôi.', 'http://cms.local/media/avatar/88a24ba4-5423-4185-b868-3274b1a3885a.jpg', NULL, NULL, '$2y$10$afOgdR5blkYKZp4Rk3d44uPnkAHmDOBPkZPP5BTb.etkQWZuAz4Sy', '0359717468', 1, 'SfOcoRsPIIKdRoXnMRoXgJm6fLqsjauQ8M3iltjub8BtEb21Wj4oLNYTNO8y', NULL, '2020-07-20 00:02:04');
INSERT INTO `users` VALUES (2, 'Phương Uyên', 'Tô Anh', NULL, NULL, NULL, 'toanhphuonguyen@gmail.com', 'Ha Noi', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$8hEwMvWme4NKqjQzM/zkEuU.6BGB5cL.Uzdl3AAl9oQJdtdnW0kgK', '0987654321', 1, NULL, NULL, NULL);
INSERT INTO `users` VALUES (3, 'Roger', 'Steve', NULL, NULL, NULL, 'captainamerica@gmail.com', 'Ha Noi', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$6z4lYnIpLNIaKRtcOdRjMuPvXE604YPnBEEfPRZQJsopwpNBhPUMC', '098765432', 2, NULL, NULL, NULL);
INSERT INTO `users` VALUES (4, 'Stark', 'Tony', 'stark', 'stark', NULL, 'hieubentau1911@gmail.com', 'Ha Noi', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$VJ97oIdLfScFeLeNltIEoeQ9Qel75cunFcZXFS1Pppsqk80rhFtFC', '098654329', 2, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for values
-- ----------------------------
DROP TABLE IF EXISTS `values`;
CREATE TABLE `values`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `value` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attr_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `values_attr_id_foreign`(`attr_id`) USING BTREE,
  CONSTRAINT `values_attr_id_foreign` FOREIGN KEY (`attr_id`) REFERENCES `attribute` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of values
-- ----------------------------
INSERT INTO `values` VALUES (1, 'S', 2, '2019-10-31 22:48:27', '2019-10-31 22:48:27');
INSERT INTO `values` VALUES (2, 'M', 2, '2019-10-31 22:48:32', '2019-10-31 22:48:32');
INSERT INTO `values` VALUES (3, 'L', 2, '2019-10-31 22:48:36', '2019-10-31 22:48:36');
INSERT INTO `values` VALUES (4, 'XL', 2, '2019-10-31 22:48:45', '2019-10-31 22:48:45');
INSERT INTO `values` VALUES (5, 'XXL', 2, '2019-10-31 22:48:50', '2019-10-31 22:48:50');
INSERT INTO `values` VALUES (6, 'Đỏ', 3, '2019-10-31 22:48:55', '2019-10-31 22:48:55');
INSERT INTO `values` VALUES (7, 'Trắng', 3, '2019-10-31 22:49:00', '2019-10-31 22:49:00');
INSERT INTO `values` VALUES (8, 'Đen', 3, '2019-10-31 22:49:06', '2019-10-31 22:49:06');
INSERT INTO `values` VALUES (9, 'Vàng', 3, '2019-10-31 22:49:11', '2019-10-31 22:49:11');
INSERT INTO `values` VALUES (10, 'Xanh da trời', 3, '2019-10-31 22:49:19', '2019-11-16 11:55:31');
INSERT INTO `values` VALUES (11, 'Xanh lá', 3, '2019-10-31 22:49:25', '2019-10-31 22:49:25');
INSERT INTO `values` VALUES (12, 'Cam', 3, '2019-10-31 22:49:35', '2019-10-31 22:49:35');
INSERT INTO `values` VALUES (13, 'Màu be', 3, '2019-10-31 22:49:40', '2019-10-31 22:49:40');
INSERT INTO `values` VALUES (14, 'Hồng', 3, '2019-10-31 22:49:46', '2019-10-31 22:49:46');
INSERT INTO `values` VALUES (15, '28', 2, '2019-10-31 22:49:59', '2019-10-31 22:49:59');
INSERT INTO `values` VALUES (16, '29', 2, '2019-10-31 22:50:02', '2019-10-31 22:50:02');
INSERT INTO `values` VALUES (17, '30', 2, '2019-10-31 22:50:06', '2019-10-31 22:50:06');
INSERT INTO `values` VALUES (18, '31', 2, '2019-10-31 22:50:12', '2019-10-31 22:50:12');
INSERT INTO `values` VALUES (19, '32', 2, '2019-10-31 22:50:15', '2019-10-31 22:50:15');
INSERT INTO `values` VALUES (20, '33', 2, '2019-10-31 22:50:18', '2019-10-31 22:50:18');
INSERT INTO `values` VALUES (21, '34', 2, '2019-10-31 22:50:23', '2019-10-31 22:50:23');
INSERT INTO `values` VALUES (22, '38', 2, '2019-10-31 22:50:32', '2019-10-31 22:50:32');
INSERT INTO `values` VALUES (23, '39', 2, '2019-10-31 22:50:37', '2019-10-31 22:50:37');
INSERT INTO `values` VALUES (24, '40', 2, '2019-10-31 22:50:42', '2019-10-31 22:50:42');
INSERT INTO `values` VALUES (25, '41', 2, '2019-10-31 22:50:46', '2019-10-31 22:50:46');
INSERT INTO `values` VALUES (26, '42', 2, '2019-10-31 22:50:50', '2019-10-31 22:50:50');
INSERT INTO `values` VALUES (27, '43', 2, '2019-10-31 22:50:53', '2019-10-31 22:50:53');

-- ----------------------------
-- Table structure for values_product
-- ----------------------------
DROP TABLE IF EXISTS `values_product`;
CREATE TABLE `values_product`  (
  `value_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `values_product_value_id_foreign`(`value_id`) USING BTREE,
  INDEX `values_product_product_id_foreign`(`product_id`) USING BTREE,
  CONSTRAINT `values_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `values_product_value_id_foreign` FOREIGN KEY (`value_id`) REFERENCES `values` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of values_product
-- ----------------------------
INSERT INTO `values_product` VALUES (3, 25, NULL, NULL);
INSERT INTO `values_product` VALUES (4, 25, NULL, NULL);
INSERT INTO `values_product` VALUES (7, 25, NULL, NULL);
INSERT INTO `values_product` VALUES (2, 26, NULL, NULL);
INSERT INTO `values_product` VALUES (3, 26, NULL, NULL);
INSERT INTO `values_product` VALUES (8, 26, NULL, NULL);
INSERT INTO `values_product` VALUES (9, 26, NULL, NULL);
INSERT INTO `values_product` VALUES (3, 27, NULL, NULL);
INSERT INTO `values_product` VALUES (4, 27, NULL, NULL);
INSERT INTO `values_product` VALUES (10, 27, NULL, NULL);
INSERT INTO `values_product` VALUES (13, 27, NULL, NULL);
INSERT INTO `values_product` VALUES (3, 28, NULL, NULL);
INSERT INTO `values_product` VALUES (4, 28, NULL, NULL);
INSERT INTO `values_product` VALUES (7, 28, NULL, NULL);
INSERT INTO `values_product` VALUES (8, 28, NULL, NULL);
INSERT INTO `values_product` VALUES (3, 29, NULL, NULL);
INSERT INTO `values_product` VALUES (4, 29, NULL, NULL);
INSERT INTO `values_product` VALUES (7, 29, NULL, NULL);
INSERT INTO `values_product` VALUES (13, 29, NULL, NULL);
INSERT INTO `values_product` VALUES (3, 30, NULL, NULL);
INSERT INTO `values_product` VALUES (4, 30, NULL, NULL);
INSERT INTO `values_product` VALUES (7, 30, NULL, NULL);
INSERT INTO `values_product` VALUES (8, 30, NULL, NULL);
INSERT INTO `values_product` VALUES (3, 31, NULL, NULL);
INSERT INTO `values_product` VALUES (4, 31, NULL, NULL);
INSERT INTO `values_product` VALUES (7, 31, NULL, NULL);
INSERT INTO `values_product` VALUES (9, 31, NULL, NULL);
INSERT INTO `values_product` VALUES (3, 32, NULL, NULL);
INSERT INTO `values_product` VALUES (4, 32, NULL, NULL);
INSERT INTO `values_product` VALUES (8, 32, NULL, NULL);
INSERT INTO `values_product` VALUES (9, 32, NULL, NULL);
INSERT INTO `values_product` VALUES (2, 33, NULL, NULL);
INSERT INTO `values_product` VALUES (3, 33, NULL, NULL);
INSERT INTO `values_product` VALUES (4, 33, NULL, NULL);
INSERT INTO `values_product` VALUES (7, 33, NULL, NULL);
INSERT INTO `values_product` VALUES (9, 33, NULL, NULL);
INSERT INTO `values_product` VALUES (2, 34, NULL, NULL);
INSERT INTO `values_product` VALUES (3, 34, NULL, NULL);
INSERT INTO `values_product` VALUES (7, 34, NULL, NULL);
INSERT INTO `values_product` VALUES (8, 34, NULL, NULL);
INSERT INTO `values_product` VALUES (3, 35, NULL, NULL);
INSERT INTO `values_product` VALUES (4, 35, NULL, NULL);
INSERT INTO `values_product` VALUES (8, 35, NULL, NULL);
INSERT INTO `values_product` VALUES (13, 35, NULL, NULL);
INSERT INTO `values_product` VALUES (3, 36, NULL, NULL);
INSERT INTO `values_product` VALUES (4, 36, NULL, NULL);
INSERT INTO `values_product` VALUES (13, 36, NULL, NULL);
INSERT INTO `values_product` VALUES (3, 37, NULL, NULL);
INSERT INTO `values_product` VALUES (4, 37, NULL, NULL);
INSERT INTO `values_product` VALUES (7, 37, NULL, NULL);
INSERT INTO `values_product` VALUES (3, 38, NULL, NULL);
INSERT INTO `values_product` VALUES (4, 38, NULL, NULL);
INSERT INTO `values_product` VALUES (7, 38, NULL, NULL);
INSERT INTO `values_product` VALUES (14, 38, NULL, NULL);
INSERT INTO `values_product` VALUES (17, 39, NULL, NULL);
INSERT INTO `values_product` VALUES (18, 39, NULL, NULL);
INSERT INTO `values_product` VALUES (19, 39, NULL, NULL);
INSERT INTO `values_product` VALUES (7, 39, NULL, NULL);
INSERT INTO `values_product` VALUES (18, 40, NULL, NULL);
INSERT INTO `values_product` VALUES (19, 40, NULL, NULL);
INSERT INTO `values_product` VALUES (8, 40, NULL, NULL);
INSERT INTO `values_product` VALUES (18, 41, NULL, NULL);
INSERT INTO `values_product` VALUES (19, 41, NULL, NULL);
INSERT INTO `values_product` VALUES (8, 41, NULL, NULL);
INSERT INTO `values_product` VALUES (23, 42, NULL, NULL);
INSERT INTO `values_product` VALUES (24, 42, NULL, NULL);
INSERT INTO `values_product` VALUES (25, 42, NULL, NULL);
INSERT INTO `values_product` VALUES (7, 42, NULL, NULL);
INSERT INTO `values_product` VALUES (3, 43, NULL, NULL);
INSERT INTO `values_product` VALUES (9, 43, NULL, NULL);
INSERT INTO `values_product` VALUES (3, 44, NULL, NULL);
INSERT INTO `values_product` VALUES (4, 44, NULL, NULL);
INSERT INTO `values_product` VALUES (7, 44, NULL, NULL);
INSERT INTO `values_product` VALUES (8, 44, NULL, NULL);
INSERT INTO `values_product` VALUES (3, 45, NULL, NULL);
INSERT INTO `values_product` VALUES (4, 45, NULL, NULL);
INSERT INTO `values_product` VALUES (7, 45, NULL, NULL);
INSERT INTO `values_product` VALUES (8, 45, NULL, NULL);
INSERT INTO `values_product` VALUES (3, 46, NULL, NULL);
INSERT INTO `values_product` VALUES (9, 46, NULL, NULL);
INSERT INTO `values_product` VALUES (3, 47, NULL, NULL);
INSERT INTO `values_product` VALUES (4, 47, NULL, NULL);
INSERT INTO `values_product` VALUES (8, 47, NULL, NULL);
INSERT INTO `values_product` VALUES (3, 48, NULL, NULL);
INSERT INTO `values_product` VALUES (4, 48, NULL, NULL);
INSERT INTO `values_product` VALUES (7, 48, NULL, NULL);
INSERT INTO `values_product` VALUES (3, 49, NULL, NULL);
INSERT INTO `values_product` VALUES (4, 49, NULL, NULL);
INSERT INTO `values_product` VALUES (9, 49, NULL, NULL);
INSERT INTO `values_product` VALUES (2, 50, NULL, NULL);
INSERT INTO `values_product` VALUES (3, 50, NULL, NULL);
INSERT INTO `values_product` VALUES (7, 50, NULL, NULL);
INSERT INTO `values_product` VALUES (2, 51, NULL, NULL);
INSERT INTO `values_product` VALUES (3, 51, NULL, NULL);
INSERT INTO `values_product` VALUES (8, 51, NULL, NULL);
INSERT INTO `values_product` VALUES (2, 52, NULL, NULL);
INSERT INTO `values_product` VALUES (3, 52, NULL, NULL);
INSERT INTO `values_product` VALUES (7, 52, NULL, NULL);
INSERT INTO `values_product` VALUES (8, 52, NULL, NULL);

-- ----------------------------
-- Table structure for variant
-- ----------------------------
DROP TABLE IF EXISTS `variant`;
CREATE TABLE `variant`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `price_origin` decimal(15, 2) UNSIGNED NOT NULL DEFAULT 0.00,
  `price` decimal(15, 2) NOT NULL DEFAULT 0.00,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `purchase` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0: Đang chờ, 1: Đã duyệt, 2: Hàng hỏng hóc, 3: Hàng trả về, hàng khách hàng không nhận',
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `variant_product_id_foreign`(`product_id`) USING BTREE,
  CONSTRAINT `variant_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 268 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of variant
-- ----------------------------
INSERT INTO `variant` VALUES (182, 150000.00, 200000.00, 25, 20, 15, 0, '2020-08-03 22:11:55', '2020-08-03 22:19:23');
INSERT INTO `variant` VALUES (183, 160000.00, 230000.00, 25, 30, 26, 0, '2020-08-03 22:11:55', '2020-08-03 22:19:23');
INSERT INTO `variant` VALUES (184, 100000.00, 240000.00, 26, 15, 10, 0, '2020-08-03 22:14:26', '2020-08-03 22:19:40');
INSERT INTO `variant` VALUES (185, 110000.00, 250000.00, 26, 20, 3, 0, '2020-08-03 22:14:26', '2020-08-03 22:19:40');
INSERT INTO `variant` VALUES (186, 110000.00, 270000.00, 26, 25, 5, 0, '2020-08-03 22:14:26', '2020-08-03 22:19:40');
INSERT INTO `variant` VALUES (187, 110000.00, 230000.00, 26, 26, 7, 0, '2020-08-03 22:14:26', '2020-08-03 22:19:40');
INSERT INTO `variant` VALUES (188, 120000.00, 280000.00, 27, 10, 7, 0, '2020-08-03 22:17:49', '2020-08-03 22:19:02');
INSERT INTO `variant` VALUES (189, 100000.00, 300000.00, 27, 14, 9, 0, '2020-08-03 22:17:49', '2020-08-03 22:19:02');
INSERT INTO `variant` VALUES (190, 110000.00, 290000.00, 27, 26, 15, 0, '2020-08-03 22:17:49', '2020-08-03 22:19:02');
INSERT INTO `variant` VALUES (191, 120000.00, 250000.00, 27, 30, 27, 0, '2020-08-03 22:17:49', '2020-08-03 22:19:02');
INSERT INTO `variant` VALUES (192, 70000.00, 150000.00, 28, 30, 9, 0, '2020-08-03 22:21:35', '2020-08-03 22:22:34');
INSERT INTO `variant` VALUES (193, 75000.00, 170000.00, 28, 40, 35, 0, '2020-08-03 22:21:35', '2020-08-03 22:22:34');
INSERT INTO `variant` VALUES (194, 75000.00, 180000.00, 28, 20, 19, 0, '2020-08-03 22:21:35', '2020-08-03 22:22:34');
INSERT INTO `variant` VALUES (195, 75000.00, 130000.00, 28, 25, 10, 0, '2020-08-03 22:21:35', '2020-08-03 22:22:34');
INSERT INTO `variant` VALUES (196, 70000.00, 130000.00, 29, 10, 6, 0, '2020-08-03 22:24:37', '2020-08-03 22:25:36');
INSERT INTO `variant` VALUES (197, 75000.00, 140000.00, 29, 15, 1, 0, '2020-08-03 22:24:37', '2020-08-03 22:25:36');
INSERT INTO `variant` VALUES (198, 70000.00, 150000.00, 29, 20, 5, 0, '2020-08-03 22:24:37', '2020-08-03 22:25:36');
INSERT INTO `variant` VALUES (199, 75000.00, 165000.00, 29, 20, 3, 0, '2020-08-03 22:24:37', '2020-08-03 22:25:36');
INSERT INTO `variant` VALUES (200, 80000.00, 200000.00, 30, 10, 8, 0, '2020-08-03 22:33:32', '2020-08-03 22:34:20');
INSERT INTO `variant` VALUES (201, 85000.00, 210000.00, 30, 15, 0, 0, '2020-08-03 22:33:32', '2020-08-03 22:34:20');
INSERT INTO `variant` VALUES (202, 85000.00, 220000.00, 30, 16, 11, 0, '2020-08-03 22:33:32', '2020-08-03 22:34:20');
INSERT INTO `variant` VALUES (203, 80000.00, 230000.00, 30, 20, 12, 0, '2020-08-03 22:33:32', '2020-08-03 22:34:20');
INSERT INTO `variant` VALUES (204, 120000.00, 210000.00, 31, 20, 13, 0, '2020-08-03 22:36:47', '2020-08-03 22:37:35');
INSERT INTO `variant` VALUES (205, 100000.00, 220000.00, 31, 30, 15, 0, '2020-08-03 22:36:48', '2020-08-03 22:37:35');
INSERT INTO `variant` VALUES (206, 100000.00, 230000.00, 31, 40, 5, 0, '2020-08-03 22:36:48', '2020-08-03 22:37:35');
INSERT INTO `variant` VALUES (207, 120000.00, 240000.00, 31, 20, 12, 0, '2020-08-03 22:36:48', '2020-08-03 22:37:35');
INSERT INTO `variant` VALUES (208, 100000.00, 290000.00, 32, 14, 5, 0, '2020-08-03 22:39:05', '2020-08-03 22:40:13');
INSERT INTO `variant` VALUES (209, 100000.00, 280000.00, 32, 25, 6, 0, '2020-08-03 22:39:05', '2020-08-03 22:40:13');
INSERT INTO `variant` VALUES (210, 100000.00, 270000.00, 32, 23, 9, 0, '2020-08-03 22:39:05', '2020-08-03 22:40:13');
INSERT INTO `variant` VALUES (211, 100000.00, 300000.00, 32, 44, 1, 0, '2020-08-03 22:39:05', '2020-08-03 22:40:13');
INSERT INTO `variant` VALUES (212, 100000.00, 250000.00, 33, 10, 0, 0, '2020-08-03 22:42:48', '2020-08-03 22:43:31');
INSERT INTO `variant` VALUES (213, 150000.00, 250000.00, 33, 15, 1, 0, '2020-08-03 22:42:48', '2020-08-03 22:43:31');
INSERT INTO `variant` VALUES (214, 120000.00, 250000.00, 33, 20, 0, 0, '2020-08-03 22:42:48', '2020-08-03 22:43:31');
INSERT INTO `variant` VALUES (215, 130000.00, 250000.00, 33, 20, 6, 0, '2020-08-03 22:42:48', '2020-08-03 22:43:31');
INSERT INTO `variant` VALUES (216, 140000.00, 250000.00, 33, 20, 4, 0, '2020-08-03 22:42:48', '2020-08-03 22:43:31');
INSERT INTO `variant` VALUES (217, 100000.00, 250000.00, 33, 25, 9, 0, '2020-08-03 22:42:48', '2020-08-03 22:43:31');
INSERT INTO `variant` VALUES (218, 100000.00, 210000.00, 34, 15, 7, 0, '2020-08-03 22:46:46', '2020-08-03 22:47:26');
INSERT INTO `variant` VALUES (219, 110000.00, 220000.00, 34, 22, 0, 0, '2020-08-03 22:46:46', '2020-08-03 22:47:26');
INSERT INTO `variant` VALUES (220, 120000.00, 250000.00, 34, 33, 9, 0, '2020-08-03 22:46:46', '2020-08-03 22:47:26');
INSERT INTO `variant` VALUES (221, 100000.00, 240000.00, 34, 27, 0, 0, '2020-08-03 22:46:46', '2020-08-03 22:47:26');
INSERT INTO `variant` VALUES (222, 300000.00, 470000.00, 35, 22, 0, 0, '2020-08-03 22:49:45', '2020-08-03 22:50:21');
INSERT INTO `variant` VALUES (223, 300000.00, 490000.00, 35, 34, 0, 0, '2020-08-03 22:49:45', '2020-08-03 22:50:21');
INSERT INTO `variant` VALUES (224, 300000.00, 460000.00, 35, 19, 0, 0, '2020-08-03 22:49:45', '2020-08-03 22:50:21');
INSERT INTO `variant` VALUES (225, 300000.00, 500000.00, 35, 44, 12, 0, '2020-08-03 22:49:45', '2020-08-03 22:50:21');
INSERT INTO `variant` VALUES (226, 120000.00, 200000.00, 36, 20, 0, 0, '2020-08-03 22:52:19', '2020-08-03 22:52:40');
INSERT INTO `variant` VALUES (227, 120000.00, 200000.00, 36, 25, 15, 0, '2020-08-03 22:52:20', '2020-08-03 22:52:40');
INSERT INTO `variant` VALUES (228, 60000.00, 150000.00, 37, 25, 0, 0, '2020-08-03 22:55:02', '2020-08-03 22:55:24');
INSERT INTO `variant` VALUES (229, 60000.00, 150000.00, 37, 30, 15, 0, '2020-08-03 22:55:02', '2020-08-03 22:55:24');
INSERT INTO `variant` VALUES (230, 200000.00, 550000.00, 38, 20, 0, 0, '2020-08-03 22:57:47', '2020-08-03 22:58:31');
INSERT INTO `variant` VALUES (231, 200000.00, 560000.00, 38, 40, 6, 0, '2020-08-03 22:57:47', '2020-08-03 22:58:31');
INSERT INTO `variant` VALUES (232, 200000.00, 570000.00, 38, 23, 2, 0, '2020-08-03 22:57:47', '2020-08-03 22:58:31');
INSERT INTO `variant` VALUES (233, 200000.00, 600000.00, 38, 42, 1, 0, '2020-08-03 22:57:47', '2020-08-03 22:58:31');
INSERT INTO `variant` VALUES (234, 150000.00, 320000.00, 39, 15, 11, 0, '2020-08-03 23:03:42', '2020-08-04 15:50:01');
INSERT INTO `variant` VALUES (235, 150000.00, 300000.00, 39, 20, 1, 0, '2020-08-03 23:03:42', '2020-08-03 23:04:16');
INSERT INTO `variant` VALUES (236, 150000.00, 310000.00, 39, 20, 8, 0, '2020-08-03 23:03:42', '2020-08-03 23:04:16');
INSERT INTO `variant` VALUES (237, 150000.00, 240000.00, 40, 15, 6, 0, '2020-08-03 23:06:05', '2020-08-03 23:06:39');
INSERT INTO `variant` VALUES (238, 150000.00, 260000.00, 40, 20, 0, 0, '2020-08-03 23:06:05', '2020-08-03 23:06:39');
INSERT INTO `variant` VALUES (239, 120000.00, 250000.00, 41, 15, 5, 0, '2020-08-03 23:11:07', '2020-08-04 01:08:08');
INSERT INTO `variant` VALUES (240, 120000.00, 250000.00, 41, 29, 18, 0, '2020-08-03 23:11:07', '2020-08-03 23:11:26');
INSERT INTO `variant` VALUES (241, 150000.00, 280000.00, 42, 14, 0, 0, '2020-08-03 23:13:07', '2020-08-03 23:13:32');
INSERT INTO `variant` VALUES (242, 150000.00, 280000.00, 42, 25, 19, 0, '2020-08-03 23:13:07', '2020-08-03 23:13:32');
INSERT INTO `variant` VALUES (243, 150000.00, 280000.00, 42, 11, 0, 0, '2020-08-03 23:13:07', '2020-08-03 23:13:32');
INSERT INTO `variant` VALUES (244, 50000.00, 160000.00, 43, 15, 18, 0, '2020-08-03 23:15:37', '2020-08-03 23:15:53');
INSERT INTO `variant` VALUES (245, 120000.00, 210000.00, 44, 14, 16, 0, '2020-08-03 23:18:52', '2020-08-04 01:08:32');
INSERT INTO `variant` VALUES (246, 120000.00, 220000.00, 44, 20, 0, 0, '2020-08-03 23:18:52', '2020-08-03 23:19:24');
INSERT INTO `variant` VALUES (247, 120000.00, 240000.00, 44, 20, 15, 0, '2020-08-03 23:18:52', '2020-08-03 23:19:24');
INSERT INTO `variant` VALUES (248, 120000.00, 250000.00, 44, 24, 0, 0, '2020-08-03 23:18:52', '2020-08-03 23:19:24');
INSERT INTO `variant` VALUES (249, 120000.00, 250000.00, 45, 15, 10, 0, '2020-08-03 23:22:02', '2020-08-03 23:22:36');
INSERT INTO `variant` VALUES (250, 120000.00, 240000.00, 45, 22, 0, 0, '2020-08-03 23:22:02', '2020-08-03 23:22:36');
INSERT INTO `variant` VALUES (251, 120000.00, 210000.00, 45, 24, 9, 0, '2020-08-03 23:22:02', '2020-08-03 23:22:36');
INSERT INTO `variant` VALUES (252, 120000.00, 220000.00, 45, 23, 8, 0, '2020-08-03 23:22:02', '2020-08-03 23:22:36');
INSERT INTO `variant` VALUES (253, 50000.00, 150000.00, 46, 22, 5, 0, '2020-08-03 23:24:20', '2020-08-03 23:24:35');
INSERT INTO `variant` VALUES (254, 200000.00, 600000.00, 47, 12, 7, 0, '2020-08-03 23:27:08', '2020-08-03 23:27:30');
INSERT INTO `variant` VALUES (255, 200000.00, 620000.00, 47, 15, 0, 0, '2020-08-03 23:27:08', '2020-08-03 23:27:30');
INSERT INTO `variant` VALUES (256, 80000.00, 150000.00, 48, 12, 7, 0, '2020-08-03 23:29:48', '2020-08-03 23:30:14');
INSERT INTO `variant` VALUES (257, 80000.00, 170000.00, 48, 15, 0, 0, '2020-08-03 23:29:48', '2020-08-03 23:30:14');
INSERT INTO `variant` VALUES (258, 100000.00, 200000.00, 49, 0, 2, 0, '2020-08-03 23:31:28', '2020-08-04 15:45:31');
INSERT INTO `variant` VALUES (259, 100000.00, 220000.00, 49, 25, 9, 0, '2020-08-03 23:31:28', '2020-08-03 23:31:50');
INSERT INTO `variant` VALUES (260, 50000.00, 160000.00, 50, 21, 17, 0, '2020-08-03 23:34:58', '2020-08-04 00:01:15');
INSERT INTO `variant` VALUES (261, 50000.00, 160000.00, 50, 33, 8, 0, '2020-08-03 23:34:58', '2020-08-03 23:35:20');
INSERT INTO `variant` VALUES (262, 120000.00, 220000.00, 51, 22, 24, 0, '2020-08-03 23:36:58', '2020-08-04 01:09:59');
INSERT INTO `variant` VALUES (263, 120000.00, 200000.00, 51, 34, 5, 0, '2020-08-03 23:36:58', '2020-08-03 23:37:22');
INSERT INTO `variant` VALUES (264, 120000.00, 240000.00, 52, 10, 0, 0, '2020-08-04 15:47:15', '2020-08-04 15:48:02');
INSERT INTO `variant` VALUES (265, 120000.00, 240000.00, 52, 20, 0, 0, '2020-08-04 15:47:15', '2020-08-04 15:48:02');
INSERT INTO `variant` VALUES (266, 120000.00, 240000.00, 52, 30, 0, 0, '2020-08-04 15:47:15', '2020-08-04 15:48:02');
INSERT INTO `variant` VALUES (267, 120000.00, 240000.00, 52, 40, 0, 0, '2020-08-04 15:47:15', '2020-08-04 15:48:02');

-- ----------------------------
-- Table structure for variant_value
-- ----------------------------
DROP TABLE IF EXISTS `variant_value`;
CREATE TABLE `variant_value`  (
  `variant_id` bigint(20) UNSIGNED NOT NULL,
  `value_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `variant_value_variant_id_foreign`(`variant_id`) USING BTREE,
  INDEX `variant_value_value_id_foreign`(`value_id`) USING BTREE,
  CONSTRAINT `variant_value_value_id_foreign` FOREIGN KEY (`value_id`) REFERENCES `values` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `variant_value_variant_id_foreign` FOREIGN KEY (`variant_id`) REFERENCES `variant` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of variant_value
-- ----------------------------
INSERT INTO `variant_value` VALUES (182, 3, NULL, NULL);
INSERT INTO `variant_value` VALUES (182, 7, NULL, NULL);
INSERT INTO `variant_value` VALUES (183, 4, NULL, NULL);
INSERT INTO `variant_value` VALUES (183, 7, NULL, NULL);
INSERT INTO `variant_value` VALUES (184, 2, NULL, NULL);
INSERT INTO `variant_value` VALUES (184, 8, NULL, NULL);
INSERT INTO `variant_value` VALUES (185, 2, NULL, NULL);
INSERT INTO `variant_value` VALUES (185, 9, NULL, NULL);
INSERT INTO `variant_value` VALUES (186, 3, NULL, NULL);
INSERT INTO `variant_value` VALUES (186, 8, NULL, NULL);
INSERT INTO `variant_value` VALUES (187, 3, NULL, NULL);
INSERT INTO `variant_value` VALUES (187, 9, NULL, NULL);
INSERT INTO `variant_value` VALUES (188, 3, NULL, NULL);
INSERT INTO `variant_value` VALUES (188, 10, NULL, NULL);
INSERT INTO `variant_value` VALUES (189, 3, NULL, NULL);
INSERT INTO `variant_value` VALUES (189, 13, NULL, NULL);
INSERT INTO `variant_value` VALUES (190, 4, NULL, NULL);
INSERT INTO `variant_value` VALUES (190, 10, NULL, NULL);
INSERT INTO `variant_value` VALUES (191, 4, NULL, NULL);
INSERT INTO `variant_value` VALUES (191, 13, NULL, NULL);
INSERT INTO `variant_value` VALUES (192, 3, NULL, NULL);
INSERT INTO `variant_value` VALUES (192, 7, NULL, NULL);
INSERT INTO `variant_value` VALUES (193, 3, NULL, NULL);
INSERT INTO `variant_value` VALUES (193, 8, NULL, NULL);
INSERT INTO `variant_value` VALUES (194, 4, NULL, NULL);
INSERT INTO `variant_value` VALUES (194, 7, NULL, NULL);
INSERT INTO `variant_value` VALUES (195, 4, NULL, NULL);
INSERT INTO `variant_value` VALUES (195, 8, NULL, NULL);
INSERT INTO `variant_value` VALUES (196, 3, NULL, NULL);
INSERT INTO `variant_value` VALUES (196, 7, NULL, NULL);
INSERT INTO `variant_value` VALUES (197, 3, NULL, NULL);
INSERT INTO `variant_value` VALUES (197, 13, NULL, NULL);
INSERT INTO `variant_value` VALUES (198, 4, NULL, NULL);
INSERT INTO `variant_value` VALUES (198, 7, NULL, NULL);
INSERT INTO `variant_value` VALUES (199, 4, NULL, NULL);
INSERT INTO `variant_value` VALUES (199, 13, NULL, NULL);
INSERT INTO `variant_value` VALUES (200, 3, NULL, NULL);
INSERT INTO `variant_value` VALUES (200, 7, NULL, NULL);
INSERT INTO `variant_value` VALUES (201, 3, NULL, NULL);
INSERT INTO `variant_value` VALUES (201, 8, NULL, NULL);
INSERT INTO `variant_value` VALUES (202, 4, NULL, NULL);
INSERT INTO `variant_value` VALUES (202, 7, NULL, NULL);
INSERT INTO `variant_value` VALUES (203, 4, NULL, NULL);
INSERT INTO `variant_value` VALUES (203, 8, NULL, NULL);
INSERT INTO `variant_value` VALUES (204, 3, NULL, NULL);
INSERT INTO `variant_value` VALUES (204, 7, NULL, NULL);
INSERT INTO `variant_value` VALUES (205, 3, NULL, NULL);
INSERT INTO `variant_value` VALUES (205, 9, NULL, NULL);
INSERT INTO `variant_value` VALUES (206, 4, NULL, NULL);
INSERT INTO `variant_value` VALUES (206, 7, NULL, NULL);
INSERT INTO `variant_value` VALUES (207, 4, NULL, NULL);
INSERT INTO `variant_value` VALUES (207, 9, NULL, NULL);
INSERT INTO `variant_value` VALUES (208, 3, NULL, NULL);
INSERT INTO `variant_value` VALUES (208, 8, NULL, NULL);
INSERT INTO `variant_value` VALUES (209, 3, NULL, NULL);
INSERT INTO `variant_value` VALUES (209, 9, NULL, NULL);
INSERT INTO `variant_value` VALUES (210, 4, NULL, NULL);
INSERT INTO `variant_value` VALUES (210, 8, NULL, NULL);
INSERT INTO `variant_value` VALUES (211, 4, NULL, NULL);
INSERT INTO `variant_value` VALUES (211, 9, NULL, NULL);
INSERT INTO `variant_value` VALUES (212, 2, NULL, NULL);
INSERT INTO `variant_value` VALUES (212, 7, NULL, NULL);
INSERT INTO `variant_value` VALUES (213, 2, NULL, NULL);
INSERT INTO `variant_value` VALUES (213, 9, NULL, NULL);
INSERT INTO `variant_value` VALUES (214, 3, NULL, NULL);
INSERT INTO `variant_value` VALUES (214, 7, NULL, NULL);
INSERT INTO `variant_value` VALUES (215, 3, NULL, NULL);
INSERT INTO `variant_value` VALUES (215, 9, NULL, NULL);
INSERT INTO `variant_value` VALUES (216, 4, NULL, NULL);
INSERT INTO `variant_value` VALUES (216, 7, NULL, NULL);
INSERT INTO `variant_value` VALUES (217, 4, NULL, NULL);
INSERT INTO `variant_value` VALUES (217, 9, NULL, NULL);
INSERT INTO `variant_value` VALUES (218, 2, NULL, NULL);
INSERT INTO `variant_value` VALUES (218, 7, NULL, NULL);
INSERT INTO `variant_value` VALUES (219, 2, NULL, NULL);
INSERT INTO `variant_value` VALUES (219, 8, NULL, NULL);
INSERT INTO `variant_value` VALUES (220, 3, NULL, NULL);
INSERT INTO `variant_value` VALUES (220, 7, NULL, NULL);
INSERT INTO `variant_value` VALUES (221, 3, NULL, NULL);
INSERT INTO `variant_value` VALUES (221, 8, NULL, NULL);
INSERT INTO `variant_value` VALUES (222, 3, NULL, NULL);
INSERT INTO `variant_value` VALUES (222, 8, NULL, NULL);
INSERT INTO `variant_value` VALUES (223, 3, NULL, NULL);
INSERT INTO `variant_value` VALUES (223, 13, NULL, NULL);
INSERT INTO `variant_value` VALUES (224, 4, NULL, NULL);
INSERT INTO `variant_value` VALUES (224, 8, NULL, NULL);
INSERT INTO `variant_value` VALUES (225, 4, NULL, NULL);
INSERT INTO `variant_value` VALUES (225, 13, NULL, NULL);
INSERT INTO `variant_value` VALUES (226, 3, NULL, NULL);
INSERT INTO `variant_value` VALUES (226, 13, NULL, NULL);
INSERT INTO `variant_value` VALUES (227, 4, NULL, NULL);
INSERT INTO `variant_value` VALUES (227, 13, NULL, NULL);
INSERT INTO `variant_value` VALUES (228, 3, NULL, NULL);
INSERT INTO `variant_value` VALUES (228, 7, NULL, NULL);
INSERT INTO `variant_value` VALUES (229, 4, NULL, NULL);
INSERT INTO `variant_value` VALUES (229, 7, NULL, NULL);
INSERT INTO `variant_value` VALUES (230, 3, NULL, NULL);
INSERT INTO `variant_value` VALUES (230, 7, NULL, NULL);
INSERT INTO `variant_value` VALUES (231, 3, NULL, NULL);
INSERT INTO `variant_value` VALUES (231, 14, NULL, NULL);
INSERT INTO `variant_value` VALUES (232, 4, NULL, NULL);
INSERT INTO `variant_value` VALUES (232, 7, NULL, NULL);
INSERT INTO `variant_value` VALUES (233, 4, NULL, NULL);
INSERT INTO `variant_value` VALUES (233, 14, NULL, NULL);
INSERT INTO `variant_value` VALUES (234, 17, NULL, NULL);
INSERT INTO `variant_value` VALUES (234, 7, NULL, NULL);
INSERT INTO `variant_value` VALUES (235, 18, NULL, NULL);
INSERT INTO `variant_value` VALUES (235, 7, NULL, NULL);
INSERT INTO `variant_value` VALUES (236, 19, NULL, NULL);
INSERT INTO `variant_value` VALUES (236, 7, NULL, NULL);
INSERT INTO `variant_value` VALUES (237, 18, NULL, NULL);
INSERT INTO `variant_value` VALUES (237, 8, NULL, NULL);
INSERT INTO `variant_value` VALUES (238, 19, NULL, NULL);
INSERT INTO `variant_value` VALUES (238, 8, NULL, NULL);
INSERT INTO `variant_value` VALUES (239, 18, NULL, NULL);
INSERT INTO `variant_value` VALUES (239, 8, NULL, NULL);
INSERT INTO `variant_value` VALUES (240, 19, NULL, NULL);
INSERT INTO `variant_value` VALUES (240, 8, NULL, NULL);
INSERT INTO `variant_value` VALUES (241, 23, NULL, NULL);
INSERT INTO `variant_value` VALUES (241, 7, NULL, NULL);
INSERT INTO `variant_value` VALUES (242, 24, NULL, NULL);
INSERT INTO `variant_value` VALUES (242, 7, NULL, NULL);
INSERT INTO `variant_value` VALUES (243, 25, NULL, NULL);
INSERT INTO `variant_value` VALUES (243, 7, NULL, NULL);
INSERT INTO `variant_value` VALUES (244, 3, NULL, NULL);
INSERT INTO `variant_value` VALUES (244, 9, NULL, NULL);
INSERT INTO `variant_value` VALUES (245, 3, NULL, NULL);
INSERT INTO `variant_value` VALUES (245, 7, NULL, NULL);
INSERT INTO `variant_value` VALUES (246, 3, NULL, NULL);
INSERT INTO `variant_value` VALUES (246, 8, NULL, NULL);
INSERT INTO `variant_value` VALUES (247, 4, NULL, NULL);
INSERT INTO `variant_value` VALUES (247, 7, NULL, NULL);
INSERT INTO `variant_value` VALUES (248, 4, NULL, NULL);
INSERT INTO `variant_value` VALUES (248, 8, NULL, NULL);
INSERT INTO `variant_value` VALUES (249, 3, NULL, NULL);
INSERT INTO `variant_value` VALUES (249, 7, NULL, NULL);
INSERT INTO `variant_value` VALUES (250, 3, NULL, NULL);
INSERT INTO `variant_value` VALUES (250, 8, NULL, NULL);
INSERT INTO `variant_value` VALUES (251, 4, NULL, NULL);
INSERT INTO `variant_value` VALUES (251, 7, NULL, NULL);
INSERT INTO `variant_value` VALUES (252, 4, NULL, NULL);
INSERT INTO `variant_value` VALUES (252, 8, NULL, NULL);
INSERT INTO `variant_value` VALUES (253, 3, NULL, NULL);
INSERT INTO `variant_value` VALUES (253, 9, NULL, NULL);
INSERT INTO `variant_value` VALUES (254, 3, NULL, NULL);
INSERT INTO `variant_value` VALUES (254, 8, NULL, NULL);
INSERT INTO `variant_value` VALUES (255, 4, NULL, NULL);
INSERT INTO `variant_value` VALUES (255, 8, NULL, NULL);
INSERT INTO `variant_value` VALUES (256, 3, NULL, NULL);
INSERT INTO `variant_value` VALUES (256, 7, NULL, NULL);
INSERT INTO `variant_value` VALUES (257, 4, NULL, NULL);
INSERT INTO `variant_value` VALUES (257, 7, NULL, NULL);
INSERT INTO `variant_value` VALUES (258, 3, NULL, NULL);
INSERT INTO `variant_value` VALUES (258, 9, NULL, NULL);
INSERT INTO `variant_value` VALUES (259, 4, NULL, NULL);
INSERT INTO `variant_value` VALUES (259, 9, NULL, NULL);
INSERT INTO `variant_value` VALUES (260, 2, NULL, NULL);
INSERT INTO `variant_value` VALUES (260, 7, NULL, NULL);
INSERT INTO `variant_value` VALUES (261, 3, NULL, NULL);
INSERT INTO `variant_value` VALUES (261, 7, NULL, NULL);
INSERT INTO `variant_value` VALUES (262, 2, NULL, NULL);
INSERT INTO `variant_value` VALUES (262, 8, NULL, NULL);
INSERT INTO `variant_value` VALUES (263, 3, NULL, NULL);
INSERT INTO `variant_value` VALUES (263, 8, NULL, NULL);
INSERT INTO `variant_value` VALUES (264, 2, NULL, NULL);
INSERT INTO `variant_value` VALUES (264, 7, NULL, NULL);
INSERT INTO `variant_value` VALUES (265, 2, NULL, NULL);
INSERT INTO `variant_value` VALUES (265, 8, NULL, NULL);
INSERT INTO `variant_value` VALUES (266, 3, NULL, NULL);
INSERT INTO `variant_value` VALUES (266, 7, NULL, NULL);
INSERT INTO `variant_value` VALUES (267, 3, NULL, NULL);
INSERT INTO `variant_value` VALUES (267, 8, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
