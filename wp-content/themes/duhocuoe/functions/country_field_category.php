<?php
//add extra fields to category edit form hook
add_action('category_add_form_fields', 'add_active_country_category');
add_action('edit_category_form_fields', 'add_active_country_category');
//add extra fields to category edit form callback function
function add_active_country_category($tag)
{    //check for existing featured ID
    $t_id = $tag->term_id;
    $is_country_cat_meta = get_option("is_country_category_$t_id");
    ?>
    <div class="form-field term-description-wrap">
        <tr class="form-field">
            <th scope="row" valign="top"><label for="isCountry"><?php _e('Country'); ?></label></th>
            <td>
                <input type="checkbox" name="is_country"
                       id="isCountry" <?php echo $is_country_cat_meta == 1 ? 'checked' : ''; ?>>
                <span class="description"><?php _e('Active if this is a country'); ?></span>
            </td>
        </tr>
    </div>

    <?php
}

add_action('category_add_form_fields', 'add_field_school');
add_action('edit_category_form_fields', 'add_field_school');

function add_field_school($tag)
{    //check for existing featured ID
    $t_id = $tag->term_id;
    $taxonomy = 'category';
    if (term_exists('truong', $taxonomy)) {
        $catSchool = get_cat_ID('truong');

        $categories = get_categories(
            array('parent' => $catSchool, 'hide_empty' => 0)
        );

    }
    $school_cat_metas = explode(',', get_option("schools_category_$t_id")) ;
    ?>

    <div class="form-field term-school-wrap">
        <tr class="form-field">
            <th scope="row" valign="top"><label for="School_list"><?php _e('Schools list'); ?></label></th>
            <td>
                <table>
                    <?php foreach ($categories as $cat) :
                        $checked = '';
                        if (in_array($cat->term_id,$school_cat_metas)) {
                            $checked = 'checked';
                        }
                        ?>
                        <tr>
                            <td style="padding: 0px">
                                <input type="checkbox" name="schools_cat[]" id="School_list"
                                       value="<?php echo $cat->term_id ?>" <?php echo $checked?>>
                                <span class="school-name"><?php echo $cat->name ?></span>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </td>
        </tr>

    </div>

    <?php
}


// save extra category extra fields hook
add_action('edited_category', 'save_is_country_category_fileds');
add_action('create_category', 'save_is_country_category_fileds');
function save_is_country_category_fileds($term_id)
{
    $t_id = $term_id;

    if (isset($_POST['is_country'])) {
        $valueTermMeta = $_POST['is_country'] == 'on' ? 1 : 0;
        update_option("is_country_category_$t_id", $valueTermMeta);
    } else {
        if (!empty(get_option("is_country_category_$t_id"))) {
            delete_option("is_country_category_$t_id");
        }
    }
}

// save extra category extra fields hook
add_action('edited_category', 'save_school_category_fileds');
add_action('create_category', 'save_school_category_fileds');
function save_school_category_fileds($term_id)
{
    $t_id = $term_id;
    if (isset($_POST['schools_cat'])) {
        $valueTermMeta = $_POST['schools_cat'];
        update_option("schools_category_$t_id", implode(',', $valueTermMeta));
    } else {
        if (!empty(get_option("schools_category_$t_id"))) {
            delete_option("schools_category_$t_id");
        }
    }
}