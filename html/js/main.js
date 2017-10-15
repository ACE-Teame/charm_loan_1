(function($){
	$(function(){
		 
       

        $('body').on('click', '.modify', function(){
            $('.popup').addClass('active');
            return false;
        });
        $('body').on('click', '.add', function(){
            $('.popup').addClass('active');
            return false;
        });
        $('body').on('click', '.popup .close', function(){
            $('.popup').removeClass('active');
            return false;
        });
        $('body').on('click', '.popup .cancle', function(){
            $('.popup').removeClass('active');
            return false;
        });

       
    });
})(jQuery);