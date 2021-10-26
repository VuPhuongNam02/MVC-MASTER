<table>
    <tbody>
        <?php foreach($data['user'] as $user): extract($user); ?>
        <tr>
            <td><?= $name ?></td>
            <td><?= $email ?></td>
            <td><?= $address ?></td>
            
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>