<?
extract($_GET);
extract($_POST);

$name[1]="<b>???????????? ?????????</b><br><br>????????? ????????? ??? ?????????? ???????? ?? ?????? ???????.";
$stone[1]=2+round($lvl[1]/2);
$cred[1]=5;
$site[1]=0;
$days[1]=1;

$name[2]="<b>????????? ?????</b><br><br>????????? ????? ????????? ?????? ???????? ? ???????????? ?????? ????. ??? ?????????? ???????? ??? 10 ????????? ?????, 10 ???????? ? 1-4 ?????? ??????? ? ???? ?? ?????? ??????? ????????.";
$stone[2]=30+50*$lvl[2];
$cred[2]=1000*round(pow(2,$lvl[2]/1.1));
$site[2]=2*$lvl[2];
$days[2]=10*$lvl[2];

$name[3]="<b>???????? ???????????????</b><br><br>??????????? ??????????, ????????????? ???????????? ??????? ????? ? ?????????????. ?????? ??????? ??????????? ????????? ??????? ?? 5.<br>??????? ?????????? ??? ??????????? ?????? ??????. ??? ???????? ??????? ???????????? ??????????? ??????.";
$stone[3]=5*(5+round($lvl[3]/2));
$cred[3]=20+20*round(pow(2,$lvl[3]/1.4));
$site[3]=1;
$days[3]=3+$lvl[3];

$name[4]="<b>????? ?? ??????????? ??????</b><br><br>????? ????????? ??? ??????????? ??????, ?????????? ?????? ????????????. ??? ???? ??????? ??????, ??? ?????? ?????? ?? ????? ???????????? ?? ????. ??????????? ?????? - ???????? ???????? ????????? ???????? ?? ???????.";
$stone[4]=10+15*$lvl[4];
$cred[4]=100*round(pow(2,$lvl[4]/1.2));
$site[4]=2;
$days[4]=5+5*$lvl[4];

$name[5]="<b>?????-?????</b><br><br>????? ???????? ? ???????? ????????????? ?????. ?????? ??????????? ??????? ?????? ??????????? ??? ??????? ?? 500 ??????.";
$stone[5]=5+round($lvl[5]/2);
$cred[5]=15*round(pow(2,$lvl[5]/1.1));
$site[5]=1;
$days[5]=2+2*$lvl[5];

$name[6]="<b>???????</b><br><br>????????????? ??? ?????????? ?????? ??????? ????????? ??? ??????? ??????. ??? ???? ??????? ??? ??????? ????? ???????? ???? ???????. ????????? ??????? ???????? ??????, ????? ??????????? ??????? ??????.";
$stone[6]=5*(1+$lvl[6]);
$cred[6]=45*round(pow(2,$lvl[6]/1.1));
$site[6]=1;
$days[6]=5+5*$lvl[6];

$name[7]="<b>??????? ??????? ???????</b><br><br>??????? ?? ????? ??????? ?????? ? ??????????? ???????. ??? ???? ??????? ??????? ??? ????? ?????? ?????? ?????? ????? ??? ????????. ??????? ????? ?????? ?? ???????? ????????? ???????.";
$stone[7]=15+15*$lvl[7];
$cred[7]=125*round(pow(2,$lvl[7]/1.1));
$site[7]=2;
$days[7]=7+6*$lvl[7];

$name[8]="<b>??????? ?????</b><br><br>????? ??????????????? ????????? ??????? ??????????. ????????? ??????? ????? ??????? ??????, ????? ??????? ?????? ??????? ??????? ? ?????? ??????, ????? ??????? ??????????.";
$stone[8]=10+10*$lvl[8];
$cred[8]=500*round(pow(2,$lvl[8]/1.1));
$site[8]=1;
$days[8]=10+8*$lvl[8];

$name[9]="<b>?????????</b><br><br>????????? ???????? ????????? ? ?????????? ??????????? ???????, ??? ????????? ??? ?????? ????????????? ?????? ? ??????? ?? ?????? ????. ??????????????? ???????? ?????? ????? ??????, ???????? ??????????. ?? ?????? ??????? ?????????? ?? ????????? ?? 20 ???????? ? ???. ??? ???? ??????? ??????????, ??? ??????? ????? ???????????? ?????.";
$stone[9]=100+56*$lvl[9];
$cred[9]=5000*round(pow(2,$lvl[9]/1.1));
$site[9]=4;
$days[9]=15+10*$lvl[9];

$name[10]="<b>??????</b><br><br>?????? ????????????? ?????????? ?????????????? ???????????, ????? ??? ??????????? ???????????? ????? ?????????? ? ?????? ? ????????????? ?????? ??????? ??????. ????????????? ?????? ???? +50 ???????? ? ???? ?? ?????? ??????? ????????.";
$stone[10]=1000+1000*$lvl[10];
$cred[10]=1000000*round(pow(2,$lvl[10]/1.1));
$site[10]=10;
$days[10]=50+50*$lvl[10];

$name[11]="<b>???????? ?????</b><br><br>?????? ????????? ??????????, ?????????? ??????? ?????? ?????????.<br>??? ????????? ?????????????? ??????? ?????????? ????? ??????? ??????.";
$stone[11]=20+round(pow(2,$lvl[11]));
$cred[11]=20*round(pow(2,$lvl[11]/1.2));
$site[11]=1;
$days[11]=5+round(10*$lvl[11]/$t_build);

