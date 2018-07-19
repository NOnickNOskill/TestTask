$('#1th').click(function(){
    history.pushState(null, null, '?sort=id');
});
$('#2th').click(function(){
    history.pushState(null, null, '?sort=name');
});
$('#3th').click(function(){
    history.pushState(null, null, '?sort=price');
});
$('#4th').click(function(){
    history.pushState(null, null, '?sort=rating');
});


