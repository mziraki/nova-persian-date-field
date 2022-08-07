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
                this.field.asHtml = true;
                this.field.value = `<span dir="ltr">${jMoment(this.field.value).format(this.field.format || 'jYYYY/jMM/jDD HH:mm:ss')}</span>`
            }
            return this.field
        },
    },
}
</script>
