// $('.m__tabs__wrapper__headers--title h3').on('click', function() {
    
//     let tabName = $(this).text();

//     let dataName = $('.m__tabs__wrapper__content__js').data('tabs');

//     console.log(dataName);

//     if (tabName === dataName) {

//         console.log('yes!')

//         console.log($(dataName));

//         $(dataName).addClass('active');
        
//     }
    
// });

$(document).ready(function() {

    // Tabs Section
    $('.m__tabs__wrapper__content__js:first').addClass('active');
    $('.m__tabs__wrapper__headers--title h3:first').addClass('active');

    $('.m__tabs__wrapper__headers--title h3').on('click', function() {
        $('.m__tabs__wrapper__headers--title h3').removeClass('active'); // Remove "active" class from all titles
        $(this).addClass('active'); // Add "active" class to the clicked title
        
        let tabName = $(this).text();
        
        $('.m__tabs__wrapper__content__js').each(function() {

            let dataName = $(this).data('tabs');
            
            if (tabName === dataName) {
                $(this).addClass('active');
            } else {
                $(this).removeClass('active');
            }

        });
    });
    
});