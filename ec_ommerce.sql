-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2021 at 10:15 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ec ommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_pass`) VALUES
(1, 'admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(11) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`) VALUES
(0, '121.12.1', 3),
(23, '121.12.1', 3),
(22, '121.12.1', 3),
(25, '121.12.1', 3),
(28, '121.12.1', 3),
(32, '121.12.1', 3),
(35, '121.12.1', 3),
(41, '121.12.1', 3),
(37, '121.12.1', 3);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`) VALUES
(1, 'phones'),
(2, 'computers'),
(3, 'laptopses'),
(4, 'Books'),
(5, 'Programes');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `username`, `password`, `email`, `country`, `ip`) VALUES
(1, 'BASEL', '2334', 'basel@gaml.com', 'yemen', '121.12.1'),
(2, 'BASEL', '2334', 'ayyyyl@gaml.com', 'yemen', '121.12.1');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `p_title` varchar(255) NOT NULL,
  `p_category` int(11) NOT NULL,
  `p_img` varchar(255) NOT NULL,
  `p_price` varchar(255) NOT NULL,
  `p_desc` text NOT NULL,
  `p_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_title`, `p_category`, `p_img`, `p_price`, `p_desc`, `p_key`) VALUES
(21, 'OnePlus 8 Glacial Green', 1, '71InZW4fuvL._AC_UY218_.jpg', '380', 'Super Smooth Display – high resolution with a 90-Hz refresh rate – scrolling, swiping and switching through apps feels easy and effortless\r\n16,6 cm / 6.55” AMOLED Screen – for an impressive multimedia experience, instant touch-response, more speed and a fascinating clarity\r\nUltra Clear Triple Camera - 48MP main camera, 16MP ultra wide angle, 2MP macro and 16MP front camera, Nightscape 2.0, Studio Lightining, Super slow motion up to 460 FPS, RAW image, AI Scene Detection\r\n8 GB RAM and 128 GB internal storage for more performance, true speed and larger amounts of data/ High-performance processor Qualcomm Snapdragon 865 with 5G connectivity\r\nPower Battery 4300 mAh – Next generation WARP CHARGE 30T technology (ready-to-go in 20 minutes) fast charging / Android 10 operating system\r\nOnePlus with Alexa Built-in provides Hands-Free access to Alexa. Simply say “Alexa” to play music make a call control your smart home check the weather and more using just your voice. Stay up to date and accomplish every day tasks, all while on-the-go. Just ask - and Alexa will respond instantly. Download the Alexa app on your OnePlus device to start using Alexa Hands-Free today', 'phones'),
(22, 'OnePlus 8 Glacial Green', 1, '51uEwkqjZTL._AC_SL1040_.jpg', '400', '<h2>5G Unlocked Android Smartphone U.S Version, 8GB RAM+128GB Storage, 90Hz Fluid Display,Triple Camera, with Alexa Built-in,</h2>', 'phones'),
(23, 'Samsung Galaxy S21+ Plus', 1, 'Samsung Galaxy S21+ Plus.jpg', '400', 'PRO-GRADE CAMERA: Zoom in close with 30X Space Zoom, and take photos and videos like a pro with our easy-to-use, multi-lens camera.\r\nSHARP 8K VIDEO: Capture your life’s best moments in head-turning, super-smooth, cinema quality 8K Video.\r\nMULTIPLE WAYS TO RECORD: Create share-ready videos and GIFs with multi-cam recording and automatic, professional-style effects.\r\nHIGHER RESOLUTION: 64MP camera captures and shares detailed portraits, stunning landscapes and crisp close-ups.\r\nALL DAY INTELLIGENT BATTERY: Intuitively manages your cellphone’s usage, so you can go all day without charging.\r\nPOWER OF 5G: Experience next-generation connectivity for everything you love to do: more sharing, more gaming, more experiences.\r\nBattery power consumption depends on usage patterns and results may vary.', 'phone '),
(24, 'Samsung Galaxy A12', 1, '618LuqyIX6L._AC_UY218_.jpg', '300', '6.5\" 720 x 1600 (HD+) PLS TFT LCD Infinity-V Display, 5000mAh Battery, Fingerprint (side-mounted)</li><li>64GB ROM, 4GB RAM, Mediatek MT6765 Helio P35 (12nm), Octa-core, PowerVR GE8320, Android 10</li><li>Rear Camera: 48MP, F2.0 + 5MP, F2.2 + 2MP, F2.4 + 2MP, F2.4, Front Camera: 8MP, F2.2, Bluetooth 5.0</li><li>2G Bands: 850, 900, 1800, 1900MHz, 3G Bands: 850, 900, 1700, 1900, 4G LTE Bands: 1, 2, 3, 4, 5, 7, 8, 12, 17, 20, 28, 38, 40, 41 - Dual SIM</li><li>International Model - No Warranty in US. Compatible with Most GSM Carriers. Will NOT work with CDMA Carriers Such as Verizon, Sprint, Boost</li></ul>', 'phones'),
(28, 'Acer Aspire 5 Slim Laptop ', 3, '71+2H96GHZL._AC_SL1500_.jpg', '334', '<p>Acer Aspire 5 A515-46-R14K Slim Laptop</p>', 'laopto'),
(29, 'Lenovo Chromebook S330', 3, 'lenove.jpg', '500', 'roduct works and looks like new. Backed by the 90-day Amazon Renewed Guarantee.</strong></p><p>&nbsp;</p><p>- This pre-owned product has been professionally inspected, tested and cleaned by Amazon-qualified suppliers.<br>- There will be no visible cosmetic imperfections when held at an arm’s length.<br>- Products with batteries will exceed 80% capacity relative to new.<br>- Accessories may not be original, but will be compatible and fully functional. Product may come in generic box.<br>- This product is eligible for a replacement or refund within 90 days of receipt if you are not satisfied under the Amazon Renewed Guarantee.', 'laptop'),
(30, '2020 Flagship HP 14 Chromebook Laptop ', 3, '2020 Flagship HP 14 Chromebook Laptop.jpg', '600', ' This pre-owned product has been professionally inspected, tested and cleaned by Amazon-qualified suppliers.\r\n- There will be no visible cosmetic imperfections when held at an arm’s length.\r\n- Products with batteries will exceed 80% capacity relative to new.\r\n- Accessories may not be original, but will be compatible and fully functional. Product may come in generic box.\r\n- This product is eligible for a replacement or refund within 90 days of receipt if you are not satisfied under the Amazon Renewed Guarantee. See terms here.\r\nEquipped With The Most Powerful and Fast Intel Celeron Processor N Series, 1.1 GHz base clock, up to 2.6 GHz max boost clock, 4 MB cache, 4 Threads.\r\n14.0-inch diagonal HD SVA anti-glare micro-edge WLED-backlit display (1366 x 768) I Intel UHD Graphics 605 Integrated\r\n4GB RAM | 64GB eMMC Internal Storage\r\n2 SuperSpeed USB Type-C 5Gbps signaling rate (USB Power Delivery, DisplayPort 1.2); 1 SuperSpeed USB Type-A 5Gbps signaling rate; 1 headphone/microphone combo; 1 microSD media card reader\r\nGoogle Chrome OS, HP Wide Vision HD Camera with integrated dual array digital microphone, Full-size island-style keyboard, Realtek Wi-Fi 5 (2x2) and Bluetooth 5 combo MU-MIMO supported, Audio by B&O; Dual speakers ', 'loptop'),
(32, 'ASUS VivoBook 15', 3, 'ASUS VivoBook 15.jpg', '700', '15.6-inch Full HD 4 way NanoEdge bezel display with stunning 88% screen-to-body ratio>Powerful AMD Quad Core Ryzen 7 3700U Processor (2M Cache, up to 4.0Ghz)AMD Radeon Vega 10 graphic with Windows 10 Home 8GB DDR4 RAM and 512GB PCIe NVMe SSD Ergonomic chiclet backlit keyboard with fingerprint sensor activated via Windows Hello', 'laptop'),
(33, 'Acer Aspire C24-963-UA91 AIO Desktop', 2, 'Acer Aspire C24-963-UA91 AIO Desktop.jpg', '600', '10th Generation Intel Core i3-1005G1 Processor (Up to 3. 4GHz) 23.8\" Full HD (1920 x 1080) Widescreen Edge-to-Edge LED Back-lit Display 8GB DDR4 Memory and 512GB NVMe M. 2 SSD 802. 11ac Wi-Fi 5; Gigabit Ethernet LAN; Bluetooth 4. 2 Two Built-in Stereo Speaker; Built-in 1. 0MP HD Webcam; Wireless Keyboard and Mouse; Windows 10 Home', 'computer'),
(34, 'Lenovo IdeaCentre AIO 3, 24', 2, 'Lenovo IdeaCentre AIO 3, 24.jpg', '750', 'Accelerate everything you do with the IdeaCentre AIO 3. Powered by AMD Ryzen 5 4500U mobile processors with Radeon graphics, this all-in-one computer makes multitasking a breeze The FHD display gives you an outstanding viewing experience, from wide angles, too. The narrow bezels are just 9.5 mm at their thinnest for a huge 90% screen-to-body ratio for more screen and fewer distractions Work, entertainment, or video calls - the eye-catching IdeaCentre AIO 3 will look and perform great anywhere. With its stylish stand and base, this all-in-one desktop computer will save much-needed desk space Made to meet your needs, the IdeaCentre AIO 3 stand can be tilted to the right angle for your tasks. Plus, you can easily adjust the display to avoid light reflections For PC peripherals, such as a mouse, keyboard, and backup drive, the IdeaCentre AIO 3 has plenty of ports. In addition to USB 3.1 and 2.0, this all-in-one PC has a 3-in-1 card reader and HDMI out, should you need a second screen', 'computer'),
(35, 'CUK ROG Strix GA15DK Gaming Desktop ', 2, 'CUK ROG Strix GA15DK Gaming Desktop.jpg', '3000', 'Processor: AMD Ryzen 9 5900X Twelve Core Processor (24MB Cache, 3.7GHz-4.8GHz) 105W RAM: 2x32GB DDR4 2933MHz | Hard Drive: 1TB NVMe Solid State Drive + 3TB 7200rpm Hard Disk Drive Graphics Card: NVIDIA GeForce RTX 3070 8GB GDDR6 | Wireless: Gig + Wi-Fi 5 (802.11ax) Bluetooth 5.0 Power Supply: 700W PSU | Operating System: Windows 10 Home x64 | Gaming Keyboard and Mouse IncludedRYZEN 9 5900X / 64GB RAM / 3TB HDD Upgrades | 3-Year CUK Limited Warranty (View warranty section below for more details', 'computer'),
(36, 'CUK Stratos Micro Gamer PC', 2, 'CUK Stratos Micro Gamer PC.jpg', '3299', 'Processor: Intel Core i9-10900KF Ten Core Processor (20MB Cache, 3.7GHz-5.3GHz) 125W (Liquid Cooled)RAM: 64GB DDR4 3000MHz | Hard Drive: 1TB NVMe Solid State Drive + 2TB 7200rpm Hard Disk Drive Graphics: NVIDIA GeForce RTX 3080 10GB DDR6 | Motherboard: B560M Power Supply: 850W Gold Power Supply | Operating System: Windows 10 Home x64 Accessories: Wired LED Backlit USB Gaming Keyboard and Mouse Included | 3-Year CUK Limited Warranty', 'computer'),
(37, 'The Storyteller: Tales of Life and Music ', 4, 'The Storyteller.jpg', '14', '<p>Read by Dave Grohl. Features excerpts from five never before heard demos performed by Dave Grohl and an original story exclusive to The Storyteller audiobook.\r\n\r\nSo, I\'ve written a book.\r\n\r\nHaving entertained the idea for years, and even offered a few questionable opportunities (\"It\'s a piece of cake! Just do four hours of interviews, find someone else to write it, put your face on the cover, and voila!\") I have decided to tell these stories just as I have always done, in my own voice. The joy that I have felt from chronicling these tales is not unlike listening back to a song that I\'ve recorded and can\'t wait to share with the world, or reading a primitive journal entry from a stained notebook, or even hearing my voice bounce between the Kiss posters on my wall as a child. \r\n\r\nThis certainly doesn\'t mean that I\'m quitting my day job, but it does give me a place to shed a little light on what it\'s like to be a kid from Springfield, Virginia, walking through life while living out the crazy dreams I had as young musician. From hitting the road with Scream at 18 years old, to my time in Nirvana and the Foo Fighters, jamming with Iggy Pop or playing at the Academy Awards or dancing with AC/DC and the Preservation Hall Jazz Band, drumming for Tom Petty or meeting Sir Paul McCartney at Royal Albert Hall, bedtime stories with Joan Jett or a chance meeting with Little Richard, to flying halfway around the world for one epic night with my daughters...the list goes on. I look forward to focusing the lens through which I see these memories a little sharper for you with much excitement. </p>', 'book'),
(38, 'The High 5 Habit: Take Control of Your Life ', 4, 'The High 5 Habit.jpg', '13', '<p>n her global phenomenon The 5 Second Rule, Mel Robbins taught millions of people around the world the five second secret to motivation. Now she\'s back with another simple, proven tool you can use to take control of your life: The High 5 Habit.\r\n\r\nDon\'t let the title fool you. This isn\'t a book about high fiving everyone else in your life. You\'re already doing that. Cheering for your favorite teams. Celebrating your friends. Supporting the people you love as they go after what they want in life.</p>', 'book'),
(39, 'High Performance Habits: The 7 Habits of Exceptionally', 4, 'High Performance Habits.jpg', '13', '<p><strong>Discover the seven habits of exceptionally successful people to consistently achieve extraordinary results in life!</strong></p><p>So, what sets the most successful people in the world apart from the rest of the population? Many people often merely attribute their success in multiple areas of their life (whether it be finance, health, relationships, or happiness) to superficial factors such as luck, inheritance, talent, etc.</p><p>While some of these things may have played a part in some people’s rise to success and living an extraordinary life, it still fails to address the hidden driving determinant factor that actually makes it all happen.</p><p>After all, luck, inheritance, and talent are all things outside one’s own control, and is it true that there are also people out there with all the advantageous in the world yet still don’t amount to much success in their life? Of course there are, so we need to dive a bit deeper.</p><p>On the other hand, is it also true that there are people throughout history who have come from absolute rock bottom and had nothing, yet still went on to create massive amounts of success in their life? Well, of course this is the case, too!</p><p>So, what is it that are the few driving key factors that make people successful regardless of their economic background, talents, age, gender, nationality, or religion?</p><p>It is the consistent, conscious execution and practice of several success habits day in and day out that lead to exceptional results and, therefore, an exceptional life.</p><p>What we will be covering inside this audiobook are the seven habits of exceptionally successful people that allows them to live an extraordinary life of their own design and to accomplish the life-changing results they want on a consistent basis.</p>', 'book'),
(40, 'The 7 Habits of Highly Effective People', 4, 'The 7 Habits of Highly Effective People.jpg', '8', '<p><strong>The number one Most Influential Business Book of the 20th century&nbsp;</strong></p><p>One of the most inspiring and impactful books ever written, <i>The 7 Habits of Highly Effective People</i> has captivated listeners for nearly three decades. It has transformed the lives of presidents and CEOs, educators and parents - millions of people of all ages and occupations. Now, this 30th anniversary edition of the timeless classic commemorates the wisdom of the 7 Habits with modern additions from Sean Covey.&nbsp;</p><p>The 7 Habits have become famous and are integrated into everyday thinking by millions and millions of people. Why? Because they work! With Sean Covey’s added takeaways on how the habits can be used in our modern age, the wisdom of the 7 Habits will be refreshed for a new generation of leaders.&nbsp;</p><p>They include:&nbsp;</p><p>Habit 1: Be Proactive&nbsp;</p><p>Habit 2: Begin with the End in Mind&nbsp;</p><p>Habit 3: Put First Things First&nbsp;</p><p>Habit 4: Think Win/Win&nbsp;</p><p>Habit 5: Seek First to Understand, Then to Be Understood&nbsp;</p><p>Habit 6: Synergize&nbsp;</p><p>Habit 7: Sharpen the Saw&nbsp;</p><p>This beloved classic presents a principle-centered approach for solving both personal and professional problems. With penetrating insights and practical anecdotes, Stephen R. Covey reveals a step-by-step pathway for living with fairness, integrity, honesty, and human dignity - principles that give us the security to adapt to change and the wisdom and power to take advantage of the opportunities that change creates.</p>', 'book'),
(41, 'Cybersecurity Program Development for Business', 5, 'Cybersecurity Program Development.jpg', '30', '<p>This essential guide, with its dozens of examples and case studies, breaks down every element of the development and management of a cybersecurity program for the executive. From understanding the need, to core risk management principles, to threats, tools, roles, and responsibilities, this book walks the listener through each step of developing and implementing a cybersecurity program. From beginning to end, it\'s a thorough overview, but it can also function as a useful reference audiobook as individual questions and difficulties arise.</p>', 'program'),
(42, 'The Standard for Program Management ', 5, 'The Standard for Program Management.jpg', '60', '<p><i>The Standard for Program Management – Fourth Edition</i> differs from prior editions by focusing on the principles of good program management. Program activities have been realigned to program lifecycle phases rather than topics, and the first section was expanded to address the key roles of program manager, program sponsor and program management office. It has also been updated to better align with<i> PMI’s Governance of Portfolios, Programs, and Projects: A Practice Guide.</i></p>', 'program'),
(43, 'The Standard for Risk Management ', 5, 'The Standard for Risk Management.jpg', '60', '<p>This is an update and expansion upon PMI’s popular reference, <i>The Practice Standard for Project Risk Management. Risk Management </i>addresses the fact that certain events or conditions may occur with impacts on project, program, and portfolio objectives. This standard will: identify the core principles for risk management; describe the fundamentals of risk management and the environment within which it is carried out; define the risk management life cycle; and apply risk management principles to the portfolio, program, and project domains within the context of an enterprise risk management approach It is primarily written for portfolio, program, and project managers.</p>', 'programes'),
(44, 'The PMI Guide to Business Analysis', 5, 'The PMI Guide to Business Analysis.jpg', '55', '<p><i>The Standard for Business Analysis – First Edition</i> is a new PMI foundational standard, developed as a basis for business analysis for portfolio, program, and project management. This standard illustrates how project management processes and business analysis processes are complementary activities, where the primary focus of project management processes is the project and the primary focus of business analysis processes is the product. This is a process-based standard, aligned with <i>A Guide to the Project Management Body of Knowledge (PMBOK® Guide) – Sixth Edition</i>, and to be used as a standard framework contributing to the business analysis body of knowledge.</p>', 'programes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
