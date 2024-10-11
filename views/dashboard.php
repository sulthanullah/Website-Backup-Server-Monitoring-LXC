<div class="container">
    <h2>Backup Server Monitoring LXC</h2>
    <table>
        <thead>
            <tr>
                <th>Backup Name</th>
                <th>Size (bytes)</th>
                <th>Last Modified</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($backups)): ?>
                <?php foreach ($backups as $backup): ?>
                <tr>
                    <td><?= htmlspecialchars($backup['name']) ?></td>
                    <td><?= htmlspecialchars($backup['size']) ?></td>
                    <td><?= htmlspecialchars($backup['last_modified']) ?></td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">No backups found in /var/backup/lxc</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>