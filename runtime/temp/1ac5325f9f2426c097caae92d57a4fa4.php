<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:62:"F:\tp5\public/../application/admin\view\about\culture_add.html";i:1513667256;s:58:"F:\tp5\public/../application/admin\view\public\header.html";i:1492388819;s:58:"F:\tp5\public/../application/admin\view\public\footer.html";i:1492388819;}*/ ?>
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
<link rel="stylesheet" type="text/css" href="/static/admin/webupload/webuploader.css">
<link rel="stylesheet" type="text/css" href="/static/admin/webupload/style.css">
<!-- 头部结束 -->
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>添加企业文化</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="form_basic.html#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form class="form-horizontal" name="culture_add" id="culture_add" method="post" action="<?php echo url("","",true,false);?>">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">中文标题:</label>
                            <div class="input-group col-sm-4">
                                <input id="title" type="text" class="form-control" name="title" >
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div> 
                          <div class="form-group">
                            <label class="col-sm-3 control-label">英文名称:</label>
                            <div class="input-group col-sm-4">
                                <input id="ename" type="text" class="form-control" name="ename"">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div> 
                         <div class="form-group">
                            <label class="col-sm-3 control-label">小标题:</label>
                            <div class="input-group col-sm-4">
                                <input id="talent" type="text" class="form-control" name="talent"">
                            </div>
                        </div>
                         <div class="hr-line-dashed"></div> 
                         <div class="form-group">
                            <label class="col-sm-3 control-label">小内容:</label>
                            <div class="input-group col-sm-4">
                                <input id="stick" type="text" class="form-control" name="stick"">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                         <div class="form-group">
                            <label class="col-sm-3 control-label">图片：</label>
                            <div class="input-group col-sm-4">
                                <input type="hidden" id="data_photo" name="img" >
                                <div id="fileList" class="uploader-list" style="float:right"></div>
                                <div id="imgPicker">选择图片</div>
                                <div id="box">
                                    <img id="img_data" height="100px" style="float:left;margin-left: -10px;" src="/static/admin/images/no_img.jpg" />
                                </div>   
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div> 
                         <div class="form-group">
                            <label class="col-sm-3 control-label">描述一:</label>
                            <div class="input-group col-sm-4">
                            <textarea type="text"  name="social" id="social" class="form-control" style="resize:none"></textarea>   
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div> 
                         <div class="form-group">
                            <label class="col-sm-3 control-label">描述二:</label>
                            <div class="input-group col-sm-4">
                             <textarea type="text"  name="industry" id="industry" class="form-control" style="resize:none"></textarea>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div> 
                         <div class="form-group">
                            <label class="col-sm-3 control-label">描述三:</label>
                            <div class="input-group col-sm-4">
                            <textarea type="text"  name="humanistic" id="humanistic" class="form-control" style="resize:none"></textarea>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div> 
                         <div class="form-group">
                            <label class="col-sm-3 control-label">描述四:</label>
                            <div class="input-group col-sm-4">
                            <textarea type="text"  name="just" id="just" class="form-control" style="resize:none"></textarea>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div> 
                         <div class="form-group">
                            <label class="col-sm-3 control-label">描述五:</label>
                            <div class="input-group col-sm-4">
                             <textarea type="text"  name="excellent" id="excellent" class="form-control" style="resize:none"></textarea>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div> 
                         <div class="form-group">
                            <label class="col-sm-3 control-label">描述六:</label>
                            <div class="input-group col-sm-4">
                              <textarea type="text"  name="pulse" id="pulse" class="form-control" style="resize:none"></textarea>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div> 
                         <div class="form-group">
                            <label class="col-sm-3 control-label">描述七:</label>
                            <div class="input-group col-sm-4">
                             <textarea type="text"  name="market" id="market" class="form-control" style="resize:none"></textarea>
                            </div>
                        </div>
                            <div class="form-group">
                            <label class="col-sm-3 control-label">状&nbsp;态：</label>
                            <div class="col-sm-6">
                                <div class="radio i-checks">
                                    <input type="radio" name='status' value="1" checked="checked"/>开启&nbsp;&nbsp;
                                    <input type="radio" name='status' value="0" />关闭
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-3">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> 保存</button>&nbsp;&nbsp;&nbsp;
                                <a class="btn btn-danger" href="javascript:history.go(-1);"><i class="fa fa-close"></i> 返回</a>
                            </div>
                        </div>
                    </form>
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
<!-- footer结束-->
<script type="text/javascript" src="/static/admin/webupload/webuploader.min.js"></script>
<script type="text/javascript">
    var $list = $('#fileList');
    //上传图片,初始化WebUploader
    var uploader = WebUploader.create({    
        auto: true,// 选完文件后，是否自动上传。   
        swf: '/static/admin/js/webupload/Uploader.swf',// swf文件路径 
        server: "<?php echo url('Upload/upload'); ?>",// 文件接收服务端。
        duplicate :true,// 重复上传图片，true为可重复false为不可重复
        pick: '#imgPicker',// 选择文件的按钮。可选。

        accept: {
            title: 'Images',
            extensions: 'gif,jpg,jpeg,bmp,png',
            mimeTypes: 'image/jpg,image/jpeg,image/png'
        },
        'onUploadSuccess': function(file, data, response) {
            $("#data_photo").val(data._raw);
            $("#img_data").attr('src', '/uploads/images/' + data._raw).show();
        }
    });
    uploader.on( 'fileQueued', function( file ) {
        $list.html( '<div id="' + file.id + '" class="item">' +
            // '<h4 class="info">' + file.name + '</h4>' +
            '<p class="state">正在上传...</p>' +
        '</div>' );
    });
    // 文件上传成功
    uploader.on( 'uploadSuccess', function( file ) {
        $( '#'+file.id ).find('p.state').text('上传成功！');
    });
    // 文件上传失败，显示上传出错。
    uploader.on( 'uploadError', function( file ) {
        $( '#'+file.id ).find('p.state').text('上传出错!');
    });
