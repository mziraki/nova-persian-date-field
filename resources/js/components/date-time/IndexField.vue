<template>
    <div :class="`text-${field.textAlign}`">
        <span v-if="field.value" class="whitespace-nowrap" dir="ltr">{{ fieldValue }}</span>
        <span v-else>&mdash;</span>
    </div>
</template>

<script>
import jMoment from 'moment-jalaali'

export default {
    props: ['resourceName', 'field'],

    computed: {
        fieldValue() {
            if (this.field.usesCustomizedDisplay) {
                return this.field.displayedAs
            }
            return this.field.value
                ? jMoment(this.field.value).format(this.field.format || 'jYYYY/jMM/jDD HH:mm:ss')
                : this.field.value
        },
    },
}
</script>
