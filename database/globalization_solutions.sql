-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2021 at 04:51 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `globalization_solutions`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `user_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `created_by` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`user_id`, `user_name`, `email`, `password`, `created_by`) VALUES
(1, 'testuser', 'ashutoshmca18.jim@gmail.com', 'ashu123', '2021-06-02 10:21:44'),
(2, 'admin', 'as@gm.com', '12', '2021-06-06 10:49:43');

-- --------------------------------------------------------

--
-- Table structure for table `banner_section`
--

CREATE TABLE `banner_section` (
  `id` int(11) NOT NULL,
  `banner_url` text NOT NULL,
  `banner_heading` text NOT NULL,
  `banner_content` text NOT NULL,
  `service_heading` text NOT NULL,
  `service_content` text NOT NULL,
  `about_us_banner_url` text NOT NULL,
  `about_us_content` text NOT NULL,
  `today_url` text NOT NULL,
  `today_content` text NOT NULL,
  `modify_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner_section`
--

INSERT INTO `banner_section` (`id`, `banner_url`, `banner_heading`, `banner_content`, `service_heading`, `service_content`, `about_us_banner_url`, `about_us_content`, `today_url`, `today_content`, `modify_at`) VALUES
(1, 'assets/img/index_page.jpg', 'Making Global Expansion Simple And Affordable', 'Expanding to single country or multiple countries, we make it easy to manage and start operating in as little as 48 hrs.', 'Achieve Your Expansion Goals With Experts!', 'Globalization Solutions services cater to all your business needs and enable you to establish and grow your presence globally, with full support and assistance at every step of the way. Let our in-territory experts guide and walk you through all the complexities that come with global expansion.', 'assets/img/our_mission1.jpg', 'Award-winning global supplier of complete staffing solutions, payroll services, employer of record solutions, global project management, global hr and compliance management. Strengthening your business globally.', 'assets/img/contact-us1.png', 'Want to take on the global marketplace with confidence and peace of mind? Let us know we will care of the rest.', '2021-06-08 20:19:21');

-- --------------------------------------------------------

--
-- Table structure for table `contact_section`
--

CREATE TABLE `contact_section` (
  `id` int(11) NOT NULL,
  `banner_url` text NOT NULL,
  `banner_content` text NOT NULL,
  `banner_heading` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_section`
--

INSERT INTO `contact_section` (`id`, `banner_url`, `banner_content`, `banner_heading`) VALUES
(1, 'assets/img/Web-banner-12.jpg', 'Your trusted partner for global expansion.', 'Contact Us');

-- --------------------------------------------------------

--
-- Table structure for table `dropdown_header`
--

