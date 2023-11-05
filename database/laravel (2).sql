-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Лис 05 2023 р., 21:02
-- Версія сервера: 10.4.28-MariaDB
-- Версія PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `laravel`
--

-- --------------------------------------------------------

--
-- Структура таблиці `bicucles`
--

CREATE TABLE `bicucles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Marka` text NOT NULL,
  `Model` text NOT NULL,
  `Color` text NOT NULL,
  `Type` text NOT NULL,
  `Tires` text NOT NULL,
  `Size` text NOT NULL,
  `Type_of_rear_bushing` text NOT NULL,
  `Price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `bicucles`
--

INSERT INTO `bicucles` (`id`, `Marka`, `Model`, `Color`, `Type`, `Tires`, `Size`, `Type_of_rear_bushing`, `Price`, `created_at`, `updated_at`) VALUES
(1, 'Cannondale', 'Bad Boy 3 (2022) BBQ', 'Чорний', 'Універсальний', '27,5\"', 'Дорослий', 'Дискові', 500.00, NULL, NULL),
(3, 'Pride', 'RoCX TOUR (2022)', 'Синій', 'Турінг', '28', 'Дорослий', 'Дискові', 1000.00, NULL, NULL),
(4, 'Merida', 'SPEEDER 100 (2023) silk anthracite', 'Сірий', 'Міський', '28', 'Дорослий', 'Дискові_гідравлічні', 800.00, NULL, NULL),
(5, 'Santa Cruz', 'MEGATOWER C S (2021) Amarillo Yellow', 'Жовтий', 'Гірський', '29', 'Дорослий', 'Дискові_гідравлічні', 7000.00, NULL, NULL),
(6, 'KTM', 'Macina Kapoho 7973 (2023) чорний', 'Чорний', 'Електро', '29', 'Дорослий', 'Дискові_гідравлічні', 6000.00, NULL, NULL),
(7, 'Cannondale', 'Trail 5 (2022) graphite', 'Сірий', 'Гірський', '29', 'Дорослий', 'Дискові_гідравлічні', 550.00, NULL, NULL),
(8, 'Schwinn', 'SIVICA 7 Women (2022) блакитний', 'Синій', 'Міський', '26', 'Дорослий', 'Обідні', 500.00, NULL, NULL),
(9, 'Bianchi', 'Aria Aero 105 Disc (2021) Summertime Dream', 'Сірий', 'Шосейний', '28', 'Дорослий', 'Дискові_гідравлічні', 2000.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `characteristics`
--

CREATE TABLE `characteristics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Velo_id` text NOT NULL,
  `Wheel diameter` text NOT NULL,
  `Cassette` text NOT NULL,
  `Shifters` text NOT NULL,
  `Rim` text NOT NULL,
  `Pedals` text NOT NULL,
  `Front brakes` text NOT NULL,
  `Front derailleur` text NOT NULL,
  `Tires` text NOT NULL,
  `Frame` text NOT NULL,
  `Steering column` text NOT NULL,
  `Brake levers` text NOT NULL,
  `Handlebar` text NOT NULL,
  `Saddle` text NOT NULL,
  `Seatpost` text NOT NULL,
  `Cranks` text NOT NULL,
  `Fork` text NOT NULL,
  `Bushes` text NOT NULL,
  `Bearing` text NOT NULL,
  `Rear brakes` text NOT NULL,
  `Rear derailleur` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `characteristics`
--

INSERT INTO `characteristics` (`id`, `Velo_id`, `Wheel diameter`, `Cassette`, `Shifters`, `Rim`, `Pedals`, `Front brakes`, `Front derailleur`, `Tires`, `Frame`, `Steering column`, `Brake levers`, `Handlebar`, `Saddle`, `Seatpost`, `Cranks`, `Fork`, `Bushes`, `Bearing`, `Rear brakes`, `Rear derailleur`, `created_at`, `updated_at`) VALUES
(1, '1', '27,5', 'Shimano HG41, 11-31, 8-шв', 'Shimano Easy Fire EF505, 2x8', 'Cannondale, двостінні, 32 спиці', 'Cannondale Urban Pedal', 'Гідравлічний дисковий Shimano MT200, ротор RT26 160мм', 'Shimano Tourney, хомут 31.8', 'WTB Byway, 650b x 40c', 'Алюміній SmartForm C2, інтегрований бампер, каретка BSA, рульова 1-1/8', 'Напівінтегрована', 'Shimano MT200 гідравлічні', 'Алюміній 6061 з подвійним баттінгом, підйом 25мм, ширина 680мм', 'Cannondale Urban', 'Алюміній, 31.6 x 350мм', 'Shimano, 46/30', 'Lefty, тверда, шток 1-1/8', 'Lefty 50 – передня; Formula DC-1422 QR - ззаду', 'Алюміній 6061, 31.8, 60мм', 'MTB linear pull', 'Shimano Tourney', NULL, NULL),
(3, '3', '28', 'Shimano HG200-9, 11-36, 9ск', 'Shimano Sora ST-R3000, 2x9 ск.', 'Shimano Acera', 'Від виробника', 'TRP Spyre, дисковые механические', 'Shimano M371', 'Слик Kwick Tendril 700x38c, антипрокольная защита (для размера рамы S = Слик Kwick Tendril 27,5x1,5\", антипрокольная защита)', 'PRIDE хромоль, 700С (для размера S - 27,5), баттинг', 'Інтегрована', 'Від виробника', 'PRIDE, 31,8, шириной S= 380, M= 400, L= 420, XL- 440мм, туристический компакт, баттинг, алюминий', 'Від виробника', '27,2x300, алюминий', 'Від виробника', 'PRIDE хромоль,, жесткая', 'Pride, алюминий, пром. подшипники.', 'PRIDE, S= 60мм, M= 75мм, L= 90мм, XL= 105мм, алюминий', 'TRP Spyre, дисковые механические', 'Shimano Acera M3000, средняя лапа', NULL, NULL),
(4, '4', '28', 'Від виробника', 'Shimano ST-EF505.', 'Merida Comp SL aluminum. 17mm inner width, 22mm height.', 'VP VPE-891.', 'BR-MT200 brake caliper.', 'Shimano TY710.', 'Maxxis Detonator 700 x 32C wire.', 'Speeder Lite II aluminium. 700x35C max. wheelsize, 100x9/135x9mm axle standard. BSA bottom bracket standard.', 'Merida M2341', 'Shimano EF505.', 'Merida Comp TK aluminium. 600mm width. Flat.', 'Merida Comp SL, V-mount.', 'Merida Comp CC aluminium. 30.9mm diameter, 12mm setback.', 'Від виробника', 'Merida Speeder CF2 carbon. Tapered. 700x35C max. wheelsize.', 'Від виробника', 'Від виробника', 'BR-MT200 brake caliper', 'Shimano Acera', NULL, NULL),
(5, '5', '29', 'Від виробника', 'Sram GX Eagle', 'Race Face AR Offset 30 29\" Rims', 'Від виробника', 'SRAM Code R', 'Sram GX Eagle', 'Maxxis Assegai 29\"x2.5\", 3C, MaxxGRIP, EXO+, TR', 'Carbon C', 'Від виробника', 'Від виробника', 'Burgtec Alloy Bar 35x800mm', 'WTB Silverado Pro', 'RockShox Reverb Stealth 31.6 170mm', 'SRAM GX Eagle 148 DUB, 30t 170mm', 'Fox 36 Float Performance 160mm 29\"', 'DT 370 15x110 32H', 'Burgtec Enduro MK2 40mm', 'SRAM Code R', 'Sram GX Eagle', NULL, NULL),
(6, '6', '29-27.5', 'Електро', 'Sram SX Eagle singleClick', 'Acmbrosio E30 Trail 32H 622x30TC / Ambrosio E35 Trail 32H 584x35TC', 'MTB-Pedal flat VPE-527 alloy', 'Shimano M4100 / MT420 4-Piston', 'Електро-двигун 750Wh', 'Schwalbe Nobby Nic Perf. Folding 65-622', 'Macina Kapoho Dimmix Alloy6061 SLL-LTE 160mm UDH; PT750 Bosch Gen.4 / M-2266', 'Інтегрована', 'Sram SX Eagle singleClick', 'KTM Comp II Trail 35mm, rizer 15mm, 780mm', 'Selle Italia Model-X Flow', 'KTM Comp II dropper internal', 'KTM E-trail ISIS 160mm Q16 / Sram X-Sync 2 Eagle 36T Direct Mount', 'RockShox 35 Silver TK 29\" 160mm 15x110 taper', 'Shimano MT410B CL 32H 110-15TA', 'KTM TEAM II Trail 35mm', 'Shimano M4100 / MT420 4-Piston', 'Sram SX Eagle 12speed', NULL, NULL),
(7, '7', '29', 'microSHIFT, 11-48T, 10-speed', 'microSHIFT Advent X, 10-Speed', 'WTB SX19, 32h', 'Cannondale Platform', 'Tektro M275 hydraulic disc.', 'microSHIFT Advent X', 'WTB Ranger Comp, 27.5/29 x 2.25\", DNA Compound', 'SmartForm C3 Alloy, SAVE, 1-1/8\" headtube, post mount disc, StraightShot internal cable routing, dropper post compatible, BSA-73', 'Інтегрована', 'Tektro T275, aluminium', 'Cannondale Riser, 6061 Alloy, 25mm rise, 8° sweep, 6° rise, 720mm', 'Cannondale Stage 3', '6061 Alloy, 31.6 x 350mm', 'Prowheel, Charm 30T', 'SR Suntour XCM, 100mm, coil, 42mm offset (27.5\") 46mm offset (29\")', '(F) Shimano HBTX 505 / (R) Shimano FHTX505', '6061 Alloy, 31.8, 7°', 'Tektro M275 hydraulic disc.', 'microSHIFT Advent X', NULL, NULL),
(8, '8', '26', 'Cartridge', 'Shimano® Revo twist shifter', 'Alex® DC-26 alloy double wall 32H', 'Schwinn® comfort plastic/Kraton with reflector', 'Alloy linear-pull', 'N/A', 'Schwinn® classic 26 x 2.125', 'Алюминиевая рама Schwinn® Relaxed Position Plus', 'Інтегрована', 'Від виробника', 'Schwinn® path steel, 25.4, 100 mm rise', 'Schwinn® comfort cruiser with double spring and memory foam insert', 'Schwinn® alloy, 27.2 x 350 mm', 'Schwinn® alloy 44T', 'Schwinn® rigid', 'Alloy QR', 'Alloy quill, 25.4', 'Alloy linear-pull', 'Shimano Tourney® RD-TY300', NULL, NULL),
(9, '9', '28', 'Shimano SM-BB72-41B', 'Shimano 105 ST-R7020 2x11sp', 'Fulcrum Racing 818 disc brake', 'Від виробника', 'Shimano BR-RS505', 'Shimano 105 FD-R7020', 'Vittoria Zaffiro Pro V 700x28', 'Aria Disc Carbon', 'FSA Orbit C-33', 'Від виробника', 'Reparto Corse Aero Compact, alloy 6061', 'Selle Royal Seta S1', 'Aria Full Carbon Aero', 'Shimano 105 FC-R7000 50x34T', 'Bianchi Full Carbon Disc 1.4\"-1.1/8\"', 'Касетна', 'Reparto Corse 3D Forged alloy 6061', 'Shimano BR-RS505', 'Shimano 105 RD-R7020 SS', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, 'db_for_site', 1);

-- --------------------------------------------------------

--
-- Структура таблиці `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Velo_id` text NOT NULL,
  `surname` text NOT NULL,
  `name` text NOT NULL,
  `patronymic` text NOT NULL,
  `phone_number` text NOT NULL,
  `city` text NOT NULL,
  `street` text NOT NULL,
  `house_number` text NOT NULL,
  `payment` text NOT NULL,
  `Total_price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `bicucles`
--
ALTER TABLE `bicucles`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `characteristics`
--
ALTER TABLE `characteristics`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Індекси таблиці `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Індекси таблиці `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `bicucles`
--
ALTER TABLE `bicucles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблиці `characteristics`
--
ALTER TABLE `characteristics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблиці `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблиці `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
