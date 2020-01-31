-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 31, 2020 at 09:43 AM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackaton`
--

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`tst_id`, `tst_class_name`, `tst_date_add`, `tst_date_edit`) VALUES
(1, 'Miscellaneous.Reset_Tenant_Preferences', '2020-01-31 09:08:22', '2020-01-31 09:08:22'),
(2, 'Miscellaneous.Clear_Tenant_Data', '2020-01-31 09:08:22', '2020-01-31 09:08:22'),
(3, 'TaskTypeManagement.MB_4225', '2020-01-31 09:08:22', '2020-01-31 09:08:22'),
(4, 'TenantManagement.MB_4109', '2020-01-31 09:08:22', '2020-01-31 09:08:22'),
(5, 'Analytics.MB_10211', '2020-01-31 09:08:22', '2020-01-31 09:08:22'),
(6, 'Analytics.MB_9581', '2020-01-31 09:08:22', '2020-01-31 09:08:22'),
(7, 'TenantManagement.MB_3888', '2020-01-31 09:08:22', '2020-01-31 09:08:22'),
(8, 'LiveView.MB_8966', '2020-01-31 09:08:22', '2020-01-31 09:08:22'),
(9, 'TenantManagement.MB_3891', '2020-01-31 09:08:22', '2020-01-31 09:08:22'),
(10, 'TenantManagement.MB_9498', '2020-01-31 09:08:22', '2020-01-31 09:08:22'),
(11, 'TaskTypeManagement.MB_6626', '2020-01-31 09:08:22', '2020-01-31 09:08:22'),
(12, 'TaskTypeManagement.MB_4224', '2020-01-31 09:08:22', '2020-01-31 09:08:22'),
(13, 'LiveView.MB_9074', '2020-01-31 09:08:22', '2020-01-31 09:08:22'),
(14, 'TenantManagement.MB_10958_MB_9089', '2020-01-31 09:08:22', '2020-01-31 09:08:22'),
(15, 'TaskTypeManagement.MB_4223', '2020-01-31 09:08:22', '2020-01-31 09:08:22'),
(16, 'TaskTypeManagement.MB_4226', '2020-01-31 09:08:22', '2020-01-31 09:08:22'),
(17, 'TaskTypeManagement.MB_3824', '2020-01-31 09:08:22', '2020-01-31 09:08:22'),
(18, 'TaskTypeManagement.MB_4222', '2020-01-31 09:08:22', '2020-01-31 09:08:22');

--
-- Dumping data for table `test_runs`
--

INSERT INTO `test_runs` (`tr_id`, `tr_name`, `tr_status`, `tr_runtime`, `tr_date_add`, `tr_date_edit`, `tr_tst_id`, `tr_error_msg`, `tr_error_type`, `tr_sys_out`, `tr_sys_err`, `tr_date`) VALUES
(1, 'Chrome_test_ResetTenantPreferences', 1, '2.2430', '2020-01-31 09:08:22', '2020-01-31 09:08:22', 1, NULL, NULL, NULL, NULL, '2020-01-30 01:43:26'),
(2, 'Chrome_test_Clear_Tenant_Data', 1, '23.8260', '2020-01-31 09:08:22', '2020-01-31 09:08:22', 2, NULL, NULL, NULL, NULL, '2020-01-30 01:43:35'),
(3, 'Chrome_test_MB_4225', 1, '41.0980', '2020-01-31 09:08:22', '2020-01-31 09:08:22', 3, NULL, NULL, NULL, NULL, '2020-01-30 01:44:04'),
(4, 'Chrome_test_MB_4109', 1, '5.3110', '2020-01-31 09:08:22', '2020-01-31 09:08:22', 4, NULL, NULL, NULL, NULL, '2020-01-30 01:44:04'),
(5, 'Chrome_test_MB_10211', 0, '28.5660', '2020-01-31 09:08:22', '2020-01-31 09:08:22', 5, NULL, 'java.lang.NullPointerException', NULL, NULL, '2020-01-30 01:44:04'),
(6, 'Chrome_test_MB_9581', 0, '28.7650', '2020-01-31 09:08:22', '2020-01-31 09:08:22', 6, 'Data is not available expected [true] but found [false]', 'java.lang.AssertionError', NULL, NULL, '2020-01-30 01:44:04'),
(7, 'Chrome_test_MB_3888', 1, '33.8460', '2020-01-31 09:08:22', '2020-01-31 09:08:22', 7, NULL, NULL, NULL, NULL, '2020-01-30 01:44:04'),
(8, 'Chrome_test_MB_8966', 1, '37.8650', '2020-01-31 09:08:22', '2020-01-31 09:08:22', 8, NULL, NULL, NULL, NULL, '2020-01-30 01:44:04'),
(9, 'Chrome_test_MB_3891', 1, '44.8280', '2020-01-31 09:08:22', '2020-01-31 09:08:22', 9, NULL, NULL, NULL, NULL, '2020-01-30 01:44:04'),
(10, 'Chrome_test_MB_9498', 0, '45.4230', '2020-01-31 09:08:22', '2020-01-31 09:08:22', 10, 'element click intercepted: Element ... is not clickable at point (671, 759). Other element would receive the click: ...\n  (Session info: headless chrome=79.0.3945.130)\nBuild info: version: \'3.141.59\', revision: \'e82be7d358\', time: \'2018-11-14T08:17:03\'\nSystem info: host: \'MBZDEV\', ip: \'10.49.200.35\', os.name: \'Windows Server 2012 R2\', os.arch: \'amd64\', os.version: \'6.3\', java.version: \'12\'\nDriver info: org.openqa.selenium.chrome.ChromeDriver\nCapabilities {acceptInsecureCerts: false, browserName: chrome, browserVersion: 79.0.3945.130, chrome: {chromedriverVersion: 79.0.3945.36 (3582db32b3389..., userDataDir: C:\\windows\\TEMP\\scoped_dir7...}, goog:chromeOptions: {debuggerAddress: localhost:60443}, javascriptEnabled: true, networkConnectionEnabled: false, pageLoadStrategy: normal, platform: WINDOWS, platformName: WINDOWS, proxy: Proxy(), setWindowRect: true, strictFileInteractability: false, timeouts: {implicit: 0, pageLoad: 300000, script: 30000}, unhandledPromptBehavior: dismiss and notify}\nSession ID: 252499483db451088eb6c1d77d2ef30a', 'org.openqa.selenium.ElementClickInterceptedException', NULL, NULL, '2020-01-30 01:44:04'),
(11, 'Chrome_test_MB_6626', 1, '51.7650', '2020-01-31 09:08:22', '2020-01-31 09:08:22', 11, NULL, NULL, NULL, NULL, '2020-01-30 01:44:57'),
(12, 'Chrome_test_MB_4224', 1, '56.3650', '2020-01-31 09:08:22', '2020-01-31 09:08:22', 12, NULL, NULL, NULL, NULL, '2020-01-30 01:44:04'),
(13, 'Chrome_test_MB_9074', 0, '103.0350', '2020-01-31 09:08:22', '2020-01-31 09:08:22', 13, 'Expected condition failed: waiting for element to no longer be visible: By.xpath: //*[@class=\'wait-context\'] (tried for 30 second(s) with 500 milliseconds interval)\nBuild info: version: \'3.141.59\', revision: \'e82be7d358\', time: \'2018-11-14T08:17:03\'\nSystem info: host: \'MBZDEV\', ip: \'10.49.200.35\', os.name: \'Windows Server 2012 R2\', os.arch: \'amd64\', os.version: \'6.3\', java.version: \'12\'\nDriver info: org.openqa.selenium.chrome.ChromeDriver\nCapabilities {acceptInsecureCerts: false, browserName: chrome, browserVersion: 79.0.3945.130, chrome: {chromedriverVersion: 79.0.3945.36 (3582db32b3389..., userDataDir: C:\\windows\\TEMP\\scoped_dir4...}, goog:chromeOptions: {debuggerAddress: localhost:60536}, javascriptEnabled: true, networkConnectionEnabled: false, pageLoadStrategy: normal, platform: WINDOWS, platformName: WINDOWS, proxy: Proxy(), setWindowRect: true, strictFileInteractability: false, timeouts: {implicit: 0, pageLoad: 300000, script: 30000}, unhandledPromptBehavior: dismiss and notify}\nSession ID: 4835baa0c0592d213dc118977afb3291', 'org.openqa.selenium.TimeoutException', NULL, NULL, '2020-01-30 01:44:04'),
(14, 'Chrome_test_MB_10958_MB_9089', 1, '108.0700', '2020-01-31 09:08:22', '2020-01-31 09:08:22', 14, NULL, NULL, NULL, NULL, '2020-01-30 01:44:04'),
(15, 'Chrome_test_MB_4223', 1, '258.1220', '2020-01-31 09:08:22', '2020-01-31 09:08:22', 15, NULL, NULL, NULL, NULL, '2020-01-30 01:44:04'),
(16, 'Chrome_test_MB_4226', 0, '270.6760', '2020-01-31 09:08:22', '2020-01-31 09:08:22', 16, NULL, 'java.lang.NullPointerException', NULL, NULL, '2020-01-30 01:44:04'),
(17, 'Chrome_test_MB_3824', 1, '278.6300', '2020-01-31 09:08:22', '2020-01-31 09:08:22', 17, NULL, NULL, NULL, NULL, '2020-01-30 01:44:04'),
(18, 'Chrome_test_MB_4222', 1, '470.9410', '2020-01-31 09:08:22', '2020-01-31 09:08:22', 18, NULL, NULL, NULL, NULL, '2020-01-30 01:44:04');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
