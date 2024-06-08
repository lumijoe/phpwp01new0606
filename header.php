<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kojotrial_newtheme
 */
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>Kojo Test | WordPress Azure</title>
    <!-- css/functions.php-->
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <!-- js -->
    <!--<script src="https://cdn.tailwindcss.com"></script>  -->
    <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <!-- Font,Icon -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
    <!------------------------------- 
        header
    -------------------------------->
    <header class="">
        <div class="header-inner max-md:h-[96px] px-[5rem] max-md:px-[2rem]">
            <div class="bg-white w-[100%] flex flex-row justify-between items-center">
                <a href="<?php echo home_url(); ?>/" class="flex flex-col justify-center"><img src="https://cdn.builder.io/api/v1/image/assets/TEMP/557d909dc04bad148e9166c9181b8eb8925cdf52a22fb7912f64499ff1faec6e?apiKey=38f7627b5364403abcba366dc95bc6e8&" alt="Company logo" class="shrink-0 self-end max-w-full aspect-[5.88] w-[350px]" /></a>
                <div class="header-inner-nav flex flex-col flex-wrap justify-center">
                    <div class="w-auto justify-items-end">
                        <p class="text-2xl text-orange font-bold text-end">TEL<span class=" tracking-wider font-bold pl-2 pr-1">03-xxxx-xxxx</span></p>
                        <p class="text-[0.8rem] text-orange pl-2 text-end">受付時間  10:00~18:00【土日祝定休日】</p>
                    </div>
                    <!-- nav -->
                    <nav>
                        <ul class="flex flex-row gap-[30px] ">
                            <li><a href="#reason" target="_self" rel="noopener noreferrer">選ばれる理由</a></li>
                            <li><a href="#function" target="_self" rel="noopener noreferrer">サービス紹介</a></li>
                            <li><a href="#flow" target="_self" rel="noopener noreferrer">導入までの流れ</a></li>
                            <li><a href="#plan" target="_self" rel="noopener noreferrer">料金プラン</a></li>
                            <li><a href="#faq" target="_self" rel="noopener noreferrer">よくあるご質問</a></li>
                        </ul>
                    </nav>
                </div>
                <br>
                <div class="hamburger-menu" id="hamburgermenu-open">
							<svg xmlns="http://www.w3.org/2000/svg" width="90.289" height="64.685" viewBox="0 0 90.289 64.685">
								<g id="グループ_443" data-name="グループ 443" transform="translate(-625.7 -17)">
									<rect id="長方形_54" data-name="長方形 54" width="90.289" height="64.685" rx="32" transform="translate(625.7 17)" fill="#ff8000"/>
									<path id="menu_FILL0_wght400_GRAD0_opsz48" d="M120-692.788v-3.4h40.818v3.4Zm0-11.905v-3.4h40.818v3.4Zm0-11.905V-720h40.818v3.4Z" transform="translate(530.436 755.736)" fill="#fff"/>
								</g>
							</svg>
                </div>
            </div>
        </div>
        <!-- mobile hamburger menu -->
        <section class="sectionMobilenav w-[100%]">
            <div class="bg-white w-[85%] flex flex-col pb-[70px] mb-auto h-auto">
                <button id="hamburgermenu-close" class="btn-close">
							<svg xmlns="http://www.w3.org/2000/svg" width="26.404" height="26.404" viewBox="0 0 26.404 26.404">
								<path id="close_FILL0_wght400_GRAD0_opsz24_1_" data-name="close_FILL0_wght400_GRAD0_opsz24 (1)" d="M202.64-733.6,200-736.236,210.562-746.8,200-757.36l2.64-2.64L213.2-749.438,223.764-760l2.64,2.64L215.843-746.8,226.4-736.236l-2.64,2.641L213.2-744.157Z" transform="translate(-200 760)"/>
							</svg>
						</button>
                <div class="w-[100%] mobile-logo">
                    <img src="./image/img_logo.png" alt="">
                </div>
                <ul class="mobilenav-box">
                    <li><a href="#reason" target="_self" rel="noopener noreferrer">選ばれる理由</a></li>
                    <li><a href="#function" target="_self" rel="noopener noreferrer">サービス紹介</a></li>
                    <li><a href="#flow" target="_self" rel="noopener noreferrer">導入までの流れ</a></li>
                    <li><a href="#plan" target="_self" rel="noopener noreferrer">料金プラン</a></li>
                    <li><a href="#faq" target="_self" rel="noopener noreferrer">よくあるご質問</a></li>
                </ul>
                <div class="w-[100%] flex flex-col items-center pb-[30px] px-[2%]">
                    <p class="text-[#204d47] font-bold mobilenav-box-telnumber">TEL<span class=" tracking-wider font-bold pl-2 ">03-xxxx-xxxx</span></p>
                    <p class="text-[#204d47] text-center mobilenav-box-information">受付時間  10:00~18:00<br>【土日祝定休日】</p>
                </div>
                <div class="flex flex-col items-center gap-[30px] mx-[10%]">
                    <a href="./contact.html" target="_blank" rel="noopener noreferrer"><img src="./image/btn_service_rounded.png" alt="" class="a-shadow"></a>
                    <a href="./contact.html"><img src="./image/btn_trial_rounded.png" alt="" class="a-shadow "></a>
                </div>  
            </div>   
        </section>
    </header>
    <!------------------------------- 
        main
    -------------------------------->
    <main>