$(function(){
    $('.order-recall').on('click', function(){
        $('#form-container').css('display', 'flex');
    });

    $('#form-container').on('click', function(event){
        if(event.target == this) {
        $('#form-container').css('display', 'none');//скрытие формы
            //скрывается контейнер
        }
    });

    $('#recall-form').on('submit', function () {

        let data = {
            'name': $(this).find('#name').val(),
            'phone': $(this).find('#phone').val(),
            'email': $(this).find('#email').val()
        };
        $.post('/api.php', data, function (response) {
            if(response == 1)
            {
            $('#recall-form input[type="text"]').val('');
            $('#form-container').css('display', 'none');
            }
        });
        return false;
    });
});



$(function(){
    $('.know-more').on('click', function(){
        $(this).text('Отзвонюсь в течение часа, закажи звонок->');
    });

});
