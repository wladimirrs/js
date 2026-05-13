<?php if (empty($users)): ?>
    <p>Es sind keine Benutzer registriert.</p> <!-- Wenn keine Nutzer eingeloggt sind -->
<?php else: ?>
    <table class="user-table">
        <thead>                         <!-- Wenn eingeloggt, entsprechende Spalten anzeigen -->
            <tr>
                <th>ID</th>
                <th>Benutzer</th>
                <th>Rolle</th>
                <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
                    <th>Aktionen</th>
                <?php endif; ?>
            </tr>
        </thead>


        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user['id'] ?></td> <!-- Für Nutzer id, user und role einfügen -->
                    <td><?= htmlspecialchars($user['user']) ?></td>
                    <td><?= htmlspecialchars($user['role']) ?></td>

                    <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?> <!-- Für admin auch Aktionen -->
                        <td>
                            <?php if ($user['id'] !== $_SESSION['user_id']): ?> <!-- Wenn ich admin, der gewählte Nutzer nicht der eingeloggte und ist user, zum Admin machen -->
                                <?php if ($user['role'] === 'user'): ?>
                                    <a href="index.php?nav=10&id=<?= $user['id'] ?>&role=admin" class="btn btn-promote">Zum Admin machen</a>
                                <?php else: ?>
                                    <a href="index.php?nav=10&id=<?= $user['id'] ?>&role=user" class="btn btn-demote">Zum User machen</a>
                                <?php endif; ?>
                        
                                <a href="index.php?nav=11&id=<?= $user['id'] ?>" class="btn btn-delete" onclick="return confirm('Sind Sie sicher, dass Sie diesen Benutzer löschen möchten?');">Löschen</a>
                            <?php endif; ?>
                        </td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>