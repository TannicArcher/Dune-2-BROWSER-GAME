<?
$res1=mysql_query("select * from `army` where `n`='$army' and `up`='$wd_usern'");
if (mysql_num_rows($res1)==1)
{
	$x=mysql_result($res1,0,'x');
	$y=mysql_result($res1,0,'y');
if (($x==50)&& ($y==50)) {
	echo "???? ???????? ??????? ?????, ????? ??????????.";
	echo "<br><a href=army.php>?????</a>.";
	die();
}
$res2=mysql_query("select * from `base` where `x`='$x' and `y`='$y' and `up`!='$wd_usern'");
if (mysql_num_rows($res2)>=1)
{

	$rest1=mysql_query("select * from `tech` where `up`='$wd_usern'");
	$techatt[1]=@mysql_result($rest1,0,'att');
	$techarm[1]=@mysql_result($rest1,0,'arm');

	$wins[1]=mysql_result($res1,0,'wins');
	$armn[1]=mysql_result($res1,0,'name');
	$linf[1]=mysql_result($res1,0,'linf');
	$hinf[1]=mysql_result($res1,0,'hinf');
	$tank[1]=mysql_result($res1,0,'tank');
	$rtank[1]=mysql_result($res1,0,'rtank');

	$tower[1]="0";
	$rtower[1]="0";
	$wall[1]="0";

	$sard[1]=mysql_result($res1,0,'spec1');
	$deva[1]=mysql_result($res1,0,'spec2');
	$free[1]=mysql_result($res1,0,'spec3');

	$up=mysql_result($res2,0,'up');

	$enemysn=$up;

	$res3=mysql_query("select login from `wduser` where `n`='$up'");
	$enemy=@mysql_result($res3,0,'login');

	$rest2=mysql_query("select * from `tech` where `up`='$up'");
	$techatt[2]=@mysql_result($rest2,0,'att');
	$techarm[2]=@mysql_result($rest2,0,'arm');

	$army2_n=mysql_result($res2,0,'n');

  	$armn[2]=mysql_result($res2,0,'name');
	$linf[2]=mysql_result($res2,0,'linf');
	$hinf[2]=mysql_result($res2,0,'hinf');
	$tank[2]=mysql_result($res2,0,'tank');
	$rtank[2]=mysql_result($res2,0,'rtank');

	$tower[2]=mysql_result($res2,0,'tower');
	$rtower[2]=mysql_result($res2,0,'rtower');
	$wall[2]=mysql_result($res2,0,'wall');

	$sard[2]=mysql_result($res2,0,'spec1');
	$deva[2]=mysql_result($res2,0,'spec2');
	$free[2]=mysql_result($res2,0,'spec3');

	$techarm[2]+=$wall[2];


if ($sard[1]>0 || $sard[2]>0 || $deva[1]>0 || $deva[2]>0 || $free[1]>0 || $free[2]>0) $unit="super";

echo "???? ????? <b>".$armn[1]."</b> ??????? ???? <b>".$armn[2]."</b> ?????? <b>".$enemy."</b><br><br>";
log_("$wd_username ??????? ???? ?????? $enemy");
$itxt="";
$itxt.="????? <b>".$armn[1]."</b> ??????? ???? ???? <b>".$armn[2]."</b><br><br>";


?>
<table <?=$paramtable?> width=100%><tr>
<td <?=$paramhead?>>?????</td>
<td <?=$paramhead2?> width=50><img src=pics/sm/unit11.jpg border=1 alt='?????'></td>
<td <?=$paramhead2?> width=50><img src=pics/sm/unit12.jpg border=1 alt='?????'></td>
<td <?=$paramhead2?> width=50><img src=pics/sm/unit13.jpg border=1 alt='???????? ?????'></td>
<td <?=$paramhead2?> width=50><img src=pics/sm/unit23.jpg border=1 alt='?????? ??????'></td>
<td <?=$paramhead2?> width=50><img src=pics/sm/unit24.jpg border=1 alt='??????? ??????'></td>
<td <?=$paramhead2?> width=50><img src=pics/sm/unit25.jpg border=1 alt='????'></td>
<td <?=$paramhead2?> width=50><img src=pics/sm/unit26.jpg border=1 alt='???????? ????'></td>
<? if ($unit=="super") { ?>
<td <?=$paramhead2?> width=50><img src=pics/sm/unit27.jpg border=1 alt='?????????'></td>
<td <?=$paramhead2?> width=50><img src=pics/sm/unit28.jpg border=1 alt='???????????'></td>
<td <?=$paramhead2?> width=50><img src=pics/sm/unit29.jpg border=1 alt='???????'></td>
<? } ?>
</tr>

<?
for ($i=1;$i<=2;$i++)
{
if (!isset($techatt[$i]) || $techatt[$i]=="") $techatt[$i]=0;
if (!isset($techarm[$i]) || $techarm[$i]=="") $techarm[$i]=0;
?>
<tr>
<td><b><?=$armn[$i]?></b><br>
<? if ($i==1) echo "????: <b>".$wins[$i]."</b>, "; ?>
??????? ?????: <b><?=$techatt[$i]?></b>, ??????? ??????: <b><?=$techarm[$i]?></b></td>
<td><?=$wall[$i]?></td>
<td><?=$tower[$i]?></td>
<td><?=$rtower[$i]?></td>

<td><?=$linf[$i]?></td>
<td><?=$hinf[$i]?></td>
<td><?=$tank[$i]?></td>
<td><?=$rtank[$i]?></td>
<? if ($unit=="super") { ?>
<td><?=$sard[$i]?></td>
<td><?=$deva[$i]?></td>
<td><?=$free[$i]?></td>
<? } ?>
</tr>
<? } ?>

</table>
<?


// ########################################### ?????? ??????? ???


$i=1;
$sum[$i]=$armn[$i]+$linf[$i]+$hinf[$i]+$tank[$i]+$rtank[$i]+$sard[$i]+$deva[$i]+$free[$i];

$i=2;
$sum[$i]=$armn[$i]+$linf[$i]+$hinf[$i]+$tank[$i]+$rtank[$i]+$sard[$i]+$deva[$i]+$free[$i]+$tower[$i]+$rtower[$i];


$f=1;

define(HARVESTER, 21);
define(MOBILE_COMCENTRE, 22);
define(L_INFRANTRY, 23);
define(H_INFRANTRY, 24);
define(TANK, 25);
define(R_TANK, 26);
define(SARDUKAR, 27);
define(DEVASTATOR, 28);
define(FREEMAN, 29);
define(TOWER, 12);
define(R_TOWER, 13);
define(NO_TARGET, 0);

// ??????? ??????? ??????, ?????? ???? ??????????? ? ???????????? ?????
$unit_n[-1]=12;
$unit_n[0]=13;
$unit_n[1]=26;
$unit_n[2]=28;
$unit_n[3]=25;
$unit_n[4]=27;
$unit_n[5]=24;
$unit_n[6]=29;
$unit_n[7]=23;

include "inc_war_dsc.php";

// ########################################### ?????? ????? ??? ???

while ($sum[1]>0 && $sum[2]>0)
{
echo "<hr noshade color=#996633 size=1><br>???? ??? <b>$f</b><br><br>";

// ########################################### ??????? ???????

for ($j=2;$j>=1;$j--)
{

if ($j==1) echo "<br>????? ????? <b>".$armn[$j]."</b><br><br>";
if ($j==2) echo "<br>????? ????????? ???? <b>".$armn[$j]."</b><br><br>";


if ($j==1) $ej=2;
else $ej=1;

// ########################################### ??????? ??????

for ($i=-1;$i<=7;$i++)
{
// ??????? ??????????? ????? ?????? ? ????? ?????? ? i-?? ??????
$unit_q[-1]=$tower[$j];
//$unit_e[1]=$tower[$ej];
$unit_q[0]=$rtower[$j];
//$unit_e[1]=$rtower[$ej];
$unit_q[1]=$rtank[$j];
//$unit_e[1]=$rtank[$ej];
$unit_q[2]=$deva[$j];
//$unit_e[2]=$deva[$ej];
$unit_q[3]=$tank[$j];
//$unit_e[3]=$tank[$ej];
$unit_q[4]=$sard[$j];
//$unit_e[4]=$sard[$ej];
$unit_q[5]=$hinf[$j];
//$unit_e[5]=$hinf[$ej];
$unit_q[6]=$free[$j];
//$unit_e[6]=$free[$ej];
$unit_q[7]=$linf[$j];
//$unit_e[7]=$linf[$ej];


//$unit_n[-1]=12;
//$unit_q[-1]=$tower[$j];
//$unit_e[-1]=$tower[$j];

//$unit_n[0]=13;
//$unit_q[0]=$rtower[$j];
//$unit_e[0]=$rtower[$j];

//$unit_n[1]=23;
//$unit_q[1]=$linf[$j];
//$unit_e[1]=$linf[$j];

//$unit_n[2]=24;
//$unit_q[2]=$hinf[$j];
//$unit_e[2]=$hinf[$ej];

//$unit_n[3]=25;
//$unit_q[3]=$tank[$j];
//$unit_e[3]=$tank[$ej];

//$unit_n[4]=26;
//$unit_q[4]=$rtank[$j];
//$unit_e[4]=$rtank[$ej];

//$unit_n[5]=27;
//$unit_q[5]=$sard[$j];
//$unit_e[5]=$sard[$ej];

//$unit_n[6]=28;
//$unit_q[6]=$deva[$j];
//$unit_e[6]=$deva[$ej];

//$unit_n[7]=29;
//$unit_q[7]=$free[$j];
//$unit_e[7]=$free[$ej];

if ($unit_q[$i]>0)
{
//$target=0;
$target=NO_TARGET;

                if ( 26 == $unit_n[$i] )
                {
                         if ($sard[$ej]>0)   { $target=27; }
                    else if ($free[$ej]>0)   { $target=29; }
                    else if ($linf[$ej]>0)   { $target=23; }
                    else if ($hinf[$ej]>0)   { $target=24; }
                    else if ($deva[$ej]>0)   { $target=28; }
                    else if ($rtank[$ej]>0)  { $target=26; }
                    else if ($tank[$ej]>0)   { $target=25; }
                    else if ($tower[$ej]>0)  { $target=12; }
                    else if ($rtower[$ej]>0) { $target=13; }
                }
           else if ( ( 25 == $unit_n[$i] ) ||
                     ( 28 == $unit_n[$i] ) ||
                     ( 13 == $unit_n[$i] ) )
                {
                         if ($deva[$ej]>0)   { $target=28; }
                    else if ($tank[$ej]>0)   { $target=25; }
                    else if ($rtank[$ej]>0)  { $target=26; }
                    else if ($sard[$ej]>0)   { $target=27; }
                    else if ($free[$ej]>0)   { $target=29; }
                    else if ($linf[$ej]>0)   { $target=23; }
                    else if ($hinf[$ej]>0)   { $target=24; }
                    else if ($rtower[$ej]>0) { $target=13; }
                    else if ($tower[$ej]>0)  { $target=12; }
                }
           else if ( ( 24 == $unit_n[$i] ) ||
                     ( 27 == $unit_n[$i] ) )
                {
                         if ($deva[$ej]>0)   { $target=28; }
                    else if ($tank[$ej]>0)   { $target=25; }
                    else if ($rtank[$ej]>0)  { $target=26; }
                    else if ($sard[$ej]>0)   { $target=27; }
                    else if ($free[$ej]>0)   { $target=29; }
                    else if ($hinf[$ej]>0)   { $target=24; }
                    else if ($linf[$ej]>0)   { $target=23; }
                    else if ($rtower[$ej]>0) { $target=13; }
                    else if ($tower[$ej]>0)  { $target=12; }
                }
           else if ( ( 23 == $unit_n[$i] ) ||
                     ( 29 == $unit_n[$i] ) ||
                     ( 12 == $unit_n[$i] ) )
                {
                         if ($free[$ej]>0)   { $target=29; }
                    else if ($sard[$ej]>0)   { $target=27; }
                    else if ($linf[$ej]>0)   { $target=23; }
                    else if ($hinf[$ej]>0)   { $target=24; }
                    else if ($deva[$ej]>0)   { $target=28; }
                    else if ($tank[$ej]>0)   { $target=25; }
                    else if ($rtank[$ej]>0)  { $target=26; }
                    else if ($tower[$ej]>0)  { $target=12; }
                    else if ($rtower[$ej]>0) { $target=13; }
                }

// ****************************************************
// ********** ?????? ??????? ?????? ???????? **********
// ****************************************************

//if ($war_a1[$unit_n[$i]]>=$war_a2[$unit_n[$i]])
//{
//     if ($sard[$ej]>0) $target=27;
//else if ($free[$ej]>0) $target=29;
//else if ($hinf[$ej]>0) $target=24;
//else if ($linf[$ej]>0) $target=23;
//else if ($tower[$ej]>0) $target=12;
//}
//else
//{
//     if ($deva[$ej]>0) $target=28;
//else if ($rtank[$ej]>0) $target=26;
//else if ($tank[$ej]>0) $target=25;
//else if ($rtower[$ej]>0) $target=13;
//
//}

//if ($target==0)
//{
//     if ($tower[$ej]>0) $target=12;
//else if ($rtower[$ej]>0) $target=13;
//else if ($deva[$ej]>0) $target=28;
//else if ($rtank[$ej]>0) $target=26;
//else if ($tank[$ej]>0) $target=25;
//else if ($sard[$ej]>0) $target=27;
//else if ($free[$ej]>0) $target=29;
//else if ($hinf[$ej]>0) $target=24;
//else if ($linf[$ej]>0) $target=23;
//}

// ****************************************************
// ************* ????? ??????? ????????? **************
// ****************************************************

if ($target==26 || $target==28 || $target==25 || $target==13) $damage=$war_a2[$unit_n[$i]];
else $damage=$war_a1[$unit_n[$i]];

$coef=3/rand(2,6);

if ($j==1) $damage=$damage*$unit_q[$i]*(1+$wins[$j]/50)*$coef; 
else $damage=$damage*$unit_q[$i]*$coef; 

$totaldmg=(1+$techatt[$j]/10)*$damage;

if ($target!=0) $totalhp=(1+$techarm[$ej]]/10)*$war_hp[$target];
else $totalhp=0;

if ($totalhp!=0) $killed=$totaldmg/$totalhp;
else $killed=0;

//echo "$i ---".$war_a1[$unit_n[$i]]." --- ".$war_a2[$unit_n[$i]]." === ";
if ($target!=0) echo "????? ".$war_n[$unit_n[$i]]." ??????? ????? ".$war_n[$target].". ???????? ".ceil($totaldmg)." ?????? ?????.<br>";
else echo "????? ".$war_n[$unit_n[$i]]." ???????? ?????.<br>";

if ($target==12) $tower[$ej]-=$killed;
if ($target==13) $rtower[$ej]-=$killed;

if ($target==23) $linf[$ej]-=$killed;
if ($target==24) $hinf[$ej]-=$killed;
if ($target==25) $tank[$ej]-=$killed;
if ($target==26) $rtank[$ej]-=$killed;
if ($target==27) $sard[$ej]-=$killed;
if ($target==28) $deva[$ej]-=$killed;
if ($target==29) $free[$ej]-=$killed;

}

} // ????? ???????? ??????
} // ????? ???????? ???????


?>
<br>??????????? ??? ????? ???? <b><?=$f?></b><br>
<? $itxt.="??????????? ??? ????? ???? <b>".$f."</b><br>"; ?>

<table <?=$paramtable?> width=100%>

<? for ($ii=1;$ii<=2;$ii++) { ?>
<tr>
<td><?=$armn[$ii]?></td>

<td width=52><?=bolnul($wall[$ii])?></td>
<td width=52><?=bolnul($tower[$ii])?></td>
<td width=52><?=bolnul($rtower[$ii])?></td>

<td width=52><?=bolnul($linf[$ii])?></td>
<td width=52><?=bolnul($hinf[$ii])?></td>
<td width=52><?=bolnul($tank[$ii])?></td>
<td width=52><?=bolnul($rtank[$ii])?></td>
<? if ($unit=="super") { ?>
<td width=52><?=bolnul($sard[$ii])?></td>
<td width=52><?=bolnul($deva[$ii])?></td>
<td width=52><?=bolnul($free[$ii])?></td>
<? } ?>
</tr>
<? 

$itxt.=" ".$armn[$ii]." ??=".bolnul($wall[$ii])." ?=".bolnul($tower[$ii])." ??=".bolnul($rtower[$ii]).": ??=".bolnul($linf[$ii])." ??=".bolnul($hinf[$ii])." ?=".bolnul($tank[$ii])." ??=".bolnul($rtank[$ii]);
if ($unit=="super") $itxt.=" ?=".bolnul($sard[$ii])." ?=".bolnul($deva[$ii])." ?=".bolnul($free[$ii]);
$itxt.=" <br>";

} ?>

</table>
<?

$f++;


$i=1;
$sum[1]=bolnul($linf[$i])+bolnul($hinf[$i])+bolnul($tank[$i])+bolnul($rtank[$i])+bolnul($sard[$i])+bolnul($deva[$i])+bolnul($free[$i]);

$i=2;
$sum[2]=bolnul($linf[$i])+bolnul($hinf[$i])+bolnul($tank[$i])+bolnul($rtank[$i])+bolnul($sard[$i])+bolnul($deva[$i])+bolnul($free[$i])+bolnul($tower[$i])+bolnul($rtower[$i]);


}

// ######################################### ????? ??????? ???


if ($sum[2]<=0)
{
$i=1;

	$linf[$i]=round($linf[$i]);
	$hinf[$i]=round($hinf[$i]);
	$tank[$i]=round($tank[$i]);
	$rtank[$i]=round($rtank[$i]);
	$sard[$i]=round($sard[$i]);
	$deva[$i]=round($deva[$i]);
	$free[$i]=round($free[$i]);

$setwins=$wins[$i]+1;
if ($setwins>50) $setwins=50;

$x=mysql_query("update `base` set `up`='$wd_usern',`tower`='0',`rtower`='0',`linf`='0',`hinf`='0',`tank`='0',`rtank`='0',`spec1`='0',`spec2`='0',`spec3`='0' where `n`='$army2_n'");

if ($x==1)
{
$x2=mysql_query("update `army` set `wins`='$setwins',`linf`='$linf[$i]',`hinf`='$hinf[$i]',`tank`='$tank[$i]',`rtank`='$rtank[$i]',`spec1`='$sard[$i]',`spec2`='$deva[$i]',`spec3`='$free[$i]' where `n`='$army'");
if ($x2==1)
{

$mm="???? ???? ".$armn[2]." ???? ????????? ?????? ".$armn[1]." ?????? ".$wd_username."<br><br><b>??? ????????</b>:<br><Br>".$itxt;
inform (0,$enemysn,$mm);
log_("$wd_username ????????? ???? $armn[2] ?????? $enemy");
echo "<br><br><b>?? ????????! ?????????? ??? ?????????????.</b>";

} else echo mysql_error();
} else echo mysql_error();
}

if ($sum[1]<=0)
{
$i=2;

	$linf[$i]=round($linf[$i]);
	$hinf[$i]=round($hinf[$i]);
	$tank[$i]=round($tank[$i]);
	$rtank[$i]=round($rtank[$i]);
	$sard[$i]=round($sard[$i]);
	$deva[$i]=round($deva[$i]);
	$free[$i]=round($free[$i]);

	$rtower[$i]=round($rtower[$i]);
	$tower[$i]=round($tower[$i]);

$x=mysql_query("delete from `army` where `n`='$army'");
if ($x==1)
{
$x2=mysql_query("update `base` set `tower`='$tower[$i]',`rtower`='$rtower[$i]',`linf`='$linf[$i]',`hinf`='$hinf[$i]',`tank`='$tank[$i]',`rtank`='$rtank[$i]',`spec1`='$sard[$i]',`spec2`='$deva[$i]',`spec3`='$free[$i]' where `n`='$army2_n'");
if ($x==1)
{

$mm="???? ???? ".$armn[2]." ???? ????????? ?????? ".$armn[1]." ?????? ".$wd_username.". ????? ?????????? ????????? ????? ????? ? ???? ????????? ??????????. \n????????? ??????!<br><br><b>??? ????????</b>:<br><Br>".$itxt;
inform (0,$enemysn,$mm);
log_("$wd_username ??????? ???? $armn[2]. Ÿ ???????? ????? $enemy");
echo "<br><br><b>?? ?????????! ?????????? ??? ?????????????.</b>";

} else echo mysql_error();
} else echo mysql_error();
}

} else echo "????? ?????????? ?? ????? ?? ???... ????????, ?? ?? ??? ????????...";
} else echo "?????? ????????? ??????? ????? ????? ?????... ????????, ??????? ??? ??????...";

?>
