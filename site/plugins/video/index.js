panel.plugin("skeletonkit/video-block", {
    blocks: {
        video: {
            computed: {
                video() {
                    var url = this.content.url;
                    if (!url) {
                        return false;
                    }
                    var youtubePattern = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|&v=)([^#&?]*).*/;
                    var youtubeMatch = url.match(youtubePattern);
                    if (youtubeMatch) {
                        return "https://www.youtube.com/embed/" + youtubeMatch[2];
                    }
                    var vimeoPattern = /vimeo\.com\/([0-9]+)/;
                    var vimeoMatch = url.match(vimeoPattern);
                    if (vimeoMatch) {
                        return "https://player.vimeo.com/video/" + vimeoMatch[1];
                    }
                    return false;
                },
                video2() {
                    var embed = this.content.embed;
                    if (!embed) {
                        return false;
                    } else {
                        return embed;
                    }
                }
            },
            template: `
                <k-block-figure
                    :caption="content.caption"
                    :empty-text="$t('field.blocks.video.placeholder') + ' …'"
                    :is-empty="!video"
                    empty-icon="video"
                    @open="open"
                    @update="update"
                >
                    <k-aspect-ratio ratio="16/9">
                        <template v-if="content.videotoggle == 'iframe'">
                            <iframe v-if="video" :src="video" />
                        </template>
                        <template v-else>
                            <video controls :src="video2" />
                        </template>
                    </k-aspect-ratio>
                </k-block-figure>
            `
        }
    }
});