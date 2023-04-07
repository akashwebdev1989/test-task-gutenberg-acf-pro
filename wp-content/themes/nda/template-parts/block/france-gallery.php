<?php

/**
 * france-gallery Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'france-gallery-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}
// Create class attribute allowing for custom "className" and "align" values.
$className = 'france-gallery';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}
// Load values and assing defaults.
$block_title = get_field('block_title') ?: 'Your Block Title here...';
$list_items = get_field('list_item');
?>
<div id="<?php echo esc_attr($id); ?>" class="block-gallery <?php echo esc_attr($className); ?>">
    <div class="container">
        <?php
        if (!empty($block_title)) : ?>
            <div class="block-title">
                <h2><?php echo $block_title; ?></h2>
            </div>
        <?php
        endif;
        if (!empty($list_items)) :
        ?>
            <div class="lists">
                <?php
                foreach ($list_items as $list_item) {
                ?>
                    <div class="list-items">
                        <div class="list-images">
                            <img src="<?php echo $list_item['image']['url']; ?>" alt="<?php echo $list_item['image']['title']; ?>">
                        </div>
                        <div class="list-title">
                            <h3><?php echo $list_item['title']; ?></h3>
                        </div>
                        <div class="list-text">
                            <p><?php echo $list_item['text']; ?></p>
                        </div>
                        <div class="list-link">
                            <a href="<?php echo $list_item['button_link']['url']; ?>"><?php echo $list_item['button_link']['title'] ?></a>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        <?php
        endif;
        ?>
    </div>
</div>