$(function(){
			//清除错误消息
			function clearMsg(frm) {
				$('.tip', frm).remove();
			}
			var winW=$("#zfbox").width();
			//标记包裹图片
			$(".zf_content").find("img").wrap('<div class="x-loaded" style="width:'+winW+'px;min-height:220px;"></div>')
			//图片懒加载
            $('img[name="LazyloadImg"]').on('error', function() {
                $(this).parent().replaceWith('<div class="img_null">提示：图片载入失败</div>');
            }).on("load", function() {
                var $this = $(this);
                var $div = $this.parent();
                if (!$div.is('div')) $div = $div.parent();
                if (!$div.is('div')) return;

                $this.removeAttr('class');
                $this.removeAttr('style');

                var w = $this.width();

                $div.attr("class", "x-loaded");
                $div.css({ height: 'auto', minHeight: '1px' });

                if (w >= winW) {
                    $div.width(winW);
                    $this.width(winW);
                } else {
                    $div.width(w);
                }
			}).lazyload();
})