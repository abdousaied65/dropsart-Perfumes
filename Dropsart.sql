-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2021 at 06:00 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dropsart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_token` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `phone_number`, `email_verified_at`, `password`, `role_name`, `Status`, `api_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'الادارة العامة', 'admin@admin.com', '01092716796', '2021-07-10 22:33:30', '$2y$10$W1xS8Q1r9uAjsgyTDCJiBew/N3tddR.gihlvSO/kA6yJiTacRqpVm', '[\"\\u0645\\u062f\\u064a\\u0631 \\u0627\\u0644\\u0646\\u0638\\u0627\\u0645\"]', 'active', NULL, 'mBua9DTbd6oRQHz3iwM3AmekoYzKLtKmEdsvQ4me1MuUdVW4V6xfzqJk5J7h', '2021-07-10 22:33:30', '2021-08-16 23:21:21');

-- --------------------------------------------------------

--
-- Table structure for table `admin_password_resets`
--

CREATE TABLE `admin_password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_profiles`
--

CREATE TABLE `admin_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_pic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_profiles`
--

INSERT INTO `admin_profiles` (`id`, `city_name`, `age`, `gender`, `profile_pic`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, 'الكويت', '30', 'male', '', 1, '2021-08-16 15:08:33', '2021-08-16 23:20:33');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `subject`, `message`, `status`, `created_at`, `updated_at`) VALUES
(3, 'محمد على', '9876543', 'نتالبيس', 'منتال', 1, '2021-08-15 23:25:26', '2021-08-16 20:02:06'),
(4, 'محمد على', '45678998765', 'السلام عليكم', 'هفلااتةخكمنتولاؤبلالاتن', 2, '2021-08-15 23:26:01', '2021-08-16 20:02:13');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_name` text NOT NULL,
  `course_price` varchar(255) NOT NULL,
  `course_pic` text NOT NULL,
  `course_description` longtext NOT NULL,
  `date` text NOT NULL,
  `seats` int(11) NOT NULL,
  `completed` varchar(255) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `course_price`, `course_pic`, `course_description`, `date`, `seats`, `completed`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, 'دورة تصميم وصناعة العطور المستوى الاول', '250 دينار كويتي', 'uploads/courses/1/6fcaaea2-9eae-4a89-8662-32ecf977b469.jpg', '- اصدار شهادة معتمدة من مؤسسة العطور الدولية في (باريس ) كمصمم عطور معتمد وعضوية\r\nلمدة سنة The International Perfume Foundation IPF\r\n- حقيبة تدريبية تحتوي على جميع المواد والادوات التي يحتاجها المتدرب لتطبيق جميع المهارات\r\n- رسوم الشحن لجميع دول الخليج\r\nمادة الدورة\r\nاليوم الاول :\r\n- نظرة عامة على تاريخ عالم العطور و المواد الطبيعية\r\n- من هو مصمم العطور وما الذي يحتاجه وماهي مهامه\r\n- الزيوت الطبيعية و مصادرها\r\n- طرق استخلاص وتقطير الزيوت الطبيعية و الفرق بينها من ناحية الكمية و السعر و الرائحة\r\n- المذيبات وكيفية أستخدامها بشكل صحيح والاستفادة منها\r\n- كيفية اختيار الكحول الافضل للعطور من ناحية الجودة و رائحة\r\n- التعرف على اهم الاضافات التي يحتاجها العطر للحفاظ علية وزيادة صلاحيته و ثباته\r\n- الاجهزة و الادوات التي يحتاجها مصمم العطور لتجهيز معمله الخاص\r\n- التعرف على كيفية تخفيف جميع المواد العطرية واختيار التركيز المناسب لها ( يوجد ملف خاص لتسهيل العمليات الحسابية)\r\n- كيف يتم اختيار التركيز النهائي للعطر\r\n- اهم الزيوت الطبيعية التي تساعد على الثبات و الفوحان\r\n- طرق الشم الصحيحة اثناء التصميم و بعد اعتماد العطر\r\n- شرح علمي للهرم العطري وكيف يعمل\r\n- خطوات الانتاج و التعتيق والتعبئه الصحيحة التي تظهر جمال وجودة العطر\r\n- ماهي مكونات العطر\r\n- شرح خطوات تصميم العطر الاساسية وكيفية تسريع وتيرة العمل و الانجاز\r\n- ما العلاقة بين الرائحة و الالوان وكيفية الاستفادة منها\r\nاليوم الثاني :\r\n- تصميم العطر بطريقة دقيقة وممتعه من المواد الطبيعية باستخدام الهرم العطري ( عملي )\r\n- تحليل وربط الرائحة بالألوان لتعزيز فكرة العطر ( عملي )\r\nاليوم الثالث :\r\n- كيف يتم تخزين المواد والحفاظ عليها وادارة المخزون (يوجد ملف خاص لادارة المخزون)\r\n- كيف تختار وتنسق زجاجة عطرك\r\n- اهم الرموز التوضيحية التي يمكن استخدامها على زجاجة عطرك\r\n- استراتيجية تسويق العطور\r\n- عرض مصادر بيع المواد و الادوات وتقييمها\r\n- مناقشة مفتوحة للاجابة عن جميع تساؤلات المتدربين\r\nيحصل المتدرب على :\r\n- مذكرة الالكترونية تحتوي على جميع مصادر المواد والادوات التي يحتاجها المصمم\r\n- برامج وملفات خاصة بالمتدربين\r\n- متابعة بعد الدورة عبر الواتساب\r\n- الانضمام لحساب الانستقرام الخاص بالمستوى الاول', '2021-11-29', 10, 'no', 1, '2021-08-16 19:23:45', '2021-08-17 11:53:01'),
(2, 'دورة تصميم وصناعة العطور المستوى الثانى', '250 دينار كويتي', 'uploads/courses/2/6fcaaea2-9eae-4a89-8662-32ecf977b469.jpg', '- شهادة معتمدة من شركة Drops Art\r\n- حقيبة تدريبية تحتوي على جميع المواد والادوات التي يحتاجها المتدرب لتطبيق جميع المهارات\r\n- رسوم الشحن لجميع دول الخليج\r\nمادة الدورة\r\nاليوم الاول :\r\n- اعادة سريعة على اهم ما تناولناه في المستوى الاول\r\n- شرح كيفية قراءة بيانات الجزيئات العطرية وكيفية الاستفادة منها لتحكم بعامل الثبات و الفوحان\r\n- شرح اهم محرك بحث لمصمم العطور\r\n- شرح محرك البحث الخاص بالمصممين المتقدمين والذي يجمع كل ما يحتاجونه في مكان واحد\r\n- قائمة باهم الجزيئات العطرية التي تدخل في اغلب العطور العالمية وكيفية التعامل معها\r\n- شرح طريقة نسخ العطور العالمية و ماهي التكنولوجيا المستخدمة فيها\r\n- قراءة تحليل زيت الورد الدمشقي والتعرف على أهم الجزيئات وفهمها\r\nاليوم الثاني :\r\n- تصميم Accord ( عملي )\r\n- تصميم Base ( عملي )\r\n- تصميم عطر مبني على Base و Accord الذي قمنا بتصميمه وهذي الطريقة تعتبر حجر الاساس التي تقوم عليه العطور العالمية ( عملي )\r\nاليوم الثالث :\r\n- تصميم عطر بطريقة Edward maure ( عملي )\r\n- ماهي اهم الاضافات لعطور الجسم و الشعر من ناحية الاداء و الملمس\r\n- شرح مفصل لتطبيق معايير جمعية العطور الدولية IFRA\r\nيحصل المتدرب على :\r\n- مذكرة الالكترونية تحتوي على جميع مصادر المواد والادوات التي يحتاجها المصمم\r\n- برامج وملفات خاصة بالمتدربين\r\n- متابعة بعد الدورة عبر الواتساب\r\n- الانضمام لحساب الانستقرام الخاص بالمستوى الثاني', '2022-01-05', 10, 'yes', 1, '2021-08-16 19:24:13', '2021-08-17 11:53:13');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `email_link` varchar(255) NOT NULL,
  `instagram_link` varchar(255) NOT NULL,
  `whatsapp_message` varchar(255) NOT NULL,
  `whatsapp_number` varchar(255) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `email_link`, `instagram_link`, `whatsapp_message`, `whatsapp_number`, `admin_id`, `created_at`, `updated_at`) VALUES
(6, 'Dropsartkw@gmail.com', 'https://www.instagram.com/dropsart.kw/?r=nametag', 'السلام عليكم', '+96555055322', 1, '2021-08-16 22:44:16', '2021-08-16 22:44:16');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `testimonial_name` text NOT NULL,
  `testimonial_text` longtext NOT NULL,
  `admin_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `testimonial_name`, `testimonial_text`, `admin_id`, `created_at`, `updated_at`) VALUES
