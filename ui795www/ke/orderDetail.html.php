<style>
    .OriginalPrice {
        text-decoration: line-through;
        font-size: 12px;
        color: #999;
        margin: 6px 0 0 10px;
        display: inline-block;
    }

    .CurrentPrice {
        font-size: 16px;
        color: #d70b17;
        font-weight: bold;
        vertical-align: middle;
        display: inline-block;
        margin-top: -4px;
    }


    .detail-course {
        padding: 0 10px;
        height: 70px;
        border-bottom: 1px solid #ddd;
    }

    .detail-course-name {
        margin-top: 15px;
    }

    .detail-course-name a {
        text-decoration: none;
        color: black;
        font-size: 14px;
    }

    .detail-course-name a:hover {
        text-decoration: none;
        color: #666;
        font-size: 14px;
    }

    .detail-course-bottom {
        margin-top: 20px;
    }

    .detail-course-extinfo {
        float: left;
        font-size: 12px;
        color: #aaa;
    }

    .detail-course-price {
        float: right;
    }

    .detail-course-total {
        height: 30px;
        margin: 20px 10px;
        font-size: 14px;
        color: #333;
    }
</style>
<body>
    <div>
        <!--{loop $keRows $val}-->
        <div class="detail-course">
            <div class="detail-course-name">
                <a href="/ke/detail.html?Id={$val['courseId']}" target="_blank">{$val['title']}</a>
            </div>
            <div class="detail-course-bottom">
                <div class="detail-course-extinfo">
                    所属分类：{$cateRows[$val['courseCatId']]['catName']}    讲师姓名：{$val['instrName']}
                </div>
                <div class="detail-course-price">
                    <a class='CurrentPrice'>￥{$val['price']}</a>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <!--{/loop}-->
        <div class="detail-course-total">
            <div style="text-align: right;">
                共计&nbsp;
                <a class='CurrentPrice'>￥{$countPrice}</a>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</body>
