-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Sep 2021 pada 02.47
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stream_web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `animes`
--

CREATE TABLE `animes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_list` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_episode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aired` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `synopsis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trailer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `studio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `animes`
--

INSERT INTO `animes` (`id`, `title_list`, `rate`, `status`, `cover_image`, `type`, `total_episode`, `aired`, `duration`, `synopsis`, `genre`, `trailer`, `category`, `studio`, `created_at`, `updated_at`) VALUES
(5, 'Tensei shitara Slime Datta Ken 2nd Season Part 2', '8.57', 'On-Going', 'oiUEOcEpYO7Mukrp2xeP3d1rr1ujlmBimDRbCL0y.jpg', 'TV', '12', 'Jul 6, 2021 to ?', 'Unknown', '<p>Second half of <em>Tensei shitara Slime Datta Ken 2nd Season</em>.</p>', 'Action, Adventure, Comedy, Demons, Fantasy, Magic', 'Jtru8qNZxHc', 'Summer 2021', '8bit', '2021-07-14 00:34:15', '2021-07-14 00:34:15'),
(6, 'Kobayashi-san Chi no Maid Dragon S', '8.47', 'On-Going', 'to8osaDXhLiCKKEzZnoxDkkeKKlhSjhhuHAALS8y.jpg', 'TV', 'Unknown', 'Jul 8, 2021 to ?', '23', '<p>Second season of <em>Kobayashi-san Chi no Maid Dragon</em>.</p>', 'Comedy, Fantasy, Slice of Life', 'Sro80JOeFNw', 'Summer 2021', 'Kyoto Animation', '2021-07-14 00:40:46', '2021-07-14 00:43:55'),
(7, 'Tantei wa Mou, Shindeiru.', '7.67', 'On-Going', '3BGzqDkxhiJ6T1mnTkeoZRQWQZ7vXnCUJLtNrO6R.jpg', 'TV', '12', 'Jul 4, 2021 to ?', '25', '<p>Kimizuka Kimihiko is a crisis-magnet. From getting caught up in a crime scene to accidentally witnessing a drug deal, trouble seems to find him around every corner. So it is no surprise when his rather mundane flight suddenly enters a state of emergency with a dire need of a detective onboard. Unfortunately, his attempt at avoiding trouble is foiled by a beautiful girl with silver hair who goes by the codename Siesta. Declaring herself a detective, she unceremoniously drags Kimizuka into the case as her assistant.<br />\r\n<br />\r\nThat incident spelled the beginning of an adventure around the globe that went beyond his wildest imagination. Putting their lives on the line, the two took down criminal organizations, prevented disasters, and saved thousands. But the curtain closed to their epic journey with Siesta&#39;s untimely death three years later.<br />\r\n<br />\r\nResolving to live an ordinary high school life this time, Kimizuka spends a year maintaining a low profile. However, as fate would have it, a girl with an uncanny resemblance to Siesta comes crashing into his life, threatening to throw his peaceful days into disarray.<br />\r\n&nbsp;</p>', 'Comedy, Drama, Mistery, Romance', 'PgA7OQCvO8M', 'Summer 2021', 'ENGI', '2021-07-14 00:46:23', '2021-07-14 00:46:23'),
(8, 'Kanojo mo Kanojo', '6.80', 'On-Going', 'imEuQrglyiFs3gfWpR72SvUlQKnO9oLk1zUs5BJ2.jpg', 'TV', '12', 'Jul 3, 2021 to ?', '24', '<p>After harboring an unrequited love for years, Naoya Mukai finally gets to date his childhood friend, Saki Saki. However, just as he tries to commit himself to this relationship, he receives an abrupt confession from Nagisa Minase.<br />\r\n<br />\r\nAt first, Naoya tries to reject her but is soon overcome by feelings of not wanting to hurt Nagisa. Trying to avoid betraying his girlfriend&#39;s trust in him, Naoya thinks up a &quot;solution&quot; to make both girls happy&mdash;two-timing. Naturally, Saki rebuffs this idea, but through Naoya&#39;s and Nagisa&#39;s persistence, she reluctantly submits.<br />\r\n<br />\r\nWith this, a three-way affair begins between Naoya, his girlfriend, and his &quot;other&quot; girlfriend, as they develop a relationship that deviates from the social norm.</p>', 'Comedy, Harem, Romance, School, Shounen', 'nPn4JX9WURw', 'Summer 2021', 'Tezuka Productions', '2021-07-14 00:55:42', '2021-07-14 00:55:42'),
(9, 'Mahouka Koukou no Yuutousei', '7.08', 'On-Going', '2mdhWiBE9ZO16GhGArjvwLRv4HsaaVWzojU63PJr.jpg', 'TV', '13', 'Jul 3, 2021 to ?', '23', '<p>A century has passed since magic&mdash;true magic, the stuff of legends&mdash;has returned to the world. It is spring, the season of new beginnings, and a new class of students is about to begin their studies at the First National Magic University Affiliated High School, nickname: First High.<br />\r\n<br />\r\nA manga spin-off of the immensely popular light novel series <em>Mahouka Koukou no Rettousei (The Irregular at Magic High School), Mahouka Koukou no Yuutousei (The Honor Student at Magic High School)</em> follows the events of the original series as seen through the eyes of Miyuki Shiba, Tatsuya&#39;s sister. The life of an honor student comes with a lot of expectations...and unexpected hidden feelings?!</p>', 'Fantasy, Magic, Sci-Fi', '4UZSOz2Uv7A', 'Summer 2021', 'Connect', '2021-07-14 01:36:12', '2021-07-14 01:36:12'),
(10, 'Shinigami Bocchan to Kuro Maid', '7.23', 'On-Going', 'Btm7wjaQgQ95qgERJZ1k1B3IOmMe7HWbzvbLXn34.jpg', 'TV', '12', 'Jul 4, 2021 to ?', '24', '<p>Cursed by a witch as a child, a young duke gained the unwanted power to kill every living thing he touches. Forced to move away from his family and into a large mansion deep in the woods, the duke is treated as if he does not exist and is continually shunned by his peers.<br />\r\n<br />\r\nHowever, he is not entirely alone. Rob and Alice, his butler and maid, are always by his side. Alice loves to tease him, and as their relationship grows, the duke makes it his goal to break free from his deadly curse. Of course, he is going to need some help, and who better to do this than the various inhabitants of the supernatural?</p>', 'Comedy, Drama, Romance, Supranatural', 'fovl9ZRPX40', 'Summer 2021', 'J.C.Staff', '2021-07-14 04:47:09', '2021-07-14 04:47:36'),
(11, 'Higurashi no Naku Koro ni Sotsu', '8.06', 'On-Going', 'tQ9IXmr7fx3aymO1QMZwffDL4ziWm0qHzwiN99Fu.jpg', 'TV', '15', 'Jul 1, 2021 to ?', '23', '<p>Sequel to <em>Higurashi no Naku Koro ni Gou.</em></p>', 'Dementia, Horror, Mistery, Psychology, Supranatural, Thriller', 'vxg2Dp-7roo', 'Summer 2021', 'Passione', '2021-07-14 04:51:13', '2021-07-14 04:51:47'),
(12, '100-man no Inochi no Ue ni Ore wa Tatteiru 2nd Season', '7.27', 'On-Going', 'HPqcv1tT489yEeVjvwtdfmj00yOmGXnG2MLPdKJD.jpg', 'TV', '12', 'Jul 10, 2021 to ?', 'Unknown', '<p>Second season of <em>100-man no Inochi no Ue ni Ore wa Tatteiru</em>.</p>', 'Action, Drama, Fantasy, Game, Shounen', 'lYvK7gB1-lA', 'Summer 2021', 'Maho Film', '2021-07-14 04:54:36', '2021-07-14 04:54:36'),
(13, 'Peach Boy Riverside', '7.10', 'On-Going', 'kXAKXoIu0aZOBZDbroXrH6je87Y4XtbIKoWERugD.jpg', 'TV', '12', 'Jul 1, 2021 to ?', '23', '<p>Saltorine Aldike, or Sari, is a bright, cheerful princess who wants to go on an adventure because she is bored of her tiny little castle in the countryside. One day, a hoard of vicious demons known as &quot;Oni&quot; come knocking on her doorstep, threatening the lives of everyone in the Kingdom. Thankfully, they are saved by a lone traveler named Kibitsu Mikoto who slays these monsters with a mysterious &quot;Peach Eye.&quot; Shocked by the dangers of the outside world, Sari decides to set off on a journey of her own. Little did she know that she would set in motion a chain of events that will come to determine the fate of this magical world.</p>', 'Fantasy, Shounen', 'jnUh6helvN8', 'Summer 2021', 'Asahi Production', '2021-07-14 04:56:15', '2021-07-14 04:56:15'),
(14, 'Kimetsu no Yaiba Movie: Mugen Ressha-hen', '8.75', 'Finished', 'xbDm4juC7xue98RewJPhoqMUpdyAQYZoCiPo0Axn.jpg', 'Movie', '1', 'Oct 16, 2020', '1 hr. 56', '<p>After a string of mysterious disappearances begin to plague a train, the Demon Slayer Corps&#39; multiple attempts to remedy the problem prove fruitless. To prevent further casualties, the flame pillar, Kyoujurou Rengoku, takes it upon himself to eliminate the threat. Accompanying him are some of the Corps&#39; most promising new blood: Tanjirou Kamado, Zenitsu Agatsuma, and Inosuke Hashibira, who all hope to witness the fiery feats of this model demon slayer firsthand.<br />\r\n<br />\r\nUnbeknownst to them, the demonic forces responsible for the disappearances have already put their sinister plan in motion. Under this demonic presence, the group must muster every ounce of their willpower and draw their swords to save all two hundred passengers onboard. <em>Kimetsu no Yaiba Movie: Mugen Ressha-hen</em> delves into the deepest corners of Tanjirou&#39;s mind, putting his resolve and commitment to duty to the test.</p>', 'Action, Demons, Historical, Shounen, Supranatural', 'PrZ0O8Qp18s', '-', 'ufotable', '2021-07-14 05:36:24', '2021-07-14 05:36:24'),
(15, 'Josee to Tora to Sakana-tachi', '8.63', 'Finished', 'dIJjMeD8Ew7rlZjFOdGcLUFGHpHq6GvvDNPeJR37.jpg', 'Movie', '1', 'Dec 25, 2020', '1 hr. 38', '<p>A youth romantic drama with themes of growing up, the story focuses on college student Tsuneo and dreamer Josee, who lives her life stuck in a wheelchair. Josee&mdash;named after the heroine in Fran&ccedil;oise Sagan&#39;s Wonderful Clouds&mdash;spends most of her days reading and painting until by chance she encounters Tsuneo, and decides it&#39;s time to face the real world.</p>', 'Drama, Romance, Slice of Life', 'sw07I2OH4Ho', '-', 'Bones', '2021-07-14 05:38:47', '2021-07-14 05:38:47'),
(16, 'Fate Grand Order: Shinsei Entaku Ryouiki Camelot 1 - Wandering; Agateram', '6.81', 'Finished', '1Z8O5H0rhWzST81pX89wsVr5Bl8Al4FizwqfgwZv.jpg', 'Movie', '1', 'Dec 5, 2020', '1 hr. 29', '<p>An adaptation of the the Sixth of Seven Singularities, The Sacred Round Table Realm Camelot Singularity of Fate/Grand Order.</p>', 'Action, Fantasy, Magic, Supranatural', NULL, 'Summer 2021', 'Signal.MD', '2021-07-14 06:06:30', '2021-07-20 01:37:25'),
(17, 'Date A Bullet: Nightmare or Queen', '7.55', 'Finished', 'i3wEUzEG5KCZfJYLbe34bRM4mzlGZ6TmZuuUJoLZ.jpg', 'Movie', '1', 'Nov 13, 2020', '29', '<p>Second part of the <em>Date A Bullet</em> films.</p>', 'Sci-Fi', 'b_LdvOYBoEo', '-', 'GEEK TOYS', '2021-07-14 06:37:42', '2021-07-14 06:37:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `genres`
--

CREATE TABLE `genres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `genres`
--

