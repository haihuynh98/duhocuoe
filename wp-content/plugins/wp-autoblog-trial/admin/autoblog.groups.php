<?php
global $wpdb; global $VH04715UPRR24H5YSOM5SG864D5TO241X1W171585DC640CB4D004B6702C0AC600321111,$P9GV7555P41NVN4V9X052V6W2MWENEJGV8Y7T515CLG225DW43Q014M511L41Y988RZT6DL9LZ421T7R30JYEDAD335D3718B6DD87D9EE07E43DF3C1C2800,$D77K22K58KGA1626TI1XQC5NHT6E03A699EYY740FIOXKGRI3263G4E797DCKK62K1W8M5805M1NK97Z3F70V97LAET2EHFB22539EIE9H4QVC695T623365A02463058999AF939ABC8E32D15286; ?>

<div class="wrap">
 <div class="icon32" id="icon-wp-autopost"><br/></div>


 <div style="margin:20px;"></div>

<?php
@$B83OLE18W73Z673H5360UM483O761EWRJD4GW5JI33LQ6889J4850F89501C432F61C9A14E0774113B72CE2554 = $_REQUEST['saction']; switch($B83OLE18W73Z673H5360UM483O761EWRJD4GW5JI33LQ6889J4850F89501C432F61C9A14E0774113B72CE2554){ case 'changePerPage': $U5I2YKJW35NV1HFX0UNT05AZGYU50845329DA45802A46FD5AC8AE67646B0FEE51550 = get_option('wp_autoblog_per_page'); $U5I2YKJW35NV1HFX0UNT05AZGYU50845329DA45802A46FD5AC8AE67646B0FEE51550['group'] = $_POST['groupPerPage']; update_option('wp_autoblog_per_page',$U5I2YKJW35NV1HFX0UNT05AZGYU50845329DA45802A46FD5AC8AE67646B0FEE51550); break; case 'bulkDelete': $HOS9FNT252ZJF98194090W4NRR3B98494W3E12Z659L29W20W5X4IK7HU219GX685349TF743PZ366Q143B6LMX2MBF516925BB37A8544C8EE19A24E15C051242 = $_POST['ids']; foreach($HOS9FNT252ZJF98194090W4NRR3B98494W3E12Z659L29W20W5X4IK7HU219GX685349TF743PZ366Q143B6LMX2MBF516925BB37A8544C8EE19A24E15C051242 as $U58P5W539521Z4RE34I5F55H6S862X9J282B795E8Q25B80BB7740288FDA1F201890375A60C8F0930){ $wpdb->query($wpdb->prepare("update $P9GV7555P41NVN4V9X052V6W2MWENEJGV8Y7T515CLG225DW43Q014M511L41Y988RZT6DL9LZ421T7R30JYEDAD335D3718B6DD87D9EE07E43DF3C1C2800 set
			   group_id = %d			   
			   where group_id = %d",0,$U58P5W539521Z4RE34I5F55H6S862X9J282B795E8Q25B80BB7740288FDA1F201890375A60C8F0930)); $wpdb->query($wpdb->prepare("delete from  $D77K22K58KGA1626TI1XQC5NHT6E03A699EYY740FIOXKGRI3263G4E797DCKK62K1W8M5805M1NK97Z3F70V97LAET2EHFB22539EIE9H4QVC695T623365A02463058999AF939ABC8E32D15286 where id = %d",$U58P5W539521Z4RE34I5F55H6S862X9J282B795E8Q25B80BB7740288FDA1F201890375A60C8F0930)); } $JX2OPCO16J1PS7AM0WRB99UC2CM69ACD0G99PJOYM109FW14303C2HOB2DV4204PB6WN7CLHT5GWLX7I88T14MT8WS37BB7C14L7IDKC2C46J662EVNW471494U43358RCC5674A6T7YIX59BC91A6E08788BEFC0344F868459DA861850 = '<strong>'.__('Delete Success.','autoblog').'</strong>'; break; } ?>


<?php  if(!isset($_REQUEST['paged'])){ $V800I9TS6O0T5AJC3SMDKRDU70SPZY6YVZCM3VH471AM515711LM49Y6K38LBH47FDC546382E92E8D476D33132FBB72DF79821 = 1; } else { $V800I9TS6O0T5AJC3SMDKRDU70SPZY6YVZCM3VH471AM515711LM49Y6K38LBH47FDC546382E92E8D476D33132FBB72DF79821 = $_REQUEST['paged']; } $U5I2YKJW35NV1HFX0UNT05AZGYU50845329DA45802A46FD5AC8AE67646B0FEE51550 = get_option('wp_autoblog_per_page'); if($U5I2YKJW35NV1HFX0UNT05AZGYU50845329DA45802A46FD5AC8AE67646B0FEE51550['group']==null) $K2L1PR692F32373J0VN74RT4L4D4A0O5C434ZVDCM6IGA1W4T97UHHO04DA448293179E9A897ECDE61E86457491791=10; else $K2L1PR692F32373J0VN74RT4L4D4A0O5C434ZVDCM6IGA1W4T97UHHO04DA448293179E9A897ECDE61E86457491791=$U5I2YKJW35NV1HFX0UNT05AZGYU50845329DA45802A46FD5AC8AE67646B0FEE51550['group']; $PPNQ7LM5L779YY1T78V3726X39N0875K0OS2E436YBTHJ87XP3L2CG7R9K22PW421X5AJ86486ZHXZ488QB7YBQ0J3T7259YV4536T8TL20AOF2QD563Q5F3XOMY61C9J1U2D98A07F84921B24EE30F86FD8CD85C3C5328 = (($V800I9TS6O0T5AJC3SMDKRDU70SPZY6YVZCM3VH471AM515711LM49Y6K38LBH47FDC546382E92E8D476D33132FBB72DF79821 * $K2L1PR692F32373J0VN74RT4L4D4A0O5C434ZVDCM6IGA1W4T97UHHO04DA448293179E9A897ECDE61E86457491791) - $K2L1PR692F32373J0VN74RT4L4D4A0O5C434ZVDCM6IGA1W4T97UHHO04DA448293179E9A897ECDE61E86457491791); $J692X44761DU4N5M49MK9G369AL41DAS134A81578X88TA9B78G8098K0A3GME4EZXZ9A1APZBRA69X3X77CMPA2113HG2D5R6YJM65RMVKU38H3TSUE3408DFBB44B4487415B134BCE9C790A27FE5E3776 = $wpdb->get_var('SELECT count(*) FROM '.$D77K22K58KGA1626TI1XQC5NHT6E03A699EYY740FIOXKGRI3263G4E797DCKK62K1W8M5805M1NK97Z3F70V97LAET2EHFB22539EIE9H4QVC695T623365A02463058999AF939ABC8E32D15286); $FSGG4BC2JD08PH227PW5LJ9ZS523X43A39BZQGAE0FE0CC7E778FABF61F9217886EB31D8497 = ceil($J692X44761DU4N5M49MK9G369AL41DAS134A81578X88TA9B78G8098K0A3GME4EZXZ9A1APZBRA69X3X77CMPA2113HG2D5R6YJM65RMVKU38H3TSUE3408DFBB44B4487415B134BCE9C790A27FE5E3776 / $K2L1PR692F32373J0VN74RT4L4D4A0O5C434ZVDCM6IGA1W4T97UHHO04DA448293179E9A897ECDE61E86457491791); $C1G9SY7J1627D6HRXQ4Y27Q5EW4QO0B0F47YDPWPO7475FR20XD721A40TO1J694TA2612331D76F19471C03755301E836A959338 = $wpdb->get_results('SELECT id,group_name FROM '.$D77K22K58KGA1626TI1XQC5NHT6E03A699EYY740FIOXKGRI3263G4E797DCKK62K1W8M5805M1NK97Z3F70V97LAET2EHFB22539EIE9H4QVC695T623365A02463058999AF939ABC8E32D15286.' ORDER BY id DESC LIMIT '.$PPNQ7LM5L779YY1T78V3726X39N0875K0OS2E436YBTHJ87XP3L2CG7R9K22PW421X5AJ86486ZHXZ488QB7YBQ0J3T7259YV4536T8TL20AOF2QD563Q5F3XOMY61C9J1U2D98A07F84921B24EE30F86FD8CD85C3C5328.','.$K2L1PR692F32373J0VN74RT4L4D4A0O5C434ZVDCM6IGA1W4T97UHHO04DA448293179E9A897ECDE61E86457491791); ?>



<?php if($JX2OPCO16J1PS7AM0WRB99UC2CM69ACD0G99PJOYM109FW14303C2HOB2DV4204PB6WN7CLHT5GWLX7I88T14MT8WS37BB7C14L7IDKC2C46J662EVNW471494U43358RCC5674A6T7YIX59BC91A6E08788BEFC0344F868459DA861850!=null){ ?>
<div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php echo $JX2OPCO16J1PS7AM0WRB99UC2CM69ACD0G99PJOYM109FW14303C2HOB2DV4204PB6WN7CLHT5GWLX7I88T14MT8WS37BB7C14L7IDKC2C46J662EVNW471494U43358RCC5674A6T7YIX59BC91A6E08788BEFC0344F868459DA861850; ?>
</div>
<?php } ?>

<?php if($MZ2B0H49525MY5PC58FQ11266U7CR2Z76B4073G6M21FGE6CJA978F2SV294O6Q02OY292B143SPN8CZM96CS19ILJ0WH9M3W54942MY04K8406I7UG69505KB9O9D7336B31EF26E52B6D4D4D9DC32F00C0552B0090!=null){ ?>
<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php echo $MZ2B0H49525MY5PC58FQ11266U7CR2Z76B4073G6M21FGE6CJA978F2SV294O6Q02OY292B143SPN8CZM96CS19ILJ0WH9M3W54942MY04K8406I7UG69505KB9O9D7336B31EF26E52B6D4D4D9DC32F00C0552B0090; ?>
</div>
<?php } ?>


<form class="form-inline" id="form1"  method="post" action="admin.php?page=autoblog-groups">  
   <input type="hidden" name="saction" id="form1-saction" value="" />
   <div class="form-group "> 
    <div class="input-group ">   <!-- input-group-sm -->      
	  <div class="btn-group "> <!-- btn-group-sm -->
        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
         <?php echo __('Bulk Actions','wp-autoblog'); ?>
         <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
          <li class="dropdown-menu-danger" ><a class="dropdown-menu-danger" href="javascript:;" onclick="H59DPSLT6N15I1UHL737G131VQG9B3Q5X513V7R0357BQLYY28GFVF0BVZJ6I08ECZ29Z6W5U2079DC982CFA6L0T388A4EL38QELDJ4X44DYHV27HAG5MD2732S26E272381BAD8A27EA011187F16B59052462()"><?php echo __('Delete','wp-autoblog'); ?></a></li>
        </ul>
      </div>

    </div>
  </div>
  
 
  <div class="form-group pull-right">   
  <div class="input-group ">
	  <span class="input-group-addon"><?php echo __('New Group','wp-autoblog'); ?> : </span>
      <input type="text" class="form-control" placeholder="<?php echo __('Group Name','wp-autoblog'); ?>" name="newGroupName" id="newGroupName" size="25" value=""/>
	  <span class="input-group-btn">
        <a class="btn btn-default" id="submitNewGroup" data-loading-text="Loading..." type="submit" onclick = "HT7891O6J6T3V12NNFDDSX646FS629DTUAU34X2ALM1T4M23VRV52028I0791R33UH7H8C977J7HF2OLJ54RK120UWDI56O977F5AC3E861794155CF9EC91496F1DB66177()" ><?php echo __('Submit'); ?> </a>
      </span>
  </div>
  </div>
</form>






<div style="margin:5px;"></div>


<form id="form2" method="post" action="admin.php?page=autoblog-groups">  
<input type="hidden" name="saction" id="form2-saction" value="" />
<div class="panel panel-primary">
 <div class="panel-heading">
    <h3 class="panel-title"><?php echo __('All Task-Groups','wp-autoblog'); ?></h3>
  </div>
  <table class="table">
   <thead>
    <tr>
     <th width="1%" >
      <input type="checkbox" name="All" id="checkAll" class="checkbox" onchange="B7D803NA7NLD66RDFP5D7K92AL941Q028JTY692Q53QG577X91GK4LWARNL4DD9B848C851BCB6CF881750E9689CB8A3810()" />
	 </th>
     <th><?php echo __('Group Name','wp-autoblog'); ?></th>
     <th width="20%"><?php echo __('Task Count','wp-autoblog'); ?></th>
    </tr>
   </thead>
   <tbody>

   <tr id="trgroup0" >
     <th scope="row">
	   <input type="checkbox" class="checkbox" disabled="true" value="0"  />
	 </th>
	 <td>
	    <strong><?php echo __('Default Group','wp-autoblog'); ?></strong>
		<div class="row-actions">
		  <a  disabled="true" class="opt-link"  ><?php echo __('Edit','wp-autoblog'); ?></a> |
		  <a  disabled="true" class='opt-link-red opt-link' ><?php echo __('Delete','wp-autoblog'); ?></a></span>
		</div>	
	 </td>
	 <td>
	    <?php $P7Z5807X5Q23081062VP7CVM24CT3985UD3ULN149ME2942A04780E223B215EB8B663CF53531147 = $wpdb->get_var('SELECT count(*) FROM '.$P9GV7555P41NVN4V9X052V6W2MWENEJGV8Y7T515CLG225DW43Q014M511L41Y988RZT6DL9LZ421T7R30JYEDAD335D3718B6DD87D9EE07E43DF3C1C2800.' WHERE group_id = 0' ); ?>
		<?php echo $P7Z5807X5Q23081062VP7CVM24CT3985UD3ULN149ME2942A04780E223B215EB8B663CF53531147; ?>
	 </td>
   </tr>

<?php  foreach ($C1G9SY7J1627D6HRXQ4Y27Q5EW4QO0B0F47YDPWPO7475FR20XD721A40TO1J694TA2612331D76F19471C03755301E836A959338 as $I7QQU0UP8850Q1KMH9109P4UREVE8H512XZ6JB7I6B413K0SDBF93B3B84A94AA24823428CF9873D991239){ $J0K15D5P7Q0W9EI25OSHJ7D2639D7FK8JX72GH8P1960441SW5ZROAM966CM6B163S9G2N83PDQ236WX55O59M6P7422636T793H7418472BF7BB53D55B9FB93A0457ACDEBA0BE132195 = $wpdb->get_var('SELECT count(*) FROM '.$P9GV7555P41NVN4V9X052V6W2MWENEJGV8Y7T515CLG225DW43Q014M511L41Y988RZT6DL9LZ421T7R30JYEDAD335D3718B6DD87D9EE07E43DF3C1C2800.' WHERE group_id = '.($I7QQU0UP8850Q1KMH9109P4UREVE8H512XZ6JB7I6B413K0SDBF93B3B84A94AA24823428CF9873D991239->id) ); ?>
    <tr id="trgroup<?php echo $I7QQU0UP8850Q1KMH9109P4UREVE8H512XZ6JB7I6B413K0SDBF93B3B84A94AA24823428CF9873D991239->id; ?>" >
     <th scope="row">
	   <input type="checkbox" name="ids[]" class="checkbox" value="<?php echo $I7QQU0UP8850Q1KMH9109P4UREVE8H512XZ6JB7I6B413K0SDBF93B3B84A94AA24823428CF9873D991239->id; ?>"  />
	 </th>
     <td>
	   <a class="normal-font" tabindex="0" role="button" ><strong><?php echo $I7QQU0UP8850Q1KMH9109P4UREVE8H512XZ6JB7I6B413K0SDBF93B3B84A94AA24823428CF9873D991239->group_name; ?></strong></a>   
		<div class="row-actions">
		  <a href="#" class="opt-link" title="<?php echo __('Edit this item inline','wp-autoblog'); ?>" data-toggle="modal" data-target="#qchangeModal"  data-groupid="<?php echo $I7QQU0UP8850Q1KMH9109P4UREVE8H512XZ6JB7I6B413K0SDBF93B3B84A94AA24823428CF9873D991239->id; ?>"  data-groupname="<?php echo $I7QQU0UP8850Q1KMH9109P4UREVE8H512XZ6JB7I6B413K0SDBF93B3B84A94AA24823428CF9873D991239->group_name; ?>" data-taskcount="<?php echo $J0K15D5P7Q0W9EI25OSHJ7D2639D7FK8JX72GH8P1960441SW5ZROAM966CM6B163S9G2N83PDQ236WX55O59M6P7422636T793H7418472BF7BB53D55B9FB93A0457ACDEBA0BE132195; ?>"><?php echo __('Edit','wp-autoblog'); ?></a> |
		  <a class='opt-link-red' href="#" data-toggle="modal" data-target="#deleteModal" data-groupid="<?php echo $I7QQU0UP8850Q1KMH9109P4UREVE8H512XZ6JB7I6B413K0SDBF93B3B84A94AA24823428CF9873D991239->id; ?>"  data-groupname="<?php echo $I7QQU0UP8850Q1KMH9109P4UREVE8H512XZ6JB7I6B413K0SDBF93B3B84A94AA24823428CF9873D991239->group_name; ?>"><?php echo __('Delete','wp-autoblog'); ?></a></span>
		</div>	
	  </td>
      <td>
		  <?php echo $J0K15D5P7Q0W9EI25OSHJ7D2639D7FK8JX72GH8P1960441SW5ZROAM966CM6B163S9G2N83PDQ236WX55O59M6P7422636T793H7418472BF7BB53D55B9FB93A0457ACDEBA0BE132195; ?>
	  </td>
    </tr>
<?php
 } ?>   
   </tbody>
  </table>
</div><!-- end <div class="panel panel-primary"> -->
</form>


<div class="btn-toolbar">   
  <?php
 $A9PKI4KVUX72J42Z99O4PRO2Q952L8S4K0N4N3R132258Y021GG2R6885TH82Z4X55ILWC8QQ55915Y91N16J9E009ABBK137OM75NF8SWH1N955W8PU9TFB95X675D7905B5Q0O04MCCI8SRL71860C77C6745379B0D44304D66B6A136236 = "admin.php?page=autoblog-groups"; $M6EQ7417U5UMH0KOAODBWQ8Q92U27QTVS618EM56DSGEH0I93AL3FX09FX56BBBFD3579F01D11B6F7FB3241FDBC0F1173 = '&paged='; $L5L04LLAX4000HW8040J2NA00YZ3BKAQD4U1689S335IRJ28V84FCZ50T07Y87LA4643I77LJY3ZLEEBVT063M8IE53XX0844X5YU27UZ4972BUVD88C7F7A0B5A1EAE34382FFD432C6C306818 = $FSGG4BC2JD08PH227PW5LJ9ZS523X43A39BZQGAE0FE0CC7E778FABF61F9217886EB31D8497; $V5AJZNV5A7752WL4V6Y9MT4238N4650A2774NW60XO4223L8GB3ZDST6SKD69RQ4HU12AWHY6Q895P91275RC467L5D60ZL93849389K28TI0297C4DY57OX414753B443B5C9175984C071F30B873FDCE0A0009130 = $V800I9TS6O0T5AJC3SMDKRDU70SPZY6YVZCM3VH471AM515711LM49Y6K38LBH47FDC546382E92E8D476D33132FBB72DF79821; $B981FU5FZL72FZFH1CJ0353131ZM366153BE6049F09917AC42DD4B9053CC1E20487 = $J692X44761DU4N5M49MK9G369AL41DAS134A81578X88TA9B78G8098K0A3GME4EZXZ9A1APZBRA69X3X77CMPA2113HG2D5R6YJM65RMVKU38H3TSUE3408DFBB44B4487415B134BCE9C790A27FE5E3776; $FA9W0HN6H098KY9H8428Z3N9CK92FM4O7W48LS6162F53P622MXI382HFIOGU2346N027FYB0BAC2AFE8E223ADD752D7404481B75369762 = array ( ); $BQX6RJNQQ38E9QK2F98LTLR156671LL2M4J2NA124V48611G78U2J189256Q9114I544SI2DKE1Z925L77LD6S46QWY02192FZ9M68MO1788I5B5WZOR2T33903A88Y7U8MOG6CBB81506A7FE3EF03F7A89C76C52131A1146 = new CS551T8LE5I7K1R7ZPCGU74C04ORG0UBYV3RW7Q9J2863R3460I1W3BN30LG250I8VU9Q2AJL204S31O10455FX5O52M775L9N55FM6N2AF63D350F58363261B36B04B7121A095497(); $BQX6RJNQQ38E9QK2F98LTLR156671LL2M4J2NA124V48611G78U2J189256Q9114I544SI2DKE1Z925L77LD6S46QWY02192FZ9M68MO1788I5B5WZOR2T33903A88Y7U8MOG6CBB81506A7FE3EF03F7A89C76C52131A1146->LH288Y9DU7SS90G09WE13R5FMQ9H9DKI3KX8425MK3ND23BZ2EXP5K1847UFE2W6WI447GM27DB265367A6593F390389116F9038ECA3B2018($A9PKI4KVUX72J42Z99O4PRO2Q952L8S4K0N4N3R132258Y021GG2R6885TH82Z4X55ILWC8QQ55915Y91N16J9E009ABBK137OM75NF8SWH1N955W8PU9TFB95X675D7905B5Q0O04MCCI8SRL71860C77C6745379B0D44304D66B6A136236,$M6EQ7417U5UMH0KOAODBWQ8Q92U27QTVS618EM56DSGEH0I93AL3FX09FX56BBBFD3579F01D11B6F7FB3241FDBC0F1173,$L5L04LLAX4000HW8040J2NA00YZ3BKAQD4U1689S335IRJ28V84FCZ50T07Y87LA4643I77LJY3ZLEEBVT063M8IE53XX0844X5YU27UZ4972BUVD88C7F7A0B5A1EAE34382FFD432C6C306818,$V5AJZNV5A7752WL4V6Y9MT4238N4650A2774NW60XO4223L8GB3ZDST6SKD69RQ4HU12AWHY6Q895P91275RC467L5D60ZL93849389K28TI0297C4DY57OX414753B443B5C9175984C071F30B873FDCE0A0009130,$B981FU5FZL72FZFH1CJ0353131ZM366153BE6049F09917AC42DD4B9053CC1E20487,$FA9W0HN6H098KY9H8428Z3N9CK92FM4O7W48LS6162F53P622MXI382HFIOGU2346N027FYB0BAC2AFE8E223ADD752D7404481B75369762); ?>
  
  <form id="myform_NumPerPage" method="post" action="admin.php?page=autoblog-groups">   
  <input type="hidden" name="saction" value="changePerPage" />
  <div class="form-inline" style="float:right">
  <div class="input-group input-group-sm">
	  <span class="input-group-addon"><?php echo __('Number per page','wp-autoblog'); ?> : </span>
      <input type="text" class="form-control" size="6" name="groupPerPage" value="<?php echo $K2L1PR692F32373J0VN74RT4L4D4A0O5C434ZVDCM6IGA1W4T97UHHO04DA448293179E9A897ECDE61E86457491791; ?>"/>
	  <span class="input-group-btn">
        <button class="btn btn-default" type="button" id="perPageBtn" data-loading-text="Loading..."><?php echo __('Submit'); ?> </button>
      </span>
  </div>
  </div>
  </form>
  
</div><!-- end <div class="btn-toolbar"> -->


</div> <!-- end <div class="wrap"> -->


<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="exampleModalLabel"><?php echo __('Alert','wp-autoblog'); ?></h3>
      </div>
      <div class="modal-body">
        <form id="form3" method="post" action="admin.php?page=autoblog-groups">  
		  <input type="hidden" name="saction" id="form3-saction" value="delteGroup" />
		  <input type="hidden" class="form-control" id="delete-group-id" name="delete-group-id">
          <input type="hidden" class="form-control" id="delete-group-name" name="delete-group-name">		  
		  <div class="alert alert-danger" role="alert">
		    <strong><?php echo __('Confirm Delete','wp-autoblog'); ?> <?php echo __('Group','wp-autoblog'); ?></strong> : <span class="confirm-delete-name"></span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __('Cancel','wp-autoblog'); ?></button>
        <button type="button" class="btn btn-danger" onclick="SX724613TAK7U206K65Q3G3EM7VM109Z3NAEEI0183ZV1Y12027IVE7D6SG2HT2578FC593B908B5390F14E64E1D56F250EA0775()" id="delelteGroupBtn" data-loading-text="Loading..." ><?php echo __('Delete','wp-autoblog'); ?></button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="qchangeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="exampleModalLabel"></h3>
      </div>
      <div class="modal-body">
        <form id="form4" method="post" action="admin.php?page=autoblog-groups">
		  <input type="hidden" name="saction" id="form4-saction" value="qedit" />
		  <input type="hidden" class="form-control" id="qedit-group-id" name="qedit-group-id">
		  <input type="hidden" class="form-control" id="qedit-taskcount" name="qedit-taskcount"> 	  
		  <div class="form-group">
            <label for="recipient-name" class="control-label"><?php echo __('Group Name','wp-autoblog'); ?> : </label>
            <input type="text" class="form-control" id="qedit-group-name" name="qedit-group-name">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"  onclick="P0817HSY950377V3V781BLNX8E9ELG8G5559S45F86B7B0A48B5F2C529F12D1AB5DA996077()" id="qeditsubmit" data-loading-text="Loading...">Submit</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="bulkDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="exampleModalLabel"><?php echo __('Alert','wp-autoblog'); ?></h3>
      </div>
      <div class="modal-body">		  
		  <div class="alert alert-danger" role="alert">
		    <strong><?php echo __('Confirm Delete Selected Items.','wp-autoblog'); ?></strong>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __('Cancel','wp-autoblog'); ?></button>
        <button type="button" class="btn btn-danger" onclick="Z99V892DUB80K3JYT681U47XNL890657Y02CV2BJW7D68HPS54GCF36H3149Z9G7OV335VHGOH556PRY35G92WH3M5GRXF6Z11HTA8WTIBR4010I1688C162B63786C541220CE608C5842F434791()" id="bulkDelelteGroupBtn" data-loading-text="Loading..."><?php echo __('Delete','wp-autoblog'); ?></button>
      </div>
    </div>
  </div>
</div>


<div class="modal" id="ajaxAlertModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="exampleModalLabel"><?php echo __('Alert','wp-autoblog'); ?></h3>
      </div>
      <div class="modal-body">		  
		  <div class="alert alert-danger" role="alert" id="ajaxAlertMsg"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __('OK','wp-autoblog'); ?></button>
      </div>
    </div>
  </div>
</div>





<script type="text/javascript">
$('#perPageBtn').on('click', function () {
    var $Q185J7NG76W7ZP01963IOL7HG9Q8NELJJQ128O88420F7H7350937WG2973Q96OV5Y123347T4Y891WINC5L60C5T3CO3Q86415JN5K8XU2LE2BD5556V5DH8X4E5O4QD4F5C2C94881B8DB27F83BE1703BFBEF3630 = $(this).button('loading')  
    document.getElementById("myform_NumPerPage").submit();
});



$('#qchangeModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget); 
  var groupid = button.data('groupid');
  var groupname = button.data('groupname');
  var taskcount = button.data('taskcount');
  
  var modal = $(this);  
  modal.find('.modal-title').text('<?php echo __("Edit","autoblog"); ?> : '+groupname);  
  modal.find('.modal-body #qedit-group-id').val(groupid);
  modal.find('.modal-body #qedit-group-name').val(groupname);
  modal.find('.modal-body #qedit-taskcount').val(taskcount);
  
});


$('#deleteModal').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget); 
  var groupid = button.data('groupid');
  var groupname = button.data('groupname');
  
  var modal = $(this);
  modal.find('.confirm-delete-name').text(groupname); 
  modal.find('.modal-body #delete-group-id').val(groupid);
  modal.find('.modal-body #delete-group-name').val(groupname);
  
});


