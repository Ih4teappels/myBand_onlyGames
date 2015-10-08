var xmlhttp;

function showResult(str){
    if(str.length == 0){
        document.getElementById("livesearch").innerHTML = "";
        document.getElementById("livesearch").style.border="0px";
        return;
    }
    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    }
    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
            document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
            //document.getElementById("livesearch").style.color = "black";
            //document.getElementById("livesearch").style.border="2px solid #A5ACB2";
        }
    }
    xmlhttp.open("GET","../myband/models/search.php?s="+str,true);
    xmlhttp.send();
}