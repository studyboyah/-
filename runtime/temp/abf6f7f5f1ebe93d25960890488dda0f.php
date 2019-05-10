<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:62:"F:\tp5\public/../application/admin\view\talent\index_list.html";i:1513336371;s:58:"F:\tp5\public/../application/admin\view\public\header.html";i:1492388819;s:58:"F:\tp5\public/../application/admin\view\public\footer.html";i:1492388819;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo config('WEB_SITE_TITLE'); ?></title>
    <link href="/static/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/static/admin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/static/admin/css/animate.min.css" rel="stylesheet">
    <link href="/static/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/static/admin/css/plugins/chosen/chosen.css" rel="stylesheet">
    <link href="/static/admin/css/plugins/switchery/switchery.css" rel="stylesheet">
    <link href="/static/admin/css/style.min.css?v=4.1.0" rel="stylesheet">
    <link href="/static/admin/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <style type="text/css">
    .long-tr th{
        text-align: center
    }
    .long-td td{
        text-align: center
    }
    </style>
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <!-- Panel Other -->
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>人才列表</h5>
        </div>
        <div class="ibox-content">
            <!--搜索框开始-->           
            <div class="row">
                <div class="col-sm-12">   
                <div  class="col-sm-2" style="width: 100px">
                    <div class="input-group" >  
                        <a href="<?php echo url('add_list'); ?>"><button class="btn btn-outline btn-primary" type="button">添加列表</button></a> 
                    </div>
                </div>                                            
                    <form name="admin_list_sea" class="form-search" method="post" action="<?php echo url('index_list'); ?>">
                        <div class="col-sm-3">
                            <div class="input-group">
                                <input type="text" id="key" class="form-control" name="key" value="<?php echo $val; ?>" placeholder="输入需查询的文章名称" />   
                                <span class="input-group-btn"> 
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> 搜索</button> 
                                </span>
                            </div>
                        </div>
                    </form>                         
                </div>
            </div>
            <!--搜索框结束-->
            <div class="hr-line-dashed"></div>
            <div class="example-wrap">
                <div class="example">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="long-tr">
                                <th width="5%">ID</th>
                                <th width="10%">姓名</th>
                                <th width="10%">照片</th>
                                <th width="10%">工作</th>
                                <th width="10%">简介</th>
                                 <th width="10%">座右铭</th>
                                <th width="10%">创建时间</th>
                                <th width="10%">更新时间</th>
                                <th width="8%">状态</th>
                                <th width="10%">操作</th>
                            </tr>
                        </thead>
                        <script id="list-template" type="text/html">
                            {{# for(var i=0;i<d.length;i++){  }}
                                <tr class="long-td">
                                    <td>{{d[i].id}}</td>
                                    <td>{{d[i].name}}</td>                                
                                    <td><img src="/uploads/images/{{d[i].img}}" style="height: 30px" onerror="this.src='/static/admin/images/no_img.jpg'"/></td> 
                                    <td>{{d[i].job}}</td>
                                    <td>{{d[i].introduction}}</td>
                                    <td>{{d[i].motto}}</td>
                                    <td>{{d[i].create_time}}</td> 
                                    <td>{{d[i].update_time}}</td>
                                    <td>
                                        {{# if(d[i].status==1){ }}
                                            <a href="javascript:;" onclick="cate_status({{d[i].id}});">
                                                <div id="zt{{d[i].id}}"><span class="label label-info">开启</span></div>
                                            </a>
                                        {{# }else{ }}
                                            <a href="javascript:;" onclick="cate_status({{d[i].id}});">
                                                <div id="zt{{d[i].id}}"><span class="label label-danger">禁用</span></div>
                                            </a>
                                        {{# } }}
                                    </td> 
                                    <!-- <td>
                                        {{# if(d[i].is_tui==1){ }}
                                            <a href="javascript:;" onclick="is_tui({{d[i].id}});">
                                                <div id="ct{{d[i].id}}"><span class="label label-info">是</span></div>
                                            </a>
                                        {{# }else{ }}
                                            <a href="javascript:;" onclick="is_tui({{d[i].id}});">
                                                <div id="ct{{d[i].id}}"><span class="label label-danger">否</span></div>
                                            </a>
                                        {{# } }}
                                    </td>    -->                            
                                    <td>
                                        <a href="javascript:;" onclick="edit_list({{d[i].id}})" class="btn btn-primary btn-xs btn-outline">
                                            <i class="fa fa-paste"></i> 编辑</a>&nbsp;&nbsp;
                                        <a href="javascript:;" onclick="del_list({{d[i].id}})" class="btn btn-danger btn-xs btn-outline">
                                            <i class="fa fa-trash-o"></i> 删除</a>
                                    </td>
                                </tr>
                            {{# } }}
                        </script>
                        <tbody id="list-content"></tbody>
                    </table>
                    <div id="AjaxPage" style="text-align:right;"></div>
                    <div style="text-align: right;">
                        共<?php echo $count; ?>条数据，<span id="allpage"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src="__JS__/jquery.min.js?v=2.1.4"></script>
<script src="__JS__/bootstrap.min.js?v=3.3.6"></script>
<script src="__JS__/content.min.js?v=1.0.0"></script>
<script src="__JS__/plugins/chosen/chosen.jquery.js"></script>
<script src="__JS__/plugins/iCheck/icheck.min.js"></script>
<script src="__JS__/plugins/layer/laydate/laydate.js"></script>
<script src="__JS__/plugins/switchery/switchery.js"></script><!--IOS开关样式-->
<script src="__JS__/jquery.form.js"></script>
<script src="__JS__/layer/layer.js"></script>
<script src="__JS__/laypage/laypage.js"></script>
<script src="__JS__/laytpl/laytpl.js"></script>
<script src="__JS__/lunhui.js"></script>
<script>
    $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
</script>
<script type="text/javascript">   
    /**
     * [Ajaxpage laypage分页]
     * @param {[type]} curr [当前页]
     */
    Ajaxpage();

    function Ajaxpage(curr){
        var key=$('#key').val();
        $.getJSON('<?php echo url("index_list"); ?>', {
            page: curr || 1,key:key
        }, function(data){      //data是后台返回过来的JSON数据
			$(".spiner-example").css('display','none'); //数据加载完关闭动画
            if(data==''){
                $("#list-content").html('<td colspan="20" style="padding-top:10px;padding-bottom:10px;font-size:16px;text-align:center">暂无数据</td>');
            }else{
                var tpl = document.getElementById('list-template').innerHTML;
                laytpl(tpl).render(data, function(html){
                    document.getElementById('list-content').innerHTML = html;
                });
                laypage({
                    cont: $('#AjaxPage'),//容器。值支持id名、原生dom对象，jquery对象,
                    pages:'<?php echo $allpage; ?>',//总页数
                    skip: true,//是否开启跳页
                    skin: '#1AB5B7',//分页组件颜色
                    curr: curr || 1,
                    groups: 3,//连续显示分页数
                    jump: function(obj, first){
                        if(!first){
                            Ajaxpage(obj.curr)
                        }
                        $('#allpage').html('第'+ obj.curr +'页，共'+ obj.pages +'页');
                    }
                });
            }
        });
    }
//编辑人才列表
function edit_list(id){
    location.href = './edit_list/id/'+id+'.html';
}
//删除新闻列表
function del_list(id){
    lunhui.confirm(id,'<?php echo url("del_list"); ?>');
}
// //新闻列表状态
function cate_status(id){
    lunhui.status(id,'<?php echo url("cate_status"); ?>');
}
// //新闻列表是否推荐
// function is_tui(id){
//     lunhui.is_tui(id,'<?php echo url("is_tui"); ?>');
// }
</script>
</body>
</html>