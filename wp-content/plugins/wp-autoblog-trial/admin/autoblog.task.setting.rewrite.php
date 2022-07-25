

<div style="margin:16px;"></div>
<div id="poststuff">
  <div id="post-body" class="metabox-holder columns-2">
    <div id="post-body-content">

      <div class="panel panel-primary">

        <div class="panel-heading panel-toggle">
          <h5 class="panel-title">中文 简体/繁体 转换</h5>
        </div>

        <div class="panel-all" <?php if(@!($SS1AAJ4PJY7R9I9658BXFLLK32QZUPR3HA924647L9L77P6EK7S1G63T13ZT7ZN6E2BAAF3B97DBEEF01C0043275F9A0E73422['showBox']==18))echo 'style="display:none;"' ?>>
          <form id="form18"  method="post" action="admin.php?page=autoblog-task-setting">
            <input type="hidden" name="action" value="form18" />
            <input type="hidden" name="id" value="<?php echo $S0888HTUW79G97R1U5F57T7PBX63164013F4GZ5NKXVZ03WD9IX0AOAQXJ67883JF0729F9JA72584H2229M48K2435UQ9TY4BFH40UW99YI1HBO57746CC8160496AEFC9FB306B6BA24E32097; ?>" />
            <input type="hidden" name="save_to_group" value="0" />

            <div class="panel-body" style="padding:0;margin:0;">
              <table class="table settingTable">
                <tr>
                  <td colspan="2">
                    <label>将中文简体文章转换为繁体（或将中文繁体文章转换为简体），获取唯一性和可读性都具备的文章。</label>
                  </td>
                </tr>
                <tr>
                  <td class="setName">
                    <label>转换为:</label>
                  </td>
                  <td>
                    <?php
 if(!isset($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['zh_conversion'])){ $M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['zh_conversion'] = 0; } ?>
                    <select class="input-default" name="zh_conversion" >
                      <option value="0" <?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['zh_conversion']==0) echo 'selected="true"'; ?>>不转换</option>
                      <option value="1" <?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['zh_conversion']==1) echo 'selected="true"'; ?>>简体中文</option>
                      <option value="2" <?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['zh_conversion']==2) echo 'selected="true"'; ?>>繁體中文</option>
                      <option value="3"   <?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['zh_conversion']==3) echo 'selected="true"'; ?>>港澳繁體</option>
                      <option value="4"   <?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['zh_conversion']==4) echo 'selected="true"'; ?>>台灣正體</option>
                    </select>
                  </td>
                </tr>
              </table>
            </div> <!-- /panel-body -->

          </form>


          <div class="panel-footer">
            <span style="display:inline-block;font-weight:bold;padding:5px;background-color:red;color:#FFFFFF;"><?php echo __('Trial version this settings will not working, use this featured please upgrade to full version','wp-autoblog'); ?></span>
          </div>
          <div class="panel-footer">
            <button class="btn btn-primary" data-loading-text="Loading..."  disabled="true"><?php echo __('Save'); ?> </button>
            <button class="btn btn-primary" data-loading-text="Loading..."  disabled="true"><?php echo __('Save To Group','wp-autoblog'); ?> </button>
          </div>
        </div> <!-- /panel-all -->

      </div> <!-- /panel -->


      <div class="panel panel-primary">

        <div class="panel-heading panel-toggle">
          <h5 class="panel-title"><?php echo __('Rewrite (Spinning)','wp-autoblog'); ?></h5>
        </div>

        <div class="panel-all" <?php if(@!($SS1AAJ4PJY7R9I9658BXFLLK32QZUPR3HA924647L9L77P6EK7S1G63T13ZT7ZN6E2BAAF3B97DBEEF01C0043275F9A0E73422['showBox']==19))echo 'style="display:none;"' ?>>
          <form id="form19"  method="post" action="admin.php?page=autoblog-task-setting">
            <input type="hidden" name="action" value="form19" />
            <input type="hidden" name="id" value="<?php echo $S0888HTUW79G97R1U5F57T7PBX63164013F4GZ5NKXVZ03WD9IX0AOAQXJ67883JF0729F9JA72584H2229M48K2435UQ9TY4BFH40UW99YI1HBO57746CC8160496AEFC9FB306B6BA24E32097; ?>" />
            <input type="hidden" name="save_to_group" value="0" />

            <div class="panel-body" style="padding:0;margin:0;">
              <table class="table settingTable">
                <tr>
                  <td class="setName">
                    <label><?php echo __('Use Rewriter','wp-autoblog'); ?>:</label>
                  </td>
                  <td>
                    <?php
 if(!isset($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['rewrite'])){ $M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['rewrite'] = 0; } ?>
                    <select class="input-default" name="rewrite" id="rewrite_select">
                      <option value="0" <?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['rewrite']==0) echo 'selected="true"'; ?>><?php echo __('No'); ?></option>
                      <option value="1" <?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['rewrite']==1) echo 'selected="true"'; ?>><?php echo __('Google Translator','wp-autoblog'); ?></option>
                      <option value="5" <?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['rewrite']==5) echo 'selected="true"'; ?>><?php echo __('YouDao Translator','wp-autoblog'); ?></option>
                      <option value="2" <?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['rewrite']==2) echo 'selected="true"'; ?>><?php echo __('Baidu Translator','wp-autoblog'); ?></option>
                      <option value="3" <?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['rewrite']==3) echo 'selected="true"'; ?>><?php echo __('WordAi'); ?></option>
                      <option value="4" <?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['rewrite']==4) echo 'selected="true"'; ?>><?php echo __('Spin Rewriter'); ?></option>
                    </select>
                  </td>
                </tr>
              </table>

              <table class="table settingTable" id="googleTranslator" <?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['rewrite']!=1){ echo 'style="display:none;"'; } ?> >
                <?php
 if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['rewrite']!=1){ if(get_bloginfo('language')=='zh-CN'||get_bloginfo('language')=='zh-TW'): $A1U55B4FCWNH08J7052FFON9MSQWJ55S1CT3SV61EP0139IO67727NX6281L8WA783R0C2CP327951MY040A3AAAFE91DD45C888141B2FC054BAF7759 = 'zh'; $Y0CUP75O71TN4U569GW87L3EL13G40Y75837S1I32635176M94E21865I1283B21E14672D8E5FB5400DE5462EC275731 = 'en'; else: $A1U55B4FCWNH08J7052FFON9MSQWJ55S1CT3SV61EP0139IO67727NX6281L8WA783R0C2CP327951MY040A3AAAFE91DD45C888141B2FC054BAF7759 = 'en'; $Y0CUP75O71TN4U569GW87L3EL13G40Y75837S1I32635176M94E21865I1283B21E14672D8E5FB5400DE5462EC275731 = 'zh'; endif; }else{ $A1U55B4FCWNH08J7052FFON9MSQWJ55S1CT3SV61EP0139IO67727NX6281L8WA783R0C2CP327951MY040A3AAAFE91DD45C888141B2FC054BAF7759 = $M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['rewrite_origi_language']; $Y0CUP75O71TN4U569GW87L3EL13G40Y75837S1I32635176M94E21865I1283B21E14672D8E5FB5400DE5462EC275731 = $M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['rewrite_trans_language']; } ?>
                <tr>
                  <td colspan="2">
                    <label><?php echo __("Use Google Translator can get very unique article.",'wp-autoblog'); ?></label>

                    <p><code><?php echo __('Will first translate into','wp-autoblog'); ?> <strong><span id="rewrite_trans_language_span_baidu"><?php echo KI9EVS161PVA8W1X9RI1C1H3YN20OZ9777RUW428224V6JHJ5A5T1F3LJ0H608RU82P1HV5E75ODNT12HW721N13G6C43C724C0BAF67BF52A6EA8CED4BC3074749::J03V91OM9C38PL4823389767EI4E9CW29790QB6ZT59X20K73Q7I0CU758439X3LTY527BY537834AT0456VF5O7KZ8GB2TGB11QZX6938788OIV6B1OUH7TDFSJ081Y803W20884W2C20FBB0D4D9A6B4E3300F65906130AEBD1953($Y0CUP75O71TN4U569GW87L3EL13G40Y75837S1I32635176M94E21865I1283B21E14672D8E5FB5400DE5462EC275731); ?></span></strong> <?php echo __('and then translated back to','wp-autoblog'); ?> <strong><span id="rewrite_origi_language_span_baidu"><?php echo KI9EVS161PVA8W1X9RI1C1H3YN20OZ9777RUW428224V6JHJ5A5T1F3LJ0H608RU82P1HV5E75ODNT12HW721N13G6C43C724C0BAF67BF52A6EA8CED4BC3074749::J03V91OM9C38PL4823389767EI4E9CW29790QB6ZT59X20K73Q7I0CU758439X3LTY527BY537834AT0456VF5O7KZ8GB2TGB11QZX6938788OIV6B1OUH7TDFSJ081Y803W20884W2C20FBB0D4D9A6B4E3300F65906130AEBD1953($A1U55B4FCWNH08J7052FFON9MSQWJ55S1CT3SV61EP0139IO67727NX6281L8WA783R0C2CP327951MY040A3AAAFE91DD45C888141B2FC054BAF7759); ?></span></strong></code></p>


                  </td>
                </tr>
                <tr>
                  <td class="setName">
                    <label><?php echo __('Original Language','wp-autoblog'); ?>:</label>
                  </td>
                  <td>
                    <select class="input-default" name="rewrite_origi_language_google" id="rewrite_origi_language_google">
                      <?php echo KI9EVS161PVA8W1X9RI1C1H3YN20OZ9777RUW428224V6JHJ5A5T1F3LJ0H608RU82P1HV5E75ODNT12HW721N13G6C43C724C0BAF67BF52A6EA8CED4BC3074749::ARZF310TUO9X21X1VSX74JMGS33E11C05615Y4G822L351K2Z6619637507F14BD49ADF1E9076223AC9DE26811($A1U55B4FCWNH08J7052FFON9MSQWJ55S1CT3SV61EP0139IO67727NX6281L8WA783R0C2CP327951MY040A3AAAFE91DD45C888141B2FC054BAF7759); ?>
                    </select>
                  </td>
                </tr>

                <tr>
                  <td class="setName">
                    <label><?php echo __('Translate Language','wp-autoblog'); ?>:</label>
                  </td>
                  <td>
                    <select class="input-default" name="rewrite_trans_language_google" id="rewrite_trans_language_google">
                      <?php echo KI9EVS161PVA8W1X9RI1C1H3YN20OZ9777RUW428224V6JHJ5A5T1F3LJ0H608RU82P1HV5E75ODNT12HW721N13G6C43C724C0BAF67BF52A6EA8CED4BC3074749::ARZF310TUO9X21X1VSX74JMGS33E11C05615Y4G822L351K2Z6619637507F14BD49ADF1E9076223AC9DE26811($Y0CUP75O71TN4U569GW87L3EL13G40Y75837S1I32635176M94E21865I1283B21E14672D8E5FB5400DE5462EC275731); ?>
                    </select>
                  </td>
                </tr>

                <tr>
                  <td class="setName">
                    <?php echo __('Protected Words','wp-autoblog'); ?>:
                  </td>
                  <td>
                    <span class="gray"><span class="gray"><?php echo __('Protected Word will not rewrite','wp-autoblog'); ?> </span> (<?php echo __('Separated with a comma','wp-autoblog'); ?>)</span><br/>

                    <textarea style="width:100%" name="rewrite_protected_words_google" id="rewrite_protected_words_google" ><?php echo @$M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['rewrite_protected_words'];?></textarea>

                    <code><?php echo __('Tips: support use variables : ','wp-autoblog'); ?>  <strong>{<?php echo __('Temporary Variable Name','wp-autoblog');?>}</strong> </code>
                  </td>
                </tr>
              </table><!-- end id="baiduTranslator"  -->

              <table class="table settingTable" id="baiduTranslator" <?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['rewrite']!=2){ echo 'style="display:none;"'; } ?> >
                <?php
 if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['rewrite']!=2){ if(get_bloginfo('language')=='zh-CN'||get_bloginfo('language')=='zh-TW'): $A1U55B4FCWNH08J7052FFON9MSQWJ55S1CT3SV61EP0139IO67727NX6281L8WA783R0C2CP327951MY040A3AAAFE91DD45C888141B2FC054BAF7759 = 'zh'; $Y0CUP75O71TN4U569GW87L3EL13G40Y75837S1I32635176M94E21865I1283B21E14672D8E5FB5400DE5462EC275731 = 'en'; else: $A1U55B4FCWNH08J7052FFON9MSQWJ55S1CT3SV61EP0139IO67727NX6281L8WA783R0C2CP327951MY040A3AAAFE91DD45C888141B2FC054BAF7759 = 'en'; $Y0CUP75O71TN4U569GW87L3EL13G40Y75837S1I32635176M94E21865I1283B21E14672D8E5FB5400DE5462EC275731 = 'zh'; endif; }else{ $A1U55B4FCWNH08J7052FFON9MSQWJ55S1CT3SV61EP0139IO67727NX6281L8WA783R0C2CP327951MY040A3AAAFE91DD45C888141B2FC054BAF7759 = $M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['rewrite_origi_language']; $Y0CUP75O71TN4U569GW87L3EL13G40Y75837S1I32635176M94E21865I1283B21E14672D8E5FB5400DE5462EC275731 = $M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['rewrite_trans_language']; } ?>
                <tr>
                  <td colspan="2">
                    <label><?php echo __("Use Baidu Translator can get very unique article, <strong>and is absolutely free</strong>.",'wp-autoblog'); ?></label>

                    <p><code><?php echo __('Will first translate into','wp-autoblog'); ?> <strong><span id="rewrite_trans_language_span_baidu"><?php echo L0S5O0X0EC85281ARAM1UAA83K351WLAN0IM9116GI2Y422D06R8L7A831DPR67K9SD61139318A9F387E8FAD2DCA5268E5BD6921::J03V91OM9C38PL4823389767EI4E9CW29790QB6ZT59X20K73Q7I0CU758439X3LTY527BY537834AT0456VF5O7KZ8GB2TGB11QZX6938788OIV6B1OUH7TDFSJ081Y803W20884W2C20FBB0D4D9A6B4E3300F65906130AEBD1953($Y0CUP75O71TN4U569GW87L3EL13G40Y75837S1I32635176M94E21865I1283B21E14672D8E5FB5400DE5462EC275731); ?></span></strong> <?php echo __('and then translated back to','wp-autoblog'); ?> <strong><span id="rewrite_origi_language_span_baidu"><?php echo L0S5O0X0EC85281ARAM1UAA83K351WLAN0IM9116GI2Y422D06R8L7A831DPR67K9SD61139318A9F387E8FAD2DCA5268E5BD6921::J03V91OM9C38PL4823389767EI4E9CW29790QB6ZT59X20K73Q7I0CU758439X3LTY527BY537834AT0456VF5O7KZ8GB2TGB11QZX6938788OIV6B1OUH7TDFSJ081Y803W20884W2C20FBB0D4D9A6B4E3300F65906130AEBD1953($A1U55B4FCWNH08J7052FFON9MSQWJ55S1CT3SV61EP0139IO67727NX6281L8WA783R0C2CP327951MY040A3AAAFE91DD45C888141B2FC054BAF7759); ?></span></strong></code></p>


                  </td>
                </tr>
                <tr>
                  <td class="setName">
                    <label><?php echo __('Original Language','wp-autoblog'); ?>:</label>
                  </td>
                  <td>
                    <select class="input-default" name="rewrite_origi_language_baidu" id="rewrite_origi_language_baidu">
                      <?php echo L0S5O0X0EC85281ARAM1UAA83K351WLAN0IM9116GI2Y422D06R8L7A831DPR67K9SD61139318A9F387E8FAD2DCA5268E5BD6921::ARZF310TUO9X21X1VSX74JMGS33E11C05615Y4G822L351K2Z6619637507F14BD49ADF1E9076223AC9DE26811($A1U55B4FCWNH08J7052FFON9MSQWJ55S1CT3SV61EP0139IO67727NX6281L8WA783R0C2CP327951MY040A3AAAFE91DD45C888141B2FC054BAF7759); ?>
                    </select>
                  </td>
                </tr>

                <tr>
                  <td class="setName">
                    <label><?php echo __('Translate Language','wp-autoblog'); ?>:</label>
                  </td>
                  <td>
                    <select class="input-default" name="rewrite_trans_language_baidu" id="rewrite_trans_language_baidu">
                      <?php echo L0S5O0X0EC85281ARAM1UAA83K351WLAN0IM9116GI2Y422D06R8L7A831DPR67K9SD61139318A9F387E8FAD2DCA5268E5BD6921::ARZF310TUO9X21X1VSX74JMGS33E11C05615Y4G822L351K2Z6619637507F14BD49ADF1E9076223AC9DE26811($Y0CUP75O71TN4U569GW87L3EL13G40Y75837S1I32635176M94E21865I1283B21E14672D8E5FB5400DE5462EC275731); ?>
                    </select>
                  </td>
                </tr>

                <tr>
                  <td class="setName">
                    <?php echo __('Protected Words','wp-autoblog'); ?>:
                  </td>
                  <td>
                    <span class="gray"><span class="gray"><?php echo __('Protected Word will not rewrite','wp-autoblog'); ?> </span> (<?php echo __('Separated with a comma','wp-autoblog'); ?>)</span><br/>

                    <textarea style="width:100%" name="rewrite_protected_words_baidu" id="rewrite_protected_words_baidu" ><?php echo @$M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['rewrite_protected_words'];?></textarea>

                    <code><?php echo __('Tips: support use variables : ','wp-autoblog'); ?>  <strong>{<?php echo __('Temporary Variable Name','wp-autoblog');?>}</strong> </code>
                  </td>
                </tr>
              </table><!-- end id="baiduTranslator"  -->


              <table class="table settingTable" >
                <tr>
                  <td class="setName">
                    <label><?php echo __('Also Rewrite The Title','wp-autoblog'); ?>:</label>
                  </td>
                  <td>
                    <select class="input-default" name="rewrite_title" >
                      <option value="0" <?php if(@$M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['rewrite_title']==0) echo 'selected="true"'; ?>><?php echo __('No'); ?></option>
                      <option value="1" <?php if(@$M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['rewrite_title']==1) echo 'selected="true"'; ?>><?php echo __('Yes'); ?></option>
                    </select>
                  </td>
                </tr>

                <tr>
                  <td class="setName">
                    <label><?php echo __('When Rewrite Failure Will Not Publish','wp-autoblog'); ?>:</label>
                  </td>
                  <td>
                    <select class="input-default" name="rewrite_failure" >
                      <option value="0" <?php if(@$M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['rewrite_failure']==0) echo 'selected="true"'; ?>><?php echo __('No'); ?></option>
                      <option value="1" <?php if(@$M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['rewrite_failure']==1) echo 'selected="true"'; ?>><?php echo __('Yes'); ?></option>
                    </select>
                  </td>
                </tr>
              </table>


            </div> <!-- /panel-body -->

          </form>


          <div class="panel-footer">
            <span style="display:inline-block;font-weight:bold;padding:5px;background-color:red;color:#FFFFFF;"><?php echo __('Trial version this settings will not working, use this featured please upgrade to full version','wp-autoblog'); ?></span>
          </div>
          <div class="panel-footer">
            <button class="btn btn-primary" data-loading-text="Loading..."  disabled="true"><?php echo __('Save'); ?> </button>
            <button class="btn btn-primary" data-loading-text="Loading..."  disabled="true"><?php echo __('Save To Group','wp-autoblog'); ?> </button>
          </div>
        </div> <!-- /panel-all -->

      </div> <!-- /panel -->


      <div class="panel panel-primary">

        <div class="panel-heading panel-toggle">
          <h5 class="panel-title"><?php echo __('Translate','wp-autoblog'); ?></h5>
        </div>

        <div class="panel-all" <?php if(@!($SS1AAJ4PJY7R9I9658BXFLLK32QZUPR3HA924647L9L77P6EK7S1G63T13ZT7ZN6E2BAAF3B97DBEEF01C0043275F9A0E73422['showBox']==20))echo 'style="display:none;"' ?>>
          <form id="form20"  method="post" action="admin.php?page=autoblog-task-setting">
            <input type="hidden" name="action" value="form20" />
            <input type="hidden" name="id" value="<?php echo $S0888HTUW79G97R1U5F57T7PBX63164013F4GZ5NKXVZ03WD9IX0AOAQXJ67883JF0729F9JA72584H2229M48K2435UQ9TY4BFH40UW99YI1HBO57746CC8160496AEFC9FB306B6BA24E32097; ?>" />
            <input type="hidden" name="save_to_group" value="0" />

            <div class="panel-body" style="padding:0;margin:0;">
              <table class="table settingTable">
                <tr>
                  <td class="setName">
                    <label><?php echo __('Use Translator','wp-autoblog'); ?>:</label>
                  </td>
                  <td>
                    <?php
 if(!isset($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['trans'])){ $M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['trans'] = 0; } ?>
                    <select class="input-default" name="trans" id="trans_select">
                      <option value="0" <?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['trans']==0) echo 'selected="true"'; ?>><?php echo __('No'); ?></option>
                      <option value="1" <?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['trans']==1) echo 'selected="true"'; ?>><?php echo __('Google Translator','wp-autoblog'); ?></option>
                      <option value="3" <?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['trans']==3) echo 'selected="true"'; ?>><?php echo __('YouDao Translator','wp-autoblog'); ?></option>
                      <option value="2" <?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['trans']==2) echo 'selected="true"'; ?>><?php echo __('Baidu Translator','wp-autoblog'); ?></option>
                    </select>
                  </td>
                </tr>
              </table>

              <table class="table settingTable" id="googleTranslator_trans" <?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['trans']!=1){ echo 'style="display:none;"'; } ?> >
                <?php
 if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['trans']!=1){ if(get_bloginfo('language')=='zh-CN'||get_bloginfo('language')=='zh-TW'): $Q06Q0W84P9B9643IT268462PYO16Q9263XX9245CUYQS56T0SF9U4761I0TSP21N8A61AI06847L45U8E376303F744D99P8KF44PU9609GRTKREK7Y380Y0N2U876JHW2M5I089T3WT3517770EDD814212FC71221DCEE7122C1487 = 'zh'; $I658588952X0M8HCB8FHSKFUJ223C0Y7VZ451233U4S1FDB3E4JY3QT8AMR81N9GF0600EY4KBTFN3P423908S929M8H9ZS3O8SOP057W8744D0049VYOOS99BSU332931956FD8C12EBD2869745E9EBFA1F29364072 = 'en'; else: $Q06Q0W84P9B9643IT268462PYO16Q9263XX9245CUYQS56T0SF9U4761I0TSP21N8A61AI06847L45U8E376303F744D99P8KF44PU9609GRTKREK7Y380Y0N2U876JHW2M5I089T3WT3517770EDD814212FC71221DCEE7122C1487 = 'en'; $I658588952X0M8HCB8FHSKFUJ223C0Y7VZ451233U4S1FDB3E4JY3QT8AMR81N9GF0600EY4KBTFN3P423908S929M8H9ZS3O8SOP057W8744D0049VYOOS99BSU332931956FD8C12EBD2869745E9EBFA1F29364072 = 'zh'; endif; }else{ $Q06Q0W84P9B9643IT268462PYO16Q9263XX9245CUYQS56T0SF9U4761I0TSP21N8A61AI06847L45U8E376303F744D99P8KF44PU9609GRTKREK7Y380Y0N2U876JHW2M5I089T3WT3517770EDD814212FC71221DCEE7122C1487 = $M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['trans_origi_language']; $I658588952X0M8HCB8FHSKFUJ223C0Y7VZ451233U4S1FDB3E4JY3QT8AMR81N9GF0600EY4KBTFN3P423908S929M8H9ZS3O8SOP057W8744D0049VYOOS99BSU332931956FD8C12EBD2869745E9EBFA1F29364072 = $M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['trans_trans_language']; } ?>
                <tr>
                  <td class="setName">
                    <label><?php echo __('Original Language','wp-autoblog'); ?>:</label>
                  </td>
                  <td>
                    <select class="input-default" name="trans_origi_language_google" id="trans_origi_language_google">
                      <?php echo KI9EVS161PVA8W1X9RI1C1H3YN20OZ9777RUW428224V6JHJ5A5T1F3LJ0H608RU82P1HV5E75ODNT12HW721N13G6C43C724C0BAF67BF52A6EA8CED4BC3074749::ARZF310TUO9X21X1VSX74JMGS33E11C05615Y4G822L351K2Z6619637507F14BD49ADF1E9076223AC9DE26811($Q06Q0W84P9B9643IT268462PYO16Q9263XX9245CUYQS56T0SF9U4761I0TSP21N8A61AI06847L45U8E376303F744D99P8KF44PU9609GRTKREK7Y380Y0N2U876JHW2M5I089T3WT3517770EDD814212FC71221DCEE7122C1487); ?>
                    </select>
                  </td>
                </tr>

                <tr>
                  <td class="setName">
                    <label><?php echo __('Translated into','wp-autoblog'); ?>:</label>
                  </td>
                  <td>
                    <select class="input-default" name="trans_trans_language_google" id="trans_trans_language_google">
                      <?php echo KI9EVS161PVA8W1X9RI1C1H3YN20OZ9777RUW428224V6JHJ5A5T1F3LJ0H608RU82P1HV5E75ODNT12HW721N13G6C43C724C0BAF67BF52A6EA8CED4BC3074749::ARZF310TUO9X21X1VSX74JMGS33E11C05615Y4G822L351K2Z6619637507F14BD49ADF1E9076223AC9DE26811($I658588952X0M8HCB8FHSKFUJ223C0Y7VZ451233U4S1FDB3E4JY3QT8AMR81N9GF0600EY4KBTFN3P423908S929M8H9ZS3O8SOP057W8744D0049VYOOS99BSU332931956FD8C12EBD2869745E9EBFA1F29364072); ?>
                    </select>
                  </td>
                </tr>

                <tr>
                  <td class="setName">
                    <?php echo __('Protected Words','wp-autoblog'); ?>:
                  </td>
                  <td>
                    <span class="gray"><span class="gray"><?php echo __('Protected Word will not translated','wp-autoblog'); ?> </span> (<?php echo __('Separated with a comma','wp-autoblog'); ?>)</span><br/>

                    <textarea style="width:100%" name="trans_protected_words_google" id="trans_protected_words_google" ><?php echo @$M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['trans_protected_words'];?></textarea>

                    <code><?php echo __('Tips: support use variables : ','wp-autoblog'); ?>  <strong>{<?php echo __('Temporary Variable Name','wp-autoblog');?>}</strong> </code>
                  </td>
                </tr>
              </table><!-- end id="googleTranslator"  -->

              <table class="table settingTable" id="baiduTranslator_trans" <?php if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['trans']!=2){ echo 'style="display:none;"'; } ?> >
                <?php
 if($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['trans']!=2){ if(get_bloginfo('language')=='zh-CN'||get_bloginfo('language')=='zh-TW'): $Q06Q0W84P9B9643IT268462PYO16Q9263XX9245CUYQS56T0SF9U4761I0TSP21N8A61AI06847L45U8E376303F744D99P8KF44PU9609GRTKREK7Y380Y0N2U876JHW2M5I089T3WT3517770EDD814212FC71221DCEE7122C1487 = 'zh'; $I658588952X0M8HCB8FHSKFUJ223C0Y7VZ451233U4S1FDB3E4JY3QT8AMR81N9GF0600EY4KBTFN3P423908S929M8H9ZS3O8SOP057W8744D0049VYOOS99BSU332931956FD8C12EBD2869745E9EBFA1F29364072 = 'en'; else: $Q06Q0W84P9B9643IT268462PYO16Q9263XX9245CUYQS56T0SF9U4761I0TSP21N8A61AI06847L45U8E376303F744D99P8KF44PU9609GRTKREK7Y380Y0N2U876JHW2M5I089T3WT3517770EDD814212FC71221DCEE7122C1487 = 'en'; $I658588952X0M8HCB8FHSKFUJ223C0Y7VZ451233U4S1FDB3E4JY3QT8AMR81N9GF0600EY4KBTFN3P423908S929M8H9ZS3O8SOP057W8744D0049VYOOS99BSU332931956FD8C12EBD2869745E9EBFA1F29364072 = 'zh'; endif; }else{ $Q06Q0W84P9B9643IT268462PYO16Q9263XX9245CUYQS56T0SF9U4761I0TSP21N8A61AI06847L45U8E376303F744D99P8KF44PU9609GRTKREK7Y380Y0N2U876JHW2M5I089T3WT3517770EDD814212FC71221DCEE7122C1487 = $M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['trans_origi_language']; $I658588952X0M8HCB8FHSKFUJ223C0Y7VZ451233U4S1FDB3E4JY3QT8AMR81N9GF0600EY4KBTFN3P423908S929M8H9ZS3O8SOP057W8744D0049VYOOS99BSU332931956FD8C12EBD2869745E9EBFA1F29364072 = $M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['trans_trans_language']; } ?>
                <tr>
                  <td class="setName">
                    <label><?php echo __('Original Language','wp-autoblog'); ?>:</label>
                  </td>
                  <td>
                    <select class="input-default" name="trans_origi_language_baidu" id="trans_origi_language_baidu">
                      <?php echo L0S5O0X0EC85281ARAM1UAA83K351WLAN0IM9116GI2Y422D06R8L7A831DPR67K9SD61139318A9F387E8FAD2DCA5268E5BD6921::ARZF310TUO9X21X1VSX74JMGS33E11C05615Y4G822L351K2Z6619637507F14BD49ADF1E9076223AC9DE26811($Q06Q0W84P9B9643IT268462PYO16Q9263XX9245CUYQS56T0SF9U4761I0TSP21N8A61AI06847L45U8E376303F744D99P8KF44PU9609GRTKREK7Y380Y0N2U876JHW2M5I089T3WT3517770EDD814212FC71221DCEE7122C1487); ?>
                    </select>
                  </td>
                </tr>

                <tr>
                  <td class="setName">
                    <label><?php echo __('Translated into','wp-autoblog'); ?>:</label>
                  </td>
                  <td>
                    <select class="input-default" name="trans_trans_language_baidu" id="trans_trans_language_baidu">
                      <?php echo L0S5O0X0EC85281ARAM1UAA83K351WLAN0IM9116GI2Y422D06R8L7A831DPR67K9SD61139318A9F387E8FAD2DCA5268E5BD6921::ARZF310TUO9X21X1VSX74JMGS33E11C05615Y4G822L351K2Z6619637507F14BD49ADF1E9076223AC9DE26811($I658588952X0M8HCB8FHSKFUJ223C0Y7VZ451233U4S1FDB3E4JY3QT8AMR81N9GF0600EY4KBTFN3P423908S929M8H9ZS3O8SOP057W8744D0049VYOOS99BSU332931956FD8C12EBD2869745E9EBFA1F29364072); ?>
                    </select>
                  </td>
                </tr>

                <tr>
                  <td class="setName">
                    <?php echo __('Protected Words','wp-autoblog'); ?>:
                  </td>
                  <td>
                    <span class="gray"><span class="gray"><?php echo __('Protected Word will not translated','wp-autoblog'); ?> </span> (<?php echo __('Separated with a comma','wp-autoblog'); ?>)</span><br/>

                    <textarea style="width:100%" name="trans_protected_words_baidu" id="trans_protected_words_baidu" ><?php echo @$M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['trans_protected_words'];?></textarea>

                    <code><?php echo __('Tips: support use variables : ','wp-autoblog'); ?>  <strong>{<?php echo __('Temporary Variable Name','wp-autoblog');?>}</strong> </code>
                  </td>
                </tr>
              </table><!-- end id="baiduTranslator"  -->


              <table class="table settingTable" >
                <tr>
                  <td class="setName">
                    <label><?php echo __('Translate Method','wp-autoblog'); ?>:</label>
                  </td>
                  <td>
                    <select class="input-default" name="trans_method" >
                      <option value="0" <?php if(@$M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['trans_method']==0) echo 'selected="true"'; ?>><?php echo __('Translate All','wp-autoblog'); ?></option>
                      <option value="1" <?php if(@$M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['trans_method']==1) echo 'selected="true"'; ?>><?php echo __('Only Translate Title','wp-autoblog'); ?></option>
                      <option value="2" <?php if(@$M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['trans_method']==2) echo 'selected="true"'; ?>><?php echo __('Only Translate Content','wp-autoblog'); ?></option>
                    </select>
                  </td>
                </tr>

                <tr>
                  <td class="setName">
                    <label><?php echo __('When Translate Failure Will Not Publish','wp-autoblog'); ?>:</label>
                  </td>
                  <td>
                    <select class="input-default" name="trans_failure" >
                      <option value="0" <?php if(@$M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['trans_failure']==0) echo 'selected="true"'; ?>><?php echo __('No'); ?></option>
                      <option value="1" <?php if(@$M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['trans_failure']==1) echo 'selected="true"'; ?>><?php echo __('Yes'); ?></option>
                    </select>
                  </td>
                </tr>
              </table>


            </div> <!-- /panel-body -->

          </form>


          <div class="panel-footer">
            <span style="display:inline-block;font-weight:bold;padding:5px;background-color:red;color:#FFFFFF;"><?php echo __('Trial version this settings will not working, use this featured please upgrade to full version','wp-autoblog'); ?></span>
          </div>
          <div class="panel-footer">
            <button class="btn btn-primary" data-loading-text="Loading..."  disabled="true"><?php echo __('Save'); ?> </button>
            <button class="btn btn-primary" data-loading-text="Loading..."  disabled="true"><?php echo __('Save To Group','wp-autoblog'); ?> </button>
          </div>
        </div> <!-- /panel-all -->

      </div> <!-- /panel -->





    </div> <!-- /post-body-content -->


  </div><!-- /post-body -->
</div><!-- /poststuff -->