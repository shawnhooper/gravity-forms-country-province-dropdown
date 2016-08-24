<?php
/*
Plugin Name: Gravity Forms Country and Province Dropdowns
Description: Provides logic to populate Gravity Forms dropdowns with country and province/state names
Version: 1.0.0
Author: Shawn Hooper, Actionable
*/

class ActionableGravityCountryProvince {

	var $countries = array(
		['value' => 'CA', 'text' => 'Canada', 'native' => ''],
		['value' => 'US', 'text' => 'United States', 'native' => ''],
		['value' => 'AU', 'text' => 'Australia', 'native' => ''],
		['value' => 'NZ', 'text' => 'New Zealand', 'native' => ''],
		['value' => 'AF', 'text' => 'Afghanistan', 'native' => 'غانستان'],
		['value' => 'AX', 'text' => 'Åland Islands', 'native' => 'Åland'],
		['value' => 'AL', 'text' => 'Albania', 'native' => 'Shqipëri'],
		['value' => 'DZ', 'text' => 'Algeria', 'native' => 'الجزائر'],
		['value' => 'AS', 'text' => 'American Samoa', 'native' => ''],
		['value' => 'AD', 'text' => 'Andorra', 'native' => ''],
		['value' => 'AO', 'text' => 'Angola', 'native' => ''],
		['value' => 'AI', 'text' => 'Anguilla', 'native' => ''],
		['value' => 'AQ', 'text' => 'Antarctica', 'native' => ''],
		['value' => 'AG', 'text' => 'Antigua and Barbuda', 'native' => ''],
		['value' => 'AR', 'text' => 'Argentina', 'native' => ''],
		['value' => 'AM', 'text' => 'Armenia', 'native' => 'Հայաստան'],
		['value' => 'AW', 'text' => 'Aruba', 'native' => ''],
		['value' => 'AC', 'text' => 'Ascension Island', 'native' => ''],
		['value' => 'AT', 'text' => 'Austria', 'native' => 'Österreich'],
		['value' => 'AZ', 'text' => 'Azerbaijan', 'native' => 'Azərbaycan'],
		['value' => 'BS', 'text' => 'Bahamas', 'native' => ''],
		['value' => 'BH', 'text' => 'Bahrain', 'native' => 'البحرين'],
		['value' => 'BD', 'text' => 'Bangladesh', 'native' => 'বাংলাদেশ'],
		['value' => 'BB', 'text' => 'Barbados', 'native' => ''],
		['value' => 'BY', 'text' => 'Belarus', 'native' => 'Беларусь'],
		['value' => 'BE', 'text' => 'Belgium', 'native' => 'België'],
		['value' => 'BZ', 'text' => 'Belize', 'native' => ''],
		['value' => 'BJ', 'text' => 'Benin', 'native' => 'Bénin'],
		['value' => 'BM', 'text' => 'Bermuda', 'native' => ''],
		['value' => 'BT', 'text' => 'Bhutan', 'native' => 'འབྲུག'],
		['value' => 'BO', 'text' => 'Bolivia', 'native' => ''],
		['value' => 'BA', 'text' => 'Bosnia and Herzegovina', 'native' => 'Босна и Херцеговина'],
		['value' => 'BW', 'text' => 'Botswana', 'native' => ''],
		['value' => 'BV', 'text' => 'Bouvet Island', 'native' => ''],
		['value' => 'BR', 'text' => 'Brazil', 'native' => 'Brasil'],
		['value' => 'IO', 'text' => 'British Indian Ocean Territory', 'native' => ''],
		['value' => 'VG', 'text' => 'British Virgin Islands', 'native' => ''],
		['value' => 'BN', 'text' => 'Brunei', 'native' => ''],
		['value' => 'BG', 'text' => 'Bulgaria', 'native' => 'България'],
		['value' => 'BF', 'text' => 'Burkina Faso', 'native' => ''],
		['value' => 'BI', 'text' => 'Burundi', 'native' => 'Uburundi'],
		['value' => 'KH', 'text' => 'Cambodia', 'native' => 'កម្ពុជា'],
		['value' => 'CM', 'text' => 'Cameroon', 'native' => 'Cameroun'],
		['value' => 'IC', 'text' => 'Canary Islands', 'native' => 'islas Canarias'],
		['value' => 'CV', 'text' => 'Cape Verde', 'native' => 'Kabu Verdi'],
		['value' => 'BQ', 'text' => 'Caribbean Netherlands', 'native' => ''],
		['value' => 'KY', 'text' => 'Cayman Islands', 'native' => ''],
		['value' => 'CF', 'text' => 'Central African Republic', 'native' => 'République centrafricaine'],
		['value' => 'EA', 'text' => 'Ceuta and Melilla', 'native' => 'Ceuta y Melilla'],
		['value' => 'TD', 'text' => 'Chad', 'native' => 'Tchad'],
		['value' => 'CL', 'text' => 'Chile', 'native' => ''],
		['value' => 'CN', 'text' => 'China', 'native' => '中国'],
		['value' => 'CX', 'text' => 'Christmas Island', 'native' => ''],
		['value' => 'CP', 'text' => 'Clipperton Island', 'native' => ''],
		['value' => 'CC', 'text' => 'Cocos (Keeling) Islands', 'native' => 'Kepulauan Cocos (Keeling)'],
		['value' => 'CO', 'text' => 'Colombia', 'native' => ''],
		['value' => 'KM', 'text' => 'Comoros', 'native' => 'جزر القمر'],
		['value' => 'CD', 'text' => 'Congo (DRC)', 'native' => 'Jamhuri ya Kidemokrasia ya Kongo'],
		['value' => 'CG', 'text' => 'Congo (Republic)', 'native' => 'Congo-Brazzaville'],
		['value' => 'CK', 'text' => 'Cook Islands', 'native' => ''],
		['value' => 'CR', 'text' => 'Costa Rica', 'native' => ''],
		['value' => 'CI', 'text' => 'Côte d’Ivoire', 'native' => ''],
		['value' => 'HR', 'text' => 'Croatia', 'native' => 'Hrvatska'],
		['value' => 'CU', 'text' => 'Cuba', 'native' => ''],
		['value' => 'CW', 'text' => 'Curaçao', 'native' => ''],
		['value' => 'CY', 'text' => 'Cyprus', 'native' => 'Κύπρος'],
		['value' => 'CZ', 'text' => 'Czech Republic', 'native' => 'Česká republika'],
		['value' => 'DK', 'text' => 'Denmark', 'native' => 'Danmark'],
		['value' => 'DG', 'text' => 'Diego Garcia', 'native' => ''],
		['value' => 'DJ', 'text' => 'Djibouti', 'native' => ''],
		['value' => 'DM', 'text' => 'Dominica', 'native' => ''],
		['value' => 'DO', 'text' => 'Dominican Republic', 'native' => 'República Dominicana'],
		['value' => 'EC', 'text' => 'Ecuador', 'native' => ''],
		['value' => 'EG', 'text' => 'Egypt', 'native' => 'مصر'],
		['value' => 'SV', 'text' => 'El Salvador', 'native' => ''],
		['value' => 'GQ', 'text' => 'Equatorial Guinea', 'native' => 'Guinea Ecuatorial'],
		['value' => 'ER', 'text' => 'Eritrea', 'native' => ''],
		['value' => 'EE', 'text' => 'Estonia', 'native' => 'Eesti'],
		['value' => 'ET', 'text' => 'Ethiopia', 'native' => ''],
		['value' => 'FK', 'text' => 'Falkland Islands', 'native' => 'Islas Malvinas'],
		['value' => 'FO', 'text' => 'Faroe Islands', 'native' => 'Føroyar'],
		['value' => 'FJ', 'text' => 'Fiji', 'native' => ''],
		['value' => 'FI', 'text' => 'Finland', 'native' => 'Suomi'],
		['value' => 'FR', 'text' => 'France', 'native' => ''],
		['value' => 'GF', 'text' => 'French Guiana', 'native' => 'Guyane française'],
		['value' => 'PF', 'text' => 'French Polynesia', 'native' => 'Polynésie française'],
		['value' => 'TF', 'text' => 'French Southern Territories', 'native' => 'Terres australes françaises'],
		['value' => 'GA', 'text' => 'Gabon', 'native' => ''],
		['value' => 'GM', 'text' => 'Gambia', 'native' => ''],
		['value' => 'GE', 'text' => 'Georgia', 'native' => 'საქართველო'],
		['value' => 'DE', 'text' => 'Germany', 'native' => 'Deutschland'],
		['value' => 'GH', 'text' => 'Ghana', 'native' => 'Gaana'],
		['value' => 'GI', 'text' => 'Gibraltar', 'native' => ''],
		['value' => 'GR', 'text' => 'Greece', 'native' => 'Ελλάδα'],
		['value' => 'GL', 'text' => 'Greenland', 'native' => 'Kalaallit Nunaat'],
		['value' => 'GD', 'text' => 'Grenada', 'native' => ''],
		['value' => 'GP', 'text' => 'Guadeloupe', 'native' => ''],
		['value' => 'GU', 'text' => 'Guam', 'native' => ''],
		['value' => 'GT', 'text' => 'Guatemala', 'native' => ''],
		['value' => 'GG', 'text' => 'Guernsey', 'native' => ''],
		['value' => 'GN', 'text' => 'Guinea', 'native' => 'Guinée'],
		['value' => 'GW', 'text' => 'Guinea-Bissau', 'native' => 'Guiné Bissau'],
		['value' => 'GY', 'text' => 'Guyana', 'native' => ''],
		['value' => 'HT', 'text' => 'Haiti', 'native' => ''],
		['value' => 'HM', 'text' => 'Heard & McDonald Islands', 'native' => ''],
		['value' => 'HN', 'text' => 'Honduras', 'native' => ''],
		['value' => 'HK', 'text' => 'Hong Kong', 'native' => '香港'],
		['value' => 'HU', 'text' => 'Hungary', 'native' => 'Magyarország'],
		['value' => 'IS', 'text' => 'Iceland', 'native' => 'Ísland'],
		['value' => 'IN', 'text' => 'India', 'native' => 'भारत'],
		['value' => 'ID', 'text' => 'Indonesia', 'native' => ''],
		['value' => 'IR', 'text' => 'Iran', 'native' => 'ایران'],
		['value' => 'IQ', 'text' => 'Iraq', 'native' => 'العراق'],
		['value' => 'IE', 'text' => 'Ireland', 'native' => ''],
		['value' => 'IM', 'text' => 'Isle of Man', 'native' => ''],
		['value' => 'IL', 'text' => 'Israel', 'native' => 'ישראל'],
		['value' => 'IT', 'text' => 'Italy', 'native' => 'Italia'],
		['value' => 'JM', 'text' => 'Jamaica', 'native' => ''],
		['value' => 'JP', 'text' => 'Japan', 'native' => '日本'],
		['value' => 'JE', 'text' => 'Jersey', 'native' => ''],
		['value' => 'JO', 'text' => 'Jordan', 'native' => 'الأردن'],
		['value' => 'KZ', 'text' => 'Kazakhstan', 'native' => 'Казахстан'],
		['value' => 'KE', 'text' => 'Kenya', 'native' => ''],
		['value' => 'KI', 'text' => 'Kiribati', 'native' => ''],
		['value' => 'XK', 'text' => 'Kosovo', 'native' => 'Kosovë'],
		['value' => 'KW', 'text' => 'Kuwait', 'native' => 'الكويت'],
		['value' => 'KG', 'text' => 'Kyrgyzstan', 'native' => 'Кыргызстан'],
		['value' => 'LA', 'text' => 'Laos', 'native' => 'ລາວ'],
		['value' => 'LV', 'text' => 'Latvia', 'native' => 'Latvija'],
		['value' => 'LB', 'text' => 'Lebanon', 'native' => 'لبنان'],
		['value' => 'LS', 'text' => 'Lesotho', 'native' => ''],
		['value' => 'LR', 'text' => 'Liberia', 'native' => ''],
		['value' => 'LY', 'text' => 'Libya', 'native' => 'ليبيا'],
		['value' => 'LI', 'text' => 'Liechtenstein', 'native' => ''],
		['value' => 'LT', 'text' => 'Lithuania', 'native' => 'Lietuva'],
		['value' => 'LU', 'text' => 'Luxembourg', 'native' => ''],
		['value' => 'MO', 'text' => 'Macau', 'native' => '澳門'],
		['value' => 'MK', 'text' => 'Macedonia (FYROM)', 'native' => 'Македонија'],
		['value' => 'MG', 'text' => 'Madagascar', 'native' => 'Madagasikara'],
		['value' => 'MW', 'text' => 'Malawi', 'native' => ''],
		['value' => 'MY', 'text' => 'Malaysia', 'native' => ''],
		['value' => 'MV', 'text' => 'Maldives', 'native' => ''],
		['value' => 'ML', 'text' => 'Mali', 'native' => ''],
		['value' => 'MT', 'text' => 'Malta', 'native' => ''],
		['value' => 'MH', 'text' => 'Marshall Islands', 'native' => ''],
		['value' => 'MQ', 'text' => 'Martinique', 'native' => ''],
		['value' => 'MR', 'text' => 'Mauritania', 'native' => 'موريتانيا'],
		['value' => 'MU', 'text' => 'Mauritius', 'native' => 'Moris'],
		['value' => 'YT', 'text' => 'Mayotte', 'native' => ''],
		['value' => 'MX', 'text' => 'Mexico', 'native' => ''],
		['value' => 'FM', 'text' => 'Micronesia', 'native' => ''],
		['value' => 'MD', 'text' => 'Moldova', 'native' => 'Republica Moldova'],
		['value' => 'MC', 'text' => 'Monaco', 'native' => ''],
		['value' => 'MN', 'text' => 'Mongolia', 'native' => 'Монгол'],
		['value' => 'ME', 'text' => 'Montenegro', 'native' => 'Crna Gora'],
		['value' => 'MS', 'text' => 'Montserrat', 'native' => ''],
		['value' => 'MA', 'text' => 'Morocco', 'native' => 'المغرب'],
		['value' => 'MZ', 'text' => 'Mozambique', 'native' => 'Moçambique'],
		['value' => 'MM', 'text' => 'Myanmar (Burma)', 'native' => 'မြန်မာ'],
		['value' => 'NA', 'text' => 'Namibia', 'native' => 'Namibië'],
		['value' => 'NR', 'text' => 'Nauru', 'native' => ''],
		['value' => 'NP', 'text' => 'Nepal', 'native' => 'नेपाल'],
		['value' => 'NL', 'text' => 'Netherlands', 'native' => 'Nederland'],
		['value' => 'NC', 'text' => 'New Caledonia', 'native' => 'Nouvelle-Calédonie'],
		['value' => 'NI', 'text' => 'Nicaragua', 'native' => ''],
		['value' => 'NE', 'text' => 'Niger', 'native' => 'Nijar'],
		['value' => 'NG', 'text' => 'Nigeria', 'native' => ''],
		['value' => 'NU', 'text' => 'Niue', 'native' => ''],
		['value' => 'NF', 'text' => 'Norfolk Island', 'native' => ''],
		['value' => 'MP', 'text' => 'Northern Mariana Islands', 'native' => ''],
		['value' => 'KP', 'text' => 'North Korea', 'native' => '조선 민주주의 인민 공화국'],
		['value' => 'NO', 'text' => 'Norway', 'native' => 'Norge'],
		['value' => 'OM', 'text' => 'Oman', 'native' => 'عُمان'],
		['value' => 'PK', 'text' => 'Pakistan', 'native' => 'پاکستان'],
		['value' => 'PW', 'text' => 'Palau', 'native' => ''],
		['value' => 'PS', 'text' => 'Palestine', 'native' => 'فلسطين'],
		['value' => 'PA', 'text' => 'Panama', 'native' => ''],
		['value' => 'PG', 'text' => 'Papua New Guinea', 'native' => ''],
		['value' => 'PY', 'text' => 'Paraguay', 'native' => ''],
		['value' => 'PE', 'text' => 'Peru', 'native' => 'Perú'],
		['value' => 'PH', 'text' => 'Philippines', 'native' => ''],
		['value' => 'PN', 'text' => 'Pitcairn Islands', 'native' => ''],
		['value' => 'PL', 'text' => 'Poland', 'native' => 'Polska'],
		['value' => 'PT', 'text' => 'Portugal', 'native' => ''],
		['value' => 'PR', 'text' => 'Puerto Rico', 'native' => ''],
		['value' => 'QA', 'text' => 'Qatar', 'native' => 'قطر'],
		['value' => 'RE', 'text' => 'Réunion', 'native' => 'La Réunion'],
		['value' => 'RO', 'text' => 'Romania', 'native' => 'România'],
		['value' => 'RU', 'text' => 'Russia', 'native' => 'Россия'],
		['value' => 'RW', 'text' => 'Rwanda', 'native' => ''],
		['value' => 'BL', 'text' => 'Saint Barthélemy', 'native' => 'Saint-Barthélemy'],
		['value' => 'SH', 'text' => 'Saint Helena', 'native' => ''],
		['value' => 'KN', 'text' => 'Saint Kitts and Nevis', 'native' => ''],
		['value' => 'LC', 'text' => 'Saint Lucia', 'native' => ''],
		['value' => 'MF', 'text' => 'Saint Martin', 'native' => ''],
		['value' => 'PM', 'text' => 'Saint Pierre and Miquelon', 'native' => 'Saint-Pierre-et-Miquelon'],
		['value' => 'WS', 'text' => 'Samoa', 'native' => ''],
		['value' => 'SM', 'text' => 'San Marino', 'native' => ''],
		['value' => 'ST', 'text' => 'São Tomé and Príncipe', 'native' => 'São Tomé e Príncipe'],
		['value' => 'SA', 'text' => 'Saudi Arabia', 'native' => 'المملكة العربية السعودية'],
		['value' => 'SN', 'text' => 'Senegal', 'native' => 'Sénégal'],
		['value' => 'RS', 'text' => 'Serbia', 'native' => 'Србија'],
		['value' => 'SC', 'text' => 'Seychelles', 'native' => ''],
		['value' => 'SL', 'text' => 'Sierra Leone', 'native' => ''],
		['value' => 'SG', 'text' => 'Singapore', 'native' => ''],
		['value' => 'SX', 'text' => 'Sint Maarten', 'native' => ''],
		['value' => 'SK', 'text' => 'Slovakia', 'native' => 'Slovensko'],
		['value' => 'SI', 'text' => 'Slovenia', 'native' => 'Slovenija'],
		['value' => 'SB', 'text' => 'Solomon Islands', 'native' => ''],
		['value' => 'SO', 'text' => 'Somalia', 'native' => 'Soomaaliya'],
		['value' => 'ZA', 'text' => 'South Africa', 'native' => ''],
		['value' => 'GS', 'text' => 'South Georgia & South Sandwich Islands', 'native' => ''],
		['value' => 'KR', 'text' => 'South Korea', 'native' => '대한민국'],
		['value' => 'SS', 'text' => 'South Sudan', 'native' => 'جنوب السودان'],
		['value' => 'ES', 'text' => 'Spain', 'native' => 'España'],
		['value' => 'LK', 'text' => 'Sri Lanka', 'native' => 'ශ්‍රී ලංකාව'],
		['value' => 'VC', 'text' => 'St. Vincent & Grenadines', 'native' => ''],
		['value' => 'SD', 'text' => 'Sudan', 'native' => 'السودان'],
		['value' => 'SR', 'text' => 'Suriname', 'native' => ''],
		['value' => 'SJ', 'text' => 'Svalbard and Jan Mayen', 'native' => 'Svalbard og Jan Mayen'],
		['value' => 'SZ', 'text' => 'Swaziland', 'native' => ''],
		['value' => 'SE', 'text' => 'Sweden', 'native' => 'Sverige'],
		['value' => 'CH', 'text' => 'Switzerland', 'native' => 'Schweiz'],
		['value' => 'SY', 'text' => 'Syria', 'native' => 'سوريا'],
		['value' => 'TW', 'text' => 'Taiwan', 'native' => '台灣'],
		['value' => 'TJ', 'text' => 'Tajikistan', 'native' => ''],
		['value' => 'TZ', 'text' => 'Tanzania', 'native' => ''],
		['value' => 'TH', 'text' => 'Thailand', 'native' => 'ไทย'],
		['value' => 'TL', 'text' => 'Timor-Leste', 'native' => ''],
		['value' => 'TG', 'text' => 'Togo', 'native' => ''],
		['value' => 'TK', 'text' => 'Tokelau', 'native' => ''],
		['value' => 'TO', 'text' => 'Tonga', 'native' => ''],
		['value' => 'TT', 'text' => 'Trinidad and Tobago', 'native' => ''],
		['value' => 'TA', 'text' => 'Tristan da Cunha', 'native' => ''],
		['value' => 'TN', 'text' => 'Tunisia', 'native' => 'تونس'],
		['value' => 'TR', 'text' => 'Turkey', 'native' => 'Türkiye'],
		['value' => 'TM', 'text' => 'Turkmenistan', 'native' => ''],
		['value' => 'TC', 'text' => 'Turks and Caicos Islands', 'native' => ''],
		['value' => 'TV', 'text' => 'Tuvalu', 'native' => ''],
		['value' => 'UM', 'text' => 'U.S. Outlying Islands', 'native' => ''],
		['value' => 'VI', 'text' => 'U.S. Virgin Islands', 'native' => ''],
		['value' => 'UG', 'text' => 'Uganda', 'native' => ''],
		['value' => 'UA', 'text' => 'Ukraine', 'native' => 'Україна'],
		['value' => 'AE', 'text' => 'United Arab Emirates', 'native' => 'الإمارات العربية المتحدة'],
		['value' => 'GB', 'text' => 'United Kingdom', 'native' => ''],
		['value' => 'UY', 'text' => 'Uruguay', 'native' => ''],
		['value' => 'UZ', 'text' => 'Uzbekistan', 'native' => 'Oʻzbekiston'],
		['value' => 'VU', 'text' => 'Vanuatu', 'native' => ''],
		['value' => 'VA', 'text' => 'Vatican City', 'native' => 'Città del Vaticano'],
		['value' => 'VE', 'text' => 'Venezuela', 'native' => ''],
		['value' => 'VN', 'text' => 'Vietnam', 'native' => 'Việt Nam'],
		['value' => 'WF', 'text' => 'Wallis and Futuna', 'native' => ''],
		['value' => 'EH', 'text' => 'Western Sahara', 'native' => 'الصحراء الغربية'],
		['value' => 'YE', 'text' => 'Yemen', 'native' => 'اليمن'],
		['value' => 'ZM', 'text' => 'Zambia', 'native' => ''],
		['value' => 'ZW', 'text' => 'Zimbabwe', 'native' => ''],
	);

