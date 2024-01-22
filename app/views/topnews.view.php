
<link rel="stylesheet" href="<?= ROOT?>/assets/css/topnews.css">
<section class="fifth_page" id="topnews">
    <div class="top_news">
        <div class="top_news_heading">
            <h2>TOP NEWS</h2>
            <a href="<?=$data['topNews'][0]['url'] ?>"> <button>See more</button></a>
        </div>
        <div class="news_container">
            <a href="<?=$data['topNews'][0]['url'] ?>">
                <div class="main_news">
                    <img src="<?=$data['topNews'][0]['urlToImage'] ?>" alt="" />
                    <h3>
                        <?=$data['topNews'][0]['title']?>
                    </h3>
                </div>
            </a>
            <?php $startingPosition = 2; 
              $subArray = array_slice($data['topNews'],$startingPosition); 
              foreach($subArray as $id => $news){?>
            <div class="sub_news">
                <img src="<?=$subArray[$id]['urlToImage'] ?>" alt="" />
                <p>
                <?=$subArray[$id]['title'] ?>
                <a class="readNews" href="<?=$subArray[$id]['url'] ?>"> - READ</a>
                </p>
                
            </div>
            <?php } ?>
        </div>
    </div>
</section>