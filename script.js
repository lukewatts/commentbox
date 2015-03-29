function refresh()
{
    setTimeout(function() {
        $('.commentbox').load('index.php .commentbox');
        refresh();
    }, 3000);
}

$(document).ready(function() {

refresh();
    
});