function H59DPSLT6N15I1UHL737G131VQG9B3Q5X513V7R0357BQLYY28GFVF0BVZJ6I08ECZ29Z6W5U2079DC982CFA6L0T388A4EL38QELDJ4X44DYHV27HAG5MD2732S26E272381BAD8A27EA011187F16B59052462(){
  
  var canSubmit=false;
  var boxes = document.getElementsByName("ids[]");
  for(i=0;i<boxes.length;i++){
     if(boxes[i].checked == true){
       canSubmit=true;
	 }
  }
  
  if(canSubmit==true){
    $('#bulkDeleteModal').modal('show');
  }else{
	$('#checkAll').focus();
  }

}


function HT7891O6J6T3V12NNFDDSX646FS629DTUAU34X2ALM1T4M23VRV52028I0791R33UH7H8C977J7HF2OLJ54RK120UWDI56O977F5AC3E861794155CF9EC91496F1DB66177(){
  var newGroupName = document.getElementById("newGroupName").value;
  if(newGroupName == ''){
    document.getElementById("newGroupName").focus();
	return;
  }  
  var $Q185J7NG76W7ZP01963IOL7HG9Q8NELJJQ128O88420F7H7350937WG2973Q96OV5Y123347T4Y891WINC5L60C5T3CO3Q86415JN5K8XU2LE2BD5556V5DH8X4E5O4QD4F5C2C94881B8DB27F83BE1703BFBEF3630 = $('#submitNewGroup').button('loading'); 
  
  jQuery.ajax({
     type: "GET",

     url: "<?php echo get_option('home'); ?>",
     data: "ab=newgroup&newGroupName="+newGroupName,

	 dataType: "json", 
	 beforeSend: function(data){    	 
	 },
	 success: function(data){
	  if(data.status==1){
        $Q185J7NG76W7ZP01963IOL7HG9Q8NELJJQ128O88420F7H7350937WG2973Q96OV5Y123347T4Y891WINC5L60C5T3CO3Q86415JN5K8XU2LE2BD5556V5DH8X4E5O4QD4F5C2C94881B8DB27F83BE1703BFBEF3630.button('reset');
		document.getElementById("newGroupName").value='';
        $("#trgroup0").after(data.html);		
		$(".ajaxload").hide();
        $(".ajaxload").addClass("newrow");
	    $(".ajaxload").fadeIn(1000,function (){
          $(".ajaxload").removeClass("ajaxload newrow");       
		  $('[data-toggle="tooltip"]').tooltip();
          $(".popoverNew").focus();		  
		  $('.popoverNew').on('hidden.bs.tooltip', function () {
             $(".popoverNew").tooltip('destroy');
			 $(".popoverNew").removeClass("popoverNew");
          });		
		});	
	  }else{
        $Q185J7NG76W7ZP01963IOL7HG9Q8NELJJQ128O88420F7H7350937WG2973Q96OV5Y123347T4Y891WINC5L60C5T3CO3Q86415JN5K8XU2LE2BD5556V5DH8X4E5O4QD4F5C2C94881B8DB27F83BE1703BFBEF3630.button('reset');
		document.getElementById("newGroupName").value='';
		document.getElementById("newGroupName").focus();
		$("#ajaxAlertMsg").html(data.html);
		$('#ajaxAlertModal').modal('show');	
	  }					
	 }
  });
}




