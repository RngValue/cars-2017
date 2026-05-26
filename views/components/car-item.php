<li class="list-group-item p-4">
    <div class="card-body d-flex flex-column">
        <h5 class="card-title"><?php echo $model ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?php echo $make ?> <?php echo $year ?></h6>
            <p class="card-text">
            <?php if ($transmission == 'MANUAL') : ?>
                <span class="badge rounded-pill bg-warning bg-gradient text-dark"><?php echo $transmission ?></span>
            <?php else : ?>
                <span class="badge rounded-pill bg-success bg-gradient"><?php echo $transmission ?></span>
            <?php endif; ?>

            <span class="badge rounded-pill bg-primary bg-gradient"><?php echo $fuel ?></span>

            <?php if (str_contains($category, 'High-Performance')) : ?>
                <span class="badge rounded-pill bg-danger bg-gradient"><?php echo $category ?></span>
            <?php else : ?>
                <span class="badge rounded-pill bg-info bg-gradient"><?php echo $category ?></span>
            <?php endif; ?>
        </p>
    </div>
</li>