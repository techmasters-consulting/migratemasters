-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 15, 2020 at 07:19 AM
-- Server version: 5.7.29
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `migratio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `action_events`
--

CREATE TABLE `action_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `batch_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actionable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actionable_id` bigint(20) UNSIGNED NOT NULL,
  `target_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED DEFAULT NULL,
  `fields` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'running',
  `exception` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `original` text COLLATE utf8mb4_unicode_ci,
  `changes` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `action_events`
--

INSERT INTO `action_events` (`id`, `batch_id`, `user_id`, `name`, `actionable_type`, `actionable_id`, `target_type`, `target_id`, `model_type`, `model_id`, `fields`, `status`, `exception`, `created_at`, `updated_at`, `original`, `changes`) VALUES
(1, '9012fd1a-e4b1-4e11-8bf4-780c0ed5ce90', 1, 'Create', 'App\\Articles', 1, 'App\\Articles', 1, 'App\\Articles', 1, '', 'finished', '', '2020-03-13 11:11:42', '2020-03-13 11:11:42', NULL, '{\"title\":\"Travel Restrictions Spread As Coronavirus Pandemic Widens\",\"slug\":\"Travel Restrictions\",\"excerpt\":\"As the cases of known coronavirus infections multiply worldwide, restrictions are increasing on international travel as well.\",\"body\":\"<p>Among the latest clampdowns: President Trump&#39;s announcement on Wednesday of a monthlong travel ban. Much like travel bans imposed in January and February on China and Iran, this latest restriction bars entry to the U.S. of foreign nationals who have been in one of 26 European nations in the 14 days prior to their scheduled U.S. arrival.<br><br>U.S. citizens and residents traveling from Europe&#39;s visa-free &quot;Schengen Area&quot; will still be allowed to enter the U.S. But Acting Department of Homeland Security Secretary Chad Wolf says entry will be restricted to &quot;select airports where the U.S. Government has implemented enhanced screening procedures.&quot;<br><br><br><\\/p>\",\"featured_image\":\"F9QSUVDI2BPkLDovfT9yPNGFqnnY0vFCgItsOQI6.png\",\"published_at\":\"2020-03-18 08:00:00\",\"user_id\":1,\"updated_at\":\"2020-03-13 15:11:42\",\"created_at\":\"2020-03-13 15:11:42\",\"id\":1}'),
(2, '90130089-5bce-4e39-be04-b7e85879128d', 1, 'Update', 'App\\Articles', 1, 'App\\Articles', 1, 'App\\Articles', 1, '', 'finished', '', '2020-03-13 11:21:17', '2020-03-13 11:21:17', '{\"featured_image\":\"F9QSUVDI2BPkLDovfT9yPNGFqnnY0vFCgItsOQI6.png\"}', '{\"featured_image\":\"UzFIBK47wvHXONSdGwTpqgFKAWc0I3LR3cC3sBXL.png\"}'),
(3, '90130232-1456-4564-b02b-f65ce53b8c0b', 1, 'Update', 'App\\Articles', 1, 'App\\Articles', 1, 'App\\Articles', 1, '', 'finished', '', '2020-03-13 11:25:56', '2020-03-13 11:25:56', '{\"featured_image\":\"UzFIBK47wvHXONSdGwTpqgFKAWc0I3LR3cC3sBXL.png\"}', '{\"featured_image\":\"ObE7NPrLTcepI36ZijqlxN2wxqtId15jFwehxCSA.png\"}'),
(4, '901305f1-b1fb-4ba4-a337-4b43b4347534', 1, 'Update', 'App\\Articles', 1, 'App\\Articles', 1, 'App\\Articles', 1, '', 'finished', '', '2020-03-13 11:36:25', '2020-03-13 11:36:25', '{\"featured_image\":\"ObE7NPrLTcepI36ZijqlxN2wxqtId15jFwehxCSA.png\"}', '{\"featured_image\":\"q1dVnSv8qM3zB6Fp3MpefDWRDhXKCfGc0v6fYdNC.png\"}'),
(5, '90130a07-3e52-4b2c-a0a9-728728483a0e', 1, 'Update', 'App\\Articles', 1, 'App\\Articles', 1, 'App\\Articles', 1, '', 'finished', '', '2020-03-13 11:47:50', '2020-03-13 11:47:50', '{\"featured_image\":\"q1dVnSv8qM3zB6Fp3MpefDWRDhXKCfGc0v6fYdNC.png\"}', '{\"featured_image\":\"BWdEFV94rGP927V4pq1FHYmCdXyChhgQk6ZF1Sl2.png\"}'),
(6, '901321e0-f674-4aec-853f-2526ea52717f', 1, 'Create', 'App\\Services', 1, 'App\\Services', 1, 'App\\Services', 1, '', 'finished', '', '2020-03-13 12:54:31', '2020-03-13 12:54:31', NULL, '{\"title\":\"Education Visa\",\"slug\":\"Education-visa\",\"excerpt\":\"We are there to help you enroll at a qualified educational institution and obtain your student visa in any country of your choice.\",\"body\":\"We are there to help you enroll at a qualified educational institution and obtain your student visa in any country of your choice.\",\"published_at\":\"2020-03-13 08:00:00\",\"updated_at\":\"2020-03-13 16:54:31\",\"created_at\":\"2020-03-13 16:54:31\",\"id\":1}'),
(7, '90132230-1131-46bb-b5c5-d0fef80f25d4', 1, 'Create', 'App\\Services', 2, 'App\\Services', 2, 'App\\Services', 2, '', 'finished', '', '2020-03-13 12:55:23', '2020-03-13 12:55:23', NULL, '{\"title\":\"Job Seeker Visa\",\"slug\":\"Job-seeker-visa\",\"excerpt\":\"This type of visa allows you to work in a certain country of your choice through a specific period of time and we are here to ensure that you collect this visa and simplify the process for obtaining it.\",\"body\":\"This type of visa allows you to work in a certain country of your choice through a specific period of time and we are here to ensure that you collect this visa and simplify the process for obtaining it.\",\"published_at\":\"2020-03-13 08:00:00\",\"updated_at\":\"2020-03-13 16:55:23\",\"created_at\":\"2020-03-13 16:55:23\",\"id\":2}'),
(8, '90132dbe-b492-4732-9bd5-d06bcfac2ec3', 1, 'Create', 'App\\Articles', 2, 'App\\Articles', 2, 'App\\Articles', 2, '', 'finished', '', '2020-03-13 13:27:42', '2020-03-13 13:27:42', NULL, '{\"title\":\"Brazilian Official Who Met Trump Last Weekend Tests Positive For Coronavirus\",\"slug\":\"brazilian-trump-covid19\",\"excerpt\":\"The Brazilian government says an official who met President Trump at the Mar-a-Lago resort last weekend has tested positive for the coronavirus.\",\"body\":\"<p><br>F&aacute;bio Wajngarten, the communications director for Brazilian President Jair Bolsonaro, was part of a delegation that traveled to the U.S. During that trip, Wajngarten posted a photo of himself on Instagram standing directly next to Trump and wearing a hat that says &quot;Make Brazil Great Again.&quot;<br><br>On Thursday, Trump said that he was aware the aide was being tested. &quot;Let&#39;s put it this way: I&#39;m not concerned,&quot; he told reporters.<br><br>Later in the day, White House press secretary Stephanie Grisham stated that &quot;both the President and Vice President had almost no interactions with the individual who tested positive and do not require being tested at this time.&quot; She added the exposures from the case are &quot;being assessed, which will dictate next steps.&quot;<br><br>&quot;There is currently no indication to test patients without symptoms, and only people with prolonged close exposure to confirmed positive cases should self-quarantine,&quot; Grisham said.<\\/p>\",\"featured_image\":\"AOjdz2zJFosaeJeoww15gxpleReoGX8LC9iPzWTs.jpeg\",\"published_at\":\"2020-03-13 08:00:00\",\"user_id\":1,\"updated_at\":\"2020-03-13 17:27:42\",\"created_at\":\"2020-03-13 17:27:42\",\"id\":2}'),
(9, '901330e9-3202-4cac-9f2a-6f1f28dd6e98', 1, 'Create', 'App\\Articles', 3, 'App\\Articles', 3, 'App\\Articles', 3, '', 'finished', '', '2020-03-13 13:36:33', '2020-03-13 13:36:33', NULL, '{\"title\":\"Trump Administration Announces Measures To Speed Coronavirus Testing\",\"slug\":\"Trump-administration\",\"excerpt\":\"The Trump administration has announced a series of measures intended to speed testing for the coronavirus disease COVID-19: a new\",\"body\":\"<p>The Trump administration has announced a series of measures intended to speed testing for the coronavirus disease COVID-19: a new federal coordinator to oversee testing, funding for two companies developing rapid tests and a hotline for labs to call to get help finding needed supplies.&nbsp;<\\/p><p>&nbsp; &nbsp;<\\/p><p>The U.S. government has been sharply criticized for its slow response to the virus, particularly when it comes to testing. Only this week has testing become more widely available in the U.S., and kits remain in limited supply.<\\/p><p>&nbsp; &nbsp;<\\/p><p>The Department of Health and Human Services announced Friday that it <a href=\\\"https:\\/\\/www.hhs.gov\\/about\\/news\\/2020\\/03\\/13\\/hhs-funds-development-covid-19-diagnostic-tests.html\\\">will fund<\\/a> two companies for the development of rapid diagnostic tests for coronavirus. It will provide $679,000 to DiaSorin Molecular of Cypress, Calif., and $598,000 to QIAGEN of Germantown, Md.<\\/p><p>&nbsp; &nbsp;<\\/p><p>DiaSorin&#39;s test could be ready in six weeks, while QIAGEN&#39;s could be ready in 12 weeks, according to HHS. Both tests are to be designed to give a result within an hour. The projects were selected by the Biomedical Advanced Research and Development Authority at HHS.&nbsp;<\\/p><p>&nbsp; &nbsp;<\\/p><p>&quot;Americans need access to rapid diagnostic testing. The sooner clinicians, patients and public health officials know whether someone is infected with the novel coronavirus, the sooner they can take action to mitigate the spread of COVID-19,&quot; said BARDA Director Rick A. Bright. &quot;Rapid diagnostic tests are critical in this public health response. We are working with the private sector at an urgent pace to make these tests available on as many diagnostic platforms as we can in the coming weeks.&quot;&nbsp;<\\/p>\",\"featured_image\":\"qjgm3IMx0lUKuQxOsX2AfEO4mEsZ2CQGPAnAdwtZ.jpeg\",\"published_at\":\"2020-03-18 08:00:00\",\"user_id\":1,\"updated_at\":\"2020-03-13 17:36:33\",\"created_at\":\"2020-03-13 17:36:33\",\"id\":3}'),
(10, '901331ba-5c81-4563-a6d8-cb5126d585b4', 1, 'Create', 'App\\Tags', 1, 'App\\Tags', 1, 'App\\Tags', 1, '', 'finished', '', '2020-03-13 13:38:50', '2020-03-13 13:38:50', NULL, '{\"name\":\"covid19\",\"updated_at\":\"2020-03-13 17:38:50\",\"created_at\":\"2020-03-13 17:38:50\",\"id\":1}'),
(11, '90135ee0-a798-4878-a4eb-0e5536baca42', 1, 'Create', 'Spatie\\Tags\\Tag', 1, 'Spatie\\Tags\\Tag', 1, 'Spatie\\Tags\\Tag', 1, '', 'finished', '', '2020-03-13 15:45:05', '2020-03-13 15:45:05', NULL, '{\"name\":{\"en\":\"virustag\"},\"slug\":{\"en\":\"virustag\"},\"order_column\":1,\"updated_at\":\"2020-03-13 19:45:05\",\"created_at\":\"2020-03-13 19:45:05\",\"id\":1}'),
(12, '90136800-a786-4f2e-9051-0fb07c12a9ae', 1, 'Create', 'App\\Articles', 21, 'App\\Articles', 21, 'App\\Articles', 21, '', 'finished', '', '2020-03-13 16:10:36', '2020-03-13 16:10:36', NULL, '{\"title\":\"test\",\"slug\":\"ess\",\"excerpt\":\"ccdcdcc\",\"body\":\"<p>cdcdcdcdc<\\/p>\",\"featured_image\":\"1rzGUjpfqrYtz2zsTySDQEtK1ecFvK6LPGPp77Wk.jpeg\",\"published_at\":\"2020-03-14 08:00:00\",\"user_id\":1,\"updated_at\":\"2020-03-13 20:10:36\",\"created_at\":\"2020-03-13 20:10:36\",\"id\":21}'),
(13, '90137286-483a-4961-a901-af1fdb01b12e', 1, 'Update', 'App\\Articles', 21, 'App\\Articles', 21, 'App\\Articles', 21, '', 'finished', '', '2020-03-13 16:40:01', '2020-03-13 16:40:01', '[]', '[]'),
(14, '901372b8-be4d-46ad-914d-a8a83a8caf04', 1, 'Create', 'Spatie\\Tags\\Tag', 2, 'Spatie\\Tags\\Tag', 2, 'Spatie\\Tags\\Tag', 2, '', 'finished', '', '2020-03-13 16:40:34', '2020-03-13 16:40:34', NULL, '{\"name\":{\"en\":\"brother\"},\"slug\":{\"en\":\"brother\"},\"order_column\":2,\"updated_at\":\"2020-03-13 20:40:34\",\"created_at\":\"2020-03-13 20:40:34\",\"id\":2}'),
(15, '901372dc-ecc1-48f5-8160-4ef166a51a47', 1, 'Update', 'App\\Articles', 21, 'App\\Articles', 21, 'App\\Articles', 21, '', 'finished', '', '2020-03-13 16:40:58', '2020-03-13 16:40:58', '[]', '[]'),
(16, '901374d8-d299-4c5c-b1cc-1ab0c9e729f5', 1, 'Update', 'App\\Articles', 3, 'App\\Articles', 3, 'App\\Articles', 3, '', 'finished', '', '2020-03-13 16:46:31', '2020-03-13 16:46:31', '[]', '[]'),
(17, '90148153-7dc1-4219-937c-647312487f90', 1, 'Update', 'App\\Articles', 2, 'App\\Articles', 2, 'App\\Articles', 2, '', 'finished', '', '2020-03-14 05:17:14', '2020-03-14 05:17:14', '[]', '[]'),
(18, '90148174-7a70-49b3-a196-cfb61975b4c1', 1, 'Update', 'App\\Articles', 1, 'App\\Articles', 1, 'App\\Articles', 1, '', 'finished', '', '2020-03-14 05:17:36', '2020-03-14 05:17:36', '[]', '[]'),
(19, '90151510-bd74-4b45-b6d1-ce4a9f0171e8', 1, 'Update', 'App\\Services', 2, 'App\\Services', 2, 'App\\Services', 2, '', 'finished', '', '2020-03-14 12:10:21', '2020-03-14 12:10:21', '{\"country\":1}', '{\"country\":\"0\"}'),
(20, '90151571-8916-4043-ac34-8100a79480ec', 1, 'Update', 'App\\Services', 1, 'App\\Services', 1, 'App\\Services', 1, '', 'finished', '', '2020-03-14 12:11:24', '2020-03-14 12:11:24', '[]', '[]'),
(21, '90151581-0931-4939-ae2e-e87a8450d5ed', 1, 'Update', 'App\\Services', 1, 'App\\Services', 1, 'App\\Services', 1, '', 'finished', '', '2020-03-14 12:11:34', '2020-03-14 12:11:34', '{\"country\":1}', '{\"country\":\"0\"}'),
(22, '9015396d-c0d1-4d9a-a6f0-a95a41e063c3', 1, 'Update', 'App\\Services', 2, 'App\\Services', 2, 'App\\Services', 2, '', 'finished', '', '2020-03-14 13:52:02', '2020-03-14 13:52:02', '[]', '[]'),
(23, '90153af3-11fb-4017-9da2-979287523e4c', 1, 'Update', 'App\\Services', 2, 'App\\Services', 2, 'App\\Services', 2, '', 'finished', '', '2020-03-14 13:56:17', '2020-03-14 13:56:17', '[]', '[]'),
(24, '90153bbd-8fb6-434c-ac8f-1e5d8d45d0c8', 1, 'Update', 'App\\Articles', 21, 'App\\Articles', 21, 'App\\Articles', 21, '', 'finished', '', '2020-03-14 13:58:29', '2020-03-14 13:58:29', '[]', '[]'),
(25, '90153c8b-47fe-4865-afa6-c96f5728f9f3', 1, 'Update', 'App\\Services', 2, 'App\\Services', 2, 'App\\Services', 2, '', 'finished', '', '2020-03-14 14:00:44', '2020-03-14 14:00:44', '[]', '[]'),
(26, '90153d7f-ec67-4865-a382-a62adca53683', 1, 'Update', 'App\\Services', 2, 'App\\Services', 2, 'App\\Services', 2, '', 'finished', '', '2020-03-14 14:03:25', '2020-03-14 14:03:25', '[]', '[]'),
(27, '90153e4c-83cb-4db6-837c-c97d0546bd97', 1, 'Update', 'App\\Services', 2, 'App\\Services', 2, 'App\\Services', 2, '', 'finished', '', '2020-03-14 14:05:39', '2020-03-14 14:05:39', '[]', '[]'),
(28, '901540e9-0858-4df0-99f0-8fa79bcd9c2b', 1, 'Delete', 'Spatie\\Tags\\Tag', 8, 'Spatie\\Tags\\Tag', 8, 'Spatie\\Tags\\Tag', 8, '', 'finished', '', '2020-03-14 14:12:57', '2020-03-14 14:12:57', NULL, NULL),
(29, '9015416c-7624-4b2b-ba50-33fba1b54095', 1, 'Update', 'App\\Services', 2, 'App\\Services', 2, 'App\\Services', 2, '', 'finished', '', '2020-03-14 14:14:23', '2020-03-14 14:14:23', '{\"country\":0}', '{\"country\":\"1\"}'),
(30, '901541a2-279a-456f-9a52-c12b62d7f9a7', 1, 'Update', 'App\\Services', 2, 'App\\Services', 2, 'App\\Services', 2, '', 'finished', '', '2020-03-14 14:14:58', '2020-03-14 14:14:58', '{\"title\":\"Job Seeker Visa\"}', '{\"title\":\"Job Seeker Visa canada\"}'),
(31, '901549bb-12b2-4296-93ee-234d41fa343e', 1, 'Create', 'App\\Services', 3, 'App\\Services', 3, 'App\\Services', 3, '', 'finished', '', '2020-03-14 14:37:37', '2020-03-14 14:37:37', NULL, '{\"title\":\"test\",\"slug\":\"test\",\"country\":\"1\",\"excerpt\":\"test\",\"body\":\"<p>test<\\/p>\",\"published_at\":\"2020-03-14 08:00:00\",\"updated_at\":\"2020-03-14 18:37:36\",\"created_at\":\"2020-03-14 18:37:36\",\"id\":3}'),
(32, '90155b01-0dfe-475b-928b-c056761ae3ca', 1, 'Update', 'Spatie\\Tags\\Tag', 7, 'Spatie\\Tags\\Tag', 7, 'Spatie\\Tags\\Tag', 7, '', 'finished', '', '2020-03-14 15:25:55', '2020-03-14 15:25:55', '{\"name\":\"{\\\"en\\\": \\\"TAGTEST\\\"}\"}', '{\"name\":\"{\\\"en\\\":\\\"australia\\\"}\"}'),
(33, '90155b46-d827-47c4-b585-dd457ab92f78', 1, 'Create', 'Spatie\\Tags\\Tag', 10, 'Spatie\\Tags\\Tag', 10, 'Spatie\\Tags\\Tag', 10, '', 'finished', '', '2020-03-14 15:26:40', '2020-03-14 15:26:40', NULL, '{\"name\":{\"en\":\"United Kingdom\"},\"slug\":{\"en\":\"united-kingdom\"},\"order_column\":9,\"updated_at\":\"2020-03-14 19:26:40\",\"created_at\":\"2020-03-14 19:26:40\",\"id\":10}'),
(34, '90155b6c-dd2e-4a3f-befe-c9dd3e992000', 1, 'Update', 'Spatie\\Tags\\Tag', 9, 'Spatie\\Tags\\Tag', 9, 'Spatie\\Tags\\Tag', 9, '', 'finished', '', '2020-03-14 15:27:05', '2020-03-14 15:27:05', '{\"name\":\"{\\\"en\\\": \\\"canada\\\"}\"}', '{\"name\":\"{\\\"en\\\":\\\"Canada\\\"}\"}'),
(35, '90155b86-791e-4ef1-a751-4c080eb9efe4', 1, 'Update', 'Spatie\\Tags\\Tag', 7, 'Spatie\\Tags\\Tag', 7, 'Spatie\\Tags\\Tag', 7, '', 'finished', '', '2020-03-14 15:27:22', '2020-03-14 15:27:22', '{\"name\":\"{\\\"en\\\": \\\"australia\\\"}\"}', '{\"name\":\"{\\\"en\\\":\\\"Australia\\\"}\"}'),
(36, '90155ba9-7bd3-49fa-b23a-27e18b458aeb', 1, 'Create', 'Spatie\\Tags\\Tag', 11, 'Spatie\\Tags\\Tag', 11, 'Spatie\\Tags\\Tag', 11, '', 'finished', '', '2020-03-14 15:27:45', '2020-03-14 15:27:45', NULL, '{\"name\":{\"en\":\"USA\"},\"slug\":{\"en\":\"usa\"},\"order_column\":10,\"updated_at\":\"2020-03-14 19:27:45\",\"created_at\":\"2020-03-14 19:27:45\",\"id\":11}'),
(37, '90155bc1-9c82-4845-8c4c-339666177b3e', 1, 'Create', 'Spatie\\Tags\\Tag', 12, 'Spatie\\Tags\\Tag', 12, 'Spatie\\Tags\\Tag', 12, '', 'finished', '', '2020-03-14 15:28:01', '2020-03-14 15:28:01', NULL, '{\"name\":{\"en\":\"Germany\"},\"slug\":{\"en\":\"germany\"},\"order_column\":11,\"updated_at\":\"2020-03-14 19:28:01\",\"created_at\":\"2020-03-14 19:28:01\",\"id\":12}'),
(38, '90155bdd-3b02-4877-b3cf-e944c65b43b4', 1, 'Create', 'Spatie\\Tags\\Tag', 13, 'Spatie\\Tags\\Tag', 13, 'Spatie\\Tags\\Tag', 13, '', 'finished', '', '2020-03-14 15:28:19', '2020-03-14 15:28:19', NULL, '{\"name\":{\"en\":\"Netherlands\"},\"slug\":{\"en\":\"netherlands\"},\"order_column\":12,\"updated_at\":\"2020-03-14 19:28:19\",\"created_at\":\"2020-03-14 19:28:19\",\"id\":13}'),
(39, '90155bee-b11d-429c-97cd-603ce14cff91', 1, 'Create', 'Spatie\\Tags\\Tag', 14, 'Spatie\\Tags\\Tag', 14, 'Spatie\\Tags\\Tag', 14, '', 'finished', '', '2020-03-14 15:28:30', '2020-03-14 15:28:30', NULL, '{\"name\":{\"en\":\"France\"},\"slug\":{\"en\":\"france\"},\"order_column\":13,\"updated_at\":\"2020-03-14 19:28:30\",\"created_at\":\"2020-03-14 19:28:30\",\"id\":14}'),
(40, '901561b0-23ff-4989-a08e-5304647bfa7c', 1, 'Create', 'Spatie\\Tags\\Tag', 15, 'Spatie\\Tags\\Tag', 15, 'Spatie\\Tags\\Tag', 15, '', 'finished', '', '2020-03-14 15:44:36', '2020-03-14 15:44:36', NULL, '{\"name\":{\"en\":\"Mauritius\"},\"slug\":{\"en\":\"mauritius\"},\"order_column\":14,\"updated_at\":\"2020-03-14 19:44:36\",\"created_at\":\"2020-03-14 19:44:36\",\"id\":15}');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `featured_image` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published_at` datetime NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `user_id`, `title`, `slug`, `excerpt`, `body`, `is_published`, `featured_image`, `published_at`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Travel Restrictions Spread As Coronavirus Pandemic Widens', 'Travel Restrictions', 'As the cases of known coronavirus infections multiply worldwide, restrictions are increasing on international travel as well.', '<p>Among the latest clampdowns: President Trump&#39;s announcement on Wednesday of a monthlong travel ban. Much like travel bans imposed in January and February on China and Iran, this latest restriction bars entry to the U.S. of foreign nationals who have been in one of 26 European nations in the 14 days prior to their scheduled U.S. arrival.<br><br>U.S. citizens and residents traveling from Europe&#39;s visa-free &quot;Schengen Area&quot; will still be allowed to enter the U.S. But Acting Department of Homeland Security Secretary Chad Wolf says entry will be restricted to &quot;select airports where the U.S. Government has implemented enhanced screening procedures.&quot;<br><br><br></p>', 1, 'BWdEFV94rGP927V4pq1FHYmCdXyChhgQk6ZF1Sl2.png', '2020-03-18 08:00:00', NULL, '2020-03-13 11:11:42', '2020-03-13 11:47:50'),
(2, 1, 'Brazilian Official Who Met Trump Last Weekend Tests Positive For Coronavirus', 'brazilian-trump-covid19', 'The Brazilian government says an official who met President Trump at the Mar-a-Lago resort last weekend has tested positive for the coronavirus.', '<p><br>F&aacute;bio Wajngarten, the communications director for Brazilian President Jair Bolsonaro, was part of a delegation that traveled to the U.S. During that trip, Wajngarten posted a photo of himself on Instagram standing directly next to Trump and wearing a hat that says &quot;Make Brazil Great Again.&quot;<br><br>On Thursday, Trump said that he was aware the aide was being tested. &quot;Let&#39;s put it this way: I&#39;m not concerned,&quot; he told reporters.<br><br>Later in the day, White House press secretary Stephanie Grisham stated that &quot;both the President and Vice President had almost no interactions with the individual who tested positive and do not require being tested at this time.&quot; She added the exposures from the case are &quot;being assessed, which will dictate next steps.&quot;<br><br>&quot;There is currently no indication to test patients without symptoms, and only people with prolonged close exposure to confirmed positive cases should self-quarantine,&quot; Grisham said.</p>', 1, 'AOjdz2zJFosaeJeoww15gxpleReoGX8LC9iPzWTs.jpeg', '2020-03-13 08:00:00', NULL, '2020-03-13 13:27:42', '2020-03-13 13:27:42'),
(3, 1, 'Trump Administration Announces Measures To Speed Coronavirus Testing', 'Trump-administration', 'The Trump administration has announced a series of measures intended to speed testing for the coronavirus disease COVID-19: a new', '<p>The Trump administration has announced a series of measures intended to speed testing for the coronavirus disease COVID-19: a new federal coordinator to oversee testing, funding for two companies developing rapid tests and a hotline for labs to call to get help finding needed supplies.&nbsp;</p><p>&nbsp; &nbsp;</p><p>The U.S. government has been sharply criticized for its slow response to the virus, particularly when it comes to testing. Only this week has testing become more widely available in the U.S., and kits remain in limited supply.</p><p>&nbsp; &nbsp;</p><p>The Department of Health and Human Services announced Friday that it <a href=\"https://www.hhs.gov/about/news/2020/03/13/hhs-funds-development-covid-19-diagnostic-tests.html\">will fund</a> two companies for the development of rapid diagnostic tests for coronavirus. It will provide $679,000 to DiaSorin Molecular of Cypress, Calif., and $598,000 to QIAGEN of Germantown, Md.</p><p>&nbsp; &nbsp;</p><p>DiaSorin&#39;s test could be ready in six weeks, while QIAGEN&#39;s could be ready in 12 weeks, according to HHS. Both tests are to be designed to give a result within an hour. The projects were selected by the Biomedical Advanced Research and Development Authority at HHS.&nbsp;</p><p>&nbsp; &nbsp;</p><p>&quot;Americans need access to rapid diagnostic testing. The sooner clinicians, patients and public health officials know whether someone is infected with the novel coronavirus, the sooner they can take action to mitigate the spread of COVID-19,&quot; said BARDA Director Rick A. Bright. &quot;Rapid diagnostic tests are critical in this public health response. We are working with the private sector at an urgent pace to make these tests available on as many diagnostic platforms as we can in the coming weeks.&quot;&nbsp;</p>', 1, 'qjgm3IMx0lUKuQxOsX2AfEO4mEsZ2CQGPAnAdwtZ.jpeg', '2020-03-18 08:00:00', NULL, '2020-03-13 13:36:33', '2020-03-13 13:36:33'),
(21, 1, 'test', 'ess', 'ccdcdcc', '<p>cdcdcdcdc</p>', 1, '1rzGUjpfqrYtz2zsTySDQEtK1ecFvK6LPGPp77Wk.jpeg', '2020-03-14 08:00:00', NULL, '2020-03-13 16:10:36', '2020-03-13 16:10:36');

