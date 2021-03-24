-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2019 at 04:20 PM
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
-- Database: `phoebe_lo`
--
CREATE DATABASE IF NOT EXISTS `phoebe_lo` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `phoebe_lo`;

-- --------------------------------------------------------

--
-- Table structure for table `addfav`
--

DROP TABLE IF EXISTS `addfav`;
CREATE TABLE IF NOT EXISTS `addfav` (
  `favId` int(11) NOT NULL AUTO_INCREMENT,
  `appId` int(11) NOT NULL,
  `memId` int(11) NOT NULL,
  PRIMARY KEY (`favId`),
  KEY `memId` (`memId`),
  KEY `appId` (`appId`)
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addfav`
--

INSERT INTO `addfav` (`favId`, `appId`, `memId`) VALUES
(112, 9, 5),
(115, 7, 5),
(118, 5, 9);

-- --------------------------------------------------------

--
-- Table structure for table `apps`
--

DROP TABLE IF EXISTS `apps`;
CREATE TABLE IF NOT EXISTS `apps` (
  `appId` int(11) NOT NULL,
  `appTitle` varchar(255) NOT NULL,
  `appDescription` varchar(255) NOT NULL,
  `appGenres` varchar(255) NOT NULL,
  `appUpdatedDate` date NOT NULL,
  `appVersion` double NOT NULL,
  `appRate` double NOT NULL,
  `appPrice` double NOT NULL,
  `appImgUrl` varchar(255) NOT NULL,
  PRIMARY KEY (`appId`),
  UNIQUE KEY `appId` (`appId`),
  UNIQUE KEY `appId_2` (`appId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apps`
--

INSERT INTO `apps` (`appId`, `appTitle`, `appDescription`, `appGenres`, `appUpdatedDate`, `appVersion`, `appRate`, `appPrice`, `appImgUrl`) VALUES
(1, 'TikTok', 'TikTok is THE destination for mobile videos.', 'Social', '2019-11-03', 13.5, 0, 0, 'https://lh3.googleusercontent.com/2kdv4gGWKchMkThhxMYlWlkSouhx6BP50X1b7O7_Yl78fFCitAe3t4hLACuCyC9tsJA=s180-rw'),
(2, 'SkipTheDishes', 'Food delivery when you want — whatever you’re in the mood for.', 'Food & Drink', '2019-11-02', 5.4, 0, 0, 'https://lh3.googleusercontent.com/ZodYgV9xOAyZERnubuQlWQpmaAuU64wlstIHpDONaPf-3js6VxOmeMrzoGdA-47awA=s180-rw'),
(3, 'Netflix', 'Looking for the most talked about TV shows and movies from the around the world? They’re all on Netflix.', 'Entertainment', '2019-10-31', 7.2, 0, 0, 'https://lh3.googleusercontent.com/TBRwjS_qfJCSj1m7zZB93FnpJM5fSpMA_wUlFDLxWAb45T9RmwBvQd5cWR5viJJOhkI=s180-rw'),
(4, 'WhatsApp Messenger', 'WhatsApp Messenger is a FREE messaging app available for Android and other smartphones.', 'Communication', '2019-10-31', 2.2, 0, 0, 'https://lh3.googleusercontent.com/bYtqbOcTYOlgc6gqZ2rwb8lptHuwlNE75zYJu6Bn076-hTmvd96HH-6v7S0YUAAJXoJN=s180-rw'),
(5, 'Spotify', 'With Spotify, you can find music and play millions of songs and podcasts for free.', 'Music & Audio', '2019-11-01', 8.5, 0, 0, 'https://lh3.googleusercontent.com/UrY7BAZ-XfXGpfkeWg0zCCeo-7ras4DCoRalC_WXXWTK9q5b0Iw7B0YQMsVxZaNB7DM=s180-rw'),
(6, 'Snapchat', 'Snapchat is the most fun way to share the moment with friends and family', 'Social', '2019-10-31', 10.7, 0, 0, 'https://lh3.googleusercontent.com/KxeSAjPTKliCErbivNiXrd6cTwfbqUJcbSRPe_IBVK_YmwckfMRS1VIHz-5cgT09yMo=s180-rw'),
(7, 'Instagram', 'Connect with friends, share what you’re up to, or see what\'s new from others all over the world.', 'Social', '2019-10-29', 114, 0, 0, 'https://lh3.googleusercontent.com/2sREY-8UpjmaLDCTztldQf6u2RGUtuyf6VT5iyX3z53JS4TdvfQlX-rNChXKgpBYMw=s180-rw'),
(8, 'Pinterest', 'Discover over 100 billion possibilities for every part of your life, from new recipes and trending food images to creative design ideas. ', 'Social', '2019-11-01', 7.4, 0, 0, 'https://lh3.googleusercontent.com/dVsv8Hc4TOUeLFAahxR8KANg22W9dj2jBsTW1VHv3CV-5NCZjP9D9i2j5IpfVx2NTB8=s180-rw'),
(9, 'Facebook', 'Share updates and photos, engage with friends and Pages, and stay connected to communities important to you.', 'Social', '2019-10-30', 244, 0, 0, 'https://lh3.googleusercontent.com/ccWDU4A7fX1R24v-vvT480ySh26AYp97g1VrIB_FIdjRcuQB2JP2WdY7h_wVVAeSpg=s180-rw'),
(10, 'YouTube', 'See what the world is watching -- from the hottest music videos to what’s trending in gaming, entertainment, news, and more. ', 'Video Players & Editors', '2019-11-01', 14.4, 0, 0, 'https://lh3.googleusercontent.com/lMoItBgdPPVDJsNOVtP26EKHePkwBg-PkuY9NOrc-fumRtTFP4XhpUNk_22syN4Datc=s180-rw'),
(11, 'Tim Hortons', ' Enjoy the convenience of Order & Pay, earn and spend Tims™ Rewards, quickly customize your order in the app and find the latest targeted offers.', 'Food & Drink', '2019-10-23', 2.1, 0, 0, 'https://lh3.googleusercontent.com/zScFS2Y-H_crW7WbEXz4GbWGv6cuNOg7bWRFs0L19936utOhpDpoEc4qSG6jYNdUYnc=s180-rw'),
(12, 'Scotiabank Mobile Banking', 'The Scotiabank mobile app lets you manage, move, and monitor your money using your mobile phone.', 'Finance', '2019-11-01', 20.6, 0, 0, 'https://lh3.googleusercontent.com/6tmJ2mO2r3uwSkPqkL2Kb3SOM0rfio74jZg1uzTPecjX0006_T7O_fEz72HNDUBAozY=s180-rw'),
(13, 'CIBC Mobile Banking', 'Our priority is to keep bringing you simple, secure banking that fits your life.', 'Finance', '2019-10-24', 6.8, 0, 0, 'https://lh3.googleusercontent.com/fZ2SopPwR0s919VzW3xWYYpNkLRDiEN4RV9-cQg0ZzS5auuSeYV_Sflmg8ynz_PFKFg=s180-rw'),
(14, 'Sephora', 'Try on makeup and discover the best in beauty shopping, skincare, fragrance & more from your favourite brands.', 'Beauty', '2019-10-28', 19.8, 0, 0, 'https://lh3.googleusercontent.com/vClrtJhp-vYWJa3X1z8I_uKDtG5322CbL3f6puRGjecITal7cAyKP1Q8tRfa9KN6xFrd=s180-rw'),
(15, 'KakaoTalk', 'KakaoTalk is a fast & multifaceted messaging app. Send messages, photos, videos, voice notes and your location for free.', 'Communication', '2019-10-23', 8.6, 0, 0, 'https://lh3.googleusercontent.com/KwGCiEolNEeR9Q4RFOnDtb8Pvqs3LNiQEdE07wMCnoULO3yLUprHbGGLBYNEt8k7WJY=s180-rw'),
(16, 'Lynda', 'You can learn from thousands of courses taught by industry experts.', 'Education', '2019-01-09', 4.9, 0, 0, 'https://lh3.googleusercontent.com/BcUwMmSD5qucuCRgCaapU2ZSc1iDJQspjs7LF0djEIthCIXnTOWo8dmn7PhXPKEytSMu=s180-rw'),
(17, 'Brilliant', 'Master concepts by solving fun, challenging problems.', 'Education', '2019-10-31', 4.7, 0, 0, 'https://lh3.googleusercontent.com/JHuH5wLOn-ueoSd77k37tRkhyEbOZnYd82K20BcMzjD2lpI40jaGhE_JmTILUTuU7AU=s180-rw'),
(18, 'Oxford Dictionary of English', 'Master concepts by solving fun, challenging problems.', 'Books & Reference', '2019-10-18', 11.1, 0, 0, 'https://lh3.googleusercontent.com/Cu0--f70XV3OPaz1s7B8IIQ4jFN4ukydKrJtrhxMuFFF1RKLDizzehjyKmCv_o2GojM=s180-rw'),
(19, 'NPR One', 'NPR One is a whole new way to listen to stories, shows, and podcasts from NPR and your local public radio station.', 'News & Magazines', '2019-10-31', 1.4, 0, 0, 'https://lh3.googleusercontent.com/aOHHzJgUmVFMP6l_p3AtiMe6MHdMkMeh2HwQJX6-_iOcLpt4o6Xq1AuSqsUe755NUKg=s180-rw'),
(20, 'TED', 'Explore more than 3,000 TED Talks from remarkable people, by topic and mood, from tech and science to the surprises of your own psychology.', 'Education', '2019-09-18', 4.5, 0, 0, 'https://lh3.googleusercontent.com/w_bxOqm2p2BntxtMt_MQqwxRJhI4MQR0cu-Gn_oKkd9UXGG3FH8S2xRTkx9vtArBcp8l=s180-rw'),
(21, 'IMDb Movies & TV Shows', 'IMDb is the world’s most popular and authoritative source for movie, TV, and celebrity content.', 'Entertainment', '2019-10-09', 8.1, 0, 0, 'https://lh3.googleusercontent.com/8Wo6Eg3iUaLAz_tFaxGxW9QP3crthfIxXMILX84FMbQHgXHY2ewxf_lzYhpveG0iJQ=s180-rw'),
(22, 'TMZ', 'Get everything TMZ in the palm of your hand -- from 24/7 exclusives and breaking celebrity news to the hottest videos and galleries.', 'Entertainment', '2019-09-04', 4.4, 0, 0, 'https://lh3.googleusercontent.com/NfiUPWARoOHZI1bH67mgWsu5JLSj5Q2hF_j3qDcP6LwpSZ4NAFRmQzSCwvWVqGsjF2I=s180-rw'),
(23, 'StubHub', 'StubHub is the top destination for buying and selling tickets to the world\'s best events.', 'Events', '2019-11-01', 15.2, 0, 0, 'https://lh3.googleusercontent.com/uId-PJgZw4w2wPIA9hmX_d6Y-2X8QPGz0OnPUez6Y2NAl-3QNJYrKcSvx2y7Xveu_wE=s180-rw'),
(24, 'Ticketmaster', 'Ticketmaster gives you access to millions of live event tickets and makes it easy to buy, sell, transfer, and get in.', 'Events', '2019-10-24', 1.5, 0, 0, 'https://lh3.googleusercontent.com/KmWVboPY-BCCfiflJ-AYCPGBv86QLMsXsSpvQksC0DVR8ENV0lh-lwHnXrekpHwbQA=s180-rw'),
(25, 'PayPal', 'You can easily send and request money among friends and family, view your account activity, choose currencies to send around the globe, and more, with our improved mobile app experience.', 'Finance', '2019-10-28', 7.1, 0, 0, 'https://lh3.googleusercontent.com/Y2_nyEd0zJftXnlhQrWoweEvAy4RzbpDah_65JGQDKo9zCcBxHVpajYgXWFZcXdKS_o=s180-rw'),
(26, 'My CookBook', 'Store all your favorite recipes in one place! My CookBook is a recipe manager with search and import features.', 'Food & Drink', '2019-08-30', 5.1, 0, 0, 'https://lh3.googleusercontent.com/HdW_8yt4Suvb23Nl9iQxL10YxmyPfx2hjuKO5xIGr9NAl4mjcgpaAOXL31rKywl6Zg=s180-rw'),
(27, 'Nike Running', 'Nike Run Club has the tools you need to run better, including GPS run tracking; Audio-Guided Runs; weekly, monthly and custom distance Challenges;', 'Health & Fitness', '2019-11-01', 3.1, 0, 0, 'https://lh3.googleusercontent.com/J1z46Zsn3wlC2RSekq_iflMgR2e1ezR9-NH3Mqkc77Ji1k12Yal3w6zrYnGsJs5-Rfs=s180-rw'),
(28, '7 Minutes Workout', 'If you want to lose weight, get a flat tummy & strengthen your abdominal muscles, try 7 Minutes Workout and get a six pack while strengthening your core and toning your abs, with videos that show you how to perform each exercise.', 'Health & Fitness', '2019-02-02', 1.4, 0, 0, 'https://lh3.googleusercontent.com/KmF8GQgTqNj7UusnaKOVHFQK0oMqu-Qkh8_3CkxvWqgw8T472tIJ6S6iZtKHsufeS1U=s180-rw'),
(29, 'Kijiji', 'Buy and sell - and make money with ease - on Canada\'s largest classifieds app. Browse tons of local listings in our marketplace, in all kinds of categories.', 'Shopping', '2019-10-25', 8.4, 0, 0, 'https://lh3.googleusercontent.com/8_T72-ULjAKc6T9-9t8Ma4RkBR5O1MUjRCxH10ryarKuhx-FsVfeZJJk-HRMMGMIxQ=s180-rw'),
(30, 'Urban Outfitters', 'Urban Outfitters is a lifestyle retailer dedicated to inspiring customers through a unique combination of product, creativity and cultural understanding.', 'Shopping', '2019-10-21', 2.2, 0, 0, 'https://lh3.googleusercontent.com/lPKEePDzkwfh30tzp6WKRAqxzzFZ-Mw-rOZVDRWXuFxiPT6tG_3uZjPoANVqjqCmlao=s180-rw'),
(31, 'Amazon Shopping', 'The official Amazon Shopping app brings the best of online shopping to your Smartphone or Tablet devices so you can enjoy fast and free delivery* on millions of items.', 'Shopping', '2019-10-29', 18.2, 0, 0, 'https://lh3.googleusercontent.com/hgY6vh39bAeGCT4-wwycXZT1oL8Ko7zL97DlcqVGXy7HrB_yjb_hkQ599yZzCx0Trg=s180-rw'),
(32, 'LinkedIn', 'LinkedIn makes finding a job easy by connecting you with companies, friends, colleagues, industry experts within your industry.', 'Social', '2019-10-30', 4.1, 0, 0, 'https://lh3.googleusercontent.com/fqYJHtyzZzA4vacRzeJoB93QNvA5-mvR-8UB5oVLxdYDSTpfLp_KgYD4IqVGJUgFEJo=s180-rw'),
(33, 'Indeed Job Search', 'Indeed offers free access to millions of jobs from thousands of company websites and job boards.', 'Business', '2019-10-30', 31, 0, 0, 'https://lh3.googleusercontent.com/jj2z8DZ-Z5rV-Y4IY0ZklkuPjCchjeeisflFD0dU_zlJNpbUJkDTQpAMlc5rwutKFSU=s180-rw'),
(34, 'Shazam', 'Shazam is one of the world’s most popular apps, used by hundreds of millions of people each month to instantly identify music that’s playing and see what others are discovering.', 'Music & Audio', '2019-11-04', 9.4, 0, 0, 'https://lh3.googleusercontent.com/EhIjbN-_7eOO6XbcXAosX7elY-9CRxCOm5J6rLZ3pQGF7Yev6Av2kFdbxMH_RV2Hhnc=s180-rw'),
(35, 'VSCO', 'VSCO is a place to express yourself, make beautiful photo and video, and connect with a creative community.', 'Photography', '2019-11-01', 136, 0, 0, 'https://lh3.googleusercontent.com/46yC1VxphIx1BR_MEsfQsb7i9_H66pCsiyJErtrEtTspU6kVItyKRPDHRp1RaGOBOF4=s180-rw'),
(36, 'SCENE', 'The SCENE app gives you instant access to offers and rewards, your points balance and SCENE card all in one place. ', 'Entertainment', '2019-08-01', 1.6, 0, 0, 'https://lh3.googleusercontent.com/XqlNc3W0zhyfBbtjXLMGb5ZJZ4Dy0cpNcGMWNNw3j2WFmAO_aSilGEArCWX3bIWXCCCL=s180-rw'),
(37, 'Starbucks', 'The Starbucks® app is a convenient way to pay in store or skip the line and order ahead. Rewards are built right in, so you’ll collect Stars and start earning free drinks and food with every purchase.', 'Food & Drink', '2019-10-18', 5.1, 0, 0, 'https://lh3.googleusercontent.com/TaDRTYqVCNhlQBoNYsngSWnVJNkROBYfOQf3V1zCjq_eSnrW98yRkvD4TAGeuAPFs_7D=s180-rw'),
(38, 'Expedia', 'The Expedia app is your all-in-one travel companion. Save big on hotels, find the perfect flight, discover things to do, and get helpful trip reminders right when you need them.', 'Travel & Local', '2019-10-28', 19.4, 0, 0, 'https://lh3.googleusercontent.com/kkf2Siy556vDQE_iqF0rAfmtdnHSo75AjBpRIfvCIxMruZdfGeb24S1UFDvb4wTQESg=s180-rw'),
(39, 'Snapseed', 'Snapseed is a complete and professional photo editor developed by Google.', 'Photography', '2018-06-29', 2.2, 0, 0, 'https://lh3.googleusercontent.com/Rilq4obCk7XIl2Pjb8XT-Ydh_aI3hBNeFwro9fFXrIAuC-zPxCZ4feE4rx5fZ3jHNLw=s180-rw'),
(40, 'Hypocam', 'Hypocam is the ultimate black and white camera.', 'Photography', '2019-09-11', 2.2, 0, 0, 'https://lh3.googleusercontent.com/nt1uDFvdFohOqwEdLNd0W5G80dm85YFCjkPris1dYs6ohqaB4Z396ykDklcwDZdb906C=s180-rw'),
(41, 'Moment Pro Camera', 'We are @moment and Pro Camera is the app we’ve always wanted. Manual controls, better video, and quick access to the settings we need. It gives us the features of a DSLR but in a fast, easy to use camera app.', 'Photography', '2019-10-25', 3.1, 0, 4.99, 'https://lh3.googleusercontent.com/-PT4AGsvx9XLsripLJCX7jUXidADkLQE1Cmy1dlk_zBtFCBLkqOitzUMqQogtAzyL-E=s180-rw'),
(42, 'TouchRetouch', 'TouchRetouch is an app that offers you all the tools you need to efficiently remove unwanted content from your photos.', 'Photography', '2019-07-18', 4.3, 0, 2.59, 'https://lh3.googleusercontent.com/V1PYvRqsuL26IqJ180GUpR8uQvI0Tf6x2_pwk1IuxMEQhRhXtkpmEwQb0H4jco6hh6s=s180-rw'),
(43, 'Monument Valley', 'In Monument Valley you will manipulate impossible architecture and guide a silent princess through a stunningly beautiful world.', 'Games', '2019-09-18', 2.7, 0, 5.99, 'https://lh3.googleusercontent.com/kkm-E17Pwoy08iOkQc5nFScTH_9ly7cArfgO02OLiTjWy3wpehqltrXWKOsuAfVnUjM=s180-rw'),
(44, 'ProCam X ', 'ProCam X will turn your phone into professional camera wanna be, with full control over exposure, focus, white balance, ISO and another features like a professional camera, which can bring your mobile photography to the next level.', 'Photography', '2019-10-22', 1.1, 0, 6.59, 'https://lh3.googleusercontent.com/CRtSPP4R9iUoKokjJMPcC0phutkdgywnEVe3BUhe-TCt-d8Fr0IVyVPu2RVjrO5GpPoJ=s180-rw'),
(45, 'Minecraft', 'Explore infinite worlds and build everything from the simplest of homes to the grandest of castles. Play in creative mode with unlimited resources or mine deep into the world in survival mode, crafting weapons and armor to fend off dangerous mobs.', 'Games', '2019-10-23', 1.2, 0, 9.99, 'https://lh3.googleusercontent.com/VSwHQjcAttxsLE47RuS4PqpC4LT7lCoSjE7Hx5AW_yCxtDvcnsHHvm5CTuL5BPN-uRTP=s180-rw'),
(46, 'Mario Kart Tour', 'Mario and friends go global in this new Mario Kart as they race around courses inspired by real-world cities in addition to classic Mario Kart courses!', 'Games', '2019-10-18', 1.1, 0, 0, 'https://lh3.googleusercontent.com/GIVfqv-smMQwlbwTH-6vmZ-yZ0UT7LPfNuc0mONpLmljrXVArQ2T8mPQEb3KY1O93svA=s180-rw'),
(47, 'Hexa Puzzle Hero', 'Keep your brain active and sharp, analyze all the possibilites and try to finish all puzzles without using the hint button.', 'Games', '2019-09-27', 1.6, 0, 0, 'https://lh3.googleusercontent.com/hu3QnCxd1pujVBGX50VTciv5qFrQTyfwOx0qVXIYosN60HeGLH0O75ulr5S1yGXF7A=s180-rw'),
(48, 'Wordscapes', 'This modern word game combines the best of word searching and crosswords for tremendous brain challenging fun!', 'Games', '2019-11-02', 1.2, 0, 0, 'https://lh3.googleusercontent.com/-Ad4u11lc294U2kKK2kdszPOdkvVbW_Ww5mayw_nDajOPyAowQHrmDXXgXl3WvlDTps4=s180-rw'),
(49, 'Sudoku', 'Classic Sudoku is a logic-based number puzzle game and the goal is to place 1 to 9 digit numbers into each grid cell so that each number can only appear once in each row, each column and each mini-grid.', 'Games', '2019-10-22', 1.5, 0, 0, 'https://lh3.googleusercontent.com/kAUijYz3RsfAbIfN0QnT4lTyg9if4-tQwrdCxkdR6MBuakp3KK4Agd8SmmT-zCcFZTPM=s180-rw'),
(50, 'Pokemon GO', 'Join Trainers across the globe who are discovering Pokémon as they explore the world around them.', 'Games', '2019-11-04', 1.1, 0, 0, 'https://lh3.googleusercontent.com/wPfLmWBJwsPdBhsFXc8X4QZOOvePWjoOBLFXXCwyegjRwYOuabmG5cynthlW0HDgy9s=s180-rw'),
(51, 'Stardew Valley', 'Move to the countryside, and cultivate a new life in this award-winning open-ended farming RPG!', 'Games', '2019-10-21', 1.3, 0, 10.99, 'https://lh3.googleusercontent.com/He92papZcOmkgTi1sLHXQQb02aoyRtJ8ml96njM_cSAcpHhILvxMjhLix4mYEIKXPq4=s180-rw'),
(52, 'Don\'t Starve', 'Move to the countryside, and cultivate a new life in this award-winning open-ended farming RPG!', 'Games', '2019-10-16', 1.1, 0, 6.49, 'https://lh3.googleusercontent.com/oQW8dZKIIqSYxpPb4kWYbtnBS_aVCxHjT5Ied00IOeAysQPee-EmrT0hoEgxSdSxDA=s180-rw'),
(53, 'Mini Metro', 'Mini Metro is a game about designing a subway map for a growing city. Draw lines between stations and start your trains running.', 'Games', '2019-07-04', 2.4, 0, 1.59, 'https://lh3.googleusercontent.com/sYT8DvhamkCuurGsoSXv-2xz8pLsJ50rwQFWmnSVpGWwA45joHUktVSu06nbIW8_tw=s180-rw'),
(54, 'The Game of Life', 'Watch as board piece characters come to life and make their way through the various stages of life on this spectacular, 3D animated reworking of the familiar physical board.', 'Games', '2019-06-19', 2.2, 0, 3.99, 'https://lh3.googleusercontent.com/zxwxekIjiSwGDHGswuhq6mR-JJWvKNXzITjYTJxAqLCrjgO73SWmKG4voq9kmq6Cjw=s180-rw'),
(55, 'NBA 2K20', 'From 5-on-5 basketball with current or all-time great NBA teams to streetball in Blacktop, NBA 2K20 is filled with a variety of game modes for all players.', 'Games', '2019-10-31', 78, 0, 7.99, 'https://lh3.googleusercontent.com/YVSZZ5UZghNfMn6oG5L1zEny_Fxl-OEIXa6YYaoXX8WlLz1fNAnHI3Os8EVNOs0eilf-=s180-rw'),
(56, 'Hitman Sniper', 'Step into the shoes of Agent 47 in Hitman Sniper and discover the most compelling sniper experience on mobile.', 'Games', '2019-03-08', 1.7, 0, 1.49, 'https://lh3.googleusercontent.com/t8VJAWO7ioG9uGhkPOs7q7ZfKjigeMGFBq134VJKLVU_jKDn9VEz9Oqg1iXQ9axI7aE=s180-rw'),
(57, 'FINAL FANTASY TACTICS: WotL', 'Released as the Final Fantasy series\' first tactical RPG in 1997, Final Fantasy Tactics on Playstation went on to sell over 2.4 million copies worldwide.', 'Games', '2019-03-08', 1.7, 0, 16.99, 'https://lh3.googleusercontent.com/vSRvUoQmD_QvVxEaVeFLm-vykvaVLU7rPVSqH2r1zWO9kiASleMnw44wqxK5FozEIJk=s180-rw'),
(58, 'Assassin\'s Creed Identity', 'Explore the ITALIAN RENAISSANCE through the eyes of your OWN ASSASSIN, complete dozens of missions and unravel the epic mystery of The Crows.', 'Games', '2018-11-07', 2.8, 0, 2.99, 'https://lh3.googleusercontent.com/Kedo-c81Tcz9l_tit-d9Bprl-rMiIaQiCf4eoZO_hHXN7Z55T7aNeaZezrW1bg1uMfg=s180-rw'),
(59, 'Fruit Ninja Classic', 'Slice fruit, don’t slice bombs – that is all you need to know to get started with the addictive Fruit Ninja action!', 'Games', '2019-08-26', 2.4, 0, 0.99, 'https://lh3.googleusercontent.com/qLeN3Rsr1Fj-7WSEyZigZjOotPw29dNBaUJdDo0EpKZzGvlznrJOcFnO0K1SilWqralG=s180-rw'),
(60, 'Mega Mall Story2', 'A business management sim where you can make a mall that\'s right for you!', 'Games', '2019-10-03', 1.1, 0, 5.99, 'https://lh3.googleusercontent.com/MTxOuTPCjDI_rZQMzoRVESlQFo5sDGeUQSkFlOsvYoSvSDfChsRNHV5xsV0GOYJsgRaI=s180-rw');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `comId` int(11) NOT NULL AUTO_INCREMENT,
  `appId` int(11) NOT NULL,
  `memId` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comCreateDate` datetime NOT NULL,
  `memFirstName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`comId`),
  KEY `appId` (`appId`),
  KEY `memId` (`memId`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comId`, `appId`, `memId`, `comment`, `comCreateDate`, `memFirstName`) VALUES
