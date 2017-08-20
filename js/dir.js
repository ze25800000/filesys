//创建目录
$('.createDir').on('click',function(){
  var url=$(this).attr('data-url');
  // alert(url);
  //加载layer prompt
  layer.prompt({
    formType: 0,
    title: '新建目录'
  }, function(value, index){
    // alert(value); //得到value
    //得到用户填写的值之后，通过ajax发送请求，将目录创建成功
    $.ajax({
      url:url+'&dirName='+value,
      type:'GET',
      success:function(data){
        // layer.alert('this is a test');
        var obj=JSON.parse(data);
        // alert(obj);
        layer.alert(obj.msg,{icon:obj.icon}, function(index){
          location.reload();
          layer.close(index);
        });
      }
    });
    layer.close(index);
  });

});
//重命名目录
$('.renameDir').on('click',function(){
  var url=$(this).attr('data-url');
  var showName=$(this).attr('data-showName');
  layer.prompt({
    title:'重命名目录',
    value:showName,
    formType:0
  },function(value,index){
    $.ajax({
      type:'GET',
      url:url+'&dirName='+value,
      success:function(data){
        var obj=JSON.parse(data);
        // alert(obj);
        layer.alert(obj.msg,{icon:obj.icon}, function(index){
          location.reload();
          layer.close(index);
        });
      }
    });
  });
});
//删除目录
$('.delDir').on('click',function(){
  var url=$(this).attr('data-url');
  var showName=$(this).attr('data-showName');
  layer.confirm('您确定要删除'+showName+'目录嘛？删除之后不可以恢复哟~~~',{
    btn:['确认','取消']
  },function(){
    $.ajax({
      type:'GET',
      url:url,
      success:function(data){
        var obj=JSON.parse(data);
        // alert(obj);
        layer.alert(obj.msg,{icon:obj.icon}, function(index){
          location.reload();
          layer.close(index);
        });
      }
    });
  },function(){
    layer.msg('只想弱弱提示下...',{
      time:3000
    });
  });

});
