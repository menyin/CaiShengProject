<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--{template header}-->
<link href="//cdn.{ROOT_DOMAIN}/crm/css/database.css" type="text/css" rel="stylesheet">
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
			<div class="draggle"></div>
		</div>
		<!--  小贴士 end  -->
		<div class="content" style="">
			<div id="main" class="security-groups" style="">
				<div class="title">
					<div class="m_bg">站点管理 > 链接设置</div>
				</div>
				<div class="quickbar">
					<div class="note">小贴士</div>
					<div class="btns">
						<div class="btn-line clearfix">
							<div class="btn icon-1 icon"><a href="link.html?act=edit">新增链接</a></div>
							<!--<div class="btn icon-2 disabled icon">删除用户</div>-->
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
												<div class="">
												<form id="postForm" name="postForm" method="post">
													<input type="hidden" name="act" id="act" value="save" />
													<input type="hidden" name="link_id" id="link_id" value="{$link['link_id']}" />
													<input type="hidden" name="formhash" id="formhash" value="{$formhash}" />
													<input type="hidden" name="form" id="form" value="{$form}" />
													<div class="cell_tb_list">
														<table style="margin-top: 0px;">
															<tr>
																<td class="tb_title" width="140px">链接ID：</td>
																<td>{$link[link_id]}</td>
															</tr>			
															<tr>
																<td class="tb_title">站点区域：</td>
																<td>
	                                    							<input type="hidden" id="link_regionId" name="link[link_regionId]" value="{$link[link_regionId]}" />
																	<input type="text" class="search input_txt" id="link_region" name="link[link_region]" value="{$link[link_region]}" title="{$link[link_region]}" onclick="Boxy.load('/subpage_area.htm',{title: '请选择服务地区'});" readonly="true"> 
								                                    <script language="javascript">
								                                        var areaOdjid='link_regionId'; 
								                                        var areaOdjstr='link_region';
								                                        var areaOdjProvice=1;//是否省可选
								                                        var areaOdjjoin=1;//是否允许级联，级联状态下上下级皆可选（0不允许，1允许）
								                                        var areaOdjnumber=1;//数量，如果唯一值，则立即返回
								                                    </script>
																</td>
															</tr>											
                                                            <tr>
                                                                <td class="tb_title">链接名称：</td>
                                                                <td><input type="text" class="text1" id="link_name" name="link[link_name]" placeholder="例子：597人才网" value="{$link[link_name]}"/></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="tb_title">链接地址：</td>
                                                                <td><input type="text" class="text1" id="link_url" name="link[link_url]" placeholder="例子：http://www.597.com" value="{$link[link_url]}"/></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="tb_title">链接图片：</td>
                                                                <td><input type="text" class="text1" name="link[link_img]" placeholder="例子：bj" value="{$link[link_img]}"/></td>
                                                            </tr>
														</table>
													</div>
													</form>
												</div>
												<div class="apply_btn_next">
													<div class="apply_btn_bg">
														<a class="apply_1_next" id="btnSave">下一步</a>
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
			</div>
			<!--<div class="draggle "></div>-->  
		</div>	  
		<!--{template setting/sidebar}-->   
	</div>  
</div>
<script type="text/javascript">
	$('#btnSave').click(function(){
		var link_regionId=$("#link_regionId").val();
		var link_name=$("#link_name").val();
		var link_url=$('#link_url').val();
		/*if(link_regionId=='' || typeof(link_regionId) == 'undefined'){
			alert('请选择区域！');
			return;
		}*/
		if($('#link_name').val() == ''||typeof($('#link_name').val()) == 'undefined'){
			alert('请输入链接名称！');
			return;
		}
		if($('#link_url').val() == ''||typeof($('#link_url').val()) == 'undefined'){
			alert('请输入链接地址！');
			return;
		}
		$('#postForm').submit();
		return false;
	});
</script>
</body>
</html>
