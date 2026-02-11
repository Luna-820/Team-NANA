<footer>
    <div class="inner">
        <a href="https://line.me/R/ti/p/@420zidsx?oat_content=url" class="contact" target="_blank">
            <div class="flex">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contact.png" alt="contact" />
                <p class="small">
                    まずはLINEで無料カウンセリングから。<br />お気軽にご相談ください。
                </p>
            </div>
        </a>
        <div class="footer-bottom">
            <ul class="left">
                <li>
                    <a href="https://navigator-of-engineering.com/" target="_blank">運営会社｜株式会社NOE</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/tokushoho/')); ?>" >特定商取引法に基づく表記</a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/policy/')); ?>">プライバシーポリシー</a>
                </li>
            </ul>
            <nav class="right">
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
                    <li><a href="<?php echo esc_url(home_url('/about/')); ?>">スクール詳細</a></li>
                    <li><a href="<?php echo esc_url(home_url('/voice/')); ?>">受講生の声</a></li>
                    <li><a href="<?php echo esc_url(home_url('/company/')); ?>">会社概要</a></li>
                </ul>
            </nav>
        </div>
        <div class="copy"><small>&copy;COPYRIGHT NOE Co.ltd</small></div>

        <a href="#" class="page-top">
            <button>
                <span class="line"></span>
                <span class="to-top-text">PAGE TOP</span>
            </button>
        </a>
    </div>
</footer>

<script type="module">
    import Typebot from 'https://cdn.jsdelivr.net/npm/@typebot.io/js@0/dist/web.js'

    Typebot.initBubble({
        typebot: "customer-support-sxcmv66",
        theme: {
            button: {
                backgroundColor: "#db8405",
                iconColor: "#ffffff",
                size: "64px",
            },
            chatWindow: {
                backgroundColor: "#F8F8F8",
                maxWidth: "420px",
                maxHeight: "70vh",
            },
            placement: "right",
        },
    });

    // ===== スクロールで自動オープン =====
    let hasOpenedOnScroll = false;
    window.addEventListener("scroll", () => {
        if (hasOpenedOnScroll) return;
        const footer = document.querySelector("footer");
        if (!footer) return;
        const rect = footer.getBoundingClientRect();
        const vh = window.innerHeight || document.documentElement.clientHeight;
        // footerの上端が 画面下から ちょっと上 に入ってきたら発火
        if (rect.top < vh - 100) {
            Typebot.open();
            hasOpenedOnScroll = true;
        }
    });
</script>

<?php wp_footer(); ?> </body>

</html>