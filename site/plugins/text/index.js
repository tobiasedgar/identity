panel.plugin("skeletonkit/text-block", {
    blocks: {
        text: {
            computed: {
                placeholder() {
                    return this.field("text", {}).placeholder;
                },
                marks() {
                    return this.field("text", {}).marks;
                },
            },
            methods: {
                focus() {
                    this.$refs.input.focus();
                }
            },
            template: `
            <k-writer
            ref="input"
            :nodes="false"
            :placeholder="placeholder"
            :marks="marks"
            :value="content.text"
            class="k-block-type-text-input"
            @input="update({ text: $event })"
          />
            `
        }
    }
});