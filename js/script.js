

jQuery(function($){
    $('.task-form-btn').submit(function(event) {   
      event.preventDefault();
      console.log('hiiii');
       var title = $("input[name = 'task-title']").val();
       var description = $("input[name = 'task-description']").val();
        $.ajax ({
            method : 'POST',
            url : '<?php echo get_rest_url(null,null);?>',
            data: {title:title,  description: description}
       })
     });

})


 