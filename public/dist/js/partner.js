$(document).ready( function() {
    
    $(".option-content-partner").on("click", function(){
        $(".content-partner.active").addClass("inactive");
        $(".content-partner.active").removeClass("active");
        var id_option=$(this).attr("id");
        $("#contentPartner"+id_option).removeClass("inactive");
        $("#contentPartner"+id_option).addClass("active");
        
        $(".content-"+id_option).removeClass("active");
        $(".content-"+id_option).addClass("inactive");
        $(".content-"+id_option+":first").removeClass("inactive");
        $(".content-"+id_option+":first").addClass("active");
        
        $(".option-content-partner.option-active").addClass("option-inactive");
        $(".option-content-partner.option-active").removeClass("option-active");
        $(this).addClass("option-active");
        $(this).removeClass("option-inactive");
        
        $(".opcion-content-"+id_option).removeClass("sub-option-active");
        $(".opcion-content-"+id_option).addClass("sub-option-inactive");
        $(".opcion-content-"+id_option+":first").removeClass("sub-option-inactive");
        $(".opcion-content-"+id_option+":first").addClass("sub-option-active");
    });
    
    $(".opcion-content-Market").on("click", function(){
        $(".content-Market.active").addClass("inactive");
        $(".content-Market.active").removeClass("active");
        var id_option=$(this).attr("id");
        $("#contentMarket"+id_option).removeClass("inactive");
        $("#contentMarket"+id_option).addClass("active");
        
        $(".opcion-content-Market.sub-option-active").addClass("sub-option-inactive");
        $(".opcion-content-Market.sub-option-active").removeClass("sub-option-active");
        $(this).addClass("sub-option-active");
        $(this).removeClass("sub-option-inactive");
    });
    
    $(".opcion-content-Requirements").on("click", function(){
        $(".content-Requirements.active").addClass("inactive");
        $(".content-Requirements.active").removeClass("active");
        var id_option=$(this).attr("id");
        $("#contentRequirements"+id_option).removeClass("inactive");
        $("#contentRequirements"+id_option).addClass("active");
        
        $(".opcion-content-Requirements.sub-option-active").addClass("sub-option-inactive");
        $(".opcion-content-Requirements.sub-option-active").removeClass("sub-option-active");
        $(this).addClass("sub-option-active");
        $(this).removeClass("sub-option-inactive");
    });
    
    $(".opcion-content-Application").on("click", function(){
        $(".content-Application.active").addClass("inactive");
        $(".content-Application.active").removeClass("active");
        var id_option=$(this).attr("id");
        $("#contentApplication"+id_option).removeClass("inactive");
        $("#contentApplication"+id_option).addClass("active");
        
        $(".opcion-content-Application.sub-option-active").addClass("sub-option-inactive");
        $(".opcion-content-Application.sub-option-active").removeClass("sub-option-active");
        $(this).addClass("sub-option-active");
        $(this).removeClass("sub-option-inactive");
    });
    
    $("#mStatus").on("change", function(){
        var status=$(this).val();
        if(status=="Other"){
            $("#otherMStatus").removeClass("inactive");
            $("#otherMStatus").addClass("active");
        }
        else{
            $("#otherMStatus").removeClass("active");
            $("#otherMStatus").addClass("inactive");
        }
    });
    
    $("#applicatePartner").on("click", function(e){
        var fname=$("#fname").val();
        var lname=$("#lname").val();
        var mobile=$("#mobile").val();
        var altMobile=$("#altMobile").val();
        var email=$("#email").val();
        var sNumber=$("#sNumber").val();
        var sName=$("#sName").val();
        var city=$("#city").val();
        var residency=$("#residency").val();
        var country=$("#country").val();
        var zip=$("#zip").val();
        
        var birth=$("#birth").val();
        var contracted="";
        if($("#contracted1").is(':checked') || $("#contracted2").is(':checked')){
            contracted="checked";
        }
        var veteran="";
        if($("#veteran1").is(':checked') || $("#veteran2").is(':checked')){
            veteran="checked";
        }
        var experience=$("#experience").val();
        var spouse="";
        if($("#spouse1").is(':checked') || $("#spouse2").is(':checked')){
            spouse="checked";
        }
        var experienceManagement=$("#experienceManagement").val();
        
        var firing="";
        if($("#firing1").is(':checked') || $("#firing2").is(':checked')){
            firing="checked";
        }
        var operateBusiness=$("#operateBusiness").val();
        var experienceQualification=$("#experienceQualification").val();
        var invest=$("#invest").val();
        var liquid=$("#liquid").val();
        var fullTime="";
        if($("#fullTime1").is(':checked') || $("#fullTime2").is(':checked')){
            fullTime="checked";
        }
        
        var agree="";
        if($("#agree").is(':checked')){
            agree="checked";
        }
        var signature=$("signature").val();
        
        if(fname=="" || lname=="" || mobile=="" || altMobile=="" || email=="" || sNumber=="" || sName=="" || city=="" || residency=="" || country=="" || zip=="" || birth=="" || contracted=="" || veteran=="" || experience=="" || spouse=="" || experienceManagement=="" || firing=="" || operateBusiness=="" || experienceQualification=="" || invest=="" || liquid=="" || fullTime=="" || agree=="" || signature==""){
            $("#msgEmpty").css("display", "block");
            e.preventDefault();
            e.stopPropagation();
        }
        else{
        
            $("#msgEmpty").css("display", "none");
        
        }
        /*
        
        if(fname==""){
            alert("hola banda fname");    
        }
        
        else if(lname==""){
            alert("hola banda lname");    
        }
        
        else if(mobile==""){
            alert("hola banda mobile");    
        }
        
        else if(altMobile==""){
            alert("hola banda altMobile");    
        }
        
        else if(email==""){
            alert("hola banda email");    
        }
        
        else if(sNumber==""){
            alert("hola banda sNumber");    
        }
        
        else if(sName==""){
            alert("hola banda sName");    
        }
        
        else if(city==""){
            alert("hola banda city");    
        }
        
        else if(residency==""){
            alert("hola banda residency");    
        }
        
        else if(country==""){
            alert("hola banda country");    
        }
        
        else if(zip==""){
            alert("hola banda zip");    
        }
        
        else if(birth==""){
            alert("hola banda birth");    
        }
        
        else if(contracted==""){
            alert("hola banda contrated");    
        }
        
        else if(veteran==""){
            alert("hola banda veteran");    
        }
        
        else if(experience==""){
            alert("hola banda experience");    
        }
        
        else if(spouse==""){
            alert("hola banda spouse");    
        }
        
        else if(experienceManagement==""){
            alert("hola banda experienceManagement");    
        }
        
        else if(firing==""){
            alert("hola banda firing");    
        }
        else if(operateBusiness==""){
            alert("hola banda operateBusiness");    
        }
        else if(experienceQualification==""){
            alert("hola banda experienceQualification");    
        }
        
        else if(invest==""){ 
            alert("hola banda invest");    
        }
        
        else if(liquid==""){
            alert("hola banda liquid");    
        }
        
        else if(fullTime==""){
            alert("hola banda fullTime");    
        }
        
        else if(agree==""){
            alert("hola banda agree");    
        }
        
        else if(signature==""){
            alert("hola banda signature");    
        }
        
        */
        
        
        
    });
});