(6, 'احمد فتح الله - الكويت', 'الله يعطيك العافية استاذى الاستفادة كانت كبيرة والتجربة ممتعة والشرح كان موجز بكل التفاصيل مجهود تشكر عليه', 1, '2021-08-16 22:49:12', '2021-08-16 22:49:12'),
(7, 'عبدالمجيد الخثعمي - الرياض', 'الف شكر استاذ بدر على الشرح الوافى لكل ما يخص العطر وتصميمه وبيض الله وجهك', 1, '2021-08-16 22:50:00', '2021-08-16 22:50:00'),
(8, 'عبدالله المسلم - الكويت', 'دورة ممتعة واستمتعت فيها وشكرا على المجهود والله يجازيك خير ويوفقك يارب', 1, '2021-08-16 22:50:44', '2021-08-16 22:50:44'),
(9, 'علي عبدالمحسن - الكويت', 'اولا شكرا لك يا استا بدر على هذا المجهود الذى تشكر عليه لتبسيط المعادلات والحسابات المعقدة الله يعطيك العافية واستمتعنا معاك بدورة والاهم من هذا انك ما قصرت معنا الله يوفقك ان شاء الله ويسخرك للعباد', 1, '2021-08-16 22:55:03', '2021-08-16 22:55:03'),
(10, 'احمد العجمي - الكويت', 'شكرا استاذ بدر على الدورة للامانة تعلمنا منك الكثير واستفدنا من الدورة كيف نصنع العطور ووفرت علينا الجهد والوقت وكان الشرح بسيط ومفهوم جزاك الله خيرا استاذ بدر', 1, '2021-08-16 22:59:48', '2021-08-16 22:59:48'),
(11, 'فهد الخميس - الكويت', 'شكرا لك استاذ بدر على الدورة اللى غيرت مفاهيم كثيرة بالنسبة لى ووفرت علينا جهد ووقت فى البحث عن عدة امور كنا محتاجين معرفتها الله يجازيكم كل خير ويسعدك يارب', 1, '2021-08-16 23:01:10', '2021-08-16 23:01:10'),
(12, 'طريف الشمري - الكويت', 'الله يجازيك خير والله يعطيك العافية ما قصرت معانا كفيت ووفيت استفدنا من كم المعلومات المتوفرة لديك وشرح بسيط وسهل وتوصل المعلومة بطريقة سلسة ومشكور على مجموعة البرامج اللى زودتنا بها لتسهيل عملنا بالتصميم شكرا لك من القلب', 1, '2021-08-16 23:03:06', '2021-08-16 23:03:06'),
(13, 'خالد النصار - السعودية', 'يعطيك العافية الاستاذ بدر الدورة كانت شاملة حيث احتوت على العمل النظرى والعملى بطريقة احترافية .. على المستوى الشخصى استفدت استفادة كبيرة واشكرك استاذ بدر على طريقة عرض الشرائح وايضا طريقتك فى نقل المعلومة فى الشرح العملى عن بعد اشكر سعة صدرك واتمنى لك التوفيق', 1, '2021-08-16 23:07:30', '2021-08-16 23:07:30'),
(14, 'خالد النصار - السعودية', 'شكرا استاذ بدرعلى الدورة الرائعة كفيت ووفيت وعساك على القوة', 1, '2021-08-16 23:08:01', '2021-08-16 23:08:01'),
(15, 'سارة المهندي - قطر', 'بفضل الله اتممت هذه الدورة الناجحة بكل المعايير كاملة ومتكاملة من ناحية المادة العلمية والتقديم والشرح والعرض وتوصيل المعلومة بشكل بسيط  وميسر بالنسبة لى هذه الدورة وضحت لى مفاهيم كثيرة اساسية عن العطور بفضل الاستاذ بدر اللى جاوب على كل اسئلتنا بكل سعة صدر .. وشاركنا معرفته الواسعة وخبرته المميزة .. وايضا حرص على توفير جميع الادوات والزيوت التى اسهم فى تعزيز التطبيق العملى وتثبيت معلومات الدورة .. بوركت يا استاذ بدر على جهودك المبذولة والله ينور عليك مثل ما نورتنا بعلمك', 1, '2021-08-16 23:11:22', '2021-08-16 23:11:22'),
(16, 'روضة الرزوقي - دبي', 'الله يعطيك العافية يا استاذ بدر على الدورة المتميزة .. من افضل الدورات اللى اخذتها .. الشرح فيها واضح ومفصل .. كل الشر والتقدير لك استاذى', 1, '2021-08-16 23:12:26', '2021-08-16 23:12:26'),
(17, 'مرفت محمد - جدة', 'جزاك الله خيرا يا استاذ والحقيقة الدورة التدريبية كانت جدا مفيدة وقيمة من بين الدورات التى حضرتها وكانت الاستفادة جدا عالية .. والشرح واضح والجميع استفاد منه ..والشكر والتقدير لكم جزاك الله خيرا دورتك اكثر من رائعة', 1, '2021-08-16 23:14:14', '2021-08-16 23:14:14'),
(18, 'انس جاموس - الاردن', 'الله يجازيك الخير استاذ بدر الحبيب كانت دورة موفقة نافعة ومفيدة وان شاء الله نكون عندحسن ظنكم وترى ثمرات جهودكم على ارض الواقع', 1, '2021-08-16 23:15:18', '2021-08-16 23:15:18'),
(19, 'وسمية المطيري - الكويت', 'يعطيك العافية استاذ بدر كانت دورة مثمرة استفدت منها الكثير بعالم العطور بتبسيط المعلومة وتسهيلها وسعة صدرك للاسئلة والاستفسارات جزاك الله خيرا .. وجعله بميزان حسناتك', 1, '2021-08-16 23:16:47', '2021-08-16 23:18:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_api_token_unique` (`api_token`);

--
-- Indexes for table `admin_password_resets`
--
ALTER TABLE `admin_password_resets`
  ADD KEY `admin_password_resets_email_index` (`email`);

--
-- Indexes for table `admin_profiles`
--
ALTER TABLE `admin_profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_profiles_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id_2` (`admin_id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id_4` (`admin_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id_3` (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_profiles`
--
ALTER TABLE `admin_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_profiles`
--
ALTER TABLE `admin_profiles`
  ADD CONSTRAINT `admin_id` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`);

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `admin_id_2` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `information`
--
ALTER TABLE `information`
  ADD CONSTRAINT `admin_id_4` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD CONSTRAINT `admin_id_3` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
