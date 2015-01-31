<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Categories</h1>
        <table>
            <tr>
                <th>Id</th>
                <th>Title</th>
            </tr>

            <?php foreach ($categories as $category): ?>
                <tr>
                    <td><?php echo $category['Category']['id']; ?></td>
                    <td>
                        <?php echo $category['Category']['name']; ?>
                        <?php echo $html->link($category['Category']['name'], 
                            array('controller' => 'Categories', 'action' => 'view', $category['Category']['id']));
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>

        </table>
    </body>
</html>
