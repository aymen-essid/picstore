<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Image Type'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="imageType index large-9 medium-8 columns content">
    <h3><?= __('Image Type') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('width') ?></th>
                <th scope="col"><?= $this->Paginator->sort('height') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($imageType as $imageType): ?>
            <tr>
                <td><?= $this->Number->format($imageType->id) ?></td>
                <td><?= $this->Number->format($imageType->width) ?></td>
                <td><?= $this->Number->format($imageType->height) ?></td>
                <td><?= h($imageType->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $imageType->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $imageType->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $imageType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imageType->id)]) ?>
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
