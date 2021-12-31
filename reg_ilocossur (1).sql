-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2021 at 11:44 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reg_ilocossur`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Name` varchar(70) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Name`, `Email`, `Username`, `Password`) VALUES
(1, 'Aldwin R. Panganiban', 'aldwinpanganiban@gmail.com', 'aldwinpanganiban', '0ed958b944c5624b83cc653a627d6461'),
(2, 'Carl William L. Lopez', 'carlwilliamlopez@gmail.com', 'carlwilliamlopez', 'a0df931e7a7f9b608c165504bde9b620');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Name` varchar(50) DEFAULT NULL,
  `Feedback` varchar(999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Name`, `Feedback`) VALUES
('Carl William', 'We will provide you the virtual experience of travelling to Ilocos Sur.'),
('Aldwin Panganiban', 'I hope you guys will love to explore Ilocos Sur through this site.'),
('Chritian Joe Lagrana', 'The website lets me feel the ambiance of Ilocos Sur. It is great!'),
('Ace Tan', 'Vigan is one of the best places that I have visited in my travel to Ilocos. It let me experience what history is. ');

-- --------------------------------------------------------

--
-- Table structure for table `residents`
--

CREATE TABLE `residents` (
  `ID` int(11) NOT NULL,
  `Name` varchar(70) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Sex` varchar(10) DEFAULT NULL,
  `Age` int(5) DEFAULT NULL,
  `Birthdate` varchar(20) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `ContactNo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `residents`
--

INSERT INTO `residents` (`ID`, `Name`, `Email`, `Username`, `Password`, `Sex`, `Age`, `Birthdate`, `Address`, `ContactNo`) VALUES
(1, 'Francis Klein Kenjie Austria', 'franciskleinkenjieaustria@gmail.com', 'franciskleinkenjie', '6f8a4627448509344c5eb01cdab17274', 'Male', 22, '05/10/1999', 'Ranget, Tagudin, Ilocos Sur', '09954397610'),
(2, 'Christian Joe L. Corpuz\r\n\r\n', 'christianjoecorpuz@gmail.com', 'christianjoelagrana', '7ff135854376850e9711bd75ce942e07', 'Male', 19, '01/01/2002', 'Del Pilar, Tagudin, Ilocos Sur', '09954397611'),
(3, 'Harold Denver D. Lapastora', 'harolddenverlapastora@gmail.com', 'harolddenverlapastora', 'c57f431343f100b441e268cc12babc34', 'Male', 19, '05/03/2002', 'Bitalag, Tagudin, Ilocos Sur', '099954397612'),
(4, 'Clarence Charles L. Lauta\r\n', 'clarencecharleslauta@gmail.com', 'clarencecharleslauta', '4f2757c3476046173a377330098d4193', 'Male', 19, '01/07/2002', 'Libtong, Tagudin, Ilocos Sur', '099543976513'),
(5, 'Jomari Charles L. Lauta', 'jomaricharleslauta@gmail.com', 'jomaricharleslauta', '20d85d9470c42145d60d74ea35a2f6bf', 'Male', 19, '01/07/2002', 'Libtong, Tagudin, Ilocos Sur', '09954397614'),
(6, 'Kiel A. Licudine', 'kiellicudine@gmail.com', 'kiellicudine', 'b00467603971b5f807ab4e1e9f5c661e', 'Male', 20, '07/15/2001', 'Pattiqui, Sta. Cruz, Ilocos Sur', '0995439615'),
(7, 'Kenneth O. Lite', 'kennethlite@gmail.com', 'kennethlite', '7ca955bd92ca8b00548ddf36d2e79217', 'Male', 20, '05/05/2001', 'Jardin, Tagudin, Ilocos Sur', '09954397616'),
(8, 'Francis Jericko M. Taeza', 'francisjerickotaeza@gmail.com', 'francisjerickotaeza', 'e1859b7ad68a2541a1034607fcccf18d', 'Male', 20, '12/10/2001', 'Becques, Tagudin, Ilocos Sur', '09954397617'),
(9, 'Rhyzen Ace Tan', 'rhyzenacetan@gmail.com', 'rhyzenacetan', 'edba4b98c329b39001730f8bcc1878fa', 'Male', 19, '07/13/2002', 'Quirino,Tagudin, Ilocos Sur', '09954397618'),
(10, 'Mae Ashley T. Camarillo', 'maeashleycamarillo@gmail.com', 'maeashleycamarillo', 'adff44c5102fca279fce7559abf66fee', 'Female', 20, '06/18/2001', 'Dalawa, Alilem, Ilocos Sur', '09954397619'),
(11, 'Karen Jessemae O. Latorre\r\n', 'karenjessemaelatorre@gmail', 'karenjessemaelatorre', '395cac1cbaedb414388777fdf751931f', 'Female', 20, '09/21/2001', 'Ranget, Tagudin, Ilocos Sur', '09954397619'),
(12, 'Rohanne Leine M. Licudine', 'rohanneleinelicudine@gmail.com', 'rohanneleinelicudine', 'a820e77eb3393297b9173f93e20f1778', 'Female', 20, '12/02/2001', 'Becques, Tagudin, Ilocos Sur', '09954397620'),
(13, 'Tracy Pearl C. Mayo', 'tracypearlmayo@gmail.com', 'tracypearlmayo', '5713a878bf70c6f6b95854af26c9aaf3', 'Female', 20, '10/16/2001', 'Del Pilar, Tagudin, Ilocos Sur', '09954397621'),
(14, 'Leah Marie B. Saringit', 'leahmariesaringit@gmail.com', 'leahmariesaringit', '7007e0cd908f10b946fe03b518d6bc1f', 'Female', 20, '08/30/2001', 'Poblacion, Alilem, Ilocos Sur', '09954397622'),
(15, 'Lea Mae P. Somera', 'leamaesomera@gmail.com', 'leamaesomera', 'e8cd3ec80df97071e8fae8a3565d310a', 'Female', 20, '08/03/2001', 'Dalawa, Alilem,Ilocos Sur', '09954397623');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ID Number` int(11) NOT NULL,
  `Name` varchar(70) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Contact_No` varchar(15) DEFAULT NULL,
  `Van` int(5) DEFAULT NULL,
  `Car` int(5) DEFAULT NULL,
  `Jeep` int(5) DEFAULT NULL,
  `Bus` int(5) DEFAULT NULL,
  `Motorcycle` int(5) DEFAULT NULL,
  `Days` int(7) DEFAULT NULL,
  `Destination` varchar(70) DEFAULT NULL,
  `Date_of_use` varchar(10) DEFAULT NULL,
  `Drivers` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ID Number`, `Name`, `Address`, `Contact_No`, `Van`, `Car`, `Jeep`, `Bus`, `Motorcycle`, `Days`, `Destination`, `Date_of_use`, `Drivers`) VALUES
