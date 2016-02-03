jQuery(document).ready(function ($) {
    $('select').change(function(e){
            var total = 0;
            
            if($(".first-class-registered").is(":visible")){
                total += 40;
            }
            
            $('select').each( function(select){
                total += parseFloat(this.value);
                if(this.value >=1){
                    total += 25;
                }
              //  console.log(total);
            })
            
            $("#total").val(total);
        });
        
});