INSERT INTO `genres` (`id`, `genre`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'tes', '2021-07-12 03:39:49', '2021-07-12 03:35:10', '2021-07-12 03:39:49'),
(2, 'Action', '2021-07-19 06:07:40', '2021-07-12 04:26:32', '2021-07-19 06:07:40'),
(3, 'Adventure', NULL, '2021-07-12 04:26:42', '2021-07-12 04:26:42'),
(4, 'Cars', NULL, '2021-07-12 04:26:50', '2021-07-12 04:26:50'),
(5, 'Comedy', NULL, '2021-07-12 04:27:01', '2021-07-12 04:27:01'),
(6, 'Dementia', NULL, '2021-07-12 04:27:09', '2021-07-12 04:27:09'),
(7, 'Demons', NULL, '2021-07-12 04:27:20', '2021-07-12 04:27:20'),
(8, 'Drama', NULL, '2021-07-12 04:27:29', '2021-07-12 04:27:29'),
(9, 'Ecchi', NULL, '2021-07-12 04:27:36', '2021-07-12 04:27:36'),
(10, 'Fantasy', NULL, '2021-07-12 04:27:46', '2021-07-12 04:27:46'),
(11, 'Game', NULL, '2021-07-12 04:27:53', '2021-07-12 04:27:53'),
(12, 'Harem', NULL, '2021-07-12 04:28:01', '2021-07-12 04:28:01'),
(13, 'Historical', NULL, '2021-07-12 04:28:10', '2021-07-12 04:28:10'),
(14, 'Horror', NULL, '2021-07-12 04:28:55', '2021-07-12 04:28:55'),
(15, 'Josei', NULL, '2021-07-12 04:29:01', '2021-07-12 04:29:01'),
(16, 'Kids', NULL, '2021-07-12 04:29:06', '2021-07-12 04:29:06'),
(17, 'Live Action', NULL, '2021-07-12 04:29:15', '2021-07-12 04:29:15'),
(18, 'Magic', NULL, '2021-07-12 04:29:22', '2021-07-12 04:29:22'),
(19, 'Martial Arts', NULL, '2021-07-12 04:29:29', '2021-07-12 04:29:29'),
(20, 'Mecha', NULL, '2021-07-12 04:29:36', '2021-07-12 04:29:36'),
(21, 'Military', NULL, '2021-07-12 04:29:43', '2021-07-12 04:29:43'),
(22, 'Music', NULL, '2021-07-12 04:29:50', '2021-07-12 04:29:50'),
(23, 'Mistery', NULL, '2021-07-12 04:29:56', '2021-07-12 04:29:56'),
(24, 'Parody', NULL, '2021-07-12 04:30:07', '2021-07-12 04:30:07'),
(25, 'Police', NULL, '2021-07-12 04:30:13', '2021-07-12 04:30:13'),
(26, 'Psychology', NULL, '2021-07-12 04:30:27', '2021-07-12 04:30:27'),
(27, 'Romance', NULL, '2021-07-12 04:30:34', '2021-07-12 04:30:34'),
(28, 'Samurai', NULL, '2021-07-12 04:30:41', '2021-07-12 04:30:41'),
(29, 'School', NULL, '2021-07-12 04:30:49', '2021-07-12 04:30:49'),
(30, 'Sci-Fi', NULL, '2021-07-12 04:30:57', '2021-07-12 04:30:57'),
(31, 'Sheinen', NULL, '2021-07-12 04:31:04', '2021-07-12 04:31:04'),
(32, 'Shoujo', NULL, '2021-07-12 04:31:11', '2021-07-12 04:31:11'),
(33, 'Shoujo Ai', NULL, '2021-07-12 04:31:18', '2021-07-12 04:31:28'),
(34, 'Shounen', NULL, '2021-07-12 04:38:17', '2021-07-12 04:38:17'),
(35, 'Shounen Ai', NULL, '2021-07-12 04:38:28', '2021-07-12 04:38:28'),
(36, 'Slice of Life', NULL, '2021-07-12 04:38:38', '2021-07-12 04:38:38'),
(37, 'Space', NULL, '2021-07-12 04:38:44', '2021-07-12 04:38:44'),
(38, 'Sports', NULL, '2021-07-12 04:38:51', '2021-07-12 04:38:51'),
(39, 'Super Power', NULL, '2021-07-12 04:39:03', '2021-07-12 04:39:03'),
(40, 'Supranatural', '2021-07-12 07:16:36', '2021-07-12 04:39:12', '2021-07-12 07:16:36'),
(41, 'Supranatural', NULL, '2021-07-14 04:47:21', '2021-07-14 04:47:21'),
(42, 'Thriller', NULL, '2021-07-14 04:51:24', '2021-07-14 04:51:24'),
(43, 'Action', NULL, '2021-07-19 06:07:45', '2021-07-19 06:07:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2021_07_10_204254_create_genres_table', 3),
(9, '2021_07_12_111654_create_animes_table', 5),
(11, '2021_07_12_130656_create_status_lists_table', 7),
(12, '2021_07_12_135352_create_type_lists_table', 8),
(13, '2021_07_12_163041_create_updates_table', 9),
(19, '2021_07_13_125932_create_reqs_table', 10),
(21, '2021_07_14_062428_create_season_cates_table', 11),
(22, '2021_07_17_202452_add_roles_field_to_users_table', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `reqs`
--

CREATE TABLE `reqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_anime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `reqs`
--

INSERT INTO `reqs` (`id`, `title_anime`, `text`, `status`, `created_at`, `updated_at`) VALUES
(12, 'naruto', NULL, 'New', '2021-07-20 19:39:38', '2021-07-20 19:39:38'),
(13, 'naruto', NULL, 'New', '2021-07-21 23:20:56', '2021-07-21 23:20:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `season_cates`
--

CREATE TABLE `season_cates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `season_cates`
--

INSERT INTO `season_cates` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Summer 2021', NULL, NULL),
(3, '-', '2021-07-14 05:32:24', '2021-07-14 05:32:24'),
(5, 'Spring 2021', '2021-07-15 00:45:13', '2021-07-15 00:45:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_lists`
--

CREATE TABLE `status_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `status_lists`
--

INSERT INTO `status_lists` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'On-Going', NULL, NULL),
(2, 'Finished', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `type_lists`
--

CREATE TABLE `type_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `type_lists`
--

INSERT INTO `type_lists` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'TV', NULL, NULL),
(2, 'Movie', NULL, NULL),
(3, 'OVA', NULL, NULL),
(4, 'ONA', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `updates`
--

CREATE TABLE `updates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_update` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `episode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `embed_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preview` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `updates`
--

INSERT INTO `updates` (`id`, `title_update`, `episode`, `embed_link`, `preview`, `created_at`, `updated_at`) VALUES
(3, 'Josee to Tora to Sakana-tachi', '1', 'T0gS2ZqI#rqHMMeyOreRTOu1OSqktaMxNxlp-3jO7xpjoStOG9ZI', 'JDF5lE8mJWUWIvA8a70oHVZsyQ5OlOUMEItUuldK.jpg', '2021-07-16 04:44:16', '2021-07-16 04:44:16'),
(4, 'Fate Grand Order: Shinsei Entaku Ryouiki Camelot 1 - Wandering; Agateram', '1', '1wokCAzD#Mat8kBv9mV5ME1CzUPmHH0hRzhrF5SyesSr1cBk6SR8', 'GqY3ZogW0D5MKYHEvIzEW9kHm4wn0z4ubOLilt1m.jpg', '2021-07-16 04:46:59', '2021-07-16 04:46:59'),
(5, 'Kimetsu no Yaiba Movie: Mugen Ressha-hen', '1', 'IxRV1AgZ#LgPU97YqIuIK1V0JCMvJRg1LPgI3Ne3whlnzEV81biA', 'rhxp16b43F5ymVAmnMuPrsx0YWQ8UdnkCipfraEa.jpg', '2021-07-16 04:49:36', '2021-07-16 04:49:36'),
(6, '100-man no Inochi no Ue ni Ore wa Tatteiru 2nd Season', '1', '17xARADb#hgDJvFglPUts3p41tTRC1055_DtwC5roR2_02XDKpK00', 'M7qRGTjO3RV6I5GYBXrjGUfIdl4PEGDXjVCN9Z2v.png', '2021-07-16 06:02:09', '2021-07-16 06:02:09'),
(7, 'Higurashi no Naku Koro ni Sotsu', '1', 'Z2wURKob#AQMDN7OiIRQ7NzFlCeVx9D_6QWD7srbVSajdY8f0BtE', 'TVlwcMCfniQ1dfbh3cJeLsJ4zAkCmRHVIr1ARgg4.png', '2021-07-16 06:16:45', '2021-07-16 06:16:45'),
(8, 'Higurashi no Naku Koro ni Sotsu', '2', 'lj4mnSJZ#q2UC93wIP9doG0nOQBgrUzOLSoiWCVnYF4sgyRs_dpk', 'L4TAcK0DovkzLPYqIsGIkegDOhHSDnBryJ4lvWPJ.png', '2021-07-16 06:18:31', '2021-07-16 06:18:31'),
(9, 'Higurashi no Naku Koro ni Sotsu', '3', '934gDYTS#09ljRuZOJZK1PlNIgIpjRsMcwrZBlfxqBtcdXnEElLc', 'xjRLPWotTKanSG27uW0atmXyusEijMMkNkRd4qj8.png', '2021-07-16 06:24:41', '2021-07-16 06:24:41'),
(10, 'Higurashi no Naku Koro ni Sotsu', '4', 'Jn42HATb#mM4SAmR-Fux7It2bijVC0Gents6pRexaOd9e1EHhb7U', 'gzQNsqQZgSWYfocjvOmkgXSAW3VqMJeTB5PjkONq.png', '2021-07-16 06:28:42', '2021-07-16 06:28:42'),
(11, 'Kobayashi-san Chi no Maid Dragon S', '1', 's7pEFA5Q#YTV_fBjikHuhqn9i1JZMv9f2nwFRxKQ0h_GpEo9Kqcs', 'cKD010zeM1rrYPW3gMMzJNSz1fVr9KWo4Cl94hPJ.png', '2021-07-16 06:35:46', '2021-07-16 06:35:46'),
(12, 'Kobayashi-san Chi no Maid Dragon S', '2', '8ixQVSjK#vVQvLURRy5-cJGab_gD0gpMjHrKQAo7luYLH1f7pOfo', 'zgJj2Wi1GsK0W3ROI94b29E5TWscsUrK4nfZxbTz.png', '2021-07-16 06:39:28', '2021-07-16 06:39:28'),
(13, 'Kanojo mo Kanojo', '1', 'wqwwBY5R#P_Nx0gTJJsWT2iE50ErMwXmxe09p5lJbP8y7ljlZz7A', 'a6LYqZojacxjRPJSQuI8taI0dTPjE7FZYGFtPbcP.png', '2021-07-16 06:43:55', '2021-07-16 06:43:55'),
(14, 'Kanojo mo Kanojo', '2', '9zx2XS4B#ZZxMhsr8CiwdwCLfhxaYJu4dcVrmYnMfycOchT6e0wk', 'lBkMt32nJ37iszUC4oyMwCnVvUQhC0uzp7qvZV8b.png', '2021-07-16 06:47:21', '2021-07-16 06:47:21'),
(15, 'Mahouka Koukou no Yuutousei', '1', 'M7omCART#OplVyvZVychN5ElXr6tfFDF1RiCVP2duu3a5bt4eL3o', 'ruw3h1H9ntMSYCJLx2BN3PwFoQeMdDqIBPEFRUW1.png', '2021-07-16 06:52:02', '2021-07-16 06:52:02'),
(16, 'Mahouka Koukou no Yuutousei', '2', '52hAkIoD#-sh43V038Ja-Zps42XqGnClOSmGUkDb_33lquEY1mvI', 'VydCx4FHVCQJpyUNnvR88oBgUFZOXRj1YDT25zAO.png', '2021-07-16 06:53:41', '2021-07-16 06:53:41'),
(17, 'Tantei wa Mou, Shindeiru.', '1', 'd6owSK5A#af4RdPd9JZV9ZP7Llnuu94k3SsajlZnXTPVV6AryybM', 'zplYUoPzfKQnQIiFuUQAK4Sk2dyeDx5YXAmpBuAY.png', '2021-07-16 06:57:27', '2021-07-16 06:57:27'),
(18, 'Tantei wa Mou, Shindeiru.', '2', '5j4GVYDJ#wV4GWyijFbRwvFC2CC0pWbomJ2SFXOv7R6BGKmMsDn0', 'NqIdOGyayvO9VVAKzFHkQcjDbkLdovEpry1QJbnH.png', '2021-07-16 07:02:22', '2021-07-16 07:02:22'),
(19, 'Shinigami Bocchan to Kuro Maid', '1', 'lupURQzQ#H497UKkzTMyzPhXRRFjsxLc1fL94ivjDeSWnEZFU5xw', 'HN4cxJvLj1NvffGiFaaoBVZwpbKKzz7GztDjbr5b.png', '2021-07-16 07:05:09', '2021-07-16 07:05:09'),
(20, 'Shinigami Bocchan to Kuro Maid', '2', 'Ir4SySyZ#6onYEBe7GckW2iwr480wT8g-7DYC99G3VTc0eRkPk7k', 'nvCz2jWY83D60OT283hLlGlGn0iGvpcVw0n0JLXd.png', '2021-07-16 07:08:27', '2021-07-16 07:08:27'),
(21, 'Peach Boy Riverside', '2', '4mgCBIyZ#nYgNVN-wVPOlwh_JaaowajCjdMeiBCw9QQw1JxhmyHA', 'vJZOAB99hgw097FxKPKidvBDBKP6KsObiwfWixwR.png', '2021-07-16 07:09:28', '2021-07-16 07:09:28'),
(22, 'Peach Boy Riverside', '3', 'wz5SFCgY#5V2ttPunuK_Fkdhz69awqCXuISnfMjU1IKlVCjna3_Y', '8dSAsCM1XqKpODBkhDzUgClZNq5FzfA0id6Px0q3.png', '2021-07-16 07:11:59', '2021-07-16 07:11:59'),
(23, 'Date A Bullet: Nightmare or Queen', '1', 'EwZRmK5Y#9XGu8qzMoI8OxjhN8kBGd1_6XB9pZyI5smiTlpgc5Ro', '5f4SBjCIltQoRh5dzDZXhlSgHSlLQ6oTeVBmRN7C.jpg', '2021-07-16 07:28:20', '2021-07-16 07:28:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ADMIN'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES
(1, 'dimas', 'dimasakptra@gmail.com', NULL, '$2y$10$38nQ0BXy07K6xasSoJ.nne9BUcoE5o2gr9tKqhJDOuozAyIv4xjc2', NULL, '2021-07-17 20:42:40', '2021-07-17 20:42:40', 'ADMIN');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `animes`
--
ALTER TABLE `animes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title_list` (`title_list`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `reqs`
--
ALTER TABLE `reqs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `season_cates`
--
ALTER TABLE `season_cates`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status_lists`
--
ALTER TABLE `status_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `type_lists`
--
ALTER TABLE `type_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `updates`
--
ALTER TABLE `updates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_title` (`title_update`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `animes`
--
ALTER TABLE `animes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `genres`
--
ALTER TABLE `genres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `reqs`
--
ALTER TABLE `reqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `season_cates`
--
ALTER TABLE `season_cates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `status_lists`
--
ALTER TABLE `status_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `type_lists`
--
ALTER TABLE `type_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `updates`
--
ALTER TABLE `updates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `updates`
--
ALTER TABLE `updates`
  ADD CONSTRAINT `fk_title` FOREIGN KEY (`title_update`) REFERENCES `animes` (`title_list`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
