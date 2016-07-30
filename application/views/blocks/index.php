<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<h1><?= $block->name; ?></h1>
<form action="/blocks/cart_add" method="post">
    <!-- TODO: Add other information about each block -->
    <input type="hidden" name="block_id" value="<?= $block->id; ?>">
    <?php foreach ($products as $product): ?>
        <div class="form-group">
            <label for="product_<?= $product->id; ?>"><?= $product->name; ?></label>
            <input type="number" min="0" name="product_<?= $product->id; ?>" id="product_<?= $product->id; ?>">
        </div>
    <?php endforeach; ?>
    <input type="submit" value="В корзину">
</form>