function SX724613TAK7U206K65Q3G3EM7VM109Z3NAEEI0183ZV1Y12027IVE7D6SG2HT2578FC593B908B5390F14E64E1D56F250EA0775(){
  var $Q185J7NG76W7ZP01963IOL7HG9Q8NELJJQ128O88420F7H7350937WG2973Q96OV5Y123347T4Y891WINC5L60C5T3CO3Q86415JN5K8XU2LE2BD5556V5DH8X4E5O4QD4F5C2C94881B8DB27F83BE1703BFBEF3630 = $('#delelteGroupBtn').button('loading');  
  var groupid = document.getElementById("delete-group-id").value;
  
  jQuery.ajax({
     type: "GET",

    url: "<?php echo get_option('home'); ?>",
    data: "ab=deletegroup&groupid="+groupid,

	 beforeSend: function(data){    	 
	 }, 
	 success: function(r_msg){		
       $("#deleteModal").removeClass("fade");
       $('#deleteModal').modal('hide');
       $Q185J7NG76W7ZP01963IOL7HG9Q8NELJJQ128O88420F7H7350937WG2973Q96OV5Y123347T4Y891WINC5L60C5T3CO3Q86415JN5K8XU2LE2BD5556V5DH8X4E5O4QD4F5C2C94881B8DB27F83BE1703BFBEF3630.button('reset');
       $("#trgroup"+groupid).addClass("delete");
       $("#trgroup"+groupid).fadeOut(500);
	   $("#deleteModal").addClass("fade");		 
	 }
  });

}