$name[12]="<b>?????????????? ??????</b><br><br>?????????????? ?????????????? ??????, ????????????? ?? ??????????? ?????? - ??????? ???????? ??????? ?? ????. ???????? ????? ????????????? ? ?????? ???????.<br>?????????? ?????????????? ?????? ? ??????? ????? ?????? ?????? ??? ????????? ???????? ?????.";
$stone[12]=50+2*round(pow(2,$lvl[12]/1.2));
$cred[12]=25*round(pow(2,$lvl[12]/1.2));
$site[12]=1;
$days[12]=10+round(14*$lvl[12]/$t_build);

$name[13]="<b>???????? ??????</b><br><br>??????? ????????? ??????????. ??? ?????? ???????? ?????????? ?????? ??????????. ???????? ????? ????????????? ? ?????? ???????.";
$stone[13]=100+2*round(pow(2,$lvl[13]/1.2));
$cred[13]=500*round(pow(2,$lvl[13]/1.2));
$site[13]=2;
$days[13]=31+round(24*$lvl[13]/$t_build);

$name[21]="<b>?????????</b><br><br>????????? ???????? ????? ?? ?????. ?????? ?????? ????? ????????????? ? ?????. ???????? ???????, ????????? ????????????? ?????????? ????? ????? ?? ????? ?? ??? ??????????? ??? ????????? ????????.";
$stone[21]=0;
$cred[21]=300;
$site[21]=0;
$days[21]=@ceil(20/$lvl[4]);

$name[22]="<b>????????? ????????? ?????</b><br><br>????????? ????????? ????? ??????????? ??? ?????? ??????????? ????? ??? ????????????? ????? ????.";
$stone[22]=100;
$cred[22]=10000;
$site[22]=1;
$days[22]=@ceil(1000/$fact);

$name[23]="<b>?????? ??????</b><br><br>??? ????? ??????? ? ?????? ???????????, ??????????? 9-?????????????? ?????????? ??????????, ??????????? ???????????? ?????????. ?????? ???????? ? ???????? ?????? ?????? ??????????. ????????? ?????? ?????? ??????????.";
$stone[23]=0;
$cred[23]=100;
$site[23]=0;
$days[23]=@ceil(10/$bar);

$name[24]="<b>??????? ??????</b><br><br>??????? ?????? ????????? 10 ?? ????????? ??????????????? ?????????? ? ??????????-?????????????? ????????? ? ???????????????? ?????????. ??????? ????????? ????? ?????? ?????????? ?????????, ?????????? ????????????. ?????????? ?????? ??????? ???????.";
$stone[24]=0;
$cred[24]=250;
$site[24]=0;
$days[24]=@ceil(20/$bar);

$name[25]="<b>????</b><br><br>???? ????? ??????? ????? ? ????? ???????? ??????? ???????????? ?????????.";
$stone[25]=0;
$cred[25]=3000;
$site[25]=1;
$days[25]=@ceil(250/$fact);

$name[26]="<b>???????? ????</b><br><br>???????? ???? ????? ????? ??????? ???????? ?????? \"?????-?????\". ?????? ????????? ????????? ?????? ???????. ??????? ????????? ????????? ????????, ???????? ???? ????????? ????? ??? ??????, ???????? ??????? ???????.";
$stone[26]=0;
$cred[26]=7500;
$site[26]=1;
$days[26]=@ceil(500/$fact);

$name[27]="<b>????????</b><br><br>?????????? - ??????? ??????? ?????? ??????????. ? ??? ???????????? ?????????? ? ??????. ????? ?????????? ??????????? ????????? ?????????? ? ?????????????? ????????? ? ?????????? ? ?????????? ???????? ??????????.";
$stone[27]=0;
$cred[27]=3000;
$site[27]=0;
$days[27]=0;

$name[28]="<b>???????????</b><br><br>???? ???? ???????? ???? ????????? ??????. ??? ????? ?????? ???? ?? ???????. ??????????? ????? ?????????? ??????? ??????? ? ????? ????????? ???????????? ? ???.";
$stone[28]=0;
$cred[28]=10000;
$site[28]=0;
$days[28]=0;

$name[29]="<b>??????</b><br><br>??????? - ??????? ?????? ????. ?????????????? ?????; ?? ?????? ????????? ?????????? ?????? ?? ?????? ???????? ????????????.";
$stone[29]=0;
$cred[29]=5000;
$site[29]=0;
$days[29]=0;

$name[30]="<b>???? ??????</b><br><br>?????????????? ???????????? ??????? ????????, ??????? ????????????? ??????? ?????????? ???? ?????? ???????? ???????? ???????????? ???? ?????, ????????? ????????? ?? ?????? ? ???????? ????? ??????????? ??????.";
$stone[30]=50000;
$cred[30]=500000;
$site[30]=5;
$days[30]=round(100/($lvl[10]+1));

$name[31]="<b>????????????????? ???????? ???????</b><br><br>???? ???????? ??????? ????????? ???????? ??????? ????????????? ?? ?????? ????????. ?????? ??????? ???????? ????????? ???? ???????? ??????????? ?????.";
$stone[31]=85+62*$lvl[31];
$cred[31]=2500*round(pow(2,$lvl[31]/1.1));
$site[31]=2;
$days[31]=10+10*$lvl[31];
?>