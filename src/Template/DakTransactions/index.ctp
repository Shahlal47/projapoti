<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Dak Transaction'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Dak Actions'), ['controller' => 'DakActions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dak Action'), ['controller' => 'DakActions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Office Organizations'), ['controller' => 'OfficeOrganizations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Office Organization'), ['controller' => 'OfficeOrganizations', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="dakTransactions index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('dak') ?></th>
            <th><?= $this->Paginator->sort('dak_action_id') ?></th>
            <th><?= $this->Paginator->sort('office_organization_id') ?></th>
            <th><?= $this->Paginator->sort('decision_taken') ?></th>
            <th><?= $this->Paginator->sort('transaction_date') ?></th>
            <th><?= $this->Paginator->sort('sender_action_owner') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($dakTransactions as $dakTransaction): ?>
        <tr>
            <td><?= $this->Number->format($dakTransaction->id) ?></td>
            <td><?= $this->Number->format($dakTransaction->dak) ?></td>
            <td>
                <?= $dakTransaction->has('dak_action') ? $this->Html->link($dakTransaction->dak_action->, ['controller' => 'DakActions', 'action' => 'view', $dakTransaction->dak_action->]) : '' ?>
            </td>
            <td>
                <?= $dakTransaction->has('office_organization') ? $this->Html->link($dakTransaction->office_organization->id, ['controller' => 'OfficeOrganizations', 'action' => 'view', $dakTransaction->office_organization->id]) : '' ?>
            </td>
            <td><?= h($dakTransaction->decision_taken) ?></td>
            <td><?= h($dakTransaction->transaction_date) ?></td>
            <td><?= $this->Number->format($dakTransaction->sender_action_owner) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $dakTransaction->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit.ctp', $dakTransaction->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dakTransaction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dakTransaction->id)]) ?>
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