	var $australian_states = array(
		['value' => 'ACT', 'text' => 'Australian Capital Territory'],
		['value' => 'NSW', 'text' => 'New South Wales'],
		['value' => 'NT' , 'text' => 'Northern Territory'],
		['value' => 'QLD', 'text' => 'Queensland'],
		['value' => 'SA' , 'text' => 'South Australia'],
		['value' => 'TAS', 'text' => 'Tasmania'],
		['value' => 'VIC', 'text' => 'Victoria'],
		['value' => 'WA' , 'text' => 'Western Australia'],
	);

	var $canadian_provinces = array(
		['value' => 'AB', 'text' => 'Alberta'],
		['value' => 'BC', 'text' => 'British Columbia'],
		['value' => 'MB', 'text' => 'Manitoba'],
		['value' => 'NB', 'text' => 'New Brunswick'],
		['value' => 'NF', 'text' => 'Newfoundland'],
		['value' => 'NT', 'text' => 'Northwest Territories'],
		['value' => 'NS', 'text' => 'Nova Scotia'],
		['value' => 'NU', 'text' => 'Nunavut'],
		['value' => 'ON', 'text' => 'Ontario'],
		['value' => 'PE', 'text' => 'Prince Edward Island'],
		['value' => 'QC', 'text' => 'Quebec'],
		['value' => 'SK', 'text' => 'Saskatchewan'],
		['value' => 'YT', 'text' => 'Yukon'],
	);
	
