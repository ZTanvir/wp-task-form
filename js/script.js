

jQuery(function($){
    $('.task-form').submit(function(event) {
      event.preventDefault();

       const title = $("input[name = 'task-title']").val();
       const description = $("input[name = 'task-description']").val();
       console.log(title, description);

        $.ajax ({
            method : 'POST',
            url :"https://localhost/wp-json/form/v1/submit",
            data: {title:title,  description: description}
       })
     });

})


 