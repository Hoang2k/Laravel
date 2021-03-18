function setup()
{
    var change=document.getElementsByClassName("input-change");//gắn sk click cho thẻ input
        for(var i=0;i<change.length;i++)
        {
            change[i].onclick=function() {change_number(this)}
        }
    function change_number(e)//thay đỏi số lượng
    {
        var x=document.getElementById("input-value").getAttribute("value");
        if(e.getAttribute("value")=="+")
        {
            x=parseInt(x)+1;
        }
        if(e.getAttribute("value")=="-"&&x!=1)
        {
            x=parseInt(x)-1;
        }
        document.getElementById("input-value").setAttribute("value",x)
    }
}