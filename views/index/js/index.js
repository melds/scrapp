$(function(){
  $(".edit-trigger").on("click",function(){
    var id = $(this).attr('rel');
    $("#a_id").val(id);
    $.post("/alumni/index/getInfo",{id:id},function(o){
       console.log(o);
      var d = $.parseJSON(o)[0];
      $(".edit_form").find("#fname").focus();
      $(".edit_form").find("#fname").val(d['fname']);
      $(".edit_form").find("#mname").focus();
      $(".edit_form").find("#mname").val(d['mname']);
      $(".edit_form").find("#lname").focus();
      $(".edit_form").find("#lname").val(d['lname']);
      $(".edit_form").find("#batch").focus();
      $(".edit_form").find("#batch").val(d['batch']);
      $(".edit_form").find("#course").focus();
      $(".edit_form").find("#course").val(d['course']);
      $(".edit_form").find("#controlnum").focus();
      $(".edit_form").find("#controlnum").val(d['control_num']);
      $(".edit_form").find("#occupation").focus();
      $(".edit_form").find("#occupation").val(d['occupation']);
      $(".edit_form").find("#address").focus();
      $(".edit_form").find("#address").val(d['address']);
      $(".edit_form").find("#company").focus();
      $(".edit_form").find("#company").val(d['company']);
      $(".edit_form").find("#contact").focus();
      $(".edit_form").find("#contact").val(d['contact_num']);
      if(d['raffle']=='1'){
        $(".edit_form").find("#raffle").attr("checked","checked");
      }else{
        $(".edit_form").find("#raffle").removeAttr("checked");
      }
      $(".edit_form").find("#fname").focus();

    });
  });
  if($(".advance_search .hidden").length>0){
    $('#chevron').css("transform","rotate(0deg)");
    $("#course_select").removeAttr("name");
    $("#search_batch").removeAttr("name");
  }else{
    $('#chevron').css("transform","rotate(90deg)");
    $("#course_select").attr("name","course");
    $("#search_batch").attr("name","batch");
  }

  $(".advance_search_btn").click(function(){
    $('#chevron').css("transform","rotate(90deg)");
    if($('#chevron').css('transform') == "matrix(6.12323e-17, 1, -1, 6.12323e-17, 0, 0)"){
      $('#chevron').css("transform","rotate(0deg)");
      $("#course_select").removeAttr("name");
      $("#search_batch").removeAttr("name");
    }else{
        $('#chevron').css("transform","rotate(90deg)");
        $("#course_select").attr("name","course");
        $("#search_batch").attr("name","batch");
    }
    $('.advance_inputs').slideToggle(200);
  });
});