-- --------------------------------------------------------

--
-- Table structure for table `articles_tags`
--

CREATE TABLE `articles_tags` (
  `id` int(11) NOT NULL,
  `taggable_type` int(11) NOT NULL,
  `taggable_id` int(11) NOT NULL,
  `tags_id` int(11) NOT NULL,
  `articles_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `sortname` varchar(233) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phonecode` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`) VALUES
(1, 'AF', 'Afghanistan', 93),
(2, 'AL', 'Albania', 355),
(3, 'DZ', 'Algeria', 213),
(4, 'AS', 'American Samoa', 1684),
(5, 'AD', 'Andorra', 376),
(6, 'AO', 'Angola', 244),
(7, 'AI', 'Anguilla', 1264),
(8, 'AQ', 'Antarctica', 0),
(9, 'AG', 'Antigua And Barbuda', 1268),
(10, 'AR', 'Argentina', 54),
(11, 'AM', 'Armenia', 374),
(12, 'AW', 'Aruba', 297),
(13, 'AU', 'Australia', 61),
(14, 'AT', 'Austria', 43),
(15, 'AZ', 'Azerbaijan', 994),
(16, 'BS', 'Bahamas The', 1242),
(17, 'BH', 'Bahrain', 973),
(18, 'BD', 'Bangladesh', 880),
(19, 'BB', 'Barbados', 1246),
(20, 'BY', 'Belarus', 375),
(21, 'BE', 'Belgium', 32),
(22, 'BZ', 'Belize', 501),
(23, 'BJ', 'Benin', 229),
(24, 'BM', 'Bermuda', 1441),
(25, 'BT', 'Bhutan', 975),
(26, 'BO', 'Bolivia', 591),
(27, 'BA', 'Bosnia and Herzegovina', 387),
(28, 'BW', 'Botswana', 267),
(29, 'BV', 'Bouvet Island', 0),
(30, 'BR', 'Brazil', 55),
(31, 'IO', 'British Indian Ocean Territory', 246),
(32, 'BN', 'Brunei', 673),
(33, 'BG', 'Bulgaria', 359),
(34, 'BF', 'Burkina Faso', 226),
(35, 'BI', 'Burundi', 257),
(36, 'KH', 'Cambodia', 855),
(37, 'CM', 'Cameroon', 237),
(38, 'CA', 'Canada', 1),
(39, 'CV', 'Cape Verde', 238),
(40, 'KY', 'Cayman Islands', 1345),
(41, 'CF', 'Central African Republic', 236),
(42, 'TD', 'Chad', 235),
(43, 'CL', 'Chile', 56),
(44, 'CN', 'China', 86),
(45, 'CX', 'Christmas Island', 61),
(46, 'CC', 'Cocos (Keeling) Islands', 672),
(47, 'CO', 'Colombia', 57),
(48, 'KM', 'Comoros', 269),
(49, 'CG', 'Republic Of The Congo', 242),
(50, 'CD', 'Democratic Republic Of The Congo', 242),
(51, 'CK', 'Cook Islands', 682),
(52, 'CR', 'Costa Rica', 506),
(53, 'CI', 'Cote D\'Ivoire (Ivory Coast)', 225),
(54, 'HR', 'Croatia (Hrvatska)', 385),
(55, 'CU', 'Cuba', 53),
(56, 'CY', 'Cyprus', 357),
(57, 'CZ', 'Czech Republic', 420),
(58, 'DK', 'Denmark', 45),
(59, 'DJ', 'Djibouti', 253),
(60, 'DM', 'Dominica', 1767),
(61, 'DO', 'Dominican Republic', 1809),
(62, 'TP', 'East Timor', 670),
(63, 'EC', 'Ecuador', 593),
(64, 'EG', 'Egypt', 20),
(65, 'SV', 'El Salvador', 503),
(66, 'GQ', 'Equatorial Guinea', 240),
(67, 'ER', 'Eritrea', 291),
(68, 'EE', 'Estonia', 372),
(69, 'ET', 'Ethiopia', 251),
(70, 'XA', 'External Territories of Australia', 61),
(71, 'FK', 'Falkland Islands', 500),
(72, 'FO', 'Faroe Islands', 298),
(73, 'FJ', 'Fiji Islands', 679),
(74, 'FI', 'Finland', 358),
(75, 'FR', 'France', 33),
(76, 'GF', 'French Guiana', 594),
(77, 'PF', 'French Polynesia', 689),
(78, 'TF', 'French Southern Territories', 0),
(79, 'GA', 'Gabon', 241),
(80, 'GM', 'Gambia The', 220),
(81, 'GE', 'Georgia', 995),
(82, 'DE', 'Germany', 49),
(83, 'GH', 'Ghana', 233),
(84, 'GI', 'Gibraltar', 350),
(85, 'GR', 'Greece', 30),
(86, 'GL', 'Greenland', 299),
(87, 'GD', 'Grenada', 1473),
(88, 'GP', 'Guadeloupe', 590),
(89, 'GU', 'Guam', 1671),
(90, 'GT', 'Guatemala', 502),
(91, 'XU', 'Guernsey and Alderney', 44),
(92, 'GN', 'Guinea', 224),
(93, 'GW', 'Guinea-Bissau', 245),
(94, 'GY', 'Guyana', 592),
(95, 'HT', 'Haiti', 509),
(96, 'HM', 'Heard and McDonald Islands', 0),
(97, 'HN', 'Honduras', 504),
(98, 'HK', 'Hong Kong S.A.R.', 852),
(99, 'HU', 'Hungary', 36),
(100, 'IS', 'Iceland', 354),
(101, 'IN', 'India', 91),
(102, 'ID', 'Indonesia', 62),
(103, 'IR', 'Iran', 98),
(104, 'IQ', 'Iraq', 964),
(105, 'IE', 'Ireland', 353),
(106, 'IL', 'Israel', 972),
(107, 'IT', 'Italy', 39),
(108, 'JM', 'Jamaica', 1876),
(109, 'JP', 'Japan', 81),
(110, 'XJ', 'Jersey', 44),
(111, 'JO', 'Jordan', 962),
(112, 'KZ', 'Kazakhstan', 7),
(113, 'KE', 'Kenya', 254),
(114, 'KI', 'Kiribati', 686),
(115, 'KP', 'Korea North', 850),
(116, 'KR', 'Korea South', 82),
(117, 'KW', 'Kuwait', 965),
(118, 'KG', 'Kyrgyzstan', 996),
(119, 'LA', 'Laos', 856),
(120, 'LV', 'Latvia', 371),
(121, 'LB', 'Lebanon', 961),
(122, 'LS', 'Lesotho', 266),
(123, 'LR', 'Liberia', 231),
(124, 'LY', 'Libya', 218),
(125, 'LI', 'Liechtenstein', 423),
(126, 'LT', 'Lithuania', 370),
(127, 'LU', 'Luxembourg', 352),
(128, 'MO', 'Macau S.A.R.', 853),
(129, 'MK', 'Macedonia', 389),
(130, 'MG', 'Madagascar', 261),
(131, 'MW', 'Malawi', 265),
(132, 'MY', 'Malaysia', 60),
(133, 'MV', 'Maldives', 960),
(134, 'ML', 'Mali', 223),
(135, 'MT', 'Malta', 356),
(136, 'XM', 'Man (Isle of)', 44),
(137, 'MH', 'Marshall Islands', 692),
(138, 'MQ', 'Martinique', 596),
(139, 'MR', 'Mauritania', 222),
(140, 'MU', 'Mauritius', 230),
(141, 'YT', 'Mayotte', 269),
(142, 'MX', 'Mexico', 52),
(143, 'FM', 'Micronesia', 691),
(144, 'MD', 'Moldova', 373),
(145, 'MC', 'Monaco', 377),
(146, 'MN', 'Mongolia', 976),
(147, 'MS', 'Montserrat', 1664),
(148, 'MA', 'Morocco', 212),
(149, 'MZ', 'Mozambique', 258),
(150, 'MM', 'Myanmar', 95),
(151, 'NA', 'Namibia', 264),
(152, 'NR', 'Nauru', 674),
(153, 'NP', 'Nepal', 977),
(154, 'AN', 'Netherlands Antilles', 599),
(155, 'NL', 'Netherlands The', 31),
(156, 'NC', 'New Caledonia', 687),
(157, 'NZ', 'New Zealand', 64),
(158, 'NI', 'Nicaragua', 505),
(159, 'NE', 'Niger', 227),
(160, 'NG', 'Nigeria', 234),
(161, 'NU', 'Niue', 683),
(162, 'NF', 'Norfolk Island', 672),
(163, 'MP', 'Northern Mariana Islands', 1670),
(164, 'NO', 'Norway', 47),
(165, 'OM', 'Oman', 968),
(166, 'PK', 'Pakistan', 92),
(167, 'PW', 'Palau', 680),
(168, 'PS', 'Palestinian Territory Occupied', 970),
(169, 'PA', 'Panama', 507),
(170, 'PG', 'Papua new Guinea', 675),
(171, 'PY', 'Paraguay', 595),
(172, 'PE', 'Peru', 51),
(173, 'PH', 'Philippines', 63),
(174, 'PN', 'Pitcairn Island', 0),
(175, 'PL', 'Poland', 48),
(176, 'PT', 'Portugal', 351),
(177, 'PR', 'Puerto Rico', 1787),
(178, 'QA', 'Qatar', 974),
(179, 'RE', 'Reunion', 262),
(180, 'RO', 'Romania', 40),
(181, 'RU', 'Russia', 70),
(182, 'RW', 'Rwanda', 250),
(183, 'SH', 'Saint Helena', 290),
(184, 'KN', 'Saint Kitts And Nevis', 1869),
(185, 'LC', 'Saint Lucia', 1758),
(186, 'PM', 'Saint Pierre and Miquelon', 508),
(187, 'VC', 'Saint Vincent And The Grenadines', 1784),
(188, 'WS', 'Samoa', 684),
(189, 'SM', 'San Marino', 378),
(190, 'ST', 'Sao Tome and Principe', 239),
(191, 'SA', 'Saudi Arabia', 966),
(192, 'SN', 'Senegal', 221),
(193, 'RS', 'Serbia', 381),
(194, 'SC', 'Seychelles', 248),
(195, 'SL', 'Sierra Leone', 232),
(196, 'SG', 'Singapore', 65),
(197, 'SK', 'Slovakia', 421),
(198, 'SI', 'Slovenia', 386),
(199, 'XG', 'Smaller Territories of the UK', 44),
(200, 'SB', 'Solomon Islands', 677),
(201, 'SO', 'Somalia', 252),
(202, 'ZA', 'South Africa', 27),
(203, 'GS', 'South Georgia', 0),
(204, 'SS', 'South Sudan', 211),
(205, 'ES', 'Spain', 34),
(206, 'LK', 'Sri Lanka', 94),
(207, 'SD', 'Sudan', 249),
(208, 'SR', 'Suriname', 597),
(209, 'SJ', 'Svalbard And Jan Mayen Islands', 47),
(210, 'SZ', 'Swaziland', 268),
(211, 'SE', 'Sweden', 46),
(212, 'CH', 'Switzerland', 41),
(213, 'SY', 'Syria', 963),
(214, 'TW', 'Taiwan', 886),
(215, 'TJ', 'Tajikistan', 992),
(216, 'TZ', 'Tanzania', 255),
(217, 'TH', 'Thailand', 66),
(218, 'TG', 'Togo', 228),
(219, 'TK', 'Tokelau', 690),
(220, 'TO', 'Tonga', 676),
(221, 'TT', 'Trinidad And Tobago', 1868),
(222, 'TN', 'Tunisia', 216),
(223, 'TR', 'Turkey', 90),
(224, 'TM', 'Turkmenistan', 7370),
(225, 'TC', 'Turks And Caicos Islands', 1649),
(226, 'TV', 'Tuvalu', 688),
(227, 'UG', 'Uganda', 256),
(228, 'UA', 'Ukraine', 380),
(229, 'AE', 'United Arab Emirates', 971),
(230, 'GB', 'United Kingdom', 44),
(231, 'US', 'United States', 1),
(232, 'UM', 'United States Minor Outlying Islands', 1),
(233, 'UY', 'Uruguay', 598),
(234, 'UZ', 'Uzbekistan', 998),
(235, 'VU', 'Vanuatu', 678),
(236, 'VA', 'Vatican City State (Holy See)', 39),
(237, 'VE', 'Venezuela', 58),
(238, 'VN', 'Vietnam', 84),
(239, 'VG', 'Virgin Islands (British)', 1284),
(240, 'VI', 'Virgin Islands (US)', 1340),
(241, 'WF', 'Wallis And Futuna Islands', 681),
(242, 'EH', 'Western Sahara', 212),
(243, 'YE', 'Yemen', 967),
(244, 'YU', 'Yugoslavia', 38),
(245, 'ZM', 'Zambia', 260),
(246, 'ZW', 'Zimbabwe', 263);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2018_01_01_000000_create_action_events_table', 1),
(9, '2019_05_10_000000_add_fields_to_action_events_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2019_09_15_064343_create_permissions_table', 1),
(12, '2019_09_15_064402_create_roles_table', 1),
(13, '2019_09_15_065225_create_users_permissions_table', 1),
(14, '2019_09_15_065350_create_users_roles_table', 1),
(15, '2019_09_15_065443_create_roles_permissions_table', 1),
(16, '2019_11_10_092938_create_user_testimonials_table', 1),
(17, '2019_11_22_073904_create_articles_table', 1),
(18, '2019_11_22_073904_create_services_table', 1),
(19, '2019_11_24_073908_create_user_work_goals_table', 1),
(20, '2019_11_24_092408_create_user_education_histories_table', 1),
(21, '2019_11_24_092446_create_user_financial_plans_table', 1),
(22, '2019_11_24_111251_create_user_important_factors_table', 1),
(23, '2019_12_10_112533_create_tasks_table', 1),
(24, '2019_12_10_112548_create_categories_table', 1),
(25, '2019_12_10_112548_create_tags_table', 1),
(26, '2019_12_11_065350_create_articles_tags_table', 1),
(27, '2019_12_13_183918_create_threads_table', 1),
(28, '2019_12_13_184021_create_replies_table', 1),
(29, '2019_12_20_053506_create_user_profiles_table', 1),
(30, '2019_12_20_060647_create_user_dependants_table', 1),
(31, '2019_12_20_060756_create_user_work_experiences_table', 1),
(32, '2019_12_20_060828_create_user_background_infos_table', 1),
(33, '2019_12_26_161441_create_user_visited_countries_table', 1),
(34, '2020_03_07_085131_create_user_education', 1),
(35, '2020_03_07_094355_create_user_work_goal', 1),
(36, '2020_03_13_191358_create_tag_tables', 2);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('00024d9c1aa499c887c12ab23804e0ec2aeeb348b0d6061f60d575023d642faafcf4b105843fb19c', 1, 1, 'MyApp', '[]', 0, '2020-03-13 14:21:05', '2020-03-13 14:21:05', '2021-03-13 18:21:05'),
('006e78eb0c7ecca3bbdb6a660344478699615f298faf1ac79a99495a9d921e23270fa5eeba247948', 1, 1, 'MyApp', '[]', 0, '2020-03-14 03:14:18', '2020-03-14 03:14:18', '2021-03-14 07:14:18'),
('1306dbb39c1195f268d431842d13bf3ccb6d9c14f7507139511aab4906c246f5f71ef93dde658899', 1, 1, 'MyApp', '[]', 0, '2020-03-14 03:46:41', '2020-03-14 03:46:41', '2021-03-14 07:46:41'),
('1653d6a28f4cb00ee27b8bef3785f2df3d02e524d8fefd2f7818b99773daee6a0f5c4195d9a094c6', 1, 1, 'MyApp', '[]', 0, '2020-03-14 02:53:36', '2020-03-14 02:53:36', '2021-03-14 06:53:36'),
('1742c6879f665ac9341391e525641780ea0a0aef70754feb531a7a5f211f199abedba2dda5280341', 1, 1, 'MyApp', '[]', 0, '2020-03-13 14:21:04', '2020-03-13 14:21:04', '2021-03-13 18:21:04'),
('1e7cb08e1fb70db432c6754bcd1179536146d48e63f1d094109d9c635677ca66cf6852160b273077', 1, 1, 'MyApp', '[]', 0, '2020-03-13 14:21:03', '2020-03-13 14:21:03', '2021-03-13 18:21:03'),
('1ee6775be8ceb7ce44f05de7a02dd625aced8a6e4adaa00f1a1010c669e91f40918ec79cb651bc07', 1, 1, 'MyApp', '[]', 0, '2020-03-13 14:18:50', '2020-03-13 14:18:50', '2021-03-13 18:18:50'),
('219977714bd654980f7f73eecfb640ba7ceeacbc162dcfcbf1917bb61fd0b8d705a4d9c7025ab9a1', 1, 1, 'MyApp', '[]', 0, '2020-03-13 14:22:49', '2020-03-13 14:22:49', '2021-03-13 18:22:49'),
('2897b6b3243a13e8c8dd0a1bc26525b2a14bbe3deed9f62d81e00763778ee06eef75bbf9d8bedcab', 1, 1, 'MyApp', '[]', 0, '2020-03-13 14:20:46', '2020-03-13 14:20:46', '2021-03-13 18:20:46'),
('2e6af14387932c26056e06ed1abbc842b0fbcd70c9af341f37151d7ebc158b8cfc069d0002bd1fed', 1, 1, 'MyApp', '[]', 0, '2020-03-14 04:09:57', '2020-03-14 04:09:57', '2021-03-14 08:09:57'),
('327bbe1530b1d6e643700a14118a282e73b3d8c91f82a6b57893c654c3b6ddd92cff0785881e9aac', 1, 1, 'MyApp', '[]', 0, '2020-03-14 03:33:22', '2020-03-14 03:33:22', '2021-03-14 07:33:22'),
('3541138fb2e0e3b4f4683f80a1037759a34ea35631fe4486879b023990c3d914e00c280aeaea54c7', 1, 1, 'MyApp', '[]', 0, '2020-03-14 03:06:38', '2020-03-14 03:06:38', '2021-03-14 07:06:38'),
('36de3e81ff5f4dfe2589c94310d3424f1048a4dc1befb17aa424a0e9e2e9b844803e6fd567a4cbc3', 1, 1, 'MyApp', '[]', 0, '2020-03-13 14:18:43', '2020-03-13 14:18:43', '2021-03-13 18:18:43'),
('3796c7dedea7cc0946df60db73c536493bbd1f147f05e932fee03696a95a4bd1e50ff06c08d47b4e', 1, 1, 'MyApp', '[]', 0, '2020-03-13 14:18:42', '2020-03-13 14:18:42', '2021-03-13 18:18:42'),
('4e24376912ad9b9933fb4f7fe5024e35fcefd250264a68a9457a0b38b03319de2c7a32478ca6b750', 1, 1, 'MyApp', '[]', 0, '2020-03-14 02:56:36', '2020-03-14 02:56:36', '2021-03-14 06:56:36'),
('5146534e457e6d16984a61527a33e8322acebcfc6846d76e9f996cf6e9ca7103434bb19e4243e331', 1, 1, 'MyApp', '[]', 0, '2020-03-13 14:02:28', '2020-03-13 14:02:28', '2021-03-13 18:02:28'),
('5c0d3b192027a52542a71e1db2750d1daf671166db069c8f4dba86a179dbe34fdca3c67dda9d18cf', 1, 1, 'MyApp', '[]', 0, '2020-03-14 03:16:11', '2020-03-14 03:16:11', '2021-03-14 07:16:11'),
('5d49c7f6a1061e17cc73934a58f1cb405def5e416eab6db3545c1da10d87fd72f207ee8d7f376827', 1, 1, 'MyApp', '[]', 0, '2020-03-13 16:58:26', '2020-03-13 16:58:26', '2021-03-13 20:58:26'),
('5eda006c7f14dc554d797059db4090be2e57671166b11b7ffbb9a9c6b7f8bf2b54100f8c6c9826b7', 1, 1, 'MyApp', '[]', 0, '2020-03-13 14:17:48', '2020-03-13 14:17:48', '2021-03-13 18:17:48'),
('6ea62914b527c8788e6c8fed0a428de2b0c87a5db1d54c1c29f881d08c3c837721fb5b94f30bbdda', 1, 1, 'MyApp', '[]', 0, '2020-03-14 04:02:34', '2020-03-14 04:02:34', '2021-03-14 08:02:34'),
('6f1fac4ff159ad53a053b821547375d2edf9298727e4b282a7b67db96e8e0eb86b418b357cbb5899', 1, 1, 'MyApp', '[]', 0, '2020-03-13 14:18:42', '2020-03-13 14:18:42', '2021-03-13 18:18:42'),
('75e76c4e52b9a6717889dfeeeb065f6ec5c900fb6210c06270df652267ad28d30d9dc21425bd138e', 1, 1, 'MyApp', '[]', 0, '2020-03-14 03:16:02', '2020-03-14 03:16:02', '2021-03-14 07:16:02'),
('7b38e2ccddef794a86d5eb2b9a75168a23ac770f9f193c4ce038ffdeb42e481eda2a67dcdbacb43d', 1, 1, 'MyApp', '[]', 0, '2020-03-14 03:25:01', '2020-03-14 03:25:01', '2021-03-14 07:25:01'),
('7bfc29a9debbdc11eee050fd14c4f4ace95f45939517bec54602e1a7ea4f46d4c0ae1433d7278190', 1, 1, 'MyApp', '[]', 0, '2020-03-13 14:19:07', '2020-03-13 14:19:07', '2021-03-13 18:19:07'),
('814664aee48ef096d30bf29215baf7becd1cf58d00a92907e2dd137669f0979b167785649d674fda', 1, 1, 'MyApp', '[]', 0, '2020-03-14 04:15:44', '2020-03-14 04:15:44', '2021-03-14 08:15:44'),
('8220fa254e26603515a54b7cb2218596eded5e1bca6978f4cdc4455eb78ce98c753ea11c015cdcaa', 1, 1, 'MyApp', '[]', 0, '2020-03-14 02:56:13', '2020-03-14 02:56:13', '2021-03-14 06:56:13'),
('8706f4935f2efd5f2b9a135d28022fdc1f72f7e203d160fd4b0f083df4b521f5051df02fdb4a3798', 1, 1, 'MyApp', '[]', 0, '2020-03-14 05:09:51', '2020-03-14 05:09:51', '2021-03-14 09:09:51'),
('94188870e2b46b0a78f4e2f6a17076dca5ef82f15e1553654a7082c94d6fb2cb17486c18bd85dad4', 1, 1, 'MyApp', '[]', 0, '2020-03-13 14:20:46', '2020-03-13 14:20:46', '2021-03-13 18:20:46'),
('94d519237d7c2124e37cfe8002af8a3ab83d910ef9b977e9a4d753077d22ea65afceb3393c8f5783', 1, 1, 'MyApp', '[]', 0, '2020-03-13 14:21:03', '2020-03-13 14:21:03', '2021-03-13 18:21:03'),
('993a0b7709866a8d74643b8d037713acf44fba15c0448ff0f1f9d4b3475670f3b6e80518202033ab', 1, 1, 'MyApp', '[]', 0, '2020-03-14 03:17:07', '2020-03-14 03:17:07', '2021-03-14 07:17:07'),
('9da7a1680aa0a56ad3961536ade437c2871b77ce50f235f026e7088d6c305e9b6f734423c159d5e6', 1, 1, 'MyApp', '[]', 0, '2020-03-13 14:18:47', '2020-03-13 14:18:47', '2021-03-13 18:18:47'),
('a29922220170c49ba511e4ba4ebda0a35e2bf22c36a43a971313e946d9942e1967358ac41c1b3f45', 1, 1, 'MyApp', '[]', 0, '2020-03-13 14:19:34', '2020-03-13 14:19:34', '2021-03-13 18:19:34'),
('aeb0dec5fe05b1aaaefd2357f6cd93646f51b7b72970f895f02d1846053c179d502c37cb5f63561d', 1, 1, 'MyApp', '[]', 0, '2020-03-14 02:54:51', '2020-03-14 02:54:51', '2021-03-14 06:54:51'),
('b0b4e71e56aa00da7a6cbcaf710ba736a985557ac1f60ff2b0e02c340a0cb3d1d3c7195f7a96fbfe', 1, 1, 'MyApp', '[]', 0, '2020-03-14 04:06:55', '2020-03-14 04:06:55', '2021-03-14 08:06:55'),
('b45deec68cc5a98ae464da144e86ef93f1528cb46f063f8b6ebbc8da2b638690657f46450c18d9c2', 1, 1, 'MyApp', '[]', 0, '2020-03-14 03:14:24', '2020-03-14 03:14:24', '2021-03-14 07:14:24'),
('b5b50553bfa2b4db5d47eba8f5b446129fb671577c69b95e514722aa510cf60c877accfe08a32c8d', 1, 1, 'MyApp', '[]', 0, '2020-03-13 14:26:01', '2020-03-13 14:26:01', '2021-03-13 18:26:01'),
('b69062ce39383c555a053c3f19a13121fe6a20dafa5f2eefc5587756446c13c522706d148db41ffc', 1, 1, 'MyApp', '[]', 0, '2020-03-13 14:08:50', '2020-03-13 14:08:50', '2021-03-13 18:08:50'),
('b8316d7dc74a84a4f8e377c875f350ea6bd2b75edc168daa1dde02add1e44fa1ead061bd2c1c1178', 1, 1, 'MyApp', '[]', 0, '2020-03-14 03:13:17', '2020-03-14 03:13:17', '2021-03-14 07:13:17'),
('bced2e1abf49212d011fc3720108be97f1cc7cafcca109e9b97382e5da18203c085483f998efa3c8', 1, 1, 'MyApp', '[]', 0, '2020-03-14 03:03:30', '2020-03-14 03:03:30', '2021-03-14 07:03:30'),
('be3286376ba1434d4ff3bdafe65fb0deee30215606e9948dd08964e37c10c48fd9deb195ae9705ca', 1, 1, 'MyApp', '[]', 0, '2020-03-13 13:50:43', '2020-03-13 13:50:43', '2021-03-13 17:50:43'),
('d0222cfdcacc7d2a9da447cfce8a5ae04f613029d2ce57791309e8003fd93faac6bc56b9188d9182', 1, 1, 'MyApp', '[]', 0, '2020-03-13 14:18:44', '2020-03-13 14:18:44', '2021-03-13 18:18:44'),
('d1b20ee21ac034740bc7defef9a53c1436c631de67be2391ec62194863faa64d5b432a87c57a0f58', 1, 1, 'MyApp', '[]', 0, '2020-03-14 04:16:17', '2020-03-14 04:16:17', '2021-03-14 08:16:17'),
('d4f4327ecc3b9e92f0839286ed76a8a8972f8102c674980d166fba1d8825f4eb423cbf7204b12ac4', 1, 1, 'MyApp', '[]', 0, '2020-03-14 04:12:18', '2020-03-14 04:12:18', '2021-03-14 08:12:18'),
('e1b07f9a353331266fbacdb9d91964cdce81cf840a33c039f5d609d6baab0199a5173f1d29fa418f', 1, 1, 'MyApp', '[]', 0, '2020-03-13 14:18:49', '2020-03-13 14:18:49', '2021-03-13 18:18:49'),
('e811eb5011112a9817efe0dfe8e13ac6f36a348a3b9e47a19b15c60a5b2391b23251df3f3326e9d4', 1, 1, 'MyApp', '[]', 0, '2020-03-14 03:28:24', '2020-03-14 03:28:24', '2021-03-14 07:28:24'),
('f14d4be4f2ab196744b29aa02df057c098b2e7e341cbf81fe63446951cf65242c6fcf3c15e08a294', 1, 1, 'MyApp', '[]', 0, '2020-03-14 04:34:27', '2020-03-14 04:34:27', '2021-03-14 08:34:27'),
('f267249ae48a739d76efca39bd8437ad8e8b9338203a5165a045af55dfad036d4cc4a0b205e009d0', 1, 1, 'MyApp', '[]', 0, '2020-03-13 14:18:49', '2020-03-13 14:18:49', '2021-03-13 18:18:49'),
('fbede8703bae7ddb5c19fcd9a89583d7e045114c3396c36bc6cbba438c80cb0ce270b7adcc29bb68', 1, 1, 'MyApp', '[]', 0, '2020-03-13 14:18:51', '2020-03-13 14:18:51', '2021-03-13 18:18:51');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'MigrationMasters Personal Access Client', 'YtPnhoM09twTkBj9MHbWiK4ZUiLq8teNYO9cR3C5', 'http://localhost', 1, 0, 0, '2020-03-13 13:50:38', '2020-03-13 13:50:38'),
(2, NULL, 'MigrationMasters Password Grant Client', 'YGcD9kmXI0UJPQGuHNSo1eYwl77PMWaSrz3Vij4D', 'http://localhost', 0, 1, 0, '2020-03-13 13:50:38', '2020-03-13 13:50:38');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-03-13 13:50:38', '2020-03-13 13:50:38');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thread_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles_permissions`
--

CREATE TABLE `roles_permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `featured_image` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` tinyint(1) NOT NULL DEFAULT '0',
  `published_at` datetime NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `slug`, `excerpt`, `body`, `is_published`, `featured_image`, `country`, `published_at`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Education Visa', 'Education-visa', 'We are there to help you enroll at a qualified educational institution and obtain your student visa in any country of your choice.', 'We are there to help you enroll at a qualified educational institution and obtain your student visa in any country of your choice.', 1, NULL, 0, '2020-03-13 08:00:00', NULL, '2020-03-13 12:54:31', '2020-03-14 12:11:35'),
(2, 'Job Seeker Visa canada', 'Job-seeker-visa', 'This type of visa allows you to work in a certain country of your choice through a specific period of time and we are here to ensure that you collect this visa and simplify the process for obtaining it.', 'This type of visa allows you to work in a certain country of your choice through a specific period of time and we are here to ensure that you collect this visa and simplify the process for obtaining it.', 1, NULL, 1, '2020-03-13 08:00:00', NULL, '2020-03-13 12:55:23', '2020-03-14 14:14:58'),
(3, 'test', 'test', 'test', '<p>test</p>', 1, NULL, 1, '2020-03-14 08:00:00', NULL, '2020-03-14 14:37:36', '2020-03-14 14:37:36');

-- --------------------------------------------------------

--
-- Table structure for table `taggables`
--

CREATE TABLE `taggables` (
  `tag_id` int(10) UNSIGNED NOT NULL,
  `taggable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taggable_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taggables`
--

INSERT INTO `taggables` (`tag_id`, `taggable_type`, `taggable_id`) VALUES
(2, 'App\\Articles', 1),
(1, 'App\\Articles', 2),
(1, 'App\\Articles', 3),
(1, 'App\\Articles', 21),
(2, 'App\\Articles', 21),
(5, 'App\\Articles', 21),
(3, 'App\\Services', 2),
(9, 'App\\Services', 2),
(9, 'App\\Services', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` json NOT NULL,
  `slug` json NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_column` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `type`, `order_column`, `created_at`, `updated_at`) VALUES
(1, '{\"en\": \"virustag\"}', '{\"en\": \"virustag\"}', NULL, 1, '2020-03-13 15:45:05', '2020-03-13 15:45:05'),
(2, '{\"en\": \"brother\"}', '{\"en\": \"brother\"}', NULL, 2, '2020-03-13 16:40:34', '2020-03-13 16:40:34'),
(3, '{\"en\": \"canada\"}', '{\"en\": \"canada\"}', NULL, 3, '2020-03-14 12:10:21', '2020-03-14 12:10:21'),
(4, '{\"en\": \"headline\"}', '{\"en\": \"headline\"}', 'newsTag', 4, '2020-03-14 13:34:53', '2020-03-14 13:34:53'),
(5, '{\"en\": \"vi\"}', '{\"en\": \"vi\"}', 'articles', 5, '2020-03-14 13:58:31', '2020-03-14 13:58:31'),
(6, '{\"en\": \"VHGG\"}', '{\"en\": \"vhgg\"}', 'services', 6, '2020-03-14 14:00:45', '2020-03-14 14:00:45'),
(8, '{\"en\": \"Australia\"}', '{\"en\": \"australia\"}', 'country', 7, '2020-03-14 14:00:45', '2020-03-14 15:27:22'),
(9, '{\"en\": \"Canada\"}', '{\"en\": \"canada\"}', 'country', 8, '2020-03-14 14:14:58', '2020-03-14 15:27:05'),
(10, '{\"en\": \"United Kingdom\"}', '{\"en\": \"united-kingdom\"}', 'country', 9, '2020-03-14 15:26:40', '2020-03-14 15:26:40'),
(11, '{\"en\": \"USA\"}', '{\"en\": \"usa\"}', 'country', 10, '2020-03-14 15:27:45', '2020-03-14 15:27:45'),
(12, '{\"en\": \"Germany\"}', '{\"en\": \"germany\"}', 'country', 11, '2020-03-14 15:28:01', '2020-03-14 15:28:01'),
(13, '{\"en\": \"Netherlands\"}', '{\"en\": \"netherlands\"}', 'country', 12, '2020-03-14 15:28:19', '2020-03-14 15:28:19'),
(14, '{\"en\": \"France\"}', '{\"en\": \"france\"}', 'country', 13, '2020-03-14 15:28:30', '2020-03-14 15:28:30'),
(15, '{\"en\": \"Mauritius\"}', '{\"en\": \"mauritius\"}', NULL, 14, '2020-03-14 15:44:36', '2020-03-14 15:44:36');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visa_for` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Canada',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `phone`, `visa_for`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Odiso Edim', 'itakpoodiso@gmail.com', '2020-03-13 11:05:27', '$2y$10$pQmrZv3TUDcj1F/AMShbj.pumqgReZk6BV1qmLGhWdLna8lmNEFMW', 'k5L52N21OkvhJZ0PalI3NvoD4Hk7tFTqa3xtFWQrbyww1OynhosUajEyDS6C', '54290230', 'Canada', '2020-03-13 11:02:57', '2020-03-13 11:05:45', NULL),
(2, 'redeem edim', 'seyi@gmail.com', NULL, '$2y$10$bNez4z0WeY4FHMJTX/wmPOX6IUoEkBK7RLCkHzr5axL6eksFPhwJS', NULL, '+6595959', 'Canada', '2020-03-13 17:30:37', '2020-03-13 17:30:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_permissions`
--

CREATE TABLE `users_permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_roles`
--

CREATE TABLE `users_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_background_infos`
--

CREATE TABLE `user_background_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `familytuberculosis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mentaldisorder` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moreinfomedical` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beyondvalidity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `refusedentry` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `previousapplication` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moreinfovisa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `policecertificate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `criminaloffence` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moreinfocriminal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `courtproceduresabroad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `courtprocedureshome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moreinfocourt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_dependants`
--

CREATE TABLE `user_dependants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relationship` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_education`
--

CREATE TABLE `user_education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gotoffer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startingdate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `undergraduate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postgraduate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_education_histories`
--

CREATE TABLE `user_education_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `institution` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `starting_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ending _date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discipline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_financial_plans`
--

CREATE TABLE `user_financial_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `sponsor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `budget` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_financial_plans`
--

INSERT INTO `user_financial_plans` (`id`, `user_id`, `sponsor`, `budget`, `created_at`, `updated_at`) VALUES
(1, 1, 'Yes', '20,000', '2020-03-13 13:51:08', '2020-03-13 13:51:08');

-- --------------------------------------------------------

--
-- Table structure for table `user_important_factors`
--

CREATE TABLE `user_important_factors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `haddress` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `cob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `citizenship` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Not Applicable',
  `expiry` date NOT NULL,
  `pdivorced` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mstatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nlanguage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filePhoto` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `user_id`, `fname`, `lname`, `mname`, `oname`, `country`, `city`, `state`, `haddress`, `gender`, `age`, `dob`, `cob`, `nationality`, `citizenship`, `expiry`, `pdivorced`, `mstatus`, `nlanguage`, `language`, `filePhoto`, `created_at`, `updated_at`) VALUES
(1, 1, 'odiso', 'itakpo', 'edim', 'odiso edim', 'Azerbaijan', 'vacoas', 'cross river state', '3 closel road', 'female', '24', '2020-03-05', 'American Samoa', 'Armenia', 'Armenia', '2020-03-21', 'yes', 'Widowed', 'Creole', 'english', '1584176974.jpeg', '2020-03-14 05:07:18', '2020-03-14 05:09:34');

-- --------------------------------------------------------

--
-- Table structure for table `user_testimonials`
--

CREATE TABLE `user_testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `make_public` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate_us` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '3',
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `isPublished` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_visited_countries`
--

CREATE TABLE `user_visited_countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_works`
--

CREATE TABLE `user_works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `gotjob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `professional_certifications` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill_sets` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_work_experiences`
--

CREATE TABLE `user_work_experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_period_start` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_period_end` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_work_goal`
--

CREATE TABLE `user_work_goal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `gotjob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `professional_certifications` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill_sets` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `action_events`
--
ALTER TABLE `action_events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `action_events_actionable_type_actionable_id_index` (`actionable_type`,`actionable_id`),
  ADD KEY `action_events_batch_id_model_type_model_id_index` (`batch_id`,`model_type`,`model_id`),
  ADD KEY `action_events_user_id_index` (`user_id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_user_id_foreign` (`user_id`);

--
-- Indexes for table `articles_tags`
--
ALTER TABLE `articles_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `replies_user_id_foreign` (`user_id`),
  ADD KEY `replies_thread_id_foreign` (`thread_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles_permissions`
--
ALTER TABLE `roles_permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_permissions_role_id_permission_id_unique` (`role_id`,`permission_id`),
  ADD KEY `roles_permissions_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taggables`
--
ALTER TABLE `taggables`
  ADD UNIQUE KEY `taggables_tag_id_taggable_id_taggable_type_unique` (`tag_id`,`taggable_id`,`taggable_type`),
  ADD KEY `taggables_taggable_type_taggable_id_index` (`taggable_type`,`taggable_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tasks_user_id_foreign` (`user_id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `threads_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_permissions`
--
ALTER TABLE `users_permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_permissions_user_id_permission_id_unique` (`user_id`,`permission_id`),
  ADD KEY `users_permissions_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `users_roles`
--
ALTER TABLE `users_roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_roles_user_id_role_id_unique` (`user_id`,`role_id`),
  ADD KEY `users_roles_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_background_infos`
--
ALTER TABLE `user_background_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_background_infos_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_dependants`
--
ALTER TABLE `user_dependants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_dependants_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_education`
--
ALTER TABLE `user_education`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_education_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_education_histories`
--
ALTER TABLE `user_education_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_education_histories_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_financial_plans`
--
ALTER TABLE `user_financial_plans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_financial_plans_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_important_factors`
--
ALTER TABLE `user_important_factors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_testimonials`
--
ALTER TABLE `user_testimonials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_testimonials_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_visited_countries`
--
ALTER TABLE `user_visited_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_works`
--
ALTER TABLE `user_works`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_works_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_work_experiences`
--
ALTER TABLE `user_work_experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_work_experiences_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_work_goal`
--
ALTER TABLE `user_work_goal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_work_goal_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `action_events`
--
ALTER TABLE `action_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `articles_tags`
--
ALTER TABLE `articles_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles_permissions`
--
ALTER TABLE `roles_permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users_permissions`
--
ALTER TABLE `users_permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_roles`
--
ALTER TABLE `users_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_background_infos`
--
ALTER TABLE `user_background_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_dependants`
--
ALTER TABLE `user_dependants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_education`
--
ALTER TABLE `user_education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_education_histories`
--
ALTER TABLE `user_education_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_financial_plans`
--
ALTER TABLE `user_financial_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_important_factors`
--
ALTER TABLE `user_important_factors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_testimonials`
--
ALTER TABLE `user_testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_visited_countries`
--
ALTER TABLE `user_visited_countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_works`
--
ALTER TABLE `user_works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_work_experiences`
--
ALTER TABLE `user_work_experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_work_goal`
--
ALTER TABLE `user_work_goal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `replies_thread_id_foreign` FOREIGN KEY (`thread_id`) REFERENCES `threads` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `replies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `roles_permissions`
--
ALTER TABLE `roles_permissions`
  ADD CONSTRAINT `roles_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `roles_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `taggables`
--
ALTER TABLE `taggables`
  ADD CONSTRAINT `taggables_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `threads`
--
ALTER TABLE `threads`
  ADD CONSTRAINT `threads_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users_permissions`
--
ALTER TABLE `users_permissions`
  ADD CONSTRAINT `users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users_roles`
--
ALTER TABLE `users_roles`
  ADD CONSTRAINT `users_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_background_infos`
--
ALTER TABLE `user_background_infos`
  ADD CONSTRAINT `user_background_infos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_dependants`
--
ALTER TABLE `user_dependants`
  ADD CONSTRAINT `user_dependants_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_education`
--
ALTER TABLE `user_education`
  ADD CONSTRAINT `user_education_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_education_histories`
--
ALTER TABLE `user_education_histories`
  ADD CONSTRAINT `user_education_histories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_financial_plans`
--
ALTER TABLE `user_financial_plans`
  ADD CONSTRAINT `user_financial_plans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD CONSTRAINT `user_profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_testimonials`
--
ALTER TABLE `user_testimonials`
  ADD CONSTRAINT `user_testimonials_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_works`
--
ALTER TABLE `user_works`
  ADD CONSTRAINT `user_works_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_work_experiences`
--
ALTER TABLE `user_work_experiences`
  ADD CONSTRAINT `user_work_experiences_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_work_goal`
--
ALTER TABLE `user_work_goal`
  ADD CONSTRAINT `user_work_goal_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
