
$(document).ready(function(){
  $("input#a1").click(function(){
    var mode= $(this).prop('checked');
    var checkid = $(this).val();
    if(checkid){
      $.ajax({
        type:'POST',
        url:'postone.php?id='+checkid,
        data: 'mode='+mode+'&kId='+checkid,
        success:function(html){
        }
      });
    }
  });
  $("input#a2").click(function(){
    var mode= $(this).prop('checked');
    var checkid = $(this).val();
    if(checkid){
      $.ajax({
        type:'POST',
        url:'posttwo.php?id='+checkid,
        data: 'mode='+mode+'&kId='+checkid,
        success:function(html){
        }
      });
    }
  });
  $("input#a3").click(function(){
    var mode= $(this).prop('checked');
    var checkid = $(this).val();
    if(checkid){
      $.ajax({
        type:'POST',
        url:'postthree.php?id='+checkid,
        data: 'mode='+mode+'&kId='+checkid,
        success:function(html){
        }
      });
    }
  });
  $("input#a4").click(function(){
    var mode= $(this).prop('checked');
    var checkid = $(this).val();
    if(checkid){
      $.ajax({
        type:'POST',
        url:'postfour.php?id='+checkid,
        data: 'mode='+mode+'&kId='+checkid,
        success:function(html){
        }
      });
    }
  });
  $("input#a5").click(function(){
    var mode= $(this).prop('checked');
    var checkid = $(this).val();
    if(checkid){
      $.ajax({
        type:'POST',
        url:'postfive.php?id='+checkid,
        data: 'mode='+mode+'&kId='+checkid,
        success:function(html){
        }
      });
    }
  });
  $("input#a6").click(function(){
    var mode= $(this).prop('checked');
    var checkid = $(this).val();
    if(checkid){
      $.ajax({
        type:'POST',
        url:'postsix.php?id='+checkid,
        data: 'mode='+mode+'&kId='+checkid,
        success:function(html){
        }
      });
    }
  });
  $("input#a7").click(function(){
    var mode= $(this).prop('checked');
    var checkid = $(this).val();
    if(checkid){
      $.ajax({
        type:'POST',
        url:'postsvn.php?id='+checkid,
        data: 'mode='+mode+'&kId='+checkid,
        success:function(html){
        }
      });
    }
  });
});
