<?exit?>
<script type="text/javascript" src="//cdn.{ROOT_DOMAIN}/javascript/My97DatePicker/WdatePicker.js" ></script>
	<style type="text/css">
		.section .mod{margin-top:-10px;font-family:'微软雅黑','SimHei';}
		.mod .formMod .l{width:100px;margin-right: 0px;}
		.mod .formMod .r{width:300px;}
		.mod .formMod .dayList{padding:10px 0px 10px 35px;}
		.mod .formMod .dayList span{cursor: pointer;color: #1755a9;margin: auto 5px;font-size: 12px;border: solid 1px #eee;border-radius: 2px;padding: 3px 6px;}
		.mod .form{}
		.formBtn{width: 100%; margin: 30px 0px 0px 20px;}
		.formBtn div{color: #fff;background: #5CB85C;border: 0;overflow: visible;cursor: pointer;padding: 0 10px;width: 410px; height: 40px; line-height: 40px; text-align: center;}
		.formBtn div:hover{background: #449D44;}
	</style>
</head>
<body id="body">
	<form id="tuiGuangJob" method="post" action="/api/web/company.api">
		<input type="hidden" name="act" id="act" value="tuiGuangJob">
		<input type="hidden" name="jid" id="jid" value="{$_GET['jid']}">
		<input id="cidHash" name="cidHash" type="hidden" value="{$com[cid]}"/>
		<div class="content" id="content" style="width:500px;">
			<section class="section">
				<hgroup>
					<div class="mod">
						<div class="form">
							<div class="formMod">
								<div class="l"><i></i></div>
								<div class="r">
									<span class="formRad">
										<input value="1" type="radio" name="radJobType" id="jobType1" class="radio" checked="checked"><label for="jobType1">搜索推广 (在职位搜索页面优先显示)</label>
									</span>
								</div>
								<div class="clear"></div>
							</div>
							<div class="formMod">
								<div class="l">职位<i></i></div>
								<div class="r">
										<span style="font-weight:bold; color:#222;">{$jobInfo['jname']}</span>
								</div>
								<div class="clear"></div>
							</div>
							<div class="formMod">
								<div class="l">搜索词<i></i></div>
								<div class="r">
									<span class="formText">
										<input type="text" style="width:200px;" value="" name="word" id="word" class="text" placeholder="请填写您要推广的关键词"> <span style="font-weight: normal;color: #999;font-family: Verdana,宋体;">例：销售</span>
									</span>
									<span class="tipTxt2"></span>
									<span class="tipPos">
										<span class="tipLay">
										</span>
									 </span>
								</div>
								<div class="clear"></div>
							</div>
							<div class="formMod">
								<div class="l">开始时间<i></i></div>
								<div class="r">
									<span class="formText">
										<input type="text" name="startTime" id="startTime" class="text" style="width:100px;" value=""  readonly="readonly">
									</span>
									<span class="tipTxt font14"></span>
									<span class="tipPos">
										<span class="tipLay"></span>
									</span>
									<i style="color: #6c6c6c;">推广时间<i>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="onDay" id="onDay" class="text" style="width:45px;" value="">&nbsp;&nbsp;天
								</div>
								<div class="clear"></div>
							</div>
							<div class="formMod">
								<div class="dayList" id="dayType">
									<span day="1">1天</span>
									<span day="2">2天</span>
									<span day="3">3天</span>
									<span day="5">5天</span>
									<span day="7">7天</span>
									<span day="10">10天</span>
									<span day="15">15天</span>
									<span day="30">30天</span>
								</div>
							</div>
							<div class="formMod">
								<div class="l">结束时间<i></i></div>
								<div class="r">
									<span class="formText">
										<input type="text" name="endTime" id="endTime" class="text" style="width:100px;" value="" readonly="readonly">
									</span>
									<span class="tipTxt font14"></span>
									<span class="tipPos">
										<span class="tipLay"></span>
									</span>
									<i style="color: #6c6c6c;">价格<i>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="price" id="price" class="text" style="width:45px;" value="" readonly="readonly">&nbsp;&nbsp;元
								</div>
								<div class="clear"></div>
							</div>
						</div>
						<div class="formBtn">
							<div id="publish" name="publish">确定</div>
						</div>
					</div>
				</hgroup>
			</section>
		</div>
	</form>

	<script type="text/javascript">
		var tuiGuang = {
			init:function(){
				//默认时间
				$("#startTime").val(tuiGuang.getDate());

				$("#onDay").keyup(function(){
					tuiGuang.count();
				});

				$("#startTime").focus(function(){
					WdatePicker({minDate:'%y-%M-%d'});
					if(Number($('#onDay').val())>0){
						tuiGuang.count();
					}
				});

				$("#dayType span").click(function(){
					var day = Number($(this).attr('day'));
					tuiGuang.count(day);
				});

				$("#publish").click(function(){
					if(tuiGuang.check()){
						$('#tuiGuangJob').submitForm({beforeSubmit: '', success: function(data){
							if(data.status==1){
								$('#publish').closeDialog();
								$.anchorMsg(data.msg);
								window.location.href = '/company/job/tuiguang.html?act=list';
							}else{
								$.message(data.msg,{ icon: 'warning' });
								return;
							}
							return;
						}, clearForm: false });
					}

				})

			},
			getDate:function(){//当前时间
				var today=new Date();
				var h=today.getFullYear();
				var m=today.getMonth()+1;
				var d=today.getDate();
				m= m<10?"0"+m:m;
				d= d<10?"0"+d:d;
				return h+"-"+m+"-"+d;
			},
			addDate:function(date,days){//日期相加
				days = Number(days);
				var d = date ? new Date(date) : new Date();
				d.setDate(d.getDate()+days);
				var month = d.getMonth()+1;
				var day = d.getDate();

				if(month<10){
					month = "0"+month;
				}
				if(day<10){
					day = "0"+day;
				}
				var val = d.getFullYear()+"-"+month+"-"+day;
				return val;
			},
			/**
			 * 检验日期是否合法； 返回ture则合法
			 * date为一个待检查的类日期字符串（如2013-01-01、2013/01/01、2013/01/32、2013/02/29）
			 */
			checkDate:function(date){
				return (new Date(date).getDate()==date.substring(date.length-2));
			},
			/**
			 * 判断选择的时间是否为过去的时间，返回true则为过去时间
			 */
			diffDate:function(date){
				var d = new Date(Date.parse(date.replace(/-/g,"/")))
					,curDate = new Date()
					,month = curDate.getMonth()+1
					,curDate2 = curDate.getFullYear()+'-'+month+'-'+curDate.getDate()
					,d2 = new Date(Date.parse(curDate2.replace(/-/g,"/")));
				if(d < d2){
					return true;
				}else{
					return false;
				}
			},
			cDate:function(checkStartDate, checkEndDate) {//比较日期大小
				var arys1= new Array();
				var arys2= new Array();
				if(checkStartDate != null && checkEndDate != null) {
					arys1=checkStartDate.split('-');
					var sdate=new Date(arys1[0],parseInt(arys1[1]-1),arys1[2]);
					arys2=checkEndDate.split('-');
					var edate=new Date(arys2[0],parseInt(arys2[1]-1),arys2[2]);
					var dd=(edate-sdate)/(24 * 60 * 60 * 1000);
					return dd;
					//alert(dd);
					//if(sdate >= edate) {return false;}
				}
			},
			tip:function(str){
				$.message(str, { title: '系统提示', icon: 'fail' });
				return;
			},
			count:function(curDay){
				var day = (curDay>0)?curDay:Number($('#onDay').val()),
					startTime = $('#startTime').val(),
					price = 30;
				if(!tuiGuang.checkDate(startTime)){
					tuiGuang.tip('请选择开始日期');
				}
				if(tuiGuang.diffDate(startTime)) tuiGuang.tip('开始日期不能是过去的时间');
				if(isNaN(day)){
					$('#onDay').val('');
					tuiGuang.tip('推广时间必须是数字');
				}
				if(day <= 0){
					$('#onDay').val('');
					tuiGuang.tip('推广时间必须大于0');
				}
				$('#endTime').val(tuiGuang.addDate(startTime,day));
				$('#price').val(day*price);
				if(curDay>0) $('#onDay').val(curDay);
			},
			check:function(){
		        var onDay = $('#onDay').val().trim(),
		        	startTime = $('#startTime').val().trim(),
		        	endTime = $('#endTime').val().trim(),
		        	word = $('#word').val().trim(),
		            //,content = $('#content').val().trim()
		            price = $('#price').val().trim();

		        //输入判断
		        if(!word){
		            tuiGuang.tip("搜索推广必须输入搜索词！");
		            $('#word').focus();
		            return false;
		        }

		        if(word !== '' && word.replace(' ','').length > 6){
		            tuiGuang.tip("搜索词不能多于6个字！");
		            $('#word').focus();
		            return false;
		        }

		        if(!startTime){
		            tuiGuang.tip("请选择开始时间！");
		            $('#startTime').focus();
		            return false;
		        }

		        if(!endTime){
		            tuiGuang.tip("请输入推广时间！");
		            $('#endTime').focus();
		            return false;
		        }


		        if(price==''){
		            tuiGuang.tip("价格不能为空！");
		            $('#price').focus();
		            return false;
		        }

		        if(isNaN(price)){
		            tuiGuang.tip("价格必须是数字！");
		            return false;
		        }

		        return true;
			}

		}
		tuiGuang.init();
	</script>
</body>
</html>