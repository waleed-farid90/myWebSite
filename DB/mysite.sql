-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2019 at 05:14 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysite`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `price` varchar(20) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `category` varchar(20) NOT NULL,
  `user_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `title`, `price`, `description`, `category`, `user_id`) VALUES
(1, 'images/browsepage/Kids/kids boy jacket.jpg', 'Boys Jacket', '40', 'Soft wool-blend.\r\nLong sleeves.\r\nPlaid lining at hood.\r\nHidden zip and button-loop front.\r\nFront button-flap utility pockets.\r\n#473933.', 'kids', 24),
(2, 'images\\browsepage\\Kids\\kids boy shirt.jpg', 'Boys shirt', '10', 'Smooth flannel weave, with stretch.\r\nLong sleeves with button cuffs.\r\nButton-down collar, button front.\r\nCurved shirttail.\r\nAllover plaid.\r\n#496514\r\n100% Cotton.\r\nMachine wash.\r\nImported.', 'kids', 24),
(3, 'images\\browsepage\\Kids\\kids girl dress.jpg', 'Girls dress', '15', 'Soft jersey knit top.\r\nShirring at shoulders, long sleeves.\r\nCrewneck.\r\nTulle skirt is fully lined.\r\n#497487\r\n100% Cotton.\r\nMachine wash, delicate cycle.\r\nImported.', 'kids', 24),
(4, 'images\\browsepage\\Kids\\kids girl shirt.jpg', 'Girls shirt', '15', 'Standout, specially designed graphics let you be you.\r\nSoft jersey knit.\r\nDropped shoulders, long sleeves.\r\nCrewneck.\r\nAssorted graphics at front.\r\n#499155.\r\n95% Polyester, 5% Spandex.\r\nMachine wash, delicate cycle.\r\nImported.', 'kids', 24),
(5, 'images\\browsepage\\Kids\\kids girl sweater.jpg', 'Girls sweater', '25', 'Soft pointelle knit.\r\nLong sleeves with ribbed cuffs.\r\nCrewneck, button front.\r\nBanded hem.\r\n#424468\r\n60% Cotton, 40% Polyester.\r\nMachine wash, delicate cycle.\r\nImported.', 'kids', 24),
(6, 'images\\browsepage\\Men\\menleather1.jpg', 'Mens Leather Jacket', '90', 'Lapel collar bomber jacket with long sleeves with tonal ribbed cuffs. Fleece fabric lined interior.\r\n Front welt pockets. Elastic hem. Front zip closure.\r\n', 'men', 25),
(7, 'images\\browsepage\\Men\\menleather2.jpg', 'Mens Leather Jacket', '120', 'Aviator jacket made of faux leather fabric with faux fur interior and collar.\r\nDouble collar and long sleeves with turned-up cuffs and tab details. Front welt pockets. Cuffed hems.\r\nFront zipper closure with tabbed collar.', 'men', 25),
(8, 'images\\browsepage\\Men\\menleather3.jpg', 'Mens Leather Jacket', '150', 'Moto jacket with snap button pointed lapel collar. Long sleeves with zippered cuffs. Front flap pockets with zip closure. Interior pocket. Front asymmetric closure with metal zipper.', 'men', 25),
(9, 'images\\browsepage\\Men\\mens leather jacket brown 2.jpg', 'Mens Leather Jacket', '160', 'Mandarin collar jacket with long sleeves with buttoned cuffs. Top stitching reinforced shoulders and sleeves.Zip pockets at hip and interior pocket. Front zip closure.', 'men', 25),
(10, 'images\\browsepage\\Men\\mens tshirt black.jpg', 'Mens Shirt Black', '20', 'Basic regular fit T-shirt with round neck and short sleeves.\r\n\r\nCare for fiber: 100% ecologically grown cotton.\r\nEcologically grown cotton is grown using practices that help us protect biodiversity, such as crop rotation or the use of natural fertilizers.', 'men', 25),
(11, 'images\\browsepage\\Men\\mens tshirt white.jpg', 'Mens Shirt White', '25', 'Basic regular fit T-shirt with round neck and short sleeves.\r\n\r\nCare for fiber: 100% ecologically grown cotton.\r\nEcologically grown cotton is grown using practices that help us protect biodiversity, such as crop rotation or the use of natural fertilizers.', 'men', 25),
(12, 'images\\browsepage\\Women\\women jacket.jpg', 'Womens Winter Jacket', '200', 'Attached hood with removable faux fur trim.\r\nStand collar.\r\nLong sleeves with logo patch.\r\nStorm ribbed cuffs.\r\nConcealed zip front with hidden storm snap placket.\r\nChest buttoned flap pockets.\r\nWaist snap-flap pockets.\r\nLined.\r\nPolyester.\r\nFur type: Faux.\r\nMachine wash.\r\n\r\nImported.\r\n', 'women', 25),
(13, 'images\\browsepage\\Women\\women jacket2.jpg', 'Womens Leather Jacket', '130', 'A forever favorite moto-jacket adds instant edge to any outfit, made in a smooth vegan leather that looks and feels luxurious.\r\nNotch lapel. Long sleeves with exposed metal zips at cuff.\r\nExposed metal zip-front closure.\r\nThree zip pockets and one snap pocket at front.\r\nSnap-tab epaulets at shoulders.\r\nFully lined.', 'women', 25),
(14, 'images\\browsepage\\Women\\women tshirt black.jpg', 'Womens Shirt Black ', '20', 'The ultimate wardrobe wonder, this t-shirt is perfect for layering under dresses or on its own with high-waisted bottoms. Made in a soft, ribbed-knit fabric.\r\nCrew neck. Short sleeves.\r\nAllover ribbed-knit texture.\r\nStraight hem.', 'women', 25),
(15, 'images\\browsepage\\Women\\women tshirt white.jpg', 'Womens Shirt White', '20', 'Our take on the season\'s \"baby tee\", this fitted crew-neck t-shirt is slightly cropped to show off high-waisted jeans, pants and skirts.\r\nMade with a high-stretch blend of cotton and modal for supreme softness and a flattering, comfortable fit.\r\nCrew neck. Short sleeves.\r\nStraight hem.', 'women', 25),
(16, 'images/browsepage/Kids/kids boy jacket.jpg', 'Boys Jacket', '40', 'Soft wool-blend.\r\nLong sleeves.\r\nPlaid lining at hood.\r\nHidden zip and button-loop front.\r\nFront button-flap utility pockets.\r\n#473933.', 'kids', 24),
(17, 'images\\browsepage\\Kids\\kids boy shirt.jpg', 'Boys shirt', '10', 'Smooth flannel weave, with stretch.\r\nLong sleeves with button cuffs.\r\nButton-down collar, button front.\r\nCurved shirttail.\r\nAllover plaid.\r\n#496514\r\n100% Cotton.\r\nMachine wash.\r\nImported.', 'kids', 24),
(19, 'images\\browsepage\\Kids\\kids girl shirt.jpg', 'Girls shirt', '15', 'Standout, specially designed graphics let you be you.\r\nSoft jersey knit.\r\nDropped shoulders, long sleeves.\r\nCrewneck.\r\nAssorted graphics at front.\r\n#499155.\r\n95% Polyester, 5% Spandex.\r\nMachine wash, delicate cycle.\r\nImported.', 'kids', 24),
(21, 'images\\browsepage\\Men\\menleather1.jpg', 'Mens Leather Jacket', '90', 'Lapel collar bomber jacket with long sleeves with tonal ribbed cuffs. Fleece fabric lined interior.\r\n Front welt pockets. Elastic hem. Front zip closure.\r\n', 'men', 25),
(22, 'images\\browsepage\\Men\\menleather2.jpg', 'Mens Leather Jacket', '120', 'Aviator jacket made of faux leather fabric with faux fur interior and collar.\r\nDouble collar and long sleeves with turned-up cuffs and tab details. Front welt pockets. Cuffed hems.\r\nFront zipper closure with tabbed collar.', 'men', 25),
(23, 'images\\browsepage\\Men\\menleather3.jpg', 'Mens Leather Jacket', '150', 'Moto jacket with snap button pointed lapel collar. Long sleeves with zippered cuffs. Front flap pockets with zip closure. Interior pocket. Front asymmetric closure with metal zipper.', 'men', 25),
(24, 'images/browsepage/men/mens leather jacket brown 2.jpg', 'Mens Leather Jacket', '160', 'Mandarin collar jacket with long sleeves with buttoned cuffs. Top stitching reinforced shoulders and sleeves.Zip pockets at hip and interior pocket. Front zip closure.', 'men', 24),
(25, 'images\\browsepage\\Men\\mens tshirt black.jpg', 'Mens Shirt Black', '20', 'Basic regular fit T-shirt with round neck and short sleeves.\r\n\r\nCare for fiber: 100% ecologically grown cotton.\r\nEcologically grown cotton is grown using practices that help us protect biodiversity, such as crop rotation or the use of natural fertilizers.', 'men', 25),
(27, 'images\\browsepage\\Women\\women jacket.jpg', 'Womens Winter Jacket', '200', 'Attached hood with removable faux fur trim.\r\nStand collar.\r\nLong sleeves with logo patch.\r\nStorm ribbed cuffs.\r\nConcealed zip front with hidden storm snap placket.\r\nChest buttoned flap pockets.\r\nWaist snap-flap pockets.\r\nLined.\r\nPolyester.\r\nFur type: Faux.\r\nMachine wash.\r\n\r\nImported.\r\n', 'women', 25),
(28, 'images\\browsepage\\Women\\women jacket2.jpg', 'Womens Leather Jacket', '130', 'A forever favorite moto-jacket adds instant edge to any outfit, made in a smooth vegan leather that looks and feels luxurious.\r\nNotch lapel. Long sleeves with exposed metal zips at cuff.\r\nExposed metal zip-front closure.\r\nThree zip pockets and one snap pocket at front.\r\nSnap-tab epaulets at shoulders.\r\nFully lined.', 'women', 25),
(29, 'images\\browsepage\\Women\\women tshirt black.jpg', 'Womens Shirt Black ', '20', 'The ultimate wardrobe wonder, this t-shirt is perfect for layering under dresses or on its own with high-waisted bottoms. Made in a soft, ribbed-knit fabric.\r\nCrew neck. Short sleeves.\r\nAllover ribbed-knit texture.\r\nStraight hem.', 'women', 25),
(30, 'images\\browsepage\\Women\\women tshirt white.jpg', 'Womens Shirt White', '20', 'Our take on the season\'s \"baby tee\", this fitted crew-neck t-shirt is slightly cropped to show off high-waisted jeans, pants and skirts.\r\nMade with a high-stretch blend of cotton and modal for supreme softness and a flattering, comfortable fit.\r\nCrew neck. Short sleeves.\r\nStraight hem.', 'women', 25),
(32, 'images\\browsepage\\Kids\\kids boy shirt.jpg', 'Boys shirt', '10', 'Smooth flannel weave, with stretch.\r\nLong sleeves with button cuffs.\r\nButton-down collar, button front.\r\nCurved shirttail.\r\nAllover plaid.\r\n#496514\r\n100% Cotton.\r\nMachine wash.\r\nImported.', 'kids', 24),
(33, 'images\\browsepage\\Kids\\kids girl dress.jpg', 'Girls dress', '15', 'Soft jersey knit top.\r\nShirring at shoulders, long sleeves.\r\nCrewneck.\r\nTulle skirt is fully lined.\r\n#497487\r\n100% Cotton.\r\nMachine wash, delicate cycle.\r\nImported.', 'kids', 24),
(35, 'images\\browsepage\\Kids\\kids boy shirt.jpg', 'Boys shirt', '10', 'Smooth flannel weave, with stretch.\r\nLong sleeves with button cuffs.\r\nButton-down collar, button front.\r\nCurved shirttail.\r\nAllover plaid.\r\n#496514\r\n100% Cotton.\r\nMachine wash.\r\nImported.', 'kids', 24),
(39, 'images\\browsepage\\Men\\menleather1.jpg', 'Mens Leather Jacket', '90', 'Lapel collar bomber jacket with long sleeves with tonal ribbed cuffs. Fleece fabric lined interior.\r\n Front welt pockets. Elastic hem. Front zip closure.\r\n', 'men', 25),
(40, 'images\\browsepage\\Men\\menleather2.jpg', 'Mens Leather Jacket', '120', 'Aviator jacket made of faux leather fabric with faux fur interior and collar.\r\nDouble collar and long sleeves with turned-up cuffs and tab details. Front welt pockets. Cuffed hems.\r\nFront zipper closure with tabbed collar.', 'men', 25);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`) VALUES
(24, 'John Doe', 'jd@gmail.com', 'wfsoomro', 'ff3528a5be22137d9373c1585c13a831'),
(25, 'Ani', 'ani@gmail.com', 'ani', 'ff3528a5be22137d9373c1585c13a831'),
(26, 'Dmitri', 'dmitri@gmail.com', 'Dmitri', 'ff3528a5be22137d9373c1585c13a831');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