	var $american_states = array(
		['value' => 'AL', 'text' => 'Alabama'],
		['value' => 'AK', 'text' => 'Alaska'],
		['value' => 'AR', 'text' => 'Arkansas'],
		['value' => 'AZ', 'text' => 'Arizona'],
		['value' => 'CA', 'text' => 'California'],
		['value' => 'CO', 'text' => 'Colorado'],
		['value' => 'CT', 'text' => 'Connecticut'],
		['value' => 'DC', 'text' => 'District of Columbia'],
		['value' => 'DE', 'text' => 'Delaware'],
		['value' => 'FL', 'text' => 'Florida'],
		['value' => 'GA', 'text' => 'Georgia'],
		['value' => 'HI', 'text' => 'Hawaii'],
		['value' => 'ID', 'text' => 'Idaho'],
		['value' => 'IL', 'text' => 'Illinois'],
		['value' => 'IN', 'text' => 'Indiana'],
		['value' => 'IA', 'text' => 'Iowa'],
		['value' => 'KS', 'text' => 'Kansas'],
		['value' => 'KY', 'text' => 'Kentucky'],
		['value' => 'LA', 'text' => 'Louisiana'],
		['value' => 'MA', 'text' => 'Massachusetts'],
		['value' => 'MD', 'text' => 'Maryland'],
		['value' => 'ME', 'text' => 'Maine'],
		['value' => 'MI', 'text' => 'Michigan'],
		['value' => 'MN', 'text' => 'Minnesota'],
		['value' => 'MO', 'text' => 'Missouri'],
		['value' => 'MS', 'text' => 'Mississippi'],
		['value' => 'MT', 'text' => 'Montana'],
		['value' => 'NC', 'text' => 'North Carolina'],
		['value' => 'ND', 'text' => 'North Dakota'],
		['value' => 'NE', 'text' => 'Nebraska'],
		['value' => 'NH', 'text' => 'New Hampshire'],
		['value' => 'NJ', 'text' => 'New Jersey'],
		['value' => 'NM', 'text' => 'New Mexico'],
		['value' => 'NV', 'text' => 'Nevada'],
		['value' => 'NY', 'text' => 'New York'],
		['value' => 'OH', 'text' => 'Ohio'],
		['value' => 'OK', 'text' => 'Oklahoma'],
		['value' => 'OR', 'text' => 'Oregon'],
		['value' => 'PA', 'text' => 'Pennsylvania'],
		['value' => 'RI', 'text' => 'Rhode Island'],
		['value' => 'SC', 'text' => 'South Carolina'],
		['value' => 'SD', 'text' => 'South Dakota'],
		['value' => 'TN', 'text' => 'Tennessee'],
		['value' => 'TX', 'text' => 'Texas'],
		['value' => 'UT', 'text' => 'Utah'],
		['value' => 'VA', 'text' => 'Virginia'],
		['value' => 'VT', 'text' => 'Vermont'],
		['value' => 'WA', 'text' => 'Washington'],
		['value' => 'WI', 'text' => 'Wisconsin'],
		['value' => 'WV', 'text' => 'West Virginia'],
		['value' => 'WY', 'text' => 'Wyoming'],		
	);

