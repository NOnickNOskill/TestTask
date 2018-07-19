  $("document").ready(function(){
            $("#send").click(function(){
               var dannie = $("form").serialize();
               $.ajax({
                   url: 'AddtoDb.php',
                   type: 'POST',
                   data: dannie,
                   success: function() {
                    $.ajax({
                        url: 'createTable.php',
                        type: 'GET',
                        success: function(result){
                            $('#myTable').html(result);
                            $.ajax({
                                url: 'ScriptsUpdate.php',
                                type: 'GET',
                                success: function(result){
                                    $('#scripts').html(result);
                                    alert("New product successfully added!");
                                }
                            });
                        }
                    });
                   }
               }); 
            });
        });