CREATE TABLE `dropdown_header` (
  `id` int(11) NOT NULL,
  `main_menu` text NOT NULL,
  `sub_menu` text NOT NULL,
  `page_url` text NOT NULL,
  `status` text NOT NULL,
  `icon` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dropdown_header`
--

INSERT INTO `dropdown_header` (`id`, `main_menu`, `sub_menu`, `page_url`, `status`, `icon`, `created_at`) VALUES
(4, 'About Us', 'Our Company', 'ourglobalreach', 'Enable', '', '2021-06-19 11:01:56'),
(6, 'About Us', 'Our Approach', 'Our Approach', 'Enable', '', '2021-06-19 11:04:31'),
(7, 'About Us', 'Leadership', 'Leadership', 'Enable', '', '2021-06-19 11:08:29'),
(8, 'About Us', 'Social responsibility', 'Socialresponsibility', 'Enable', '', '2021-06-19 11:17:49'),
(9, 'About Us', 'Diversity & inclusion', 'Diversity ', 'Enable', '', '2021-06-19 11:18:47'),
(10, 'About Us', 'Why work with us?', 'work-with-us', 'Enable', '', '2021-06-19 11:34:22');

-- --------------------------------------------------------

--
-- Table structure for table `globalreach_section`
--

CREATE TABLE `globalreach_section` (
  `id` int(11) NOT NULL,
  `banner_url` text NOT NULL,
  `banner_heading` text NOT NULL,
  `banner_content` text NOT NULL,
  `about_us_banner_url` text NOT NULL,
  `about_us_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `globalreach_section`
--

INSERT INTO `globalreach_section` (`id`, `banner_url`, `banner_heading`, `banner_content`, `about_us_banner_url`, `about_us_content`) VALUES
(1, 'assets/img/our-global-reach2.jpg', 'Our Global Presence', 'Find out more about how <br>Globalization Solutions <br>can                         help you grow                         your business.', 'assets/img/our-global-reach-about1.jpg', 'Find out more about how Globalization Solutionscan help you grow your business.');

-- --------------------------------------------------------

--
-- Table structure for table `global_billing`
--

CREATE TABLE `global_billing` (
  `id` int(11) NOT NULL,
  `banner_url` text NOT NULL,
  `banner_top1_heading` text NOT NULL,
  `banner_top2_heading` text NOT NULL,
  `banner_top3_heading` text NOT NULL,
  `status` text NOT NULL,
  `section2_heading` text NOT NULL,
  `section_content` text NOT NULL,
  `f_sidepanel_imageurl` text NOT NULL,
  `f_sidepanel_heading` text NOT NULL,
  `f_sidepanel_subheading` text NOT NULL,
  `f_sidepanel_content` text NOT NULL,
  `s_sidepanel_imageurl` text NOT NULL,
  `s_sidepanel_heading` text NOT NULL,
  `s_sidepanel_subheading` text NOT NULL,
  `s_sidepanel_content` text NOT NULL,
  `t_sidepanel_imageurl` text NOT NULL,
  `t_sidepanel_heading` text NOT NULL,
  `t_sidepanel_subheading` text NOT NULL,
  `t_sidepanel_content` text NOT NULL,
  `other_fhtml_heading` text NOT NULL,
  `other_fhtml_content` text NOT NULL,
  `other_shtml_heading` text NOT NULL,
  `other_shtml_content` text NOT NULL,
  `other_thtml_heading` text NOT NULL,
  `other_thtml_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `global_billing`
--

INSERT INTO `global_billing` (`id`, `banner_url`, `banner_top1_heading`, `banner_top2_heading`, `banner_top3_heading`, `status`, `section2_heading`, `section_content`, `f_sidepanel_imageurl`, `f_sidepanel_heading`, `f_sidepanel_subheading`, `f_sidepanel_content`, `s_sidepanel_imageurl`, `s_sidepanel_heading`, `s_sidepanel_subheading`, `s_sidepanel_content`, `t_sidepanel_imageurl`, `t_sidepanel_heading`, `t_sidepanel_subheading`, `t_sidepanel_content`, `other_fhtml_heading`, `other_fhtml_content`, `other_shtml_heading`, `other_shtml_content`, `other_thtml_heading`, `other_thtml_content`) VALUES
(1, 'assets/img/service-pages-images/mobility.jpg', 'Work visas on autopilot', 'Simplifying Staff Global Mobility & Immigration', 'Expedite employees move to international location and maximizing efficiency.', 'Enable', 'Multi Countries Billing & Payments No More Headache', 'Does your client want you to bill for services in one country while performing work in a second and possibly getting paid in a third? Is a customer asking your to do work all over the world but wants your invoices to reflect one currency that is not even your own? Do tax laws governing the import and export of services leave you feeling uncertain.  Globalization Solutions can help. Our excerpts understand the complexity of multijurisdictional billing and payments. Our team will handle it all for you. We allow you to make one payment, in the currency of your choice, and we will manage the rest.  Making mistakes in foreign billing, foreign tax treatment, treaties and international banking can be costly. In some cases, penalties can extend to criminal conduct. Avoid it all by letting Globalization Solutions handle it.', 'assets/img/inner-banner/eor/Global_Hiring_Made_Easy.jpg', 'Global Hiring Made Easy', 'Recognize and recruit the best talent', 'Globalization Solutions provides unbiased end-to-end assistance focusing on your worker\'s success while taking your business to newer heights internationally. Right from acquiring worldwide talent to immigration, personal support and payroll, our experienced management is prepared to support you with your in-country contract requirement whenever needed.<br>  We possess huge in-country amenities and ability to help you at every step of your journey for global acclamation and recognition.', 'assets/img/service-pages-images/Dedication_and_Deligation.jpg', 'Delegation and Dedication', 'Increase productivity with dedicated support', 'By enabling you to hire anywhere across the world without setting up an entity is what comes as our prime responsibility. Utilizing our services, you can ease off the worries of finding the right fit for your organization and save time and money. Outsourcing professional Employer of Record helps you enjoy risk mitigation, stay complaint and reduce costs.  By using our Employer of Record services, you delegate HR, employee management and payroll responsibilities to us and we dedicatedly fulfill the same. Our professional guidance and legal aid let you stay ahead of the game in international markets.', 'assets/img/service-pages-images/Save_on_Subsidary_cost.jpg', 'Saving on Setting up Subsidiary Cost', 'Save and expand', 'Setting up a subsidiary overseas or in another country not only costs a humongous amount of money but will also demand a lot of time. With Globalization solutions, you will not have to worry about all of this; we will reduce your chances of causing liabilities and also will take away the extra hassle so that you can focus on your business. With Globalization Solutions, you will save up to 60% of the cost that goes behind setting up a subsidiary overseas.', 'What is an Employer of Record?', 'A professional Employer of Record or EOR is the guiding source for business houses taking their operational global. Establishing your company in different countries requires sound knowledge of in-country requirements and we ensure to provide the same. From finding the best talents across the globe to on boarding them and from managing payroll to complying legalities, we take the journey together as your reliable partner. By assisting you hire in your desired country with efficiently and transparency, we let you enjoy the employee satisfaction and ease you off with worries. Win over the challenges of global business expansion with our professional Employer of Record assistance.', 'How Employer Of Record Works?', 'Globalization Solutions serves as your professional Employer of Record, shouldering all the responsibilities on your behalf. We take care of hiring employees, managing HR & payroll operations and assisting you with legal requirements on unfamiliar grounds. As your Employer of Record, we have all the required credentials to assist you with international employee management. While you stay responsible for routine business operations, we ensure to provide all the legal and professional assistance to make it smooth.', 'Globalization Solution step-by-step guide.', 'If you are looking forward to expanding your business overseas to make your brand a global name, then choosing Globalization solutions for our Employer of Record services is a great option. We will not only take away the burden from your shoulders but will also make sure your company achieves its business goals effortlessly.Here is how the Globalization solutions’ Employer of record services work.');

-- --------------------------------------------------------

--
-- Table structure for table `global_eor`
--

CREATE TABLE `global_eor` (
  `id` int(11) NOT NULL,
  `banner_url` text NOT NULL,
  `banner_top1_heading` text NOT NULL,
  `banner_top2_heading` text NOT NULL,
  `banner_top3_heading` text NOT NULL,
  `status` text NOT NULL,
  `section2_heading` text NOT NULL,
  `section_content` text NOT NULL,
  `f_sidepanel_imageurl` text NOT NULL,
  `f_sidepanel_heading` text NOT NULL,
  `f_sidepanel_subheading` text NOT NULL,
  `f_sidepanel_content` text NOT NULL,
  `s_sidepanel_imageurl` text NOT NULL,
  `s_sidepanel_heading` text NOT NULL,
  `s_sidepanel_subheading` text NOT NULL,
  `s_sidepanel_content` text NOT NULL,
  `t_sidepanel_imageurl` text NOT NULL,
  `t_sidepanel_heading` text NOT NULL,
  `t_sidepanel_subheading` text NOT NULL,
  `t_sidepanel_content` text NOT NULL,
  `other_fhtml_heading` text NOT NULL,
  `other_fhtml_content` text NOT NULL,
  `other_shtml_heading` text NOT NULL,
  `other_shtml_content` text NOT NULL,
  `other_thtml_heading` text NOT NULL,
  `other_thtml_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `global_eor`
--

INSERT INTO `global_eor` (`id`, `banner_url`, `banner_top1_heading`, `banner_top2_heading`, `banner_top3_heading`, `status`, `section2_heading`, `section_content`, `f_sidepanel_imageurl`, `f_sidepanel_heading`, `f_sidepanel_subheading`, `f_sidepanel_content`, `s_sidepanel_imageurl`, `s_sidepanel_heading`, `s_sidepanel_subheading`, `s_sidepanel_content`, `t_sidepanel_imageurl`, `t_sidepanel_heading`, `t_sidepanel_subheading`, `t_sidepanel_content`, `other_fhtml_heading`, `other_fhtml_content`, `other_shtml_heading`, `other_shtml_content`, `other_thtml_heading`, `other_thtml_content`) VALUES
(1, 'assets/img/service-pages-images/eor.jpeg', 'Employer of Record', 'Facilitating Quick International Hiring', 'Hire compliantly and  manage your Global teams with professional support!', 'Enable', 'Go Global Quick, Easy and Stay Compliant', 'Expansion of your brand overseas will require a lot of effort and time. It will demand you to break the barriers existing in the legal procedures of employment and the complexities associated with global, regional as well as local compliance. In order to do it efficiently, you need a trustable and efficient guide, like Employer of Record services, to let your business be successful on the foreign land as well.  Our Employer of record services is designed keeping in mind the sole purpose of nullifying the extreme costs that go behind the incorporation of legal entities. When you outsource your employment responsibilities to an Employer of Record, you are freeing your company from handling complicated processes associated with the laws and also reducing the chances of compliance risks and liabilities from arising. We pledge to present you with efficient employment services to uplift your business with the best workforce.  Let us become a trusted part of your business which you can rely on.', 'assets/img/inner-banner/eor/Global_Hiring_Made_Easy.jpg', 'Global Hiring Made Easy', 'Recognize and recruit the best talent', 'Globalization Solutions provides unbiased end-to-end assistance focusing on your worker\'s success while taking your business to newer heights internationally. Right from acquiring worldwide talent to immigration, personal support and payroll, our experienced management is prepared to support you with your in-country contract requirement whenever needed.<br>  We possess huge in-country amenities and ability to help you at every step of your journey for global acclamation and recognition.', 'assets/img/service-pages-images/Dedication_and_Deligation.jpg', 'Delegation and Dedication', 'Increase productivity with dedicated support', 'By enabling you to hire anywhere across the world without setting up an entity is what comes as our prime responsibility. Utilizing our services, you can ease off the worries of finding the right fit for your organization and save time and money. Outsourcing professional Employer of Record helps you enjoy risk mitigation, stay complaint and reduce costs.  By using our Employer of Record services, you delegate HR, employee management and payroll responsibilities to us and we dedicatedly fulfill the same. Our professional guidance and legal aid let you stay ahead of the game in international markets.', 'assets/img/service-pages-images/Save_on_Subsidary_cost.jpg', 'Saving on Setting up Subsidiary Cost', 'Save and expand', 'Setting up a subsidiary overseas or in another country not only costs a humongous amount of money but will also demand a lot of time. With Globalization solutions, you will not have to worry about all of this; we will reduce your chances of causing liabilities and also will take away the extra hassle so that you can focus on your business. With Globalization Solutions, you will save up to 60% of the cost that goes behind setting up a subsidiary overseas.', 'What is an Employer of Record?', 'A professional Employer of Record or EOR is the guiding source for business houses taking their operational global. Establishing your company in different countries requires sound knowledge of in-country requirements and we ensure to provide the same. From finding the best talents across the globe to on boarding them and from managing payroll to complying legalities, we take the journey together as your reliable partner. By assisting you hire in your desired country with efficiently and transparency, we let you enjoy the employee satisfaction and ease you off with worries. Win over the challenges of global business expansion with our professional Employer of Record assistance.', 'How Employer Of Record Works?', 'Globalization Solutions serves as your professional Employer of Record, shouldering all the responsibilities on your behalf. We take care of hiring employees, managing HR & payroll operations and assisting you with legal requirements on unfamiliar grounds. As your Employer of Record, we have all the required credentials to assist you with international employee management. While you stay responsible for routine business operations, we ensure to provide all the legal and professional assistance to make it smooth.', 'Globalization Solution step-by-step guide.', 'If you are looking forward to expanding your business overseas to make your brand a global name, then choosing Globalization solutions for our Employer of Record services is a great option. We will not only take away the burden from your shoulders but will also make sure your company achieves its business goals effortlessly.Here is how the Globalization solutions’ Employer of record services work.');

-- --------------------------------------------------------

--
-- Table structure for table `global_hr`
--

CREATE TABLE `global_hr` (
  `id` int(11) NOT NULL,
  `banner_url` text NOT NULL,
  `banner_top1_heading` text NOT NULL,
  `banner_top2_heading` text NOT NULL,
  `banner_top3_heading` text NOT NULL,
  `status` text NOT NULL,
  `section2_heading` text NOT NULL,
  `section_content` text NOT NULL,
  `f_sidepanel_imageurl` text NOT NULL,
  `f_sidepanel_heading` text NOT NULL,
  `f_sidepanel_subheading` text NOT NULL,
  `f_sidepanel_content` text NOT NULL,
  `s_sidepanel_imageurl` text NOT NULL,
  `s_sidepanel_heading` text NOT NULL,
  `s_sidepanel_subheading` text NOT NULL,
  `s_sidepanel_content` text NOT NULL,
  `t_sidepanel_imageurl` text NOT NULL,
  `t_sidepanel_heading` text NOT NULL,
  `t_sidepanel_subheading` text NOT NULL,
  `t_sidepanel_content` text NOT NULL,
  `other_fhtml_heading` text NOT NULL,
  `other_fhtml_content` text NOT NULL,
  `other_shtml_heading` text NOT NULL,
  `other_shtml_content` text NOT NULL,
  `other_thtml_heading` text NOT NULL,
  `other_thtml_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `global_hr`
--

INSERT INTO `global_hr` (`id`, `banner_url`, `banner_top1_heading`, `banner_top2_heading`, `banner_top3_heading`, `status`, `section2_heading`, `section_content`, `f_sidepanel_imageurl`, `f_sidepanel_heading`, `f_sidepanel_subheading`, `f_sidepanel_content`, `s_sidepanel_imageurl`, `s_sidepanel_heading`, `s_sidepanel_subheading`, `s_sidepanel_content`, `t_sidepanel_imageurl`, `t_sidepanel_heading`, `t_sidepanel_subheading`, `t_sidepanel_content`, `other_fhtml_heading`, `other_fhtml_content`, `other_shtml_heading`, `other_shtml_content`, `other_thtml_heading`, `other_thtml_content`) VALUES
(1, 'assets/img/main-banner/hr-management.jpeg', 'Global HR & Compliance Management', 'Effective Management of Global HR Compliance Risk', 'Stay compliant to HR and Payroll while outsourcing us!', 'disable', 'A Strategic Approach To HR Compliance Management', 'Having an efficient HR department is an utmost necessity regardless of the position of your company. The rapidly changing employment laws and federal rules across countries put companies in a huge dilemma who are looking forward to expanding their operations overseas. In such a situation outsourcing the responsibilities to manage HR and compliance is the best option.\r\n\r\nWith Globalization Solutions Enhance your workforce and uplift your compliance management systems. We make sure that your work is done on time by maintaining the integrity of your brand name. We also make sure your employment and other aspects are looked after with proper care, and your company\'s legal obligations are also met with efficiency. We save your time and effort with our top-notch in-house HR team.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `global_mobility`
--

CREATE TABLE `global_mobility` (
  `id` int(11) NOT NULL,
  `banner_url` text NOT NULL,
  `banner_top1_heading` text NOT NULL,
  `banner_top2_heading` text NOT NULL,
  `banner_top3_heading` text NOT NULL,
  `status` text NOT NULL,
  `section2_heading` text NOT NULL,
  `section_content` text NOT NULL,
  `f_sidepanel_imageurl` text NOT NULL,
  `f_sidepanel_heading` text NOT NULL,
  `f_sidepanel_subheading` text NOT NULL,
  `f_sidepanel_content` text NOT NULL,
  `s_sidepanel_imageurl` text NOT NULL,
  `s_sidepanel_heading` text NOT NULL,
  `s_sidepanel_subheading` text NOT NULL,
  `s_sidepanel_content` text NOT NULL,
  `t_sidepanel_imageurl` text NOT NULL,
  `t_sidepanel_heading` text NOT NULL,
  `t_sidepanel_subheading` text NOT NULL,
  `t_sidepanel_content` text NOT NULL,
  `other_fhtml_heading` text NOT NULL,
  `other_fhtml_content` text NOT NULL,
  `other_shtml_heading` text NOT NULL,
  `other_shtml_content` text NOT NULL,
  `other_thtml_heading` text NOT NULL,
  `other_thtml_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `global_mobility`
--

INSERT INTO `global_mobility` (`id`, `banner_url`, `banner_top1_heading`, `banner_top2_heading`, `banner_top3_heading`, `status`, `section2_heading`, `section_content`, `f_sidepanel_imageurl`, `f_sidepanel_heading`, `f_sidepanel_subheading`, `f_sidepanel_content`, `s_sidepanel_imageurl`, `s_sidepanel_heading`, `s_sidepanel_subheading`, `s_sidepanel_content`, `t_sidepanel_imageurl`, `t_sidepanel_heading`, `t_sidepanel_subheading`, `t_sidepanel_content`, `other_fhtml_heading`, `other_fhtml_content`, `other_shtml_heading`, `other_shtml_content`, `other_thtml_heading`, `other_thtml_content`) VALUES
(1, 'assets/img/service-pages-images/eor.jpeg', 'Employer of Record', 'Facilitating Quick International Hiring', 'Hire compliantly and  manage your Global teams with professional support!', 'Enable', 'Go Global Quick, Easy and Stay Compliant', 'Expansion of your brand overseas will require a lot of effort and time. It will demand you to break the barriers existing in the legal procedures of employment and the complexities associated with global, regional as well as local compliance. In order to do it efficiently, you need a trustable and efficient guide, like Employer of Record services, to let your business be successful on the foreign land as well.  Our Employer of record services is designed keeping in mind the sole purpose of nullifying the extreme costs that go behind the incorporation of legal entities. When you outsource your employment responsibilities to an Employer of Record, you are freeing your company from handling complicated processes associated with the laws and also reducing the chances of compliance risks and liabilities from arising. We pledge to present you with efficient employment services to uplift your business with the best workforce.  Let us become a trusted part of your business which you can rely on.', 'assets/img/inner-banner/eor/Global_Hiring_Made_Easy.jpg', 'Global Hiring Made Easy', 'Recognize and recruit the best talent', 'Globalization Solutions provides unbiased end-to-end assistance focusing on your worker\'s success while taking your business to newer heights internationally. Right from acquiring worldwide talent to immigration, personal support and payroll, our experienced management is prepared to support you with your in-country contract requirement whenever needed.<br>  We possess huge in-country amenities and ability to help you at every step of your journey for global acclamation and recognition.', 'assets/img/service-pages-images/Dedication_and_Deligation.jpg', 'Delegation and Dedication', 'Increase productivity with dedicated support', 'By enabling you to hire anywhere across the world without setting up an entity is what comes as our prime responsibility. Utilizing our services, you can ease off the worries of finding the right fit for your organization and save time and money. Outsourcing professional Employer of Record helps you enjoy risk mitigation, stay complaint and reduce costs.  By using our Employer of Record services, you delegate HR, employee management and payroll responsibilities to us and we dedicatedly fulfill the same. Our professional guidance and legal aid let you stay ahead of the game in international markets.', 'assets/img/service-pages-images/Save_on_Subsidary_cost.jpg', 'Saving on Setting up Subsidiary Cost', 'Save and expand', 'Setting up a subsidiary overseas or in another country not only costs a humongous amount of money but will also demand a lot of time. With Globalization solutions, you will not have to worry about all of this; we will reduce your chances of causing liabilities and also will take away the extra hassle so that you can focus on your business. With Globalization Solutions, you will save up to 60% of the cost that goes behind setting up a subsidiary overseas.', 'What is an Employer of Record?', 'A professional Employer of Record or EOR is the guiding source for business houses taking their operational global. Establishing your company in different countries requires sound knowledge of in-country requirements and we ensure to provide the same. From finding the best talents across the globe to on boarding them and from managing payroll to complying legalities, we take the journey together as your reliable partner. By assisting you hire in your desired country with efficiently and transparency, we let you enjoy the employee satisfaction and ease you off with worries. Win over the challenges of global business expansion with our professional Employer of Record assistance.', 'How Employer Of Record Works?', 'Globalization Solutions serves as your professional Employer of Record, shouldering all the responsibilities on your behalf. We take care of hiring employees, managing HR & payroll operations and assisting you with legal requirements on unfamiliar grounds. As your Employer of Record, we have all the required credentials to assist you with international employee management. While you stay responsible for routine business operations, we ensure to provide all the legal and professional assistance to make it smooth.', 'Globalization Solution step-by-step guide.', 'If you are looking forward to expanding your business overseas to make your brand a global name, then choosing Globalization solutions for our Employer of Record services is a great option. We will not only take away the burden from your shoulders but will also make sure your company achieves its business goals effortlessly.Here is how the Globalization solutions’ Employer of record services work.');

-- --------------------------------------------------------

--
-- Table structure for table `global_payroll`
--

CREATE TABLE `global_payroll` (
  `id` int(11) NOT NULL,
  `banner_url` text NOT NULL,
  `banner_top1_heading` text NOT NULL,
  `banner_top2_heading` text NOT NULL,
  `banner_top3_heading` text NOT NULL,
  `status` text NOT NULL,
  `section2_heading` text NOT NULL,
  `section_content` text NOT NULL,
  `f_sidepanel_imageurl` text NOT NULL,
  `f_sidepanel_heading` text NOT NULL,
  `f_sidepanel_subheading` text NOT NULL,
  `f_sidepanel_content` text NOT NULL,
  `s_sidepanel_imageurl` text NOT NULL,
  `s_sidepanel_heading` text NOT NULL,
  `s_sidepanel_subheading` text NOT NULL,
  `s_sidepanel_content` text NOT NULL,
  `t_sidepanel_imageurl` text NOT NULL,
  `t_sidepanel_heading` text NOT NULL,
  `t_sidepanel_subheading` text NOT NULL,
  `t_sidepanel_content` text NOT NULL,
  `other_fhtml_heading` text NOT NULL,
  `other_fhtml_content` text NOT NULL,
  `other_shtml_heading` text NOT NULL,
  `other_shtml_content` text NOT NULL,
  `other_thtml_heading` text NOT NULL,
  `other_thtml_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `global_payroll`
--

INSERT INTO `global_payroll` (`id`, `banner_url`, `banner_top1_heading`, `banner_top2_heading`, `banner_top3_heading`, `status`, `section2_heading`, `section_content`, `f_sidepanel_imageurl`, `f_sidepanel_heading`, `f_sidepanel_subheading`, `f_sidepanel_content`, `s_sidepanel_imageurl`, `s_sidepanel_heading`, `s_sidepanel_subheading`, `s_sidepanel_content`, `t_sidepanel_imageurl`, `t_sidepanel_heading`, `t_sidepanel_subheading`, `t_sidepanel_content`, `other_fhtml_heading`, `other_fhtml_content`, `other_shtml_heading`, `other_shtml_content`, `other_thtml_heading`, `other_thtml_content`) VALUES
(1, 'assets/img/service-pages-images/eor.jpeg', 'Global Payroll', 'Effective Global Payroll System', 'Ensure prompt, meticulous salary distribution to foreign Employees.', 'Enable', 'Overcome Global Payroll Hardships', 'Whether your business has one single employee - or many thousands around the world - we provide you with a fully managed, standardised payroll service wherever you operate. We offer local service delivery that’s underpinned by regulatory compliance expertise, ensuring that your payroll is processed accurately and on time, every single month and in all countries, while you remain in control locally.  With Globalization Solutions, you benefit from centralised coordination and oversight, and a strategic point of contact that allows you to maximise efficiency, enhance visibility and streamline communications. You also get direct access to our in-country teams and all aspects of our global Payroll services.', 'assets/img/inner-banner/eor/Global_Hiring_Made_Easy.jpg', 'Global Hiring Made Easy', 'Recognize and recruit the best talent', 'Globalization Solutions provides unbiased end-to-end assistance focusing on your worker\'s success while taking your business to newer heights internationally. Right from acquiring worldwide talent to immigration, personal support and payroll, our experienced management is prepared to support you with your in-country contract requirement whenever needed.<br>  We possess huge in-country amenities and ability to help you at every step of your journey for global acclamation and recognition.', 'assets/img/service-pages-images/Dedication_and_Deligation.jpg', 'Delegation and Dedication', 'Increase productivity with dedicated support', 'By enabling you to hire anywhere across the world without setting up an entity is what comes as our prime responsibility. Utilizing our services, you can ease off the worries of finding the right fit for your organization and save time and money. Outsourcing professional Employer of Record helps you enjoy risk mitigation, stay complaint and reduce costs.  By using our Employer of Record services, you delegate HR, employee management and payroll responsibilities to us and we dedicatedly fulfill the same. Our professional guidance and legal aid let you stay ahead of the game in international markets.', 'assets/img/service-pages-images/Save_on_Subsidary_cost.jpg', 'Saving on Setting up Subsidiary Cost', 'Save and expand', 'Setting up a subsidiary overseas or in another country not only costs a humongous amount of money but will also demand a lot of time. With Globalization solutions, you will not have to worry about all of this; we will reduce your chances of causing liabilities and also will take away the extra hassle so that you can focus on your business. With Globalization Solutions, you will save up to 60% of the cost that goes behind setting up a subsidiary overseas.', 'What is an Employer of Record?', 'A professional Employer of Record or EOR is the guiding source for business houses taking their operational global. Establishing your company in different countries requires sound knowledge of in-country requirements and we ensure to provide the same. From finding the best talents across the globe to on boarding them and from managing payroll to complying legalities, we take the journey together as your reliable partner. By assisting you hire in your desired country with efficiently and transparency, we let you enjoy the employee satisfaction and ease you off with worries. Win over the challenges of global business expansion with our professional Employer of Record assistance.', 'How Employer Of Record Works?', 'Globalization Solutions serves as your professional Employer of Record, shouldering all the responsibilities on your behalf. We take care of hiring employees, managing HR & payroll operations and assisting you with legal requirements on unfamiliar grounds. As your Employer of Record, we have all the required credentials to assist you with international employee management. While you stay responsible for routine business operations, we ensure to provide all the legal and professional assistance to make it smooth.', 'Globalization Solution step-by-step guide.', 'If you are looking forward to expanding your business overseas to make your brand a global name, then choosing Globalization solutions for our Employer of Record services is a great option. We will not only take away the burden from your shoulders but will also make sure your company achieves its business goals effortlessly.Here is how the Globalization solutions’ Employer of record services work.');

-- --------------------------------------------------------

--
-- Table structure for table `global_peo`
--

CREATE TABLE `global_peo` (
  `id` int(11) NOT NULL,
  `banner_url` text NOT NULL,
  `banner_top1_heading` text NOT NULL,
  `banner_top2_heading` text NOT NULL,
  `banner_top3_heading` text NOT NULL,
  `status` text NOT NULL,
  `section2_heading` text NOT NULL,
  `section_content` text NOT NULL,
  `f_sidepanel_imageurl` text NOT NULL,
  `f_sidepanel_heading` text NOT NULL,
  `f_sidepanel_subheading` text NOT NULL,
  `f_sidepanel_content` text NOT NULL,
  `s_sidepanel_imageurl` text NOT NULL,
  `s_sidepanel_heading` text NOT NULL,
  `s_sidepanel_subheading` text NOT NULL,
  `s_sidepanel_content` text NOT NULL,
  `t_sidepanel_imageurl` text NOT NULL,
  `t_sidepanel_heading` text NOT NULL,
  `t_sidepanel_subheading` text NOT NULL,
  `t_sidepanel_content` text NOT NULL,
  `other_fhtml_heading` text NOT NULL,
  `other_fhtml_content` text NOT NULL,
  `other_shtml_heading` text NOT NULL,
  `other_shtml_content` text NOT NULL,
  `other_thtml_heading` text NOT NULL,
  `other_thtml_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `global_peo`
--

INSERT INTO `global_peo` (`id`, `banner_url`, `banner_top1_heading`, `banner_top2_heading`, `banner_top3_heading`, `status`, `section2_heading`, `section_content`, `f_sidepanel_imageurl`, `f_sidepanel_heading`, `f_sidepanel_subheading`, `f_sidepanel_content`, `s_sidepanel_imageurl`, `s_sidepanel_heading`, `s_sidepanel_subheading`, `s_sidepanel_content`, `t_sidepanel_imageurl`, `t_sidepanel_heading`, `t_sidepanel_subheading`, `t_sidepanel_content`, `other_fhtml_heading`, `other_fhtml_content`, `other_shtml_heading`, `other_shtml_content`, `other_thtml_heading`, `other_thtml_content`) VALUES
(1, 'assets/img/service-pages-images/eor.jpeg', 'Employer of Record', 'Facilitating Quick International Hiring', 'Hire compliantly and  manage your Global teams with professional support!', 'Enable', 'Go Global Quick, Easy and Stay Compliant', 'Expansion of your brand overseas will require a lot of effort and time. It will demand you to break the barriers existing in the legal procedures of employment and the complexities associated with global, regional as well as local compliance. In order to do it efficiently, you need a trustable and efficient guide, like Employer of Record services, to let your business be successful on the foreign land as well.  Our Employer of record services is designed keeping in mind the sole purpose of nullifying the extreme costs that go behind the incorporation of legal entities. When you outsource your employment responsibilities to an Employer of Record, you are freeing your company from handling complicated processes associated with the laws and also reducing the chances of compliance risks and liabilities from arising. We pledge to present you with efficient employment services to uplift your business with the best workforce.  Let us become a trusted part of your business which you can rely on.', 'assets/img/inner-banner/eor/Global_Hiring_Made_Easy.jpg', 'Global Hiring Made Easy', 'Recognize and recruit the best talent', 'Globalization Solutions provides unbiased end-to-end assistance focusing on your worker\'s success while taking your business to newer heights internationally. Right from acquiring worldwide talent to immigration, personal support and payroll, our experienced management is prepared to support you with your in-country contract requirement whenever needed.<br>  We possess huge in-country amenities and ability to help you at every step of your journey for global acclamation and recognition.', 'assets/img/service-pages-images/Dedication_and_Deligation.jpg', 'Delegation and Dedication', 'Increase productivity with dedicated support', 'By enabling you to hire anywhere across the world without setting up an entity is what comes as our prime responsibility. Utilizing our services, you can ease off the worries of finding the right fit for your organization and save time and money. Outsourcing professional Employer of Record helps you enjoy risk mitigation, stay complaint and reduce costs.  By using our Employer of Record services, you delegate HR, employee management and payroll responsibilities to us and we dedicatedly fulfill the same. Our professional guidance and legal aid let you stay ahead of the game in international markets.', 'assets/img/service-pages-images/Save_on_Subsidary_cost.jpg', 'Saving on Setting up Subsidiary Cost', 'Save and expand', 'Setting up a subsidiary overseas or in another country not only costs a humongous amount of money but will also demand a lot of time. With Globalization solutions, you will not have to worry about all of this; we will reduce your chances of causing liabilities and also will take away the extra hassle so that you can focus on your business. With Globalization Solutions, you will save up to 60% of the cost that goes behind setting up a subsidiary overseas.', 'What is an Employer of Record?', 'A professional Employer of Record or EOR is the guiding source for business houses taking their operational global. Establishing your company in different countries requires sound knowledge of in-country requirements and we ensure to provide the same. From finding the best talents across the globe to on boarding them and from managing payroll to complying legalities, we take the journey together as your reliable partner. By assisting you hire in your desired country with efficiently and transparency, we let you enjoy the employee satisfaction and ease you off with worries. Win over the challenges of global business expansion with our professional Employer of Record assistance.', 'How Employer Of Record Works?', 'Globalization Solutions serves as your professional Employer of Record, shouldering all the responsibilities on your behalf. We take care of hiring employees, managing HR & payroll operations and assisting you with legal requirements on unfamiliar grounds. As your Employer of Record, we have all the required credentials to assist you with international employee management. While you stay responsible for routine business operations, we ensure to provide all the legal and professional assistance to make it smooth.', 'Globalization Solution step-by-step guide.', 'If you are looking forward to expanding your business overseas to make your brand a global name, then choosing Globalization solutions for our Employer of Record services is a great option. We will not only take away the burden from your shoulders but will also make sure your company achieves its business goals effortlessly.Here is how the Globalization solutions’ Employer of record services work.');

-- --------------------------------------------------------

--
-- Table structure for table `global_project`
--

CREATE TABLE `global_project` (
  `id` int(11) NOT NULL,
  `banner_url` text NOT NULL,
  `banner_top1_heading` text NOT NULL,
  `banner_top2_heading` text NOT NULL,
  `banner_top3_heading` text NOT NULL,
  `status` text NOT NULL,
  `section2_heading` text NOT NULL,
  `section_content` text NOT NULL,
  `f_sidepanel_imageurl` text NOT NULL,
  `f_sidepanel_heading` text NOT NULL,
  `f_sidepanel_subheading` text NOT NULL,
  `f_sidepanel_content` text NOT NULL,
  `s_sidepanel_imageurl` text NOT NULL,
  `s_sidepanel_heading` text NOT NULL,
  `s_sidepanel_subheading` text NOT NULL,
  `s_sidepanel_content` text NOT NULL,
  `t_sidepanel_imageurl` text NOT NULL,
  `t_sidepanel_heading` text NOT NULL,
  `t_sidepanel_subheading` text NOT NULL,
  `t_sidepanel_content` text NOT NULL,
  `other_fhtml_heading` text NOT NULL,
  `other_fhtml_content` text NOT NULL,
  `other_shtml_heading` text NOT NULL,
  `other_shtml_content` text NOT NULL,
  `other_thtml_heading` text NOT NULL,
  `other_thtml_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `global_project`
--

INSERT INTO `global_project` (`id`, `banner_url`, `banner_top1_heading`, `banner_top2_heading`, `banner_top3_heading`, `status`, `section2_heading`, `section_content`, `f_sidepanel_imageurl`, `f_sidepanel_heading`, `f_sidepanel_subheading`, `f_sidepanel_content`, `s_sidepanel_imageurl`, `s_sidepanel_heading`, `s_sidepanel_subheading`, `s_sidepanel_content`, `t_sidepanel_imageurl`, `t_sidepanel_heading`, `t_sidepanel_subheading`, `t_sidepanel_content`, `other_fhtml_heading`, `other_fhtml_content`, `other_shtml_heading`, `other_shtml_content`, `other_thtml_heading`, `other_thtml_content`) VALUES
(1, 'assets/img/service-pages-images/Global_Project_management.jpg', 'Project Management', 'Plan & Manage Global Projects', 'A dynamic approach towards project management to enhance your business capabilities worldwide.', 'Enable', 'Gain Momentum Produce Results!', 'The proper functioning of your business lies in the expertise behind management and completion of a project. But that will require a lot of time and dedication to get the desired results by completing the project efficiently. By outsourcing your project management duties, you can get rid of these burdens and also get the best possible results.  Our project management services make sure your business projects are taken care of with the best intentions and strategies. We analyze your requirements, strategize and implement the solutions needed to bring out the best for your brand.', 'assets/img/inner-banner/eor/Global_Hiring_Made_Easy.jpg', 'Global Hiring Made Easy', 'Recognize and recruit the best talent', 'Globalization Solutions provides unbiased end-to-end assistance focusing on your worker\'s success while taking your business to newer heights internationally. Right from acquiring worldwide talent to immigration, personal support and payroll, our experienced management is prepared to support you with your in-country contract requirement whenever needed.<br>  We possess huge in-country amenities and ability to help you at every step of your journey for global acclamation and recognition.', 'assets/img/service-pages-images/Dedication_and_Deligation.jpg', 'Delegation and Dedication', 'Increase productivity with dedicated support', 'By enabling you to hire anywhere across the world without setting up an entity is what comes as our prime responsibility. Utilizing our services, you can ease off the worries of finding the right fit for your organization and save time and money. Outsourcing professional Employer of Record helps you enjoy risk mitigation, stay complaint and reduce costs.  By using our Employer of Record services, you delegate HR, employee management and payroll responsibilities to us and we dedicatedly fulfill the same. Our professional guidance and legal aid let you stay ahead of the game in international markets.', 'assets/img/service-pages-images/Save_on_Subsidary_cost.jpg', 'Saving on Setting up Subsidiary Cost', 'Save and expand', 'Setting up a subsidiary overseas or in another country not only costs a humongous amount of money but will also demand a lot of time. With Globalization solutions, you will not have to worry about all of this; we will reduce your chances of causing liabilities and also will take away the extra hassle so that you can focus on your business. With Globalization Solutions, you will save up to 60% of the cost that goes behind setting up a subsidiary overseas.', 'What is an Employer of Record?', 'A professional Employer of Record or EOR is the guiding source for business houses taking their operational global. Establishing your company in different countries requires sound knowledge of in-country requirements and we ensure to provide the same. From finding the best talents across the globe to on boarding them and from managing payroll to complying legalities, we take the journey together as your reliable partner. By assisting you hire in your desired country with efficiently and transparency, we let you enjoy the employee satisfaction and ease you off with worries. Win over the challenges of global business expansion with our professional Employer of Record assistance.', 'How Employer Of Record Works?', 'Globalization Solutions serves as your professional Employer of Record, shouldering all the responsibilities on your behalf. We take care of hiring employees, managing HR & payroll operations and assisting you with legal requirements on unfamiliar grounds. As your Employer of Record, we have all the required credentials to assist you with international employee management. While you stay responsible for routine business operations, we ensure to provide all the legal and professional assistance to make it smooth.', 'Globalization Solution step-by-step guide.', 'If you are looking forward to expanding your business overseas to make your brand a global name, then choosing Globalization solutions for our Employer of Record services is a great option. We will not only take away the burden from your shoulders but will also make sure your company achieves its business goals effortlessly.Here is how the Globalization solutions’ Employer of record services work.');

-- --------------------------------------------------------

--
-- Table structure for table `global_talent`
--

CREATE TABLE `global_talent` (
  `id` int(11) NOT NULL,
  `banner_url` text NOT NULL,
  `banner_top1_heading` text NOT NULL,
  `banner_top2_heading` text NOT NULL,
  `banner_top3_heading` text NOT NULL,
  `status` text NOT NULL,
  `section2_heading` text NOT NULL,
  `section_content` text NOT NULL,
  `f_sidepanel_imageurl` text NOT NULL,
  `f_sidepanel_heading` text NOT NULL,
  `f_sidepanel_subheading` text NOT NULL,
  `f_sidepanel_content` text NOT NULL,
  `s_sidepanel_imageurl` text NOT NULL,
  `s_sidepanel_heading` text NOT NULL,
  `s_sidepanel_subheading` text NOT NULL,
  `s_sidepanel_content` text NOT NULL,
  `t_sidepanel_imageurl` text NOT NULL,
  `t_sidepanel_heading` text NOT NULL,
  `t_sidepanel_subheading` text NOT NULL,
  `t_sidepanel_content` text NOT NULL,
  `other_fhtml_heading` text NOT NULL,
  `other_fhtml_content` text NOT NULL,
  `other_shtml_heading` text NOT NULL,
  `other_shtml_content` text NOT NULL,
  `other_thtml_heading` text NOT NULL,
  `other_thtml_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `global_talent`
--

INSERT INTO `global_talent` (`id`, `banner_url`, `banner_top1_heading`, `banner_top2_heading`, `banner_top3_heading`, `status`, `section2_heading`, `section_content`, `f_sidepanel_imageurl`, `f_sidepanel_heading`, `f_sidepanel_subheading`, `f_sidepanel_content`, `s_sidepanel_imageurl`, `s_sidepanel_heading`, `s_sidepanel_subheading`, `s_sidepanel_content`, `t_sidepanel_imageurl`, `t_sidepanel_heading`, `t_sidepanel_subheading`, `t_sidepanel_content`, `other_fhtml_heading`, `other_fhtml_content`, `other_shtml_heading`, `other_shtml_content`, `other_thtml_heading`, `other_thtml_content`) VALUES
(1, 'assets/img/service-pages-images/global_talent.jpeg', 'Global Talent Acquisition', 'Get the Best Professionals Onboard!', 'Dedicated approach to search, engage and retain best talents with global presence & expertise.', 'Enable', 'Ease off Your Global Hiring!', 'Expanding your business overseas is an overwhelming task. There are so many aspects that need to be taken care of, starting from staff onboarding, creating employment contracts, registering your brand into government departments, to payroll management. With our HR management services, all this will be covered with utmost efficiency.  Partnering with Globalization Solutions will make sure your business faces no hindrance in the foreign land by providing you with top-notch quality services and making sure your brand flourishes and achieves the recognition it deserves.', 'assets/img/service-pages-images/recuiter_service.jpg', 'Ensuring Best Talent', ' ', 'Joining hands with us is the smartest move to expand your talent pool. Our dedicated recruitment support enables organizations to source the best-fit for their companies using latest technology and global presence and thus, ensuring your success worldwide.', 'assets/img/service-pages-images/Dedication_and_Deligation.jpg', 'Delegation and Dedication', 'Increase productivity with dedicated support', 'By enabling you to hire anywhere across the world without setting up an entity is what comes as our prime responsibility. Utilizing our services, you can ease off the worries of finding the right fit for your organization and save time and money. Outsourcing professional Employer of Record helps you enjoy risk mitigation, stay complaint and reduce costs.  By using our Employer of Record services, you delegate HR, employee management and payroll responsibilities to us and we dedicatedly fulfill the same. Our professional guidance and legal aid let you stay ahead of the game in international markets.', 'assets/img/service-pages-images/Save_on_Subsidary_cost.jpg', 'Saving on Setting up Subsidiary Cost', 'Save and expand', 'Setting up a subsidiary overseas or in another country not only costs a humongous amount of money but will also demand a lot of time. With Globalization solutions, you will not have to worry about all of this; we will reduce your chances of causing liabilities and also will take away the extra hassle so that you can focus on your business. With Globalization Solutions, you will save up to 60% of the cost that goes behind setting up a subsidiary overseas.', 'What is an Employer of Record?', 'A professional Employer of Record or EOR is the guiding source for business houses taking their operational global. Establishing your company in different countries requires sound knowledge of in-country requirements and we ensure to provide the same. From finding the best talents across the globe to on boarding them and from managing payroll to complying legalities, we take the journey together as your reliable partner. By assisting you hire in your desired country with efficiently and transparency, we let you enjoy the employee satisfaction and ease you off with worries. Win over the challenges of global business expansion with our professional Employer of Record assistance.', 'How Employer Of Record Works?', 'Globalization Solutions serves as your professional Employer of Record, shouldering all the responsibilities on your behalf. We take care of hiring employees, managing HR & payroll operations and assisting you with legal requirements on unfamiliar grounds. As your Employer of Record, we have all the required credentials to assist you with international employee management. While you stay responsible for routine business operations, we ensure to provide all the legal and professional assistance to make it smooth.', 'Globalization Solution step-by-step guide.', 'If you are looking forward to expanding your business overseas to make your brand a global name, then choosing Globalization solutions for our Employer of Record services is a great option. We will not only take away the burden from your shoulders but will also make sure your company achieves its business goals effortlessly.Here is how the Globalization solutions’ Employer of record services work.');

-- --------------------------------------------------------

--
-- Table structure for table `header_section`
--

CREATE TABLE `header_section` (
  `id` int(11) NOT NULL,
  `logo_url` text NOT NULL,
  `our_services` text NOT NULL,
  `about_us` text NOT NULL,
  `language` text NOT NULL,
  `address` text NOT NULL,
  `contact` text NOT NULL,
  `email` text NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `header_section`
--

INSERT INTO `header_section` (`id`, `logo_url`, `our_services`, `about_us`, `language`, `address`, `contact`, `email`, `update_at`) VALUES
(1, 'assets/img/final-logo1.png', 'hello', 'hell', 'hindi', '152 Ann Arbor Rd, Suite 304 Plumouth, MI 48170 United States', '+1 (734) 927-3175', 'info@globalizationsolutions.com', '2021-06-06 20:04:16');

-- --------------------------------------------------------

--
-- Table structure for table `navbar_ul`
--

CREATE TABLE `navbar_ul` (
  `id` int(11) NOT NULL,
  `main_heading` text NOT NULL,
  `page_url` text NOT NULL,
  `status` text NOT NULL,
  `modify_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `navbar_ul`
--

INSERT INTO `navbar_ul` (`id`, `main_heading`, `page_url`, `status`, `modify_at`) VALUES
(1, 'Our Services', '', 'active', '2021-06-11 19:04:58'),
(2, 'Our Global Reach', '', 'active', '2021-06-11 19:07:30'),
(3, 'About Us', '', 'active', '2021-06-11 19:07:30'),
(4, 'Careers', '', 'active', '2021-06-11 19:07:30');

-- --------------------------------------------------------

--
-- Table structure for table `our_services`
--

CREATE TABLE `our_services` (
  `id` int(11) NOT NULL,
  `icon_code` text NOT NULL,
  `icon_image` text NOT NULL,
  `service_name` text NOT NULL,
  `content` text NOT NULL,
  `readmore` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `our_services`
--

INSERT INTO `our_services` (`id`, `icon_code`, `icon_image`, `service_name`, `content`, `readmore`, `timestamp`) VALUES
(1, '<i class=\"fa fa-globe\" aria-hidden=\"true\"></i>', 'assets/img/service/svg/employee-record.svg', 'Global Employer of Record ', 'Ensure your global workforce is employed and paid on time and with 100% compliance.', '', '2021-06-11 22:36:19'),
(3, '', 'assets/img/service-pages-images/service-image/market-expertise2.jpg', '1', '2', '', '2021-06-22 20:20:20');

-- --------------------------------------------------------

--
-- Table structure for table `service_page`
--

CREATE TABLE `service_page` (
  `id` int(11) NOT NULL,
  `banner_url` text NOT NULL,
  `banner_top1_heading` text NOT NULL,
  `banner_top2_heading` text NOT NULL,
  `banner_top3_heading` text NOT NULL,
  `status` text NOT NULL,
  `section2_heading` text NOT NULL,
  `section_content` text NOT NULL,
  `f_sidepanel_imageurl` text NOT NULL,
  `f_sidepanel_heading` text NOT NULL,
  `f_sidepanel_subheading` text NOT NULL,
  `f_sidepanel_content` text NOT NULL,
  `s_sidepanel_imageurl` text NOT NULL,
  `s_sidepanel_heading` text NOT NULL,
  `s_sidepanel_subheading` text NOT NULL,
  `s_sidepanel_content` text NOT NULL,
  `t_sidepanel_imageurl` text NOT NULL,
  `t_sidepanel_heading` text NOT NULL,
  `t_sidepanel_subheading` text NOT NULL,
  `t_sidepanel_content` text NOT NULL,
  `other_fhtml_heading` text NOT NULL,
  `other_fhtml_content` text NOT NULL,
  `other_shtml_heading` text NOT NULL,
  `other_shtml_content` text NOT NULL,
  `other_thtml_heading` text NOT NULL,
  `other_thtml_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_page`
--

INSERT INTO `service_page` (`id`, `banner_url`, `banner_top1_heading`, `banner_top2_heading`, `banner_top3_heading`, `status`, `section2_heading`, `section_content`, `f_sidepanel_imageurl`, `f_sidepanel_heading`, `f_sidepanel_subheading`, `f_sidepanel_content`, `s_sidepanel_imageurl`, `s_sidepanel_heading`, `s_sidepanel_subheading`, `s_sidepanel_content`, `t_sidepanel_imageurl`, `t_sidepanel_heading`, `t_sidepanel_subheading`, `t_sidepanel_content`, `other_fhtml_heading`, `other_fhtml_content`, `other_shtml_heading`, `other_shtml_content`, `other_thtml_heading`, `other_thtml_content`) VALUES
(1, 'assets/img/service-pages-images/service.jpeg', 'Service Overview', 'Global Expansion Business Solutions', 'Expand to Global Markets with Confidence', '', 'Expand to Global Markets with Confidence', 'Expanding your business to foreign markets is not easy as it involves numerous challenges and can be time-consuming, confusing, and a drain on resources. It can take weeks or months to set up a foreign subsidiary. Globalization Solutions simplifies your strategic expansion with all-in-one international growth platform saving cost and time. <br> With our professional HR and Project management solutions, any company can start its business on to foreign land with no delay. With our global offices and in-country experts, we handle all complexities making your growth hassle-free giving you the confidence of managing business with ease.<br>  Alternatively, if you wish to establish your own entity in any country, we can assist you with the financial and legal complexities of your company\'s incorporation. With our global presence in 174+ countries, we can ensure that your company abides with all legal compliances with local laws.<br>  With Globalization Solutions, you will not have to keep tabs on expense reimbursements, taxes, benefits, legal changes, and payroll for your employees overseas. We take care of it from start to finish and everything in between.', 'assets/img/service-pages-images/market-expertise.jpg', 'Unmatched Global & Local Market Expertise', '', 'With our offices in over 174+ countries across 5 continents our in-country experts ensure you’re paying and managing your global workforce compliantly with no delays.', 'assets/img/LR-Banner/trusted-partner.jpeg', 'Trusted Business Partner', '', 'Forget about the complexities of international expansion. Our team of experts will streamline and expedite your global expansion and provide all services under one roof. Expanding to a single country of multiple countries together, leave it on us we will take all your headache.', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `testinomial`
--

CREATE TABLE `testinomial` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `designation` text NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testinomial`
--

INSERT INTO `testinomial` (`id`, `name`, `designation`, `comment`, `created_at`) VALUES
(1, 'Ahmed Abdali', 'Managing Director', 'We were looking to expand in multiple countries and were concerned about cross country benefits and payment management. Globalization Solutions offered us the hassle-free smooth service.\r\n                                ', '2021-06-12 20:36:48'),
(2, 'John Larson', 'Entrepreneur', ' We use their payroll services to manage our operations in five countries. Satisfied with the solutions being offered and services.           ', '2021-06-12 22:26:56'),
(3, 'Matt Larson', 'Project Head', 'We use Globalization Solutions to manage our operations in Germany. We never faced any  issues with compliance. Their procss flow is very smooth. We absolutely recomend them.', '2021-06-13 20:21:26'),
(4, 'Rakesh Madan', 'Partner', 'We are happy with their incountry experties and dedicated support. All our concerns are addressed with no delay.', '2021-06-13 20:22:27');

-- --------------------------------------------------------

--
-- Table structure for table `user_contact_form`
--

CREATE TABLE `user_contact_form` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `b_email` text NOT NULL,
  `company_name` text NOT NULL,
  `looking` text NOT NULL,
  `locate` text NOT NULL,
  `help` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_contact_form`
--

INSERT INTO `user_contact_form` (`id`, `name`, `b_email`, `company_name`, `looking`, `locate`, `help`, `message`) VALUES
(1, '1', '2', '3', 'Australia', 'Bahrain', 'Multi-jurisdictional billing and payment solutions', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `banner_section`
--
ALTER TABLE `banner_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_section`
--
ALTER TABLE `contact_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dropdown_header`
--
ALTER TABLE `dropdown_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `globalreach_section`
--
ALTER TABLE `globalreach_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `global_billing`
--
ALTER TABLE `global_billing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `global_eor`
--
ALTER TABLE `global_eor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `global_hr`
--
ALTER TABLE `global_hr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `global_mobility`
--
ALTER TABLE `global_mobility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `global_payroll`
--
ALTER TABLE `global_payroll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `global_peo`
--
ALTER TABLE `global_peo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `global_project`
--
ALTER TABLE `global_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `global_talent`
--
ALTER TABLE `global_talent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_section`
--
ALTER TABLE `header_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navbar_ul`
--
ALTER TABLE `navbar_ul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_services`
--
ALTER TABLE `our_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_page`
--
ALTER TABLE `service_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testinomial`
--
ALTER TABLE `testinomial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_contact_form`
--
ALTER TABLE `user_contact_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner_section`
--
ALTER TABLE `banner_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_section`
--
ALTER TABLE `contact_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dropdown_header`
--
ALTER TABLE `dropdown_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `globalreach_section`
--
ALTER TABLE `globalreach_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `global_hr`
--
ALTER TABLE `global_hr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `header_section`
--
ALTER TABLE `header_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `navbar_ul`
--
ALTER TABLE `navbar_ul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `our_services`
--
ALTER TABLE `our_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service_page`
--
ALTER TABLE `service_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testinomial`
--
ALTER TABLE `testinomial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_contact_form`
--
ALTER TABLE `user_contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
