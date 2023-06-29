<nav aria-label="Page navigation">
    <ul class="pagination mt-4">
        <li class="page-item">
            <a class="page-link" href="?currentPage=<?= $currentPage - 1 ?>" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        <?php
        for ($pageNumber = 1; $pageNumber <= $nbPages; $pageNumber++) {
            $page = ($pageNumber == $currentPage) ? 'class="page-link active" aria-current="page"' : 'class="page-link"';
            echo "<li class=\"page-item\"><a href =\"?currentPage=$pageNumber\" $page>$pageNumber</a></li>";
        } ?>
        <li class="page-item">
            <a class="page-link" href="?currentPage=<?= $currentPage + 1 ?>" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>