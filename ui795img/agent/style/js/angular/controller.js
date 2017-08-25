var url = 'http://www.917.cs';
var seriesList = angular.module('series',[]).controller('getSeries',function($scope,$http){
	$http.jsonp(url+"/api/yun.php?callback=JSON_CALLBACK&type=sell").success(function(response){
		$('#sellContainer').highcharts({
			title: {
				text: '出售走势图',
				x: -20 //center
			},
			subtitle: {
				text: '',
				x: -20
			},
			xAxis: {
				categories: response.categories
			},
			yAxis: {
				title: {
				text: ''
				},
				plotLines: [{
					value: 0,
					width: 1,
					color: '#808080'
				}]
			},
			tooltip: {
				valueSuffix: ''
			},
			legend: {
				margin:16,
				layout: 'horizontal',
				backgroundColor: '#FFFFFF',
				align: 'right',
				verticalAlign: 'bottom',
				x: 0,
				y: 0
			},
			series: response.series
		});

		$('#sellList li').click(function(){
			var chart = $('#sellContainer').highcharts(),
			i=$(this).attr('rel');
			var series = chart.series[i];
			if (series.visible) {
				series.hide();
				$(this).attr('class','bg_lh');
			} else {
				$(this).attr('class','bg_'+i);
				series.show();
			}
		});

		$scope.sellAverage = response.totalAverage;
		$scope.sellData = response.data;
	});



	$http.jsonp(url+"/api/yun.php?callback=JSON_CALLBACK&type=chuzu").success(function(response) {
		$('#chuzuContainer').highcharts({
			title: {
				text: '出租走势图',
				x: -20 //center
			},
			subtitle: {
				text: '',
				x: -20
			},
			xAxis: {
				categories: response.categories
			},
			yAxis: {
				title: {
				text: ''
				},
				plotLines: [{
					value: 0,
					width: 1,
					color: '#808080'
				}]
			},
			tooltip: {
				valueSuffix: ''
			},
			legend: {
				margin:16,
				layout: 'horizontal',
				backgroundColor: '#FFFFFF',
				align: 'right',
				verticalAlign: 'bottom',
				x: 0,
				y: 0
			},
			series: response.series
		});

		$('#chuzuList li').click(function(){
			var chart = $('#chuzuContainer').highcharts(),
			i=$(this).attr('rel');
			var series = chart.series[i];
			if (series.visible) {
				series.hide();
				$(this).attr('class','bg_lh');
			} else {
				$(this).attr('class','bg_'+i);
				series.show();
			}
		});

		$scope.chuzuAverage = response.totalAverage;
		$scope.chuzuData = response.data;
	});


});