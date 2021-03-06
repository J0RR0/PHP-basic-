<?php /** @var \App\Data\UserDTO[] $data */ ?>

<table border="1">
    <thead>
    <tr>
        <td>Id</td>
        <td>Username</td>
        <td>FullName</td>
        <td>Birthday</td>
    </tr>
    </thead>

    <tbody>
        <?php foreach ($data as $user): ?>
        <tr>
            <td><?= $user->getId() ?></td>
            <td><?= $user->getUsername() ?></td>
            <td><?= $user->getFirstName() . " " . $user->getLastName() ?></td>
            <td><?= $user->getBornOn() ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>

</table>

Go back to your <a href="profile.php">profile</a>