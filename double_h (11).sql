-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 26, 2022 lúc 05:44 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `double_h`
--

DELIMITER $$
--
-- Thủ tục
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_getCartOfCustomer` (IN `customerId` INT)   BEGIN  
SELECT 
	ct.cart_id, cu.user_id, p.product_id, p.product_name, cl.color_id, cl.color_name, cl.image_link, s.size_id, s.size_name, ct.unit_price, ct.quantity
FROM
    carts ct
		LEFT JOIN accounts cu ON ct.customer_id = cu.user_id
		INNER JOIN products p ON p.product_id = ct.product_id
        INNER JOIN colors cl ON cl.color_id = ct.color_id
        INNER JOIN sizes s ON s.size_id = ct.size_id
WHERE ct.customer_id = customerId;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_getOrderByCustomerId` (IN `customerId` INT)   BEGIN  
SELECT 
	o.order_id, cu.user_id AS customer_id, cu.fullname AS cus_fullname, cu.phone AS phone, cu.address, ifnull(ad.user_id,'') AS admin_id, ifnull(ad.fullname,'') AS ad_fullname, o.payment_method, o.total_price, sub.user_id AS sub_customer, sub.fullname AS sub_fullname, sub.phone AS sub_phone, sub.address AS sub_address, o.order_date, o.status
FROM
    orders o
        LEFT JOIN accounts cu ON o.customer_id = cu.user_id
        LEFT JOIN accounts ad ON o.admin_id = ad.user_id
        LEFT JOIN accounts sub ON o.sub_customer = sub.user_id
WHERE o.customer_id = customerId ORDER BY order_date DESC;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_getOrderById` (IN `orderId` INT)   BEGIN  
SELECT 
	o.order_id, cu.user_id AS customer_id, cu.fullname AS cus_fullname, cu.phone AS phone, cu.address, ifnull(ad.user_id,'') AS admin_id, ifnull(ad.fullname,'') AS ad_fullname, o.payment_method, o.total_price, sub.user_id AS sub_customer, sub.fullname AS sub_fullname, sub.phone AS sub_phone, sub.address AS sub_address, o.order_date, o.status
FROM
    orders o
        LEFT JOIN accounts cu ON o.customer_id = cu.user_id
        LEFT JOIN accounts ad ON o.admin_id = ad.user_id
        LEFT JOIN accounts sub ON o.sub_customer = sub.user_id
WHERE o.order_id = orderId;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_getProductById` (IN `productId` INT)   BEGIN  
SELECT 
	p.product_id, p.product_name, c.category_id, c.category_name AS category, p.sex, p.price, p.description, p.status
FROM
    products p
        INNER JOIN categories c ON p.category_id = c.category_id
WHERE p.product_id = productId;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_getProductInOrder` (IN `orderId` INT)   BEGIN  
SELECT 
	p.product_id, p.product_name, od.color_name AS color, od.size_name AS size, od.unit_price AS price, od.quantity
FROM
    order_details od
        INNER JOIN products p ON p.product_id = od.product_id
WHERE od.order_id = orderId;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_searchProductOrderByPrice` (IN `searchValue` VARCHAR(255))   BEGIN  
SELECT 
	p.product_id, p.product_name, c.category_id, c.category_name AS category, p.sex, p.price, p.description, p.status
FROM
    products p
        INNER JOIN categories c ON p.category_id = c.category_id
WHERE (p.product_name LIKE CONCAT('%', searchValue, '%') OR 
	  c.category_name LIKE CONCAT('%', searchValue, '%') OR
      p.product_id = searchValue) AND p.status != 0
ORDER BY p.price;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_updateQuantityAfterCancelOrder` (IN `_quantity` INT, IN `sizeId` INT)   BEGIN
UPDATE sizes SET quantity = quantity + _quantity WHERE size_id = sizeId;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_updateQuantityAfterCreateOrder` (IN `_quantity` INT, IN `sizeId` INT)   BEGIN
UPDATE sizes SET quantity = quantity - _quantity WHERE size_id = sizeId;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `accounts`
--

CREATE TABLE `accounts` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `fullname` varchar(500) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `accounts`
--

