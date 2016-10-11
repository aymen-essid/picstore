<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Product'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="product view large-9 medium-8 columns content">
    <h3><?= h($product->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Frame Color') ?></th>
            <td><?= h($product->frame_color) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($product->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Combination') ?></th>
            <td><?= $this->Number->format($product->id_combination) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Type') ?></th>
            <td><?= $this->Number->format($product->id_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nbr Img Min') ?></th>
            <td><?= $this->Number->format($product->nbr_img_min) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nbr Img Max') ?></th>
            <td><?= $this->Number->format($product->nbr_img_max) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nbr Img Row') ?></th>
            <td><?= $this->Number->format($product->nbr_img_row) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Img Type') ?></th>
            <td><?= $this->Number->format($product->id_img_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($product->created_at) ?></td>
        </tr>
    </table>
</div>
