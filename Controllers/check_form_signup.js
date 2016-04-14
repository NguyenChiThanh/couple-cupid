/*
* checkEmail funtion
* Check email if exist
*/
function checkEmail() {
    var email = document.getElementById("email").value;
    
    if(email) {
        $.ajax({
            type: 'post',
            url: '../../Controllers/register.php',
            data: { email:email },
            success: function (response) {
                $( '#email_status' ).html(response);
                checkAll();
                if(response=="OK") {
                    $("#email_status").hide();
                    return true;    
                }
                else { 
                    $("#email_status").show();
                    return false;  
                }
            }
        });   
    }
    else {
        checkAll();
        $("#email_status").show();
        $('#email_status').html("");
        return false;
    }
}

/*
* checkPass funtion
* Check password and repassword is the same
*/
function checkPass() {
    var password = document.getElementById("password").value;
    var repassword = document.getElementById("repassword").value;
    
    if(password) {
        $.ajax({
            type: 'post',
            url: '../../Controllers/register.php',
            data: { password:password, repassword:repassword },
            success: function (response) {
                $( '#pass_status' ).html(response);
                checkAll();
                if(response=="OK") { 
                    $("#pass_status").hide();
                    return true;    
                }
                else { 
                    $("#pass_status").show();
                    return false;  
                }
            }
        });   
    }
    else {
        checkAll();
        $("#pass_status").show();
        $('#pass_status' ).html("");
        return false;
    }
}

/*
* checkLname funtion
* Check lastname format
*/
function checkLname() {
    var lastname = document.getElementById("lastname").value;
    
    if(lastname) {
        $.ajax({
            type: 'post',
            url: '../../Controllers/register.php',
            data: { lastname:lastname },
            success: function (response) {
                $( '#lastname_status' ).html(response);
                checkAll();
                if(response=="OK") {
                    $("#lastname_status").hide();
                    return true;    
                }
                else { 
                    $("#lastname_status").show();
                    return false;  
                }
            }
        });   
    }
    else {
        checkAll();
        $("#lastname_status").show();
        $('#lastname_status').html("");
        return false;
    }
}

/*
* checkFname funtion
* Check firstname format
*/
function checkFname() {
    var firstname = document.getElementById("firstname").value;
    
    if(firstname) {
        $.ajax({
            type: 'post',
            url: '../../Controllers/register.php',
            data: { firstname:firstname },
            success: function (response) {
                $( '#firstname_status' ).html(response);
                checkAll();
                if(response=="OK") {
                    $("#firstname_status").hide();
                    return true;    
                }
                else { 
                    $("#firstname_status").show();
                    return false;  
                }
            }
        });   
    }
    else {
        checkAll();
        $("#firstname_status").show();
        $('#firstname_status').html("");
        return false;
    }
}

/*
* checkAgree funtion
* Check user agree with condition of website
*/
function checkAgree() {
    var checked = document.getElementById("agreement").checked;
    if (checked) {
        var emailhtml = document.getElementById("email_status").innerHTML;
        var passhtml = document.getElementById("pass_status").innerHTML;
        var fnamehtml = document.getElementById("firstname_status").innerHTML;
        var lnamehtml = document.getElementById("lastname_status").innerHTML;
        if ((emailhtml && passhtml && fnamehtml && lnamehtml) == "OK") {
            document.getElementById("signup").disabled = false;
        }
        else {
            document.getElementById("signup").disabled = true;
        }
    }
    else {
        document.getElementById("signup").disabled = true;
    }
}
/*
* checkAll funtion
* Check all field in form register
*/
function checkAll() {
    var emailhtml = document.getElementById("email_status").innerHTML;
    var passhtml = document.getElementById("pass_status").innerHTML;
    var fnamehtml = document.getElementById("firstname_status").innerHTML;
    var lnamehtml = document.getElementById("lastname_status").innerHTML;
    var checked = document.getElementById("agreement").checked;
    if (!checked || emailhtml != "OK" || passhtml != "OK" || fnamehtml != "OK" || lnamehtml != "OK") {
        document.getElementById("signup").disabled = true;
    }
    else {
        document.getElementById("signup").disabled = false;
    }
}