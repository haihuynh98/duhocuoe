<?php

// get children category of category has a slug 'truong'
$taxonomy = 'category';
$majorsChildren = $schoolsIDChildren= [];
if (!is_null($majorsID = term_exists('nganh-hoc', $taxonomy))) {
    $majorsChildren = get_term_children($majorsID['term_id'], $taxonomy);
}

// get children category of category has a slug 'nganh-hoc'
if (!is_null($schoolsIDID = term_exists('truong', $taxonomy))) {
    $schoolsIDChildren = get_term_children($schoolsIDID['term_id'], $taxonomy);
}
?>
<div class="tab-schools-majors">
    <ul class="nav nav-tabs">
        <li><a class="active" data-toggle="tab" href="#majors">Ngành học</a></li>
        <li><a data-toggle="tab" href="#schools">Trường</a></li>
    </ul>

    <div class="tab-content">
        <div id="majors" class="tab-pane fade in active show">
            <ul>
                <?php foreach ($majorsChildren as $majorsChild) {
                   $termItem = get_term($majorsChild, $taxonomy, ARRAY_A);
                   echo sprintf('<li><a href="%s">%s</a></li>', get_term_link($majorsChild), $termItem['name']);
                }?>
            </ul>
        </div>
        <div id="schools" class="tab-pane fade">
            <ul>
                <?php foreach ($schoolsIDChildren as $IDChild) {
                    $termItem = get_term($IDChild, $taxonomy, ARRAY_A);
                    echo sprintf('<li><a href="%s">%s</a></li>', get_term_link($IDChild), $termItem['name']);
                }?>
            </ul>
        </div>
    </div>
</div>