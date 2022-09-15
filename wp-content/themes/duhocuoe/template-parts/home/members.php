<?php $members = getMembersListingArray() ;

if (count($members) == 0){
    return 0;
}
?>
<section class="member-sharing" id="member-sharing">
    <div class="container">
        <h3 class="section-title">CHIA SẺ HỌC VIÊN</h3>
        <div class="row">
            <?php ;
            if (isset($members)):
                foreach ($members as $member):?>
                    <div class="col-md-4 col-12">
                        <div class="member-item">
                            <img src="<?= $member['photo'] ?>" alt="<?= $member['name'] ?>" class="member-avt">
                            <p><?= $member['content'] ?></p>
                            <div class="member-footer"><h4 class="member-name"><?= $member['name'] ?></h4></div>
                        </div>
                    </div>

                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