function Z99V892DUB80K3JYT681U47XNL890657Y02CV2BJW7D68HPS54GCF36H3149Z9G7OV335VHGOH556PRY35G92WH3M5GRXF6Z11HTA8WTIBR4010I1688C162B63786C541220CE608C5842F434791(){  
  var $Q185J7NG76W7ZP01963IOL7HG9Q8NELJJQ128O88420F7H7350937WG2973Q96OV5Y123347T4Y891WINC5L60C5T3CO3Q86415JN5K8XU2LE2BD5556V5DH8X4E5O4QD4F5C2C94881B8DB27F83BE1703BFBEF3630 = $('#bulkDelelteGroupBtn').button('loading');
  document.getElementById("form2-saction").value = 'bulkDelete';
  document.getElementById("form2").submit();
}


function P0817HSY950377V3V781BLNX8E9ELG8G5559S45F86B7B0A48B5F2C529F12D1AB5DA996077(){

   var $Q185J7NG76W7ZP01963IOL7HG9Q8NELJJQ128O88420F7H7350937WG2973Q96OV5Y123347T4Y891WINC5L60C5T3CO3Q86415JN5K8XU2LE2BD5556V5DH8X4E5O4QD4F5C2C94881B8DB27F83BE1703BFBEF3630 = $('#qeditsubmit').button('loading');
   var groupid = document.getElementById("qedit-group-id").value;
   var groupname = document.getElementById("qedit-group-name").value;
   var taskcount = document.getElementById("qedit-taskcount").value;
      
   jQuery.ajax({
     type: "GET",

     url: "<?php echo get_option('home'); ?>",
     data: "ab=qeditgroup&groupid="+groupid+"&groupname="+groupname+"&taskcount="+taskcount,

	 dataType: "json",
	 beforeSend: function(data){    	 
	 }, 
	 success: function(data){     
      if(data.status==1){   
		$("#qchangeModal").removeClass("fade");
		$('#qchangeModal').modal('hide');		
		$Q185J7NG76W7ZP01963IOL7HG9Q8NELJJQ128O88420F7H7350937WG2973Q96OV5Y123347T4Y891WINC5L60C5T3CO3Q86415JN5K8XU2LE2BD5556V5DH8X4E5O4QD4F5C2C94881B8DB27F83BE1703BFBEF3630.button('reset');		
        $("#trgroup"+groupid).html(data.html);		
		$(".ajaxload").hide();
        $(".ajaxload").addClass("info");
	    $(".ajaxload").fadeIn(1000,function (){
          $(".ajaxload").removeClass("ajaxload info");
		  $("#qchangeModal").addClass("fade");
        });
	  }else{
        $("#qchangeModal").removeClass("fade");
		$('#qchangeModal').modal('hide');		
		$Q185J7NG76W7ZP01963IOL7HG9Q8NELJJQ128O88420F7H7350937WG2973Q96OV5Y123347T4Y891WINC5L60C5T3CO3Q86415JN5K8XU2LE2BD5556V5DH8X4E5O4QD4F5C2C94881B8DB27F83BE1703BFBEF3630.button('reset');
		$("#ajaxAlertMsg").html(data.html);
		$('#ajaxAlertModal').modal('show');		
	  }
	 }
 
  });
}

function B7D803NA7NLD66RDFP5D7K92AL941Q028JTY692Q53QG577X91GK4LWARNL4DD9B848C851BCB6CF881750E9689CB8A3810(){  
  var the_checked_var = document.getElementById("checkAll").checked;  
  var boxes = document.getElementsByName("ids[]");
  if(the_checked_var==true){
    for(i=0;i<boxes.length;i++){
        boxes[i].checked =true;
	}
  }else{  
    for(i=0;i<boxes.length;i++){
        boxes[i].checked =false;
	}
  }
}
</script>