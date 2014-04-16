<h1>Blog posts</h1>
<h4><?php echo $this->Html->link('Posts Hinzufügen', array('controller' => 'posts', 'action' => 'add'))?></h4>
        <table>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Created</th>
            </tr>

            <?php foreach ($posts as $post): ?>
            <tr>
                <td><?php echo $post['Post']['id']; ?></td>
                <td><?php echo $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?></td>
                <td><?php echo $post['Post']['created']; ?></td>
                <td><?php echo $this->Html->link('editieren', array('controller' => 'posts', 'action' => 'edit', $post['Post']['id'])); ?></td>
                <td><?php echo $this->Form->postLink('löschen', array('action' => 'delete', $post['Post']['id']), array('confirm' => 'Are you sure?!')); ?></td>
            </tr>
            <?php endforeach; ?>
            <?php unset($post) ?>
        </table>

<p>Das ist meine Frontansicht vom Posts </p>