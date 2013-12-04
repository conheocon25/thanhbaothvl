
var dayarray=new Array("Chủ Nhật","Thứ 2","Thứ 3","Thứ 4","Thứ 5","Thứ 6","Thứ 7")
var montharray=new Array("1","2","3","4","5","6","7","8","9","10","11","12")

function getthedate(){
var mydate=new Date()
var year=mydate.getYear()
if (year < 1000)
year+=1900
var day=mydate.getDay()
var month=mydate.getMonth()
var daym=mydate.getDate()
if (daym<10)
daym="0"+daym
var hours=mydate.getHours()
var minutes=mydate.getMinutes()
var seconds=mydate.getSeconds()
var dn="AM"
if (hours>=12)
dn="PM"
if (hours>12){
hours=hours-12
}
if (hours==0)
hours=12
if (minutes<=9)
minutes="0"+minutes
if (seconds<=9)
seconds="0"+seconds
//change font size here
var cdate="<small><font color='#fff' size='2' face='Time New Roman'><b>"+hours+":"+minutes+":"+seconds+" "+dn+", "+dayarray[day]+", "+daym+"/"+montharray[month]+"/"+year
+"</b></font></small>"
if (document.all)
document.all.clock.innerHTML=cdate
else if (document.getElementById)
document.getElementById("clock").innerHTML=cdate
else
document.write(cdate)
}
if (!document.all&&!document.getElementById)
getthedate()
function Clock(){
if (document.all||document.getElementById)
setInterval("getthedate()",1000)
}
function getFileNameBackup(NameCafe)
{
	var ct = new Date();
	var year = ct.getFullYear();
	var month = ct.getMonth()+1;
	var day = ct.getDate();
	var hour = ct.getHours();
	var minute = ct.getMinutes();
	var second = ct.getSeconds();
	var s = NameCafe+"-"+day+"-"+month+"-"+year + "-" + hour + "h-" + minute + "p-"+second+"g.sql";
	return s;
}