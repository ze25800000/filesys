  //创建文件
  $('.createFile').on('click',function(){
    var url=$(this).attr('data-url');
    //加载layer prompt
    layer.prompt({
      formType: 0,
      title: '新建文件'
    }, function(value, index){
      $.ajax({
        url:url+'&fileName='+value,
        type:'GET',
        success:function(data){
          var obj=JSON.parse(data);
          layer.alert(obj.msg,{icon:obj.icon}, function(index){
            location.reload();
            layer.close(index);
          });
        }
      });
      layer.close(index);
    });
  });
//查看文件内容
$('.showContents').on('click',function(){
  var url=$(this).attr('data-url');
  $.ajax({
    type:'GET',
    url:url,
    success:function(data){
      var index = layer.open({
        type: 1,
        title: '查看文件',
        closeBtn: 2,
        shadeClose: true,
        content:data
      });
      layer.full(index);
    }
  });
});
