<?php
/*
Template Name: Confirm Page
*/
get_header();
?>
<?php echo do_shortcode('[]'); ?>
<section>
    <div class="contact_header brandcolor_bg">
        <div>
            <h1 class="title_03">お申し込みフォーム</h1>
        </div>
    </div>
    <!-- パンくずリスト -->
    <nav class="flex mt-2 ml-4" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
        <li class="inline-flex items-center">
            <a href="<?php echo home_url(); ?>" class="inline-flex items-center text-sm hover:text-blue-600 dark:hover:text-white">
            Top
            </a>
        </li>
        <li aria-current="page">
            <div class="flex items-center">
            >
            <span class="ms-1 text-sm">お申し込み</span>
            </div>
        </li>
        </ol>
    </nav>
</section>
