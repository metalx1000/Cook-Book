-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 08, 2015 at 04:17 PM
-- Server version: 5.5.40-36.1
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `metalx_shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `cookbook`
--

CREATE TABLE IF NOT EXISTS `cookbook` (
  `id` int(11) NOT NULL,
  `pid` text NOT NULL,
  `title` text NOT NULL,
  `prep_time` text NOT NULL,
  `cook_time` text NOT NULL,
  `total_time` text NOT NULL,
  `yield` text NOT NULL,
  `description` text NOT NULL,
  `ingredients` text NOT NULL,
  `instructions` text NOT NULL,
  `comments` text NOT NULL,
  `category` text NOT NULL,
  `source` text NOT NULL,
  `tags` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cookbook`
--

INSERT INTO `cookbook` (`id`, `pid`, `title`, `prep_time`, `cook_time`, `total_time`, `yield`, `description`, `ingredients`, `instructions`, `comments`, `category`, `source`, `tags`) VALUES
(4, 'iZepe5Uj', 'Beef Stroganoff', '', '', '', '', '          ', '1/2 cup onion\r\n2 T olive oil\r\ncooking spray\r\n1/2-3/4 pound round steak\r\n8 oz sliced fresh mushrooms\r\n2 garlic cloves\r\n1 tablespoon ketchup\r\npepper\r\n1/2 cup red wine\r\n1/2 cup (1/2 small container) sour cream\r\n8 oz egg noodles\r\n1 can cream of mushroom soup\r\nparsley', 'Chop 1/2 cup of onion and mince 2 garlic cloves and put aside for later.\r\nTrim all fat off meat and slice into thin strips like the size of your pinky.\r\nSpray frying pan with cooking spray and heat to medium heat.\r\nAdd olive oil to light coat the pan (approximately 2 T of oil). \r\nAdd round steak and cook until browned, turning occasionally.\r\nAdd chopped onion and minced garlic to meat.\r\nAdd sliced mushrooms to meat.\r\nCook until onions are tender and clear.     \r\nTurn heat down to medium and add can of mushroom soup, ketchup and red wine (or substitute water for red wine).\r\nStir mixture until well blended, cover, and let simmer.\r\nIf mixture begins to boil, turn heat to low.\r\nStart cooking egg noodles, once cooked add back to the same pan they were cooked in.\r\nAdd sour cream to the meat mixture and sprinkle parsley over the top of the meat mixture.\r\nStir the meat mixture until well blended.\r\nPour meat mixture over the noodles and mix together until all of the noodles are evenly covered.', 'Uses large frying pan with lid', 'dinner', 'Mom', 'Beef pasta'),
(6, 'LrIUSOuw', 'Chocolatey Dessert', '', '40 min', '', '8-10 servings', '', '1.25 cups sugar, divided\r\n1 cup all-purpose flour\r\n7 Tbs Hershey''s cocoa, divided\r\n2 tsp baking powder\r\n1/4 tsp salt\r\n1/2 cup milk\r\n1/3 cup butter or margarine, melted\r\n1.5 tsp vanilla extract\r\n1/2 cup packed light brown sugar\r\n1.25 cups hot water', 'Heat oven to 350*\r\nIn medium mixing bowl combine 3/4 cup sugar, flour, 3 tablespoons cocoa, baking powder and salt. \r\nBlend in milk, melted butter and vanilla; beat until smooth. \r\nPour batter into square pan, 8x8x2 or 9x9x2 inches. \r\nIn small bowl combine remaining 1/2 cup sugar, brown sugar and remaining 4 tablespoons cocoa; sprinkle mixture evenly over batter. \r\nPour hot water over top; do not stir. \r\nBake 40 minutes or until center is almost set. \r\nLet stand 15 minutes; spoon into dessert dishes, spooning sauce from bottom of the pan over top.', '          ', 'dessert', 'Mom', 'Chocolate'),
(15, 'qnl5js9c', 'Crock Pot Pot Roast', '', '', '', '', '', 'One pot roast (any cut)\r\nCarrots\r\nRed Potatoes\r\nOnion\r\nMushrooms\r\n1 can cream of mushroom soup\r\n1 can golden mushroom soup\r\n1 packet dry Lipton onion soup mix\r\nBurgundy cooking wine (1 soup can full)\r\nSalt\r\nPepper\r\nGarlic Powder', 'Add meat and vegetables to crock pot\r\nSeason with salt, pepper, and garlic powder\r\nMix together rest of ingredients and pour over roast\r\nCook 3-4 hours on high or 6-8 hours on low. When its falling apart, its done!', '', 'dinner', 'Kristen Potter', 'Crock Pot'),
(16, 'idQ7uwZf', 'Spanish Rice Yellow Rice', '', '', '', '3-4 servings', '', '1 pound round steak\r\n10 oz package yellow rice\r\n4T olive oil\r\n1/2 cup onion\r\n2 cloves garlic\r\n1 cup sliced mushrooms\r\npepper\r\n1 cube beef bouillon\r\n10 oz frozen flowerets or cuts\r\n2 T corn starch\r\n', 'Chop 1/2 cup of onion and mince 2 cloves of garlic and put aside for later\r\nTrim fat off meat and slice into thin strips like the size of your pinky\r\nPut into a large frying pan with enough olive oil to lightly coat pan\r\nBrown meat, turning occasionally\r\nAdd onion and garlic to meat\r\nAdd mushrooms to meat\r\nCook until onions are clear and tender\r\nAdd 1.5 cups water, beef bouillon and dash of pepper to meat and stir well\r\nTurn heat up to high and bring mixture to a boil, turn heat to low and cover with lid\r\nStart yellow rice following package instructions (Cooks about 25 minutes)\r\nWhen there are 8 minutes left to cook the rice add broccoli to meat mixture.\r\nTurn heat back up on meat and get to boil then lower heat and cover\r\nMix 2T cornstarch with 4 T water in small bowl to a smooth paste and set aside\r\nCook meat another 4 minutes and check if broccoli is fork tender\r\nOnce broccoli is fork tender turn heat to medium and pour 1/2 cornstarch mixture slowly around perimeter of pan\r\nStir constantly checking consistency, add cornstarch 1 tsp at a time until desired thickness (like gravy)\r\nTurn heat back down to low and cover for 1 minute before serving\r\nServe over yellow rice', 'Requires 12&quot; frying pan with lid', 'dinner', 'Mom', ''),
(17, 'FxuBMyp1', 'Crock Pot Chicken and Dumplings', '', '4-6 hours', '', '', '', '2 boneless, skinless chicken breasts, halved\r\n1 Tbs butter\r\n1 can low sodium cream of mushroom soup\r\n1 can low sodium cream of chicken soup\r\n1 small onion, finely diced\r\n1 10 oz container of biscuit dough, cut up\r\n2 cans mixed vegetables, drained\r\n3/4 cup low sodium chicken broth\r\nParsley\r\nPepper', 'Combine all ingredients except biscuit dough in crock pot\r\nCook on high approximately 4 hours or low approximately 6 hours. \r\n60-90 minutes before its ready, add biscuit dough', '$12-$15', 'dinner', 'All Recipes http://allrecipes.com/Recipe/Slow-Cooker-Chicken-and-Dumplings/Detail.aspx?evt19=1&amp;amp;amp;referringHubId=1203&amp;amp;amp;scale=4&amp;amp;amp;ismetric=0', 'Ember'),
(20, 'PrlsfRan', 'Sesame-Barbecue Steaks', '', '', '45 minutes', '4-6 servings', '', '2 lb beef flank steak\r\n2 cloves of garlic\r\n2-inch piece fresh ginger root\r\n1/4 cup sugar\r\n1/2 cup reduced sodium soy sauce\r\n1/3 cup sesame oil\r\n3 tablespoons sesame seeds\r\n1/2 tsp crushed red pepper flakes\r\nlarge ziplock bag\r\n', 'Chop garlic.\r\nPeel ginger using edge of a spoon to scrape off the skin; grate ginger very finely, then measure\r\nPlace all ingredients (except steak) in ziplock bag; seal bag and squeeze to blend mixture. Add steak to bag; seal bag tightly and let stand at least 10 minutes (up to overnight) to marinate. \r\nPreheat grill pan (or grill) on medium high 2-3 minutes. Place steak in grill pan (or on grill), reserving marinade, grill 5-6 minutes on each side, turning often, or until steak is 145* (for medium rare).\r\nPlace reserved marinade in small saucepan and bring to a full boil. Reduce heat about one-half. Remove steaks from grill let stand 5 minutes before slicing. Slice meat diagonally against the grin; drizzle with sauce. ', '', 'dinner', 'Publix Aprons', 'grill');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cookbook`
--
ALTER TABLE `cookbook`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cookbook`
--
ALTER TABLE `cookbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
