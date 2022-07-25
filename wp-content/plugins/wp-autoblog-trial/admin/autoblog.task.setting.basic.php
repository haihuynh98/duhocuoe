

<div style="margin:16px;"></div>  
<div id="poststuff">
<div id="post-body" class="metabox-holder columns-2">
  <div id="post-body-content">
  
  <div class="panel panel-primary">

   <div class="panel-heading panel-toggle">
      <h5 class="panel-title"><?php echo __("Basic Settings","wp-autoblog"); ?></h5>
   </div>

      <div class="panel-all" <?php if(@!($SS1AAJ4PJY7R9I9658BXFLLK32QZUPR3HA924647L9L77P6EK7S1G63T13ZT7ZN6E2BAAF3B97DBEEF01C0043275F9A0E73422['showBox']==1))echo 'style="display:none;"' ?>>
        <form id="form1"  method="post" action="admin.php?page=autoblog-task-setting">
          <input type="hidden" name="action" value="form1" />
          <input type="hidden" name="id" value="<?php echo $S0888HTUW79G97R1U5F57T7PBX63164013F4GZ5NKXVZ03WD9IX0AOAQXJ67883JF0729F9JA72584H2229M48K2435UQ9TY4BFH40UW99YI1HBO57746CC8160496AEFC9FB306B6BA24E32097; ?>" />
          <input type="hidden" name="save_to_group" value="0" />

          <div class="panel-body" style="padding:0;margin:0;">
            <table class="table settingTable">
              <tr>
                <td class="setName">
                  <label><?php echo __("Task Name","wp-autoblog"); ?></label>
                </td>
                <td>
                  <input type="text"  name="name" class="form-control" placeholder="<?php echo __("Task Name","wp-autoblog"); ?>" value="<?php echo $SGVI18884GEOU981BD853N492662YCEZU7EIO3504478F3A4C51824AD23CB50C1C60670C0F1699->name; ?>" />
                </td>
              </tr>

              <tr>
                <td class="setName">
                  <label><?php echo __("Task Group","wp-autoblog"); ?></label>
                </td>
                <td>
                  <select class="input-default" name="group_id" >
                    <option value="0"   <?php if(($SGVI18884GEOU981BD853N492662YCEZU7EIO3504478F3A4C51824AD23CB50C1C60670C0F1699->group_id)=='0') echo 'selected="true"'; ?> ><?php echo __('Default Group','autoblog'); ?></option>
                    <?php foreach($C1G9SY7J1627D6HRXQ4Y27Q5EW4QO0B0F47YDPWPO7475FR20XD721A40TO1J694TA2612331D76F19471C03755301E836A959338 as $I7QQU0UP8850Q1KMH9109P4UREVE8H512XZ6JB7I6B413K0SDBF93B3B84A94AA24823428CF9873D991239){ ?>
                      <option value="<?php echo $I7QQU0UP8850Q1KMH9109P4UREVE8H512XZ6JB7I6B413K0SDBF93B3B84A94AA24823428CF9873D991239->id ?>" <?php if(($SGVI18884GEOU981BD853N492662YCEZU7EIO3504478F3A4C51824AD23CB50C1C60670C0F1699->group_id)==($I7QQU0UP8850Q1KMH9109P4UREVE8H512XZ6JB7I6B413K0SDBF93B3B84A94AA24823428CF9873D991239->id)) echo 'selected="true"'; ?> ><?php echo $I7QQU0UP8850Q1KMH9109P4UREVE8H512XZ6JB7I6B413K0SDBF93B3B84A94AA24823428CF9873D991239->group_name ?></option>
                    <?php } ?>
                  </select>
                </td>
              </tr>

              <tr>
                <td class="setName">
                  <label><?php echo __("The max extraction post numbers for each time","wp-autoblog"); ?></label>
                  <p class="desc"><?php echo __("0 means no limit","wp-autoblog"); ?></p>
                </td>
                <td>
                  <?php
 $E40M8I36FJAJ7026435W70Q4T4UMYCIR1V715C07K1AGI298X0F4J9I3103XLB7V77G0CT110V2I468A3AA80231107113BEC0BF00F4108ED387136 = @$M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['max_fetch_post_num']; if($E40M8I36FJAJ7026435W70Q4T4UMYCIR1V715C07K1AGI298X0F4J9I3103XLB7V77G0CT110V2I468A3AA80231107113BEC0BF00F4108ED387136==null){ $E40M8I36FJAJ7026435W70Q4T4UMYCIR1V715C07K1AGI298X0F4J9I3103XLB7V77G0CT110V2I468A3AA80231107113BEC0BF00F4108ED387136 = 0; } ?>
                  <div class="input-group" style="width:100px;">
                    <input type="text" class="form-control"  name="max_fetch_post_num" id="max_fetch_post_num" value="<?php echo $E40M8I36FJAJ7026435W70Q4T4UMYCIR1V715C07K1AGI298X0F4J9I3103XLB7V77G0CT110V2I468A3AA80231107113BEC0BF00F4108ED387136; ?>" placeholder="">
                  </div>

                </td>
              </tr>

              <tr>
                <td class="setName">
                  <label><?php echo __("Run Interval","wp-autoblog"); ?></label>
                  <p class="desc"><?php echo __("In Automatically Task How long Intervals running once","wp-autoblog"); ?></p>
                </td>
                <td>
                  <div class="input-group" style="width:300px;">
                    <input type="text" class="form-control"  name="run_interval" id="run_interval" value="<?php echo $M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['run_interval']; ?>" placeholder="<?php echo __("Minute","wp-autoblog"); ?>">
                    <div class="input-group-addon"><?php echo __("Minute","wp-autoblog"); ?></div>
                  </div>
                </td>
              </tr>


              <tr>
                <td class="setName">
                  <label><?php echo __("Charset","wp-autoblog"); ?></label>
                </td>
                <td>

                  <div class="btn-group">
                    <label class="btn btn-default <?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['charset']==1){ echo 'active'; } ?>">
                      <input type="radio" name="charset" class="charset"  value="1" <?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['charset']==1){ echo 'checked'; } ?> /> <?php echo __("Automatic Detection","wp-autoblog"); ?>
                    </label>
                    <label class="btn btn-default <?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['charset']!=1){ echo 'active'; } ?>">
                      <input type="radio" name="charset" class="charset"  value="2" <?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['charset']!=1){ echo 'checked'; } ?> /> <?php echo __("Manually Enter","wp-autoblog"); ?>

                    </label>
                  </div>

                  <input type="text" id="charset_name" name="charset_name" class="setInput" value="<?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['charset']!=1){ echo $M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['charset']; } ?>" placeholder="<?php echo __("For Example: UTF-8","wp-autoblog"); ?>"   <?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['charset']==1){ ?>  style="display: none;"  <?php }?> />
                </td>
              </tr>

              <tr>
                <td class="setName">
                  <label><?php echo __("Manually Selective Extraction","wp-autoblog"); ?></label>
                  <p class="desc"><?php echo __("Manually select which article can be posted in your site","wp-autoblog"); ?></p>
                </td>
                <td>
                  <select class="input-default" id="manually_extraction" name="manually_extraction">
                    <option value="0"   <?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['manually_extraction']=='0') echo 'selected="true"'; ?> ><?php echo __('No'); ?></option>
                    <option value="1"   <?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['manually_extraction']=='1') echo 'selected="true"'; ?> ><?php echo __('Yes'); ?></option>
                  </select>
                </td>
              </tr>


              <tr>
                <td class="setName">
                  <label><?php echo __("Check Extracted Method","wp-autoblog"); ?></label>
                </td>
                <td>
                  <div class="btn-group">
                    <label class="btn btn-default <?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['check_duplicate']==0){ echo 'active'; } ?>"  >
                      <input type="radio" name="check_duplicate" value="0"  <?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['check_duplicate']==0){ echo 'checked'; } ?>/> <?php echo __("URL","wp-autoblog"); ?>
                    </label>
                    <label class="btn btn-default <?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['check_duplicate']==1){ echo 'active'; } ?>" >
                      <input type="radio" name="check_duplicate" value="1" <?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['check_duplicate']==1){ echo 'checked'; } ?> > <?php echo __("URL + Title","wp-autoblog"); ?>
                    </label>
                  </div>
                </td>
              </tr>

              <tr>
                <td class="setName">
                  <label><?php echo __("Use Proxy","wp-autoblog"); ?></label>
                  <p class="desc"><a href="admin.php?page=wp-autoblog/wp-autopost-proxy.php" target="_blank"><?php echo __('Proxy Options','wp-autoblog'); ?></a></p>
                </td>
                <td>
                  <select id="use_proxy" name="use_proxy" class="input-default">
                    <option value="0" <?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['use_proxy']==0) echo 'selected="true"'; ?>><?php echo __('No'); ?></option>

                    <?php
 $S72E7M0N83WF3405W6N731046TS3GC309259645K10EF5FBLOEI65015ARU4993X02PM3S442R8BD595C5476527EE5059B2D5F1B34E1ABB1118 =$RWWF92CG3X9S211V864852B619981FPEUS06M3OBNEW79P15P24S1083RBII3229N10238GF7E30H2W6Q1W64D48ZI73AQ2C0HE2GNIKH2ML3261X500LN43W79LM9B9G7G3179659E53A0D71D8959D88398F40E2072929[9]; if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['use_proxy']==0){ $M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['proxy_key']=''; } ?>

                    <?php foreach($S72E7M0N83WF3405W6N731046TS3GC309259645K10EF5FBLOEI65015ARU4993X02PM3S442R8BD595C5476527EE5059B2D5F1B34E1ABB1118 as $I62H4WGV2H0SEGR7MK1RMYP2E0EYI45CV4092HSL7345HZI958QE3E3Q2595OYR0N603UJ7S28JR4201K58FF73FU6NZZRYX1P1T7B0LW462G0AU9XAU10I3H2B068931CC450442B63F5B3D276EA42971197 =>$Z32J9GY8E96O859KGR0L552O5336PZ3M311BZRD17C613808EPKQBL441Y28AN4T36VPU9EIO1C5AWPK9472B80DC3E79E116AFCD8122B319ACA2CD79FA3366){ ?>
                      <option value="<?php echo $I62H4WGV2H0SEGR7MK1RMYP2E0EYI45CV4092HSL7345HZI958QE3E3Q2595OYR0N603UJ7S28JR4201K58FF73FU6NZZRYX1P1T7B0LW462G0AU9XAU10I3H2B068931CC450442B63F5B3D276EA42971197; ?>" <?php selected( $I62H4WGV2H0SEGR7MK1RMYP2E0EYI45CV4092HSL7345HZI958QE3E3Q2595OYR0N603UJ7S28JR4201K58FF73FU6NZZRYX1P1T7B0LW462G0AU9XAU10I3H2B068931CC450442B63F5B3D276EA42971197, $M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['proxy_key']); ?> > <?php echo __('Proxy Name','wp-autoblog'); ?> : <?php echo $I62H4WGV2H0SEGR7MK1RMYP2E0EYI45CV4092HSL7345HZI958QE3E3Q2595OYR0N603UJ7S28JR4201K58FF73FU6NZZRYX1P1T7B0LW462G0AU9XAU10I3H2B068931CC450442B63F5B3D276EA42971197; ?></option>
                    <?php } ?>
                  </select>
                </td>
              </tr>

              <tr>
                <td class="setName">
                  <label><?php echo __("Enable Cookie","wp-autoblog"); ?></label>
                  <p class="desc"><?php echo __('Some few sites need to open this feature can normal extracted contents','wp-autoblog'); ?></p>
                </td>
                <td>
                  <select id="enable_cookie" name="enable_cookie" class="input-default" >
                    <option value="0" <?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['enable_cookie']==0) echo 'selected="true"'; ?>><?php echo __('No'); ?></option>
                    <option value="1" <?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['enable_cookie']==1) echo 'selected="true"'; ?>><?php echo __('Yes'); ?></option>
                  </select>
                </td>
              </tr>

