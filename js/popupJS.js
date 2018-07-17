$(document).ready(function(){
    $("#popup1").hide();
    $("#popup2").hide();
    
    $("#cancel1").click(function(){
        $("#popup1").hide();
    });
    
    $("#cancel2").click(function(){
        $("#popup2").hide();
    });
    
    $("#addNew").click(function(){
        $("#popup2").show();
        $("#popup1").hide();
    });
});

