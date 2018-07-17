$(document).ready(function(){
    $('.delete').click(function() {
        $.ajax({
            url: 'DeleteFromDb.php',
            type: 'POST',
            data: {dannie: this.id},
            success: function() {
                alert("Product successfully deleted");
                location.reload();
            }
        }); 
    });
});