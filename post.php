<?php
    include ('include/function.php');
    include 'include/config.php';
    $slug = $_GET['slug'];
    $content = file_get_contents($api_url.'/get_post/?slug='.$slug);
    if ($content == FALSE) notfound();
    $return = json_decode($content, true);
    if ($return['status'] == "error") notfound();
    $post = $return['post'];
    $author = $post['author'];

    $description = strip_tags($post['excerpt']);
?>

<?php
    $title = $post['title'];
    include( 'header.php');
?>

<div class="exploit_title">
    <h1 class="YellowText"><?=$post['title']?></h1>
</div>
<div class="category_title"><span>Category: </span> 
    <?php
        $categories = $post['categories'];
        foreach ($categories as $category) { ?>
            [ <a href="/<?=$category['slug']?>"><?=$category['title']?></a> ]
        <?php }
    ?>
    
</div>
<div class="spacer"></div>
<div class="spacer"></div>
<!--content-->
<div class="exploit_view_table post-content RedText" id='post-content'>
    <div class="post-meta">
        <span>time post: <?=$post['date']?> | font size: <span id='dec-font' href='#'>-</span> / <span id='inc-font' href='#'>+</span>
    </div>
    <?=$post['content']?>
    <div class="tags"><span class="YellowText">Tags: </span>
    <?php
        $tags = $post['tags'];
        foreach($tags as $tag) { ?>
            <span class="tag"><a href="/tag/<?=$tag['slug']?>"><?=$tag['title']?></a></span>, 
    <?php } ?>
    </div>
</div>

<div class="exploit_view_right_blocks">

    <div class="exploit_view_right_block">
        <div class="exploit_view_table_user">
            <div class="exploit_view_table_user_content">
                <div class="td">Author</div>
                <div class="td"><a href="/author/<?=$author['slug']?>"><?=$author['nickname']?></a></div>
            </div>
            <div class="exploit_view_table_user_content">
                <div class="td">BL</div>
                <div class="td">29</div>
            </div>
            <div class="exploit_view_table_user_content">
                <div class="td">Exploits</div>
                <div class="td">1</div>
            </div>
            <div class="exploit_view_table_user_content">
                <div class="td">Readers</div>
                <div class="td">0</div>
            </div>
        </div>
        <div class="exploit_view_right_block_spacer15"></div>
    </div>
    <div class="exploit_view_right_block_spacer15"></div> 

    <div class="exploit_view_right_block">
        <div class="exploit_view_table_user_content social-wiget">
            <div class="fb-like" data-href="https://dota2vnbetgroup.com" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
        </div>        
    </div>
</div>



<div class="clear"></div>

<!-- comment -->
<div class="spacer"></div>
<div class="fb-comments" data-numposts="10" colorscheme="dark" width="100%"></div>


<script>
    $(document).ready(function() {
        var curFont = parseInt($('#post-content').css('font-size'));
        $('#inc-font').click(function() {
            curFont++;
            $('#post-content').css('font-size', curFont);
        });
        $('#dec-font').click(function() {
            curFont--;
            $('#post-content').css('font-size', curFont);
        });
        
    })
</script>
<?php include( 'footer.php'); ?>