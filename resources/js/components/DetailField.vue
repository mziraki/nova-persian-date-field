<template>
    <PanelItem :index="index" :field="field">
        <template #value>
            <p v-if="fieldHasValue || usesCustomizedDisplay" :title="field.value">
                <span dir="ltr">{{ formattedDate }}</span>
            </p>
            <p v-else>&mdash;</p>
        </template>
    </PanelItem>
</template>

<script>
import jMoment from 'moment-jalaali'
import { FieldValue } from 'laravel-nova'

export default {
    mixins: [FieldValue],

    props: ['index', 'resource', 'resourceName', 'resourceId', 'field'],

    computed: {
        formattedDate() {
            if (this.field.usesCustomizedDisplay) {
                return this.field.displayedAs
            }

            return jMoment(this.field.value).format(this.field.format || 'jYYYY/jMM/jDD')
        },
    },
}
</script>
