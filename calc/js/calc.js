$(function(){
  $('#add').change(function(){
    if ($(this).is(':checked')) {
      $('#ans_add').prop('disabled', false);
    }
    else {
      $('#ans_add').prop('disabled', true);
    }
  });
});