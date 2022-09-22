

jQuery(function($){
    $('.task-form').submit(function(event) {
      event.preventDefault();

       const title = $("input[name = 'task-title']").val();
       const description = $("input[name = 'task-description']").val();
       console.log(title, description);

        $.ajax ({
            method : 'POST',
            url : '<?php echo get_rest_url(null,null);?>',
            data: {title:title,  description: description}
       })
     });

})


 