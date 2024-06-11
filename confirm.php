<?php
/*
Template Name: Confirm Page
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
	<h1 class="my-[80px] text-center">送信内容に誤りがないか、ご確認ください。</h1>
        <section id="result">
            <div class="confirm-box">
                <table>
                    <tr>
                        <th>ご用件</th>
                        <td><span id="radioOption"></span></td>
                    </tr>
                    <tr>
                        <th>会社名</th>
                        <td><span id="company"></span></td>
                    </tr>
                    <tr>
                        <th>氏名</th>
                        <td><span id="name"></span></td>
                    </tr>
                    <tr>
                        <th>メールアドレス</th>
                        <td><span id="email"></span></td>
                    </tr>
                    <tr>
                        <th>電話番号</th>
                        <td><span id="phone"></span></td>
                    </tr>
                    <tr>
                        <th>お申し込み内容</th>
                        <td><span id="details"></span></td>
                    </tr>
                </table>
            </div>
        </section>
       <section class="btn-choice mt-[80px]" >
            <button type="button" id="to-back"><img src="/wp-content/uploads/2024/06/btn_choice_back.png" alt="" class="w-[200px] h-[auto]"></button>
            <button type="button" id="sousin"><a href="./completion.html"><img src="/wp-content/uploads/2024/06/btn_choice_sent.png" alt="" class="w-[200px] h-[auto]"></a></button>
       </section>
</section>
