-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 10 2020 г., 09:45
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `laravel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_05_06_140147_create_posts_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shorttitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `shorttitle`, `content`, `created_at`, `updated_at`) VALUES
(1, 'ASSALOM DUNYO', 'Bizning servisda yangik endilikda siz har bir tayyorlatga fotosurat yoki afishangiz uchun cashback \r\nqaytib olishingiz mumkun..........', 'Ijtimoiy tarmoqlarda barcha pensiya oluvchilarining HUMO kartalariga o‘tkazilishi to‘g‘risidagi xabarlar keng tarqalmoqda. Shuningdek, 7 va 8 may kunlari POSterminallari orqali to‘lovlarni amalga oshirishda qiyinchiliklar kuzatildi. Milliy banklararo protsessing markazi ushbu masalalarga rasmiy bayonot berdi.\r\n\r\nBayonotda qayd etilishicha, qay turdagi kartani chiqarish va uni kimga berishga oid qarorlar bank faoliyati doirasida qabul qilinadi. MBPM kartalarni faqatgina bank tomonidan berilgan buyurtmadagi miqdorga asoslanib chiqaradi.\r\n\r\nBugungi kungacha, Xalq banki ma’lumotiga ko‘ra, pensiya oluvchilar uchun jami 1 228 000 (bir million ikki yuz yigirma sakkiz ming) karta chiqarilgan, ulardan faqat 391 000tasi, ya’ni 32%i HUMO kartalaridir.\r\n\r\n7 va 8 may kunlari, soat 11:00 dan 13:00 oralig‘ida POSterminallari orqali to‘lovlarni amalga oshirishda qiyinchiliklar kuzatildi. Bunga – pul mablag‘larini pensiya kartalariga o‘tkazish operatsiyalarining shiddatli ravishda o‘sishi, shuningdek bank kassalari va bankomatlari orqali pul mablag‘larini naqdlashtirish xizmatlariga talabning yuqoriligi sabab bo‘ldi.\r\n\r\nBularning barchasi keskin va qisqa muddatli nosozliklarga, ya’ni natijasiz bank operatsiyalari sonining o‘sishiga sabab bo‘ldi. Ammo bu vaziyat bankomatlar yoki elektron to‘lov tizimilari faoliyatiga ta’sir ko‘rsatmadi. Ayni damda, protsessing markazi quvvatlarini kengaytirish va dasturiy ta’minotni yaxshilash bo‘yicha uzluksiz ish olib borilmoqda, – deyiladi bayonotda.\r\n\r\nShuningdek, MBPM Xalq banki bilan hamkorlikda pensiya oluvchi mijozlarga xizmat ko‘rsatish bo‘yicha ishlar yanada takomillashtirilayotgani, bankomatlar hududiy qayta o‘rnatilayotgani va  qo‘shimcha kassalar ochilayotgani ma’lum qilingan.\r\n\r\n«Karta egalariga yuzaga kelgan vaziyat uchun uzrlarimizni bildiramiz. HUMO – nisbatan yangi tizim, uni takomillashtirish bo‘yicha ishlar davom ettirilmoqda. Biz bor kuchimiz bilan mijozlarimiz ishonchini oqlashga va bu tizimni imkon qadar qulay va ishonchli qilishga harakat qilayapmiz», – deya ta’kidladi «Milliy banklararo protsessing markazi» MChJ  direktori Shuhratbek Qurbonov.\r\n\r\nHUMO KARTA', NULL, NULL),
(2, 'YANGILIKLAR', 'sdjcwdonvcmwsdknlcds\r\nsdvsdv\r\nsdbfrvgsfs\r\nesrgvsdrgvsrd\r\nesrbsrdgvsr', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
