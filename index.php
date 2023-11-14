
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <?php if(have_posts()):?>
                <?php while(have_posts()): ?>
                    <?php the_post(); ?>
                    <div class="card mb-2">
                         <header class="card-header">
                            <p class="card-header-title">
                                <?php the_title(); ?>
                            </p>
                         </header>
                        <div class="card-content">
                            <div class="content">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
