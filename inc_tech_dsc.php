<?
extract($_GET);
extract($_POST);
$rest=mysql_query("select * from `tech` where `up`='$wd_usern'");

$ttech[1]=@mysql_result($rest,0,'att');
$ttech[2]=@mysql_result($rest,0,'arm');
$ttech[3]=@mysql_result($rest,0,'engine');
$ttech[4]=@mysql_result($rest,0,'build');
$ttech[5]=@mysql_result($rest,0,'harv');
$ttech[6]=@mysql_result($rest,0,'hod');
$ttech[7]=@mysql_result($rest,0,'orb');
$ttech[8]=@mysql_result($rest,0,'spy');


$tname[1]="<b>????????? ??????????</b><br><br>???????????? ????? ?????????? ????????? ??????? ?????????? ? ???? ????? ????? ?????? ??????. ? ?????? ????? ??????? ???????? ?????????? ???? ????? ????? ????? ?????????? ?? 10%.";
$tstone[1]=100*(round(pow(2,$ttech[1])));
$tcred[1]=5000*(round(pow(2,$ttech[1])));
$tdays[1]=20*(1+$ttech[1]);
$tmaxl[1]=30;

$tname[2]="<b>????????? ????? ? ??????</b><br><br>?????????????????? ????? ?????? ? ??????? ?????????????? ?? ???? ????????????? ????? ????????????? ????????????? ??????????. ?????? ??????? ?????????? ???????? ????? ???? ?????? ?????? ?? 10%.";
$tstone[2]=100*(round(pow(2,$ttech[2])));
$tcred[2]=5000*(round(pow(2,$ttech[2])));
$tdays[2]=20*(1+$ttech[2]);
$tmaxl[2]=30;

$tname[3]="<b>???????????? ?? ?????</b><br><br>??? ????????? ???????? ???????????? ????? ????? ???? ??????????? ??????????? ????????? ???????, ??????????? ??????? ???????? ?????? ??? ??????????? ?? ?????? ???????. ?????? ??????? ?????????? ????????? ????? ???????? ????? ?????????? ?? 1 ????.";
$tstone[3]=400*(round(pow(2,$ttech[3])));
$tcred[3]=4000*(round(pow(2,$ttech[3])));
$tdays[3]=20*(1+$ttech[3]);
$tmaxl[3]=4;

$tname[4]="<b>????????? ???????</b><br><br>?????????? ????????? ??????? ???????? ??? ??????? ????????? ?????????? ??? ?????? ? ????????? ??????????. ?????? ??????? ???????? ?????????? ???? ??? +1 ? ????????????? ??????????.";
$tstone[4]=500*(round(pow(2,$ttech[4])));
$tcred[4]=1000*(round(pow(2,$ttech[4])));
$tdays[4]=20*(1+$ttech[4]);
$tmaxl[4]=30;

$tname[5]="<b>?????-??????????</b><br><br>????????? ?????????? ??????????? ??????????? ????? ???????????. ?????????? ??? ??????????, ????? ???????? ?????? ??????.";
$tstone[5]=10*(round(pow(2,$ttech[5])));
$tcred[5]=10000*(round(pow(2,$ttech[5])));
$tdays[5]=20*(1+$ttech[5]);
$tmaxl[5]=30;

$tname[6]="<b>?????????? ???? ??????</b><br><br>?????????????? ???????????? ?????? ????????, ??????? ????????????? ??????? ?????????? ???? ?????? ???????? ???????? ???????????? ???? ?????, ????????? ????????? ?? ?????? ? ???????? ????? ??????????? ??????.";
$tstone[6]=100000;
$tcred[6]=100000;
$tdays[6]=1000;
$tmaxl[6]=1;

$tname[7]="<b>???????????? ????????</b><br><br>??? ???????????? ????????? ??????? ????????? ?????? ????? ???????? ???????. ?????? ??????? ??????? ??????? ?? 10%.";
$tstone[7]=1000*(round(pow(2,$ttech[7])));
$tcred[7]=5000*(round(pow(2,$ttech[7])));
$tdays[7]=10*(1+$ttech[7]);
$tmaxl[7]=5;

$tname[8]="<b>???????</b><br><br>??????????? ?????????? ???????? ???? ??????????? ???????? ?????????? ? ????? ? ?????? ??????????.";
$tstone[8]=5000;
$tcred[8]=10000;
$tdays[8]=25;
$tmaxl[8]=1;

?>