(2, 4, 5, 'nice', '2019-11-12 05:21:49', '123'),
(3, 4, 5, 'nice', '2019-11-12 05:25:12', '123'),
(4, 4, 5, 'nice', '2019-11-12 05:25:26', '123'),
(5, 2, 5, 'great', '2019-11-12 05:40:45', '123'),
(6, 6, 9, 'great', '2019-11-12 07:57:08', 'phoebe'),
(8, 5, 5, 'good', '2019-11-12 08:49:02', '123'),
(9, 2, 5, 'good', '2019-11-12 08:50:14', '123'),
(13, 1, 10, 'good', '2019-11-26 06:23:53', 'p'),
(14, 5, 10, 'great', '2019-11-26 06:27:09', 'p'),
(15, 1, 10, 'very well', '2019-11-26 06:41:26', 'p'),
(16, 1, 10, 'great', '2019-11-27 02:37:41', 'p'),
(17, 1, 10, 'good', '2019-11-28 02:46:19', 'p'),
(18, 1, 10, 'very good', '2019-11-28 02:47:10', 'p'),
(19, 1, 10, 'good', '2019-11-28 03:05:23', 'p'),
(20, 1, 10, 'good', '2019-11-28 03:06:46', 'p'),
(21, 1, 10, 'well', '2019-11-28 03:14:50', 'p'),
(22, 1, 10, 'well', '2019-11-28 03:15:42', 'p'),
(23, 1, 10, 'good', '2019-11-28 03:17:57', 'p'),
(24, 1, 10, 'good\n', '2019-11-28 03:37:25', 'p'),
(25, 1, 10, 'lhukg', '2019-11-28 03:39:07', 'p'),
(26, 1, 10, 'good', '2019-11-28 03:42:46', 'p'),
(27, 1, 10, 'good', '2019-11-28 03:42:49', 'p'),
(28, 1, 10, 'Tell otheecommend it and why?', '2019-11-28 03:43:55', 'p'),
(29, 1, 10, 'Tell others what you think about this app. Would you recommend it and why?', '2019-11-28 03:44:20', 'p'),
(30, 1, 10, 'Tell others what you think about this app. Would you recommend it and why?', '2019-11-28 03:45:45', 'p'),
(31, 1, 10, 'Tell others what you think about this app. Would you recommend it and why?', '2019-11-28 03:46:54', 'p'),
(32, 1, 10, 'good', '2019-11-28 03:49:36', 'p'),
(33, 1, 10, 'good', '2019-11-28 03:52:39', 'p'),
(34, 1, 10, 'good', '2019-11-28 03:53:01', 'p'),
(35, 1, 10, 'gjbfy', '2019-11-28 03:53:50', 'p'),
(36, 1, 10, 'Tell others what you think about this app. Would you recommend it and why?', '2019-11-28 03:55:20', 'p'),
(37, 1, 10, 'Tell others what you think about this app. Would you recommend it and why?', '2019-11-28 03:56:21', 'p'),
(38, 1, 10, 'Tell others what you think about this app. Would you recommend it and why?', '2019-11-28 03:57:22', 'p'),
(39, 1, 10, 'Tell others what you think about this app. Would you recommend it and why?', '2019-11-28 04:00:38', 'p'),
(40, 1, 10, 'test', '2019-11-28 04:01:20', 'p'),
(41, 1, 10, 'Tell others what you think about this app. Would you recommend it and why?', '2019-11-28 04:03:43', 'p'),
(42, 2, 10, 'test', '2019-11-28 04:04:24', 'p'),
(43, 3, 10, 'test', '2019-11-28 04:04:36', 'p'),
(44, 2, 10, 'well', '2019-11-28 04:17:40', 'p'),
(45, 9, 10, 'good', '2019-11-28 04:34:38', 'p'),
(68, 9, 10, 'test', '2019-11-29 03:15:27', 'p'),
(69, 12, 5, 'good', '2019-11-29 03:44:25', '123'),
(71, 7, 5, 'good', '2019-11-29 12:30:38', '123');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `memId` int(11) NOT NULL AUTO_INCREMENT,
  `memFirstName` varchar(255) NOT NULL,
  `memLastName` varchar(255) NOT NULL,
  `memEmail` varchar(255) NOT NULL,
  `memPassword` varchar(255) NOT NULL,
  PRIMARY KEY (`memId`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`memId`, `memFirstName`, `memLastName`, `memEmail`, `memPassword`) VALUES
