CREATE TABLE `products1` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `product_description` text,
  `product_price` decimal(10,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `products1`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `name` (`product_name`);
  
ALTER TABLE `products1`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
  
  
INSERT INTO `products1` (`product_id`, `product_name`, `product_image`, `product_description`, `product_price`) VALUES
(1, 'CHIPOTLE CHICKEN', '1.jpg', 'Topped with chipotle sauce, chipotle chicken, red onions, and mozzarella cheese.', '350'),
(2, 'CHICKEN BRUSCHETTA', '2.jpg', 'Topped with grilled chicken, roasted garlic, Italiano blend seasoning, bruschetta, parmesan and mozzarella. A little taste of Italy.', '400'),
(3, 'CLASSIC SUPER', '3.jpg', 'Made with fresh mushrooms, green peppers, pepperoni, and mozzarella cheese.', '300'),
(4, 'TROPICAL HAWAIIAN', '4.jpg', 'Topped with pineapples, bacon crumble, bacon strips, and mozzarella cheese.', '320');
