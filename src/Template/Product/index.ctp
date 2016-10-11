<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="product index large-9 medium-8 columns content">
    <h3><?= __('Product') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_combination') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nbr_img_min') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nbr_img_max') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nbr_img_row') ?></th>
                <th scope="col"><?= $this->Paginator->sort('frame_color') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_img_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_at') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($product as $product): ?>
            <tr>
                <td><?= $this->Number->format($product->id) ?></td>
                <td><?= $this->Number->format($product->id_combination) ?></td>
                <td><?= $this->Number->format($product->id_type) ?></td>
                <td><?= $this->Number->format($product->nbr_img_min) ?></td>
                <td><?= $this->Number->format($product->nbr_img_max) ?></td>
                <td><?= $this->Number->format($product->nbr_img_row) ?></td>
                <td><?= h($product->frame_color) ?></td>
                <td><?= $this->Number->format($product->id_img_type) ?></td>
                <td><?= h($product->created_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $product->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
