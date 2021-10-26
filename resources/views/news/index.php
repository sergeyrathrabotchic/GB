<?php foreach($newsList as $news): ?>
    <?php if($_GET['categoryId'] == $news['categoryId']): ?>
        <div>
            <h2>
                <a href="<?=route('news.show',['id' => $news['id']])?>">
                    <?= $news['title']?>
                </a>
            </h2>
            <p>Автор: <?= $news['author']?></p>
            <p><?= $news['deckription'][0]?></p>
        </div>
    <?php endif?>
    
<?php endforeach ?>