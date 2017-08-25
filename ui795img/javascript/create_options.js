var car_type_list = ["轿车","跑车","SUV越野车","MPV","货车","客车","面包车","其它"];
function create_car_type(obj,initValue)
	{
    	var e = document.getElementById(obj);
		e.options.add(new Option("选择车类型", ""));
		for (var i=0; i<car_type_list.length; i++)
				{	
					e.options.add(new Option(car_type_list[i], car_type_list[i]));
					if (initValue==car_type_list[i-1])
						{e.options[i].selected=true;}
				}
	}

var car_color_list = ["银色","银灰色","银白色","香槟色","深蓝色","沙黄色","青色","浅绿色","浅蓝色","墨绿色","米色","绿色","蓝色","咖啡色","金色","金黄色","灰色","灰白色","黄色","红色","黑色","褐色","橙色","白色","紫色","棕色"];
function create_car_color(obj,initValue)
	{
    	var e = document.getElementById(obj);
		e.options.add(new Option("选择颜色", ""));
		for (var i=0; i<car_color_list.length; i++)
				{	
					e.options.add(new Option(car_color_list[i], car_color_list[i]));
					if (initValue==car_color_list[i-1])
						{e.options[i].selected=true;}
				}
	}

function create_year(obj,initValue,initYear)
	{
    	var e = document.getElementById(obj);
		initYear=2011;
		if (initValue=="")
		{
			initValue=0
		}
		e.options.add(new Option("选择年", ""));
		el=1
		for (var i=initYear; i>initYear-20; i--)
			{			
				e.options.add(new Option(i, i));
				if (initValue == i)
					{			
						el=e.options.length;
					}
			}
		e.options[el-1].selected=true;
	}

function create_month(obj,initValue)
	{
		var e = document.getElementById(obj);
		if (initValue=="")
		{
			initValue=0
		}
		e.options.add(new Option("选择月", ""));
		el=1
		for (var i=1; i<13; i++)
			{			
				e.options.add(new Option(i, i));
				if (initValue == i)
					{			
						el=e.options.length;
					}
			}
		e.options[el-1].selected=true;
	}