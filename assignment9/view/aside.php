<aside>
    <ul>
        <?php foreach($cats as $category): ?>
            <li>
                <a href="?action=<?php echo strtolower(get_category_name($category['category_id'])) ?>"><?php echo htmlspecialchars(get_category_name($category['category_id'])); ?></a>
            </li>
        <?php endforeach; ?>
    </ul> 
</aside>