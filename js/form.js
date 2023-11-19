// $(document).ready(function() {
// });

function sendContact() {
    var valid;	
    valid = validateContact();
    if(valid) {
        jQuery.ajax({
            url: "form.php",
            data:'name='+$("#name").val()+
            $("#email").val()+
            $("#message").val()+
            $(content).val(),
            type: "POST",
            success:function(data){
                $("#mail-status").html(data);
            },
            error:function (){}
        });
    }
}
console.log(data)

function validateContact() {
    var valid = true;	
    // $(".demoInputBox").css('background-color','');
    // $(".info").html('');
    if(!$("#name").val()) {
        // $("#userName-info").html("(required)");
        $("#name").css('background-color','#FFFFDF');
        valid = false;
    }
    if(!$("#email").val()) {
        // $("#userEmail-info").html("(required)");
        $("#email").css('background-color','#FFFFDF');
        valid = false;
    }
    if(!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
        // $("#userEmail-info").html("(invalid)");
        $("#email").css('background-color','#FFFFDF');
        valid = false;
    }
    if(!$("#message").val()) {
        // $("#subject-info").html("(required)");
        $("#message").css('background-color','#FFFFDF');
        valid = false;
    }
    return valid;
}