</script>
<script type="text/javascript">
    $(function(){
        $('#culture_add').ajaxForm({
            beforeSubmit: checkForm, 
            success: complete, 
            dataType: 'json'
        });
        function checkForm(){
            if( '' == $.trim($('#title').val())){
                layer.msg('中文标题不能为空',{icon:2,time:1500,shade: 0.1}, function(index){
                layer.close(index);
                });
                return false;
            }
            // if( '' == $.trim($('#ename').val())){
            //     layer.msg('英文标题不能为空',{icon:2,time:1500,shade: 0.1}, function(index){
            //     layer.close(index);
            //     });
            //     return false;
            // }
            // if( '' == $.trim($('#talent').val())){
            //     layer.msg('小标题不能为空',{icon:2,time:1500,shade: 0.1}, function(index){
            //     layer.close(index);
            //     });
            //     return false;
            // }
            // if( '' == $.trim($('#stick').val())){
            //     layer.msg('小内容不能为空',{icon:2,time:1500,shade: 0.1}, function(index){
            //     layer.close(index);
            //     });
            //     return false;
            // }
            // if( '' == $.trim($('#data_photo1').val())){
            //     layer.msg('图片不能为空',{icon:2,time:1500,shade: 0.1}, function(index){
            //     layer.close(index);
            //     });
            //     return false;
            // }
            //  if( '' == $.trim($('#social').val())){
            //     layer.msg('描述一不能为空',{icon:2,time:1500,shade: 0.1}, function(index){
            //     layer.close(index);
            //     });
            //     return false;
            // }
            //  if( '' == $.trim($('#industry').val())){
            //     layer.msg('描述二不能为空',{icon:2,time:1500,shade: 0.1}, function(index){
            //     layer.close(index);
            //     });
            //     return false;
            // }
            //  if( '' == $.trim($('#lommmm').val())){
            //     layer.msg('描述三不能为空',{icon:2,time:1500,shade: 0.1}, function(index){
            //     layer.close(index);
            //     });
            //     return false;
            // } 
            // if( '' == $.trim($('#just').val())){
            //     layer.msg('描述四不能为空',{icon:2,time:1500,shade: 0.1}, function(index){
            //     layer.close(index);
            //     });
            //     return false;
            // }
            //  if( '' == $.trim($('#excellent').val())){
            //     layer.msg('描述五不能为空',{icon:2,time:1500,shade: 0.1}, function(index){
            //     layer.close(index);
            //     });
            //     return false;
            // }
            // if( '' == $.trim($('#pulse').val())){
            //     layer.msg('描述六不能为空',{icon:2,time:1500,shade: 0.1}, function(index){
            //     layer.close(index);
            //     });
            //     return false;
            // }
            // if( '' == $.trim($('#market').val())){
            //     layer.msg('描述七不能为空',{icon:2,time:1500,shade: 0.1}, function(index){
            //     layer.close(index);
            //     });
            //     return false;
            // }
        }
        function complete(data){
            if(data.code==1){
                layer.msg(data.msg, {icon: 6,time:1500,shade: 0.1}, function(index){
                    window.location.href="<?php echo url('culture_index'); ?>";
                });
            }else{
                layer.msg(data.msg, {icon: 5,time:1500,shade: 0.1});
                return false;   
            }
        }
        return false;
    },'json');
    //IOS开关样式配置
   var elem = document.querySelector('.js-switch');
        var switchery = new Switchery(elem, {
            color: '#1AB394'
        });
    var config = {
        '.chosen-select': {},                    
    }
    for (var selector in config) {
        $(selector).chosen(config[selector]);
    }

</script>
</body>
</html>