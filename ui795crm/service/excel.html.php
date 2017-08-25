{$top}
<Workbook xmlns="urn:schemas-microsoft-com:office:spreadsheet"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns:ss="urn:schemas-microsoft-com:office:spreadsheet"
xmlns:html="http://www.w3.org/TR/REC-html40">
<DocumentProperties xmlns="urn:schemas-microsoft-com:office:office">
	<Author>Administrator</Author>
	<LastAuthor>Administrator</LastAuthor>
	<Created>2015-11-14T03:10:55Z</Created>
	<Version>12.00</Version>
</DocumentProperties>
<ExcelWorkbook xmlns="urn:schemas-microsoft-com:office:excel">
	<WindowHeight>9630</WindowHeight>
	<WindowWidth>21555</WindowWidth>
	<WindowTopX>0</WindowTopX>
	<WindowTopY>90</WindowTopY>
	<ProtectStructure>False</ProtectStructure>
	<ProtectWindows>False</ProtectWindows>
</ExcelWorkbook>
<Styles>
	<Style ss:ID="Default" ss:Name="Normal">
		<Alignment ss:Vertical="Center"/>
		<Borders/>
		<Font ss:FontName="宋体" x:CharSet="134" ss:Size="11" ss:Color="#000000"/>
		<Interior/>
		<NumberFormat/>
		<Protection/>
	</Style>
	<Style ss:ID="s63">
	<Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
		<Borders>
			<Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
			<Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
			<Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
			<Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
		</Borders>
		<Font ss:FontName="宋体" x:CharSet="134" ss:Size="11" ss:Color="#000000"
			ss:Bold="1"/>
	</Style>
	<Style ss:ID="s64">
		<Borders>
			<Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
			<Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
			<Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
			<Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
		</Borders>
	</Style>
	<Style ss:ID="s66">
		<Borders>
			<Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
			<Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
			<Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
			<Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
		</Borders>
		<!--<NumberFormat ss:Format="yyyy/m/d\ h:mm;@"/>-->
	</Style>
	<Style ss:ID="s79">
		<Borders>
			<Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
			<Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
			<Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
			<Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
		</Borders>
		<Font ss:FontName="宋体" x:CharSet="134" ss:Size="11" ss:Color="#000000"
			ss:Bold="1"/>
	</Style>
	<Style ss:ID="s80">
		<Borders>
			<Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
			<Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
			<Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
			<Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
		</Borders>
		<Interior ss:Color="#DBE5F1" ss:Pattern="Solid"/>
	</Style>
</Styles>
<Worksheet ss:Name="绩效列表">
	<Table ss:ExpandedColumnCount="{$column}" ss:ExpandedRowCount="{$_number}" x:FullColumns="1"
	x:FullRows="1" ss:DefaultColumnWidth="54" ss:DefaultRowHeight="13.5">
	<Column ss:AutoFitWidth="0" ss:Width="88.5"/>
	<Column ss:AutoFitWidth="0" ss:Width="156.75"/>
	<Row ss:AutoFitHeight="0" ss:Height="18">
	<Cell ss:StyleID="s79"><Data ss:Type="String">添加日期</Data></Cell>
		<Cell ss:StyleID="s79"><Data ss:Type="String">企业名称</Data></Cell>
		<Cell ss:StyleID="s79"><Data ss:Type="String">站点</Data></Cell>
		<Cell ss:StyleID="s79"><Data ss:Type="String">套餐类型</Data></Cell>
		<Cell ss:StyleID="s79"><Data ss:Type="String">付款方式</Data></Cell>
		<Cell ss:StyleID="s79"><Data ss:Type="String">汇款户名</Data></Cell>
		<Cell ss:StyleID="s79"><Data ss:Type="String">金额</Data></Cell>
		<Cell ss:StyleID="s79"><Data ss:Type="String">新旧单</Data></Cell>
		<Cell ss:StyleID="s79"><Data ss:Type="String">有无执照</Data></Cell>
		<Cell ss:StyleID="s79"><Data ss:Type="String">汇款时间</Data></Cell>
		<Cell ss:StyleID="s79"><Data ss:Type="String">赠送资源</Data></Cell>
		<Cell ss:StyleID="s79"><Data ss:Type="String">跟单员</Data></Cell>
		<!--{if $op==2}-->
			<!--{loop $admins $admin}-->
				<Cell ss:StyleID="s80"><Data ss:Type="String">{$admin[adminUsername]}</Data></Cell>
			<!--{/loop}-->
		<!--{/if}-->
	</Row>
	<!--{loop $results $item}-->
	<Row ss:AutoFitHeight="0" ss:Height="21">
		<Cell ss:StyleID="s66"><Data ss:Type="String">{$item[_createTime]}</Data></Cell>
		<Cell ss:StyleID="s66"><Data ss:Type="String">{$item[cname]}</Data></Cell>
		<Cell ss:StyleID="s66"><Data ss:Type="String">{$item[web_site]}</Data></Cell>
		<Cell ss:StyleID="s66"><Data ss:Type="String">{$item[contract_title]}</Data></Cell>
		<Cell ss:StyleID="s66"><Data ss:Type="String">{$__paymentStr[$item[payment]]}</Data></Cell>
		<Cell ss:StyleID="s66"><Data ss:Type="String">{$item[account_name]}</Data></Cell>
		<Cell ss:StyleID="s66"><Data ss:Type="Number">{$item[contract_price]}</Data></Cell>
		<Cell ss:StyleID="s66"><Data ss:Type="String"><!--{if $item[new_old]==1}-->新<!--{else}-->旧<!--{/if}--></Data></Cell>
		<Cell ss:StyleID="s66"><Data ss:Type="String"><!--{if $item[license]==1}-->有<!--{else}-->无<!--{/if}--></Data></Cell>
		<Cell ss:StyleID="s66"><Data ss:Type="String"><!--{if $item[receipt]==1}-->{$item[_transferTime]}<!--{else}-->未付款<!--{/if}--></Data></Cell>
		<Cell ss:StyleID="s66"><Data ss:Type="String">{$item[contract_remark]}</Data></Cell>
		<Cell ss:StyleID="s66"><Data ss:Type="String">{$item[adminUsername]}</Data></Cell>
		<!--{if $op==2}-->
			<!--{loop $admins $admin}-->
				<Cell ss:StyleID="s66"><Data ss:Type="String"> <!--{if $admin[adminid]==$item[adminId]}-->{$item[contract_price]}<!--{else}--><!--{/if}--></Data></Cell>
			<!--{/loop}-->
		<!--{/if}-->
	</Row>
	<!--{/loop}-->
	</Table>
	<WorksheetOptions xmlns="urn:schemas-microsoft-com:office:excel">
		<PageSetup>
			<Header x:Margin="0.3"/>
			<Footer x:Margin="0.3"/>
			<PageMargins x:Bottom="0.75" x:Left="0.7" x:Right="0.7" x:Top="0.75"/>
		</PageSetup>
		<Unsynced/>
		<Print>
			<ValidPrinterInfo/>
			<PaperSizeIndex>9</PaperSizeIndex>
			<HorizontalResolution>600</HorizontalResolution>
			<VerticalResolution>600</VerticalResolution>
		</Print>
		<Selected/>
		<Panes>
			<Pane>
			<Number>3</Number>
			<ActiveRow>15</ActiveRow>
			<ActiveCol>5</ActiveCol>
			</Pane>
		</Panes>
		<ProtectObjects>False</ProtectObjects>
		<ProtectScenarios>False</ProtectScenarios>
	</WorksheetOptions>
</Worksheet>
</Workbook>
