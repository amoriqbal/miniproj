function reqQP(subject, difficulty, time)
{
    var QPaper;
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function()
    { 
        if (this.readyState == 4 && this.status == 200) 
        {
            document.getElementById("txtHint").innerHTML = this.responseText;
        }
    }
}
