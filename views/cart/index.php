<?php
if ($productsInCart) : ?>
<table>
    <tr>
        <th>Code</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
    </tr>
    <?php foreach ($products as $product): ?>
    <tr>
        <td><?php echo $product['code'];?></td>
        <td><a href="/product/<?php echo $product['id'];?>">
                <?php echo $product['name'];?>
            </a>
        </td>
        <td><?php echo $product['price'];?></td>
        <td><?php echo $productsInCart[$product['id']];?></td>
    </tr>
    <?php endforeach;?>
    <tr>
        <td>Total:</td>
        <td><?php echo $totalPrice;?></td>
    </tr>
</table>
<?php else: ?>
    <p>Empty Cart</p>
<?php endif; ?>
