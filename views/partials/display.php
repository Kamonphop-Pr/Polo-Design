<script>
$( document ).ready(function() {
    console.log( "ready!" );
    document.getElementById("bgcolor1").style.display="none";
    document.getElementById("bgcolor2").style.display="none";
    document.getElementById("bgcolor3").style.display="none";
    document.getElementById("bgcolor4").style.display="none";
    document.getElementById("bgcolor5").style.display="none";
    document.getElementById("bgcolor9").style.display="none";
    document.getElementById("Back").style.display="none";
    document.getElementById("Front").style.border="1px solid #ffa45c;"
    document.getElementById("Front").style.background ="transparent;"
    document.getElementById("Front").style.color="#ffa45c";
    $("#Spattern").hide();
    $("#bac").hide();
    $("#merge").hide();
    $("#Show_Back").removeClass( "btn-black" );

});

function Show_Front(){
    document.getElementById("Back").style.display="none";
        if(document.getElementById("Back").style.display=="none"){
            document.getElementById("Front").style.display="inherit";
            document.getElementById("Front").style.border="1px solid #ffa45c;"
            document.getElementById("Front").style.background ="transparent;"
            document.getElementById("Front").style.color="#ffa45c";
            $("#Spattern").hide();
            $("#font").show();
            $("#Show_Front").addClass( "btn-black" );
            $("#Show_Back").removeClass( "btn-black" );
            $("#bac").hide();
            $("#merge").hide();
        }
}

function Show_Back(){
    document.getElementById("Front").style.display="none";
    $("#Spattern").hide();
        if(document.getElementById("Front").style.display=="none"){
            document.getElementById("Back").style.display="inherit";
            $("#bac").show();
            $("#font").hide();
            $("#Show_Front").removeClass( "btn-black" );
            $("#Show_Back").addClass( "btn-black" );
            $("#merge").hide();
        }
}

function Display_none() {
    document.getElementById("Show").style.display="none";
    $("#Spattern").hide();
    if(document.getElementById("Show").style.display=="none"){
        document.getElementById("Show1").style.display="inherit";
        $("#merge").hide();
    }
}
function Show_Information(){
    document.getElementById("Show1").style.display="none";
    $("#Spattern").hide();
    if(document.getElementById("Show1").style.display=="none"){
        document.getElementById("Show").removeProperty('display');
        $("#merge").hide();
    }
}
function Show_Body(){
    document.getElementById("bgcolor1").style.display="none";
    document.getElementById("bgcolor2").style.display="none";
    document.getElementById("bgcolor3").style.display="none";
    document.getElementById("bgcolor4").style.display="none";
    document.getElementById("bgcolor5").style.display="none";
    document.getElementById("bgcolor9").style.display="none";
    $("#Spattern").hide();
        if(document.getElementById("bgcolor1").style.display=="none"){
            document.getElementById("bgcolor").style.display="inherit";
            $("#merge").hide();
        }
    }

 function Show_Pattern(){
    document.getElementById("bgcolor").style.display="none";
    document.getElementById("bgcolor3").style.display="none";
    document.getElementById("bgcolor4").style.display="none";
    document.getElementById("bgcolor5").style.display="none";
    document.getElementById("bgcolor9").style.display="none";
        if(document.getElementById("bgcolor").style.display=="none"){
            document.getElementById("bgcolor2").style.display="none";
            document.getElementById("bgcolor9").style.display="inherit";
            $("#Spattern").show();
            $("#merge").hide();
        }
    }



    function Show_Shirt(){
    document.getElementById("bgcolor1").style.display="none";
    document.getElementById("bgcolor3").style.display="none";
    document.getElementById("bgcolor4").style.display="none";
    document.getElementById("bgcolor5").style.display="none";
    document.getElementById("bgcolor9").style.display="none";
    $("#Spattern").hide();
        if(document.getElementById("bgcolor1").style.display=="none"){
            document.getElementById("bgcolor").style.display="none";
            $("#merge").hide();
            document.getElementById("bgcolor2").style.display="inherit";
        }
    }


function Show_Body(){
    document.getElementById("bgcolor1").style.display="none";
    document.getElementById("bgcolor2").style.display="none";
    document.getElementById("bgcolor3").style.display="none";
    document.getElementById("bgcolor4").style.display="none";
    document.getElementById("bgcolor5").style.display="none";
    document.getElementById("bgcolor9").style.display="none";
    $("#Spattern").hide();
    if(document.getElementById("bgcolor1").style.display=="none"){
        document.getElementById("bgcolor").style.display="inherit";
        $("#merge").hide();
    }
}

function Show_Pocket(){
    document.getElementById("bgcolor1").style.display="none";
    document.getElementById("bgcolor2").style.display="none";
    document.getElementById("bgcolor4").style.display="none";
    document.getElementById("bgcolor5").style.display="none"; 
    document.getElementById("bgcolor").style.display="none";
    $("#Spattern").hide();
    if(document.getElementById("bgcolor1").style.display=="none"){
        document.getElementById("bgcolor3").style.display="inherit";
        $("#merge").hide();
    }

}

function Show_Sleeve(){
    document.getElementById("bgcolor1").style.display="none";
    document.getElementById("bgcolor2").style.display="none";
    document.getElementById("bgcolor3").style.display="none";
    document.getElementById("bgcolor").style.display="none"; 
    document.getElementById("bgcolor5").style.display="none";
    document.getElementById("bgcolor9").style.display="none";
    $("#Spattern").hide();
    if(document.getElementById("bgcolor1").style.display=="none"){
        document.getElementById("bgcolor4").style.display="inherit";
        $("#merge").hide();
    }
}

function Show_Collar(){
    document.getElementById("bgcolor1").style.display="none";
    document.getElementById("bgcolor2").style.display="none";
    document.getElementById("bgcolor3").style.display="none";
    document.getElementById("bgcolor").style.display="none";
    document.getElementById("bgcolor4").style.display="none";
    document.getElementById("bgcolor9").style.display="none";
    $("#Spattern").hide();
    if(document.getElementById("bgcolor1").style.display=="none"){
        document.getElementById("bgcolor5").style.display="inherit";
        $("#merge").hide();
        
    }
}
</script>