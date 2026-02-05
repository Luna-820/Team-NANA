$(function () {

    // -----------------------------------------------
    // Company-Youtube最新自動更新
    // -----------------------------------------------
    const CHANNEL_ID = 'UC5uTMehOhlFGFgS4Bkpalrw';
    const MAX_VIDEOS = 3;

    async function fetchYouTubeVideos() {
        try {
            // YouTubeのRSSフィードURL
            const rssUrl = `https://www.youtube.com/feeds/videos.xml?channel_id=${CHANNEL_ID}`;

            // 別のCORSプロキシを使用
            const proxyUrl = `https://corsproxy.io/?${encodeURIComponent(rssUrl)}`;

            const response = await fetch(proxyUrl);

            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }

            const text = await response.text();

            // XMLをパース
            const parser = new DOMParser();
            const xml = parser.parseFromString(text, 'text/xml');

            // パースエラーチェック
            const parserError = xml.querySelector('parsererror');
            if (parserError) {
                throw new Error('XMLパースエラー');
            }

            // 動画情報を抽出
            const entries = xml.querySelectorAll('entry');
            const videos = [];

            // ショート動画を除外して最新3本取得
            for (let i = 0; i < entries.length && videos.length < MAX_VIDEOS; i++) {
                const entry = entries[i];

                // 動画ID取得
                let videoId = '';
                const ytVideoId = entry.querySelector('videoId');
                if (ytVideoId) {
                    videoId = ytVideoId.textContent;
                } else {
                    const idElement = entry.querySelector('id');
                    if (idElement) {
                        videoId = idElement.textContent.split(':').pop();
                    }
                }

                if (!videoId) continue;

                // タイトル取得
                const title = entry.querySelector('title')?.textContent || '';

                // ショート動画の判定（タイトルに #shorts が含まれているか確認）
                const isShort = title.toLowerCase().includes('#shorts') ||
                    title.toLowerCase().includes('#short');

                // ショート動画ならスキップ
                if (isShort) {
                    continue;
                }

                // 公開日取得
                const published = entry.querySelector('published')?.textContent || '';
                const date = new Date(published).toLocaleDateString('ja-JP', {
                    year: 'numeric',
                    month: '2-digit',
                    day: '2-digit'
                });

                // 説明文取得
                let description = '';
                const mediaGroup = entry.querySelector('group');
                if (mediaGroup) {
                    const desc = mediaGroup.querySelector('description');
                    if (desc) description = desc.textContent;
                }

                if (!description) {
                    const allDesc = entry.querySelectorAll('description');
                    if (allDesc.length > 0) {
                        description = allDesc[0].textContent;
                    }
                }

                // 説明文からもショート動画を判定
                const descIsShort = description.toLowerCase().includes('#shorts') ||
                    description.toLowerCase().includes('#short');

                if (descIsShort) {
                    continue;
                }

                const shortDesc = description.substring(0, 20) + (description.length > 20 ? '...' : '');

                // サムネイル取得
                const thumbnail = `https://i.ytimg.com/vi/${videoId}/mqdefault.jpg`;

                videos.push({
                    videoId,
                    title,
                    date,
                    description: shortDesc,
                    thumbnail,
                    url: `https://www.youtube.com/watch?v=${videoId}`
                });
            }

            displayVideos(videos);

        } catch (error) {
            console.error('YouTube動画の取得に失敗しました:', error);
            const container = document.getElementById('youtube-videos');
            if (container) {
                container.innerHTML = '<p class="error">動画の読み込みに失敗しました</p>';
            }
        }
    }

    function displayVideos(videos) {
        const container = document.getElementById('youtube-videos');

        if (!container) {
            console.error('youtube-videos要素が見つかりません');
            return;
        }

        if (videos.length === 0) {
            container.innerHTML = '<p class="no-videos">動画が見つかりませんでした</p>';
            return;
        }

        container.innerHTML = videos.map(video => `
        <div class="video-item">
        <a href="${video.url}" target="_blank" rel="noopener noreferrer">
            <div class="video-thumbnail">
            <img src="${video.thumbnail}" alt="${video.title}" loading="lazy">
            <div class="play-button">
                <svg width="68" height="48" viewBox="0 0 68 48">
                <path d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z" fill="#f00"></path>
                <path d="M 45,24 27,14 27,34" fill="#fff"></path>
                </svg>
            </div>
            </div>
            <div class="video-info">
            <p class="video-date">${video.date}</p>
            <h3 class="video-title">${video.title}</h3>
            <p class="video-description">${video.description}</p>
            <span class="video-link">視聴する >>></span>
            </div>
        </a>
        </div>
    `).join('');
    }

    // ページ読み込み時に実行
    if (document.getElementById('youtube-videos')) {
        fetchYouTubeVideos();
    }

}); 