$(document).ready(function(){
    console.log('test');
});
$('#btn').on('click', function(){
    var text = $('#comment').val();
    var newP = "<p>" + text + "</p>";
    $('.comment-list').append(newP);
});