(1, 'Raymark Vidal', 'Bangar, La Union', '09062345498', 1, 0, 1, 0, 2, 3, 'Candon', '2021-12-12', 0),
(2, 'Christian Joe Corpuz', 'Del Pilar, Tagudin Ilocos Sur', '09954397652', 1, 0, 0, 0, 0, 2, 'Santiago', '2021-11-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `ID` int(11) NOT NULL,
  `Name` varchar(70) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `Age` int(5) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `ContactNo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`ID`, `Name`, `Email`, `Username`, `Password`, `sex`, `Age`, `Address`, `ContactNo`) VALUES
(1, 'Raymark Vidal', 'raymarkvidal@gmail.com', 'raymarkvidal', '978e36f69a6007ac957fdec3483782c0', 'Male', 19, 'Paratong, Bangar, La Union', '09954397630'),
(2, 'Louise Enrico Caballo', 'louiseenricocaballo@gmail.com', 'louiseenricocaballo', '5b1b4dee9103f759fdb57197a78780a6', 'Male', 19, 'Paratong, Bangar, La Union', '09954397631'),
(3, 'Edrian Acosta', 'edrianacosta@gmail.com', 'edrianacosta', '7537d2e5dbd2e8717e36c093d6659fc3', 'Male', 19, 'Paratong, Bangar,La Union', '09954397632'),
(4, 'Jay-ar Tolentino', 'jayartolentino@gmail.com', 'jayartolentino', 'd858f3a18ecb31679430bc6ccfe1a38e', 'Male', 198, 'Mamatid, Cabuyao, Laguna', '09954397633'),
(5, 'Julius Lopez', 'juliuslopez@gmail.com', 'juliuslopez', '30e6d8432ce54710f9c09f305e7b9829', 'Male', 22, 'Mamatid, Cabuyao, Laguna', '09954397634'),
(6, 'Michael John Cabbat', 'michaeljohncabbat@gmail.com', 'michaeljohncabbat', '0acf4539a14b3aa27deeb4cbdf6e989f', 'Male', 23, 'Biday, San Fernando City, La Union', '09954397635'),
(7, 'Allen John Cabbat', 'allenjohncabbat@gmail.com', 'allenjohncabbat', 'a34c3d45b6018d3fd5560b103c2a00e2', 'Male', 18, 'Biday, San Fernando City, La Union', '09954397636'),
(8, 'Maureen Beau Pera', 'maureenbeaupera@gmial.com', 'maureenbeaupera', '23fac6d182d22ece806f28d7ba0264d4', 'Female', 19, 'Paratong, Bangar, La Union', '09954397637'),
(9, 'Michelle Lopez', 'michellelopez@gmail.com', 'michellelopez', '2345f10bb948c5665ef91f6773b3e455', 'Female', 22, 'Poblacion, Sudipen, La Union', '09954397638'),
(10, 'Angelica Lopez', 'angelicalopez@gmail.com', 'angelicalopez', '5903d9e9a8884c8c04ad16559446735a', 'Female', 17, 'San Jose, Sudipen, La Union', '09954397639'),
(11, 'Chelsea Keith Lagrana', 'chelseakeithlagrana@gmail.com', 'chelseakeithlagrana', '91cb315a6405bfcc30e2c4571ccfb8ce', 'Female', 20, 'Turo, Sudipen, La Union', '099543976340'),
(12, 'Wilma Lopez', 'wilmalopez@gmail.com', 'wilmalopez', '3a4dc1c90cbe590bee19ae952434f04c', 'Female', 26, 'Rissing, Bangar, La Union', '09954397641'),
(13, 'Noralyn Lopez', 'noralynlopez@gmail.com', 'noralynlopez', '9f2dc9f43fc4a585a58cf86c140bc2c5', 'Female', 27, 'San Cristobal, Bangar, La Union', '09954397642'),
(14, 'Avy Jane Panganiban', 'avyjanepanganiban@gmail.com', 'avyjanepanganiban', '99d979c3fa844173c84baedb4bbfd7c2', 'Female', 25, 'Sevilla, San Fernando, La Union', '09954397643'),
(15, 'Marga Lopez', 'margalopez@gmail.com', 'margalopez', '8e8402a76367b3404bbac7f235d451c7', 'Female', 19, 'Lingsat, San Fernando, La Union', '09954397644');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `residents`
--
ALTER TABLE `residents`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ID Number`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `residents`
--
ALTER TABLE `residents`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ID Number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
