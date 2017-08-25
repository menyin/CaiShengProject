<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
<style type="text/css">
.preview{width:200px; height:235px;}
/* bigImg */
.bigImg{position:relative; float:left; width:200px; height:200px; overflow:hidden;}
.bigImg #midimg{width:200px; height:200px;}
.bigImg #winSelector{width:120px; height:120px;}
#winSelector{position:absolute; cursor:crosshair; filter:alpha(opacity=15); -moz-opacity:0.15; opacity:0.15; background-color:#000; border:1px solid #fff;}
/* bigView */
#bigView{position:absolute;border: 1px solid #959595; overflow: hidden; z-index:999;}
#bigView img{position:absolute;}
</style>
<style>
	.step_submit_btn a { margin: 5px 10px 0 0; width: 50px; height: 24px; line-height: 24px; text-align: center; border-radius: 4px; background: #eee; border: 1px solid #ccc; color: #666; cursor: pointer; display: inline-block; zoom: 1;}
	.step_submit_btn .tg_btn {background: #3d86bc; color: #fff; border: 1px solid #397eb2;}
</style>
<body> 
<div id="content">
	<!--{template nav}-->
	<div id="contentBody" style="visibility: visible;">
		<!--  小贴士 start  -->
		<div id="tips" class="hide" style="width: 256px;display:none">
		<div class="tips" style="">
			<div class="tips-title" style="">小贴士
				<div class="btn_close"></div>
			</div>
			<div class="list list-3 blockTextLink" data-bind="foreach: help_cats" style="">
				<div class="title">
					<div data-bind="text: cat">常见问题</div>
				</div>
				<div data-bind="foreach: links">
					<div class="items">
						<a target="_blank" data-bind="attr: {href: url}, text: title" href="#">你好，还没想到哦！</a>
					</div>
				
					<div class="items">
						<a target="_blank" data-bind="attr: {href: url}, text: title" href="#">后期更新</a>
					</div>
				</div>
				<div data-bind="&#39;if&#39;: $index() == $parent.help_cats().length -1">
					<div class="more">
						<div>
							更多： 
							<a href="#" target="_blank">帮助中心</a> &nbsp;
							<a href="#" target="_blank">售后支持</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="draggle">
		</div>
		</div>
		<!--  小贴士 end  -->
		<div class="content" style="">
			<div id="main" class="security-groups" style="">
				<div class="title">
					<div class="m_bg">企业审核 > <a href="check_licence.html?act=list&op={$op}">营业执照审核</a> > 执照详情</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<b>公司名称：</b><a href="/companyinfo/companyinfo.html?act=view&c_id={$_cid}" target="_blank">{$licence[_cname]}</a>
							<span class="gray"></span>
						</div>
					</div>
				</div>				
				<div class="mainContent" style="">
					<div class="main_content">
						<div class="layout_main">
							<div class="mod_pool">
								<div class="summary">
									<div class="apply_main">
										<div class="apply">
											<div class="apply_1">
												<form id="postForm" name="postForm" method="post">
													<input type="hidden" name="act" id="act" value="replaysave" />
													<input type="hidden" name="c_id" id="c_id" value="{$_cid}" />
													<input type="hidden" name="clid" id="clid" value="{$clid}" />
													<input type="hidden" name="op" value="{$op}" />
													<input type="hidden" name="query" value="{$q}" />
													<input type="hidden" name="query_day" value="{$query_day}" />
													<input type="hidden" name="page" value="{$page}" />
													<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
													<input type="hidden" name="form" id="form" value="{$form}" />
													<input type="hidden" name="check" id="check" value="{$licence[isCheck]}" />
													<div class="cell_tb_list">
														
														<table style="margin-top: 0px;">
															<tbody>
																<tr class="hover">
																	<td width="76" height="66"><span class="tb_title">招聘联系人：</span></td>
																	<td colspan="2">{$licence[comUser]}&nbsp;</td>
																	<td width="648" rowspan="7"><a href="{$licence[licenceurl]}" target="_blank"><div class="preview"><div id="vertical" class="bigImg"><img src="{$licence[licenceurl]}" height="150" id="midimg"><div style="display:none;" id="winSelector"></div></div><div id="bigView" style="display:;"><img width="700" height="700" alt="" src="" /></div></div></a></td>
																</tr>
																<tr class="hover">
																	<td height="50">招聘联系电话：</td>
																	<td colspan="2">{$licence['comPhone']}&nbsp;</td>
																</tr>
																<tr class="hover">
																<td height="39">招聘联系手机：</td>
																	<td colspan="2">{$licence['comMobile']}&nbsp;</td>
																</tr>
																<tr class="hover">
																	<td height="57"><span class="tb_title">注册公司名称：</span></td>
																	<td colspan="2">{$licence[_cname]}&nbsp;<b><a  onclick="Boxy.load('company.html?act=cname&c_id={$_cid}',{title: '企业名称修改'});">企业名称修改</a></b></td>
																</tr>
																<tr class="hover">
																	<td height="53">执照公司名称：</td>
																	<td colspan="2">{$licence['cname']}&nbsp;</td>
															    </tr>
																<tr class="hover">
																  <td height="69"><span class="tb_title">执照编号：</span></td>
																  <td colspan="2">{$licence[licenceid]}&nbsp;</td>
															    </tr>
																<tr class="hover">
																  <td>执照法人：</td>
																  <td colspan="2">{$licence[licencename]}&nbsp;</td>
															    </tr>
																<tr class="hoverout">
																	<td colspan="4">
																	<div onClick="change(1);">1.未通过认证，您上传的营业执照太模糊，请重新上传清晰且完整的最新营业执照（副本），以便通过认证，谢谢！</div>
																	<div onClick="change(2);">2.未通过认证，您上传的营业执照不完整，请重新上传清晰且完整的最新营业执照（副本），以便通过认证，谢谢！</div>
																	<div onClick="change(3);">3.未通过认证，您上传的执照名称与网站名称不一致，请重新上传与网站名称一致的营业执照副本或联系客服更改网站企业名称，以便通过认证，谢谢！</div>
																	<div onClick="change(4);">4.未通过认证，您上传的是营业执照（正本），请重新上传营业执照（副本）或者追加上传（税务登记证(副本)、组织机构代码证、开户许可证）其中一样，以便通过认证，谢谢！</div>
																	<div onClick="change(5);">5.未通过认证，您上传的营业执照未加盖企业公章，请重新上传清晰且完整的最新营业执照（副本）并加盖企业公章，以便通过认下，谢谢！</div>
																	<div onClick="change(6);">6.未通过认证，您上传的是个体工商户执照（正本），请重新上传个体工商户执照（副本）或者追加上传（法人身份证、税务登记证(副本)、组织机构代码证、开户许可证）其中一样，以便通过认证，谢谢！</div>
																	<div onClick="change(7);">7.未通过认证，您上传的非营业执照副本，请重新上传清晰且完整的最新营业执照（副本）并加盖企业公章，以便通过认证，谢谢！ </div>
																	<div onClick="change(8);">8.未通过认证，贵公司营业执照已变更，请重新上传清晰且完整的于***变更后的营业执照（副本），以便通过认证，谢谢！</div>
																	<div onClick="change(9);">9.未通过认证，您上传的营业执照尺寸太小，请重新上传清晰且完整的最新营业执照（副本），建议宽度尺寸800像素以上，以便通过认证，谢谢！</div></td>
																</tr>
																<tr class="hoverout">
																	<td class="tb_title">&nbsp;</td>
																	<td colspan="3"><textarea type="text" class="text1" id="reply" name="reply" cols="50" rows="6" message="请输入企业简介" style="border:1px solid #ccc;">{$licence[reply]}</textarea></td>
																</tr>
															</tbody>
														</table>
													</div>
													<div class="step_submit_btn">
														<!-- <button type="submit" name="step1_submit" class="step1_submit submit_btn_ok" id="step1_submit"></button> -->
														<a class="tg_btn" id="btnSave" onclick="aa(1);">通过</a>
														<a id="btn" onclick="aa(-2);">屏蔽</a>
													</div>
													<!--{if $op==ischeck}-->
														<div id="frame"  style="margin-top: 10px;">
															<iframe scrolling="auto" src="check_licence.php?act=unique&query='北京链家'&now_cid={$c_id}" width="100%" height="230" frameborder=0></iframe>
														</div>
													<!--{/if}-->
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!--{template company/sidebar}-->
	</div>
</div>
<script type="text/javascript">
function change(i){
	switch(i)
	{
		case 1:
			$("#reply").val("未通过认证，您上传的营业执照太模糊，请重新上传清晰且完整的最新营业执照（副本），以便通过认证，谢谢！");
			break;
		case 2:
			$("#reply").val("未通过认证，您上传的营业执照不完整，请重新上传清晰且完整的最新营业执照（副本），以便通过认证，谢谢！");
			break;
		case 3:
			$("#reply").val("未通过认证，您上传的执照名称与网站名称不一致，请重新上传与网站名称一致的营业执照副本或联系客服更改网站企业名称，以便通过认证，谢谢！");
			break;
		case 4:
			$("#reply").val("未通过认证，您上传的是营业执照（正本），请重新上传营业执照（副本）或者追加上传（税务登记证(副本)、组织机构代码证、开户许可证）其中一样，以便通过认证，谢谢！");
			break;
		case 5:
			$("#reply").val("未通过认证，您上传的营业执照未加盖企业公章，请重新上传清晰且完整的最新营业执照（副本）并加盖企业公章，以便通过认下，谢谢！");
			break;
		case 6:
			$("#reply").val("未通过认证，您上传的是个体工商户执照（正本），请重新上传个体工商户执照（副本）或者追加上传（法人身份证、税务登记证(副本)、组织机构代码证、开户许可证）其中一样，以便通过认证，谢谢！");
			break;
		case 7:
			$("#reply").val("未通过认证，您上传的非营业执照副本，请重新上传清晰且完整的最新营业执照（副本）并加盖企业公章，以便通过认证，谢谢！ ");
			break;
		case 8:
			$("#reply").val("未通过认证，贵公司营业执照已变更，请重新上传清晰且完整的于***变更后的营业执照（副本），以便通过认证，谢谢！");
			break;
		case 9:
			$("#reply").val("未通过认证，您上传的营业执照尺寸太小，请重新上传清晰且完整的最新营业执照（副本），建议宽度尺寸800像素以上，以便通过认证，谢谢！");
			break;
	}
}
function aa (check) {
	$("#check").val(check);
	$('#postForm').submit();
}
</script>
<script type="text/javascript">
$(document).ready(function(){
	
	// 解决 ie6 select框 问题
	$.fn.decorateIframe = function(options) {
        if ($.browser.msie && $.browser.version < 7) {
            var opts = $.extend({}, $.fn.decorateIframe.defaults, options);
            $(this).each(function() {
                var $myThis = $(this);
                //创建一个IFRAME
                var divIframe = $("<iframe />");
                divIframe.attr("id", opts.iframeId);
                divIframe.css("position", "absolute");
                divIframe.css("display", "none");
                divIframe.css("display", "block");
                divIframe.css("z-index", opts.iframeZIndex);
                divIframe.css("border");
                divIframe.css("top", "0");
                divIframe.css("left", "0");
                if (opts.width == 0) {
                    divIframe.css("width", $myThis.width() + parseInt($myThis.css("padding")) * 2 + "px");
                }
                if (opts.height == 0) {
                    divIframe.css("height", $myThis.height() + parseInt($myThis.css("padding")) * 2 + "px");
                }
                divIframe.css("filter", "mask(color=#fff)");
                $myThis.append(divIframe);
            });
        }
    }
 
    //放大镜视窗
    $("#bigView").decorateIframe();

 

    //大视窗看图
    function mouseover(e) {
        if ($("#winSelector").css("display") == "none") {
            $("#winSelector,#bigView").show();
        }

        $("#winSelector").css(fixedPosition(e));
        e.stopPropagation();
    }


    function mouseOut(e) {
        if ($("#winSelector").css("display") != "none") {
            $("#winSelector,#bigView").hide();
        }
        e.stopPropagation();
    }


    $("#midimg").mouseover(mouseover); //中图事件
    $("#midimg,#winSelector").mousemove(mouseover).mouseout(mouseOut); //选择器事件

    var $divWidth = $("#winSelector").width(); //选择器宽度
    var $divHeight = $("#winSelector").height(); //选择器高度
    var $imgWidth = $("#midimg").width(); //中图宽度
    var $imgHeight = $("#midimg").height(); //中图高度
    var $viewImgWidth = $viewImgHeight = $height = null; //IE加载后才能得到 大图宽度 大图高度 大图视窗高度

    function changeViewImg() {
        $("#bigView img").attr("src", $("#midimg").attr("src").replace("mid", "big"));
    }

    changeViewImg();

    $("#bigView").scrollLeft(0).scrollTop(0);
    function fixedPosition(e) {
        if (e == null) {
            return;
        }
        var $imgLeft = $("#midimg").offset().left; //中图左边距
        var $imgTop = $("#midimg").offset().top; //中图上边距
        X = e.pageX - $imgLeft - $divWidth / 2; //selector顶点坐标 X
        Y = e.pageY - $imgTop - $divHeight / 2; //selector顶点坐标 Y
        X = X < 0 ? 0 : X;
        Y = Y < 0 ? 0 : Y;
        X = X + $divWidth > $imgWidth ? $imgWidth - $divWidth : X;
        Y = Y + $divHeight > $imgHeight ? $imgHeight - $divHeight : Y;

        if ($viewImgWidth == null) {
            $viewImgWidth = $("#bigView img").outerWidth();
            $viewImgHeight = $("#bigView img").height();
            if ($viewImgWidth < 200 || $viewImgHeight < 200) {
                $viewImgWidth = $viewImgHeight = 800;
            }
            $height = $divHeight * $viewImgHeight / $imgHeight;
            $("#bigView").width($divWidth * $viewImgWidth / $imgWidth);
            $("#bigView").height($height);
        }

        var scrollX = X * $viewImgWidth / $imgWidth;
        var scrollY = Y * $viewImgHeight / $imgHeight;
        $("#bigView img").css({ "left": scrollX * -1, "top": scrollY * -1 });
        $("#bigView").css({ "top": 75, "left": $(".preview").offset().left + $(".preview").width() + 15 });

        return { left: X, top: Y };
    }

});
</script>
</body>
</html>