<template>
    <PanelItem :index="index" :field="fieldValue"/>
</template>

<script>
import jMoment from 'moment-jalaali'

export default {
    props: ['index', 'resource', 'resourceName', 'resourceId', 'field'],

    computed: {
        fieldValue() {
            if (this.field.value) {
                this.field.value = jMoment(this.field.value).format(this.field.format || 'jYYYY/jMM/jDD')
            }
            return this.field
        },
    },
}
</script>
