<?php
/*
Template Name: Conpletion Page
*/
get_header();
?>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    border: 1px solid #bdbdbd;
    text-align: left;
    padding: 8px;
}
th {
    background-color: #D6f6ec;
    width: 50%;
}
td {
    width: 50%;
}
@media (max-width: 767px) {
    .title_03 {
        font-size:20px;
    }
    .callinformation {
        flex-direction: column;
    }
}
</style>
<section>
    <div class="contact_header brandcolor_bg">
        <div>
            <h1 class="title_03">送信完了</h1>
        </div>
    </div>

    <!-- パンくずリスト -->
    <nav class="flex mt-2 ml-4" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
        <li class="inline-flex items-center">
            <a href="./index.html" class="inline-flex items-center text-sm hover:text-blue-600 dark:hover:text-white">
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
    <div class="flex flex-col mx-[20%] justify-center">
        <p class="my-[80px] text-center">この度はお申し込み頂き誠にありがとうございます。<br><br>
            ご入力いただきましたメールアドレス宛に<br>
            確認メールを送付しております。<br><br>
            ※ご指定いただいたメールアドレスへ届いていない場合は<br>お手数をおかけいたしますが、再度、お申し込みフォームにて必要な情報をご入力ください。
        </p>
    </div>
</section>
<div>
    <a href="/"><img src="/wp-content/uploads/2024/06/btn_to_top.png" alt="" class="w-[200px] mx-auto my-8"></a>
</div>
<?php get_footer(); ?>