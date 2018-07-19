$("document").ready(function(){
    $('body').on('click', '.delete', function() {
        $.ajax({
            url: 'DeleteFromDb.php',
            type: 'POST',
            data: {dannie: this.id},
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
                                    alert("Product successfully deleted!");
                                }
                            });
                    }
                });
            }
        });
    });
});