#
# TABLE STRUCTURE FOR: ads
#

DROP TABLE IF EXISTS `ads`;

CREATE TABLE `ads` (
  `ads_id` int(11) NOT NULL AUTO_INCREMENT,
  `ads_name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `unique_name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `ads_size` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `ads_type` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `ads_url` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `ads_image_url` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `ads_code` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `enable` int(1) DEFAULT '0',
  PRIMARY KEY (`ads_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

INSERT INTO `ads` (`ads_id`, `ads_name`, `unique_name`, `ads_size`, `ads_type`, `ads_url`, `ads_image_url`, `ads_code`, `enable`) VALUES (1, 'Home Page Header', 'home_header', '728x90', 'code', '#', '', '', 0);
INSERT INTO `ads` (`ads_id`, `ads_name`, `unique_name`, `ads_size`, `ads_type`, `ads_url`, `ads_image_url`, `ads_code`, `enable`) VALUES (2, 'Product Page Header', 'product_header', '728x90', 'code', '#', '', '', 0);
INSERT INTO `ads` (`ads_id`, `ads_name`, `unique_name`, `ads_size`, `ads_type`, `ads_url`, `ads_image_url`, `ads_code`, `enable`) VALUES (3, 'category Page Header', 'category_header', '728x90', 'code', '#', '', '', 0);
INSERT INTO `ads` (`ads_id`, `ads_name`, `unique_name`, `ads_size`, `ads_type`, `ads_url`, `ads_image_url`, `ads_code`, `enable`) VALUES (4, 'Country Page Header', 'country_header', '728x90', 'code', '#', '', '', 0);
INSERT INTO `ads` (`ads_id`, `ads_name`, `unique_name`, `ads_size`, `ads_type`, `ads_url`, `ads_image_url`, `ads_code`, `enable`) VALUES (5, 'Release Page Header', 'release_header', '728x90', 'code', '#', '', '', 0);
INSERT INTO `ads` (`ads_id`, `ads_name`, `unique_name`, `ads_size`, `ads_type`, `ads_url`, `ads_image_url`, `ads_code`, `enable`) VALUES (6, 'TV-series Page Header', 'tv_header', '728x90', 'code', '#', '', '', 0);
INSERT INTO `ads` (`ads_id`, `ads_name`, `unique_name`, `ads_size`, `ads_type`, `ads_url`, `ads_image_url`, `ads_code`, `enable`) VALUES (7, 'Type Page Header', 'type_header', '728x90', 'code', '#', '', '', 0);
INSERT INTO `ads` (`ads_id`, `ads_name`, `unique_name`, `ads_size`, `ads_type`, `ads_url`, `ads_image_url`, `ads_code`, `enable`) VALUES (8, 'Blog Page Header', 'blog_header', '728x90', 'code', '#', '', '', 0);
INSERT INTO `ads` (`ads_id`, `ads_name`, `unique_name`, `ads_size`, `ads_type`, `ads_url`, `ads_image_url`, `ads_code`, `enable`) VALUES (9, 'Sidebar', 'sidebar', '300x600', 'code', '#', '', '', 0);
INSERT INTO `ads` (`ads_id`, `ads_name`, `unique_name`, `ads_size`, `ads_type`, `ads_url`, `ads_image_url`, `ads_code`, `enable`) VALUES (12, 'Player Bottom', 'player_bottom', '728x90', 'code', '#', '', '', 0);
INSERT INTO `ads` (`ads_id`, `ads_name`, `unique_name`, `ads_size`, `ads_type`, `ads_url`, `ads_image_url`, `ads_code`, `enable`) VALUES (10, 'Player Top', 'player_top', '728x90', 'code', '#', '', '', 0);
INSERT INTO `ads` (`ads_id`, `ads_name`, `unique_name`, `ads_size`, `ads_type`, `ads_url`, `ads_image_url`, `ads_code`, `enable`) VALUES (11, 'Billboard(For product,Landing page & watch page)', 'billboard', '970x250', 'code', '#', '', '', 0);


#
# TABLE STRUCTURE FOR: calendar
#

DROP TABLE IF EXISTS `calendar`;

CREATE TABLE `calendar` (
  `country_code` char(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `coordinates` char(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `timezone` char(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `comments` varchar(85) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `utc_offset` char(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `utc_dst_offset` char(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `notes` varchar(79) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  PRIMARY KEY (`timezone`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CI', '+0519-00402', 'Africa/Abidjan', '', '+00:00', '+00:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('GH', '+0533-00013', 'Africa/Accra', '', '+00:00', '+00:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('ET', '+0902+03842', 'Africa/Addis_Ababa', '', '+03:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('DZ', '+3647+00303', 'Africa/Algiers', '', '+01:00', '+01:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('ER', '+1520+03853', 'Africa/Asmara', '', '+03:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Africa/Asmera', '', '+03:00', '+03:00', 'Link to Africa/Asmara');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('ML', '+1239-00800', 'Africa/Bamako', '', '+00:00', '+00:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CF', '+0422+01835', 'Africa/Bangui', '', '+01:00', '+01:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('GM', '+1328-01639', 'Africa/Banjul', '', '+00:00', '+00:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('GW', '+1151-01535', 'Africa/Bissau', '', '+00:00', '+00:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('MW', '-1547+03500', 'Africa/Blantyre', '', '+02:00', '+02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CG', '-0416+01517', 'Africa/Brazzaville', '', '+01:00', '+01:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('BI', '-0323+02922', 'Africa/Bujumbura', '', '+02:00', '+02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('EG', '+3003+03115', 'Africa/Cairo', '', '+02:00', '+02:00', 'DST has been canceled since 2011');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('MA', '+3339-00735', 'Africa/Casablanca', '', '+00:00', '+01:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('ES', '+3553-00519', 'Africa/Ceuta', 'Ceuta & Melilla', '+01:00', '+02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('GN', '+0931-01343', 'Africa/Conakry', '', '+00:00', '+00:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('SN', '+1440-01726', 'Africa/Dakar', '', '+00:00', '+00:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('TZ', '-0648+03917', 'Africa/Dar_es_Salaam', '', '+03:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('DJ', '+1136+04309', 'Africa/Djibouti', '', '+03:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CM', '+0403+00942', 'Africa/Douala', '', '+01:00', '+01:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('EH', '+2709-01312', 'Africa/El_Aaiun', '', '+00:00', '+00:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('SL', '+0830-01315', 'Africa/Freetown', '', '+00:00', '+00:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('BW', '-2439+02555', 'Africa/Gaborone', '', '+02:00', '+02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('ZW', '-1750+03103', 'Africa/Harare', '', '+02:00', '+02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('ZA', '-2615+02800', 'Africa/Johannesburg', '', '+02:00', '+02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('SS', '+0451+03136', 'Africa/Juba', '', '+03:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('UG', '+0019+03225', 'Africa/Kampala', '', '+03:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('SD', '+1536+03232', 'Africa/Khartoum', '', '+03:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('RW', '-0157+03004', 'Africa/Kigali', '', '+02:00', '+02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CD', '-0418+01518', 'Africa/Kinshasa', 'west Dem. Rep. of Congo', '+01:00', '+01:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('NG', '+0627+00324', 'Africa/Lagos', '', '+01:00', '+01:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('GA', '+0023+00927', 'Africa/Libreville', '', '+01:00', '+01:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('TG', '+0608+00113', 'Africa/Lome', '', '+00:00', '+00:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AO', '-0848+01314', 'Africa/Luanda', '', '+01:00', '+01:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CD', '-1140+02728', 'Africa/Lubumbashi', 'east Dem. Rep. of Congo', '+02:00', '+02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('ZM', '-1525+02817', 'Africa/Lusaka', '', '+02:00', '+02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('GQ', '+0345+00847', 'Africa/Malabo', '', '+01:00', '+01:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('MZ', '-2558+03235', 'Africa/Maputo', '', '+02:00', '+02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('LS', '-2928+02730', 'Africa/Maseru', '', '+02:00', '+02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('SZ', '-2618+03106', 'Africa/Mbabane', '', '+02:00', '+02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('SO', '+0204+04522', 'Africa/Mogadishu', '', '+03:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('LR', '+0618-01047', 'Africa/Monrovia', '', '+00:00', '+00:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('KE', '-0117+03649', 'Africa/Nairobi', '', '+03:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('TD', '+1207+01503', 'Africa/Ndjamena', '', '+01:00', '+01:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('NE', '+1331+00207', 'Africa/Niamey', '', '+01:00', '+01:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('MR', '+1806-01557', 'Africa/Nouakchott', '', '+00:00', '+00:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('BF', '+1222-00131', 'Africa/Ouagadougou', '', '+00:00', '+00:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('BJ', '+0629+00237', 'Africa/Porto-Novo', '', '+01:00', '+01:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('ST', '+0020+00644', 'Africa/Sao_Tome', '', '+00:00', '+00:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Africa/Timbuktu', '', '+00:00', '+00:00', 'Link to Africa/Bamako');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('LY', '+3254+01311', 'Africa/Tripoli', '', '+01:00', '+02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('TN', '+3648+01011', 'Africa/Tunis', '', '+01:00', '+01:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('NA', '-2234+01706', 'Africa/Windhoek', '', '+01:00', '+02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'AKST9AKDT', '', 'âˆ’09:00', 'âˆ’08:00', 'Link to America/Anchorage');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('US', '+515248-1763929', 'America/Adak', 'Aleutian Islands', 'âˆ’10:00', 'âˆ’09:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('US', '+611305-1495401', 'America/Anchorage', 'Alaska Time', 'âˆ’09:00', 'âˆ’08:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AI', '+1812-06304', 'America/Anguilla', '', 'âˆ’04:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AG', '+1703-06148', 'America/Antigua', '', 'âˆ’04:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('BR', '-0712-04812', 'America/Araguaina', 'Tocantins', 'âˆ’03:00', 'âˆ’03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AR', '-3436-05827', 'America/Argentina/Buenos_Aires', 'Buenos Aires (BA, CF)', 'âˆ’03:00', 'âˆ’03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AR', '-2828-06547', 'America/Argentina/Catamarca', 'Catamarca (CT), Chubut (CH)', 'âˆ’03:00', 'âˆ’03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'America/Argentina/ComodRivadavia', '', 'âˆ’03:00', 'âˆ’03:00', 'Link to America/Argentina/Catamarca');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AR', '-3124-06411', 'America/Argentina/Cordoba', 'most locations (CB, CC, CN, ER, FM, MN, SE, SF)', 'âˆ’03:00', 'âˆ’03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AR', '-2411-06518', 'America/Argentina/Jujuy', 'Jujuy (JY)', 'âˆ’03:00', 'âˆ’03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AR', '-2926-06651', 'America/Argentina/La_Rioja', 'La Rioja (LR)', 'âˆ’03:00', 'âˆ’03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AR', '-3253-06849', 'America/Argentina/Mendoza', 'Mendoza (MZ)', 'âˆ’03:00', 'âˆ’03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AR', '-5138-06913', 'America/Argentina/Rio_Gallegos', 'Santa Cruz (SC)', 'âˆ’03:00', 'âˆ’03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AR', '-2447-06525', 'America/Argentina/Salta', '(SA, LP, NQ, RN)', 'âˆ’03:00', 'âˆ’03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AR', '-3132-06831', 'America/Argentina/San_Juan', 'San Juan (SJ)', 'âˆ’03:00', 'âˆ’03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AR', '-3319-06621', 'America/Argentina/San_Luis', 'San Luis (SL)', 'âˆ’03:00', 'âˆ’03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AR', '-2649-06513', 'America/Argentina/Tucuman', 'Tucuman (TM)', 'âˆ’03:00', 'âˆ’03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AR', '-5448-06818', 'America/Argentina/Ushuaia', 'Tierra del Fuego (TF)', 'âˆ’03:00', 'âˆ’03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AW', '+1230-06958', 'America/Aruba', '', 'âˆ’04:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('PY', '-2516-05740', 'America/Asuncion', '', 'âˆ’04:00', 'âˆ’03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CA', '+484531-0913718', 'America/Atikokan', 'Eastern Standard Time - Atikokan, Ontario and Southampton I, Nunavut', 'âˆ’05:00', 'âˆ’05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'America/Atka', '', 'âˆ’10:00', 'âˆ’09:00', 'Link to America/Adak');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('BR', '-1259-03831', 'America/Bahia', 'Bahia', 'âˆ’03:00', 'âˆ’03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('MX', '+2048-10515', 'America/Bahia_Banderas', 'Mexican Central Time - Bahia de Banderas', 'âˆ’06:00', 'âˆ’05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('BB', '+1306-05937', 'America/Barbados', '', 'âˆ’04:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('BR', '-0127-04829', 'America/Belem', 'Amapa, E Para', 'âˆ’03:00', 'âˆ’03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('BZ', '+1730-08812', 'America/Belize', '', 'âˆ’06:00', 'âˆ’06:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CA', '+5125-05707', 'America/Blanc-Sablon', 'Atlantic Standard Time - Quebec - Lower North Shore', 'âˆ’04:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('BR', '+0249-06040', 'America/Boa_Vista', 'Roraima', 'âˆ’04:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CO', '+0436-07405', 'America/Bogota', '', 'âˆ’05:00', 'âˆ’05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('US', '+433649-1161209', 'America/Boise', 'Mountain Time - south Idaho & east Oregon', 'âˆ’07:00', 'âˆ’06:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'America/Buenos_Aires', '', 'âˆ’03:00', 'âˆ’03:00', 'Link to America/Argentina/Buenos_Aires');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CA', '+690650-1050310', 'America/Cambridge_Bay', 'Mountain Time - west Nunavut', 'âˆ’07:00', 'âˆ’06:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('BR', '-2027-05437', 'America/Campo_Grande', 'Mato Grosso do Sul', 'âˆ’04:00', 'âˆ’03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('MX', '+2105-08646', 'America/Cancun', 'Central Time - Quintana Roo', 'âˆ’06:00', 'âˆ’05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('VE', '+1030-06656', 'America/Caracas', '', 'âˆ’04:30', 'âˆ’04:30', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'America/Catamarca', '', 'âˆ’03:00', 'âˆ’03:00', 'Link to America/Argentina/Catamarca');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('GF', '+0456-05220', 'America/Cayenne', '', 'âˆ’03:00', 'âˆ’03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('KY', '+1918-08123', 'America/Cayman', '', 'âˆ’05:00', 'âˆ’05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('US', '+415100-0873900', 'America/Chicago', 'Central Time', 'âˆ’06:00', 'âˆ’05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('MX', '+2838-10605', 'America/Chihuahua', 'Mexican Mountain Time - Chihuahua away from US border', 'âˆ’07:00', 'âˆ’06:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'America/Coral_Harbour', '', 'âˆ’05:00', 'âˆ’05:00', 'Link to America/Atikokan');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'America/Cordoba', '', 'âˆ’03:00', 'âˆ’03:00', 'Link to America/Argentina/Cordoba');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CR', '+0956-08405', 'America/Costa_Rica', '', 'âˆ’06:00', 'âˆ’06:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CA', '+4906-11631', 'America/Creston', 'Mountain Standard Time - Creston, British Columbia', 'âˆ’07:00', 'âˆ’07:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('BR', '-1535-05605', 'America/Cuiaba', 'Mato Grosso', 'âˆ’04:00', 'âˆ’03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CW', '+1211-06900', 'America/Curacao', '', 'âˆ’04:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('GL', '+7646-01840', 'America/Danmarkshavn', 'east coast, north of Scoresbysund', '+00:00', '+00:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CA', '+6404-13925', 'America/Dawson', 'Pacific Time - north Yukon', 'âˆ’08:00', 'âˆ’07:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CA', '+5946-12014', 'America/Dawson_Creek', 'Mountain Standard Time - Dawson Creek & Fort Saint John, British Columbia', 'âˆ’07:00', 'âˆ’07:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('US', '+394421-1045903', 'America/Denver', 'Mountain Time', 'âˆ’07:00', 'âˆ’06:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('US', '+421953-0830245', 'America/Detroit', 'Eastern Time - Michigan - most locations', 'âˆ’05:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('DM', '+1518-06124', 'America/Dominica', '', 'âˆ’04:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CA', '+5333-11328', 'America/Edmonton', 'Mountain Time - Alberta, east British Columbia & west Saskatchewan', 'âˆ’07:00', 'âˆ’06:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('BR', '-0640-06952', 'America/Eirunepe', 'W Amazonas', 'âˆ’04:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('SV', '+1342-08912', 'America/El_Salvador', '', 'âˆ’06:00', 'âˆ’06:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'America/Ensenada', '', 'âˆ’08:00', 'âˆ’07:00', 'Link to America/Tijuana');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'America/Fort_Wayne', '', 'âˆ’05:00', 'âˆ’04:00', 'Link to America/Indiana/Indianapolis');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('BR', '-0343-03830', 'America/Fortaleza', 'NE Brazil (MA, PI, CE, RN, PB)', 'âˆ’03:00', 'âˆ’03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CA', '+4612-05957', 'America/Glace_Bay', 'Atlantic Time - Nova Scotia - places that did not observe DST 1966-1971', 'âˆ’04:00', 'âˆ’03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('GL', '+6411-05144', 'America/Godthab', 'most locations', 'âˆ’03:00', 'âˆ’02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CA', '+5320-06025', 'America/Goose_Bay', 'Atlantic Time - Labrador - most locations', 'âˆ’04:00', 'âˆ’03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('TC', '+2128-07108', 'America/Grand_Turk', '', 'âˆ’05:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('GD', '+1203-06145', 'America/Grenada', '', 'âˆ’04:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('GP', '+1614-06132', 'America/Guadeloupe', '', 'âˆ’04:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('GT', '+1438-09031', 'America/Guatemala', '', 'âˆ’06:00', 'âˆ’06:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('EC', '-0210-07950', 'America/Guayaquil', 'mainland', 'âˆ’05:00', 'âˆ’05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('GY', '+0648-05810', 'America/Guyana', '', 'âˆ’04:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CA', '+4439-06336', 'America/Halifax', 'Atlantic Time - Nova Scotia (most places), PEI', 'âˆ’04:00', 'âˆ’03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CU', '+2308-08222', 'America/Havana', '', 'âˆ’05:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('MX', '+2904-11058', 'America/Hermosillo', 'Mountain Standard Time - Sonora', 'âˆ’07:00', 'âˆ’07:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('US', '+394606-0860929', 'America/Indiana/Indianapolis', 'Eastern Time - Indiana - most locations', 'âˆ’05:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('US', '+411745-0863730', 'America/Indiana/Knox', 'Central Time - Indiana - Starke County', 'âˆ’06:00', 'âˆ’05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('US', '+382232-0862041', 'America/Indiana/Marengo', 'Eastern Time - Indiana - Crawford County', 'âˆ’05:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('US', '+382931-0871643', 'America/Indiana/Petersburg', 'Eastern Time - Indiana - Pike County', 'âˆ’05:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('US', '+375711-0864541', 'America/Indiana/Tell_City', 'Central Time - Indiana - Perry County', 'âˆ’06:00', 'âˆ’05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('US', '+384452-0850402', 'America/Indiana/Vevay', 'Eastern Time - Indiana - Switzerland County', 'âˆ’05:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('US', '+384038-0873143', 'America/Indiana/Vincennes', 'Eastern Time - Indiana - Daviess, Dubois, Knox & Martin Counties', 'âˆ’05:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('US', '+410305-0863611', 'America/Indiana/Winamac', 'Eastern Time - Indiana - Pulaski County', 'âˆ’05:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'America/Indianapolis', '', 'âˆ’05:00', 'âˆ’04:00', 'Link to America/Indiana/Indianapolis');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CA', '+682059-1334300', 'America/Inuvik', 'Mountain Time - west Northwest Territories', 'âˆ’07:00', 'âˆ’06:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CA', '+6344-06828', 'America/Iqaluit', 'Eastern Time - east Nunavut - most locations', 'âˆ’05:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('JM', '+1800-07648', 'America/Jamaica', '', 'âˆ’05:00', 'âˆ’05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'America/Jujuy', '', 'âˆ’03:00', 'âˆ’03:00', 'Link to America/Argentina/Jujuy');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('US', '+581807-1342511', 'America/Juneau', 'Alaska Time - Alaska panhandle', 'âˆ’09:00', 'âˆ’08:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('US', '+381515-0854534', 'America/Kentucky/Louisville', 'Eastern Time - Kentucky - Louisville area', 'âˆ’05:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('US', '+364947-0845057', 'America/Kentucky/Monticello', 'Eastern Time - Kentucky - Wayne County', 'âˆ’05:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'America/Knox_IN', '', 'âˆ’06:00', 'âˆ’05:00', 'Link to America/Indiana/Knox');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('BQ', '+120903-0681636', 'America/Kralendijk', '', 'âˆ’04:00', 'âˆ’04:00', 'Link to America/Curacao');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('BO', '-1630-06809', 'America/La_Paz', '', 'âˆ’04:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('PE', '-1203-07703', 'America/Lima', '', 'âˆ’05:00', 'âˆ’05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('US', '+340308-1181434', 'America/Los_Angeles', 'Pacific Time', 'âˆ’08:00', 'âˆ’07:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'America/Louisville', '', 'âˆ’05:00', 'âˆ’04:00', 'Link to America/Kentucky/Louisville');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('SX', '+180305-0630250', 'America/Lower_Princes', '', 'âˆ’04:00', 'âˆ’04:00', 'Link to America/Curacao');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('BR', '-0940-03543', 'America/Maceio', 'Alagoas, Sergipe', 'âˆ’03:00', 'âˆ’03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('NI', '+1209-08617', 'America/Managua', '', 'âˆ’06:00', 'âˆ’06:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('BR', '-0308-06001', 'America/Manaus', 'E Amazonas', 'âˆ’04:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('MF', '+1804-06305', 'America/Marigot', '', 'âˆ’04:00', 'âˆ’04:00', 'Link to America/Guadeloupe');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('MQ', '+1436-06105', 'America/Martinique', '', 'âˆ’04:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('MX', '+2550-09730', 'America/Matamoros', 'US Central Time - Coahuila, Durango, Nuevo LeÃ³n, Tamaulipas near US border', 'âˆ’06:00', 'âˆ’05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('MX', '+2313-10625', 'America/Mazatlan', 'Mountain Time - S Baja, Nayarit, Sinaloa', 'âˆ’07:00', 'âˆ’06:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'America/Mendoza', '', 'âˆ’03:00', 'âˆ’03:00', 'Link to America/Argentina/Mendoza');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('US', '+450628-0873651', 'America/Menominee', 'Central Time - Michigan - Dickinson, Gogebic, Iron & Menominee Counties', 'âˆ’06:00', 'âˆ’05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('MX', '+2058-08937', 'America/Merida', 'Central Time - Campeche, YucatÃ¡n', 'âˆ’06:00', 'âˆ’05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('US', '+550737-1313435', 'America/Metlakatla', 'Metlakatla Time - Annette Island', 'âˆ’08:00', 'âˆ’08:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('MX', '+1924-09909', 'America/Mexico_City', 'Central Time - most locations', 'âˆ’06:00', 'âˆ’05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('PM', '+4703-05620', 'America/Miquelon', '', 'âˆ’03:00', 'âˆ’02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CA', '+4606-06447', 'America/Moncton', 'Atlantic Time - New Brunswick', 'âˆ’04:00', 'âˆ’03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('UY', '-3453-05611', 'America/Monteproduct', '', 'âˆ’03:00', 'âˆ’02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('MX', '+2540-10019', 'America/Monterrey', 'Mexican Central Time - Coahuila, Durango, Nuevo LeÃ³n, Tamaulipas away from US border', 'âˆ’06:00', 'âˆ’05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CA', '+4531-07334', 'America/Montreal', 'Eastern Time - Quebec - most locations', 'âˆ’05:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('MS', '+1643-06213', 'America/Montserrat', '', 'âˆ’04:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('BS', '+2505-07721', 'America/Nassau', '', 'âˆ’05:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('US', '+404251-0740023', 'America/New_York', 'Eastern Time', 'âˆ’05:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CA', '+4901-08816', 'America/Nipigon', 'Eastern Time - Ontario & Quebec - places that did not observe DST 1967-1973', 'âˆ’05:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('US', '+643004-1652423', 'America/Nome', 'Alaska Time - west Alaska', 'âˆ’09:00', 'âˆ’08:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('BR', '-0351-03225', 'America/Noronha', 'Atlantic islands', 'âˆ’02:00', 'âˆ’02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('US', '+471551-1014640', 'America/North_Dakota/Beulah', 'Central Time - North Dakota - Mercer County', 'âˆ’06:00', 'âˆ’05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('US', '+470659-1011757', 'America/North_Dakota/Center', 'Central Time - North Dakota - Oliver County', 'âˆ’06:00', 'âˆ’05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('US', '+465042-1012439', 'America/North_Dakota/New_Salem', 'Central Time - North Dakota - Morton County (except Mandan area)', 'âˆ’06:00', 'âˆ’05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('MX', '+2934-10425', 'America/Ojinaga', 'US Mountain Time - Chihuahua near US border', 'âˆ’07:00', 'âˆ’06:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('PA', '+0858-07932', 'America/Panama', '', 'âˆ’05:00', 'âˆ’05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CA', '+6608-06544', 'America/Pangnirtung', 'Eastern Time - Pangnirtung, Nunavut', 'âˆ’05:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('SR', '+0550-05510', 'America/Paramaribo', '', 'âˆ’03:00', 'âˆ’03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('US', '+332654-1120424', 'America/Phoenix', 'Mountain Standard Time - Arizona', 'âˆ’07:00', 'âˆ’07:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('TT', '+1039-06131', 'America/Port_of_Spain', '', 'âˆ’04:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('HT', '+1832-07220', 'America/Port-au-Prince', '', 'âˆ’05:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'America/Porto_Acre', '', 'âˆ’04:00', 'âˆ’04:00', 'Link to America/Rio_Branco');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('BR', '-0846-06354', 'America/Porto_Velho', 'Rondonia', 'âˆ’04:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('PR', '+182806-0660622', 'America/Puerto_Rico', '', 'âˆ’04:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CA', '+4843-09434', 'America/Rainy_River', 'Central Time - Rainy River & Fort Frances, Ontario', 'âˆ’06:00', 'âˆ’05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CA', '+624900-0920459', 'America/Rankin_Inlet', 'Central Time - central Nunavut', 'âˆ’06:00', 'âˆ’05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('BR', '-0803-03454', 'America/Recife', 'Pernambuco', 'âˆ’03:00', 'âˆ’03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CA', '+5024-10439', 'America/Regina', 'Central Standard Time - Saskatchewan - most locations', 'âˆ’06:00', 'âˆ’06:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CA', '+744144-0944945', 'America/Resolute', 'Central Standard Time - Resolute, Nunavut', 'âˆ’06:00', 'âˆ’05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('BR', '-0958-06748', 'America/Rio_Branco', 'Acre', 'âˆ’04:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'America/Rosario', '', 'âˆ’03:00', 'âˆ’03:00', 'Link to America/Argentina/Cordoba');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('MX', '+3018-11452', 'America/Santa_Isabel', 'Mexican Pacific Time - Baja California away from US border', 'âˆ’08:00', 'âˆ’07:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('BR', '-0226-05452', 'America/Santarem', 'W Para', 'âˆ’03:00', 'âˆ’03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CL', '-3327-07040', 'America/Santiago', 'most locations', 'âˆ’04:00', 'âˆ’03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('DO', '+1828-06954', 'America/Santo_Domingo', '', 'âˆ’04:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('BR', '-2332-04637', 'America/Sao_Paulo', 'S & SE Brazil (GO, DF, MG, ES, RJ, SP, PR, SC, RS)', 'âˆ’03:00', 'âˆ’02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('GL', '+7029-02158', 'America/Scoresbysund', 'Scoresbysund / Ittoqqortoormiit', 'âˆ’01:00', '+00:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('US', '+364708-1084111', 'America/Shiprock', 'Mountain Time - Navajo', 'âˆ’07:00', 'âˆ’06:00', 'Link to America/Denver');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('US', '+571035-1351807', 'America/Sitka', 'Alaska Time - southeast Alaska panhandle', 'âˆ’09:00', 'âˆ’08:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('BL', '+1753-06251', 'America/St_Barthelemy', '', 'âˆ’04:00', 'âˆ’04:00', 'Link to America/Guadeloupe');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CA', '+4734-05243', 'America/St_Johns', 'Newfoundland Time, including SE Labrador', 'âˆ’03:30', 'âˆ’02:30', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('KN', '+1718-06243', 'America/St_Kitts', '', 'âˆ’04:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('LC', '+1401-06100', 'America/St_Lucia', '', 'âˆ’04:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('VI', '+1821-06456', 'America/St_Thomas', '', 'âˆ’04:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('VC', '+1309-06114', 'America/St_Vincent', '', 'âˆ’04:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CA', '+5017-10750', 'America/Swift_Current', 'Central Standard Time - Saskatchewan - midwest', 'âˆ’06:00', 'âˆ’06:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('HN', '+1406-08713', 'America/Tegucigalpa', '', 'âˆ’06:00', 'âˆ’06:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('GL', '+7634-06847', 'America/Thule', 'Thule / Pituffik', 'âˆ’04:00', 'âˆ’03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CA', '+4823-08915', 'America/Thunder_Bay', 'Eastern Time - Thunder Bay, Ontario', 'âˆ’05:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('MX', '+3232-11701', 'America/Tijuana', 'US Pacific Time - Baja California near US border', 'âˆ’08:00', 'âˆ’07:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CA', '+4339-07923', 'America/Toronto', 'Eastern Time - Ontario - most locations', 'âˆ’05:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('VG', '+1827-06437', 'America/Tortola', '', 'âˆ’04:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CA', '+4916-12307', 'America/Vancouver', 'Pacific Time - west British Columbia', 'âˆ’08:00', 'âˆ’07:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'America/Virgin', '', 'âˆ’04:00', 'âˆ’04:00', 'Link to America/St_Thomas');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CA', '+6043-13503', 'America/Whitehorse', 'Pacific Time - south Yukon', 'âˆ’08:00', 'âˆ’07:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CA', '+4953-09709', 'America/Winnipeg', 'Central Time - Manitoba & west Ontario', 'âˆ’06:00', 'âˆ’05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('US', '+593249-1394338', 'America/Yakutat', 'Alaska Time - Alaska panhandle neck', 'âˆ’09:00', 'âˆ’08:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CA', '+6227-11421', 'America/Yellowknife', 'Mountain Time - central Northwest Territories', 'âˆ’07:00', 'âˆ’06:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AQ', '-6617+11031', 'Antarctica/Casey', 'Casey Station, Bailey Peninsula', '+11:00', '+08:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AQ', '-6835+07758', 'Antarctica/Davis', 'Davis Station, Vestfold Hills', '+05:00', '+07:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AQ', '-6640+14001', 'Antarctica/DumontDUrville', 'Dumont-d\'Urville Station, Terre Adelie', '+10:00', '+10:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AQ', '-5430+15857', 'Antarctica/Macquarie', 'Macquarie Island Station, Macquarie Island', '+11:00', '+11:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AQ', '-6736+06253', 'Antarctica/Mawson', 'Mawson Station, Holme Bay', '+05:00', '+05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AQ', '-7750+16636', 'Antarctica/McMurdo', 'McMurdo Station, Ross Island', '+12:00', '+13:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AQ', '-6448-06406', 'Antarctica/Palmer', 'Palmer Station, Anvers Island', 'âˆ’04:00', 'âˆ’03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AQ', '-6734-06808', 'Antarctica/Rothera', 'Rothera Station, Adelaide Island', 'âˆ’03:00', 'âˆ’03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AQ', '-9000+00000', 'Antarctica/South_Pole', 'Amundsen-Scott Station, South Pole', '+12:00', '+13:00', 'Link to Antarctica/McMurdo');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AQ', '-690022+0393524', 'Antarctica/Syowa', 'Syowa Station, E Ongul I', '+03:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AQ', '-7824+10654', 'Antarctica/Vostok', 'Vostok Station, Lake Vostok', '+06:00', '+06:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('SJ', '+7800+01600', 'Arctic/Longyearbyen', '', '+01:00', '+02:00', 'Link to Europe/Oslo');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('YE', '+1245+04512', 'Asia/Aden', '', '+03:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('KZ', '+4315+07657', 'Asia/Almaty', 'most locations', '+06:00', '+06:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('JO', '+3157+03556', 'Asia/Amman', '', '+03:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('RU', '+6445+17729', 'Asia/Anadyr', 'Moscow+08 - Bering Sea', '+12:00', '+12:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('KZ', '+4431+05016', 'Asia/Aqtau', 'Atyrau (Atirau, Gur\'yev), Mangghystau (Mankistau)', '+05:00', '+05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('KZ', '+5017+05710', 'Asia/Aqtobe', 'Aqtobe (Aktobe)', '+05:00', '+05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('TM', '+3757+05823', 'Asia/Ashgabat', '', '+05:00', '+05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Asia/Ashkhabad', '', '+05:00', '+05:00', 'Link to Asia/Ashgabat');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('IQ', '+3321+04425', 'Asia/Baghdad', '', '+03:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('BH', '+2623+05035', 'Asia/Bahrain', '', '+03:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AZ', '+4023+04951', 'Asia/Baku', '', '+04:00', '+05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('TH', '+1345+10031', 'Asia/Bangkok', '', '+07:00', '+07:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('LB', '+3353+03530', 'Asia/Beirut', '', '+02:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('KG', '+4254+07436', 'Asia/Bishkek', '', '+06:00', '+06:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('BN', '+0456+11455', 'Asia/Brunei', '', '+08:00', '+08:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Asia/Calcutta', '', '+05:30', '+05:30', 'Link to Asia/Kolkata');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('MN', '+4804+11430', 'Asia/Choibalsan', 'Dornod, Sukhbaatar', '+08:00', '+08:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CN', '+2934+10635', 'Asia/Chongqing', 'central China - Sichuan, Yunnan, Guangxi, Shaanxi, Guizhou, etc.', '+08:00', '+08:00', 'Covering historic Kansu-Szechuan time zone.');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Asia/Chungking', '', '+08:00', '+08:00', 'Link to Asia/Chongqing');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('LK', '+0656+07951', 'Asia/Colombo', '', '+05:30', '+05:30', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Asia/Dacca', '', '+06:00', '+06:00', 'Link to Asia/Dhaka');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('SY', '+3330+03618', 'Asia/Damascus', '', '+02:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('BD', '+2343+09025', 'Asia/Dhaka', '', '+06:00', '+06:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('TL', '-0833+12535', 'Asia/Dili', '', '+09:00', '+09:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AE', '+2518+05518', 'Asia/Dubai', '', '+04:00', '+04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('TJ', '+3835+06848', 'Asia/Dushanbe', '', '+05:00', '+05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('PS', '+3130+03428', 'Asia/Gaza', 'Gaza Strip', '+02:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CN', '+4545+12641', 'Asia/Harbin', 'Heilongjiang (except Mohe), Jilin', '+08:00', '+08:00', 'Covering historic Changpai time zone.');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('PS', '+313200+0350542', 'Asia/Hebron', 'West Bank', '+02:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('VN', '+1045+10640', 'Asia/Ho_Chi_Minh', '', '+07:00', '+07:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('HK', '+2217+11409', 'Asia/Hong_Kong', '', '+08:00', '+08:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('MN', '+4801+09139', 'Asia/Hovd', 'Bayan-Olgiy, Govi-Altai, Hovd, Uvs, Zavkhan', '+07:00', '+07:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('RU', '+5216+10420', 'Asia/Irkutsk', 'Moscow+05 - Lake Baikal', '+09:00', '+09:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Asia/Istanbul', '', '+02:00', '+03:00', 'Link to Europe/Istanbul');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('ID', '-0610+10648', 'Asia/Jakarta', 'Java & Sumatra', '+07:00', '+07:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('ID', '-0232+14042', 'Asia/Jayapura', 'west New Guinea (Irian Jaya) & Malukus (Moluccas)', '+09:00', '+09:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('IL', '+3146+03514', 'Asia/Jerusalem', '', '+02:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AF', '+3431+06912', 'Asia/Kabul', '', '+04:30', '+04:30', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('RU', '+5301+15839', 'Asia/Kamchatka', 'Moscow+08 - Kamchatka', '+12:00', '+12:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('PK', '+2452+06703', 'Asia/Karachi', '', '+05:00', '+05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CN', '+3929+07559', 'Asia/Kashgar', 'west Tibet & Xinjiang', '+08:00', '+08:00', 'Covering historic Kunlun time zone.');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('NP', '+2743+08519', 'Asia/Kathmandu', '', '+05:45', '+05:45', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Asia/Katmandu', '', '+05:45', '+05:45', 'Link to Asia/Kathmandu');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('IN', '+2232+08822', 'Asia/Kolkata', '', '+05:30', '+05:30', 'Note: Different zones in history, see Time in India.');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('RU', '+5601+09250', 'Asia/Krasnoyarsk', 'Moscow+04 - Yenisei River', '+08:00', '+08:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('MY', '+0310+10142', 'Asia/Kuala_Lumpur', 'peninsular Malaysia', '+08:00', '+08:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('MY', '+0133+11020', 'Asia/Kuching', 'Sabah & Sarawak', '+08:00', '+08:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('KW', '+2920+04759', 'Asia/Kuwait', '', '+03:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Asia/Macao', '', '+08:00', '+08:00', 'Link to Asia/Macau');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('MO', '+2214+11335', 'Asia/Macau', '', '+08:00', '+08:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('RU', '+5934+15048', 'Asia/Magadan', 'Moscow+08 - Magadan', '+12:00', '+12:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('ID', '-0507+11924', 'Asia/Makassar', 'east & south Borneo, Sulawesi (Celebes), Bali, Nusa Tenggara, west Timor', '+08:00', '+08:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('PH', '+1435+12100', 'Asia/Manila', '', '+08:00', '+08:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('OM', '+2336+05835', 'Asia/Muscat', '', '+04:00', '+04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CY', '+3510+03322', 'Asia/Nicosia', '', '+02:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('RU', '+5345+08707', 'Asia/Novokuznetsk', 'Moscow+03 - Novokuznetsk', '+07:00', '+07:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('RU', '+5502+08255', 'Asia/Novosibirsk', 'Moscow+03 - Novosibirsk', '+07:00', '+07:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('RU', '+5500+07324', 'Asia/Omsk', 'Moscow+03 - west Siberia', '+07:00', '+07:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('KZ', '+5113+05121', 'Asia/Oral', 'West Kazakhstan', '+05:00', '+05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('KH', '+1133+10455', 'Asia/Phnom_Penh', '', '+07:00', '+07:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('ID', '-0002+10920', 'Asia/Pontianak', 'west & central Borneo', '+07:00', '+07:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('KP', '+3901+12545', 'Asia/Pyongyang', '', '+09:00', '+09:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('QA', '+2517+05132', 'Asia/Qatar', '', '+03:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('KZ', '+4448+06528', 'Asia/Qyzylorda', 'Qyzylorda (Kyzylorda, Kzyl-Orda)', '+06:00', '+06:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('MM', '+1647+09610', 'Asia/Rangoon', '', '+06:30', '+06:30', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('SA', '+2438+04643', 'Asia/Riyadh', '', '+03:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Asia/Saigon', '', '+07:00', '+07:00', 'Link to Asia/Ho_Chi_Minh');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('RU', '+4658+14242', 'Asia/Sakhalin', 'Moscow+07 - Sakhalin Island', '+11:00', '+11:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('UZ', '+3940+06648', 'Asia/Samarkand', 'west Uzbekistan', '+05:00', '+05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('KR', '+3733+12658', 'Asia/Seoul', '', '+09:00', '+09:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CN', '+3114+12128', 'Asia/Shanghai', 'east China - Beijing, Guangdong, Shanghai, etc.', '+08:00', '+08:00', 'Covering historic Chungyuan time zone.');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('SG', '+0117+10351', 'Asia/Singapore', '', '+08:00', '+08:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('TW', '+2503+12130', 'Asia/Taipei', '', '+08:00', '+08:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('UZ', '+4120+06918', 'Asia/Tashkent', 'east Uzbekistan', '+05:00', '+05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('GE', '+4143+04449', 'Asia/Tbilisi', '', '+04:00', '+04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('IR', '+3540+05126', 'Asia/Tehran', '', '+03:30', '+04:30', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Asia/Tel_Aviv', '', '+02:00', '+03:00', 'Link to Asia/Jerusalem');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Asia/Thimbu', '', '+06:00', '+06:00', 'Link to Asia/Thimphu');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('BT', '+2728+08939', 'Asia/Thimphu', '', '+06:00', '+06:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('JP', '+353916+1394441', 'Asia/Tokyo', '', '+09:00', '+09:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Asia/Ujung_Pandang', '', '+08:00', '+08:00', 'Link to Asia/Makassar');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('MN', '+4755+10653', 'Asia/Ulaanbaatar', 'most locations', '+08:00', '+08:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Asia/Ulan_Bator', '', '+08:00', '+08:00', 'Link to Asia/Ulaanbaatar');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CN', '+4348+08735', 'Asia/Urumqi', 'most of Tibet & Xinjiang', '+08:00', '+08:00', 'Covering historic Sinkiang-Tibet time zone.');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('LA', '+1758+10236', 'Asia/Vientiane', '', '+07:00', '+07:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('RU', '+4310+13156', 'Asia/Vladivostok', 'Moscow+07 - Amur River', '+11:00', '+11:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('RU', '+6200+12940', 'Asia/Yakutsk', 'Moscow+06 - Lena River', '+10:00', '+10:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('RU', '+5651+06036', 'Asia/Yekaterinburg', 'Moscow+02 - Urals', '+06:00', '+06:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AM', '+4011+04430', 'Asia/Yerevan', '', '+04:00', '+04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('PT', '+3744-02540', 'Atlantic/Azores', 'Azores', 'âˆ’01:00', '+00:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('BM', '+3217-06446', 'Atlantic/Bermuda', '', 'âˆ’04:00', 'âˆ’03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('ES', '+2806-01524', 'Atlantic/Canary', 'Canary Islands', '+00:00', '+01:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CV', '+1455-02331', 'Atlantic/Cape_Verde', '', 'âˆ’01:00', 'âˆ’01:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Atlantic/Faeroe', '', '+00:00', '+01:00', 'Link to Atlantic/Faroe');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('FO', '+6201-00646', 'Atlantic/Faroe', '', '+00:00', '+01:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Atlantic/Jan_Mayen', '', '+01:00', '+02:00', 'Link to Europe/Oslo');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('PT', '+3238-01654', 'Atlantic/Madeira', 'Madeira Islands', '+00:00', '+01:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('IS', '+6409-02151', 'Atlantic/Reykjavik', '', '+00:00', '+00:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('GS', '-5416-03632', 'Atlantic/South_Georgia', '', 'âˆ’02:00', 'âˆ’02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('SH', '-1555-00542', 'Atlantic/St_Helena', '', '+00:00', '+00:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('FK', '-5142-05751', 'Atlantic/Stanley', '', 'âˆ’03:00', 'âˆ’03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Australia/ACT', '', '+10:00', '+11:00', 'Link to Australia/Sydney');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AU', '-3455+13835', 'Australia/Adelaide', 'South Australia', '+09:30', '+10:30', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AU', '-2728+15302', 'Australia/Brisbane', 'Queensland - most locations', '+10:00', '+10:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AU', '-3157+14127', 'Australia/Broken_Hill', 'New South Wales - Yancowinna', '+09:30', '+10:30', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Australia/Canberra', '', '+10:00', '+11:00', 'Link to Australia/Sydney');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AU', '-3956+14352', 'Australia/Currie', 'Tasmania - King Island', '+10:00', '+11:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AU', '-1228+13050', 'Australia/Darwin', 'Northern Territory', '+09:30', '+09:30', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AU', '-3143+12852', 'Australia/Eucla', 'Western Australia - Eucla area', '+08:45', '+08:45', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AU', '-4253+14719', 'Australia/Hobart', 'Tasmania - most locations', '+10:00', '+11:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Australia/LHI', '', '+10:30', '+11:00', 'Link to Australia/Lord_Howe');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AU', '-2016+14900', 'Australia/Lindeman', 'Queensland - Holiday Islands', '+10:00', '+10:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AU', '-3133+15905', 'Australia/Lord_Howe', 'Lord Howe Island', '+10:30', '+11:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AU', '-3749+14458', 'Australia/Melbourne', 'Victoria', '+10:00', '+11:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Australia/North', '', '+09:30', '+09:30', 'Link to Australia/Darwin');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Australia/NSW', '', '+10:00', '+11:00', 'Link to Australia/Sydney');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AU', '-3157+11551', 'Australia/Perth', 'Western Australia - most locations', '+08:00', '+08:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Australia/Queensland', '', '+10:00', '+10:00', 'Link to Australia/Brisbane');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Australia/South', '', '+09:30', '+10:30', 'Link to Australia/Adelaide');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AU', '-3352+15113', 'Australia/Sydney', 'New South Wales - most locations', '+10:00', '+11:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Australia/Tasmania', '', '+10:00', '+11:00', 'Link to Australia/Hobart');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Australia/Victoria', '', '+10:00', '+11:00', 'Link to Australia/Melbourne');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Australia/West', '', '+08:00', '+08:00', 'Link to Australia/Perth');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Australia/Yancowinna', '', '+09:30', '+10:30', 'Link to Australia/Broken_Hill');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Brazil/Acre', '', 'âˆ’04:00', 'âˆ’04:00', 'Link to America/Rio_Branco');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Brazil/DeNoronha', '', 'âˆ’02:00', 'âˆ’02:00', 'Link to America/Noronha');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Brazil/East', '', 'âˆ’03:00', 'âˆ’02:00', 'Link to America/Sao_Paulo');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Brazil/West', '', 'âˆ’04:00', 'âˆ’04:00', 'Link to America/Manaus');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Canada/Atlantic', '', 'âˆ’04:00', 'âˆ’03:00', 'Link to America/Halifax');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Canada/Central', '', 'âˆ’06:00', 'âˆ’05:00', 'Link to America/Winnipeg');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Canada/East-Saskatchewan', '', 'âˆ’06:00', 'âˆ’06:00', 'Link to America/Regina');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Canada/Eastern', '', 'âˆ’05:00', 'âˆ’04:00', 'Link to America/Toronto');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Canada/Mountain', '', 'âˆ’07:00', 'âˆ’06:00', 'Link to America/Edmonton');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Canada/Newfoundland', '', 'âˆ’03:30', 'âˆ’02:30', 'Link to America/St_Johns');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Canada/Pacific', '', 'âˆ’08:00', 'âˆ’07:00', 'Link to America/Vancouver');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Canada/Saskatchewan', '', 'âˆ’06:00', 'âˆ’06:00', 'Link to America/Regina');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Canada/Yukon', '', 'âˆ’08:00', 'âˆ’07:00', 'Link to America/Whitehorse');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'CET', '', '+01:00', '+02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Chile/Continental', '', 'âˆ’04:00', 'âˆ’03:00', 'Link to America/Santiago');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Chile/EasterIsland', '', 'âˆ’06:00', 'âˆ’05:00', 'Link to Pacific/Easter');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'CST6CDT', '', 'âˆ’06:00', 'âˆ’05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Cuba', '', 'âˆ’05:00', 'âˆ’04:00', 'Link to America/Havana');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'EET', '', '+02:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Egypt', '', '+02:00', '+02:00', 'Link to Africa/Cairo');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Eire', '', '+00:00', '+01:00', 'Link to Europe/Dublin');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'EST', '', 'âˆ’05:00', 'âˆ’05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'EST5EDT', '', 'âˆ’05:00', 'âˆ’04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Etc./GMT', '', '+00:00', '+00:00', 'Link to UTC');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Etc./GMT+0', '', '+00:00', '+00:00', 'Link to UTC');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Etc./UCT', '', '+00:00', '+00:00', 'Link to UTC');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Etc./Universal', '', '+00:00', '+00:00', 'Link to UTC');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Etc./UTC', '', '+00:00', '+00:00', 'Link to UTC');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Etc./Zulu', '', '+00:00', '+00:00', 'Link to UTC');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('NL', '+5222+00454', 'Europe/Amsterdam', '', '+01:00', '+02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AD', '+4230+00131', 'Europe/Andorra', '', '+01:00', '+02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('GR', '+3758+02343', 'Europe/Athens', '', '+02:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Europe/Belfast', '', '+00:00', '+01:00', 'Link to Europe/London');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('RS', '+4450+02030', 'Europe/Belgrade', '', '+01:00', '+02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('DE', '+5230+01322', 'Europe/Berlin', '', '+01:00', '+02:00', 'In 1945, the Trizone did not follow Berlin\'s switch to DST, see Time in Germany');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('SK', '+4809+01707', 'Europe/Bratislava', '', '+01:00', '+02:00', 'Link to Europe/Prague');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('BE', '+5050+00420', 'Europe/Brussels', '', '+01:00', '+02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('RO', '+4426+02606', 'Europe/Bucharest', '', '+02:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('HU', '+4730+01905', 'Europe/Budapest', '', '+01:00', '+02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('MD', '+4700+02850', 'Europe/Chisinau', '', '+02:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('DK', '+5540+01235', 'Europe/Copenhagen', '', '+01:00', '+02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('IE', '+5320-00615', 'Europe/Dublin', '', '+00:00', '+01:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('GI', '+3608-00521', 'Europe/Gibraltar', '', '+01:00', '+02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('GG', '+4927-00232', 'Europe/Guernsey', '', '+00:00', '+01:00', 'Link to Europe/London');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('FI', '+6010+02458', 'Europe/Helsinki', '', '+02:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('IM', '+5409-00428', 'Europe/Isle_of_Man', '', '+00:00', '+01:00', 'Link to Europe/London');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('TR', '+4101+02858', 'Europe/Istanbul', '', '+02:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('JE', '+4912-00207', 'Europe/Jersey', '', '+00:00', '+01:00', 'Link to Europe/London');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('RU', '+5443+02030', 'Europe/Kaliningrad', 'Moscow-01 - Kaliningrad', '+03:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('UA', '+5026+03031', 'Europe/Kiev', 'most locations', '+02:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('PT', '+3843-00908', 'Europe/Lisbon', 'mainland', '+00:00', '+01:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('SI', '+4603+01431', 'Europe/Ljubljana', '', '+01:00', '+02:00', 'Link to Europe/Belgrade');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('GB', '+513030-0000731', 'Europe/London', '', '+00:00', '+01:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('LU', '+4936+00609', 'Europe/Luxembourg', '', '+01:00', '+02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('ES', '+4024-00341', 'Europe/Madrid', 'mainland', '+01:00', '+02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('MT', '+3554+01431', 'Europe/Malta', '', '+01:00', '+02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AX', '+6006+01957', 'Europe/Mariehamn', '', '+02:00', '+03:00', 'Link to Europe/Helsinki');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('BY', '+5354+02734', 'Europe/Minsk', '', '+03:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('MC', '+4342+00723', 'Europe/Monaco', '', '+01:00', '+02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('RU', '+5545+03735', 'Europe/Moscow', 'Moscow+00 - west Russia', '+04:00', '+04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Europe/Nicosia', '', '+02:00', '+03:00', 'Link to Asia/Nicosia');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('NO', '+5955+01045', 'Europe/Oslo', '', '+01:00', '+02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('FR', '+4852+00220', 'Europe/Paris', '', '+01:00', '+02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('ME', '+4226+01916', 'Europe/Podgorica', '', '+01:00', '+02:00', 'Link to Europe/Belgrade');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CZ', '+5005+01426', 'Europe/Prague', '', '+01:00', '+02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('LV', '+5657+02406', 'Europe/Riga', '', '+02:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('IT', '+4154+01229', 'Europe/Rome', '', '+01:00', '+02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('RU', '+5312+05009', 'Europe/Samara', 'Moscow+00 - Samara, Udmurtia', '+04:00', '+04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('SM', '+4355+01228', 'Europe/San_Marino', '', '+01:00', '+02:00', 'Link to Europe/Rome');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('BA', '+4352+01825', 'Europe/Sarajevo', '', '+01:00', '+02:00', 'Link to Europe/Belgrade');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('UA', '+4457+03406', 'Europe/Simferopol', 'central Crimea', '+02:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('MK', '+4159+02126', 'Europe/Skopje', '', '+01:00', '+02:00', 'Link to Europe/Belgrade');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('BG', '+4241+02319', 'Europe/Sofia', '', '+02:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('SE', '+5920+01803', 'Europe/Stockholm', '', '+01:00', '+02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('EE', '+5925+02445', 'Europe/Tallinn', '', '+02:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AL', '+4120+01950', 'Europe/Tirane', '', '+01:00', '+02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Europe/Tiraspol', '', '+02:00', '+03:00', 'Link to Europe/Chisinau');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('UA', '+4837+02218', 'Europe/Uzhgorod', 'Ruthenia', '+02:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('LI', '+4709+00931', 'Europe/Vaduz', '', '+01:00', '+02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('VA', '+415408+0122711', 'Europe/Vatican', '', '+01:00', '+02:00', 'Link to Europe/Rome');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AT', '+4813+01620', 'Europe/Vienna', '', '+01:00', '+02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('LT', '+5441+02519', 'Europe/Vilnius', '', '+02:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('RU', '+4844+04425', 'Europe/Volgograd', 'Moscow+00 - Caspian Sea', '+04:00', '+04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('PL', '+5215+02100', 'Europe/Warsaw', '', '+01:00', '+02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('HR', '+4548+01558', 'Europe/Zagreb', '', '+01:00', '+02:00', 'Link to Europe/Belgrade');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('UA', '+4750+03510', 'Europe/Zaporozhye', 'Zaporozh\'ye, E Lugansk / Zaporizhia, E Luhansk', '+02:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CH', '+4723+00832', 'Europe/Zurich', '', '+01:00', '+02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'GB', '', '+00:00', '+01:00', 'Link to Europe/London');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'GB-Eire', '', '+00:00', '+01:00', 'Link to Europe/London');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'GMT', '', '+00:00', '+00:00', 'Link to UTC');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'GMT-0', '', '+00:00', '+00:00', 'Link to UTC');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'GMT+0', '', '+00:00', '+00:00', 'Link to UTC');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'GMT0', '', '+00:00', '+00:00', 'Link to UTC');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Greenwich', '', '+00:00', '+00:00', 'Link to UTC');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Hong Kong', '', '+08:00', '+08:00', 'Link to Asia/Hong_Kong');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'HST', '', 'âˆ’10:00', 'âˆ’10:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Iceland', '', '+00:00', '+00:00', 'Link to Atlantic/Reykjavik');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('MG', '-1855+04731', 'Indian/Antananarivo', '', '+03:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('IO', '-0720+07225', 'Indian/Chagos', '', '+06:00', '+06:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CX', '-1025+10543', 'Indian/Christmas', '', '+07:00', '+07:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CC', '-1210+09655', 'Indian/Cocos', '', '+06:30', '+06:30', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('KM', '-1141+04316', 'Indian/Comoro', '', '+03:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('TF', '-492110+0701303', 'Indian/Kerguelen', '', '+05:00', '+05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('SC', '-0440+05528', 'Indian/Mahe', '', '+04:00', '+04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('MV', '+0410+07330', 'Indian/Maldives', '', '+05:00', '+05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('MU', '-2010+05730', 'Indian/Mauritius', '', '+04:00', '+04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('YT', '-1247+04514', 'Indian/Mayotte', '', '+03:00', '+03:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('RE', '-2052+05528', 'Indian/Reunion', '', '+04:00', '+04:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Iran', '', '+03:30', '+04:30', 'Link to Asia/Tehran');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Israel', '', '+02:00', '+03:00', 'Link to Asia/Jerusalem');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Jamaica', '', 'âˆ’05:00', 'âˆ’05:00', 'Link to America/Jamaica');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Japan', '', '+09:00', '+09:00', 'Link to Asia/Tokyo');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'JST-9', '', '+09:00', '+09:00', 'Link to Asia/Tokyo');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Kwajalein', '', '+12:00', '+12:00', 'Link to Pacific/Kwajalein');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Libya', '', '+02:00', '+02:00', 'Link to Africa/Tripoli');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'MET', '', '+01:00', '+02:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Mexico/BajaNorte', '', 'âˆ’08:00', 'âˆ’07:00', 'Link to America/Tijuana');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Mexico/BajaSur', '', 'âˆ’07:00', 'âˆ’06:00', 'Link to America/Mazatlan');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Mexico/General', '', 'âˆ’06:00', 'âˆ’05:00', 'Link to America/Mexico_City');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'MST', '', 'âˆ’07:00', 'âˆ’07:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'MST7MDT', '', 'âˆ’07:00', 'âˆ’06:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Navajo', '', 'âˆ’07:00', 'âˆ’06:00', 'Link to America/Denver');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'NZ', '', '+12:00', '+13:00', 'Link to Pacific/Auckland');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'NZ-CHAT', '', '+12:45', '+13:45', 'Link to Pacific/Chatham');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('WS', '-1350-17144', 'Pacific/Apia', '', '+13:00', '+14:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('NZ', '-3652+17446', 'Pacific/Auckland', 'most locations', '+12:00', '+13:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('NZ', '-4357-17633', 'Pacific/Chatham', 'Chatham Islands', '+12:45', '+13:45', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('FM', '+0725+15147', 'Pacific/Chuuk', 'Chuuk (Truk) and Yap', '+10:00', '+10:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CL', '-2709-10926', 'Pacific/Easter', 'Easter Island & Sala y Gomez', 'âˆ’06:00', 'âˆ’05:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('VU', '-1740+16825', 'Pacific/Efate', '', '+11:00', '+11:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('KI', '-0308-17105', 'Pacific/Enderbury', 'Phoenix Islands', '+13:00', '+13:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('TK', '-0922-17114', 'Pacific/Fakaofo', '', '+13:00', '+13:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('FJ', '-1808+17825', 'Pacific/Fiji', '', '+12:00', '+13:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('TV', '-0831+17913', 'Pacific/Funafuti', '', '+12:00', '+12:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('EC', '-0054-08936', 'Pacific/Galapagos', 'Galapagos Islands', 'âˆ’06:00', 'âˆ’06:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('PF', '-2308-13457', 'Pacific/Gambier', 'Gambier Islands', 'âˆ’09:00', 'âˆ’09:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('SB', '-0932+16012', 'Pacific/Guadalcanal', '', '+11:00', '+11:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('GU', '+1328+14445', 'Pacific/Guam', '', '+10:00', '+10:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('US', '+211825-1575130', 'Pacific/Honolulu', 'Hawaii', 'âˆ’10:00', 'âˆ’10:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('UM', '+1645-16931', 'Pacific/Johnston', 'Johnston Atoll', 'âˆ’10:00', 'âˆ’10:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('KI', '+0152-15720', 'Pacific/Kiritimati', 'Line Islands', '+14:00', '+14:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('FM', '+0519+16259', 'Pacific/Kosrae', 'Kosrae', '+11:00', '+11:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('MH', '+0905+16720', 'Pacific/Kwajalein', 'Kwajalein', '+12:00', '+12:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('MH', '+0709+17112', 'Pacific/Majuro', 'most locations', '+12:00', '+12:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('PF', '-0900-13930', 'Pacific/Marquesas', 'Marquesas Islands', 'âˆ’09:30', 'âˆ’09:30', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('UM', '+2813-17722', 'Pacific/Midway', 'Midway Islands', 'âˆ’11:00', 'âˆ’11:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('NR', '-0031+16655', 'Pacific/Nauru', '', '+12:00', '+12:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('NU', '-1901-16955', 'Pacific/Niue', '', 'âˆ’11:00', 'âˆ’11:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('NF', '-2903+16758', 'Pacific/Norfolk', '', '+11:30', '+11:30', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('NC', '-2216+16627', 'Pacific/Noumea', '', '+11:00', '+11:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('AS', '-1416-17042', 'Pacific/Pago_Pago', '', 'âˆ’11:00', 'âˆ’11:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('PW', '+0720+13429', 'Pacific/Palau', '', '+09:00', '+09:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('PN', '-2504-13005', 'Pacific/Pitcairn', '', 'âˆ’08:00', 'âˆ’08:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('FM', '+0658+15813', 'Pacific/Pohnpei', 'Pohnpei (Ponape)', '+11:00', '+11:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Pacific/Ponape', '', '+11:00', '+11:00', 'Link to Pacific/Pohnpei');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('PG', '-0930+14710', 'Pacific/Port_Moresby', '', '+10:00', '+10:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('CK', '-2114-15946', 'Pacific/Rarotonga', '', 'âˆ’10:00', 'âˆ’10:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('MP', '+1512+14545', 'Pacific/Saipan', '', '+10:00', '+10:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Pacific/Samoa', '', 'âˆ’11:00', 'âˆ’11:00', 'Link to Pacific/Pago_Pago');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('PF', '-1732-14934', 'Pacific/Tahiti', 'Society Islands', 'âˆ’10:00', 'âˆ’10:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('KI', '+0125+17300', 'Pacific/Tarawa', 'Gilbert Islands', '+12:00', '+12:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('TO', '-2110-17510', 'Pacific/Tongatapu', '', '+13:00', '+13:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Pacific/Truk', '', '+10:00', '+10:00', 'Link to Pacific/Chuuk');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('UM', '+1917+16637', 'Pacific/Wake', 'Wake Island', '+12:00', '+12:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('WF', '-1318-17610', 'Pacific/Wallis', '', '+12:00', '+12:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Pacific/Yap', '', '+10:00', '+10:00', 'Link to Pacific/Chuuk');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Poland', '', '+01:00', '+02:00', 'Link to Europe/Warsaw');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Portugal', '', '+00:00', '+01:00', 'Link to Europe/Lisbon');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'PRC', '', '+08:00', '+08:00', 'Link to Asia/Shanghai');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'PST8PDT', '', 'âˆ’08:00', 'âˆ’07:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'ROC', '', '+08:00', '+08:00', 'Link to Asia/Taipei');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'ROK', '', '+09:00', '+09:00', 'Link to Asia/Seoul');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Singapore', '', '+08:00', '+08:00', 'Link to Asia/Singapore');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Turkey', '', '+02:00', '+03:00', 'Link to Europe/Istanbul');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'UCT', '', '+00:00', '+00:00', 'Link to UTC');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Universal', '', '+00:00', '+00:00', 'Link to UTC');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'US/Alaska', '', 'âˆ’09:00', 'âˆ’08:00', 'Link to America/Anchorage');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'US/Aleutian', '', 'âˆ’10:00', 'âˆ’09:00', 'Link to America/Adak');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'US/Arizona', '', 'âˆ’07:00', 'âˆ’07:00', 'Link to America/Phoenix');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'US/Central', '', 'âˆ’06:00', 'âˆ’05:00', 'Link to America/Chicago');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'US/East-Indiana', '', 'âˆ’05:00', 'âˆ’04:00', 'Link to America/Indiana/Indianapolis');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'US/Eastern', '', 'âˆ’05:00', 'âˆ’04:00', 'Link to America/New_York');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'US/Hawaii', '', 'âˆ’10:00', 'âˆ’10:00', 'Link to Pacific/Honolulu');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'US/Indiana-Starke', '', 'âˆ’06:00', 'âˆ’05:00', 'Link to America/Indiana/Knox');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'US/Michigan', '', 'âˆ’05:00', 'âˆ’04:00', 'Link to America/Detroit');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'US/Mountain', '', 'âˆ’07:00', 'âˆ’06:00', 'Link to America/Denver');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'US/Pacific', '', 'âˆ’08:00', 'âˆ’07:00', 'Link to America/Los_Angeles');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'US/Pacific-New', '', 'âˆ’08:00', 'âˆ’07:00', 'Link to America/Los_Angeles');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'US/Samoa', '', 'âˆ’11:00', 'âˆ’11:00', 'Link to Pacific/Pago_Pago');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'UTC', '', '+00:00', '+00:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'W-SU', '', '+04:00', '+04:00', 'Link to Europe/Moscow');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'WET', '', '+00:00', '+01:00', '');
INSERT INTO `calendar` (`country_code`, `coordinates`, `timezone`, `comments`, `utc_offset`, `utc_dst_offset`, `notes`) VALUES ('', '', 'Zulu', '', '+00:00', '+00:00', 'Link to UTC');


#
# TABLE STRUCTURE FOR: ci_sessions
#

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `id` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` longblob,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e5aea51ed1c0f1e41fdc6ff60406f81fb7f6cb8f', '::1', 1586165002, '__ci_last_regenerate|i:1586165002;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('2caae0f27f93e775736fd19026a97c1a88ee096d', '::1', 1586165839, '__ci_last_regenerate|i:1586165839;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('54130496fceebc4e0fa5e38d613703acde6201c7', '::1', 1586166409, '__ci_last_regenerate|i:1586166409;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b6c86d973b35aea878bb6ee50abbf1405b77676a', '::1', 1586166715, '__ci_last_regenerate|i:1586166715;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('785bba1f57149593a2844abfe68011aa1925e997', '::1', 1586167536, '__ci_last_regenerate|i:1586167536;login_status|s:1:\"1\";user_id|s:1:\"1\";name|s:11:\"admin admin\";admin_is_login|s:1:\"1\";login_type|s:5:\"admin\";active_menu|s:2:\"29\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('4c7f7a3a2e60d52e0533894356300d67b73a2a3e', '::1', 1586168030, '__ci_last_regenerate|i:1586168030;login_status|s:1:\"1\";user_id|s:1:\"1\";name|s:11:\"admin admin\";admin_is_login|s:1:\"1\";login_type|s:5:\"admin\";active_menu|s:2:\"10\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('2e9b0b8a1bbfcfab33329ef72c567c8143e2a8d6', '::1', 1586170565, '__ci_last_regenerate|i:1586170565;login_status|s:1:\"1\";user_id|s:1:\"1\";name|s:11:\"admin admin\";admin_is_login|s:1:\"1\";login_type|s:5:\"admin\";active_menu|s:2:\"10\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ab39a24a3e2698d6aec6d188f5ebd1e1a9c55325', '::1', 1586171143, '__ci_last_regenerate|i:1586171143;login_status|s:1:\"1\";user_id|s:1:\"1\";name|s:11:\"admin admin\";admin_is_login|s:1:\"1\";login_type|s:5:\"admin\";active_menu|s:2:\"10\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('44912bba9b02d019b523f5ab491adb86b097e173', '::1', 1586171871, '__ci_last_regenerate|i:1586171871;login_status|s:1:\"1\";user_id|s:1:\"1\";name|s:11:\"admin admin\";admin_is_login|s:1:\"1\";login_type|s:5:\"admin\";active_menu|s:2:\"10\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('352b4b50b5ed34244e3cd2198e7bfad360e7d967', '::1', 1586172470, '__ci_last_regenerate|i:1586172470;login_status|s:1:\"1\";user_id|s:1:\"1\";name|s:11:\"admin admin\";admin_is_login|s:1:\"1\";login_type|s:5:\"admin\";active_menu|s:2:\"10\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('1a14ec44a7a44d6cff93a289949250f2e6a1857a', '::1', 1586172796, '__ci_last_regenerate|i:1586172796;login_status|s:1:\"1\";user_id|s:1:\"1\";name|s:11:\"admin admin\";admin_is_login|s:1:\"1\";login_type|s:5:\"admin\";active_menu|s:2:\"10\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('020589fd00b67a0ac338ab1a006ff5ecfb11a621', '::1', 1586173219, '__ci_last_regenerate|i:1586173219;login_status|s:1:\"1\";user_id|s:1:\"1\";name|s:11:\"admin admin\";admin_is_login|s:1:\"1\";login_type|s:5:\"admin\";active_menu|s:3:\"179\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3f45edcdbc070bb6412921883170348d8e2f3a91', '::1', 1586173409, '__ci_last_regenerate|i:1586173219;login_status|s:1:\"1\";user_id|s:1:\"1\";name|s:11:\"admin admin\";admin_is_login|s:1:\"1\";login_type|s:5:\"admin\";active_menu|s:2:\"23\";');


#
# TABLE STRUCTURE FOR: comments
#

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `comments_id` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `product_id` int(20) NOT NULL,
  `comment_type` int(5) NOT NULL DEFAULT '1',
  `replay_for` int(10) DEFAULT '0',
  `comment` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `comment_at` datetime DEFAULT NULL,
  `publication` int(5) DEFAULT '0',
  PRIMARY KEY (`comments_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

#
# TABLE STRUCTURE FOR: config
#

DROP TABLE IF EXISTS `config`;

CREATE TABLE `config` (
  `config_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `value` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`config_id`)
) ENGINE=MyISAM AUTO_INCREMENT=223 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (1, 'system_name', 'VENDLY - largets online vendors shop');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (2, 'site_name', 'My Product Site');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (3, 'author', 'Jone Doe');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (4, 'business_address', 'My Address');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (5, 'business_phone', '880170000000');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (6, 'contact_email', 'contact@mydomain.com');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (7, 'system_email', 'email@mydomain.com');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (8, 'system_short_name', 'VENDLY');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (9, 'social_share_enable', '0');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (10, 'default_color', '#00CC6A');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (11, 'front_end_theme', 'blue');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (12, 'seo_title', '');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (13, 'focus_keyword', '');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (14, 'meta_description', '');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (15, 'blog_enable', '0');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (16, 'blog_title', '');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (17, 'blog_keyword', '');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (18, 'blog_meta_description', '');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (19, 'home_page_seo_title', '');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (20, 'language', 'english');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (21, 'site_url', 'https://mydomain.com');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (22, 'total_product_in_slider', '5');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (23, 'footer1_title', 'About');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (24, 'footer1_content', '');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (25, 'footer2_title', 'Useful Link');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (26, 'footer2_content', '');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (27, 'footer3_title', 'Useful Link');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (28, 'footer3_content', '');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (29, 'copyright_text', 'Copyright 2020 <a href=\"#\">Business Name</a>');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (30, 'slider_type', 'disable');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (31, 'slide_per_page', '8');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (32, 'protocol', 'sendmail');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (33, 'mailpath', '/usr/bin/sendmail');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (34, 'smtp_host', 'smtp.gmail.com');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (35, 'smtp_user', 'example@gmail.com');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (36, 'smtp_pass', 'xxxxxxxxxxxx');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (37, 'smtp_port', '465');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (38, 'smtp_crypto', 'ssl');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (39, 'facebook_url', '#');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (40, 'twitter_url', '#');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (41, 'vimeo_url', '#');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (42, 'linkedin_url', '#');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (43, 'youtube_url', '#');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (44, 'google_analytics_id', 'UA-00000000-1');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (45, 'about_us_enable', '1');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (46, 'about_us_title', 'about');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (47, 'about_us_text', 'about us');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (48, 'about_us_to_primary_menu', '1');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (49, 'about_us_to_footer_menu', '0');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (50, 'facebook_comment_appid', '0000');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (51, 'comments_method', '0');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (52, 'comments_approval', '0');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (53, 'ad_160x600_code', '');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (54, 'ad_160x600_type', '1');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (55, 'ad_160x600_image_url', '');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (56, 'ad_250x300_type', '1');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (57, 'ad_250x300_image_url', '');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (58, 'ad_250x300_code', '');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (59, 'ad_160x600_url', '');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (60, 'ad_250x300_url', '#');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (61, 'map_api', 'xxxxxxxxxxxxxxxxxxxxxxx');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (62, 'map_lat', 'xxxxxxxxxxxxxxxx');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (63, 'map_lng', 'xxxxxxxxxxxxxxxxxxxx');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (64, 'product_per_page', '18');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (65, 'google_application_name', 'Connect With Ovoo');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (66, 'google_client_id', 'xxxxxxxxxxxxxxxxxxxx');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (67, 'google_client_secret', 'xxxxxxxxxxxxxxxxxxxxxxx');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (68, 'google_redirect_uri', '#');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (69, 'google_api_key', '');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (70, 'google_login_enable', '0');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (71, 'facebook_app_id', 'xxxxxxxxxxxxxxxxxxxx');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (72, 'facebook_app_secret', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (73, 'facebook_graph_version', 'v2.10');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (74, 'google_login_enable', '0');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (75, 'facebook_login_enable', '0');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (76, 'tv_series_publish', '1');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (77, 'tv_series_title', 'Tv-Series Page SEO Title');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (78, 'tv_series_keyword', '');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (79, 'tv_series_meta_description', '                                                                                          ');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (80, 'tv_series_pin_primary_menu', '1');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (81, 'tv_series_pin_footer_menu', '1');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (82, 'purchase_code', 'item_purchase_code');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (83, 'header_templete', 'header1');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (84, 'footer_templete', 'footer1');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (85, 'dark_theme', '1');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (86, 'player_color_skin', 'blue');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (87, 'player_watermark', '0');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (88, 'player_watermark_logo', 'uploads/watermark_logo.png');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (89, 'player_watermark_url', '#');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (90, 'player_share', '');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (91, 'player_share_fb_id', '35345');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (92, 'player_seek_button', '0');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (95, 'player_volume_remember', '0');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (93, 'player_seek_forward', '10');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (94, 'player_seek_back', '5');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (104, 'registration_enable', '1');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (105, 'frontend_login_enable', '1');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (106, 'push_notification_enable', '');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (107, 'onesignal_appid', 'xxxxxxxxxxxxxxx');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (108, 'onesignal_actionmessage', 'We\\\'d like to show you notifications for the latest news.');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (109, 'onesignal_acceptbuttontext', 'ALLOW');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (110, 'onesignal_cancelbuttontext', 'NO THANKS');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (111, 'onesignal_api_keys', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (112, 'landing_page_enable', '1');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (113, 'landing_page_image_url', 'landing_page/bg.jpg');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (142, 'mobile_apps_api_secret_key', 'default_mobile_apps_api_secret_key');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (115, 'country_to_primary_menu', '0');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (116, 'category_to_primary_menu', '1');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (117, 'release_to_primary_menu', '1');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (118, 'show_star_image', '0');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (119, 'product_page_seo_title', 'Product Page SEO Title');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (120, 'product_page_focus_keyword', '');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (121, 'product_page_meta_description', '');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (128, 'dmca_policy_content', 'privacy_policy_content');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (122, 'privacy_policy_content', '');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (123, 'privacy_policy_to_primary_menu', '0');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (124, 'privacy_policy_to_footer_menu', '0');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (125, 'disclaimer_text', '<b>Disclaimer:</b> This site does not store any files on its server. All contents are provided by non-affiliated third parties.');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (126, 'disclaimer_text_enable', '0');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (127, 'product_report_enable', '1');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (129, 'dmca_to_primary_menu', '0');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (130, 'dmca_to_footer_menu', '0');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (131, 'dmca_content', '');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (132, 'contact_to_primary_menu', '0');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (133, 'contact_to_footer_menu', '1');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (134, 'product_report_note', 'Please help us to describe the issue so we can fix it asap. \r\nNote: This feature used to report the issue for the current product, not used for requesting new subtitle/audio in another language');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (135, 'product_report_email', 'contact@mydomain.com');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (136, 'product_request_enable', '1');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (137, 'product_request_email', 'contact@mydomain.com');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (138, 'envato_support_untill', '2019-01-01');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (139, 'cron_key', 'default_cron_key');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (140, 'db_backup', '0');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (141, 'backup_schedule', '1');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (143, 'version', '3.2.1');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (144, 'preroll_ads_enable', '0');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (145, 'preroll_ads_product', 'https://sample-products.com/product123/mp4/720/big_buck_bunny_720p_20mb.mp4');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (146, 'admob_ads_enable', '0');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (147, 'admob_app_id', 'ca-app-pub-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxe');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (148, 'admob_banner_ads_id', 'ca-app-pub-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (149, 'admob_interstitial_ads_id', 'ca-app-pub-xxxxxxxxxxxxxxxxxxx/xxxxxxxxxxxxxx');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (150, 'admob_publisher_id', 'pub-xxxxxxxxxxxxxxxxxxe');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (151, 'recaptcha_site_key', 'xxxxxxxxxxxxxxxxxxx');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (152, 'recaptcha_secret_key', 'xxxxxxxxxxxxxxxxxxxx');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (153, 'az_to_primary_menu', '1');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (154, 'az_to_footer_menu', '1');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (155, 'recaptcha_enable', '0');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (156, 'active_theme', 'default');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (157, 'active_language_id', '1');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (158, 'disqus_short_name', 'ovoo');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (159, 'trial_enable', '0');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (160, 'trial_period', '0');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (171, 'tmdb_language', 'en');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (172, 'default_quality', 'HD');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (173, 'app_menu', 'grid');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (174, 'app_program_guide_enable', 'false');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (175, 'app_mandatory_login', 'false');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (176, 'category_visible', 'true');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (177, 'country_visible', 'true');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (178, 'timezone', 'Asia/Dhaka');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (179, 'season_order', 'DESC');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (180, 'episode_order', 'DESC');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (181, 'product_source', 'mp4');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (182, 'product_file_order', 'DESC');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (183, 'tmbd_api_key', 'xxxxxxxxxxxxxxxxxxxx');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (193, 'slider_border_radius', '10');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (192, 'slider_height', '420');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (190, 'slider_arrow', '0');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (191, 'slider_bullet', '1');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (189, 'slider_fullwide', '0');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (194, 'logo', 'logo.png');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (196, 'favicon', 'favicon.ico');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (197, 'landing_bg', 'landing_page/bg.jpg');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (199, 'trial_enable', '0');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (200, 'trial_period', '0');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (201, 'paypal_email', 'paypal@domain.com');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (202, 'currency_symbol', '$');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (203, 'stripe_publishable_key', 'xxxxxxxxxxxxxxxxxxxxxxxxxxx');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (204, 'stripe_secret_key', 'xxxxxxxxxxxxxxxxxxxxxxxxxxx');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (205, 'currency', 'USD');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (206, 'paypal_client_id', 'xxxxxxxxxxxxxxxxxxxx');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (207, 'exchange_rate_update_by_cron', '0');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (208, 'enable_ribbon', '1');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (209, 'mobile_ads_enable', '0');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (210, 'mobile_ads_network', 'admob');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (211, 'fan_native_ads_placement_id', 'xxxxxxxxxxxxxxxxxxxx');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (212, 'fan_banner_ads_placement_id', 'xxxxxxxxxxxxxxxxxxxxxxx');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (213, 'fan_Interstitial_ads_placement_id', 'xxxxxxxxxxxxxxxxxxxxxx');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (214, 'startapp_app_id', 'xxxxxxxxxxx');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (218, 'apk_version_code', '15');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (219, 'apk_version_name', 'v1.2.1');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (220, 'apk_whats_new', 'New UI\r\nDownload option\r\nAdvanced Search\r\nSubscription');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (221, 'latest_apk_url', 'http://oxoo.spagreen.net/demo/oxoo-v121.apk');
INSERT INTO `config` (`config_id`, `title`, `value`) VALUES (222, 'apk_update_is_skipable', '1');


#
# TABLE STRUCTURE FOR: country
#

DROP TABLE IF EXISTS `country`;

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `description` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `slug` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `publication` int(2) NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (1, 'International', '', 'international', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (2, 'Asia', '', 'asia', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (3, 'USA', '', 'usa', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (4, 'China', '', 'china', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (5, 'Japan', '', 'japan', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (6, 'Korean', '', 'korean', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (7, 'Nepal', '', 'nepal', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (8, 'Thailand', '', 'thailand', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (9, 'Tamil', '', 'tamil', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (10, 'India', '', 'india', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (11, 'France', '', 'france', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (12, 'Italy', '', 'italy', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (13, 'German', '', 'german', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (14, 'London', '', 'london', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (15, 'Canada', '', 'canada', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (16, 'Denmark', '', 'denmark', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (17, 'UK', '', 'uk', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (18, 'Hong kong', '', 'hong-kong', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (19, 'UAE', '', 'uae', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (20, 'Australia', '', 'australia', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (21, 'South Korea', '', 'south-korea', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (22, 'Russia', '', 'russia', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (23, ' Sweden', '', 'sweden', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (24, 'Spain', '', 'spain', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (25, 'Brazil', '', 'brazil', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (26, 'Iran', '', 'iran', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (27, 'Israel', '', 'israel', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (28, 'Indonesia', '', 'indonesia', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (29, 'Philippines', '', 'philippines', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (30, ' Peru', ' Peru', 'peru', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (31, ' Canada', ' Canada', 'canada', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (32, ' Japan', ' Japan', 'japan', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (33, ' USA', ' USA', 'usa', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (34, ' Hong Kong', ' Hong Kong', 'hong-kong', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (35, ' Mexico', ' Mexico', 'mexico', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (36, ' New Zealand', ' New Zealand', 'new-zealand', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (37, ' UK', ' UK', 'uk', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (38, ' Denmark', ' Denmark', 'denmark', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (39, ' Australia', ' Australia', 'australia', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (40, ' Germany', ' Germany', 'germany', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (41, ' Hungary', ' Hungary', 'hungary', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (42, ' India', ' India', 'india', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (43, 'Hungary', 'Hungary', 'hungary', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (44, ' France', ' France', 'france', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (45, ' China', ' China', 'china', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (46, 'Chile', 'Chile', 'chile', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (47, ' Argentina', ' Argentina', 'argentina', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (48, 'Egypt', 'Egypt', 'egypt', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (49, 'New Zealand', 'New Zealand', 'new-zealand', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (50, 'Croatia', 'Croatia', 'croatia', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (51, ' Switzerland', ' Switzerland', 'switzerland', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (52, ' Tunisia', ' Tunisia', 'tunisia', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (53, 'Belgium', 'Belgium', 'belgium', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (68, 'United States of America', 'United States of America', 'united-states-of-america', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (69, 'Bangladesh', 'Bangladesh', 'bangladesh', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (70, 'United Kingdom', 'United Kingdom', 'united-kingdom', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (71, 'Malaysia', 'Malaysia', 'malaysia', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (72, 'South Africa', 'South Africa', 'south-africa', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (73, 'Switzerland', 'Switzerland', 'switzerland', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (74, 'Germany', 'Germany', 'germany', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (75, 'Sweden', 'Sweden', 'sweden', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (76, 'Bulgaria', 'Bulgaria', 'bulgaria', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (77, 'Soviet Union', 'Soviet Union', 'soviet-union', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (78, 'Netherlands', 'Netherlands', 'netherlands', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (80, 'Malta', 'Malta', 'malta', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (81, 'Taiwan', 'Taiwan', 'taiwan', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (82, 'Argentina', 'Argentina', 'argentina', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (83, 'Iceland', 'Iceland', 'iceland', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (84, 'CA', 'CA', 'ca', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (85, 'JP', 'JP', 'jp', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (86, 'US', 'US', 'us', 1);
INSERT INTO `country` (`country_id`, `name`, `description`, `slug`, `publication`) VALUES (87, 'GB', 'GB', 'gb', 1);


#
# TABLE STRUCTURE FOR: cron
#

DROP TABLE IF EXISTS `cron`;

CREATE TABLE `cron` (
  `cron_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `action` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `image_url` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `save_to` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `product_id` int(250) DEFAULT NULL,
  `admin_email_from` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `admin_email` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `email_to` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `email_sub` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `message` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  PRIMARY KEY (`cron_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

#
# TABLE STRUCTURE FOR: currency
#

DROP TABLE IF EXISTS `currency`;

CREATE TABLE `currency` (
  `currency_id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `currency` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `iso_code` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `symbol` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `exchange_rate` double NOT NULL DEFAULT '1',
  `default` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`currency_id`)
) ENGINE=MyISAM AUTO_INCREMENT=133 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (1, 'Albania', 'Leke', 'ALL', 'Lek', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (2, 'America', 'Dollars', 'USD', '$', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (3, 'Afghanistan', 'Afghanis', 'AFN', '؋', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (4, 'Argentina', 'Pesos', 'ARS', '$', '61.399228', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (5, 'Aruba', 'Guilders', 'AWG', 'ƒ', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (6, 'Australia', 'Dollars', 'AUD', '$', '1.4882', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (7, 'Azerbaijan', 'New Manats', 'AZN', 'ман', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (8, 'Bahamas', 'Dollars', 'BSD', '$', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (9, 'Barbados', 'Dollars', 'BBD', '$', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (10, 'Belarus', 'Rubles', 'BYR', 'p.', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (11, 'Belgium', 'Euro', 'EUR', '€', '0.922379', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (12, 'Beliz', 'Dollars', 'BZD', 'BZ$', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (13, 'Bermuda', 'Dollars', 'BMD', '$', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (14, 'Bolivia', 'Bolivianos', 'BOB', '$b', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (15, 'Bosnia and Herzegovina', 'Convertible Marka', 'BAM', 'KM', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (16, 'Botswana', 'Pula', 'BWP', 'P', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (17, 'Bulgaria', 'Leva', 'BGN', 'лв', '1.803753', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (18, 'Brazil', 'Reais', 'BRL', 'R$', '4.330496', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (19, 'Britain (United Kingdom)', 'Pounds', 'GBP', '£', '83', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (20, 'Brunei Darussalam', 'Dollars', 'BND', '$', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (21, 'Cambodia', 'Riels', 'KHR', '៛', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (22, 'Canada', 'Dollars', 'CAD', '$', '1.325097', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (23, 'Cayman Islands', 'Dollars', 'KYD', '$', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (24, 'Chile', 'Pesos', 'CLP', '$', '794.622928', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (25, 'China', 'Yuan Renminbi', 'CNY', '¥', '6.984162', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (26, 'Colombia', 'Pesos', 'COP', '$', '3313', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (27, 'Costa Rica', 'Colón', 'CRC', '₡', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (28, 'Croatia', 'Kuna', 'HRK', 'kn', '6.869981', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (29, 'Cuba', 'Pesos', 'CUP', '₱', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (30, 'Cyprus', 'Euro', 'EUR', '€', '0.922379', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (31, 'Czech Republic', 'Koruny', 'CZK', 'Kč', '22.911451', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (32, 'Denmark', 'Kroner', 'DKK', 'kr', '6.890187', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (33, 'Dominican Republic', 'Pesos', 'DOP ', 'RD$', '53.507402', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (34, 'East Caribbean', 'Dollars', 'XCD', '$', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (35, 'Egypt', 'Pounds', 'EGP', '£', '15.61815', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (36, 'El Salvador', 'Colones', 'SVC', '$', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (37, 'England (United Kingdom)', 'Pounds', 'GBP', '£', '83', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (38, 'Euro', 'Euro', 'EUR', '€', '0.922379', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (39, 'Falkland Islands', 'Pounds', 'FKP', '£', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (40, 'Fiji', 'Dollars', 'FJD', '$', '2.195918', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (41, 'France', 'Euro', 'EUR', '€', '0.922379', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (42, 'Ghana', 'Cedis', 'GHC', '¢', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (43, 'Gibraltar', 'Pounds', 'GIP', '£', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (44, 'Greece', 'Euro', 'EUR', '€', '0.922379', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (45, 'Guatemala', 'Quetzales', 'GTQ', 'Q', '7.63804', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (46, 'Guernsey', 'Pounds', 'GGP', '£', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (47, 'Guyana', 'Dollars', 'GYD', '$', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (48, 'Holland (Netherlands)', 'Euro', 'EUR', '€', '0.922379', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (49, 'Honduras', 'Lempiras', 'HNL', 'L', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (50, 'Hong Kong', 'Dollars', 'HKD', '$', '7.767071', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (51, 'Hungary', 'Forint', 'HUF', 'Ft', '310.231043', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (52, 'Iceland', 'Kronur', 'ISK', 'kr', '126.858376', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (53, 'India', 'Rupees', 'INR', 'Rp', '71.40112', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (54, 'Indonesia', 'Rupiahs', 'IDR', 'Rp', '13612.651679', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (55, 'Iran', 'Rials', 'IRR', '﷼', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (56, 'Ireland', 'Euro', 'EUR', '€', '0.922379', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (57, 'Isle of Man', 'Pounds', 'IMP', '£', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (58, 'Israel', 'New Shekels', 'ILS', '₪', '3.427408', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (59, 'Italy', 'Euro', 'EUR', '€', '0.922379', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (60, 'Jamaica', 'Dollars', 'JMD', 'J$', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (61, 'Japan', 'Yen', 'JPY', '¥', '109.814254', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (62, 'Jersey', 'Pounds', 'JEP', '£', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (63, 'Kazakhstan', 'Tenge', 'KZT', 'лв', '376.834123', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (64, 'Korea (North)', 'Won', 'KPW', '₩', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (65, 'Korea (South)', 'Won', 'KRW', '₩', '1183.94149', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (66, 'Kyrgyzstan', 'Soms', 'KGS', 'лв', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (67, 'Laos', 'Kips', 'LAK', '₭', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (68, 'Latvia', 'Lati', 'LVL', 'Ls', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (69, 'Lebanon', 'Pounds', 'LBP', '£', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (70, 'Liberia', 'Dollars', 'LRD', '$', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (71, 'Liechtenstein', 'Switzerland Francs', 'CHF', 'CHF', '0.980752', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (72, 'Lithuania', 'Litai', 'LTL', 'Lt', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (73, 'Luxembourg', 'Euro', 'EUR', '€', '0.922379', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (74, 'Macedonia', 'Denars', 'MKD', 'ден', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (75, 'Malaysia', 'Ringgits', 'MYR', 'RM', '4.139749', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (76, 'Malta', 'Euro', 'EUR', '€', '0.922379', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (77, 'Mauritius', 'Rupees', 'MUR', '₨', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (78, 'Mexico', 'Pesos', 'MXN', '$', '18.585695', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (79, 'Mongolia', 'Tugriks', 'MNT', '₮', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (80, 'Mozambique', 'Meticais', 'MZN', 'MT', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (81, 'Namibia', 'Dollars', 'NAD', '$', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (82, 'Nepal', 'Rupees', 'NPR', '₨', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (83, 'Netherlands Antilles', 'Guilders', 'ANG', 'ƒ', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (84, 'Netherlands', 'Euro', 'EUR', '€', '0.922379', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (85, 'New Zealand', 'Dollars', 'NZD', '$', '1.553574', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (86, 'Nicaragua', 'Cordobas', 'NIO', 'C$', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (87, 'Nigeria', 'Nairas', 'NGN', '₦', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (88, 'North Korea', 'Won', 'KPW', '₩', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (89, 'Norway', 'Krone', 'NOK', 'kr', '9.253793', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (90, 'Oman', 'Rials', 'OMR', '﷼', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (91, 'Pakistan', 'Rupees', 'PKR', '₨', '154.392233', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (92, 'Panama', 'Balboa', 'PAB', 'B/.', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (93, 'Paraguay', 'Guarani', 'PYG', 'Gs', '6626', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (94, 'Peru', 'Nuevos Soles', 'PEN', 'S/.', '3.383275', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (95, 'Philippines', 'Pesos', 'PHP', 'Php', '50.525693', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (96, 'Poland', 'Zlotych', 'PLN', 'zł', '3.917289', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (97, 'Qatar', 'Rials', 'QAR', '﷼', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (98, 'Romania', 'New Lei', 'RON', 'lei', '4.396745', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (99, 'Russia', 'Rubles', 'RUB', 'руб', '63.537178', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (100, 'Saint Helena', 'Pounds', 'SHP', '£', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (101, 'Saudi Arabia', 'Riyals', 'SAR', '﷼', '3.75061', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (102, 'Serbia', 'Dinars', 'RSD', 'Дин.', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (103, 'Seychelles', 'Rupees', 'SCR', '₨', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (104, 'Singapore', 'Dollars', 'SGD', '$', '1.390516', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (105, 'Slovenia', 'Euro', 'EUR', '€', '0.922379', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (106, 'Solomon Islands', 'Dollars', 'SBD', '$', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (107, 'Somalia', 'Shillings', 'SOS', 'S', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (108, 'South Africa', 'Rand', 'ZAR', 'R', '14.88117', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (109, 'South Korea', 'Won', 'KRW', '₩', '1183.94149', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (110, 'Spain', 'Euro', 'EUR', '€', '0.922379', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (111, 'Sri Lanka', 'Rupees', 'LKR', '₨', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (112, 'Sweden', 'Kronor', 'SEK', 'kr', '9.694847', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (113, 'Switzerland', 'Francs', 'CHF', 'CHF', '0.980752', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (114, 'Suriname', 'Dollars', 'SRD', '$', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (115, 'Syria', 'Pounds', 'SYP', '£', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (116, 'Taiwan', 'New Dollars', 'TWD', 'NT$', '30.0056', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (117, 'Thailand', 'Baht', 'THB', '฿', '31.163295', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (118, 'Trinidad and Tobago', 'Dollars', 'TTD', 'TT$', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (119, 'Turkey', 'Lira', 'TRY', 'TL', '6.053817', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (120, 'Turkey', 'Liras', 'TRL', '£', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (121, 'Tuvalu', 'Dollars', 'TVD', '$', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (122, 'Ukraine', 'Hryvnia', 'UAH', '₴', '24.336642', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (123, 'United Kingdom', 'Pounds', 'GBP', '£', '83', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (124, 'United States of America', 'Dollars', 'USD', '$', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (125, 'Uruguay', 'Pesos', 'UYU', '$U', '37.880896', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (126, 'Uzbekistan', 'Sums', 'UZS', 'лв', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (127, 'Vatican City', 'Euro', 'EUR', '€', '0.922379', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (128, 'Venezuela', 'Bolivares Fuertes', 'VEF', 'Bs', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (129, 'Vietnam', 'Dong', 'VND', '₫', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (130, 'Yemen', 'Rials', 'YER', '﷼', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (131, 'Zimbabwe', 'Zimbabwe Dollars', 'ZWD', 'Z$', '1', 0, 1);
INSERT INTO `currency` (`currency_id`, `country`, `currency`, `iso_code`, `symbol`, `exchange_rate`, `default`, `status`) VALUES (132, 'Bangladesh', 'Taka', 'BDT', '৳', '83', 0, 1);


#
# TABLE STRUCTURE FOR: download_link
#

DROP TABLE IF EXISTS `download_link`;

CREATE TABLE `download_link` (
  `download_link_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `link_title` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `resolution` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '720p',
  `file_size` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '00MB',
  `download_url` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `in_app_download` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`download_link_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

#
# TABLE STRUCTURE FOR: episodes
#

DROP TABLE IF EXISTS `episodes`;

CREATE TABLE `episodes` (
  `episodes_id` int(11) NOT NULL AUTO_INCREMENT,
  `stream_key` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `seasons_id` int(11) DEFAULT NULL,
  `episodes_name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `file_source` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `source_type` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `file_url` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `order` int(50) NOT NULL DEFAULT '0',
  `date_added` datetime NOT NULL DEFAULT '2019-01-01 00:00:00',
  `last_ep_added` datetime NOT NULL DEFAULT '2019-01-01 00:00:00',
  PRIMARY KEY (`episodes_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

#
# TABLE STRUCTURE FOR: category
#

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `description` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `slug` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `publication` int(1) NOT NULL,
  `featured` int(2) DEFAULT '0',
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (1, 'Action', 'Action Product<br>', 'action', 1, 1);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (2, 'TV Show', 'Tv Show <br>', 'tv-show', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (3, 'Si-Fi', '', 'si-fi', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (4, 'Adventure', 'Adventure Products<br>', 'adventure', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (5, 'Animation', 'Animation Products<br>', 'animation', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (6, 'Biography', 'Biography Products<br>', 'biography', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (7, 'Comedy', 'Comedy Products<br>', 'comedy', 1, 1);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (8, 'Crime', 'Crime Products<br>', 'crime', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (9, 'Documentary', 'Documentary Products<br>', 'documentary', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (10, 'Drama', '', 'drama', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (11, 'Family', 'Family<br>', 'family', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (12, 'Fantasy', 'Fantasy Products<br>', 'fantasy', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (13, 'History', '', 'history', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (14, 'Horror', 'Horror Products<br>', 'horror', 1, 1);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (15, 'Music', '', 'music', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (16, 'Musical', '', 'musical', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (17, 'Mystery', '', 'mystery', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (18, 'Thriller', '', 'thriller', 1, 1);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (19, 'War', '', 'war', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (20, 'Western', '', 'western', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (21, 'TV Series', '', 'tv-series', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (22, ' Romance', ' Romance', 'romance', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (23, ' Adventure', ' Adventure', 'adventure', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (24, ' Thriller', ' Thriller', 'thriller', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (25, ' Drama', ' Drama', 'drama', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (26, ' Fantasy', ' Fantasy', 'fantasy', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (27, ' Sci-Fi', ' Sci-Fi', 'sci-fi', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (28, ' Comedy', ' Comedy', 'comedy', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (29, ' Family', ' Family', 'family', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (30, ' Action', ' Action', 'action', 1, 1);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (31, 'Short', 'Short', 'short', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (32, ' Music', ' Music', 'music', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (33, ' History', ' History', 'history', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (34, ' Crime', ' Crime', 'crime', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (35, ' Western', ' Western', 'western', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (36, ' Sport', ' Sport', 'sport', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (37, ' Short', ' Short', 'short', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (38, ' Mystery', ' Mystery', 'mystery', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (39, 'Romance', 'Romance', 'romance', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (40, 'Action & Adventure', 'Action & Adventure', 'action-adventure', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (41, 'Sci-Fi & Fantasy', 'Sci-Fi & Fantasy', 'sci-fi-fantasy', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (42, 'Science Fiction', 'Science Fiction', 'science-fiction', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (44, 'TV Product', 'TV Product', 'tv-product', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (45, 'News', 'News', 'news', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (46, 'جريمة', 'جريمة', 'جريمة', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (47, 'إثارة', 'إثارة', 'إثارة', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (48, 'دراما', 'دراما', 'دراما', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (49, 'حركة', 'حركة', '', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (50, 'خيال علمي', 'خيال علمي', '', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (51, 'مغامرة', 'مغامرة', '', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (52, 'فانتازيا', 'فانتازيا', '', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (53, 'رسوم متحركة', 'رسوم متحركة', '', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (54, 'عائلي', 'عائلي', '', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (55, 'كوميديا', 'كوميديا', '', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (56, 'وثائقي', 'وثائقي', '', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (57, 'Science-Fiction', 'Science-Fiction', 'science-fiction', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (58, 'Historie', 'Historie', 'historie', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (59, 'Abenteuer', 'Abenteuer', 'abenteuer', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (60, 'Familie', 'Familie', 'familie', 1, 0);
INSERT INTO `category` (`category_id`, `name`, `description`, `slug`, `publication`, `featured`) VALUES (61, 'Krimi', 'Krimi', 'krimi', 1, 0);


#
# TABLE STRUCTURE FOR: keys
#

DROP TABLE IF EXISTS `keys`;

CREATE TABLE `keys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT 'System',
  `key` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT '0',
  `is_private_key` tinyint(1) NOT NULL DEFAULT '0',
  `ip_addresses` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

INSERT INTO `keys` (`id`, `label`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES (1, 'Default', 'deafult_api_key', 1, 0, 0, NULL, 1582700749);


#
# TABLE STRUCTURE FOR: language_list
#

DROP TABLE IF EXISTS `language_list`;

CREATE TABLE `language_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `short_form` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `language_code` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `folder_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `text_direction` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `language_order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

INSERT INTO `language_list` (`id`, `name`, `short_form`, `language_code`, `folder_name`, `text_direction`, `status`, `language_order`) VALUES (1, 'English', 'en', 'en_us', 'english', 'ltr', 1, 1);


#
# TABLE STRUCTURE FOR: languages_iso
#

DROP TABLE IF EXISTS `languages_iso`;

CREATE TABLE `languages_iso` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(49) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `iso` char(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (1, 'English', 'en');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (2, 'Afar', 'aa');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (3, 'Abkhazian', 'ab');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (4, 'Afrikaans', 'af');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (5, 'Amharic', 'am');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (6, 'Arabic', 'ar');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (7, 'Assamese', 'as');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (8, 'Aymara', 'ay');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (9, 'Azerbaijani', 'az');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (10, 'Bashkir', 'ba');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (11, 'Belarusian', 'be');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (12, 'Bulgarian', 'bg');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (13, 'Bihari', 'bh');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (14, 'Bislama', 'bi');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (15, 'Bangla', 'bn');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (16, 'Tibetan', 'bo');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (17, 'Breton', 'br');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (18, 'Catalan', 'ca');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (19, 'Corsican', 'co');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (20, 'Czech', 'cs');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (21, 'Welsh', 'cy');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (22, 'Danish', 'da');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (23, 'German', 'de');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (24, 'Bhutani', 'dz');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (25, 'Greek', 'el');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (26, 'Esperanto', 'eo');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (27, 'Spanish', 'es');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (28, 'Estonian', 'et');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (29, 'Basque', 'eu');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (30, 'Persian', 'fa');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (31, 'Finnish', 'fi');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (32, 'Fiji', 'fj');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (33, 'Faeroese', 'fo');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (34, 'French', 'fr');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (35, 'Frisian', 'fy');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (36, 'Irish', 'ga');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (37, 'Scots/Gaelic', 'gd');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (38, 'Galician', 'gl');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (39, 'Guarani', 'gn');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (40, 'Gujarati', 'gu');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (41, 'Hausa', 'ha');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (42, 'Hindi', 'hi');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (43, 'Croatian', 'hr');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (44, 'Hungarian', 'hu');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (45, 'Armenian', 'hy');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (46, 'Interlingua', 'ia');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (47, 'Interlingue', 'ie');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (48, 'Inupiak', 'ik');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (49, 'Indonesian', 'in');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (50, 'Icelandic', 'is');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (51, 'Italian', 'it');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (52, 'Hebrew', 'iw');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (53, 'Japanese', 'ja');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (54, 'Yiddish', 'ji');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (55, 'Javanese', 'jw');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (56, 'Georgian', 'ka');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (57, 'Kazakh', 'kk');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (58, 'Greenlandic', 'kl');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (59, 'Cambodian', 'km');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (60, 'Kannada', 'kn');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (61, 'Korean', 'ko');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (62, 'Kashmiri', 'ks');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (63, 'Kurdish', 'ku');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (64, 'Kirghiz', 'ky');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (65, 'Latin', 'la');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (66, 'Lingala', 'ln');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (67, 'Laothian', 'lo');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (68, 'Lithuanian', 'lt');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (69, 'Latvian/Lettish', 'lv');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (70, 'Malagasy', 'mg');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (71, 'Maori', 'mi');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (72, 'Macedonian', 'mk');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (73, 'Malayalam', 'ml');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (74, 'Mongolian', 'mn');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (75, 'Moldavian', 'mo');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (76, 'Marathi', 'mr');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (77, 'Malay', 'ms');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (78, 'Maltese', 'mt');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (79, 'Burmese', 'my');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (80, 'Nauru', 'na');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (81, 'Nepali', 'ne');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (82, 'Dutch', 'nl');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (83, 'Norwegian', 'no');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (84, 'Occitan', 'oc');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (85, '(Afan)/Oromoor/Oriya', 'om');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (86, 'Punjabi', 'pa');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (87, 'Polish', 'pl');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (88, 'Pashto/Pushto', 'ps');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (89, 'Portuguese', 'pt');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (90, 'Quechua', 'qu');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (91, 'Rhaeto-Romance', 'rm');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (92, 'Kirundi', 'rn');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (93, 'Romanian', 'ro');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (94, 'Russian', 'ru');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (95, 'Kinyarwanda', 'rw');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (96, 'Sanskrit', 'sa');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (97, 'Sindhi', 'sd');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (98, 'Sangro', 'sg');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (99, 'Serbo-Croatian', 'sh');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (100, 'Singhalese', 'si');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (101, 'Slovak', 'sk');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (102, 'Slovenian', 'sl');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (103, 'Samoan', 'sm');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (104, 'Shona', 'sn');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (105, 'Somali', 'so');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (106, 'Albanian', 'sq');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (107, 'Serbian', 'sr');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (108, 'Siswati', 'ss');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (109, 'Sesotho', 'st');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (110, 'Sundanese', 'su');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (111, 'Swedish', 'sv');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (112, 'Swahili', 'sw');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (113, 'Tamil', 'ta');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (114, 'Telugu', 'te');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (115, 'Tajik', 'tg');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (116, 'Thai', 'th');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (117, 'Tigrinya', 'ti');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (118, 'Turkmen', 'tk');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (119, 'Tagalog', 'tl');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (120, 'Setswana', 'tn');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (121, 'Tonga', 'to');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (122, 'Turkish', 'tr');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (123, 'Tsonga', 'ts');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (124, 'Tatar', 'tt');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (125, 'Twi', 'tw');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (126, 'Ukrainian', 'uk');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (127, 'Urdu', 'ur');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (128, 'Uzbek', 'uz');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (129, 'Vietnamese', 'vi');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (130, 'Volapuk', 'vo');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (131, 'Wolof', 'wo');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (132, 'Xhosa', 'xh');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (133, 'Yoruba', 'yo');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (134, 'Chinese', 'zh');
INSERT INTO `languages_iso` (`id`, `name`, `iso`) VALUES (135, 'Zulu', 'zu');


#
# TABLE STRUCTURE FOR: logs
#

DROP TABLE IF EXISTS `logs`;

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `uri` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `method` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `params` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `api_key` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `time` int(11) NOT NULL,
  `rtime` float DEFAULT NULL,
  `authorized` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `response_code` smallint(3) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

#
# TABLE STRUCTURE FOR: page
#

DROP TABLE IF EXISTS `page`;

CREATE TABLE `page` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_title` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `seo_title` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `slug` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `primary_menu` int(10) DEFAULT '0',
  `footer_menu` int(10) DEFAULT '0',
  `focus_keyword` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `meta_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `publication` int(11) DEFAULT '1',
  `publish_at` datetime DEFAULT NULL,
  `deletable` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`page_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

#
# TABLE STRUCTURE FOR: plan
#

DROP TABLE IF EXISTS `plan`;

CREATE TABLE `plan` (
  `plan_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `day` int(50) DEFAULT '0',
  `screens` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `price` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`plan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

INSERT INTO `plan` (`plan_id`, `name`, `day`, `screens`, `price`, `status`) VALUES (1, 'Basic', 7, NULL, '5', 1);
INSERT INTO `plan` (`plan_id`, `name`, `day`, `screens`, `price`, `status`) VALUES (2, 'Professional ', 30, NULL, '10', 1);
INSERT INTO `plan` (`plan_id`, `name`, `day`, `screens`, `price`, `status`) VALUES (3, 'Ultra', 90, NULL, '20', 1);


#
# TABLE STRUCTURE FOR: post_category
#

DROP TABLE IF EXISTS `post_category`;

CREATE TABLE `post_category` (
  `post_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `slug` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `category_desc` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  PRIMARY KEY (`post_category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

#
# TABLE STRUCTURE FOR: post_comments
#

DROP TABLE IF EXISTS `post_comments`;

CREATE TABLE `post_comments` (
  `post_comments_id` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `post_id` int(20) NOT NULL,
  `comment_type` int(5) NOT NULL DEFAULT '1',
  `replay_for` int(10) DEFAULT '0',
  `comment` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `comment_at` datetime DEFAULT NULL,
  `publication` int(5) DEFAULT '1',
  PRIMARY KEY (`post_comments_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

#
# TABLE STRUCTURE FOR: posts
#

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_title` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `seo_title` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `slug` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `focus_keyword` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `meta_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `category_id` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `image_link` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `user_id` int(20) DEFAULT '1',
  `post_at` datetime DEFAULT NULL,
  `publication` int(11) DEFAULT '1',
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

#
# TABLE STRUCTURE FOR: product_file
#

DROP TABLE IF EXISTS `product_file`;

CREATE TABLE `product_file` (
  `product_file_id` int(11) NOT NULL AUTO_INCREMENT,
  `stream_key` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `file_source` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `source_type` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `file_url` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `label` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'Server#1',
  `order` int(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`product_file_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

#
# TABLE STRUCTURE FOR: product_type
#

DROP TABLE IF EXISTS `product_type`;

CREATE TABLE `product_type` (
  `product_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_type` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `product_type_desc` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `primary_menu` int(11) DEFAULT NULL,
  `footer_menu` int(11) DEFAULT NULL,
  `slug` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  PRIMARY KEY (`product_type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

INSERT INTO `product_type` (`product_type_id`, `product_type`, `product_type_desc`, `primary_menu`, `footer_menu`, `slug`) VALUES (1, 'Trending', '', NULL, NULL, 'trending');
INSERT INTO `product_type` (`product_type_id`, `product_type`, `product_type_desc`, `primary_menu`, `footer_menu`, `slug`) VALUES (2, 'Trending2', '', NULL, NULL, 'trending2');


#
# TABLE STRUCTURE FOR: products
#

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `imdbid` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `title` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `seo_title` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `slug` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `stars` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT '',
  `director` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `writer` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `rating` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT '0',
  `release` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `country` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `category` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `product_type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `runtime` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `product_quality` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT 'HD',
  `is_paid` int(5) NOT NULL DEFAULT '1',
  `publication` int(5) DEFAULT NULL,
  `trailer` int(5) DEFAULT '0',
  `enable_download` int(5) DEFAULT '1',
  `focus_keyword` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `meta_description` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `tags` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `imdb_rating` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `is_tvseries` int(11) NOT NULL DEFAULT '0',
  `total_rating` int(50) DEFAULT '1',
  `today_view` int(250) DEFAULT '0',
  `weekly_view` int(250) DEFAULT '0',
  `monthly_view` int(250) DEFAULT '0',
  `total_view` int(250) DEFAULT '1',
  `last_ep_added` datetime DEFAULT '2019-04-04 00:00:00',
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

#
# TABLE STRUCTURE FOR: quality
#

DROP TABLE IF EXISTS `quality`;

CREATE TABLE `quality` (
  `quality_id` int(10) NOT NULL AUTO_INCREMENT,
  `quality` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `description` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `status` int(5) DEFAULT '1',
  PRIMARY KEY (`quality_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

INSERT INTO `quality` (`quality_id`, `quality`, `description`, `status`) VALUES (1, '4K', 'High Defination', 1);
INSERT INTO `quality` (`quality_id`, `quality`, `description`, `status`) VALUES (2, 'HD', 'Sandard Defination', 1);
INSERT INTO `quality` (`quality_id`, `quality`, `description`, `status`) VALUES (3, 'SD', 'Ultra High Defination', 1);
INSERT INTO `quality` (`quality_id`, `quality`, `description`, `status`) VALUES (4, 'CAM', 'Web Camera Video', 1);
INSERT INTO `quality` (`quality_id`, `quality`, `description`, `status`) VALUES (7, 'LQ', 'Low Quality', 1);
INSERT INTO `quality` (`quality_id`, `quality`, `description`, `status`) VALUES (8, 'DVD', 'Digital Video Device', 1);


#
# TABLE STRUCTURE FOR: rating
#

DROP TABLE IF EXISTS `rating`;

CREATE TABLE `rating` (
  `rating_id` int(50) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `ip` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `rating` int(5) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`rating_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

#
# TABLE STRUCTURE FOR: rest_logins
#

DROP TABLE IF EXISTS `rest_logins`;

CREATE TABLE `rest_logins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

INSERT INTO `rest_logins` (`id`, `username`, `password`, `status`) VALUES (1, 'admin', 'rest_user_password', 1);


#
# TABLE STRUCTURE FOR: seasons
#

DROP TABLE IF EXISTS `seasons`;

CREATE TABLE `seasons` (
  `seasons_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `seasons_name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `order` int(50) NOT NULL DEFAULT '0',
  `publish` int(11) DEFAULT '1',
  PRIMARY KEY (`seasons_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

#
# TABLE STRUCTURE FOR: slider
#

DROP TABLE IF EXISTS `slider`;

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `description` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `product_link` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `image_link` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `slug` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `action_type` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `action_btn_text` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `action_id` int(50) DEFAULT NULL,
  `action_url` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `order` int(50) NOT NULL DEFAULT '0',
  `publication` int(1) NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

#
# TABLE STRUCTURE FOR: star
#

DROP TABLE IF EXISTS `star`;

CREATE TABLE `star` (
  `star_id` int(10) NOT NULL AUTO_INCREMENT,
  `star_type` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `star_name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `slug` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `star_desc` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`star_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

#
# TABLE STRUCTURE FOR: subscription
#

DROP TABLE IF EXISTS `subscription`;

CREATE TABLE `subscription` (
  `subscription_id` int(50) NOT NULL AUTO_INCREMENT,
  `plan_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `price_amount` double NOT NULL,
  `paid_amount` float NOT NULL,
  `currency` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT 'USD',
  `timestamp_from` int(50) NOT NULL,
  `timestamp_to` int(50) NOT NULL,
  `payment_method` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `transaction_id` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `payment_info` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `payment_timestamp` int(50) NOT NULL,
  `recurring` int(10) NOT NULL DEFAULT '1',
  `status` int(5) NOT NULL DEFAULT '1',
  PRIMARY KEY (`subscription_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

#
# TABLE STRUCTURE FOR: subtitle
#

DROP TABLE IF EXISTS `subtitle`;

CREATE TABLE `subtitle` (
  `subtitle_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(50) NOT NULL,
  `product_file_id` int(50) DEFAULT NULL,
  `language` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `kind` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `src` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `srclang` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `common` int(2) DEFAULT '0',
  `status` int(2) DEFAULT '1',
  PRIMARY KEY (`subtitle_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

#
# TABLE STRUCTURE FOR: tvseries_subtitle
#

DROP TABLE IF EXISTS `tvseries_subtitle`;

CREATE TABLE `tvseries_subtitle` (
  `tvseries_subtitle_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `episodes_id` int(250) DEFAULT NULL,
  `language` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `kind` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `src` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `srclang` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `common` int(2) DEFAULT '0',
  `status` int(2) DEFAULT '1',
  PRIMARY KEY (`tvseries_subtitle_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

#
# TABLE STRUCTURE FOR: user
#

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `slug` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `username` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `email` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `gender` int(2) DEFAULT '1',
  `role` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `token` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `theme` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT 'default',
  `theme_color` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT '#16163F',
  `join_date` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `deactivate_reason` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `phone` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `dob` date DEFAULT '0000-00-00',
  `firebase_auth_uid` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

INSERT INTO `user` (`user_id`, `name`, `slug`, `username`, `email`, `password`, `gender`, `role`, `token`, `theme`, `theme_color`, `join_date`, `last_login`, `deactivate_reason`, `phone`, `dob`, `firebase_auth_uid`, `status`) VALUES (1, 'admin admin', '', 'rswaib@gmail.com', 'rswaib@gmail.com', '9d9e4f399a585fda43a9750ebfd1e00d', 1, 'admin', NULL, 'default', '#16163F', '2020-02-26 12:57:18', '2020-04-06 15:53:38', NULL, NULL, '0000-00-00', NULL, 1);
INSERT INTO `user` (`user_id`, `name`, `slug`, `username`, `email`, `password`, `gender`, `role`, `token`, `theme`, `theme_color`, `join_date`, `last_login`, `deactivate_reason`, `phone`, `dob`, `firebase_auth_uid`, `status`) VALUES (2, 'admin admin', '', 'sswaib11@gmail.com', 'sswaib11@gmail.com', '9d9e4f399a585fda43a9750ebfd1e00d', 1, 'subscriber', NULL, 'default', '#16163F', '2020-04-06 15:53:13', '2020-04-06 15:53:13', NULL, NULL, '0000-00-00', NULL, 1);


#
# TABLE STRUCTURE FOR: wish_list
#

DROP TABLE IF EXISTS `wish_list`;

CREATE TABLE `wish_list` (
  `wish_list_id` int(11) NOT NULL AUTO_INCREMENT,
  `wish_list_type` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  PRIMARY KEY (`wish_list_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

