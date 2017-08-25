define(function(require,exports,module) {
    var $ = require("$")
        ,util = require("util")
        ,person = require("action.person")
        ,sideBox = require("ui.sideBox")
        ,par

    var Dictionary = {
        PostDate:{
            name : "刷新时间",
            map : [1,3,7,15,30,60,90,183,366],
            //加入这个order数组用于自定义排序。
            order:{
                "1":1,
                "3":2,
                "7":3,
                "15":4,
                "30":5,
                "60":6,
                "90":7,
                "183":8,
                "366":9
            },
            getOrder:function(v){ return this.order[v+""];},
            "1":"近1天",
            "3":"近3天",
            "7":"近1周",
            "15":"近2周",
            "30":"近1月",
            "60":"近2月",
            "90":"近3月",
            "183":"近6月",
            "366":"近1年"
            ,getTxt :function(val,i){ return this[this.map[i]];}
            ,getVal :function(val,i){ return this.map[i];}
            ,setParameter : function(val){
                var v1=val;
                if(val === "ALL"){v1=366}
                my.Search.parameter.posPostDate=v1;
            }
            ,isAll : function(){
                if(par.posPostDate==366)return true
                return false
            }
            ,isSelect : function(v){
                return (par.posPostDate==v)?"active":""
            }
            ,sort : 1
        }
        ,WorkYear:{
            name : "工作年限",
            map : [-100,-1,0,1,2,3,4,5,6,7,8,9,10,11],
            //加入这个order数组用于自定义排序。
            order:{
                "-100":99,
                "-1":1,
                "0":2,
                "1":3,
                "2":4,
                "3":5,
                "4":6,
                "5":7,
                "6":8,
                "7":9,
                "8":10,
                "9":11,
                "10":12,
                "11":13
            },
            getOrder:function(v){ return this.order[v+""];},
            "-100":"不限",
            "-1":"在校学生",
            "0":"应届毕业生",
            "1":"1年",
            "2":"2年",
            "3":"3年",
            "4":"4年",
            "5":"5年",
            "6":"6年",
            "7":"7年",
            "8":"8年",
            "9":"9年",
            "10":"10年",
            "11":"10年以上"
            ,getTxt :function(val,i){ return this[val^0]}
            ,getVal :function(val){ return val^0}
            ,setParameter : function(val){
                var v1=val,v2=val;
                if(val === "ALL"){v1=-1,v2=11}
                par.workyear1=v1
                par.workyear2=v2
            }
            ,isAll : function(){
                if(par.workyear1==-1&&par.workyear2==11)return true
                return false
            }
            ,isSelect : function(v){
                return (par.workyear1==v&&par.workyear2==v)?"active":""
            }
            ,sort : 1
        }
        ,Sex : {
            "0":""
            ,"1":"男"
            ,"2":"女"
        }
        ,Salary:{
            name : "薪资要求",
            map : [0,15,20,30,45,60,80,100,150,200,300,500,600],
            //加入这个order数组用于自定义排序。
            order:{
                "0":99,
                "15":1,
                "20":2,
                "30":3,
                "45":4,
                "60":5,
                "80":6,
                "100":7,
                "150":8,
                "200":9,
                "300":10,
                "500":11,
                "600":12
            },
            getOrder:function(v){ return this.order[v+""];},
            "0":"未公开",
            "15":"1500以下",
            "20":"1500-1999",
            "30":"2000-2999",
            "45":"3000-4499",
            "60":"4500-5999",
            "80":"6000-7999",
            "100":"8000-9999",
            "150":"10000-14999",
            "200":"15000-19999",
            "300":"20000-29999",
            "500":"30000-49999",
            "600":"50000及以上"
            ,getTxt :function(val){ return this[val^0]}
            ,getVal :function(val){ return val^0}
            ,setParameter : function(val){
                var v1=val;
                if(val === "ALL"){v1=-1}
                par.salary=v1
            }
            ,isAll : function(){
                if(par.salary==-1)return true
                return false
            }
            ,isSelect : function(v){
                return (par.salary==v)?"active":""
            }
            ,sort : 1
        }
        ,Degree:{
            name : "学历要求",
            map : [0,10,20,30,40,50,60,70],
            //加入这个order数组用于自定义排序。
            order:{
                "0":99,
                "10":1,
                "20":2,
                "30":3,
                "40":4,
                "50":5,
                "60":6,
                "70":7
            },
            getOrder:function(v){ return this.order[v+""];},
            "0":"不限",
            "10":"初中及以下",
            "20":"高中",
            "30":"中专",
            "40":"大专",
            "50":"本科",
            "60":"硕士",
            "70":"博士"
            ,getTxt :function(val){ return this[val]}
            ,getVal :function(val){ return val^0}
            ,setParameter : function(val){
                var v1=val,v2=val;
                if(val === "ALL"){v1=10,v2=70}
                par.degreeId1=v1
                par.degreeId2=v2
            }
            ,isAll : function(){
                if(par.degreeId1==10&&par.degreeId2==70)return true
                return false
            }
            ,isSelect : function(v){
                return (par.degreeId1==v&&par.degreeId2==v)?"active":""
            }
            ,sort : 1
        }
        ,TYPE : ["postdate","reqworkyear","reqdegreeid","salary"]	//兼容处理 部分浏览器的排序问题
    }
    //兼容处理
    Dictionary["reqworkyear"] = Dictionary.WorkYear
    Dictionary["postdate"] = Dictionary.PostDate
    Dictionary["reqdegreeid"] = Dictionary.Degree
    Dictionary["salary"] = Dictionary.Salary

    var cache = {}

    var out = {
        config : {}
        //搜索结果页面
        ,init : function(DATA){
            person.updateInfo();
            var searchPar = $("#searchPar").attr("title");
            // $("#searchPar").html(searchPar.replace(/\+/g,"[$]").replace(/\[-\]/g,"+").replace(/^\++|\++$/g,"").replace(/\+{2,}/,"+").replace(/\[\$\]/g,"+"));
            if(my.Search.parameter.keyword==null) my.Search.parameter.keyword = '';
			if ( !my.Search.parameter.keyword.length && !my.Search.parameter.keyword2.length) {
                $('.sorting').hide();
            } else{
                // 0 职位 ; 1 企业 ; 2 全文
                var active = "1";
                if(/\d/.test(my.Search.parameter.kwType)){
                    active = my.Search.parameter.kwType;
                }
                $("div.sorting li").removeClass("active");
                $("#sortBy_"+active).addClass("active");
            }

            $("#sortBy").click(function(){
                $(this).next().toggle();
            }).next().find("li").each(function(){
                    var $this = $(this);
                    if($this.hasClass(my.Search.parameter.sortBy)){
                        $this.hide();
                        $("#sortBy span").html($this.html());
                    }
                    $this.click(function(){
                        $this.append('<div class="ui-loading" style="z-index:2"><span></span></div>');
                    })
                });
            par  = my.Search.parameter
            if(!DATA){
                alert('分类数据意外错误,请刷新或联系597');
                return;
            }

            // out.markKeyWord();
            out.highlightKeyword();

            var TYPE = Dictionary.TYPE
                ,tmpHTML = ""
                ,typeHTML = ""
            for(var t=0;t<TYPE.length;t++){
                var item = Dictionary[TYPE[t]]
                    ,list = DATA[TYPE[t]].choicelist;
                if(item.sort)
                    list.sort(function(a,b){
                            /**
                             * JOBCNX-1585
                             职位搜索结果页面筛选条件固定排序.
                             添加了order数组，按照order的序号排列。
                             * */
                            var _aOrder=item.getOrder(a.val);
                            var _bOrder=item.getOrder(b.val);
                            return _aOrder-_bOrder;
                        }
                    );
                tmpHTML +=
                    '<dl>'
                        +'	<dt class="current '+TYPE[t]+'">'+item.name+'</dt>'
                        +'	<dd class="hide '+TYPE[t]+'">'
                        +'		<ul>'
                        +'			<li><label class="'+(item.isAll()?"active":"")+'" onclick="my.Search.get(\''+TYPE[t]+'\',\'ALL\')">所有</label></li>'
                for(var s=0; s<list.length; s++){
                    if(list[s].hits>0){
                        tmpHTML += '<li><label class="'+item.isSelect(item.getVal(list[s].val,s))+'" onclick="my.Search.get(\''+TYPE[t]+'\','+item.getVal(list[s].val,s)+')">'+item.getTxt(list[s].val,s)+'<span>('+list[s].hits+')</span></label></li>'
                    }
                }
                tmpHTML +=
                    '		</ul>'
                        +'	</dd>'
                        +'</dl>'
            }//end for

            var sortTmp = "<h3>排序</h3>"
                        + "<ul>"
                        + "  <li class=\"sortLine\"><label onclick=\"my.Search.get('sortBy', 'default')\">综合排序</label></li>"
                        + "  <li class=\"sortLine\"><label onclick=\"my.Search.get('sortBy', 'postdate')\">刷新时间时间</label></li>"
                        + "  <li class=\"sortLine\"><label onclick=\"my.Search.get('sortBy', 'inserttime')\">发布时间</label></li>"
                        + "</ul>"

            var sboxBODY = 	$($("#pos_filter_html").val())
                ,dir = sboxBODY.find(".dir")
                ,sortDiv = sboxBODY.find(".sort")
            dir.html(tmpHTML)
            /**
             * JOBCNX-2188
             * 卓博网相关调整（撤销招聘截止时间+隐藏综合排序、发布时间+个人端隐藏简历处理率）
             */
            // sortDiv.html(sortTmp)
            dir.find("dt").click(function(){
                if($(this).hasClass("lookshow"))
                    $(this).removeClass("lookshow")
                else
                    $(this).addClass("lookshow")
                $(this).next().toggle()
            });
            var sbox = new sideBox({right:280,className:"filter"})
            sbox.init(sboxBODY);
            $("#pos_filter_btn").click(function(){
                sbox.show()
            });
            person.showPageSelect();
        }
        ,markKeyWord : function () {
            var keyWord  = my.Search.parameter.keyword2 || my.Search.parameter.keyword;
            keyWord = decodeURIComponent(keyWord)
            		.replace(/[~!@\$\%\\\^*\(\)\{\}\:\"\<\>\?\/。、，,！￥？“：”;；（）\'\[\]\=\| ]|\s+/g, ' ')
        			.replace(/([\\\^\&\*\+\?\(\)\[\]\{\}\|])/g,'\\$1')
        			.replace(/\band\b/i, ' ')
        			.replace(/[,;\s]*\bor\b[,;\s]*/i, ' ')
        			.split(' ').join('|');
            var wordRegx = new RegExp( keyWord, 'ig' );
            var replaceRegx = new RegExp( '('+keyWord+')', 'ig' );
            $('dt span,dd:nth-child(2)','#result_data dl').each(function(){
                var $this = $(this);
                var keyText  = $this.text();
                wordRegx.compile();
                if ( wordRegx.test( keyText ) ) {
                    $this.html( keyText.replace( replaceRegx, '<span style="color:#f30;">$1</span>' ) );
                }
            });
        }
        ,highlightKeyword: function() {
            var keyword = util.highlight.formatKeyword(my.Search.parameter.keyword2 || my.Search.parameter.keyword);
            if (keyword && keyword.length) {
                var keywordRegex = new RegExp(keyword, 'ig');
                var highlightRegex = new RegExp('(' + keyword + ')', 'ig');
                var highlightElement = '<span style="color:#f30;">$1</span>';
                $('dt span,dd:nth-child(2)','#result_data dl').each(function() {
                    var $this = $(this);
                    var keyText  = $this.text();
                    var result = util.highlight.processing({
                        rawStr: keyText,
                        regex: {
                            keyword: keywordRegex,
                            highlight: highlightRegex
                        },
                        highlightElement: highlightElement
                    });
                    $this.html(result);
                });
            }
        }
        //参数转网址 —— 搜索结果用
        ,par2url : function(){
            var tmp=""
            for(var obj in par){
                if(obj=="keyword")par[obj]=encodeURIComponent(par[obj])
                tmp+="&"+obj+"="+(par[obj]+"").replace(/\+/g,"%2b")
            }
            return tmp.length>1?tmp.substring(1):tmp
        }
        ,setParameter : function(type,val){
            if(type === "sortBy"){
                par.sortBy = val
            }else if( type === 'kwType' ){
                par.kwType = val
            }else{
                Dictionary[type].setParameter(val);
            }
            var otherFlag1 = 0;
            if (par.degreeId1== 10 && par.degreeId2== 70) otherFlag1 = 2;
            var otherFlag2 = 0
            if (par.workyear1==-1 && par.workyear2 == 11) otherFlag2 = 1;
            par.otherFlag = otherFlag1 + otherFlag2
            //更改条件 设置重新搜索
            par.newSearch = true;
            par.pageNo = 1
        }
    }
    module.exports = out;
});
