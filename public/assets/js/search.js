$(document).ready(function(){ 

    $("#search").keyup(function(){

        var input = $(this).val();
        
        if(input != ""){
            $.ajax({
                
                url:"http://localhost/wikipedia/public/auteurs/searchAjax",
                method:"POST",
                data:{input:input},

                success:function(data){
                    $('#searchResult').html(data);
                    $("#searchResult").css("display","block");
                }
            });
        }else{
            $("#searchResult").css("display","none");
        }
    });
});