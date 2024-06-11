
/*
Template Name: Contact Page
*/
get_header();
?>
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
    <!-- タイトルテキスト -->
    <p class="text_20_1.2 text-center">資料請求、無料トライアルは以下の電話番号<br>
        または、メールフォームよりお気軽にお申し込みください。</p>
    <br>
    <!-- 電話でのお申し込み -->
    <div class="callpattern">
        <div class="callpattern_inner brandcolor_bg">
            <p>電話でのお申し込み</p>
        </div>
        <div class="callinformation">
            <div class="flex flex-row gap-2">
                <img src="./image/ico_reason_call.png" alt="">
                <p class="call_number callinformation_text_color">03-3342-9620</p>
            </div>
            <div>
                <p class="call_time callinformation_text_color">受付時間  10:00~18:00【土日祝定休日】</p>
            </div>
        </div>
    </div>
    <br>
</section>
<!-- Form -->
<?php echo do_shortcode('[contact-form-7 id="1917c30" title="コンタクトフォームテスト"]'); ?>
<?php get_footer(); ?>