$("document").ready(function() { 
    
    var parser = document.createElement('a');
    parser.href = window.location;
    
    if (parser.search === "?sort=id")
    {
        $("#tbl").tablesorter({ sortList: [[0, 0]] });
    }
    else if(parser.search === "?sort=name")
    {
        $("#tbl").tablesorter({ sortList: [[1, 0]] });
    }
    else if(parser.search === "?sort=price")
    {
        $("#tbl").tablesorter({ sortList: [[2, 0]] });
    }
    else if(parser.search === "?sort=rating")
    {
        $("#tbl").tablesorter({ sortList: [[3, 0]] });
    }
    else
    {
        $("#tbl").tablesorter();
    }
    
});
    

