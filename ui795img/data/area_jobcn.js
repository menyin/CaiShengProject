/**
 * 数据字典包
 * @module jobcn.data
 */

define(function(require, exports, module) {
	/**
	 * 地区数据
	 * @method area
	 * @for data
	 * @return {Object} 由地区数据组成的对象，默认冻结
	 */


	var out = {
		list: ["30","25","28","23","29","26","13","11","12","14", "24","31", "35", "33", "22", "18", "15", "41", "16", "27", "17", "19", "37", "38", "20", "21", "36", "34",  "40", "39", "32",   "42","43","44", "45", "99"],
		//深圳 广州 东莞 惠州 佛山 中山 珠海 江门
		hot:["3010", "3001", "3002", "3015", "3008", "3019", "3022", "3009"],
		PYLIST:{
			ABCF:[24,44,11,14,28],
			G:[30,31,35,33,45],
			H:[29,26,22,18,15,41],
			JLNQ:[16,23,27,17,19,37,38],
			S:[13,20,21,36,34],
			TXYZ:[12,42,40,43,39,32,25]
		},
		ENLIST:{
			ABCF:[24,11,14,28],
			G:[30,31,35,33,45],
			H:[29,26,22,18,15,41,43],
			JLNQ:[16,23,27,17,19,37,44,38],
			S:[13,20,21,36,34],
			TXYZ:[12,42,40,39,32,25]
		},
			"24": {
				cn: "安徽",
				py: "Anhui",
				child: ["2401", "2406", "2416", "2402", "2408", "2403", "2410", "2404", "2405", "2407", "2409", "2411", "2412", "2413", "2414", "2415", "2418", "2499"],
				en: "Anhui"
			},
			"11": {
				cn: "北京",
				py: "Beijing",
				en: "Beijing"
			},
			"14": {
				cn: "重庆",
				py: "Chongqing",
				en: "Chongqing"
			},
			"28": {
				cn: "福建",
				py: "Fujian",
				child: ["2801", "2805", "2806", "2808", "2807", "2810", "2803", "2802", "2811", "2804", "2809", "2812", "2899"],
				en: "Fujian"
			},
			"44": {
				cn: "澳门",
				py: "Aomen",
				//child: ["4401"],
				en: "Macao"
			},
			"30": {
				cn: "广东",
				py: "Guangdong",
				child: ["3001", "3010", "3002", "3019", "3008", "3022", "3015", "3014", "3017", "3004", "3005", "3009", "3006", "3007", "3020", "3018", "3003", "3011", "3012", "3013", "3016", "3021", "3099"],
				en: "Guangdong"
			},
			"31": {
				cn: "广西",
				py: "Guangxi",
				child: ["3101", "3104", "3103", "3105", "3112", "3109", "3102", "3113", "3106", "3107", "3108", "3110", "3111", "3199"],
				en: "Guangxi"
			},
			"35": {
				cn: "甘肃",
				py: "Gansu",
				child: ["3501", "3509", "3502", "3503", "3504", "3505", "3506", "3507", "3508", "3510", "3511", "3512", "3599"],
				en: "Gansu"
			},
			"33": {
				cn: "贵州",
				py: "Guizhou",
				child: ["3301", "3309", "3302", "3303", "3304", "3305", "3306", "3307", "3308", "3399"],
				en: "Guizhou"
			},
			"29": {
				cn: "湖南",
				py: "Hunan",
				child: ["2901", "2902", "2906", "2904", "2911", "2917", "2920", "2903", "2907", "2908", "2909", "2910", "2912", "2913", "2914", "2915", "2916", "2905", "2918", "2919", "2921", "2922", "2999"],
				en: "Hunan"
			},
			"26": {
				cn: "湖北",
				py: "Hubei",
				child: ["2601", "2614", "2602", "2610", "2613", "2615", "2616", "2617", "2618", "2619", "2620", "2621", "2622", "2623", "2624", "2625", "2626", "2627", "2628", "2629", "2630", "2603", "2604", "2605", "2606", "2607", "2608", "2609", "2611", "2612", "2699"],
				en: "Hubei"
			},
			"22": {
				cn: "河南",
				py: "Henan",
				child: ["2201", "2207", "2209", "2203", "2202", "2204", "2205", "2206", "2210", "2211", "2212", "2213", "2214", "2215", "2216", "2217", "2218", "2208", "2299"],
				en: "Henan"
			},
			"18": {
				cn: "河北",
				py: "Hebei",
				child: ["1801", "1804", "1809", "1818", "1816", "1802", "1803", "1805", "1806", "1807", "1808", "1810", "1811", "1812", "1813", "1814", "1815", "1817", "1819", "1899"],
				en: "Hebei"
			},
			"15": {
				cn: "黑龙江",
				py: "Heilongjiang",
				child: ["1501", "1506", "1511", "1515", "1514", "1502", "1503", "1504", "1505", "1507", "1508", "1509", "1510", "1512", "1513", "1516", "1517", "1518", "1599"],
				en: "Heilongjiang"
			},
			"41": {
				cn: "海南",
				py: "Hainan",
				child: ["4101", "4102", "4103", "4104", "4199"],
				en: "Hainan"
			},
			"16": {
				cn: "吉林",
				py: "Jilin",
				child: ["1601", "1603", "1609", "1602", "1604", "1605", "1606", "1607", "1608", "1610", "1611", "1612", "1613", "1614", "1615", "1616", "1617", "1618", "1699"],
				en: "Jilin"
			},
			"23": {
				cn: "江苏",
				py: "Jiangsu",
				child: ["2301", "2305", "2314", "2320", "2303", "2302", "2311", "2315", "2317", "2306", "2307", "2308", "2309", "2310", "2312", "2313", "2304", "2316", "2318", "2319", "2321", "2322", "2323", "2324", "2399"],
				en: "Jiangsu"
			},
			"27": {
				cn: "江西",
				py: "Jiangxi",
				child: ["2701", "2703", "2702", "2705", "2706", "2707", "2708", "2709", "2710", "2711", "2712", "2713", "2704", "2799"],
				en: "Jiangxi"
			},
			"17": {
				cn: "辽宁",
				py: "Liaoning",
				child: ["1701", "1702", "1703", "1705", "1706", "1714", "1707", "1708", "1709", "1710", "1711", "1712", "1713", "1715", "1716", "1717", "1718", "1719", "1704", "1799"],
				en: "Liaoning"
			},
			"19": {
				cn: "内蒙古",
				py: "Neimenggu",
				child: ["1901", "1906", "1910", "1902", "1903", "1904", "1905", "1907", "1908", "1909", "1911", "1912", "1913", "1914", "1915", "1916", "1917", "1999"],
				en: "Innermongolia"
			},
			"37": {
				cn: "宁夏",
				py: "Ningxia",
				child: ["3701", "3702", "3703", "3704","3705", "3799"],
				en: "Ningxia"
			},
			"38": {
				cn: "青海",
				py: "Qinghai",
				child: ["3801", "3802", "3803", "3804", "3899"],
				en: "Qinghai"
			},
			"13": {
				cn: "上海",
				py: "Shanghai",
				en: "Shanghai"
			},
			"20": {
				cn: "山东",
				py: "Shandong",
				child: ["2001", "2007", "2006", "2003", "2016", "2022", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2002", "2017", "2018", "2019", "2020", "2021", "2004", "2005", "2023", "2099"],
				en: "Shandong"
			},
			"21": {
				cn: "山西",
				py: "Shanxi",
				child: ["2101", "2107", "2102", "2103", "2104", "2105", "2106", "2108", "2109", "2110", "2199"],
				en: "Shanxi"
			},
			"36": {
				cn: "陕西",
				py: "Shanxi",
				child: ["3601", "3605", "3607", "3608", "3602", "3603", "3604", "3609", "3606", "3699"],
				en: "Shanxi"
			},
			"34": {
				cn: "四川",
				py: "Sichuan",
				child: ["3401", "3406", "3409", "3408", "3411", "3402", "3403", "3404", "3405", "3407", "3412", "3413", "3414", "3415", "3416", "3417", "3410", "3499"],
				en: "Sichuan"
			},
			"12": {
				cn: "天津",
				py: "Tianjin",
				en: "Tianjin"
			},
			"40": {
				cn: "西藏",
				py: "Xizang",
				child: ["4001", "4002", "4099"],
				en: "Xizang"
			},
			"39": {
				cn: "新疆",
				py: "Xinjiang",
				child: ["3901", "3902", "3911", "3903", "3904", "3905", "3906", "3907", "3908", "3909", "3910", "3912", "3913", "3914", "3915", "3916", "3999"],
				en: "Xinjiang"
			},
			"32": {
				cn: "云南",
				py: "Yunnan",
				child: ["3201", "3202", "3204", "3212", "3206", "3211", "3203", "3207", "3208", "3209", "3210", "3205", "3213", "3299"],
				en: "Yunnan"
			},
			"25": {
				cn: "浙江",
				py: "Zhejiang",
				child: ["2502", "2517", "2526", "2523", "2509", "2506", "2512", "2519", "2520", "2503", "2504", "2505", "2501", "2507", "2508", "2513", "2514", "2515", "2516", "2510", "2511", "2518", "2524", "2525", "2521", "2529", "2522", "2527", "2528", "2599"],
				en: "Zhejiang"
			},
			"43": {
				cn: "香港",
				py: "Xianggang",
				//child: ["4301"],
				en: "Hongkong"
			},
			"42": {
				cn: "台湾",
				py: "Taiwan",
				child: ["4201", "4202", "4203", "4204", "4299"],
				en: "Taiwan"
			},
			"45": {
				cn: "国外",
				py: "Guowai",
				child: ["4501"],
				en: "Overseas"
			},
			"99": {
				cn: "其他",
				py: "Qita",
				child: ["9901"],
				en: "Other"
			},
			"2401": {
				cn: "合肥",
				py: "Hefei",
				en: "Hefei"
			},
			"2406": {
				cn: "芜湖",
				py: "Wuhu",
				en: "Wuhu"
			},
			"2416": {
				cn: "马鞍山",
				py: "Maanshan",
				en: "Maanshan"
			},
			"2402": {
				cn: "蚌埠",
				py: "Bengbu",
				en: "Bengbu"
			},
			"2408": {
				cn: "铜陵",
				py: "Tongling",
				en: "Tongling"
			},
			"2403": {
				cn: "淮北",
				py: "Huaibei",
				en: "Huaibei"
			},
			"2410": {
				cn: "淮南",
				py: "Huainan",
				en: "Huainan"
			},
			"2404": {
				cn: "亳州",
				py: "Bozhou",
				en: "Bozhou"
			},
			"2405": {
				cn: "巢湖",
				py: "Chaohu",
				en: "Chaohu"
			},
			"2407": {
				cn: "黄山",
				py: "Huangshan",
				en: "Huangshan"
			},
			"2409": {
				cn: "歙县",
				py: "Shexian",
				en: "Shexian"
			},
			"2411": {
				cn: "宿州",
				py: "Ahsuzhou",
				en: "Ahsuzhou"
			},
			"2412": {
				cn: "阜阳",
				py: "Fuyang",
				en: "Fuyang"
			},
			"2413": {
				cn: "六安",
				py: "Liuan",
				en: "Liuan"
			},
			"2414": {
				cn: "滁州",
				py: "Chuzhou",
				en: "Chuzhou"
			},
			"2415": {
				cn: "宣州",
				py: "Xuanzhou",
				en: "Xuanzhou"
			},
			"2418": {
				cn: "安庆",
				py: "Anqing",
				en: "Anqing"
			},
			"2499": {
				cn: "其他",
				py: "Qita",
				en: "Other"
			},
			"2801": {
				cn: "福州",
				py: "Fuzhou",
				en: "Fuzhou"
			},
			"2805": {
				cn: "厦门",
				py: "Xiamen",
				en: "Xiamen"
			},
			"2806": {
				cn: "泉州",
				py: "Quanzhou",
				en: "Quanzhou"
			},
			"2808": {
				cn: "漳州",
				py: "Zhangzhou",
				en: "Zhangzhou"
			},
			"2807": {
				cn: "石狮",
				py: "Shishi",
				en: "Shishi"
			},
			"2810": {
				cn: "三明",
				py: "Sanming",
				en: "Sanming"
			},
			"2803": {
				cn: "南平",
				py: "Nanping",
				en: "Nanping"
			},
			"2802": {
				cn: "莆田",
				py: "Putian",
				en: "Putian"
			},
			"2811": {
				cn: "永安",
				py: "Yongan",
				en: "Yongan"
			},
			"2804": {
				cn: "邵武",
				py: "Shaowu",
				en: "Shaowu"
			},
			"2809": {
				cn: "龙岩",
				py: "Longyan",
				en: "Longyan"
			},
			"2812": {
				cn: "宁德",
				py: "Ningde",
				en: "Ningde"
			},
			"2899": {
				cn: "其他",
				py: "Qita",
				en: "Other"
			},
			"4401": {
				cn: "澳门",
				py: "Aomen",
				en: "Macao"
			},
			"3001": {
				cn: "广州",
				py: "Guangzhou",
				en: "Guangzhou",
				child: ["300101","300102","300103","300104","300105","300106","300107","300108","300109","300110","300111","300112"]
			},
			"3010": {
				cn: "深圳",
				py: "Shenzhen",
				en: "Shenzhen",
				child: ["301001","301002","301003","301004","301005","301006","301007","301008","301009","301010"]
			},
			"3002": {
				cn: "东莞",
				py: "Dongguan",
				en: "Dongguan",
				child: ["300201","300202","300203","300204","300205","300206","300207","300208","300209","300210","300211","300212","300213","300214","300215","300216","300217","300218","300219","300220","300221","300222","300223","300224","300225","300226","300227","300228","300229","300230","300231","300232","300233"]
			},
			"3019": {
				cn: "中山",
				py: "Zhongshan",
				en: "Zhongshan",
				child: ["301901","301902","301903","301904","301905","301906","301907","301908","301909","301910","301911","301912","301913","301914","301915","301916","301917","301918","301919","301920","301921","301922","301923","301924"]
			},
			"3008": {
				cn: "佛山",
				py: "Foshan",
				en: "Foshan",
				child: ["300801","300802","300803","300804","300805"]
			},
			"3022": {
				cn: "珠海",
				py: "Zhuhai",
				en: "Zhuhai",
				child: ["302201","302202","302203","302204"]
			},
			"3015": {
				cn: "惠州",
				py: "Huizhou",
				en: "Huizhou",
				child: ["301501","301502","301503","301504","301505"]
			},
			"3014": {
				cn: "汕头",
				py: "Shantou",
				en: "Shantou",
				child: ["301401","301402","301403","301404","301405","301406","301407"]
			},
			"3017": {
				cn: "湛江",
				py: "Zhanjiang",
				en: "Zhanjiang"
			},
			"3004": {
				cn: "潮州",
				py: "Chaozhou",
				en: "Chaozhou"
			},
			"3005": {
				cn: "潮阳",
				py: "Chaoyang",
				en: "Chaoyang"
			},
			"3009": {
				cn: "江门",
				py: "Jiangmen",
				en: "Jiangmen",
				child: ["300901","300902","300903","300904","300905","300906","300907"]
			},
			"3006": {
				cn: "汕尾",
				py: "Shanwei",
				en: "Shanwei"
			},
			"3007": {
				cn: "茂名",
				py: "Maoming",
				en: "Maoming"
			},
			"3020": {
				cn: "阳江",
				py: "Yangjiang",
				en: "Yangjiang"
			},
			"3018": {
				cn: "肇庆",
				py: "Zhaoqing",
				en: "Zhaoqing",
				child: ["301801","301802","301803","301804","301805","301806","301807","301808"]
			},
			"3003": {
				cn: "梅州",
				py: "Meizhou",
				en: "Meizhou"
			},
			"3011": {
				cn: "云浮",
				py: "Yunfu",
				en: "Yunfu"
			},
			"3012": {
				cn: "清远",
				py: "Qingyuan",
				en: "Qingyuan"
			},
			"3013": {
				cn: "韶关",
				py: "Shaoguan",
				en: "Shaoguan"
			},
			"3016": {
				cn: "河源",
				py: "Heyuan",
				en: "Heyuan"
			},
			"3021": {
				cn: "揭阳",
				py: "Jieyang",
				en: "Jieyang"
			},
			"3099": {
				cn: "其他",
				py: "Qita",
				en: "Other"
			},
			"3101": {
				cn: "南宁",
				py: "Nanning",
				en: "Nanning"
			},
			"3104": {
				cn: "桂林",
				py: "Guilin",
				en: "Guilin"
			},
			"3103": {
				cn: "北海",
				py: "Beihai",
				en: "Beihai"
			},
			"3105": {
				cn: "柳州",
				py: "Liuzhou",
				en: "Liuzhou"
			},
			"3112": {
				cn: "来宾",
				py: "Laibin",
				en: "Laibin"
			},
			"3109": {
				cn: "玉林",
				py: "Yulin",
				en: "Yulin"
			},
			"3102": {
				cn: "百色",
				py: "Baise",
				en: "Baise"
			},
			"3113": {
				cn: "贺州",
				py: "Hezhou",
				en: "Hezhou"
			},
			"3106": {
				cn: "河池",
				py: "Hechi",
				en: "Hechi"
			},
			"3107": {
				cn: "凭祥",
				py: "Pingxiang",
				en: "Pingxiang"
			},
			"3108": {
				cn: "钦州",
				py: "Qinzhou",
				en: "Qinzhou"
			},
			"3110": {
				cn: "梧州",
				py: "Wuzhou",
				en: "Wuzhou"
			},
			"3111": {
				cn: "合山",
				py: "Heshan",
				en: "Heshan"
			},
			"3199": {
				cn: "其他",
				py: "Qita",
				en: "Other"
			},
			"3501": {
				cn: "兰州",
				py: "Lanzhou",
				en: "Lanzhou"
			},
			"3509": {
				cn: "酒泉",
				py: "Jiuquan",
				en: "Jiuquan"
			},
			"3502": {
				cn: "临夏",
				py: "Linxia",
				en: "Linxia"
			},
			"3503": {
				cn: "张掖",
				py: "Zhangye",
				en: "Zhangye"
			},
			"3504": {
				cn: "嘉峪关",
				py: "Jiayuguan",
				en: "Jiayuguan"
			},
			"3505": {
				cn: "金昌",
				py: "Jinchang",
				en: "Jinchang"
			},
			"3506": {
				cn: "平凉",
				py: "Pingliang",
				en: "Pingliang"
			},
			"3507": {
				cn: "白银",
				py: "Baiyin",
				en: "Baiyin"
			},
			"3508": {
				cn: "武威",
				py: "Wuwei",
				en: "Wuwei"
			},
			"3510": {
				cn: "玉门",
				py: "Yumen",
				en: "Yumen"
			},
			"3511": {
				cn: "天水",
				py: "Tianshui",
				en: "Tianshui"
			},
			"3512": {
				cn: "西峰",
				py: "Xifeng",
				en: "Xifeng"
			},
			"3599": {
				cn: "其他",
				py: "Qita",
				en: "Other"
			},
			"3301": {
				cn: "贵阳",
				py: "Guiyang",
				en: "Guiyang"
			},
			"3309": {
				cn: "遵义",
				py: "Zunyi",
				en: "Zunyi"
			},
			"3302": {
				cn: "铜仁",
				py: "Tongren",
				en: "Tongren"
			},
			"3303": {
				cn: "都匀",
				py: "Duyun",
				en: "Duyun"
			},
			"3304": {
				cn: "兴义",
				py: "Xingyi",
				en: "Xingyi"
			},
			"3305": {
				cn: "赤水",
				py: "Chishui",
				en: "Chishui"
			},
			"3306": {
				cn: "六盘水",
				py: "Liupanshui",
				en: "Liupanshui"
			},
			"3307": {
				cn: "凯里",
				py: "Kaili",
				en: "Kaili"
			},
			"3308": {
				cn: "安顺",
				py: "Anshun",
				en: "Anshun"
			},
			"3399": {
				cn: "其他",
				py: "Qita",
				en: "Other"
			},
			"2901": {
				cn: "长沙",
				py: "Changsha",
				en: "Changsha"
			},
			"2902": {
				cn: "湘潭",
				py: "Xiangtang",
				en: "Xiangtang"
			},
			"2906": {
				cn: "岳阳",
				py: "Yueyang",
				en: "Yueyang"
			},
			"2904": {
				cn: "株洲",
				py: "Zhuzhou",
				en: "Zhuzhou"
			},
			"2911": {
				cn: "张家界",
				py: "Zhangjiajie",
				en: "Zhangjiajie"
			},
			"2917": {
				cn: "衡阳",
				py: "Hengyang",
				en: "Hengyang"
			},
			"2920": {
				cn: "郴州",
				py: "Chenzhou",
				en: "Chenzhou"
			},
			"2903": {
				cn: "湘乡",
				py: "Xiangxiang",
				en: "Xiangxiang"
			},
			"2907": {
				cn: "汨罗",
				py: "Miluo",
				en: "Miluo"
			},
			"2908": {
				cn: "常德",
				py: "Changde",
				en: "Changde"
			},
			"2909": {
				cn: "津市",
				py: "Jinshi",
				en: "Jinshi"
			},
			"2910": {
				cn: "吉首",
				py: "Jishou",
				en: "Jishou"
			},
			"2912": {
				cn: "娄底",
				py: "Loudi",
				en: "Loudi"
			},
			"2913": {
				cn: "涟源",
				py: "Lianyuan",
				en: "Lianyuan"
			},
			"2914": {
				cn: "冷水江",
				py: "Lengshuijiang",
				en: "Lengshuijiang"
			},
			"2915": {
				cn: "怀化",
				py: "Huaihua",
				en: "Huaihua"
			},
			"2916": {
				cn: "洪江",
				py: "Hongjiang",
				en: "Hongjiang"
			},
			"2905": {
				cn: "益阳",
				py: "Yiyang",
				en: "Yiyang"
			},
			"2918": {
				cn: "耒阳",
				py: "Leiyang",
				en: "Leiyang"
			},
			"2919": {
				cn: "邵阳",
				py: "Shaoyang",
				en: "Shaoyang"
			},
			"2921": {
				cn: "永州",
				py: "Yongzhou",
				en: "Yongzhou"
			},
			"2922": {
				cn: "冷水滩",
				py: "Lengshuitan",
				en: "Lengshuitan"
			},
			"2999": {
				cn: "其他",
				py: "Qita",
				en: "Other"
			},
			"2601": {
				cn: "武汉",
				py: "Wuhan",
				en: "Wuhan"
			},
			"2614": {
				cn: "宜昌",
				py: "Yichang",
				en: "Yichang"
			},
			"2602": {
				cn: "孝感",
				py: "Xiaogan",
				en: "Xiaogan"
			},
			"2610": {
				cn: "荆州",
				py: "Jingzhou",
				en: "Jingzhou"
			},
			"2613": {
				cn: "襄樊",
				py: "Xiangfan",
				en: "Xiangfan"
			},
			"2615": {
				cn: "老河口",
				py: "Laohekou",
				en: "Laohekou"
			},
			"2616": {
				cn: "枝城",
				py: "Zhicheng",
				en: "Zhicheng"
			},
			"2617": {
				cn: "枣阳",
				py: "Zaoyang",
				en: "Zaoyang"
			},
			"2618": {
				cn: "荆门",
				py: "Jinmen",
				en: "Jinmen"
			},
			"2619": {
				cn: "宜城",
				py: "Yicheng",
				en: "Yicheng"
			},
			"2620": {
				cn: "黄石",
				py: "Huangshi",
				en: "Huangshi"
			},
			"2621": {
				cn: "鄂州",
				py: "Ezhou",
				en: "Ezhou"
			},
			"2622": {
				cn: "黄冈",
				py: "Huanggang",
				en: "Huanggang"
			},
			"2623": {
				cn: "咸宁",
				py: "Xianning",
				en: "Xianning"
			},
			"2624": {
				cn: "武穴",
				py: "Wuxue",
				en: "Wuxue"
			},
			"2625": {
				cn: "蒲昕",
				py: "Puqi",
				en: "Puqi"
			},
			"2626": {
				cn: "麻城",
				py: "Macheng",
				en: "Macheng"
			},
			"2627": {
				cn: "十堰",
				py: "Shiyan",
				en: "Shiyan"
			},
			"2628": {
				cn: "恩施",
				py: "Ensi",
				en: "Ensi"
			},
			"2629": {
				cn: "丹江口",
				py: "Danjiangkou",
				en: "Danjiangkou"
			},
			"2630": {
				cn: "利川",
				py: "Lichuan",
				en: "Lichuan"
			},
			"2603": {
				cn: "天门",
				py: "Tianmen",
				en: "Tianmen"
			},
			"2604": {
				cn: "汉川",
				py: "Huanchuan",
				en: "Huanchuan"
			},
			"2605": {
				cn: "洪湖",
				py: "Honghu",
				en: "Honghu"
			},
			"2606": {
				cn: "应城",
				py: "Yingcheng",
				en: "Yingcheng"
			},
			"2607": {
				cn: "潜江",
				py: "Qianjiang",
				en: "Qianjiang"
			},
			"2608": {
				cn: "安陆",
				py: "Anlu",
				en: "Anlu"
			},
			"2609": {
				cn: "仙桃",
				py: "Xiantao",
				en: "Xiantao"
			},
			"2611": {
				cn: "随州",
				py: "Suizhou",
				en: "Suizhou"
			},
			"2612": {
				cn: "石首",
				py: "Shishou",
				en: "Shishou"
			},
			"2699": {
				cn: "其他",
				py: "Qita",
				en: "Other"
			},
			"2201": {
				cn: "郑州",
				py: "Zhengzhou",
				en: "Zhengzhou"
			},
			"2207": {
				cn: "洛阳",
				py: "Luoyang",
				en: "Luoyang"
			},
			"2209": {
				cn: "开封",
				py: "Kaifeng",
				en: "Kaifeng"
			},
			"2203": {
				cn: "鹤壁",
				py: "Hebi",
				en: "Hebi"
			},
			"2202": {
				cn: "焦作",
				py: "Jiaozuo",
				en: "Jiaozuo"
			},
			"2204": {
				cn: "许昌",
				py: "Xuchang",
				en: "Xuchang"
			},
			"2205": {
				cn: "驻马店",
				py: "Zhumadian",
				en: "Zhumadian"
			},
			"2206": {
				cn: "周口",
				py: "Zhoukou",
				en: "Zhoukou"
			},
			"2210": {
				cn: "新乡",
				py: "Xinxiang",
				en: "Xinxiang"
			},
			"2211": {
				cn: "安阳",
				py: "Anyang",
				en: "Anyang"
			},
			"2212": {
				cn: "濮阳",
				py: "Puyang",
				en: "Puyang"
			},
			"2213": {
				cn: "漯河",
				py: "Luohe",
				en: "Luohe"
			},
			"2214": {
				cn: "信阳",
				py: "Xinyang",
				en: "Xinyang"
			},
			"2215": {
				cn: "平顶山",
				py: "Pingdingshan",
				en: "Pingdingshan"
			},
			"2216": {
				cn: "三门峡",
				py: "Sanmenxia",
				en: "Sanmenxia"
			},
			"2217": {
				cn: "南阳",
				py: "Nanyang",
				en: "Nanyang"
			},
			"2218": {
				cn: "商丘",
				py: "Shangqiu",
				en: "Shangqiu"
			},
			"2208": {
				cn: "义马",
				py: "Yima",
				en: "Yima"
			},
			"2299": {
				cn: "其他",
				py: "Qita",
				en: "Other"
			},
			"1801": {
				cn: "石家庄",
				py: "Shijiazhuang",
				en: "Shijiazhuang"
			},
			"1804": {
				cn: "邯郸",
				py: "Handan",
				en: "Handan"
			},
			"1809": {
				cn: "保定",
				py: "Baoding",
				en: "Baoding"
			},
			"1818": {
				cn: "张家口",
				py: "Zhangjiakou",
				en: "Zhangjiakou"
			},
			"1816": {
				cn: "秦皇岛",
				py: "Qinhuangdao",
				en: "Qinhuangdao"
			},
			"1802": {
				cn: "辛集",
				py: "Xinji",
				en: "Xinji"
			},
			"1803": {
				cn: "邢台",
				py: "Xingtai",
				en: "Xingtai"
			},
			"1805": {
				cn: "泊头",
				py: "Botou",
				en: "Botou"
			},
			"1806": {
				cn: "唐山",
				py: "Tangshan",
				en: "Tangshan"
			},
			"1807": {
				cn: "北戴河",
				py: "Beidaihe",
				en: "Beidaihe"
			},
			"1808": {
				cn: "廊坊",
				py: "Langfang",
				en: "Langfang"
			},
			"1810": {
				cn: "定州",
				py: "Dingzhou",
				en: "Dingzhou"
			},
			"1811": {
				cn: "南宫",
				py: "Nangong",
				en: "Nangong"
			},
			"1812": {
				cn: "衡水",
				py: "Hengshui",
				en: "Hengshui"
			},
			"1813": {
				cn: "沙河",
				py: "Shahe",
				en: "Shahe"
			},
			"1814": {
				cn: "沧州",
				py: "Cangzhou",
				en: "Cangzhou"
			},
			"1815": {
				cn: "任丘",
				py: "Renqiu",
				en: "Renqiu"
			},
			"1817": {
				cn: "承德",
				py: "Chengde",
				en: "Chengde"
			},
			"1819": {
				cn: "涿州",
				py: "Zhuozhou",
				en: "Zhuozhou"
			},
			"1899": {
				cn: "其他",
				py: "Qita",
				en: "Other"
			},
			"1501": {
				cn: "哈尔滨",
				py: "Haerbin",
				en: "Haerbin"
			},
			"1506": {
				cn: "佳木斯",
				py: "Jiamusi",
				en: "Jiamusi"
			},
			"1511": {
				cn: "牡丹江",
				py: "Mudanjiang",
				en: "Mudanjiang"
			},
			"1515": {
				cn: "大庆",
				py: "Daqing",
				en: "Daqing"
			},
			"1514": {
				cn: "齐齐哈尔",
				py: "Qiqihaer",
				en: "Qiqihaer"
			},
			"1502": {
				cn: "阿城",
				py: "Acheng",
				en: "Acheng"
			},
			"1503": {
				cn: "肇东",
				py: "Zhaodong",
				en: "Zhaodong"
			},
			"1504": {
				cn: "绥化",
				py: "Suihua",
				en: "Suihua"
			},
			"1505": {
				cn: "伊春",
				py: "Yichun",
				en: "Yichun"
			},
			"1507": {
				cn: "鹤岗",
				py: "Hegang",
				en: "Hegang"
			},
			"1508": {
				cn: "七台河",
				py: "Qitaihe",
				en: "Qitaihe"
			},
			"1509": {
				cn: "双鸭山",
				py: "Shuangyashan",
				en: "Shuangyashan"
			},
			"1510": {
				cn: "同江",
				py: "Tongjiang",
				en: "Tongjiang"
			},
			"1512": {
				cn: "绥汾河",
				py: "Suifenhe",
				en: "Suifenhe"
			},
			"1513": {
				cn: "鸡西",
				py: "Jixi",
				en: "Jixi"
			},
			"1516": {
				cn: "北安",
				py: "Beian",
				en: "Beian"
			},
			"1517": {
				cn: "黑河",
				py: "Heihe",
				en: "Heihe"
			},
			"1518": {
				cn: "五大连池",
				py: "Wudalianchi",
				en: "Wudalianchi"
			},
			"1599": {
				cn: "其他",
				py: "Qita",
				en: "Other"
			},
			"4101": {
				cn: "海口",
				py: "Haikou",
				en: "Haikou"
			},
			"4102": {
				cn: "三亚",
				py: "Sanya",
				en: "Sanya"
			},
			"4103": {
				cn: "琼海",
				py: "Qionghai",
				en: "Qionghai"
			},
			"4104": {
				cn: "通什",
				py: "Tongza",
				en: "Tongza"
			},
			"4199": {
				cn: "其他",
				py: "Qita",
				en: "Other"
			},
			"1601": {
				cn: "长春",
				py: "Changchun",
				en: "Changchun"
			},
			"1603": {
				cn: "吉林",
				py: "Jilin",
				en: "Jilin"
			},
			"1609": {
				cn: "通化",
				py: "Tonghua",
				en: "Tonghua"
			},
			"1602": {
				cn: "扶余",
				py: "Fuyu",
				en: "Fuyu"
			},
			"1604": {
				cn: "桦甸",
				py: "Huadian",
				en: "Huadian"
			},
			"1605": {
				cn: "延吉",
				py: "Yanji",
				en: "Yanji"
			},
			"1606": {
				cn: "图门",
				py: "Tumen",
				en: "Tumen"
			},
			"1607": {
				cn: "龙井",
				py: "Longjin",
				en: "Longjin"
			},
			"1608": {
				cn: "敦化",
				py: "Dunhua",
				en: "Dunhua"
			},
			"1610": {
				cn: "集安",
				py: "Jian",
				en: "Jian"
			},
			"1611": {
				cn: "浑江",
				py: "Hunjiang",
				en: "Hunjiang"
			},
			"1612": {
				cn: "梅河口",
				py: "Meihekou",
				en: "Meihekou"
			},
			"1613": {
				cn: "四平",
				py: "Siping",
				en: "Siping"
			},
			"1614": {
				cn: "公主岭",
				py: "Gongzhuling",
				en: "Gongzhuling"
			},
			"1615": {
				cn: "辽源",
				py: "Liaoyuan",
				en: "Liaoyuan"
			},
			"1616": {
				cn: "白城",
				py: "Baicheng",
				en: "Baicheng"
			},
			"1617": {
				cn: "洮南",
				py: "Taonan",
				en: "Taonan"
			},
			"1618": {
				cn: "九台",
				py: "Jiutai",
				en: "Jiutai"
			},
			"1699": {
				cn: "其他",
				py: "Qita",
				en: "Other"
			},
			"2301": {
				cn: "南京",
				py: "Nanjing",
				en: "Nanjing"
			},
			"2305": {
				cn: "苏州",
				py: "Suzhou",
				en: "Suzhou"
			},
			"2314": {
				cn: "无锡",
				py: "Wuxi",
				en: "Wuxi"
			},
			"2320": {
				cn: "扬州",
				py: "Yangzhou",
				en: "Yangzhou"
			},
			"2303": {
				cn: "常州",
				py: "Changzhou",
				en: "Changzhou"
			},
			"2302": {
				cn: "镇江",
				py: "Zhenjiang",
				en: "Zhenjiang"
			},
			"2311": {
				cn: "南通",
				py: "Nantong",
				en: "Nantong"
			},
			"2315": {
				cn: "江阴",
				py: "Jiangyin",
				en: "Jiangyin"
			},
			"2317": {
				cn: "连云港",
				py: "Lianyungang",
				en: "Lianyungang"
			},
			"2306": {
				cn: "徐州",
				py: "Xuzhou",
				en: "Xuzhou"
			},
			"2307": {
				cn: "淮阴",
				py: "Huaiyin",
				en: "Huaiyin"
			},
			"2308": {
				cn: "宿迁",
				py: "Suqian",
				en: "Suqian"
			},
			"2309": {
				cn: "东台",
				py: "Dongtai",
				en: "Dongtai"
			},
			"2310": {
				cn: "泰州",
				py: "Jstaizhou",
				en: "Jstaizhou"
			},
			"2312": {
				cn: "仪征",
				py: "Yizheng",
				en: "Yizheng"
			},
			"2313": {
				cn: "丹阳",
				py: "Danyang",
				en: "Danyang"
			},
			"2304": {
				cn: "宜兴",
				py: "Yixing",
				en: "Yixing"
			},
			"2316": {
				cn: "常熟",
				py: "Changshu",
				en: "Changshu"
			},
			"2318": {
				cn: "淮安",
				py: "Huaian",
				en: "Huaian"
			},
			"2319": {
				cn: "盐城",
				py: "Yancheng",
				en: "Yancheng"
			},
			"2321": {
				cn: "兴化",
				py: "Xinghua",
				en: "Xinghua"
			},
			"2322": {
				cn: "姜堰",
				py: "Jiangyan",
				en: "Jiangyan"
			},
			"2323": {
				cn: "昆山",
				py: "Kunshan",
				en: "Kunshan"
			},
			"2324": {
				cn: "张家港",
				py: "Zhangjiagang",
				en: "Zhangjiagang"
			},
			"2399": {
				cn: "其他",
				py: "Qita",
				en: "Other"
			},
			"2701": {
				cn: "南昌",
				py: "Nanchang",
				en: "Nanchang"
			},
			"2703": {
				cn: "景德镇",
				py: "Jingdezhen",
				en: "Jingdezhen"
			},
			"2702": {
				cn: "九江",
				py: "Jiujiang",
				en: "Jiujiang"
			},
			"2705": {
				cn: "鹰潭",
				py: "Yingtan",
				en: "Yingtan"
			},
			"2706": {
				cn: "宜春",
				py: "Yichun",
				en: "Yichun"
			},
			"2707": {
				cn: "新余",
				py: "Xinyu",
				en: "Xinyu"
			},
			"2708": {
				cn: "萍乡",
				py: "Pingxiang",
				en: "Pingxiang"
			},
			"2709": {
				cn: "赣州",
				py: "Ganzhou",
				en: "Ganzhou"
			},
			"2710": {
				cn: "吉安",
				py: "Jian",
				en: "Jian"
			},
			"2711": {
				cn: "井冈山",
				py: "Jinggangshan",
				en: "Jinggangshan"
			},
			"2712": {
				cn: "抚州",
				py: "Jxfuzhou",
				en: "Jxfuzhou"
			},
			"2713": {
				cn: "临川",
				py: "Linchuan",
				en: "Linchuan"
			},
			"2704": {
				cn: "上饶",
				py: "Shangrao",
				en: "Shangrao"
			},
			"2799": {
				cn: "其他",
				py: "Qita",
				en: "Other"
			},
			"1701": {
				cn: "沈阳",
				py: "Shengyang",
				en: "Shengyang"
			},
			"1702": {
				cn: "铁岭",
				py: "Tieling",
				en: "Tieling"
			},
			"1703": {
				cn: "抚顺",
				py: "Fushun",
				en: "Fushun"
			},
			"1705": {
				cn: "大连",
				py: "Dalian",
				en: "Dalian"
			},
			"1706": {
				cn: "本溪",
				py: "Bexi",
				en: "Bexi"
			},
			"1714": {
				cn: "营口",
				py: "Yingkou",
				en: "Yingkou"
			},
			"1707": {
				cn: "锦州",
				py: "Jinzhou",
				en: "Jinzhou"
			},
			"1708": {
				cn: "兴城",
				py: "Xingcheng",
				en: "Xingcheng"
			},
			"1709": {
				cn: "北票",
				py: "Beipiao",
				en: "Beipiao"
			},
			"1710": {
				cn: "盘锦",
				py: "Panjin",
				en: "Panjin"
			},
			"1711": {
				cn: "辽阳",
				py: "Liaoyang",
				en: "Liaoyang"
			},
			"1712": {
				cn: "铁法",
				py: "Tiefa",
				en: "Tiefa"
			},
			"1713": {
				cn: "鞍山",
				py: "Anshan",
				en: "Anshan"
			},
			"1715": {
				cn: "瓦房店",
				py: "Wafangdian",
				en: "Wafangdian"
			},
			"1716": {
				cn: "丹东",
				py: "Dandong",
				en: "Dandong"
			},
			"1717": {
				cn: "葫芦岛",
				py: "Huludao",
				en: "Huludao"
			},
			"1718": {
				cn: "朝阳",
				py: "Chaoyang",
				en: "Chaoyang"
			},
			"1719": {
				cn: "阜新",
				py: "Fuxin",
				en: "Fuxin"
			},
			"1704": {
				cn: "海城",
				py: "Haicheng",
				en: "Haicheng"
			},
			"1799": {
				cn: "其他",
				py: "Qita",
				en: "Other"
			},
			"1901": {
				cn: "呼和浩特",
				py: "Huhhot",
				en: "Huhhot"
			},
			"1906": {
				cn: "赤峰",
				py: "Chifeng",
				en: "Chifeng"
			},
			"1910": {
				cn: "包头",
				py: "Baotou",
				en: "Baotou"
			},
			"1902": {
				cn: "二连浩特",
				py: "Erlianhaote",
				en: "Erlianhaote"
			},
			"1903": {
				cn: "临河",
				py: "Linhe",
				en: "Linhe"
			},
			"1904": {
				cn: "东胜",
				py: "Dongsheng",
				en: "Dongsheng"
			},
			"1905": {
				cn: "满洲里",
				py: "Manzhouli",
				en: "Manzhouli"
			},
			"1907": {
				cn: "乌兰浩特",
				py: "Wulanhaote",
				en: "Wulanhaote"
			},
			"1908": {
				cn: "霍林郭勒",
				py: "Huolinguole",
				en: "Huolinguole"
			},
			"1909": {
				cn: "集宁",
				py: "Jining",
				en: "Jining"
			},
			"1911": {
				cn: "乌海",
				py: "Wuhai",
				en: "Wuhai"
			},
			"1912": {
				cn: "海拉尔",
				py: "Hailaer",
				en: "Hailaer"
			},
			"1913": {
				cn: "牙克石",
				py: "Yakeshi",
				en: "Yakeshi"
			},
			"1914": {
				cn: "锡林浩特",
				py: "Xilinhaote",
				en: "Xilinhaote"
			},
			"1915": {
				cn: "通辽",
				py: "Tongliao",
				en: "Tongliao"
			},
			"1916": {
				cn: "扎兰屯",
				py: "Zhalantun",
				en: "Zhalantun"
			},
			"1917": {
				cn: "鄂尔多斯",
				py: "Eerduosi",
				en: "Eerduosi"
			},
			"1999": {
				cn: "其他",
				py: "Qita",
				en: "Other"
			},
			"3701": {
				cn: "银川",
				py: "Yinchuan",
				en: "Yinchuan"
			},
			"3702": {
				cn: "青铜峡",
				py: "Qingtongxia",
				en: "Qingtongxia"
			},
			"3703": {
				cn: "吴忠",
				py: "Wuzhong",
				en: "Wuzhong"
			},
			"3704": {
				cn: "石嘴山",
				py: "Shizuishan",
				en: "Shizuishan"
			},
			"3705": {
				cn: "中卫",
				py: "Zhongwei",
				en: "Zhongwei"
			},
			"3799": {
				cn: "其他",
				py: "Qita",
				en: "Other"
			},
			"3801": {
				cn: "西宁",
				py: "Xining",
				en: "Xining"
			},
			"3802": {
				cn: "格尔木",
				py: "Geermu",
				en: "Geermu"
			},
			"3803": {
				cn: "共和",
				py: "Gonghe",
				en: "Gonghe"
			},
			"3804": {
				cn: "德令哈",
				py: "Delingha",
				en: "Delingha"
			},
			"3899": {
				cn: "其他",
				py: "Qita",
				en: "Other"
			},
			"2001": {
				cn: "济南",
				py: "Jinan",
				en: "Jinan"
			},
			"2007": {
				cn: "青岛",
				py: "Qingdao",
				en: "Qingdao"
			},
			"2006": {
				cn: "烟台",
				py: "Yantai",
				en: "Yantai"
			},
			"2003": {
				cn: "淄博",
				py: "Zibo",
				en: "Zibo"
			},
			"2016": {
				cn: "潍坊",
				py: "Weifang",
				en: "Weifang"
			},
			"2022": {
				cn: "临沂",
				py: "Linyi",
				en: "Linyi"
			},
			"2008": {
				cn: "莱芜",
				py: "Laiwu",
				en: "Laiwu"
			},
			"2009": {
				cn: "济宁",
				py: "Jining",
				en: "Jining"
			},
			"2010": {
				cn: "菏泽",
				py: "Heze",
				en: "Heze"
			},
			"2011": {
				cn: "日照",
				py: "Rizhao",
				en: "Rizhao"
			},
			"2012": {
				cn: "滕州",
				py: "Tengzhou",
				en: "Tengzhou"
			},
			"2013": {
				cn: "聊城",
				py: "Liaocheng",
				en: "Liaocheng"
			},
			"2014": {
				cn: "德州",
				py: "Dezhou",
				en: "Dezhou"
			},
			"2015": {
				cn: "滨州",
				py: "Binzhou",
				en: "Binzhou"
			},
			"2002": {
				cn: "临清",
				py: "Linqing",
				en: "Linqing"
			},
			"2017": {
				cn: "青州",
				py: "Qingzhou",
				en: "Qingzhou"
			},
			"2018": {
				cn: "威海",
				py: "Weihai",
				en: "Weihai"
			},
			"2019": {
				cn: "泰安",
				py: "Taian",
				en: "Taian"
			},
			"2020": {
				cn: "新泰",
				py: "Xintai",
				en: "Xintai"
			},
			"2021": {
				cn: "曲阜",
				py: "Qufu",
				en: "Qufu"
			},
			"2004": {
				cn: "东营",
				py: "Dongying",
				en: "Dongying"
			},
			"2005": {
				cn: "诸城",
				py: "Zhucheng",
				en: "Zhucheng"
			},
			"2023": {
				cn: "枣庄",
				py: "Zaozhuang",
				en: "Zaozhuang"
			},
			"2099": {
				cn: "其他",
				py: "Qita",
				en: "Other"
			},
			"2101": {
				cn: "太原",
				py: "Taiyuan",
				en: "Taiyuan"
			},
			"2107": {
				cn: "大同",
				py: "Datong",
				en: "Datong"
			},
			"2102": {
				cn: "忻州",
				py: "Xinzhou",
				en: "Xinzhou"
			},
			"2103": {
				cn: "临汾",
				py: "Linfen",
				en: "Linfen"
			},
			"2104": {
				cn: "运城",
				py: "Yuncheng",
				en: "Yuncheng"
			},
			"2105": {
				cn: "长治",
				py: "Changzhi",
				en: "Changzhi"
			},
			"2106": {
				cn: "榆次",
				py: "Yuci",
				en: "Yuci"
			},
			"2108": {
				cn: "侯马",
				py: "Houma",
				en: "Houma"
			},
			"2109": {
				cn: "阳泉",
				py: "Yangquan",
				en: "Yangquan"
			},
			"2110": {
				cn: "晋城",
				py: "Jincheng",
				en: "Jincheng"
			},
			"2199": {
				cn: "其他",
				py: "Qita",
				en: "Other"
			},
			"3601": {
				cn: "西安",
				py: "Xian",
				en: "Xian"
			},
			"3605": {
				cn: "咸阳",
				py: "Xianyang",
				en: "Xianyang"
			},
			"3607": {
				cn: "宝鸡",
				py: "Baoji",
				en: "Baoji"
			},
			"3608": {
				cn: "铜川",
				py: "Tongchuan",
				en: "Tongchuan"
			},
			"3602": {
				cn: "渭南",
				py: "Weinan",
				en: "Weinan"
			},
			"3603": {
				cn: "延安",
				py: "Yanan",
				en: "Yanan"
			},
			"3604": {
				cn: "汉中",
				py: "Hanzhong",
				en: "Hanzhong"
			},
			"3609": {
				cn: "安康",
				py: "Ankang",
				en: "Ankang"
			},
			"3606": {
				cn: "韩城",
				py: "Hancheng",
				en: "Hancheng"
			},
			"3699": {
				cn: "其他",
				py: "Qita",
				en: "Other"
			},
			"3401": {
				cn: "成都",
				py: "Chengdu",
				en: "Chengdu"
			},
			"3406": {
				cn: "宜宾",
				py: "Yibin",
				en: "Yibin"
			},
			"3409": {
				cn: "泸州",
				py: "Luzhou",
				en: "Luzhou"
			},
			"3408": {
				cn: "内江",
				py: "Neijiang",
				en: "Neijiang"
			},
			"3411": {
				cn: "攀枝花",
				py: "Panzhihua",
				en: "Panzhihua"
			},
			"3402": {
				cn: "西昌",
				py: "Xichang",
				en: "Xichang"
			},
			"3403": {
				cn: "德阳",
				py: "Deyang",
				en: "Deyang"
			},
			"3404": {
				cn: "雅安",
				py: "Yaan",
				en: "Yaan"
			},
			"3405": {
				cn: "遂宁",
				py: "Suining",
				en: "Suining"
			},
			"3407": {
				cn: "南充",
				py: "Nanchong",
				en: "Nanchong"
			},
			"3412": {
				cn: "绵阳",
				py: "Mianyang",
				en: "Mianyang"
			},
			"3413": {
				cn: "广元",
				py: "Guangyuan",
				en: "Guangyuan"
			},
			"3414": {
				cn: "马尔康",
				py: "Maerkang",
				en: "Maerkang"
			},
			"3415": {
				cn: "达县",
				py: "Daxian",
				en: "Daxian"
			},
			"3416": {
				cn: "华鉴",
				py: "Huajian",
				en: "Huajian"
			},
			"3417": {
				cn: "自贡",
				py: "Zigong",
				en: "Zigong"
			},
			"3410": {
				cn: "乐山",
				py: "Leshan",
				en: "Leshan"
			},
			"3499": {
				cn: "其他",
				py: "Qita",
				en: "Other"
			},
			"4001": {
				cn: "拉萨",
				py: "Lasa",
				en: "Lasa"
			},
			"4002": {
				cn: "日喀则",
				py: "Rikaze",
				en: "Rikaze"
			},
			"4099": {
				cn: "其他",
				py: "Qita",
				en: "Other"
			},
			"3901": {
				cn: "乌鲁木齐",
				py: "Wulumuqi",
				en: "Wulumuqi"
			},
			"3902": {
				cn: "石河子",
				py: "Shihezi",
				en: "Shihezi"
			},
			"3911": {
				cn: "克拉玛依",
				py: "Kelamayi",
				en: "Kelamayi"
			},
			"3903": {
				cn: "博乐",
				py: "Bole",
				en: "Bole"
			},
			"3904": {
				cn: "塔城",
				py: "Tacheng",
				en: "Tacheng"
			},
			"3905": {
				cn: "阿勒泰",
				py: "Aletai",
				en: "Aletai"
			},
			"3906": {
				cn: "哈密",
				py: "Hami",
				en: "Hami"
			},
			"3907": {
				cn: "阿克苏",
				py: "Akesu",
				en: "Akesu"
			},
			"3908": {
				cn: "阿图什",
				py: "Atushen",
				en: "Atushen"
			},
			"3909": {
				cn: "昌吉",
				py: "Changji",
				en: "Changji"
			},
			"3910": {
				cn: "奎屯",
				py: "Kuitun",
				en: "Kuitun"
			},
			"3912": {
				cn: "伊宁",
				py: "Yining",
				en: "Yining"
			},
			"3913": {
				cn: "吐鲁番",
				py: "Tulufan",
				en: "Tulufan"
			},
			"3914": {
				cn: "库尔勒",
				py: "Kuerle",
				en: "Kuerle"
			},
			"3915": {
				cn: "喀什",
				py: "Kashen",
				en: "Kashen"
			},
			"3916": {
				cn: "和田",
				py: "Hetian",
				en: "Hetian"
			},
			"3999": {
				cn: "其他",
				py: "Qita",
				en: "Other"
			},
			"3201": {
				cn: "昆明",
				py: "Kunming",
				en: "Kunming"
			},
			"3202": {
				cn: "曲靖",
				py: "Qujing",
				en: "Qujing"
			},
			"3204": {
				cn: "大理",
				py: "Dali",
				en: "Dali"
			},
			"3212": {
				cn: "玉溪",
				py: "Yuxi",
				en: "Yuxi"
			},
			"3206": {
				cn: "丽江",
				py: "Lijiang",
				en: "Lijiang"
			},
			"3211": {
				cn: "楚雄",
				py: "Chuxiong",
				en: "Chuxiong"
			},
			"3203": {
				cn: "开远",
				py: "Kaiyuan",
				en: "Kaiyuan"
			},
			"3207": {
				cn: "迪庆",
				py: "Diqing",
				en: "Diqing"
			},
			"3208": {
				cn: "东川",
				py: "Dongchuan",
				en: "Dongchuan"
			},
			"3209": {
				cn: "昭通",
				py: "Zhaotong",
				en: "Zhaotong"
			},
			"3210": {
				cn: "个旧",
				py: "Gejiu",
				en: "Gejiu"
			},
			"3205": {
				cn: "保山",
				py: "Baoshan",
				en: "Baoshan"
			},
			"3213": {
				cn: "文山",
				py: "Wenshan",
				en: "Wenshan"
			},
			"3299": {
				cn: "其他",
				py: "Qita",
				en: "Other"
			},
			"2502": {
				cn: "杭州",
				py: "Hangzhou",
				en: "Hangzhou"
			},
			"2517": {
				cn: "宁波",
				py: "Ningbo",
				en: "Ningbo"
			},
			"2526": {
				cn: "温州",
				py: "Wenzhou",
				en: "Wenzhou"
			},
			"2523": {
				cn: "金华",
				py: "Jinhua",
				en: "Jinhua"
			},
			"2509": {
				cn: "义乌",
				py: "Yiwu",
				en: "Yiwu"
			},
			"2506": {
				cn: "绍兴",
				py: "Shaoxing",
				en: "Shaoxing"
			},
			"2512": {
				cn: "湖州",
				py: "Huzhou",
				en: "Huzhou"
			},
			"2519": {
				cn: "余姚",
				py: "Yuyao",
				en: "Yuyao"
			},
			"2520": {
				cn: "临海",
				py: "Linhai",
				en: "Linhai"
			},
			"2503": {
				cn: "萧山",
				py: "Xiaoshan",
				en: "Xiaoshan"
			},
			"2504": {
				cn: "临安",
				py: "Linan",
				en: "Linan"
			},
			"2505": {
				cn: "诸暨",
				py: "Zhuji",
				en: "Zhuji"
			},
			"2501": {
				cn: "嵊泗",
				py: "Shengsi",
				en: "Shengsi"
			},
			"2507": {
				cn: "绍兴县",
				py: "Shaoxingxian",
				en: "Shaoxingxian"
			},
			"2508": {
				cn: "兰溪县",
				py: "Lanxi",
				en: "Lanxi"
			},
			"2513": {
				cn: "嘉兴",
				py: "Jiaxing",
				en: "Jiaxing"
			},
			"2514": {
				cn: "海宁",
				py: "Haining",
				en: "Haining"
			},
			"2515": {
				cn: "桐乡",
				py: "Tongxiang",
				en: "Tongxiang"
			},
			"2516": {
				cn: "衢州",
				py: "Quzhou",
				en: "Quzhou"
			},
			"2510": {
				cn: "上虞",
				py: "Shangyu",
				en: "Shangyu"
			},
			"2511": {
				cn: "嵊州",
				py: "Shengzhou",
				en: "Shengzhou"
			},
			"2518": {
				cn: "慈溪",
				py: "Cixi",
				en: "Cixi"
			},
			"2524": {
				cn: "丽水",
				py: "Lishui",
				en: "Lishui"
			},
			"2525": {
				cn: "瓯海",
				py: "Ouhai",
				en: "Ouhai"
			},
			"2521": {
				cn: "黄岩",
				py: "Huangyan",
				en: "Huangyan"
			},
			"2529": {
				cn: "永康",
				py: "Yongkang",
				en: "Yongkang"
			},
			"2522": {
				cn: "椒江",
				py: "Jiaojiang",
				en: "Jiaojiang"
			},
			"2527": {
				cn: "台州",
				py: "Zjtaizhou",
				en: "Zjtaizhou"
			},
			"2528": {
				cn: "舟山",
				py: "Zhoushan",
				en: "Zhoushan"
			},
			"2599": {
				cn: "其他",
				py: "Qita",
				en: "Other"
			},
			"4301": {
				cn: "香港",
				py: "Xianggang",
				en: "Hongkong"
			},
			"4201": {
				cn: "台北",
				py: "Tibet",
				en: "Tibet"
			},
			"4202": {
				cn: "台中",
				py: "Taizhong",
				en: "Taizhong"
			},
			"4203": {
				cn: "基隆",
				py: "Jilong",
				en: "Jilong"
			},
			"4204": {
				cn: "台南",
				py: "Tainan",
				en: "Tainan"
			},
			"4299": {
				cn: "其他",
				py: "Qita",
				en: "Other"
			},
			"4501": {
				cn: "国外",
				py: "Guowai",
				en: "Overseas"
			},
			"9901": {
				cn: "其他",
				py: "Qita",
				en: "Other"
			},
			"250201": {
				cn:"上城区",
				py:"",
				en:""
			},
			"300101": {
				cn:"荔湾区",
				py:"",
				en:""
			},
			"300102": {
				cn:"越秀区",
				py:"",
				en:""
			},
			"300103": {
				cn:"海珠区",
				py:"",
				en:""
			},
			"300104": {
				cn:"天河区",
				py:"",
				en:""
			},
			"300105": {
				cn:"白云区",
				py:"",
				en:""
			},
			"300106": {
				cn:"黄埔区",
				py:"",
				en:""
			},
			"300107": {
				cn:"番禺区",
				py:"",
				en:""
			},
			"300108": {
				cn:"花都区",
				py:"",
				en:""
			},
			"300109": {
				cn:"南沙区",
				py:"",
				en:""
			},
			"300110": {
				cn:"萝岗区",
				py:"",
				en:""
			},
			"300111": {
				cn:"增城市",
				py:"",
				en:""
			},
			"300112": {
				cn:"从化市",
				py:"",
				en:""
			},
			"300201": {
				cn:"莞城区",
				py:"Dongguan-guancheng",
				en:"Dongguan-guancheng"
			},
			"300202": {
				cn:"南城区",
				py:"Dongguan-nancheng",
				en:"Dongguan-nancheng"
			},
			"300203": {
				cn:"东城区",
				py:"Dongguan-dongcheng",
				en:"Dongguan-dongcheng"
			},
			"300204": {
				cn:"万江区",
				py:"Dongguan-wanjiang",
				en:"Dongguan-wanjiang"
			},
			"300205": {
				cn:"石碣镇",
				py:"Dongguan-shijie",
				en:"Dongguan-shijie"
			},
			"300206": {
				cn:"石龙镇",
				py:"Dongguan-shilong",
				en:"Dongguan-shilong"
			},
			"300207": {
				cn:"茶山镇",
				py:"Dongguan-chashan",
				en:"Dongguan-chashan"
			},
			"300208": {
				cn:"石排镇",
				py:"Dongguan-shipai",
				en:"Dongguan-shipai"
			},
			"300209": {
				cn:"企石镇",
				py:"Dongguan-qishi",
				en:"Dongguan-qishi"
			},
			"300210": {
				cn:"横沥镇",
				py:"Dongguan-hengli",
				en:"Dongguan-hengli"
			},
			"300211": {
				cn:"桥头镇",
				py:"Dongguan-qiaotou",
				en:"Dongguan-qiaotou"
			},
			"300212": {
				cn:"麻涌镇",
				py:"Dongguan-machong",
				en:"Dongguan-machong"
			},
			"300213": {
				cn:"中堂镇",
				py:"Dongguan-zhongtang",
				en:"Dongguan-zhongtang"
			},
			"300214": {
				cn:"高埗镇",
				py:"Dongguan-gaobu",
				en:"Dongguan-gaobu"
			},
			"300215": {
				cn:"樟木头镇",
				py:"Dongguan-zhangmutou",
				en:"Dongguan-zhangmutou"
			},
			"300216": {
				cn:"大岭山镇",
				py:"Dongguan-dalingshan",
				en:"Dongguan-dalingshan"
			},
			"300217": {
				cn:"望牛墩镇",
				py:"Dongguan-wangniudun",
				en:"Dongguan-wangniudun"
			},
			"300218": {
				cn:"黄江镇",
				py:"Dongguan-huangjiang",
				en:"Dongguan-huangjiang"
			},
			"300219": {
				cn:"洪梅镇",
				py:"Dongguan-hongmei",
				en:"Dongguan-hongmei"
			},
			"300220": {
				cn:"清溪镇",
				py:"Dongguan-qingxi",
				en:"Dongguan-qingxi"
			},
			"300221": {
				cn:"沙田镇",
				py:"Dongguan-shatian",
				en:"Dongguan-shatian"
			},
			"300222": {
				cn:"道滘镇",
				py:"Dongguan-daojiao",
				en:"Dongguan-daojiao"
			},
			"300223": {
				cn:"塘厦镇",
				py:"Dongguan-tangxia",
				en:"Dongguan-tangxia"
			},
			"300224": {
				cn:"虎门镇",
				py:"Dongguan-humen",
				en:"Dongguan-humen"
			},
			"300225": {
				cn:"厚街镇",
				py:"Dongguan-houjie",
				en:"Dongguan-houjie"
			},
			"300226": {
				cn:"凤岗镇",
				py:"Dongguan-fenggang",
				en:"Dongguan-fenggang"
			},
			"300227": {
				cn:"长安镇",
				py:"Dongguan-changan",
				en:"Dongguan-changan"
			},
			"300228": {
				cn:"谢岗镇",
				py:"Dongguan-xiegang",
				en:"Dongguan-xiegang"
			},
			"300229": {
				cn:"东坑镇",
				py:"Dongguan-dongkeng",
				en:"Dongguan-dongkeng"
			},
			"300230": {
				cn:"常平镇",
				py:"Dongguan-changping",
				en:"Dongguan-changping"
			},
			"300231": {
				cn:"大朗镇",
				py:"Dongguan-dalang",
				en:"Dongguan-dalang"
			},
			"300232": {
				cn:"寮步镇",
				py:"Dongguan-liaobu",
				en:"Dongguan-liaobu"
			},
			"300233": {
				cn:"松山湖",
				py:"Dongguan-songshanhu",
				en:"Dongguan-songshanhu"
			},
			"300801": {
				cn:"禅城区",
				py:"",
				en:""
			},
			"300802": {
				cn:"南海区",
				py:"",
				en:""
			},
			"300803": {
				cn:"顺德区",
				py:"",
				en:""
			},
			"300804": {
				cn:"三水区",
				py:"",
				en:""
			},
			"300805": {
				cn:"高明区",
				py:"",
				en:""
			},
			"300901": {
				cn:"蓬江区",
				py:"",
				en:""
			},
			"300902": {
				cn:"江海区",
				py:"",
				en:""
			},
			"300903": {
				cn:"新会区",
				py:"",
				en:""
			},
			"300904": {
				cn:"台山市",
				py:"",
				en:""
			},
			"300905": {
				cn:"开平市",
				py:"",
				en:""
			},
			"300906": {
				cn:"鹤山市",
				py:"",
				en:""
			},
			"300907": {
				cn:"恩平市",
				py:"",
				en:""
			},
			"301001": {
				cn:"罗湖区",
				py:"Shenzhen-luohu",
				en:"Shenzhen-luohu"
			},
			"301002": {
				cn:"福田区",
				py:"Shenzhen-futian",
				en:"Shenzhen-futian"
			},
			"301003": {
				cn:"南山区",
				py:"Shenzhen-nanshan",
				en:"Shenzhen-nanshan"
			},
			"301004": {
				cn:"宝安区",
				py:"Shenzhen-baoan",
				en:"Shenzhen-baoan"
			},
			"301005": {
				cn:"龙岗区",
				py:"Shenzhen-longgang",
				en:"Shenzhen-longgang"
			},
			"301006": {
				cn:"盐田区",
				py:"Shenzhen-yantian",
				en:"Shenzhen-yantian"
			},
			"301007": {
				cn:"光明新区",
				py:"Shenzhen-guangming",
				en:"Shenzhen-guangming"
			},
			"301008": {
				cn:"坪山新区",
				py:"Shenzhen-pingshan",
				en:"Shenzhen-pingshan"
			},
			"301009": {
				cn:"大鹏新区",
				py:"Shenzhen-dapeng",
				en:"Shenzhen-dapeng"
			},
			"301010": {
				cn:"龙华新区",
				py:"Shenzhen-longhua",
				en:"Shenzhen-longhua"
			},
			"301401": {
				cn:"龙湖区",
				py:"",
				en:""
			},
			"301402": {
				cn:"金平区",
				py:"",
				en:""
			},
			"301403": {
				cn:"濠江区",
				py:"",
				en:""
			},
			"301404": {
				cn:"潮阳区",
				py:"",
				en:""
			},
			"301405": {
				cn:"潮南区",
				py:"",
				en:""
			},
			"301406": {
				cn:"澄海区",
				py:"",
				en:""
			},
			"301407": {
				cn:"南澳县",
				py:"",
				en:""
			},
			"301501": {
				cn:"惠城区",
				py:"",
				en:""
			},
			"301502": {
				cn:"惠阳区",
				py:"",
				en:""
			},
			"301503": {
				cn:"博罗县",
				py:"",
				en:""
			},
			"301504": {
				cn:"惠东县",
				py:"",
				en:""
			},
			"301505": {
				cn:"龙门县",
				py:"",
				en:""
			},
			"301801": {
				cn:"端州区",
				py:"",
				en:""
			},
			"301802": {
				cn:"鼎湖区",
				py:"",
				en:""
			},
			"301803": {
				cn:"广宁县",
				py:"",
				en:""
			},
			"301804": {
				cn:"怀集县",
				py:"",
				en:""
			},
			"301805": {
				cn:"封开县",
				py:"",
				en:""
			},
			"301806": {
				cn:"德庆县",
				py:"",
				en:""
			},
			"301807": {
				cn:"高要市",
				py:"",
				en:""
			},
			"301808": {
				cn:"四会市",
				py:"",
				en:""
			},
			"301901": {
				cn:"石岐区",
				py:"",
				en:""
			},
			"301902": {
				cn:"东区",
				py:"",
				en:""
			},
			"301903": {
				cn:"西区",
				py:"",
				en:""
			},
			"301904": {
				cn:"南区",
				py:"",
				en:""
			},
			"301905": {
				cn:"五桂山区",
				py:"",
				en:""
			},
			"301906": {
				cn:"火炬开发区",
				py:"",
				en:""
			},
			"301907": {
				cn:"黄圃镇",
				py:"",
				en:""
			},
			"301908": {
				cn:"南头镇",
				py:"",
				en:""
			},
			"301909": {
				cn:"东凤镇",
				py:"",
				en:""
			},
			"301910": {
				cn:"阜沙镇",
				py:"",
				en:""
			},
			"301911": {
				cn:"小榄镇",
				py:"",
				en:""
			},
			"301912": {
				cn:"东升镇",
				py:"",
				en:""
			},
			"301913": {
				cn:"古镇镇",
				py:"",
				en:""
			},
			"301914": {
				cn:"横栏镇",
				py:"",
				en:""
			},
			"301915": {
				cn:"三角镇",
				py:"",
				en:""
			},
			"301916": {
				cn:"民众镇",
				py:"",
				en:""
			},
			"301917": {
				cn:"南朗镇",
				py:"",
				en:""
			},
			"301918": {
				cn:"港口镇",
				py:"",
				en:""
			},
			"301919": {
				cn:"大涌镇",
				py:"",
				en:""
			},
			"301920": {
				cn:"沙溪镇",
				py:"",
				en:""
			},
			"301921": {
				cn:"三乡镇",
				py:"",
				en:""
			},
			"301922": {
				cn:"板芙镇",
				py:"",
				en:""
			},
			"301923": {
				cn:"神湾镇",
				py:"",
				en:""
			},
			"301924": {
				cn:"坦洲镇",
				py:"",
				en:""
			},
			"302201": {
				cn:"香洲区",
				py:"",
				en:""
			},
			"302202": {
				cn:"斗门区",
				py:"",
				en:""
			},
			"302203": {
				cn:"金湾区",
				py:"",
				en:""
			},
			"302204": {
				cn:"横琴新区",
				py:"",
				en:""
			},
		reLookup: function(lang){
			lang = lang || 'cn';
			var iterator = function(list, lang, pre){
				for(var i = 0, l = list.length; i < l; i++) {
					var id = list[i];
					var st = out[id][lang];
					out[st === "其他" ? pre + st : st] = id;
					out[id].child && iterator(out[id].child, lang, st);
				}
			};
			iterator(out.list, lang, '');
			return out;
		},
		addItem: function(item){
			item = item || {};
			if (item.id) {
				var id = item.id;
				out[id] = {};
				for(k in item) {
					item.hasOwnProperty(k) && k !== 'id' && (out[id][k] = item[k]) && (out[item[k]] = id);
				}
			}
			return out;
		}
	};

	module.exports = out;
});
