function search(search_value){
    $.ajax({
        url: './category.php',
        type: 'POST',
        data: { 'search': search_value },
        success: function(response){
            $('#results').html(response);
        }
    });
}