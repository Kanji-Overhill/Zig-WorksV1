$( document ).ready(function() {
    $(".sign-up").click(function(e){
        e.preventDefault();
    });
    $(".filters-group button").click(function(){
    	
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.grid-item').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".grid-item").not('.'+value).hide('3000');
            $('.grid-item').filter('.'+value).show('3000');
            
        }
    });
    $(".share-link").click(function(e){
        e.preventDefault();
        $(this).addClass("d-none");
        $(".social-share").removeClass("d-none");
    });
    $(".grid-item").click(function(){
        $(".email-share").removeClass("d-none");
        $(".email-input").addClass("d-none");
        $(".email-success").addClass("d-none");
        $(".social-share").addClass("d-none");
    });
    $("#add-speaker").click(function(e){
        e.preventDefault();
        $(".speakers_form").append('<div class="d-flex mb-2"><input type="text" class="form-control" name="speaker_name[]" placeholder="Name"><select class="custom-select" name="speaker_type[]"><option selected hidden>Type Speaker...</option><option value="host">Host</option><option value="speaker">Speaker</option></select><input type="file" name="speaker_image[]" placeholder="Name"></div>')
    });

    

});