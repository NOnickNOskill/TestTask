  $("document").ready(function(){
            $("#send").click(function(){
               var dannie = $("form").serialize();
               $.ajax({
                   url: 'AddtoDb.php',
                   type: 'POST',
                   data: dannie,
                   success: function() {
                      alert("New product successfully added!");
                      location.reload();
                   }
               }); 
            });
        });


