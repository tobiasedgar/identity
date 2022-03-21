panel.plugin("skeletonkit/carousel-block", {
    blocks: {
        carousel: `
        <k-block-carousel>
            <ul @dblclick="open">
                <template v-if="content.images.length === 0">
                <li />
                <li />
                <li />
                <li />
                <li />
                </template>
                <template v-else>
                <li v-for="image in content.images" :key="image.id">
                    <img :src="image.url" :alt="image.alt">
                </li>
                </template>            
            </ul>

            <k-block-data>
            <template v-if="content.togglepagination">
                <p><strong>Pagination On</strong></p>
            </template>
            <template v-else>
                <p>Pagination Off</p>
            </template>

            <template v-if="content.togglearrows">
                <p><strong>Arrows On</strong></p>
            </template>
            <template v-else>
                <p>Arrows Off</p>
            </template>
            </k-block-data>
        </k-block-cars>
      `
    }
});