<!--
              <tr>
                <td class="setName">
                  <label><?php echo __("When extract error set the status to","wp-autoblog"); ?></label>
                  <p class="desc"></p>
                </td>
                <td>
                  <select id="err_status" name="err_status" class="input-default">
                    <option value="1" <?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['err_status']==1) echo 'selected="true"'; ?>><?php echo __('Not set','wp-autoblog'); ?></option>
                    <option value="0" <?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['err_status']==0) echo 'selected="true"'; ?>><?php echo __('Pending Extraction','wp-autoblog'); ?></option>
                    <option value="-1" <?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['err_status']==-1) echo 'selected="true"'; ?>><?php echo __('Ignored','wp-autoblog'); ?></option>
                  </select>
                </td>
              </tr>
-->

              <tr>
                <td class="setName">
                  <label><?php echo __("Max retry times when extraction failed","wp-autoblog"); ?></label>
                  <p class="desc"></p>
                </td>
                <td>
                  <?php
 $S030M26392BB4E5X1K7K1VY78S4LT0I7GKBFE4L9T9J8R2ES43N16680Q1A3TN853YPQ7R029BCMZN97GE8B1QP35D24HPD1T943695TZ8WULL70MAG70L43K0B41WOX1SM36284G2IODSW9733567D166A5C1050A671E1185A3B67BD0D1503 = $M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['max_retry_num']; if($S030M26392BB4E5X1K7K1VY78S4LT0I7GKBFE4L9T9J8R2ES43N16680Q1A3TN853YPQ7R029BCMZN97GE8B1QP35D24HPD1T943695TZ8WULL70MAG70L43K0B41WOX1SM36284G2IODSW9733567D166A5C1050A671E1185A3B67BD0D1503==null){ $S030M26392BB4E5X1K7K1VY78S4LT0I7GKBFE4L9T9J8R2ES43N16680Q1A3TN853YPQ7R029BCMZN97GE8B1QP35D24HPD1T943695TZ8WULL70MAG70L43K0B41WOX1SM36284G2IODSW9733567D166A5C1050A671E1185A3B67BD0D1503 = 5; } ?>
                  <div class="input-group" style="width:100px;">
                    <input type="text" class="form-control"  name="max_retry_num" id="max_retry_num" value="<?php echo $S030M26392BB4E5X1K7K1VY78S4LT0I7GKBFE4L9T9J8R2ES43N16680Q1A3TN853YPQ7R029BCMZN97GE8B1QP35D24HPD1T943695TZ8WULL70MAG70L43K0B41WOX1SM36284G2IODSW9733567D166A5C1050A671E1185A3B67BD0D1503; ?>" placeholder="">
                  </div>

                </td>
              </tr>




            </table>
          </div> <!-- /panel-body -->

        </form>


        <div class="panel-footer">
          <a class="btn btn-primary" data-loading-text="Loading..." onclick="J3L8BU3AL4N7I198MOVQO80NG68C8B66J109D8TX992Z4685SDC2EOU64UF0YW3H119U7AI14C74R18O36SH26ZL0DXU9C2BC284BAAECB183049388F3BCA77743044(0)" ><?php echo __('Save'); ?> </a>
          <a class="btn btn-primary" data-loading-text="Loading..." onclick="J3L8BU3AL4N7I198MOVQO80NG68C8B66J109D8TX992Z4685SDC2EOU64UF0YW3H119U7AI14C74R18O36SH26ZL0DXU9C2BC284BAAECB183049388F3BCA77743044(1)" ><?php echo __('Save To Group','wp-autoblog'); ?> </a>
        </div>
      </div> <!-- /panel-all -->

  </div> <!-- /panel -->


  <div class="panel panel-primary">
   <div class="panel-heading panel-toggle">
     <h5 class="panel-title"><?php echo __("Other Settings","wp-autoblog"); ?></h5>
   </div>
   <div class="panel-all" <?php if(@!($SS1AAJ4PJY7R9I9658BXFLLK32QZUPR3HA924647L9L77P6EK7S1G63T13ZT7ZN6E2BAAF3B97DBEEF01C0043275F9A0E73422['showBox']==16))echo 'style="display:none;"' ?>>

     <form id="form16"  method="post" action="admin.php?page=autoblog-task-setting">
       <input type="hidden" name="action" value="form16" />
       <input type="hidden" name="id" value="<?php echo $S0888HTUW79G97R1U5F57T7PBX63164013F4GZ5NKXVZ03WD9IX0AOAQXJ67883JF0729F9JA72584H2229M48K2435UQ9TY4BFH40UW99YI1HBO57746CC8160496AEFC9FB306B6BA24E32097; ?>" />
       <input type="hidden" name="save_to_group" value="0" />

       <div class="panel-body" style="padding:0;margin:0;">
         <table class="table settingTable">

           <tr>
             <td class="setName">
               <label><?php echo __("Automatically remove the HTML comments","wp-autoblog"); ?></label>
               <p class="desc"><?php echo __('Remove html element like &lt!-- *** -->','wp-autoblog'); ?></p>
             </td>
             <td>
               <?php
 $P5PE60X3UL24718S44O05S920D831390GDM093DMA1D5917KZ6ZU4799120063MUQZ00O8NFGD6MCJ913825U7GP2VJHCW9I681J9GIW0305S0U745685FUNC07XJO5RK66D34EC22B94F4EDD16F32EF4F9FE43FA1461 = $M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['remove_comments']; if($P5PE60X3UL24718S44O05S920D831390GDM093DMA1D5917KZ6ZU4799120063MUQZ00O8NFGD6MCJ913825U7GP2VJHCW9I681J9GIW0305S0U745685FUNC07XJO5RK66D34EC22B94F4EDD16F32EF4F9FE43FA1461==null){ $P5PE60X3UL24718S44O05S920D831390GDM093DMA1D5917KZ6ZU4799120063MUQZ00O8NFGD6MCJ913825U7GP2VJHCW9I681J9GIW0305S0U745685FUNC07XJO5RK66D34EC22B94F4EDD16F32EF4F9FE43FA1461 = 1; } ?>
               <select id="remove_comments" name="remove_comments" class="input-default" >
                 <option value="0" <?php if($P5PE60X3UL24718S44O05S920D831390GDM093DMA1D5917KZ6ZU4799120063MUQZ00O8NFGD6MCJ913825U7GP2VJHCW9I681J9GIW0305S0U745685FUNC07XJO5RK66D34EC22B94F4EDD16F32EF4F9FE43FA1461==0) echo 'selected="true"'; ?>><?php echo __('No'); ?></option>
                 <option value="1" <?php if($P5PE60X3UL24718S44O05S920D831390GDM093DMA1D5917KZ6ZU4799120063MUQZ00O8NFGD6MCJ913825U7GP2VJHCW9I681J9GIW0305S0U745685FUNC07XJO5RK66D34EC22B94F4EDD16F32EF4F9FE43FA1461==1) echo 'selected="true"'; ?>><?php echo __('Yes'); ?></option>
               </select>
             </td>
           </tr>

           <tr>
             <td class="setName">
               <label><?php echo __("Automatically remove the HTML ID attribute","wp-autoblog"); ?></label>
               <p class="desc"><?php echo __('Remove html tag attribute like id=" *** "','wp-autoblog'); ?></p>
             </td>
             <td>
               <?php
 $T33P6IU4BB331X397D8FKF5X6KA8FH3313U9YA5W6Q81I0KWZ6X8804CFPRK5SR19L56D40IYKB3SI5M7L97543OLWIJOMNK7JPMUE8G8M4I969S3O453B321BLJ0ZB391315N1CFDF8F080A15D56968579FA72814BCA2502 = $M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['remove_id_attr']; if($T33P6IU4BB331X397D8FKF5X6KA8FH3313U9YA5W6Q81I0KWZ6X8804CFPRK5SR19L56D40IYKB3SI5M7L97543OLWIJOMNK7JPMUE8G8M4I969S3O453B321BLJ0ZB391315N1CFDF8F080A15D56968579FA72814BCA2502==null){ $T33P6IU4BB331X397D8FKF5X6KA8FH3313U9YA5W6Q81I0KWZ6X8804CFPRK5SR19L56D40IYKB3SI5M7L97543OLWIJOMNK7JPMUE8G8M4I969S3O453B321BLJ0ZB391315N1CFDF8F080A15D56968579FA72814BCA2502 = 1; } ?>
               <select id="remove_id_attr" name="remove_id_attr" class="input-default" >
                 <option value="0" <?php if($T33P6IU4BB331X397D8FKF5X6KA8FH3313U9YA5W6Q81I0KWZ6X8804CFPRK5SR19L56D40IYKB3SI5M7L97543OLWIJOMNK7JPMUE8G8M4I969S3O453B321BLJ0ZB391315N1CFDF8F080A15D56968579FA72814BCA2502==0) echo 'selected="true"'; ?>><?php echo __('No'); ?></option>
                 <option value="1" <?php if($T33P6IU4BB331X397D8FKF5X6KA8FH3313U9YA5W6Q81I0KWZ6X8804CFPRK5SR19L56D40IYKB3SI5M7L97543OLWIJOMNK7JPMUE8G8M4I969S3O453B321BLJ0ZB391315N1CFDF8F080A15D56968579FA72814BCA2502==1) echo 'selected="true"'; ?>><?php echo __('Yes'); ?></option>
               </select>
             </td>
           </tr>

           <tr>
             <td class="setName">
               <label><?php echo __("Automatically remove the HTML CLASS attribute","wp-autoblog"); ?></label>
               <p class="desc"><?php echo __('Remove html tag attribute like class=" *** "','wp-autoblog'); ?></p>
             </td>
             <td>
               <?php
 $DJ816X68A17287ULP4BHEHK3V7DM4U049EL6134387CK83H7499257JU718N9MUY961Z3T0W8F78M886838H47C308I10307NFYE3N10500F481E883AF5811EF7E97ED359D9D3763 = $M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['remove_class_attr']; if($DJ816X68A17287ULP4BHEHK3V7DM4U049EL6134387CK83H7499257JU718N9MUY961Z3T0W8F78M886838H47C308I10307NFYE3N10500F481E883AF5811EF7E97ED359D9D3763==null){ $DJ816X68A17287ULP4BHEHK3V7DM4U049EL6134387CK83H7499257JU718N9MUY961Z3T0W8F78M886838H47C308I10307NFYE3N10500F481E883AF5811EF7E97ED359D9D3763 = 1; } ?>
               <select id="remove_class_attr" name="remove_class_attr" class="input-default" >
                 <option value="0" <?php if($DJ816X68A17287ULP4BHEHK3V7DM4U049EL6134387CK83H7499257JU718N9MUY961Z3T0W8F78M886838H47C308I10307NFYE3N10500F481E883AF5811EF7E97ED359D9D3763==0) echo 'selected="true"'; ?>><?php echo __('No'); ?></option>
                 <option value="1" <?php if($DJ816X68A17287ULP4BHEHK3V7DM4U049EL6134387CK83H7499257JU718N9MUY961Z3T0W8F78M886838H47C308I10307NFYE3N10500F481E883AF5811EF7E97ED359D9D3763==1) echo 'selected="true"'; ?>><?php echo __('Yes'); ?></option>
               </select>
             </td>
           </tr>

           <tr>
             <td class="setName">
               <label><?php echo __("Automatically remove the HTML STYLE attribute","wp-autoblog"); ?></label>
               <p class="desc"><?php echo __('Remove html tag attribute like style=" *** "','wp-autoblog'); ?></p>
             </td>
             <td>
               <select id="remove_style_attr" name="remove_style_attr" class="input-default" >
                 <option value="0" <?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['remove_style_attr']==0) echo 'selected="true"'; ?>><?php echo __('No'); ?></option>
                 <option value="1" <?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['remove_style_attr']==1) echo 'selected="true"'; ?>><?php echo __('Yes'); ?></option>
               </select>
             </td>
           </tr>

         </table>
       </div>

     </form>

     <div class="panel-footer">
       <a class="btn btn-primary" data-loading-text="Loading..." onclick="AI66T8X4U8BL2N88XA9V1TRDMM92C8KC07D68R0WI06I51U04Q8U9D27JYT879T1KXQ182J443N44EK8P778LMS46C73AC1DA6B155944EE9BB50C8249AE9DA014589(0)" ><?php echo __('Save'); ?> </a>
       <a class="btn btn-primary" data-loading-text="Loading..." onclick="AI66T8X4U8BL2N88XA9V1TRDMM92C8KC07D68R0WI06I51U04Q8U9D27JYT879T1KXQ182J443N44EK8P778LMS46C73AC1DA6B155944EE9BB50C8249AE9DA014589(1)" ><?php echo __('Save To Group','wp-autoblog'); ?> </a>
     </div>
   </div>
  </div>





  </div> <!-- /post-body-content -->

<!--
  <div id="postbox-container-1" class="postbox-container">
    <div id="side-sortables" class="meta-box-sortables">

      <div class="panel panel-default">
        <div class="panel-heading panel-toggle">
          <h5 class="panel-title">Panel title</h5>
        </div>
        <div class="panel-body">
          Panel content aaaa

          <br/>

          Panel content aaaa
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading panel-toggle">
          <h5 class="panel-title">Panel title</h5>
        </div>
        <div class="panel-body">
          Panel content bbb

          <br/>

          Panel content bbb
        </div>
      </div>
    </div>

  </div>

  -->

</div><!-- /post-body -->
</div><!-- /poststuff -->