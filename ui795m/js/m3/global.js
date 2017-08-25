// JavaScript Document
jpjs.config({
	basepath: window.CONFIG.HOST + window.CONFIG.COMBOPATH,
	comboHost: window.CONFIG.HOST + '/min/?f=',
	comboPath: window.CONFIG.COMBOPATH,
	normailzeNames: window.VERSION,
	charset: window.CONFIG.CHARSET,
	combos: {
		'@css3': 'module.css3',
		'@changeClass':'widge.changeClass',
		'@checkBoxer':'widge.checkBoxer',
		'@fixed': 'tools.fixed',
		'@position': 'tools.position',
		'@input': 'widge.input',
		'@dateFormat': 'tools.dateFormat',
		'@iframe': [
			'tools.iframe', 'tools.position'
		],
		'@drag': 'tools.drag',
		'@resize': 'tools.resize',
		'@imgLoader': 'tools.imgLoader',
		'@fileUploader': 'widge.fileUploader',
		'@imageCrop': [
			'@imgLoader', '@drag', '@resize', 'widge.imageCrop'
		],
		'@imageEditor': [
			'@imageCrop', '@fileUploader', 'widge.imageEditor'
		],
		'@dataSource': 'module.dataSource',
		'@popup': [
			'@iframe','widge.popup'
		],
		'@tabs': [
			'widge.tabs', '@changeClass'
		],
		'@mask': [
			'@popup', 'widge.overlay.mask'
		],
		'@select': [
			'@popup', '@dataSource', 'widge.select'
		],
		'@multipleSelect': [
			'@select', '@checkBoxer', 'widge.multipleSelect'
		],
		'@dialog': [
			'@mask', 'widge.overlay.hbDialog', 'base.event', 'tools.fixed'
		],
		'@confirmBox': [
			'@dialog', 'widge.overlay.confirmBox'
		],
		'@hoverDir': [
			'@css3', 'widge.hoverDir'
		],
		'@basePage': [
			'@css3', 'widge.switchable.basePage'
		],
		'@snapPage': [
			'@basePage', 'widge.switchable.snapPage'
		],
		'@slidePage': [
			'@basePage', 'widge.switchable.slidePage'
		],
		'@checkLogin': [
			'@dialog', 'product.checkLogin'
		],
		'@textPlaceHolder': [
			'@input', 'widge.textPlaceHolder'
		],
		'@autoComplete': [
			'@popup', '@dataSource', '@textPlaceHolder', 'widge.autoComplete.search', 'widge.autoComplete.filter'
		],
		'@search': [
			'@select', '@textPlaceHolder', '@confirmBox',
			'product.jobSearch.jobTopSearch', 'product.jobSearch.search', 
			'widge.autoComplete.search', 'widge.autoComplete.filter'
		],
		'@receiveMailDialog': [
			'@confirmBox', '@dataSource', 'product.mail.receiveMailDialog'
		],
		'emailTip': [
			'@autoComplete', 'product.emailTip'
		],
		'@verifier': 'module.verifier',
		'@validator': [
			'@verifier', '@dataSource', 'widge.validator.rule', 'widge.validator.item',
			'widge.validator.handler', 'widge.validator.form'
		],
		'@calendar': [
			'@dateFormat', '@iframe', 'widge.calendar.baseCalendar', 'widge.calendar.calendar',
			'widge.calendar.dateColumn', 'widge.calendar.monthColumn', 'widge.calendar.yearColumn'
		],
		'@jobListSelecter': [
			'@dialog', 'product.xiake.jobListSelecter'
		],
		'@templateSaver': [
			'@popup', '@dataSource', 'product.xiake.templateSaver'
		],
		'@templateSelecter': [
			'@popup', '@dataSource', 'product.xiake.templateSelecter'
		],
		'@hbCommon': 'product.hbCommon',
		'@actions': 'cqjob.actions',
		'@jobAutocomplete': 'cqjob.autocomplete',
		'@homeHead': [
			'@jobAutocomplete', 'cqjob.homeHead', 'cqjob.jobCookie'
		],
		'@mscroll': 'mobile.mscroll',
		'@msnap': ['@mscroll', 'mobile.msnap'],
		'@imgRotational': [
			'widge.imgRotational'
		],
		'@calling': 'cqjob.calling',
		'@areaMulitiple': 'cqjob.areaMulitiple',
		'@jobCertificate': 'cqjob.jobCertificate',
		'@jobFlexSlider': 'cqjob.jobFlexSlider',
		'@jobSkill': 'cqjob.jobSkill',
		'@jobDialog': 'cqjob.jobDialog',
		'@jobTooltip': 'cqjob.jobTooltip',
		'@jobsort': [
			'@jobDialog', 'cqjob.jobsort'
		],
		'@jobsort2': [
			'@jobDialog', 'cqjob.jobsort2'
		],
		'@jobDater': 'cqjob.jobDater',
		'@areaSimple': 'cqjob.areaSimple',
		'@jobPrettyPhoto': 'cqjob.jobPrettyPhoto',
		'@uploadify': 'uploadify',
		'@form': [
			'cqjob.jobValidate', 'cqjob.jobForm'
		],
		'@fancybox': [
			'cqjob.fancybox'
		],
		'@jobLazyload': 'cqjob.jobLazyload',
		'@jobSlides': 'cqjob.jobSlides',
		'@indexJobsort': [
			'@actions', 'cqjob.indexJobsort'
		]
	}
});