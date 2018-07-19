$("document").ready(function(){
   $('body').on('click', '.update', function(){
       var str = document.getElementById(this.id + "row").innerHTML;
       var text = $(str).text();
       text = text.replace(/\s+/g,' ').trim();
       var arr = text.split(" ", 4);
       $('#u1').val(arr[0]);
       $('#u2').val(arr[1]);
       $('#u3').val(arr[2]);
       $('#u4').val(arr[3]);
       $("#popup1").show();
       $("#popup2").hide();
       
   });
   
   $('body').on('click', '#update', function(){
        var dannie = $("#uform").serialize();
        $.ajax({
            url: 'UpdateDb.php',
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
                                    alert("Product successfully updated!");
                                }
                            });
                    }
                });
            }
        });
        
    });
   
});