(1, 'Yuk', 'Chun', 'phoebelochunchun@yahoo.com.hk', '$2y$10$Tkz8PwCYpNKkQgz8e9VmJ.dbUipiwIgOMXJFfGOeN5t4Xq.fUklh2'),
(2, 'abc', 'cde', 'abc@email.com', '$2y$10$Up.emptVZZyGpiAerPnBzOMmvOxYKVW4pCXZAYqwzpmDeb9sgxMCi'),
(3, 'eee', 'fff', 'ef@email.com', '$2y$10$ogsMg6byhJjxEDQMYYceVOJ1XjgB/TIBTdenUYGxB9qaoBk5QoY7q'),
(4, 'phoebe', 'lo', 'phoebelo@sfu.ca', '$2y$10$g7kC2zlDbZLrOJlOg79GtOcIruWKp5kqcs4TzmAkhKNU0EwNP9Fzi'),
(5, '123', '123', '123@123', '$2y$10$cEUYcWB8LKHR9fu.YlcBJ.eZko6Lt614/OVNWnwgScHf4iHGrivMe'),
(6, '12', '12', '12@12', '$2y$10$FodBXkfKPkkhcxvcSKct/eYhFsY6hJjCc6PZuYHMWfWGUETTJPpwi'),
(7, 'Yuk', 'Chun', '111@222', '456'),
(8, 'Yuk', 'Chun', '234@234', '$2y$10$Qzgu5GjsW0sfH3K8PyVKHO1Mw8vbp0ByjP785DAwDrWft0trumJri'),
(9, 'phoebe', 'lo', '456@456', '$2y$10$ZPscoOh2VlX75HzFq7xFTOfoxhA2nw3reANm6SkoHIVmbE3GaamCe'),
(10, 'p', 'lo', '888@888', '$2y$10$rWXc3gDofqt9GNe2/Nr3X.gos7sF7pV9/dOlWK8ZgOp87fNLRWk9C');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

DROP TABLE IF EXISTS `ratings`;
CREATE TABLE IF NOT EXISTS `ratings` (
  `ratId` int(11) NOT NULL AUTO_INCREMENT,
  `memId` int(11) NOT NULL,
  `appId` int(11) NOT NULL,
  `rating` double NOT NULL,
  PRIMARY KEY (`ratId`),
  KEY `appId` (`appId`),
  KEY `memId` (`memId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`appId`) REFERENCES `apps` (`appId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`memId`) REFERENCES `members` (`memId`) ON DELETE CASCADE;

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_ibfk_1` FOREIGN KEY (`appId`) REFERENCES `apps` (`appId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ratings_ibfk_2` FOREIGN KEY (`memId`) REFERENCES `members` (`memId`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