	function __construct() {
		add_filter( 'gform_pre_render', array( $this, 'populate_countries_and_provinces' ) );
		add_filter( 'gform_pre_validation', array( $this, 'populate_countries_and_provinces' ) );
		add_filter( 'gform_pre_submission_filter', array( $this, 'populate_countries_and_provinces' ) );
		add_filter( 'gform_admin_pre_render', array( $this, 'populate_countries_and_provinces' ) );
		add_filter( 'gform_pre_validation', array( $this, 'set_selected_region_hidden_field' ) );
		add_filter( 'gform_pre_submission', array( $this, 'set_selected_region_hidden_field' ) );
	}

	public function populate_countries_and_provinces( $form ) {

		if ( $form['title'] !== 'Contact Us' ) {
			return $form;
		}

		foreach ( $form['fields'] as &$field ) {
			if ( $field->inputName == 'country_list' ) {
				$field->choices = $this->countries;
				continue;
			}
			if ( $field->inputName == 'states_au' ) {
				$field->choices = $this->australian_states;
				continue;
			}
			if ( $field->inputName == 'provinces_ca' ) {
				$field->choices = $this->canadian_provinces;
				continue;
			}
			if ( $field->inputName == 'states_us' ) {
				$field->choices = $this->american_states;
				continue;
			}
		}

		return $form;

	}

	public function set_selected_region_hidden_field( $form ) {

		global $_POST;
		$hiddenFieldName = '';

		$country_ca = '';
		$country_au = '';
		$country_us = '';
		$country_list = '';

		foreach ( $form['fields'] as &$field ) {
			switch ( $field->inputName ) {
				case 'selected_region':
					$hiddenFieldName = 'input_' . $field->id;
					break;
				case 'country_list':
					$country_list = 'input_' . $field->id;
					break;
				case 'states_au':
					$country_au = 'input_' . $field->id;
					break;
				case 'provinces_ca':
					$country_ca = 'input_' . $field->id;
					break;
				case 'states_us':
					$country_us = 'input_' . $field->id;
					break;
			}
		}

		switch( $_POST[$country_list] ) {
			case 'AU':
				$_POST[$hiddenFieldName] = $_POST[$country_au];
				break;
			case 'CA':
				$_POST[$hiddenFieldName] = $_POST[$country_ca];
				break;
			case 'US':
				$_POST[$hiddenFieldName] = $_POST[$country_us];
				break;
		}

		return $form;

	}

}

$actionableGravityCountryProvince = new ActionableGravityCountryProvince();
