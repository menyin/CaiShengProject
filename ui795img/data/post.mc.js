/**
 * 数据字典包 
 * @module jobcn.data
 */
define(function(require, exports, module) {
	/**
	 * 职位数据
	 * @method post
	 * @for data
	 * @return {Object} 由职位数据组成的对象，默认冻结
	 */
	var out = {
			"category" : {
				"list" : ["1","2","3","4","5","6","7","8","9","10","11"],
				"1": {
					cn : "IT · 电子 · 通讯",
					en : "IT · Electronics · Communication",
					list : ["1000","2000","1500","2500"]
				},
				"2": {
					cn : "销售 · 市场 · 客服",
					en : "Marketing · Market · Customer Service",
					list : ["2300","1100","4100","4200"]
				},
				"3": {
					cn : "行政 · 文职 · 管理 · 后勤",
					en : "Administration · Civil Service · Management · Logistics",
					list : ["3100","1900","1200","2900"]
				},
				"4": {
					cn : "财务 · 金融 · 银行 · 保险",
					en : "Financial Affairs · Finance · Bank · Insurance",
					list : ["1300","1400","3400"]
				},
				"5": {
					cn : "生产 · 制造 · 质量",
					en : "Produce · Manufacture · Quality",
					list : ["3500","5600","1600","3600","3900","4000","5000","3700"]
				},
				"6": {
					cn : "贸易 · 物流 · 采购",
					en : "Trade · Logistics · Purchase",
					list : ["4900","4400"]
				},
				"7": {
					cn : "建筑 · 房地产 · 园林",
					en : "Construction · Real estate · Gardens",
					list : ["1800","3800","5800"]
				},
				"8": {
					cn : "设计 · 广告 · 传媒",
					en : "Design · Advertising · Media",
					list : ["2100","3200","4700","4800"]
				},
				"9": {
					cn : "翻译 · 教育 · 法律 · 咨询",
					en : "Translation · Education · Training · Law · Consultant",
					list : ["4300","2200","3300","4600","4500"]
				},
				"10": {
					cn : "化工 · 能源 · 制药 · 医疗",
					en : "Chemical Industry · Energy · Pharmaceutical · Medical ",
					list : ["2600","1700","6600","2400"]
				},
				"11": {
					cn : "服务业 · 其他",
					en : "Service Industry · Others",
					list : ["2700","2800","5400","3000"]
				}
			},
			list: ["1000", "2000", "2500", "1500", "2300", "1100", "4200", "1300", "1400", "3400", "1900", "3100", "1200", "2900", "3500", "1600", "4400", "4900", "3900", "4000", "3600", "3700", "5000", "5600", "4100", "3200", "2100", "4700", "4800", "1800", "3800", "5800", "2200", "4500", "4600", "3300", "2400", "6600", "5400", "2600", "1700", "2700", "2800", "4300", "3000"],
			"1000": {
				cn: "计算机IT类-开发/应用",
				child: ["1001", "1004", "1012", "1006", "1011", "1013", "1019", "1005", "1020", "1023", "1024", "1022", "1003", "1025", "1014", "1002", "1029", "1007", "1018", "1026", "1027", "1021", "1030", "1031", "1032", "1009", "1010", "1008", "1016", "1015", "1028", "1017", "1099"],
				en: "IT-Development/Application"
			},
			"2000": {
				cn: "计算机IT类-管理/技术支持",
				child: ["2019", "2020", "2002", "2003", "2004", "2001", "2005", "2006", "2007", "2022", "2021", "2023", "2024", "2011", "2010", "2012", "2008", "2009", "2099"],
				en: "IT-Management/Technical Support"
			},
			"2500": {
				cn: "通讯技术类",
				child: ["2501", "2502", "2503", "2504", "2505", "2506", "2507", "2508", "2509", "2599"],
				en: "Telecommunication"
			},
			"1500": {
				cn: "电子/电器/元件类",
				child: ["1503", "1504", "1506", "1508", "1509", "1510", "1511", "1512", "1513", "1501", "1505", "1507", "1502", "1521", "1531", "1515", "1519", "1516", "1517", "1518", "1520", "1525", "1514", "1522", "1523", "1524", "1599"],
				en: "Electronics,Electrical,Components"
			},
			"2300": {
				cn: "销售类-人员",
				child: ["2305", "2301", "2302", "2318", "2303", "2304", "2399"],
				en: "Sales"
			},
			"1100": {
				cn: "销售类-管理/商务",
				child: ["1124", "1108", "1112", "1116", "1117", "1103", "1120", "1121", "1122", "1123", "1119", "1101", "1102", "1199"],
				en: "Sales Management"
			},
			"4200": {
				cn: "客户服务/技术支持类",
				child: ["4201", "4203", "4202", "4209", "4204", "4205", "4213", "4206", "4207", "4208", "4214", "4215", "4210", "4211", "4212", "4299"],
				en: "Customer service/Technical support"
			},
			"1300": {
				cn: "财务/审(统)计类",
				child: ["1301", "1316", "1302", "1303", "1321", "1307", "1314", "1308", "1304", "1310", "1309", "1322", "1305", "1312", "1306", "1317", "1324", "1315", "1325", "1326", "1327", "1328", "1311", "1313", "1399"],
				en: "Financing/Audit/Stat."
			},
			"1400": {
				cn: "金融/证券/投资类",
				child: ["1414", "1403", "1401", "1405", "1402", "1417", "1404", "1413", "1418", "1416", "1406", "1407", "1410", "1409", "1415", "1408", "1411", "1420", "1421", "1422", "1499"],
				en: "Finance/Securities/Investment"
			},
			"3400": {
				cn: "保险/银行类",
				child: ["3401", "3402", "3403", "3404", "3405", "3406", "3407", "3416", "3417", "3418", "3408", "3409", "3410", "3419", "3420", "3421", "3422", "3423", "3424", "3425", "3411", "3412", "3413", "3414", "3415", "3499"],
				en: "Insurance/Bank"
			},
			"1900": {
				cn: "公司文职类",
				child: ["1903", "1904", "1905", "1907", "1908", "1909", "1910", "1911", "1999"],
				en: "Civilian Posts"
			},
			"3100": {
				cn: "行政/人事类",
				child: ["3115", "3101", "3102", "3103", "3108", "3104", "3105", "3117", "3112", "3118", "3113", "3119", "3106", "3114", "3120", "3121", "3122", "3116", "3107", "3109", "3110", "3111", "3199"],
				en: "Administration/Human Resource"
			},
			"1200": {
				cn: "经营/管理类",
				child: ["1204", "1201", "1203", "1206", "1207", "1205", "1210", "1211", "1213", "1208", "1209", "1212", "1202", "1299"],
				en: "Management"
			},
			"2900": {
				cn: "后勤保障类",
				child: ["2903", "2902", "2908", "2904", "2905", "2906", "2901", "2907", "2909", "2999"],
				en: "RearServices/Safeguard"
			},
			"3500": {
				cn: "生产管理/生产支持",
				child: ["3513", "3514", "3522", "3533", "3515", "3534", "3521", "3504", "3525", "3505", "3526", "3519", "3520", "3528", "3531", "3530", "3506", "3507", "3508", "3509", "3510", "3501", "3503", "3502", "3541", "3542", "3511", "3512", "3535", "3516", "3536", "3517", "3518", "3523", "3543", "3524", "3527", "3529", "3532", "3544", "3599"],
				en: "Production management/production support"
			},
			"1600": {
				cn: "机械(电)/仪表类",
				child: ["1602", "1605", "1606", "1603", "1604", "1607", "1601", "1612", "1613", "1608", "1610", "1611", "1631", "1614", "1615", "1616", "1617", "1632", "1618", "1619", "1633", "1620", "1621", "1609", "1622", "1623", "1624", "1625", "1699"],
				en: "Mechanism/Instrument"
			},
			"4400": {
				cn: "物流/采购类",
				child: ["4401", "4403", "4404", "4410", "4420", "4421", "4405", "4406", "4422", "4423", "4424", "4425", "4402", "4426", "4427", "4411", "4415", "4407", "4428", "4429", "4408", "4409", "4430", "4499"],
				en: "Logistics/Procurement"
			},
			"4900": {
				cn: "贸易类",
				child: ["4901", "4902", "4903", "4904", "4905", "4906", "4907", "4908", "4909", "4999"],
				en: "Trading"
			},
			"3900": {
				cn: "模具类",
				child: ["3901", "3902", "3903", "3904", "3905", "3906", "3907", "3908", "3909", "3910", "3911", "3912", "3913", "3914", "3915", "3916", "3917", "3918", "3919", "3920", "3999"],
				en: "Mold"
			},
			"4000": {
				cn: "汽车类",
				child: ["4001", "4002", "4003", "4004", "4005", "4006", "4007", "4008", "4009", "4010", "4011", "4012", "4013", "4014", "4015", "4016", "4017", "4018", "4099"],
				en: "Automotive"
			},
			"3600": {
				cn: "技工/普工类",
				child: ["3603", "3610", "3604", "3611", "3612", "3601", "3602", "3605", "3613", "3614", "3615", "3616", "3606", "3607", "3617", "3618", "3608", "3699"],
				en: "Mechanic/General worker"
			},
			"3700": {
				cn: "轻工类",
				child: ["3702", "3701", "3703", "3704", "3706", "3710", "3712", "3713", "3714", "3715", "3716", "3717", "3718", "3711", "3705", "3719", "3720", "3707", "3708", "3709", "3799"],
				en: "Light industry"
			},
			"5000": {
				cn: "服装纺织/鞋帽/皮革类",
				child: ["5001", "5002", "5003", "5004", "5005", "5006", "5007", "5008", "5009", "5010", "5011", "5012", "5013", "5014", "5015", "5016", "5017", "5018", "5019", "5020", "5021", "5022", "5099"],
				en: "Textile and clothing/Shoes/Leather"
			},
			"5600": {
				cn: "质量/安全管理类",
				child: ["5601", "5602", "5603", "5604", "5613", "5614", "5615", "5618", "5619", "5620", "5611", "5617", "5605", "5621", "5622", "5606", "5607", "5608", "5623", "5624", "5625", "5626", "5609", "5610", "5616", "5627", "5628", "5629", "5630", "5612", "5699"],
				en: "Quality/Safety Management"
			},
			"4100": {
				cn: "市场营销/公关类",
				child: ["4117", "4103", "4102", "4101", "4104", "4105", "4106", "4107", "4118", "4113", "4119", "4108", "4109", "4120", "4121", "4110", "4111", "4112", "4114", "4115", "4116", "4199"],
				en: "Marketing/Public Relations"
			},
			"3200": {
				cn: "广告设计类",
				child: ["3201", "3202", "3203", "3204", "3205", "3206", "3207", "3208", "3299"],
				en: "Advertising Design"
			},
			"2100": {
				cn: "艺术设计(产品、包装)类",
				child: ["2103", "2105", "2107", "2104", "2114", "2106", "2101", "2102", "2109", "2110", "2111", "2112", "2108", "2113", "2199"],
				en: "Art(upholster,casing)Design"
			},
			"4700": {
				cn: "广播/影视媒体/摄影专业类",
				child: ["4703", "4704", "4711", "4712", "4713", "4705", "4706", "4707", "4714", "4701", "4715", "4716", "4718", "4719", "4720", "4721", "4708", "4722", "4709", "4702", "4717", "4710", "4799"],
				en: "Movie/Photopgraphy"
			},
			"4800": {
				cn: "编辑/发行类",
				child: ["4803", "4804", "4805", "4806", "4801", "4810", "4811", "4807", "4808", "4809", "4812", "4813", "4802", "4899"],
				en: "Edit/Publish"
			},
			"1800": {
				cn: "建筑/装潢/施工类",
				child: ["1805", "1809", "1810", "1803", "1817", "1811", "1824", "1808", "1815", "1816", "1820", "1826", "1827", "1828", "1822", "1829", "1830", "1821", "1804", "1823", "1801", "1802", "1812", "1813", "1814", "1831", "1806", "1807", "1818", "1832", "1825", "1833", "1819", "1899"],
				en: "Realty/Decoration/Construction"
			},
			"3800": {
				cn: "房地产/物业类",
				child: ["3810", "3811", "3812", "3801", "3802", "3813", "3814", "3815", "3803", "3804", "3805", "3806", "3807", "3816", "3817", "3818", "3819", "3820", "3821", "3808", "3824", "3809", "3899"],
				en: "Realty Development"
			},
			"5800": {
				cn: "园艺/园林类",
				child: ["5801", "5802", "5803", "5804", "5805", "5806", "5807", "5899"],
				en: "Gardening/gardens"
			},
			"2200": {
				cn: "文体/教育类",
				child: ["2205", "2211", "2212", "2201", "2202", "2204", "2206", "2207", "2209", "2208", "2214", "2215", "2210", "2213", "2299"],
				en: "Culture/Education"
			},
			"4500": {
				cn: "咨询/顾问类",
				child: ["4503", "4504", "4505", "4506", "4501", "4502", "4507", "4508", "4509", "4510", "4511", "4512", "4513", "4514", "4515", "4599"],
				en: "Consultation"
			},
			"4600": {
				cn: "法律专业人员类",
				child: ["4603", "4604", "4605", "4606", "4607", "4608", "4609", "4699"],
				en: "Law Specialist"
			},
			"3300": {
				cn: "培训类",
				child: ["3301", "3302", "3306", "3303", "3304", "3305", "3399"],
				en: "Culture/Education"
			},
			"2400": {
				cn: "卫生医疗类",
				child: ["2403", "2404", "2405", "2406", "2401", "2407", "2408", "2412", "2414", "2415", "2409", "2402", "2411", "2410", "2413", "2416", "2417", "2419", "2499"],
				en: "Sanitation/Treatment/Healthing"
			},
			"6600": {
				cn: "制药/医疗器械类",
				child: ["6601", "6602", "6603", "6604", "6611", "6612", "6613", "6605", "6606", "6607", "6608", "6609", "6610", "6699"],
				en: "Harmacy/Medical Treatment"
			},
			"5400": {
				cn: "美容/保健/护理类",
				child: ["5401", "5402", "5403", "5412", "5404", "5413", "5414", "5405", "5406", "5407", "5408", "5409", "5410", "5411", "5499"],
				en: "Hairdressing Treatment"
			},
			"2600": {
				cn: "化工类",
				child: ["2601", "2606", "2602", "2603", "2604", "2605", "2617", "2615", "2607", "2608", "2609", "2610", "2611", "2612", "2616", "2613", "2614", "2699"],
				en: "Chemical/Pharmacy"
			},
			"1700": {
				cn: "能源动力类",
				child: ["1703", "1704", "1705", "1706", "1707", "1708", "1701", "1709", "1799"],
				en: "Energy sources/Power"
			},
			"2700": {
				cn: "酒店/宾馆/餐饮旅游类",
				child: ["2701", "2707", "2708", "2709", "2702", "2706", "2703", "2704", "2710", "2711", "2712", "2713", "2717", "2714", "2715", "2716", "2705", "2799"],
				en: "Hotel/Restaurant/Junketing"
			},
			"2800": {
				cn: "商店/零售服务类",
				child: ["2802", "2803", "2807", "2804", "2806", "2805", "2808", "2801", "2809", "2810", "2899"],
				en: "Shop/Retail/Services"
			},
			"4300": {
				cn: "翻译类",
				child: ["4303", "4304", "4305", "4306", "4307", "4302", "4309", "4310", "4311", "4308", "4312", "4301", "4313", "4399"],
				en: "Translation"
			},
			"3000": {
				cn: "其他类",
				child: ["3001", "3002", "3003", "3004", "3005", "3006", "3007", "3008", "3009", "3011", "3010", "3099"],
				en: "Others"
			},
			"1001": {
				cn: "软件设计师",
				en: "Software Designer"
			},
			"1004": {
				cn: "软件工程师",
				en: "Software Engineer"
			},
			"1012": {
				cn: "系统分析员",
				en: "System Analysts"
			},
			"1006": {
				cn: "系统分析师",
				en: "Systems Analyst"
			},
			"1011": {
				cn: "系统工程师",
				en: "Systems Engineer"
			},
			"1013": {
				cn: "系统架构师",
				en: "System frame Division"
			},
			"1019": {
				cn: "需求分析师",
				en: "Demand Analysts"
			},
			"1005": {
				cn: "硬件工程师",
				en: "Hardware Engineer"
			},
			"1020": {
				cn: "嵌入式系统设计师",
				en: "Embedded systems Designer"
			},
			"1023": {
				cn: "软件测试师",
				en: "Software Testing QA"
			},
			"1024": {
				cn: "硬件测试师",
				en: "Hardware Testing QA"
			},
			"1022": {
				cn: "系统测试师",
				en: "Systems Testing QA"
			},
			"1003": {
				cn: "数据库开发与管理(DBA)",
				en: "Database Administration"
			},
			"1025": {
				cn: "数据库系统工程师",
				en: "Database System Engineer"
			},
			"1014": {
				cn: "MRP/ERP/SAP实施工程师",
				en: "MRP/ERP Actualize Engineer"
			},
			"1002": {
				cn: "网络工程师",
				en: "Network Engineering"
			},
			"1029": {
				cn: "网络信息安全工程师",
				en: "Information Security Engineer"
			},
			"1007": {
				cn: "系统/网络管理员",
				en: "System/Network Administrator"
			},
			"1018": {
				cn: "系统维护员",
				en: "System Maintenace"
			},
			"1026": {
				cn: "互联网软件开发工程师",
				en: "Internet/E-Commerce Software Engineer"
			},
			"1027": {
				cn: "多媒体/游戏开发工程师",
				en: "Multimedia/Game Development Engineer"
			},
			"1021": {
				cn: "网站架构师",
				en: "Website frame Division"
			},
			"1030": {
				cn: "交互设计师",
				en: "Interaction Designer"
			},
			"1031": {
				cn: "UI/用户界面工程师",
				en: "User Interface Engineer"
			},
			"1032": {
				cn: "前端开发工程师",
				en: "Front-end development Engineer"
			},
			"1009": {
				cn: "网页设计师",
				en: "Webpage Designer"
			},
			"1010": {
				cn: "网站策划师",
				en: "Web Designer"
			},
			"1008": {
				cn: "INTERNET/WEB/电子商务师",
				en: "Internet/Web/E-Commerce"
			},
			"1016": {
				cn: "网站编辑员",
				en: "Website Editor"
			},
			"1015": {
				cn: "电脑美工",
				en: "Computer Art Designer"
			},
			"1028": {
				cn: "CAD/计算机辅助设计工程师",
				en: "Computer Aided Design Engineer"
			},
			"1017": {
				cn: "栏目主持人",
				en: "Column Emcee"
			},
			"1099": {
				cn: "其它相关职位",
				en: "Other"
			},
			"2019": {
				cn: "CTO/技术总监",
				en: "Tech. Majordomo, CTO"
			},
			"2020": {
				cn: "CIO/信息主管",
				en: "Information Majordomo, CIO"
			},
			"2002": {
				cn: "网站营运经理/主管",
				en: "Web Operations Manager/Supervisor"
			},
			"2003": {
				cn: "信息系统监理师",
				en: "Management information systems Division"
			},
			"2004": {
				cn: "信息系统项目管理师",
				en: "Information systems project management division"
			},
			"2001": {
				cn: "信息系统审计师",
				en: "Information Systems Auditor"
			},
			"2005": {
				cn: "信息技术经理/主管",
				en: "IT Manager/Supervisor"
			},
			"2006": {
				cn: "信息技术专员",
				en: "IT Specialist"
			},
			"2007": {
				cn: "信息分析师",
				en: "IT Analyst"
			},
			"2022": {
				cn: "项目总监",
				en: "Project Director"
			},
			"2021": {
				cn: "项目经理",
				en: "Project Manager"
			},
			"2023": {
				cn: "项目主管",
				en: "Project Supervisor"
			},
			"2024": {
				cn: "项目执行/协调人员",
				en: "Project Specialist/Coordinator"
			},
			"2011": {
				cn: "系统集成/技术支持",
				en: "System integration, Technical Support"
			},
			"2010": {
				cn: "技术支持经理",
				en: "Technical Support Manager"
			},
			"2012": {
				cn: "技术支持工程师",
				en: "Technical Support Engineer"
			},
			"2008": {
				cn: "标准化工程师",
				en: "Standardization Engineer"
			},
			"2009": {
				cn: "技术助理",
				en: "Technical Assistant"
			},
			"2099": {
				cn: "其它相关职位",
				en: "Other"
			},
			"2501": {
				cn: "数据通信工程师",
				en: "Data communication Engineer"
			},
			"2502": {
				cn: "移动通信工程师",
				en: "Mobile communication Engineer"
			},
			"2503": {
				cn: "通信技术工程师",
				en: "Communication Engineer"
			},
			"2504": {
				cn: "有线传输工程师",
				en: "Wired Transmission Engineer"
			},
			"2505": {
				cn: "无线通信工程师",
				en: "Wireless Communication Engineer"
			},
			"2506": {
				cn: "电信交换工程师",
				en: "Telecommunication Exchange Engineer"
			},
			"2507": {
				cn: "电信网络工程师",
				en: "Telecommunication Network Engineer"
			},
			"2508": {
				cn: "通信电源工程师",
				en: "Communication Power Supply Engineer"
			},
			"2509": {
				cn: "射频工程师",
				en: "Radio Frequency Engineer"
			},
			"2599": {
				cn: "其他相关职位",
				en: "Other"
			},
			"1503": {
				cn: "电子工程师/技术员",
				en: "Electron Engineer"
			},
			"1504": {
				cn: "电气工程师/技术员",
				en: "Electric Engineer"
			},
			"1506": {
				cn: "电路(布线)设计工程师",
				en: "Circuit Design"
			},
			"1508": {
				cn: "智能大厦/综合布线/弱电",
				en: "Intelligent Building/Structure Cabling/Weak"
			},
			"1509": {
				cn: "自动控制技术员",
				en: "Autocontrol"
			},
			"1510": {
				cn: "无线电技术员",
				en: "Radio-technology"
			},
			"1511": {
				cn: "半导体技术员",
				en: "Semiconductor Technology"
			},
			"1512": {
				cn: "变压器/磁电工程师",
				en: "Magnetoelectricity Engineer"
			},
			"1513": {
				cn: "电声/音响工程师/技术员",
				en: "Electric sound Engineer"
			},
			"1501": {
				cn: "集成电路/芯片开发工程师",
				en: "Integrated Circuit/Chip development Engineer"
			},
			"1505": {
				cn: "集成电路测试员",
				en: "Integrated Circuit Testers"
			},
			"1507": {
				cn: "集成电路验证工程师",
				en: "Integrated Circuit Validation Engineer"
			},
			"1502": {
				cn: "电子元器件工程师",
				en: "Electronic primary device Engineer"
			},
			"1521": {
				cn: "电子声像设备",
				en: "Electronic acoustic image equipment"
			},
			"1531": {
				cn: "电池/电源开发工程师",
				en: "Battery/Power source Development Engineer"
			},
			"1515": {
				cn: "嵌入式/底层软件开发(Linux/单片机/DSP/…)",
				en: "Embedded/SCM/DSP/FPGA Development"
			},
			"1519": {
				cn: "FAE/现场应用工程师",
				en: "Field Application Engineer"
			},
			"1516": {
				cn: "光源与照明工程",
				en: "Lamp-house and Lighting Engineering"
			},
			"1517": {
				cn: "灯饰研发工程师",
				en: "Lamp Development Engineer"
			},
			"1518": {
				cn: "电气维修员",
				en: "Electric Maintain"
			},
			"1520": {
				cn: "家用电器开发工程师",
				en: "Household electric Appliances"
			},
			"1525": {
				cn: "小家电",
				en: "Small Household electric appliances"
			},
			"1514": {
				cn: "数码产品开发工程师",
				en: "Digital Production Development Engineer"
			},
			"1522": {
				cn: "电器工程师",
				en: "Electric apparatus Engineer"
			},
			"1523": {
				cn: "电力工程师",
				en: "Electric power Engineer"
			},
			"1524": {
				cn: "电子测试工程师",
				en: "Electronic Test Engineer"
			},
			"1599": {
				cn: "其他相关职位",
				en: "Other"
			},
			"2305": {
				cn: "销售代表",
				en: "Sales Representative"
			},
			"2301": {
				cn: "客户代表",
				en: "Customer Representative"
			},
			"2302": {
				cn: "业务员",
				en: "Clerk"
			},
			"2318": {
				cn: "推(营)销员",
				en: "Salesman"
			},
			"2303": {
				cn: "渠道/分销专员",
				en: "Channel/Retails special Commissioner"
			},
			"2304": {
				cn: "经销商",
				en: "Dealer"
			},
			"2399": {
				cn: "其他相关职位",
				en: "Other"
			},
			"1124": {
				cn: "销售总监",
				en: "Sales Majordomo"
			},
			"1108": {
				cn: "销售工程师",
				en: "Sales Engineering"
			},
			"1112": {
				cn: "销售部经理",
				en: "Sales Manager"
			},
			"1116": {
				cn: "销售主管",
				en: "Sales Director"
			},
			"1117": {
				cn: "销售助理",
				en: "Sales Assistant"
			},
			"1103": {
				cn: "客户经理",
				en: "Sales Account Manager"
			},
			"1120": {
				cn: "渠道经理",
				en: "Channel Manager"
			},
			"1121": {
				cn: "渠道主管",
				en: "Channel Director"
			},
			"1122": {
				cn: "分销经理",
				en: "Distribution Manager"
			},
			"1123": {
				cn: "区域销售经理",
				en: "District Sales Manager"
			},
			"1119": {
				cn: "商务经理",
				en: "Commerce Manager"
			},
			"1101": {
				cn: "商务专员",
				en: "Commerce Clerk"
			},
			"1102": {
				cn: "商务助理",
				en: "Business Assistant"
			},
			"1199": {
				cn: "其他相关职位",
				en: "Other"
			},
			"4201": {
				cn: "客户服务总监",
				en: "Customer service inspector General"
			},
			"4203": {
				cn: "客户服务经理",
				en: "Customer Service Manager"
			},
			"4202": {
				cn: "客户服务主管",
				en: "Customer service Supervisor"
			},
			"4209": {
				cn: "客户服务专员/助理",
				en: "Customer Service Commissioner/Assistant"
			},
			"4204": {
				cn: "客户数据库管理",
				en: "Customer Database Administrator"
			},
			"4205": {
				cn: "客户关系管理员",
				en: "Customer Relationship Administrator"
			},
			"4213": {
				cn: "客户主任",
				en: "Customer Director"
			},
			"4206": {
				cn: "客户培训",
				en: "Customer Training"
			},
			"4207": {
				cn: "客户咨询员",
				en: "Customer Consultant"
			},
			"4208": {
				cn: "咨询热线/呼叫中心人员",
				en: "Hot-line Consultant"
			},
			"4214": {
				cn: "售前/售后技术支持经理",
				en: "Technical Support Manager"
			},
			"4215": {
				cn: "售前/售后技术支持主管",
				en: "Technical Support Supervisor"
			},
			"4210": {
				cn: "售前/售后技术支持工程师",
				en: "Technical Support Engineer"
			},
			"4211": {
				cn: "投诉处理",
				en: "Complains Solve"
			},
			"4212": {
				cn: "投诉监控",
				en: "Complains Manage"
			},
			"4299": {
				cn: "其他相关职位",
				en: "Other"
			},
			"1301": {
				cn: "CFO/首席财务官",
				en: "Chief Financial Officer"
			},
			"1316": {
				cn: "财务总监",
				en: "Finance Majordomo"
			},
			"1302": {
				cn: "财务管理师",
				en: "Financial Control Teacher"
			},
			"1303": {
				cn: "财务主管/经理",
				en: "Finance Director/Manager"
			},
			"1321": {
				cn: "财务顾问/助理",
				en: "Finance Consultant"
			},
			"1307": {
				cn: "财务策划专业人员",
				en: "Financial affairs plans professional staff"
			},
			"1314": {
				cn: "财务分析师",
				en: "Finance Analysis"
			},
			"1308": {
				cn: "注册会计师",
				en: "Certified Accountant"
			},
			"1304": {
				cn: "会计",
				en: "Accountant"
			},
			"1310": {
				cn: "会计助理",
				en: "Accountant Assistant"
			},
			"1309": {
				cn: "涉外会计",
				en: "Touches on foreign affairs Accountant"
			},
			"1322": {
				cn: "审计经理/主管",
				en: "Audit Manager/Supervisor"
			},
			"1305": {
				cn: "审计专员/助理",
				en: "Audit Executive/Assistant"
			},
			"1312": {
				cn: "注册审计师",
				en: "Certified Auditor"
			},
			"1306": {
				cn: "账目(进出口)管理",
				en: "Account Management"
			},
			"1317": {
				cn: "进出口/信用证结算",
				en: "Trading/LC Officer"
			},
			"1324": {
				cn: "成本经理/主管",
				en: "Cost Manager/Supervisor"
			},
			"1315": {
				cn: "成本分析/核算员",
				en: "Cost Analysis/Adjust"
			},
			"1325": {
				cn: "成本管理员",
				en: "Cost Accounting Specialist"
			},
			"1326": {
				cn: "注册税务师",
				en: "Certified Tax Agents"
			},
			"1327": {
				cn: "税务经理/主管",
				en: "Tax Manager/Supervisor"
			},
			"1328": {
				cn: "税务专员/助理",
				en: "Tax Clerk"
			},
			"1311": {
				cn: "出纳员",
				en: "Treasurer"
			},
			"1313": {
				cn: "统计员",
				en: "Statistician"
			},
			"1399": {
				cn: "其他相关职位",
				en: "Other"
			},
			"1414": {
				cn: "证券经纪人",
				en: "Securities Broke"
			},
			"1403": {
				cn: "证券期货从业人员",
				en: "Securities/Futures"
			},
			"1401": {
				cn: "证券分析师",
				en: "Securities Analysts"
			},
			"1405": {
				cn: "证券交易员",
				en: "Securities Trader"
			},
			"1402": {
				cn: "黄金投资分析师",
				en: "Gold investment Analyst"
			},
			"1417": {
				cn: "注册金融分析师",
				en: "Registration finance Analyst"
			},
			"1404": {
				cn: "金融投资分析员",
				en: "Finance investing Analysis"
			},
			"1413": {
				cn: "炒股操盘手",
				en: "Stock Manipulator"
			},
			"1418": {
				cn: "金融/经济研究员",
				en: "Financial Analyst/Economist"
			},
			"1416": {
				cn: "投资/基金项目经理",
				en: "Investment Manager"
			},
			"1406": {
				cn: "投资/理财顾问",
				en: "Investment/Financial Management Advisor"
			},
			"1407": {
				cn: "投资银行业务员",
				en: "Investment Banking Specialist"
			},
			"1410": {
				cn: "融资经理/主管",
				en: "Financing Manager/Directory"
			},
			"1409": {
				cn: "融资专员/助理",
				en: "Financing Commissioner/Assistant"
			},
			"1415": {
				cn: "注册分析师",
				en: "Certified Investment/Financial Analyst"
			},
			"1408": {
				cn: "评估/分析师",
				en: "Evaluating"
			},
			"1411": {
				cn: "风险控制",
				en: "Risk Management"
			},
			"1420": {
				cn: "精算师",
				en: "Actuaries"
			},
			"1421": {
				cn: "稽核员",
				en: "Investigation"
			},
			"1422": {
				cn: "拍卖师",
				en: "Auctions"
			},
			"1499": {
				cn: "其他相关职位",
				en: "Other"
			},
			"3401": {
				cn: "保险业务经理/主管",
				en: "Business Manager/Supervisor"
			},
			"3402": {
				cn: "保险经纪人/代理人",
				en: "Insurance Broker/Agent"
			},
			"3403": {
				cn: "保险产品开发/项目策划师",
				en: "Product Development/Planner"
			},
			"3404": {
				cn: "保险客户服务/续期管理",
				en: "Customer Service"
			},
			"3405": {
				cn: "理财顾问/财务规划师",
				en: "Financial Advisor/Financial Planner"
			},
			"3406": {
				cn: "保险理赔专员",
				en: "Claim Management"
			},
			"3407": {
				cn: "保险培训师",
				en: "Trainer"
			},
			"3416": {
				cn: "保险核保员",
				en: "Underwriting"
			},
			"3417": {
				cn: "保险内勤员",
				en: "Staff"
			},
			"3418": {
				cn: "资金营运经理",
				en: "Fund services Manager"
			},
			"3408": {
				cn: "银行行长/副行长",
				en: "Bank/Vice-President"
			},
			"3409": {
				cn: "银行信贷专员",
				en: "Commissioner bank Credit"
			},
			"3410": {
				cn: "大堂经理",
				en: "Hall Manager"
			},
			"3419": {
				cn: "资深/高级客户经理",
				en: "Senior Relationship Manager"
			},
			"3420": {
				cn: "客户经理/主管",
				en: "Relationship Manager/Supervisor"
			},
			"3421": {
				cn: "客户助理/专员",
				en: "Relationship Assistant/Clerk"
			},
			"3422": {
				cn: "理财规划师",
				en: "Financial Planners"
			},
			"3423": {
				cn: "个人理财师",
				en: "Personal Financial Planner"
			},
			"3424": {
				cn: "信用评估师",
				en: "Credit Assessment Division"
			},
			"3425": {
				cn: "合规专业人员",
				en: "Professional Regulations"
			},
			"3411": {
				cn: "银行卡/电子银行业务推广员",
				en: "Credit Card/E-banking business Develop"
			},
			"3412": {
				cn: "信贷管理/信用调查/分析人员",
				en: "Loan/Credit Officer"
			},
			"3413": {
				cn: "外汇交易专员",
				en: "Foreign Exchange Officer"
			},
			"3414": {
				cn: "出纳员/银行专员",
				en: "Treasurer/Bank Clerk"
			},
			"3415": {
				cn: "预结算专员",
				en: "Budgeting/Balance Clerk"
			},
			"3499": {
				cn: "其他相关职位",
				en: "Other"
			},
			"1903": {
				cn: "图书情报/档案管理",
				en: "Books Information/Files Administration"
			},
			"1904": {
				cn: "文案策划/资料编写",
				en: "Article Planning/Materials Writing"
			},
			"1905": {
				cn: "高级秘书",
				en: "Senior Secretary"
			},
			"1907": {
				cn: "电脑操作员/打字员",
				en: "Computer Operator/Type Writer"
			},
			"1908": {
				cn: "前台文员接待",
				en: "Reception"
			},
			"1909": {
				cn: "高级文员",
				en: "Senior Civilian"
			},
			"1910": {
				cn: "话务员",
				en: "Telephonist"
			},
			"1911": {
				cn: "文员",
				en: "Civilian"
			},
			"1999": {
				cn: "其他相关职位",
				en: "Other"
			},
			"3115": {
				cn: "人力资源总监",
				en: "Human Resource Majordomo"
			},
			"3101": {
				cn: "人力资源管理师",
				en: "Human Resources Management Division"
			},
			"3102": {
				cn: "人力资源专员",
				en: "Human Resource Clerk"
			},
			"3103": {
				cn: "人事经理/主管",
				en: "Human Resource Manager"
			},
			"3108": {
				cn: "人事专员",
				en: "Human Resource Commissioner"
			},
			"3104": {
				cn: "人事助理/文员",
				en: "Human Resource Assistant/Clerk"
			},
			"3105": {
				cn: "员工培训经理/主管",
				en: "Employee training Manager/Supervisor"
			},
			"3117": {
				cn: "员工培训专员/助理",
				en: "Employee training Specialist/Assistant"
			},
			"3112": {
				cn: "薪资福利经理/主管",
				en: "Compensation & Benefits Manager/Supervisor"
			},
			"3118": {
				cn: "薪资福利专员/助理",
				en: "Compensation & Benefits Commissioner/Assistant"
			},
			"3113": {
				cn: "绩效考核经理/主管",
				en: "Performance Assessment Manage/Supervisor"
			},
			"3119": {
				cn: "绩效考核专员/助理",
				en: "Performance Assessment Commissioner/Assistant"
			},
			"3106": {
				cn: "招聘经理/主管",
				en: "Recruitment Manager/Supervisor"
			},
			"3114": {
				cn: "招聘专员/助理",
				en: "Recruitment Commissioner/Assistant"
			},
			"3120": {
				cn: "员工关系经理/主管",
				en: "Employee Relations Manager/Supervisor"
			},
			"3121": {
				cn: "员工关系专员/助理",
				en: "Employee Relations Specialist/Assistant"
			},
			"3122": {
				cn: "企业文化/工会管理",
				en: "Enterprise culture/union management"
			},
			"3116": {
				cn: "行政总监",
				en: "Human Resource Majordomo"
			},
			"3107": {
				cn: "行政经理/主管",
				en: "Administrative Manager/Supervisor"
			},
			"3109": {
				cn: "行政专员",
				en: "Administration Commissioner"
			},
			"3110": {
				cn: "行政助理/文员",
				en: "Administrative Assistant/Clerk"
			},
			"3111": {
				cn: "总务员",
				en: "General Affairs"
			},
			"3199": {
				cn: "其他相关职位",
				en: "Other"
			},
			"1204": {
				cn: "(正/副)CEO/总裁/总经理",
				en: "President/VP/General Manager/CEO"
			},
			"1201": {
				cn: "COO/运营官",
				en: "Chief operation official/COO"
			},
			"1203": {
				cn: "产品经理/主管",
				en: "Product Manager/Director"
			},
			"1206": {
				cn: "企业发展规划经理/主管/助理",
				en: "Corporate Planning Manager"
			},
			"1207": {
				cn: "分公司/办事处经理/主管",
				en: "Branch Manager/Director"
			},
			"1205": {
				cn: "部门经理",
				en: "Department Manager"
			},
			"1210": {
				cn: "总经理助理",
				en: "President Assistant"
			},
			"1211": {
				cn: "厂长/副厂长",
				en: "Factory Director/Vice Factory Director"
			},
			"1213": {
				cn: "经理助理",
				en: "Manager Assistant"
			},
			"1208": {
				cn: "项目经理/主管",
				en: "Project Manager"
			},
			"1209": {
				cn: "部门主管",
				en: "Department Director"
			},
			"1212": {
				cn: "合同管理专员",
				en: "Contract management special Commissioner"
			},
			"1202": {
				cn: "专业招商人员",
				en: "Professional business Staff"
			},
			"1299": {
				cn: "其他相关职位",
				en: "Other"
			},
			"2903": {
				cn: "保安",
				en: "Security"
			},
			"2902": {
				cn: "司机",
				en: "Chauffeur"
			},
			"2908": {
				cn: "搬运",
				en: "Transport"
			},
			"2904": {
				cn: "寻呼/声讯服务",
				en: "Pagers/Voice information services"
			},
			"2905": {
				cn: "社区服务",
				en: "Community services"
			},
			"2906": {
				cn: "清洁工/后勤",
				en: "Dustman/logistics"
			},
			"2901": {
				cn: "食堂主管/经理",
				en: "Canteen Supervisor/Manager"
			},
			"2907": {
				cn: "食堂厨师",
				en: "Refectory chef"
			},
			"2909": {
				cn: "保姆/家政服务",
				en: "Nanny/Domestic service"
			},
			"2999": {
				cn: "其他相关职位",
				en: "Other"
			},
			"3513": {
				cn: "总工程师/副总工程师",
				en: "Chief Engineer"
			},
			"3514": {
				cn: "项目工程师",
				en: "Project Engineer"
			},
			"3522": {
				cn: "IE/工业工程师",
				en: "Industrial Engineer"
			},
			"3533": {
				cn: "RD/研发经理",
				en: "Research and Development Manager"
			},
			"3515": {
				cn: "RD/研发工程师",
				en: "Research and Development Engineer"
			},
			"3534": {
				cn: "产品开发经理/主管",
				en: "Product Development Manager/Director"
			},
			"3521": {
				cn: "PE/产品工程师",
				en: "Product Engineer"
			},
			"3504": {
				cn: "新产品导入工程师",
				en: "New products into Engineer"
			},
			"3525": {
				cn: "生产副总",
				en: "Deputy Director of production"
			},
			"3505": {
				cn: "生产经理/主管",
				en: "Product Manager"
			},
			"3526": {
				cn: "PD/生产流程设计安排工程师",
				en: "Production process design arrangement Engineer"
			},
			"3519": {
				cn: "生产管理主管/督导",
				en: "Production Management Director"
			},
			"3520": {
				cn: "生产管理办事员",
				en: "Production Management Clerk"
			},
			"3528": {
				cn: "生产文员",
				en: "Production Clerks"
			},
			"3531": {
				cn: "ME/机械(构)工程师",
				en: "Mechanical Engineer"
			},
			"3530": {
				cn: "工程资料制作工程师",
				en: "Production engineer engineering information"
			},
			"3506": {
				cn: "工程经理/主管",
				en: "Engineering Manager/Director"
			},
			"3507": {
				cn: "品管经理/主管",
				en: "Quality Control Manager/Director"
			},
			"3508": {
				cn: "物控经理/主管",
				en: "Material Manager/Director"
			},
			"3509": {
				cn: "设备经理/主管",
				en: "Device Manager/Director"
			},
			"3510": {
				cn: "营运经理/主管",
				en: "Operations Manager/Director"
			},
			"3501": {
				cn: "车间经理/主管",
				en: "Workshop Manager/Director"
			},
			"3503": {
				cn: "车间文员",
				en: "Workshop officer"
			},
			"3502": {
				cn: "维修工程师",
				en: "Services Engineer"
			},
			"3541": {
				cn: "资材主管",
				en: "Materials and Equipment Manager"
			},
			"3542": {
				cn: "资材助理",
				en: "Materials and Equipment Assistant"
			},
			"3511": {
				cn: "仓库管理员",
				en: "Storage Controller"
			},
			"3512": {
				cn: "计划员/调度员",
				en: "Dispatcher"
			},
			"3535": {
				cn: "计价员",
				en: "Members price"
			},
			"3516": {
				cn: "跟单员",
				en: "Order Clerk"
			},
			"3536": {
				cn: "SMT/表面贴装技术工程师",
				en: "Surface Mounted Technology Engineer"
			},
			"3517": {
				cn: "SMT/表面贴装技术技术员",
				en: "Surface Mounted Technology Technician"
			},
			"3518": {
				cn: "工艺工程师",
				en: "Technic Engineer"
			},
			"3523": {
				cn: "组长/拉长",
				en: "Team leader"
			},
			"3543": {
				cn: "叉车司机",
				en: "Forklift Driver"
			},
			"3524": {
				cn: "工程设备工程师",
				en: "Engineering Device Engineer"
			},
			"3527": {
				cn: "物控员",
				en: "Material Commissioner"
			},
			"3529": {
				cn: "统计员",
				en: "Statistician"
			},
			"3532": {
				cn: "制造课长",
				en: "Manufacture Director"
			},
			"3544": {
				cn: "储备干部",
				en: "Stockpiles the Cadre"
			},
			"3599": {
				cn: "其他相关职位",
				en: "Other"
			},
			"1602": {
				cn: "技术研发经理/主管",
				en: "Technical Design Mgr./Spvr."
			},
			"1605": {
				cn: "技术研发工程师",
				en: "Technical Design Engineer"
			},
			"1606": {
				cn: "AMT/控制策略工程师",
				en: "Advanced Manufactuing Technology"
			},
			"1603": {
				cn: "机械设计/制造工程师",
				en: "Machine Design and Manufacture Engineer"
			},
			"1604": {
				cn: "机械工程师",
				en: "Machine Engineer"
			},
			"1607": {
				cn: "MI/制造工程师",
				en: "Manufacture Intrduction Engineer"
			},
			"1601": {
				cn: "表面处理工程师",
				en: "Surface treatment Engineer"
			},
			"1612": {
				cn: "衡器装配调试工",
				en: "Scale debug assembly workers"
			},
			"1613": {
				cn: "管芯工艺工程师",
				en: "Process engineers die"
			},
			"1608": {
				cn: "气动/液压",
				en: "Hydraulic Pressure/Gas driven"
			},
			"1610": {
				cn: "精密机械/仪器仪表工程师",
				en: "Precision optical machinery/Instrument and meter Engineer"
			},
			"1611": {
				cn: "纺织机械工程师",
				en: "Spin machine Engineer"
			},
			"1631": {
				cn: "夹具工程师",
				en: "Jig Engineer"
			},
			"1614": {
				cn: "设备修理",
				en: "Device Repairment"
			},
			"1615": {
				cn: "汽车/摩托车工程师",
				en: "Automobile/Autocycle Engineer"
			},
			"1616": {
				cn: "五金矿产/金属制品",
				en: "Ironware mineral resources/metalwork"
			},
			"1617": {
				cn: "机电一体化",
				en: "Integration of machinery"
			},
			"1632": {
				cn: "数控技术员",
				en: "Numerical control Technician"
			},
			"1618": {
				cn: "锅炉/压力容器",
				en: "Boiler/Pressure vessel"
			},
			"1619": {
				cn: "船舶机械工程师",
				en: "Watercraft machine Engineer"
			},
			"1633": {
				cn: "飞行器设计工程师",
				en: "Flight vehicle project Engineer"
			},
			"1620": {
				cn: "机械工艺师",
				en: "Machine Technics"
			},
			"1621": {
				cn: "刀具工程师",
				en: "Reamer Engineer"
			},
			"1609": {
				cn: "机械制图员",
				en: "Mechanical cartography"
			},
			"1622": {
				cn: "CNC/数控机床工程师",
				en: "Computer numerical control Engineer"
			},
			"1623": {
				cn: "结构设计师",
				en: "Structure Engineer"
			},
			"1624": {
				cn: "食品机械工程师",
				en: "Grocery machine Engineer"
			},
			"1625": {
				cn: "焊接机械工程师",
				en: "Jointing machine Engineer"
			},
			"1699": {
				cn: "其他相关职位",
				en: "Other"
			},
			"4401": {
				cn: "物流总监",
				en: "Logistics Director"
			},
			"4403": {
				cn: "物流经理",
				en: "Logistics Manager"
			},
			"4404": {
				cn: "物流主管",
				en: "Logistics Director"
			},
			"4410": {
				cn: "物流操作员",
				en: "Logistics Operator"
			},
			"4420": {
				cn: "物流专员/助理",
				en: "Logistics Commissioner/Assistant"
			},
			"4421": {
				cn: "物流调度员",
				en: "Logistics Dispatcher"
			},
			"4405": {
				cn: "仓库经理/主管",
				en: "Storage manager/director"
			},
			"4406": {
				cn: "仓库管理员",
				en: "Storage Clerk"
			},
			"4422": {
				cn: "供应链总监",
				en: "Supply Chain Director"
			},
			"4423": {
				cn: "供应链经理/主管",
				en: "Supply chain Manager/Supervisor"
			},
			"4424": {
				cn: "供应链专员",
				en: "Supply chain special Commissioner"
			},
			"4425": {
				cn: "注册职业采购经理(CPPM)",
				en: "Registered occupational Procurement Manager(CPPM)"
			},
			"4402": {
				cn: "采购总监",
				en: "Procurement Director"
			},
			"4426": {
				cn: "采购经理/主管",
				en: "Procurement Manager/Supervisor"
			},
			"4427": {
				cn: "采购专员/助理",
				en: "Procurement Commissioner/Assistant"
			},
			"4411": {
				cn: "采购工程师",
				en: "Procurement Engineer"
			},
			"4415": {
				cn: "采购管理员",
				en: "Stock Management"
			},
			"4407": {
				cn: "运输经理/主管",
				en: "Transit Manager/Director"
			},
			"4428": {
				cn: "货运代理",
				en: "Freight forwarders"
			},
			"4429": {
				cn: "集装箱业务",
				en: "Container service"
			},
			"4408": {
				cn: "单证员",
				en: "Order Clerk"
			},
			"4409": {
				cn: "快递员",
				en: "Courier"
			},
			"4430": {
				cn: "理货员",
				en: "Tally man"
			},
			"4499": {
				cn: "其他相关职位",
				en: "Other"
			},
			"4901": {
				cn: "国际业务员",
				en: "International business"
			},
			"4902": {
				cn: "外贸经理/主管",
				en: "Foreign Trade Manager/Supervisor"
			},
			"4903": {
				cn: "外贸专员/助理",
				en: "Foreign Trade Commissioner/Assistant"
			},
			"4904": {
				cn: "国内贸易人员",
				en: "Domestic trade personnel"
			},
			"4905": {
				cn: "业务跟单员",
				en: "Service freight bill"
			},
			"4906": {
				cn: "船务人员",
				en: "Shipman"
			},
			"4907": {
				cn: "外销员",
				en: "Export commissioner"
			},
			"4908": {
				cn: "报关员",
				en: "Customs commissioner"
			},
			"4909": {
				cn: "报检员",
				en: "Inspection staff"
			},
			"4999": {
				cn: "其他相关职位",
				en: "Other"
			},
			"3901": {
				cn: "工模主管",
				en: "Mold Director"
			},
			"3902": {
				cn: "工模技师",
				en: "Mold Technician"
			},
			"3903": {
				cn: "工模技工",
				en: "Mold Craft"
			},
			"3904": {
				cn: "模具工程师",
				en: "Matrix Engineer"
			},
			"3905": {
				cn: "模具设计师",
				en: "Mould Designer"
			},
			"3906": {
				cn: "模具师傅",
				en: "Mold skilled Worker"
			},
			"3907": {
				cn: "模具技工",
				en: "Mold Labor"
			},
			"3908": {
				cn: "铸造/锻造工程师",
				en: "Foundry/Smithing Engineer"
			},
			"3909": {
				cn: "压铸工程师",
				en: "Die Casting Engineer"
			},
			"3910": {
				cn: "注塑成型工程师",
				en: "Prototyping Engineer"
			},
			"3911": {
				cn: "冲压工程师",
				en: "Ramming Engineer"
			},
			"3912": {
				cn: "塑胶模经理/主管",
				en: "Plastic mold Manager/Supervisor"
			},
			"3913": {
				cn: "塑胶模师傅/普师/补师",
				en: "Plastic mold Master/Teacher & P/Supplement division"
			},
			"3914": {
				cn: "五金模经理/主管",
				en: "Hardware mode Manager/Supervisor"
			},
			"3915": {
				cn: "五金模师傅/普师/补师",
				en: "Hardware mode Master/Teacher & P/Supplement division"
			},
			"3916": {
				cn: "线切割师傅",
				en: "Gleam of cutting Master"
			},
			"3917": {
				cn: "跟模/试模/校模",
				en: "With the analog/test mode/school mode"
			},
			"3918": {
				cn: "省模/组模/修模",
				en: "Provincial mold/Group A/repair mode"
			},
			"3919": {
				cn: "走丝/慢走丝/线切割",
				en: "Take silk/walking wire/wire-cutting"
			},
			"3920": {
				cn: "手版制作员",
				en: "Hand version of the production staff"
			},
			"3999": {
				cn: "其他相关职位",
				en: "Other"
			},
			"4001": {
				cn: "汽车总装工程师",
				en: "Automobile general equipment department Engineer"
			},
			"4002": {
				cn: "整车控制策略工程师",
				en: "Complete bikes control policy Engineer"
			},
			"4003": {
				cn: "发动机研发工程师",
				en: "Engine researches and develops Engineer"
			},
			"4004": {
				cn: "三座标测量工程师",
				en: "Three grid references survey Engineer"
			},
			"4005": {
				cn: "线束设计师",
				en: "Harness Designer"
			},
			"4006": {
				cn: "汽车A级曲面工程师",
				en: "A surface-level car Engineers"
			},
			"4007": {
				cn: "变速箱工艺规划师",
				en: "Transmission technology Planners"
			},
			"4008": {
				cn: "总装配工艺师",
				en: "Final assembly technologist"
			},
			"4009": {
				cn: "底盘工程师",
				en: "Chassis Engineer"
			},
			"4010": {
				cn: "底盘总布置设计师",
				en: "General layout chassis Designer"
			},
			"4011": {
				cn: "内外饰设计师",
				en: "Internal and external decoration Designer"
			},
			"4012": {
				cn: "涂装工程师",
				en: "Finishing Engineer"
			},
			"4013": {
				cn: "车身工艺师",
				en: "Body Technologist"
			},
			"4014": {
				cn: "座椅工艺师",
				en: "Seat Technicians"
			},
			"4015": {
				cn: "涂料工程师",
				en: "Coatings Engineer"
			},
			"4016": {
				cn: "汽车玻璃维修工",
				en: "Auto glass repair works"
			},
			"4017": {
				cn: "汽车美容师",
				en: "Automotive beautician"
			},
			"4018": {
				cn: "二手车评估师",
				en: "Used car appraisers"
			},
			"4099": {
				cn: "其他相关职位",
				en: "Other"
			},
			"3603": {
				cn: "车床工",
				en: "Latheg"
			},
			"3610": {
				cn: "铣、刨",
				en: "Planing"
			},
			"3604": {
				cn: "钣、铆、冲、铸",
				en: "Francium,Rivetting,Washing,Cast"
			},
			"3611": {
				cn: "钳工",
				en: "Pincers"
			},
			"3612": {
				cn: "焊工",
				en: "Weld"
			},
			"3601": {
				cn: "磨床工",
				en: "Grinder Labor"
			},
			"3602": {
				cn: "火花机工",
				en: "Spark Mechanic"
			},
			"3605": {
				cn: "裁、剪、车",
				en: "Sewing"
			},
			"3613": {
				cn: "缝、熨、烫",
				en: "Iron"
			},
			"3614": {
				cn: "打磨、抛光",
				en: "Grinding,Polishing"
			},
			"3615": {
				cn: "空调工/锅炉工/电梯工",
				en: "Air-conditioning/temp/elevator work"
			},
			"3616": {
				cn: "汽车/摩托车维修员",
				en: "Automotive Engineer"
			},
			"3606": {
				cn: "水工/木工/油漆工",
				en: "Warterworker/Woodworker/Painter"
			},
			"3607": {
				cn: "电工",
				en: "Electrician"
			},
			"3617": {
				cn: "锅炉工",
				en: "Boiler worker"
			},
			"3618": {
				cn: "锁具修理工",
				en: "Lock repairman"
			},
			"3608": {
				cn: "普通工人",
				en: "General worker"
			},
			"3699": {
				cn: "其他相关职位",
				en: "Other"
			},
			"3702": {
				cn: "包装经理/主管",
				en: "Packaging Manager/Supervisor"
			},
			"3701": {
				cn: "包装工程师",
				en: "Packs Engineer"
			},
			"3703": {
				cn: "印刷机长",
				en: "Press Minister"
			},
			"3704": {
				cn: "印刷技术员",
				en: "Prints the Technician"
			},
			"3706": {
				cn: "调墨员",
				en: "Move the ink Member"
			},
			"3710": {
				cn: "模切机机长",
				en: "Die cutting machine Captain"
			},
			"3712": {
				cn: "手动啤机机长",
				en: "Manual Press Captain"
			},
			"3713": {
				cn: "平压机机长",
				en: "Captain peace Press"
			},
			"3714": {
				cn: "UV机长",
				en: "UV Captain"
			},
			"3715": {
				cn: "切纸机长",
				en: "Cutter Long"
			},
			"3716": {
				cn: "折页压痕装订员",
				en: "Folding pressure trace binding Member"
			},
			"3717": {
				cn: "瓦线调试员/记录员",
				en: "Tile line Tests/Precis writer"
			},
			"3718": {
				cn: "染整技术员",
				en: "Dye the entire Technician"
			},
			"3711": {
				cn: "调色员",
				en: "Mixes colors"
			},
			"3705": {
				cn: "纸浆造纸工艺",
				en: "Paper making"
			},
			"3719": {
				cn: "版房经理/主管",
				en: "Version of the Housing Manager/Supervisor"
			},
			"3720": {
				cn: "版房师傅",
				en: "Housing version Chef"
			},
			"3707": {
				cn: "食品工程/糖酒饮料/粮油副食",
				en: "Foodstuff Engineering/Candy/Wine/Drink/Grain/oil"
			},
			"3708": {
				cn: "陶瓷技术",
				en: "Potter"
			},
			"3709": {
				cn: "金银首饰加工",
				en: "Jewellery process"
			},
			"3799": {
				cn: "其他相关职位",
				en: "Other"
			},
			"5001": {
				cn: "服装设计师",
				en: "Clothing Designer"
			},
			"5002": {
				cn: "内衣设计师",
				en: "Underwear Designer"
			},
			"5003": {
				cn: "纺织设计师",
				en: "Textile Designer"
			},
			"5004": {
				cn: "服装纺织工",
				en: "Accouterments/Spin"
			},
			"5005": {
				cn: "物料经理/主管",
				en: "Material Manager"
			},
			"5006": {
				cn: "物料专员",
				en: "Material Manager/special Commissioner"
			},
			"5007": {
				cn: "制鞋/制衣/制革/手袋",
				en: "Shoemaking/Clothing/Curry/Vanity"
			},
			"5008": {
				cn: "面料辅料开发/采购专员",
				en: "Fabric excipients Development/Procurement Commissioner"
			},
			"5009": {
				cn: "板房/楦头/底格出格师",
				en: "Shoe Tree Design"
			},
			"5010": {
				cn: "服装打样/制版工",
				en: "Apparels Sample Production"
			},
			"5011": {
				cn: "裁床工",
				en: "Cuts the bed labor"
			},
			"5012": {
				cn: "车板工",
				en: "Car plate workers"
			},
			"5013": {
				cn: "纺织/服饰(装)设计",
				en: "Spin/finery Design"
			},
			"5014": {
				cn: "地毯设计师",
				en: "Rug Designer"
			},
			"5015": {
				cn: "皮具设计师",
				en: "Leather Designer"
			},
			"5016": {
				cn: "手袋设计",
				en: "Handbag Design"
			},
			"5017": {
				cn: "家用纺织品设计师",
				en: "Home textiles Designer"
			},
			"5018": {
				cn: "皮具开发设计",
				en: "Leather goods design"
			},
			"5019": {
				cn: "染整工程师",
				en: "Dyeing and Finishing Engineer"
			},
			"5020": {
				cn: "制版师",
				en: "Plate Division"
			},
			"5021": {
				cn: "纸样师",
				en: "Paper Sample"
			},
			"5022": {
				cn: "放码技工",
				en: "Grading mechanics"
			},
			"5099": {
				cn: "其他相关职位",
				en: "Other"
			},
			"5601": {
				cn: "质量管理/测试经理/主管(QA/QC经理)",
				en: "QA/QC Manager/Supervisor"
			},
			"5602": {
				cn: "质量管理/测试工程师(QA/QC工程师)",
				en: "QA/QC Engineer"
			},
			"5603": {
				cn: "质量管理/验货员(QA/QC)",
				en: "Quality Management QA/QC"
			},
			"5604": {
				cn: "ISO质量检验员/测试员",
				en: "ISO Quality Inspector/Tester"
			},
			"5613": {
				cn: "化验/检验员",
				en: "Assay/Test Clerk"
			},
			"5614": {
				cn: "品管员",
				en: "Quality control staff"
			},
			"5615": {
				cn: "QA/品质工程师",
				en: "Quality Engineer"
			},
			"5618": {
				cn: "PQA/产品质量保证",
				en: "Product Quality Assurance"
			},
			"5619": {
				cn: "DQA/设计质量保证",
				en: "Design Quality Assurance"
			},
			"5620": {
				cn: "SQA/供应商质量保证",
				en: "Supplier Quality Assurance"
			},
			"5611": {
				cn: "供应商管理",
				en: "Supplier/Vendor Management"
			},
			"5617": {
				cn: "SQE/供应商质量工程师",
				en: "Supplier Quality Engineer"
			},
			"5605": {
				cn: "食品检验工",
				en: "Food Inspection"
			},
			"5621": {
				cn: "可靠度工程师",
				en: "Reliability Engineer"
			},
			"5622": {
				cn: "性能测试工程师",
				en: "Performance tests Engineer"
			},
			"5606": {
				cn: "故障分析工程师",
				en: "Failure Analysis Engineer"
			},
			"5607": {
				cn: "认证工程师",
				en: "Certification Engineer"
			},
			"5608": {
				cn: "体系工程师",
				en: "Systems Engineer"
			},
			"5623": {
				cn: "审核员",
				en: "Auditor"
			},
			"5624": {
				cn: "计量工程师",
				en: "Measurement Engineer"
			},
			"5625": {
				cn: "计量测试工程师",
				en: "Measurement test Engineer"
			},
			"5626": {
				cn: "计量员",
				en: "Measurement Member"
			},
			"5609": {
				cn: "安全/健康/环境经理/主管",
				en: "Safety/Health/Environmental Manager/Supervisor"
			},
			"5610": {
				cn: "安全/健康/环境工程师",
				en: "Safety/Health/Environmental Engineer"
			},
			"5616": {
				cn: "安全主任",
				en: "Security Director"
			},
			"5627": {
				cn: "安全性能工程师",
				en: "Safety Engineers"
			},
			"5628": {
				cn: "安全防范设计评估师",
				en: "Designed to assess safety division"
			},
			"5629": {
				cn: "安全防范系统安装维护员",
				en: "Security system installation and maintenance staff"
			},
			"5630": {
				cn: "鉴定评估师",
				en: "Appraisal Appraiser"
			},
			"5612": {
				cn: "采购材料、设备质量管理",
				en: "Supplies & Equipment Quality Management"
			},
			"5699": {
				cn: "其他相关职位",
				en: "Other"
			},
			"4117": {
				cn: "市场/营销总监",
				en: "Market Majordomo"
			},
			"4103": {
				cn: "市场/营销经理",
				en: "Marketing Manager"
			},
			"4102": {
				cn: "营销主管",
				en: "Marketing director"
			},
			"4101": {
				cn: "营销师",
				en: "Marketing Division"
			},
			"4104": {
				cn: "市场助理/专员",
				en: "Marketing Assistant/Clerk"
			},
			"4105": {
				cn: "市场部主管",
				en: "Marketing Director"
			},
			"4106": {
				cn: "市场调研/业务分析员",
				en: "Marketing Research/Business Analysis"
			},
			"4107": {
				cn: "市场/行销企划经理/主管",
				en: "Marketing/Sales Planning Manager/Director"
			},
			"4118": {
				cn: "市场/行销企划助理/专员",
				en: "Marketing/Sales Planning Assistant/Commissioner"
			},
			"4113": {
				cn: "市场推广/拓展/合作员",
				en: "Market Development"
			},
			"4119": {
				cn: "发展调研员",
				en: "Development Investigation"
			},
			"4108": {
				cn: "产品/品牌企划",
				en: "Product/Brand Planning"
			},
			"4109": {
				cn: "品牌经理",
				en: "Brand Manager"
			},
			"4120": {
				cn: "品牌管理师/经理/主管",
				en: "Brand Manager/Director"
			},
			"4121": {
				cn: "品牌管理助理/专员",
				en: "Brand Management Assistant/Commissioner"
			},
			"4110": {
				cn: "价格企划",
				en: "Price Planning"
			},
			"4111": {
				cn: "广告企划",
				en: "Advertisement Planning"
			},
			"4112": {
				cn: "新闻媒介企划",
				en: "News Media Planning"
			},
			"4114": {
				cn: "促销/礼仪专员",
				en: "Promotion/Comity Clerk"
			},
			"4115": {
				cn: "公关经理",
				en: "Public Relations Manager"
			},
			"4116": {
				cn: "公关专员",
				en: "Public Relations Commissioner"
			},
			"4199": {
				cn: "其他相关职位",
				en: "Other"
			},
			"3201": {
				cn: "广告创意总监",
				en: "Advertisement creativity Inspector General"
			},
			"3202": {
				cn: "广告设计/创意策划师",
				en: "Advertisement design/Originality Planning"
			},
			"3203": {
				cn: "商业美术设计师",
				en: "Commercial fine arts Designer"
			},
			"3204": {
				cn: "文案/媒体策划",
				en: "Planning"
			},
			"3205": {
				cn: "图形设计师",
				en: "Graphic UI Designer"
			},
			"3206": {
				cn: "三维动画设计",
				en: "3D Movie Design"
			},
			"3207": {
				cn: "多媒体设计制作员",
				en: "Multimedia Design"
			},
			"3208": {
				cn: "动漫设计制作员",
				en: "CARTOON design Producers"
			},
			"3299": {
				cn: "其他相关职位",
				en: "Other"
			},
			"2103": {
				cn: "设计总监",
				en: "Design Director"
			},
			"2105": {
				cn: "产品包装设计",
				en: "Product casing Design"
			},
			"2107": {
				cn: "工艺品设计",
				en: "Craftwork Design"
			},
			"2104": {
				cn: "陈列/展览设计师",
				en: "Exhibition/display Designer"
			},
			"2114": {
				cn: "工业产品设计",
				en: "Industry product Design"
			},
			"2106": {
				cn: "糖果工艺师",
				en: "Candy Technologist"
			},
			"2101": {
				cn: "家具设计",
				en: "Furniture Design"
			},
			"2102": {
				cn: "灯光设计",
				en: "Light Design"
			},
			"2109": {
				cn: "形象设计",
				en: "Visualize Design"
			},
			"2110": {
				cn: "平面设计",
				en: "Plane Design"
			},
			"2111": {
				cn: "玩具设计",
				en: "Toy Design"
			},
			"2112": {
				cn: "珠宝设计",
				en: "Jewellery Design"
			},
			"2108": {
				cn: "首饰设计",
				en: "Jewelry Design"
			},
			"2113": {
				cn: "雕塑设计",
				en: "Sculpture Design"
			},
			"2199": {
				cn: "其他相关职位",
				en: "Other"
			},
			"4703": {
				cn: "影视策划/制作人员",
				en: "Movie planning/Producer"
			},
			"4704": {
				cn: "影音器材管理",
				en: "Media device administrato"
			},
			"4711": {
				cn: "导演",
				en: "Director"
			},
			"4712": {
				cn: "副导演/助理导演",
				en: "Assistant Director"
			},
			"4713": {
				cn: "经纪人/星探",
				en: "Manager/Talent"
			},
			"4705": {
				cn: "演员",
				en: "Actor/actress"
			},
			"4706": {
				cn: "模特儿",
				en: "Model"
			},
			"4707": {
				cn: "摄影师",
				en: "Photographer"
			},
			"4714": {
				cn: "摄影助理",
				en: "Assistant Cameraman"
			},
			"4701": {
				cn: "美术指导",
				en: "Art Director"
			},
			"4715": {
				cn: "道具员",
				en: "Propsman"
			},
			"4716": {
				cn: "化妆/造型师",
				en: "Make-up/Modelling Division"
			},
			"4718": {
				cn: "布景师",
				en: "Art Director"
			},
			"4719": {
				cn: "灯光师",
				en: "Lighting Engineer"
			},
			"4720": {
				cn: "剪辑师",
				en: "Film Cutter"
			},
			"4721": {
				cn: "冲印师",
				en: "Photo Division"
			},
			"4708": {
				cn: "音效师",
				en: "Sound effects Director"
			},
			"4722": {
				cn: "配音员",
				en: "Recording Director"
			},
			"4709": {
				cn: "节目主持人",
				en: "M.C"
			},
			"4702": {
				cn: "播音员",
				en: "Announcer"
			},
			"4717": {
				cn: "记者",
				en: "Reporter"
			},
			"4710": {
				cn: "广播电视(影)",
				en: "Broadcasting"
			},
			"4799": {
				cn: "其他相关职位",
				en: "Other"
			},
			"4803": {
				cn: "总编",
				en: "Editor-in-chief"
			},
			"4804": {
				cn: "副总编",
				en: "Subeditor"
			},
			"4805": {
				cn: "编辑主任",
				en: "Edit Director"
			},
			"4806": {
				cn: "编辑",
				en: "Edit"
			},
			"4801": {
				cn: "策划编辑",
				en: "Plans Editor"
			},
			"4810": {
				cn: "撰稿人",
				en: "Copywriter"
			},
			"4811": {
				cn: "采访主任",
				en: "Interviews Director"
			},
			"4807": {
				cn: "美术编辑",
				en: "Art Editor"
			},
			"4808": {
				cn: "发行主管",
				en: "Dispatch Manager"
			},
			"4809": {
				cn: "发行助理",
				en: "Dispatch Assistant"
			},
			"4812": {
				cn: "排版设计",
				en: "Layout Designer"
			},
			"4813": {
				cn: "校对/录入",
				en: "Proofreader/Data Entry Staff"
			},
			"4802": {
				cn: "出版/发行",
				en: "Publishing/Distribution"
			},
			"4899": {
				cn: "其他相关职位",
				en: "Other"
			},
			"1805": {
				cn: "工程监理",
				en: "Engineering superintendent"
			},
			"1809": {
				cn: "监理工程师",
				en: "Supervision Engineer"
			},
			"1810": {
				cn: "项目质量主管",
				en: "Project quality Manager"
			},
			"1803": {
				cn: "建筑设计工程/建筑师",
				en: "Architectural Design Engineering/Architect"
			},
			"1817": {
				cn: "注册建筑师",
				en: "Registered architect"
			},
			"1811": {
				cn: "结构工程师",
				en: "Structure Engineer"
			},
			"1824": {
				cn: "造价师",
				en: "Supervision Engineer"
			},
			"1808": {
				cn: "预决算师",
				en: "Pre-Clearing Division"
			},
			"1815": {
				cn: "预结算师",
				en: "Pre-Settlement Division"
			},
			"1816": {
				cn: "建造师",
				en: "Construction Master"
			},
			"1820": {
				cn: "软装设计师",
				en: "Soft attire Designer"
			},
			"1826": {
				cn: "室内工程师",
				en: "Indoor Engineers"
			},
			"1827": {
				cn: "室内设计师",
				en: "Interior Designers"
			},
			"1828": {
				cn: "外墙/幕墙设计师",
				en: "Outer wall/curtain wall designer"
			},
			"1822": {
				cn: "建筑工程验收师",
				en: "Construction Project Inspector"
			},
			"1829": {
				cn: "建筑工程师",
				en: "Construction Engineers"
			},
			"1830": {
				cn: "施工项目经理",
				en: "Construction Project Manager"
			},
			"1821": {
				cn: "土建工程师",
				en: "Construction Engineer"
			},
			"1804": {
				cn: "建筑制图工程师",
				en: "Architecture cartography"
			},
			"1823": {
				cn: "绘图员",
				en: "Plotter"
			},
			"1801": {
				cn: "投标主管",
				en: "Bids the manager"
			},
			"1802": {
				cn: "报批/报建专员",
				en: "Approval/reported to the Commissioner"
			},
			"1812": {
				cn: "路桥技术/隧道工程",
				en: "Route and Bridge tech/Tunnel Engineering"
			},
			"1813": {
				cn: "基建/岩土工程",
				en: "Capital construction"
			},
			"1814": {
				cn: "港口与航道工程",
				en: "Port and sea-route Engineering"
			},
			"1831": {
				cn: "设备工程师",
				en: "Equipment Engineer"
			},
			"1806": {
				cn: "管道(水、电)",
				en: "Pipeline/Refrigeration"
			},
			"1807": {
				cn: "给排水/供水(电)工程师",
				en: "Drainage/water(electric) supply Engineer"
			},
			"1818": {
				cn: "制冷暖通",
				en: "Refrigeration/Central heating"
			},
			"1832": {
				cn: "工程施工技术员",
				en: "Engineering technician"
			},
			"1825": {
				cn: "资料员",
				en: "File Clerk"
			},
			"1833": {
				cn: "工程文员",
				en: "Clerical work"
			},
			"1819": {
				cn: "工民建",
				en: "Industry/Civilian Architecture"
			},
			"1899": {
				cn: "其他相关职位",
				en: "Other"
			},
			"3810": {
				cn: "战略投资发展师",
				en: "Strategic investment and development division"
			},
			"3811": {
				cn: "前期专员",
				en: "Preliminary special commissioner"
			},
			"3812": {
				cn: "监察设计经理/主管",
				en: "Supervisory design Manager/Supervisor"
			},
			"3801": {
				cn: "房地产开发/策划经理",
				en: "Realty Development/Planning Manager"
			},
			"3802": {
				cn: "房地产开发/策划专员",
				en: "Real Estate Development/Planning Specialist"
			},
			"3813": {
				cn: "房产项目配套工程师",
				en: "Project engineer supporting"
			},
			"3814": {
				cn: "招标经理/主管",
				en: "Tender Manager/Supervisor"
			},
			"3815": {
				cn: "招标专员/助理",
				en: "Tender Commissioner/Assistant"
			},
			"3803": {
				cn: "房地产评估师",
				en: "Realty evaluation"
			},
			"3804": {
				cn: "房产测量员",
				en: "Property Surveyors"
			},
			"3805": {
				cn: "房地产中介",
				en: "Realty agency"
			},
			"3806": {
				cn: "房地产销售",
				en: "Real Estate Sales"
			},
			"3807": {
				cn: "商业地产策划师",
				en: "Commercial Real Estate Strategist"
			},
			"3816": {
				cn: "配套专员",
				en: "Commissioner support"
			},
			"3817": {
				cn: "招商经理/主管",
				en: "Investment Manager/Supervisor"
			},
			"3818": {
				cn: "招商专员/助理",
				en: "Investment Commissioner/Assistant"
			},
			"3819": {
				cn: "高级物业顾问/物业顾问",
				en: "Senior Property Advisor/Property Advisor"
			},
			"3820": {
				cn: "物业管理经理/主管",
				en: "Property Management Manager/Supervisor"
			},
			"3821": {
				cn: "物业管理专员/助理",
				en: "Property Management Clerk/Assistant"
			},
			"3808": {
				cn: "物业设施管理人员",
				en: "Infrastructure management"
			},
			"3824": {
				cn: "物业维修人员",
				en: "Property maintenance staff"
			},
			"3809": {
				cn: "物业招商/租赁/租售员",
				en: "Property Lease/Rent"
			},
			"3899": {
				cn: "其他相关职位",
				en: "Other"
			},
			"5801": {
				cn: "城市规划与设计",
				en: "Urban Design/Planning"
			},
			"5802": {
				cn: "园林监理",
				en: "Botanical garden overseeing"
			},
			"5803": {
				cn: "园艺/园林工程师",
				en: "Gardening/botanical garden Engineer"
			},
			"5804": {
				cn: "园艺/园林技术员",
				en: "Gardening/botanical garden Technician"
			},
			"5805": {
				cn: "园艺/园林设计师",
				en: "Gardenning Designer"
			},
			"5806": {
				cn: "景观设计师",
				en: "Landscape Designer"
			},
			"5807": {
				cn: "插花员",
				en: "Flower arrangement"
			},
			"5899": {
				cn: "其他相关职位",
				en: "Other"
			},
			"2205": {
				cn: "文化艺术",
				en: "Culture/Arts"
			},
			"2211": {
				cn: "教务管理人员",
				en: "Educational Facility Management"
			},
			"2212": {
				cn: "教练",
				en: "Coach"
			},
			"2201": {
				cn: "教授",
				en: "Professor"
			},
			"2202": {
				cn: "讲师",
				en: "Lecturer"
			},
			"2204": {
				cn: "助教",
				en: "Assistant"
			},
			"2206": {
				cn: "高等教育",
				en: "Higher Education"
			},
			"2207": {
				cn: "中级教育",
				en: "Intermediate Education"
			},
			"2209": {
				cn: "初级教育",
				en: "Primary Education"
			},
			"2208": {
				cn: "小学教育",
				en: "Grade school Education"
			},
			"2214": {
				cn: "幼儿教育",
				en: "Preschool Education"
			},
			"2215": {
				cn: "特殊教育",
				en: "Special Education"
			},
			"2210": {
				cn: "竞技/体育",
				en: "Sports"
			},
			"2213": {
				cn: "家教",
				en: "Family Education"
			},
			"2299": {
				cn: "其他相关职位",
				en: "Other"
			},
			"4503": {
				cn: "企业策划/顾问",
				en: "Enterprise Planning Consultant"
			},
			"4504": {
				cn: "企业管理顾问",
				en: "Enterprise management Consultant"
			},
			"4505": {
				cn: "涉外咨询师",
				en: "Internationalize Consultant"
			},
			"4506": {
				cn: "高级猎头顾问",
				en: "Senior Head-hunter"
			},
			"4501": {
				cn: "创业咨询师",
				en: "Business Consultant"
			},
			"4502": {
				cn: "职业指导员",
				en: "Professional Instructors"
			},
			"4507": {
				cn: "咨询总监",
				en: "Consultant Majordomo"
			},
			"4508": {
				cn: "咨询经理",
				en: "Consultant Manager"
			},
			"4509": {
				cn: "咨询员",
				en: "Consultation"
			},
			"4510": {
				cn: "信息中介",
				en: "Information agency"
			},
			"4511": {
				cn: "专业顾问",
				en: "Speciality Consultant"
			},
			"4512": {
				cn: "专业培训师",
				en: "Professional Trainer"
			},
			"4513": {
				cn: "情报信息分析人员",
				en: "Market Intelligence Analyst"
			},
			"4514": {
				cn: "营养顾问",
				en: "Nutrition Consultant"
			},
			"4515": {
				cn: "婚姻家庭咨询师",
				en: "Marriage and family Consultant"
			},
			"4599": {
				cn: "其他相关职位",
				en: "Other"
			},
			"4603": {
				cn: "律师",
				en: "Lawyer"
			},
			"4604": {
				cn: "法律顾问",
				en: "Counselor"
			},
			"4605": {
				cn: "法务人员",
				en: "Law clerk"
			},
			"4606": {
				cn: "律师助理",
				en: "Lawyer Assistant"
			},
			"4607": {
				cn: "书记员",
				en: "Secretary"
			},
			"4608": {
				cn: "知识产权顾问/专员",
				en: "Intellectual Property Consultants/Commissioner"
			},
			"4609": {
				cn: "专利顾问/专员",
				en: "Patent Consultants/Commissioner"
			},
			"4699": {
				cn: "其他相关职位",
				en: "Other"
			},
			"3301": {
				cn: "培训经理/主管",
				en: "Training Managers/Directors"
			},
			"3302": {
				cn: "培训专员",
				en: "Trains special Commissioner"
			},
			"3306": {
				cn: "培训师",
				en: "Trainer"
			},
			"3303": {
				cn: "职业教育/培训",
				en: "Vocational education/Training"
			},
			"3304": {
				cn: "计算机培训师",
				en: "Computer Trainer"
			},
			"3305": {
				cn: "英语培训师",
				en: "English Trainer"
			},
			"3399": {
				cn: "其他相关职位",
				en: "Other"
			},
			"2403": {
				cn: "医生/医师",
				en: "Doctor/Physician"
			},
			"2404": {
				cn: "牙科医生",
				en: "Dentist"
			},
			"2405": {
				cn: "心理医生",
				en: "Psychology doctor"
			},
			"2406": {
				cn: "外科医生",
				en: "Surgeon"
			},
			"2401": {
				cn: "内科医生",
				en: "Internist"
			},
			"2407": {
				cn: "预防医生",
				en: "Prevent doctor"
			},
			"2408": {
				cn: "护士/护理员",
				en: "Nurse"
			},
			"2412": {
				cn: "针灸推拿",
				en: "Acupuncture/message"
			},
			"2414": {
				cn: "妇幼保健",
				en: "Women/children heathcare"
			},
			"2415": {
				cn: "卫生防疫",
				en: "Sanitation/epidemic prevention"
			},
			"2409": {
				cn: "妇产科医生",
				en: "Accoucheur"
			},
			"2402": {
				cn: "理疗师",
				en: "Physical Therapist"
			},
			"2411": {
				cn: "药剂/中药/西药/药检师",
				en: "Medicament/Chinese traditional/Western medicine"
			},
			"2410": {
				cn: "药库主任/药剂师",
				en: "Pharmacist"
			},
			"2413": {
				cn: "临床医学",
				en: "Clinic iatrology"
			},
			"2416": {
				cn: "临床研究员",
				en: "Clinical Researcher"
			},
			"2417": {
				cn: "临床协调员",
				en: "Clinical Coodinator"
			},
			"2419": {
				cn: "兽医",
				en: "Farrier"
			},
			"2499": {
				cn: "其他相关职位",
				en: "Other"
			},
			"6601": {
				cn: "化学药剂/药品",
				en: "Chemistry medicament"
			},
			"6602": {
				cn: "生物制药",
				en: "Biology pharmacy"
			},
			"6603": {
				cn: "药品注册师",
				en: "Pharmaceuticals Register Specialist"
			},
			"6604": {
				cn: "药品生产/质量管理员",
				en: "Pharmaceutical Manufacturing/Quality Management"
			},
			"6611": {
				cn: "药品市场推广经理/主管",
				en: "Pharmaceutical Marketing Manager/Supervisor"
			},
			"6612": {
				cn: "药品市场推广专员",
				en: "Pharmaceutical Marketing Specialist"
			},
			"6613": {
				cn: "医药技术研发人员",
				en: "Pharmaceutical Technology R&D Specialist"
			},
			"6605": {
				cn: "医药技术研发管理人员",
				en: "Pharmaceutical Technology R&D Management"
			},
			"6606": {
				cn: "医药销售经理/主管",
				en: "Pharmaceutical Sales Manager"
			},
			"6607": {
				cn: "医药代表",
				en: "Curative agent"
			},
			"6608": {
				cn: "医药检验",
				en: "Medicine checker"
			},
			"6609": {
				cn: "医疗器械市场推广",
				en: "Medical Equipment Marketing"
			},
			"6610": {
				cn: "医疗器械销售",
				en: "Medical Equipment Sales"
			},
			"6699": {
				cn: "其他相关职位",
				en: "Other"
			},
			"5401": {
				cn: "保健/健美师",
				en: "Heathcare/Gymnasium"
			},
			"5402": {
				cn: "美容/化妆顾问",
				en: "Beauty/Cosmetics Consultant"
			},
			"5403": {
				cn: "美容师/助理",
				en: "Assistant beauty"
			},
			"5412": {
				cn: "化妆师",
				en: "Makeup artist"
			},
			"5404": {
				cn: "发型设计师",
				en: "Hairstyle Designer"
			},
			"5413": {
				cn: "发型助理/学徒",
				en: "Hair Stylist Assistant"
			},
			"5414": {
				cn: "验光师",
				en: "Optometrist"
			},
			"5405": {
				cn: "营养师",
				en: "Dietitian"
			},
			"5406": {
				cn: "美甲师",
				en: "Nail Specialist"
			},
			"5407": {
				cn: "健身教练/顾问",
				en: "Fitness Trainer/Consultant"
			},
			"5408": {
				cn: "瑜伽/舞蹈老师",
				en: "Yoga/Dance Instructor"
			},
			"5409": {
				cn: "瘦身顾问",
				en: "Thin Consultants"
			},
			"5410": {
				cn: "按摩/足疗",
				en: "Spa/Massage/Foot Care"
			},
			"5411": {
				cn: "宠物护理/美容",
				en: "Pet care"
			},
			"5499": {
				cn: "其他相关职位",
				en: "Other"
			},
			"2601": {
				cn: "化工技术应用",
				en: "Chemical Technical Application"
			},
			"2606": {
				cn: "光学工程师",
				en: "Optical Engineer"
			},
			"2602": {
				cn: "表面处理",
				en: "Surface Treatment"
			},
			"2603": {
				cn: "日用化工",
				en: "Daily-use chemical industry"
			},
			"2604": {
				cn: "生物化工",
				en: "Biochemical industry"
			},
			"2605": {
				cn: "造纸/废品处理",
				en: "Paper making/waster disposal"
			},
			"2617": {
				cn: "配色技术",
				en: "Color matching Technology"
			},
			"2615": {
				cn: "环保技术",
				en: "Environmental Technology"
			},
			"2607": {
				cn: "玻璃/硅酸盐工业",
				en: "Glass/Silicate industry"
			},
			"2608": {
				cn: "农药、化肥",
				en: "Pesticide/Chemical fertilizer"
			},
			"2609": {
				cn: "无机化工",
				en: "Abio-chemical"
			},
			"2610": {
				cn: "有机化工",
				en: "Organic chemical"
			},
			"2611": {
				cn: "精细化工",
				en: "Fine chemical"
			},
			"2612": {
				cn: "分析化工",
				en: "Analyse chemical"
			},
			"2616": {
				cn: "器械销售",
				en: "Equipment sales"
			},
			"2613": {
				cn: "高分子化工/化纤/新材料",
				en: "Macromolecule chemical/Chemical fibre/New materials"
			},
			"2614": {
				cn: "电镀化工",
				en: "Plating chemical"
			},
			"2699": {
				cn: "其他相关职位",
				en: "Other"
			},
			"1703": {
				cn: "水利、水电",
				en: "Irrigation works/water and electricity"
			},
			"1704": {
				cn: "核电、火电",
				en: "Nuclear-powered/fire-powered electricity"
			},
			"1705": {
				cn: "电厂、电力",
				en: "Power plant"
			},
			"1706": {
				cn: "制冷、暖通",
				en: "Refrigeration/Heating"
			},
			"1707": {
				cn: "空调、锅炉",
				en: "Air-conditioning/boiler"
			},
			"1708": {
				cn: "石油/天燃气/储运",
				en: "Petroleum/natural gas"
			},
			"1701": {
				cn: "太阳能",
				en: "Solar"
			},
			"1709": {
				cn: "城市燃气",
				en: "City gas"
			},
			"1799": {
				cn: "其他相关职位",
				en: "Other"
			},
			"2701": {
				cn: "酒店/宾馆经理",
				en: "Hotel/guesthouse Manager"
			},
			"2707": {
				cn: "大堂经理/副理",
				en: "Lobby manager"
			},
			"2708": {
				cn: "楼面经理/主任",
				en: "Floor manager/director"
			},
			"2709": {
				cn: "酒店管理主管",
				en: "Hotel manager"
			},
			"2702": {
				cn: "订票/订房服务员",
				en: "Reservations/booking Service"
			},
			"2706": {
				cn: "前台接待/礼仪/接线生",
				en: "Reception/Telephonist"
			},
			"2703": {
				cn: "服务员/侍者/门童",
				en: "Waiter/waitress"
			},
			"2704": {
				cn: "高级厨师",
				en: "Senior chef"
			},
			"2710": {
				cn: "西式面点师",
				en: "Western style pasta division"
			},
			"2711": {
				cn: "西式烹调师",
				en: "Western Cooker"
			},
			"2712": {
				cn: "中式面点师",
				en: "Chinese style pasta division"
			},
			"2713": {
				cn: "中式烹调师",
				en: "Chinese Cooker"
			},
			"2717": {
				cn: "营养配餐员",
				en: "Nutrition catering staff"
			},
			"2714": {
				cn: "调酒师",
				en: "Wine mixer"
			},
			"2715": {
				cn: "茶艺师",
				en: "Tea Specialist"
			},
			"2716": {
				cn: "娱乐/餐饮管理员",
				en: "Entertainment/dining Manager"
			},
			"2705": {
				cn: "导游",
				en: "Cicerone"
			},
			"2799": {
				cn: "其他相关职位",
				en: "Other"
			},
			"2802": {
				cn: "营业经理/主管/主任",
				en: "Does business Manager/Responsible/Director"
			},
			"2803": {
				cn: "营业员/服务员/店员",
				en: "Salesperson/waiter/clerk"
			},
			"2807": {
				cn: "监督员",
				en: "Supervisor"
			},
			"2804": {
				cn: "导购员",
				en: "Phasing leader"
			},
			"2806": {
				cn: "店长",
				en: "Innkeeper/shop manager"
			},
			"2805": {
				cn: "收银员",
				en: "Gathering"
			},
			"2808": {
				cn: "理货员",
				en: "Tally clerk"
			},
			"2801": {
				cn: "陈列员",
				en: "Exhibition"
			},
			"2809": {
				cn: "防损员",
				en: "Loss Prevention staff"
			},
			"2810": {
				cn: "保鲜员",
				en: "Fresh Member"
			},
			"2899": {
				cn: "其他相关职位",
				en: "Other"
			},
			"4303": {
				cn: "英语翻译",
				en: "English"
			},
			"4304": {
				cn: "日语翻译",
				en: "Japanese"
			},
			"4305": {
				cn: "法语翻译",
				en: "French"
			},
			"4306": {
				cn: "德语翻译",
				en: "German"
			},
			"4307": {
				cn: "俄语翻译",
				en: "Russian"
			},
			"4302": {
				cn: "意大利语翻译",
				en: "Italian"
			},
			"4309": {
				cn: "西班牙语翻译",
				en: "Spanish"
			},
			"4310": {
				cn: "葡萄牙语翻译",
				en: "Portuguese"
			},
			"4311": {
				cn: "阿拉伯语翻译",
				en: "Arabic"
			},
			"4308": {
				cn: "韩语翻译",
				en: "Korea"
			},
			"4312": {
				cn: "泰语翻译",
				en: "Thai"
			},
			"4301": {
				cn: "中国方言翻译",
				en: "Chinese dialect translation"
			},
			"4313": {
				cn: "手语翻译",
				en: "Sign language"
			},
			"4399": {
				cn: "其他相关职位",
				en: "Other"
			},
			"3001": {
				cn: "公务员",
				en: "Official"
			},
			"3002": {
				cn: "航空航天",
				en: "Aerospace"
			},
			"3003": {
				cn: "交通运输",
				en: "Traffic"
			},
			"3004": {
				cn: "声光技术",
				en: "Voice/Light tech."
			},
			"3005": {
				cn: "生物技术",
				en: "Boilogy tech."
			},
			"3006": {
				cn: "测绘技术",
				en: "Mapping tech."
			},
			"3007": {
				cn: "激光技术",
				en: "Laser tech."
			},
			"3008": {
				cn: "地质勘探",
				en: "Geology prove"
			},
			"3009": {
				cn: "矿产冶金",
				en: "Mine/metallurgy"
			},
			"3011": {
				cn: "环境工程",
				en: "Environment Engineering"
			},
			"3010": {
				cn: "农、林、牧、渔",
				en: "Farming/Lumber/Pasturage/Fishery"
			},
			"3099": {
				cn: "其他相关职位",
				en: "Other"
			}
		};
	module.exports = out;
});
