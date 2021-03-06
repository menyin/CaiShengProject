/**
 * 数据字典包 
 * @module jobcn.data
 */

define(function(require, exports, module) {
	/**
	 * 行业数据，简体中文版
	 * @method industry
	 * @for data
	 * @return {Object} 由行业数据组成的对象，默认冻结
	 */
	var out = {
			//"categoryList" : ["01","02","03"], // 类别列表
			"category" : {
				"list" : ["1","2","3","4","5","6","7","8","9","10","11","12","13"], // 类别列表
				"1": {  
					cn : "互联网 · 软件 · 游戏",  
					en : "Internet · Software · Games", 
					list : ["1","2","43","42"]
				},
				"2": {  
					cn : "电子 · 通信 · 硬件",  
					en : "Electronic · Communication · Hardware", 
					list : ["4","5","37","3"]
				},
				"3": {  
					cn : "重工 · 机械 · 汽车 · 设备",  
					en : "Heavy Industry · Machinery · Automobile · Equipment", 
					list : ["13","14","15"]
				},
				"4": {  
					cn : "轻工 · 制造 · 加工",  
					en : "Light Industry · Manufacture · Process", 
					list : ["20","47","52","28","6","50","48","27","51","29"]
				},
				"5": {  
					cn : "化工 · 塑胶 · 原材料 · 能源",  
					en : "Chemical Industry · Plastic · Raw material · Energy", 
					list : ["11","49","59","9","10","58"]
				},
				"6": {  
					cn : "贸易 · 批发零售 · 消费",  
					en : "Trade · Wholesale and Retail · Consumption", 
					list : ["8","7","19"]
				},
				"7": {  
					cn : "物流 · 运输",  
					en : "Logistics · Transportation", 
					list : ["25","60"]
				},
				"8": {  
					cn : "房地产 · 建筑 · 装潢 · 物业",  
					en : "Real estate · Construction · Decoration · Tenement", 
					list : ["39","23","24","53","54"]
				},
				"9": {  
					cn : "商务服务 · 服务业",  
					en : "Commercial Services · Service Industry", 
					list : ["21","32","36","61","62","26","40","55","56","57"]
				},
				"10": {  
					cn : "金融",  
					en : "Finance", 
					list : ["44","45","46","22"]
				},
				"11": {  
					cn : "广告 · 传媒 · 教育 · 文化",  
					en : "Advertising · Media · Education · Culture", 
					list : ["16","18","38","17","30","63"]
				},
				"12": {  
					cn : "制药 · 医疗",  
					en : "Pharmaceutical · Medical ", 
					list : ["12","31"]
				},
				"13": {  
					cn : "政府 · 农林牧渔 · 其他",  
					en : "Government · Farming , Forestry , Husbandry and Fishing · Others", 
					list : ["41","33","34","64","66","65","35"]
				}
			},
			"list": ["2", "3", "42", "1", "43", "5", "37", "4", "15", "44", "45", "46", "22", "8", "7", "19", "20", "47", "48", "49", "6", "50", "51", "52", "27", "13", "14", "29", "23", "24", "53", "39", "54", "18", "38", "17", "16", "28", "12", "31", "26", "40", "55", "56", "57", "11", "9", "10", "58", "59", "25", "60", "21", "36", "61", "32", "62", "30", "63", "33", "41", "34", "64", "65", "66", "35"],
			"2": {
				cn: "计算机软件",
				en: "Computer Software"
			},
			"3": {
				cn: "计算机硬件",
				en: "Computer Hardware"
			},
			"42": {
				cn: "计算机服务业(系统、维护、设备管理等)",
				en: "Computer Services"
			},
			"1": {
				cn: "互联网、电子商务",
				en: "Internet,E-Commerce"
			},
			"43": {
				cn: "网络游戏",
				en: "Online games"
			},
			"5": {
				cn: "通讯、电信、网络设备",
				en: "Communication,Telecom,Network equipment"
			},
			"37": {
				cn: "通信、电信运营、增值服务",
				en: "Communications,Telecom operators,Value-added services"
			},
			"4": {
				cn: "电子、微电子技术、集成电路",
				en: "Electrical,Micro-electronics,"
			},
			"15": {
				cn: "仪器仪表、电工设备、工业自动化",
				en: "Apparatus,Electric Devices"
			},
			"44": {
				cn: "银行",
				en: "Banking"
			},
			"45": {
				cn: "证券",
				en: "Securities"
			},
			"46": {
				cn: "保险",
				en: "Insurance"
			},
			"22": {
				cn: "其他金融活动",
				en: "Other Financial Activities"
			},
			"8": {
				cn: "贸易、商务、进出口",
				en: "Trading,Commerce,Imports and Exports"
			},
			"7": {
				cn: "批发零售",
				en: "Wholesale and Retail"
			},
			"19": {
				cn: "快速消费品",
				en: "Fast consumable"
			},
			"20": {
				cn: "纺织品业(服饰、鞋类、家纺用品…)",
				en: "Textile industry"
			},
			"47": {
				cn: "皮革业(家私、造鞋、皮具…)",
				en: "Leather industry"
			},
			"48": {
				cn: "木、竹、藤、棕、草制品",
				en: "Wood,Bamboo,Cane,Palm,Grass products"
			},
			"49": {
				cn: "橡胶、塑料制品",
				en: "Rubber,Plastic products"
			},
			"6": {
				cn: "家具、家电、工艺品、玩具",
				en: "Furniture,Household appliances,Handicrafts,Toys"
			},
			"50": {
				cn: "珠宝、首饰、钟表",
				en: "Jewellery,Watches"
			},
			"51": {
				cn: "农副食品加工",
				en: "Agro-food processing"
			},
			"52": {
				cn: "造纸及纸制品",
				en: "Paper and Paper products"
			},
			"27": {
				cn: "办公设备、文化体育休闲用品",
				en: "OA Devices,Culture Articles,Sports and Leisure goods"
			},
			"13": {
				cn: "机械制造、机电设备、重工业",
				en: "Machine-building,Machine,Heavy industry"
			},
			"14": {
				cn: "汽车、摩托车及零配件",
				en: "Automobile,Motorcycle and Fittings"
			},
			"29": {
				cn: "其它生产、制造、加工",
				en: "Other Production,Manufacturing,Processing"
			},
			"23": {
				cn: "建筑施工与工程",
				en: "Construction and Engineering"
			},
			"24": {
				cn: "建筑安装",
				en: "Construction and Installation"
			},
			"53": {
				cn: "家居、室内设计、装潢",
				en: "Home,Interior design,Decoration"
			},
			"39": {
				cn: "房地产开发",
				en: "Real estate development"
			},
			"54": {
				cn: "物业管理、商业中心",
				en: "Property management,Commercial center"
			},
			"18": {
				cn: "公关、文化传播、会展",
				en: "Pr,Cultural diffusion,Exhibition"
			},
			"38": {
				cn: "媒体、影视制作、艺术",
				en: "Media,Film and television production,Arts"
			},
			"17": {
				cn: "文字出版",
				en: "Text Publishing"
			},
			"16": {
				cn: "广告业",
				en: "Advertising"
			},
			"28": {
				cn: "印刷、包装",
				en: "Printing,Packaging"
			},
			"12": {
				cn: "生物工程、制药",
				en: "Biotechnology,Pharmaceutical"
			},
			"31": {
				cn: "医疗、护理、保健、卫生服务",
				en: "Medical,Nursing,Health,Health services"
			},
			"26": {
				cn: "旅游业",
				en: "Tourism"
			},
			"40": {
				cn: "住宿和餐饮业",
				en: "Accommodation and Catering Services"
			},
			"55": {
				cn: "文化、体育和娱乐业",
				en: "Culture,Sports and Entertainment"
			},
			"56": {
				cn: "美容",
				en: "Hairdressing"
			},
			"57": {
				cn: "生活服务",
				en: "Life service"
			},
			"11": {
				cn: "石油、化工、地质",
				en: "Petroleum,Chemical,Geological"
			},
			"9": {
				cn: "电力、电气、水利",
				en: "Power,Electrical,Water conservancy"
			},
			"10": {
				cn: "能源、矿产",
				en: "Energy,Mineral"
			},
			"58": {
				cn: "采掘、冶炼",
				en: "Mining,Smelting"
			},
			"59": {
				cn: "原材料及加工",
				en: "Raw materials and processing"
			},
			"25": {
				cn: "交通、运输、物流",
				en: "Traffic,Transport,Logistics"
			},
			"60": {
				cn: "航天、航空",
				en: "Aerospace,Aviation"
			},
			"21": {
				cn: "咨询与调查业（顾问、企业管理、知识产权）",
				en: "Consulting and Investigation industry"
			},
			"36": {
				cn: "法律服务",
				en: "Legal services"
			},
			"61": {
				cn: "知识产权服务",
				en: "Intellectual Property services"
			},
			"32": {
				cn: "人才交流、中介服务",
				en: "Talent exchange,Intermediary services"
			},
			"62": {
				cn: "租赁业",
				en: "Rental industry"
			},
			"30": {
				cn: "教育、培训",
				en: "Education,Training"
			},
			"63": {
				cn: "学术、科研院所",
				en: "Academic,Research institutes"
			},
			"33": {
				cn: "协会、社团",
				en: "Association,Community"
			},
			"41": {
				cn: "政府公用事业、社区服务",
				en: "Government utilities,Community service"
			},
			"34": {
				cn: "农、林、牧、渔业",
				en: "Agriculture,Forestry,Animal husbandry,Fishery"
			},
			"64": {
				cn: "环保",
				en: "Environmental"
			},
			"65": {
				cn: "国际组织",
				en: "International Organizations"
			},
			"66": {
				cn: "多元化业务集团",
				en: "Diversified Business Group"
			},
			"35": {
				cn: "其他",
				en: "Others"
			}
		};
	module.exports = out;
});
