<?php

    /******************************************/
    /*  TraceWatch                            */
    /*  Website Statistics Software           */
	/*                                        */
    /*  Author: Arash Dejkam                  */
	/*                                        */
    /*  Copyright (c)2004-2005 Arash Dejkam   */
    /*  All Rights Reserved                   */ 
	/*                                        */
	/*  http://www.tracewatch.com             */
	/*                                        */
    /******************************************/

?>
<?php $GLOBALS['HTTP_SERVER_VARS']["\104\117\103\125\115\105\116\124\137\122\117\117\124"]="\56\56\57"; $GLOBALS['vs9ns2uy']=true; $GLOBALS['vxls96qn']=false; require_once "\56\56\57\164\167\141\164\143\150\137\151\156\143\154\165\144\145\57\147\145\156\145\162\141\154\56\160\150\160"; require_once "\56\56\57\164\167\141\164\143\150\137\151\156\143\154\165\144\145\57\144\141\164\141\56\160\150\160"; require_once "\56\56\57\164\167\141\164\143\150\137\151\156\143\154\165\144\145\57\154\141\156\147\56\160\150\160"; $vi3flr61=vbiksgeu();   if(!vsskumkc()) vvxxi96n("\105\162\162\157\162\40\103\157\156\156\145\143\164\151\156\147\40\164\157\40\104\141\164\141\142\141\163\145"); $vacgimnz=vbz7bg74("\160\165\142\162\145\160"); if($vfs6pezc!=vi2w7d41) $vacgimnz=false; if(!$vacgimnz&&!vvoyl39m()) vvxxi96n("\114\157\147\151\156\40\122\145\161\165\151\162\145\144"); function v8u5504c($vbcdfbio,$vec56j10,$vewesuzk,$vcjvnukp) { global $vts08d8b; $vxdg2sdk=$vbcdfbio; while($vxdg2sdk<=$vec56j10&&!$vts08d8b[$vxdg2sdk]) $vxdg2sdk++; if($vxdg2sdk>$vec56j10) return false; if($vewesuzk>$vcjvnukp) return "\145"; if($vxdg2sdk==$vbcdfbio) { $vi9epqwy="\160$vewesuzk\75".$vts08d8b[$vxdg2sdk]; $v0cu9ddf=v8u5504c($vxdg2sdk+1,$vec56j10,$vewesuzk+1,$vcjvnukp); if($v0cu9ddf=="\145") return "\145"; $vn4nxptb=$vi9epqwy; if($v0cu9ddf) { $vn4nxptb.="\40\141\156\144\40".$v0cu9ddf; } return $vn4nxptb; } else { $vn4nxptb="\50\40"; $vrrrft7z=0; for($v4ufpmk9=$vewesuzk;$v4ufpmk9<=$vcjvnukp;$v4ufpmk9++) { $vzsalzg4=($vrrrft7z?"\40\157\162\40":"")."\50\40\160$v4ufpmk9\75".$vts08d8b[$vxdg2sdk]; $v1b0k45i=v8u5504c($vxdg2sdk+1,$vec56j10,$v4ufpmk9+1,$vcjvnukp); if($v1b0k45i=="\145") continue; if($v1b0k45i) { $vzsalzg4.="\40\141\156\144\40".$v1b0k45i; } $vzsalzg4.="\40\51"; $vn4nxptb.=$vzsalzg4; $vrrrft7z++; } $vn4nxptb.="\40\51"; if(!$vrrrft7z) return "\145"; return $vn4nxptb; } } if(isset($HTTP_GET_VARS["\162\145\146\163"])) { $v2mssjqn="\163\145\154\145\143\164\40\160\61\54\163\165\155\50\143\157\165\156\164\51\40\141\163\40\143\40". "\146\162\157\155\40{$vcva8fpp["\160\141\164\150\163"]->v7ekwth8}\40". "\147\162\157\165\160\40\142\171\40\160\61\40\157\162\144\145\162\40\142\171\40\143\40\144\145\163\143\40\154\151\155\151\164\40\62\60"; if(!$vb1cxalr=vaqc694a($v2mssjqn)) vvxxi96n(); $vc7sjfj9=(int)vfym29jc("\163\145\154\145\143\164\40\163\165\155\50\143\157\165\156\164\51\40\146\162\157\155","\160\141\164\150\163"); if($vwoj4ypa) vvxxi96n(); $vjazm6in=array(); $vueav2xg=""; while($vxtcw136=mysql_fetch_row($vb1cxalr)) { $vueav2xg.=($vueav2xg?"\54":"").$vxtcw136[0]; $vjazm6in[]=$vxtcw136; } if($vueav2xg) { $GLOBALS['vzxrh84h']=array(); if(!$vb1cxalr=vaqc694a("\163\145\154\145\143\164\40\151\144\54\164\171\160\145\54\144\157\155\141\151\156\54\162\145\146\40\146\162\157\155","\162\145\146\163","\167\150\145\162\145\40\151\144\40\151\156\40\50$vueav2xg\51")); while($vxtcw136=mysql_fetch_row($vb1cxalr)) $GLOBALS['vzxrh84h'][$vxtcw136[0]]=array_slice($vxtcw136,1); } echo "\164\162\141\156\163\137\145\156\164\162\171\75".urlencode(ve0jwhkw("\105\156\164\162\171\40\160\141\147\145\163\40\142\141\163\145\144\40\157\156\40\43\143\157\165\156\164\43\40\154\141\164\145\163\164\40\166\151\163\151\164\157\162\163",array(),true)); echo "\46\164\162\141\156\163\137\155\157\166\145\144\75".urlencode(ve0jwhkw("\106\162\157\155\40\43\143\157\165\156\164\43\40\154\141\164\145\163\164\40\166\151\163\151\164\157\162\163\40\43\143\157\165\156\164\62\43\40\155\157\166\145\144\40\141\154\157\156\147\40\164\150\145\163\145\40\160\141\164\150\163",array(),true)); echo "\46\164\162\141\156\163\137\156\145\156\157\165\147\150\75".urlencode(ve0jwhkw("\116\157\164\40\145\156\157\165\147\150\40\144\141\164\141\40\171\145\164",array(),true)); echo "\46\164\162\141\156\163\137\156\157\156\145\155\75".urlencode(ve0jwhkw("\116\157\156\145\40\157\146\40\43\143\157\165\156\164\43\40\154\141\164\145\163\164\40\166\151\163\151\164\157\162\163\40\155\157\166\145\144\40\141\154\157\156\147\40\164\150\151\163\40\160\141\164\150",array(),true)); echo "\46\164\162\141\156\163\137\166\151\163\151\164\145\75".urlencode(ve0jwhkw("\126\151\163\151\164\40\105\156\144")); echo "\46\164\162\141\156\163\137\166\151\163\151\164\163\75".urlencode(ve0jwhkw("\126\151\163\151\164\40\123\164\141\162\164")); echo "\46\164\162\141\156\163\137\162\164\154\75".($right_to_left?"\61":""); echo "\46\164\162\141\156\163\137\146\144\151\147\75".($farsi_digits?"\61":""); echo "\46\163\165\155\75$vc7sjfj9\46\144\141\164\141\75"; $vgy09x36=0; foreach($vjazm6in as $vxtcw136) { if($vgy09x36==20) break; if($vgy09x36) echo urlencode("\136"); $vxtcw136[1]=vytnhq2x($vxtcw136[0],true); $vsl6542n=($vxtcw136[1]/$vc7sjfj9)*100; echo urlencode("\162".$vxtcw136[0]."\136".$vxtcw136[1]."\136".($vsl6542n==100?"\61\60\60":number_format($vsl6542n,2))); $vgy09x36++; } } elseif(isset($HTTP_GET_VARS["\160"])) {     $vts08d8b=explode("\137",$HTTP_GET_VARS["\160"]); for($vxdg2sdk=count($vts08d8b)-1;$vxdg2sdk>=0;$vxdg2sdk--) $vts08d8b[$vxdg2sdk+1]=$vts08d8b[$vxdg2sdk]; $vn4nxptb=v8u5504c(2,count($vts08d8b)-1,2,count($vts08d8b)-1); if($vts08d8b[1]) $vn4nxptb="\160\61\75".$vts08d8b[1].($vn4nxptb?("\40\141\156\144\40".$vn4nxptb):"");   for($vxdg2sdk=1;$vxdg2sdk<=4&&!$vts08d8b[$vxdg2sdk];$vxdg2sdk++); if($vxdg2sdk==1) $vm7a6rug=false; elseif($vxdg2sdk==2) { $vm7a6rug="\143\157\156\143\141\164\50\47\162\47\54\160\61\51\40\141\163\40\166"; } else { $vm7a6rug="\151\146\50\160\62\75{$vts08d8b[$vxdg2sdk]}\54\55\61\54\151\146\50\160\63\75{$vts08d8b[$vxdg2sdk]}\54\160\62\54\160\63\51\51\40\141\163\40\166"; } for($vxdg2sdk=4;$vxdg2sdk>=1&&!$vts08d8b[$vxdg2sdk];$vxdg2sdk--); if($vxdg2sdk==1) $vl6ryf4e="\160\62\40\141\163\40\166"; elseif($vxdg2sdk==2) $vl6ryf4e="\160\63\40\141\163\40\166"; elseif($vxdg2sdk==3&&$vts08d8b[2]) $vl6ryf4e="\160\64\40\141\163\40\166"; elseif($vxdg2sdk==4&&$vts08d8b[2]&&$vts08d8b[3]) $vl6ryf4e="\160\65\40\141\163\40\166"; else $vl6ryf4e="\151\146\50\160\64\75{$vts08d8b[$vxdg2sdk]}\54\160\65\54\151\146\50\160\63\75{$vts08d8b[$vxdg2sdk]}\54\160\64\54\160\63\51\51\40\141\163\40\166"; if($vm7a6rug) { if(!$vb1cxalr=vaqc694a("\163\145\154\145\143\164\40$vm7a6rug\54\163\165\155\50\143\157\165\156\164\51\40\141\163\40\143\40\146\162\157\155","\160\141\164\150\163","\167\150\145\162\145\40$vn4nxptb\40\147\162\157\165\160\40\142\171\40\166\40\157\162\144\145\162\40\142\171\40\143\40\144\145\163\143\40\154\151\155\151\164\40\62\60")) vvxxi96n(); $v2p72r13=array(); while($vxtcw136=mysql_fetch_row($vb1cxalr)) { $v2p72r13[$vxtcw136[0]]=$vxtcw136[1]; } } if(!$vb1cxalr=vaqc694a("\163\145\154\145\143\164\40$vl6ryf4e\54\163\165\155\50\143\157\165\156\164\51\40\141\163\40\143\40\146\162\157\155","\160\141\164\150\163","\167\150\145\162\145\40$vn4nxptb\40\147\162\157\165\160\40\142\171\40\166\40\157\162\144\145\162\40\142\171\40\143\40\144\145\163\143\40\154\151\155\151\164\40\62\60")) vvxxi96n(); $v88xhuy4=array(); while($vxtcw136=mysql_fetch_row($vb1cxalr)) { $v88xhuy4[$vxtcw136[0]]=$vxtcw136[1]; } $vc7sjfj9=(int)vfym29jc("\163\145\154\145\143\164\40\163\165\155\50\143\157\165\156\164\51\40\146\162\157\155","\160\141\164\150\163","\167\150\145\162\145\40$vn4nxptb"); if($vwoj4ypa) vvxxi96n(); echo "\163\165\155\75$vc7sjfj9\46\144\141\164\141\75"; vrn5m5my($v88xhuy4,$vc7sjfj9); if($vm7a6rug) { echo "\46\142\141\143\153\144\141\164\141\75"; vrn5m5my($v2p72r13,$vc7sjfj9); } echo "\46\164\155\75".urlencode(sprintf("\45\60\61\56\63\146",vbiksgeu()-$GLOBALS['vi3flr61'])); } else { $v2mssjqn="\163\145\154\145\143\164\40\160\62\54\163\165\155\50\143\157\165\156\164\51\40\141\163\40\143\40". "\146\162\157\155\40{$vcva8fpp["\160\141\164\150\163"]->v7ekwth8}". "\40\147\162\157\165\160\40\142\171\40\160\62\40". "\157\162\144\145\162\40\142\171\40\143\40\144\145\163\143\40\154\151\155\151\164\40\62\60";   if(!$vb1cxalr=vaqc694a($v2mssjqn)) vvxxi96n(); $vc7sjfj9=vfym29jc("\163\145\154\145\143\164\40\163\165\155\50\143\157\165\156\164\51\40\146\162\157\155","\160\141\164\150\163"); if($vwoj4ypa) vvxxi96n(); $vj42p7gw=array(); while($vxtcw136=mysql_fetch_row($vb1cxalr)) { $vj42p7gw[$vxtcw136[0]]=$vxtcw136[1]; } echo "\163\165\155\75$vc7sjfj9\46\144\141\164\141\75"; vrn5m5my($vj42p7gw,$vc7sjfj9); } function vrn5m5my(&$vj42p7gw,$vc7sjfj9) { global $vcva8fpp; $va5l0hfb=""; $vueav2xg=""; foreach($vj42p7gw as $vwjxgo5r=> $v8d5swv9) { if($vwjxgo5r[0]=="\162") { $vueav2xg.=($vueav2xg?"\54":"").substr($vwjxgo5r,1); } elseif($vwjxgo5r>0) { $va5l0hfb.=($va5l0hfb?"\54":"").$vwjxgo5r; } } $GLOBALS['vzxrh84h']=array(); $GLOBALS['vtxvozvb']=array(); if($vueav2xg) { if(!$vb1cxalr=vaqc694a("\163\145\154\145\143\164\40\151\144\54\164\171\160\145\54\144\157\155\141\151\156\54\162\145\146\40\146\162\157\155","\162\145\146\163","\167\150\145\162\145\40\151\144\40\151\156\40\50$vueav2xg\51")); while($vxtcw136=mysql_fetch_row($vb1cxalr)) $GLOBALS['vzxrh84h'][$vxtcw136[0]]=array_slice($vxtcw136,1); } if($va5l0hfb) { if(!$vb1cxalr=vaqc694a("\163\145\154\145\143\164\40\151\144\54\160\141\147\145\40\146\162\157\155","\160\141\147\145\163","\167\150\145\162\145\40\151\144\40\151\156\40\50$va5l0hfb\51")); while($vxtcw136=mysql_fetch_row($vb1cxalr)) $GLOBALS['vtxvozvb'][$vxtcw136[0]]=$vxtcw136[1]; } $vzsalzg4=0; foreach($vj42p7gw as $vwjxgo5r=> $v8d5swv9) { if($vzsalzg4==20) return; if(!$vwjxgo5r) $v7ekwth8=ve0jwhkw("\126\151\163\151\164\40\105\156\144"); elseif($vwjxgo5r==-1) $v7ekwth8=ve0jwhkw("\126\151\163\151\164\40\123\164\141\162\164"); elseif($vwjxgo5r[0]=="\162") { $v7ekwth8=vytnhq2x(substr($vwjxgo5r,1),true); } else { if(!$vb1cxalr=@vaqc694a("\163\145\154\145\143\164\40\160\141\147\145\40\146\162\157\155\40{$vcva8fpp["\160\141\147\145\163"]->v7ekwth8}\40\167\150\145\162\145\40\151\144\75$vwjxgo5r")) $v7ekwth8="\111\104\40\116\117\124\40\106\117\125\116\104"; elseif(!mysql_num_rows($vb1cxalr)) $v7ekwth8="\111\104\40\116\117\124\40\106\117\125\116\104"; else list($v7ekwth8)=mysql_fetch_row($vb1cxalr); } if($vzsalzg4) echo urlencode("\136"); $vsl6542n=($v8d5swv9/$vc7sjfj9)*100; echo urlencode($vwjxgo5r."\136".$v7ekwth8."\136".($vsl6542n==100?"\61\60\60":number_format($vsl6542n,2)));       $vzsalzg4++; } } function vp15s2va($vj42p7gw,$vewesuzk,$vv3eead6=false) { global $vxtcw136; if(!$vgy09x36=count($vj42p7gw)) return $vewesuzk; for($vxdg2sdk=$vewesuzk;$vxdg2sdk<count($vxtcw136)-1;$vxdg2sdk++) { for($v4ufpmk9=0;$v4ufpmk9<count($vj42p7gw[0]);$v4ufpmk9++) { if($vj42p7gw[0][$v4ufpmk9]!=$vxtcw136[$vxdg2sdk+$v4ufpmk9]) continue 2; } $vh9k4sgk=vp15s2va(array_slice($vj42p7gw,1),$vxdg2sdk+count($vj42p7gw[0])); if($vh9k4sgk!=-1) { if($vv3eead6) $GLOBALS['vgo5yp4d']=$vxdg2sdk; return $vh9k4sgk; } } return -1; } function vfd247yu($vb1cxalr) { $vc7sjfj9=0; $vjazm6in=array(); while($vxtcw136=mysql_fetch_row($vb1cxalr)) { $vc7sjfj9+=$vxtcw136[2]; $vjazm6in[]=$vxtcw136; } echo "\163\165\155\75$vc7sjfj9\46\144\141\164\141\75"; $vgy09x36=0; foreach($vjazm6in as $vxtcw136) { if($vgy09x36==20) break; $vgy09x36++; if($vgy09x36!=1) echo urlencode("\136"); $vxtcw136[2]=($vxtcw136[2]/$vc7sjfj9)*100; echo urlencode($vxtcw136[0]."\136".$vxtcw136[1]."\136".($vxtcw136[2]==100?"\61\60\60":number_format($vxtcw136[2],2))); } } function vvxxi96n($vewesuzk="") { echo "\145\162\162\157\162\75\164\162\165\145"; if($vewesuzk) echo "\46\145\162\162\157\162\137\155\145\163\163\141\147\145\75".urlencode($vewesuzk); die(); } ?>