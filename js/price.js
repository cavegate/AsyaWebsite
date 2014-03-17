function showPrice (str)
{
    if(str.length==0)
    {
        document.getElementById("price").innerHTML="";
        return;
    }
    var obj;
    if (window.XMLHttpRequest)// code for IE7+, Firefox, Chrome, Opera, Safari
        obj=new XMLHttpRequest();
    else // code for IE6, IE5
        obj=new ActiveXObject("Microsoft.XMLHTTP");
    obj.onreadystatechange = function()
    {
        if(obj.readyState==4 && obj.status == 200)
            document.getElementsByName("price").innerHTML=obj.responseText;
    }
    obj.open('GET','http://localhost/asyawebsite/index.php/price_calc.php?p='+str,true);
    obj.send(null);
}

function showP ()
{
    var str=document.getElementsByName('package')[0].value;
    var pr = new Array(65000,45500,32500,26000,19500);
    var res;
    if(check(str))
    {
        if(str<2)
            res =  pr[0]*str;
        else if(str<3)
            res = pr[1]*str;
        else if(str<10)
            res = pr[2]*str;
        else if(str<50)
            res = pr[3]*str;
        else
            res = pr[4]*str;
    }
    else
        res = 0;
    document.getElementById('price').innerHTML = res;
}
function check (str)
{
    var i;
   for(i=0;i<str.length;i++)
       if(!(str[i]>="0" && str[i]<="9"))
            return false;
   return true;
}

function getXMLHTTP()
{
    var xmlhttp=null;
    try
    {
        xmlhttp=new XMLHttpRequest();
    }
    catch(e)
    {
        try
        {
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        catch(e)
        {
            try
            {
                xmlhttp=new ActiveXObject("msxml2.XMLHTTP");
            }
            catch(e1)
            {
                xmlhttp=false;
            }
        }
    }
    return xmlhttp;
}
function getCat(cat) {
    var strurl="http://localhost/asyawebsite/index.php/price_calc.php?p="+cat;
//alert(strurl);
    var req=getXMLHTTP();
    if(req==null)
    {
        alert("browser error");
    }
    if(req)
    {
        req.onreadystatechange=function() {
            if(req.readyState ==4 || req.readyState=="complete")
            {
                document.getElementById("ajaxresult").innerHTML=req.responseText;
            }
        }
        req.open("GET",strurl,true);
        req.send(null);
    }
}