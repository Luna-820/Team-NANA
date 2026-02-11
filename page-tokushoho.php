<?php
// ページ個別のSEO設定
$page_title = "ProNavi｜特定商取引法に基づく表記";
$page_description = "株式会社NOEの特定商取引法に基づく表記。サービスの料金や支払方法、解約・返品等の重要情報を掲載。";
get_header();
?>

<div class="video-bg">
    <video src="<?php echo get_template_directory_uri(); ?>/img/leaf_bg_landscape.mp4" autoplay muted loop playsinline></video>
</div>

<main>
    <section id="fv" class="wrapper">
        <span class="section-title__en">Disclosure</span>
        <h2 class="section-title flex-left fadein2">特定商取引法に基づく表記</h2>
    </section>

    <section id="overview" class="wrapper">
        <table class="company-table">
            <tr>
                <th>販売事業者名</th>
                <td>株式会社NOE</td>
            </tr>
            <tr>
                <th>販売業者所在地</th>
                <td>〒467-0002 <br>
                    愛知県名古屋市中区丸の内3丁目15-22丸の内Usビル801号室</td>
            </tr>
            <tr>
                <th>運営統括責任者</th>
                <td>加藤大騎</td>
            </tr>
            <tr>
                <th>問い合わせ先</th>
                <td>noe.co.0126@gmail.com</td>
            </tr>
            <tr>
                <th>お支払い方法</th>
                <td>指定口座への銀行振込み、クレジットカード決済</td>
            </tr>
            <tr>
                <th>販売価格</th>
                <td>各コース詳細ページに表示された価格に基づきます。</td>
            </tr>
            <tr>
                <th>お支払い期限</th>
                <td>利用規約に記載の通りです。</td>
            </tr>
            <tr>
                <th>コース代金以外の料金</th>
                <td>
                    コース代金以外に料金がかかる場合は、コース詳細ページに別途記載いたします。<br>
                    なお、サービスの提供を受けるために必要なコンピュータ、スマートフォン、マイクやウェブカメラ、通信回線、その他の通信環境等は、お客様の費用と責任において準備し維持するものとします。</td>
            </tr>
            <tr>
                <th>返品・交換の保証</th>
                <td>返品・交換等は、サービスの特性上お受けできません。</td>
            </tr>
            <tr>
                <th>役務または商品の引渡時期</th>
                <td>契約締結後、納期については相談させていただきます。</td>
            </tr>
        </table>
    </section>
</main>

<?php get_footer(); ?>