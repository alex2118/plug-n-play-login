$(document).ready(function(){

  $('.ajaxForm').submit(function(){

    var $this = $(this);
        data = $this.serialize();

    $.ajax({
      url: $this.attr('action'),
      type: $this.attr('method'),
      data: data,
      dataType: 'json',
      success: function(response) {
        // if () {
        //
        // } else {
        //
        // }
        console.log(response);
      }
    });
    return false;
  });

});