INSERT INTO `accounts` (`user_id`, `username`, `fullname`, `address`, `phone`, `email`, `role`, `password`) VALUES
(1, 'cus1', 'Đỗ Tiến V', '18 Tam Trinh, Minh Khai, Hai Bà Trưng, Hà Nội', '0904844665', 'cus123@gmail.com', 0, '25d55ad283aa400af464c76d713c07ad'),
(2, 'admin1', 'Nguyễn Văn A', 'HN', '0987654321', 'admin1@gmail.com', 1, '0192023a7bbd73250516f069df18b500'),
(3, 'chickyboy001', 'Phạm Công Hưng', '18 Tam Trinh, Minh Khai, Hai Bà Trưng, Hà Nội', '0904844566', 'thfghfgd@gmail.com', 0, '34ee2412a6c713f9af0d4080ee0f34b3'),
(4, 'cus2', 'Nguyễn Tiến A', '18 Tam Trinh, Minh Khai, Hai Bà Trưng, Hà Nội', '0904844455', '', 0, '25d55ad283aa400af464c76d713c07ad'),
(6, NULL, 'Đỗ Tiến B', '18 Tam Trinh, Minh Khai, Hai Bà Trưng, Hà Nội', '0904844665', 'cus1@gmail.com', 0, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `cart_id` int(20) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `unit_price` decimal(10,0) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `status`) VALUES
(1, 'Áo thun', 1),
(2, 'Áo khoác', 1),
(3, 'Áo sơ mi', 1),
(12, 'Quần đùi', 1),
(13, 'Áo phông', 1),
(14, 'Áo bomber', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `colors`
--

CREATE TABLE `colors` (
  `color_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `color_name` varchar(50) NOT NULL,
  `image_link` varchar(255) NOT NULL,
  `image_link_1` varchar(500) DEFAULT NULL,
  `image_link_2` varchar(500) DEFAULT NULL,
  `image_link_3` varchar(500) DEFAULT NULL,
  `image_link_4` varchar(500) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `colors`
--

INSERT INTO `colors` (`color_id`, `product_id`, `color_name`, `image_link`, `image_link_1`, `image_link_2`, `image_link_3`, `image_link_4`, `status`) VALUES
(1, 1, 'M001', 'untitled_session1276_1.webp', 'untitled_session1307_1.webp', 'untitled_session1296_1_1.webp', 'untitled_session1294_1.webp', 'untitled_session1292_1.webp', 1),
(2, 1, 'M002', 'untitled_session0919_1.webp', 'untitled_session0939_1.webp', 'untitled_session0936_1.webp', 'untitled_session0934_1.webp', 'untitled_session0926_1.webp', 1),
(9, 1, 'M003', 'untitled_session1409_1.webp', 'untitled_session1451_1_1.webp', 'untitled_session1450_1.webp', 'untitled_session1440_1.webp', 'untitled_session1436_1_1.webp', 1),
(12, 2, 'M005', 'untitled_session1451_1_1.webp', 'untitled_session2211_1_1 (1).webp', 'untitled_session2208_1.webp', 'untitled_session2196_1.webp', 'untitled_session2188_1.webp', 0),
(14, 2, 'M009', 'untitled_session2176_1_1.webp', '', '', '', '', 0),
(17, 2, 'M011', 'untitled_session2211_1_1 (1).webp', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `order_date` datetime DEFAULT current_timestamp(),
  `payment_method` int(11) NOT NULL,
  `total_price` decimal(10,0) NOT NULL,
  `sub_customer` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `admin_id`, `order_date`, `payment_method`, `total_price`, `sub_customer`, `status`) VALUES
(1, 1, 2, '2022-10-11 11:24:26', 0, '700000', NULL, 3),
(2, 1, NULL, '2022-10-17 22:53:59', 0, '1200000', NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `od_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `color_name` varchar(100) NOT NULL,
  `size_name` varchar(100) NOT NULL,
  `unit_price` decimal(10,0) DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`od_id`, `order_id`, `product_id`, `color_name`, `size_name`, `unit_price`, `quantity`) VALUES
(1, 1, 1, 'Đen', 'XL', '240000', 1),
(2, 1, 2, 'Trắng', 'XL', '230000', 2),
(4, 2, 1, 'M001', 'M', '240000', 2),
(5, 2, 1, 'M001', 'S', '240000', 1),
(6, 2, 1, 'M002', 'XL', '240000', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sex` int(20) NOT NULL,
  `price` decimal(10,0) NOT NULL DEFAULT 0,
  `description` longtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `category_id`, `sex`, `price`, `description`, `status`) VALUES
(1, 'ÁO THUN TAY NGẮN', 1, 1, '299000', '• Thành phần ( 80% Poly, 20% standex) <br>\r\n• Bảo hành: 2 tuần kể từ ngày nhận hàng <br>\r\n• Chất liệu: Vải thun Nỉ, trong có lót lông.', 1),
(2, 'Áo sơ mi nam', 3, 1, '340000', '0', 0),
(3, 'Staple áo khoác ', 2, 3, '320000', '0', 0),
(4, 'Staple áo phông tay nữ', 13, 2, '210000', '0', 0),
(5, 'Áo khoác', 2, 1, '220000', '0', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sizes`
--

CREATE TABLE `sizes` (
  `size_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `size_name` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sizes`
--

INSERT INTO `sizes` (`size_id`, `color_id`, `size_name`, `quantity`, `status`) VALUES
(2, 1, 'L', -1, 1),
(5, 1, 'M', 0, 1),
(6, 1, 'S', 0, 1),
(9, 1, 'XL', 3, 1),
(11, 2, 'XL', 9, 1),
(12, 2, 'L', 5, 1),
(13, 2, 'M', 0, 1),
(14, 2, 'S', 3, 1),
(15, 9, 'L', 6, 1),
(16, 9, 'M', 5, 1),
(17, 9, 'S', 6, 1),
(18, 9, 'XL', 7, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `color_id` (`color_id`),
  ADD KEY `size_id` (`size_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `category_name` (`category_name`);

--
-- Chỉ mục cho bảng `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`color_id`),
  ADD UNIQUE KEY `color_name` (`color_name`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `sub_customer` (`sub_customer`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`od_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`size_id`),
  ADD KEY `color_id` (`color_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `accounts`
--
ALTER TABLE `accounts`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `colors`
--
ALTER TABLE `colors`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `od_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `sizes`
--
ALTER TABLE `sizes`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `carts_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `accounts` (`user_id`),
  ADD CONSTRAINT `carts_ibfk_3` FOREIGN KEY (`color_id`) REFERENCES `colors` (`color_id`),
  ADD CONSTRAINT `carts_ibfk_4` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`size_id`);

--
-- Các ràng buộc cho bảng `colors`
--
ALTER TABLE `colors`
  ADD CONSTRAINT `colors_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `accounts` (`user_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `accounts` (`user_id`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`sub_customer`) REFERENCES `accounts` (`user_id`);

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

--
-- Các ràng buộc cho bảng `sizes`
--
ALTER TABLE `sizes`
  ADD CONSTRAINT `sizes_ibfk_1` FOREIGN KEY (`color_id`) REFERENCES `colors` (`color_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
