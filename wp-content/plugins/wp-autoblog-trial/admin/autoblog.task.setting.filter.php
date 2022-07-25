<div style="margin:16px;"></div>
<div id="poststuff">
  <div id="post-body" class="metabox-holder ">
    <div id="post-body-content">

      <div class="panel panel-primary">

        <div class="panel-heading panel-toggle">
          <h5 class="panel-title"><?php echo __("Extracted Content Filtering","wp-autoblog"); ?></h5>
        </div>

        <div class="panel-all" <?php if(@!($SS1AAJ4PJY7R9I9658BXFLLK32QZUPR3HA924647L9L77P6EK7S1G63T13ZT7ZN6E2BAAF3B97DBEEF01C0043275F9A0E73422['showBox']==9))echo 'style="display:none;"' ?>>
          <form id="form9"  method="post" action="admin.php?page=autoblog-task-setting">
            <input type="hidden" name="action" value="form9" />
            <input type="hidden" name="id" value="<?php echo $S0888HTUW79G97R1U5F57T7PBX63164013F4GZ5NKXVZ03WD9IX0AOAQXJ67883JF0729F9JA72584H2229M48K2435UQ9TY4BFH40UW99YI1HBO57746CC8160496AEFC9FB306B6BA24E32097; ?>" />
            <input type="hidden" name="save_to_group" value="0" />

            <div class="panel-body" style="padding:0;margin:0;">
              <table class="table settingTable">
                <tr>
                  <td class="setName">
                    <label><?php echo __("Delete the content selected by CSS Selector",'wp-autoblog'); ?></label>
                  </td>
                  <td>

                    <div class="margin-t-8"><span class="gray">
    <?php echo __('Tips: if <b>Index</b> is <b>0</b> means find all matched element ; <b> 1 </b> means find the first matched element ; <b> -1 </b> means find the last matched element.','wp-autoblog'); ?>
  </span><br/><br/></div>

                    <div id="css_content_filter_div" class="margin-b-8">
                      <?php
 if(isset($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['css_content_filter'])&&count(@$M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['css_content_filter'])>0){ foreach($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['css_content_filter'] as $KA7V8T5762309ZBNH922GK2T5L9J5F97WGS46LD37L25644W1V14P1860S7I0ZF42J39UY95148098X9786MT15O8II2N792406KZR15J54BQW6AAESK8UH40E6909FD1BDFA0EA84E2C4ADC0EDA7697A7618){ ?>
                          <div class="input-group margin-b-8 w800">
                            <div class="input-group-addon"><?php echo __('CSS Selector','wp-autoblog'); ?>: </div>
                            <input type="text" style="width: 310px;" class="form-control" name="css_content_filter_selector[]"  value="<?php echo htmlspecialchars($KA7V8T5762309ZBNH922GK2T5L9J5F97WGS46LD37L25644W1V14P1860S7I0ZF42J39UY95148098X9786MT15O8II2N792406KZR15J54BQW6AAESK8UH40E6909FD1BDFA0EA84E2C4ADC0EDA7697A7618['selector']); ?>" >
                            <div class="input-group-addon"><?php echo __('Index','wp-autoblog'); ?>: </div>
                            <input type="text" style="width: 80px;" class="form-control" name="css_content_filter_index[]"  value="<?php echo htmlspecialchars($KA7V8T5762309ZBNH922GK2T5L9J5F97WGS46LD37L25644W1V14P1860S7I0ZF42J39UY95148098X9786MT15O8II2N792406KZR15J54BQW6AAESK8UH40E6909FD1BDFA0EA84E2C4ADC0EDA7697A7618['index']); ?>" >
                            <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                            <select class="form-control input-default" style="width: 180px;" name="css_content_filter_apply_to[]">
                              <option value="b" <?php selected( 'b',$KA7V8T5762309ZBNH922GK2T5L9J5F97WGS46LD37L25644W1V14P1860S7I0ZF42J39UY95148098X9786MT15O8II2N792406KZR15J54BQW6AAESK8UH40E6909FD1BDFA0EA84E2C4ADC0EDA7697A7618['apply_to'] ); ?> ><?php echo __('Post Content','wp-autoblog'); ?></option>
                              <option value="a" <?php selected( 'a',$KA7V8T5762309ZBNH922GK2T5L9J5F97WGS46LD37L25644W1V14P1860S7I0ZF42J39UY95148098X9786MT15O8II2N792406KZR15J54BQW6AAESK8UH40E6909FD1BDFA0EA84E2C4ADC0EDA7697A7618['apply_to'] ); ?> ><?php echo __('Post Title','wp-autoblog'); ?></option>

                              <option value="0" <?php selected( 0,$KA7V8T5762309ZBNH922GK2T5L9J5F97WGS46LD37L25644W1V14P1860S7I0ZF42J39UY95148098X9786MT15O8II2N792406KZR15J54BQW6AAESK8UH40E6909FD1BDFA0EA84E2C4ADC0EDA7697A7618['apply_to'] ); ?> ><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>

                              <?php foreach($M7M7GM56G6636QS75RZ770L70K610I12H2721P93DL4306594CBFF4150B3A2B26145BE311D5FC9241225 as $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061=>$QS1TYC425QQ13555GK4640B5S1J9OVX91UP3NP91ZSICJ8KH478CIWPEZ6K22T3DI54TS112N22063C1608D6E0BAF80249C42E2BE58045522){ ?>
                                <option value="<?php echo $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061; ?>" <?php selected( $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061,$KA7V8T5762309ZBNH922GK2T5L9J5F97WGS46LD37L25644W1V14P1860S7I0ZF42J39UY95148098X9786MT15O8II2N792406KZR15J54BQW6AAESK8UH40E6909FD1BDFA0EA84E2C4ADC0EDA7697A7618['apply_to'] ); ?> ><?php echo $QS1TYC425QQ13555GK4640B5S1J9OVX91UP3NP91ZSICJ8KH478CIWPEZ6K22T3DI54TS112N22063C1608D6E0BAF80249C42E2BE58045522; ?> </option>
                              <?php } ?>

                            </select>
                            <span class="input-group-btn inputdeleteBtn">
                             <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                            </span>
                          </div>
                          <?php
 } }else{ ?>
                        <div class="input-group margin-b-8 w800">
                          <div class="input-group-addon"><?php echo __('CSS Selector','wp-autoblog'); ?>: </div>
                          <input type="text" style="width: 310px;" class="form-control" name="css_content_filter_selector[]"  value="" >
                          <div class="input-group-addon"><?php echo __('Index','wp-autoblog'); ?>: </div>
                          <input type="text" style="width: 80px;" class="form-control" name="css_content_filter_index[]"  value="0" >
                          <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                          <select class="form-control input-default" style="width: 180px;" name="css_content_filter_apply_to[]">
                            <option value="b"><?php echo __('Post Content','wp-autoblog'); ?></option>
                            <option value="a"><?php echo __('Post Title','wp-autoblog'); ?></option>
                            <option value="0"><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>

                            <?php foreach($M7M7GM56G6636QS75RZ770L70K610I12H2721P93DL4306594CBFF4150B3A2B26145BE311D5FC9241225 as $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061=>$QS1TYC425QQ13555GK4640B5S1J9OVX91UP3NP91ZSICJ8KH478CIWPEZ6K22T3DI54TS112N22063C1608D6E0BAF80249C42E2BE58045522){ ?>
                              <option value="<?php echo $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061; ?>"><?php echo $QS1TYC425QQ13555GK4640B5S1J9OVX91UP3NP91ZSICJ8KH478CIWPEZ6K22T3DI54TS112N22063C1608D6E0BAF80249C42E2BE58045522; ?> </option>
                            <?php } ?>

                          </select>
                          <span class="input-group-btn inputdeleteBtn">
                            <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                          </span>
                        </div>
                        <?php
 } ?>
                    </div>

                    <a class="btn btn-default" data-loading-text="Loading..." id="add_css_filter_rules_btn" onclick="SN9P189J8H29988L6FOX4QBX1Y4534SL4WHU9O8UYR4CE38BLVA53K3WD2I76M9CL61BOV7K838654FE13C9C2B2E6B62DECA806E0AB325139()"><?php echo __('Add Filter Rules','wp-autoblog'); ?></a>


                  </td>
                </tr>
                <tr>
                  <td class="setName">
                    <label><?php echo __("Delete the content between the two key words",'wp-autoblog'); ?></label>
                  </td>
                  <td>

                    <div class="margin-t-8"><span class="gray">
    Tips: <?php echo __('Keyword 2 can be empty, which means that delete everything after the keyword 1','wp-autoblog'); ?>; <?php echo __('(*) is Wildcards','wp-autoblog'); ?>
  </span><br/><br/></div>

                    <div id="keyword_content_filter_div" class="margin-b-8">
                      <?php
 if(isset($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['keyword_content_filter'])&&count(@$M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['keyword_content_filter'])>0){ foreach($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['keyword_content_filter'] as $K9V176G0B6A3018E0C0NM3D8EJGH8M2O7330H013FHP4193OPH4QY3Q31K455I760C8187CM38Y0JQ12UAZ13Q3RW7F3029X8BC80279L0V26XXHVQ3W2TEV188V4DBE3EH2DB90FD663AA6CEC193AD7DE0B37CDF8323619){ ?>
                          <div class="input-group margin-b-8">
                            <div class="input-group-addon"><?php echo __('Keyword','wp-autoblog'); ?> 1: </div>
                            <input type="text"  class="form-control" name="keyword_content_filter_k1[]"  value="<?php echo htmlspecialchars($K9V176G0B6A3018E0C0NM3D8EJGH8M2O7330H013FHP4193OPH4QY3Q31K455I760C8187CM38Y0JQ12UAZ13Q3RW7F3029X8BC80279L0V26XXHVQ3W2TEV188V4DBE3EH2DB90FD663AA6CEC193AD7DE0B37CDF8323619['k1']); ?>" >
                            <div class="input-group-addon"><?php echo __('Keyword','wp-autoblog'); ?> 2: </div>
                            <input type="text"  class="form-control" name="keyword_content_filter_k2[]"  value="<?php echo htmlspecialchars($K9V176G0B6A3018E0C0NM3D8EJGH8M2O7330H013FHP4193OPH4QY3Q31K455I760C8187CM38Y0JQ12UAZ13Q3RW7F3029X8BC80279L0V26XXHVQ3W2TEV188V4DBE3EH2DB90FD663AA6CEC193AD7DE0B37CDF8323619['k2']); ?>" >
                            <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                            <select class="form-control input-default"  name="keyword_content_filter_apply_to[]">
                              <option value="b" <?php selected( 'b',$K9V176G0B6A3018E0C0NM3D8EJGH8M2O7330H013FHP4193OPH4QY3Q31K455I760C8187CM38Y0JQ12UAZ13Q3RW7F3029X8BC80279L0V26XXHVQ3W2TEV188V4DBE3EH2DB90FD663AA6CEC193AD7DE0B37CDF8323619['apply_to'] ); ?> ><?php echo __('Post Content','wp-autoblog'); ?></option>
                              <option value="a" <?php selected( 'a',$K9V176G0B6A3018E0C0NM3D8EJGH8M2O7330H013FHP4193OPH4QY3Q31K455I760C8187CM38Y0JQ12UAZ13Q3RW7F3029X8BC80279L0V26XXHVQ3W2TEV188V4DBE3EH2DB90FD663AA6CEC193AD7DE0B37CDF8323619['apply_to'] ); ?> ><?php echo __('Post Title','wp-autoblog'); ?></option>
                              <option value="0" <?php selected( 0,$K9V176G0B6A3018E0C0NM3D8EJGH8M2O7330H013FHP4193OPH4QY3Q31K455I760C8187CM38Y0JQ12UAZ13Q3RW7F3029X8BC80279L0V26XXHVQ3W2TEV188V4DBE3EH2DB90FD663AA6CEC193AD7DE0B37CDF8323619['apply_to'] ); ?> ><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>

                              <?php foreach($M7M7GM56G6636QS75RZ770L70K610I12H2721P93DL4306594CBFF4150B3A2B26145BE311D5FC9241225 as $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061=>$QS1TYC425QQ13555GK4640B5S1J9OVX91UP3NP91ZSICJ8KH478CIWPEZ6K22T3DI54TS112N22063C1608D6E0BAF80249C42E2BE58045522){ ?>
                                <option value="<?php echo $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061; ?>" <?php selected( $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061,$K9V176G0B6A3018E0C0NM3D8EJGH8M2O7330H013FHP4193OPH4QY3Q31K455I760C8187CM38Y0JQ12UAZ13Q3RW7F3029X8BC80279L0V26XXHVQ3W2TEV188V4DBE3EH2DB90FD663AA6CEC193AD7DE0B37CDF8323619['apply_to'] ); ?> ><?php echo $QS1TYC425QQ13555GK4640B5S1J9OVX91UP3NP91ZSICJ8KH478CIWPEZ6K22T3DI54TS112N22063C1608D6E0BAF80249C42E2BE58045522; ?> </option>
                              <?php } ?>

                            </select>
                            <span class="input-group-btn inputdeleteBtn">
                             <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                            </span>
                          </div>
                          <?php
 } }else{ ?>
                        <div class="input-group margin-b-8">
                          <div class="input-group-addon"><?php echo __('Keyword','wp-autoblog'); ?> 1: </div>
                          <input type="text"  class="form-control" name="keyword_content_filter_k1[]"  value="" placeholder='<?php echo __('For example','wp-autoblog'); ?>: <div class="copyright" id="(*)">' >
                          <div class="input-group-addon"><?php echo __('Keyword','wp-autoblog'); ?> 2: </div>
                          <input type="text"  class="form-control" name="keyword_content_filter_k2[]"  value=""  placeholder='<?php echo __('For example','wp-autoblog'); ?>: </div>'>
                          <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                          <select class="form-control input-default"  name="keyword_content_filter_apply_to[]">
                            <option value="b"><?php echo __('Post Content','wp-autoblog'); ?></option>
                            <option value="a"><?php echo __('Post Title','wp-autoblog'); ?></option>
                            <option value="0"><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>

                            <?php foreach($M7M7GM56G6636QS75RZ770L70K610I12H2721P93DL4306594CBFF4150B3A2B26145BE311D5FC9241225 as $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061=>$QS1TYC425QQ13555GK4640B5S1J9OVX91UP3NP91ZSICJ8KH478CIWPEZ6K22T3DI54TS112N22063C1608D6E0BAF80249C42E2BE58045522){ ?>
                              <option value="<?php echo $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061; ?>"><?php echo $QS1TYC425QQ13555GK4640B5S1J9OVX91UP3NP91ZSICJ8KH478CIWPEZ6K22T3DI54TS112N22063C1608D6E0BAF80249C42E2BE58045522; ?> </option>
                            <?php } ?>

                          </select>
                          <span class="input-group-btn inputdeleteBtn">
                            <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                          </span>
                        </div>
                        <?php
 } ?>
                    </div>

                    <a class="btn btn-default" data-loading-text="Loading..." id="add_keyword_filter_rules_btn" onclick="G8R3V50B41QU1M769C7GE508BM4EI79GH8PY29P65B0675A85E7BFBF53DC40C5E02CA91E64295()"><?php echo __('Add Filter Rules','wp-autoblog'); ?></a>


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
          <h5 class="panel-title"><?php echo __("HTML tags Filtering","wp-autoblog"); ?></h5>
        </div>

        <div class="panel-all" <?php if(@!($SS1AAJ4PJY7R9I9658BXFLLK32QZUPR3HA924647L9L77P6EK7S1G63T13ZT7ZN6E2BAAF3B97DBEEF01C0043275F9A0E73422['showBox']==11))echo 'style="display:none;"' ?>>
          <form id="form11"  method="post" action="admin.php?page=autoblog-task-setting">
            <input type="hidden" name="action" value="form11" />
            <input type="hidden" name="id" value="<?php echo $S0888HTUW79G97R1U5F57T7PBX63164013F4GZ5NKXVZ03WD9IX0AOAQXJ67883JF0729F9JA72584H2229M48K2435UQ9TY4BFH40UW99YI1HBO57746CC8160496AEFC9FB306B6BA24E32097; ?>" />
            <input type="hidden" name="save_to_group" value="0" />

            <div class="panel-body" style="padding:0;margin:0;">
              <table class="table settingTable">
                <tr>
                  <td class="setName">
                    <label><?php echo __("Delete the HTML tags selected by CSS Selector",'wp-autoblog'); ?></label>
                  </td>
                  <td>

                    <div class="margin-t-8"><span class="gray">
    <?php echo __('For example','wp-autopost'); ?>, <?php echo __('If you want to filter out html &lta> tag, only need to fill out &nbsp; " a "','wp-autoblog'); ?>
  </span><br/><br/></div>

                    <div id="html_tag_filter_div" class="margin-b-8">
                      <?php
 if(isset($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['html_tag_filter'])&&count(@$M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['html_tag_filter'])>0){ foreach($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['html_tag_filter'] as $N00H5LIH2UR29T82K8J5351Y6PR6290ZB173B0T47PFFX73HM1Z461U077OJX632YQ61Y9064G4BA9614DD93ED4F2A75BE79ADB21C69F2806){ ?>
                          <div class="input-group margin-b-8 w800">
                            <div class="input-group-addon"><?php echo __('CSS Selector','wp-autoblog'); ?>: </div>
                            <input type="text" style="width: 310px;" class="form-control" name="html_tag_filter_selector[]"  value="<?php echo htmlspecialchars($N00H5LIH2UR29T82K8J5351Y6PR6290ZB173B0T47PFFX73HM1Z461U077OJX632YQ61Y9064G4BA9614DD93ED4F2A75BE79ADB21C69F2806['selector']); ?>" >
                            <div class="input-group-addon"><?php echo __('Index','wp-autoblog'); ?>: </div>
                            <input type="text" style="width: 80px;" class="form-control" name="html_tag_filter_index[]"  value="<?php echo htmlspecialchars($N00H5LIH2UR29T82K8J5351Y6PR6290ZB173B0T47PFFX73HM1Z461U077OJX632YQ61Y9064G4BA9614DD93ED4F2A75BE79ADB21C69F2806['index']); ?>" >
                            <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                            <select class="form-control input-default" style="width: 180px;" name="html_tag_filter_apply_to[]">
                              <option value="b" <?php selected( 'b',$N00H5LIH2UR29T82K8J5351Y6PR6290ZB173B0T47PFFX73HM1Z461U077OJX632YQ61Y9064G4BA9614DD93ED4F2A75BE79ADB21C69F2806['apply_to'] ); ?> ><?php echo __('Post Content','wp-autoblog'); ?></option>
                              <option value="a" <?php selected( 'a',$N00H5LIH2UR29T82K8J5351Y6PR6290ZB173B0T47PFFX73HM1Z461U077OJX632YQ61Y9064G4BA9614DD93ED4F2A75BE79ADB21C69F2806['apply_to'] ); ?> ><?php echo __('Post Title','wp-autoblog'); ?></option>
                              <option value="0" <?php selected( 0,$N00H5LIH2UR29T82K8J5351Y6PR6290ZB173B0T47PFFX73HM1Z461U077OJX632YQ61Y9064G4BA9614DD93ED4F2A75BE79ADB21C69F2806['apply_to'] ); ?> ><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>

                              <?php foreach($M7M7GM56G6636QS75RZ770L70K610I12H2721P93DL4306594CBFF4150B3A2B26145BE311D5FC9241225 as $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061=>$QS1TYC425QQ13555GK4640B5S1J9OVX91UP3NP91ZSICJ8KH478CIWPEZ6K22T3DI54TS112N22063C1608D6E0BAF80249C42E2BE58045522){ ?>
                                <option value="<?php echo $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061; ?>" <?php selected( $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061,$N00H5LIH2UR29T82K8J5351Y6PR6290ZB173B0T47PFFX73HM1Z461U077OJX632YQ61Y9064G4BA9614DD93ED4F2A75BE79ADB21C69F2806['apply_to'] ); ?> ><?php echo $QS1TYC425QQ13555GK4640B5S1J9OVX91UP3NP91ZSICJ8KH478CIWPEZ6K22T3DI54TS112N22063C1608D6E0BAF80249C42E2BE58045522; ?> </option>
                              <?php } ?>

                            </select>
                            <span class="input-group-btn inputdeleteBtn">
                             <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                            </span>
                          </div>
                          <?php
 } }else{ ?>
                        <div class="input-group margin-b-8 w800">
                          <div class="input-group-addon"><?php echo __('CSS Selector','wp-autoblog'); ?>: </div>
                          <input type="text" style="width: 310px;" class="form-control" name="html_tag_filter_selector[]"  value="" >
                          <div class="input-group-addon"><?php echo __('Index','wp-autoblog'); ?>: </div>
                          <input type="text" style="width: 80px;" class="form-control" name="html_tag_filter_index[]"  value="0" >
                          <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                          <select class="form-control input-default" style="width: 180px;" name="html_tag_filter_apply_to[]">
                            <option value="b"><?php echo __('Post Content','wp-autoblog'); ?></option>
                            <option value="a"><?php echo __('Post Title','wp-autoblog'); ?></option>
                            <option value="0"><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>
                            <?php foreach($M7M7GM56G6636QS75RZ770L70K610I12H2721P93DL4306594CBFF4150B3A2B26145BE311D5FC9241225 as $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061=>$QS1TYC425QQ13555GK4640B5S1J9OVX91UP3NP91ZSICJ8KH478CIWPEZ6K22T3DI54TS112N22063C1608D6E0BAF80249C42E2BE58045522){ ?>
                              <option value="<?php echo $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061; ?>" ><?php echo $QS1TYC425QQ13555GK4640B5S1J9OVX91UP3NP91ZSICJ8KH478CIWPEZ6K22T3DI54TS112N22063C1608D6E0BAF80249C42E2BE58045522; ?> </option>
                            <?php } ?>
                          </select>
                          <span class="input-group-btn inputdeleteBtn">
                            <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                          </span>
                        </div>
                        <?php
 } ?>
                    </div>

                    <a class="btn btn-default" data-loading-text="Loading..." id="add_html_tag_rules_btn" onclick="X69L76YWN825C2SK9B96OH5HEAQU2K86K33E2XHU95O0Q01Q63V7Y570NKU86Z7P3YVP29GX9SX7Q08ZD8379524AC1380CCA3F6C66629FE09F5ECF6606868()"><?php echo __('Add Filter Rules','wp-autoblog'); ?></a>


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
          <h5 class="panel-title"><?php echo __("Extracted Content Replacement","wp-autoblog"); ?></h5>
        </div>

        <div class="panel-all" <?php if(@!($SS1AAJ4PJY7R9I9658BXFLLK32QZUPR3HA924647L9L77P6EK7S1G63T13ZT7ZN6E2BAAF3B97DBEEF01C0043275F9A0E73422['showBox']==12))echo 'style="display:none;"' ?>>
          <form id="form12"  method="post" action="admin.php?page=autoblog-task-setting">
            <input type="hidden" name="action" value="form12" />
            <input type="hidden" name="id" value="<?php echo $S0888HTUW79G97R1U5F57T7PBX63164013F4GZ5NKXVZ03WD9IX0AOAQXJ67883JF0729F9JA72584H2229M48K2435UQ9TY4BFH40UW99YI1HBO57746CC8160496AEFC9FB306B6BA24E32097; ?>" />
            <input type="hidden" name="save_to_group" value="0" />

            <div class="panel-body" style="padding:0;margin:0;">
              <table class="table settingTable">
                <tr>
                  <td class="setName">
                    <label><?php echo __("Replace the content selected by CSS Selector",'wp-autoblog'); ?></label>
                  </td>
                  <td>

                    <div class="margin-t-8"><span class="gray">
    <?php echo __('Tips: support use variables : ','wp-autoblog'); ?><br/><strong>{post_id}</strong> <strong>{post_title}</strong> <strong>{post_permalink}</strong> <strong>{source_url}</strong> <strong>{<?php echo __('Temporary Variable Name','wp-autoblog'); ?>}</strong> <strong>[<?php echo __('html_attribute_name','wp-autoblog');?>]</strong><?php if(@$Q8E2K62PL7D012GE43928XRPU260U4F1V26AYI0735SDQ921GG3T3W802CD5BB3C2AD65A7632FD1BBCE8F4FE6309==1){ ?> <br/><strong>{post_id_x}</strong> <strong>{post_title_x}</strong> <strong>{post_permalink_x}</strong> <?php } ?>
  </span><br/><br/></div>

                    <div id="css_replace_div" class="margin-b-8">
                      <?php
 if(isset($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['css_replace'])&&count(@$M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['css_replace'])>0){ foreach($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['css_replace'] as $OYL67091AZ9I2XP6ZJ6G98V917CPOK7PK8XM22STWP247Q1K6L1M9G0I7F6T0HI6Y38D94E9B87109256C9FFC310FBE8EC854D4329){ ?>
                          <div>
                          <div class="input-group margin-b-8">
                            <div class="input-group-addon"><?php echo __('CSS Selector','wp-autoblog'); ?>: </div>
                            <input type="text" class="form-control" name="css_replace_selector[]"  value="<?php echo htmlspecialchars($OYL67091AZ9I2XP6ZJ6G98V917CPOK7PK8XM22STWP247Q1K6L1M9G0I7F6T0HI6Y38D94E9B87109256C9FFC310FBE8EC854D4329['selector']); ?>" >
                            <div class="input-group-addon"><?php echo __('Index','wp-autoblog'); ?>: </div>
                            <input type="text"  size="1" class="form-control" name="css_replace_index[]"  value="<?php echo $OYL67091AZ9I2XP6ZJ6G98V917CPOK7PK8XM22STWP247Q1K6L1M9G0I7F6T0HI6Y38D94E9B87109256C9FFC310FBE8EC854D4329['index']; ?>" >
                            <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                            <select class="form-control input-default" name="css_replace_apply_to[]">
                              <option value="b" <?php selected( 'b',$OYL67091AZ9I2XP6ZJ6G98V917CPOK7PK8XM22STWP247Q1K6L1M9G0I7F6T0HI6Y38D94E9B87109256C9FFC310FBE8EC854D4329['apply_to'] ); ?> ><?php echo __('Post Content','wp-autoblog'); ?></option>
                              <option value="a" <?php selected( 'a',$OYL67091AZ9I2XP6ZJ6G98V917CPOK7PK8XM22STWP247Q1K6L1M9G0I7F6T0HI6Y38D94E9B87109256C9FFC310FBE8EC854D4329['apply_to'] ); ?> ><?php echo __('Post Title','wp-autoblog'); ?></option>
                              <option value="0" <?php selected( 0,$OYL67091AZ9I2XP6ZJ6G98V917CPOK7PK8XM22STWP247Q1K6L1M9G0I7F6T0HI6Y38D94E9B87109256C9FFC310FBE8EC854D4329['apply_to'] ); ?> ><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>
                              <?php foreach($M7M7GM56G6636QS75RZ770L70K610I12H2721P93DL4306594CBFF4150B3A2B26145BE311D5FC9241225 as $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061=>$QS1TYC425QQ13555GK4640B5S1J9OVX91UP3NP91ZSICJ8KH478CIWPEZ6K22T3DI54TS112N22063C1608D6E0BAF80249C42E2BE58045522){ ?>
                                <option value="<?php echo $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061; ?>" <?php selected( $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061,$OYL67091AZ9I2XP6ZJ6G98V917CPOK7PK8XM22STWP247Q1K6L1M9G0I7F6T0HI6Y38D94E9B87109256C9FFC310FBE8EC854D4329['apply_to'] ); ?> ><?php echo $QS1TYC425QQ13555GK4640B5S1J9OVX91UP3NP91ZSICJ8KH478CIWPEZ6K22T3DI54TS112N22063C1608D6E0BAF80249C42E2BE58045522; ?> </option>
                              <?php } ?>
                            </select>
                            <span class="input-group-btn inputdeleteBtn1">
                             <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                            </span>
                          </div>
                          <textarea class="form-control " name="css_replace_with[]"  rows="3" placeholder="<?php echo __('Replace With','wp-autoblog'); ?> (HTML Code)"><?php echo htmlspecialchars($OYL67091AZ9I2XP6ZJ6G98V917CPOK7PK8XM22STWP247Q1K6L1M9G0I7F6T0HI6Y38D94E9B87109256C9FFC310FBE8EC854D4329['replace_with']); ?></textarea><br/></div>
                          <?php
 } }else{ ?>
                        <div>
                        <div class="input-group margin-b-8 ">
                          <div class="input-group-addon"><?php echo __('CSS Selector','wp-autoblog'); ?>: </div>
                          <input type="text"  class="form-control" name="css_replace_selector[]"  value="" >
                          <div class="input-group-addon"><?php echo __('Index','wp-autoblog'); ?>: </div>
                          <input type="text"  size="1" class="form-control" name="css_replace_index[]"  value="0" >
                          <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                          <select class="form-control input-default" name="css_replace_apply_to[]">
                            <option value="b"><?php echo __('Post Content','wp-autoblog'); ?></option>
                            <option value="a"><?php echo __('Post Title','wp-autoblog'); ?></option>
                            <option value="0"><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>
                            <?php foreach($M7M7GM56G6636QS75RZ770L70K610I12H2721P93DL4306594CBFF4150B3A2B26145BE311D5FC9241225 as $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061=>$QS1TYC425QQ13555GK4640B5S1J9OVX91UP3NP91ZSICJ8KH478CIWPEZ6K22T3DI54TS112N22063C1608D6E0BAF80249C42E2BE58045522){ ?>
                              <option value="<?php echo $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061; ?>"><?php echo $QS1TYC425QQ13555GK4640B5S1J9OVX91UP3NP91ZSICJ8KH478CIWPEZ6K22T3DI54TS112N22063C1608D6E0BAF80249C42E2BE58045522; ?> </option>
                            <?php } ?>
                          </select>
                          <span class="input-group-btn inputdeleteBtn1">
                            <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                          </span>
                        </div>
                        <textarea class="form-control " name="css_replace_with[]"  rows="3" placeholder="<?php echo __('Replace With','wp-autoblog'); ?> (HTML Code)"></textarea><br/></div>

                        <?php
 } ?>
                    </div>

                    <a class="btn btn-default" data-loading-text="Loading..." id="add_css_replace_rules_btn" onclick="VMO01WH754SQ3P2NCR4YAM0D182697D0WR96Y237V2UD12GR3RU10ZO217L8N03E0EK99PGRC491813CAE58A5B6E3BAB36300598D6D08B3C668250()"><?php echo __('Add More','wp-autoblog'); ?></a>


                  </td>
                </tr>
                <tr>
                  <td class="setName">
                    <label><?php echo __("Replace the content used by keywords",'wp-autoblog'); ?></label>
                  </td>
                  <td>

                    <div class="margin-t-8"><span class="gray">
    <?php echo __('Tips: support use variables : ','wp-autoblog'); ?><br/><strong>{post_id}</strong> <strong>{post_title}</strong> <strong>{post_permalink}</strong> <strong>{source_url}</strong> <strong>{<?php echo __('Temporary Variable Name','wp-autoblog'); ?>}</strong><?php if(@$Q8E2K62PL7D012GE43928XRPU260U4F1V26AYI0735SDQ921GG3T3W802CD5BB3C2AD65A7632FD1BBCE8F4FE6309==1){ ?> <br/><strong>{post_id_x}</strong> <strong>{post_title_x}</strong> <strong>{post_permalink_x}</strong> <?php } ?>
  </span></div>
                    <div class="margin-t-8"><span class="gray">
    Tips: <?php echo __('Replace with can be empty, which means that delete the keyword','wp-autoblog'); ?>; <?php echo __('(*) is Wildcards','wp-autoblog'); ?>
  </span><br/><br/></div>

                    <div id="keyword_replace_div" class="margin-b-8">
                      <?php
 if(isset($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['keyword_replace'])&&count(@$M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['keyword_replace'])>0){ foreach($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['keyword_replace'] as $JG01J30523SR07L2AO9TY612W8ZBU673E7LA579B8K290GGD9436NW53561494021E81K29L49B21641MC7Q950L157I0B10161H4CO95H4X25M867HYB54PO1FA8S1Z33DKF86CDBB2B080334247CFE18C6851F9F4553366){ ?>
                            <div>
                          <div class="input-group margin-b-8">
                            <div class="input-group-addon"><?php echo __('Keyword','wp-autoblog'); ?>: </div>
                            <input type="text"  class="form-control" name="keyword_replace_keyword[]"  value="<?php echo htmlspecialchars($JG01J30523SR07L2AO9TY612W8ZBU673E7LA579B8K290GGD9436NW53561494021E81K29L49B21641MC7Q950L157I0B10161H4CO95H4X25M867HYB54PO1FA8S1Z33DKF86CDBB2B080334247CFE18C6851F9F4553366['keyword']); ?>" >
                            <div class="input-group-addon" ><?php echo __('Replace Attribute Contents','wp-autoblog'); ?>: </div>
                            <select class="form-control input-default"  name="keyword_replace_attribute[]">
                              <option value="1" <?php selected( 1,$JG01J30523SR07L2AO9TY612W8ZBU673E7LA579B8K290GGD9436NW53561494021E81K29L49B21641MC7Q950L157I0B10161H4CO95H4X25M867HYB54PO1FA8S1Z33DKF86CDBB2B080334247CFE18C6851F9F4553366['replace_attribute'] ); ?>><?php echo __('Yes'); ?></option>
                              <option value="0" <?php selected( 0,$JG01J30523SR07L2AO9TY612W8ZBU673E7LA579B8K290GGD9436NW53561494021E81K29L49B21641MC7Q950L157I0B10161H4CO95H4X25M867HYB54PO1FA8S1Z33DKF86CDBB2B080334247CFE18C6851F9F4553366['replace_attribute'] ); ?>><?php echo __('No'); ?></option>
                            </select>
                            <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                            <select class="form-control input-default"  name="keyword_replace_apply_to[]">
                              <option value="b" <?php selected( 'b',$JG01J30523SR07L2AO9TY612W8ZBU673E7LA579B8K290GGD9436NW53561494021E81K29L49B21641MC7Q950L157I0B10161H4CO95H4X25M867HYB54PO1FA8S1Z33DKF86CDBB2B080334247CFE18C6851F9F4553366['apply_to'] ); ?> ><?php echo __('Post Content','wp-autoblog'); ?></option>
                              <option value="a" <?php selected( 'a',$JG01J30523SR07L2AO9TY612W8ZBU673E7LA579B8K290GGD9436NW53561494021E81K29L49B21641MC7Q950L157I0B10161H4CO95H4X25M867HYB54PO1FA8S1Z33DKF86CDBB2B080334247CFE18C6851F9F4553366['apply_to'] ); ?> ><?php echo __('Post Title','wp-autoblog'); ?></option>
                              <option value="0" <?php selected( 0,$JG01J30523SR07L2AO9TY612W8ZBU673E7LA579B8K290GGD9436NW53561494021E81K29L49B21641MC7Q950L157I0B10161H4CO95H4X25M867HYB54PO1FA8S1Z33DKF86CDBB2B080334247CFE18C6851F9F4553366['apply_to'] ); ?> ><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>
                              <?php foreach($M7M7GM56G6636QS75RZ770L70K610I12H2721P93DL4306594CBFF4150B3A2B26145BE311D5FC9241225 as $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061=>$QS1TYC425QQ13555GK4640B5S1J9OVX91UP3NP91ZSICJ8KH478CIWPEZ6K22T3DI54TS112N22063C1608D6E0BAF80249C42E2BE58045522){ ?>
                                <option value="<?php echo $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061; ?>" <?php selected( $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061,$JG01J30523SR07L2AO9TY612W8ZBU673E7LA579B8K290GGD9436NW53561494021E81K29L49B21641MC7Q950L157I0B10161H4CO95H4X25M867HYB54PO1FA8S1Z33DKF86CDBB2B080334247CFE18C6851F9F4553366['apply_to'] ); ?> ><?php echo $QS1TYC425QQ13555GK4640B5S1J9OVX91UP3NP91ZSICJ8KH478CIWPEZ6K22T3DI54TS112N22063C1608D6E0BAF80249C42E2BE58045522; ?> </option>
                              <?php } ?>
                            </select>
                            <span class="input-group-btn inputdeleteBtn1">
                             <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                            </span>
                          </div>
                              <textarea class="form-control " name="keyword_replace_with[]"  rows="3" placeholder="<?php echo __('Replace With','wp-autoblog'); ?> (HTML Code)"><?php echo htmlspecialchars($JG01J30523SR07L2AO9TY612W8ZBU673E7LA579B8K290GGD9436NW53561494021E81K29L49B21641MC7Q950L157I0B10161H4CO95H4X25M867HYB54PO1FA8S1Z33DKF86CDBB2B080334247CFE18C6851F9F4553366['replace_with']); ?></textarea><br/>
                            </div>
                          <?php
 } }else{ ?>
                        <div>
                        <div class="input-group margin-b-8">
                          <div class="input-group-addon"><?php echo __('Keyword','wp-autoblog'); ?>: </div>
                          <input type="text"  class="form-control" name="keyword_replace_keyword[]"  value="" placeholder='<?php echo __('For example','wp-autoblog'); ?>: <div class="copyright">(*)</div>' >
                          <div class="input-group-addon" ><?php echo __('Replace Attribute Contents','wp-autoblog'); ?>: </div>
                          <select class="form-control input-default"  name="keyword_replace_attribute[]">
                            <option value="1"><?php echo __('Yes','wp-autoblog'); ?></option>
                            <option value="0"><?php echo __('No','wp-autoblog'); ?></option>
                          </select>
                          <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                          <select class="form-control input-default"  name="keyword_replace_apply_to[]">
                            <option value="b"><?php echo __('Post Content','wp-autoblog'); ?></option>
                            <option value="a"><?php echo __('Post Title','wp-autoblog'); ?></option>
                            <option value="0"><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>
                            <?php foreach($M7M7GM56G6636QS75RZ770L70K610I12H2721P93DL4306594CBFF4150B3A2B26145BE311D5FC9241225 as $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061=>$QS1TYC425QQ13555GK4640B5S1J9OVX91UP3NP91ZSICJ8KH478CIWPEZ6K22T3DI54TS112N22063C1608D6E0BAF80249C42E2BE58045522){ ?>
                              <option value="<?php echo $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061; ?>"><?php echo $QS1TYC425QQ13555GK4640B5S1J9OVX91UP3NP91ZSICJ8KH478CIWPEZ6K22T3DI54TS112N22063C1608D6E0BAF80249C42E2BE58045522; ?> </option>
                            <?php } ?>
                          </select>
                          <span class="input-group-btn inputdeleteBtn1">
                            <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                          </span>
                        </div>
                          <textarea class="form-control " name="keyword_replace_with[]"  rows="3" placeholder="<?php echo __('Replace With','wp-autoblog'); ?> (HTML Code)"></textarea><br/>
                        </div>
                        <?php
 } ?>
                    </div>

                    <a class="btn btn-default" data-loading-text="Loading..." id="add_keyword_replace_rules_btn" onclick="HJ9TZ94P4QA54E991B939D90200FN6LG90809817JO04A33YN93EUS26D00L59PYKO3C36CV9J801RH42J4Z6P59U4DJLVZ6IUT4PEG4N365720165950B8BDAE50AA8C9723B8358D08727()"><?php echo __('Add More','wp-autoblog'); ?></a>


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