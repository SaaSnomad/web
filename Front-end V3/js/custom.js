    
    // Bootstrap Form validator
        $('#form').validator().on('submit', function (e) {
          if (e.isDefaultPrevented()) {
            // handle the invalid form...
          } else {
            // everything looks good!
          }
        })
     

    //  Parallax effect          
     new WOW().init(); 

    //  Counter   
        jQuery(document).ready(function( $ ) {
            $('.counter').counterUp({
                delay: 20,
                time: 1000
            });
        });
     

    //  Loading button  
     
        $('#load').on('click', function() {
            var $this = $(this);
          $this.button('loading');
            setTimeout(function() {
               $this.button('reset');
           }, 3000);
        });
      
 
    //  Valuation Estimate  
     
    $(document).ready(function(){
        var firstValue=$('#industry').find('option:selected').attr('value');
        var secondValue=$('#industry').find('option:selected').attr('data-othervalue');
        var mrr = $('#mrr').val();

        $('#mrr').on('keyup',(function(){
            var range_from=parseInt(firstValue*($(this).val()*12));
            $("#range-from").val('$ ' + range_from);
            var range_to=parseInt(secondValue*($(this).val()*12));
            $("#range-to").val('$ ' + range_to);
        }));
    });
      