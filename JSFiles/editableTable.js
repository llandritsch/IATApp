$(document).ready(function(){
    //Add Class
    $('.edit').click(function(){
        $(this).addClass('editMode');
    });

    //Save data
    $(".edit").focusout(function(){
        $(this).removeClass("editMode");
        let fieldName = this.id;
        let value = $(this).text();

        $.ajax({
            url: '/IATApp/configFiles/editTable.php', 
            type: 'post',
            data: {field:fieldName, value:value},
            success: function(response) {
                console.log('Save successful');
            }
        });
    });
});