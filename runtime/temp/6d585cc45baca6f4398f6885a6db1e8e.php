<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:56:"F:\tp5\public/../application/admin\view\about\index.html";i:1513668576;s:58:"F:\tp5\public/../application/admin\view\public\header.html";i:1492388819;s:58:"F:\tp5\public/../application/admin\view\public\footer.html";i:1492388819;}*/ ?>
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
            <h5>关于我们</h5>
        </div>
        <div class="ibox-content">  
            <!--搜索框结束-->
            <div class="hr-line-dashed"></div>
                <div class="input-group" >  
                        <a href="<?php echo url('add_about'); ?>"><button class="btn btn-outline btn-primary" type="button">添加公司简介</button></a> 
                    </div>
                   <form name="admin_list_sea" class="form-search" method="post" action=""></form> 
            <div class="example-wrap">
                <div class="example">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="long-tr">
                                <th>ID</th>
                                <th>标题</th>
                                <th>状态</th>
                                <th width="20%">操作</th>
                            </tr>
                        </thead>
                        <tbody id="article_list">
                            <?php if(is_array($about) || $about instanceof \think\Collection || $about instanceof \think\Paginator): if( count($about)==0 ) : echo "" ;else: foreach($about as $key=>$v): ?>
                                <tr class="long-td">
                                    <td><?php echo $v['id']; ?></td>
                                    <td><?php echo $v['title']; ?></td>
                                    <td>
                                        <?php if($v['status'] == 1): ?>
                                            <a href="javascript:;" onclick="about_state(<?php echo $v['id']; ?>);">
                                                <div id="zt<?php echo $v['id']; ?>"><span class="label label-info">开启</span></div>
                                            </a>
                                        <?php else: ?>    
                                            <a href="javascript:;" onclick="about_state(<?php echo $v['id']; ?>);">
                                                <div id="zt<?php echo $v['id']; ?>"><span class="label label-danger">禁用</span></div>
                                            </a>
                                        <?php endif; ?>   
                                    </td>
                                    <td>
                                        <a href="javascript:;" onclick="edit_about(<?php echo $v['id']; ?>)" class="btn btn-primary btn-xs btn-outline">
                                        <i class="fa fa-paste"></i> 编辑</a>&nbsp;&nbsp;
                                        <a href="javascript:;" onclick="delete_about(<?php echo $v['id']; ?>)" class="btn btn-danger btn-xs btn-outline">
                                            <i class="fa fa-trash-o"></i> 删除</a>
                                    </td>
                                </tr>
                           <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Panel Other -->
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
//编辑
function edit_about(id){
    location.href = './edit_about/id/'+id+'.html';
}
// 删除
function delete_about(id){
    layer.confirm('确认删除?', {icon: 3, title:'提示'}, function(index){
        //do something
        $.getJSON('<?php echo url('delete'); ?>', {'id' : id}, function(res){
            if(res.code == 1){
                layer.msg(res.msg,{icon:1,time:1500,shade: 0.1},function(){
                    window.location.href="<?php echo url('index'); ?>";
                });               
            }else{
                layer.msg(res.msg,{icon:0,time:1500,shade: 0.1});
            }
        });
        layer.close(index);
    })
}
//开启或禁用
function about_status(val){
    $.post('<?php echo url("cate_status"); ?>',
    {id:val},
    function(data){
         
        if(data.code==1){
            var a='<span class="label label-danger">禁用</span>'
            $('#zt'+val).html(a);
            layer.msg(data.msg,{icon:2,time:1500,shade: 0.1,});
            return false;
        }else{
            var b='<span class="label label-info">开启</span>'
            $('#zt'+val).html(b);
            layer.msg(data.msg,{icon:1,time:1500,shade: 0.1,});
            return false;
        }         
        
    });
    return false;
}
function about_state(id){
    lunhui.status(id,'<?php echo url("about_state"); ?>');
}
</script>
</body>
</html>